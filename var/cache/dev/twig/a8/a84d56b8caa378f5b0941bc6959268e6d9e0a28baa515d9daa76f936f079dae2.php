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
        $__internal_3b0bb781f31eecc73bb478af1cc26f14d6e893b582d7611061b6a4cdc8aa7396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b0bb781f31eecc73bb478af1cc26f14d6e893b582d7611061b6a4cdc8aa7396->enter($__internal_3b0bb781f31eecc73bb478af1cc26f14d6e893b582d7611061b6a4cdc8aa7396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b5200254b2d65be460f69affe2ae55bc0fe67687f18be40e9414ac5402bd3bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5200254b2d65be460f69affe2ae55bc0fe67687f18be40e9414ac5402bd3bc0->enter($__internal_b5200254b2d65be460f69affe2ae55bc0fe67687f18be40e9414ac5402bd3bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3b0bb781f31eecc73bb478af1cc26f14d6e893b582d7611061b6a4cdc8aa7396->leave($__internal_3b0bb781f31eecc73bb478af1cc26f14d6e893b582d7611061b6a4cdc8aa7396_prof);

        
        $__internal_b5200254b2d65be460f69affe2ae55bc0fe67687f18be40e9414ac5402bd3bc0->leave($__internal_b5200254b2d65be460f69affe2ae55bc0fe67687f18be40e9414ac5402bd3bc0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_970fdb3d97636235d2d0031d4b74d040d7b707cef921517d292bd95d1099e3a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_970fdb3d97636235d2d0031d4b74d040d7b707cef921517d292bd95d1099e3a5->enter($__internal_970fdb3d97636235d2d0031d4b74d040d7b707cef921517d292bd95d1099e3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_938bd9ba50169aac2ca44823edd3f185efb40643d36b30299a7f4addd9938dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938bd9ba50169aac2ca44823edd3f185efb40643d36b30299a7f4addd9938dc9->enter($__internal_938bd9ba50169aac2ca44823edd3f185efb40643d36b30299a7f4addd9938dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_938bd9ba50169aac2ca44823edd3f185efb40643d36b30299a7f4addd9938dc9->leave($__internal_938bd9ba50169aac2ca44823edd3f185efb40643d36b30299a7f4addd9938dc9_prof);

        
        $__internal_970fdb3d97636235d2d0031d4b74d040d7b707cef921517d292bd95d1099e3a5->leave($__internal_970fdb3d97636235d2d0031d4b74d040d7b707cef921517d292bd95d1099e3a5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a9c6217081e78019ac1bf66a295bfaac97362c6a64ace8ae9da6d7305310d825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9c6217081e78019ac1bf66a295bfaac97362c6a64ace8ae9da6d7305310d825->enter($__internal_a9c6217081e78019ac1bf66a295bfaac97362c6a64ace8ae9da6d7305310d825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0a451d820c5e67a138c15f69f89f8143b7f77caafaf0d133447dd0f32d3eef96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a451d820c5e67a138c15f69f89f8143b7f77caafaf0d133447dd0f32d3eef96->enter($__internal_0a451d820c5e67a138c15f69f89f8143b7f77caafaf0d133447dd0f32d3eef96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0a451d820c5e67a138c15f69f89f8143b7f77caafaf0d133447dd0f32d3eef96->leave($__internal_0a451d820c5e67a138c15f69f89f8143b7f77caafaf0d133447dd0f32d3eef96_prof);

        
        $__internal_a9c6217081e78019ac1bf66a295bfaac97362c6a64ace8ae9da6d7305310d825->leave($__internal_a9c6217081e78019ac1bf66a295bfaac97362c6a64ace8ae9da6d7305310d825_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_05ff2faab6bf9f200a4837990f788978ea458d7679dc15d6e9d51b5c749356b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05ff2faab6bf9f200a4837990f788978ea458d7679dc15d6e9d51b5c749356b4->enter($__internal_05ff2faab6bf9f200a4837990f788978ea458d7679dc15d6e9d51b5c749356b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a595e90c11d94ae5c3fef382de94436eef8e02f3321d8d16f7d1d12328da0e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a595e90c11d94ae5c3fef382de94436eef8e02f3321d8d16f7d1d12328da0e3->enter($__internal_4a595e90c11d94ae5c3fef382de94436eef8e02f3321d8d16f7d1d12328da0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4a595e90c11d94ae5c3fef382de94436eef8e02f3321d8d16f7d1d12328da0e3->leave($__internal_4a595e90c11d94ae5c3fef382de94436eef8e02f3321d8d16f7d1d12328da0e3_prof);

        
        $__internal_05ff2faab6bf9f200a4837990f788978ea458d7679dc15d6e9d51b5c749356b4->leave($__internal_05ff2faab6bf9f200a4837990f788978ea458d7679dc15d6e9d51b5c749356b4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1287b19cda2aa5abecef35cf3c9b91741d06c2a784f5a61ecbe2683e1cbf2a1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1287b19cda2aa5abecef35cf3c9b91741d06c2a784f5a61ecbe2683e1cbf2a1c->enter($__internal_1287b19cda2aa5abecef35cf3c9b91741d06c2a784f5a61ecbe2683e1cbf2a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2ea6ba1197c15ec696df67997fd2a94a117780a9a9a110be4b98f3345adbc80f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea6ba1197c15ec696df67997fd2a94a117780a9a9a110be4b98f3345adbc80f->enter($__internal_2ea6ba1197c15ec696df67997fd2a94a117780a9a9a110be4b98f3345adbc80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2ea6ba1197c15ec696df67997fd2a94a117780a9a9a110be4b98f3345adbc80f->leave($__internal_2ea6ba1197c15ec696df67997fd2a94a117780a9a9a110be4b98f3345adbc80f_prof);

        
        $__internal_1287b19cda2aa5abecef35cf3c9b91741d06c2a784f5a61ecbe2683e1cbf2a1c->leave($__internal_1287b19cda2aa5abecef35cf3c9b91741d06c2a784f5a61ecbe2683e1cbf2a1c_prof);

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
", "base.html.twig", "/Applications/MAMP/htdocs/SymfoProject/app/Resources/views/base.html.twig");
    }
}
