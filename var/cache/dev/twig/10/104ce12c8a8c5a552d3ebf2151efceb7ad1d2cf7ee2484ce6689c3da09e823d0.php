<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0ff814e272b328f95dd8a1b1f31e70e401a3cd615a0980d8e67516c61b402dc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d121344da4bd10b4385cf62fcba23e48c050d6f017b6ba5639795f9324c6c03e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d121344da4bd10b4385cf62fcba23e48c050d6f017b6ba5639795f9324c6c03e->enter($__internal_d121344da4bd10b4385cf62fcba23e48c050d6f017b6ba5639795f9324c6c03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ffffc9840fe424d461428a52a5ba251c2f435a4b212633a81271f4800b4b7355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffffc9840fe424d461428a52a5ba251c2f435a4b212633a81271f4800b4b7355->enter($__internal_ffffc9840fe424d461428a52a5ba251c2f435a4b212633a81271f4800b4b7355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_d121344da4bd10b4385cf62fcba23e48c050d6f017b6ba5639795f9324c6c03e->leave($__internal_d121344da4bd10b4385cf62fcba23e48c050d6f017b6ba5639795f9324c6c03e_prof);

        
        $__internal_ffffc9840fe424d461428a52a5ba251c2f435a4b212633a81271f4800b4b7355->leave($__internal_ffffc9840fe424d461428a52a5ba251c2f435a4b212633a81271f4800b4b7355_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5daf5ade0cb8c8efc92ab9257bfa3960a6e4fdcb6fbfeb27893d1642caa30205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5daf5ade0cb8c8efc92ab9257bfa3960a6e4fdcb6fbfeb27893d1642caa30205->enter($__internal_5daf5ade0cb8c8efc92ab9257bfa3960a6e4fdcb6fbfeb27893d1642caa30205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f913e1f080165f7e9fb3bc730b5aa04f94d1e5515e7ad211c632652ec93c5d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f913e1f080165f7e9fb3bc730b5aa04f94d1e5515e7ad211c632652ec93c5d5->enter($__internal_4f913e1f080165f7e9fb3bc730b5aa04f94d1e5515e7ad211c632652ec93c5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4f913e1f080165f7e9fb3bc730b5aa04f94d1e5515e7ad211c632652ec93c5d5->leave($__internal_4f913e1f080165f7e9fb3bc730b5aa04f94d1e5515e7ad211c632652ec93c5d5_prof);

        
        $__internal_5daf5ade0cb8c8efc92ab9257bfa3960a6e4fdcb6fbfeb27893d1642caa30205->leave($__internal_5daf5ade0cb8c8efc92ab9257bfa3960a6e4fdcb6fbfeb27893d1642caa30205_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a4a6fbdaf56edfbeae22bbbe8dc896a6e634a68cbfb509157ab53fe3066c7d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4a6fbdaf56edfbeae22bbbe8dc896a6e634a68cbfb509157ab53fe3066c7d37->enter($__internal_a4a6fbdaf56edfbeae22bbbe8dc896a6e634a68cbfb509157ab53fe3066c7d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bc84fc215e00a10fcd1f0c9276c30825c21686e812af2a5f6365b8f172bde461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc84fc215e00a10fcd1f0c9276c30825c21686e812af2a5f6365b8f172bde461->enter($__internal_bc84fc215e00a10fcd1f0c9276c30825c21686e812af2a5f6365b8f172bde461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_bc84fc215e00a10fcd1f0c9276c30825c21686e812af2a5f6365b8f172bde461->leave($__internal_bc84fc215e00a10fcd1f0c9276c30825c21686e812af2a5f6365b8f172bde461_prof);

        
        $__internal_a4a6fbdaf56edfbeae22bbbe8dc896a6e634a68cbfb509157ab53fe3066c7d37->leave($__internal_a4a6fbdaf56edfbeae22bbbe8dc896a6e634a68cbfb509157ab53fe3066c7d37_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a49150c9a8c234399c8a593083b7d73c39104f066a323a4c3ed0ea8025dac35f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a49150c9a8c234399c8a593083b7d73c39104f066a323a4c3ed0ea8025dac35f->enter($__internal_a49150c9a8c234399c8a593083b7d73c39104f066a323a4c3ed0ea8025dac35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa53cde60e1d8598a26736aa0b61cf26738562e2bf2b15ccf761ab635f2440b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa53cde60e1d8598a26736aa0b61cf26738562e2bf2b15ccf761ab635f2440b9->enter($__internal_fa53cde60e1d8598a26736aa0b61cf26738562e2bf2b15ccf761ab635f2440b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fa53cde60e1d8598a26736aa0b61cf26738562e2bf2b15ccf761ab635f2440b9->leave($__internal_fa53cde60e1d8598a26736aa0b61cf26738562e2bf2b15ccf761ab635f2440b9_prof);

        
        $__internal_a49150c9a8c234399c8a593083b7d73c39104f066a323a4c3ed0ea8025dac35f->leave($__internal_a49150c9a8c234399c8a593083b7d73c39104f066a323a4c3ed0ea8025dac35f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
