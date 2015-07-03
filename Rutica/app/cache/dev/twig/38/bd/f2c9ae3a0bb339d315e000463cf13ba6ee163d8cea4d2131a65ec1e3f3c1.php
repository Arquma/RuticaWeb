<?php

/* RutasBundle:Principal:home.html.twig */
class __TwigTemplate_38bdf2c9ae3a0bb339d315e000463cf13ba6ee163d8cea4d2131a65ec1e3f3c1 extends Twig_Template
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
        // line 2
        echo "<script>
    \$(document).ready(function (e) {


    \$('#ventanaModalDescripcionSitio').on('show.bs.modal', function (e) {
    var imagen = \$(e.relatedTarget).data().test;
            var desc = \$(e.relatedTarget).data().desc;
            var nombre = \$(e.relatedTarget).data().nombre;
            var actividad = \$(e.relatedTarget).data().actividad;
            var provincia = \$(e.relatedTarget).data().provincia;
            var id = \$(e.relatedTarget).data().id;
            document.getElementById('rutasSug').textContent = 'NO';    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sitiosRutaSugerida"]) ? $context["sitiosRutaSugerida"] : $this->getContext($context, "sitiosRutaSugerida")));
        foreach ($context['_seq'] as $context["_key"] => $context["entitySR"]) {
            // line 14
            echo "
                        if (";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entitySR"], "idsitio", array()), "id", array()), "html", null, true);
            echo " == id) {
                document.getElementById('rutasSug').textContent = '";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entitySR"], "idrutasugerida", array()), "nombre", array()), "html", null, true);
            echo "';
                }
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entitySR'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
        if (provincia==1) {
        document.getElementById('provincia').textContent = \"San José\";
        }if (provincia==2) {
        document.getElementById('provincia').textContent = \"Alajuela\";
        }if (provincia==3) {
        document.getElementById('provincia').textContent = \"Cartago\";
        }if (provincia==4) {
        document.getElementById('provincia').textContent = \"Heredia\";
        }if (provincia==5) {
        document.getElementById('provincia').textContent = \"Puntarenas\";
        }if (provincia==6) {
        document.getElementById('provincia').textContent = \"Guanacaste\";
        }if (provincia==7) {
        document.getElementById('provincia').textContent = \"Limón\";
        }if (actividad==1) {
        document.getElementById('actividad').textContent = \"Ciudad\";
        }if (actividad==2) {
        document.getElementById('actividad').textContent = \"Rural\";
        }if (actividad==3) {
        document.getElementById('actividad').textContent = \"Aventura\";
        }if (actividad==4) {
        document.getElementById('actividad').textContent = \"Extremo\";
        }if (actividad==5) {
        document.getElementById('actividad').textContent = \"Ecológico\";
        }if (actividad==6) {
        document.getElementById('actividad').textContent = \"Familiar\";
        }


        document.getElementById('imagen').src = \"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes_sitios/"), "html", null, true);
        echo "\";
                document.getElementById('imagen').src += imagen;
                document.getElementById('desc').value = desc;
                document.getElementById('nombreSitio').textContent = nombre;
        });
        });

</script>
<!-- Sección de imágenes que se mueven \"Carrusel\" -->

<section id=\"main-slider\" class=\"no-margin\">
    <div class=\"carousel slide\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#main-slider\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#main-slider\" data-slide-to=\"1\"></li>
            <li data-target=\"#main-slider\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
            <div class=\"item active\" style=\"background-image: url(";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/slides/1.jpg"), "html", null, true);
        echo ")\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"carousel-content centered\">
                                <h2 class=\"animation animated-item-1\">¡Conoce Costa Rica con nosotros!</h2> 
                                <br>
                                <p class=\"animation animated-item-2\">Aprende de nuestros sitios y enterate de rutas turísticas o crealas tu mismo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"item\" style=\"background-image: url(";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/slides/2.jpg"), "html", null, true);
        echo ")\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"carousel-content center centered\">
                                <h2 class=\"animation animated-item-1\">Visita Nuevos lugares</h2>
                                <p class=\"animation animated-item-2\">Escoje el que más le gusta y aproveche los precios de temporada.</p>
                                <br>
                                <a class=\"btn btn-md animation animated-item-3\" href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getUrl("sitios");
        echo "\">Ver Más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"item\" style=\"background-image: url(";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/slides/3.jpg"), "html", null, true);
        echo ")\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"carousel-content centered\">
                                <h2 class=\"animation animated-item-1\">Planee sus vacaciones</h2>
                                <p class=\"animation animated-item-2\">Cree sus propias rutas y aproveche </p>
                                <br>
                                <a class=\"btn btn-md animation animated-item-3\" href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getUrl("crea_tus_rutas");
        echo "\">Ver Más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class=\"prev hidden-xs\" href=\"#main-slider\" data-slide=\"prev\">
        <i class=\"icon-angle-left\"></i>
    </a>
    <a class=\"next hidden-xs\" href=\"#main-slider\" data-slide=\"next\">
        <i class=\"icon-angle-right\"></i>
    </a>
</section>
<!-- Fin de sección de imágenes que se mueven \"Carrusel\" -->

<!-- Modal -->
<div class=\"container\">
    <div class=\"modal fade\" id=\"ventanaModalDescripcionSitio\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <!--Header del modal-->
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 id=\"nombreSitio\" class=\"modal-title \"></h4>   
                </div>
                <!--Contenido de la ventana-->
                <div class=\"modal-body\" align=\"center\">
                    <img id=\"imagen\" src=\"\" width=\"550\" height=\"350\" title=\"Destino\" alt=\"\" />
                </div>
                <center>
                    <table>
                        <tr>
                        <thead>
                        <th style=\"width: 120px;\">Provincia</th>
                        <th style=\"width: 120px;\">Actividad</th>
                        <th style=\"width: 120px;\">Rutas</th>

                        </thead>
                        </tr> 
                        <tbody>
                            <tr>
                                <td>
                                    <p id=\"provincia\"></p>  
                                </td>

                                <td>
                                    <p id=\"actividad\"></p>  
                                </td>
                                <td>
                                    <p id=\"rutasSug\"></p>  
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </center><br>

                <center>
                    <table>
                        <tr>
                        <thead>
                        <th style=\"width: 570px;\">Descripción</th>
                        </tr>    
                        </thead>
                    </table>      


                    <textarea id=\"desc\" disabled=\"true\" rows=\"6\" cols=\"76\" al=\"center\"></textarea>
                </center>
                <!--Footer de la ventana-->
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Cerrar</button>
                </div>
            </div>
        </div>


    </div>

</div>







<!-- Barra vacía despues de las imágenes -->
<div class=\"section section-dark\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"calltoaction-wrapper\">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin de la Barra vacía despues de las imágenes -->


<div class=\"section section-white\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-sm-6\">
                <div class=\"service-wrapper\">
                    <i class=\"glyphicon glyphicon-plane\"></i>
                    <h3>Conoce cada rincón de Costa Rica</h3>
                    <p>Escápate de la rutina y disfrute en familia un descanso en la playa, un paseo por la montaña o descubrí una nueva aventura con tus amigos.</p>
                    <a href=\"";
        // line 214
        echo $this->env->getExtension('routing')->getUrl("sitios");
        echo "\" class=\"btn\">Ver Más</a>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <div class=\"service-wrapper\">
                    <i class=\"glyphicon glyphicon-road\"></i>
                    <h3>Visita las rutas que hemos creado para disfrutar</h3>
                    <p>Pegate la turisteada de tu vida con nuestras rutas preelaboradas.</p>
                    <a href=\"";
        // line 222
        echo $this->env->getExtension('routing')->getUrl("rutas_sugeridas");
        echo "\" class=\"btn\">Ver Más</a>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <div class=\"service-wrapper\">
                    <i class=\"glyphicon glyphicon-map-marker\"></i>
                    <h3>Elije como explorar nuestro país</h3>
                    <br>\t\t        \t\t\t
                    <p>Conoce las bellezas ocultas de Costa Rica creando tus propias rutas.</p>\t\t        \t\t\t
                    <a href=\"";
        // line 231
        echo $this->env->getExtension('routing')->getUrl("crea_tus_rutas");
        echo "\" class=\"btn\">Ver Más</a>
                </div>
            </div>
        </div>
    </div>
</div>\t    


<hr>

<!-- Sección de los nuevos sitios turísticos -->\t

<div class=\"section section-white\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"section-title\">
                <h1>Nuevos sitios turísticos</h1>
            </div>


            <ul class=\"grid cs-style-2\"> 
                ";
        // line 253
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ultimoSitios"]) ? $context["ultimoSitios"] : $this->getContext($context, "ultimoSitios")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 254
            echo "                    <div class=\"col-md-4 col-sm-6\">
                        <figure>
                            ";
            // line 256
            $context["foo"] = ("imagenes_sitios/" . $this->getAttribute($context["entity"], "imagen", array()));
            echo "   

                            <img src=\"";
            // line 258
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo"))), "html", null, true);
            echo "\" alt=\"\" height=\"250px\" width=\"400px\" href=\"#ventanaModalDescripcionSitio\" class=\"btn btn-primary\" data-toggle=\"modal\" data-test=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "imagen", array()), "html", null, true);
            echo "\" 
                                 data-desc=\"";
            // line 259
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
            echo "\" data-nombre=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "\" data-provincia=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id_provincia", array()), "html", null, true);
            echo "\"
                                 data-actividad=\"";
            // line 260
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id_actividad", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\"/>

                            <figcaption>
                                <h3>";
            // line 263
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</h3>
                                ";
            // line 264
            if (($this->getAttribute($context["entity"], "id_provincia", array()) == 1)) {
                // line 265
                echo "                                    <span>San José</span><br>
                                ";
            }
            // line 267
            echo "                                ";
            if (($this->getAttribute($context["entity"], "id_provincia", array()) == 2)) {
                // line 268
                echo "                                    <span>Alajuela</span><br>
                                ";
            }
            // line 270
            echo "                                ";
            if (($this->getAttribute($context["entity"], "id_provincia", array()) == 3)) {
                // line 271
                echo "                                    <span>Cartago</span><br>
                                ";
            }
            // line 273
            echo "                                ";
            if (($this->getAttribute($context["entity"], "id_provincia", array()) == 4)) {
                // line 274
                echo "                                    <span>Heredia</span><br>
                                ";
            }
            // line 276
            echo "                                ";
            if (($this->getAttribute($context["entity"], "id_provincia", array()) == 5)) {
                // line 277
                echo "                                    <span>Puntarenas</span><br>
                                ";
            }
            // line 279
            echo "                                ";
            if (($this->getAttribute($context["entity"], "id_provincia", array()) == 6)) {
                // line 280
                echo "                                    <span>Guanacaste</span><br>
                                ";
            }
            // line 282
            echo "                                ";
            if (($this->getAttribute($context["entity"], "id_provincia", array()) == 7)) {
                // line 283
                echo "                                    <span>Limón</span><br>
                                ";
            }
            // line 285
            echo "                            </figcaption>
                        </figure>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        echo "            </ul>
        </div>
    </div>
</div>


<div class=\"container\">
    <div class=\"modal fade\" id=\"ventanaModalDescripcionSitio\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <!--Header del modal-->
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title \">Bosque nuboso Monteverde</h4>   
                </div>
                <!--Contenido de la ventana-->
                <div class=\"modal-body\" align=\"center\">
                    <img src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/sitios/1.jpg"), "html", null, true);
        echo "\" width=\"550\" height=\"350\" title=\"Destino\" alt=\"\" />
                </div>
                <div>
                    <p>Provincia: Puntarenas</p>
                    <p>Actividad: Aventura</p>
                    <p>Descrición: Con un bosque tropical nuboso mundialmente famoso la Reserva Biológica Monteverde 
                        es una de las áreas protegidas privadas más importantes de Costa Rica. Con un 90% de selva 
                        virgen su biodiversidad de ecosistemas reúne a unos 70.000 amantes de la naturaleza al año 
                        provenientes de diversos países. </p>
                </div>

                <!--Footer de la ventana-->
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Cerrar</button>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- termina la sección de los nuevos sitios turísticos -->

";
        // line 331
        echo "\t
";
        // line 332
        $this->env->loadTemplate("RutasBundle:Base:footer.html.twig")->display($context);
        echo " \t
";
        // line 333
        echo " \t\t

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "RutasBundle:Principal:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  466 => 333,  462 => 332,  459 => 331,  432 => 306,  413 => 289,  404 => 285,  400 => 283,  397 => 282,  393 => 280,  390 => 279,  386 => 277,  383 => 276,  379 => 274,  376 => 273,  372 => 271,  369 => 270,  365 => 268,  362 => 267,  358 => 265,  356 => 264,  352 => 263,  344 => 260,  336 => 259,  330 => 258,  325 => 256,  321 => 254,  317 => 253,  292 => 231,  280 => 222,  269 => 214,  154 => 102,  143 => 94,  134 => 88,  123 => 80,  107 => 67,  86 => 49,  54 => 19,  45 => 16,  41 => 15,  38 => 14,  34 => 13,  21 => 2,  19 => 1,);
    }
}
