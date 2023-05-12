<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/footer.html.twig */
class __TwigTemplate_30633238e40392d8b6aaeb6242c2ccb9e1d6115c108d6aa8650f9de30643c40d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section id=\"footer\" class=\"section bg-gray\">
    <section class=\"container ";
        // line 2
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
        <p>
            <a href=\"/mentions-legales\">Mentions Légales</a>
            -
            <a href=\"https://www.facebook.com/ledrakkarburo\" target=\"_blank\">Facebook</a>
            -
            <a href=\"mailto:contact@ledrakkar-coworking.fr\">contact@ledrakkar-coworking.fr</a>
        </p>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"footer\" class=\"section bg-gray\">
    <section class=\"container {{ grid_size }}\">
        <p>
            <a href=\"/mentions-legales\">Mentions Légales</a>
            -
            <a href=\"https://www.facebook.com/ledrakkarburo\" target=\"_blank\">Facebook</a>
            -
            <a href=\"mailto:contact@ledrakkar-coworking.fr\">contact@ledrakkar-coworking.fr</a>
        </p>
    </section>
</section>
", "partials/footer.html.twig", "/home/nat/Documents/Le Drakkar/www.ledrakkar-coworking.fr/user/themes/ledrakkar/templates/partials/footer.html.twig");
    }
}
