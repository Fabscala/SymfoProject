<?php

/* SymfoProjectGitAdminBundle:Realisateur:list.html.twig */
class __TwigTemplate_1396ba21cc5722305eba6d3109213f4ebbd64ce6f48fb71428949c82aa70fef8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SymfoProjectGitCinemaBundle:Film:layout.html.twig", "SymfoProjectGitAdminBundle:Realisateur:list.html.twig", 1);
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
        $__internal_78713e8d6b650d175366399a8e56a19e0ae9239fda0935d81869d008fbd03941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78713e8d6b650d175366399a8e56a19e0ae9239fda0935d81869d008fbd03941->enter($__internal_78713e8d6b650d175366399a8e56a19e0ae9239fda0935d81869d008fbd03941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitAdminBundle:Realisateur:list.html.twig"));

        $__internal_5f26345d41c1b41520a910575ab4832bf0babf6784b81606462076f44da993d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f26345d41c1b41520a910575ab4832bf0babf6784b81606462076f44da993d9->enter($__internal_5f26345d41c1b41520a910575ab4832bf0babf6784b81606462076f44da993d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitAdminBundle:Realisateur:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78713e8d6b650d175366399a8e56a19e0ae9239fda0935d81869d008fbd03941->leave($__internal_78713e8d6b650d175366399a8e56a19e0ae9239fda0935d81869d008fbd03941_prof);

        
        $__internal_5f26345d41c1b41520a910575ab4832bf0babf6784b81606462076f44da993d9->leave($__internal_5f26345d41c1b41520a910575ab4832bf0babf6784b81606462076f44da993d9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8ad8d9362bfe0979e015b659a7f03f8e326ee09f1e43962bdd651a9d1246f7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8ad8d9362bfe0979e015b659a7f03f8e326ee09f1e43962bdd651a9d1246f7f->enter($__internal_a8ad8d9362bfe0979e015b659a7f03f8e326ee09f1e43962bdd651a9d1246f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dbf88cf7e3f65b81bc2b243ddb2dca8b2f1077bb355f6a9c9493dbea2143ca7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf88cf7e3f65b81bc2b243ddb2dca8b2f1077bb355f6a9c9493dbea2143ca7f->enter($__internal_dbf88cf7e3f65b81bc2b243ddb2dca8b2f1077bb355f6a9c9493dbea2143ca7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Liste des realisateurs :</h1>
<ul>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["realisateurs"]) ? $context["realisateurs"] : $this->getContext($context, "realisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["realisateur"]) {
            // line 6
            echo "    <div class =\"well\">
        <li>
            <strong><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_realisateur_modif", array("id" => $this->getAttribute($context["realisateur"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["realisateur"], "nom", array()), "html", null, true);
            echo "</a><strong>
            <div class=\"pull-right\"><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_realisateur_supprimer", array("id" => $this->getAttribute($context["realisateur"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></div>
        </li>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['realisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>
<a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_realisateur_ajout");
        echo "\">Ajouter</a>
";
        
        $__internal_dbf88cf7e3f65b81bc2b243ddb2dca8b2f1077bb355f6a9c9493dbea2143ca7f->leave($__internal_dbf88cf7e3f65b81bc2b243ddb2dca8b2f1077bb355f6a9c9493dbea2143ca7f_prof);

        
        $__internal_a8ad8d9362bfe0979e015b659a7f03f8e326ee09f1e43962bdd651a9d1246f7f->leave($__internal_a8ad8d9362bfe0979e015b659a7f03f8e326ee09f1e43962bdd651a9d1246f7f_prof);

    }

    public function getTemplateName()
    {
        return "SymfoProjectGitAdminBundle:Realisateur:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 14,  77 => 13,  67 => 9,  61 => 8,  57 => 6,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
<h1>Liste des realisateurs :</h1>
<ul>
    {% for realisateur in realisateurs %}
    <div class =\"well\">
        <li>
            <strong><a href=\"{{ path('admin_realisateur_modif', {'id': realisateur.id}) }}\">{{ realisateur.nom }}</a><strong>
            <div class=\"pull-right\"><a href=\"{{ path('admin_realisateur_supprimer', {'id': realisateur.id}) }}\">Supprimer</a></div>
        </li>
    </div>
    {% endfor %}
</ul>
<a href=\"{{ path('admin_realisateur_ajout') }}\">Ajouter</a>
{% endblock %}
", "SymfoProjectGitAdminBundle:Realisateur:list.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/AdminBundle/Resources/views/Realisateur/list.html.twig");
    }
}
