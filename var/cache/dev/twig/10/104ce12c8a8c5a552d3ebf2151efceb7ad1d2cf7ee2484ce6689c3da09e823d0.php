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
        $__internal_94e78ee3aec02d55de8b0e29e9cac9fdf4721c77740248e720fbf767b92950b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94e78ee3aec02d55de8b0e29e9cac9fdf4721c77740248e720fbf767b92950b2->enter($__internal_94e78ee3aec02d55de8b0e29e9cac9fdf4721c77740248e720fbf767b92950b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f628e954f3763e964c2818162974d6649b04af61b29b8e6d0f47a96f1a253a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f628e954f3763e964c2818162974d6649b04af61b29b8e6d0f47a96f1a253a99->enter($__internal_f628e954f3763e964c2818162974d6649b04af61b29b8e6d0f47a96f1a253a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_94e78ee3aec02d55de8b0e29e9cac9fdf4721c77740248e720fbf767b92950b2->leave($__internal_94e78ee3aec02d55de8b0e29e9cac9fdf4721c77740248e720fbf767b92950b2_prof);

        
        $__internal_f628e954f3763e964c2818162974d6649b04af61b29b8e6d0f47a96f1a253a99->leave($__internal_f628e954f3763e964c2818162974d6649b04af61b29b8e6d0f47a96f1a253a99_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0afdafd9fd4778f617c227a202d0449b876dc427330f79c8ebf07868974325e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0afdafd9fd4778f617c227a202d0449b876dc427330f79c8ebf07868974325e->enter($__internal_a0afdafd9fd4778f617c227a202d0449b876dc427330f79c8ebf07868974325e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f420ac4669dd864cc0790a8b9716771ac4619f56ae6d45a5ac879326cdc097dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f420ac4669dd864cc0790a8b9716771ac4619f56ae6d45a5ac879326cdc097dd->enter($__internal_f420ac4669dd864cc0790a8b9716771ac4619f56ae6d45a5ac879326cdc097dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f420ac4669dd864cc0790a8b9716771ac4619f56ae6d45a5ac879326cdc097dd->leave($__internal_f420ac4669dd864cc0790a8b9716771ac4619f56ae6d45a5ac879326cdc097dd_prof);

        
        $__internal_a0afdafd9fd4778f617c227a202d0449b876dc427330f79c8ebf07868974325e->leave($__internal_a0afdafd9fd4778f617c227a202d0449b876dc427330f79c8ebf07868974325e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ca524c767ec9d94b2e12ae244b1efc9ce85a403dcc354618b2df6390c1d009d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ca524c767ec9d94b2e12ae244b1efc9ce85a403dcc354618b2df6390c1d009d->enter($__internal_0ca524c767ec9d94b2e12ae244b1efc9ce85a403dcc354618b2df6390c1d009d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e27d2570e3b7169862ebc5a8c97bcc6089dd3253e19a779c0f808d7e633a979a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27d2570e3b7169862ebc5a8c97bcc6089dd3253e19a779c0f808d7e633a979a->enter($__internal_e27d2570e3b7169862ebc5a8c97bcc6089dd3253e19a779c0f808d7e633a979a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e27d2570e3b7169862ebc5a8c97bcc6089dd3253e19a779c0f808d7e633a979a->leave($__internal_e27d2570e3b7169862ebc5a8c97bcc6089dd3253e19a779c0f808d7e633a979a_prof);

        
        $__internal_0ca524c767ec9d94b2e12ae244b1efc9ce85a403dcc354618b2df6390c1d009d->leave($__internal_0ca524c767ec9d94b2e12ae244b1efc9ce85a403dcc354618b2df6390c1d009d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_222769369e227b8e1dbd19238311439e35cacba9f8fea88049ce6fa8d6e0a992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_222769369e227b8e1dbd19238311439e35cacba9f8fea88049ce6fa8d6e0a992->enter($__internal_222769369e227b8e1dbd19238311439e35cacba9f8fea88049ce6fa8d6e0a992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_977ba3a7d6848ff5ccb02c0466ad70dd5f7356acd6f53b080017e96a4afd13a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977ba3a7d6848ff5ccb02c0466ad70dd5f7356acd6f53b080017e96a4afd13a3->enter($__internal_977ba3a7d6848ff5ccb02c0466ad70dd5f7356acd6f53b080017e96a4afd13a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_977ba3a7d6848ff5ccb02c0466ad70dd5f7356acd6f53b080017e96a4afd13a3->leave($__internal_977ba3a7d6848ff5ccb02c0466ad70dd5f7356acd6f53b080017e96a4afd13a3_prof);

        
        $__internal_222769369e227b8e1dbd19238311439e35cacba9f8fea88049ce6fa8d6e0a992->leave($__internal_222769369e227b8e1dbd19238311439e35cacba9f8fea88049ce6fa8d6e0a992_prof);

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
