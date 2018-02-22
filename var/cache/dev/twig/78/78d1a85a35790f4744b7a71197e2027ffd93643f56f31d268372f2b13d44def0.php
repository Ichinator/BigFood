<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_fd62065edde32b8aba09bead03299008407c17e9d5fbdf9d18446a0454172d76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_d6aff87ad6b9060ad09cf51f1ab32674f82865136f9e419954224e5d0bb1216d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6aff87ad6b9060ad09cf51f1ab32674f82865136f9e419954224e5d0bb1216d->enter($__internal_d6aff87ad6b9060ad09cf51f1ab32674f82865136f9e419954224e5d0bb1216d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_eac9fef33d07e56f574aa0fa0d8ebf9954c7558faaaceaaf10b44eba87336239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac9fef33d07e56f574aa0fa0d8ebf9954c7558faaaceaaf10b44eba87336239->enter($__internal_eac9fef33d07e56f574aa0fa0d8ebf9954c7558faaaceaaf10b44eba87336239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6aff87ad6b9060ad09cf51f1ab32674f82865136f9e419954224e5d0bb1216d->leave($__internal_d6aff87ad6b9060ad09cf51f1ab32674f82865136f9e419954224e5d0bb1216d_prof);

        
        $__internal_eac9fef33d07e56f574aa0fa0d8ebf9954c7558faaaceaaf10b44eba87336239->leave($__internal_eac9fef33d07e56f574aa0fa0d8ebf9954c7558faaaceaaf10b44eba87336239_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be894ee358afc84d31511aa0f6779a1c85fc73d35d117fe6410b25292f4883bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be894ee358afc84d31511aa0f6779a1c85fc73d35d117fe6410b25292f4883bb->enter($__internal_be894ee358afc84d31511aa0f6779a1c85fc73d35d117fe6410b25292f4883bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_adc32f311c7cacdeb88600310e527c86bf382000300750a10180ebec5c9b2753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc32f311c7cacdeb88600310e527c86bf382000300750a10180ebec5c9b2753->enter($__internal_adc32f311c7cacdeb88600310e527c86bf382000300750a10180ebec5c9b2753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_adc32f311c7cacdeb88600310e527c86bf382000300750a10180ebec5c9b2753->leave($__internal_adc32f311c7cacdeb88600310e527c86bf382000300750a10180ebec5c9b2753_prof);

        
        $__internal_be894ee358afc84d31511aa0f6779a1c85fc73d35d117fe6410b25292f4883bb->leave($__internal_be894ee358afc84d31511aa0f6779a1c85fc73d35d117fe6410b25292f4883bb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
