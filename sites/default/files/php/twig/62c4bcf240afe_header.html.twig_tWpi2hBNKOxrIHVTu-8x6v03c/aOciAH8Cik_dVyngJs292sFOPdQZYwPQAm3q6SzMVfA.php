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

/* @mili/template-parts/header.html.twig */
class __TwigTemplate_cb087e36f7b5af15125eb152c7da865a81945dcdc4bf193a62e7f3ebcba631e5 extends \Twig\Template
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
        // line 1
        echo "<!-- Start: Header -->
<header class=\"header\">
  <div class=\"header-main\">
  <div class=\"container\">
    <div class=\"header-main-container\">
      ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 6)) {
            // line 7
            echo "        <div class=\"site-brand\">
          ";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "
        </div> <!--/.site-branding -->
      ";
        }
        // line 11
        echo "      <div class=\"header-right\">
        ";
        // line 12
        $this->loadTemplate("@mili/template-parts/search.html.twig", "@mili/template-parts/header.html.twig", 12)->display($context);
        // line 13
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 13)) {
            // line 14
            echo "          <div class=\"mobile-menu\">
            <i class=\"icon-bars\" aria-hidden=\"true\"></i>
          </div>
          <div class=\"primary-menu-wrapper\">
            <div class=\"menu-wrap\">
              <div class=\"close-mobile-menu\">x</div>
              ";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 24
        echo "        <!-- End: primary menu region -->
      </div> <!-- /.header-right -->
    </div> <!-- /.header-main-container -->
  </div> <!-- /.container -->
  </div> <!-- /.header-main -->
  ";
        // line 29
        if ((($context["is_front"] ?? null) && ($context["slider_show"] ?? null))) {
            // line 30
            echo "    ";
            $this->loadTemplate("@mili/template-parts/slider.html.twig", "@mili/template-parts/header.html.twig", 30)->display($context);
            // line 31
            echo "  ";
        } elseif ( !($context["is_front"] ?? null)) {
            // line 32
            echo "    ";
            $this->loadTemplate("@mili/template-parts/page_header.html.twig", "@mili/template-parts/header.html.twig", 32)->display($context);
            // line 33
            echo "  ";
        }
        // line 34
        echo "</header>
<!-- End: Header -->
";
    }

    public function getTemplateName()
    {
        return "@mili/template-parts/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 34,  98 => 33,  95 => 32,  92 => 31,  89 => 30,  87 => 29,  80 => 24,  73 => 20,  65 => 14,  62 => 13,  60 => 12,  57 => 11,  51 => 8,  48 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@mili/template-parts/header.html.twig", "/home/u692838125/domains/ukua.xyz/public_html/themes/mili/templates/template-parts/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6, "include" => 12);
        static $filters = array("escape" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape'],
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