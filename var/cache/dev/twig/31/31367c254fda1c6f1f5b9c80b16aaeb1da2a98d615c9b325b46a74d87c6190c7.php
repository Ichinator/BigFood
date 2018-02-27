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
        $__internal_c650008115c257c33363682ef7bc5dac427370e0ec28a324e75689ab366be57a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c650008115c257c33363682ef7bc5dac427370e0ec28a324e75689ab366be57a->enter($__internal_c650008115c257c33363682ef7bc5dac427370e0ec28a324e75689ab366be57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_df25710587f41b9f60d0e9ba1c251a202180abd7d03616875db6a73fba12c811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df25710587f41b9f60d0e9ba1c251a202180abd7d03616875db6a73fba12c811->enter($__internal_df25710587f41b9f60d0e9ba1c251a202180abd7d03616875db6a73fba12c811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c650008115c257c33363682ef7bc5dac427370e0ec28a324e75689ab366be57a->leave($__internal_c650008115c257c33363682ef7bc5dac427370e0ec28a324e75689ab366be57a_prof);

        
        $__internal_df25710587f41b9f60d0e9ba1c251a202180abd7d03616875db6a73fba12c811->leave($__internal_df25710587f41b9f60d0e9ba1c251a202180abd7d03616875db6a73fba12c811_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f6010170604027409fc22f823a258bcfca2abbbd7465755e7a430498eb2b823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f6010170604027409fc22f823a258bcfca2abbbd7465755e7a430498eb2b823->enter($__internal_4f6010170604027409fc22f823a258bcfca2abbbd7465755e7a430498eb2b823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d76fd1a3b0fca477572bf47f017f1292d395bf7c932245b69a0e290639866e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d76fd1a3b0fca477572bf47f017f1292d395bf7c932245b69a0e290639866e46->enter($__internal_d76fd1a3b0fca477572bf47f017f1292d395bf7c932245b69a0e290639866e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Big Food!";
        
        $__internal_d76fd1a3b0fca477572bf47f017f1292d395bf7c932245b69a0e290639866e46->leave($__internal_d76fd1a3b0fca477572bf47f017f1292d395bf7c932245b69a0e290639866e46_prof);

        
        $__internal_4f6010170604027409fc22f823a258bcfca2abbbd7465755e7a430498eb2b823->leave($__internal_4f6010170604027409fc22f823a258bcfca2abbbd7465755e7a430498eb2b823_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_200a9c2b53b630037ef67953115556d2b3615b7befdb146994ee5f8ec1163418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_200a9c2b53b630037ef67953115556d2b3615b7befdb146994ee5f8ec1163418->enter($__internal_200a9c2b53b630037ef67953115556d2b3615b7befdb146994ee5f8ec1163418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3c00649a79235761dc700dc380cbc64010ba29b8581d52d96c3d6b0af4c4bcaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c00649a79235761dc700dc380cbc64010ba29b8581d52d96c3d6b0af4c4bcaa->enter($__internal_3c00649a79235761dc700dc380cbc64010ba29b8581d52d96c3d6b0af4c4bcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
            <script
                    src=\"http://code.jquery.com/jquery-3.3.1.js\"
                    integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\"
                    crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_3c00649a79235761dc700dc380cbc64010ba29b8581d52d96c3d6b0af4c4bcaa->leave($__internal_3c00649a79235761dc700dc380cbc64010ba29b8581d52d96c3d6b0af4c4bcaa_prof);

        
        $__internal_200a9c2b53b630037ef67953115556d2b3615b7befdb146994ee5f8ec1163418->leave($__internal_200a9c2b53b630037ef67953115556d2b3615b7befdb146994ee5f8ec1163418_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b276478ba4237a32cf793a0024fe474e56118dc02ae8b2002c539d471f4c08b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b276478ba4237a32cf793a0024fe474e56118dc02ae8b2002c539d471f4c08b->enter($__internal_8b276478ba4237a32cf793a0024fe474e56118dc02ae8b2002c539d471f4c08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e01aa8755470d9dd214fac795aa5d9164ef013b3f05eaffa76008cb4dbf8f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e01aa8755470d9dd214fac795aa5d9164ef013b3f05eaffa76008cb4dbf8f72->enter($__internal_5e01aa8755470d9dd214fac795aa5d9164ef013b3f05eaffa76008cb4dbf8f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5e01aa8755470d9dd214fac795aa5d9164ef013b3f05eaffa76008cb4dbf8f72->leave($__internal_5e01aa8755470d9dd214fac795aa5d9164ef013b3f05eaffa76008cb4dbf8f72_prof);

        
        $__internal_8b276478ba4237a32cf793a0024fe474e56118dc02ae8b2002c539d471f4c08b->leave($__internal_8b276478ba4237a32cf793a0024fe474e56118dc02ae8b2002c539d471f4c08b_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7079e4918309eb83bbf10ade97296e14d70045b1fb322b5f798da9502721876d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7079e4918309eb83bbf10ade97296e14d70045b1fb322b5f798da9502721876d->enter($__internal_7079e4918309eb83bbf10ade97296e14d70045b1fb322b5f798da9502721876d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a3177d32c4c8170a2788e6560fbff5d44ad20a8f8ecf4ac8d4554ff75beac6b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3177d32c4c8170a2788e6560fbff5d44ad20a8f8ecf4ac8d4554ff75beac6b7->enter($__internal_a3177d32c4c8170a2788e6560fbff5d44ad20a8f8ecf4ac8d4554ff75beac6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
        echo "
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_a3177d32c4c8170a2788e6560fbff5d44ad20a8f8ecf4ac8d4554ff75beac6b7->leave($__internal_a3177d32c4c8170a2788e6560fbff5d44ad20a8f8ecf4ac8d4554ff75beac6b7_prof);

        
        $__internal_7079e4918309eb83bbf10ade97296e14d70045b1fb322b5f798da9502721876d->leave($__internal_7079e4918309eb83bbf10ade97296e14d70045b1fb322b5f798da9502721876d_prof);

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
