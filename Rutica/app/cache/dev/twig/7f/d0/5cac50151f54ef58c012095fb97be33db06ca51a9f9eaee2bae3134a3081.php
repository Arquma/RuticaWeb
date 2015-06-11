<?php

/* DataBaseBundle:Sitio:show.html.twig */
class __TwigTemplate_7fd05cac50151f54ef58c012095fb97be33db06ca51a9f9eaee2bae3134a3081 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->env->loadTemplate("AdministradorBundle:Default:adminHeader.html.twig")->display($context);
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 111
        $this->env->loadTemplate("AdministradorBundle:Default:adminFooter.html.twig")->display($context);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li ><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("ainicio");
        echo "\">Inicio</a></li>
                    
                    <li class=\"active\"><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getUrl("sitio");
        echo "\">Sitios turísticos</a></li>
                    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getUrl("rutasugerida");
        echo "\">Rutas</a></li>
                    
                    <li><a href=\"contactenos.html\">Salir</a></li>                    
                </ul>
            </div>

        </div>
    </header><!--/header-->
     <!-- Título de página -->
\t\t<div class=\"section section-breadcrumbs\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h1>Sitio Turístico</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Título de página -->

<div class=\"container\">
     <div class=\"col-md-6\">

                        <form class=\"form-horizontal\">

                            <div class=\"form-group\">
                                <label for=\"nombre\" class=\"col-sm-2 control-label\">Nombre</label>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" class=\"form-control\" disabled=\"true\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "\">
                                </div>                              
                            </div>
                            <div class=\"form-group\">
                                <label for=\"descripcion\" class=\"col-sm-2 control-label\">Descripcion</label>
                                <div class=\"col-sm-6\">
                                    <textarea rows=\"4\" cols=\"50\" class=\"form-control\" disabled=\"true\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion", array()), "html", null, true);
        echo "</textarea>
                                </div>                              
                            </div>
                                 <div class=\"form-group\">
                                <label for=\"provincia\" class=\"col-sm-2 control-label\">Provincia</label>
                                <div class=\"col-sm-6\">
                                  <input type=\"text\" class=\"form-control\" disabled=\"true\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idprovincia", array()), "nombre", array()), "html", null, true);
        echo "\">
                                </div>
                            </div>
                               <div class=\"form-group\">
                                <label for=\"actividad\" class=\"col-sm-2 control-label\">Actividad</label>
                                <div class=\"col-sm-6\">
                                  <input type=\"text\" class=\"form-control\" disabled=\"true\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idactividad", array()), "nombre", array()), "html", null, true);
        echo "\">
                                </div>
                            </div>   
                            <div class=\"form-group\">
                                <label for=\"precio\" class=\"col-sm-2 control-label\">Precio</label>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" class=\"form-control\" disabled=\"true\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "precio", array()), "html", null, true);
        echo "\">
                                </div>                              
                            </div>
                            <div class=\"form-group\">
                                <label for=\"latitud\" class=\"col-sm-2 control-label\">Latitud</label>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" class=\"form-control\" disabled=\"true\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "latitud", array()), "html", null, true);
        echo "\">
                                </div>                              
                            </div>
                            <div class=\"form-group\">
                                <label for=\"longitud\" class=\"col-sm-2 control-label\">Longitud</label>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" class=\"form-control\" disabled=\"true\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "longitud", array()), "html", null, true);
        echo "\">
                                </div>                              
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">Imagen:</label>
                                <div class=\"col-sm-7\">
                                <ul class=\"grid \">
                                 <div class=\"col-md-12 col-sm-19\">
                                <figure>
                                    <img src=\"img/sitios/4.jpg\" alt=\"img04\">
                                </figure>
                                 </div>  </ul>
                           
                               
                                </div>
                   
                             </div>
                                <center>
                                <button type=\"button\" class=\"btn btn-primary\" onclick=\" location.href='";
        // line 92
        echo $this->env->getExtension('routing')->getPath("sitio");
        echo "' \" data-toggle=\"modal\">Volver a la lista</button>
                                </center>
       

                        </form>

    </div>
                        <div class =\"col-md-5\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m34!1m12!1m3!1d7859.933826055709!2d-84.07980560988867!3d9.936710986346734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m19!3e0!4m5!1s0x8fa0e366d24d3d1b%3A0x86bd02c7707db21e!2sTeatro+Nacional+de+Costa+Rica%2C+San+Jos%C3%A9!3m2!1d9.933129!2d-84.076942!4m5!1s0x8fa0e4aabcf16c1f%3A0x9968a5c10a33d6eb!2sMuseo+Nacional+de+Costa+Rica%2C+Cuesta+de+Moras%2C+San+Jos%C3%A9!3m2!1d9.932602!2d-84.071015!4m5!1s0x8fa0e4a028084f77%3A0xe474e090ba7dc78f!2sMuseo+de+los+ni%C3%B1os+de+costa+rica%2C+San+Jos%C3%A9!3m2!1d9.941272!2d-84.080326!5e0!3m2!1ses!2scr!4v1432659181123\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\"></iframe>
                        </div>


    
</div>
             
            <!--      <td>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "imagen", array()), "html", null, true);
        echo "</td>-->
           

";
    }

    public function getTemplateName()
    {
        return "DataBaseBundle:Sitio:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 107,  154 => 92,  132 => 73,  123 => 67,  114 => 61,  105 => 55,  96 => 49,  87 => 43,  78 => 37,  47 => 9,  43 => 8,  38 => 6,  34 => 4,  31 => 3,  27 => 111,  25 => 3,  23 => 2,  20 => 1,);
    }
}
