<?php

/* RutasBundle:Principal:quienesSomos.html.twig */
class __TwigTemplate_e6fd2d1357837578330d23b1b44561137da9eca8042fef9c531986c425d4827c extends Twig_Template
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
        // line 2
        echo "

<!-- Título de página -->
<div class=\"section section-breadcrumbs\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1>¿Quiénes somos?</h1>
            </div>
        </div>
    </div>
</div>
<!-- Título de página -->

<div class=\"section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8\">
                <div align=\"center\" class=\"embed-responsive embed-responsive-16by9\">\t
                    <video class=\"embed-responsive-item\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/video/Turismo en Costa Rica.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\" controls></video>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <h2>Rutica</h2>
                <h3>Empresa dedicada a que nuestro país sea reconocido internacionalmente</h3>
                <p>
                    Rutica es una empresa costarricense comprometida con los empresarios y organizaciones que se dedican al área de turismo en nuestro país, con el fin de que tanto turistas extranjeros y nacionales conoscan más acerca de las bellezas con las que cuenta Costa Rica.
                </p>
                <p>
                    El objetivo principal de rutica es que alrededor de todo el mundo se conozcan todas las áreas en donde se puede disfrutar al máximo en nuestro país entre amigos y familiares.
                </p>\t\t\t\t\t\t\t\t\t\t
            </div>
        </div>
    </div>
</div>

<hr>\t\t

<div class=\"section\">
    <div class=\"container\">
        <div class=\"row\">

            <!-- Miembros de Rutica -->
            <div class=\"col-md-4 col-sm-6\">
                <div class=\"team-member\">\t\t\t\t\t\t\t
                    <div class=\"team-member-image\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/team/1_1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></div>
                    <div class=\"team-member-info\">
                        <ul>\t\t\t\t\t\t\t\t\t
                            <li class=\"team-member-name\">
                                Jorge Castillo Vindas\t\t\t\t\t\t\t\t\t\t
                            </li>\t\t\t\t\t\t\t\t\t
                        </ul>
                    </div>
                </div>
            </div>\t\t\t\t\t

            <div class=\"col-md-4 col-sm-6\">
                <div class=\"team-member\">\t\t\t\t\t\t\t
                    <div class=\"team-member-image\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/team/2_1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></div>
                    <div class=\"team-member-info\">
                        <ul>
                            <li class=\"team-member-name\">
                                Aaron Quirós Masis\t\t\t\t\t\t\t\t\t\t
                            </li>\t\t\t\t\t\t\t\t\t
                        </ul>
                    </div>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-6\">
                <div class=\"team-member\">
                    <div class=\"team-member-image\"><img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/team/3_1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></div>
                    <div class=\"team-member-info\">
                        <ul>
                            <li class=\"team-member-name\">
                                Olman Ureña Herrera\t\t\t\t\t\t\t\t\t\t
                            </li>\t\t\t\t\t\t\t\t\t
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin de los miembros de rutica -->\t\t

";
        // line 88
        echo "\t
";
        // line 89
        $this->env->loadTemplate("RutasBundle:Base:footer.html.twig")->display($context);
        echo " \t
";
        // line 90
        echo " \t\t

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "RutasBundle:Principal:quienesSomos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 90,  124 => 89,  121 => 88,  103 => 73,  87 => 60,  71 => 47,  42 => 21,  21 => 2,  19 => 1,);
    }
}
