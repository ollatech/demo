<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        elseif (0 === strpos($pathinfo, '/_')) {
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
