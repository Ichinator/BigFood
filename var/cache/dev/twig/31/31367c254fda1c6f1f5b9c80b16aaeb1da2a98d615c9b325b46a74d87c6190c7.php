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
        $__internal_abfd168ac3507def6891b4e35b4bf90085ac020c0ab02d75b477c0e61f262476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abfd168ac3507def6891b4e35b4bf90085ac020c0ab02d75b477c0e61f262476->enter($__internal_abfd168ac3507def6891b4e35b4bf90085ac020c0ab02d75b477c0e61f262476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5dcd17d0f21a6fea6ba9519430e6195286cfa953e95541cb231816ab70daa5fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dcd17d0f21a6fea6ba9519430e6195286cfa953e95541cb231816ab70daa5fa->enter($__internal_5dcd17d0f21a6fea6ba9519430e6195286cfa953e95541cb231816ab70daa5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 67
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "    </body>
</html>
";
        
        $__internal_abfd168ac3507def6891b4e35b4bf90085ac020c0ab02d75b477c0e61f262476->leave($__internal_abfd168ac3507def6891b4e35b4bf90085ac020c0ab02d75b477c0e61f262476_prof);

        
        $__internal_5dcd17d0f21a6fea6ba9519430e6195286cfa953e95541cb231816ab70daa5fa->leave($__internal_5dcd17d0f21a6fea6ba9519430e6195286cfa953e95541cb231816ab70daa5fa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c5283475716ec89d579b64fc782ca7363a17b64ef79baf0c42a6fe5f4c8d7c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c5283475716ec89d579b64fc782ca7363a17b64ef79baf0c42a6fe5f4c8d7c9->enter($__internal_6c5283475716ec89d579b64fc782ca7363a17b64ef79baf0c42a6fe5f4c8d7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2525375781299f50d13f6ef1c0e9291513791a9cca98f72767afa145c62e09b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2525375781299f50d13f6ef1c0e9291513791a9cca98f72767afa145c62e09b0->enter($__internal_2525375781299f50d13f6ef1c0e9291513791a9cca98f72767afa145c62e09b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Big Food!";
        
        $__internal_2525375781299f50d13f6ef1c0e9291513791a9cca98f72767afa145c62e09b0->leave($__internal_2525375781299f50d13f6ef1c0e9291513791a9cca98f72767afa145c62e09b0_prof);

        
        $__internal_6c5283475716ec89d579b64fc782ca7363a17b64ef79baf0c42a6fe5f4c8d7c9->leave($__internal_6c5283475716ec89d579b64fc782ca7363a17b64ef79baf0c42a6fe5f4c8d7c9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_82ce52f0c8faf0d7adae9256d47ee8ab5d10adb0d65285bf000cb4f5e2e5cfd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ce52f0c8faf0d7adae9256d47ee8ab5d10adb0d65285bf000cb4f5e2e5cfd4->enter($__internal_82ce52f0c8faf0d7adae9256d47ee8ab5d10adb0d65285bf000cb4f5e2e5cfd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ec32e76c4a17b462763398479cf530eb44cbe127ba2d5b90a067543300e47c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec32e76c4a17b462763398479cf530eb44cbe127ba2d5b90a067543300e47c0e->enter($__internal_ec32e76c4a17b462763398479cf530eb44cbe127ba2d5b90a067543300e47c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
            <script
                    src=\"http://code.jquery.com/jquery-3.3.1.js\"
                    integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\"
                    crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_ec32e76c4a17b462763398479cf530eb44cbe127ba2d5b90a067543300e47c0e->leave($__internal_ec32e76c4a17b462763398479cf530eb44cbe127ba2d5b90a067543300e47c0e_prof);

        
        $__internal_82ce52f0c8faf0d7adae9256d47ee8ab5d10adb0d65285bf000cb4f5e2e5cfd4->leave($__internal_82ce52f0c8faf0d7adae9256d47ee8ab5d10adb0d65285bf000cb4f5e2e5cfd4_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_88dd951818a705d6864a7673179172146b2a0aef4e8b4afb88c5aa2d486fd74a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88dd951818a705d6864a7673179172146b2a0aef4e8b4afb88c5aa2d486fd74a->enter($__internal_88dd951818a705d6864a7673179172146b2a0aef4e8b4afb88c5aa2d486fd74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_992b783751d1c2b1253f1c2638df5756ec394f4652a7065d54ee695477f60e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992b783751d1c2b1253f1c2638df5756ec394f4652a7065d54ee695477f60e7c->enter($__internal_992b783751d1c2b1253f1c2638df5756ec394f4652a7065d54ee695477f60e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                            </div>
                        </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a>
                    </li>

                    ";
        } else {
            // line 51
            echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbardrop\" data-toggle=\"dropdown\">
                                Mon compte
                            </a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">S'inscrire</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Se connecter</a>
                            </div>
                        </li>
                    ";
        }
        // line 61
        echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ichinator_contact_homepage");
        echo "\">Nous contacter</a>
                    </li>
                </ul>
            </nav>
        ";
        
        $__internal_992b783751d1c2b1253f1c2638df5756ec394f4652a7065d54ee695477f60e7c->leave($__internal_992b783751d1c2b1253f1c2638df5756ec394f4652a7065d54ee695477f60e7c_prof);

        
        $__internal_88dd951818a705d6864a7673179172146b2a0aef4e8b4afb88c5aa2d486fd74a->leave($__internal_88dd951818a705d6864a7673179172146b2a0aef4e8b4afb88c5aa2d486fd74a_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9c97add931f324889cc2aa745f8056dba1a80bf390b8539326760fdb88d40a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c97add931f324889cc2aa745f8056dba1a80bf390b8539326760fdb88d40a16->enter($__internal_9c97add931f324889cc2aa745f8056dba1a80bf390b8539326760fdb88d40a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_128dd3ef4316564794a43349949962d7f9bd239f0080db4536390feb6f597e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_128dd3ef4316564794a43349949962d7f9bd239f0080db4536390feb6f597e03->enter($__internal_128dd3ef4316564794a43349949962d7f9bd239f0080db4536390feb6f597e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_128dd3ef4316564794a43349949962d7f9bd239f0080db4536390feb6f597e03->leave($__internal_128dd3ef4316564794a43349949962d7f9bd239f0080db4536390feb6f597e03_prof);

        
        $__internal_9c97add931f324889cc2aa745f8056dba1a80bf390b8539326760fdb88d40a16->leave($__internal_9c97add931f324889cc2aa745f8056dba1a80bf390b8539326760fdb88d40a16_prof);

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
        return array (  224 => 68,  215 => 67,  200 => 62,  197 => 61,  190 => 57,  186 => 56,  179 => 51,  172 => 47,  165 => 43,  161 => 42,  154 => 37,  152 => 36,  147 => 34,  139 => 29,  135 => 28,  131 => 27,  121 => 20,  116 => 17,  107 => 16,  92 => 7,  83 => 6,  65 => 5,  53 => 71,  50 => 67,  48 => 16,  41 => 13,  39 => 6,  35 => 5,  29 => 1,);
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
        {% block javascripts %}

            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/views/base.html.twig");
    }
}
