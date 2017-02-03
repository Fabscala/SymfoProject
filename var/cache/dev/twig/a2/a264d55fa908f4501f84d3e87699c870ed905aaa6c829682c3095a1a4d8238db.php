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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SymfoProjectGitCinemaBundle:Film:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b84f79ab61fadffbdda6761a3055a9516d12e3a9801f06504ab10a2c65d8710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b84f79ab61fadffbdda6761a3055a9516d12e3a9801f06504ab10a2c65d8710->enter($__internal_9b84f79ab61fadffbdda6761a3055a9516d12e3a9801f06504ab10a2c65d8710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Film:list.html.twig"));

        $__internal_a4248cc5a780dc19efe32af48a83b45ed04e400cdf89e4cdca5fc47475f592e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4248cc5a780dc19efe32af48a83b45ed04e400cdf89e4cdca5fc47475f592e7->enter($__internal_a4248cc5a780dc19efe32af48a83b45ed04e400cdf89e4cdca5fc47475f592e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Film:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b84f79ab61fadffbdda6761a3055a9516d12e3a9801f06504ab10a2c65d8710->leave($__internal_9b84f79ab61fadffbdda6761a3055a9516d12e3a9801f06504ab10a2c65d8710_prof);

        
        $__internal_a4248cc5a780dc19efe32af48a83b45ed04e400cdf89e4cdca5fc47475f592e7->leave($__internal_a4248cc5a780dc19efe32af48a83b45ed04e400cdf89e4cdca5fc47475f592e7_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3dd62f62e66674cb81783f0da64b91d67512e37133a889b642e496ae0249a04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3dd62f62e66674cb81783f0da64b91d67512e37133a889b642e496ae0249a04->enter($__internal_a3dd62f62e66674cb81783f0da64b91d67512e37133a889b642e496ae0249a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ee9caee550e7bc6e72e30dfa025b2bb6a0b16f3d5c62b105bcb4bcc6ddbaf22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee9caee550e7bc6e72e30dfa025b2bb6a0b16f3d5c62b105bcb4bcc6ddbaf22->enter($__internal_1ee9caee550e7bc6e72e30dfa025b2bb6a0b16f3d5c62b105bcb4bcc6ddbaf22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "            <div class=\"row\">
                <div class=\"col-md-3\">
                    <p class=\"lead\">Cinéma</p>
                    <div class=\"list-group\">
                        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_films");
        echo "\" class=\"list-group-item active\">Films</a>
                        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_realisateurs");
        echo "\" class=\"list-group-item\">Réalisateurs</a>
                    </div>
                </div>
                    <h2>Liste des films</h2>
        <div class=\"col-md-9\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) ? $context["films"] : $this->getContext($context, "films")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 16
            echo "                    <br />
                    <div class=\"thumbnail\">
                        <div class=\"caption-full\">
                            <h4 class=\"pull-right\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "genre", array()), "html", null, true);
            echo "</h4>
                            <h4><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_film", array("id" => $this->getAttribute($context["film"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</a></h4>
                            <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "synopsis", array()), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"ratings\">
                            <p class=\"pull-right\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "getDate", array(), "method"), "html", null, true);
            echo "</p>
                            <p>Réalisé par : ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "realisateur", array()), "html", null, true);
            echo "</p>
                        </div>
                    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                </div>
            </div>
";
        
        $__internal_1ee9caee550e7bc6e72e30dfa025b2bb6a0b16f3d5c62b105bcb4bcc6ddbaf22->leave($__internal_1ee9caee550e7bc6e72e30dfa025b2bb6a0b16f3d5c62b105bcb4bcc6ddbaf22_prof);

        
        $__internal_a3dd62f62e66674cb81783f0da64b91d67512e37133a889b642e496ae0249a04->leave($__internal_a3dd62f62e66674cb81783f0da64b91d67512e37133a889b642e496ae0249a04_prof);

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
        return array (  106 => 29,  96 => 25,  92 => 24,  86 => 21,  80 => 20,  76 => 19,  71 => 16,  67 => 15,  59 => 10,  55 => 9,  49 => 5,  40 => 4,  11 => 1,);
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
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <p class=\"lead\">Cinéma</p>
                    <div class=\"list-group\">
                        <a href=\"{{ path('page_films')}}\" class=\"list-group-item active\">Films</a>
                        <a href=\"{{ path('page_realisateurs')}}\" class=\"list-group-item\">Réalisateurs</a>
                    </div>
                </div>
                    <h2>Liste des films</h2>
        <div class=\"col-md-9\">
    {% for film in films %}
                    <br />
                    <div class=\"thumbnail\">
                        <div class=\"caption-full\">
                            <h4 class=\"pull-right\">{{ film.genre }}</h4>
                            <h4><a href=\"{{ path('page_film', {'id': film.id}) }}\">{{ film.titre }}</a></h4>
                            <p>{{ film.synopsis }}</p>
                        </div>
                        <div class=\"ratings\">
                            <p class=\"pull-right\">{{ film.getDate() }}</p>
                            <p>Réalisé par : {{ film.realisateur }}</p>
                        </div>
                    </div>
    {% endfor %}
                </div>
            </div>
{% endblock %}", "SymfoProjectGitCinemaBundle:Film:list.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/CinemaBundle/Resources/views/Film/list.html.twig");
    }
}
