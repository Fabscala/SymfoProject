<?php

/* SymfoProjectGitCinemaBundle:Default:index.html.twig */
class __TwigTemplate_215e74b96de346a6c6b31ceda36f6c793c93c9c12110eb2a4451d437255a9dfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a66b2caaa53e25c0d8979b8e747c37454e7b305be8f73ab7226273244898542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a66b2caaa53e25c0d8979b8e747c37454e7b305be8f73ab7226273244898542->enter($__internal_9a66b2caaa53e25c0d8979b8e747c37454e7b305be8f73ab7226273244898542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Default:index.html.twig"));

        $__internal_fdd748871dae027f68490501ddd105a9e7395b638da916d167293abfb214c948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd748871dae027f68490501ddd105a9e7395b638da916d167293abfb214c948->enter($__internal_fdd748871dae027f68490501ddd105a9e7395b638da916d167293abfb214c948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_9a66b2caaa53e25c0d8979b8e747c37454e7b305be8f73ab7226273244898542->leave($__internal_9a66b2caaa53e25c0d8979b8e747c37454e7b305be8f73ab7226273244898542_prof);

        
        $__internal_fdd748871dae027f68490501ddd105a9e7395b638da916d167293abfb214c948->leave($__internal_fdd748871dae027f68490501ddd105a9e7395b638da916d167293abfb214c948_prof);

    }

    public function getTemplateName()
    {
        return "SymfoProjectGitCinemaBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "SymfoProjectGitCinemaBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/CinemaBundle/Resources/views/Default/index.html.twig");
    }
}
