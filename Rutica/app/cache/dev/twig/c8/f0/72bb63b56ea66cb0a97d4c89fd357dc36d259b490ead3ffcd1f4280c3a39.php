<?php

/* RutasBundle:Rutas:creatusrutas.html.twig */
class __TwigTemplate_c8f072bb63b56ea66cb0a97d4c89fd357dc36d259b490ead3ffcd1f4280c3a39 extends Twig_Template
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
        echo "  Rutica - Crea tus rutas
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
  ";
        // line 14
        echo " 
    <div class=\"section section-breadcrumbs\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <h1>Crea tus rutas</h1>
          </div>
        </div>
      </div>
    </div>
  ";
        // line 25
        echo "
  <div class=\"section\">
      <div class=\"container\">             

        <div class=\"row\">             


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
        // line 58
        echo "            <form class=\"form-horizontal\" action=\"";
        echo $this->env->getExtension('routing')->getPath("crea_tus_rutas");
        echo "\" method=\"post\">

              ";
        // line 61
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
        // line 76
        echo "
              ";
        // line 78
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
        // line 92
        echo "
              ";
        // line 94
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
        // line 104
        echo " 

              ";
        // line 107
        echo "              <div class=\"form-group\">
                <label for=\"buscar\" class=\"col-sm-1 control-label\"></label>
                <div class\"col-sm-6\">                 
                  <button id=\"buscar\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"modal\">Buscar</button>
                </div>
              </div>              
              ";
        // line 114
        echo "                 
            </form>
            ";
        // line 117
        echo "          </div>

        </div>

        ";
        // line 121
        if (array_key_exists("sitios", $context)) {
            // line 122
            echo "        <hr>";
            // line 123
            echo "
        <div class=\"row\">                    

            <div class=\"col-md-8\" id=\"main-map\" style=\"width: 700px; height: 400px\"></div> 

            <div class=\"col-md-4\">

              <div class=\"section-title\" >
                <h3>Sitios de la ruta</h3>
                <br>
              </div>            

                ";
            // line 136
            echo "                <div class=\"form-group\">
                  <label style=\"text-align: center;\" for=\"inicio\" class=\"col-sm-4 control-label\">Inicio:</label>
                    <div class=\"col-sm-6\">
                      <select id=\"inicio\" name=\"inicio\" class=\"form-control\">
                        ";
            // line 140
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sitios"]) ? $context["sitios"] : $this->getContext($context, "sitios")));
            foreach ($context['_seq'] as $context["_key"] => $context["sitio"]) {
                echo "                      
                          <option value=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                echo "</option>                         
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sitio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "                                          
                      </select>
                    </div>                    
                </div>
                ";
            // line 147
            echo "
                ";
            // line 149
            echo "                <div class=\"form-group\">
                  <label style=\"text-align: center;\" for=\"sitios\" class=\"col-sm-4 control-label\">Sitios:</label>             
                    <div class=\"col-sm-6\">
                      <select multiple id=\"sitios\" name=\"sitios\" class=\"form-control\">
                        ";
            // line 153
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sitios"]) ? $context["sitios"] : $this->getContext($context, "sitios")));
            foreach ($context['_seq'] as $context["_key"] => $context["sitio"]) {
                echo "                      
                          <option value=\"";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                echo "</option>                         
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sitio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "                                          
                      </select>
                      <i>(Ctrl-Click para selección múltiple)</i> <br>
                    </div>                    
                </div>
                ";
            // line 161
            echo "
                ";
            // line 163
            echo "                <div class=\"form-group\">
                  <label style=\"text-align: center;\" for=\"final\" class=\"col-sm-4 control-label\">Final:</label>
                    <div class=\"col-sm-6\">
                      <select id=\"final\" name=\"final\" class=\"form-control\">
                        ";
            // line 167
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sitios"]) ? $context["sitios"] : $this->getContext($context, "sitios")));
            foreach ($context['_seq'] as $context["_key"] => $context["sitio"]) {
                echo "                      
                          <option value=\"";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                echo "</option>                         
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sitio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "                                          
                      </select>
                    </div>                    
                </div>
                ";
            // line 174
            echo "
                ";
            // line 176
            echo "                <div class=\"form-group\">
                  <label for=\"buscar\" class=\"col-sm-1 control-label\"></label>
                  <div class\"col-sm-6\">                 
                    <input value =\"Crear ruta\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"modal\" onclick=\"generateRoute();\"></input>
                  </div>
                </div>              
                ";
            // line 182
            echo "             

            </div>    

        </div>
        ";
        }
        // line 188
        echo "
      </div>      
  </div>

  ";
        // line 193
        echo "    ";
        echo " 
    ";
        // line 194
        $this->env->loadTemplate("RutasBundle:Base:footer.html.twig")->display($context);
        echo "   
  ";
        // line 195
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
        return array (  321 => 195,  317 => 194,  313 => 193,  307 => 188,  299 => 182,  291 => 176,  288 => 174,  282 => 169,  272 => 168,  266 => 167,  260 => 163,  257 => 161,  250 => 155,  240 => 154,  234 => 153,  228 => 149,  225 => 147,  219 => 142,  209 => 141,  203 => 140,  197 => 136,  183 => 123,  181 => 122,  179 => 121,  173 => 117,  169 => 114,  161 => 107,  157 => 104,  145 => 94,  142 => 92,  127 => 78,  124 => 76,  108 => 61,  102 => 58,  68 => 25,  56 => 14,  53 => 13,  51 => 12,  48 => 11,  45 => 10,  40 => 6,  37 => 5,  11 => 2,);
    }
}
