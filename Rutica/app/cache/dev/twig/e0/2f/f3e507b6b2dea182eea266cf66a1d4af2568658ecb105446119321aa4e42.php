<?php

/* DataBaseBundle:RutaSugerida:new.html.twig */
class __TwigTemplate_e02ff3e507b6b2dea182eea266cf66a1d4af2568658ecb105446119321aa4e42 extends Twig_Template
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
        // line 167
        $this->env->loadTemplate("AdministradorBundle:Default:adminFooter.html.twig")->display($context);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li ><a href=\"home.html\">Inicio</a></li>
                    
                    <li ><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getUrl("sitio");
        echo "\">Sitios turísticos</a></li>
                    <li class=\"active\"><a href=\"";
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
\t\t\t\t\t\t<h1>Nueva Ruta</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Fin Título de página --> 

    <div class=\"container\">
     <div class=\"col-md-6\">
       
           <table class=\"table table-bordered table-striped table-condensed\" >

                        ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                        <tbody>
                         
                            <tr>
                                <th style=\"width: 100px;\"> ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "</th>
                                <td>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget');
        echo "
                                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "</td>
                            </tr>
                          <tr>
                                <th style=\"width: 100px;\"> ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "distancia", array()), 'label');
        echo "</th>
                                <td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "distancia", array()), 'widget');
        echo "
                                    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "distancia", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 100px;\"> ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precioTotal", array()), 'label');
        echo "</th>
                                <td>";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precioTotal", array()), 'widget');
        echo "
                                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precioTotal", array()), 'errors');
        echo "</td>
                            </tr>
                             <tr>
                                <th style=\"width: 100px;\"> ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tiempo", array()), 'label');
        echo "</th>
                                <td>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tiempo", array()), 'widget');
        echo "
                                    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tiempo", array()), 'errors');
        echo "</td>
                            </tr>
                               <tr>
                                <th style=\"width: 100px;\"> ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idProvincia", array()), 'label');
        echo "</th>
                                <td>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idProvincia", array()), 'widget');
        echo "
                                    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idProvincia", array()), 'errors');
        echo "</td>
                            </tr>
                            
                        </tbody> 
                       
           </table> 
                              <!-- Tabla de sitio en la ruta -->
                            <label for=\"sitiosenruta\" class=\"col-sm-4 control-label\" >Sitios en la ruta</label>

                                    <table data-toggle=\"table\" data-search=\"true\">

                                        <thead>
                                            <tr>

                                                <th>Nombre</th>
                                                <th>Provincia</th>
                                                <th>Precio</th>
                                               
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         
                                                <tr>
                                                    <td><a href=\"\"></a>Teatro Nacional</td>

                                                    <td>San Jose</td>
                                                    <td>120</td>
                                                    
                                                    <td>
                                                        <ul>


                                                            <a href=\"\">Quitar</a>

                                                        </ul>
                                                    </td>
                                                </tr>
                                         
                                        </tbody>
                                    </table>
                             <!--Fin tabla de sitio en la ruta -->
                             <br>
                             <!-- Tabla de sitios posible para la ruta -->
                            <label for=\"sitiosnoenruta\" class=\"col-sm-5 control-label\" >Sitios posible para la ruta</label>

                                    <table class=\"table table-bordered table-striped table-condensed\" data-search=\"true\">

                                        <thead>
                                            <tr>

                                                <th>Nombre</th>
                                                <th>Provincia</th>
                                                <th>Precio</th>
                                               
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         
                                                <tr>
                                                    <td><a href=\"\"></a>Museo de los Niños</td>

                                                    <td>San Jose</td>
                                                    <td>150</td>
                                                    
                                                    <td>
                                                        <ul>


                                                            <a href=\"\">Agregar</a>

                                                        </ul>
                                                    </td>
                                                </tr>
                                         
                                        </tbody>
                                    </table>
                             <!--Fin tabla de sitios posibles para la ruta -->
                            
                            <!-- Botones -->
                                    <center>
                                        <table>
                                            <tr>

                                                <td style=\"width: 60px;\"> ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "
                                                </td>
                                                <td>  <a href=\"";
        // line 148
        echo $this->env->getExtension('routing')->getPath("rutasugerida");
        echo "\" class=\"btn btn-primary btn-sm\">
                                                        Volver
                                                    </a>
                                                </td>

                                            </tr>
                                        </table>
                                    </center>
                           
                                                          ";
        // line 157
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
     </div>
                <!-- Mapa -->                                 
     <div class =\"col-md-5\">
         <iframe src=\"https://www.google.com/maps/embed?pb=!1m34!1m12!1m3!1d7859.933826055709!2d-84.07980560988867!3d9.936710986346734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m19!3e0!4m5!1s0x8fa0e366d24d3d1b%3A0x86bd02c7707db21e!2sTeatro+Nacional+de+Costa+Rica%2C+San+Jos%C3%A9!3m2!1d9.933129!2d-84.076942!4m5!1s0x8fa0e4aabcf16c1f%3A0x9968a5c10a33d6eb!2sMuseo+Nacional+de+Costa+Rica%2C+Cuesta+de+Moras%2C+San+Jos%C3%A9!3m2!1d9.932602!2d-84.071015!4m5!1s0x8fa0e4a028084f77%3A0xe474e090ba7dc78f!2sMuseo+de+los+ni%C3%B1os+de+costa+rica%2C+San+Jos%C3%A9!3m2!1d9.941272!2d-84.080326!5e0!3m2!1ses!2scr!4v1432659181123\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\"></iframe>
     </div>
                 <!-- Fin mapa -->
   </div>
    
";
    }

    public function getTemplateName()
    {
        return "DataBaseBundle:RutaSugerida:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 157,  240 => 148,  235 => 146,  147 => 61,  143 => 60,  139 => 59,  133 => 56,  129 => 55,  125 => 54,  119 => 51,  115 => 50,  111 => 49,  105 => 46,  101 => 45,  97 => 44,  91 => 41,  87 => 40,  83 => 39,  76 => 35,  72 => 34,  44 => 9,  40 => 8,  34 => 4,  31 => 3,  27 => 167,  25 => 3,  23 => 2,  20 => 1,);
    }
}
