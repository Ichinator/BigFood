<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_f18a0e5e1fde0352fe3530ed14f7faf53e4287b29c5a3533d59e6e7ddea0efa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_8cfb0c8d9d2decbbcb66e962a3604ee8a13601095415d032a11c460e6a48ca2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cfb0c8d9d2decbbcb66e962a3604ee8a13601095415d032a11c460e6a48ca2b->enter($__internal_8cfb0c8d9d2decbbcb66e962a3604ee8a13601095415d032a11c460e6a48ca2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_98a8d3923104e33efe39505f3c7761caa3910c09666d2fba49c4c0c2beb79a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a8d3923104e33efe39505f3c7761caa3910c09666d2fba49c4c0c2beb79a62->enter($__internal_98a8d3923104e33efe39505f3c7761caa3910c09666d2fba49c4c0c2beb79a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cfb0c8d9d2decbbcb66e962a3604ee8a13601095415d032a11c460e6a48ca2b->leave($__internal_8cfb0c8d9d2decbbcb66e962a3604ee8a13601095415d032a11c460e6a48ca2b_prof);

        
        $__internal_98a8d3923104e33efe39505f3c7761caa3910c09666d2fba49c4c0c2beb79a62->leave($__internal_98a8d3923104e33efe39505f3c7761caa3910c09666d2fba49c4c0c2beb79a62_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef2305c50071be308f763d8166d2b1993281d5bb0c12b8a43c2c4092a94dcd85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef2305c50071be308f763d8166d2b1993281d5bb0c12b8a43c2c4092a94dcd85->enter($__internal_ef2305c50071be308f763d8166d2b1993281d5bb0c12b8a43c2c4092a94dcd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_afa41612c7635d254168b1ecdf1f54a9e1637e7b74037fbea87fb9ed0e9c6662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa41612c7635d254168b1ecdf1f54a9e1637e7b74037fbea87fb9ed0e9c6662->enter($__internal_afa41612c7635d254168b1ecdf1f54a9e1637e7b74037fbea87fb9ed0e9c6662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_afa41612c7635d254168b1ecdf1f54a9e1637e7b74037fbea87fb9ed0e9c6662->leave($__internal_afa41612c7635d254168b1ecdf1f54a9e1637e7b74037fbea87fb9ed0e9c6662_prof);

        
        $__internal_ef2305c50071be308f763d8166d2b1993281d5bb0c12b8a43c2c4092a94dcd85->leave($__internal_ef2305c50071be308f763d8166d2b1993281d5bb0c12b8a43c2c4092a94dcd85_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
