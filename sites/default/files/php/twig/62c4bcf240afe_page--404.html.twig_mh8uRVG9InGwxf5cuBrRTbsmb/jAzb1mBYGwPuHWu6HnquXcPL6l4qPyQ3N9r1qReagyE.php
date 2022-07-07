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

/* themes/mili/templates/content/page--404.html.twig */
class __TwigTemplate_6305b0cf4679e71340ec16dd9f8059fa45388cf2e139ab3eaa6a51241a1c7a2a extends \Twig\Template
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
        echo "<title> Página no encontrada </title>
<div class=\"page-title-wrap\">
    ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 3, $this->source), "html", null, true);
        echo "
    ";
        // line 4
        if (($context["title"] ?? null)) {
            // line 5
            echo "        <h1";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "page-title"], "method", false, false, true, 5), 5, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 5, $this->source), "html", null, true);
            echo "</h1>
    ";
        }
        // line 7
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 7, $this->source), "html", null, true);
        echo "
</div> <!--/.page-title-wrap -->
<section class=\"page_404\">
    <div class=\"container\">
        <div class=\"row\">\t
            <div class=\"col-sm-12 \">
                <div class=\"col-sm-10 col-sm-offset-1  text-center\">
                    <div class=\"four_zero_four_bg\">
                        <h1 class=\"text-center \">404</h1>
                    </div>
                    <div class=\"contant_box_404\">
                        <h3 class=\"h2\">
                        Parece que te has perdido
                        </h3>
                        <p>¡la página que estas buscando no existe!</p>
                        <a href=\"/\" class=\"link_404\">Ir al Inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/mili/templates/content/page--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  49 => 5,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/mili/templates/content/page--404.html.twig", "/home/u692838125/domains/ukua.xyz/public_html/themes/mili/templates/content/page--404.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4);
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
