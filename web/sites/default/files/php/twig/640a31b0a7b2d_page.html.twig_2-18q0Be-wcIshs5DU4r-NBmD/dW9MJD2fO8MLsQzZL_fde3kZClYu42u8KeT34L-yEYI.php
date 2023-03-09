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

/* themes/custom/ejanshan/templates/layout/page.html.twig */
class __TwigTemplate_7857a1ed8e2a1abdc5855ef8e9fc2349 extends Template
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
        // line 48
        echo "
<div id=\"page-wrapper\" class=\"page-wrapper\">
  <div id=\"page\">

    ";
        // line 52
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 52) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 52)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 52))) {
            // line 53
            echo "      <header id=\"header\" class=\"site-header\" data-drupal-selector=\"site-header\" role=\"banner\">

        ";
            // line 56
            echo "        <div class=\"site-header__fixable\" data-drupal-selector=\"site-header-fixable\">
          <div class=\"site-header__initial\">
            <button class=\"sticky-header-toggle\" data-drupal-selector=\"sticky-header-toggle\" role=\"switch\" aria-controls=\"site-header__inner\" aria-label=\"";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sticky header"));
            echo "\" aria-checked=\"false\">
              <span class=\"sticky-header-toggle__icon\">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </button>
          </div>

          ";
            // line 68
            echo "          <div id=\"site-header__inner\" class=\"site-header__inner\" data-drupal-selector=\"site-header-inner\">
            <div class=\"container site-header__inner__container\">

              ";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "

              ";
            // line 73
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 73) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 73))) {
                // line 74
                echo "                <div class=\"mobile-buttons\" data-drupal-selector=\"mobile-buttons\">
                  <button class=\"mobile-nav-button\" data-drupal-selector=\"mobile-nav-button\" aria-label=\"";
                // line 75
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Main Menu"));
                echo "\" aria-controls=\"header-nav\" aria-expanded=\"false\">
                    <span class=\"mobile-nav-button__icon\"></span>
                  </button>
                </div>

                <div id=\"header-nav\" class=\"header-nav\" data-drupal-selector=\"header-nav\">
                  ";
                // line 81
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                echo "
                  ";
                // line 82
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 85
            echo "            </div>
          </div>
        </div>
      </header>
    ";
        }
        // line 90
        echo "
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container\">
      <div id=\"main\" class=\"layout-main\">
        <div class=\"main-content\">
          <a id=\"main-content\" tabindex=\"-1\"></a>
          ";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "
          <div class=\"main-content__container container\">
            ";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
        echo "
            ";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
        echo "

            ";
        // line 100
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 100)) {
            // line 101
            echo "              <div class=\"sidebar-grid grid-full\">
                <main role=\"main\" class=\"site-main\">
                  ";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            echo "
                  ";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "
                </main>

                ";
            // line 107
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo "
              </div>
            ";
        } else {
            // line 110
            echo "              <main role=\"main\">
                ";
            // line 111
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "
                ";
            // line 112
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "
              </main>
            ";
        }
        // line 115
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
        echo "
          </div>
        </div>
        <div class=\"social-bar\">
          ";
        // line 119
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
        echo "
        </div>
      </div>
    </div>

    <footer class=\"site-footer\">
      <div class=\"site-footer__inner container\">
        ";
        // line 126
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
        echo "
        ";
        // line 127
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
        echo "
      </div>
    </footer>

    <div class=\"overlay\" data-drupal-selector=\"overlay\"></div>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/ejanshan/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 127,  182 => 126,  172 => 119,  164 => 115,  158 => 112,  154 => 111,  151 => 110,  145 => 107,  139 => 104,  135 => 103,  131 => 101,  129 => 100,  124 => 98,  120 => 97,  115 => 95,  108 => 90,  101 => 85,  95 => 82,  91 => 81,  82 => 75,  79 => 74,  77 => 73,  72 => 71,  67 => 68,  55 => 58,  51 => 56,  47 => 53,  45 => 52,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Olivero's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.content: The main content of the current page.
 * - page.sidebar: Items for the first sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 * - page.social: Items for the social region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

<div id=\"page-wrapper\" class=\"page-wrapper\">
  <div id=\"page\">

    {% if page.header or page.primary_menu or page.secondary_menu %}
      <header id=\"header\" class=\"site-header\" data-drupal-selector=\"site-header\" role=\"banner\">

        {# Gets fixed by JavaScript at wide widths. #}
        <div class=\"site-header__fixable\" data-drupal-selector=\"site-header-fixable\">
          <div class=\"site-header__initial\">
            <button class=\"sticky-header-toggle\" data-drupal-selector=\"sticky-header-toggle\" role=\"switch\" aria-controls=\"site-header__inner\" aria-label=\"{{ 'Sticky header'|t }}\" aria-checked=\"false\">
              <span class=\"sticky-header-toggle__icon\">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </button>
          </div>

          {# Needs to extend full width so box shadow will also extend. #}
          <div id=\"site-header__inner\" class=\"site-header__inner\" data-drupal-selector=\"site-header-inner\">
            <div class=\"container site-header__inner__container\">

              {{ page.header }}

              {% if page.primary_menu or page.secondary_menu %}
                <div class=\"mobile-buttons\" data-drupal-selector=\"mobile-buttons\">
                  <button class=\"mobile-nav-button\" data-drupal-selector=\"mobile-nav-button\" aria-label=\"{{ 'Main Menu'|t }}\" aria-controls=\"header-nav\" aria-expanded=\"false\">
                    <span class=\"mobile-nav-button__icon\"></span>
                  </button>
                </div>

                <div id=\"header-nav\" class=\"header-nav\" data-drupal-selector=\"header-nav\">
                  {{ page.primary_menu }}
                  {{ page.secondary_menu }}
                </div>
              {% endif %}
            </div>
          </div>
        </div>
      </header>
    {% endif %}

    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container\">
      <div id=\"main\" class=\"layout-main\">
        <div class=\"main-content\">
          <a id=\"main-content\" tabindex=\"-1\"></a>
          {{ page.hero }}
          <div class=\"main-content__container container\">
            {{ page.highlighted }}
            {{ page.breadcrumb }}

            {% if page.sidebar %}
              <div class=\"sidebar-grid grid-full\">
                <main role=\"main\" class=\"site-main\">
                  {{ page.content_above }}
                  {{ page.content }}
                </main>

                {{ page.sidebar }}
              </div>
            {% else %}
              <main role=\"main\">
                {{ page.content_above }}
                {{ page.content }}
              </main>
            {% endif %}
            {{ page.content_below }}
          </div>
        </div>
        <div class=\"social-bar\">
          {{ page.social }}
        </div>
      </div>
    </div>

    <footer class=\"site-footer\">
      <div class=\"site-footer__inner container\">
        {{ page.footer_top }}
        {{ page.footer_bottom }}
      </div>
    </footer>

    <div class=\"overlay\" data-drupal-selector=\"overlay\"></div>

  </div>
</div>
", "themes/custom/ejanshan/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\ejanshan\\web\\themes\\custom\\ejanshan\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 52);
        static $filters = array("t" => 58, "escape" => 71);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
