<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_787399aa7cb70fe91327893c7f928df96b7bfe3ce00ae19262571d5abcfb89ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_094a1f19ab9121b3e9e708a193334729b60662d41c66bac94e8a8a4499ea3d67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_094a1f19ab9121b3e9e708a193334729b60662d41c66bac94e8a8a4499ea3d67->enter($__internal_094a1f19ab9121b3e9e708a193334729b60662d41c66bac94e8a8a4499ea3d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_1329e58f74c8093da13474cce28f07dcdb97dab3da276e130b325fdab74b0f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1329e58f74c8093da13474cce28f07dcdb97dab3da276e130b325fdab74b0f87->enter($__internal_1329e58f74c8093da13474cce28f07dcdb97dab3da276e130b325fdab74b0f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_094a1f19ab9121b3e9e708a193334729b60662d41c66bac94e8a8a4499ea3d67->leave($__internal_094a1f19ab9121b3e9e708a193334729b60662d41c66bac94e8a8a4499ea3d67_prof);

        
        $__internal_1329e58f74c8093da13474cce28f07dcdb97dab3da276e130b325fdab74b0f87->leave($__internal_1329e58f74c8093da13474cce28f07dcdb97dab3da276e130b325fdab74b0f87_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c68655f22b77366477dc2ac727e180b8f7ed459125a2b89c5ff8f3cf596ec71b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c68655f22b77366477dc2ac727e180b8f7ed459125a2b89c5ff8f3cf596ec71b->enter($__internal_c68655f22b77366477dc2ac727e180b8f7ed459125a2b89c5ff8f3cf596ec71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c35587b25ef12bffa43d2db2a498b27889b0e8d39938aceb333798bcb6f3a78a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c35587b25ef12bffa43d2db2a498b27889b0e8d39938aceb333798bcb6f3a78a->enter($__internal_c35587b25ef12bffa43d2db2a498b27889b0e8d39938aceb333798bcb6f3a78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_c35587b25ef12bffa43d2db2a498b27889b0e8d39938aceb333798bcb6f3a78a->leave($__internal_c35587b25ef12bffa43d2db2a498b27889b0e8d39938aceb333798bcb6f3a78a_prof);

        
        $__internal_c68655f22b77366477dc2ac727e180b8f7ed459125a2b89c5ff8f3cf596ec71b->leave($__internal_c68655f22b77366477dc2ac727e180b8f7ed459125a2b89c5ff8f3cf596ec71b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
