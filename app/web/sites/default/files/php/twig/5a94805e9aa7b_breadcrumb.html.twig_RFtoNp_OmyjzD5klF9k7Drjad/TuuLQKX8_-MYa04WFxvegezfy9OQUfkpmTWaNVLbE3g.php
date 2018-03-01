<?php

/* themes/gavias_buildpro/templates/navigation/breadcrumb.html.twig */
class __TwigTemplate_bfb05afa92203bde24b3fd0d188e62dfa2e81c4d3277baa59bfd87687d347984 extends Twig_Template
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
        $tags = array("if" => 13, "set" => 17, "for" => 18);
        $filters = array("t" => 15, "length" => 22);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set', 'for'),
                array('t', 'length'),
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

        // line 10
        echo "<div class=\"breadcrumb-links\">
  <div class=\"container\">
    <div class=\"content-inner\">
      ";
        // line 13
        if (($context["breadcrumb"] ?? null)) {
            // line 14
            echo "        <nav class=\"breadcrumb ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["background"] ?? null), "html", null, true));
            echo "\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
          <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
            // line 15
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Breadcrumb")));
            echo "</h2>
          <ol>
            ";
            // line 17
            $context["i"] = 0;
            echo "  
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumb"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 19
                echo "              ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 20
                echo "              <li>
                ";
                // line 21
                if ($this->getAttribute($context["item"], "url", array())) {
                    echo "<a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                    echo "</a>";
                } else {
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true));
                }
                // line 22
                echo "                ";
                if ((($context["i"] ?? null) < (twig_length_filter($this->env, ($context["breadcrumb"] ?? null)) - 1))) {
                    echo "<span class=\"\">/</span>";
                }
                echo "  
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "          </ol>
        </nav>
      ";
        }
        // line 28
        echo "    </div>  
  </div>  
</div>  ";
    }

    public function getTemplateName()
    {
        return "themes/gavias_buildpro/templates/navigation/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 28,  96 => 25,  84 => 22,  74 => 21,  71 => 20,  68 => 19,  64 => 18,  60 => 17,  55 => 15,  50 => 14,  48 => 13,  43 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_buildpro/templates/navigation/breadcrumb.html.twig", "/app/web/themes/gavias_buildpro/templates/navigation/breadcrumb.html.twig");
    }
}
