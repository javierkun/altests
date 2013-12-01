<?php
namespace ALTests\AJAXBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ALTests\AJAXBundle\Entity\actorSearch; // The actorSearch class is the same for PHP only and AJAX improved version.
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{	
	// Homepage controller action.
	// The form is created with formBuilder, altough no posting is ever done as everything is handled with AJAX page loading.
    public function indexAction(Request $request)
    {
		$defaultData = array();
		$form = $this->createFormBuilder($defaultData)
			->setAction($this->generateUrl('al_tests_ajax_search', array('name'=>'term_name', 'page'=>'page_number', 'quick'=>'quick_flag')))
			->add('name', 'text')
			->add('search', 'submit')
			->add('lucky_search', 'submit')
			->add('lucky', 'hidden', array('attr' => array('value' => '0')))
			->getForm();

		$form->handleRequest($request);
		// Posting is handled by JS for demonstration purposes.
		
	    return $this->render('ALTestsAJAXBundle:Search:index.html.twig', array('form' => $form->createView()));
    }
	
	// AJAX search controler action. List movies results for a given id and name.
	// Creates new actorSearch object and based on the actor parameters given, search @ themoviedb.org and 
	// renders an actor movie list or a list of possible actors matching the search term. Handles empty results as well.
	public function searchAction($name, Request $request, $page = 1, $quick = false)
    {
		$actors = new actorSearch();  
		$response = $actors->searchActor($name, $page);
		
		if ($response['total_results'] == 0) 
			return $this->render('ALTestsAJAXBundle:Search:info.html.twig', array('info' => "0 results found. Please try again!."));	
		else
			if (($response['total_results'] == 1) or $quick) {
				// Either we found 1 exact match or we're doing a lucky search.
				if($actors->getFirstActor()) { // This ensures that an actor is selected in the class.
					$response_movies = $actors->searchMoviesActor();			
					$render = $this->render('ALTestsAJAXBundle:Search:results.html.twig', array('response' => $response_movies));					
					return $render;
				}
				else // Tried to select an actor, and a search hasn't occurred.					
					return $this->render('ALTestsAJAXBundle:Search:info.html.twig', array('info' => "An unhandled error occurred. Please try again!."));	
			}
			else {
					// More than 1 actor matches the term search.
					$render = $this->render('ALTestsAJAXBundle:Search:actors.html.twig', array('response' => $response, 'name' => $name));					
					return $render;
			}
    }
		
	// AJAX express search controler action. List movies results for a given id and name.
	public function easearchAction($id, $name, Request $request)
    {
		// validating if someone type directly on URL. Basic validation, we will display results given by themoviedb.org given id/name pair.	
		$validate_name = preg_replace('/\s+/', '', $name);
		
		if(!empty($validate_name)) {
			$actors = new actorSearch();
			$response_movies = $actors->searchMoviesActor((int)$id, $name);			
			$render = $this->render('ALTestsAJAXBundle:Search:results.html.twig', array('response' => $response_movies));
			
			return $render;
		}
		$render = $this->render('ALTestsAJAXBundle:Search:info.html.twig', array('info' => 'Please type something to search for!.'));		
		return $render;		
    }	
}

