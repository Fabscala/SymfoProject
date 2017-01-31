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
        $__internal_588a4ca0e94cd0635da2a854d50d7ea7df5e2d6af7e233e64e128198a2e262ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_588a4ca0e94cd0635da2a854d50d7ea7df5e2d6af7e233e64e128198a2e262ed->enter($__internal_588a4ca0e94cd0635da2a854d50d7ea7df5e2d6af7e233e64e128198a2e262ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c8ed2495a0355831e8b9b71596847c8e8407dd12c81665b7be2ed845a6d443e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ed2495a0355831e8b9b71596847c8e8407dd12c81665b7be2ed845a6d443e1->enter($__internal_c8ed2495a0355831e8b9b71596847c8e8407dd12c81665b7be2ed845a6d443e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_588a4ca0e94cd0635da2a854d50d7ea7df5e2d6af7e233e64e128198a2e262ed->leave($__internal_588a4ca0e94cd0635da2a854d50d7ea7df5e2d6af7e233e64e128198a2e262ed_prof);

        
        $__internal_c8ed2495a0355831e8b9b71596847c8e8407dd12c81665b7be2ed845a6d443e1->leave($__internal_c8ed2495a0355831e8b9b71596847c8e8407dd12c81665b7be2ed845a6d443e1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_265189293dd86ec96e5f56c0adf7e502aa39c8218000bfd270d421106e8f489a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265189293dd86ec96e5f56c0adf7e502aa39c8218000bfd270d421106e8f489a->enter($__internal_265189293dd86ec96e5f56c0adf7e502aa39c8218000bfd270d421106e8f489a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_42eceabe1538d561dbf3d872b5885965fb2d3a8149d44a87ec9ded88b95f15b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42eceabe1538d561dbf3d872b5885965fb2d3a8149d44a87ec9ded88b95f15b2->enter($__internal_42eceabe1538d561dbf3d872b5885965fb2d3a8149d44a87ec9ded88b95f15b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_42eceabe1538d561dbf3d872b5885965fb2d3a8149d44a87ec9ded88b95f15b2->leave($__internal_42eceabe1538d561dbf3d872b5885965fb2d3a8149d44a87ec9ded88b95f15b2_prof);

        
        $__internal_265189293dd86ec96e5f56c0adf7e502aa39c8218000bfd270d421106e8f489a->leave($__internal_265189293dd86ec96e5f56c0adf7e502aa39c8218000bfd270d421106e8f489a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_378df6ae3d044239e4926906bccfc50db80c00fe058e46a33d1b32334a301144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_378df6ae3d044239e4926906bccfc50db80c00fe058e46a33d1b32334a301144->enter($__internal_378df6ae3d044239e4926906bccfc50db80c00fe058e46a33d1b32334a301144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_65b02548af13d7528c63d57f576ee3025351fdf0ad5123ed0ebce82d8c2d3ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65b02548af13d7528c63d57f576ee3025351fdf0ad5123ed0ebce82d8c2d3ac2->enter($__internal_65b02548af13d7528c63d57f576ee3025351fdf0ad5123ed0ebce82d8c2d3ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_65b02548af13d7528c63d57f576ee3025351fdf0ad5123ed0ebce82d8c2d3ac2->leave($__internal_65b02548af13d7528c63d57f576ee3025351fdf0ad5123ed0ebce82d8c2d3ac2_prof);

        
        $__internal_378df6ae3d044239e4926906bccfc50db80c00fe058e46a33d1b32334a301144->leave($__internal_378df6ae3d044239e4926906bccfc50db80c00fe058e46a33d1b32334a301144_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8dc419204324640114a9de9df046291652e414fa3f92463b5c17141c9f37d154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dc419204324640114a9de9df046291652e414fa3f92463b5c17141c9f37d154->enter($__internal_8dc419204324640114a9de9df046291652e414fa3f92463b5c17141c9f37d154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_011d8c59c77f46590b9667f935c7c87f40863bb97f2952384841454680d91c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_011d8c59c77f46590b9667f935c7c87f40863bb97f2952384841454680d91c14->enter($__internal_011d8c59c77f46590b9667f935c7c87f40863bb97f2952384841454680d91c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_011d8c59c77f46590b9667f935c7c87f40863bb97f2952384841454680d91c14->leave($__internal_011d8c59c77f46590b9667f935c7c87f40863bb97f2952384841454680d91c14_prof);

        
        $__internal_8dc419204324640114a9de9df046291652e414fa3f92463b5c17141c9f37d154->leave($__internal_8dc419204324640114a9de9df046291652e414fa3f92463b5c17141c9f37d154_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/SymfoProject/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
