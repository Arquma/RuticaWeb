<?php

/* AdministradorBundle:Default:inicio.html.twig */
class __TwigTemplate_fbb5ad6c7b8a5379a157eb0fbbf7d488a93d6735d00a4dff501d056f7b13f0aa extends Twig_Template
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
        echo "

<div class=\"collapse navbar-collapse\">
    <ul class=\"nav navbar-nav navbar-right\">
        <li class=\"active\"><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("ainicio");
        echo "\">Inicio</a></li>

        <li ><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getUrl("sitio");
        echo "\">Sitios turísticos</a></li>
        <li ><a href=\"";
        // line 10
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


            <ul class=\"grid cs-style-2\"> 
                ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ultimoSitios"]) ? $context["ultimoSitios"] : $this->getContext($context, "ultimoSitios")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 36
            echo "                    <div class=\"col-md-4 col-sm-6\">
                        <figure>
                            ";
            // line 38
            $context["foo"] = ("imagenes_sitios/" . $this->getAttribute($context["entity"], "imagen", array()));
            echo "   

                            <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo"))), "html", null, true);
            echo "\" alt=\"\" height=\"250px\" width=\"400px\" href=\"#ventanaModalDescripcionSitio\" data-toggle=\"modal\" data-test=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "imagen", array()), "html", null, true);
            echo "\" 
                                 data-desc=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
            echo "\" data-nombre=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "\" data-provincia=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id_provincia", array()), "html", null, true);
            echo "\"
                                 data-actividad=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id_actividad", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\"/>

                            <figcaption>
                                <h3>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</h3>
                                ";
            // line 46
            if (($this->getAttribute($context["entity"], "id_provincia", array()) == 1)) {
                // line 47
                echo "                                    <span>San José</span><br>
                                ";
            }
            // line 49
            echo "                                ";
            if (($this->getAttribute($context["entity"], "id_provincia", array()) == 2)) {
                // line 50
                echo "                                    <span>Alajuela</span><br>
                                ";
            }
            // line 52
            echo "                                ";
            if (($this->getAttribute($context["entity"], "id_provincia", array()) == 3)) {
                // line 53
                echo "                                    <span>Cartago</span><br>
                                ";
            }
            // line 55
            echo "                                ";
            if (($this->getAttribute($context["entity"], "id_provincia", array()) == 4)) {
                // line 56
                echo "                                    <span>Heredia</span><br>
                                ";
            }
            // line 58
            echo "                                ";
            if (($this->getAttribute($context["entity"], "id_provincia", array()) == 5)) {
                // line 59
                echo "                                    <span>Puntarenas</span><br>
                                ";
            }
            // line 61
            echo "                                ";
            if (($this->getAttribute($context["entity"], "id_provincia", array()) == 6)) {
                // line 62
                echo "                                    <span>Guanacaste</span><br>
                                ";
            }
            // line 64
            echo "                                ";
            if (($this->getAttribute($context["entity"], "id_provincia", array()) == 7)) {
                // line 65
                echo "                                    <span>Limón</span><br>
                                ";
            }
            // line 67
            echo "                            </figcaption>
                        </figure>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            </ul>
        </div>
    </div>
</div>


";
        // line 77
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
        return array (  168 => 77,  160 => 71,  151 => 67,  147 => 65,  144 => 64,  140 => 62,  137 => 61,  133 => 59,  130 => 58,  126 => 56,  123 => 55,  119 => 53,  116 => 52,  112 => 50,  109 => 49,  105 => 47,  103 => 46,  99 => 45,  91 => 42,  83 => 41,  77 => 40,  72 => 38,  68 => 36,  64 => 35,  36 => 10,  32 => 9,  27 => 7,  21 => 3,  19 => 2,);
    }
}
