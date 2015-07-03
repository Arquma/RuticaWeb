<?php

/* RutasBundle:Principal:sitiosTuristicos.html.twig */
class __TwigTemplate_9771e1f6e8693d087a776da8ae10077e30ac0b5d43d77d3f843e24c977b4565e extends Twig_Template
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
<script>
    \$(document).ready(function (e) {


        \$('#ventanaModalDescripcionSitio').on('show.bs.modal', function (e) {
            var imagen = \$(e.relatedTarget).data().test;
            var desc = \$(e.relatedTarget).data().desc;
            var nombre = \$(e.relatedTarget).data().nombre;
            var actividad = \$(e.relatedTarget).data().actividad;
            var provincia = \$(e.relatedTarget).data().provincia;
            var id = \$(e.relatedTarget).data().id;

            document.getElementById('rutasSug').textContent = 'NO';


    ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sitiosRutaSugerida"]) ? $context["sitiosRutaSugerida"] : $this->getContext($context, "sitiosRutaSugerida")));
        foreach ($context['_seq'] as $context["_key"] => $context["entitySR"]) {
            // line 19
            echo "
                if (";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entitySR"], "idsitio", array()), "id", array()), "html", null, true);
            echo " == id) {
                    document.getElementById('rutasSug').textContent = '";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entitySR"], "idrutasugerida", array()), "nombre", array()), "html", null, true);
            echo "';
                }



    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entitySR'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
                document.getElementById('imagen').src = \"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagenes_sitios/"), "html", null, true);
        echo "\";
                document.getElementById('imagen').src += imagen;
                document.getElementById('desc').value = desc;
                document.getElementById('nombreSitio').textContent = nombre;
                document.getElementById('provincia').textContent = provincia;
                document.getElementById('actividad').textContent = actividad;
            });
        });

</script>


<!-- TÃ­tulo de pÃ¡gina -->
<div class=\"section section-breadcrumbs\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1>Sitios Turísticos</h1>
            </div>
        </div>
    </div>
</div>
<!-- TÃ­tulo de pÃ¡gina -->\t\t

<div class=\"section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <h2>Lista de sitios Turísticos registrados</h2>
                <h3>playa, montaña y diferentes locaciones para turistear</h3>\t\t\t\t\t
            </div>
        </div>
    </div>
</div>\t

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
                        <th style=\"width: 570px;\">DescripciÃ³n</th>
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


<div class=\"section\">
    <div class=\"container\">
        <div class=\"row\">

            <ul class=\"grid cs-style-2\"> 
                ";
        // line 137
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 138
            echo "                    <div class=\"col-md-4 col-sm-6\">
                        <figure>
                            ";
            // line 140
            $context["foo"] = ("imagenes_sitios/" . $this->getAttribute($context["entity"], "imagen", array()));
            echo "   

                            <img src=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo"))), "html", null, true);
            echo "\" alt=\"\" height=\"250px\" width=\"400px\" href=\"#ventanaModalDescripcionSitio\" class=\"btn btn-primary\" data-toggle=\"modal\" data-test=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "imagen", array()), "html", null, true);
            echo "\" 
                                 data-desc=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
            echo "\" data-nombre=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "\" data-provincia=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "IdProvincia", array()), "nombre", array()), "html", null, true);
            echo "\"
                                 data-actividad=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "idActividad", array()), "nombre", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\"/>

                            <figcaption>
                                <h3>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</h3>
                                <span>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "IdProvincia", array()), "nombre", array()), "html", null, true);
            echo "</span><br>
                                
                            </figcaption>
                        </figure>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "            </ul>
        </div>

    </div>
</div>

";
        // line 161
        echo "\t
";
        // line 162
        $this->env->loadTemplate("RutasBundle:Base:footer.html.twig")->display($context);
        echo " \t
";
        // line 163
        echo " \t\t

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "RutasBundle:Principal:sitiosTuristicos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 163,  239 => 162,  236 => 161,  228 => 154,  216 => 148,  212 => 147,  204 => 144,  196 => 143,  190 => 142,  185 => 140,  181 => 138,  177 => 137,  65 => 28,  62 => 27,  50 => 21,  46 => 20,  43 => 19,  39 => 18,  21 => 2,  19 => 1,);
    }
}
