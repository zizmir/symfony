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
    private static $declaredRoutes = array(
        'oc_platform_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platform',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platform_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/platform/advert',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platform_add' => array (  0 =>   array (  ),  1 =>   array (    '_controllers' => 'OCPlatformBundle:Advert:add',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/plaform/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platform_slug' => array (  0 =>   array (    0 => 'year',    1 => 'slug',    2 => 'format',  ),  1 =>   array (    '_controllers' => 'OCPlatformBundle:Advert:viewSlug',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => 'format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'slug',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'year',    ),    3 =>     array (      0 => 'text',      1 => '/plaform',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
