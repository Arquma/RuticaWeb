<?php

/* RutasBundle:Base:header.html.twig */
class __TwigTemplate_044a25c317f578c32c5004757021a4f3f6bb2d7a30a17f0f62959d9705439ea5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "\tRutica
";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "
\t";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">    
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/css/bootstrap-table.css"), "html", null, true);
        echo "\">

    ";
        // line 18
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/css/main.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/css/custom.css"), "html", null, true);
        echo "\" >

    <script src=\"//use.edgefonts.net/bebas-neue.js\"></script>

    ";
        // line 24
        echo "    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
\t<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/css/icomoon-social.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t
\t<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/js/modernizr-2.6.2-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
    
";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "
";
        // line 36
        echo "    <header class=\"navbar navbar-inverse navbar-fixed-top\" role=\"banner\">
        <div class=\"container\">
            <div class=\"navbar-header\">

                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>                

                <a class=\"navbar-brand\" href=\"\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\"></a>

            </div>

            <div class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a></li>
                    <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("sitios");
        echo "\">Sitios turísticos</a></li>
                    <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("rutas_sugeridas");
        echo "\">Rutas sugeridas</a></li>
                    <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("crea_tus_rutas");
        echo "\">Crea tus rutas</a></li> 
                    <li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("mapa_del_sitio");
        echo "\">Mapa del sitio</a></li>
                    <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("quienes_somos");
        echo "\">¿Quienes somos?</a></li>
                </ul>
            </div>
        </div>
    </header>
";
        // line 64
        echo "
";
    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        // line 69
        echo "    
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/js/bootstrap-table.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/js/scrolling-nav.js"), "html", null, true);
        echo "\"></script>

    <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/googlemaps/js/maps.js"), "html", null, true);
        echo "\"></script> 

";
    }

    public function getTemplateName()
    {
        return "RutasBundle:Base:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 79,  183 => 76,  179 => 75,  174 => 73,  170 => 72,  166 => 71,  162 => 69,  159 => 68,  154 => 64,  146 => 58,  142 => 57,  138 => 56,  134 => 55,  130 => 54,  126 => 53,  117 => 47,  104 => 36,  101 => 34,  98 => 33,  91 => 28,  86 => 26,  82 => 25,  79 => 24,  72 => 19,  67 => 18,  62 => 15,  58 => 14,  53 => 13,  50 => 11,  47 => 10,  42 => 6,  39 => 5,  11 => 2,);
    }
}
