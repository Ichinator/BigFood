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
        $__internal_84c7fa9f9539dbbd37652509285401fa43d2aeebcedde6d6b6fca82f242db801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84c7fa9f9539dbbd37652509285401fa43d2aeebcedde6d6b6fca82f242db801->enter($__internal_84c7fa9f9539dbbd37652509285401fa43d2aeebcedde6d6b6fca82f242db801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_2f25982f73ba96e6483b0a54d77eed43aca2c94fee90405783ef7ce5cf7fea61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f25982f73ba96e6483b0a54d77eed43aca2c94fee90405783ef7ce5cf7fea61->enter($__internal_2f25982f73ba96e6483b0a54d77eed43aca2c94fee90405783ef7ce5cf7fea61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84c7fa9f9539dbbd37652509285401fa43d2aeebcedde6d6b6fca82f242db801->leave($__internal_84c7fa9f9539dbbd37652509285401fa43d2aeebcedde6d6b6fca82f242db801_prof);

        
        $__internal_2f25982f73ba96e6483b0a54d77eed43aca2c94fee90405783ef7ce5cf7fea61->leave($__internal_2f25982f73ba96e6483b0a54d77eed43aca2c94fee90405783ef7ce5cf7fea61_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c541168363e21e3fdfdf6df6357411435c34e58f1b582dbd4ca211b9ffe39bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c541168363e21e3fdfdf6df6357411435c34e58f1b582dbd4ca211b9ffe39bf->enter($__internal_6c541168363e21e3fdfdf6df6357411435c34e58f1b582dbd4ca211b9ffe39bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d379eacb21ede4f066c3b577f20fc6db09743b02631ac36005ad16c580004cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d379eacb21ede4f066c3b577f20fc6db09743b02631ac36005ad16c580004cab->enter($__internal_d379eacb21ede4f066c3b577f20fc6db09743b02631ac36005ad16c580004cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_d379eacb21ede4f066c3b577f20fc6db09743b02631ac36005ad16c580004cab->leave($__internal_d379eacb21ede4f066c3b577f20fc6db09743b02631ac36005ad16c580004cab_prof);

        
        $__internal_6c541168363e21e3fdfdf6df6357411435c34e58f1b582dbd4ca211b9ffe39bf->leave($__internal_6c541168363e21e3fdfdf6df6357411435c34e58f1b582dbd4ca211b9ffe39bf_prof);

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
