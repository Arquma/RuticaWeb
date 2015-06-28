<?php

/* RutasBundle:Principal:mapadelsitio.html.twig */
class __TwigTemplate_5a6857a346d68d7abf7f9aa46e42a984a5d7d7279e3ad587889a80504c404dc3 extends Twig_Template
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
        echo "\t

<!-- Título de página -->
<div class=\"section section-breadcrumbs\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1>Mapa del Sitio</h1>
            </div>
        </div>
    </div>
</div>
<!-- Título de página -->

<map name=\"mapeo\"> 
    <area alt=\"Home\" shape=\"circle\" coords=\"515,165,100\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\"> 
    <area alt=\"Sitios Turísticos\" shape=\"circle\" coords=\"125,470,100\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("sitios");
        echo "\"> 
    <area alt=\"Crear Rutas\" shape=\"circle\" coords=\"385,625,100\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("crea_tus_rutas");
        echo "\"> 
    <area alt=\"Rutas Sugeridas\" shape=\"circle\" coords=\"635,615,95\" href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("rutas_sugeridas");
        echo "\">
    <area alt=\"¿Quiénes somos?\" shape=\"circle\" coords=\"870,475,100\" href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("quienes_somos");
        echo "\"> 
    
</map> 
<div align=\"center\">
    <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/mapaDelSitio/MapaDelSitio.PNG"), "html", null, true);
        echo "\"  width=\"1000\" height=\"800\" usemap=\"#mapeo\"/>
</div>
<br> 
      
";
        // line 28
        echo "\t
";
        // line 29
        $this->env->loadTemplate("RutasBundle:Base:footer.html.twig")->display($context);
        echo " \t
";
        // line 30
        echo " 
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "RutasBundle:Principal:mapadelsitio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 30,  70 => 29,  67 => 28,  60 => 24,  53 => 20,  49 => 19,  45 => 18,  41 => 17,  37 => 16,  19 => 1,);
    }
}
