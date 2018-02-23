<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_c3ad4b0e21699b7dc3aa14e2cf99fb274873452e9a3c8b1581745581e9f11c48 extends Twig_Template
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
        $__internal_58d9da9c639d8008527049057ee6caf85848e17b77de461d55418ec35d10617d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58d9da9c639d8008527049057ee6caf85848e17b77de461d55418ec35d10617d->enter($__internal_58d9da9c639d8008527049057ee6caf85848e17b77de461d55418ec35d10617d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_ba55f3afaa4c65848c1a814e10b6cc7c98d76f7df949da4d0d21672a39aab400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba55f3afaa4c65848c1a814e10b6cc7c98d76f7df949da4d0d21672a39aab400->enter($__internal_ba55f3afaa4c65848c1a814e10b6cc7c98d76f7df949da4d0d21672a39aab400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58d9da9c639d8008527049057ee6caf85848e17b77de461d55418ec35d10617d->leave($__internal_58d9da9c639d8008527049057ee6caf85848e17b77de461d55418ec35d10617d_prof);

        
        $__internal_ba55f3afaa4c65848c1a814e10b6cc7c98d76f7df949da4d0d21672a39aab400->leave($__internal_ba55f3afaa4c65848c1a814e10b6cc7c98d76f7df949da4d0d21672a39aab400_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a280cfb6dbc7e833c908f67c5d988a6ef584d74589ec55541021eca745335c84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a280cfb6dbc7e833c908f67c5d988a6ef584d74589ec55541021eca745335c84->enter($__internal_a280cfb6dbc7e833c908f67c5d988a6ef584d74589ec55541021eca745335c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cc35e207142a75d0b2062ac1e6fa9f1e731b174c57d55185dd62956ff9862d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc35e207142a75d0b2062ac1e6fa9f1e731b174c57d55185dd62956ff9862d66->enter($__internal_cc35e207142a75d0b2062ac1e6fa9f1e731b174c57d55185dd62956ff9862d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_cc35e207142a75d0b2062ac1e6fa9f1e731b174c57d55185dd62956ff9862d66->leave($__internal_cc35e207142a75d0b2062ac1e6fa9f1e731b174c57d55185dd62956ff9862d66_prof);

        
        $__internal_a280cfb6dbc7e833c908f67c5d988a6ef584d74589ec55541021eca745335c84->leave($__internal_a280cfb6dbc7e833c908f67c5d988a6ef584d74589ec55541021eca745335c84_prof);

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
