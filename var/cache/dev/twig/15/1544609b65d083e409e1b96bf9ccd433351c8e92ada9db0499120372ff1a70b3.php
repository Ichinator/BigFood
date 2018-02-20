<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a4ddc7c40891a8a438c4f111aae217d8a0769d91672756334eabdb77f0139c66 extends Twig_Template
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
        $__internal_a50e17e7468ab99e75fbf517942d09d9e560ceceb759773cb19b6b66142eff7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a50e17e7468ab99e75fbf517942d09d9e560ceceb759773cb19b6b66142eff7b->enter($__internal_a50e17e7468ab99e75fbf517942d09d9e560ceceb759773cb19b6b66142eff7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_b054d3c7b216784552ac174f2fd62f1fae914bbbc41b3bcda085b083e289936a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b054d3c7b216784552ac174f2fd62f1fae914bbbc41b3bcda085b083e289936a->enter($__internal_b054d3c7b216784552ac174f2fd62f1fae914bbbc41b3bcda085b083e289936a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a50e17e7468ab99e75fbf517942d09d9e560ceceb759773cb19b6b66142eff7b->leave($__internal_a50e17e7468ab99e75fbf517942d09d9e560ceceb759773cb19b6b66142eff7b_prof);

        
        $__internal_b054d3c7b216784552ac174f2fd62f1fae914bbbc41b3bcda085b083e289936a->leave($__internal_b054d3c7b216784552ac174f2fd62f1fae914bbbc41b3bcda085b083e289936a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b503ab59413ff58871e3c0c89bbf14831ddb35eee4f0c7be091bb3c1a0173e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b503ab59413ff58871e3c0c89bbf14831ddb35eee4f0c7be091bb3c1a0173e7->enter($__internal_8b503ab59413ff58871e3c0c89bbf14831ddb35eee4f0c7be091bb3c1a0173e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_de3b675b124f0491b52ef3540a44bf53e7411ef9ccd9bbcd363190666d17efb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3b675b124f0491b52ef3540a44bf53e7411ef9ccd9bbcd363190666d17efb2->enter($__internal_de3b675b124f0491b52ef3540a44bf53e7411ef9ccd9bbcd363190666d17efb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_de3b675b124f0491b52ef3540a44bf53e7411ef9ccd9bbcd363190666d17efb2->leave($__internal_de3b675b124f0491b52ef3540a44bf53e7411ef9ccd9bbcd363190666d17efb2_prof);

        
        $__internal_8b503ab59413ff58871e3c0c89bbf14831ddb35eee4f0c7be091bb3c1a0173e7->leave($__internal_8b503ab59413ff58871e3c0c89bbf14831ddb35eee4f0c7be091bb3c1a0173e7_prof);

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
