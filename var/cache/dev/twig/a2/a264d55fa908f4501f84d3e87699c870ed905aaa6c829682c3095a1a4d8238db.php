<?php

/* SymfoProjectGitCinemaBundle:Film:list.html.twig */
class __TwigTemplate_572fc0aea43a5d421c6cc3a4aeff2be6e1f00e0699a6cdefe43693f6dd869c22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SymfoProjectGitCinemaBundle:Film:layout.html.twig", "SymfoProjectGitCinemaBundle:Film:list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SymfoProjectGitCinemaBundle:Film:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e91197a65c63a9843514ba5918c7cef6e8a975840284d2e3f5fef776028ff17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e91197a65c63a9843514ba5918c7cef6e8a975840284d2e3f5fef776028ff17->enter($__internal_3e91197a65c63a9843514ba5918c7cef6e8a975840284d2e3f5fef776028ff17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Film:list.html.twig"));

        $__internal_64feb6373dccc3108cf98e100940be3ec0a5ee667eec961c56663a7e6ef61a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64feb6373dccc3108cf98e100940be3ec0a5ee667eec961c56663a7e6ef61a04->enter($__internal_64feb6373dccc3108cf98e100940be3ec0a5ee667eec961c56663a7e6ef61a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Film:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e91197a65c63a9843514ba5918c7cef6e8a975840284d2e3f5fef776028ff17->leave($__internal_3e91197a65c63a9843514ba5918c7cef6e8a975840284d2e3f5fef776028ff17_prof);

        
        $__internal_64feb6373dccc3108cf98e100940be3ec0a5ee667eec961c56663a7e6ef61a04->leave($__internal_64feb6373dccc3108cf98e100940be3ec0a5ee667eec961c56663a7e6ef61a04_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5058d2b37007f801973c59ae6db1fb622c8eeafcbaf12839ce16931fc689207a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5058d2b37007f801973c59ae6db1fb622c8eeafcbaf12839ce16931fc689207a->enter($__internal_5058d2b37007f801973c59ae6db1fb622c8eeafcbaf12839ce16931fc689207a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_28aecc9d06dc690f0f8d5ceb09652f93213a45ce53e22418268849d77bbcee04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28aecc9d06dc690f0f8d5ceb09652f93213a45ce53e22418268849d77bbcee04->enter($__internal_28aecc9d06dc690f0f8d5ceb09652f93213a45ce53e22418268849d77bbcee04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des Films";
        
        $__internal_28aecc9d06dc690f0f8d5ceb09652f93213a45ce53e22418268849d77bbcee04->leave($__internal_28aecc9d06dc690f0f8d5ceb09652f93213a45ce53e22418268849d77bbcee04_prof);

        
        $__internal_5058d2b37007f801973c59ae6db1fb622c8eeafcbaf12839ce16931fc689207a->leave($__internal_5058d2b37007f801973c59ae6db1fb622c8eeafcbaf12839ce16931fc689207a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_51e3fc091bb43798f3ad068f612df1bfa15262574358491cbb8a9833e0219c47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51e3fc091bb43798f3ad068f612df1bfa15262574358491cbb8a9833e0219c47->enter($__internal_51e3fc091bb43798f3ad068f612df1bfa15262574358491cbb8a9833e0219c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9bb01b036134a7a3b656fd390744ae1734a0946e20c77c5c085fdcc9d40db268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bb01b036134a7a3b656fd390744ae1734a0946e20c77c5c085fdcc9d40db268->enter($__internal_9bb01b036134a7a3b656fd390744ae1734a0946e20c77c5c085fdcc9d40db268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container\">
            <div class=\"row\">

            <div class=\"col-md-3\">
                <p class=\"lead\">Cinéma</p>
                <div class=\"list-group\">
                    <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_films");
        echo "'\" class=\"list-group-item active\">Films</a>
                    <a href=\"c\" class=\"list-group-item\">Réalisateurs</a>
                </div>
            </div>
            
<div class=\"col-md-9\">
                <h2>Liste des films</h2>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) ? $context["films"] : $this->getContext($context, "films")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 21
            echo "                <br />
            

                <div class=\"thumbnail\">
                    <div class=\"caption-full\">
                        <h4 class=\"pull-right\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</h4>
                        <h4><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_films", array("id" => $this->getAttribute($context["film"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</a></h4>
                        <p>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "synopsis", array()), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"ratings\">
                        <p class=\"pull-right\">sorti le :";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</p>
                        <p>Réalisé par : <a href=\"\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</a></p>
                    </div>
                </div>
            </div>
            </div>
            </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9bb01b036134a7a3b656fd390744ae1734a0946e20c77c5c085fdcc9d40db268->leave($__internal_9bb01b036134a7a3b656fd390744ae1734a0946e20c77c5c085fdcc9d40db268_prof);

        
        $__internal_51e3fc091bb43798f3ad068f612df1bfa15262574358491cbb8a9833e0219c47->leave($__internal_51e3fc091bb43798f3ad068f612df1bfa15262574358491cbb8a9833e0219c47_prof);

    }

    public function getTemplateName()
    {
        return "SymfoProjectGitCinemaBundle:Film:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 32,  114 => 31,  108 => 28,  102 => 27,  98 => 26,  91 => 21,  87 => 20,  77 => 13,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

    {% block title %}Liste des Films{% endblock %}

        {% block body %}

    <div class=\"container\">
            <div class=\"row\">

            <div class=\"col-md-3\">
                <p class=\"lead\">Cinéma</p>
                <div class=\"list-group\">
                    <a href=\"{{ path('page_films')}}'\" class=\"list-group-item active\">Films</a>
                    <a href=\"c\" class=\"list-group-item\">Réalisateurs</a>
                </div>
            </div>
            
<div class=\"col-md-9\">
                <h2>Liste des films</h2>
                {% for film in films %}
                <br />
            

                <div class=\"thumbnail\">
                    <div class=\"caption-full\">
                        <h4 class=\"pull-right\">{{ film.titre }}</h4>
                        <h4><a href=\"{{ path('page_films', {'id': film.id}) }}\">{{ film.titre }}</a></h4>
                        <p>{{ film.synopsis }}</p>
                    </div>
                    <div class=\"ratings\">
                        <p class=\"pull-right\">sorti le :{{ film.titre }}</p>
                        <p>Réalisé par : <a href=\"\">{{ film.titre }}</a></p>
                    </div>
                </div>
            </div>
            </div>
            </div>
    {% endfor %}
{% endblock %}", "SymfoProjectGitCinemaBundle:Film:list.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/CinemaBundle/Resources/views/Film/list.html.twig");
    }
}
