<?php

/* base.html.twig */
class __TwigTemplate_46ec375f9412574a4b1648f4d27c7e0c4c3693fb4dba3003e23cdbf45b02ddb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c3564c9746a40d43d874f2e965428ee3c970746380423da03ad8f2e3bde76fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c3564c9746a40d43d874f2e965428ee3c970746380423da03ad8f2e3bde76fc->enter($__internal_5c3564c9746a40d43d874f2e965428ee3c970746380423da03ad8f2e3bde76fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_37dfecc2072be87c928a2ebf17113d258b40bf1262efffa7521455982e681f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37dfecc2072be87c928a2ebf17113d258b40bf1262efffa7521455982e681f4c->enter($__internal_37dfecc2072be87c928a2ebf17113d258b40bf1262efffa7521455982e681f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5c3564c9746a40d43d874f2e965428ee3c970746380423da03ad8f2e3bde76fc->leave($__internal_5c3564c9746a40d43d874f2e965428ee3c970746380423da03ad8f2e3bde76fc_prof);

        
        $__internal_37dfecc2072be87c928a2ebf17113d258b40bf1262efffa7521455982e681f4c->leave($__internal_37dfecc2072be87c928a2ebf17113d258b40bf1262efffa7521455982e681f4c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4acdf08655af7d2bb9f9098d961b0fa16522e1b114a18b1c757300ca50b77fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4acdf08655af7d2bb9f9098d961b0fa16522e1b114a18b1c757300ca50b77fec->enter($__internal_4acdf08655af7d2bb9f9098d961b0fa16522e1b114a18b1c757300ca50b77fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5af2917bf1877370add2ece109f04d2417e65abc621af243e3f6bcf9e794abc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af2917bf1877370add2ece109f04d2417e65abc621af243e3f6bcf9e794abc3->enter($__internal_5af2917bf1877370add2ece109f04d2417e65abc621af243e3f6bcf9e794abc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5af2917bf1877370add2ece109f04d2417e65abc621af243e3f6bcf9e794abc3->leave($__internal_5af2917bf1877370add2ece109f04d2417e65abc621af243e3f6bcf9e794abc3_prof);

        
        $__internal_4acdf08655af7d2bb9f9098d961b0fa16522e1b114a18b1c757300ca50b77fec->leave($__internal_4acdf08655af7d2bb9f9098d961b0fa16522e1b114a18b1c757300ca50b77fec_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e19af666f8472ee982f3e5176d31405e16ddcfba8dd50cf9abc6e80f159ff7ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e19af666f8472ee982f3e5176d31405e16ddcfba8dd50cf9abc6e80f159ff7ca->enter($__internal_e19af666f8472ee982f3e5176d31405e16ddcfba8dd50cf9abc6e80f159ff7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_422affaa67f6b48b06e62b51307cc13a9afe802e47a6efe90ae4a0358de583a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_422affaa67f6b48b06e62b51307cc13a9afe802e47a6efe90ae4a0358de583a1->enter($__internal_422affaa67f6b48b06e62b51307cc13a9afe802e47a6efe90ae4a0358de583a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_422affaa67f6b48b06e62b51307cc13a9afe802e47a6efe90ae4a0358de583a1->leave($__internal_422affaa67f6b48b06e62b51307cc13a9afe802e47a6efe90ae4a0358de583a1_prof);

        
        $__internal_e19af666f8472ee982f3e5176d31405e16ddcfba8dd50cf9abc6e80f159ff7ca->leave($__internal_e19af666f8472ee982f3e5176d31405e16ddcfba8dd50cf9abc6e80f159ff7ca_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_441500209377e859a26ac2e86c0d4e3577b021f0ecffbe1f2b30921af999908b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_441500209377e859a26ac2e86c0d4e3577b021f0ecffbe1f2b30921af999908b->enter($__internal_441500209377e859a26ac2e86c0d4e3577b021f0ecffbe1f2b30921af999908b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ebbdf5e6dc3c8ff57e57dd49bda2d9449a7c8e492a532947c13967b92e53287c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebbdf5e6dc3c8ff57e57dd49bda2d9449a7c8e492a532947c13967b92e53287c->enter($__internal_ebbdf5e6dc3c8ff57e57dd49bda2d9449a7c8e492a532947c13967b92e53287c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ebbdf5e6dc3c8ff57e57dd49bda2d9449a7c8e492a532947c13967b92e53287c->leave($__internal_ebbdf5e6dc3c8ff57e57dd49bda2d9449a7c8e492a532947c13967b92e53287c_prof);

        
        $__internal_441500209377e859a26ac2e86c0d4e3577b021f0ecffbe1f2b30921af999908b->leave($__internal_441500209377e859a26ac2e86c0d4e3577b021f0ecffbe1f2b30921af999908b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc27ad6bc92f205dec73839555b1f57b93ad7f94767733ef7c14663596ff4850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc27ad6bc92f205dec73839555b1f57b93ad7f94767733ef7c14663596ff4850->enter($__internal_fc27ad6bc92f205dec73839555b1f57b93ad7f94767733ef7c14663596ff4850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_14403ecfc4c819eafd9d279dbe3b52208aec845b52b9a3805103e991c70acc0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14403ecfc4c819eafd9d279dbe3b52208aec845b52b9a3805103e991c70acc0c->enter($__internal_14403ecfc4c819eafd9d279dbe3b52208aec845b52b9a3805103e991c70acc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_14403ecfc4c819eafd9d279dbe3b52208aec845b52b9a3805103e991c70acc0c->leave($__internal_14403ecfc4c819eafd9d279dbe3b52208aec845b52b9a3805103e991c70acc0c_prof);

        
        $__internal_fc27ad6bc92f205dec73839555b1f57b93ad7f94767733ef7c14663596ff4850->leave($__internal_fc27ad6bc92f205dec73839555b1f57b93ad7f94767733ef7c14663596ff4850_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/SymfoProjectGit/app/Resources/views/base.html.twig");
    }
}
