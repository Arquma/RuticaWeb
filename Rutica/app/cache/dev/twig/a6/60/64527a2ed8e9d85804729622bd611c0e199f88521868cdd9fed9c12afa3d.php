<?php

/* RutasBundle:Rutas:creatusrutas.html.twig */
class __TwigTemplate_a66064527a2ed8e9d85804729622bd611c0e199f88521868cdd9fed9c12afa3d extends Twig_Template
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
\t\t\t  <div class=\"row\">\t\t\t\t\t\t\t

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
        // line 56
        echo "            <form class=\"form-horizontal\" action=\"";
        echo $this->env->getExtension('routing')->getPath("crea_tus_rutas");
        echo "\" method=\"post\">

              ";
        // line 59
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
        // line 74
        echo "
              ";
        // line 76
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
        // line 90
        echo "
              ";
        // line 92
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
        // line 102
        echo " 

              ";
        // line 105
        echo "              <div class=\"form-group\">
                <label for=\"buscar\" class=\"col-sm-1 control-label\"></label>
                <div class\"col-sm-6\">                 
                  <button id=\"buscar\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"modal\">Buscar</button>
                </div>
              </div>              
              ";
        // line 112
        echo "                 
            </form>
            ";
        // line 115
        echo "          </div>

        </div>

        ";
        // line 119
        if (array_key_exists("sitios", $context)) {
            // line 120
            echo "        <hr>";
            // line 121
            echo "
        <div class=\"row\">                    

            <div class=\"col-md-8\" id=\"main-map\" style=\"width: 700px; height: 400px\"></div> 

            <div class=\"col-md-4\">

              <div class=\"section-title\" >
                <h3>Sitios de la ruta</h3>
                <br>
              </div>            

                ";
            // line 134
            echo "                <div class=\"form-group\">
                  <label style=\"text-align: center;\" for=\"inicio\" class=\"col-sm-4 control-label\">Inicio:</label>
                    <div class=\"col-sm-6\">
                      <select id=\"inicio\" name=\"inicio\" class=\"form-control\">
                        ";
            // line 138
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sitios"]) ? $context["sitios"] : $this->getContext($context, "sitios")));
            foreach ($context['_seq'] as $context["_key"] => $context["sitio"]) {
                echo "                      
                          <option value=\"";
                // line 139
                echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                echo "</option>                         
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sitio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "                                          
                      </select>
                    </div>                    
                </div>
                ";
            // line 145
            echo "
                ";
            // line 147
            echo "                <div class=\"form-group\">
                  <label style=\"text-align: center;\" for=\"sitios\" class=\"col-sm-4 control-label\">Sitios:</label>             
                    <div class=\"col-sm-6\">
                      <select multiple id=\"sitios\" name=\"sitios\" class=\"form-control\">
                        ";
            // line 151
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sitios"]) ? $context["sitios"] : $this->getContext($context, "sitios")));
            foreach ($context['_seq'] as $context["_key"] => $context["sitio"]) {
                echo "                      
                          <option value=\"";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                echo "</option>                         
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sitio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "                                          
                      </select>
                      <i>(Ctrl-Click para selección múltiple)</i> <br>
                    </div>                    
                </div>
                ";
            // line 159
            echo "
                ";
            // line 161
            echo "                <div class=\"form-group\">
                  <label style=\"text-align: center;\" for=\"final\" class=\"col-sm-4 control-label\">Final:</label>
                    <div class=\"col-sm-6\">
                      <select id=\"final\" name=\"final\" class=\"form-control\">
                        ";
            // line 165
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sitios"]) ? $context["sitios"] : $this->getContext($context, "sitios")));
            foreach ($context['_seq'] as $context["_key"] => $context["sitio"]) {
                echo "                      
                          <option value=\"";
                // line 166
                echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                echo "</option>                         
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sitio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "                                          
                      </select>
                    </div>                    
                </div>
                ";
            // line 172
            echo "
                ";
            // line 174
            echo "                <div class=\"form-group\">
                  <label for=\"buscar\" class=\"col-sm-1 control-label\"></label>
                  <div class\"col-sm-6\">                 
                    <input value =\"Crear ruta\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"modal\" onclick=\"generateRoute();\"></input>
                  </div>
                </div>              
                ";
            // line 180
            echo "             

            </div>    

        </div>
        ";
        }
        // line 186
        echo "
      </div>      
  </div>

\t";
        // line 191
        echo "\t\t";
        echo "\t
\t\t";
        // line 192
        $this->env->loadTemplate("RutasBundle:Base:footer.html.twig")->display($context);
        echo " \t
\t";
        // line 193
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
        return array (  319 => 193,  315 => 192,  311 => 191,  305 => 186,  297 => 180,  289 => 174,  286 => 172,  280 => 167,  270 => 166,  264 => 165,  258 => 161,  255 => 159,  248 => 153,  238 => 152,  232 => 151,  226 => 147,  223 => 145,  217 => 140,  207 => 139,  201 => 138,  195 => 134,  181 => 121,  179 => 120,  177 => 119,  171 => 115,  167 => 112,  159 => 105,  155 => 102,  143 => 92,  140 => 90,  125 => 76,  122 => 74,  106 => 59,  100 => 56,  68 => 25,  56 => 14,  53 => 13,  51 => 12,  48 => 11,  45 => 10,  40 => 6,  37 => 5,  11 => 2,);
    }
}
