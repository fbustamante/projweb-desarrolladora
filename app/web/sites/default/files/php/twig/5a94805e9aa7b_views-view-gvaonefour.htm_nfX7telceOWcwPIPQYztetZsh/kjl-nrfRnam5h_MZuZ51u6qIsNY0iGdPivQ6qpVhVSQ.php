<?php

/* modules/gavias_view/templates/views-view-gvaonefour.html.twig */
class __TwigTemplate_16395ef63bb52fc233d13596bb89eb5ca39b15e6f39d738f968a76271d01e8be extends Twig_Template
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
        $tags = array("if" => 1, "set" => 9, "for" => 11);
        $filters = array("raw" => 17, "length" => 25);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set', 'for'),
                array('raw', 'length'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        if (($context["attributes"] ?? null)) {
            // line 2
            echo "<div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
            echo ">
";
        }
        // line 4
        echo "   
  ";
        // line 5
        if (($context["title"] ?? null)) {
            // line 6
            echo "    <h3>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h3>
  ";
        }
        // line 8
        echo "
  ";
        // line 9
        $context["i"] = 0;
        // line 10
        echo "    ";
        $context["j"] = 0;
        // line 11
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 12
            echo "    ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 13
            echo "    ";
            $context["j"] = (($context["j"] ?? null) + 1);
            // line 14
            echo "    ";
            if ((($context["i"] ?? null) == 1)) {
                echo "<div class=\"big-row row\">";
            }
            // line 15
            echo "      ";
            if ((($context["i"] ?? null) == 1)) {
                // line 16
                echo "        <div class=\"item index-";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["i"] ?? null), "html", null, true));
                echo " first-item col-md-6 col-sm-12 col-xs-12\">
          <div";
                // line 17
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["row"], "content", array())));
                echo "</div>
        </div>
      ";
            } else {
                // line 20
                echo "        ";
                if ((($context["i"] ?? null) == 2)) {
                    echo " <div class=\"small-items col-md-6 col-sm-12 col-xs-12\">";
                }
                // line 21
                echo "          ";
                if (((($context["i"] ?? null) % 2) == 0)) {
                    echo "<div class=\"row\">";
                }
                // line 22
                echo "            <div class=\"item index-";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["i"] ?? null), "html", null, true));
                echo " col-sm-6 col-xs-12\">
              <div";
                // line 23
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["row"], "content", array())));
                echo "</div>
            </div>
          ";
                // line 25
                if ((((($context["i"] ?? null) % 2) == 1) || (($context["j"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                    echo " </div> ";
                }
                // line 26
                echo "        ";
                if (((($context["i"] ?? null) == 5) || (($context["j"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                    echo " </div>";
                }
                echo "    
      ";
            }
            // line 28
            echo "    ";
            if (((($context["i"] ?? null) == 5) || (($context["j"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                echo "</div>";
            }
            // line 29
            echo "    ";
            if ((($context["i"] ?? null) == 5)) {
                $context["i"] = 0;
            }
            // line 30
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
";
        // line 32
        if (($context["attributes"] ?? null)) {
            // line 33
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/gavias_view/templates/views-view-gvaonefour.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 33,  155 => 32,  152 => 31,  146 => 30,  141 => 29,  136 => 28,  128 => 26,  124 => 25,  117 => 23,  112 => 22,  107 => 21,  102 => 20,  94 => 17,  89 => 16,  86 => 15,  81 => 14,  78 => 13,  75 => 12,  70 => 11,  67 => 10,  65 => 9,  62 => 8,  56 => 6,  54 => 5,  51 => 4,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/gavias_view/templates/views-view-gvaonefour.html.twig", "/app/web/modules/gavias_view/templates/views-view-gvaonefour.html.twig");
    }
}
