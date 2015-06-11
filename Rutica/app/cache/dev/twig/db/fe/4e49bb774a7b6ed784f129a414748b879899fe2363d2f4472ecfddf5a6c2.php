<?php

/* DataBaseBundle:RutaSugerida:show.html.twig */
class __TwigTemplate_dbfe4e49bb774a7b6ed784f129a414748b879899fe2363d2f4472ecfddf5a6c2 extends Twig_Template
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
        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 117
        $this->env->loadTemplate("AdministradorBundle:Default:adminFooter.html.twig")->display($context);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li ><a href=\"home.html\">Inicio</a></li>
                    
                    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getUrl("sitio");
        echo "\">Sitios turísticos</a></li>
                    <li class=\"active\"><a href=\"";
        // line 10
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
\t\t\t\t\t\t<h1>Ruta Turística Sugeridas</h1>
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
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "\">
                                </div>                              
                            </div>
                            <div class=\"form-group\">
                                <label for=\"distancia\" class=\"col-sm-2 control-label\">Distancia</label>
                                <div class=\"col-sm-6\">
                                    <textarea rows=\"4\" cols=\"50\" class=\"form-control\" disabled=\"true\">";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "distancia", array()), "html", null, true);
        echo "</textarea>
                                </div>                              
                            </div>
                            <div class=\"form-group\">
                                <label for=\"preciototal\" class=\"col-sm-2 control-label\">Precio Total</label>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" class=\"form-control\" disabled=\"true\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "preciototal", array()), "html", null, true);
        echo "\">                                </div>                              
                            </div>
                            <div class=\"form-group\">
                                <label for=\"provincia\" class=\"col-sm-2 control-label\">Provincia</label>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" class=\"form-control\" disabled=\"true\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idProvincia", array()), "html", null, true);
        echo "\">                                </div>                              
                            </div>
                             <div class=\"form-group\">
                                <label for=\"tiempo\" class=\"col-sm-2 control-label\">Tiempo Estimado</label>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" class=\"form-control\" disabled=\"true\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tiempo", array()), "H:i"), "html", null, true);
        echo "\">                                </div>                              
                            </div>
                            
                        </form>
                            <!-- Tabla de sitio en la ruta -->
                            <label for=\"sitiosenruta\" class=\"col-sm-4 control-label\" >Sitios en la ruta</label>

                                    <table class=\"table table-hover\" data-toggle=\"table\" data-search=\"true\" style=\"width:100%\">

                                        <thead>
                                            <tr>

                                                <th>Nombre</th>
                                                <th>Provincia</th>
                                                <th>Precio</th>
                                               
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                         
                                                <tr>
                                                    <td><a href=\"\"></a>Teatro Nacional</td>

                                                    <td>San Jose</td>
                                                    <td>120</td>
                                                    
                                                   
                                                </tr>
                                         
                                        </tbody>
                                    </table>
                             <!--Fin tabla de sitio en la ruta -->
                             <br>
                          
     
 <center>
     <br>
         <button type=\"button\" class=\"btn btn-primary\" onclick=\" location.href='";
        // line 99
        echo $this->env->getExtension('routing')->getPath("rutasugerida");
        echo "' \" data-toggle=\"modal\">Volver a la lista</button>
     </center>
     </div>
    


                        

   
                        <div class =\"col-md-6\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m34!1m12!1m3!1d7859.933826055709!2d-84.07980560988867!3d9.936710986346734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m19!3e0!4m5!1s0x8fa0e366d24d3d1b%3A0x86bd02c7707db21e!2sTeatro+Nacional+de+Costa+Rica%2C+San+Jos%C3%A9!3m2!1d9.933129!2d-84.076942!4m5!1s0x8fa0e4aabcf16c1f%3A0x9968a5c10a33d6eb!2sMuseo+Nacional+de+Costa+Rica%2C+Cuesta+de+Moras%2C+San+Jos%C3%A9!3m2!1d9.932602!2d-84.071015!4m5!1s0x8fa0e4a028084f77%3A0xe474e090ba7dc78f!2sMuseo+de+los+ni%C3%B1os+de+costa+rica%2C+San+Jos%C3%A9!3m2!1d9.941272!2d-84.080326!5e0!3m2!1ses!2scr!4v1432659181123\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\"></iframe>
                        </div>

 </div>
    
</div>
  
";
    }

    public function getTemplateName()
    {
        return "DataBaseBundle:RutaSugerida:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 99,  111 => 61,  103 => 56,  95 => 51,  86 => 45,  77 => 39,  45 => 10,  41 => 9,  35 => 5,  32 => 4,  28 => 117,  26 => 4,  22 => 2,  20 => 1,);
    }
}
