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
        $__internal_e55bbdbcc9e9c77e7a53d11152f8ceeda5fbc33f6cf20adc5950fccb527f892e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e55bbdbcc9e9c77e7a53d11152f8ceeda5fbc33f6cf20adc5950fccb527f892e->enter($__internal_e55bbdbcc9e9c77e7a53d11152f8ceeda5fbc33f6cf20adc5950fccb527f892e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_57f6037fa4fe482cf2dd3d0902bbf8db683d855e1afb335b3512ac63a3feff7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f6037fa4fe482cf2dd3d0902bbf8db683d855e1afb335b3512ac63a3feff7c->enter($__internal_57f6037fa4fe482cf2dd3d0902bbf8db683d855e1afb335b3512ac63a3feff7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e55bbdbcc9e9c77e7a53d11152f8ceeda5fbc33f6cf20adc5950fccb527f892e->leave($__internal_e55bbdbcc9e9c77e7a53d11152f8ceeda5fbc33f6cf20adc5950fccb527f892e_prof);

        
        $__internal_57f6037fa4fe482cf2dd3d0902bbf8db683d855e1afb335b3512ac63a3feff7c->leave($__internal_57f6037fa4fe482cf2dd3d0902bbf8db683d855e1afb335b3512ac63a3feff7c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_45ee85791ad0d155ee679808a0515f597a0663064ef033fb977b4c327b695ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45ee85791ad0d155ee679808a0515f597a0663064ef033fb977b4c327b695ecc->enter($__internal_45ee85791ad0d155ee679808a0515f597a0663064ef033fb977b4c327b695ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_33ff43f0e76cf22cfbe67dcaf7c5d27d7c41b0481352061f8df8da23c2f4c18f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ff43f0e76cf22cfbe67dcaf7c5d27d7c41b0481352061f8df8da23c2f4c18f->enter($__internal_33ff43f0e76cf22cfbe67dcaf7c5d27d7c41b0481352061f8df8da23c2f4c18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_33ff43f0e76cf22cfbe67dcaf7c5d27d7c41b0481352061f8df8da23c2f4c18f->leave($__internal_33ff43f0e76cf22cfbe67dcaf7c5d27d7c41b0481352061f8df8da23c2f4c18f_prof);

        
        $__internal_45ee85791ad0d155ee679808a0515f597a0663064ef033fb977b4c327b695ecc->leave($__internal_45ee85791ad0d155ee679808a0515f597a0663064ef033fb977b4c327b695ecc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e95dfad3664f6935c17f878c751ee2cbd8c502a6800c64ab1a6158880a0dfcdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e95dfad3664f6935c17f878c751ee2cbd8c502a6800c64ab1a6158880a0dfcdf->enter($__internal_e95dfad3664f6935c17f878c751ee2cbd8c502a6800c64ab1a6158880a0dfcdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dfdd71000b24232922673bb2582d20576d4b6cebd6d3eda1abb9cdcff158bcdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfdd71000b24232922673bb2582d20576d4b6cebd6d3eda1abb9cdcff158bcdd->enter($__internal_dfdd71000b24232922673bb2582d20576d4b6cebd6d3eda1abb9cdcff158bcdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_dfdd71000b24232922673bb2582d20576d4b6cebd6d3eda1abb9cdcff158bcdd->leave($__internal_dfdd71000b24232922673bb2582d20576d4b6cebd6d3eda1abb9cdcff158bcdd_prof);

        
        $__internal_e95dfad3664f6935c17f878c751ee2cbd8c502a6800c64ab1a6158880a0dfcdf->leave($__internal_e95dfad3664f6935c17f878c751ee2cbd8c502a6800c64ab1a6158880a0dfcdf_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8162bc9c95178d7b1ab73840c1320f6a0d0d8449ce044d7ee3f2e41049107be8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8162bc9c95178d7b1ab73840c1320f6a0d0d8449ce044d7ee3f2e41049107be8->enter($__internal_8162bc9c95178d7b1ab73840c1320f6a0d0d8449ce044d7ee3f2e41049107be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c9949bb5e819021d190af049af531dce9bdc70787f99f81390f22c2cd0ef3ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9949bb5e819021d190af049af531dce9bdc70787f99f81390f22c2cd0ef3ac1->enter($__internal_c9949bb5e819021d190af049af531dce9bdc70787f99f81390f22c2cd0ef3ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c9949bb5e819021d190af049af531dce9bdc70787f99f81390f22c2cd0ef3ac1->leave($__internal_c9949bb5e819021d190af049af531dce9bdc70787f99f81390f22c2cd0ef3ac1_prof);

        
        $__internal_8162bc9c95178d7b1ab73840c1320f6a0d0d8449ce044d7ee3f2e41049107be8->leave($__internal_8162bc9c95178d7b1ab73840c1320f6a0d0d8449ce044d7ee3f2e41049107be8_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/SymfoProject/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
