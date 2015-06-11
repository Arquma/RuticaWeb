<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // rutas_sugeridas
        if ($pathinfo === '/rutas_sugeridas') {
            return array (  '_controller' => 'Rutica\\RutasBundle\\Controller\\RutasSugeridasController::mostrarAction',  '_route' => 'rutas_sugeridas',);
        }

        // crea_tus_rutas
        if ($pathinfo === '/crea_tus_rutas') {
            return array (  '_controller' => 'Rutica\\RutasBundle\\Controller\\CreaTusRutasController::mostrarAction',  '_route' => 'crea_tus_rutas',);
        }

        // home
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'Rutica\\RutasBundle\\Controller\\PrincipalController::mostrarAction',  '_route' => 'home',);
        }

        // contactenos
        if ($pathinfo === '/contactenos') {
            return array (  '_controller' => 'Rutica\\RutasBundle\\Controller\\ContactenosController::mostrarAction',  '_route' => 'contactenos',);
        }

        // quienes_somos
        if ($pathinfo === '/quienes_somos') {
            return array (  '_controller' => 'Rutica\\RutasBundle\\Controller\\QuienesSomosController::mostrarAction',  '_route' => 'quienes_somos',);
        }

        // sitios
        if ($pathinfo === '/sitios') {
            return array (  '_controller' => 'Rutica\\RutasBundle\\Controller\\SitiosController::mostrarAction',  '_route' => 'sitios',);
        }

        if (0 === strpos($pathinfo, '/rutasugerida')) {
            // rutasugerida
            if (rtrim($pathinfo, '/') === '/rutasugerida') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'rutasugerida');
                }

                return array (  '_controller' => 'Rutica\\DataBaseBundle\\Controller\\RutaSugeridaController::indexAction',  '_route' => 'rutasugerida',);
            }

            // rutasugerida_show
            if (preg_match('#^/rutasugerida/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rutasugerida_show')), array (  '_controller' => 'Rutica\\DataBaseBundle\\Controller\\RutaSugeridaController::showAction',));
            }

            // rutasugerida_new
            if ($pathinfo === '/rutasugerida/new') {
                return array (  '_controller' => 'Rutica\\DataBaseBundle\\Controller\\RutaSugeridaController::newAction',  '_route' => 'rutasugerida_new',);
            }

            // rutasugerida_create
            if ($pathinfo === '/rutasugerida/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_rutasugerida_create;
                }

                return array (  '_controller' => 'Rutica\\DataBaseBundle\\Controller\\RutaSugeridaController::createAction',  '_route' => 'rutasugerida_create',);
            }
            not_rutasugerida_create:

            // rutasugerida_edit
            if (preg_match('#^/rutasugerida/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rutasugerida_edit')), array (  '_controller' => 'Rutica\\DataBaseBundle\\Controller\\RutaSugeridaController::editAction',));
            }

            // rutasugerida_update
            if (preg_match('#^/rutasugerida/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_rutasugerida_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rutasugerida_update')), array (  '_controller' => 'Rutica\\DataBaseBundle\\Controller\\RutaSugeridaController::updateAction',));
            }
            not_rutasugerida_update:

            // rutasugerida_delete
            if (preg_match('#^/rutasugerida/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_rutasugerida_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rutasugerida_delete')), array (  '_controller' => 'Rutica\\DataBaseBundle\\Controller\\RutaSugeridaController::deleteAction',));
            }
            not_rutasugerida_delete:

        }

        if (0 === strpos($pathinfo, '/sitio')) {
            // sitio
            if (rtrim($pathinfo, '/') === '/sitio') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sitio');
                }

                return array (  '_controller' => 'Rutica\\DataBaseBundle\\Controller\\SitioController::indexAction',  '_route' => 'sitio',);
            }

            // sitio_show
            if (preg_match('#^/sitio/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitio_show')), array (  '_controller' => 'Rutica\\DataBaseBundle\\Controller\\SitioController::showAction',));
            }

            // sitio_new
            if ($pathinfo === '/sitio/new') {
                return array (  '_controller' => 'Rutica\\DataBaseBundle\\Controller\\SitioController::newAction',  '_route' => 'sitio_new',);
            }

            // sitio_create
            if ($pathinfo === '/sitio/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_sitio_create;
                }

                return array (  '_controller' => 'Rutica\\DataBaseBundle\\Controller\\SitioController::createAction',  '_route' => 'sitio_create',);
            }
            not_sitio_create:

            // sitio_edit
            if (preg_match('#^/sitio/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitio_edit')), array (  '_controller' => 'Rutica\\DataBaseBundle\\Controller\\SitioController::editAction',));
            }

            // sitio_update
            if (preg_match('#^/sitio/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_sitio_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitio_update')), array (  '_controller' => 'Rutica\\DataBaseBundle\\Controller\\SitioController::updateAction',));
            }
            not_sitio_update:

            // sitio_delete
            if (preg_match('#^/sitio/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_sitio_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitio_delete')), array (  '_controller' => 'Rutica\\DataBaseBundle\\Controller\\SitioController::deleteAction',));
            }
            not_sitio_delete:

        }

        // data_base_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'data_base_homepage')), array (  '_controller' => 'Rutica\\DataBaseBundle\\Controller\\DefaultController::indexAction',));
        }

        // ainicio
        if ($pathinfo === '/ainicio') {
            return array (  '_controller' => 'Rutica\\AdministradorBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ainicio',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Rutica\\AdministradorBundle\\Controller\\LoginController::indexAction',  '_route' => 'login',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
