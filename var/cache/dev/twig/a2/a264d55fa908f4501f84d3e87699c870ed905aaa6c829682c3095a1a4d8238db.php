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
        $__internal_c62bccb229628c3124988d4a8684b2aaf72d579f28058311df5deb6cf56923e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c62bccb229628c3124988d4a8684b2aaf72d579f28058311df5deb6cf56923e7->enter($__internal_c62bccb229628c3124988d4a8684b2aaf72d579f28058311df5deb6cf56923e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Film:list.html.twig"));

        $__internal_b1c741b3a7abe81a4b4e8a098208b67e487ae89cf11d99e49636b1509a813e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c741b3a7abe81a4b4e8a098208b67e487ae89cf11d99e49636b1509a813e39->enter($__internal_b1c741b3a7abe81a4b4e8a098208b67e487ae89cf11d99e49636b1509a813e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Film:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c62bccb229628c3124988d4a8684b2aaf72d579f28058311df5deb6cf56923e7->leave($__internal_c62bccb229628c3124988d4a8684b2aaf72d579f28058311df5deb6cf56923e7_prof);

        
        $__internal_b1c741b3a7abe81a4b4e8a098208b67e487ae89cf11d99e49636b1509a813e39->leave($__internal_b1c741b3a7abe81a4b4e8a098208b67e487ae89cf11d99e49636b1509a813e39_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8232d8b87b52582909ed8dda02f61ba1a9e40e83155e9cf5cdfbfc447ab85615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8232d8b87b52582909ed8dda02f61ba1a9e40e83155e9cf5cdfbfc447ab85615->enter($__internal_8232d8b87b52582909ed8dda02f61ba1a9e40e83155e9cf5cdfbfc447ab85615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e9b2515adef81d9ae6d805e6f7752960ca20d7dbb2c0afd975a598365b47a3c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b2515adef81d9ae6d805e6f7752960ca20d7dbb2c0afd975a598365b47a3c4->enter($__internal_e9b2515adef81d9ae6d805e6f7752960ca20d7dbb2c0afd975a598365b47a3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des Films";
        
        $__internal_e9b2515adef81d9ae6d805e6f7752960ca20d7dbb2c0afd975a598365b47a3c4->leave($__internal_e9b2515adef81d9ae6d805e6f7752960ca20d7dbb2c0afd975a598365b47a3c4_prof);

        
        $__internal_8232d8b87b52582909ed8dda02f61ba1a9e40e83155e9cf5cdfbfc447ab85615->leave($__internal_8232d8b87b52582909ed8dda02f61ba1a9e40e83155e9cf5cdfbfc447ab85615_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_efad52b3d53cf512122d4dcaf2617600ef2e9c506795880f06eec53c771454fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efad52b3d53cf512122d4dcaf2617600ef2e9c506795880f06eec53c771454fd->enter($__internal_efad52b3d53cf512122d4dcaf2617600ef2e9c506795880f06eec53c771454fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ffc1d65a65e136d2a01fcd032e195a71d1086a52bae6980fad4c7264635afbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ffc1d65a65e136d2a01fcd032e195a71d1086a52bae6980fad4c7264635afbc->enter($__internal_3ffc1d65a65e136d2a01fcd032e195a71d1086a52bae6980fad4c7264635afbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <p class=\"lead\">Cinéma</p>
                    <div class=\"list-group\">
                        <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_films");
        echo "'\" class=\"list-group-item active\">Films</a>
                        <a href=\"c\" class=\"list-group-item\">Réalisateurs</a>
                    </div>
                </div>
                    <h2>Liste des films</h2>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) ? $context["films"] : $this->getContext($context, "films")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 17
            echo "        <div class=\"col-md-9\">
                    <br />
                    <div class=\"thumbnail\">
                        <div class=\"caption-full\">
                            <h4 class=\"pull-right\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</h4>
                            <h4><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_films", array("id" => $this->getAttribute($context["film"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</a></h4>
                            <p>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "synopsis", array()), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"ratings\">
                            <p class=\"pull-right\">sorti le :";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</p>
                            <p>Réalisé par : <a href=\"\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</a></p>
                        </div>
                    </div>
                </div>
            </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_3ffc1d65a65e136d2a01fcd032e195a71d1086a52bae6980fad4c7264635afbc->leave($__internal_3ffc1d65a65e136d2a01fcd032e195a71d1086a52bae6980fad4c7264635afbc_prof);

        
        $__internal_efad52b3d53cf512122d4dcaf2617600ef2e9c506795880f06eec53c771454fd->leave($__internal_efad52b3d53cf512122d4dcaf2617600ef2e9c506795880f06eec53c771454fd_prof);

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
        return array (  113 => 27,  109 => 26,  103 => 23,  97 => 22,  93 => 21,  87 => 17,  83 => 16,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

            <div class=\"row\">
                <div class=\"col-md-3\">
                    <p class=\"lead\">Cinéma</p>
                    <div class=\"list-group\">
                        <a href=\"{{ path('page_films')}}'\" class=\"list-group-item active\">Films</a>
                        <a href=\"c\" class=\"list-group-item\">Réalisateurs</a>
                    </div>
                </div>
                    <h2>Liste des films</h2>
    {% for film in films %}
        <div class=\"col-md-9\">
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
    {% endfor %}
{% endblock %}", "SymfoProjectGitCinemaBundle:Film:list.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/CinemaBundle/Resources/views/Film/list.html.twig");
    }
}
