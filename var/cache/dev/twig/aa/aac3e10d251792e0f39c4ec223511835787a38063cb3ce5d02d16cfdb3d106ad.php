<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_16f81aababb64102ebf223bc3f88038d70b8a167117a46a86fee760c718016dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14f2131fdc46ae09a85ec0fad6881bb9badabc509ef79af28100cf8a695302ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14f2131fdc46ae09a85ec0fad6881bb9badabc509ef79af28100cf8a695302ea->enter($__internal_14f2131fdc46ae09a85ec0fad6881bb9badabc509ef79af28100cf8a695302ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1867c670edb9c044a55779a5ce4bca3cd5ddc835fb6de53f4590f0fd8b4d8220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1867c670edb9c044a55779a5ce4bca3cd5ddc835fb6de53f4590f0fd8b4d8220->enter($__internal_1867c670edb9c044a55779a5ce4bca3cd5ddc835fb6de53f4590f0fd8b4d8220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14f2131fdc46ae09a85ec0fad6881bb9badabc509ef79af28100cf8a695302ea->leave($__internal_14f2131fdc46ae09a85ec0fad6881bb9badabc509ef79af28100cf8a695302ea_prof);

        
        $__internal_1867c670edb9c044a55779a5ce4bca3cd5ddc835fb6de53f4590f0fd8b4d8220->leave($__internal_1867c670edb9c044a55779a5ce4bca3cd5ddc835fb6de53f4590f0fd8b4d8220_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a865a5135ea5ee68cddbf196644c30c769e4af54dac65f4d615ea98e2abddb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a865a5135ea5ee68cddbf196644c30c769e4af54dac65f4d615ea98e2abddb1->enter($__internal_0a865a5135ea5ee68cddbf196644c30c769e4af54dac65f4d615ea98e2abddb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_57ab8829c8d8840d9fc69d314369d325b49e01fff1ed8b8830487874a3283622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ab8829c8d8840d9fc69d314369d325b49e01fff1ed8b8830487874a3283622->enter($__internal_57ab8829c8d8840d9fc69d314369d325b49e01fff1ed8b8830487874a3283622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_57ab8829c8d8840d9fc69d314369d325b49e01fff1ed8b8830487874a3283622->leave($__internal_57ab8829c8d8840d9fc69d314369d325b49e01fff1ed8b8830487874a3283622_prof);

        
        $__internal_0a865a5135ea5ee68cddbf196644c30c769e4af54dac65f4d615ea98e2abddb1->leave($__internal_0a865a5135ea5ee68cddbf196644c30c769e4af54dac65f4d615ea98e2abddb1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0ba54a9cc6d25c7893811dd4047c74e50ef3480eef17a8ac0c294f828fdeee9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ba54a9cc6d25c7893811dd4047c74e50ef3480eef17a8ac0c294f828fdeee9c->enter($__internal_0ba54a9cc6d25c7893811dd4047c74e50ef3480eef17a8ac0c294f828fdeee9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4200c13e7d95c9ba2a3fe5d2833114e02b32ae7f863f65ad8b67656f835cbe6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4200c13e7d95c9ba2a3fe5d2833114e02b32ae7f863f65ad8b67656f835cbe6a->enter($__internal_4200c13e7d95c9ba2a3fe5d2833114e02b32ae7f863f65ad8b67656f835cbe6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4200c13e7d95c9ba2a3fe5d2833114e02b32ae7f863f65ad8b67656f835cbe6a->leave($__internal_4200c13e7d95c9ba2a3fe5d2833114e02b32ae7f863f65ad8b67656f835cbe6a_prof);

        
        $__internal_0ba54a9cc6d25c7893811dd4047c74e50ef3480eef17a8ac0c294f828fdeee9c->leave($__internal_0ba54a9cc6d25c7893811dd4047c74e50ef3480eef17a8ac0c294f828fdeee9c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ada1f0fabf262dc2bf086c60bb31f5812fd4f7564e2ef8cc622b931b8a7e930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ada1f0fabf262dc2bf086c60bb31f5812fd4f7564e2ef8cc622b931b8a7e930->enter($__internal_4ada1f0fabf262dc2bf086c60bb31f5812fd4f7564e2ef8cc622b931b8a7e930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5b42a0c91bec5b27e58efc69676e9860de14644a4e1e5c59156f73a7aa5408e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b42a0c91bec5b27e58efc69676e9860de14644a4e1e5c59156f73a7aa5408e8->enter($__internal_5b42a0c91bec5b27e58efc69676e9860de14644a4e1e5c59156f73a7aa5408e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5b42a0c91bec5b27e58efc69676e9860de14644a4e1e5c59156f73a7aa5408e8->leave($__internal_5b42a0c91bec5b27e58efc69676e9860de14644a4e1e5c59156f73a7aa5408e8_prof);

        
        $__internal_4ada1f0fabf262dc2bf086c60bb31f5812fd4f7564e2ef8cc622b931b8a7e930->leave($__internal_4ada1f0fabf262dc2bf086c60bb31f5812fd4f7564e2ef8cc622b931b8a7e930_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/SymfoProjectGit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
