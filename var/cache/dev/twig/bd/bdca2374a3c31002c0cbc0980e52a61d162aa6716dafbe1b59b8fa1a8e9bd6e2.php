<?php

/* SymfoProjectGitAdminBundle:Genre:list.html.twig */
class __TwigTemplate_efb31be7712b4549428c5dc7d978cf8dfd9dad12990c1785738f8cc4e365f093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SymfoProjectGitCinemaBundle:Film:layout.html.twig", "SymfoProjectGitAdminBundle:Genre:list.html.twig", 1);
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
        $__internal_f69582bf44ed10b39b63121ca01d6ffeefd93434b42102ca71f60d5c736b2c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f69582bf44ed10b39b63121ca01d6ffeefd93434b42102ca71f60d5c736b2c7c->enter($__internal_f69582bf44ed10b39b63121ca01d6ffeefd93434b42102ca71f60d5c736b2c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitAdminBundle:Genre:list.html.twig"));

        $__internal_50bc620b9a2c41416cdc78c746f7c350cd0e3b218152c5ba3981d51943550955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50bc620b9a2c41416cdc78c746f7c350cd0e3b218152c5ba3981d51943550955->enter($__internal_50bc620b9a2c41416cdc78c746f7c350cd0e3b218152c5ba3981d51943550955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitAdminBundle:Genre:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f69582bf44ed10b39b63121ca01d6ffeefd93434b42102ca71f60d5c736b2c7c->leave($__internal_f69582bf44ed10b39b63121ca01d6ffeefd93434b42102ca71f60d5c736b2c7c_prof);

        
        $__internal_50bc620b9a2c41416cdc78c746f7c350cd0e3b218152c5ba3981d51943550955->leave($__internal_50bc620b9a2c41416cdc78c746f7c350cd0e3b218152c5ba3981d51943550955_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ba77a2e14b7c52138968a0f7c7312683eac100010cd7643dfb52aa80b6a9898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba77a2e14b7c52138968a0f7c7312683eac100010cd7643dfb52aa80b6a9898->enter($__internal_3ba77a2e14b7c52138968a0f7c7312683eac100010cd7643dfb52aa80b6a9898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_639146dec53a762152a12f8841ab41819755bad4ec849bcdb73f4cb42b7e8198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639146dec53a762152a12f8841ab41819755bad4ec849bcdb73f4cb42b7e8198->enter($__internal_639146dec53a762152a12f8841ab41819755bad4ec849bcdb73f4cb42b7e8198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Liste des genres :</h1>
<ul>
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) ? $context["genres"] : $this->getContext($context, "genres")));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 6
            echo "    <li>
        <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_genre_modif", array("id" => $this->getAttribute($context["genre"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "nom", array()), "html", null, true);
            echo "</a>
        <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_genre_supprimer", array("id" => $this->getAttribute($context["genre"], "id", array()))), "html", null, true);
            echo "\">(x)</a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>
<a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_genre_ajout");
        echo "\">Ajouter</a>
";
        
        $__internal_639146dec53a762152a12f8841ab41819755bad4ec849bcdb73f4cb42b7e8198->leave($__internal_639146dec53a762152a12f8841ab41819755bad4ec849bcdb73f4cb42b7e8198_prof);

        
        $__internal_3ba77a2e14b7c52138968a0f7c7312683eac100010cd7643dfb52aa80b6a9898->leave($__internal_3ba77a2e14b7c52138968a0f7c7312683eac100010cd7643dfb52aa80b6a9898_prof);

    }

    public function getTemplateName()
    {
        return "SymfoProjectGitAdminBundle:Genre:list.html.twig";
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
<h1>Liste des genres :</h1>
<ul>
{% for genre in genres %}
    <li>
        <a href=\"{{ path('admin_genre_modif', {'id': genre.id}) }}\">{{ genre.nom }}</a>
        <a href=\"{{ path('admin_genre_supprimer', {'id': genre.id}) }}\">(x)</a>
    </li>
{% endfor %}
</ul>
<a href=\"{{ path('admin_genre_ajout') }}\">Ajouter</a>
{% endblock %}", "SymfoProjectGitAdminBundle:Genre:list.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/AdminBundle/Resources/views/Genre/list.html.twig");
    }
}
