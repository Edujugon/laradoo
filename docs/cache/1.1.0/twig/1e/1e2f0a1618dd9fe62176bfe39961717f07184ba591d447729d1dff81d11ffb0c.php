<?php

/* class.twig */
class __TwigTemplate_ea3e599f9a1fa64a525c9c39db3fa418c46acca48a9be27f93437ff01bba6e57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.twig", "class.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_class' => array($this, 'block_body_class'),
            'page_id' => array($this, 'block_page_id'),
            'below_menu' => array($this, 'block_below_menu'),
            'page_content' => array($this, 'block_page_content'),
            'class_signature' => array($this, 'block_class_signature'),
            'method_signature' => array($this, 'block_method_signature'),
            'method_parameters_signature' => array($this, 'block_method_parameters_signature'),
            'parameters' => array($this, 'block_parameters'),
            'return' => array($this, 'block_return'),
            'exceptions' => array($this, 'block_exceptions'),
            'see' => array($this, 'block_see'),
            'constants' => array($this, 'block_constants'),
            'properties' => array($this, 'block_properties'),
            'methods' => array($this, 'block_methods'),
            'methods_details' => array($this, 'block_methods_details'),
            'method' => array($this, 'block_method'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["__internal_bcc9cc3629ca6471acc508322f3ab0a7c21ca6dda07f27cbbbdd260817d542d5"] = $this->loadTemplate("macros.twig", "class.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 3, $this->getSourceContext()); })());
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body_class($context, array $blocks = array())
    {
        echo "class";
    }

    // line 5
    public function block_page_id($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("class:" . twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 5, $this->getSourceContext()); })()), "name", array()), array("\\" => "_"))), "html", null, true);
    }

    // line 7
    public function block_below_menu($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 8, $this->getSourceContext()); })()), "namespace", array())) {
            // line 9
            echo "        <div class=\"namespace-breadcrumbs\">
            <ol class=\"breadcrumb\">
                <li><span class=\"label label-default\">";
            // line 11
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 11, $this->getSourceContext()); })()), "categoryName", array());
            echo "</span></li>
                ";
            // line 12
            echo $context["__internal_bcc9cc3629ca6471acc508322f3ab0a7c21ca6dda07f27cbbbdd260817d542d5"]->macro_breadcrumbs(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 12, $this->getSourceContext()); })()), "namespace", array()));
            echo "
                <li>";
            // line 13
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 13, $this->getSourceContext()); })()), "shortname", array());
            echo "</li>
            </ol>
        </div>
    ";
        }
    }

    // line 19
    public function block_page_content($context, array $blocks = array())
    {
        // line 20
        echo "
    <div class=\"page-header\">
        <h1>
            ";
        // line 23
        echo twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 23, $this->getSourceContext()); })()), "name", array()), "\\"));
        echo "
            ";
        // line 24
        echo $context["__internal_bcc9cc3629ca6471acc508322f3ab0a7c21ca6dda07f27cbbbdd260817d542d5"]->macro_deprecated((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 24, $this->getSourceContext()); })()));
        echo "
        </h1>
    </div>

    <p>";
        // line 28
        $this->displayBlock("class_signature", $context, $blocks);
        echo "</p>

    ";
        // line 30
        echo $context["__internal_bcc9cc3629ca6471acc508322f3ab0a7c21ca6dda07f27cbbbdd260817d542d5"]->macro_deprecations((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 30, $this->getSourceContext()); })()));
        echo "

    ";
        // line 32
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 32, $this->getSourceContext()); })()), "shortdesc", array()) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 32, $this->getSourceContext()); })()), "longdesc", array()))) {
            // line 33
            echo "        <div class=\"description\">
            ";
            // line 34
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 34, $this->getSourceContext()); })()), "shortdesc", array())) {
                // line 35
                echo "<p>";
                echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 35, $this->getSourceContext()); })()), "shortdesc", array()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 35, $this->getSourceContext()); })()));
                echo "</p>";
            }
            // line 37
            echo "            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 37, $this->getSourceContext()); })()), "longdesc", array())) {
                // line 38
                echo "<p>";
                echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 38, $this->getSourceContext()); })()), "longdesc", array()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 38, $this->getSourceContext()); })()));
                echo "</p>";
            }
            // line 40
            echo "            ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new Twig_Error_Runtime('Variable "project" does not exist.', 40, $this->getSourceContext()); })()), "config", array(0 => "insert_todos"), "method") == true)) {
                // line 41
                echo "                ";
                echo $context["__internal_bcc9cc3629ca6471acc508322f3ab0a7c21ca6dda07f27cbbbdd260817d542d5"]->macro_todos((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 41, $this->getSourceContext()); })()));
                echo "
            ";
            }
            // line 43
            echo "        </div>
    ";
        }
        // line 45
        echo "
    ";
        // line 46
        if ((isset($context["traits"]) || array_key_exists("traits", $context) ? $context["traits"] : (function () { throw new Twig_Error_Runtime('Variable "traits" does not exist.', 46, $this->getSourceContext()); })())) {
            // line 47
            echo "        <h2>Traits</h2>

        ";
            // line 49
            echo $context["__internal_bcc9cc3629ca6471acc508322f3ab0a7c21ca6dda07f27cbbbdd260817d542d5"]->macro_render_classes((isset($context["traits"]) || array_key_exists("traits", $context) ? $context["traits"] : (function () { throw new Twig_Error_Runtime('Variable "traits" does not exist.', 49, $this->getSourceContext()); })()));
            echo "
    ";
        }
        // line 51
        echo "
    ";
        // line 52
        if ((isset($context["constants"]) || array_key_exists("constants", $context) ? $context["constants"] : (function () { throw new Twig_Error_Runtime('Variable "constants" does not exist.', 52, $this->getSourceContext()); })())) {
            // line 53
            echo "        <h2>Constants</h2>

        ";
            // line 55
            $this->displayBlock("constants", $context, $blocks);
            echo "
    ";
        }
        // line 57
        echo "
    ";
        // line 58
        if ((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new Twig_Error_Runtime('Variable "properties" does not exist.', 58, $this->getSourceContext()); })())) {
            // line 59
            echo "        <h2>Properties</h2>

        ";
            // line 61
            $this->displayBlock("properties", $context, $blocks);
            echo "
    ";
        }
        // line 63
        echo "
    ";
        // line 64
        if ((isset($context["methods"]) || array_key_exists("methods", $context) ? $context["methods"] : (function () { throw new Twig_Error_Runtime('Variable "methods" does not exist.', 64, $this->getSourceContext()); })())) {
            // line 65
            echo "        <h2>Methods</h2>

        ";
            // line 67
            $this->displayBlock("methods", $context, $blocks);
            echo "

        <h2>Details</h2>

        ";
            // line 71
            $this->displayBlock("methods_details", $context, $blocks);
            echo "
    ";
        }
        // line 73
        echo "
";
    }

    // line 76
    public function block_class_signature($context, array $blocks = array())
    {
        // line 77
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 77, $this->getSourceContext()); })()), "interface", array()) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 77, $this->getSourceContext()); })()), "abstract", array()))) {
            echo "abstract ";
        }
        // line 78
        echo "    ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 78, $this->getSourceContext()); })()), "categoryName", array());
        echo "
    <strong>";
        // line 79
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 79, $this->getSourceContext()); })()), "shortname", array());
        echo "</strong>";
        // line 80
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 80, $this->getSourceContext()); })()), "parent", array())) {
            // line 81
            echo "        extends ";
            echo $context["__internal_bcc9cc3629ca6471acc508322f3ab0a7c21ca6dda07f27cbbbdd260817d542d5"]->macro_class_link(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 81, $this->getSourceContext()); })()), "parent", array()));
        }
        // line 83
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 83, $this->getSourceContext()); })()), "interfaces", array())) > 0)) {
            // line 84
            echo "        implements
        ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 85, $this->getSourceContext()); })()), "interfaces", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["interface"]) {
                // line 86
                echo $context["__internal_bcc9cc3629ca6471acc508322f3ab0a7c21ca6dda07f27cbbbdd260817d542d5"]->macro_class_link($context["interface"]);
                // line 87
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interface'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 90
        echo $context["__internal_bcc9cc3629ca6471acc508322f3ab0a7c21ca6dda07f27cbbbdd260817d542d5"]->macro_source_link((isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new Twig_Error_Runtime('Variable "project" does not exist.', 90, $this->getSourceContext()); })()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 90, $this->getSourceContext()); })()));
        echo "
";
    }

    // line 93
    public function block_method_signature($context, array $blocks = array())
    {
        // line 94
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 94, $this->getSourceContext()); })()), "final", array())) {
            echo "final";
        }
        // line 95
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 95, $this->getSourceContext()); })()), "abstract", array())) {
            echo "abstract";
        }
        // line 96
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 96, $this->getSourceContext()); })()), "static", array())) {
            echo "static";
        }
        // line 97
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 97, $this->getSourceContext()); })()), "protected", array())) {
            echo "protected";
        }
        // line 98
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 98, $this->getSourceContext()); })()), "private", array())) {
            echo "private";
        }
        // line 99
        echo "    ";
        echo $context["__internal_bcc9cc3629ca6471acc508322f3ab0a7c21ca6dda07f27cbbbdd260817d542d5"]->macro_hint_link(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 99, $this->getSourceContext()); })()), "hint", array()));
        echo "
    <strong>";
        // line 100
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 100, $this->getSourceContext()); })()), "name", array());
        echo "</strong>";
        $this->displayBlock("method_parameters_signature", $context, $blocks);
    }

    // line 103
    public function block_method_parameters_signature($context, array $blocks = array())
    {
        // line 104
        $context["__internal_5601675ec17688ab2e0d97adc44983d98054ccb21b48d9f39c4ed374190fd0c2"] = $this->loadTemplate("macros.twig", "class.twig", 104);
        // line 105
        echo $context["__internal_5601675ec17688ab2e0d97adc44983d98054ccb21b48d9f39c4ed374190fd0c2"]->macro_method_parameters_signature((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 105, $this->getSourceContext()); })()));
        echo "
    ";
        // line 106
        echo $context["__internal_bcc9cc3629ca6471acc508322f3ab0a7c21ca6dda07f27cbbbdd260817d542d5"]->macro_deprecated((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 106, $this->getSourceContext()); })()));
    }

    // line 109
    public function block_parameters($context, array $blocks = array())
    {
        // line 110
        echo "    <table class=\"table table-condensed\">
        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 111, $this->getSourceContext()); })()), "parameters", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["parameter"]) {
            // line 112
            echo "            <tr>
                <td>";
            // line 113
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["parameter"], "hint", array())) {
                echo $context["__internal_bcc9cc3629ca6471acc508322f3ab0a7c21ca6dda07f27cbbbdd260817d542d5"]->macro_hint_link(twig_get_attribute($this->env, $this->getSourceContext(), $context["parameter"], "hint", array()));
            }
            echo "</td>
                <td>\$";
            // line 114
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["parameter"], "name", array());
            echo "</td>
                <td>";
            // line 115
            echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), $context["parameter"], "shortdesc", array()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 115, $this->getSourceContext()); })()));
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "    </table>
";
    }

    // line 121
    public function block_return($context, array $blocks = array())
    {
        // line 122
        echo "    <table class=\"table table-condensed\">
        <tr>
            <td>";
        // line 124
        echo $context["__internal_bcc9cc3629ca6471acc508322f3ab0a7c21ca6dda07f27cbbbdd260817d542d5"]->macro_hint_link(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 124, $this->getSourceContext()); })()), "hint", array()));
        echo "</td>
            <td>";
        // line 125
        echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 125, $this->getSourceContext()); })()), "hintDesc", array()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 125, $this->getSourceContext()); })()));
        echo "</td>
        </tr>
    </table>
";
    }

    // line 130
    public function block_exceptions($context, array $blocks = array())
    {
        // line 131
        echo "    <table class=\"table table-condensed\">
        ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 132, $this->getSourceContext()); })()), "exceptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["exception"]) {
            // line 133
            echo "            <tr>
                <td>";
            // line 134
            echo $context["__internal_bcc9cc3629ca6471acc508322f3ab0a7c21ca6dda07f27cbbbdd260817d542d5"]->macro_class_link(twig_get_attribute($this->env, $this->getSourceContext(), $context["exception"], 0, array(), "array"));
            echo "</td>
                <td>";
            // line 135
            echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), $context["exception"], 1, array(), "array"), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 135, $this->getSourceContext()); })()));
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exception'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "    </table>
";
    }

    // line 141
    public function block_see($context, array $blocks = array())
    {
        // line 142
        echo "    <table class=\"table table-condensed\">
        ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 143, $this->getSourceContext()); })()), "tags", array(0 => "see"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 144
            echo "            <tr>
                <td>";
            // line 145
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["tag"], 0, array(), "array");
            echo "</td>
                <td>";
            // line 146
            echo twig_join_filter(twig_slice($this->env, $context["tag"], 1, null), " ");
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "    </table>
";
    }

    // line 152
    public function block_constants($context, array $blocks = array())
    {
        // line 153
        echo "    <table class=\"table table-condensed\">
        ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["constants"]) || array_key_exists("constants", $context) ? $context["constants"] : (function () { throw new Twig_Error_Runtime('Variable "constants" does not exist.', 154, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["constant"]) {
            // line 155
            echo "            <tr>
                <td>";
            // line 156
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["constant"], "name", array());
            echo "</td>
                <td class=\"last\">
                    <p><em>";
            // line 158
            echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), $context["constant"], "shortdesc", array()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 158, $this->getSourceContext()); })()));
            echo "</em></p>
                    <p>";
            // line 159
            echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), $context["constant"], "longdesc", array()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 159, $this->getSourceContext()); })()));
            echo "</p>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "    </table>
";
    }

    // line 166
    public function block_properties($context, array $blocks = array())
    {
        // line 167
        echo "    <table class=\"table table-condensed\">
        ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new Twig_Error_Runtime('Variable "properties" does not exist.', 168, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 169
            echo "            <tr>
                <td class=\"type\" id=\"property_";
            // line 170
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["property"], "name", array());
            echo "\">
                    ";
            // line 171
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["property"], "static", array())) {
                echo "static";
            }
            // line 172
            echo "                    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["property"], "protected", array())) {
                echo "protected";
            }
            // line 173
            echo "                    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["property"], "private", array())) {
                echo "private";
            }
            // line 174
            echo "                    ";
            echo $context["__internal_bcc9cc3629ca6471acc508322f3ab0a7c21ca6dda07f27cbbbdd260817d542d5"]->macro_hint_link(twig_get_attribute($this->env, $this->getSourceContext(), $context["property"], "hint", array()));
            echo "
                </td>
                <td>\$";
            // line 176
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["property"], "name", array());
            echo "</td>
                <td class=\"last\">";
            // line 177
            echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), $context["property"], "shortdesc", array()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 177, $this->getSourceContext()); })()));
            echo "</td>
                <td>";
            // line 179
            if ( !(twig_get_attribute($this->env, $this->getSourceContext(), $context["property"], "class", array()) === (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 179, $this->getSourceContext()); })()))) {
                // line 180
                echo "<small>from&nbsp;";
                echo $context["__internal_bcc9cc3629ca6471acc508322f3ab0a7c21ca6dda07f27cbbbdd260817d542d5"]->macro_property_link($context["property"], false, true);
                echo "</small>";
            }
            // line 182
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "    </table>
";
    }

    // line 188
    public function block_methods($context, array $blocks = array())
    {
        // line 189
        echo "    <div class=\"container-fluid underlined\">
        ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["methods"]) || array_key_exists("methods", $context) ? $context["methods"] : (function () { throw new Twig_Error_Runtime('Variable "methods" does not exist.', 190, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 191
            echo "            <div class=\"row\">
                <div class=\"col-md-2 type\">
                    ";
            // line 193
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["method"], "static", array())) {
                echo "static&nbsp;";
            }
            echo $context["__internal_bcc9cc3629ca6471acc508322f3ab0a7c21ca6dda07f27cbbbdd260817d542d5"]->macro_hint_link(twig_get_attribute($this->env, $this->getSourceContext(), $context["method"], "hint", array()));
            echo "
                </div>
                <div class=\"col-md-8 type\">
                    <a href=\"#method_";
            // line 196
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["method"], "name", array());
            echo "\">";
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["method"], "name", array());
            echo "</a>";
            $this->displayBlock("method_parameters_signature", $context, $blocks);
            echo "
                    ";
            // line 197
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["method"], "shortdesc", array())) {
                // line 198
                echo "                        <p class=\"no-description\">No description</p>
                    ";
            } else {
                // line 200
                echo "                        <p>";
                echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), $context["method"], "shortdesc", array()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 200, $this->getSourceContext()); })()));
                echo "</p>";
            }
            // line 202
            echo "                </div>
                <div class=\"col-md-2\">";
            // line 204
            if ( !(twig_get_attribute($this->env, $this->getSourceContext(), $context["method"], "class", array()) === (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 204, $this->getSourceContext()); })()))) {
                // line 205
                echo "<small>from&nbsp;";
                echo $context["__internal_bcc9cc3629ca6471acc508322f3ab0a7c21ca6dda07f27cbbbdd260817d542d5"]->macro_method_link($context["method"], false, true);
                echo "</small>";
            }
            // line 207
            echo "</div>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "    </div>
";
    }

    // line 213
    public function block_methods_details($context, array $blocks = array())
    {
        // line 214
        echo "    <div id=\"method-details\">
        ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["methods"]) || array_key_exists("methods", $context) ? $context["methods"] : (function () { throw new Twig_Error_Runtime('Variable "methods" does not exist.', 215, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 216
            echo "            <div class=\"method-item\">
                ";
            // line 217
            $this->displayBlock("method", $context, $blocks);
            echo "
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "    </div>
";
    }

    // line 223
    public function block_method($context, array $blocks = array())
    {
        // line 224
        echo "    <h3 id=\"method_";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 224, $this->getSourceContext()); })()), "name", array());
        echo "\">
        <div class=\"location\">";
        // line 225
        if ( !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 225, $this->getSourceContext()); })()), "class", array()) === (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 225, $this->getSourceContext()); })()))) {
            echo "in ";
            echo $context["__internal_bcc9cc3629ca6471acc508322f3ab0a7c21ca6dda07f27cbbbdd260817d542d5"]->macro_method_link((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 225, $this->getSourceContext()); })()), false, true);
            echo " ";
        }
        echo "at ";
        echo $context["__internal_bcc9cc3629ca6471acc508322f3ab0a7c21ca6dda07f27cbbbdd260817d542d5"]->macro_method_source_link((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 225, $this->getSourceContext()); })()));
        echo "</div>
        <code>";
        // line 226
        $this->displayBlock("method_signature", $context, $blocks);
        echo "</code>
    </h3>
    <div class=\"details\">
        ";
        // line 229
        echo $context["__internal_bcc9cc3629ca6471acc508322f3ab0a7c21ca6dda07f27cbbbdd260817d542d5"]->macro_deprecations((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 229, $this->getSourceContext()); })()));
        echo "

        ";
        // line 231
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 231, $this->getSourceContext()); })()), "shortdesc", array()) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 231, $this->getSourceContext()); })()), "longdesc", array()))) {
            // line 232
            echo "            <div class=\"method-description\">
                ";
            // line 233
            if (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 233, $this->getSourceContext()); })()), "shortdesc", array()) &&  !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 233, $this->getSourceContext()); })()), "longdesc", array()))) {
                // line 234
                echo "                    <p class=\"no-description\">No description</p>
                ";
            } else {
                // line 236
                echo "                    ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 236, $this->getSourceContext()); })()), "shortdesc", array())) {
                    // line 237
                    echo "<p>";
                    echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 237, $this->getSourceContext()); })()), "shortdesc", array()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 237, $this->getSourceContext()); })()));
                    echo "</p>";
                }
                // line 239
                echo "                    ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 239, $this->getSourceContext()); })()), "longdesc", array())) {
                    // line 240
                    echo "<p>";
                    echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 240, $this->getSourceContext()); })()), "longdesc", array()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 240, $this->getSourceContext()); })()));
                    echo "</p>";
                }
            }
            // line 243
            echo "                ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new Twig_Error_Runtime('Variable "project" does not exist.', 243, $this->getSourceContext()); })()), "config", array(0 => "insert_todos"), "method") == true)) {
                // line 244
                echo "                    ";
                echo $context["__internal_bcc9cc3629ca6471acc508322f3ab0a7c21ca6dda07f27cbbbdd260817d542d5"]->macro_todos((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 244, $this->getSourceContext()); })()));
                echo "
                ";
            }
            // line 246
            echo "            </div>
        ";
        }
        // line 248
        echo "        <div class=\"tags\">
            ";
        // line 249
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 249, $this->getSourceContext()); })()), "parameters", array())) {
            // line 250
            echo "                <h4>Parameters</h4>

                ";
            // line 252
            $this->displayBlock("parameters", $context, $blocks);
            echo "
            ";
        }
        // line 254
        echo "
            ";
        // line 255
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 255, $this->getSourceContext()); })()), "hintDesc", array()) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 255, $this->getSourceContext()); })()), "hint", array()))) {
            // line 256
            echo "                <h4>Return Value</h4>

                ";
            // line 258
            $this->displayBlock("return", $context, $blocks);
            echo "
            ";
        }
        // line 260
        echo "
            ";
        // line 261
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 261, $this->getSourceContext()); })()), "exceptions", array())) {
            // line 262
            echo "                <h4>Exceptions</h4>

                ";
            // line 264
            $this->displayBlock("exceptions", $context, $blocks);
            echo "
            ";
        }
        // line 266
        echo "
            ";
        // line 267
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 267, $this->getSourceContext()); })()), "tags", array(0 => "see"), "method")) {
            // line 268
            echo "                <h4>See also</h4>

                ";
            // line 270
            $this->displayBlock("see", $context, $blocks);
            echo "
            ";
        }
        // line 272
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "class.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  823 => 272,  818 => 270,  814 => 268,  812 => 267,  809 => 266,  804 => 264,  800 => 262,  798 => 261,  795 => 260,  790 => 258,  786 => 256,  784 => 255,  781 => 254,  776 => 252,  772 => 250,  770 => 249,  767 => 248,  763 => 246,  757 => 244,  754 => 243,  748 => 240,  745 => 239,  740 => 237,  737 => 236,  733 => 234,  731 => 233,  728 => 232,  726 => 231,  721 => 229,  715 => 226,  705 => 225,  700 => 224,  697 => 223,  692 => 220,  675 => 217,  672 => 216,  655 => 215,  652 => 214,  649 => 213,  644 => 210,  628 => 207,  623 => 205,  621 => 204,  618 => 202,  613 => 200,  609 => 198,  607 => 197,  599 => 196,  590 => 193,  586 => 191,  569 => 190,  566 => 189,  563 => 188,  558 => 185,  550 => 182,  545 => 180,  543 => 179,  539 => 177,  535 => 176,  529 => 174,  524 => 173,  519 => 172,  515 => 171,  511 => 170,  508 => 169,  504 => 168,  501 => 167,  498 => 166,  493 => 163,  483 => 159,  479 => 158,  474 => 156,  471 => 155,  467 => 154,  464 => 153,  461 => 152,  456 => 149,  447 => 146,  443 => 145,  440 => 144,  436 => 143,  433 => 142,  430 => 141,  425 => 138,  416 => 135,  412 => 134,  409 => 133,  405 => 132,  402 => 131,  399 => 130,  391 => 125,  387 => 124,  383 => 122,  380 => 121,  375 => 118,  366 => 115,  362 => 114,  356 => 113,  353 => 112,  349 => 111,  346 => 110,  343 => 109,  339 => 106,  335 => 105,  333 => 104,  330 => 103,  324 => 100,  319 => 99,  314 => 98,  309 => 97,  304 => 96,  299 => 95,  295 => 94,  292 => 93,  286 => 90,  269 => 87,  267 => 86,  250 => 85,  247 => 84,  245 => 83,  241 => 81,  239 => 80,  236 => 79,  231 => 78,  227 => 77,  224 => 76,  219 => 73,  214 => 71,  207 => 67,  203 => 65,  201 => 64,  198 => 63,  193 => 61,  189 => 59,  187 => 58,  184 => 57,  179 => 55,  175 => 53,  173 => 52,  170 => 51,  165 => 49,  161 => 47,  159 => 46,  156 => 45,  152 => 43,  146 => 41,  143 => 40,  138 => 38,  135 => 37,  130 => 35,  128 => 34,  125 => 33,  123 => 32,  118 => 30,  113 => 28,  106 => 24,  102 => 23,  97 => 20,  94 => 19,  85 => 13,  81 => 12,  77 => 11,  73 => 9,  70 => 8,  67 => 7,  61 => 5,  55 => 4,  47 => 3,  43 => 1,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout/layout.twig\" %}
{% from \"macros.twig\" import render_classes, breadcrumbs, namespace_link, class_link, property_link, method_link, hint_link, source_link, method_source_link, deprecated, deprecations, todo, todos %}
{% block title %}{{ class|raw }} | {{ parent() }}{% endblock %}
{% block body_class 'class' %}
{% block page_id 'class:' ~ (class.name|replace({'\\\\': '_'})) %}

{% block below_menu %}
    {% if class.namespace %}
        <div class=\"namespace-breadcrumbs\">
            <ol class=\"breadcrumb\">
                <li><span class=\"label label-default\">{{ class.categoryName|raw }}</span></li>
                {{ breadcrumbs(class.namespace) }}
                <li>{{ class.shortname|raw }}</li>
            </ol>
        </div>
    {% endif %}
{% endblock %}

{% block page_content %}

    <div class=\"page-header\">
        <h1>
            {{ class.name|split('\\\\')|last|raw }}
            {{ deprecated(class) }}
        </h1>
    </div>

    <p>{{ block('class_signature') }}</p>

    {{ deprecations(class) }}

    {% if class.shortdesc or class.longdesc %}
        <div class=\"description\">
            {% if class.shortdesc -%}
                <p>{{ class.shortdesc|desc(class) }}</p>
            {%- endif %}
            {% if class.longdesc -%}
                <p>{{ class.longdesc|desc(class) }}</p>
            {%- endif %}
            {% if project.config('insert_todos') == true %}
                {{ todos(class) }}
            {% endif %}
        </div>
    {% endif %}

    {% if traits %}
        <h2>Traits</h2>

        {{ render_classes(traits) }}
    {% endif %}

    {% if constants %}
        <h2>Constants</h2>

        {{ block('constants') }}
    {% endif %}

    {% if properties %}
        <h2>Properties</h2>

        {{ block('properties') }}
    {% endif %}

    {% if methods %}
        <h2>Methods</h2>

        {{ block('methods') }}

        <h2>Details</h2>

        {{ block('methods_details') }}
    {% endif %}

{% endblock %}

{% block class_signature -%}
    {% if not class.interface and class.abstract %}abstract {% endif %}
    {{ class.categoryName|raw }}
    <strong>{{ class.shortname|raw }}</strong>
    {%- if class.parent %}
        extends {{ class_link(class.parent) }}
    {%- endif %}
    {%- if class.interfaces|length > 0 %}
        implements
        {% for interface in class.interfaces %}
            {{- class_link(interface) }}
            {%- if not loop.last %}, {% endif %}
        {%- endfor %}
    {%- endif %}
    {{- source_link(project, class) }}
{% endblock %}

{% block method_signature -%}
    {% if method.final %}final{% endif %}
    {% if method.abstract %}abstract{% endif %}
    {% if method.static %}static{% endif %}
    {% if method.protected %}protected{% endif %}
    {% if method.private %}private{% endif %}
    {{ hint_link(method.hint) }}
    <strong>{{ method.name|raw }}</strong>{{ block('method_parameters_signature') }}
{%- endblock %}

{% block method_parameters_signature -%}
    {%- from \"macros.twig\" import method_parameters_signature -%}
    {{ method_parameters_signature(method) }}
    {{ deprecated(method) }}
{%- endblock %}

{% block parameters %}
    <table class=\"table table-condensed\">
        {% for parameter in method.parameters %}
            <tr>
                <td>{% if parameter.hint %}{{ hint_link(parameter.hint) }}{% endif %}</td>
                <td>\${{ parameter.name|raw }}</td>
                <td>{{ parameter.shortdesc|desc(class) }}</td>
            </tr>
        {% endfor %}
    </table>
{% endblock %}

{% block return %}
    <table class=\"table table-condensed\">
        <tr>
            <td>{{ hint_link(method.hint) }}</td>
            <td>{{ method.hintDesc|desc(class) }}</td>
        </tr>
    </table>
{% endblock %}

{% block exceptions %}
    <table class=\"table table-condensed\">
        {% for exception in method.exceptions %}
            <tr>
                <td>{{ class_link(exception[0]) }}</td>
                <td>{{ exception[1]|desc(class) }}</td>
            </tr>
        {% endfor %}
    </table>
{% endblock %}

{% block see %}
    <table class=\"table table-condensed\">
        {% for tag in method.tags('see') %}
            <tr>
                <td>{{ tag[0]|raw }}</td>
                <td>{{ tag[1:]|join(' ')|raw }}</td>
            </tr>
        {% endfor %}
    </table>
{% endblock %}

{% block constants %}
    <table class=\"table table-condensed\">
        {% for constant in constants %}
            <tr>
                <td>{{ constant.name|raw }}</td>
                <td class=\"last\">
                    <p><em>{{ constant.shortdesc|desc(class) }}</em></p>
                    <p>{{ constant.longdesc|desc(class) }}</p>
                </td>
            </tr>
        {% endfor %}
    </table>
{% endblock %}

{% block properties %}
    <table class=\"table table-condensed\">
        {% for property in properties %}
            <tr>
                <td class=\"type\" id=\"property_{{ property.name|raw }}\">
                    {% if property.static %}static{% endif %}
                    {% if property.protected %}protected{% endif %}
                    {% if property.private %}private{% endif %}
                    {{ hint_link(property.hint) }}
                </td>
                <td>\${{ property.name|raw }}</td>
                <td class=\"last\">{{ property.shortdesc|desc(class) }}</td>
                <td>
                    {%- if property.class is not same as(class) -%}
                        <small>from&nbsp;{{ property_link(property, false, true) }}</small>
                    {%- endif -%}
                </td>
            </tr>
        {% endfor %}
    </table>
{% endblock %}

{% block methods %}
    <div class=\"container-fluid underlined\">
        {% for method in methods %}
            <div class=\"row\">
                <div class=\"col-md-2 type\">
                    {% if method.static %}static&nbsp;{% endif %}{{ hint_link(method.hint) }}
                </div>
                <div class=\"col-md-8 type\">
                    <a href=\"#method_{{ method.name|raw }}\">{{ method.name|raw }}</a>{{ block('method_parameters_signature') }}
                    {% if not method.shortdesc %}
                        <p class=\"no-description\">No description</p>
                    {% else %}
                        <p>{{ method.shortdesc|desc(class) }}</p>
                    {%- endif %}
                </div>
                <div class=\"col-md-2\">
                    {%- if method.class is not same as(class) -%}
                        <small>from&nbsp;{{ method_link(method, false, true) }}</small>
                    {%- endif -%}
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}

{% block methods_details %}
    <div id=\"method-details\">
        {% for method in methods %}
            <div class=\"method-item\">
                {{ block('method') }}
            </div>
        {% endfor %}
    </div>
{% endblock %}

{% block method %}
    <h3 id=\"method_{{ method.name|raw }}\">
        <div class=\"location\">{% if method.class is not same as(class) %}in {{ method_link(method, false, true) }} {% endif %}at {{ method_source_link(method) }}</div>
        <code>{{ block('method_signature') }}</code>
    </h3>
    <div class=\"details\">
        {{ deprecations(method) }}

        {% if method.shortdesc or method.longdesc %}
            <div class=\"method-description\">
                {% if not method.shortdesc and not method.longdesc %}
                    <p class=\"no-description\">No description</p>
                {% else %}
                    {% if method.shortdesc -%}
                    <p>{{ method.shortdesc|desc(class) }}</p>
                    {%- endif %}
                    {% if method.longdesc -%}
                    <p>{{ method.longdesc|desc(class) }}</p>
                    {%- endif %}
                {%- endif %}
                {% if project.config('insert_todos') == true %}
                    {{ todos(method) }}
                {% endif %}
            </div>
        {% endif %}
        <div class=\"tags\">
            {% if method.parameters %}
                <h4>Parameters</h4>

                {{ block('parameters') }}
            {% endif %}

            {% if method.hintDesc or method.hint %}
                <h4>Return Value</h4>

                {{ block('return') }}
            {% endif %}

            {% if method.exceptions %}
                <h4>Exceptions</h4>

                {{ block('exceptions') }}
            {% endif %}

            {% if method.tags('see') %}
                <h4>See also</h4>

                {{ block('see') }}
            {% endif %}
        </div>
    </div>
{% endblock %}
", "class.twig", "/Users/Edujugon/Code/Documentation/Documentator/vendor/sami/sami/Sami/Resources/themes/default/class.twig");
    }
}
