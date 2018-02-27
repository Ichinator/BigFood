<?php

/* IchinatorNewsBundle:Default:news.html.twig */
class __TwigTemplate_53d5520c5d2aa2eb8becd14ff3a8fda10c158ebc1ffe1c7bbc68b2a96e6d33a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IchinatorNewsBundle:Default:news.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1a5e88fd6f93751a34bf437e4d4a484f78631da5d06da19e8f88c6d0f655f09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1a5e88fd6f93751a34bf437e4d4a484f78631da5d06da19e8f88c6d0f655f09->enter($__internal_a1a5e88fd6f93751a34bf437e4d4a484f78631da5d06da19e8f88c6d0f655f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorNewsBundle:Default:news.html.twig"));

        $__internal_c103af9fdf32c6603ab2693911bc7f0e7157581b9a04b64633abcfc5e998f5ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c103af9fdf32c6603ab2693911bc7f0e7157581b9a04b64633abcfc5e998f5ac->enter($__internal_c103af9fdf32c6603ab2693911bc7f0e7157581b9a04b64633abcfc5e998f5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorNewsBundle:Default:news.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1a5e88fd6f93751a34bf437e4d4a484f78631da5d06da19e8f88c6d0f655f09->leave($__internal_a1a5e88fd6f93751a34bf437e4d4a484f78631da5d06da19e8f88c6d0f655f09_prof);

        
        $__internal_c103af9fdf32c6603ab2693911bc7f0e7157581b9a04b64633abcfc5e998f5ac->leave($__internal_c103af9fdf32c6603ab2693911bc7f0e7157581b9a04b64633abcfc5e998f5ac_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a1873af16ed20a8ba586208d467159bfaffd52ffd0f332c00252bcf636c37d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a1873af16ed20a8ba586208d467159bfaffd52ffd0f332c00252bcf636c37d9->enter($__internal_3a1873af16ed20a8ba586208d467159bfaffd52ffd0f332c00252bcf636c37d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e069fb5aa3a79f834674cecdfaf653dc676b6e96a666e9d0e107a21bd8dbf6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e069fb5aa3a79f834674cecdfaf653dc676b6e96a666e9d0e107a21bd8dbf6b->enter($__internal_0e069fb5aa3a79f834674cecdfaf653dc676b6e96a666e9d0e107a21bd8dbf6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"row\">
        <div class=\"col-sm-8\">
            ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_0e069fb5aa3a79f834674cecdfaf653dc676b6e96a666e9d0e107a21bd8dbf6b->leave($__internal_0e069fb5aa3a79f834674cecdfaf653dc676b6e96a666e9d0e107a21bd8dbf6b_prof);

        
        $__internal_3a1873af16ed20a8ba586208d467159bfaffd52ffd0f332c00252bcf636c37d9->leave($__internal_3a1873af16ed20a8ba586208d467159bfaffd52ffd0f332c00252bcf636c37d9_prof);

    }

    public function getTemplateName()
    {
        return "IchinatorNewsBundle:Default:news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 8,  60 => 7,  56 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
    {{ parent() }}
    <div class=\"row\">
        <div class=\"col-sm-8\">
            {{ form_start(form) }}
            {{ form_widget(form) }}
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}", "IchinatorNewsBundle:Default:news.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/NewsBundle/Resources/views/Default/news.html.twig");
    }
}
