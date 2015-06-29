<?php

/* RutasBundle:Rutas:test.html.twig */
class __TwigTemplate_fd6709214b6a12f5141c47692fc5341e100d680f67c875a439663499d67bea64 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>

  <head>
    <title>Test</title>   
    <meta charset=\"utf-8\">  
  </head>

  <body>

    ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sitios"]) ? $context["sitios"] : $this->getContext($context, "sitios")));
        foreach ($context['_seq'] as $context["_key"] => $context["sitio"]) {
            echo "          
      <p>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
            echo "</p>      
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sitio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "RutasBundle:Rutas:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 14,  37 => 12,  31 => 11,  19 => 1,);
    }
}
