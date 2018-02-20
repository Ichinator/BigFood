<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_859c65edb1899e72634da8257e517468c1c7e035e2302fcfb1e08370ffa39b4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_8eb1a3bb9952af6aecc8ab22f7960298dc5a8371bd6fcf79afe49d775d12810a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eb1a3bb9952af6aecc8ab22f7960298dc5a8371bd6fcf79afe49d775d12810a->enter($__internal_8eb1a3bb9952af6aecc8ab22f7960298dc5a8371bd6fcf79afe49d775d12810a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_0ed955ae01bb5e407a8a7791016c062fef13167a92b7b4647b6ad842eec66b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed955ae01bb5e407a8a7791016c062fef13167a92b7b4647b6ad842eec66b02->enter($__internal_0ed955ae01bb5e407a8a7791016c062fef13167a92b7b4647b6ad842eec66b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eb1a3bb9952af6aecc8ab22f7960298dc5a8371bd6fcf79afe49d775d12810a->leave($__internal_8eb1a3bb9952af6aecc8ab22f7960298dc5a8371bd6fcf79afe49d775d12810a_prof);

        
        $__internal_0ed955ae01bb5e407a8a7791016c062fef13167a92b7b4647b6ad842eec66b02->leave($__internal_0ed955ae01bb5e407a8a7791016c062fef13167a92b7b4647b6ad842eec66b02_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53b39a909e0cf83b687509dad7ca511df75a044334e6d74d997917fa8efba244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b39a909e0cf83b687509dad7ca511df75a044334e6d74d997917fa8efba244->enter($__internal_53b39a909e0cf83b687509dad7ca511df75a044334e6d74d997917fa8efba244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_77a5f23ae74f441dd46c574478ac5b6c809eb242588199497c41adf74bca7066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a5f23ae74f441dd46c574478ac5b6c809eb242588199497c41adf74bca7066->enter($__internal_77a5f23ae74f441dd46c574478ac5b6c809eb242588199497c41adf74bca7066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_77a5f23ae74f441dd46c574478ac5b6c809eb242588199497c41adf74bca7066->leave($__internal_77a5f23ae74f441dd46c574478ac5b6c809eb242588199497c41adf74bca7066_prof);

        
        $__internal_53b39a909e0cf83b687509dad7ca511df75a044334e6d74d997917fa8efba244->leave($__internal_53b39a909e0cf83b687509dad7ca511df75a044334e6d74d997917fa8efba244_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
