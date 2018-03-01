<?php

/* {# inline_template_start #}<div class="service-block v2">
    <div class="service-image">{{ field_service_image }}<span class="counter">0{{ counter }}</span></div>
    <div class="service-content"><div class="service-title">{{ title }}</div><div class="service-body">{{ body }}</div><div class="view-content">{{ view_node }}</div></div>
</div> */
class __TwigTemplate_c344340d3c866bc21924a7b8b04de4525e1990ddb93526a26a320780043d59eb extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
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
        echo "<div class=\"service-block v2\">
    <div class=\"service-image\">";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_service_image"] ?? null), "html", null, true));
        echo "<span class=\"counter\">0";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["counter"] ?? null), "html", null, true));
        echo "</span></div>
    <div class=\"service-content\"><div class=\"service-title\">";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</div><div class=\"service-body\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "</div><div class=\"view-content\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo "</div></div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"service-block v2\">
    <div class=\"service-image\">{{ field_service_image }}<span class=\"counter\">0{{ counter }}</span></div>
    <div class=\"service-content\"><div class=\"service-title\">{{ title }}</div><div class=\"service-body\">{{ body }}</div><div class=\"view-content\">{{ view_node }}</div></div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 3,  49 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"service-block v2\">
    <div class=\"service-image\">{{ field_service_image }}<span class=\"counter\">0{{ counter }}</span></div>
    <div class=\"service-content\"><div class=\"service-title\">{{ title }}</div><div class=\"service-body\">{{ body }}</div><div class=\"view-content\">{{ view_node }}</div></div>
</div>", "");
    }
}
