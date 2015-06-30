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
<<<<<<< HEAD
\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-md-8\">

                \t<div class=\"section-title\" >
                        <h2>Elije las preferencias de su ruta</h2>
                        <br>
                    </div>

                    ";
        // line 39
        echo "                \t<form class=\"form-horizontal\">

                \t\t";
        // line 42
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
        // line 58
        echo "
     \t\t\t\t\t";
        // line 60
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
        // line 74
        echo "
     \t\t\t\t\t";
        // line 76
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
        // line 87
        echo " 

     \t\t\t\t\t";
        // line 90
        echo "     \t\t\t\t\t<div class=\"form-group\">
     \t\t\t\t\t\t<label for=\"buscar\" class=\"col-sm-1 control-label\"></label>
                                                <div class=\"col-sm-6\">     \t\t\t\t\t\t
                                                    <button id=\"buscar\" type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\">Buscar</button>
                                                </div>
                                        </div>   \t\t\t\t\t\t
   \t\t\t\t\t\t";
        // line 97
        echo "   \t\t\t\t\t\t\t 
\t\t\t\t\t</form>
\t\t\t\t\t";
        // line 100
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
=======
\t\t\t  <div class=\"row\">\t\t\t\t\t\t\t
>>>>>>> dev-olman

          <div class = \"col-md-8\">

            <div class=\"section-title\">
              <h2><i class=\"glyphicon glyphicon-map-marker\"></i>  Pasos para crear tu ruta</h2>
              <br>
            </div>

            <ul>
              <li> Completa el formulario de la derecha con las características de los lugares que se añadiran en tu ruta</li>
              <li> Selecciona un punto de inicio y final para tu ruta en el formulario a la derecha del mapa</li>
              <li> Selecciona los puntos por donde deseas que pase la ruta </li>
              <li> Cuando termines de agregar lugares a tu ruta, presiona el botón, gerear ruta al final del formulario </li>
              <li> Verifica los detalles de tu ruta en el mapa</li>
              <li> Listo ya tienes tu ruta, ya puedes empezar a turistear </li>
            </ul>

          </div>

          <div class = \"col-md-4\">

            <div class=\"section-title\" >
              <h3>Elije las preferencias de su ruta</h3>
              <br>
            </div>

            ";
        // line 150
        echo "            <form class=\"form-horizontal\" action=\"";
        echo $this->env->getExtension('routing')->getPath("crea_tus_rutas");
        echo "\" method=\"post\">

              ";
        // line 153
        echo "              <div class=\"form-group\">
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
        // line 168
        echo "
              ";
        // line 170
        echo "              <div class=\"form-group\">
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
        // line 184
        echo "
              ";
        // line 186
        echo "              <div class=\"form-group\">
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
        // line 196
        echo " 

              ";
        // line 199
        echo "              <div class=\"form-group\">
                <label for=\"buscar\" class=\"col-sm-1 control-label\"></label>
                <div class\"col-sm-6\">                 
                  <button id=\"buscar\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"modal\">Buscar</button>
                </div>
              </div>              
              ";
        // line 206
        echo "                 
            </form>
            ";
        // line 209
        echo "          </div>

        </div>

        ";
        // line 213
        if (array_key_exists("sitios", $context)) {
            // line 214
            echo "        <hr>";
            // line 215
            echo "
        <div class=\"row\">                    

            <div class=\"col-md-8\" id=\"main-map\" style=\"width: 700px; height: 400px\"></div> 

            <div class=\"col-md-4\">

              <div class=\"section-title\" >
                <h3>Sitios de la ruta</h3>
                <br>
              </div>            

                ";
            // line 228
            echo "                <div class=\"form-group\">
                  <label style=\"text-align: center;\" for=\"inicio\" class=\"col-sm-4 control-label\">Inicio:</label>
                    <div class=\"col-sm-6\">
                      <select id=\"inicio\" name=\"inicio\" class=\"form-control\">
                        ";
            // line 232
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sitios"]) ? $context["sitios"] : $this->getContext($context, "sitios")));
            foreach ($context['_seq'] as $context["_key"] => $context["sitio"]) {
                echo "                      
                          <option value=\"";
                // line 233
                echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                echo "</option>                         
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sitio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            echo "                                          
                      </select>
                    </div>                    
                </div>
                ";
            // line 239
            echo "
                ";
            // line 241
            echo "                <div class=\"form-group\">
                  <label style=\"text-align: center;\" for=\"sitios\" class=\"col-sm-4 control-label\">Sitios:</label>             
                    <div class=\"col-sm-6\">
                      <select multiple id=\"sitios\" name=\"sitios\" class=\"form-control\">
                        ";
            // line 245
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sitios"]) ? $context["sitios"] : $this->getContext($context, "sitios")));
            foreach ($context['_seq'] as $context["_key"] => $context["sitio"]) {
                echo "                      
                          <option value=\"";
                // line 246
                echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                echo "</option>                         
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sitio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "                                          
                      </select>
                      <i>(Ctrl-Click para selección múltiple)</i> <br>
                    </div>                    
                </div>
                ";
            // line 253
            echo "
                ";
            // line 255
            echo "                <div class=\"form-group\">
                  <label style=\"text-align: center;\" for=\"final\" class=\"col-sm-4 control-label\">Final:</label>
                    <div class=\"col-sm-6\">
                      <select id=\"final\" name=\"final\" class=\"form-control\">
                        ";
            // line 259
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sitios"]) ? $context["sitios"] : $this->getContext($context, "sitios")));
            foreach ($context['_seq'] as $context["_key"] => $context["sitio"]) {
                echo "                      
                          <option value=\"";
                // line 260
                echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                echo "</option>                         
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sitio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "                                          
                      </select>
                    </div>                    
                </div>
                ";
            // line 266
            echo "
                ";
            // line 268
            echo "                <div class=\"form-group\">
                  <label for=\"buscar\" class=\"col-sm-1 control-label\"></label>
                  <div class\"col-sm-6\">                 
                    <input value =\"Crear ruta\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"modal\" onclick=\"generateRoute();\"></input>
                  </div>
                </div>              
                ";
            // line 274
            echo "             

            </div>    

        </div>
        ";
        }
        // line 280
        echo "
      </div>      
  </div>

\t";
        // line 285
        echo "\t\t";
        echo "\t
\t\t";
        // line 286
        $this->env->loadTemplate("RutasBundle:Base:footer.html.twig")->display($context);
        echo " \t
\t";
        // line 287
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
        return array (  424 => 287,  420 => 286,  416 => 285,  410 => 280,  402 => 274,  394 => 268,  391 => 266,  385 => 261,  375 => 260,  369 => 259,  363 => 255,  360 => 253,  353 => 247,  343 => 246,  337 => 245,  331 => 241,  328 => 239,  322 => 234,  312 => 233,  306 => 232,  300 => 228,  286 => 215,  284 => 214,  282 => 213,  276 => 209,  272 => 206,  264 => 199,  260 => 196,  248 => 186,  245 => 184,  230 => 170,  227 => 168,  211 => 153,  205 => 150,  154 => 100,  150 => 97,  142 => 90,  138 => 87,  125 => 76,  122 => 74,  107 => 60,  104 => 58,  87 => 42,  83 => 39,  68 => 25,  56 => 14,  53 => 13,  51 => 12,  48 => 11,  45 => 10,  40 => 6,  37 => 5,  11 => 2,);
    }
}
