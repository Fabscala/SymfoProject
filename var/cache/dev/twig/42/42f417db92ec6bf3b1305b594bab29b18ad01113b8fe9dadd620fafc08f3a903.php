<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c04aae403a0f20b772cf8876df3d12a345a6f2d0fc4211b26c942dd4104714b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_3c421c8395ba3136d3ea49797646673bc6a8d1e89cb6f65349248d0d6803ca38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c421c8395ba3136d3ea49797646673bc6a8d1e89cb6f65349248d0d6803ca38->enter($__internal_3c421c8395ba3136d3ea49797646673bc6a8d1e89cb6f65349248d0d6803ca38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_58c0b072d9a4c21d8f5d9e7b047fdd299befe4a3e4ce6877a56ffe4e1c28efa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c0b072d9a4c21d8f5d9e7b047fdd299befe4a3e4ce6877a56ffe4e1c28efa9->enter($__internal_58c0b072d9a4c21d8f5d9e7b047fdd299befe4a3e4ce6877a56ffe4e1c28efa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c421c8395ba3136d3ea49797646673bc6a8d1e89cb6f65349248d0d6803ca38->leave($__internal_3c421c8395ba3136d3ea49797646673bc6a8d1e89cb6f65349248d0d6803ca38_prof);

        
        $__internal_58c0b072d9a4c21d8f5d9e7b047fdd299befe4a3e4ce6877a56ffe4e1c28efa9->leave($__internal_58c0b072d9a4c21d8f5d9e7b047fdd299befe4a3e4ce6877a56ffe4e1c28efa9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8ebe79266b60084ba0111c0ba903c3ca98a0938ac46fe2a0fbb202e15a3d2b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ebe79266b60084ba0111c0ba903c3ca98a0938ac46fe2a0fbb202e15a3d2b9c->enter($__internal_8ebe79266b60084ba0111c0ba903c3ca98a0938ac46fe2a0fbb202e15a3d2b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_78d25ad38a57a1290576243f1c9884b210542283b9c301dc27e6498754a5dd55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d25ad38a57a1290576243f1c9884b210542283b9c301dc27e6498754a5dd55->enter($__internal_78d25ad38a57a1290576243f1c9884b210542283b9c301dc27e6498754a5dd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_78d25ad38a57a1290576243f1c9884b210542283b9c301dc27e6498754a5dd55->leave($__internal_78d25ad38a57a1290576243f1c9884b210542283b9c301dc27e6498754a5dd55_prof);

        
        $__internal_8ebe79266b60084ba0111c0ba903c3ca98a0938ac46fe2a0fbb202e15a3d2b9c->leave($__internal_8ebe79266b60084ba0111c0ba903c3ca98a0938ac46fe2a0fbb202e15a3d2b9c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3acec65370b84857635fac01915bbac1e1e0065e4dc5a8b59d8f162643ec945f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3acec65370b84857635fac01915bbac1e1e0065e4dc5a8b59d8f162643ec945f->enter($__internal_3acec65370b84857635fac01915bbac1e1e0065e4dc5a8b59d8f162643ec945f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_626cbdf665d7a91390c9b118156fd40c015e4c63ddb5b97be8f549c917c1f50a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626cbdf665d7a91390c9b118156fd40c015e4c63ddb5b97be8f549c917c1f50a->enter($__internal_626cbdf665d7a91390c9b118156fd40c015e4c63ddb5b97be8f549c917c1f50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_626cbdf665d7a91390c9b118156fd40c015e4c63ddb5b97be8f549c917c1f50a->leave($__internal_626cbdf665d7a91390c9b118156fd40c015e4c63ddb5b97be8f549c917c1f50a_prof);

        
        $__internal_3acec65370b84857635fac01915bbac1e1e0065e4dc5a8b59d8f162643ec945f->leave($__internal_3acec65370b84857635fac01915bbac1e1e0065e4dc5a8b59d8f162643ec945f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_15359d1a08806309684977c4e80c73ebd6238da0cabb765f074a88762eec5526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15359d1a08806309684977c4e80c73ebd6238da0cabb765f074a88762eec5526->enter($__internal_15359d1a08806309684977c4e80c73ebd6238da0cabb765f074a88762eec5526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1fbfb74f5f83e5d8dff0ade437b088034dceaddb61d358d3fc85137be08d807e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fbfb74f5f83e5d8dff0ade437b088034dceaddb61d358d3fc85137be08d807e->enter($__internal_1fbfb74f5f83e5d8dff0ade437b088034dceaddb61d358d3fc85137be08d807e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1fbfb74f5f83e5d8dff0ade437b088034dceaddb61d358d3fc85137be08d807e->leave($__internal_1fbfb74f5f83e5d8dff0ade437b088034dceaddb61d358d3fc85137be08d807e_prof);

        
        $__internal_15359d1a08806309684977c4e80c73ebd6238da0cabb765f074a88762eec5526->leave($__internal_15359d1a08806309684977c4e80c73ebd6238da0cabb765f074a88762eec5526_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/SymfoProjectGit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
