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
        $__internal_31943d78cf730fec347cfa65c70ecc0e993026e24058bf1229e040511536676d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31943d78cf730fec347cfa65c70ecc0e993026e24058bf1229e040511536676d->enter($__internal_31943d78cf730fec347cfa65c70ecc0e993026e24058bf1229e040511536676d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Film:layout.html.twig"));

        $__internal_419d237cfdfa34a6a9982af513378b83262a016d0dff215479bc2eadb986eabc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_419d237cfdfa34a6a9982af513378b83262a016d0dff215479bc2eadb986eabc->enter($__internal_419d237cfdfa34a6a9982af513378b83262a016d0dff215479bc2eadb986eabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Film:layout.html.twig"));

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
                    <li class=\"active\">
                        <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_film_liste");
        echo "\">Admin</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
        <div class=\"container\">
         ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "         </div>
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
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_31943d78cf730fec347cfa65c70ecc0e993026e24058bf1229e040511536676d->leave($__internal_31943d78cf730fec347cfa65c70ecc0e993026e24058bf1229e040511536676d_prof);

        
        $__internal_419d237cfdfa34a6a9982af513378b83262a016d0dff215479bc2eadb986eabc->leave($__internal_419d237cfdfa34a6a9982af513378b83262a016d0dff215479bc2eadb986eabc_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_31779d0e82ac2f701141df7da5342f92c8ebddb72044f1093d1eee0b702e217c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31779d0e82ac2f701141df7da5342f92c8ebddb72044f1093d1eee0b702e217c->enter($__internal_31779d0e82ac2f701141df7da5342f92c8ebddb72044f1093d1eee0b702e217c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c90134c55431c1965a730a632b49f414eb472d284d4ebf573ecf4733f3ecd1b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c90134c55431c1965a730a632b49f414eb472d284d4ebf573ecf4733f3ecd1b7->enter($__internal_c90134c55431c1965a730a632b49f414eb472d284d4ebf573ecf4733f3ecd1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c90134c55431c1965a730a632b49f414eb472d284d4ebf573ecf4733f3ecd1b7->leave($__internal_c90134c55431c1965a730a632b49f414eb472d284d4ebf573ecf4733f3ecd1b7_prof);

        
        $__internal_31779d0e82ac2f701141df7da5342f92c8ebddb72044f1093d1eee0b702e217c->leave($__internal_31779d0e82ac2f701141df7da5342f92c8ebddb72044f1093d1eee0b702e217c_prof);

    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf96ca9748d567b13f0ee208373766a5218d7f77e92eed5a4347179f8f8ac4a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf96ca9748d567b13f0ee208373766a5218d7f77e92eed5a4347179f8f8ac4a0->enter($__internal_cf96ca9748d567b13f0ee208373766a5218d7f77e92eed5a4347179f8f8ac4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77d146419d21e4385a886d285b8b064111a3b1301b580b7828212b138ed19a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d146419d21e4385a886d285b8b064111a3b1301b580b7828212b138ed19a31->enter($__internal_77d146419d21e4385a886d285b8b064111a3b1301b580b7828212b138ed19a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_77d146419d21e4385a886d285b8b064111a3b1301b580b7828212b138ed19a31->leave($__internal_77d146419d21e4385a886d285b8b064111a3b1301b580b7828212b138ed19a31_prof);

        
        $__internal_cf96ca9748d567b13f0ee208373766a5218d7f77e92eed5a4347179f8f8ac4a0->leave($__internal_cf96ca9748d567b13f0ee208373766a5218d7f77e92eed5a4347179f8f8ac4a0_prof);

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
        return array (  170 => 62,  153 => 12,  138 => 86,  132 => 83,  110 => 63,  108 => 62,  94 => 51,  88 => 48,  79 => 42,  52 => 18,  46 => 15,  42 => 13,  40 => 12,  27 => 1,);
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
                    <li class=\"active\">
                        <a href=\"{{ path('admin_film_liste') }}\">Admin</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
        <div class=\"container\">
         {% block body %}{% endblock %}
         </div>
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
