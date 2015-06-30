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
        // line 37
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

                ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 67
            echo "                    <div class=\"col-md-4 col-sm-6\">
                        <figure>
                            ";
            // line 69
            $context["foo"] = ("bundles/templateboostrap/img/sitios/" . $this->getAttribute($context["entity"], "imagen", array()));
            echo "   

                            <img src=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo"))), "html", null, true);
            echo "\" alt=\"\" height=\"250px\" width=\"400px\" href=\"#ventanaModalDescripcionSitio\" class=\"btn btn-primary\" data-toggle=\"modal\"/>
                            <figcaption>
                                <h3>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</h3>
                                <span>TODO</span>
                            </figcaption>
                        </figure>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "            </ul>
        </div>
        <ul class=\"pager\">
            <li><a href=\"#\">Previous</a></li>
            <li><a href=\"#\">Next</a></li>
        </ul>

    </div>
</div>

";
        // line 90
        echo "\t
";
        // line 91
        $this->env->loadTemplate("RutasBundle:Base:footer.html.twig")->display($context);
        echo " \t
";
        // line 92
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
        return array (  139 => 92,  135 => 91,  132 => 90,  120 => 79,  108 => 73,  103 => 71,  98 => 69,  94 => 67,  90 => 66,  58 => 37,  21 => 2,  19 => 1,);
    }
}
