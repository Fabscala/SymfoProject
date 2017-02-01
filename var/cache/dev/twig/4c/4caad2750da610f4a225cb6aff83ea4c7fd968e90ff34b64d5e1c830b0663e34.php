<?php

/* SymfoProjectGitAdminBundle:Genre:form.html.twig */
class __TwigTemplate_324a3bf904ba8573040168f308f98c33fd1693c328df7bb2617f8817c07c00df extends Twig_Template
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
        $__internal_937b6f39d7961423277e2bd58482d326533191eb7f12d08f1b2a80a96cab4e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_937b6f39d7961423277e2bd58482d326533191eb7f12d08f1b2a80a96cab4e62->enter($__internal_937b6f39d7961423277e2bd58482d326533191eb7f12d08f1b2a80a96cab4e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitAdminBundle:Genre:form.html.twig"));

        $__internal_aa8901521b48b5034cf7a214531b2baf425059f8cf145ee489af9b4acca7b62b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8901521b48b5034cf7a214531b2baf425059f8cf145ee489af9b4acca7b62b->enter($__internal_aa8901521b48b5034cf7a214531b2baf425059f8cf145ee489af9b4acca7b62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitAdminBundle:Genre:form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_937b6f39d7961423277e2bd58482d326533191eb7f12d08f1b2a80a96cab4e62->leave($__internal_937b6f39d7961423277e2bd58482d326533191eb7f12d08f1b2a80a96cab4e62_prof);

        
        $__internal_aa8901521b48b5034cf7a214531b2baf425059f8cf145ee489af9b4acca7b62b->leave($__internal_aa8901521b48b5034cf7a214531b2baf425059f8cf145ee489af9b4acca7b62b_prof);

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
        return array (  33 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}", "SymfoProjectGitAdminBundle:Genre:form.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/AdminBundle/Resources/views/Genre/form.html.twig");
    }
}
