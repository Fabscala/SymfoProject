<?php

/* SymfoProjectGitCinemaBundle:Realisateur:list.html.twig */
class __TwigTemplate_5eb288c4b631a670fccca2e18bc04ab2bc1b76dbcc3e8a4c8f7b29a4e309eb0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SymfoProjectGitCinemaBundle:Realisateur:layout.html.twig", "SymfoProjectGitCinemaBundle:Realisateur:list.html.twig", 1);
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
        $__internal_1835bf256ce5035cebdbef2c9764cb5ac8421452296b23c4daa288713d7e468d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1835bf256ce5035cebdbef2c9764cb5ac8421452296b23c4daa288713d7e468d->enter($__internal_1835bf256ce5035cebdbef2c9764cb5ac8421452296b23c4daa288713d7e468d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Realisateur:list.html.twig"));

        $__internal_c413d7ff426debfb41d019be0d72a1bbee5c2febbd621b556ffa258410550136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c413d7ff426debfb41d019be0d72a1bbee5c2febbd621b556ffa258410550136->enter($__internal_c413d7ff426debfb41d019be0d72a1bbee5c2febbd621b556ffa258410550136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Realisateur:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1835bf256ce5035cebdbef2c9764cb5ac8421452296b23c4daa288713d7e468d->leave($__internal_1835bf256ce5035cebdbef2c9764cb5ac8421452296b23c4daa288713d7e468d_prof);

        
        $__internal_c413d7ff426debfb41d019be0d72a1bbee5c2febbd621b556ffa258410550136->leave($__internal_c413d7ff426debfb41d019be0d72a1bbee5c2febbd621b556ffa258410550136_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9db145282800befee1110db35605893f5a2ca2d6cd8f6c74c4b79e9d5e3dad44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db145282800befee1110db35605893f5a2ca2d6cd8f6c74c4b79e9d5e3dad44->enter($__internal_9db145282800befee1110db35605893f5a2ca2d6cd8f6c74c4b79e9d5e3dad44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f75e9960854fba07605ca67182b2c12be3af5f03c261ae7f3af9bfc86f99ffc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75e9960854fba07605ca67182b2c12be3af5f03c261ae7f3af9bfc86f99ffc8->enter($__internal_f75e9960854fba07605ca67182b2c12be3af5f03c261ae7f3af9bfc86f99ffc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "            <div class=\"row\">
                <div class=\"col-md-3\">
                    <p class=\"lead\">Cinéma</p>
                    <div class=\"list-group\">
                        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_films");
        echo "\" class=\"list-group-item\">Films</a>
                        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_realisateurs");
        echo "\" class=\"list-group-item\">Réalisateurs</a>
                    </div>
                </div>

        ";
        
        $__internal_f75e9960854fba07605ca67182b2c12be3af5f03c261ae7f3af9bfc86f99ffc8->leave($__internal_f75e9960854fba07605ca67182b2c12be3af5f03c261ae7f3af9bfc86f99ffc8_prof);

        
        $__internal_9db145282800befee1110db35605893f5a2ca2d6cd8f6c74c4b79e9d5e3dad44->leave($__internal_9db145282800befee1110db35605893f5a2ca2d6cd8f6c74c4b79e9d5e3dad44_prof);

    }

    public function getTemplateName()
    {
        return "SymfoProjectGitCinemaBundle:Realisateur:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  55 => 9,  49 => 5,  40 => 4,  11 => 1,);
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
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <p class=\"lead\">Cinéma</p>
                    <div class=\"list-group\">
                        <a href=\"{{ path('page_films')}}\" class=\"list-group-item\">Films</a>
                        <a href=\"{{ path('page_realisateurs')}}\" class=\"list-group-item\">Réalisateurs</a>
                    </div>
                </div>

        {% endblock %}", "SymfoProjectGitCinemaBundle:Realisateur:list.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/CinemaBundle/Resources/views/Realisateur/list.html.twig");
    }
}
