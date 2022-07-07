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

/* themes/mili/templates/user.html.twig */
class __TwigTemplate_bc99d1d4160dbb5f276ea6489b912d3f160fe46c437427740501bc3d3ccff577 extends \Twig\Template
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
        // line 21
        $context["url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<current>");
        echo " ";
        // line 22
        $context["partes"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 22, $this->source), "/");
        echo " ";
        // line 23
        if (((($__internal_compile_0 = ($context["partes"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[2] ?? null) : null) == "user")) {
            // line 24
            echo "    <!-- Contenedor donde se pone la información escencial del usuario (foto de perfil, nacimiento y su CV) -->
    <div class=\"cntPrincipalPerfil\">
      <!-- foto de perfil -->
      <div class=\"usrImg\">
        <a href=\"";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "user_picture", [], "any", false, false, true, 28)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#items"] ?? null) : null), "entity", [], "any", false, false, true, 28), "uri", [], "any", false, false, true, 28), "value", [], "any", false, false, true, 28), 28, $this->source)), "html", null, true);
            echo "\" target=\"_blank\">
          <img src = \"";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "user_picture", [], "any", false, false, true, 29)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#items"] ?? null) : null), "entity", [], "any", false, false, true, 29), "uri", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29), 29, $this->source)), "html", null, true);
            echo "\" class = \"usrImgRaw\">
        </a>
      </div>
      <!-- Nombre del usuario -->
      <h3 class=\"nombrePerfil\"> ";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "displayname", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo " </h3>
      <!-- Tipo de cuenta Persona Física/Negocio -->
        <div class=\"cntNacimiento\">
          <span class=\"material-icons\">work</span>
          ";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tipo_de_cuent", [], "any", false, false, true, 37), 0, [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "
        </div>
      <!-- Si subió su CV -->
      ";
            // line 40
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cv", [], "any", false, false, true, 40)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#items"] ?? null) : null), "entity", [], "any", false, false, true, 40), "uri", [], "any", false, false, true, 40), "value", [], "any", false, false, true, 40))) {
                // line 41
                echo "        <div class=\"cntCV\">
          <div class=\"tooltip\">
            <a class=\"btnChido\" href = ";
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cv", [], "any", false, false, true, 43)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#items"] ?? null) : null), "entity", [], "any", false, false, true, 43), "uri", [], "any", false, false, true, 43), "value", [], "any", false, false, true, 43), 43, $this->source)), "html", null, true);
                echo " target=\"_blank\"><span class=\"material-icons\">description</span></a>
            <span class=\"tooltiptext\">Curriculum</span>
          </div>
        </div>
      ";
            }
            // line 48
            echo "    </div>
";
        } else {
            // line 50
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "user_picture", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "themes/mili/templates/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 50,  91 => 48,  83 => 43,  79 => 41,  77 => 40,  71 => 37,  64 => 33,  57 => 29,  53 => 28,  47 => 24,  45 => 23,  42 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/mili/templates/user.html.twig", "/home/u692838125/domains/ukua.xyz/public_html/themes/mili/templates/user.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 21, "if" => 23);
        static $filters = array("split" => 22, "escape" => 28);
        static $functions = array("path" => 21, "file_url" => 28);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['split', 'escape'],
                ['path', 'file_url']
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
