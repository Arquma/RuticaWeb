<?php

/* DataBaseBundle:Sitio:new.html.twig */
class __TwigTemplate_65ded285b6673688901b75975fd153071584c057c64aca1ebbe85c89067185ac extends Twig_Template
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
        // line 176
        echo "
                                                ";
        // line 177
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
<div class=\"section section-breadcrumbs\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1>Nuevo Sitio</h1>
            </div>
        </div>
    </div>
</div>
<!-- Fin Título de página --> 

<!-- Fin Título de página --> 

<div class=\"container\">
    <div class=\"col-md-6\">
        <form role=\"form\" method=\"POST\" enctype=\"multipart/form-data\" action=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("aSubirImagen");
        echo "\">
        <table class=\"table table-bordered table-striped table-condensed\" style=\"width: 500px;\">


            <tbody>
                <tr>
                    <th>\t<div class=\"form-group\">
                <label for=\"nombre\" class=\"col-sm-2 control-label\" >Nombre</label>
                <div class=\"col-sm-4\">
                    </th>    
                    <td> <input type=\"text\" name=\"nombre\"  style=\"width: 250px;\"></td>
                    </tr>
                    <tr>
                        <th>\t<div class=\"form-group\">
                        <label for=\"descripcion\" class=\"col-sm-2 control-label\">Descripcion</label>
                        <div class=\"col-sm-4\">
                            </th>    
                            <td> <textarea rows=\"4\" cols=\"20\" style=\"width: 250px;\" name=\"descripcion\"></textarea></td>
                            </tr>
                            <tr>
                                <th>\t<div class=\"form-group\">
                                <label for=\"longitud\" class=\"col-sm-2 control-label\" >Longitud</label>
                                <div class=\"col-sm-4\">
                                    </th>    
                                    <td> <input type=\"text\" name=\"longitud\"  style=\"width: 250px;\"></td>
                                    </tr>
                                    <tr>
                                        <th>\t<div class=\"form-group\">
                                        <label for=\"latitud\" class=\"col-sm-2 control-label\">Latitud</label>
                                        <div class=\"col-sm-4\">
                                            </th>    
                                            <td> <input type=\"text\" name=\"latitud\"  style=\"width: 250px;\"></td>
                                            </tr>
                                            <tr>
                                                <th>\t<div class=\"form-group\">
                                                <label for=\"precio\" class=\"col-sm-2 control-label\">Precio</label>
                                                <div class=\"col-sm-4\">
                                                    </th>    
                                                    <td> <input type=\"text\" name=\"precio\"  style=\"width: 250px;\"></td>
                                                    </tr>
                                                    <tr>

                                                        ";
        // line 76
        echo "                                                        <th>\t<div class=\"form-group\">
                                                        <label for=\"provincia\" class=\"col-sm-2 control-label\">Provincia</label>
                                                        <div class=\"col-sm-4\">
                                                            </th>                    
                                                            <td>
                                                                <select id=\"selectError\" data-rel=\"chosen\" class=\"form-control\" name=\"provincia\" style=\"width: 250px;\">
                                                                    <option></option>
                                                                    <option value=\"1\">San José</option>
                                                                    <option value=\"2\">Alajuela</option>
                                                                    <option value=\"3\">Cartago</option>
                                                                    <option value=\"4\">Heredia</option>
                                                                    <option value=\"5\">Puntarenas</option>
                                                                    <option value=\"6\">Guanacaste</option>
                                                                    <option value=\"7\">Limón</option>                       \t\t\t\t\t
                                                                </select>
                                                        </div>
                                                    </div>
                                                    ";
        // line 94
        echo "                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <th>\t<div class=\"form-group\">
                                                        <label for=\"actividad\" class=\"col-sm-2 control-label\">Actividad</label>
                                                        <div class=\"col-sm-4\">
                                                            </th>    
                                                            <td>
                                                                <select  class=\"form-control\" id=\"selectError\" data-rel=\"chosen\"  name=\"actividad\" style=\"width: 250px;\">
                                                                    <option></option>
                                                                    
                                                                    
                                                                    <option value=\"1\">Ciudad</option>
                                                                    <option value=\"2\">Rural</option>
                                                                    <option value=\"3\">Aventura</option>
                                                                    <option value=\"4\">Extremo</option>
                                                                    <option value=\"5\">Ecologico</option>
                                                                    <option value=\"6\">Familiar</option>
                                                                </select>
                                                        </div>         \t\t\t\t\t\t
                                                    </div>
                                                    ";
        // line 115
        echo "</td>
                                                    </tr> 

                                                    <tr>
                                                        <th>\t<div class=\"form-group\">
                                                        <label for=\"imagen\" class=\"col-sm-2 control-label\">Imagen</label>
                                                        <div class=\"col-sm-4\">
                                                            </th>    
                                                            <td>
                                                                <div class=\"col-md-12 col-sm-19\">

                                                                </div> 
                                         
                                                                <input type=\"file\" id=\"fileID\" class=\"form-control\"  name=\"archivo\" />

                                                                </tr>

                                                                </tbody> 

                                                                </table> 

                                                                <!-- Botones -->




                                                                
                                                                    ";
        // line 142
        if (array_key_exists("message", $context)) {
            // line 143
            echo "                                                                        <p class=\"help-block\"><font color=\"088A08\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</font></p>
                                                                        ";
        }
        // line 145
        echo "                                                                        ";
        if (array_key_exists("error", $context)) {
            // line 146
            echo "                                                                        <p class=\"help-block\"><font color=\"#FF0000\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</font></p>
                                                                        ";
        }
        // line 148
        echo "
                                                                    <center>
                                                                        <table>
                                                                            <tr>

                                                                                <td style=\"width: 90px;\">                                                         
                                                                                    <button class=\"btn btn-primary btn-sm\">Guardar</button>
                                                                                </td>
                                                                               <td style=\"width: 90px;\">    <a href=\"";
        // line 156
        echo $this->env->getExtension('routing')->getPath("sitio");
        echo "\" class=\"btn btn-primary btn-sm\">
                                                                                        Volver
                                                                                    </a>
                                                                                </td>

                                                                            </tr>
                                                                        </table>
                                                                    </center>
                                                                </form>


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
        return "DataBaseBundle:Sitio:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 156,  210 => 148,  204 => 146,  201 => 145,  195 => 143,  193 => 142,  164 => 115,  141 => 94,  122 => 76,  77 => 33,  50 => 9,  46 => 8,  41 => 6,  37 => 4,  34 => 3,  30 => 177,  27 => 176,  25 => 3,  22 => 2,  20 => 1,);
    }
}
