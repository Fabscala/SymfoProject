<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_469bb03d78ae0ef4647fb4225132c5a3d32d7400988420ca5e95cd9d628e3bca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e93144d4769c50891a54fd8caa21a641583afa9c2b3f470114fd31b08c8e4714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e93144d4769c50891a54fd8caa21a641583afa9c2b3f470114fd31b08c8e4714->enter($__internal_e93144d4769c50891a54fd8caa21a641583afa9c2b3f470114fd31b08c8e4714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e90e82bb178cbb9ee6b35f227d94500bb346a85946e1308547cfb26f53ff1fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90e82bb178cbb9ee6b35f227d94500bb346a85946e1308547cfb26f53ff1fad->enter($__internal_e90e82bb178cbb9ee6b35f227d94500bb346a85946e1308547cfb26f53ff1fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e93144d4769c50891a54fd8caa21a641583afa9c2b3f470114fd31b08c8e4714->leave($__internal_e93144d4769c50891a54fd8caa21a641583afa9c2b3f470114fd31b08c8e4714_prof);

        
        $__internal_e90e82bb178cbb9ee6b35f227d94500bb346a85946e1308547cfb26f53ff1fad->leave($__internal_e90e82bb178cbb9ee6b35f227d94500bb346a85946e1308547cfb26f53ff1fad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2f3b83184fc396511e35cab753c5ac718c29684649b941a17a1dff569bb1fcde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f3b83184fc396511e35cab753c5ac718c29684649b941a17a1dff569bb1fcde->enter($__internal_2f3b83184fc396511e35cab753c5ac718c29684649b941a17a1dff569bb1fcde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6c37de66401fada6cd133466492aa6ebe25abc938f8f3d1dfb92d9796acd4c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c37de66401fada6cd133466492aa6ebe25abc938f8f3d1dfb92d9796acd4c22->enter($__internal_6c37de66401fada6cd133466492aa6ebe25abc938f8f3d1dfb92d9796acd4c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_6c37de66401fada6cd133466492aa6ebe25abc938f8f3d1dfb92d9796acd4c22->leave($__internal_6c37de66401fada6cd133466492aa6ebe25abc938f8f3d1dfb92d9796acd4c22_prof);

        
        $__internal_2f3b83184fc396511e35cab753c5ac718c29684649b941a17a1dff569bb1fcde->leave($__internal_2f3b83184fc396511e35cab753c5ac718c29684649b941a17a1dff569bb1fcde_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/SymfoProjectGit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
