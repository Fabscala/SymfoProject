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
        $__internal_e50236c84e6357014780d0ac228440d7a0f5a2f5607b14a27911359d50a15880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e50236c84e6357014780d0ac228440d7a0f5a2f5607b14a27911359d50a15880->enter($__internal_e50236c84e6357014780d0ac228440d7a0f5a2f5607b14a27911359d50a15880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Film:list.html.twig"));

        $__internal_d57435b9829342cbd0c05c853d79c2f5f97b94b37c96689cae147af60a50b276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57435b9829342cbd0c05c853d79c2f5f97b94b37c96689cae147af60a50b276->enter($__internal_d57435b9829342cbd0c05c853d79c2f5f97b94b37c96689cae147af60a50b276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Film:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e50236c84e6357014780d0ac228440d7a0f5a2f5607b14a27911359d50a15880->leave($__internal_e50236c84e6357014780d0ac228440d7a0f5a2f5607b14a27911359d50a15880_prof);

        
        $__internal_d57435b9829342cbd0c05c853d79c2f5f97b94b37c96689cae147af60a50b276->leave($__internal_d57435b9829342cbd0c05c853d79c2f5f97b94b37c96689cae147af60a50b276_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c01485b2bb80a38ea25b38f2b6266f2d13b065c6ef14509061eb95606b701161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c01485b2bb80a38ea25b38f2b6266f2d13b065c6ef14509061eb95606b701161->enter($__internal_c01485b2bb80a38ea25b38f2b6266f2d13b065c6ef14509061eb95606b701161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_11de3fb368b3d30588faedfe62d2120568b531004fe5b3e7955d5aaf58c74a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11de3fb368b3d30588faedfe62d2120568b531004fe5b3e7955d5aaf58c74a60->enter($__internal_11de3fb368b3d30588faedfe62d2120568b531004fe5b3e7955d5aaf58c74a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des Films";
        
        $__internal_11de3fb368b3d30588faedfe62d2120568b531004fe5b3e7955d5aaf58c74a60->leave($__internal_11de3fb368b3d30588faedfe62d2120568b531004fe5b3e7955d5aaf58c74a60_prof);

        
        $__internal_c01485b2bb80a38ea25b38f2b6266f2d13b065c6ef14509061eb95606b701161->leave($__internal_c01485b2bb80a38ea25b38f2b6266f2d13b065c6ef14509061eb95606b701161_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5994b19c5b3601367e1b9d715f5e183927228851ebf8e306fbbe7bea91a124e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5994b19c5b3601367e1b9d715f5e183927228851ebf8e306fbbe7bea91a124e8->enter($__internal_5994b19c5b3601367e1b9d715f5e183927228851ebf8e306fbbe7bea91a124e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20715340fa2431053ff4d02ce537284fb2aa1fa33d5e134ea18b376d6718786d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20715340fa2431053ff4d02ce537284fb2aa1fa33d5e134ea18b376d6718786d->enter($__internal_20715340fa2431053ff4d02ce537284fb2aa1fa33d5e134ea18b376d6718786d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <a href=\"\" class=\"list-group-item\">Réalisateurs</a>
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
                            <p>Date de sortie : <a href=\"\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "getDate", array(), "method"), "html", null, true);
            echo "</a></p>
                            <p>Réalisé par : <a href=\"\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "realisateur_id", array(), "method"), "html", null, true);
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
        
        $__internal_20715340fa2431053ff4d02ce537284fb2aa1fa33d5e134ea18b376d6718786d->leave($__internal_20715340fa2431053ff4d02ce537284fb2aa1fa33d5e134ea18b376d6718786d_prof);

        
        $__internal_5994b19c5b3601367e1b9d715f5e183927228851ebf8e306fbbe7bea91a124e8->leave($__internal_5994b19c5b3601367e1b9d715f5e183927228851ebf8e306fbbe7bea91a124e8_prof);

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
                        <a href=\"\" class=\"list-group-item\">Réalisateurs</a>
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
                            <p>Date de sortie : <a href=\"\">{{ film.getDate() }}</a></p>
                            <p>Réalisé par : <a href=\"\">{{ film.realisateur_id() }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
    {% endfor %}
{% endblock %}", "SymfoProjectGitCinemaBundle:Film:list.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/CinemaBundle/Resources/views/Film/list.html.twig");
    }
}
