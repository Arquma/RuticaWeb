<?php

/* RutasBundle:Rutas:sugeridas.html.twig */
class __TwigTemplate_6019529ef02f3260713a0d107f65698072c8a6c0fb9f47122b35adabdddfd6cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("RutasBundle:Base:header.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RutasBundle:Base:header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "\tRutica - Rutas Sugeridas
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
  ";
        // line 12
        $this->displayParentBlock("body", $context, $blocks);
        // line 13
        echo "
\t";
        // line 14
        echo " 
\t\t<div class=\"section section-breadcrumbs\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h1>Rutas sugeridas</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        // line 24
        echo " 

\t<div class=\"section\">
\t    <div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t";
        // line 32
        echo "\t\t\t\t\t
\t\t\t\t\t\t<table class=\"table table-hover\" data-toggle=\"table\" data-search=\"true\" style=\"width:100%\">

   \t\t\t\t\t\t\t<thead>
   \t\t\t\t\t\t\t\t<tr>
        \t\t\t\t\t\t\t<th data-field=\"id\">Id</th>
        \t\t\t\t\t\t\t<th data-field=\"nombre\">Nombre</th>
        \t\t\t\t\t\t\t<th data-field=\"distancia\">Distancia</th>
        \t\t\t\t\t\t\t<th data-field=\"precio\">Precio</th>
       \t\t\t\t\t\t\t\t<th data-field=\"provincia\">Provincia</th>
       \t\t\t\t\t\t\t\t<th data-field=\"tiempo\">tiempo</th>
    \t\t\t\t\t\t\t</tr>
    \t\t\t\t\t\t</thead>

    \t\t\t\t\t\t<tbody>
    \t\t\t\t\t\t\t
    \t\t\t\t\t\t\t<tr>
    \t\t\t\t\t\t\t\t<td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ruta1"]) ? $context["ruta1"] : $this->getContext($context, "ruta1")), "id", array()), "html", null, true);
        echo "</td>
    \t\t\t\t\t\t\t\t<td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ruta1"]) ? $context["ruta1"] : $this->getContext($context, "ruta1")), "nombre", array()), "html", null, true);
        echo "</td>
    \t\t\t\t\t\t\t\t<td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ruta1"]) ? $context["ruta1"] : $this->getContext($context, "ruta1")), "distancia", array()), "html", null, true);
        echo "</td>
    \t\t\t\t\t\t\t\t<td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ruta1"]) ? $context["ruta1"] : $this->getContext($context, "ruta1")), "precio", array()), "html", null, true);
        echo "</td>
    \t\t\t\t\t\t\t\t<td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ruta1"]) ? $context["ruta1"] : $this->getContext($context, "ruta1")), "provincia", array()), "html", null, true);
        echo "</td>
    \t\t\t\t\t\t\t\t<td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ruta1"]) ? $context["ruta1"] : $this->getContext($context, "ruta1")), "tiempo", array()), "html", null, true);
        echo "</td>
    \t\t\t\t\t\t\t</tr>
    \t\t\t\t\t\t\t
    \t\t\t\t\t\t\t<tr>
    \t\t\t\t\t\t\t\t<td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ruta2"]) ? $context["ruta2"] : $this->getContext($context, "ruta2")), "id", array()), "html", null, true);
        echo "</td>
    \t\t\t\t\t\t\t\t<td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ruta2"]) ? $context["ruta2"] : $this->getContext($context, "ruta2")), "nombre", array()), "html", null, true);
        echo "</td>
    \t\t\t\t\t\t\t\t<td>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ruta2"]) ? $context["ruta2"] : $this->getContext($context, "ruta2")), "distancia", array()), "html", null, true);
        echo "</td>
    \t\t\t\t\t\t\t\t<td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ruta2"]) ? $context["ruta2"] : $this->getContext($context, "ruta2")), "precio", array()), "html", null, true);
        echo "</td>
    \t\t\t\t\t\t\t\t<td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ruta2"]) ? $context["ruta2"] : $this->getContext($context, "ruta2")), "provincia", array()), "html", null, true);
        echo "</td>
    \t\t\t\t\t\t\t\t<td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ruta2"]) ? $context["ruta2"] : $this->getContext($context, "ruta2")), "tiempo", array()), "html", null, true);
        echo "</td>
    \t\t\t\t\t\t\t</tr>
    \t\t\t\t\t\t\t    \t\t\t\t\t\t\t
    \t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
        // line 70
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
                    <!-- Mapa -->
\t\t\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m34!1m12!1m3!1d7859.933826055709!2d-84.07980560988867!3d9.936710986346734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m19!3e0!4m5!1s0x8fa0e366d24d3d1b%3A0x86bd02c7707db21e!2sTeatro+Nacional+de+Costa+Rica%2C+San+Jos%C3%A9!3m2!1d9.933129!2d-84.076942!4m5!1s0x8fa0e4aabcf16c1f%3A0x9968a5c10a33d6eb!2sMuseo+Nacional+de+Costa+Rica%2C+Cuesta+de+Moras%2C+San+Jos%C3%A9!3m2!1d9.932602!2d-84.071015!4m5!1s0x8fa0e4a028084f77%3A0xe474e090ba7dc78f!2sMuseo+de+los+ni%C3%B1os+de+costa+rica%2C+San+Jos%C3%A9!3m2!1d9.941272!2d-84.080326!5e0!3m2!1ses!2scr!4v1432659181123\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\"></iframe>
                    <!-- Mapa -->\t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 83
        echo "\t\t";
        echo "\t
\t\t";
        // line 84
        $this->env->loadTemplate("RutasBundle:Base:footer.html.twig")->display($context);
        echo " \t
\t";
        // line 86
        echo "
";
    }

    public function getTemplateName()
    {
        return "RutasBundle:Rutas:sugeridas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 86,  170 => 84,  166 => 83,  152 => 70,  143 => 63,  139 => 62,  135 => 61,  131 => 60,  127 => 59,  123 => 58,  116 => 54,  112 => 53,  108 => 52,  104 => 51,  100 => 50,  96 => 49,  77 => 32,  68 => 24,  56 => 14,  53 => 13,  51 => 12,  48 => 11,  45 => 10,  40 => 6,  37 => 5,  11 => 2,);
    }
}
