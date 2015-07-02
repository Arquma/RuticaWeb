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
        // line 231
        echo "
                                                ";
        // line 232
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

  <style>
      #map-canvas {
        width: 500px;
        height: 400px;
      }
    </style>
    <script src=\"https://maps.googleapis.com/maps/api/js\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/googlemaps/js/maps.js"), "html", null, true);
        echo "\"></script> 
    <script>
        
    function camCoordenadas(marker){
        var LatLong=marker.getPosition();
        var latitud=LatLong.lat();
        var longitud=LatLong.lng();
        
        var latnum=latitud.toString();
        var lngnum=longitud.toString();
       
        document.getElementById('lat').value=latnum.substr(0,8);
        document.getElementById('lng').value=lngnum.substr(0,10);
        
      
        
     }
      function initialize() {
         var lat = 9.933110;
         var long =-84.090491;

         var myLatLng= new google.maps.LatLng(lat,long);
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(lat, long),
          zoom: 14,
         mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
        
        var marker = new google.maps.Marker({
            position: myLatLng,
            draggable: true,
            map: map,
            animation: google.maps.Animation.DROP,

        });
      

       google.maps.event.addListener(marker, 'dragend', function(){
        camCoordenadas(marker);
    });
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>

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
        // line 89
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
                                    <td> <input type=\"text\" id=\"lng\" name=\"longitud\"  style=\"width: 250px;\"></td>
                                    </tr>
                                    <tr>
                                        <th>\t<div class=\"form-group\">
                                        <label for=\"latitud\" class=\"col-sm-2 control-label\">Latitud</label>
                                        <div class=\"col-sm-4\">
                                            </th>    
                                            <td> <input type=\"text\" id=\"lat\" name=\"latitud\"  style=\"width: 250px;\"></td>
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
        // line 132
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
        // line 150
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
        // line 171
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
        // line 198
        if (array_key_exists("message", $context)) {
            // line 199
            echo "                                                                        <p class=\"help-block\"><font color=\"088A08\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</font></p>
                                                                        ";
        }
        // line 201
        echo "                                                                        ";
        if (array_key_exists("error", $context)) {
            // line 202
            echo "                                                                        <p class=\"help-block\"><font color=\"#FF0000\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</font></p>
                                                                        ";
        }
        // line 204
        echo "
                                                                    <center>
                                                                        <table>
                                                                            <tr>

                                                                                <td style=\"width: 90px;\">                                                         
                                                                                    <button class=\"btn btn-primary btn-sm\">Guardar</button>
                                                                                </td>
                                                                               <td style=\"width: 90px;\">    <a href=\"";
        // line 212
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
                                                        <div class =\"col-md-5\" id=\"map-canvas\">
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
        return array (  279 => 212,  269 => 204,  263 => 202,  260 => 201,  254 => 199,  252 => 198,  223 => 171,  200 => 150,  181 => 132,  136 => 89,  68 => 24,  50 => 9,  46 => 8,  41 => 6,  37 => 4,  34 => 3,  30 => 232,  27 => 231,  25 => 3,  22 => 2,  20 => 1,);
    }
}
