<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_5015aa9d1e54f40b6f0446e962a657a5ff2a74e13843a349eb7a9670f5e18b39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1083421b85d52eaca534220e0555bba01f3fa7b466f3f08ba77a68505f9e5380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1083421b85d52eaca534220e0555bba01f3fa7b466f3f08ba77a68505f9e5380->enter($__internal_1083421b85d52eaca534220e0555bba01f3fa7b466f3f08ba77a68505f9e5380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_e236fd42f1812f5d4be5a289bb85cb008542416cc47a6567e6c435d50b379cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e236fd42f1812f5d4be5a289bb85cb008542416cc47a6567e6c435d50b379cce->enter($__internal_e236fd42f1812f5d4be5a289bb85cb008542416cc47a6567e6c435d50b379cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1083421b85d52eaca534220e0555bba01f3fa7b466f3f08ba77a68505f9e5380->leave($__internal_1083421b85d52eaca534220e0555bba01f3fa7b466f3f08ba77a68505f9e5380_prof);

        
        $__internal_e236fd42f1812f5d4be5a289bb85cb008542416cc47a6567e6c435d50b379cce->leave($__internal_e236fd42f1812f5d4be5a289bb85cb008542416cc47a6567e6c435d50b379cce_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffbba168850468283727380c16d9bdd8d25c30a1516a07763c6a870b3d3542f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffbba168850468283727380c16d9bdd8d25c30a1516a07763c6a870b3d3542f5->enter($__internal_ffbba168850468283727380c16d9bdd8d25c30a1516a07763c6a870b3d3542f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b98665e54d423d81eaa9ae8c6ecf995ebc57c8b634c5280ee8ada145e30319e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b98665e54d423d81eaa9ae8c6ecf995ebc57c8b634c5280ee8ada145e30319e8->enter($__internal_b98665e54d423d81eaa9ae8c6ecf995ebc57c8b634c5280ee8ada145e30319e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b98665e54d423d81eaa9ae8c6ecf995ebc57c8b634c5280ee8ada145e30319e8->leave($__internal_b98665e54d423d81eaa9ae8c6ecf995ebc57c8b634c5280ee8ada145e30319e8_prof);

        
        $__internal_ffbba168850468283727380c16d9bdd8d25c30a1516a07763c6a870b3d3542f5->leave($__internal_ffbba168850468283727380c16d9bdd8d25c30a1516a07763c6a870b3d3542f5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3e53a3c9ce62294579b379d2fa40680d5b9a34a3ee31e8a79a4b6dff268aba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3e53a3c9ce62294579b379d2fa40680d5b9a34a3ee31e8a79a4b6dff268aba5->enter($__internal_f3e53a3c9ce62294579b379d2fa40680d5b9a34a3ee31e8a79a4b6dff268aba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_38e0c0476b1b6240ae7cd26f2435afb017ccf4d5fa86535a3b7e38fd05b78655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e0c0476b1b6240ae7cd26f2435afb017ccf4d5fa86535a3b7e38fd05b78655->enter($__internal_38e0c0476b1b6240ae7cd26f2435afb017ccf4d5fa86535a3b7e38fd05b78655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_38e0c0476b1b6240ae7cd26f2435afb017ccf4d5fa86535a3b7e38fd05b78655->leave($__internal_38e0c0476b1b6240ae7cd26f2435afb017ccf4d5fa86535a3b7e38fd05b78655_prof);

        
        $__internal_f3e53a3c9ce62294579b379d2fa40680d5b9a34a3ee31e8a79a4b6dff268aba5->leave($__internal_f3e53a3c9ce62294579b379d2fa40680d5b9a34a3ee31e8a79a4b6dff268aba5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
