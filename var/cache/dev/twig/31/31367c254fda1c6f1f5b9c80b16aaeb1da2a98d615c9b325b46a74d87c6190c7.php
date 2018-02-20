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
        $__internal_c6a4577ea478323cc769587cf3399aea735c95bb832570bb3e0e12cd03f8259d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a4577ea478323cc769587cf3399aea735c95bb832570bb3e0e12cd03f8259d->enter($__internal_c6a4577ea478323cc769587cf3399aea735c95bb832570bb3e0e12cd03f8259d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_35ebd73d74253891383d4cf7cdb34e23f3e5bd6e22b8a733c2a97298ccfffe2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35ebd73d74253891383d4cf7cdb34e23f3e5bd6e22b8a733c2a97298ccfffe2d->enter($__internal_35ebd73d74253891383d4cf7cdb34e23f3e5bd6e22b8a733c2a97298ccfffe2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c6a4577ea478323cc769587cf3399aea735c95bb832570bb3e0e12cd03f8259d->leave($__internal_c6a4577ea478323cc769587cf3399aea735c95bb832570bb3e0e12cd03f8259d_prof);

        
        $__internal_35ebd73d74253891383d4cf7cdb34e23f3e5bd6e22b8a733c2a97298ccfffe2d->leave($__internal_35ebd73d74253891383d4cf7cdb34e23f3e5bd6e22b8a733c2a97298ccfffe2d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_56020ca5e0f40e08e301ee9be5a16d222b25d18a061c6175417dae7e31972759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56020ca5e0f40e08e301ee9be5a16d222b25d18a061c6175417dae7e31972759->enter($__internal_56020ca5e0f40e08e301ee9be5a16d222b25d18a061c6175417dae7e31972759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3d863ad0cc9460c685786dc71f7315620e9656f7357af8e9c4eea75ee8e941d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3d863ad0cc9460c685786dc71f7315620e9656f7357af8e9c4eea75ee8e941d->enter($__internal_a3d863ad0cc9460c685786dc71f7315620e9656f7357af8e9c4eea75ee8e941d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Big Food!";
        
        $__internal_a3d863ad0cc9460c685786dc71f7315620e9656f7357af8e9c4eea75ee8e941d->leave($__internal_a3d863ad0cc9460c685786dc71f7315620e9656f7357af8e9c4eea75ee8e941d_prof);

        
        $__internal_56020ca5e0f40e08e301ee9be5a16d222b25d18a061c6175417dae7e31972759->leave($__internal_56020ca5e0f40e08e301ee9be5a16d222b25d18a061c6175417dae7e31972759_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bd0cf733c489206ec28b2ecc263629c5c8927fe21d96808f9aba7f785f6cf2b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0cf733c489206ec28b2ecc263629c5c8927fe21d96808f9aba7f785f6cf2b2->enter($__internal_bd0cf733c489206ec28b2ecc263629c5c8927fe21d96808f9aba7f785f6cf2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_395d102c79443e4ca99af13f30b5a9d7467cad0444bc40f559551f83498d9fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395d102c79443e4ca99af13f30b5a9d7467cad0444bc40f559551f83498d9fb5->enter($__internal_395d102c79443e4ca99af13f30b5a9d7467cad0444bc40f559551f83498d9fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
            <script
                    src=\"http://code.jquery.com/jquery-3.3.1.js\"
                    integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\"
                    crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_395d102c79443e4ca99af13f30b5a9d7467cad0444bc40f559551f83498d9fb5->leave($__internal_395d102c79443e4ca99af13f30b5a9d7467cad0444bc40f559551f83498d9fb5_prof);

        
        $__internal_bd0cf733c489206ec28b2ecc263629c5c8927fe21d96808f9aba7f785f6cf2b2->leave($__internal_bd0cf733c489206ec28b2ecc263629c5c8927fe21d96808f9aba7f785f6cf2b2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9fb14935c0b9944710b69f0e33e02865783de0d7bb49ae657414e9df9f122e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9fb14935c0b9944710b69f0e33e02865783de0d7bb49ae657414e9df9f122e0->enter($__internal_c9fb14935c0b9944710b69f0e33e02865783de0d7bb49ae657414e9df9f122e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c4ef822cfda0e619389f47c0df8efa59a927e66752fd2111d4ba2f5d3fc0a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4ef822cfda0e619389f47c0df8efa59a927e66752fd2111d4ba2f5d3fc0a24->enter($__internal_0c4ef822cfda0e619389f47c0df8efa59a927e66752fd2111d4ba2f5d3fc0a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0c4ef822cfda0e619389f47c0df8efa59a927e66752fd2111d4ba2f5d3fc0a24->leave($__internal_0c4ef822cfda0e619389f47c0df8efa59a927e66752fd2111d4ba2f5d3fc0a24_prof);

        
        $__internal_c9fb14935c0b9944710b69f0e33e02865783de0d7bb49ae657414e9df9f122e0->leave($__internal_c9fb14935c0b9944710b69f0e33e02865783de0d7bb49ae657414e9df9f122e0_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f08d3dbb2c7b95d01e6f568a58c9cdcec33ce4b8e2911788f2f433384d95b1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f08d3dbb2c7b95d01e6f568a58c9cdcec33ce4b8e2911788f2f433384d95b1b->enter($__internal_5f08d3dbb2c7b95d01e6f568a58c9cdcec33ce4b8e2911788f2f433384d95b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f5a865842b7297909da00a1f14ea65da834f254306b1e47702b135400ddd53da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a865842b7297909da00a1f14ea65da834f254306b1e47702b135400ddd53da->enter($__internal_f5a865842b7297909da00a1f14ea65da834f254306b1e47702b135400ddd53da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_f5a865842b7297909da00a1f14ea65da834f254306b1e47702b135400ddd53da->leave($__internal_f5a865842b7297909da00a1f14ea65da834f254306b1e47702b135400ddd53da_prof);

        
        $__internal_5f08d3dbb2c7b95d01e6f568a58c9cdcec33ce4b8e2911788f2f433384d95b1b->leave($__internal_5f08d3dbb2c7b95d01e6f568a58c9cdcec33ce4b8e2911788f2f433384d95b1b_prof);

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
