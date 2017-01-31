<?php

/* SymfoProjectGitAdminBundle:Default:index.html.twig */
class __TwigTemplate_e7b3960b3a83dfe84356b0a9bf1696b27ca00377b6647c25fd6b43c8c6895238 extends Twig_Template
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
        $__internal_ed78306e34ffe7743e3f93fff23f14096c46b0ce0bfe6eaaed73eb0626f26f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed78306e34ffe7743e3f93fff23f14096c46b0ce0bfe6eaaed73eb0626f26f8e->enter($__internal_ed78306e34ffe7743e3f93fff23f14096c46b0ce0bfe6eaaed73eb0626f26f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitAdminBundle:Default:index.html.twig"));

        $__internal_a08a2b8fca93167bed32a17233a5956725cc819d0659b7076caad5c3df13ed39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08a2b8fca93167bed32a17233a5956725cc819d0659b7076caad5c3df13ed39->enter($__internal_a08a2b8fca93167bed32a17233a5956725cc819d0659b7076caad5c3df13ed39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitAdminBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_ed78306e34ffe7743e3f93fff23f14096c46b0ce0bfe6eaaed73eb0626f26f8e->leave($__internal_ed78306e34ffe7743e3f93fff23f14096c46b0ce0bfe6eaaed73eb0626f26f8e_prof);

        
        $__internal_a08a2b8fca93167bed32a17233a5956725cc819d0659b7076caad5c3df13ed39->leave($__internal_a08a2b8fca93167bed32a17233a5956725cc819d0659b7076caad5c3df13ed39_prof);

    }

    public function getTemplateName()
    {
        return "SymfoProjectGitAdminBundle:Default:index.html.twig";
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
", "SymfoProjectGitAdminBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/AdminBundle/Resources/views/Default/index.html.twig");
    }
}
