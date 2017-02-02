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
        $__internal_0bceab0a0ae20047259c2109025b397e2f542b5b2794ee4acc048e84176dee7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bceab0a0ae20047259c2109025b397e2f542b5b2794ee4acc048e84176dee7a->enter($__internal_0bceab0a0ae20047259c2109025b397e2f542b5b2794ee4acc048e84176dee7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Realisateur:list.html.twig"));

        $__internal_dbd88b1ea6ea06f0eb7692dff4543621501b60188969b12a6bfb30ef22793ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd88b1ea6ea06f0eb7692dff4543621501b60188969b12a6bfb30ef22793ac3->enter($__internal_dbd88b1ea6ea06f0eb7692dff4543621501b60188969b12a6bfb30ef22793ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Realisateur:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bceab0a0ae20047259c2109025b397e2f542b5b2794ee4acc048e84176dee7a->leave($__internal_0bceab0a0ae20047259c2109025b397e2f542b5b2794ee4acc048e84176dee7a_prof);

        
        $__internal_dbd88b1ea6ea06f0eb7692dff4543621501b60188969b12a6bfb30ef22793ac3->leave($__internal_dbd88b1ea6ea06f0eb7692dff4543621501b60188969b12a6bfb30ef22793ac3_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_562d9bc83aa4bafe08bcf33aeb56b81a9b734995700b70f8c93930e000c64a47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562d9bc83aa4bafe08bcf33aeb56b81a9b734995700b70f8c93930e000c64a47->enter($__internal_562d9bc83aa4bafe08bcf33aeb56b81a9b734995700b70f8c93930e000c64a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4107bd07d41402a93156b0152670d9f9b432e094b459e33730d8eab4c24585a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4107bd07d41402a93156b0152670d9f9b432e094b459e33730d8eab4c24585a->enter($__internal_d4107bd07d41402a93156b0152670d9f9b432e094b459e33730d8eab4c24585a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "

        ";
        
        $__internal_d4107bd07d41402a93156b0152670d9f9b432e094b459e33730d8eab4c24585a->leave($__internal_d4107bd07d41402a93156b0152670d9f9b432e094b459e33730d8eab4c24585a_prof);

        
        $__internal_562d9bc83aa4bafe08bcf33aeb56b81a9b734995700b70f8c93930e000c64a47->leave($__internal_562d9bc83aa4bafe08bcf33aeb56b81a9b734995700b70f8c93930e000c64a47_prof);

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
        return array (  104 => 31,  94 => 27,  88 => 24,  83 => 22,  78 => 21,  72 => 17,  68 => 16,  59 => 10,  55 => 9,  49 => 5,  40 => 4,  11 => 1,);
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
                            <strong>{{ realisateur.nom }}{{ realisateur.prenom }}</strong>               
                            <br>Date de Naissance : {{ realisateur.dateDeNaissance }}<br />
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t<p>{{ realisateur.description }}</p>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('page_realisateur', {'id': realisateur.id}) }}\" class=\"btn btn-success\">Voir ses films</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t    {% endfor %}


        {% endblock %}", "SymfoProjectGitCinemaBundle:Realisateur:list.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/CinemaBundle/Resources/views/Realisateur/list.html.twig");
    }
}
