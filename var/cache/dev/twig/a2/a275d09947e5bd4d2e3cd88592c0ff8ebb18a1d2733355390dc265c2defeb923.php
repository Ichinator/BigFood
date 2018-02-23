<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_239e1ed1199c315e307c0dcffe8e500831ca724be279a268ea3b39867108a9ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_a12cdd88da814c4c28fe8f8c2dbee0ef39a248ad1d087876fd072fd45f66e787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a12cdd88da814c4c28fe8f8c2dbee0ef39a248ad1d087876fd072fd45f66e787->enter($__internal_a12cdd88da814c4c28fe8f8c2dbee0ef39a248ad1d087876fd072fd45f66e787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_35fe6bc3f77def21e84180b40a295a1e6625307d4ab135a10bbf1a405ee53505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35fe6bc3f77def21e84180b40a295a1e6625307d4ab135a10bbf1a405ee53505->enter($__internal_35fe6bc3f77def21e84180b40a295a1e6625307d4ab135a10bbf1a405ee53505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a12cdd88da814c4c28fe8f8c2dbee0ef39a248ad1d087876fd072fd45f66e787->leave($__internal_a12cdd88da814c4c28fe8f8c2dbee0ef39a248ad1d087876fd072fd45f66e787_prof);

        
        $__internal_35fe6bc3f77def21e84180b40a295a1e6625307d4ab135a10bbf1a405ee53505->leave($__internal_35fe6bc3f77def21e84180b40a295a1e6625307d4ab135a10bbf1a405ee53505_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c18262058a9e0af2f46ca500d7a500fa204ba45c2d2cc8d4076428fc8606a0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c18262058a9e0af2f46ca500d7a500fa204ba45c2d2cc8d4076428fc8606a0e->enter($__internal_4c18262058a9e0af2f46ca500d7a500fa204ba45c2d2cc8d4076428fc8606a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ad42e7cd71be6e3f513f741b1801c7ea2f3c2ec0618c010ec4f8ac2c21423081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad42e7cd71be6e3f513f741b1801c7ea2f3c2ec0618c010ec4f8ac2c21423081->enter($__internal_ad42e7cd71be6e3f513f741b1801c7ea2f3c2ec0618c010ec4f8ac2c21423081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_ad42e7cd71be6e3f513f741b1801c7ea2f3c2ec0618c010ec4f8ac2c21423081->leave($__internal_ad42e7cd71be6e3f513f741b1801c7ea2f3c2ec0618c010ec4f8ac2c21423081_prof);

        
        $__internal_4c18262058a9e0af2f46ca500d7a500fa204ba45c2d2cc8d4076428fc8606a0e->leave($__internal_4c18262058a9e0af2f46ca500d7a500fa204ba45c2d2cc8d4076428fc8606a0e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
