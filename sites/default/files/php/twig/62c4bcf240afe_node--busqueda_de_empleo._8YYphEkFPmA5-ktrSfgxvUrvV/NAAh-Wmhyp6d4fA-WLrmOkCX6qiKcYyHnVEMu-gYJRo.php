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

/* themes/mili/templates/content/node--busqueda_de_empleo.html.twig */
class __TwigTemplate_ad0635f82ddf8b2f4778471e9e42f022a22d06870dea201363e812d4acb4d5a8 extends \Twig\Template
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
        // line 70
        $context["node_classes"] = [0 => "node", 1 => ((twig_get_attribute($this->env, $this->source,         // line 72
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 72)) ? ("node-promoted") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,         // line 73
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 73)) ? ("node-sticky") : ("")), 3 => (( !twig_get_attribute($this->env, $this->source,         // line 74
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 74)) ? ("node-unpublished") : ("")), 4 => ((        // line 75
($context["view_mode"] ?? null)) ? (("node-view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 75, $this->source)))) : (""))];
        // line 78
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["node_classes"] ?? null)], "method", false, false, true, 78), 78, $this->source), "html", null, true);
        echo ">
";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 79, $this->source), "html", null, true);
        echo "
  ";
        // line 80
        if ( !($context["page"] ?? null)) {
            // line 81
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node-title"], "method", false, false, true, 81), 81, $this->source), "html", null, true);
            echo ">
      <a href=\"";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 82, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 82, $this->source), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 85, $this->source), "html", null, true);
        echo "

";
        // line 87
        if (($context["display_submitted"] ?? null)) {
            // line 88
            echo "  <header class=\"node-header\">
    ";
            // line 89
            if (($context["node_author_pic"] ?? null)) {
                // line 90
                echo "      <div class=\"author-picture\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 90, $this->source), "html", null, true);
                echo "</div>
    ";
            }
            // line 92
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "node-submitted-details"], "method", false, false, true, 92), 92, $this->source), "html", null, true);
            echo ">
      ";
            // line 93
            $context["createdDate"] = twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "getCreatedTime", [], "any", false, false, true, 93), 93, $this->source), "j F Y");
            // line 94
            echo "      ";
            echo t("<span><i class=\"icon-user-circle-o user-icon\"></i>@author_name</span><span><i class=\"icon-calendar\"></i> @createdDate</span>", array("@author_name" => ($context["author_name"] ?? null), "@createdDate" => ($context["createdDate"] ?? null), ));
            // line 95
            echo "      ";
            if (($context["node_tags"] ?? null)) {
                // line 96
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 96)) {
                    // line 97
                    echo "        <span><i class=\"icon-th-large\"></i>
        ";
                    // line 98
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 98));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 99
                        echo "          ";
                        if ((($__internal_compile_0 = $context["item"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#title"] ?? null) : null)) {
                            // line 100
                            echo "            <a href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = $context["item"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#url"] ?? null) : null), 100, $this->source), "html", null, true);
                            echo "\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = $context["item"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#title"] ?? null) : null), 100, $this->source), "html", null, true);
                            echo "</a>";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(",");
                            echo "
          ";
                        }
                        // line 102
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    echo "      </span>
      ";
                }
                // line 105
                echo "      ";
            }
            // line 106
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 106, $this->source), "html", null, true);
            echo "
    </div>
  </header>
";
        }
        // line 111
        $context["url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<current>");
        echo " ";
        // line 112
        $context["partes"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 112, $this->source), "/");
        echo " ";
        // line 113
        if ((preg_match("/^\\d+\$/", twig_last($this->env, ($context["partes"] ?? null))) && ((($__internal_compile_3 = ($context["partes"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[2] ?? null) : null) == "busquedaempleo"))) {
            echo " ";
            // line 114
            echo "  <div class=\"cntEmpleo\">
    <div class=\"empEdu\">
      <h2>Descripción del usuario </h2>
      <p>";
            // line 117
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cuentanos_de_ti", [], "any", false, false, true, 117), 0, [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            echo "</p> 
    </div>
    ";
            // line 119
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_puntos_a_tratar", [], "any", false, false, true, 119), 0, [], "any", false, false, true, 119))) {
                // line 120
                echo "      <div class=\"empCont\">
        <h2> Puntos a tratar</h2>
        <p> ";
                // line 122
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_puntos_a_tratar", [], "any", false, false, true, 122), 0, [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
                echo " </p> 
      </div>
    ";
            }
            // line 125
            echo "  </div>
  ";
            // line 126
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
            echo "
";
        } else {
            // line 127
            echo " ";
            // line 128
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node-content"], "method", false, false, true, 128), 128, $this->source), "html", null, true);
            echo ">
    ";
            // line 129
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 129, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 132
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "themes/mili/templates/content/node--busqueda_de_empleo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 132,  190 => 129,  185 => 128,  183 => 127,  178 => 126,  175 => 125,  169 => 122,  165 => 120,  163 => 119,  158 => 117,  153 => 114,  150 => 113,  147 => 112,  144 => 111,  136 => 106,  133 => 105,  129 => 103,  123 => 102,  113 => 100,  110 => 99,  106 => 98,  103 => 97,  100 => 96,  97 => 95,  94 => 94,  92 => 93,  87 => 92,  81 => 90,  79 => 89,  76 => 88,  74 => 87,  69 => 85,  61 => 82,  56 => 81,  54 => 80,  50 => 79,  45 => 78,  43 => 75,  42 => 74,  41 => 73,  40 => 72,  39 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/mili/templates/content/node--busqueda_de_empleo.html.twig", "/home/u692838125/domains/ukua.xyz/public_html/themes/mili/templates/content/node--busqueda_de_empleo.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70, "if" => 80, "trans" => 94, "for" => 98);
        static $filters = array("clean_class" => 75, "escape" => 78, "date" => 93, "split" => 112, "last" => 113);
        static $functions = array("path" => 111);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans', 'for'],
                ['clean_class', 'escape', 'date', 'split', 'last'],
                ['path']
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
