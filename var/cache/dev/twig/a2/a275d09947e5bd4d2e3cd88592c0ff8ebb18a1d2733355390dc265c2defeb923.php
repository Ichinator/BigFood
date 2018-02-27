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
        $__internal_27c1c775fc804a85956334275c6494837d63a74700ede83794c93438d4260cf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27c1c775fc804a85956334275c6494837d63a74700ede83794c93438d4260cf2->enter($__internal_27c1c775fc804a85956334275c6494837d63a74700ede83794c93438d4260cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_ec708d6c001cea58fbfade60bba60803ee25529c4750f5a107ce4d993fce2f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec708d6c001cea58fbfade60bba60803ee25529c4750f5a107ce4d993fce2f87->enter($__internal_ec708d6c001cea58fbfade60bba60803ee25529c4750f5a107ce4d993fce2f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27c1c775fc804a85956334275c6494837d63a74700ede83794c93438d4260cf2->leave($__internal_27c1c775fc804a85956334275c6494837d63a74700ede83794c93438d4260cf2_prof);

        
        $__internal_ec708d6c001cea58fbfade60bba60803ee25529c4750f5a107ce4d993fce2f87->leave($__internal_ec708d6c001cea58fbfade60bba60803ee25529c4750f5a107ce4d993fce2f87_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7bc962ef39b3a239812aef776d90ca367bac0e52f8e4c3f611194d17e8421a9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bc962ef39b3a239812aef776d90ca367bac0e52f8e4c3f611194d17e8421a9e->enter($__internal_7bc962ef39b3a239812aef776d90ca367bac0e52f8e4c3f611194d17e8421a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7f51e74b28e747e512a6ee878934384cb58d9202cd2613bd384fa84ccccdb15e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f51e74b28e747e512a6ee878934384cb58d9202cd2613bd384fa84ccccdb15e->enter($__internal_7f51e74b28e747e512a6ee878934384cb58d9202cd2613bd384fa84ccccdb15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_7f51e74b28e747e512a6ee878934384cb58d9202cd2613bd384fa84ccccdb15e->leave($__internal_7f51e74b28e747e512a6ee878934384cb58d9202cd2613bd384fa84ccccdb15e_prof);

        
        $__internal_7bc962ef39b3a239812aef776d90ca367bac0e52f8e4c3f611194d17e8421a9e->leave($__internal_7bc962ef39b3a239812aef776d90ca367bac0e52f8e4c3f611194d17e8421a9e_prof);

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
