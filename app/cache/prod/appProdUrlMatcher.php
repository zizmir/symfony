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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/pla')) {
            if (0 === strpos($pathinfo, '/platform')) {
                // oc_platform_home
                if ($pathinfo === '/platform') {
                    return array (  '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::indexAction',  '_route' => 'oc_platform_home',);
                }

                // oc_platform_view
                if (0 === strpos($pathinfo, '/platform/advert') && preg_match('#^/platform/advert/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_platform_view')), array (  '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::viewAction',));
                }

            }

            if (0 === strpos($pathinfo, '/plaform')) {
                // oc_platform_add
                if ($pathinfo === '/plaform/add') {
                    return array (  '_controllers' => 'OCPlatformBundle:Advert:add',  '_route' => 'oc_platform_add',);
                }

                // oc_platform_slug
                if (preg_match('#^/plaform/(?P<year>[^/]++)/(?P<slug>[^/\\.]++)\\.(?P<format>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_platform_slug')), array (  '_controllers' => 'OCPlatformBundle:Advert:viewSlug',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
