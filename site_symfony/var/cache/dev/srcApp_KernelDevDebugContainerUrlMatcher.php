<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/' => array(array(array('_route' => 'app_test_test', '_controller' => 'App\\Controller\\TestController::test'), null, null, null, false, false, null)),
            '/tmp_route/test' => array(array(array('_route' => 'app_test_bli', '_controller' => 'App\\Controller\\TestController::bli'), null, null, null, false, false, null)),
            '/test_sql' => array(array(array('_route' => 'app_test_test_sql', '_controller' => 'App\\Controller\\TestController::test_sql'), null, null, null, false, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/route_arg/([^/]++)(*:26)'
                .')/?$}sDu',
        );
        $this->dynamicRoutes = array(
            26 => array(array(array('_route' => 'app_test_test_argument', '_controller' => 'App\\Controller\\TestController::test_argument'), array('argument'), null, null, false, true, null)),
        );
    }
}
