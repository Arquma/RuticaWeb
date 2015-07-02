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
        // line 194
        $this->env->loadTemplate("AdministradorBundle:Default:adminFooter.html.twig")->display($context);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<head>
    <style>
      #map-canvas {
        width: 500px;
        height: 400px;
      }
    </style>
    <script src=\"https://maps.googleapis.com/maps/api/js\"></script>
    <script src=\"";
        // line 13
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
         var lat = ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "latitud", array()), "html", null, true);
        echo ";
         var long =";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "longitud", array()), "html", null, true);
        echo ";

         var myLatLng= new google.maps.LatLng(lat,long);
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(lat, long),
          zoom: 18,
         mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
        
        var marker = new google.maps.Marker({
            position: myLatLng,
            draggable: true,
            title:'";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "',
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
    
     <div class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                   <li ><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getUrl("ainicio");
        echo "\">Inicio</a></li>
                    
                    <li class=\"active\"><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getUrl("sitio");
        echo "\">Sitios turísticos</a></li>
                    <li><a href=\"";
        // line 67
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
        <form role=\"form\" method=\"POST\" enctype=\"multipart/form-data\" action=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("editarSitio");
        echo "\">
           <table class=\"table table-bordered table-striped table-condensed\" style=\"width: 500px;\">

                       
                        <tbody>
                        <input type=\"text\" name=\"id\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "\" hidden=\"true\" style=\"width: 250px;\">
                            <tr>
                                <th style=\"width: 100px;\"> Nombre</th>
                                <td> <input type=\"text\" name=\"nombre\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "\" style=\"width: 250px;\"></td>
                            </tr>
                             
                            <tr>
                                <th style=\"width: 100px;\"> Descripcion</th>
                                <td><textarea rows=\"4\" cols=\"20\" style=\"width: 250px;\"  name=\"descripcion\">";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion", array()), "html", null, true);
        echo "</textarea></td>
                            </tr>
                            <tr>
                                <th style=\"with:100px;\">Latitud</th>
                                <td><input name=\"lati\" id=\"lat\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "latitud", array()), "html", null, true);
        echo "\"/>
                            </tr>
                            <tr>
                                <th style=\"with:100px;\">Longitud</th>
                                <td><input name=\"longi\" id=\"lng\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "longitud", array()), "html", null, true);
        echo "\"/>
                            <tr/>
                            <tr>
                                <th style=\"width: 100px;\">Precio</th>
                                <td><input name=\"precio\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "precio", array()), "html", null, true);
        echo "\" ></td>
                            </tr>
                            
                             <tr>
                                <th style=\"width: 100px;\"> Provincia</th>
                                <td> <select id=\"selectError\" data-rel=\"chosen\" class=\"form-control\" name=\"provincia\" style=\"width: 250px;\">
                                                                    <option></option>
                                                                    <option value=\"1\" selected>San José</option>
                                                                    <option value=\"2\">Alajuela</option>
                                                                    <option value=\"3\">Cartago</option>
                                                                    <option value=\"4\">Heredia</option>
                                                                    <option value=\"5\">Puntarenas</option>
                                                                    <option value=\"6\">Guanacaste</option>
                                                                    <option value=\"7\">Limón</option>                       \t\t\t\t\t
                                                                </select></td>
                            </tr>
                            <tr>
                                <th style=\"width: 100px;\"> Actividad</th>
                                <td>   <select  class=\"form-control\" id=\"selectError\" data-rel=\"chosen\" name=\"actividad\" style=\"width: 250px;\">
                                                                    <option></option>
                                                                    
                                                                    
                                                                    <option value=\"1\" selected>Ciudad</option>
                                                                    <option value=\"2\">Rural</option>
                                                                    <option value=\"3\">Aventura</option>
                                                                    <option value=\"4\">Extremo</option>
                                                                    <option value=\"5\">Ecologico</option>
                                                                    <option value=\"6\">Familiar</option>
                                                                </select></td>
                            </tr> 
                          
                            <tr>
                                <th style=\"width: 100px;\"> Imagen</th>
                                <td>
                                      <div class=\"col-md-12 col-sm-19\">
                                ";
        // line 150
        $context["foo"] = ("imagenes_sitios/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "imagen", array()));
        echo "    
                                <img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo"))), "html", null, true);
        echo "\" alt=\"one\" height=\"150px\" width=\"200px\">
                                 </div> 
                                    <input type=\"file\" id=\"fileID\" class=\"form-control\"  name=\"archivo\" />

                                    </td>
                            </tr>
                            
                        </tbody> 
                        <!-- Botones -->
           </table>
                            <center>
                               <table>
                                        <tr>

                                            <td style=\"width: 80px;\"> 
                                              <button class=\"btn btn-primary btn-sm\">Actualizar</button>
                                           </td> 

                                             
                                            <td style=\"width: 60px;\">  <a href=\"";
        // line 170
        echo $this->env->getExtension('routing')->getPath("sitio");
        echo "\" class=\"btn btn-primary btn-sm\">
                                                    Volver
                                                </a>
                                            </td>
                                            
                                            <td style=\"width: 80px;\"> 
                                                
                                            </td>
                                                

                                        </tr>
                                    </table>
                                                <input type=\"text\" name=\"latitud\" hidden=\"true\" />
                                                 <input type=\"text\" name=\"longitud\" hidden=\"true\" />
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
        return "DataBaseBundle:Sitio:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 170,  227 => 151,  223 => 150,  185 => 115,  178 => 111,  171 => 107,  164 => 103,  156 => 98,  150 => 95,  142 => 90,  116 => 67,  112 => 66,  107 => 64,  86 => 46,  69 => 32,  65 => 31,  44 => 13,  34 => 5,  31 => 3,  27 => 194,  25 => 3,  22 => 2,  20 => 1,);
    }
}
