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
        $__internal_5877e349899c7dd15e4665bb942b687a8e6197e0fafd36bf2fdccc40f6369ab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5877e349899c7dd15e4665bb942b687a8e6197e0fafd36bf2fdccc40f6369ab4->enter($__internal_5877e349899c7dd15e4665bb942b687a8e6197e0fafd36bf2fdccc40f6369ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_597211cc42f60b131097d25051f5a791111442e4e1c87f54a6adb1c92e84d63e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597211cc42f60b131097d25051f5a791111442e4e1c87f54a6adb1c92e84d63e->enter($__internal_597211cc42f60b131097d25051f5a791111442e4e1c87f54a6adb1c92e84d63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5877e349899c7dd15e4665bb942b687a8e6197e0fafd36bf2fdccc40f6369ab4->leave($__internal_5877e349899c7dd15e4665bb942b687a8e6197e0fafd36bf2fdccc40f6369ab4_prof);

        
        $__internal_597211cc42f60b131097d25051f5a791111442e4e1c87f54a6adb1c92e84d63e->leave($__internal_597211cc42f60b131097d25051f5a791111442e4e1c87f54a6adb1c92e84d63e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_62793a03e5bc24760484cf3b86b4d1cf24030225f8a4a49d88f424ae989fcdcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62793a03e5bc24760484cf3b86b4d1cf24030225f8a4a49d88f424ae989fcdcf->enter($__internal_62793a03e5bc24760484cf3b86b4d1cf24030225f8a4a49d88f424ae989fcdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cbb06197562d52ee9009d1554884f63c0f9f58b1f2483bb37fcae33fc5d9881f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb06197562d52ee9009d1554884f63c0f9f58b1f2483bb37fcae33fc5d9881f->enter($__internal_cbb06197562d52ee9009d1554884f63c0f9f58b1f2483bb37fcae33fc5d9881f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_cbb06197562d52ee9009d1554884f63c0f9f58b1f2483bb37fcae33fc5d9881f->leave($__internal_cbb06197562d52ee9009d1554884f63c0f9f58b1f2483bb37fcae33fc5d9881f_prof);

        
        $__internal_62793a03e5bc24760484cf3b86b4d1cf24030225f8a4a49d88f424ae989fcdcf->leave($__internal_62793a03e5bc24760484cf3b86b4d1cf24030225f8a4a49d88f424ae989fcdcf_prof);

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
