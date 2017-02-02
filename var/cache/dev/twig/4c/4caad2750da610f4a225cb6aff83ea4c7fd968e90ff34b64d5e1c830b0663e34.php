<?php

/* SymfoProjectGitAdminBundle:Genre:form.html.twig */
class __TwigTemplate_324a3bf904ba8573040168f308f98c33fd1693c328df7bb2617f8817c07c00df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SymfoProjectGitCinemaBundle:Realisateur:layout.html.twig", "SymfoProjectGitAdminBundle:Genre:form.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SymfoProjectGitCinemaBundle:Realisateur:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a76b61a19383f820d3922aa22da9ea9d5915b68e279caed1704c7a6d074ac49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a76b61a19383f820d3922aa22da9ea9d5915b68e279caed1704c7a6d074ac49->enter($__internal_8a76b61a19383f820d3922aa22da9ea9d5915b68e279caed1704c7a6d074ac49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitAdminBundle:Genre:form.html.twig"));

        $__internal_5d690508c0a7ee1d5278921c78f804a112d1f5ba4ba218ee1aa110d7ed36f9b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d690508c0a7ee1d5278921c78f804a112d1f5ba4ba218ee1aa110d7ed36f9b7->enter($__internal_5d690508c0a7ee1d5278921c78f804a112d1f5ba4ba218ee1aa110d7ed36f9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitAdminBundle:Genre:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a76b61a19383f820d3922aa22da9ea9d5915b68e279caed1704c7a6d074ac49->leave($__internal_8a76b61a19383f820d3922aa22da9ea9d5915b68e279caed1704c7a6d074ac49_prof);

        
        $__internal_5d690508c0a7ee1d5278921c78f804a112d1f5ba4ba218ee1aa110d7ed36f9b7->leave($__internal_5d690508c0a7ee1d5278921c78f804a112d1f5ba4ba218ee1aa110d7ed36f9b7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e53ee89cb60908d381146d621df9f3bf2e3fdb2965af1c75a0833134b175cacc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e53ee89cb60908d381146d621df9f3bf2e3fdb2965af1c75a0833134b175cacc->enter($__internal_e53ee89cb60908d381146d621df9f3bf2e3fdb2965af1c75a0833134b175cacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58271e3657380e0647889716e15085f5cbf4abc35a1b07b82071e445addc08fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58271e3657380e0647889716e15085f5cbf4abc35a1b07b82071e445addc08fb->enter($__internal_58271e3657380e0647889716e15085f5cbf4abc35a1b07b82071e445addc08fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"well\" style=\"margin-left: 20%;margin-right: 20%;\">
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>
        ";
        
        $__internal_58271e3657380e0647889716e15085f5cbf4abc35a1b07b82071e445addc08fb->leave($__internal_58271e3657380e0647889716e15085f5cbf4abc35a1b07b82071e445addc08fb_prof);

        
        $__internal_e53ee89cb60908d381146d621df9f3bf2e3fdb2965af1c75a0833134b175cacc->leave($__internal_e53ee89cb60908d381146d621df9f3bf2e3fdb2965af1c75a0833134b175cacc_prof);

    }

    public function getTemplateName()
    {
        return "SymfoProjectGitAdminBundle:Genre:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SymfoProjectGitCinemaBundle:Realisateur:layout.html.twig' %}
        {% block body %}
<div class=\"well\" style=\"margin-left: 20%;margin-right: 20%;\">
{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}

</div>
        {% endblock %}", "SymfoProjectGitAdminBundle:Genre:form.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/AdminBundle/Resources/views/Genre/form.html.twig");
    }
}
