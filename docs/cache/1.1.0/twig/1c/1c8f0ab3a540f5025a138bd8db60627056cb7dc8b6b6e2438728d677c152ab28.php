<?php

/* macros.twig */
class __TwigTemplate_e20a349d4a7bba4bf2b995715a52703a0de113fb07414524a73c2265185bcc5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 14
        echo "
";
        // line 20
        echo "
";
        // line 26
        echo "
";
        // line 42
        echo "
";
        // line 48
        echo "
";
        // line 56
        echo "
";
        // line 60
        echo "
";
        // line 72
        echo "
";
        // line 94
        echo "
";
        // line 106
        echo "
";
        // line 110
        echo "
";
        // line 126
        echo "
";
        // line 130
        echo "
";
    }

    // line 1
    public function macro_namespace_link($__namespace__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "namespace" => $__namespace__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<a href=\"";
            echo $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForNamespace($context, (isset($context["namespace"]) || array_key_exists("namespace", $context) ? $context["namespace"] : (function () { throw new Twig_Error_Runtime('Variable "namespace" does not exist.', 2, $this->getSourceContext()); })()));
            echo "\">";
            echo (isset($context["namespace"]) || array_key_exists("namespace", $context) ? $context["namespace"] : (function () { throw new Twig_Error_Runtime('Variable "namespace" does not exist.', 2, $this->getSourceContext()); })());
            echo "</a>";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 5
    public function macro_class_link($__class__ = null, $__absolute__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "class" => $__class__,
            "absolute" => $__absolute__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 6, $this->getSourceContext()); })()), "projectclass", array())) {
                // line 7
                echo "<a href=\"";
                echo $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForClass($context, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 7, $this->getSourceContext()); })()));
                echo "\">";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(),             // line 8
(isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 8, $this->getSourceContext()); })()), "phpclass", array())) {
                // line 9
                echo "<a target=\"_blank\" href=\"http://php.net/";
                echo (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 9, $this->getSourceContext()); })());
                echo "\">";
            }
            // line 11
            echo $this->env->getExtension('Sami\Renderer\TwigExtension')->abbrClass((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 11, $this->getSourceContext()); })()), ((array_key_exists("absolute", $context)) ? (_twig_default_filter((isset($context["absolute"]) || array_key_exists("absolute", $context) ? $context["absolute"] : (function () { throw new Twig_Error_Runtime('Variable "absolute" does not exist.', 11, $this->getSourceContext()); })()), false)) : (false)));
            // line 12
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 12, $this->getSourceContext()); })()), "projectclass", array()) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 12, $this->getSourceContext()); })()), "phpclass", array()))) {
                echo "</a>";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 15
    public function macro_method_link($__method__ = null, $__absolute__ = null, $__classonly__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "method" => $__method__,
            "absolute" => $__absolute__,
            "classonly" => $__classonly__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "<a href=\"";
            echo $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForMethod($context, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 16, $this->getSourceContext()); })()));
            echo "\">";
            // line 17
            echo $this->env->getExtension('Sami\Renderer\TwigExtension')->abbrClass(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 17, $this->getSourceContext()); })()), "class", array()));
            if ( !((array_key_exists("classonly", $context)) ? (_twig_default_filter((isset($context["classonly"]) || array_key_exists("classonly", $context) ? $context["classonly"] : (function () { throw new Twig_Error_Runtime('Variable "classonly" does not exist.', 17, $this->getSourceContext()); })()), false)) : (false))) {
                echo "::";
                echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 17, $this->getSourceContext()); })()), "name", array());
            }
            // line 18
            echo "</a>";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 21
    public function macro_property_link($__property__ = null, $__absolute__ = null, $__classonly__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "property" => $__property__,
            "absolute" => $__absolute__,
            "classonly" => $__classonly__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 22
            echo "<a href=\"";
            echo $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForProperty($context, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new Twig_Error_Runtime('Variable "property" does not exist.', 22, $this->getSourceContext()); })()));
            echo "\">";
            // line 23
            echo $this->env->getExtension('Sami\Renderer\TwigExtension')->abbrClass(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new Twig_Error_Runtime('Variable "property" does not exist.', 23, $this->getSourceContext()); })()), "class", array()));
            if ( !((array_key_exists("classonly", $context)) ? (_twig_default_filter((isset($context["classonly"]) || array_key_exists("classonly", $context) ? $context["classonly"] : (function () { throw new Twig_Error_Runtime('Variable "classonly" does not exist.', 23, $this->getSourceContext()); })()), true)) : (true))) {
                echo "#";
                echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new Twig_Error_Runtime('Variable "property" does not exist.', 23, $this->getSourceContext()); })()), "name", array());
            }
            // line 24
            echo "</a>";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 27
    public function macro_hint_link($__hints__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "hints" => $__hints__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 28
            $context["__internal_8b18bc2b7f6dbfb7a37b969ed6a89058f17b5302746f73a6775a1c70b753ce14"] = $this;
            // line 30
            if ((isset($context["hints"]) || array_key_exists("hints", $context) ? $context["hints"] : (function () { throw new Twig_Error_Runtime('Variable "hints" does not exist.', 30, $this->getSourceContext()); })())) {
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["hints"]) || array_key_exists("hints", $context) ? $context["hints"] : (function () { throw new Twig_Error_Runtime('Variable "hints" does not exist.', 31, $this->getSourceContext()); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["hint"]) {
                    // line 32
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["hint"], "class", array())) {
                        // line 33
                        echo $context["__internal_8b18bc2b7f6dbfb7a37b969ed6a89058f17b5302746f73a6775a1c70b753ce14"]->macro_class_link(twig_get_attribute($this->env, $this->getSourceContext(), $context["hint"], "name", array()));
                    } elseif (twig_get_attribute($this->env, $this->getSourceContext(),                     // line 34
$context["hint"], "name", array())) {
                        // line 35
                        echo $this->env->getExtension('Sami\Renderer\TwigExtension')->abbrClass(twig_get_attribute($this->env, $this->getSourceContext(), $context["hint"], "name", array()));
                    }
                    // line 37
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["hint"], "array", array())) {
                        echo "[]";
                    }
                    // line 38
                    if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                        echo "|";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hint'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 43
    public function macro_source_link($__project__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "project" => $__project__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 44
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 44, $this->getSourceContext()); })()), "sourcepath", array())) {
                // line 45
                echo "        (<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 45, $this->getSourceContext()); })()), "sourcepath", array()), "html", null, true);
                echo "\">View source</a>)";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 49
    public function macro_method_source_link($__method__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "method" => $__method__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 50
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 50, $this->getSourceContext()); })()), "sourcepath", array())) {
                // line 51
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 51, $this->getSourceContext()); })()), "sourcepath", array()), "html", null, true);
                echo "\">line ";
                echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 51, $this->getSourceContext()); })()), "line", array());
                echo "</a>";
            } else {
                // line 53
                echo "        line ";
                echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 53, $this->getSourceContext()); })()), "line", array());
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 57
    public function macro_abbr_class($__class__ = null, $__absolute__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "class" => $__class__,
            "absolute" => $__absolute__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 58
            echo "<abbr title=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 58, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((array_key_exists("absolute", $context)) ? (_twig_default_filter((isset($context["absolute"]) || array_key_exists("absolute", $context) ? $context["absolute"] : (function () { throw new Twig_Error_Runtime('Variable "absolute" does not exist.', 58, $this->getSourceContext()); })()), false)) : (false))) ? ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 58, $this->getSourceContext()); })())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 58, $this->getSourceContext()); })()), "shortname", array()))), "html", null, true);
            echo "</abbr>";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 61
    public function macro_method_parameters_signature($__method__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "method" => $__method__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 62
            $context["__internal_ac199f98caba4a548e072d92fa39c8bc217e3542aa9908b90341d81d57f16079"] = $this->loadTemplate("macros.twig", "macros.twig", 62);
            // line 63
            echo "(";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 64, $this->getSourceContext()); })()), "parameters", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["parameter"]) {
                // line 65
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["parameter"], "hashint", array())) {
                    echo $context["__internal_ac199f98caba4a548e072d92fa39c8bc217e3542aa9908b90341d81d57f16079"]->macro_hint_link(twig_get_attribute($this->env, $this->getSourceContext(), $context["parameter"], "hint", array()));
                    echo " ";
                }
                // line 66
                echo "\$";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["parameter"], "name", array());
                // line 67
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["parameter"], "default", array())) {
                    echo " = ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["parameter"], "default", array()), "html", null, true);
                }
                // line 68
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo ")";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 73
    public function macro_render_classes($__classes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "classes" => $__classes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 74
            $context["__internal_459e61031b8eea89b40718a17788801593eaf42b76b0b112b18293a9894c6e74"] = $this;
            // line 75
            echo "
    <div class=\"container-fluid underlined\">
        ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 77, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                // line 78
                echo "            <div class=\"row\">
                <div class=\"col-md-6\">
                    ";
                // line 80
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["class"], "isInterface", array())) {
                    // line 81
                    echo "                        <em>";
                    echo $context["__internal_459e61031b8eea89b40718a17788801593eaf42b76b0b112b18293a9894c6e74"]->macro_class_link($context["class"], true);
                    echo "</em>
                    ";
                } else {
                    // line 83
                    echo "                        ";
                    echo $context["__internal_459e61031b8eea89b40718a17788801593eaf42b76b0b112b18293a9894c6e74"]->macro_class_link($context["class"], true);
                    echo "
                    ";
                }
                // line 85
                echo "                    ";
                echo $context["__internal_459e61031b8eea89b40718a17788801593eaf42b76b0b112b18293a9894c6e74"]->macro_deprecated($context["class"]);
                echo "
                </div>
                <div class=\"col-md-6\">
                    ";
                // line 88
                echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), $context["class"], "shortdesc", array()), $context["class"]);
                echo "
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "    </div>";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 95
    public function macro_breadcrumbs($__namespace__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "namespace" => $__namespace__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 96
            echo "    ";
            $context["current_ns"] = "";
            // line 97
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, (isset($context["namespace"]) || array_key_exists("namespace", $context) ? $context["namespace"] : (function () { throw new Twig_Error_Runtime('Variable "namespace" does not exist.', 97, $this->getSourceContext()); })()), "\\"));
            foreach ($context['_seq'] as $context["_key"] => $context["ns"]) {
                // line 98
                echo "        ";
                if ((isset($context["current_ns"]) || array_key_exists("current_ns", $context) ? $context["current_ns"] : (function () { throw new Twig_Error_Runtime('Variable "current_ns" does not exist.', 98, $this->getSourceContext()); })())) {
                    // line 99
                    echo "            ";
                    $context["current_ns"] = (((isset($context["current_ns"]) || array_key_exists("current_ns", $context) ? $context["current_ns"] : (function () { throw new Twig_Error_Runtime('Variable "current_ns" does not exist.', 99, $this->getSourceContext()); })()) . "\\") . $context["ns"]);
                    // line 100
                    echo "        ";
                } else {
                    // line 101
                    echo "            ";
                    $context["current_ns"] = $context["ns"];
                    // line 102
                    echo "        ";
                }
                // line 103
                echo "        <li><a href=\"";
                echo $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForNamespace($context, (isset($context["current_ns"]) || array_key_exists("current_ns", $context) ? $context["current_ns"] : (function () { throw new Twig_Error_Runtime('Variable "current_ns" does not exist.', 103, $this->getSourceContext()); })()));
                echo "\">";
                echo $context["ns"];
                echo "</a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ns'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 107
    public function macro_deprecated($__reflection__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "reflection" => $__reflection__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 108
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reflection"]) || array_key_exists("reflection", $context) ? $context["reflection"] : (function () { throw new Twig_Error_Runtime('Variable "reflection" does not exist.', 108, $this->getSourceContext()); })()), "deprecated", array())) {
                echo "<small><sup><span class=\"label label-danger\">deprecated</span></sup></small>";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 111
    public function macro_deprecations($__reflection__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "reflection" => $__reflection__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 112
            echo "    ";
            $context["__internal_8dac4c74790e318add81844eeaac8e64ce699e985d24b66a4cb7a98fb33d363e"] = $this;
            // line 113
            echo "
    ";
            // line 114
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reflection"]) || array_key_exists("reflection", $context) ? $context["reflection"] : (function () { throw new Twig_Error_Runtime('Variable "reflection" does not exist.', 114, $this->getSourceContext()); })()), "deprecated", array())) {
                // line 115
                echo "        <p>
            ";
                // line 116
                echo $context["__internal_8dac4c74790e318add81844eeaac8e64ce699e985d24b66a4cb7a98fb33d363e"]->macro_deprecated((isset($context["reflection"]) || array_key_exists("reflection", $context) ? $context["reflection"] : (function () { throw new Twig_Error_Runtime('Variable "reflection" does not exist.', 116, $this->getSourceContext()); })()));
                echo "
            ";
                // line 117
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reflection"]) || array_key_exists("reflection", $context) ? $context["reflection"] : (function () { throw new Twig_Error_Runtime('Variable "reflection" does not exist.', 117, $this->getSourceContext()); })()), "deprecated", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 118
                    echo "                <tr>
                    <td>";
                    // line 119
                    echo twig_get_attribute($this->env, $this->getSourceContext(), $context["tag"], 0, array(), "array");
                    echo "</td>
                    <td>";
                    // line 120
                    echo twig_join_filter(twig_slice($this->env, $context["tag"], 1, null), " ");
                    echo "</td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                echo "        </p>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 127
    public function macro_todo($__reflection__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "reflection" => $__reflection__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 128
            echo "        ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reflection"]) || array_key_exists("reflection", $context) ? $context["reflection"] : (function () { throw new Twig_Error_Runtime('Variable "reflection" does not exist.', 128, $this->getSourceContext()); })()), "todo", array())) {
                echo "<small><sup><span class=\"label label-info\">todo</span></sup></small>";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 131
    public function macro_todos($__reflection__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "reflection" => $__reflection__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 132
            echo "        ";
            $context["__internal_d38e02c8a60fbfb3f5ec97bbdb3f58fb48c0cc75d3c186c91bfdf12d2a59cffb"] = $this;
            // line 133
            echo "
        ";
            // line 134
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reflection"]) || array_key_exists("reflection", $context) ? $context["reflection"] : (function () { throw new Twig_Error_Runtime('Variable "reflection" does not exist.', 134, $this->getSourceContext()); })()), "todo", array())) {
                // line 135
                echo "            <p>
                ";
                // line 136
                echo $context["__internal_d38e02c8a60fbfb3f5ec97bbdb3f58fb48c0cc75d3c186c91bfdf12d2a59cffb"]->macro_todo((isset($context["reflection"]) || array_key_exists("reflection", $context) ? $context["reflection"] : (function () { throw new Twig_Error_Runtime('Variable "reflection" does not exist.', 136, $this->getSourceContext()); })()));
                echo "
                ";
                // line 137
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reflection"]) || array_key_exists("reflection", $context) ? $context["reflection"] : (function () { throw new Twig_Error_Runtime('Variable "reflection" does not exist.', 137, $this->getSourceContext()); })()), "todo", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 138
                    echo "                    <tr>
                        <td>";
                    // line 139
                    echo twig_get_attribute($this->env, $this->getSourceContext(), $context["tag"], 0, array(), "array");
                    echo "</td>
                        <td>";
                    // line 140
                    echo twig_join_filter(twig_slice($this->env, $context["tag"], 1, null), " ");
                    echo "</td>
                        </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                echo "            </p>
        ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  691 => 143,  682 => 140,  678 => 139,  675 => 138,  671 => 137,  667 => 136,  664 => 135,  662 => 134,  659 => 133,  656 => 132,  644 => 131,  632 => 128,  620 => 127,  609 => 123,  600 => 120,  596 => 119,  593 => 118,  589 => 117,  585 => 116,  582 => 115,  580 => 114,  577 => 113,  574 => 112,  562 => 111,  550 => 108,  538 => 107,  520 => 103,  517 => 102,  514 => 101,  511 => 100,  508 => 99,  505 => 98,  500 => 97,  497 => 96,  485 => 95,  476 => 92,  466 => 88,  459 => 85,  453 => 83,  447 => 81,  445 => 80,  441 => 78,  437 => 77,  433 => 75,  431 => 74,  419 => 73,  410 => 70,  394 => 68,  389 => 67,  386 => 66,  381 => 65,  364 => 64,  362 => 63,  360 => 62,  348 => 61,  335 => 58,  322 => 57,  311 => 53,  304 => 51,  302 => 50,  290 => 49,  278 => 45,  276 => 44,  263 => 43,  239 => 38,  235 => 37,  232 => 35,  230 => 34,  228 => 33,  226 => 32,  209 => 31,  207 => 30,  205 => 28,  193 => 27,  184 => 24,  178 => 23,  174 => 22,  160 => 21,  151 => 18,  145 => 17,  141 => 16,  127 => 15,  116 => 12,  114 => 11,  109 => 9,  107 => 8,  103 => 7,  101 => 6,  88 => 5,  75 => 2,  63 => 1,  58 => 130,  55 => 126,  52 => 110,  49 => 106,  46 => 94,  43 => 72,  40 => 60,  37 => 56,  34 => 48,  31 => 42,  28 => 26,  25 => 20,  22 => 14,  19 => 4,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro namespace_link(namespace) -%}
    <a href=\"{{ namespace_path(namespace) }}\">{{ namespace|raw }}</a>
{%- endmacro %}

{% macro class_link(class, absolute) -%}
    {%- if class.projectclass -%}
        <a href=\"{{ class_path(class) }}\">
    {%- elseif class.phpclass -%}
        <a target=\"_blank\" href=\"http://php.net/{{ class|raw }}\">
    {%- endif %}
    {{- abbr_class(class, absolute|default(false)) }}
    {%- if class.projectclass or class.phpclass %}</a>{% endif %}
{%- endmacro %}

{% macro method_link(method, absolute, classonly) -%}
    <a href=\"{{ method_path(method) }}\">
        {{- abbr_class(method.class) }}{% if not classonly|default(false) %}::{{ method.name|raw }}{% endif -%}
    </a>
{%- endmacro %}

{% macro property_link(property, absolute, classonly) -%}
    <a href=\"{{ property_path(property) }}\">
        {{- abbr_class(property.class) }}{% if not classonly|default(true) %}#{{ property.name|raw }}{% endif -%}
    </a>
{%- endmacro %}

{% macro hint_link(hints) -%}
    {%- from _self import class_link %}

    {%- if hints %}
        {%- for hint in hints %}
            {%- if hint.class %}
                {{- class_link(hint.name) }}
            {%- elseif hint.name %}
                {{- abbr_class(hint.name) }}
            {%- endif %}
            {%- if hint.array %}[]{% endif %}
            {%- if not loop.last %}|{% endif %}
        {%- endfor %}
    {%- endif %}
{%- endmacro %}

{% macro source_link(project, class) -%}
    {% if class.sourcepath %}
        (<a href=\"{{ class.sourcepath }}\">View source</a>)
    {%- endif %}
{%- endmacro %}

{% macro method_source_link(method) -%}
    {% if method.sourcepath %}
        <a href=\"{{ method.sourcepath }}\">line {{ method.line|raw }}</a>
    {%- else %}
        line {{ method.line|raw }}
    {%- endif %}
{%- endmacro %}

{% macro abbr_class(class, absolute) -%}
    <abbr title=\"{{ class }}\">{{ absolute|default(false) ? class : class.shortname }}</abbr>
{%- endmacro %}

{% macro method_parameters_signature(method) -%}
    {%- from \"macros.twig\" import hint_link -%}
    (
        {%- for parameter in method.parameters %}
            {%- if parameter.hashint %}{{ hint_link(parameter.hint) }} {% endif -%}
            \${{ parameter.name|raw }}
            {%- if parameter.default %} = {{ parameter.default }}{% endif %}
            {%- if not loop.last %}, {% endif %}
        {%- endfor -%}
    )
{%- endmacro %}

{% macro render_classes(classes) -%}
    {% from _self import class_link, deprecated %}

    <div class=\"container-fluid underlined\">
        {% for class in classes %}
            <div class=\"row\">
                <div class=\"col-md-6\">
                    {% if class.isInterface %}
                        <em>{{ class_link(class, true) }}</em>
                    {% else %}
                        {{ class_link(class, true) }}
                    {% endif %}
                    {{ deprecated(class) }}
                </div>
                <div class=\"col-md-6\">
                    {{ class.shortdesc|desc(class) }}
                </div>
            </div>
        {% endfor %}
    </div>
{%- endmacro %}

{% macro breadcrumbs(namespace) %}
    {% set current_ns = '' %}
    {% for ns in namespace|split('\\\\') %}
        {% if current_ns %}
            {% set current_ns = current_ns ~ '\\\\' ~ ns %}
        {% else %}
            {% set current_ns = ns %}
        {% endif %}
        <li><a href=\"{{ namespace_path(current_ns) }}\">{{ ns|raw }}</a></li>
    {% endfor %}
{% endmacro %}

{% macro deprecated(reflection) %}
    {% if reflection.deprecated %}<small><sup><span class=\"label label-danger\">deprecated</span></sup></small>{% endif %}
{% endmacro %}

{% macro deprecations(reflection) %}
    {% from _self import deprecated %}

    {% if reflection.deprecated %}
        <p>
            {{ deprecated(reflection )}}
            {% for tag in reflection.deprecated %}
                <tr>
                    <td>{{ tag[0]|raw }}</td>
                    <td>{{ tag[1:]|join(' ')|raw }}</td>
                </tr>
            {% endfor %}
        </p>
    {% endif %}
{% endmacro %}

{% macro todo(reflection) %}
        {% if reflection.todo %}<small><sup><span class=\"label label-info\">todo</span></sup></small>{% endif %}
{% endmacro %}

{% macro todos(reflection) %}
        {% from _self import todo %}

        {% if reflection.todo %}
            <p>
                {{ todo(reflection )}}
                {% for tag in reflection.todo %}
                    <tr>
                        <td>{{ tag[0]|raw }}</td>
                        <td>{{ tag[1:]|join(' ')|raw }}</td>
                        </tr>
                {% endfor %}
            </p>
        {% endif %}
{% endmacro %}
", "macros.twig", "/Users/Edujugon/Code/Documentation/Documentator/vendor/sami/sami/Sami/Resources/themes/default/macros.twig");
    }
}
