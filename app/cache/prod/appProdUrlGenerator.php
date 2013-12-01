<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'al_tests_php_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ALTests\\PHPBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/PHP/',    ),  ),  4 =>   array (  ),),
        'al_tests_php_search' => array (  0 =>   array (    0 => 'name',    1 => 'page',  ),  1 =>   array (    '_controller' => 'ALTests\\PHPBundle\\Controller\\DefaultController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    2 =>     array (      0 => 'text',      1 => '/PHP/search',    ),  ),  4 =>   array (  ),),
        'al_tests_php_qsearch' => array (  0 =>   array (    0 => 'name',    1 => 'quick',  ),  1 =>   array (    '_controller' => 'ALTests\\PHPBundle\\Controller\\DefaultController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'quick',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    2 =>     array (      0 => 'text',      1 => '/PHP/qsearch',    ),  ),  4 =>   array (  ),),
        'al_tests_php_esearch' => array (  0 =>   array (    0 => 'id',    1 => 'name',  ),  1 =>   array (    '_controller' => 'ALTests\\PHPBundle\\Controller\\DefaultController::esearchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/PHP/esearch',    ),  ),  4 =>   array (  ),),
        'al_tests_ajax_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ALTests\\AJAXBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/AJAX/',    ),  ),  4 =>   array (  ),),
        'al_tests_ajax_search' => array (  0 =>   array (    0 => 'name',    1 => 'page',    2 => 'quick',  ),  1 =>   array (    '_controller' => 'ALTests\\AJAXBundle\\Controller\\DefaultController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'quick',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    3 =>     array (      0 => 'text',      1 => '/AJAX/search',    ),  ),  4 =>   array (  ),),
        'al_tests_ajax_esearch' => array (  0 =>   array (    0 => 'id',    1 => 'name',  ),  1 =>   array (    '_controller' => 'ALTests\\AJAXBundle\\Controller\\DefaultController::easearchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/AJAX/easearch',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
