<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_02b74c4774100501bd28294e0f482a26fa96e39870d1dcce0f137e462dd0dddd extends Twig_Template
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
        $__internal_1fc39d0874d321d279f1053e940028eee38fa1f0cbb692d1327a2ec3169c7b85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fc39d0874d321d279f1053e940028eee38fa1f0cbb692d1327a2ec3169c7b85->enter($__internal_1fc39d0874d321d279f1053e940028eee38fa1f0cbb692d1327a2ec3169c7b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_6820cdb7b9a3c9d285f10c3616c086c7c56901424384fb728fcd07a1d0177ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6820cdb7b9a3c9d285f10c3616c086c7c56901424384fb728fcd07a1d0177ed4->enter($__internal_6820cdb7b9a3c9d285f10c3616c086c7c56901424384fb728fcd07a1d0177ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fc39d0874d321d279f1053e940028eee38fa1f0cbb692d1327a2ec3169c7b85->leave($__internal_1fc39d0874d321d279f1053e940028eee38fa1f0cbb692d1327a2ec3169c7b85_prof);

        
        $__internal_6820cdb7b9a3c9d285f10c3616c086c7c56901424384fb728fcd07a1d0177ed4->leave($__internal_6820cdb7b9a3c9d285f10c3616c086c7c56901424384fb728fcd07a1d0177ed4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14c2241cb3d3cfcfc80d0fa02fe7b3f37f00a49188bc745d6faafeb9973b63fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c2241cb3d3cfcfc80d0fa02fe7b3f37f00a49188bc745d6faafeb9973b63fe->enter($__internal_14c2241cb3d3cfcfc80d0fa02fe7b3f37f00a49188bc745d6faafeb9973b63fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_219b67c27e11909cf44fa1dbe08eb4dc5df96a4126a0b7ea4542e7d80871f0bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219b67c27e11909cf44fa1dbe08eb4dc5df96a4126a0b7ea4542e7d80871f0bc->enter($__internal_219b67c27e11909cf44fa1dbe08eb4dc5df96a4126a0b7ea4542e7d80871f0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_219b67c27e11909cf44fa1dbe08eb4dc5df96a4126a0b7ea4542e7d80871f0bc->leave($__internal_219b67c27e11909cf44fa1dbe08eb4dc5df96a4126a0b7ea4542e7d80871f0bc_prof);

        
        $__internal_14c2241cb3d3cfcfc80d0fa02fe7b3f37f00a49188bc745d6faafeb9973b63fe->leave($__internal_14c2241cb3d3cfcfc80d0fa02fe7b3f37f00a49188bc745d6faafeb9973b63fe_prof);

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
