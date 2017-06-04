<?php

/* doc-index.twig */
class __TwigTemplate_814c2a3c21227771ea800166e5260c542c13979c1da85fb100ea1d52e3faf820 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.twig", "doc-index.twig", 1);
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
        // line 2
        $context["__internal_687a7f16985bb6283291e495ccfa3de56b1409ddcb221c423dcbd74bd4933cc5"] = $this->loadTemplate("macros.twig", "doc-index.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Index | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body_class($context, array $blocks = array())
    {
        echo "doc-index";
    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"page-header\">
        <h1>Index</h1>
    </div>

    <ul class=\"pagination\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("A", "Z"));
        foreach ($context['_seq'] as $context["_key"] => $context["letter"]) {
            // line 14
            echo "            ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["items"] ?? null), $context["letter"], array(), "array", true, true) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new Twig_Error_Runtime('Variable "items" does not exist.', 14, $this->getSourceContext()); })()), $context["letter"], array(), "array")) > 1))) {
                // line 15
                echo "                <li><a href=\"#letter";
                echo $context["letter"];
                echo "\">";
                echo $context["letter"];
                echo "</a></li>
            ";
            } else {
                // line 17
                echo "                <li class=\"disabled\"><a href=\"#letter";
                echo $context["letter"];
                echo "\">";
                echo $context["letter"];
                echo "</a></li>
            ";
            }
            // line 19
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['letter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </ul>

    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new Twig_Error_Runtime('Variable "items" does not exist.', 22, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["letter"] => $context["elements"]) {
            // line 23
            echo "<h2 id=\"letter";
            echo $context["letter"];
            echo "\">";
            echo $context["letter"];
            echo "</h2>
        <dl id=\"index\">";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["elements"]);
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 26
                $context["type"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["element"], 0, array(), "array");
                // line 27
                $context["value"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["element"], 1, array(), "array");
                // line 28
                if (("class" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 28, $this->getSourceContext()); })()))) {
                    // line 29
                    echo "<dt>";
                    echo $context["__internal_687a7f16985bb6283291e495ccfa3de56b1409ddcb221c423dcbd74bd4933cc5"]->macro_class_link((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 29, $this->getSourceContext()); })()));
                    if ((isset($context["has_namespaces"]) || array_key_exists("has_namespaces", $context) ? $context["has_namespaces"] : (function () { throw new Twig_Error_Runtime('Variable "has_namespaces" does not exist.', 29, $this->getSourceContext()); })())) {
                        echo " &mdash; <em>Class in namespace ";
                        echo $context["__internal_687a7f16985bb6283291e495ccfa3de56b1409ddcb221c423dcbd74bd4933cc5"]->macro_namespace_link(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 29, $this->getSourceContext()); })()), "namespace", array()));
                    }
                    echo "</em></dt>
                    <dd>";
                    // line 30
                    echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 30, $this->getSourceContext()); })()), "shortdesc", array()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 30, $this->getSourceContext()); })()));
                    echo "</dd>";
                } elseif (("method" ==                 // line 31
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 31, $this->getSourceContext()); })()))) {
                    // line 32
                    echo "<dt>";
                    echo $context["__internal_687a7f16985bb6283291e495ccfa3de56b1409ddcb221c423dcbd74bd4933cc5"]->macro_method_link((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 32, $this->getSourceContext()); })()));
                    echo "() &mdash; <em>Method in class ";
                    echo $context["__internal_687a7f16985bb6283291e495ccfa3de56b1409ddcb221c423dcbd74bd4933cc5"]->macro_class_link(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 32, $this->getSourceContext()); })()), "class", array()));
                    echo "</em></dt>
                    <dd>";
                    // line 33
                    echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 33, $this->getSourceContext()); })()), "shortdesc", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 33, $this->getSourceContext()); })()), "class", array()));
                    echo "</dd>";
                } elseif (("property" ==                 // line 34
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 34, $this->getSourceContext()); })()))) {
                    // line 35
                    echo "<dt>\$";
                    echo $context["__internal_687a7f16985bb6283291e495ccfa3de56b1409ddcb221c423dcbd74bd4933cc5"]->macro_property_link((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 35, $this->getSourceContext()); })()));
                    echo " &mdash; <em>Property in class ";
                    echo $context["__internal_687a7f16985bb6283291e495ccfa3de56b1409ddcb221c423dcbd74bd4933cc5"]->macro_class_link(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 35, $this->getSourceContext()); })()), "class", array()));
                    echo "</em></dt>
                    <dd>";
                    // line 36
                    echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 36, $this->getSourceContext()); })()), "shortdesc", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 36, $this->getSourceContext()); })()), "class", array()));
                    echo "</dd>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        </dl>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['letter'], $context['elements'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "doc-index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 39,  144 => 36,  137 => 35,  135 => 34,  132 => 33,  125 => 32,  123 => 31,  120 => 30,  111 => 29,  109 => 28,  107 => 27,  105 => 26,  101 => 25,  94 => 23,  90 => 22,  86 => 20,  80 => 19,  72 => 17,  64 => 15,  61 => 14,  57 => 13,  49 => 7,  46 => 6,  40 => 4,  33 => 3,  29 => 1,  27 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout/layout.twig\" %}
{% from \"macros.twig\" import class_link, namespace_link, method_link, property_link %}
{% block title %}Index | {{ parent() }}{% endblock %}
{% block body_class 'doc-index' %}

{% block page_content %}

    <div class=\"page-header\">
        <h1>Index</h1>
    </div>

    <ul class=\"pagination\">
        {% for letter in 'A'..'Z' %}
            {% if items[letter] is defined and items[letter]|length > 1 %}
                <li><a href=\"#letter{{ letter|raw }}\">{{ letter|raw }}</a></li>
            {% else %}
                <li class=\"disabled\"><a href=\"#letter{{ letter|raw }}\">{{ letter|raw }}</a></li>
            {% endif %}
        {% endfor %}
    </ul>

    {% for letter, elements in items -%}
        <h2 id=\"letter{{ letter|raw }}\">{{ letter|raw }}</h2>
        <dl id=\"index\">
            {%- for element in elements %}
                {%- set type = element[0] %}
                {%- set value = element[1] %}
                {%- if 'class' == type -%}
                    <dt>{{ class_link(value) }}{% if has_namespaces %} &mdash; <em>Class in namespace {{ namespace_link(value.namespace) }}{% endif %}</em></dt>
                    <dd>{{ value.shortdesc|desc(value) }}</dd>
                {%- elseif 'method' == type -%}
                    <dt>{{ method_link(value) }}() &mdash; <em>Method in class {{ class_link(value.class) }}</em></dt>
                    <dd>{{ value.shortdesc|desc(value.class) }}</dd>
                {%- elseif 'property' == type -%}
                    <dt>\${{ property_link(value) }} &mdash; <em>Property in class {{ class_link(value.class) }}</em></dt>
                    <dd>{{ value.shortdesc|desc(value.class) }}</dd>
                {%- endif %}
            {%- endfor %}
        </dl>
    {%- endfor %}
{% endblock %}
", "doc-index.twig", "/Users/Edujugon/Code/Documentation/Documentator/vendor/sami/sami/Sami/Resources/themes/default/doc-index.twig");
    }
}
