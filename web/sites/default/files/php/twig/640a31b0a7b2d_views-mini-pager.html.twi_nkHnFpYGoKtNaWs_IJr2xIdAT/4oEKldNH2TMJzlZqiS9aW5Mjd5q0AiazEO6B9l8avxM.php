<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/olivero/templates/views/views-mini-pager.html.twig */
class __TwigTemplate_48073a5c219991515009bb41d7941716 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        if ((twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 13) || twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 13))) {
            // line 14
            echo "  <nav class=\"pager\" role=\"navigation\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "\">
    <ul class=\"pager__items js-pager__items\">
      ";
            // line 17
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 17)) {
                // line 18
                echo "        ";
                ob_start();
                // line 19
                echo "          <li class=\"pager__item pager__item--control pager__item--previous\">
            <a href=\"";
                // line 20
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 20), "href", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 20), "attributes", [], "any", false, false, true, 20), 20, $this->source), "href", "title", "rel", "class"), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 21
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                echo "</span>
              ";
                // line 22
                $this->loadTemplate("@olivero/../images/pager-previous.svg", "core/themes/olivero/templates/views/views-mini-pager.html.twig", 22)->display($context);
                // line 23
                echo "            </a>
          </li>
        ";
                $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 18
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_1_));
                // line 26
                echo "      ";
            }
            // line 27
            echo "
      ";
            // line 29
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 29)) {
                // line 30
                echo "        <li class=\"pager__item pager__item--active\">
          ";
                // line 31
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo "
        </li>
      ";
            }
            // line 34
            echo "
      ";
            // line 36
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 36)) {
                // line 37
                echo "        ";
                ob_start();
                // line 38
                echo "          <li class=\"pager__item pager__item--control pager__item--next\">
            <a href=\"";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 39), "href", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 39), "attributes", [], "any", false, false, true, 39), 39, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 40
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                echo "</span>
              ";
                // line 41
                $this->loadTemplate("@olivero/../images/pager-previous.svg", "core/themes/olivero/templates/views/views-mini-pager.html.twig", 41)->display($context);
                // line 42
                echo "            </a>
          </li>
        ";
                $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 37
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_2_));
                // line 45
                echo "      ";
            }
            // line 46
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/olivero/templates/views/views-mini-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 46,  128 => 45,  126 => 37,  121 => 42,  119 => 41,  115 => 40,  107 => 39,  104 => 38,  101 => 37,  98 => 36,  95 => 34,  89 => 31,  86 => 30,  83 => 29,  80 => 27,  77 => 26,  75 => 18,  70 => 23,  68 => 22,  64 => 21,  56 => 20,  53 => 19,  50 => 18,  47 => 17,  41 => 14,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a views mini-pager.
 *
 * Available variables:
 * - heading_id: Pagination heading ID.
 * - items: List of pager items.
 *
 * @see template_preprocess_views_mini_pager()
 */
#}
{% if items.previous or items.next %}
  <nav class=\"pager\" role=\"navigation\" aria-label=\"{{ 'Pagination'|t }}\">
    <ul class=\"pager__items js-pager__items\">
      {# Print previous item if we are not on the first page. #}
      {% if items.previous %}
        {% apply spaceless %}
          <li class=\"pager__item pager__item--control pager__item--previous\">
            <a href=\"{{ items.previous.href }}\" class=\"pager__link\" title=\"{{ 'Go to previous page'|t }}\" rel=\"prev\"{{ items.previous.attributes|without('href', 'title', 'rel', 'class') }}>
              <span class=\"visually-hidden\">{{ 'Previous page'|t }}</span>
              {% include \"@olivero/../images/pager-previous.svg\" %}
            </a>
          </li>
        {% endapply %}
      {% endif %}

      {# Print current active page. #}
      {% if items.current %}
        <li class=\"pager__item pager__item--active\">
          {{ items.current }}
        </li>
      {% endif %}

      {# Print next item if we are not on the last page. #}
      {% if items.next %}
        {% apply spaceless %}
          <li class=\"pager__item pager__item--control pager__item--next\">
            <a href=\"{{ items.next.href }}\" class=\"pager__link\" title=\"{{ 'Go to next page'|t }}\" rel=\"next\"{{ items.next.attributes|without('href', 'title', 'rel') }}>
              <span class=\"visually-hidden\">{{ 'Next page'|t }}</span>
              {% include \"@olivero/../images/pager-previous.svg\" %}
            </a>
          </li>
        {% endapply %}
      {% endif %}
    </ul>
  </nav>
{% endif %}
", "core/themes/olivero/templates/views/views-mini-pager.html.twig", "C:\\xampp\\htdocs\\ejanshan\\web\\core\\themes\\olivero\\templates\\views\\views-mini-pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13, "apply" => 18, "include" => 22);
        static $filters = array("t" => 14, "escape" => 20, "without" => 20, "spaceless" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'apply', 'include'],
                ['t', 'escape', 'without', 'spaceless'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
