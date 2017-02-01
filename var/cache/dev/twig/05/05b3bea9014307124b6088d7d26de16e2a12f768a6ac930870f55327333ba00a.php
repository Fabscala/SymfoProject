<?php

/* SymfoProjectGitCinemaBundle:Film:show.html.twig */
class __TwigTemplate_a153f6f4a989675c51ba2fc2aaee3ae87127211b9bdf82a5431687a68c21fcfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SymfoProjectGitCinemaBundle:Film:layout.html.twig", "SymfoProjectGitCinemaBundle:Film:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SymfoProjectGitCinemaBundle:Film:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b219971a1476f1d6d8aed615aec4a4a249d18d5a47408cd8603d9af587e93d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b219971a1476f1d6d8aed615aec4a4a249d18d5a47408cd8603d9af587e93d9->enter($__internal_7b219971a1476f1d6d8aed615aec4a4a249d18d5a47408cd8603d9af587e93d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Film:show.html.twig"));

        $__internal_c22cd21b457c1a927c3adfe453420d63f98b22923666f8af6a41a179f3d42e84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22cd21b457c1a927c3adfe453420d63f98b22923666f8af6a41a179f3d42e84->enter($__internal_c22cd21b457c1a927c3adfe453420d63f98b22923666f8af6a41a179f3d42e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Film:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b219971a1476f1d6d8aed615aec4a4a249d18d5a47408cd8603d9af587e93d9->leave($__internal_7b219971a1476f1d6d8aed615aec4a4a249d18d5a47408cd8603d9af587e93d9_prof);

        
        $__internal_c22cd21b457c1a927c3adfe453420d63f98b22923666f8af6a41a179f3d42e84->leave($__internal_c22cd21b457c1a927c3adfe453420d63f98b22923666f8af6a41a179f3d42e84_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9438882c9eadcd97f793b65c93600fad35aa946082891c5c3e6d34d8f4200a39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9438882c9eadcd97f793b65c93600fad35aa946082891c5c3e6d34d8f4200a39->enter($__internal_9438882c9eadcd97f793b65c93600fad35aa946082891c5c3e6d34d8f4200a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_775f542980cdbc5dbc82d7b76afca3e8407093a4b854d37e0f5e6c87737ced4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_775f542980cdbc5dbc82d7b76afca3e8407093a4b854d37e0f5e6c87737ced4c->enter($__internal_775f542980cdbc5dbc82d7b76afca3e8407093a4b854d37e0f5e6c87737ced4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "titre", array()), "html", null, true);
        echo "</h1>

<span>Ecrit par ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "realisateur", array()), "html", null, true);
        echo "</span>
<br><br>
<p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "synopsis", array()), "html", null, true);
        echo "</p>

<span>Réalisateur : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "realisateur", array()), "html", null, true);
        echo "</span>
<span class=\"pull-right\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "genre", array()), "html", null, true);
        echo "</span>

<br><br>
<p><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_films");
        echo "\">Retour</a></p>
";
        
        $__internal_775f542980cdbc5dbc82d7b76afca3e8407093a4b854d37e0f5e6c87737ced4c->leave($__internal_775f542980cdbc5dbc82d7b76afca3e8407093a4b854d37e0f5e6c87737ced4c_prof);

        
        $__internal_9438882c9eadcd97f793b65c93600fad35aa946082891c5c3e6d34d8f4200a39->leave($__internal_9438882c9eadcd97f793b65c93600fad35aa946082891c5c3e6d34d8f4200a39_prof);

    }

    public function getTemplateName()
    {
        return "SymfoProjectGitCinemaBundle:Film:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  69 => 12,  65 => 11,  60 => 9,  55 => 7,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SymfoProjectGitCinemaBundle:Film:layout.html.twig' %}


        {% block body %}
<h1>{{ film.titre }}</h1>

<span>Ecrit par {{ film.realisateur }}</span>
<br><br>
<p>{{ film.synopsis }}</p>

<span>Réalisateur : {{ film.realisateur }}</span>
<span class=\"pull-right\">{{ film.genre }}</span>

<br><br>
<p><a href=\"{{ path('page_films') }}\">Retour</a></p>
{% endblock %}", "SymfoProjectGitCinemaBundle:Film:show.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/CinemaBundle/Resources/views/Film/show.html.twig");
    }
}
