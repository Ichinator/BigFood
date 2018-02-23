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
        $__internal_93d8959ce32c132201e44e9fc621ac5dafa91992b9d50b972da1639ddbb61fe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d8959ce32c132201e44e9fc621ac5dafa91992b9d50b972da1639ddbb61fe7->enter($__internal_93d8959ce32c132201e44e9fc621ac5dafa91992b9d50b972da1639ddbb61fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5fa1428c6f0dd3d20a0d7b151242ac7f91ab8d784c5b5baa676e27d389a4223a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fa1428c6f0dd3d20a0d7b151242ac7f91ab8d784c5b5baa676e27d389a4223a->enter($__internal_5fa1428c6f0dd3d20a0d7b151242ac7f91ab8d784c5b5baa676e27d389a4223a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_93d8959ce32c132201e44e9fc621ac5dafa91992b9d50b972da1639ddbb61fe7->leave($__internal_93d8959ce32c132201e44e9fc621ac5dafa91992b9d50b972da1639ddbb61fe7_prof);

        
        $__internal_5fa1428c6f0dd3d20a0d7b151242ac7f91ab8d784c5b5baa676e27d389a4223a->leave($__internal_5fa1428c6f0dd3d20a0d7b151242ac7f91ab8d784c5b5baa676e27d389a4223a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ef5af8e2a0b5082e6336f0e16257bde299da8da8899b526a6787957ae5d6171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef5af8e2a0b5082e6336f0e16257bde299da8da8899b526a6787957ae5d6171->enter($__internal_8ef5af8e2a0b5082e6336f0e16257bde299da8da8899b526a6787957ae5d6171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0c8692e1e26e6a7657632c287fb3d6f2472ba38f40d2e601455987d61c84a367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c8692e1e26e6a7657632c287fb3d6f2472ba38f40d2e601455987d61c84a367->enter($__internal_0c8692e1e26e6a7657632c287fb3d6f2472ba38f40d2e601455987d61c84a367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Big Food!";
        
        $__internal_0c8692e1e26e6a7657632c287fb3d6f2472ba38f40d2e601455987d61c84a367->leave($__internal_0c8692e1e26e6a7657632c287fb3d6f2472ba38f40d2e601455987d61c84a367_prof);

        
        $__internal_8ef5af8e2a0b5082e6336f0e16257bde299da8da8899b526a6787957ae5d6171->leave($__internal_8ef5af8e2a0b5082e6336f0e16257bde299da8da8899b526a6787957ae5d6171_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ff44187220067880ab58526e2268e2500a156e991e03137339b9152d7eb84cdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff44187220067880ab58526e2268e2500a156e991e03137339b9152d7eb84cdc->enter($__internal_ff44187220067880ab58526e2268e2500a156e991e03137339b9152d7eb84cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_485403f3c06b135b60b281d008ca25b9f8055e89878016045f5710ad0eb7fe85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485403f3c06b135b60b281d008ca25b9f8055e89878016045f5710ad0eb7fe85->enter($__internal_485403f3c06b135b60b281d008ca25b9f8055e89878016045f5710ad0eb7fe85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
            <script
                    src=\"http://code.jquery.com/jquery-3.3.1.js\"
                    integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\"
                    crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_485403f3c06b135b60b281d008ca25b9f8055e89878016045f5710ad0eb7fe85->leave($__internal_485403f3c06b135b60b281d008ca25b9f8055e89878016045f5710ad0eb7fe85_prof);

        
        $__internal_ff44187220067880ab58526e2268e2500a156e991e03137339b9152d7eb84cdc->leave($__internal_ff44187220067880ab58526e2268e2500a156e991e03137339b9152d7eb84cdc_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_639636a2f3484b5c7babac608ea50d02defc3f0be2285b5d8d111b720d14f735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_639636a2f3484b5c7babac608ea50d02defc3f0be2285b5d8d111b720d14f735->enter($__internal_639636a2f3484b5c7babac608ea50d02defc3f0be2285b5d8d111b720d14f735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71a13bb513ec816936e0af55017b9260045eea659bde6089e0974c4b65a5b519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a13bb513ec816936e0af55017b9260045eea659bde6089e0974c4b65a5b519->enter($__internal_71a13bb513ec816936e0af55017b9260045eea659bde6089e0974c4b65a5b519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_71a13bb513ec816936e0af55017b9260045eea659bde6089e0974c4b65a5b519->leave($__internal_71a13bb513ec816936e0af55017b9260045eea659bde6089e0974c4b65a5b519_prof);

        
        $__internal_639636a2f3484b5c7babac608ea50d02defc3f0be2285b5d8d111b720d14f735->leave($__internal_639636a2f3484b5c7babac608ea50d02defc3f0be2285b5d8d111b720d14f735_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d935a8e91902090b6f380ed7af21dbb2947273b519dc49dce2f4a8344a45848a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d935a8e91902090b6f380ed7af21dbb2947273b519dc49dce2f4a8344a45848a->enter($__internal_d935a8e91902090b6f380ed7af21dbb2947273b519dc49dce2f4a8344a45848a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_04eddfd06a2f61c63b2441f0585bc55d37fdeb053df8ba7da6a15a6415b961d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04eddfd06a2f61c63b2441f0585bc55d37fdeb053df8ba7da6a15a6415b961d5->enter($__internal_04eddfd06a2f61c63b2441f0585bc55d37fdeb053df8ba7da6a15a6415b961d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_04eddfd06a2f61c63b2441f0585bc55d37fdeb053df8ba7da6a15a6415b961d5->leave($__internal_04eddfd06a2f61c63b2441f0585bc55d37fdeb053df8ba7da6a15a6415b961d5_prof);

        
        $__internal_d935a8e91902090b6f380ed7af21dbb2947273b519dc49dce2f4a8344a45848a->leave($__internal_d935a8e91902090b6f380ed7af21dbb2947273b519dc49dce2f4a8344a45848a_prof);

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
