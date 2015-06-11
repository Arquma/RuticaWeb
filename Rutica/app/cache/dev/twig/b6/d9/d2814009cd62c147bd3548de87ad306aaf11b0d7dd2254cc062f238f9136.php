<?php

/* RutasBundle:Principal:contactenos.html.twig */
class __TwigTemplate_b6d9d2814009cd62c147bd3548de87ad306aaf11b0d7dd2254cc062f238f9136 extends Twig_Template
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
                <h1>Contáctenos</h1>
            </div>
        </div>
    </div>
</div>
<!-- Título de página -->

<!-- formulario -->
<div class=\"section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8\">

                <form class=\"form-horizontal\" role=\"form\" method=\"post\">

                    <div class=\"form-group\">
                        <label for=\"name\" class=\"col-sm-2 control-label\">Nombre:</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" id=\"nombre\" name=\"nombre\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"email\" class=\"col-sm-2 control-label\">Email:</label>
                        <div class=\"col-sm-10\">
                            <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"message\" class=\"col-sm-2 control-label\">Mensaje:</label>
                        <div class=\"col-sm-10\">
                            <textarea class=\"form-control\" rows=\"4\" name=\"message\"></textarea>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-10 col-sm-offset-2\">
                            <input id=\"submit\" name=\"submit\" type=\"submit\" value=\"Enviar\" class=\"btn btn-primary\">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 55
        echo "\t
";
        // line 56
        $this->env->loadTemplate("RutasBundle:Base:footer.html.twig")->display($context);
        echo " \t
";
        // line 57
        echo " 
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "RutasBundle:Principal:contactenos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 57,  79 => 56,  76 => 55,  19 => 1,);
    }
}
