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
        $__internal_a9292fedf47c86af5ab9a9fea2c3f40b1418d5710e2c7126da3688cd1cc641db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9292fedf47c86af5ab9a9fea2c3f40b1418d5710e2c7126da3688cd1cc641db->enter($__internal_a9292fedf47c86af5ab9a9fea2c3f40b1418d5710e2c7126da3688cd1cc641db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Realisateur:list.html.twig"));

        $__internal_ccd76ed38dd51736bd961e366103130c0cf74216e817bbbd122b00162e78d25e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd76ed38dd51736bd961e366103130c0cf74216e817bbbd122b00162e78d25e->enter($__internal_ccd76ed38dd51736bd961e366103130c0cf74216e817bbbd122b00162e78d25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Realisateur:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9292fedf47c86af5ab9a9fea2c3f40b1418d5710e2c7126da3688cd1cc641db->leave($__internal_a9292fedf47c86af5ab9a9fea2c3f40b1418d5710e2c7126da3688cd1cc641db_prof);

        
        $__internal_ccd76ed38dd51736bd961e366103130c0cf74216e817bbbd122b00162e78d25e->leave($__internal_ccd76ed38dd51736bd961e366103130c0cf74216e817bbbd122b00162e78d25e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_47908d2768373e41916e30742892ef43d7db57dca60a45ec7ac1c39616ef34ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47908d2768373e41916e30742892ef43d7db57dca60a45ec7ac1c39616ef34ee->enter($__internal_47908d2768373e41916e30742892ef43d7db57dca60a45ec7ac1c39616ef34ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a2573b785e7b6f707ffc5cbae2d62802536427294d2c87fd74a61ca706931c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2573b785e7b6f707ffc5cbae2d62802536427294d2c87fd74a61ca706931c9->enter($__internal_1a2573b785e7b6f707ffc5cbae2d62802536427294d2c87fd74a61ca706931c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo " ";
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
\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-success\">Voir ses films</a>
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
        
        $__internal_1a2573b785e7b6f707ffc5cbae2d62802536427294d2c87fd74a61ca706931c9->leave($__internal_1a2573b785e7b6f707ffc5cbae2d62802536427294d2c87fd74a61ca706931c9_prof);

        
        $__internal_47908d2768373e41916e30742892ef43d7db57dca60a45ec7ac1c39616ef34ee->leave($__internal_47908d2768373e41916e30742892ef43d7db57dca60a45ec7ac1c39616ef34ee_prof);

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
        return array (  102 => 31,  89 => 24,  84 => 22,  78 => 21,  72 => 17,  68 => 16,  59 => 10,  55 => 9,  49 => 5,  40 => 4,  11 => 1,);
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
                            <strong>{{ realisateur.nom }} {{ realisateur.prenom }}</strong>               
                            <br>Date de Naissance : {{ realisateur.dateDeNaissance }}<br />
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t<p>{{ realisateur.description }}</p>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-success\">Voir ses films</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t    {% endfor %}


        {% endblock %}", "SymfoProjectGitCinemaBundle:Realisateur:list.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/CinemaBundle/Resources/views/Realisateur/list.html.twig");
    }
}
