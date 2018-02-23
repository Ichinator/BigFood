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
        $__internal_2e0d5713b7b88fc03a79f9cf4d93390683202c9ff3dc1df6d837f80dbe0fe80e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e0d5713b7b88fc03a79f9cf4d93390683202c9ff3dc1df6d837f80dbe0fe80e->enter($__internal_2e0d5713b7b88fc03a79f9cf4d93390683202c9ff3dc1df6d837f80dbe0fe80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_20e554feb4cd4b5842f5f6b93ccecd5355e2c083aa88f2fbede809bc7eba85f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e554feb4cd4b5842f5f6b93ccecd5355e2c083aa88f2fbede809bc7eba85f2->enter($__internal_20e554feb4cd4b5842f5f6b93ccecd5355e2c083aa88f2fbede809bc7eba85f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e0d5713b7b88fc03a79f9cf4d93390683202c9ff3dc1df6d837f80dbe0fe80e->leave($__internal_2e0d5713b7b88fc03a79f9cf4d93390683202c9ff3dc1df6d837f80dbe0fe80e_prof);

        
        $__internal_20e554feb4cd4b5842f5f6b93ccecd5355e2c083aa88f2fbede809bc7eba85f2->leave($__internal_20e554feb4cd4b5842f5f6b93ccecd5355e2c083aa88f2fbede809bc7eba85f2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ffaff918298b40a01851f6059d68f08a2fbe92dd6a2490a59e9875d2110e0544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffaff918298b40a01851f6059d68f08a2fbe92dd6a2490a59e9875d2110e0544->enter($__internal_ffaff918298b40a01851f6059d68f08a2fbe92dd6a2490a59e9875d2110e0544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_187acd457101534bbcee7600a50c2bd8ccfe649092d946a49c4fb735ce7a7494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_187acd457101534bbcee7600a50c2bd8ccfe649092d946a49c4fb735ce7a7494->enter($__internal_187acd457101534bbcee7600a50c2bd8ccfe649092d946a49c4fb735ce7a7494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_187acd457101534bbcee7600a50c2bd8ccfe649092d946a49c4fb735ce7a7494->leave($__internal_187acd457101534bbcee7600a50c2bd8ccfe649092d946a49c4fb735ce7a7494_prof);

        
        $__internal_ffaff918298b40a01851f6059d68f08a2fbe92dd6a2490a59e9875d2110e0544->leave($__internal_ffaff918298b40a01851f6059d68f08a2fbe92dd6a2490a59e9875d2110e0544_prof);

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
