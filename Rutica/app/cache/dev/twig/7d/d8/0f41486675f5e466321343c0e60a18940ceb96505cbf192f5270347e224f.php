<?php

/* RutasBundle:Base:footer.html.twig */
class __TwigTemplate_7dd80f41486675f5e466321343c0e60a18940ceb96505cbf192f5270347e224f extends Twig_Template
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
        echo "\t<footer>
\t    <div class=\"footer\">
\t    \t<div class=\"container\">
\t\t\t
\t\t    \t<div class=\"row\">
\t\t\t\t
\t\t    \t\t<div class=\"col-footer col-md-4 col-xs-6\">
\t\t    \t\t\t<h3>Contáctenos</h3>
\t\t    \t\t\t<p class=\"contact-us-details\">
\t        \t\t\t\t<b>Dirección:</b> San José, Costa Rica<br/>
\t        \t\t\t\t<b>Teléfono:</b> +(506) 22243462<br/>
\t        \t\t\t\t<b>Fax:</b> +(506) 45678910<br/>
\t        \t\t\t\t<b>Email:</b> <a href=\"mailto:info@rutica.com\">info@rutica.com</a>
\t        \t\t\t</p>
\t\t    \t\t</div>\t\t\t\t
\t\t    \t\t<div class=\"col-footer col-md-4 col-xs-6\">
\t\t    \t\t\t<h3>Redes Sociales</h3>
\t\t\t\t\t\t<p>Puedes seguirnos y contactarnos en nuestras redes sociales y aprovechar de exclusivas promociones.</p>
\t\t    \t\t\t<div>
\t\t    \t\t\t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/icons/facebook.png"), "html", null, true);
        echo "\" width=\"32\" alt=\"Facebook\">
\t\t    \t\t\t\t<img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/icons/twitter.png"), "html", null, true);
        echo "\" width=\"32\" alt=\"Twitter\">
\t\t    \t\t\t\t<img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/icons/linkedin.png"), "html", null, true);
        echo "\" width=\"32\" alt=\"LinkedIn\">\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t    \t\t</div>
\t\t    \t\t<div class=\"col-footer col-md-4 col-xs-6\">
\t\t    \t\t\t<h3>Sobre Rutica</h3>
\t\t    \t\t\t\t<p>Somos una empresa comprometida con los turistas, empresarios, organizaciones con el fin del que Costa Rica se promocione y se proyecte más en el mundo.</p>
\t\t    \t\t</div>

\t\t    \t</div>\t\t    \t
\t\t    </div>
\t    </div>
\t</footer>
";
    }

    public function getTemplateName()
    {
        return "RutasBundle:Base:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 23,  44 => 22,  40 => 21,  19 => 2,);
    }
}
