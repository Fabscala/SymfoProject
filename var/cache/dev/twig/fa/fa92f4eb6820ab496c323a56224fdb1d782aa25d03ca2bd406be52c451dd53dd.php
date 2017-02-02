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
        $__internal_5fd94dca13133d48fce2320557c35b6bbb961f1aa3150fa4dcab1af84a0281d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fd94dca13133d48fce2320557c35b6bbb961f1aa3150fa4dcab1af84a0281d9->enter($__internal_5fd94dca13133d48fce2320557c35b6bbb961f1aa3150fa4dcab1af84a0281d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Realisateur:show.html.twig"));

        $__internal_bef0a247a74a1e2287ae31b9e9837bb0bd100dca55dc7cdfec17f89ae207b12a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef0a247a74a1e2287ae31b9e9837bb0bd100dca55dc7cdfec17f89ae207b12a->enter($__internal_bef0a247a74a1e2287ae31b9e9837bb0bd100dca55dc7cdfec17f89ae207b12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Realisateur:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fd94dca13133d48fce2320557c35b6bbb961f1aa3150fa4dcab1af84a0281d9->leave($__internal_5fd94dca13133d48fce2320557c35b6bbb961f1aa3150fa4dcab1af84a0281d9_prof);

        
        $__internal_bef0a247a74a1e2287ae31b9e9837bb0bd100dca55dc7cdfec17f89ae207b12a->leave($__internal_bef0a247a74a1e2287ae31b9e9837bb0bd100dca55dc7cdfec17f89ae207b12a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4e95fdbb1d91e6bc08ed5bf422b9a458190e9fbe9f6ab120a1752794eb51e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4e95fdbb1d91e6bc08ed5bf422b9a458190e9fbe9f6ab120a1752794eb51e3d->enter($__internal_f4e95fdbb1d91e6bc08ed5bf422b9a458190e9fbe9f6ab120a1752794eb51e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb7c468d76a0b871ad55ea98117b579b4269b4cb20ba4203ba2284d8541b6355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7c468d76a0b871ad55ea98117b579b4269b4cb20ba4203ba2284d8541b6355->enter($__internal_bb7c468d76a0b871ad55ea98117b579b4269b4cb20ba4203ba2284d8541b6355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "                    <div class=\"row\">
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
        ";
        
        $__internal_bb7c468d76a0b871ad55ea98117b579b4269b4cb20ba4203ba2284d8541b6355->leave($__internal_bb7c468d76a0b871ad55ea98117b579b4269b4cb20ba4203ba2284d8541b6355_prof);

        
        $__internal_f4e95fdbb1d91e6bc08ed5bf422b9a458190e9fbe9f6ab120a1752794eb51e3d->leave($__internal_f4e95fdbb1d91e6bc08ed5bf422b9a458190e9fbe9f6ab120a1752794eb51e3d_prof);

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
        return array (  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
        {% endblock %}", "SymfoProjectGitCinemaBundle:Realisateur:show.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/CinemaBundle/Resources/views/Realisateur/show.html.twig");
    }
}
