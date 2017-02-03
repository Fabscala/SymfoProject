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
        $__internal_1c24cdabd58630cf89e9149c6363ad71c094740fd1e997bc1cfac1f102d4ad79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c24cdabd58630cf89e9149c6363ad71c094740fd1e997bc1cfac1f102d4ad79->enter($__internal_1c24cdabd58630cf89e9149c6363ad71c094740fd1e997bc1cfac1f102d4ad79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Realisateur:show.html.twig"));

        $__internal_accfcebde69886817e9ede33998b33a904934d744214601e5ac7957db0c17121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_accfcebde69886817e9ede33998b33a904934d744214601e5ac7957db0c17121->enter($__internal_accfcebde69886817e9ede33998b33a904934d744214601e5ac7957db0c17121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Realisateur:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c24cdabd58630cf89e9149c6363ad71c094740fd1e997bc1cfac1f102d4ad79->leave($__internal_1c24cdabd58630cf89e9149c6363ad71c094740fd1e997bc1cfac1f102d4ad79_prof);

        
        $__internal_accfcebde69886817e9ede33998b33a904934d744214601e5ac7957db0c17121->leave($__internal_accfcebde69886817e9ede33998b33a904934d744214601e5ac7957db0c17121_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d0f1298bbe5b88d0bfc29cd5f78d4544c43ec48de1ef7f2a1cf2c78145ce573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d0f1298bbe5b88d0bfc29cd5f78d4544c43ec48de1ef7f2a1cf2c78145ce573->enter($__internal_4d0f1298bbe5b88d0bfc29cd5f78d4544c43ec48de1ef7f2a1cf2c78145ce573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bfc8de4a25ef4f7dbf8455b18a162b78d3fc7a2e8d8a93469ccf5d994a7c916b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc8de4a25ef4f7dbf8455b18a162b78d3fc7a2e8d8a93469ccf5d994a7c916b->enter($__internal_bfc8de4a25ef4f7dbf8455b18a162b78d3fc7a2e8d8a93469ccf5d994a7c916b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <div class=\"well\">
                            <strong>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["realisateurs"]) ? $context["realisateurs"] : $this->getContext($context, "realisateurs")), "nom", array()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["realisateurs"]) ? $context["realisateurs"] : $this->getContext($context, "realisateurs")), "prenom", array()), "html", null, true);
        echo "</strong>               
                            <p class=\"pull-right\">Date de Naissance : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["realisateurs"]) ? $context["realisateurs"] : $this->getContext($context, "realisateurs")), "dateDeNaissance", array()), "html", null, true);
        echo "</p><br />
                            <br>Liste de ses Films :<br />
                            <br>
                            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) ? $context["films"] : $this->getContext($context, "films")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 19
            echo "                                <div class=\"thumbnail\">
                                    <div class=\"caption-full\">
                                        <h4 class=\"pull-right\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "genre", array()), "html", null, true);
            echo "</h4>
                                        <h4>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</h4>
                                        <p>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "synopsis", array()), "html", null, true);
            echo "</p>
                                    </div>
                                <div class=\"ratings\">
                                    <p class=\"pull-right\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "getDate", array(), "method"), "html", null, true);
            echo "</p>
                                    <br>    
                                </div>
                    </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
                </div>
            </div>
            </div>
        ";
        
        $__internal_bfc8de4a25ef4f7dbf8455b18a162b78d3fc7a2e8d8a93469ccf5d994a7c916b->leave($__internal_bfc8de4a25ef4f7dbf8455b18a162b78d3fc7a2e8d8a93469ccf5d994a7c916b_prof);

        
        $__internal_4d0f1298bbe5b88d0bfc29cd5f78d4544c43ec48de1ef7f2a1cf2c78145ce573->leave($__internal_4d0f1298bbe5b88d0bfc29cd5f78d4544c43ec48de1ef7f2a1cf2c78145ce573_prof);

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
        return array (  112 => 31,  101 => 26,  95 => 23,  91 => 22,  87 => 21,  83 => 19,  79 => 18,  73 => 15,  67 => 14,  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
                    <div class=\"well\">
                            <strong>{{ realisateurs.nom }}  {{ realisateurs.prenom }}</strong>               
                            <p class=\"pull-right\">Date de Naissance : {{ realisateurs.dateDeNaissance }}</p><br />
                            <br>Liste de ses Films :<br />
                            <br>
                            {% for film in films %}
                                <div class=\"thumbnail\">
                                    <div class=\"caption-full\">
                                        <h4 class=\"pull-right\">{{ film.genre }}</h4>
                                        <h4>{{ film.titre }}</h4>
                                        <p>{{ film.synopsis }}</p>
                                    </div>
                                <div class=\"ratings\">
                                    <p class=\"pull-right\">{{ film.getDate() }}</p>
                                    <br>    
                                </div>
                    </div>
                            {% endfor %}

                </div>
            </div>
            </div>
        {% endblock %}", "SymfoProjectGitCinemaBundle:Realisateur:show.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/CinemaBundle/Resources/views/Realisateur/show.html.twig");
    }
}
