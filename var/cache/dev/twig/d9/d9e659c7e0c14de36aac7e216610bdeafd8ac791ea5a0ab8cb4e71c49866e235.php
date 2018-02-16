<?php

/* base.html.twig */
class __TwigTemplate_01675717be6cd338285ff7916a3e8e5c8aff26b73256eb1bd9006933a880d175 extends Twig_Template
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
        $__internal_d91aafad80cb4e2a7dc11d61df78e4b9aa639794c377907e794899c2eb7df840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d91aafad80cb4e2a7dc11d61df78e4b9aa639794c377907e794899c2eb7df840->enter($__internal_d91aafad80cb4e2a7dc11d61df78e4b9aa639794c377907e794899c2eb7df840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fd550abeb496adb67efa1959f579e28b5a7657e4cb97cff4b66cb320aeceed0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd550abeb496adb67efa1959f579e28b5a7657e4cb97cff4b66cb320aeceed0c->enter($__internal_fd550abeb496adb67efa1959f579e28b5a7657e4cb97cff4b66cb320aeceed0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "    </body>
</html>
";
        
        $__internal_d91aafad80cb4e2a7dc11d61df78e4b9aa639794c377907e794899c2eb7df840->leave($__internal_d91aafad80cb4e2a7dc11d61df78e4b9aa639794c377907e794899c2eb7df840_prof);

        
        $__internal_fd550abeb496adb67efa1959f579e28b5a7657e4cb97cff4b66cb320aeceed0c->leave($__internal_fd550abeb496adb67efa1959f579e28b5a7657e4cb97cff4b66cb320aeceed0c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_264bff1725e16240551f10f6b319da123ea0e44cc635096fb33660d5b2995e6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_264bff1725e16240551f10f6b319da123ea0e44cc635096fb33660d5b2995e6a->enter($__internal_264bff1725e16240551f10f6b319da123ea0e44cc635096fb33660d5b2995e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5f8f7dd2ee51e9736fc197ce8626bd0020d6da5fe7ae814a87392ee301763af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f8f7dd2ee51e9736fc197ce8626bd0020d6da5fe7ae814a87392ee301763af->enter($__internal_c5f8f7dd2ee51e9736fc197ce8626bd0020d6da5fe7ae814a87392ee301763af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Big Food!";
        
        $__internal_c5f8f7dd2ee51e9736fc197ce8626bd0020d6da5fe7ae814a87392ee301763af->leave($__internal_c5f8f7dd2ee51e9736fc197ce8626bd0020d6da5fe7ae814a87392ee301763af_prof);

        
        $__internal_264bff1725e16240551f10f6b319da123ea0e44cc635096fb33660d5b2995e6a->leave($__internal_264bff1725e16240551f10f6b319da123ea0e44cc635096fb33660d5b2995e6a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba63d1e2dd23b70ccd5fd6e906d424de6237eca75323257f436645281bcd1a52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba63d1e2dd23b70ccd5fd6e906d424de6237eca75323257f436645281bcd1a52->enter($__internal_ba63d1e2dd23b70ccd5fd6e906d424de6237eca75323257f436645281bcd1a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c0e5d8d13ee76bc8e5e02f124f0c69d5badbb0bb58fdfb81633a0529022f6f92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e5d8d13ee76bc8e5e02f124f0c69d5badbb0bb58fdfb81633a0529022f6f92->enter($__internal_c0e5d8d13ee76bc8e5e02f124f0c69d5badbb0bb58fdfb81633a0529022f6f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
        ";
        
        $__internal_c0e5d8d13ee76bc8e5e02f124f0c69d5badbb0bb58fdfb81633a0529022f6f92->leave($__internal_c0e5d8d13ee76bc8e5e02f124f0c69d5badbb0bb58fdfb81633a0529022f6f92_prof);

        
        $__internal_ba63d1e2dd23b70ccd5fd6e906d424de6237eca75323257f436645281bcd1a52->leave($__internal_ba63d1e2dd23b70ccd5fd6e906d424de6237eca75323257f436645281bcd1a52_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_677ee88c8d265a51f1bd0d310d418e2931fab152787dc0527e579bc885c2c943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_677ee88c8d265a51f1bd0d310d418e2931fab152787dc0527e579bc885c2c943->enter($__internal_677ee88c8d265a51f1bd0d310d418e2931fab152787dc0527e579bc885c2c943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ccf8a0bc6cdea56aa06fa55081e7422b47ea979c350a767822e7920e124d59ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccf8a0bc6cdea56aa06fa55081e7422b47ea979c350a767822e7920e124d59ed->enter($__internal_ccf8a0bc6cdea56aa06fa55081e7422b47ea979c350a767822e7920e124d59ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "            <nav class=\"navbar navbar-expand-sm bg-dark navbar-dark\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbardrop\" data-toggle=\"dropdown\">
                            La bouffe
                        </a>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ichinator_burger");
        echo "\">Nos burgers</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ichinator_plat");
        echo "\">Nos plats</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ichinator_dessert");
        echo "\">Nos desserts</a>
                        </div>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ichinator_command_homepage");
        echo "\">Passez une commande</a>
                    </li>
                    ";
        // line 32
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 33
            echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbardrop\" data-toggle=\"dropdown\">
                                Mon compte
                            </a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">Voir compte</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">Editer le compte</a>
                            </div>
                        </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a>
                    </li>

                    ";
        } else {
            // line 47
            echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbardrop\" data-toggle=\"dropdown\">
                                Mon compte
                            </a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">S'inscrire</a>
                                <a class=\"dropdown-item\" href=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Se connecter</a>
                            </div>
                        </li>
                    ";
        }
        // line 57
        echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ichinator_contact_homepage");
        echo "\">Nous contacter</a>
                    </li>
                </ul>
            </nav>
        ";
        
        $__internal_ccf8a0bc6cdea56aa06fa55081e7422b47ea979c350a767822e7920e124d59ed->leave($__internal_ccf8a0bc6cdea56aa06fa55081e7422b47ea979c350a767822e7920e124d59ed_prof);

        
        $__internal_677ee88c8d265a51f1bd0d310d418e2931fab152787dc0527e579bc885c2c943->leave($__internal_677ee88c8d265a51f1bd0d310d418e2931fab152787dc0527e579bc885c2c943_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1df2d4448c2acd2204eb113f3f9d3d77a3e08a945cd35be768746b9ad4b550e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df2d4448c2acd2204eb113f3f9d3d77a3e08a945cd35be768746b9ad4b550e6->enter($__internal_1df2d4448c2acd2204eb113f3f9d3d77a3e08a945cd35be768746b9ad4b550e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f3c149e82d4b589cccca1da4f68f1187ba795f2680251c705adf10910fda6b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c149e82d4b589cccca1da4f68f1187ba795f2680251c705adf10910fda6b97->enter($__internal_f3c149e82d4b589cccca1da4f68f1187ba795f2680251c705adf10910fda6b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "            <script
                    src=\"http://code.jquery.com/jquery-3.3.1.js\"
                    integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\"
                    crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_f3c149e82d4b589cccca1da4f68f1187ba795f2680251c705adf10910fda6b97->leave($__internal_f3c149e82d4b589cccca1da4f68f1187ba795f2680251c705adf10910fda6b97_prof);

        
        $__internal_1df2d4448c2acd2204eb113f3f9d3d77a3e08a945cd35be768746b9ad4b550e6->leave($__internal_1df2d4448c2acd2204eb113f3f9d3d77a3e08a945cd35be768746b9ad4b550e6_prof);

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
        return array (  220 => 64,  211 => 63,  196 => 58,  193 => 57,  186 => 53,  182 => 52,  175 => 47,  168 => 43,  161 => 39,  157 => 38,  150 => 33,  148 => 32,  143 => 30,  135 => 25,  131 => 24,  127 => 23,  117 => 16,  112 => 13,  103 => 12,  92 => 7,  83 => 6,  65 => 5,  53 => 70,  50 => 63,  48 => 12,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
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
                            La bouffe
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
            <script
                    src=\"http://code.jquery.com/jquery-3.3.1.js\"
                    integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\"
                    crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/ichinator/BigFood/app/Resources/views/base.html.twig");
    }
}
