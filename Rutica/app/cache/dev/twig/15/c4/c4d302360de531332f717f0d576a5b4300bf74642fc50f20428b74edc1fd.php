<?php

/* AdministradorBundle:Default:adminHeader.html.twig */
class __TwigTemplate_15c4c4d302360de531332f717f0d576a5b4300bf74642fc50f20428b74edc1fd extends Twig_Template
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
        echo "
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

<<<<<<< HEAD
    <title>BASICA! A Free Bootstrap3 HTML5 CSS3 Template by Vactual Art</title>
=======
    <title>Rutica</title>
>>>>>>> interfaz_admin

    <!-- Bootstrap Core CSS -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<<<<<<< HEAD
=======
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">    
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/css/bootstrap-table.css"), "html", null, true);
        echo "\">

>>>>>>> interfaz_admin


    <!-- Custom CSS -->
\t<link href=\"";
<<<<<<< HEAD
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 26
=======
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 29
>>>>>>> interfaz_admin
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
\t<script src=\"";
<<<<<<< HEAD
        // line 28
=======
        // line 31
>>>>>>> interfaz_admin
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("use.edgefonts.net/bebas-neue.js"), "html", null, true);
        echo "\"></script>


    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
\t
\t <link href=\"";
<<<<<<< HEAD
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/css/icomoon-social.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
         <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<script src=\"";
        // line 36
=======
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/css/icomoon-social.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
         <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<script src=\"";
        // line 39
>>>>>>> interfaz_admin
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr-2.6.2-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
\t

</head>

<body>
        <!--[if lt IE 7]>
            <p class=\"chromeframe\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

    <header class=\"navbar navbar-inverse navbar-fixed-top\" role=\"banner\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\"><img src=\"";
<<<<<<< HEAD
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/logo.png"), "html", null, true);
        echo "\" alt=\"Basica\"></a>
            </div>
            <div class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"active\"><a href=\"index.html\">Home</a></li>
                    <li><a href=\"about-us.html\">About Us</a></li>
                    <li><a href=\"services.html\">Services</a></li>
                    <li><a href=\"portfolio.html\">Portfolio</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Pages <i class=\"icon-angle-down\"></i></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">Dropdown Menu 1</a></li>
                            <li><a href=\"#\">Dropdown Menu 2</a></li>
                            <li><a href=\"#\">Dropdown Menu 3</a></li>
                            <li><a href=\"#\">Dropdown Menu 4</a></li>
                            <li><a href=\"#\">Dropdown Menu 5</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\">Privacy Policy</a></li>
                            <li><a href=\"#\">Terms of Use</a></li>
                        </ul>
                    </li>
                    <li><a href=\"blog.html\">Blog</a></li> 
                    <li><a href=\"contact-us.html\">Contact</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

=======
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/logo.png"), "html", null, true);
        echo "\" alt=\"Basica\"></a>
            </div>
          
>>>>>>> interfaz_admin
";
    }

    public function getTemplateName()
    {
        return "AdministradorBundle:Default:adminHeader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  96 => 56,  73 => 36,  69 => 35,  65 => 34,  56 => 28,  51 => 26,  47 => 25,  40 => 21,  19 => 2,);
=======
        return array (  105 => 59,  82 => 39,  78 => 38,  74 => 37,  65 => 31,  60 => 29,  56 => 28,  48 => 23,  44 => 22,  40 => 21,  19 => 2,);
>>>>>>> interfaz_admin
    }
}
