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
        $__internal_8544ea2a3e072440c4e44dfe7f39c3b29b9e3c240b654cc79d3997b2c5f780a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8544ea2a3e072440c4e44dfe7f39c3b29b9e3c240b654cc79d3997b2c5f780a7->enter($__internal_8544ea2a3e072440c4e44dfe7f39c3b29b9e3c240b654cc79d3997b2c5f780a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitAdminBundle:Film:list.html.twig"));

        $__internal_e44407448e5c46afd19b4e5bc07bf7b88fc7e9c6805f0851f2456ee116655515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44407448e5c46afd19b4e5bc07bf7b88fc7e9c6805f0851f2456ee116655515->enter($__internal_e44407448e5c46afd19b4e5bc07bf7b88fc7e9c6805f0851f2456ee116655515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitAdminBundle:Film:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8544ea2a3e072440c4e44dfe7f39c3b29b9e3c240b654cc79d3997b2c5f780a7->leave($__internal_8544ea2a3e072440c4e44dfe7f39c3b29b9e3c240b654cc79d3997b2c5f780a7_prof);

        
        $__internal_e44407448e5c46afd19b4e5bc07bf7b88fc7e9c6805f0851f2456ee116655515->leave($__internal_e44407448e5c46afd19b4e5bc07bf7b88fc7e9c6805f0851f2456ee116655515_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_fff633ebfecb15245fa11265cd4ff825c5764d7ffdcaf668f931fb2ce690577a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fff633ebfecb15245fa11265cd4ff825c5764d7ffdcaf668f931fb2ce690577a->enter($__internal_fff633ebfecb15245fa11265cd4ff825c5764d7ffdcaf668f931fb2ce690577a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fe7b25ac9f8158b301627738de4fde83aca58b848da94418ce87a1467905a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe7b25ac9f8158b301627738de4fde83aca58b848da94418ce87a1467905a39->enter($__internal_9fe7b25ac9f8158b301627738de4fde83aca58b848da94418ce87a1467905a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Liste des films :</h1>
<ul>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) ? $context["films"] : $this->getContext($context, "films")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 6
            echo "    <div class =\"well\">
        <li>
            <strong><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_film_modif", array("id" => $this->getAttribute($context["film"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</a><strong>
            <div class=\"pull-right\"><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_film_supprimer", array("id" => $this->getAttribute($context["film"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></div>
        </li>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>
<a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_film_ajout");
        echo "\">Ajouter</a>
";
        
        $__internal_9fe7b25ac9f8158b301627738de4fde83aca58b848da94418ce87a1467905a39->leave($__internal_9fe7b25ac9f8158b301627738de4fde83aca58b848da94418ce87a1467905a39_prof);

        
        $__internal_fff633ebfecb15245fa11265cd4ff825c5764d7ffdcaf668f931fb2ce690577a->leave($__internal_fff633ebfecb15245fa11265cd4ff825c5764d7ffdcaf668f931fb2ce690577a_prof);

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
<h1>Liste des films :</h1>
<ul>
    {% for film in films %}
    <div class =\"well\">
        <li>
            <strong><a href=\"{{ path('admin_film_modif', {'id': film.id}) }}\">{{ film.titre }}</a><strong>
            <div class=\"pull-right\"><a href=\"{{ path('admin_film_supprimer', {'id': film.id}) }}\">Supprimer</a></div>
        </li>
    </div>
    {% endfor %}
</ul>
<a href=\"{{ path('admin_film_ajout') }}\">Ajouter</a>
{% endblock %}", "SymfoProjectGitAdminBundle:Film:list.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/AdminBundle/Resources/views/Film/list.html.twig");
    }
}
