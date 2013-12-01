<?php

namespace ALTests\PHPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ALTests\PHPBundle\Entity\actorSearch;

class DefaultController extends Controller
{
	// Simple form builder with appropiate links for their actions and redirection handling.
	// input: Controller Request
	// output: Array specifying if returning a form or a redirection.
	private function getForm(Request $request)
	{
		// Form creation
		$defaultData = array();
		$form = $this->createFormBuilder($defaultData)
			->add('name', 'text')
			->add('search', 'submit')
			->add('lucky_search', 'submit')
			->getForm();

		$form->handleRequest($request);
		
		// Form Validation and action handling
		if ($form->isValid()) {
			$data = $form->getData();
			$validate_name = preg_replace('/\s+/', '', $data['name']);
			
			if(!empty($validate_name)) {
				
				if ($form->get('search')->isClicked()) 
					return array('is_form' => false, 'results' => $this->redirect($this->generateUrl('al_tests_php_search', array('name' => $data['name'], 'page' => 1))));	
					
				if ($form->get('lucky_search')->isClicked()) 
					return array('is_form' => false, 'results' => $this->redirect($this->generateUrl('al_tests_php_qsearch', array('name' => $data['name'], 'quick' => 'true'))));	
			}
			else {
				// Empty search handling.
				
				$this->get('session')->getFlashBag()->add(
					'flash',
					'Please type something to search for!.'
        		);
				return array('is_form' => false, 'results' => $this->redirect($this->generateUrl('al_tests_php_homepage', array('request' => null))));
			}
		}		
		
		return array('is_form' => true, 'results' => $form);
	}
	
	// Homepage controller action.
	// using the form creation, determines if just needs to render the index twig or if a redirection already occurred.
    public function indexAction(Request $request)
    {
		$results = $this->getForm($request);
		
		if($results['is_form'])
	        return $this->render('ALTestsPHPBundle:Search:index.html.twig', array('form' => $results['results']->createView()));
		else
			return $results['results'];
    }
	
	// Search controller action.
	// Creates new actorSearch object and based on the actor, search @ themoviedb.org and the parameters given, 
	// renders an actor movie list, an list of possible actors matching the search term and handles empty results.	
	public function searchAction($name, Request $request, $quick = false, $page = 1)
    {
		$actors = new actorSearch();
		$response = $actors->searchActor($name, $page);
		
		if ($response['total_results'] == 0) {
			// No actors found.
			$this->get('session')->getFlashBag()->add(
				'flash',
				'0 results found. Please try again!.'
        	);
			
		}
		else
			if (($response['total_results'] == 1) or $quick) {
				// Either we found 1 exact match or we're doing a lucky search.
				if($actors->getFirstActor()) { // This ensures that an actor is selected in the class.
					$response_movies = $actors->searchMoviesActor();			
	        		$results = $this->getForm($request);
											
					if($results['is_form'])
						return $this->render('ALTestsPHPBundle:Search:results.html.twig', array('response' => $response_movies, 'form' => $results['results']->createView()));
					else
						return $results['results'];										
				}
				else
				{
					// Tried to select an actor, and a search hasn't occurred.
					$this->get('session')->getFlashBag()->add(
						'flash',
						'An unhandled error occurred. Please try again!.'
					);
				}
			}
			else {
					// More than 1 actor matches the term search.
					$results = $this->getForm($request);

					if($results['is_form'])
						return $this->render('ALTestsPHPBundle:Search:actors.html.twig', array('response' => $response, 'name' => $name, 'form' => $results['results']->createView()));
					else
						return $results['results'];	
					
			}
		
		return $this->redirect($this->generateUrl('al_tests_php_homepage', array('request' => null)));
    }
	
	// Express search controler action. List movies results for a given id and name.
	public function esearchAction($id, $name, Request $request)
    {
		// validating if someone type directly on URL. Basic validation, we will display results given by themoviedb.org given id/name pair.
		
		$validate_name = preg_replace('/\s+/', '', $name);
		
		if(!empty($validate_name)) {
			$actors = new actorSearch();
			$response_movies = $actors->searchMoviesActor((int)$id, $name);
			$results = $this->getForm($request);
			
			if($results['is_form'])
				return $this->render('ALTestsPHPBundle:Search:results.html.twig', array('response' => $response_movies, 'form' => $results['results']->createView()));
			else
				return $results['results'];		
		}
		
		$this->get('session')->getFlashBag()->add(
			'flash',
			'Please type something to search for!.'
		);
		return $this->redirect($this->generateUrl('al_tests_php_homepage', array('request' => null)));
		
    }
	
}
