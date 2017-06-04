<?php

/* namespaces.twig */
class __TwigTemplate_3ce6f73803a2ff9e121a066e993528e7fa4d0e57d57fd3c80096b8013eaededd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.twig", "namespaces.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_class' => array($this, 'block_body_class'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Namespaces | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 3
    public function block_body_class($context, array $blocks = array())
    {
        echo "namespaces";
    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"page-header\">
        <h1>Namespaces</h1>
    </div>

    ";
        // line 10
        if ((isset($context["namespaces"]) || array_key_exists("namespaces", $context) ? $context["namespaces"] : (function () { throw new Twig_Error_Runtime('Variable "namespaces" does not exist.', 10, $this->getSourceContext()); })())) {
            // line 11
            echo "        <div class=\"namespaces clearfix\">
            ";
            // line 12
            $context["last_name"] = "";
            // line 13
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["namespaces"]) || array_key_exists("namespaces", $context) ? $context["namespaces"] : (function () { throw new Twig_Error_Runtime('Variable "namespaces" does not exist.', 13, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["namespace"]) {
                // line 14
                echo "                ";
                $context["top_level"] = twig_first($this->env, twig_split_filter($this->env, $context["namespace"], "\\"));
                // line 15
                echo "                ";
                if (((isset($context["top_level"]) || array_key_exists("top_level", $context) ? $context["top_level"] : (function () { throw new Twig_Error_Runtime('Variable "top_level" does not exist.', 15, $this->getSourceContext()); })()) != (isset($context["last_name"]) || array_key_exists("last_name", $context) ? $context["last_name"] : (function () { throw new Twig_Error_Runtime('Variable "last_name" does not exist.', 15, $this->getSourceContext()); })()))) {
                    // line 16
                    echo "                    ";
                    if ((isset($context["last_name"]) || array_key_exists("last_name", $context) ? $context["last_name"] : (function () { throw new Twig_Error_Runtime('Variable "last_name" does not exist.', 16, $this->getSourceContext()); })())) {
                        echo "</ul></div>";
                    }
                    // line 17
                    echo "                    <div class=\"namespace-container\">
                        <h2>";
                    // line 18
                    echo (isset($context["top_level"]) || array_key_exists("top_level", $context) ? $context["top_level"] : (function () { throw new Twig_Error_Runtime('Variable "top_level" does not exist.', 18, $this->getSourceContext()); })());
                    echo "</h2>
                        <ul>
                    ";
                    // line 20
                    $context["last_name"] = (isset($context["top_level"]) || array_key_exists("top_level", $context) ? $context["top_level"] : (function () { throw new Twig_Error_Runtime('Variable "top_level" does not exist.', 20, $this->getSourceContext()); })());
                    // line 21
                    echo "                ";
                }
                // line 22
                echo "                <li><a href=\"";
                echo $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForNamespace($context, $context["namespace"]);
                echo "\">";
                echo $context["namespace"];
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['namespace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                </ul>
            </div>
        </div>
    ";
        }
        // line 28
        echo "
";
    }

    public function getTemplateName()
    {
        return "namespaces.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 28,  99 => 24,  88 => 22,  85 => 21,  83 => 20,  78 => 18,  75 => 17,  70 => 16,  67 => 15,  64 => 14,  59 => 13,  57 => 12,  54 => 11,  52 => 10,  46 => 6,  43 => 5,  37 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout/layout.twig\" %}
{% block title %}Namespaces | {{ parent() }}{% endblock %}
{% block body_class 'namespaces' %}

{% block page_content %}
    <div class=\"page-header\">
        <h1>Namespaces</h1>
    </div>

    {% if namespaces %}
        <div class=\"namespaces clearfix\">
            {% set last_name = '' %}
            {% for namespace in namespaces %}
                {% set top_level = namespace|split('\\\\')|first %}
                {% if top_level != last_name %}
                    {% if last_name %}</ul></div>{% endif %}
                    <div class=\"namespace-container\">
                        <h2>{{ top_level|raw }}</h2>
                        <ul>
                    {% set last_name = top_level %}
                {% endif %}
                <li><a href=\"{{ namespace_path(namespace) }}\">{{ namespace|raw }}</a></li>
            {% endfor %}
                </ul>
            </div>
        </div>
    {% endif %}

{% endblock %}
", "namespaces.twig", "/Users/Edujugon/Code/Documentation/Documentator/vendor/sami/sami/Sami/Resources/themes/default/namespaces.twig");
    }
}
