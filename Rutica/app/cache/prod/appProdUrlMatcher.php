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

        // rutas_sugeridas
        if ($pathinfo === '/rutas_sugeridas') {
            return array (  '_controller' => 'Rutica\\RutasBundle\\Controller\\RutasSugeridasController::mostrarAction',  '_route' => 'rutas_sugeridas',);
        }

        // crea_tus_rutas
        if ($pathinfo === '/crea_tus_rutas') {
            return array (  '_controller' => 'Rutica\\RutasBundle\\Controller\\CreaTusRutasController::mostrarAction',  '_route' => 'crea_tus_rutas',);
        }

        // data_base_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'data_base_homepage')), array (  '_controller' => 'Rutica\\DataBaseBundle\\Controller\\DefaultController::indexAction',));
        }

        // index
        if (rtrim($pathinfo, '/') === '/index') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'Rutica\\AdministradorBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
