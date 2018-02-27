<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_85b2e4e7d72765b8915cba401fdcde110e2c269b5bf8e0db747f707004d0a373 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_429bd81b5576192ceb7d52afc9abee2e9b426ce0a351cd41d5040afebc6c347c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_429bd81b5576192ceb7d52afc9abee2e9b426ce0a351cd41d5040afebc6c347c->enter($__internal_429bd81b5576192ceb7d52afc9abee2e9b426ce0a351cd41d5040afebc6c347c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_256fdcd15a9449bc2689aaea4f4161a226b98c154799f1d97ba9107c7c26e894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256fdcd15a9449bc2689aaea4f4161a226b98c154799f1d97ba9107c7c26e894->enter($__internal_256fdcd15a9449bc2689aaea4f4161a226b98c154799f1d97ba9107c7c26e894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_429bd81b5576192ceb7d52afc9abee2e9b426ce0a351cd41d5040afebc6c347c->leave($__internal_429bd81b5576192ceb7d52afc9abee2e9b426ce0a351cd41d5040afebc6c347c_prof);

        
        $__internal_256fdcd15a9449bc2689aaea4f4161a226b98c154799f1d97ba9107c7c26e894->leave($__internal_256fdcd15a9449bc2689aaea4f4161a226b98c154799f1d97ba9107c7c26e894_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d94407f582d662553221a75e864fc27eeef23a15481272f68e729704256c38c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d94407f582d662553221a75e864fc27eeef23a15481272f68e729704256c38c->enter($__internal_8d94407f582d662553221a75e864fc27eeef23a15481272f68e729704256c38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b18a871fefc7df1fe1f66344dbb23e26f03a617dcee609e998325a865be16cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18a871fefc7df1fe1f66344dbb23e26f03a617dcee609e998325a865be16cc1->enter($__internal_b18a871fefc7df1fe1f66344dbb23e26f03a617dcee609e998325a865be16cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_b18a871fefc7df1fe1f66344dbb23e26f03a617dcee609e998325a865be16cc1->leave($__internal_b18a871fefc7df1fe1f66344dbb23e26f03a617dcee609e998325a865be16cc1_prof);

        
        $__internal_8d94407f582d662553221a75e864fc27eeef23a15481272f68e729704256c38c->leave($__internal_8d94407f582d662553221a75e864fc27eeef23a15481272f68e729704256c38c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
