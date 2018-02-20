<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_fd62065edde32b8aba09bead03299008407c17e9d5fbdf9d18446a0454172d76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1396597b3d8edce9bb810852fabe9634d653a0c40176599da822f3b6a8ba37a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1396597b3d8edce9bb810852fabe9634d653a0c40176599da822f3b6a8ba37a6->enter($__internal_1396597b3d8edce9bb810852fabe9634d653a0c40176599da822f3b6a8ba37a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_a9df77978ee0f502494351d600573777773dcbd5ad35349b2f54aeafbbc1f2af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9df77978ee0f502494351d600573777773dcbd5ad35349b2f54aeafbbc1f2af->enter($__internal_a9df77978ee0f502494351d600573777773dcbd5ad35349b2f54aeafbbc1f2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1396597b3d8edce9bb810852fabe9634d653a0c40176599da822f3b6a8ba37a6->leave($__internal_1396597b3d8edce9bb810852fabe9634d653a0c40176599da822f3b6a8ba37a6_prof);

        
        $__internal_a9df77978ee0f502494351d600573777773dcbd5ad35349b2f54aeafbbc1f2af->leave($__internal_a9df77978ee0f502494351d600573777773dcbd5ad35349b2f54aeafbbc1f2af_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d80d9fe611810105bbfc37f81bad98fd89e7bbf29379b9985d8b03141885c430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d80d9fe611810105bbfc37f81bad98fd89e7bbf29379b9985d8b03141885c430->enter($__internal_d80d9fe611810105bbfc37f81bad98fd89e7bbf29379b9985d8b03141885c430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6dd4e7cfd6ed6d6925c16b82cadd7c01b880b392f41891844f9dfa773ac145e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd4e7cfd6ed6d6925c16b82cadd7c01b880b392f41891844f9dfa773ac145e8->enter($__internal_6dd4e7cfd6ed6d6925c16b82cadd7c01b880b392f41891844f9dfa773ac145e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_6dd4e7cfd6ed6d6925c16b82cadd7c01b880b392f41891844f9dfa773ac145e8->leave($__internal_6dd4e7cfd6ed6d6925c16b82cadd7c01b880b392f41891844f9dfa773ac145e8_prof);

        
        $__internal_d80d9fe611810105bbfc37f81bad98fd89e7bbf29379b9985d8b03141885c430->leave($__internal_d80d9fe611810105bbfc37f81bad98fd89e7bbf29379b9985d8b03141885c430_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
