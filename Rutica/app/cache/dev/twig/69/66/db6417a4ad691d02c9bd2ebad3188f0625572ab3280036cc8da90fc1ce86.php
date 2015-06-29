<?php

/* AdministradorBundle:Default:login.html.twig */
class __TwigTemplate_6966db6417a4ad691d02c9bd2ebad3188f0625572ab3280036cc8da90fc1ce86 extends Twig_Template
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
        $this->env->loadTemplate("AdministradorBundle:Default:adminHeader.html.twig")->display($context);
        // line 2
        echo "\t</header>
\t<br><br><br><br><br><br><br>
\t
\t<!-- Inicio del formulario login   -->
<center>

<div class=\"container\"style=\" \">
   
        
    <div class=\"row\">
        <div class=\"col-md-12 center login-header\">
            <h2>Bienvenido</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class=\"row\" style=\" width: 50%\">
        <div class=\"well \" >
            
                        
            <div class=\"alert alert-info\" style=\"background-color:#E7F598;\">
                Por favor inicie sesión con su usuario y contraseña
            </div>
            <form class=\"form-horizontal\" action=\"\" method=\"post\">
                <fieldset>
                    <div class=\"input-group input-group-lg\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user red\"></i></span>
                        <input type=\"text\" name=\"usuario\" class=\"form-control\" placeholder=\"Usuario\">
                    </div>
                    <div class=\"clearfix\"></div><br>

                    <div class=\"input-group input-group-lg\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock red\"></i></span>
                        <input type=\"password\" name=\"pass\" class=\"form-control\" placeholder=\"Contraseña\">
                    </div>
                  <br>

                    <div class=\"col-md-5\">
                        <button type=\"button\" class=\"btn btn-primary\" onclick=\" location.href='";
        // line 40
        echo $this->env->getExtension('routing')->getPath("ainicio");
        echo "' \" data-toggle=\"modal\">Iniciar sesión</button>
                    </div>
                </fieldset>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->

</div><!--/.fluid-container-->

</center>

<br><br><br><br><br><br><br>

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
        return "AdministradorBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 57,  81 => 56,  78 => 55,  61 => 40,  21 => 2,  19 => 1,);
    }
}
