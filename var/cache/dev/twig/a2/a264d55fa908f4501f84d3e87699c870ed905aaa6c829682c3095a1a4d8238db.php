<?php

/* SymfoProjectGitCinemaBundle:Film:list.html.twig */
class __TwigTemplate_572fc0aea43a5d421c6cc3a4aeff2be6e1f00e0699a6cdefe43693f6dd869c22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SymfoProjectGitCinemaBundle:Film:layout.html.twig", "SymfoProjectGitCinemaBundle:Film:list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SymfoProjectGitCinemaBundle:Film:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f6def813aa149e2fbaa32819032d9ceffb803543d8afa568fa0b994fa745122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f6def813aa149e2fbaa32819032d9ceffb803543d8afa568fa0b994fa745122->enter($__internal_8f6def813aa149e2fbaa32819032d9ceffb803543d8afa568fa0b994fa745122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Film:list.html.twig"));

        $__internal_97d9c08fc178745b21a84bc2c5f1f38a25d56667ed5bb06b931677af19abeeae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97d9c08fc178745b21a84bc2c5f1f38a25d56667ed5bb06b931677af19abeeae->enter($__internal_97d9c08fc178745b21a84bc2c5f1f38a25d56667ed5bb06b931677af19abeeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Film:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f6def813aa149e2fbaa32819032d9ceffb803543d8afa568fa0b994fa745122->leave($__internal_8f6def813aa149e2fbaa32819032d9ceffb803543d8afa568fa0b994fa745122_prof);

        
        $__internal_97d9c08fc178745b21a84bc2c5f1f38a25d56667ed5bb06b931677af19abeeae->leave($__internal_97d9c08fc178745b21a84bc2c5f1f38a25d56667ed5bb06b931677af19abeeae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4a2ca010824f62834fefd5a55e0e254d1a2f8294ed1c9015c1ffa5fb623962b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a2ca010824f62834fefd5a55e0e254d1a2f8294ed1c9015c1ffa5fb623962b->enter($__internal_b4a2ca010824f62834fefd5a55e0e254d1a2f8294ed1c9015c1ffa5fb623962b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_779a1d1bc0299575fa29eb24a4e6b2e5caf98eed2c9033d02510e39d10e5c282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_779a1d1bc0299575fa29eb24a4e6b2e5caf98eed2c9033d02510e39d10e5c282->enter($__internal_779a1d1bc0299575fa29eb24a4e6b2e5caf98eed2c9033d02510e39d10e5c282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des Films";
        
        $__internal_779a1d1bc0299575fa29eb24a4e6b2e5caf98eed2c9033d02510e39d10e5c282->leave($__internal_779a1d1bc0299575fa29eb24a4e6b2e5caf98eed2c9033d02510e39d10e5c282_prof);

        
        $__internal_b4a2ca010824f62834fefd5a55e0e254d1a2f8294ed1c9015c1ffa5fb623962b->leave($__internal_b4a2ca010824f62834fefd5a55e0e254d1a2f8294ed1c9015c1ffa5fb623962b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c4bb82274051d3e46cd99b116a65c693028679bb4e87c639429e676e0d2e825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4bb82274051d3e46cd99b116a65c693028679bb4e87c639429e676e0d2e825->enter($__internal_6c4bb82274051d3e46cd99b116a65c693028679bb4e87c639429e676e0d2e825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c3ebd1290907e36646a1961371dc80e9aabff024b1f5016ed9fc238457f50ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ebd1290907e36646a1961371dc80e9aabff024b1f5016ed9fc238457f50ebb->enter($__internal_c3ebd1290907e36646a1961371dc80e9aabff024b1f5016ed9fc238457f50ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <p class=\"lead\">Cinéma</p>
                    <div class=\"list-group\">
                        <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_films");
        echo "'\" class=\"list-group-item active\">Films</a>
                        <a href=\"c\" class=\"list-group-item\">Réalisateurs</a>
                    </div>
                </div>
                    <h2>Liste des films</h2>
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) ? $context["films"] : $this->getContext($context, "films")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 18
            echo "        <div class=\"col-md-9\">
                    <br />
                    <div class=\"thumbnail\">
                        <div class=\"caption-full\">
                            <h4 class=\"pull-right\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</h4>
                            <h4><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_films", array("id" => $this->getAttribute($context["film"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</a></h4>
                            <p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "synopsis", array()), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"ratings\">
                            <p class=\"pull-right\">sorti le :";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</p>
                            <p>Réalisé par : <a href=\"\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</a></p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c3ebd1290907e36646a1961371dc80e9aabff024b1f5016ed9fc238457f50ebb->leave($__internal_c3ebd1290907e36646a1961371dc80e9aabff024b1f5016ed9fc238457f50ebb_prof);

        
        $__internal_6c4bb82274051d3e46cd99b116a65c693028679bb4e87c639429e676e0d2e825->leave($__internal_6c4bb82274051d3e46cd99b116a65c693028679bb4e87c639429e676e0d2e825_prof);

    }

    public function getTemplateName()
    {
        return "SymfoProjectGitCinemaBundle:Film:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 28,  110 => 27,  104 => 24,  98 => 23,  94 => 22,  88 => 18,  84 => 17,  76 => 12,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

    {% block title %}Liste des Films{% endblock %}

        {% block body %}

    <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <p class=\"lead\">Cinéma</p>
                    <div class=\"list-group\">
                        <a href=\"{{ path('page_films')}}'\" class=\"list-group-item active\">Films</a>
                        <a href=\"c\" class=\"list-group-item\">Réalisateurs</a>
                    </div>
                </div>
                    <h2>Liste des films</h2>
    {% for film in films %}
        <div class=\"col-md-9\">
                    <br />
                    <div class=\"thumbnail\">
                        <div class=\"caption-full\">
                            <h4 class=\"pull-right\">{{ film.titre }}</h4>
                            <h4><a href=\"{{ path('page_films', {'id': film.id}) }}\">{{ film.titre }}</a></h4>
                            <p>{{ film.synopsis }}</p>
                        </div>
                        <div class=\"ratings\">
                            <p class=\"pull-right\">sorti le :{{ film.titre }}</p>
                            <p>Réalisé par : <a href=\"\">{{ film.titre }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    {% endfor %}
{% endblock %}", "SymfoProjectGitCinemaBundle:Film:list.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/CinemaBundle/Resources/views/Film/list.html.twig");
    }
}
