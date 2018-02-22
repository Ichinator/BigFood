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
        $__internal_bf61e6f075cc09803e5e94ed0c8fdf75dc3270ac03a2f9be2f81449d28ad9f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf61e6f075cc09803e5e94ed0c8fdf75dc3270ac03a2f9be2f81449d28ad9f48->enter($__internal_bf61e6f075cc09803e5e94ed0c8fdf75dc3270ac03a2f9be2f81449d28ad9f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_093e703e300f305aec4ed05f948193235384325178ae96a064c1dcac0f21ac1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_093e703e300f305aec4ed05f948193235384325178ae96a064c1dcac0f21ac1d->enter($__internal_093e703e300f305aec4ed05f948193235384325178ae96a064c1dcac0f21ac1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf61e6f075cc09803e5e94ed0c8fdf75dc3270ac03a2f9be2f81449d28ad9f48->leave($__internal_bf61e6f075cc09803e5e94ed0c8fdf75dc3270ac03a2f9be2f81449d28ad9f48_prof);

        
        $__internal_093e703e300f305aec4ed05f948193235384325178ae96a064c1dcac0f21ac1d->leave($__internal_093e703e300f305aec4ed05f948193235384325178ae96a064c1dcac0f21ac1d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51af08e6e86d424d08f2a468c6f677c90a4de0c37cb122c7f66ca4d1a1837753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51af08e6e86d424d08f2a468c6f677c90a4de0c37cb122c7f66ca4d1a1837753->enter($__internal_51af08e6e86d424d08f2a468c6f677c90a4de0c37cb122c7f66ca4d1a1837753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_65c41ea0beec69d1689fd00358e47c15b8d0fe759d47a6728f2d65ee4e8ba8ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c41ea0beec69d1689fd00358e47c15b8d0fe759d47a6728f2d65ee4e8ba8ff->enter($__internal_65c41ea0beec69d1689fd00358e47c15b8d0fe759d47a6728f2d65ee4e8ba8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_65c41ea0beec69d1689fd00358e47c15b8d0fe759d47a6728f2d65ee4e8ba8ff->leave($__internal_65c41ea0beec69d1689fd00358e47c15b8d0fe759d47a6728f2d65ee4e8ba8ff_prof);

        
        $__internal_51af08e6e86d424d08f2a468c6f677c90a4de0c37cb122c7f66ca4d1a1837753->leave($__internal_51af08e6e86d424d08f2a468c6f677c90a4de0c37cb122c7f66ca4d1a1837753_prof);

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
