<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8c80bf97cbfd1f6bea24a94a0df4c3613a0787b0865003a365e6d6f8b942c65c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_0a846dc5cfafdbae148ce32d34e0ae8ff24e2fc944b2ff9b64d5a585b2d4b181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a846dc5cfafdbae148ce32d34e0ae8ff24e2fc944b2ff9b64d5a585b2d4b181->enter($__internal_0a846dc5cfafdbae148ce32d34e0ae8ff24e2fc944b2ff9b64d5a585b2d4b181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_e3b9b9f721762e1b3aeb5590f7d7e77b7cc6b28e270edc7585ded3d195beaa4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b9b9f721762e1b3aeb5590f7d7e77b7cc6b28e270edc7585ded3d195beaa4c->enter($__internal_e3b9b9f721762e1b3aeb5590f7d7e77b7cc6b28e270edc7585ded3d195beaa4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a846dc5cfafdbae148ce32d34e0ae8ff24e2fc944b2ff9b64d5a585b2d4b181->leave($__internal_0a846dc5cfafdbae148ce32d34e0ae8ff24e2fc944b2ff9b64d5a585b2d4b181_prof);

        
        $__internal_e3b9b9f721762e1b3aeb5590f7d7e77b7cc6b28e270edc7585ded3d195beaa4c->leave($__internal_e3b9b9f721762e1b3aeb5590f7d7e77b7cc6b28e270edc7585ded3d195beaa4c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e605c084c534833865fad0cc18e37be408a835ee1fd51820b894ffa225e4d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e605c084c534833865fad0cc18e37be408a835ee1fd51820b894ffa225e4d32->enter($__internal_1e605c084c534833865fad0cc18e37be408a835ee1fd51820b894ffa225e4d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c6f03c24480af892d666df4f58a141f684670a82771e418e227d5e49a1ff97bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f03c24480af892d666df4f58a141f684670a82771e418e227d5e49a1ff97bd->enter($__internal_c6f03c24480af892d666df4f58a141f684670a82771e418e227d5e49a1ff97bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c6f03c24480af892d666df4f58a141f684670a82771e418e227d5e49a1ff97bd->leave($__internal_c6f03c24480af892d666df4f58a141f684670a82771e418e227d5e49a1ff97bd_prof);

        
        $__internal_1e605c084c534833865fad0cc18e37be408a835ee1fd51820b894ffa225e4d32->leave($__internal_1e605c084c534833865fad0cc18e37be408a835ee1fd51820b894ffa225e4d32_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
