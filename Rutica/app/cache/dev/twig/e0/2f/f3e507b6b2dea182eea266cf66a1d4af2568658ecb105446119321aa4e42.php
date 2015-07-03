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
        // line 361
        $this->env->loadTemplate("AdministradorBundle:Default:adminFooter.html.twig")->display($context);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp\"></script>
    <script>


//-- Variables
        var map;
        var directionsDisplay;
        var directionsService = new google.maps.DirectionsService();

//-- show the map in the application
        function showMap() {

            directionsDisplay = new google.maps.DirectionsRenderer();

            var mapOptions = {
                zoom: 7,
                center: new google.maps.LatLng(9.6301892, -84.2541843), //-- Costa Rica location
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            map = new google.maps.Map(document.getElementById('main-map'),
                    mapOptions);

            directionsDisplay.setMap(map);

        }

        function generateRoute() {

            var start = document.getElementById('inicio').value;
            var end = document.getElementById('final').value;
            var routeSites = [];//-- all the middle sites betwen the start and final point
            var allSites = document.getElementById('sitios');
            var validRouteSites = true;

            if (start != end) {//-- validate the start and the end of the route

                for (var i = 0; i < allSites.length; i++) {
                    if (allSites.options[i].selected == true) {
                        if ((allSites.options[i].value == start) || (allSites.options[i].value == end)) {
                            validRouteSites = false;
                        }
                        routeSites.push({
                            location: allSites[i].value,
                            stopover: true});
                    }
                }//-- end for

                if (validRouteSites) {

                    var request = {
                        origin: start,
                        destination: end,
                        waypoints: routeSites,
                        optimizeWaypoints: true,
                        travelMode: google.maps.TravelMode.DRIVING
                    };

                    directionsService.route(request, function (response, status) {
                        if (status == google.maps.DirectionsStatus.OK) {
                            directionsDisplay.setDirections(response);
                        }
                    });

                } else {
                    alert('El punto de inicio y el punto final no deben incluirse en los sitios intermedios');
                }

            } else {
                alert('El punto de inicio y el punto final deben ser diferentes');
            }

        }
        google.maps.event.addDomListener(window, 'load', showMap);

    </script>

    <div class=\"collapse navbar-collapse\">
        <ul class=\"nav navbar-nav navbar-right\">
            <li ><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getUrl("ainicio");
        echo "\">Inicio</a></li>

            <li ><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getUrl("sitio");
        echo "\">Sitios turísticos</a></li>
            <li class=\"active\"><a href=\"";
        // line 86
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
                <h1>Nueva Ruta</h1>
            </div>
        </div>
    </div>
</div>
<!-- Fin Título de página --> 
<div class=\"section\">
    <div class=\"container\">

        <div class=\"row\">

            <div class=\"col-md-8\">

                <div class=\"section-title\" >
                    <h2>Elije las preferencias de su ruta</h2>
                    <br>
                </div>

                ";
        // line 118
        echo "                <form class=\"form-horizontal\">

                    ";
        // line 121
        echo "                    <div class=\"form-group\">
                        <label for=\"provincia\" class=\"col-sm-2 control-label\">Provincia</label>
                        <div class=\"col-sm-6\">
                            <select id=\"provincia\" class=\"form-control\">
                                <option></option>
                                <option>San José</option>
                                <option>Alajuela</option>
                                <option>Heredia</option>
                                <option>Cartago</option>
                                <option>Puntarenas</option>
                                <option>Guanacaste</option>
                                <option>Limón</option>                       \t\t\t\t\t
                            </select>
                        </div>
                    </div>
                    ";
        // line 137
        echo "
                    ";
        // line 139
        echo "                    <div class=\"form-group\">
                        <label for=\"actividad\" class=\"col-sm-2 control-label\">Actividad</label>
                        <div class=\"col-sm-6\">
                            <select id=\"actividad\" class=\"form-control\">
                                <option></option>
                                <option>Montaña</option>
                                <option>Playa</option>
                                <option>Extremo</option>
                                <option>Ciudad</option>
                                <option>Rural</option>\t\t\t\t\t\t                       \t\t\t\t\t
                            </select>
                        </div>         \t\t\t\t\t\t
                    </div>
                    ";
        // line 153
        echo "
                    ";
        // line 155
        echo "                    <div class=\"form-group\">
                        <label for=\"precio\" class=\"col-sm-2 control-label\">Precio</label>
                        <div class=\"col-sm-6\">
                            <select id=\"precio\" class=\"form-control\">
                                <option></option>
                                <option>Económico</option>
                                <option>Medio</option>
                                <option>Pura Vida</option>\t\t\t\t\t                       \t\t\t\t\t
                            </select>
                        </div>         \t\t\t\t\t\t
                    </div>
                    ";
        // line 166
        echo " 

                    ";
        // line 169
        echo "                    <div class=\"form-group\">
                        <label for=\"buscar\" class=\"col-sm-1 control-label\"></label>
                        <div class=\"col-sm-6\">     \t\t\t\t\t\t
                            <button id=\"buscar\" type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\">Buscar</button>
                        </div>
                    </div>   \t\t\t\t\t\t
                    ";
        // line 176
        echo "
                </form>
                ";
        // line 179
        echo "
            </div>\t\t\t\t



            <div class = \"col-md-4\">

                <div class=\"section-title\" >
                    <h3>Elije las preferencias de su ruta</h3>
                    <br>
                </div>

                ";
        // line 192
        echo "                <form class=\"form-horizontal\" action=\"";
        echo $this->env->getExtension('routing')->getPath("nueva_rutasugerida");
        echo "\" method=\"post\">

                    ";
        // line 195
        echo "                    <div class=\"form-group\">
                        <label style=\"text-align: center;\" for=\"provincia\" class=\"col-sm-4 control-label\">Provincia:</label>
                        <div class=\"col-sm-6\">
                            <select id=\"provincia\" name=\"provincia\" class=\"form-control\">                    
                                <option>San José</option>
                                <option>Alajuela</option>
                                <option>Heredia</option>
                                <option>Cartago</option>
                                <option>Puntarenas</option>
                                <option>Guanacaste</option>
                                <option>Limón</option>                                
                            </select>
                        </div>
                    </div>
                    ";
        // line 210
        echo "
                    ";
        // line 212
        echo "                    <div class=\"form-group\">
                        <label style=\"text-align: center;\" for=\"actividad\" class=\"col-sm-4 control-label\">Actividad:</label>
                        <div class=\"col-sm-6\">
                            <select id=\"actividad\" name=\"actividad\" class=\"form-control\">                    
                                <option>Ciudad</option>
                                <option>Rural</option>
                                <option>Aventura</option>
                                <option>Extremo</option>                    
                                <option>Ecológico</option>
                                <option>Familiar</option>                                            
                            </select>
                        </div>                    
                    </div>
                    ";
        // line 226
        echo "
                    ";
        // line 228
        echo "                    <div class=\"form-group\">
                        <label style=\"text-align: center;\" for=\"precio\" class=\"col-sm-4 control-label\">Precio:</label>
                        <div class=\"col-sm-6\">
                            <select id=\"precio\" name=\"precio\" class=\"form-control\">                      
                                <option>Económico</option>
                                <option>Medio</option>
                                <option>Pura Vida</option>                                          
                            </select>
                        </div>                    
                    </div>
                    ";
        // line 238
        echo " 

                    ";
        // line 241
        echo "                    <div class=\"form-group\">
                        <label for=\"buscar\" class=\"col-sm-1 control-label\"></label>
                        <div class=\"col-sm-6\">                 
                            <button id=\"buscar\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"modal\">Buscar</button>
                        </div>
                    </div>              
                    ";
        // line 248
        echo "
                </form>
                ";
        // line 251
        echo "            </div>

        </div>

        ";
        // line 255
        if (array_key_exists("sitios", $context)) {
            // line 256
            echo "            <hr>";
            // line 257
            echo "
            <div class=\"row\">                    

                <div class=\"col-md-6\" id=\"main-map\" style=\"width: 700px; height: 400px\"></div> 

                <div class=\"col-md-4\">

                    <div class=\"section-title\" >
                        <h3>Sitios de la ruta</h3>
                        <br>
                    </div>            
                    <form role=\"form\" method=\"POST\" enctype=\"multipart/form-data\" action=\"";
            // line 268
            echo $this->env->getExtension('routing')->getPath("nueva_ruta");
            echo "\" >
                        <table>
                            <tr style=\"height: 60px;\">
                                ";
            // line 272
            echo "                            <div class=\"form-group\">
                                <td> <label style=\"text-align: center;\" for=\"nombre\" class=\"col-sm-4 control-label\">Nombre:</label></td>
                                <td> <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"nombre\" style=\"width: 250px;\">
                                    </div>                    </td>
                            </div>
                            ";
            // line 279
            echo "                            </tr>
                            <tr  style=\"height: 60px;\">
                                ";
            // line 282
            echo "                            <div class=\"form-group\">
                                <td> <label style=\"text-align: center;\" for=\"inicio\" class=\"col-sm-4 control-label\">Inicio:</label></td>
                                <td>  <div class=\"col-sm-6\">
                                        <select id=\"inicio\" name=\"inicio\" style=\"width: 250px;\" class=\"form-control\">
                                            ";
            // line 286
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sitios"]) ? $context["sitios"] : $this->getContext($context, "sitios")));
            foreach ($context['_seq'] as $context["_key"] => $context["sitio"]) {
                echo "                      
                                                <option value=\"";
                // line 287
                echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                echo "</option>                         
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sitio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            echo "                                          
                                        </select>
                                    </div>  </td>                  
                            </div>
                            ";
            // line 293
            echo "                            </tr>
                            
                            <tr style=\"height: 60px;\">
                                ";
            // line 297
            echo "
                            <div class=\"form-group\">
                                <td> <label style=\"text-align: center;\" for=\"sitios\" class=\"col-sm-4 control-label\">Sitios:</label>   </td>          
                                <td><div class=\"col-sm-6\">
                                        <select multiple id=\"sitios\" style=\"width: 250px;\" name=\"sitios[]\" class=\"form-control\">
                                            ";
            // line 302
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sitios"]) ? $context["sitios"] : $this->getContext($context, "sitios")));
            foreach ($context['_seq'] as $context["_key"] => $context["sitio"]) {
                echo "                      
                                                <option value=\"";
                // line 303
                echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                echo "</option>                         
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sitio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 304
            echo "                                          
                                        </select>
                                        <i style=\"width: 250px;\">(Ctrl-Click para selección múltiple)</i> <br>
                                    </div>  </td>                  
                            </div>
                            ";
            // line 310
            echo "                            </tr>
                           
                            <tr style=\"height: 60px;\">
                                ";
            // line 314
            echo "                            <div class=\"form-group\">
                                <td><label style=\"text-align: center;\" for=\"final\" class=\"col-sm-4 control-label\">Final:</label></td>
                                <td> <div class=\"col-sm-6\">
                                        <select id=\"final\" name=\"final\" style=\"width: 250px;\" class=\"form-control\">
                                            ";
            // line 318
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sitios"]) ? $context["sitios"] : $this->getContext($context, "sitios")));
            foreach ($context['_seq'] as $context["_key"] => $context["sitio"]) {
                echo "                      
                                                <option value=\"";
                // line 319
                echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                echo "</option>                         
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sitio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 320
            echo "                                          
                                        </select>
                                    </div>     </td>               
                            </div><br>
                            ";
            // line 325
            echo "                            </tr> 
                            
                            <tr>
                                ";
            // line 329
            echo "                            <div class=\"form-group\">
                                <td > <label for=\"buscar\" class=\"col-sm-1 control-label\"></label></td>
                                <td><div class=\"col-sm-6\">                 
                                        <button class=\"btn btn-primary btn-sm\">Guardar Ruta</button>                  </div>
                            </div>
                            </td>
                            </tr>
                            ";
            // line 336
            echo "           
                        </table>
                    </form>

                </div>    

            </div>
        ";
        }
        // line 344
        echo "

        ";
        // line 346
        if (array_key_exists("sitios", $context)) {
            echo "  
            ";
            // line 348
            echo "            <div class=\"form-group\">
                <label for=\"buscar\" class=\"col-sm-1 control-label\"></label>
                <div class=\"col-sm-6\">                 
                    <input value =\"Ver Ruta\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"modal\" onclick=\"generateRoute();\"></input>
                </div>
            </div>              
            ";
            // line 354
            echo "             

        ";
        }
        // line 357
        echo "    </div>      
</div>
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
        return array (  496 => 357,  491 => 354,  483 => 348,  479 => 346,  475 => 344,  465 => 336,  456 => 329,  451 => 325,  445 => 320,  435 => 319,  429 => 318,  423 => 314,  418 => 310,  411 => 304,  401 => 303,  395 => 302,  388 => 297,  383 => 293,  377 => 288,  367 => 287,  361 => 286,  355 => 282,  351 => 279,  343 => 272,  337 => 268,  324 => 257,  322 => 256,  320 => 255,  314 => 251,  310 => 248,  302 => 241,  298 => 238,  286 => 228,  283 => 226,  268 => 212,  265 => 210,  249 => 195,  243 => 192,  229 => 179,  225 => 176,  217 => 169,  213 => 166,  200 => 155,  197 => 153,  182 => 139,  179 => 137,  162 => 121,  158 => 118,  124 => 86,  120 => 85,  115 => 83,  34 => 4,  31 => 3,  27 => 361,  25 => 3,  23 => 2,  20 => 1,);
    }
}
