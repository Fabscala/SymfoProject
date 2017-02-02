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
        $__internal_430d9568f2e44a50b5740e1b56d1ebb0e1de622ad8d0ee447f3e9aaedeebc3ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_430d9568f2e44a50b5740e1b56d1ebb0e1de622ad8d0ee447f3e9aaedeebc3ce->enter($__internal_430d9568f2e44a50b5740e1b56d1ebb0e1de622ad8d0ee447f3e9aaedeebc3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitAdminBundle:Genre:list.html.twig"));

        $__internal_084148d24c281c86368062be575073652d648ed3db512264bfd8176d60597dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084148d24c281c86368062be575073652d648ed3db512264bfd8176d60597dc9->enter($__internal_084148d24c281c86368062be575073652d648ed3db512264bfd8176d60597dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitAdminBundle:Genre:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_430d9568f2e44a50b5740e1b56d1ebb0e1de622ad8d0ee447f3e9aaedeebc3ce->leave($__internal_430d9568f2e44a50b5740e1b56d1ebb0e1de622ad8d0ee447f3e9aaedeebc3ce_prof);

        
        $__internal_084148d24c281c86368062be575073652d648ed3db512264bfd8176d60597dc9->leave($__internal_084148d24c281c86368062be575073652d648ed3db512264bfd8176d60597dc9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_11402c3c75745974f6f8bf38b67727a400b61c1ccdca5ad80390b1cd7cd0181e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11402c3c75745974f6f8bf38b67727a400b61c1ccdca5ad80390b1cd7cd0181e->enter($__internal_11402c3c75745974f6f8bf38b67727a400b61c1ccdca5ad80390b1cd7cd0181e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a4b03558d0180c0299643fb2ceba926104962cc6e01f89c20ed13f825300e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4b03558d0180c0299643fb2ceba926104962cc6e01f89c20ed13f825300e2e->enter($__internal_0a4b03558d0180c0299643fb2ceba926104962cc6e01f89c20ed13f825300e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Liste des genres :</h1> 
<ul>
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) ? $context["genres"] : $this->getContext($context, "genres")));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 6
            echo "<div class =\"well\">
    <li>
        <strong><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_genre_modif", array("id" => $this->getAttribute($context["genre"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "nom", array()), "html", null, true);
            echo "</a><strong>
        <div class=\"pull-right\"><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_genre_supprimer", array("id" => $this->getAttribute($context["genre"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></div>
    </li>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>
<a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_genre_ajout");
        echo "\">Ajouter</a>
";
        
        $__internal_0a4b03558d0180c0299643fb2ceba926104962cc6e01f89c20ed13f825300e2e->leave($__internal_0a4b03558d0180c0299643fb2ceba926104962cc6e01f89c20ed13f825300e2e_prof);

        
        $__internal_11402c3c75745974f6f8bf38b67727a400b61c1ccdca5ad80390b1cd7cd0181e->leave($__internal_11402c3c75745974f6f8bf38b67727a400b61c1ccdca5ad80390b1cd7cd0181e_prof);

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
<h1>Liste des genres :</h1> 
<ul>
{% for genre in genres %}
<div class =\"well\">
    <li>
        <strong><a href=\"{{ path('admin_genre_modif', {'id': genre.id}) }}\">{{ genre.nom }}</a><strong>
        <div class=\"pull-right\"><a href=\"{{ path('admin_genre_supprimer', {'id': genre.id}) }}\">Supprimer</a></div>
    </li>
</div>
{% endfor %}
</ul>
<a href=\"{{ path('admin_genre_ajout') }}\">Ajouter</a>
{% endblock %}
", "SymfoProjectGitAdminBundle:Genre:list.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/AdminBundle/Resources/views/Genre/list.html.twig");
    }
}
