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
        $__internal_a4181a090293c361536a84335035733ea259d9aa6e49f9faba796ee995284550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4181a090293c361536a84335035733ea259d9aa6e49f9faba796ee995284550->enter($__internal_a4181a090293c361536a84335035733ea259d9aa6e49f9faba796ee995284550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_7d6737696a25e8610002ef951529ecaaa45aa6fd6c61f67610babe6e814fe1e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6737696a25e8610002ef951529ecaaa45aa6fd6c61f67610babe6e814fe1e2->enter($__internal_7d6737696a25e8610002ef951529ecaaa45aa6fd6c61f67610babe6e814fe1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4181a090293c361536a84335035733ea259d9aa6e49f9faba796ee995284550->leave($__internal_a4181a090293c361536a84335035733ea259d9aa6e49f9faba796ee995284550_prof);

        
        $__internal_7d6737696a25e8610002ef951529ecaaa45aa6fd6c61f67610babe6e814fe1e2->leave($__internal_7d6737696a25e8610002ef951529ecaaa45aa6fd6c61f67610babe6e814fe1e2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_931af7d84d5821630b72a24e35589d5b03f8aaee04460ed7932532328166fa75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931af7d84d5821630b72a24e35589d5b03f8aaee04460ed7932532328166fa75->enter($__internal_931af7d84d5821630b72a24e35589d5b03f8aaee04460ed7932532328166fa75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_38122dfd4fd7fad0c0d88e3555e11df4cd60539ee619654f99e3121eda4c5182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38122dfd4fd7fad0c0d88e3555e11df4cd60539ee619654f99e3121eda4c5182->enter($__internal_38122dfd4fd7fad0c0d88e3555e11df4cd60539ee619654f99e3121eda4c5182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_38122dfd4fd7fad0c0d88e3555e11df4cd60539ee619654f99e3121eda4c5182->leave($__internal_38122dfd4fd7fad0c0d88e3555e11df4cd60539ee619654f99e3121eda4c5182_prof);

        
        $__internal_931af7d84d5821630b72a24e35589d5b03f8aaee04460ed7932532328166fa75->leave($__internal_931af7d84d5821630b72a24e35589d5b03f8aaee04460ed7932532328166fa75_prof);

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
