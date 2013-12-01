<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/PHP')) {
            // al_tests_php_homepage
            if (rtrim($pathinfo, '/') === '/PHP') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'al_tests_php_homepage');
                }

                return array (  '_controller' => 'ALTests\\PHPBundle\\Controller\\DefaultController::indexAction',  '_route' => 'al_tests_php_homepage',);
            }

            // al_tests_php_search
            if (0 === strpos($pathinfo, '/PHP/search') && preg_match('#^/PHP/search/(?P<name>[^/]++)/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'al_tests_php_search')), array (  '_controller' => 'ALTests\\PHPBundle\\Controller\\DefaultController::searchAction',));
            }

            // al_tests_php_qsearch
            if (0 === strpos($pathinfo, '/PHP/qsearch') && preg_match('#^/PHP/qsearch/(?P<name>[^/]++)/(?P<quick>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'al_tests_php_qsearch')), array (  '_controller' => 'ALTests\\PHPBundle\\Controller\\DefaultController::searchAction',));
            }

            // al_tests_php_esearch
            if (0 === strpos($pathinfo, '/PHP/esearch') && preg_match('#^/PHP/esearch/(?P<id>[^/]++)/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'al_tests_php_esearch')), array (  '_controller' => 'ALTests\\PHPBundle\\Controller\\DefaultController::esearchAction',));
            }

        }

        if (0 === strpos($pathinfo, '/AJAX')) {
            // al_tests_ajax_homepage
            if (rtrim($pathinfo, '/') === '/AJAX') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'al_tests_ajax_homepage');
                }

                return array (  '_controller' => 'ALTests\\AJAXBundle\\Controller\\DefaultController::indexAction',  '_route' => 'al_tests_ajax_homepage',);
            }

            // al_tests_ajax_search
            if (0 === strpos($pathinfo, '/AJAX/search') && preg_match('#^/AJAX/search/(?P<name>[^/]++)/(?P<page>[^/]++)/(?P<quick>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'al_tests_ajax_search')), array (  '_controller' => 'ALTests\\AJAXBundle\\Controller\\DefaultController::searchAction',));
            }

            // al_tests_ajax_esearch
            if (0 === strpos($pathinfo, '/AJAX/easearch') && preg_match('#^/AJAX/easearch/(?P<id>[^/]++)/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'al_tests_ajax_esearch')), array (  '_controller' => 'ALTests\\AJAXBundle\\Controller\\DefaultController::easearchAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
