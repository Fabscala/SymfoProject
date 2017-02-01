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
        $__internal_37518e1ab3cab984a004e0dd932ef4a4f4ad7e067c37585b337e1b6da08bfe89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37518e1ab3cab984a004e0dd932ef4a4f4ad7e067c37585b337e1b6da08bfe89->enter($__internal_37518e1ab3cab984a004e0dd932ef4a4f4ad7e067c37585b337e1b6da08bfe89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitAdminBundle:Realisateur:list.html.twig"));

        $__internal_d13d84bb701794990c83296b08ddce371b0ce7aa9cba3c711f1129b7ad7cbb00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d13d84bb701794990c83296b08ddce371b0ce7aa9cba3c711f1129b7ad7cbb00->enter($__internal_d13d84bb701794990c83296b08ddce371b0ce7aa9cba3c711f1129b7ad7cbb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitAdminBundle:Realisateur:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37518e1ab3cab984a004e0dd932ef4a4f4ad7e067c37585b337e1b6da08bfe89->leave($__internal_37518e1ab3cab984a004e0dd932ef4a4f4ad7e067c37585b337e1b6da08bfe89_prof);

        
        $__internal_d13d84bb701794990c83296b08ddce371b0ce7aa9cba3c711f1129b7ad7cbb00->leave($__internal_d13d84bb701794990c83296b08ddce371b0ce7aa9cba3c711f1129b7ad7cbb00_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b343ce1940f6fb5a69e42b8a155264e07fbe29bc1a2086c5c99d4ad7885a735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b343ce1940f6fb5a69e42b8a155264e07fbe29bc1a2086c5c99d4ad7885a735->enter($__internal_4b343ce1940f6fb5a69e42b8a155264e07fbe29bc1a2086c5c99d4ad7885a735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d1759f7a14e81b9534b51fe3f34a920173763c2705a9465d1a171739c03603c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1759f7a14e81b9534b51fe3f34a920173763c2705a9465d1a171739c03603c->enter($__internal_6d1759f7a14e81b9534b51fe3f34a920173763c2705a9465d1a171739c03603c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Liste des realisateurs :</h1>
<ul>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["realisateurs"]) ? $context["realisateurs"] : $this->getContext($context, "realisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["realisateur"]) {
            // line 6
            echo "        <li>
            <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_realisateur_modif", array("id" => $this->getAttribute($context["realisateur"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["realisateur"], "nom", array()), "html", null, true);
            echo "</a>
            <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_realisateur_supprimer", array("id" => $this->getAttribute($context["realisateur"], "id", array()))), "html", null, true);
            echo "\">(x)</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['realisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>
<a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_realisateur_ajout");
        echo "\">Ajouter</a>
";
        
        $__internal_6d1759f7a14e81b9534b51fe3f34a920173763c2705a9465d1a171739c03603c->leave($__internal_6d1759f7a14e81b9534b51fe3f34a920173763c2705a9465d1a171739c03603c_prof);

        
        $__internal_4b343ce1940f6fb5a69e42b8a155264e07fbe29bc1a2086c5c99d4ad7885a735->leave($__internal_4b343ce1940f6fb5a69e42b8a155264e07fbe29bc1a2086c5c99d4ad7885a735_prof);

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
<h1>Liste des realisateurs :</h1>
<ul>
    {% for realisateur in realisateurs %}
        <li>
            <a href=\"{{ path('admin_realisateur_modif', {'id': realisateur.id}) }}\">{{ realisateur.nom }}</a>
            <a href=\"{{ path('admin_realisateur_supprimer', {'id': realisateur.id}) }}\">(x)</a>
        </li>
    {% endfor %}
</ul>
<a href=\"{{ path('admin_realisateur_ajout') }}\">Ajouter</a>
{% endblock %}", "SymfoProjectGitAdminBundle:Realisateur:list.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/AdminBundle/Resources/views/Realisateur/list.html.twig");
    }
}
