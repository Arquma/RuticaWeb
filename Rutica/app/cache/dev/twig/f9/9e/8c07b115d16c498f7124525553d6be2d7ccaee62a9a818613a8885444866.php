<?php

/* DataBaseBundle:Sitio:edit.html.twig */
class __TwigTemplate_f99e8c07b115d16c498f7124525553d6be2d7ccaee62a9a818613a8885444866 extends Twig_Template
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
        $this->env->loadTemplate("AdministradorBundle:Default:adminHeader.html.twig")->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 123
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
\t\t\t\t\t\t<h1>Editar Sitio</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Fin Título de página --> 
   
   <div class=\"container\">
     <div class=\"col-md-6\">
       
           <table class=\"table table-bordered table-striped table-condensed\" style=\"width: 500px;\">

                        ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
                        <tbody>
                            <tr>
                                <th style=\"width: 100px;\"> ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'label');
        echo "</th>
                                <td>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'widget');
        echo "
                                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 100px;\"> ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'label');
        echo "</th>
                                <td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'widget');
        echo "
                                    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 100px;\"> ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "longitud", array()), 'label');
        echo "</th>
                                <td>";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "longitud", array()), 'widget');
        echo "
                                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "longitud", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 100px;\"> ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "latitud", array()), 'label');
        echo "</th>
                                <td>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "latitud", array()), 'widget');
        echo "
                                    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "latitud", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 100px;\"> ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "precio", array()), 'label');
        echo "</th>
                                <td>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "precio", array()), 'widget');
        echo "
                                    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "precio", array()), 'errors');
        echo "</td>
                            </tr>
                             <tr>
                                <th style=\"width: 100px;\"> Provincia</th>
                                <td>";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idProvincia", array()), 'widget');
        echo "
                                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idProvincia", array()), 'errors');
        echo "</td>
                            </tr>
                            <tr>
                                <th style=\"width: 100px;\"> Actividad</th>
                                <td>";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idActividad", array()), 'widget');
        echo "
                                    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idActividad", array()), 'errors');
        echo "</td>
                            </tr> 
                          
                            <tr>
                                <th style=\"width: 100px;\"> Imagen</th>
                                <td>
                                      <div class=\"col-md-12 col-sm-19\">
                                ";
        // line 78
        $context["foo"] = ("imagenes_sitios/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "imagen", array()));
        echo "    
                                <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo"))), "html", null, true);
        echo "\" alt=\"one\" height=\"150px\" width=\"200px\">
                                 </div> 
                                    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "imagen", array()), 'widget');
        echo "
                                     <a href=\"#\" class=\"btn btn-primary\" type=\"button\" onclick=\"document.getElementById('fileID').click(); return false;\">Buscar</a> <input id=\"fileID\" type=\"file\" style=\"visibility: hidden; display: none;\" />
                                    <input type=\"file\" id=\"fileID\" class=\"form-control\" style=\"visibility: hidden;\" />

                                    ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "imagen", array()), 'errors');
        echo "</td>
                            </tr>
                            
                        </tbody> 
                        <!-- Botones -->
           </table>
                            <center>
                               <table>
                                        <tr>

                                            <td style=\"width: 80px;\"> ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget');
        echo "
                                            </td>


                                            ";
        // line 99
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                                            <td style=\"width: 60px;\">  <a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("sitio");
        echo "\" class=\"btn btn-primary btn-sm\">
                                                    Volver
                                                </a>
                                            </td>
                                            ";
        // line 104
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                                            <td style=\"width: 80px;\"> 
                                                ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit", array()), 'widget');
        echo "
                                            </td>
                                                ";
        // line 108
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

                                        </tr>
                                    </table>
                            </center>

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
        return "DataBaseBundle:Sitio:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 108,  234 => 106,  229 => 104,  222 => 100,  218 => 99,  211 => 95,  198 => 85,  191 => 81,  186 => 79,  182 => 78,  172 => 71,  168 => 70,  161 => 66,  157 => 65,  150 => 61,  146 => 60,  142 => 59,  136 => 56,  132 => 55,  128 => 54,  122 => 51,  118 => 50,  114 => 49,  108 => 46,  104 => 45,  100 => 44,  94 => 41,  90 => 40,  86 => 39,  80 => 36,  76 => 35,  47 => 9,  43 => 8,  38 => 6,  34 => 4,  31 => 3,  27 => 123,  25 => 3,  22 => 2,  20 => 1,);
    }
}
