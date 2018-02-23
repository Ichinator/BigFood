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
        $__internal_3e8c440dc3c3907b77b693c9e3bc5cb7a7e4dad9f49f036a178988458320b866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e8c440dc3c3907b77b693c9e3bc5cb7a7e4dad9f49f036a178988458320b866->enter($__internal_3e8c440dc3c3907b77b693c9e3bc5cb7a7e4dad9f49f036a178988458320b866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_0e8cf54485ec0f6fdb328be32818848e32a0d150ca991a00f6caab4688a2df66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8cf54485ec0f6fdb328be32818848e32a0d150ca991a00f6caab4688a2df66->enter($__internal_0e8cf54485ec0f6fdb328be32818848e32a0d150ca991a00f6caab4688a2df66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e8c440dc3c3907b77b693c9e3bc5cb7a7e4dad9f49f036a178988458320b866->leave($__internal_3e8c440dc3c3907b77b693c9e3bc5cb7a7e4dad9f49f036a178988458320b866_prof);

        
        $__internal_0e8cf54485ec0f6fdb328be32818848e32a0d150ca991a00f6caab4688a2df66->leave($__internal_0e8cf54485ec0f6fdb328be32818848e32a0d150ca991a00f6caab4688a2df66_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e122b775e53a88308d8f3a5c944b538e560fda7e168be51af454b01431f65122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e122b775e53a88308d8f3a5c944b538e560fda7e168be51af454b01431f65122->enter($__internal_e122b775e53a88308d8f3a5c944b538e560fda7e168be51af454b01431f65122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_64ad3260265dfee7ae9b98e86a88445e3a933f15b8ef22db3833e5311e38d0b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ad3260265dfee7ae9b98e86a88445e3a933f15b8ef22db3833e5311e38d0b5->enter($__internal_64ad3260265dfee7ae9b98e86a88445e3a933f15b8ef22db3833e5311e38d0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_64ad3260265dfee7ae9b98e86a88445e3a933f15b8ef22db3833e5311e38d0b5->leave($__internal_64ad3260265dfee7ae9b98e86a88445e3a933f15b8ef22db3833e5311e38d0b5_prof);

        
        $__internal_e122b775e53a88308d8f3a5c944b538e560fda7e168be51af454b01431f65122->leave($__internal_e122b775e53a88308d8f3a5c944b538e560fda7e168be51af454b01431f65122_prof);

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
