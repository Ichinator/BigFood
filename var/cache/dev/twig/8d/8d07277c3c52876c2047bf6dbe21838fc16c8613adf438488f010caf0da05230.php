<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a67fba8df9869499da2afafad7ead5db4b26f2ee6b712b1867dd38d0d9e41f5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_b21aaf0237449a1c4a9a1d12a78b0ce07c83e54acef2e9ae3466d793b2202b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b21aaf0237449a1c4a9a1d12a78b0ce07c83e54acef2e9ae3466d793b2202b78->enter($__internal_b21aaf0237449a1c4a9a1d12a78b0ce07c83e54acef2e9ae3466d793b2202b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_0c4d93a43ff5061e4da09e6dca30d84d567da04856d04ea8227f30303ea428e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4d93a43ff5061e4da09e6dca30d84d567da04856d04ea8227f30303ea428e2->enter($__internal_0c4d93a43ff5061e4da09e6dca30d84d567da04856d04ea8227f30303ea428e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b21aaf0237449a1c4a9a1d12a78b0ce07c83e54acef2e9ae3466d793b2202b78->leave($__internal_b21aaf0237449a1c4a9a1d12a78b0ce07c83e54acef2e9ae3466d793b2202b78_prof);

        
        $__internal_0c4d93a43ff5061e4da09e6dca30d84d567da04856d04ea8227f30303ea428e2->leave($__internal_0c4d93a43ff5061e4da09e6dca30d84d567da04856d04ea8227f30303ea428e2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e632b11a322e11c6530a7d1113aeb009d30a01e85dc0f3ea0cd97a3cbe0d944f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e632b11a322e11c6530a7d1113aeb009d30a01e85dc0f3ea0cd97a3cbe0d944f->enter($__internal_e632b11a322e11c6530a7d1113aeb009d30a01e85dc0f3ea0cd97a3cbe0d944f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6f1d648e33682ef7a648a3576de431794493ee1054fb96ea5cf6ddeae2fba18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1d648e33682ef7a648a3576de431794493ee1054fb96ea5cf6ddeae2fba18c->enter($__internal_6f1d648e33682ef7a648a3576de431794493ee1054fb96ea5cf6ddeae2fba18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_6f1d648e33682ef7a648a3576de431794493ee1054fb96ea5cf6ddeae2fba18c->leave($__internal_6f1d648e33682ef7a648a3576de431794493ee1054fb96ea5cf6ddeae2fba18c_prof);

        
        $__internal_e632b11a322e11c6530a7d1113aeb009d30a01e85dc0f3ea0cd97a3cbe0d944f->leave($__internal_e632b11a322e11c6530a7d1113aeb009d30a01e85dc0f3ea0cd97a3cbe0d944f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
