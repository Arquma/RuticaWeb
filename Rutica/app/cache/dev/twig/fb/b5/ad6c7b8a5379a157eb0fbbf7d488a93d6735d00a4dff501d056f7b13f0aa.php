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
        echo "<br><br><br><br>


";
        // line 6
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
        return array (  26 => 6,  21 => 3,  19 => 2,);
    }
}
