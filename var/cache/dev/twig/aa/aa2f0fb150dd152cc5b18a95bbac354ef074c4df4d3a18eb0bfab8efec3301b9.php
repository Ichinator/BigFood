<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_091ac0e66eb4d4a68cb1366bfac36edaef20e46a601373bc03ea7da8553d4928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_d8ed95aadd91e0be179234ff886c3d097a2466ec5a47f2d9c93172fe511e5b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8ed95aadd91e0be179234ff886c3d097a2466ec5a47f2d9c93172fe511e5b9d->enter($__internal_d8ed95aadd91e0be179234ff886c3d097a2466ec5a47f2d9c93172fe511e5b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_f236667ecac8160654a070500d69327c653de2711f2f80946b18fe84eeb4be9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f236667ecac8160654a070500d69327c653de2711f2f80946b18fe84eeb4be9b->enter($__internal_f236667ecac8160654a070500d69327c653de2711f2f80946b18fe84eeb4be9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8ed95aadd91e0be179234ff886c3d097a2466ec5a47f2d9c93172fe511e5b9d->leave($__internal_d8ed95aadd91e0be179234ff886c3d097a2466ec5a47f2d9c93172fe511e5b9d_prof);

        
        $__internal_f236667ecac8160654a070500d69327c653de2711f2f80946b18fe84eeb4be9b->leave($__internal_f236667ecac8160654a070500d69327c653de2711f2f80946b18fe84eeb4be9b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_86f1596fa89b2e7e06eb867b6493b43b5d6469cc25173dcadb8ba4051532b6f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86f1596fa89b2e7e06eb867b6493b43b5d6469cc25173dcadb8ba4051532b6f5->enter($__internal_86f1596fa89b2e7e06eb867b6493b43b5d6469cc25173dcadb8ba4051532b6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9f45ead09a930e4faa2e8ae5a3ddc1574490334f7a87dfbadff2d4fc41ef16dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f45ead09a930e4faa2e8ae5a3ddc1574490334f7a87dfbadff2d4fc41ef16dc->enter($__internal_9f45ead09a930e4faa2e8ae5a3ddc1574490334f7a87dfbadff2d4fc41ef16dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9f45ead09a930e4faa2e8ae5a3ddc1574490334f7a87dfbadff2d4fc41ef16dc->leave($__internal_9f45ead09a930e4faa2e8ae5a3ddc1574490334f7a87dfbadff2d4fc41ef16dc_prof);

        
        $__internal_86f1596fa89b2e7e06eb867b6493b43b5d6469cc25173dcadb8ba4051532b6f5->leave($__internal_86f1596fa89b2e7e06eb867b6493b43b5d6469cc25173dcadb8ba4051532b6f5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
