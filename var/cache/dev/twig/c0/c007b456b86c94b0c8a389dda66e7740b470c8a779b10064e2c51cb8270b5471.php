<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_0a9e203ead13a9ae8c86f5d4b3318347e69a763565d04682de5c9eea9cae3f18 extends Twig_Template
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
        $__internal_3496d975e5abbb2dd65351a199bfcde179c2b5621bdb726d78c0425eeea52a4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3496d975e5abbb2dd65351a199bfcde179c2b5621bdb726d78c0425eeea52a4e->enter($__internal_3496d975e5abbb2dd65351a199bfcde179c2b5621bdb726d78c0425eeea52a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_09100dda261bb644a7aa1e15dd55dc33a847156bb1b92e8d144948368d929435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09100dda261bb644a7aa1e15dd55dc33a847156bb1b92e8d144948368d929435->enter($__internal_09100dda261bb644a7aa1e15dd55dc33a847156bb1b92e8d144948368d929435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3496d975e5abbb2dd65351a199bfcde179c2b5621bdb726d78c0425eeea52a4e->leave($__internal_3496d975e5abbb2dd65351a199bfcde179c2b5621bdb726d78c0425eeea52a4e_prof);

        
        $__internal_09100dda261bb644a7aa1e15dd55dc33a847156bb1b92e8d144948368d929435->leave($__internal_09100dda261bb644a7aa1e15dd55dc33a847156bb1b92e8d144948368d929435_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47803e0d2cf534d9116e7482e177f67d1b84e2d36bbcaa78b3b7343e7d475686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47803e0d2cf534d9116e7482e177f67d1b84e2d36bbcaa78b3b7343e7d475686->enter($__internal_47803e0d2cf534d9116e7482e177f67d1b84e2d36bbcaa78b3b7343e7d475686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a8deca04ff067bbb2612767ba9f9f68fe90ad70e8dca44ae092ad2703a5914b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8deca04ff067bbb2612767ba9f9f68fe90ad70e8dca44ae092ad2703a5914b2->enter($__internal_a8deca04ff067bbb2612767ba9f9f68fe90ad70e8dca44ae092ad2703a5914b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_a8deca04ff067bbb2612767ba9f9f68fe90ad70e8dca44ae092ad2703a5914b2->leave($__internal_a8deca04ff067bbb2612767ba9f9f68fe90ad70e8dca44ae092ad2703a5914b2_prof);

        
        $__internal_47803e0d2cf534d9116e7482e177f67d1b84e2d36bbcaa78b3b7343e7d475686->leave($__internal_47803e0d2cf534d9116e7482e177f67d1b84e2d36bbcaa78b3b7343e7d475686_prof);

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
