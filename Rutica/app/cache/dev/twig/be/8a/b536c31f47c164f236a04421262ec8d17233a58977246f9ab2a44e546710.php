<?php

/* AdministradorBundle:Default:inicio.html.twig */
class __TwigTemplate_be8ab536c31f47c164f236a04421262ec8d17233a58977246f9ab2a44e546710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->loadTemplate("AdministradorBundle:Default:adminHeader.html.twig")->display($context);
        // line 3
        echo " <div class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"active\"><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getUrl("ainicio");
        echo "\">Inicio</a></li>
                    
                    <li ><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("sitio");
        echo "\">Sitios turísticos</a></li>
                    <li ><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getUrl("rutasugerida");
        echo "\">Rutas</a></li>
                    
                    <li><a href=\"contactenos.html\">Salir</a></li>                    
                </ul>
            </div>

        </div>
    </header><!--/header-->
    <br><br>
    
<!-- Sección de los nuevos sitios turísticos -->\t

<div class=\"section section-white\">
    <div class=\"container\">
        <div class=\"row\">
            <br><br>
            <div class=\"section-title\">
                <h1>Últimos sitios turísticos ingresados</h1>
            </div>


            <ul class=\"grid cs-style-3\">
                <div class=\"col-md-4 col-sm-6\">
                    <figure>
                        <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/sitios/1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        <figcaption>
                            <h3>Bosque nuboso</h3>
                            <h3>monteverde</h3>
                            <span>Puntarenas</span>\t\t\t\t\t\t\t
                            <a href=\"#ventanaModalDescripcionSitio\" class=\"btn btn-primary\" data-toggle=\"modal\">Visítalo</a>
                        </figcaption>
                    </figure>
                </div>\t
                <div class=\"col-md-4 col-sm-6\">
                    <figure>
                        <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/sitios/2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        <figcaption>
                            <h3>Playa Nosara</h3>
                            <span>Guanacaste</span>
                            <a href=\"#ventanaModalDescripcionSitio\" class=\"btn btn-primary\" data-toggle=\"modal\">Visítalo</a>
                        </figcaption>
                    </figure>
                </div>
                <div class=\"col-md-4 col-sm-6\">
                    <figure>
                        <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/sitios/3.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        <figcaption>
                            <h3>Parque Nacional</h3>
                            <h3>Marino Ballena</h3>
                            <span>Puntarenas</span>
                            <a href=\"#ventanaModalDescripcionSitio\" class=\"btn btn-primary\" data-toggle=\"modal\">Visítalo</a>
                        </figcaption>
                    </figure>
                </div>
                <div class=\"col-md-4 col-sm-6\">
                    <figure>
                        <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/sitios/4.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        <figcaption>
                            <h3>Parque Recreativo</h3>
                            <h3>Los Chorros</h3>
                            <span>Alajuela</span>
                            <a href=\"#ventanaModalDescripcionSitio\" class=\"btn btn-primary\" data-toggle=\"modal\">Visítalo</a>
                        </figcaption>
                    </figure>
                </div>
                <div class=\"col-md-4 col-sm-6\">
                    <figure>
                        <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/sitios/5.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        <figcaption>
                            <h3>Parque Nacional Tortuguero</h3>
                            <span>Limón</span>
                            <a href=\"#ventanaModalDescripcionSitio\" class=\"btn btn-primary\" data-toggle=\"modal\">Visítalo</a>

                        </figcaption>
                    </figure>
                </div>
                <div class=\"col-md-4 col-sm-6\">
                    <figure>
                        <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/sitios/6.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        <figcaption>
                            <h3>Playa Cocal</h3>
                            <span>Puntarenas</span>
                            <a href=\"#ventanaModalDescripcionSitio\" class=\"btn btn-primary\" data-toggle=\"modal\">Visítalo</a>
                        </figcaption>
                    </figure>
                </div>
            </ul>
        </div>
    </div>
</div>

    
";
        // line 100
        $this->env->loadTemplate("AdministradorBundle:Default:adminFooter.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "AdministradorBundle:Default:inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 100,  130 => 86,  116 => 75,  102 => 64,  88 => 53,  75 => 43,  61 => 32,  34 => 8,  30 => 7,  25 => 5,  21 => 3,  19 => 2,);
    }
}
