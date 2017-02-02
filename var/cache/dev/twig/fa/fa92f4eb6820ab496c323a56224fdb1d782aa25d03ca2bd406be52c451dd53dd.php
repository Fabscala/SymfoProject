<?php

/* SymfoProjectGitCinemaBundle:Realisateur:show.html.twig */
class __TwigTemplate_ee993e3c32e6288e4d6362bf92d23aa7fb084f1a22d586c577f097ea438737c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SymfoProjectGitCinemaBundle:Realisateur:layout.html.twig", "SymfoProjectGitCinemaBundle:Realisateur:show.html.twig", 1);
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
        $__internal_871ac2d9b885a163d88f34c0746ce01a910553d62e60df188668a8aa751536ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_871ac2d9b885a163d88f34c0746ce01a910553d62e60df188668a8aa751536ff->enter($__internal_871ac2d9b885a163d88f34c0746ce01a910553d62e60df188668a8aa751536ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Realisateur:show.html.twig"));

        $__internal_9802656977c9a3102e63116fe7762e8be1b400220fa6644e1f050904732c6910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9802656977c9a3102e63116fe7762e8be1b400220fa6644e1f050904732c6910->enter($__internal_9802656977c9a3102e63116fe7762e8be1b400220fa6644e1f050904732c6910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Realisateur:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_871ac2d9b885a163d88f34c0746ce01a910553d62e60df188668a8aa751536ff->leave($__internal_871ac2d9b885a163d88f34c0746ce01a910553d62e60df188668a8aa751536ff_prof);

        
        $__internal_9802656977c9a3102e63116fe7762e8be1b400220fa6644e1f050904732c6910->leave($__internal_9802656977c9a3102e63116fe7762e8be1b400220fa6644e1f050904732c6910_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfa10c12777ea24e85df6bf92b65137640919d24a359ce660cae322f81b5d529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfa10c12777ea24e85df6bf92b65137640919d24a359ce660cae322f81b5d529->enter($__internal_bfa10c12777ea24e85df6bf92b65137640919d24a359ce660cae322f81b5d529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f9fd4b5d08ffcc47efd391df6621ec9d98eb7e10a8b6f764067ab3c6b1b1669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f9fd4b5d08ffcc47efd391df6621ec9d98eb7e10a8b6f764067ab3c6b1b1669->enter($__internal_2f9fd4b5d08ffcc47efd391df6621ec9d98eb7e10a8b6f764067ab3c6b1b1669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "            <div class=\"row\">
                <div class=\"col-md-3\">
                    <p class=\"lead\">Cinéma</p>
                    <div class=\"list-group\">
                        <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_films");
        echo "\" class=\"list-group-item\">Films</a>
                        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_realisateurs");
        echo "\" class=\"list-group-item active\">Réalisateurs</a>
                    </div>
                </div>
                <div class=\"col-md-9\">
                \t
                    <div class=\"well\">
                            <strong>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["realisateurs"]) ? $context["realisateurs"] : $this->getContext($context, "realisateurs")), "nom", array()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["realisateurs"]) ? $context["realisateurs"] : $this->getContext($context, "realisateurs")), "prenom", array()), "html", null, true);
        echo "</strong>               
                            <p class=\"pull-right\">Date de Naissance : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["realisateurs"]) ? $context["realisateurs"] : $this->getContext($context, "realisateurs")), "dateDeNaissance", array()), "html", null, true);
        echo "</p><br />
                            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["realisateurs"]) ? $context["realisateurs"] : $this->getContext($context, "realisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["films"]) {
            // line 18
            echo "                            <br>Liste de ses Films : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["realisateurs"]) ? $context["realisateurs"] : $this->getContext($context, "realisateurs")), "films", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["films"], "titre", array()), "html", null, true);
            echo "<br />
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['films'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                \t</div>
                </div>
            </div>
        ";
        
        $__internal_2f9fd4b5d08ffcc47efd391df6621ec9d98eb7e10a8b6f764067ab3c6b1b1669->leave($__internal_2f9fd4b5d08ffcc47efd391df6621ec9d98eb7e10a8b6f764067ab3c6b1b1669_prof);

        
        $__internal_bfa10c12777ea24e85df6bf92b65137640919d24a359ce660cae322f81b5d529->leave($__internal_bfa10c12777ea24e85df6bf92b65137640919d24a359ce660cae322f81b5d529_prof);

    }

    public function getTemplateName()
    {
        return "SymfoProjectGitCinemaBundle:Realisateur:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 20,  82 => 18,  78 => 17,  74 => 16,  68 => 15,  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
                <div class=\"col-md-9\">
                \t
                    <div class=\"well\">
                            <strong>{{ realisateurs.nom }}  {{ realisateurs.prenom }}</strong>               
                            <p class=\"pull-right\">Date de Naissance : {{ realisateurs.dateDeNaissance }}</p><br />
                            {% for films in realisateurs %}
                            <br>Liste de ses Films : {{ realisateurs.films }}{{ films.titre }}<br />
                            {% endfor %}
                \t</div>
                </div>
            </div>
        {% endblock %}", "SymfoProjectGitCinemaBundle:Realisateur:show.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/CinemaBundle/Resources/views/Realisateur/show.html.twig");
    }
}
