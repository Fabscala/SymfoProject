<?php

/* SymfoProjectGitAdminBundle:Film:list.html.twig */
class __TwigTemplate_f49fb53c12434f2984ae578b3b190df343f83ee471845953a1bc3a6e2feebbb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SymfoProjectGitCinemaBundle:Film:layout.html.twig", "SymfoProjectGitAdminBundle:Film:list.html.twig", 1);
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
        $__internal_7cca43d80a15e4581bc934505088fb68204897c7adeca5234ad5e352e4cf3736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cca43d80a15e4581bc934505088fb68204897c7adeca5234ad5e352e4cf3736->enter($__internal_7cca43d80a15e4581bc934505088fb68204897c7adeca5234ad5e352e4cf3736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitAdminBundle:Film:list.html.twig"));

        $__internal_e4256e05cbe7a30d7b229ad442a0e9c1260405aed208825a2bf2faf77d7afb79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4256e05cbe7a30d7b229ad442a0e9c1260405aed208825a2bf2faf77d7afb79->enter($__internal_e4256e05cbe7a30d7b229ad442a0e9c1260405aed208825a2bf2faf77d7afb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitAdminBundle:Film:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cca43d80a15e4581bc934505088fb68204897c7adeca5234ad5e352e4cf3736->leave($__internal_7cca43d80a15e4581bc934505088fb68204897c7adeca5234ad5e352e4cf3736_prof);

        
        $__internal_e4256e05cbe7a30d7b229ad442a0e9c1260405aed208825a2bf2faf77d7afb79->leave($__internal_e4256e05cbe7a30d7b229ad442a0e9c1260405aed208825a2bf2faf77d7afb79_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e3f008063fc330bcf26869aede2649ef03b2c68470114a4d9e4e5693a231cf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3f008063fc330bcf26869aede2649ef03b2c68470114a4d9e4e5693a231cf8->enter($__internal_8e3f008063fc330bcf26869aede2649ef03b2c68470114a4d9e4e5693a231cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6c187d1b2f9c14edf73f9659171d40112a4c926ce4ef4db920b9f3504d8d5a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c187d1b2f9c14edf73f9659171d40112a4c926ce4ef4db920b9f3504d8d5a8->enter($__internal_f6c187d1b2f9c14edf73f9659171d40112a4c926ce4ef4db920b9f3504d8d5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Liste des films :</h1>
<ul>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) ? $context["films"] : $this->getContext($context, "films")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 6
            echo "        <li>
            <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_film_modif", array("id" => $this->getAttribute($context["film"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</a>
            <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_film_supprimer", array("id" => $this->getAttribute($context["film"], "id", array()))), "html", null, true);
            echo "\">(x)</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>
<a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_film_ajout");
        echo "\">Ajouter</a>
";
        
        $__internal_f6c187d1b2f9c14edf73f9659171d40112a4c926ce4ef4db920b9f3504d8d5a8->leave($__internal_f6c187d1b2f9c14edf73f9659171d40112a4c926ce4ef4db920b9f3504d8d5a8_prof);

        
        $__internal_8e3f008063fc330bcf26869aede2649ef03b2c68470114a4d9e4e5693a231cf8->leave($__internal_8e3f008063fc330bcf26869aede2649ef03b2c68470114a4d9e4e5693a231cf8_prof);

    }

    public function getTemplateName()
    {
        return "SymfoProjectGitAdminBundle:Film:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  75 => 11,  66 => 8,  60 => 7,  57 => 6,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
<h1>Liste des films :</h1>
<ul>
    {% for film in films %}
        <li>
            <a href=\"{{ path('admin_film_modif', {'id': film.id}) }}\">{{ film.titre }}</a>
            <a href=\"{{ path('admin_film_supprimer', {'id': film.id}) }}\">(x)</a>
        </li>
    {% endfor %}
</ul>
<a href=\"{{ path('admin_film_ajout') }}\">Ajouter</a>
{% endblock %}", "SymfoProjectGitAdminBundle:Film:list.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/AdminBundle/Resources/views/Film/list.html.twig");
    }
}
