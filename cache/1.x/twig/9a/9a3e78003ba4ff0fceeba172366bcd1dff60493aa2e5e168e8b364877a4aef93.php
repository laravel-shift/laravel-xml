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

/* doctum-search.json.twig */
class __TwigTemplate_82a45f664efb71826116bb3f33193969940f4aa4da0ae2c3b0edc06845d672b4 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo (isset($context["search_index"]) || array_key_exists("search_index", $context) ? $context["search_index"] : (function () { throw new RuntimeError('Variable "search_index" does not exist.', 1, $this->source); })());
        echo "
";
    }

    public function getTemplateName()
    {
        return "doctum-search.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ search_index|raw }}
", "doctum-search.json.twig", "/home/runner/work/laravel-xml/laravel-xml/vendor/code-lts/doctum/src/Resources/themes/default/doctum-search.json.twig");
    }
}
