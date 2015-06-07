<?php

/* RutasBundle:Rutas:creatusrutas.html.twig */
class __TwigTemplate_0229b872ad6071b902c1a223e558a13736977a1116b0e57a63c84b02f8e940b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("RutasBundle:Base:header.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RutasBundle:Base:header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "\tRutica - Crea tus rutas
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
  ";
        // line 12
        $this->displayParentBlock("body", $context, $blocks);
        // line 13
        echo "
\t";
        // line 14
        echo " 
\t\t<div class=\"section section-breadcrumbs\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h1>Crea tus rutas</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        // line 25
        echo "
\t<div class=\"section\">
\t    <div class=\"container\">
\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-md-8\">

                \t<div class=\"section-title\" >
                        <h2>Elije las preferencias de su ruta</h2>
                        <br>
                    </div>

                    ";
        // line 38
        echo "                \t<form class=\"form-horizontal\">

                \t\t";
        // line 41
        echo "     \t\t\t\t\t<div class=\"form-group\">
        \t\t\t\t\t<label for=\"provincia\" class=\"col-sm-2 control-label\">Provincia</label>
         \t\t\t\t\t<div class=\"col-sm-6\">
            \t\t\t\t\t<select id=\"provincia\" class=\"form-control\">
            \t\t\t\t\t\t<option></option>
            \t\t\t\t\t\t<option>San José</option>
  \t\t\t\t\t\t\t\t\t<option>Alajuela</option>
  \t\t\t\t\t\t\t\t\t<option>Heredia</option>
  \t\t\t\t\t\t\t\t\t<option>Cartago</option>
  \t\t\t\t\t\t\t\t\t<option>Puntarenas</option>
  \t\t\t\t\t\t\t\t\t<option>Guanacaste</option>
  \t\t\t\t\t\t\t\t\t<option>Limón</option>                       \t\t\t\t\t
                    \t\t\t</select>
         \t\t\t\t\t</div>
     \t\t\t\t\t</div>
     \t\t\t\t\t";
        // line 57
        echo "
     \t\t\t\t\t";
        // line 59
        echo "     \t\t\t\t\t<div class=\"form-group\">
     \t\t\t\t\t\t<label for=\"actividad\" class=\"col-sm-2 control-label\">Actividad</label>
         \t\t\t\t\t<div class=\"col-sm-6\">
            \t\t\t\t\t<select id=\"actividad\" class=\"form-control\">
            \t\t\t\t\t\t<option></option>
            \t\t\t\t\t\t<option>Montaña</option>
  \t\t\t\t\t\t\t\t\t<option>Playa</option>
  \t\t\t\t\t\t\t\t\t<option>Extremo</option>
  \t\t\t\t\t\t\t\t\t<option>Ciudad</option>
  \t\t\t\t\t\t\t\t\t<option>Rural</option>\t\t\t\t\t\t                       \t\t\t\t\t
                    \t\t\t</select>
         \t\t\t\t\t</div>         \t\t\t\t\t\t
     \t\t\t\t\t</div>
     \t\t\t\t\t";
        // line 73
        echo "
     \t\t\t\t\t";
        // line 75
        echo "     \t\t\t\t\t<div class=\"form-group\">
     \t\t\t\t\t\t<label for=\"precio\" class=\"col-sm-2 control-label\">Precio</label>
         \t\t\t\t\t<div class=\"col-sm-6\">
            \t\t\t\t\t<select id=\"precio\" class=\"form-control\">
            \t\t\t\t\t\t<option></option>
            \t\t\t\t\t\t<option>Económico</option>
  \t\t\t\t\t\t\t\t\t<option>Medio</option>
  \t\t\t\t\t\t\t\t\t<option>Pura Vida</option>\t\t\t\t\t                       \t\t\t\t\t
                    \t\t\t</select>
         \t\t\t\t\t</div>         \t\t\t\t\t\t
     \t\t\t\t\t</div>
     \t\t\t\t\t";
        // line 86
        echo " 

     \t\t\t\t\t";
        // line 89
        echo "     \t\t\t\t\t<div class=\"form-group\">
     \t\t\t\t\t\t<label for=\"buscar\" class=\"col-sm-1 control-label\"></label>
     \t\t\t\t\t\t<div class\"col-sm-6\">     \t\t\t\t\t\t
   \t\t\t\t\t\t\t\t<button id=\"buscar\" type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\">Buscar</button>
   \t\t\t\t\t\t\t</div>
   \t\t\t\t\t\t</div>   \t\t\t\t\t\t
   \t\t\t\t\t\t";
        // line 96
        echo "   \t\t\t\t\t\t\t 
\t\t\t\t\t</form>
\t\t\t\t\t";
        // line 99
        echo "
                </div>\t\t\t\t

                <div class=\"col-md-4\">

                \t<div class=\"section-title\">
                   \t\t<h2><i class=\"glyphicon glyphicon-map-marker\"></i>  Pasos para crear tu ruta</h2>
                    \t<br>
                \t</div>

                \t<ul>
                \t\t<li>Completa el formulario de la derecha con los detalles de los lugares que deseas incorporar para crear tu ruta personalizada</li>
                \t\t<li> Elije un punto de inicio y fin para tu ruta </li>
                \t\t<li> Selecciona los lugares intermedios de tu ruta que deseas conocer </li>
                \t\t<li> Dale click a botón de generar ruta </li>
                \t\t<li> Verifica los detalles de tu ruta en el mapa de la izquiera </li>
                \t\t<li> Listo tienes tu ruta, ya puedes empezar a turistear </li>
                \t</ul>

                </div>           

            </div>

            <hr>";
        // line 123
        echo "
            <div class=\"row\">

            \t<div class=\"col-md-8\">            \t\t
            \t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2014000.0863537437!2d-84.25418434999999!3d9.630189200000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f92e56221acc925%3A0x6254f72535819a2b!2sCosta+Rica!5e0!3m2!1ses!2scr!4v1433606713902\" width=\"700\" height=\"400\" frameborder=\"0\" style=\"border:0\"></iframe>
            \t</div>

            \t<div class = \"col-md-4\">

            \t\t<div class=\"section-title\">
                   \t\t<h3>  Selecciona los sitios de tu ruta</h3>
                    \t<br>
                \t</div>

                \t";
        // line 138
        echo "            \t\t<form class=\"form-horizontal\" >

            \t\t\t";
        // line 141
        echo "     \t\t\t\t\t<div class=\"form-group\">
        \t\t\t\t\t<label for=\"inicio\" class=\"col-sm-2 control-label\">Inicio</label>
         \t\t\t\t\t<div class=\"col-sm-8\">
            \t\t\t\t\t<select id=\"inicio\" class=\"form-control\">            \t\t\t\t\t\t
            \t\t\t\t\t\t<option>Teatro Nacional</option>
  \t\t\t\t\t\t\t\t\t<option>Museo de los niños</option>
  \t\t\t\t\t\t\t\t\t<option>Antigua Aduana</option>
  \t\t\t\t\t\t\t\t\t<option>Museo Nacional</option>\t\t\t\t                       \t\t\t\t\t
                    \t\t\t</select>
         \t\t\t\t\t</div>
     \t\t\t\t\t</div>
     \t\t\t\t\t";
        // line 153
        echo "
     \t\t\t\t\t";
        // line 155
        echo "     \t\t\t\t\t<div class=\"form-group\">
        \t\t\t\t\t<label for=\"final\" class=\"col-sm-2 control-label\">Final</label>
         \t\t\t\t\t<div class=\"col-sm-8\">
            \t\t\t\t\t<select id=\"final\" class=\"form-control\">            \t\t\t\t\t\t
            \t\t\t\t\t\t<option>Parque metropolitano la sabana</option>
  \t\t\t\t\t\t\t\t\t<option>Museo de Arte Costarricense</option>
  \t\t\t\t\t\t\t\t\t<option>Parque de diversiones</option>
  \t\t\t\t\t\t\t\t\t<option>Multiplaza, Escazú</option>\t\t\t\t                       \t\t\t\t\t
                    \t\t\t</select>
         \t\t\t\t\t</div>
     \t\t\t\t\t</div>
     \t\t\t\t\t";
        // line 167
        echo "
     \t\t\t\t\t";
        // line 169
        echo "     \t\t\t\t\t<div class=\"form-group\">
        \t\t\t\t\t<label for=\"medio\" class=\"col-sm-2 control-label\">Camino</label>
         \t\t\t\t\t<div class=\"col-sm-8\">
            \t\t\t\t\t<select multiple id=\"medio\" class=\"form-control\">            \t\t\t\t\t\t
            \t\t\t\t\t\t<option>Teatro Nacional</option>
  \t\t\t\t\t\t\t\t\t<option>Museo de los niños</option>
  \t\t\t\t\t\t\t\t\t<option>Antigua Aduana</option>
  \t\t\t\t\t\t\t\t\t<option>Museo Nacional</option>
  \t\t\t\t\t\t\t\t\t<option>Parque metropolitano la sabana</option>
  \t\t\t\t\t\t\t\t\t<option>Museo de Arte Costarricense</option>
  \t\t\t\t\t\t\t\t\t<option>Parque de diversiones</option>
  \t\t\t\t\t\t\t\t\t<option>Multiplaza, Escazú</option>\t\t\t\t                       \t\t\t\t\t
                    \t\t\t</select>
                    \t\t\t<h6>\"Ctrl + click\" para una selección múltiple</h6>
         \t\t\t\t\t</div>
     \t\t\t\t\t</div>
     \t\t\t\t\t";
        // line 186
        echo "
     \t\t\t\t\t";
        // line 188
        echo "     \t\t\t\t\t<div class=\"form-group\">
     \t\t\t\t\t\t<label for=\"generar\" class=\"col-sm-1 control-label\"></label>
     \t\t\t\t\t\t<div class\"col-sm-8\">     \t\t\t\t\t\t
   \t\t\t\t\t\t\t\t<button id=\"generar\" type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\">Generar Ruta</button>
   \t\t\t\t\t\t\t</div>
   \t\t\t\t\t\t</div>   \t\t\t\t\t\t
   \t\t\t\t\t\t";
        // line 195
        echo "
            \t\t</form>
            \t\t";
        // line 198
        echo "
            \t</div>    \t

            </div>

        </div>
    </div>

\t";
        // line 207
        echo "\t\t";
        echo "\t
\t\t";
        // line 208
        $this->env->loadTemplate("RutasBundle:Base:footer.html.twig")->display($context);
        echo " \t
\t";
        // line 209
        echo " 

";
    }

    public function getTemplateName()
    {
        return "RutasBundle:Rutas:creatusrutas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 209,  277 => 208,  273 => 207,  263 => 198,  259 => 195,  251 => 188,  248 => 186,  230 => 169,  227 => 167,  214 => 155,  211 => 153,  198 => 141,  194 => 138,  178 => 123,  153 => 99,  149 => 96,  141 => 89,  137 => 86,  124 => 75,  121 => 73,  106 => 59,  103 => 57,  86 => 41,  82 => 38,  68 => 25,  56 => 14,  53 => 13,  51 => 12,  48 => 11,  45 => 10,  40 => 6,  37 => 5,  11 => 2,);
    }
}
