<?php

/* RutasBundle:Principal:sitiosTuristicos.html.twig */
class __TwigTemplate_9771e1f6e8693d087a776da8ae10077e30ac0b5d43d77d3f843e24c977b4565e extends Twig_Template
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
        // line 1
        $this->env->loadTemplate("RutasBundle:Base:header.html.twig")->display($context);
        // line 2
        echo "
<!-- Título de página -->
<div class=\"section section-breadcrumbs\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1>Sitios Turísticos</h1>
            </div>
        </div>
    </div>
</div>
<!-- Título de página -->\t\t

<div class=\"section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <h2>Lista de sitios turísticos registrados</h2>
                <h3>playa, montaña y diferentes locaciones para turistear</h3>\t\t\t\t\t
            </div>
        </div>
    </div>
</div>\t
<div class=\"container\">
    <div class=\"modal fade\" id=\"ventanaModalDescripcionSitio\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <!--Header del modal-->
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title \">Bosque nuboso Monteverde</h4>   
                </div>
                <!--Contenido de la ventana-->
                <div class=\"modal-body\" align=\"center\">
                    <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/sitios/1.jpg"), "html", null, true);
        echo "\" width=\"550\" height=\"350\" title=\"Destino\" alt=\"\" />
                </div>
                <div>
                    <p>Provincia: Puntarenas</p>
                    <p>Actividad: Aventura</p>
                    <p>Descrición: Con un bosque tropical nuboso mundialmente famoso la Reserva Biológica Monteverde 
                        es una de las áreas protegidas privadas más importantes de Costa Rica. Con un 90% de selva 
                        virgen su biodiversidad de ecosistemas reúne a unos 70.000 amantes de la naturaleza al año 
                        provenientes de diversos países. </p>
                </div>

                <!--Footer de la ventana-->
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Cerrar</button>
                </div>
            </div>
        </div>


    </div>

</div>

<div class=\"section\">
    <div class=\"container\">
        <div class=\"row\">

            <ul class=\"grid cs-style-2\">
                <div class=\"col-md-4 col-sm-6\">
                    <figure>
                        <img src=\"";
        // line 66
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
        // line 77
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
        // line 87
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
        // line 98
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
        // line 109
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
        // line 119
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
                        

        <ul class=\"pager\">
            <li><a href=\"#\">Previous</a></li>
            <li><a href=\"#\">Next</a></li>
        </ul>

    </div>
</div>
";
        // line 140
        echo "\t
";
        // line 141
        $this->env->loadTemplate("RutasBundle:Base:footer.html.twig")->display($context);
        echo " \t
";
        // line 142
        echo " \t\t

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "RutasBundle:Principal:sitiosTuristicos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 142,  184 => 141,  181 => 140,  158 => 119,  145 => 109,  131 => 98,  117 => 87,  104 => 77,  90 => 66,  57 => 36,  21 => 2,  19 => 1,);
    }
}
