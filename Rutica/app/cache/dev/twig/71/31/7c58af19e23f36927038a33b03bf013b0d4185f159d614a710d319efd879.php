<?php

/* DataBaseBundle:RutaSugerida:index.html.twig */
class __TwigTemplate_71317c58af19e23f36927038a33b03bf013b0d4185f159d614a710d319efd879 extends Twig_Template
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
        $this->env->loadTemplate("AdministradorBundle:Default:adminHeader.html.twig")->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 85
        $this->env->loadTemplate("AdministradorBundle:Default:adminFooter.html.twig")->display($context);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li ><a href=\"home.html\">Inicio</a></li>
                    
                    <li ><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getUrl("sitio");
        echo "\">Sitios turísticos</a></li>
                    <li class=\"active\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getUrl("rutasugerida");
        echo "\">Rutas</a></li>
                    
                    <li><a href=\"contactenos.html\">Salir</a></li>                    
                </ul>
            </div>

        </div>
    </header><!--/header-->

     <!-- Título de página -->
\t\t<div class=\"section section-breadcrumbs\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h1>Lista de Rutas</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Fin Título de página --> 
                
                \t\t<!-- Fin Título de página --> 
 <center>
        <div class=\"row\">
            <div class =\"col-md-6\" style=\"margin-left: 300px;\">
                <table class=\"table table-hover\" data-toggle=\"table\" data-search=\"true\" style=\"width:100%\">

                    <thead>
                        <tr>

                            <th>Nombre</th>
                            <th>Distancia</th>
                            <th>Precio Total</th>
                            <th>Tiempo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
        ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 48
            echo "            <tr>
                <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rutasugerida_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</a></td>
                
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "distancia", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "precioTotal", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "tiempo", array()), "H:i"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                 
                   
                        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rutasugerida_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">editar</a>
                    
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
                </table>

                        <ul class=\"pager\">
                            <li><a href=\"#\">Anterior</a></li>
                            <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("rutasugerida_new");
        echo "\">Nueva Ruta</a></li>
                            <li><a href=\"#\">Siguiente</a></li>
                        </ul>

            </div>



        </div>

    </div>

</div>
</center>
  
";
    }

    public function getTemplateName()
    {
        return "DataBaseBundle:RutaSugerida:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 69,  127 => 64,  115 => 58,  107 => 53,  103 => 52,  99 => 51,  92 => 49,  89 => 48,  85 => 47,  44 => 9,  40 => 8,  34 => 4,  31 => 3,  27 => 85,  25 => 3,  22 => 2,  20 => 1,);
    }
}
