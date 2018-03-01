<?php

/* themes/gavias_buildpro/templates/views/testimonial/views-view-fields--testimonial-v3.html.twig */
class __TwigTemplate_0703d7a845a2541daad0e4fa5a632ca0fa87a265f7e7d6d28348fa861699c6b6 extends Twig_Template
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
        $filters = array("trim" => 14, "striptags" => 14);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('trim', 'striptags'),
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
        echo "<article class=\"testimonial-node-v3\">      
   <div class=\"testimonial-content\">
      <div class=\"content\">
         <div class=\"content-inner\">
            <div class=\"row\">
               <div class=\"col-md-4 col-sm-4 col-xs-12 text-center\">
                  <div class=\"avatar text-center\">";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_testimonial_avatar", array()), "content", array()), "html", null, true));
        echo "</div> 
                  <div class=\"info\">
                     <span class=\"name\">";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_testimonial_name", array()), "content", array()), "html", null, true));
        echo "/</span><span class=\"job\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_testimonial_job", array()), "content", array()), "html", null, true));
        echo "</span>   
                  </div>
               </div>   
               <div class=\"col-md-8 col-sm-8 col-xs-12\"> 
                  <div class=\"title\"><span>\"</span>";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", array()), "content", array()), "html", null, true));
        echo "<span>\"</span></div>  
                  <div class=\"quote\">";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "body", array()), "content", array()))), "html", null, true));
        echo "</div>  
               </div>
            </div>   
         </div>    
      </div>
   </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_buildpro/templates/views/testimonial/views-view-fields--testimonial-v3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  65 => 13,  56 => 9,  51 => 7,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_buildpro/templates/views/testimonial/views-view-fields--testimonial-v3.html.twig", "/app/web/themes/gavias_buildpro/templates/views/testimonial/views-view-fields--testimonial-v3.html.twig");
    }
}
