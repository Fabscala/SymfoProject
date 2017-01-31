<?php

/* SymfoProjectAdminBundle:Default:index.html.twig */
class __TwigTemplate_3e286f73d6385d841165535ad61e67a4befdd9fa3c57d1811036d9e7bc261d59 extends Twig_Template
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
        $__internal_0c203d70ecde45f20713398017fcd1664e53e9052a610cce1286aa413bdee0fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c203d70ecde45f20713398017fcd1664e53e9052a610cce1286aa413bdee0fb->enter($__internal_0c203d70ecde45f20713398017fcd1664e53e9052a610cce1286aa413bdee0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectAdminBundle:Default:index.html.twig"));

        $__internal_ff4b16cf597afb03ea529b86315e16be89acb1e4a0a2b3341152af0a72a5e557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff4b16cf597afb03ea529b86315e16be89acb1e4a0a2b3341152af0a72a5e557->enter($__internal_ff4b16cf597afb03ea529b86315e16be89acb1e4a0a2b3341152af0a72a5e557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectAdminBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_0c203d70ecde45f20713398017fcd1664e53e9052a610cce1286aa413bdee0fb->leave($__internal_0c203d70ecde45f20713398017fcd1664e53e9052a610cce1286aa413bdee0fb_prof);

        
        $__internal_ff4b16cf597afb03ea529b86315e16be89acb1e4a0a2b3341152af0a72a5e557->leave($__internal_ff4b16cf597afb03ea529b86315e16be89acb1e4a0a2b3341152af0a72a5e557_prof);

    }

    public function getTemplateName()
    {
        return "SymfoProjectAdminBundle:Default:index.html.twig";
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
", "SymfoProjectAdminBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/SymfoProject/src/SymfoProject/AdminBundle/Resources/views/Default/index.html.twig");
    }
}
