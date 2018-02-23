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
        $__internal_7877c79333101efb4044ce34a1071d7e9c637882474808c098e1b0b30cd65fef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7877c79333101efb4044ce34a1071d7e9c637882474808c098e1b0b30cd65fef->enter($__internal_7877c79333101efb4044ce34a1071d7e9c637882474808c098e1b0b30cd65fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_148806d36568eb17d63f0f9090ad049052be45c1144efc8a8b35f39e9bae05d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_148806d36568eb17d63f0f9090ad049052be45c1144efc8a8b35f39e9bae05d1->enter($__internal_148806d36568eb17d63f0f9090ad049052be45c1144efc8a8b35f39e9bae05d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 68
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
                            <li><a href=\"https://github.com/ichinator\" target=\"_blank\">Le développeur</a></li>
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
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"> BigFood.com </a>

                </div>
            </div>
            <!--/.Copyright-->

        </footer>
        <!--/.Footer-->

        ";
        // line 105
        $this->displayBlock('javascripts', $context, $blocks);
        // line 109
        echo "    </body>
</html>
";
        
        $__internal_7877c79333101efb4044ce34a1071d7e9c637882474808c098e1b0b30cd65fef->leave($__internal_7877c79333101efb4044ce34a1071d7e9c637882474808c098e1b0b30cd65fef_prof);

        
        $__internal_148806d36568eb17d63f0f9090ad049052be45c1144efc8a8b35f39e9bae05d1->leave($__internal_148806d36568eb17d63f0f9090ad049052be45c1144efc8a8b35f39e9bae05d1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f5089b77a7ae93b035b549df9a8d797658af75db4518e2c19dcef5f45da2b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f5089b77a7ae93b035b549df9a8d797658af75db4518e2c19dcef5f45da2b26->enter($__internal_1f5089b77a7ae93b035b549df9a8d797658af75db4518e2c19dcef5f45da2b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f92af4fa728de3d30aa3c1a247c44edd3b9ccde06173b316d735d87baec79acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92af4fa728de3d30aa3c1a247c44edd3b9ccde06173b316d735d87baec79acb->enter($__internal_f92af4fa728de3d30aa3c1a247c44edd3b9ccde06173b316d735d87baec79acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Big Food!";
        
        $__internal_f92af4fa728de3d30aa3c1a247c44edd3b9ccde06173b316d735d87baec79acb->leave($__internal_f92af4fa728de3d30aa3c1a247c44edd3b9ccde06173b316d735d87baec79acb_prof);

        
        $__internal_1f5089b77a7ae93b035b549df9a8d797658af75db4518e2c19dcef5f45da2b26->leave($__internal_1f5089b77a7ae93b035b549df9a8d797658af75db4518e2c19dcef5f45da2b26_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_086ec9ebcba4281000b6d8e21d3f8dfb37883be75f335e26d63896024deda9aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_086ec9ebcba4281000b6d8e21d3f8dfb37883be75f335e26d63896024deda9aa->enter($__internal_086ec9ebcba4281000b6d8e21d3f8dfb37883be75f335e26d63896024deda9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ff178da3fd7bb0abc299c6f12b741273ff8cc227620eac190e99e7e7a1f1a33b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff178da3fd7bb0abc299c6f12b741273ff8cc227620eac190e99e7e7a1f1a33b->enter($__internal_ff178da3fd7bb0abc299c6f12b741273ff8cc227620eac190e99e7e7a1f1a33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
            <script
                    src=\"http://code.jquery.com/jquery-3.3.1.js\"
                    integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\"
                    crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_ff178da3fd7bb0abc299c6f12b741273ff8cc227620eac190e99e7e7a1f1a33b->leave($__internal_ff178da3fd7bb0abc299c6f12b741273ff8cc227620eac190e99e7e7a1f1a33b_prof);

        
        $__internal_086ec9ebcba4281000b6d8e21d3f8dfb37883be75f335e26d63896024deda9aa->leave($__internal_086ec9ebcba4281000b6d8e21d3f8dfb37883be75f335e26d63896024deda9aa_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2ca1f8e6c358ffc9e14e40bd31e1399bed0b23a4b5c730fe4c2c4481ed70711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2ca1f8e6c358ffc9e14e40bd31e1399bed0b23a4b5c730fe4c2c4481ed70711->enter($__internal_f2ca1f8e6c358ffc9e14e40bd31e1399bed0b23a4b5c730fe4c2c4481ed70711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28ffcdce91cb3d95a847e4c2ac0238b3f435ba42f8541b15e6cf3a44db836406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ffcdce91cb3d95a847e4c2ac0238b3f435ba42f8541b15e6cf3a44db836406->enter($__internal_28ffcdce91cb3d95a847e4c2ac0238b3f435ba42f8541b15e6cf3a44db836406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "            <nav class=\"navbar navbar-expand-sm bg-dark navbar-dark\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbardrop\" data-toggle=\"dropdown\">
                            Ce que nous proposons
                        </a>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ichinator_burger");
        echo "\">Nos burgers</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ichinator_plat");
        echo "\">Nos plats</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ichinator_dessert");
        echo "\">Nos desserts</a>
                        </div>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ichinator_command_homepage");
        echo "\">Passez une commande</a>
                    </li>
                    ";
        // line 36
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 37
            echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbardrop\" data-toggle=\"dropdown\">
                                Mon compte
                            </a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">Voir compte</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">Editer le compte</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\">Changer mot de passe</a>
                            </div>
                        </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a>
                    </li>

                    ";
        } else {
            // line 52
            echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbardrop\" data-toggle=\"dropdown\">
                                Mon compte
                            </a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">S'inscrire</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Se connecter</a>
                            </div>
                        </li>
                    ";
        }
        // line 62
        echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ichinator_contact_homepage");
        echo "\">Nous contacter</a>
                    </li>
                </ul>
            </nav>
        ";
        
        $__internal_28ffcdce91cb3d95a847e4c2ac0238b3f435ba42f8541b15e6cf3a44db836406->leave($__internal_28ffcdce91cb3d95a847e4c2ac0238b3f435ba42f8541b15e6cf3a44db836406_prof);

        
        $__internal_f2ca1f8e6c358ffc9e14e40bd31e1399bed0b23a4b5c730fe4c2c4481ed70711->leave($__internal_f2ca1f8e6c358ffc9e14e40bd31e1399bed0b23a4b5c730fe4c2c4481ed70711_prof);

    }

    // line 105
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b5809e18958d01227d75c7fc0dbf6e89f0731302403636d82eccfe229cbd58c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5809e18958d01227d75c7fc0dbf6e89f0731302403636d82eccfe229cbd58c2->enter($__internal_b5809e18958d01227d75c7fc0dbf6e89f0731302403636d82eccfe229cbd58c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b4cd8f35b1f0fbb79af4be2d6cdcf5d3989c24a889118b03feefcdca3cfb957e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4cd8f35b1f0fbb79af4be2d6cdcf5d3989c24a889118b03feefcdca3cfb957e->enter($__internal_b4cd8f35b1f0fbb79af4be2d6cdcf5d3989c24a889118b03feefcdca3cfb957e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 106
        echo "
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_b4cd8f35b1f0fbb79af4be2d6cdcf5d3989c24a889118b03feefcdca3cfb957e->leave($__internal_b4cd8f35b1f0fbb79af4be2d6cdcf5d3989c24a889118b03feefcdca3cfb957e_prof);

        
        $__internal_b5809e18958d01227d75c7fc0dbf6e89f0731302403636d82eccfe229cbd58c2->leave($__internal_b5809e18958d01227d75c7fc0dbf6e89f0731302403636d82eccfe229cbd58c2_prof);

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
        return array (  269 => 106,  260 => 105,  245 => 63,  242 => 62,  235 => 58,  231 => 57,  224 => 52,  217 => 48,  210 => 44,  206 => 43,  202 => 42,  195 => 37,  193 => 36,  188 => 34,  180 => 29,  176 => 28,  172 => 27,  162 => 20,  157 => 17,  148 => 16,  133 => 7,  124 => 6,  106 => 5,  94 => 109,  92 => 105,  80 => 96,  50 => 68,  48 => 16,  41 => 13,  39 => 6,  35 => 5,  29 => 1,);
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
                            <li><a href=\"https://github.com/ichinator\" target=\"_blank\">Le développeur</a></li>
                        </ul>
                    </div>
                    <!--/.Second column-->
                </div>
            </div>
            <!--/.Footer Links-->

            <!--Copyright-->
            <div class=\"footer-copyright py-3 text-center\">
                <div class=\"container-fluid\">
                    © 2018 Copyright: <a href=\"{{ path('homepage') }}\"> BigFood.com </a>

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
