<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c9d837572b13dd37d1e25a3546eb49b80a7b9514b3129ac0d7c652fbc9f370c4 extends Twig_Template
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
        $__internal_2513a2abdcf632cf8c94b16f33001ea8e0b814cf59ac86d549881f2ebae5c9b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2513a2abdcf632cf8c94b16f33001ea8e0b814cf59ac86d549881f2ebae5c9b9->enter($__internal_2513a2abdcf632cf8c94b16f33001ea8e0b814cf59ac86d549881f2ebae5c9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_58e6ad4bb5813aaa680a5d196556fb692b788eb908e71cb7ee23605d732038a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e6ad4bb5813aaa680a5d196556fb692b788eb908e71cb7ee23605d732038a2->enter($__internal_58e6ad4bb5813aaa680a5d196556fb692b788eb908e71cb7ee23605d732038a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_2513a2abdcf632cf8c94b16f33001ea8e0b814cf59ac86d549881f2ebae5c9b9->leave($__internal_2513a2abdcf632cf8c94b16f33001ea8e0b814cf59ac86d549881f2ebae5c9b9_prof);

        
        $__internal_58e6ad4bb5813aaa680a5d196556fb692b788eb908e71cb7ee23605d732038a2->leave($__internal_58e6ad4bb5813aaa680a5d196556fb692b788eb908e71cb7ee23605d732038a2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5faccbc2281037d4759439ef4acf7c2765b6cd9d5e52a236efc570487d39ff37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5faccbc2281037d4759439ef4acf7c2765b6cd9d5e52a236efc570487d39ff37->enter($__internal_5faccbc2281037d4759439ef4acf7c2765b6cd9d5e52a236efc570487d39ff37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_73983278010bdf6a256649ffa8dfc9ee9efab0c84b150dd6719938661d34e284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73983278010bdf6a256649ffa8dfc9ee9efab0c84b150dd6719938661d34e284->enter($__internal_73983278010bdf6a256649ffa8dfc9ee9efab0c84b150dd6719938661d34e284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_73983278010bdf6a256649ffa8dfc9ee9efab0c84b150dd6719938661d34e284->leave($__internal_73983278010bdf6a256649ffa8dfc9ee9efab0c84b150dd6719938661d34e284_prof);

        
        $__internal_5faccbc2281037d4759439ef4acf7c2765b6cd9d5e52a236efc570487d39ff37->leave($__internal_5faccbc2281037d4759439ef4acf7c2765b6cd9d5e52a236efc570487d39ff37_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e5e6b6951a0233bbd353d302c7bb2523c799febce76ad4ca7d5723a5a1975c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e5e6b6951a0233bbd353d302c7bb2523c799febce76ad4ca7d5723a5a1975c7->enter($__internal_5e5e6b6951a0233bbd353d302c7bb2523c799febce76ad4ca7d5723a5a1975c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dfd4126a258deb7d89a3c420352cd4bace5abba8232f62f55a143e09b47b14b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd4126a258deb7d89a3c420352cd4bace5abba8232f62f55a143e09b47b14b0->enter($__internal_dfd4126a258deb7d89a3c420352cd4bace5abba8232f62f55a143e09b47b14b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_dfd4126a258deb7d89a3c420352cd4bace5abba8232f62f55a143e09b47b14b0->leave($__internal_dfd4126a258deb7d89a3c420352cd4bace5abba8232f62f55a143e09b47b14b0_prof);

        
        $__internal_5e5e6b6951a0233bbd353d302c7bb2523c799febce76ad4ca7d5723a5a1975c7->leave($__internal_5e5e6b6951a0233bbd353d302c7bb2523c799febce76ad4ca7d5723a5a1975c7_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfc191b97d77fb66be48c5d2788b334d551091c993130e0f09e112756e86450b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfc191b97d77fb66be48c5d2788b334d551091c993130e0f09e112756e86450b->enter($__internal_bfc191b97d77fb66be48c5d2788b334d551091c993130e0f09e112756e86450b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e07754d5984644581f6683d448fe7cf4dedd5f0d313049ccd0d9f76ffdcb0bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e07754d5984644581f6683d448fe7cf4dedd5f0d313049ccd0d9f76ffdcb0bdb->enter($__internal_e07754d5984644581f6683d448fe7cf4dedd5f0d313049ccd0d9f76ffdcb0bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e07754d5984644581f6683d448fe7cf4dedd5f0d313049ccd0d9f76ffdcb0bdb->leave($__internal_e07754d5984644581f6683d448fe7cf4dedd5f0d313049ccd0d9f76ffdcb0bdb_prof);

        
        $__internal_bfc191b97d77fb66be48c5d2788b334d551091c993130e0f09e112756e86450b->leave($__internal_bfc191b97d77fb66be48c5d2788b334d551091c993130e0f09e112756e86450b_prof);

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
