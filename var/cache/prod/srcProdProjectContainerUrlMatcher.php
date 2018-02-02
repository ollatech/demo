<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/events')) {
                // event_collection_operation
                if ('/api/events' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_event_collection_operation;
                    }

                    return array (  '_controller' => 'Olla\\Api\\Controller\\Controller',  '_resource' => 'App\\Entity\\Event',  '_action' => 'Olla\\Platform\\Action\\CollectionAction',  '_operation' => 'event_collection_operation',  '_route' => 'event_collection_operation',);
                }
                not_event_collection_operation:

                // event_item_operation
                if (preg_match('#^/api/events/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_event_item_operation;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_item_operation')), array (  '_controller' => 'Olla\\Api\\Controller\\Controller',  '_resource' => 'App\\Entity\\Event',  '_action' => 'Olla\\Platform\\Action\\ItemAction',  '_operation' => 'event_item_operation',));
                }
                not_event_item_operation:

                // event_create_operation
                if ('/api/events' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_event_create_operation;
                    }

                    return array (  '_controller' => 'Olla\\Api\\Controller\\Controller',  '_resource' => 'App\\Entity\\Event',  '_action' => 'Olla\\Platform\\Action\\CreateAction',  '_operation' => 'event_create_operation',  '_route' => 'event_create_operation',);
                }
                not_event_create_operation:

                // event_update_operation
                if (preg_match('#^/api/events/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_event_update_operation;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_update_operation')), array (  '_controller' => 'Olla\\Api\\Controller\\Controller',  '_resource' => 'App\\Entity\\Event',  '_action' => 'Olla\\Platform\\Action\\UpdateAction',  '_operation' => 'event_update_operation',));
                }
                not_event_update_operation:

                // event_delete_operation
                if (preg_match('#^/api/events/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_event_delete_operation;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_delete_operation')), array (  '_controller' => 'Olla\\Api\\Controller\\Controller',  '_resource' => 'App\\Entity\\Event',  '_action' => 'Olla\\Platform\\Action\\DeleteAction',  '_operation' => 'event_delete_operation',));
                }
                not_event_delete_operation:

            }

            elseif (0 === strpos($pathinfo, '/api/simples')) {
                // simple_collection_operation
                if ('/api/simples' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_simple_collection_operation;
                    }

                    return array (  '_controller' => 'Olla\\Api\\Controller\\Controller',  '_resource' => 'App\\Entity\\Simple',  '_action' => 'Olla\\Platform\\Action\\CollectionAction',  '_operation' => 'simple_collection_operation',  '_route' => 'simple_collection_operation',);
                }
                not_simple_collection_operation:

                // simple_item_operation
                if (preg_match('#^/api/simples/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_simple_item_operation;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'simple_item_operation')), array (  '_controller' => 'Olla\\Api\\Controller\\Controller',  '_resource' => 'App\\Entity\\Simple',  '_action' => 'Olla\\Platform\\Action\\ItemAction',  '_operation' => 'simple_item_operation',));
                }
                not_simple_item_operation:

                // simple_create_operation
                if ('/api/simples' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_simple_create_operation;
                    }

                    return array (  '_controller' => 'Olla\\Api\\Controller\\Controller',  '_resource' => 'App\\Entity\\Simple',  '_action' => 'Olla\\Platform\\Action\\CreateAction',  '_operation' => 'simple_create_operation',  '_route' => 'simple_create_operation',);
                }
                not_simple_create_operation:

                // simple_update_operation
                if (preg_match('#^/api/simples/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_simple_update_operation;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'simple_update_operation')), array (  '_controller' => 'Olla\\Api\\Controller\\Controller',  '_resource' => 'App\\Entity\\Simple',  '_action' => 'Olla\\Platform\\Action\\UpdateAction',  '_operation' => 'simple_update_operation',));
                }
                not_simple_update_operation:

                // simple_delete_operation
                if (preg_match('#^/api/simples/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_simple_delete_operation;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'simple_delete_operation')), array (  '_controller' => 'Olla\\Api\\Controller\\Controller',  '_resource' => 'App\\Entity\\Simple',  '_action' => 'Olla\\Platform\\Action\\DeleteAction',  '_operation' => 'simple_delete_operation',));
                }
                not_simple_delete_operation:

            }

            elseif (0 === strpos($pathinfo, '/api/users')) {
                // user_collection_operation
                if ('/api/users' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_user_collection_operation;
                    }

                    return array (  '_controller' => 'Olla\\Api\\Controller\\Controller',  '_resource' => 'App\\Entity\\User',  '_action' => 'Olla\\Platform\\Action\\CollectionAction',  '_operation' => 'user_collection_operation',  '_route' => 'user_collection_operation',);
                }
                not_user_collection_operation:

                // user_item_operation
                if (preg_match('#^/api/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_user_item_operation;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_item_operation')), array (  '_controller' => 'Olla\\Api\\Controller\\Controller',  '_resource' => 'App\\Entity\\User',  '_action' => 'Olla\\Platform\\Action\\ItemAction',  '_operation' => 'user_item_operation',));
                }
                not_user_item_operation:

                // user_create_operation
                if ('/api/users' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_user_create_operation;
                    }

                    return array (  '_controller' => 'Olla\\Api\\Controller\\Controller',  '_resource' => 'App\\Entity\\User',  '_action' => 'Olla\\Platform\\Action\\CreateAction',  '_operation' => 'user_create_operation',  '_route' => 'user_create_operation',);
                }
                not_user_create_operation:

                // user_update_operation
                if (preg_match('#^/api/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_user_update_operation;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update_operation')), array (  '_controller' => 'Olla\\Api\\Controller\\Controller',  '_resource' => 'App\\Entity\\User',  '_action' => 'Olla\\Platform\\Action\\UpdateAction',  '_operation' => 'user_update_operation',));
                }
                not_user_update_operation:

                // user_delete_operation
                if (preg_match('#^/api/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_user_delete_operation;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete_operation')), array (  '_controller' => 'Olla\\Api\\Controller\\Controller',  '_resource' => 'App\\Entity\\User',  '_action' => 'Olla\\Platform\\Action\\DeleteAction',  '_operation' => 'user_delete_operation',));
                }
                not_user_delete_operation:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
