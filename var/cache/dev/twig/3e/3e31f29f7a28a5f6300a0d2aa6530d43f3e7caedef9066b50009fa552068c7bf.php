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
        $__internal_39283494fdfcb9495e2bae80bdff0013eeb112db30f40e2eab949427525663b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39283494fdfcb9495e2bae80bdff0013eeb112db30f40e2eab949427525663b4->enter($__internal_39283494fdfcb9495e2bae80bdff0013eeb112db30f40e2eab949427525663b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_1df5a1d9b3bebc6a2a79213261ee9d748c95021a6d757eb0ab2b4e5d0f547d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df5a1d9b3bebc6a2a79213261ee9d748c95021a6d757eb0ab2b4e5d0f547d95->enter($__internal_1df5a1d9b3bebc6a2a79213261ee9d748c95021a6d757eb0ab2b4e5d0f547d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39283494fdfcb9495e2bae80bdff0013eeb112db30f40e2eab949427525663b4->leave($__internal_39283494fdfcb9495e2bae80bdff0013eeb112db30f40e2eab949427525663b4_prof);

        
        $__internal_1df5a1d9b3bebc6a2a79213261ee9d748c95021a6d757eb0ab2b4e5d0f547d95->leave($__internal_1df5a1d9b3bebc6a2a79213261ee9d748c95021a6d757eb0ab2b4e5d0f547d95_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c10de1ccd55a1d7a97f56b667fd757247846a586b428301213570260869f96d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c10de1ccd55a1d7a97f56b667fd757247846a586b428301213570260869f96d5->enter($__internal_c10de1ccd55a1d7a97f56b667fd757247846a586b428301213570260869f96d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e50d1182cd312f64f49e5c4269aadb78eca9447f37a17cbe915fa93897b229dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50d1182cd312f64f49e5c4269aadb78eca9447f37a17cbe915fa93897b229dc->enter($__internal_e50d1182cd312f64f49e5c4269aadb78eca9447f37a17cbe915fa93897b229dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e50d1182cd312f64f49e5c4269aadb78eca9447f37a17cbe915fa93897b229dc->leave($__internal_e50d1182cd312f64f49e5c4269aadb78eca9447f37a17cbe915fa93897b229dc_prof);

        
        $__internal_c10de1ccd55a1d7a97f56b667fd757247846a586b428301213570260869f96d5->leave($__internal_c10de1ccd55a1d7a97f56b667fd757247846a586b428301213570260869f96d5_prof);

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
