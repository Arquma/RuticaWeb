<?php

/* DataBaseBundle:Sitio:index.html.twig */
class __TwigTemplate_d7bd383b28d981b72e6ed11c618ca9f7dd3d96052ac4713763c31401cc2b8b05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->env->loadTemplate("AdministradorBundle:Default:adminHeader.html.twig")->display($context);
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 82
        echo "    
";
        // line 83
        $this->env->loadTemplate("AdministradorBundle:Default:adminFooter.html.twig")->display($context);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li ><a href=\"home.html\">Inicio</a></li>
                    
                    <li class=\"active\"><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("sitio");
        echo "\">Sitios turísticos</a></li>
                    <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("rutasugerida");
        echo "\">Rutas</a></li>
                    
                    <li><a href=\"contactenos.html\">Salir</a></li>                    
                </ul>
            </div>

        </div>
    </header><!--/header-->
    <div class=\"section section-breadcrumbs\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h1>Sitios Turísticos</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
    </div>
    <center>
        <div class=\"row\">
            <div class =\"col-md-6\" style=\"margin-left: 300px;\">
                <table class=\"table table-hover\" data-toggle=\"table\" data-search=\"true\" style=\"width:100%\">

                    <thead>
                        <tr>

                            <th>Nombre</th>

                            <th>Longitud</th>
                            <th>Latitud</th>
                            <th>Precio</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 46
            echo "                            <tr>
                                <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sitio_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</a></td>

                                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "longitud", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "latitud", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "precio", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <ul>
                                        
                                        <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sitio_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">editar</a>
                                       
                                    </ul>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                    </tbody>
                </table>
                    
                    <ul class=\"pager\">
\t\t\t\t  <li><a href=\"#\">Anterior</a></li>
\t\t\t\t  <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("sitio_new");
        echo "\">Nuevo Sitio</a></li>
\t\t\t\t  <li><a href=\"#\">Siguiente</a></li>
\t\t\t\t</ul>

            </div>



        </div>

    </div>

</div>
</center>

    ";
    }

    public function getTemplateName()
    {
        return "DataBaseBundle:Sitio:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 66,  128 => 61,  116 => 55,  109 => 51,  105 => 50,  101 => 49,  94 => 47,  91 => 46,  87 => 45,  50 => 11,  46 => 10,  40 => 6,  37 => 4,  33 => 83,  30 => 82,  28 => 4,  25 => 3,  23 => 2,  20 => 1,);
    }
}
