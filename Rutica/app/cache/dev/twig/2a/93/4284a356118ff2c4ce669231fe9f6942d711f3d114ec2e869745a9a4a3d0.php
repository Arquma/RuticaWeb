<?php

/* RutasBundle:Rutas:sugeridas.html.twig */
class __TwigTemplate_2a934284a356118ff2c4ce669231fe9f6942d711f3d114ec2e869745a9a4a3d0 extends Twig_Template
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
        echo "    Rutica - Rutas Sugeridas
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
                        <h1>Rutas sugeridas</h1>
                    </div>
                </div>
            </div>
        </div>
    ";
        // line 24
        echo " 

    <div class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">

                    <div class=\"section-title\">
                         <h2><i class=\"glyphicon glyphicon-map-marker\"></i>Ve las rutas que hemos elegido para ti</h2>
                        <br>
                    </div>

                    <ul>
                        <li>Selecciona el nombre de la ruta </li>
                        <li>Da click en el botón de ver detalles del sitio </li>
                        <li>Selecciona el botón de ver ruta </li>                       
                        <li> Listo ya tienes tu ruta, ya puedes empezar a turistear </li>
                    </ul>
                </div>

                <div class=\"col-sm-4\">

                    <br>
                    <br>
                    <div class=\"section-title\" >
                        <h3>Estas rutas te sugerimos para vacacionar!!!</h3>
                        <br>
                    </div>

                    ";
        // line 54
        echo "                        <form class=\"form-horizontal\" action=\"";
        echo $this->env->getExtension('routing')->getPath("rutas_sugeridas");
        echo "\" method=\"post\">

                            ";
        // line 57
        echo "                            <div class=\"form-group\">
                                <label style=\"text-align: center;\" for=\"nombre\" class=\"col-sm-4 control-label\">Nombre:</label>
                                <div class=\"col-sm-8\">
                                    <select id=\"nombre\" name=\"nombre\" class=\"form-control\" onchange=\"test();\">

                                        ";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sugeridas"]) ? $context["sugeridas"] : $this->getContext($context, "sugeridas")));
        foreach ($context['_seq'] as $context["_key"] => $context["sugerida"]) {
            // line 63
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sugerida"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sugerida"], "nombre", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sugerida'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                   
                                                   
                                    </select>
                                </div>
                            </div>
                            ";
        // line 70
        echo "
                            ";
        // line 72
        echo "                            <div class=\"form-group\">
                                <label for=\"buscar\" class=\"col-sm-1 control-label\"></label>
                                <div class\"col-sm-6\">                 
                                    <input value =\"Buscar ruta\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"modal\"></input>
                                </div>
                            </div>              
                            ";
        // line 79
        echo "
                        </form> 
                    ";
        // line 81
        echo " 

                </div>
            </div>

            <hr>
            ";
        // line 87
        if (array_key_exists("sitios", $context)) {
            // line 88
            echo "            <div class=\"row\">

                <div class=\"col-md-8\" id=\"main-map\" style=\"width: 600px; height: 300px\"></div>

                <div class=\"col-md-4\">

                    <div class=\"section-title\" >
                        <h3>Información de la ruta</h3>
                        <br>
                    </div>            

                    ";
            // line 100
            echo "                    <div class=\"form-group\">
                        <label style=\"text-align: center;\" for=\"inicio\" class=\"col-sm-4 control-label\">Inicio:</label>
                        <div class=\"col-sm-6\">
                            <input  style=\"width: 320px\" type=\"text\" id = \"inicio\" name=\"inicio\" value=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, (isset($context["sitios"]) ? $context["sitios"] : $this->getContext($context, "sitios"))), "nombre", array()), "html", null, true);
            echo "\" disabled>
                        </div>                    
                    </div>
                    ";
            // line 107
            echo "
                    ";
            // line 109
            echo "                    <div class=\"form-group\">
                        <label style=\"text-align: center;\" for=\"sitios\" class=\"col-sm-4 control-label\">Sitios:</label>        
                        <div class=\"col-sm-6\">
                            <select multiple style=\"width: 320px\" id=\"sitios\" name=\"sitios\" class=\"form-control\" disabled>
                            ";
            // line 113
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sitios"]) ? $context["sitios"] : $this->getContext($context, "sitios")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["sitio"]) {
                // line 114
                echo "                                ";
                if (( !$this->getAttribute($context["loop"], "first", array()) &&  !$this->getAttribute($context["loop"], "last", array()))) {
                    // line 115
                    echo "                                    <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sitio"], "nombre", array()), "html", null, true);
                    echo "</option>
                                ";
                }
                // line 116
                echo "                                              
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sitio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                                          
                            </select>                      
                        </div>                    
                    </div>
                    ";
            // line 122
            echo "
                    ";
            // line 124
            echo "                    <div class=\"form-group\">
                    <label style=\"text-align: center;\" for=\"final\" class=\"col-sm-4 control-label\">Final:</label>
                        <div class=\"col-sm-6\">                      
                            <input  style=\"width: 320px\" type=\"text\" id = \"final\" name=\"final\" value=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute(twig_last($this->env, (isset($context["sitios"]) ? $context["sitios"] : $this->getContext($context, "sitios"))), "nombre", array()), "html", null, true);
            echo "\" disabled>
                        </div>                    
                    </div>
                    ";
            // line 131
            echo "
                    ";
            // line 133
            echo "                                    
                    <input value = \"Ver ruta\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"modal\" onclick=\"showRoute();\"></input>
                                    
                    ";
            // line 136
            echo "  

                </div>                

            </div>
            ";
        }
        // line 141
        echo "            

        </div>
    </div>

    ";
        // line 147
        echo "        ";
        echo "   
        ";
        // line 148
        $this->env->loadTemplate("RutasBundle:Base:footer.html.twig")->display($context);
        echo "   
    ";
        // line 150
        echo "
";
    }

    public function getTemplateName()
    {
        return "RutasBundle:Rutas:sugeridas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 150,  282 => 148,  278 => 147,  271 => 141,  263 => 136,  258 => 133,  255 => 131,  249 => 127,  244 => 124,  241 => 122,  235 => 117,  220 => 116,  212 => 115,  209 => 114,  192 => 113,  186 => 109,  183 => 107,  177 => 103,  172 => 100,  159 => 88,  157 => 87,  149 => 81,  145 => 79,  137 => 72,  134 => 70,  127 => 64,  116 => 63,  112 => 62,  105 => 57,  99 => 54,  68 => 24,  56 => 14,  53 => 13,  51 => 12,  48 => 11,  45 => 10,  40 => 6,  37 => 5,  11 => 2,);
    }
}
