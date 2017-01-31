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
        $__internal_77f22e53d538b833109d4044ef28d17d981ba825917875eb4eaaef98cc064689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f22e53d538b833109d4044ef28d17d981ba825917875eb4eaaef98cc064689->enter($__internal_77f22e53d538b833109d4044ef28d17d981ba825917875eb4eaaef98cc064689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f9c36ea819ad4bd65ede224067c486d0ec623efac8305f4b75f778f5f4681e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c36ea819ad4bd65ede224067c486d0ec623efac8305f4b75f778f5f4681e1d->enter($__internal_f9c36ea819ad4bd65ede224067c486d0ec623efac8305f4b75f778f5f4681e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77f22e53d538b833109d4044ef28d17d981ba825917875eb4eaaef98cc064689->leave($__internal_77f22e53d538b833109d4044ef28d17d981ba825917875eb4eaaef98cc064689_prof);

        
        $__internal_f9c36ea819ad4bd65ede224067c486d0ec623efac8305f4b75f778f5f4681e1d->leave($__internal_f9c36ea819ad4bd65ede224067c486d0ec623efac8305f4b75f778f5f4681e1d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9dfc4dfb20a0e5013d11ba7577bf9c25a7dfdc7f39027c58db8f33f7fcddcc9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dfc4dfb20a0e5013d11ba7577bf9c25a7dfdc7f39027c58db8f33f7fcddcc9e->enter($__internal_9dfc4dfb20a0e5013d11ba7577bf9c25a7dfdc7f39027c58db8f33f7fcddcc9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_58d03e8343216a3fcff6321c429201947e5fdaf82172d30047f0734abbfeb715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d03e8343216a3fcff6321c429201947e5fdaf82172d30047f0734abbfeb715->enter($__internal_58d03e8343216a3fcff6321c429201947e5fdaf82172d30047f0734abbfeb715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_58d03e8343216a3fcff6321c429201947e5fdaf82172d30047f0734abbfeb715->leave($__internal_58d03e8343216a3fcff6321c429201947e5fdaf82172d30047f0734abbfeb715_prof);

        
        $__internal_9dfc4dfb20a0e5013d11ba7577bf9c25a7dfdc7f39027c58db8f33f7fcddcc9e->leave($__internal_9dfc4dfb20a0e5013d11ba7577bf9c25a7dfdc7f39027c58db8f33f7fcddcc9e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_31911cde00b76f96ba881516e5fbac5bae2716e5ad2dba1fa6c2d7ffe7cb740d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31911cde00b76f96ba881516e5fbac5bae2716e5ad2dba1fa6c2d7ffe7cb740d->enter($__internal_31911cde00b76f96ba881516e5fbac5bae2716e5ad2dba1fa6c2d7ffe7cb740d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ab8645ada4f717dc63cd0d2fe27a9588ccd7e919004cdf5826b8f080147c5a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8645ada4f717dc63cd0d2fe27a9588ccd7e919004cdf5826b8f080147c5a8b->enter($__internal_ab8645ada4f717dc63cd0d2fe27a9588ccd7e919004cdf5826b8f080147c5a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ab8645ada4f717dc63cd0d2fe27a9588ccd7e919004cdf5826b8f080147c5a8b->leave($__internal_ab8645ada4f717dc63cd0d2fe27a9588ccd7e919004cdf5826b8f080147c5a8b_prof);

        
        $__internal_31911cde00b76f96ba881516e5fbac5bae2716e5ad2dba1fa6c2d7ffe7cb740d->leave($__internal_31911cde00b76f96ba881516e5fbac5bae2716e5ad2dba1fa6c2d7ffe7cb740d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_31e09607d0dd61cdf4c9792f1f66243720e2c8e2df7ebc1e32fbfc0d5bd0276a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31e09607d0dd61cdf4c9792f1f66243720e2c8e2df7ebc1e32fbfc0d5bd0276a->enter($__internal_31e09607d0dd61cdf4c9792f1f66243720e2c8e2df7ebc1e32fbfc0d5bd0276a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_750b98c2d0fd729e7c308ef6c8c2aa1f37a62c2b53be18c0d596cf40d320a723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750b98c2d0fd729e7c308ef6c8c2aa1f37a62c2b53be18c0d596cf40d320a723->enter($__internal_750b98c2d0fd729e7c308ef6c8c2aa1f37a62c2b53be18c0d596cf40d320a723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_750b98c2d0fd729e7c308ef6c8c2aa1f37a62c2b53be18c0d596cf40d320a723->leave($__internal_750b98c2d0fd729e7c308ef6c8c2aa1f37a62c2b53be18c0d596cf40d320a723_prof);

        
        $__internal_31e09607d0dd61cdf4c9792f1f66243720e2c8e2df7ebc1e32fbfc0d5bd0276a->leave($__internal_31e09607d0dd61cdf4c9792f1f66243720e2c8e2df7ebc1e32fbfc0d5bd0276a_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
