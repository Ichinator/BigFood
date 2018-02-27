<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_42461b569a915ba3d36e773704f6e07aa4ccfc39a3eb4d0558612b5d844114d3 extends Twig_Template
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
        $__internal_475103a201c4e328c5e6c7ebca9713f207a98945f4357c51c0eeec39cbec3f85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475103a201c4e328c5e6c7ebca9713f207a98945f4357c51c0eeec39cbec3f85->enter($__internal_475103a201c4e328c5e6c7ebca9713f207a98945f4357c51c0eeec39cbec3f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_fc8b5944cc97d4a4f5cc277ae994c1cd3ff8c184d0632c2c4ac48c1537b216f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc8b5944cc97d4a4f5cc277ae994c1cd3ff8c184d0632c2c4ac48c1537b216f2->enter($__internal_fc8b5944cc97d4a4f5cc277ae994c1cd3ff8c184d0632c2c4ac48c1537b216f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_475103a201c4e328c5e6c7ebca9713f207a98945f4357c51c0eeec39cbec3f85->leave($__internal_475103a201c4e328c5e6c7ebca9713f207a98945f4357c51c0eeec39cbec3f85_prof);

        
        $__internal_fc8b5944cc97d4a4f5cc277ae994c1cd3ff8c184d0632c2c4ac48c1537b216f2->leave($__internal_fc8b5944cc97d4a4f5cc277ae994c1cd3ff8c184d0632c2c4ac48c1537b216f2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_28f1673d68357d9096f5f63cf3a95bc1c4a86e68e3917a519013522810499f64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28f1673d68357d9096f5f63cf3a95bc1c4a86e68e3917a519013522810499f64->enter($__internal_28f1673d68357d9096f5f63cf3a95bc1c4a86e68e3917a519013522810499f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3f37f23a6445b3b56dbc234cfb6722fc2fd8c5bdaa855f84ce36751df06c5d63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f37f23a6445b3b56dbc234cfb6722fc2fd8c5bdaa855f84ce36751df06c5d63->enter($__internal_3f37f23a6445b3b56dbc234cfb6722fc2fd8c5bdaa855f84ce36751df06c5d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_3f37f23a6445b3b56dbc234cfb6722fc2fd8c5bdaa855f84ce36751df06c5d63->leave($__internal_3f37f23a6445b3b56dbc234cfb6722fc2fd8c5bdaa855f84ce36751df06c5d63_prof);

        
        $__internal_28f1673d68357d9096f5f63cf3a95bc1c4a86e68e3917a519013522810499f64->leave($__internal_28f1673d68357d9096f5f63cf3a95bc1c4a86e68e3917a519013522810499f64_prof);

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
