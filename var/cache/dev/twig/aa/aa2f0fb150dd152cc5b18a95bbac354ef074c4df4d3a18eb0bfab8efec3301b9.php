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
        $__internal_4e917c0808da6f232abe3e5af4b3dc922b5ec783bba03e2717ae487b52377473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e917c0808da6f232abe3e5af4b3dc922b5ec783bba03e2717ae487b52377473->enter($__internal_4e917c0808da6f232abe3e5af4b3dc922b5ec783bba03e2717ae487b52377473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_840b824153131a4e04789d90a8047e25d8551e37a80f0b6d95127d23e5752a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_840b824153131a4e04789d90a8047e25d8551e37a80f0b6d95127d23e5752a4c->enter($__internal_840b824153131a4e04789d90a8047e25d8551e37a80f0b6d95127d23e5752a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e917c0808da6f232abe3e5af4b3dc922b5ec783bba03e2717ae487b52377473->leave($__internal_4e917c0808da6f232abe3e5af4b3dc922b5ec783bba03e2717ae487b52377473_prof);

        
        $__internal_840b824153131a4e04789d90a8047e25d8551e37a80f0b6d95127d23e5752a4c->leave($__internal_840b824153131a4e04789d90a8047e25d8551e37a80f0b6d95127d23e5752a4c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8bb65a4f8bccffb5e7032f8a7a52fe6ef19d39106cbb7ce97eb1af4b4bf23003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bb65a4f8bccffb5e7032f8a7a52fe6ef19d39106cbb7ce97eb1af4b4bf23003->enter($__internal_8bb65a4f8bccffb5e7032f8a7a52fe6ef19d39106cbb7ce97eb1af4b4bf23003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_09ccaa7ca3bc862dd2fc2a26e862a7413ba4a6e0e11c70dd87989f1265777c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ccaa7ca3bc862dd2fc2a26e862a7413ba4a6e0e11c70dd87989f1265777c2d->enter($__internal_09ccaa7ca3bc862dd2fc2a26e862a7413ba4a6e0e11c70dd87989f1265777c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_09ccaa7ca3bc862dd2fc2a26e862a7413ba4a6e0e11c70dd87989f1265777c2d->leave($__internal_09ccaa7ca3bc862dd2fc2a26e862a7413ba4a6e0e11c70dd87989f1265777c2d_prof);

        
        $__internal_8bb65a4f8bccffb5e7032f8a7a52fe6ef19d39106cbb7ce97eb1af4b4bf23003->leave($__internal_8bb65a4f8bccffb5e7032f8a7a52fe6ef19d39106cbb7ce97eb1af4b4bf23003_prof);

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
