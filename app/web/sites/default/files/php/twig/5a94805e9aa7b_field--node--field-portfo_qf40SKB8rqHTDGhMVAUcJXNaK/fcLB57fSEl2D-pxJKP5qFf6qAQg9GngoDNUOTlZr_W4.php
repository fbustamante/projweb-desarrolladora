<?php

/* themes/gavias_buildpro/templates/fields/field--node--field-portfolio-images.html.twig */
class __TwigTemplate_7315b7ef0b0667a9773cb541e1a9ed6166ea637b48479268e61d7b81e2dc6c36 extends Twig_Template
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
        $tags = array("set" => 25, "for" => 26, "if" => 29);
        $filters = array("length" => 36);
        $functions = array("file_url" => 30);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'for', 'if'),
                array('length'),
                array('file_url')
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

        // line 23
        echo "
<div";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  ";
        // line 25
        $context["i"] = 0;
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 28
            echo "    
    ";
            // line 29
            if ((($context["i"] ?? null) == 1)) {
                // line 30
                echo "      <div class=\"item-first\"><a data-rel='prettyPhoto[g_gal]' href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#item", array(), "array"), "entity", array()), "uri", array()), "value", array()))), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                echo "</a></div>
    ";
            } else {
                // line 32
                echo "      ";
                if ((($context["i"] ?? null) == 2)) {
                    echo "<div class=\"items-small row\"><div class=\"post-masonry-style\">";
                }
                // line 33
                echo "
        <div class=\"item col-lg-4 col-md-4 col-sm-4 col-xs-12 item-masory\"> <a data-rel='prettyPhoto[g_gal]' href=\"";
                // line 34
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#item", array(), "array"), "entity", array()), "uri", array()), "value", array()))), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                echo "</a></div>

      ";
                // line 36
                if ((($context["i"] ?? null) == twig_length_filter($this->env, ($context["items"] ?? null)))) {
                    echo "</div></div>";
                }
                // line 37
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_buildpro/templates/fields/field--node--field-portfolio-images.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 39,  90 => 37,  86 => 36,  79 => 34,  76 => 33,  71 => 32,  63 => 30,  61 => 29,  58 => 28,  56 => 27,  52 => 26,  50 => 25,  46 => 24,  43 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_buildpro/templates/fields/field--node--field-portfolio-images.html.twig", "/app/web/themes/gavias_buildpro/templates/fields/field--node--field-portfolio-images.html.twig");
    }
}
