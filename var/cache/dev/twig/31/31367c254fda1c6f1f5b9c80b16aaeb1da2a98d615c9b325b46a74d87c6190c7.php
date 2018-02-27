<?php

/* base.html.twig */
class __TwigTemplate_94471e517e1bd45d89b69a7f08b91e05345127ac956ecb7afbacf428d621f5fc extends Twig_Template
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
        $__internal_1db12529ec822e01d07062874e0781bf2860acc461ca0027c1d62c8c48ea620f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1db12529ec822e01d07062874e0781bf2860acc461ca0027c1d62c8c48ea620f->enter($__internal_1db12529ec822e01d07062874e0781bf2860acc461ca0027c1d62c8c48ea620f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_48dce27e05198cf603e330231eb59cfac38be4746be7610fceaa4895b3f483df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48dce27e05198cf603e330231eb59cfac38be4746be7610fceaa4895b3f483df->enter($__internal_48dce27e05198cf603e330231eb59cfac38be4746be7610fceaa4895b3f483df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 14
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "
        <!--Footer-->
        <footer class=\"page-footer font-small blue pt-4 mt-4\">

            <!--Footer Links-->
            <div class=\"container-fluid text-center text-md-left\">
                <div class=\"row\">

                    <!--First column-->
                    <div class=\"col-md-6\">
                        <p>Here you can use rows and columns here to organize your footer content.</p>
                    </div>
                    <!--/.First column-->

                    <!--Second column-->
                    <div class=\"col-md-6\">
                        <ul class=\"list-unstyled\">
                            <li><a href=\"https://github.com/ichinator\" target=\"_blank\" class=\"btn-github\">Le développeur</a></li>
                        </ul>
                    </div>
                    <!--/.Second column-->
                </div>
            </div>
            <!--/.Footer Links-->

            <!--Copyright-->
            <div class=\"footer-copyright py-3 text-center\">
                <div class=\"container-fluid\">
                    © 2018 Copyright: <a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">BigFood.com </a>

                </div>
            </div>
            <!--/.Copyright-->

        </footer>
        <!--/.Footer-->

        ";
        // line 106
        $this->displayBlock('javascripts', $context, $blocks);
        // line 110
        echo "    </body>
</html>
";
        
        $__internal_1db12529ec822e01d07062874e0781bf2860acc461ca0027c1d62c8c48ea620f->leave($__internal_1db12529ec822e01d07062874e0781bf2860acc461ca0027c1d62c8c48ea620f_prof);

        
        $__internal_48dce27e05198cf603e330231eb59cfac38be4746be7610fceaa4895b3f483df->leave($__internal_48dce27e05198cf603e330231eb59cfac38be4746be7610fceaa4895b3f483df_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_36607f0ab68c2753c35c44301a0bd2df5a5f713caa4254f16c3a13d5e999cc0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36607f0ab68c2753c35c44301a0bd2df5a5f713caa4254f16c3a13d5e999cc0c->enter($__internal_36607f0ab68c2753c35c44301a0bd2df5a5f713caa4254f16c3a13d5e999cc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3b2bcab7c96a749aaa4187764a25d613be8b4952fef32a3f6650cd94e8573cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b2bcab7c96a749aaa4187764a25d613be8b4952fef32a3f6650cd94e8573cca->enter($__internal_3b2bcab7c96a749aaa4187764a25d613be8b4952fef32a3f6650cd94e8573cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Big Food!";
        
        $__internal_3b2bcab7c96a749aaa4187764a25d613be8b4952fef32a3f6650cd94e8573cca->leave($__internal_3b2bcab7c96a749aaa4187764a25d613be8b4952fef32a3f6650cd94e8573cca_prof);

        
        $__internal_36607f0ab68c2753c35c44301a0bd2df5a5f713caa4254f16c3a13d5e999cc0c->leave($__internal_36607f0ab68c2753c35c44301a0bd2df5a5f713caa4254f16c3a13d5e999cc0c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e349d23ec446e7ac1debf214041e4f55247d8f840d33c35beabac616658d0f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e349d23ec446e7ac1debf214041e4f55247d8f840d33c35beabac616658d0f0->enter($__internal_7e349d23ec446e7ac1debf214041e4f55247d8f840d33c35beabac616658d0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_caa593783e333b53bfae070f416c120643e92819af714efda05b038d7dc2b89e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa593783e333b53bfae070f416c120643e92819af714efda05b038d7dc2b89e->enter($__internal_caa593783e333b53bfae070f416c120643e92819af714efda05b038d7dc2b89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
            <script
                    src=\"http://code.jquery.com/jquery-3.3.1.js\"
                    integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\"
                    crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_caa593783e333b53bfae070f416c120643e92819af714efda05b038d7dc2b89e->leave($__internal_caa593783e333b53bfae070f416c120643e92819af714efda05b038d7dc2b89e_prof);

        
        $__internal_7e349d23ec446e7ac1debf214041e4f55247d8f840d33c35beabac616658d0f0->leave($__internal_7e349d23ec446e7ac1debf214041e4f55247d8f840d33c35beabac616658d0f0_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0d31861244774cb8223f89338539f1f302adfde505706f9e69858e4fa12982b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d31861244774cb8223f89338539f1f302adfde505706f9e69858e4fa12982b->enter($__internal_f0d31861244774cb8223f89338539f1f302adfde505706f9e69858e4fa12982b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f49ad28a71234e86587ce2a1b9665968ce0659bc684f5109de899d5a1ca7069e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49ad28a71234e86587ce2a1b9665968ce0659bc684f5109de899d5a1ca7069e->enter($__internal_f49ad28a71234e86587ce2a1b9665968ce0659bc684f5109de899d5a1ca7069e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "            <nav class=\"navbar navbar-expand-sm bg-dark navbar-dark\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbardrop\" data-toggle=\"dropdown\">
                            Ce que nous proposons
                        </a>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ichinator_burger");
        echo "\">Nos burgers</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ichinator_plat");
        echo "\">Nos plats</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ichinator_dessert");
        echo "\">Nos desserts</a>
                        </div>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ichinator_command_homepage");
        echo "\">Passez une commande</a>
                    </li>
                    ";
        // line 37
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 38
            echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbardrop\" data-toggle=\"dropdown\">
                                Mon compte
                            </a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">Voir compte</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">Editer le compte</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\">Changer mot de passe</a>
                            </div>
                        </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a>
                    </li>

                    ";
        } else {
            // line 53
            echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbardrop\" data-toggle=\"dropdown\">
                                Mon compte
                            </a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">S'inscrire</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Se connecter</a>
                            </div>
                        </li>
                    ";
        }
        // line 63
        echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ichinator_contact_homepage");
        echo "\">Nous contacter</a>
                    </li>
                </ul>
            </nav>
        ";
        
        $__internal_f49ad28a71234e86587ce2a1b9665968ce0659bc684f5109de899d5a1ca7069e->leave($__internal_f49ad28a71234e86587ce2a1b9665968ce0659bc684f5109de899d5a1ca7069e_prof);

        
        $__internal_f0d31861244774cb8223f89338539f1f302adfde505706f9e69858e4fa12982b->leave($__internal_f0d31861244774cb8223f89338539f1f302adfde505706f9e69858e4fa12982b_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aed7b27defc6f62655d1d9a2036c215744dfa85dda70319979cde098940cba49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed7b27defc6f62655d1d9a2036c215744dfa85dda70319979cde098940cba49->enter($__internal_aed7b27defc6f62655d1d9a2036c215744dfa85dda70319979cde098940cba49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5ac59674f2c61fccc6d784164017498befbf1874f2e8dde39f25d98c9d4c0392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac59674f2c61fccc6d784164017498befbf1874f2e8dde39f25d98c9d4c0392->enter($__internal_5ac59674f2c61fccc6d784164017498befbf1874f2e8dde39f25d98c9d4c0392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
        echo "
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_5ac59674f2c61fccc6d784164017498befbf1874f2e8dde39f25d98c9d4c0392->leave($__internal_5ac59674f2c61fccc6d784164017498befbf1874f2e8dde39f25d98c9d4c0392_prof);

        
        $__internal_aed7b27defc6f62655d1d9a2036c215744dfa85dda70319979cde098940cba49->leave($__internal_aed7b27defc6f62655d1d9a2036c215744dfa85dda70319979cde098940cba49_prof);

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
        return array (  270 => 107,  261 => 106,  246 => 64,  243 => 63,  236 => 59,  232 => 58,  225 => 53,  218 => 49,  211 => 45,  207 => 44,  203 => 43,  196 => 38,  194 => 37,  189 => 35,  181 => 30,  177 => 29,  173 => 28,  163 => 21,  158 => 18,  149 => 17,  133 => 7,  124 => 6,  106 => 5,  94 => 110,  92 => 106,  80 => 97,  50 => 69,  48 => 17,  41 => 14,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Big Food!{% endblock %}</title>
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
            <script
                    src=\"http://code.jquery.com/jquery-3.3.1.js\"
                    integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\"
                    crossorigin=\"anonymous\"></script>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}
            <nav class=\"navbar navbar-expand-sm bg-dark navbar-dark\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('homepage') }}\">Accueil</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbardrop\" data-toggle=\"dropdown\">
                            Ce que nous proposons
                        </a>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"{{ path('ichinator_burger') }}\">Nos burgers</a>
                            <a class=\"dropdown-item\" href=\"{{ path('ichinator_plat') }}\">Nos plats</a>
                            <a class=\"dropdown-item\" href=\"{{ path('ichinator_dessert') }}\">Nos desserts</a>
                        </div>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('ichinator_command_homepage') }}\">Passez une commande</a>
                    </li>
                    {% if app.user %}
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbardrop\" data-toggle=\"dropdown\">
                                Mon compte
                            </a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"{{ path('fos_user_profile_show') }}\">Voir compte</a>
                                <a class=\"dropdown-item\" href=\"{{ path('fos_user_profile_edit') }}\">Editer le compte</a>
                                <a class=\"dropdown-item\" href=\"{{ path('fos_user_change_password') }}\">Changer mot de passe</a>
                            </div>
                        </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('fos_user_security_logout') }}\">Se déconnecter</a>
                    </li>

                    {% else %}
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbardrop\" data-toggle=\"dropdown\">
                                Mon compte
                            </a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"{{ path('fos_user_registration_register') }}\">S'inscrire</a>
                                <a class=\"dropdown-item\" href=\"{{ path('fos_user_security_login') }}\">Se connecter</a>
                            </div>
                        </li>
                    {% endif %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('ichinator_contact_homepage') }}\">Nous contacter</a>
                    </li>
                </ul>
            </nav>
        {% endblock %}

        <!--Footer-->
        <footer class=\"page-footer font-small blue pt-4 mt-4\">

            <!--Footer Links-->
            <div class=\"container-fluid text-center text-md-left\">
                <div class=\"row\">

                    <!--First column-->
                    <div class=\"col-md-6\">
                        <p>Here you can use rows and columns here to organize your footer content.</p>
                    </div>
                    <!--/.First column-->

                    <!--Second column-->
                    <div class=\"col-md-6\">
                        <ul class=\"list-unstyled\">
                            <li><a href=\"https://github.com/ichinator\" target=\"_blank\" class=\"btn-github\">Le développeur</a></li>
                        </ul>
                    </div>
                    <!--/.Second column-->
                </div>
            </div>
            <!--/.Footer Links-->

            <!--Copyright-->
            <div class=\"footer-copyright py-3 text-center\">
                <div class=\"container-fluid\">
                    © 2018 Copyright: <a href=\"{{ path('homepage') }}\">BigFood.com </a>

                </div>
            </div>
            <!--/.Copyright-->

        </footer>
        <!--/.Footer-->

        {% block javascripts %}

            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/views/base.html.twig");
    }
}
