<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'event_collection_operation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Olla\\Api\\Controller\\Controller',    '_resource' => 'App\\Entity\\Event',    '_action' => 'Olla\\Platform\\Action\\CollectionAction',    '_operation' => 'event_collection_operation',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/events',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event_item_operation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Olla\\Api\\Controller\\Controller',    '_resource' => 'App\\Entity\\Event',    '_action' => 'Olla\\Platform\\Action\\ItemAction',    '_operation' => 'event_item_operation',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/events',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event_create_operation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Olla\\Api\\Controller\\Controller',    '_resource' => 'App\\Entity\\Event',    '_action' => 'Olla\\Platform\\Action\\CreateAction',    '_operation' => 'event_create_operation',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/events',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event_update_operation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Olla\\Api\\Controller\\Controller',    '_resource' => 'App\\Entity\\Event',    '_action' => 'Olla\\Platform\\Action\\UpdateAction',    '_operation' => 'event_update_operation',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/events',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event_delete_operation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Olla\\Api\\Controller\\Controller',    '_resource' => 'App\\Entity\\Event',    '_action' => 'Olla\\Platform\\Action\\DeleteAction',    '_operation' => 'event_delete_operation',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/events',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'simple_collection_operation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Olla\\Api\\Controller\\Controller',    '_resource' => 'App\\Entity\\Simple',    '_action' => 'Olla\\Platform\\Action\\CollectionAction',    '_operation' => 'simple_collection_operation',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/simples',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'simple_item_operation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Olla\\Api\\Controller\\Controller',    '_resource' => 'App\\Entity\\Simple',    '_action' => 'Olla\\Platform\\Action\\ItemAction',    '_operation' => 'simple_item_operation',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/simples',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'simple_create_operation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Olla\\Api\\Controller\\Controller',    '_resource' => 'App\\Entity\\Simple',    '_action' => 'Olla\\Platform\\Action\\CreateAction',    '_operation' => 'simple_create_operation',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/simples',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'simple_update_operation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Olla\\Api\\Controller\\Controller',    '_resource' => 'App\\Entity\\Simple',    '_action' => 'Olla\\Platform\\Action\\UpdateAction',    '_operation' => 'simple_update_operation',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/simples',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'simple_delete_operation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Olla\\Api\\Controller\\Controller',    '_resource' => 'App\\Entity\\Simple',    '_action' => 'Olla\\Platform\\Action\\DeleteAction',    '_operation' => 'simple_delete_operation',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/simples',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_collection_operation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Olla\\Api\\Controller\\Controller',    '_resource' => 'App\\Entity\\User',    '_action' => 'Olla\\Platform\\Action\\CollectionAction',    '_operation' => 'user_collection_operation',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_item_operation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Olla\\Api\\Controller\\Controller',    '_resource' => 'App\\Entity\\User',    '_action' => 'Olla\\Platform\\Action\\ItemAction',    '_operation' => 'user_item_operation',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_create_operation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Olla\\Api\\Controller\\Controller',    '_resource' => 'App\\Entity\\User',    '_action' => 'Olla\\Platform\\Action\\CreateAction',    '_operation' => 'user_create_operation',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_update_operation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Olla\\Api\\Controller\\Controller',    '_resource' => 'App\\Entity\\User',    '_action' => 'Olla\\Platform\\Action\\UpdateAction',    '_operation' => 'user_update_operation',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_delete_operation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Olla\\Api\\Controller\\Controller',    '_resource' => 'App\\Entity\\User',    '_action' => 'Olla\\Platform\\Action\\DeleteAction',    '_operation' => 'user_delete_operation',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
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
