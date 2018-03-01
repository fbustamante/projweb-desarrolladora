<?php

/* themes/gavias_buildpro/templates/node/node--team.html.twig */
class __TwigTemplate_55ef8f5b23ebfa8b7c936ed3300680a9098ccab01d6be2057566f3a833ed70e1 extends Twig_Template
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
        $tags = array("if" => 2, "for" => 11, "set" => 28);
        $filters = array("e" => 6, "t" => 6, "clean_class" => 31, "without" => 75);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array('e', 't', 'clean_class', 'without'),
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
        echo "<!-- Start Display article for teaser page -->
";
        // line 2
        if ((($context["teaser"] ?? null) == true)) {
            echo " 
  <div class=\"team-block\">
    <div class=\"team-block-inner\">
      <div class=\"team-image\">";
            // line 5
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_image", array()), "html", null, true));
            echo "
        <a class=\"team-email\" href=\"mailto:";
            // line 6
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_email", array()), "value", array())));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Email")));
            echo "</a>
      </div>
      <div class=\"team-content\">
        <div class=\"content-inner\">
          <div class=\"team-socials\">
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["node"] ?? null), "field_team_social", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                echo "              <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "getFieldCollectionItem", array(), "method"), "field_team_social_link", array()), "value", array())));
                echo "\">
                <i class=\"";
                // line 13
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "getFieldCollectionItem", array(), "method"), "field_team_social_icon", array()), "value", array())));
                echo "\"></i>
              </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo " 
          </div>
          <div class=\"team-name\"><a href=\"";
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_name", array()), "value", array())));
            echo "</a></div>   
          <div class=\"team-job\">";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_position", array()), "value", array())));
            echo "</div>
          <div class=\"team-body hidden\">";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "body", array()), "html", null, true));
            echo "</div>
        </div>  
      </div>
    </div>  
  </div>  
<!-- End Display article for teaser page -->
";
        } else {
            // line 26
            echo "<!-- Start Display article for detail page -->
";
            // line 28
            $context["classes"] = array(0 => "node", 1 => "node-detail", 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(            // line 31
($context["node"] ?? null), "bundle", array()))), 3 => (($this->getAttribute(            // line 32
($context["node"] ?? null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 4 => (($this->getAttribute(            // line 33
($context["node"] ?? null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 5 => (( !$this->getAttribute(            // line 34
($context["node"] ?? null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 6 => ((            // line 35
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), 7 => "clearfix");
            // line 39
            echo "
<article";
            // line 40
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
  <div class=\"team-single-page\">

    <div class=\"team-name clearfix\">
      <div class=\"name\">";
            // line 44
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_name", array()), "value", array())));
            echo "</div>
      <div class=\"job\">";
            // line 45
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_position", array()), "value", array())));
            echo "</div>
      <div class=\"line\"><span class=\"one\"></span><span class=\"second\"></span><span class=\"three\"></span></div>
    </div> 
    <div class=\"team-description\">";
            // line 48
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_description", array()), "html", null, true));
            echo "</div>
    <div class=\"team-info\">
      <div class=\"row\">
        <div class=\"col-lg-4 col-sm-12 col-xs-12\">
          <div class=\"team-image\">";
            // line 52
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_image", array()), "html", null, true));
            echo "</div>
        </div>
        <div class=\"col-lg-8 col-sm-12 col-xs-12\">
          <div class=\"team-contact\">
            <div class=\"heading\">";
            // line 56
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Contact Info")));
            echo "</div>
            <div class=\"content-inner\">";
            // line 57
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_contact", array()), "html", null, true));
            echo "</div>
            <div class=\"socials\">
              ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["node"] ?? null), "field_team_social", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 60
                echo "                <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "getFieldCollectionItem", array(), "method"), "field_team_social_link", array()), "value", array())));
                echo "\">
                  <i class=\"";
                // line 61
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "getFieldCollectionItem", array(), "method"), "field_team_social_icon", array()), "value", array())));
                echo "\"></i>
                </a>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo " 
            </div>
          </div>
          <div class=\"team-education\">
            <div class=\"heading\">";
            // line 67
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Education")));
            echo "</div>
            <div class=\"content-inner\">";
            // line 68
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_education", array()), "html", null, true));
            echo "</div>
          </div>
        </div>
      </div>
    </div> 

    <div";
            // line 74
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "node__content", 1 => "clearfix"), "method"), "html", null, true));
            echo ">
      ";
            // line 75
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "field_team_name", "field_team_contact", "field_team_image", "field_team_contact", "field_team_quote", "field_team_social", "field_team_education", "field_team_position", "field_team_email", "field_team_description", "comment"), "html", null, true));
            echo "
    </div>

    <div class=\"team-quote\"> ";
            // line 78
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_quote", array()), "html", null, true));
            echo " </div>

    ";
            // line 80
            if ($this->getAttribute(($context["content"] ?? null), "comment", array())) {
                // line 81
                echo "      <div id=\"node-single-comment\">
        ";
                // line 82
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "comment", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 84
            echo "  

  </div>
</article>

<!-- End Display article for detail page -->
";
        }
        // line 91
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_buildpro/templates/node/node--team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 91,  224 => 84,  218 => 82,  215 => 81,  213 => 80,  208 => 78,  202 => 75,  198 => 74,  189 => 68,  185 => 67,  179 => 63,  170 => 61,  165 => 60,  161 => 59,  156 => 57,  152 => 56,  145 => 52,  138 => 48,  132 => 45,  128 => 44,  121 => 40,  118 => 39,  116 => 35,  115 => 34,  114 => 33,  113 => 32,  112 => 31,  111 => 28,  108 => 26,  98 => 19,  94 => 18,  88 => 17,  84 => 15,  75 => 13,  70 => 12,  66 => 11,  56 => 6,  52 => 5,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_buildpro/templates/node/node--team.html.twig", "/app/web/themes/gavias_buildpro/templates/node/node--team.html.twig");
    }
}
