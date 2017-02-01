<?php

/* SymfoProjectGitCinemaBundle:Realisateur:layout.html.twig */
class __TwigTemplate_c2a5af8cd6ae146d2ba00069ae655bbfde21ff812a6609966de40677050cbaf6 extends Twig_Template
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
        $__internal_e7f5e9fd64aa0ecb3505a05597a08e517bd9492728f6cf54deff35f65489f4ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f5e9fd64aa0ecb3505a05597a08e517bd9492728f6cf54deff35f65489f4ea->enter($__internal_e7f5e9fd64aa0ecb3505a05597a08e517bd9492728f6cf54deff35f65489f4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Realisateur:layout.html.twig"));

        $__internal_a073224624108a41b754d92ded04308a9d864d03dd69dd88ec084db29c91fd73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a073224624108a41b754d92ded04308a9d864d03dd69dd88ec084db29c91fd73->enter($__internal_a073224624108a41b754d92ded04308a9d864d03dd69dd88ec084db29c91fd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymfoProjectGitCinemaBundle:Realisateur:layout.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_films");
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
                    <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Admin <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_film_liste");
        echo "\">Liste des Films</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_genre_liste");
        echo "\">Liste des Genres</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_realisateur_liste");
        echo "\">Liste des Realisateur</a></li>

          </ul>
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
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "         </div>
    <!-- /.container -->

    <div class=\"container\">

        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; IIM Fabien 2016 (dans le passé)</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_e7f5e9fd64aa0ecb3505a05597a08e517bd9492728f6cf54deff35f65489f4ea->leave($__internal_e7f5e9fd64aa0ecb3505a05597a08e517bd9492728f6cf54deff35f65489f4ea_prof);

        
        $__internal_a073224624108a41b754d92ded04308a9d864d03dd69dd88ec084db29c91fd73->leave($__internal_a073224624108a41b754d92ded04308a9d864d03dd69dd88ec084db29c91fd73_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_4008ad7968e6c1905bac688d7850cf9c220ecf82484b63fbdd3ef139af65e44d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4008ad7968e6c1905bac688d7850cf9c220ecf82484b63fbdd3ef139af65e44d->enter($__internal_4008ad7968e6c1905bac688d7850cf9c220ecf82484b63fbdd3ef139af65e44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ff4b4b9bd51ddefa53581c9cdb17f77026a37f142238309842a5dfb0a0a08bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff4b4b9bd51ddefa53581c9cdb17f77026a37f142238309842a5dfb0a0a08bdf->enter($__internal_ff4b4b9bd51ddefa53581c9cdb17f77026a37f142238309842a5dfb0a0a08bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ff4b4b9bd51ddefa53581c9cdb17f77026a37f142238309842a5dfb0a0a08bdf->leave($__internal_ff4b4b9bd51ddefa53581c9cdb17f77026a37f142238309842a5dfb0a0a08bdf_prof);

        
        $__internal_4008ad7968e6c1905bac688d7850cf9c220ecf82484b63fbdd3ef139af65e44d->leave($__internal_4008ad7968e6c1905bac688d7850cf9c220ecf82484b63fbdd3ef139af65e44d_prof);

    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        $__internal_052e25353c6474a48bf18791ceb53d4baaf76eaf08239cbcd01c17a9796eb6a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_052e25353c6474a48bf18791ceb53d4baaf76eaf08239cbcd01c17a9796eb6a4->enter($__internal_052e25353c6474a48bf18791ceb53d4baaf76eaf08239cbcd01c17a9796eb6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_305780c3c093f318200e1bc58013e8f4c0de557090b985bbdc2607a6b4c6c48a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305780c3c093f318200e1bc58013e8f4c0de557090b985bbdc2607a6b4c6c48a->enter($__internal_305780c3c093f318200e1bc58013e8f4c0de557090b985bbdc2607a6b4c6c48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_305780c3c093f318200e1bc58013e8f4c0de557090b985bbdc2607a6b4c6c48a->leave($__internal_305780c3c093f318200e1bc58013e8f4c0de557090b985bbdc2607a6b4c6c48a_prof);

        
        $__internal_052e25353c6474a48bf18791ceb53d4baaf76eaf08239cbcd01c17a9796eb6a4->leave($__internal_052e25353c6474a48bf18791ceb53d4baaf76eaf08239cbcd01c17a9796eb6a4_prof);

    }

    public function getTemplateName()
    {
        return "SymfoProjectGitCinemaBundle:Realisateur:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 70,  167 => 12,  152 => 94,  146 => 91,  124 => 71,  122 => 70,  106 => 57,  101 => 55,  96 => 53,  88 => 48,  79 => 42,  52 => 18,  46 => 15,  42 => 13,  40 => 12,  27 => 1,);
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
                <a class=\"navbar-brand\" href=\"{{ path('page_films')}}\">IIM</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\">
                        <a href=\"{{ path('page_films') }}\">Cinéma</a>
                    </li>
                    <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Admin <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"{{ path('admin_film_liste') }}\">Liste des Films</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"{{ path('admin_genre_liste') }}\">Liste des Genres</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"{{ path('admin_realisateur_liste') }}\">Liste des Realisateur</a></li>

          </ul>
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
                    <p>Copyright &copy; IIM Fabien 2016 (dans le passé)</p>
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

</html>", "SymfoProjectGitCinemaBundle:Realisateur:layout.html.twig", "/Applications/MAMP/htdocs/SymfoProjectGit/src/SymfoProjectGit/CinemaBundle/Resources/views/Realisateur/layout.html.twig");
    }
}
