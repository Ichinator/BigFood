<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_cd470fff2f009a3e49d11430c39bbefae896f0ac323680cc2f6ce5c4b4dd4ed8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_09f1476884d91492b1503c1e5ad2f80250612a261b097e1490ed05874472ecc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09f1476884d91492b1503c1e5ad2f80250612a261b097e1490ed05874472ecc9->enter($__internal_09f1476884d91492b1503c1e5ad2f80250612a261b097e1490ed05874472ecc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_eca49703997e9d1cf4915627418b922ef7bd2c35e77970e24b6d8d2489d6d414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca49703997e9d1cf4915627418b922ef7bd2c35e77970e24b6d8d2489d6d414->enter($__internal_eca49703997e9d1cf4915627418b922ef7bd2c35e77970e24b6d8d2489d6d414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09f1476884d91492b1503c1e5ad2f80250612a261b097e1490ed05874472ecc9->leave($__internal_09f1476884d91492b1503c1e5ad2f80250612a261b097e1490ed05874472ecc9_prof);

        
        $__internal_eca49703997e9d1cf4915627418b922ef7bd2c35e77970e24b6d8d2489d6d414->leave($__internal_eca49703997e9d1cf4915627418b922ef7bd2c35e77970e24b6d8d2489d6d414_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52e5c1394431e94dc2f4c4c912bbbcf1075f231d17dd06a3148aeb7f2feea8a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52e5c1394431e94dc2f4c4c912bbbcf1075f231d17dd06a3148aeb7f2feea8a6->enter($__internal_52e5c1394431e94dc2f4c4c912bbbcf1075f231d17dd06a3148aeb7f2feea8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_411dd68c746b8d3ab1c682289a071c548905fe4618d9896b8ba8133a6a949c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_411dd68c746b8d3ab1c682289a071c548905fe4618d9896b8ba8133a6a949c32->enter($__internal_411dd68c746b8d3ab1c682289a071c548905fe4618d9896b8ba8133a6a949c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_411dd68c746b8d3ab1c682289a071c548905fe4618d9896b8ba8133a6a949c32->leave($__internal_411dd68c746b8d3ab1c682289a071c548905fe4618d9896b8ba8133a6a949c32_prof);

        
        $__internal_52e5c1394431e94dc2f4c4c912bbbcf1075f231d17dd06a3148aeb7f2feea8a6->leave($__internal_52e5c1394431e94dc2f4c4c912bbbcf1075f231d17dd06a3148aeb7f2feea8a6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
