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
        $__internal_2bd186954cca478bbf52df2830518dbf4c1cb8473d10183fb17828f46adf9f4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd186954cca478bbf52df2830518dbf4c1cb8473d10183fb17828f46adf9f4d->enter($__internal_2bd186954cca478bbf52df2830518dbf4c1cb8473d10183fb17828f46adf9f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_980d00a8d98458e041cdd375e20d89f9ee2690a4209042afde01f7c942d96782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980d00a8d98458e041cdd375e20d89f9ee2690a4209042afde01f7c942d96782->enter($__internal_980d00a8d98458e041cdd375e20d89f9ee2690a4209042afde01f7c942d96782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bd186954cca478bbf52df2830518dbf4c1cb8473d10183fb17828f46adf9f4d->leave($__internal_2bd186954cca478bbf52df2830518dbf4c1cb8473d10183fb17828f46adf9f4d_prof);

        
        $__internal_980d00a8d98458e041cdd375e20d89f9ee2690a4209042afde01f7c942d96782->leave($__internal_980d00a8d98458e041cdd375e20d89f9ee2690a4209042afde01f7c942d96782_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_517b35ed60c9a3f771b5c23265148a51963f75a0a292c5a6c3071d96214646a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_517b35ed60c9a3f771b5c23265148a51963f75a0a292c5a6c3071d96214646a5->enter($__internal_517b35ed60c9a3f771b5c23265148a51963f75a0a292c5a6c3071d96214646a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5ad20e9aae93450e91444cf6fb1ebfc0f274e889bde42ed27cb64ba94bf60440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad20e9aae93450e91444cf6fb1ebfc0f274e889bde42ed27cb64ba94bf60440->enter($__internal_5ad20e9aae93450e91444cf6fb1ebfc0f274e889bde42ed27cb64ba94bf60440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_5ad20e9aae93450e91444cf6fb1ebfc0f274e889bde42ed27cb64ba94bf60440->leave($__internal_5ad20e9aae93450e91444cf6fb1ebfc0f274e889bde42ed27cb64ba94bf60440_prof);

        
        $__internal_517b35ed60c9a3f771b5c23265148a51963f75a0a292c5a6c3071d96214646a5->leave($__internal_517b35ed60c9a3f771b5c23265148a51963f75a0a292c5a6c3071d96214646a5_prof);

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
