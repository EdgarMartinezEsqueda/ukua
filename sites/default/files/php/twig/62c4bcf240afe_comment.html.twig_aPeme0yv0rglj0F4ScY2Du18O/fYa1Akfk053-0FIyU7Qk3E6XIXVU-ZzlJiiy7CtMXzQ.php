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

/* themes/mili/templates/content/comment.html.twig */
class __TwigTemplate_65e3eb84fda98b610525ec63b9a7dae8f93b6970de2c45cdbe6b1e46a68c9e31 extends \Twig\Template
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
        // line 67
        echo "
<article";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "js-comment single-comment"], "method", false, false, true, 68), 68, $this->source), "html", null, true);
        echo ">
  ";
        // line 74
        echo "  ";
        if (($context["comment_user_pic"] ?? null)) {
            // line 75
            echo "    <header class=\"comment-user-picture\">
      ";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 76, $this->source), "html", null, true);
            echo "
      <mark class=\"hidden\" data-comment-timestamp=\"";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["new_indicator_timestamp"] ?? null), 77, $this->source), "html", null, true);
            echo "\"></mark>
    </header>
  ";
        }
        // line 80
        echo "
  <div class=\"single-comment-content-body\">
    <div class=\"single-comment-meta\">
      <span>";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null), 83, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null), 83, $this->source), "html", null, true);
        echo "</span>
      ";
        // line 84
        if (($context["parent"] ?? null)) {
            // line 85
            echo "        <p class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["parent"] ?? null), 85, $this->source), "html", null, true);
            echo "</p>
      ";
        }
        // line 87
        echo "    </div> <!-- /.single-comment-meta -->

    <div";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "single-comment-content"], "method", false, false, true, 89), 89, $this->source), "html", null, true);
        echo ">
      ";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 90, $this->source), "html", null, true);
        echo "
    </div>
  </div> <!-- /.single-comment-content -->
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/mili/templates/content/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 90,  85 => 89,  81 => 87,  75 => 85,  73 => 84,  67 => 83,  62 => 80,  56 => 77,  52 => 76,  49 => 75,  46 => 74,  42 => 68,  39 => 67,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/mili/templates/content/comment.html.twig", "/home/u692838125/domains/ukua.xyz/public_html/themes/mili/templates/content/comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 74);
        static $filters = array("escape" => 68);
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
