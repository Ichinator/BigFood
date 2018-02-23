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
        $__internal_5cdff41876fab4998a8cf0b7720cda2228912d210ac4898f7aade1efb0f21392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cdff41876fab4998a8cf0b7720cda2228912d210ac4898f7aade1efb0f21392->enter($__internal_5cdff41876fab4998a8cf0b7720cda2228912d210ac4898f7aade1efb0f21392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_cc99925a197e488894e7b65779361b123d4fa49a10c00e38bd701f4365698f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc99925a197e488894e7b65779361b123d4fa49a10c00e38bd701f4365698f83->enter($__internal_cc99925a197e488894e7b65779361b123d4fa49a10c00e38bd701f4365698f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cdff41876fab4998a8cf0b7720cda2228912d210ac4898f7aade1efb0f21392->leave($__internal_5cdff41876fab4998a8cf0b7720cda2228912d210ac4898f7aade1efb0f21392_prof);

        
        $__internal_cc99925a197e488894e7b65779361b123d4fa49a10c00e38bd701f4365698f83->leave($__internal_cc99925a197e488894e7b65779361b123d4fa49a10c00e38bd701f4365698f83_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef2fe21c9f71b08a2fc6c3835f3b39e5571b12934a7a71a3d4466ec5bd9cdaa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef2fe21c9f71b08a2fc6c3835f3b39e5571b12934a7a71a3d4466ec5bd9cdaa0->enter($__internal_ef2fe21c9f71b08a2fc6c3835f3b39e5571b12934a7a71a3d4466ec5bd9cdaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5f70bdeeeffa3a5706b5a19c5e1863b6e66d9995004d47dafba6dcce248b73d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f70bdeeeffa3a5706b5a19c5e1863b6e66d9995004d47dafba6dcce248b73d5->enter($__internal_5f70bdeeeffa3a5706b5a19c5e1863b6e66d9995004d47dafba6dcce248b73d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_5f70bdeeeffa3a5706b5a19c5e1863b6e66d9995004d47dafba6dcce248b73d5->leave($__internal_5f70bdeeeffa3a5706b5a19c5e1863b6e66d9995004d47dafba6dcce248b73d5_prof);

        
        $__internal_ef2fe21c9f71b08a2fc6c3835f3b39e5571b12934a7a71a3d4466ec5bd9cdaa0->leave($__internal_ef2fe21c9f71b08a2fc6c3835f3b39e5571b12934a7a71a3d4466ec5bd9cdaa0_prof);

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
