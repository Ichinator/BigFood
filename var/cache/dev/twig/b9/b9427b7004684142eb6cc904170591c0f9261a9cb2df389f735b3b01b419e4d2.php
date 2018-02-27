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
        $__internal_4b03e41f6bed816f4823819d8cb9ad2d9e9f468114647c5b9320736fd8fad6b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b03e41f6bed816f4823819d8cb9ad2d9e9f468114647c5b9320736fd8fad6b9->enter($__internal_4b03e41f6bed816f4823819d8cb9ad2d9e9f468114647c5b9320736fd8fad6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_b9142ce4499a7a2fb9dd3b9be51490bb59cedf59b29bcad2b7dc4ed50d4d778c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9142ce4499a7a2fb9dd3b9be51490bb59cedf59b29bcad2b7dc4ed50d4d778c->enter($__internal_b9142ce4499a7a2fb9dd3b9be51490bb59cedf59b29bcad2b7dc4ed50d4d778c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b03e41f6bed816f4823819d8cb9ad2d9e9f468114647c5b9320736fd8fad6b9->leave($__internal_4b03e41f6bed816f4823819d8cb9ad2d9e9f468114647c5b9320736fd8fad6b9_prof);

        
        $__internal_b9142ce4499a7a2fb9dd3b9be51490bb59cedf59b29bcad2b7dc4ed50d4d778c->leave($__internal_b9142ce4499a7a2fb9dd3b9be51490bb59cedf59b29bcad2b7dc4ed50d4d778c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b289da64b6d1048f1ffe2a2e775c3a85e305aa9151fe9180f521ee4551020b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b289da64b6d1048f1ffe2a2e775c3a85e305aa9151fe9180f521ee4551020b7b->enter($__internal_b289da64b6d1048f1ffe2a2e775c3a85e305aa9151fe9180f521ee4551020b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f5e3d8310a9e726cff4e4c21c2c97beec8170ec8e97ed887503537d426965874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e3d8310a9e726cff4e4c21c2c97beec8170ec8e97ed887503537d426965874->enter($__internal_f5e3d8310a9e726cff4e4c21c2c97beec8170ec8e97ed887503537d426965874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_f5e3d8310a9e726cff4e4c21c2c97beec8170ec8e97ed887503537d426965874->leave($__internal_f5e3d8310a9e726cff4e4c21c2c97beec8170ec8e97ed887503537d426965874_prof);

        
        $__internal_b289da64b6d1048f1ffe2a2e775c3a85e305aa9151fe9180f521ee4551020b7b->leave($__internal_b289da64b6d1048f1ffe2a2e775c3a85e305aa9151fe9180f521ee4551020b7b_prof);

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
