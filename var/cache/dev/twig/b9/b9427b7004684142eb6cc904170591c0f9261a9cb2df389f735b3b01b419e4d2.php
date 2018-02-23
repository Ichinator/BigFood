<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_9379041a1112eae89415c7a12f007493b309e997f27a5550538457d5cdefa457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_7eb5c6077b042b5175a2a7df6276924bb3fd3406c1b5183cd8facca3dbf99a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eb5c6077b042b5175a2a7df6276924bb3fd3406c1b5183cd8facca3dbf99a60->enter($__internal_7eb5c6077b042b5175a2a7df6276924bb3fd3406c1b5183cd8facca3dbf99a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_1136615b280731bd7b9e839d55a925f6c53e8c03da96da7efb2a8195bcc59ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1136615b280731bd7b9e839d55a925f6c53e8c03da96da7efb2a8195bcc59ebd->enter($__internal_1136615b280731bd7b9e839d55a925f6c53e8c03da96da7efb2a8195bcc59ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7eb5c6077b042b5175a2a7df6276924bb3fd3406c1b5183cd8facca3dbf99a60->leave($__internal_7eb5c6077b042b5175a2a7df6276924bb3fd3406c1b5183cd8facca3dbf99a60_prof);

        
        $__internal_1136615b280731bd7b9e839d55a925f6c53e8c03da96da7efb2a8195bcc59ebd->leave($__internal_1136615b280731bd7b9e839d55a925f6c53e8c03da96da7efb2a8195bcc59ebd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7daba82722e22579e8f398472b1513f7fb98179ad21798d964233820ef663907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7daba82722e22579e8f398472b1513f7fb98179ad21798d964233820ef663907->enter($__internal_7daba82722e22579e8f398472b1513f7fb98179ad21798d964233820ef663907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_28a56acf944d7449a8b64607830608da3ddf0d6599cb6c4fcd69f4d32482f958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a56acf944d7449a8b64607830608da3ddf0d6599cb6c4fcd69f4d32482f958->enter($__internal_28a56acf944d7449a8b64607830608da3ddf0d6599cb6c4fcd69f4d32482f958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_28a56acf944d7449a8b64607830608da3ddf0d6599cb6c4fcd69f4d32482f958->leave($__internal_28a56acf944d7449a8b64607830608da3ddf0d6599cb6c4fcd69f4d32482f958_prof);

        
        $__internal_7daba82722e22579e8f398472b1513f7fb98179ad21798d964233820ef663907->leave($__internal_7daba82722e22579e8f398472b1513f7fb98179ad21798d964233820ef663907_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
