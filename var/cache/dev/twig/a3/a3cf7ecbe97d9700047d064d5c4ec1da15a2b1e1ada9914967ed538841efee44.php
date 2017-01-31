<?php

/* SymfoProjectGitCinemaBundle:Film:layout.html.twig */
class __TwigTemplate_5fc018ef7b0cfee5d4770ba529eb601204cdec13534fabce5e2d24265afcd929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83b965a5ecc18f725d81cc2e578b8d8089bec8f7e0a9290b4f9f7214f4d0e1bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83b965a5ecc18f725d81cc2e578b8d8089bec8f7e0a9290b4f9f7214f4d0e1bd->enter($__internal_83b965a5ecc18f725d81cc2e578b8d8089bec8f7e0a9290b4f9f7214f4d0e1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Film:layout.html.twig"));

        $__internal_7cf97ba393a089a3a5a4e78ba6ebfc5cd2052bdd160527aca3cb2621a682c020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf97ba393a089a3a5a4e78ba6ebfc5cd2052bdd160527aca3cb2621a682c020->enter($__internal_7cf97ba393a089a3a5a4e78ba6ebfc5cd2052bdd160527aca3cb2621a682c020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Film:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    ";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "
    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/shop-item.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_accueil");
        echo "\">IIM</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\">
                        <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_films");
        echo "\">Cinéma</a>
                    </li>
                    <li>
                        <a href=\"\">Admin</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
         ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "    <!-- /.container -->

    <div class=\"container\">

        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; IIM Steve 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_83b965a5ecc18f725d81cc2e578b8d8089bec8f7e0a9290b4f9f7214f4d0e1bd->leave($__internal_83b965a5ecc18f725d81cc2e578b8d8089bec8f7e0a9290b4f9f7214f4d0e1bd_prof);

        
        $__internal_7cf97ba393a089a3a5a4e78ba6ebfc5cd2052bdd160527aca3cb2621a682c020->leave($__internal_7cf97ba393a089a3a5a4e78ba6ebfc5cd2052bdd160527aca3cb2621a682c020_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5d897caa689ca495c50d4c775f6fb9d3182c548f259fadba0f97f277722930d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d897caa689ca495c50d4c775f6fb9d3182c548f259fadba0f97f277722930d->enter($__internal_a5d897caa689ca495c50d4c775f6fb9d3182c548f259fadba0f97f277722930d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_362c3df922e1c568867b78f7e150c56a165e87a89f7d707f8f1c54f0e3c96ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_362c3df922e1c568867b78f7e150c56a165e87a89f7d707f8f1c54f0e3c96ec5->enter($__internal_362c3df922e1c568867b78f7e150c56a165e87a89f7d707f8f1c54f0e3c96ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_362c3df922e1c568867b78f7e150c56a165e87a89f7d707f8f1c54f0e3c96ec5->leave($__internal_362c3df922e1c568867b78f7e150c56a165e87a89f7d707f8f1c54f0e3c96ec5_prof);

        
        $__internal_a5d897caa689ca495c50d4c775f6fb9d3182c548f259fadba0f97f277722930d->leave($__internal_a5d897caa689ca495c50d4c775f6fb9d3182c548f259fadba0f97f277722930d_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3425b01d40e07fe79a5d7d0b0b25bd8b1a6ffef33b5b5e6eccabb16a02b6215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3425b01d40e07fe79a5d7d0b0b25bd8b1a6ffef33b5b5e6eccabb16a02b6215->enter($__internal_f3425b01d40e07fe79a5d7d0b0b25bd8b1a6ffef33b5b5e6eccabb16a02b6215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20954a7e7814c0e48d1a66926431af1846caabcc72a50d9c57e7318a1d2b75b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20954a7e7814c0e48d1a66926431af1846caabcc72a50d9c57e7318a1d2b75b0->enter($__internal_20954a7e7814c0e48d1a66926431af1846caabcc72a50d9c57e7318a1d2b75b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_20954a7e7814c0e48d1a66926431af1846caabcc72a50d9c57e7318a1d2b75b0->leave($__internal_20954a7e7814c0e48d1a66926431af1846caabcc72a50d9c57e7318a1d2b75b0_prof);

        
        $__internal_f3425b01d40e07fe79a5d7d0b0b25bd8b1a6ffef33b5b5e6eccabb16a02b6215->leave($__internal_f3425b01d40e07fe79a5d7d0b0b25bd8b1a6ffef33b5b5e6eccabb16a02b6215_prof);

    }

    public function getTemplateName()
    {
        return "SymfoProjectGitCinemaBundle:Film:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 61,  148 => 12,  133 => 84,  127 => 81,  106 => 62,  104 => 61,  88 => 48,  79 => 42,  52 => 18,  46 => 15,  42 => 13,  40 => 12,  27 => 1,);
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
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    {% block title %}{% endblock %}

    <!-- Bootstrap Core CSS -->
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"{{ asset('css/shop-item.css') }}\" rel=\"stylesheet\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{ path('page_accueil') }}\">IIM</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\">
                        <a href=\"{{ path('page_films') }}\">Cinéma</a>
                    </li>
                    <li>
                        <a href=\"\">Admin</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
         {% block body %}{% endblock %}
    <!-- /.container -->

    <div class=\"container\">

        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; IIM Steve 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src=\"{{ asset('js/jquery.js') }}\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>

</body>

</html>", "SymfoProjectGitCinemaBundle:Film:layout.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/CinemaBundle/Resources/views/Film/layout.html.twig");
    }
}
