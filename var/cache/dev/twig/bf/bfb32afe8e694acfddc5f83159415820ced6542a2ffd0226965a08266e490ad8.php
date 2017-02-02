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
        $__internal_7afdc72ca47c527d02de19f55f13ba05446ea9b46afa148dfc616aa54a88f865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7afdc72ca47c527d02de19f55f13ba05446ea9b46afa148dfc616aa54a88f865->enter($__internal_7afdc72ca47c527d02de19f55f13ba05446ea9b46afa148dfc616aa54a88f865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Realisateur:list.html.twig"));

        $__internal_424db13a1fd3c7053abe0e817de21137d38c3d27a797275536334cb2bfbcd5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424db13a1fd3c7053abe0e817de21137d38c3d27a797275536334cb2bfbcd5b7->enter($__internal_424db13a1fd3c7053abe0e817de21137d38c3d27a797275536334cb2bfbcd5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Realisateur:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7afdc72ca47c527d02de19f55f13ba05446ea9b46afa148dfc616aa54a88f865->leave($__internal_7afdc72ca47c527d02de19f55f13ba05446ea9b46afa148dfc616aa54a88f865_prof);

        
        $__internal_424db13a1fd3c7053abe0e817de21137d38c3d27a797275536334cb2bfbcd5b7->leave($__internal_424db13a1fd3c7053abe0e817de21137d38c3d27a797275536334cb2bfbcd5b7_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_18806fdc7f03deebe11a0f48263d7fa1e84088f8b9de976a36eb3248ca529538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18806fdc7f03deebe11a0f48263d7fa1e84088f8b9de976a36eb3248ca529538->enter($__internal_18806fdc7f03deebe11a0f48263d7fa1e84088f8b9de976a36eb3248ca529538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9aac465d27a75432f4f877928bd113cee98c7886b5be6dec4c2f138a1d74c8be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aac465d27a75432f4f877928bd113cee98c7886b5be6dec4c2f138a1d74c8be->enter($__internal_9aac465d27a75432f4f877928bd113cee98c7886b5be6dec4c2f138a1d74c8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "\" class=\"list-group-item active\">Réalisateurs</a>
                    </div>
                </div>
                <h2>Liste des réalisateurs</h2>
\t\t\t\t
                <div class=\"col-md-9\">
\t\t\t    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["realisateurs"]) ? $context["realisateurs"] : $this->getContext($context, "realisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["realisateur"]) {
            // line 17
            echo "
\t\t\t\t<br />
\t\t\t
\t\t\t\t<div class=\"well\">
                            <strong>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["realisateur"], "nom", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["realisateur"], "prenom", array()), "html", null, true);
            echo "</strong>               
                            <br>Date de Naissance : ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["realisateur"], "dateDeNaissance", array()), "html", null, true);
            echo "<br />
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t<p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["realisateur"], "description", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_realisateur", array("id" => $this->getAttribute($context["realisateur"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">Voir ses films</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['realisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t\t\t\t    


        ";
        
        $__internal_9aac465d27a75432f4f877928bd113cee98c7886b5be6dec4c2f138a1d74c8be->leave($__internal_9aac465d27a75432f4f877928bd113cee98c7886b5be6dec4c2f138a1d74c8be_prof);

        
        $__internal_18806fdc7f03deebe11a0f48263d7fa1e84088f8b9de976a36eb3248ca529538->leave($__internal_18806fdc7f03deebe11a0f48263d7fa1e84088f8b9de976a36eb3248ca529538_prof);

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
        return array (  105 => 31,  95 => 27,  89 => 24,  84 => 22,  78 => 21,  72 => 17,  68 => 16,  59 => 10,  55 => 9,  49 => 5,  40 => 4,  11 => 1,);
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
                        <a href=\"{{ path('page_realisateurs')}}\" class=\"list-group-item active\">Réalisateurs</a>
                    </div>
                </div>
                <h2>Liste des réalisateurs</h2>
\t\t\t\t
                <div class=\"col-md-9\">
\t\t\t    {% for realisateur in realisateurs %}

\t\t\t\t<br />
\t\t\t
\t\t\t\t<div class=\"well\">
                            <strong>{{ realisateur.nom }}  {{ realisateur.prenom }}</strong>               
                            <br>Date de Naissance : {{ realisateur.dateDeNaissance }}<br />
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t<p>{{ realisateur.description }}</p>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('page_realisateur', {'id': realisateur.id}) }}\" class=\"btn btn-success\">Voir ses films</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t    {% endfor %}
\t\t\t\t\t\t    


        {% endblock %}", "SymfoProjectGitCinemaBundle:Realisateur:list.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/CinemaBundle/Resources/views/Realisateur/list.html.twig");
    }
}
