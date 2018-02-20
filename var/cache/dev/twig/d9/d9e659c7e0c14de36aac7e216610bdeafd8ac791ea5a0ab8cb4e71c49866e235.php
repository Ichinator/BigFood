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
        $__internal_38b9470649958a9bdde83d5de43dc6a59f28f3214fd42a6fc4e70a423304c648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b9470649958a9bdde83d5de43dc6a59f28f3214fd42a6fc4e70a423304c648->enter($__internal_38b9470649958a9bdde83d5de43dc6a59f28f3214fd42a6fc4e70a423304c648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c5284cca289f97455761afb0f53e6f974a873604912f1914c6e2f9e66a7da175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5284cca289f97455761afb0f53e6f974a873604912f1914c6e2f9e66a7da175->enter($__internal_c5284cca289f97455761afb0f53e6f974a873604912f1914c6e2f9e66a7da175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_38b9470649958a9bdde83d5de43dc6a59f28f3214fd42a6fc4e70a423304c648->leave($__internal_38b9470649958a9bdde83d5de43dc6a59f28f3214fd42a6fc4e70a423304c648_prof);

        
        $__internal_c5284cca289f97455761afb0f53e6f974a873604912f1914c6e2f9e66a7da175->leave($__internal_c5284cca289f97455761afb0f53e6f974a873604912f1914c6e2f9e66a7da175_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ef761bea25852fb781ed8659ff95547ed299905e1f8e29c3f9568d883882c08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ef761bea25852fb781ed8659ff95547ed299905e1f8e29c3f9568d883882c08->enter($__internal_9ef761bea25852fb781ed8659ff95547ed299905e1f8e29c3f9568d883882c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5e48afc7751109107a81826d16cf146803a76d7a37b8ec117376a234f62b3661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e48afc7751109107a81826d16cf146803a76d7a37b8ec117376a234f62b3661->enter($__internal_5e48afc7751109107a81826d16cf146803a76d7a37b8ec117376a234f62b3661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Big Food!";
        
        $__internal_5e48afc7751109107a81826d16cf146803a76d7a37b8ec117376a234f62b3661->leave($__internal_5e48afc7751109107a81826d16cf146803a76d7a37b8ec117376a234f62b3661_prof);

        
        $__internal_9ef761bea25852fb781ed8659ff95547ed299905e1f8e29c3f9568d883882c08->leave($__internal_9ef761bea25852fb781ed8659ff95547ed299905e1f8e29c3f9568d883882c08_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1fc5846d91e7de188651c54d2409dfd9a9f70f346360e3bda32dc1d987771626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fc5846d91e7de188651c54d2409dfd9a9f70f346360e3bda32dc1d987771626->enter($__internal_1fc5846d91e7de188651c54d2409dfd9a9f70f346360e3bda32dc1d987771626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6ed3c3be1fcddbbb8ae55e95545de6e5c0ce78705c47b301ac092319de47e41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed3c3be1fcddbbb8ae55e95545de6e5c0ce78705c47b301ac092319de47e41e->enter($__internal_6ed3c3be1fcddbbb8ae55e95545de6e5c0ce78705c47b301ac092319de47e41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
        ";
        
        $__internal_6ed3c3be1fcddbbb8ae55e95545de6e5c0ce78705c47b301ac092319de47e41e->leave($__internal_6ed3c3be1fcddbbb8ae55e95545de6e5c0ce78705c47b301ac092319de47e41e_prof);

        
        $__internal_1fc5846d91e7de188651c54d2409dfd9a9f70f346360e3bda32dc1d987771626->leave($__internal_1fc5846d91e7de188651c54d2409dfd9a9f70f346360e3bda32dc1d987771626_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_39185e39f00b5cddf832ac9934a58eaf49d738d7cfcd06f0cfcd2cc049f4a2c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39185e39f00b5cddf832ac9934a58eaf49d738d7cfcd06f0cfcd2cc049f4a2c2->enter($__internal_39185e39f00b5cddf832ac9934a58eaf49d738d7cfcd06f0cfcd2cc049f4a2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af2f9f755facb5b2b87314b4090e954b1ced098e01da2a70c03eac57f6a29443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2f9f755facb5b2b87314b4090e954b1ced098e01da2a70c03eac57f6a29443->enter($__internal_af2f9f755facb5b2b87314b4090e954b1ced098e01da2a70c03eac57f6a29443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_af2f9f755facb5b2b87314b4090e954b1ced098e01da2a70c03eac57f6a29443->leave($__internal_af2f9f755facb5b2b87314b4090e954b1ced098e01da2a70c03eac57f6a29443_prof);

        
        $__internal_39185e39f00b5cddf832ac9934a58eaf49d738d7cfcd06f0cfcd2cc049f4a2c2->leave($__internal_39185e39f00b5cddf832ac9934a58eaf49d738d7cfcd06f0cfcd2cc049f4a2c2_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_28a4da8a62d93d669452149242804536f31ee52cb5b198c1155c8cce89ab48b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a4da8a62d93d669452149242804536f31ee52cb5b198c1155c8cce89ab48b8->enter($__internal_28a4da8a62d93d669452149242804536f31ee52cb5b198c1155c8cce89ab48b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_57b0d6e487922a6f6ce9aa79a301dee4b7afe7264b57294476e4c082525bb81b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b0d6e487922a6f6ce9aa79a301dee4b7afe7264b57294476e4c082525bb81b->enter($__internal_57b0d6e487922a6f6ce9aa79a301dee4b7afe7264b57294476e4c082525bb81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "            <script
                    src=\"http://code.jquery.com/jquery-3.3.1.js\"
                    integrity=\"sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=\"
                    crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_57b0d6e487922a6f6ce9aa79a301dee4b7afe7264b57294476e4c082525bb81b->leave($__internal_57b0d6e487922a6f6ce9aa79a301dee4b7afe7264b57294476e4c082525bb81b_prof);

        
        $__internal_28a4da8a62d93d669452149242804536f31ee52cb5b198c1155c8cce89ab48b8->leave($__internal_28a4da8a62d93d669452149242804536f31ee52cb5b198c1155c8cce89ab48b8_prof);

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
", "base.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/views/base.html.twig");
    }
}
