<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_ce64080bbb84bea7ac51316c191e1933a8d4244ce6b5f89650e44e5ba78bfe55 extends Twig_Template
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
        $__internal_9d0b0f6e05b3f96641aa00b0413c5e3b0fea7de1be0d15d4cf605030d458170d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d0b0f6e05b3f96641aa00b0413c5e3b0fea7de1be0d15d4cf605030d458170d->enter($__internal_9d0b0f6e05b3f96641aa00b0413c5e3b0fea7de1be0d15d4cf605030d458170d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_d85d34e1e08dc66bfdfe67a725cdc299503b1c89be5235ba9e0293bdbbdbb3cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85d34e1e08dc66bfdfe67a725cdc299503b1c89be5235ba9e0293bdbbdbb3cb->enter($__internal_d85d34e1e08dc66bfdfe67a725cdc299503b1c89be5235ba9e0293bdbbdbb3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_9d0b0f6e05b3f96641aa00b0413c5e3b0fea7de1be0d15d4cf605030d458170d->leave($__internal_9d0b0f6e05b3f96641aa00b0413c5e3b0fea7de1be0d15d4cf605030d458170d_prof);

        
        $__internal_d85d34e1e08dc66bfdfe67a725cdc299503b1c89be5235ba9e0293bdbbdbb3cb->leave($__internal_d85d34e1e08dc66bfdfe67a725cdc299503b1c89be5235ba9e0293bdbbdbb3cb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f25f10b35b03b65d1c9e025d0658d4be1f8f405a01a3f1a61dd6d05ed1a9f7a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f25f10b35b03b65d1c9e025d0658d4be1f8f405a01a3f1a61dd6d05ed1a9f7a4->enter($__internal_f25f10b35b03b65d1c9e025d0658d4be1f8f405a01a3f1a61dd6d05ed1a9f7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_75a7b36aa72ccf1a1bed74973d1ac2e42dab8b80b07479bec88853b6cbe60df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a7b36aa72ccf1a1bed74973d1ac2e42dab8b80b07479bec88853b6cbe60df8->enter($__internal_75a7b36aa72ccf1a1bed74973d1ac2e42dab8b80b07479bec88853b6cbe60df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_75a7b36aa72ccf1a1bed74973d1ac2e42dab8b80b07479bec88853b6cbe60df8->leave($__internal_75a7b36aa72ccf1a1bed74973d1ac2e42dab8b80b07479bec88853b6cbe60df8_prof);

        
        $__internal_f25f10b35b03b65d1c9e025d0658d4be1f8f405a01a3f1a61dd6d05ed1a9f7a4->leave($__internal_f25f10b35b03b65d1c9e025d0658d4be1f8f405a01a3f1a61dd6d05ed1a9f7a4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d4280b0abb014ba6c7a67598cf12aaea4af6ae3901545e814897fd1d8c4e1e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4280b0abb014ba6c7a67598cf12aaea4af6ae3901545e814897fd1d8c4e1e13->enter($__internal_d4280b0abb014ba6c7a67598cf12aaea4af6ae3901545e814897fd1d8c4e1e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8368bd165b02842891011d4b3257bb0b65f6b394a0face11fbe0b63f6519aed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8368bd165b02842891011d4b3257bb0b65f6b394a0face11fbe0b63f6519aed5->enter($__internal_8368bd165b02842891011d4b3257bb0b65f6b394a0face11fbe0b63f6519aed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_8368bd165b02842891011d4b3257bb0b65f6b394a0face11fbe0b63f6519aed5->leave($__internal_8368bd165b02842891011d4b3257bb0b65f6b394a0face11fbe0b63f6519aed5_prof);

        
        $__internal_d4280b0abb014ba6c7a67598cf12aaea4af6ae3901545e814897fd1d8c4e1e13->leave($__internal_d4280b0abb014ba6c7a67598cf12aaea4af6ae3901545e814897fd1d8c4e1e13_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_cec06fdbc4f60e89db746ad31809110273c588e8f365d75f049d000f3630a71f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cec06fdbc4f60e89db746ad31809110273c588e8f365d75f049d000f3630a71f->enter($__internal_cec06fdbc4f60e89db746ad31809110273c588e8f365d75f049d000f3630a71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_edcb8e867d19880184ce4a74975ca1663edae8f75661f8954d60420368adce3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edcb8e867d19880184ce4a74975ca1663edae8f75661f8954d60420368adce3d->enter($__internal_edcb8e867d19880184ce4a74975ca1663edae8f75661f8954d60420368adce3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_edcb8e867d19880184ce4a74975ca1663edae8f75661f8954d60420368adce3d->leave($__internal_edcb8e867d19880184ce4a74975ca1663edae8f75661f8954d60420368adce3d_prof);

        
        $__internal_cec06fdbc4f60e89db746ad31809110273c588e8f365d75f049d000f3630a71f->leave($__internal_cec06fdbc4f60e89db746ad31809110273c588e8f365d75f049d000f3630a71f_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a38def5262d70b35a75bb3d1df24e784c9fca08e4fdb88938bba6ddb667a46f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a38def5262d70b35a75bb3d1df24e784c9fca08e4fdb88938bba6ddb667a46f5->enter($__internal_a38def5262d70b35a75bb3d1df24e784c9fca08e4fdb88938bba6ddb667a46f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c15bdf3e2309cc24c6549e2e75ff6a85dd4c4b3fd32f000517a2404ca9fc52c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15bdf3e2309cc24c6549e2e75ff6a85dd4c4b3fd32f000517a2404ca9fc52c0->enter($__internal_c15bdf3e2309cc24c6549e2e75ff6a85dd4c4b3fd32f000517a2404ca9fc52c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_c15bdf3e2309cc24c6549e2e75ff6a85dd4c4b3fd32f000517a2404ca9fc52c0->leave($__internal_c15bdf3e2309cc24c6549e2e75ff6a85dd4c4b3fd32f000517a2404ca9fc52c0_prof);

        
        $__internal_a38def5262d70b35a75bb3d1df24e784c9fca08e4fdb88938bba6ddb667a46f5->leave($__internal_a38def5262d70b35a75bb3d1df24e784c9fca08e4fdb88938bba6ddb667a46f5_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 19,  134 => 15,  132 => 14,  123 => 13,  105 => 12,  92 => 7,  83 => 6,  65 => 5,  53 => 22,  50 => 13,  48 => 12,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title 'CoreSphere Console' %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/base.css') }}\" type=\"text/css\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body '' %}
        {% block javascripts %}
            {# Load jQuery from Google CDN with a local fallback when not laded yet #}
            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\\\"><\\/script>\");
            </script>
        {% endblock %}
    </body>
</html>
", "CoreSphereConsoleBundle::base.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/coresphere/console-bundle/Resources/views/base.html.twig");
    }
}
