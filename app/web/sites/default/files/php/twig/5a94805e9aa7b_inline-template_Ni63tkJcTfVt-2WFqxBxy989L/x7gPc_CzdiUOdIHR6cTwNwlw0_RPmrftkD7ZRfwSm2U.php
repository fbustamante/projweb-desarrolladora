<?php

/* {# inline_template_start #}<div class="portfolio-item v1">      
    <div class="image">{{ field_portfolio_images }}</div>
     <div class="content">
         <div class="content-inner">
              <div class="title">{{ title }}</div>  
              <div class="category">{{ field_portfolio_tags}}</div>  
         </div>    
     </div>
</div> */
class __TwigTemplate_ec90d34da2c8d4a256dcc006e3000f5ea0ca36b420be3ed9c574e35f15e53227 extends Twig_Template
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
        echo "<div class=\"portfolio-item v1\">      
    <div class=\"image\">";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_portfolio_images"] ?? null), "html", null, true));
        echo "</div>
     <div class=\"content\">
         <div class=\"content-inner\">
              <div class=\"title\">";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</div>  
              <div class=\"category\">";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_portfolio_tags"] ?? null), "html", null, true));
        echo "</div>  
         </div>    
     </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"portfolio-item v1\">      
    <div class=\"image\">{{ field_portfolio_images }}</div>
     <div class=\"content\">
         <div class=\"content-inner\">
              <div class=\"title\">{{ title }}</div>  
              <div class=\"category\">{{ field_portfolio_tags}}</div>  
         </div>    
     </div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 6,  60 => 5,  54 => 2,  51 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"portfolio-item v1\">      
    <div class=\"image\">{{ field_portfolio_images }}</div>
     <div class=\"content\">
         <div class=\"content-inner\">
              <div class=\"title\">{{ title }}</div>  
              <div class=\"category\">{{ field_portfolio_tags}}</div>  
         </div>    
     </div>
</div>", "");
    }
}
