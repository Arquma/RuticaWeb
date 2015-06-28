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
        echo "
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
        // line 13
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
        // line 26
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
        // line 34
        echo $this->env->getExtension('routing')->getUrl("sitios");
        echo "\">Ver Más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"item\" style=\"background-image: url(";
        // line 40
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
        // line 48
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
        // line 88
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
        // line 96
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
        // line 105
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


            <ul class=\"grid cs-style-3\">
                <div class=\"col-md-4 col-sm-6\">
                    <figure>
                        <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/sitios/1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        <figcaption>
                            <h3>Bosque nuboso</h3>
                            <h3>monteverde</h3>
                            <span>Puntarenas</span>\t\t\t\t\t\t\t
                            <a href=\"#ventanaModalDescripcionSitio\" class=\"btn btn-primary\" data-toggle=\"modal\">Visítalo</a>
                        </figcaption>
                    </figure>
                </div>\t
                <div class=\"col-md-4 col-sm-6\">
                    <figure>
                        <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/sitios/2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        <figcaption>
                            <h3>Playa Nosara</h3>
                            <span>Guanacaste</span>
                            <a href=\"#ventanaModalDescripcionSitio\" class=\"btn btn-primary\" data-toggle=\"modal\">Visítalo</a>
                        </figcaption>
                    </figure>
                </div>
                <div class=\"col-md-4 col-sm-6\">
                    <figure>
                        <img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/sitios/3.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        <figcaption>
                            <h3>Parque Nacional</h3>
                            <h3>Marino Ballena</h3>
                            <span>Puntarenas</span>
                            <a href=\"#ventanaModalDescripcionSitio\" class=\"btn btn-primary\" data-toggle=\"modal\">Visítalo</a>
                        </figcaption>
                    </figure>
                </div>
                <div class=\"col-md-4 col-sm-6\">
                    <figure>
                        <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/sitios/4.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        <figcaption>
                            <h3>Parque Recreativo</h3>
                            <h3>Los Chorros</h3>
                            <span>Alajuela</span>
                            <a href=\"#ventanaModalDescripcionSitio\" class=\"btn btn-primary\" data-toggle=\"modal\">Visítalo</a>
                        </figcaption>
                    </figure>
                </div>
                <div class=\"col-md-4 col-sm-6\">
                    <figure>
                        <img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/sitios/5.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        <figcaption>
                            <h3>Parque Nacional Tortuguero</h3>
                            <span>Limón</span>
                            <a href=\"#ventanaModalDescripcionSitio\" class=\"btn btn-primary\" data-toggle=\"modal\">Visítalo</a>

                        </figcaption>
                    </figure>
                </div>
                <div class=\"col-md-4 col-sm-6\">
                    <figure>
                        <img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/templateboostrap/img/sitios/6.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        <figcaption>
                            <h3>Playa Cocal</h3>
                            <span>Puntarenas</span>
                            <a href=\"#ventanaModalDescripcionSitio\" class=\"btn btn-primary\" data-toggle=\"modal\">Visítalo</a>
                        </figcaption>
                    </figure>
                </div>
            </ul>
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
        // line 208
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
        // line 233
        echo "\t
";
        // line 234
        $this->env->loadTemplate("RutasBundle:Base:footer.html.twig")->display($context);
        echo " \t
";
        // line 235
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
        return array (  305 => 235,  301 => 234,  298 => 233,  271 => 208,  243 => 183,  229 => 172,  215 => 161,  201 => 150,  188 => 140,  174 => 129,  147 => 105,  135 => 96,  124 => 88,  81 => 48,  70 => 40,  61 => 34,  50 => 26,  34 => 13,  21 => 2,  19 => 1,);
    }
}
