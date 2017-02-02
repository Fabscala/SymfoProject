<?php

/* SymfoProjectGitAdminBundle:Film:form.html.twig */
class __TwigTemplate_14844b3bdb9c8ef66e5dfae18583d082409d41d926346fe9bcf84e9405342c91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SymfoProjectGitCinemaBundle:Realisateur:layout.html.twig", "SymfoProjectGitAdminBundle:Film:form.html.twig", 1);
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
        $__internal_2920d8b22c3941e3d92d0805f3e60fe210520b51da1ffd9abce16c4d64a5fdda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2920d8b22c3941e3d92d0805f3e60fe210520b51da1ffd9abce16c4d64a5fdda->enter($__internal_2920d8b22c3941e3d92d0805f3e60fe210520b51da1ffd9abce16c4d64a5fdda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitAdminBundle:Film:form.html.twig"));

        $__internal_938d7ca34281e030d1d883ebabed89fa3c83db81ed564855f164dbc6e3c99c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938d7ca34281e030d1d883ebabed89fa3c83db81ed564855f164dbc6e3c99c0c->enter($__internal_938d7ca34281e030d1d883ebabed89fa3c83db81ed564855f164dbc6e3c99c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitAdminBundle:Film:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2920d8b22c3941e3d92d0805f3e60fe210520b51da1ffd9abce16c4d64a5fdda->leave($__internal_2920d8b22c3941e3d92d0805f3e60fe210520b51da1ffd9abce16c4d64a5fdda_prof);

        
        $__internal_938d7ca34281e030d1d883ebabed89fa3c83db81ed564855f164dbc6e3c99c0c->leave($__internal_938d7ca34281e030d1d883ebabed89fa3c83db81ed564855f164dbc6e3c99c0c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_859cf72618ef84bf068e2bc95dc405a57ea182b20d940e5807404e8c4394d5f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_859cf72618ef84bf068e2bc95dc405a57ea182b20d940e5807404e8c4394d5f0->enter($__internal_859cf72618ef84bf068e2bc95dc405a57ea182b20d940e5807404e8c4394d5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a5de92035a0326d161f4f6f539fa33f44ee617b1c6924231c93d0e0ca804246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a5de92035a0326d161f4f6f539fa33f44ee617b1c6924231c93d0e0ca804246->enter($__internal_4a5de92035a0326d161f4f6f539fa33f44ee617b1c6924231c93d0e0ca804246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4a5de92035a0326d161f4f6f539fa33f44ee617b1c6924231c93d0e0ca804246->leave($__internal_4a5de92035a0326d161f4f6f539fa33f44ee617b1c6924231c93d0e0ca804246_prof);

        
        $__internal_859cf72618ef84bf068e2bc95dc405a57ea182b20d940e5807404e8c4394d5f0->leave($__internal_859cf72618ef84bf068e2bc95dc405a57ea182b20d940e5807404e8c4394d5f0_prof);

    }

    public function getTemplateName()
    {
        return "SymfoProjectGitAdminBundle:Film:form.html.twig";
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
        {% endblock %}", "SymfoProjectGitAdminBundle:Film:form.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/AdminBundle/Resources/views/Film/form.html.twig");
    }
}
