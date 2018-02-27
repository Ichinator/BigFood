<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_8cba37a77c0c63c01746c2c4f9c514801dbee3fe8678fb7a7df9d56d33916e7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f34fd1f015b580eb55dfdf8251a95ee316d8cfe556fcb41b48e36f5c8367a2a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f34fd1f015b580eb55dfdf8251a95ee316d8cfe556fcb41b48e36f5c8367a2a6->enter($__internal_f34fd1f015b580eb55dfdf8251a95ee316d8cfe556fcb41b48e36f5c8367a2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_8d0d1e1135d9372cc858b332a1ba55b9365b2258ca250ec6af6161f3f04a79ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0d1e1135d9372cc858b332a1ba55b9365b2258ca250ec6af6161f3f04a79ed->enter($__internal_8d0d1e1135d9372cc858b332a1ba55b9365b2258ca250ec6af6161f3f04a79ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f34fd1f015b580eb55dfdf8251a95ee316d8cfe556fcb41b48e36f5c8367a2a6->leave($__internal_f34fd1f015b580eb55dfdf8251a95ee316d8cfe556fcb41b48e36f5c8367a2a6_prof);

        
        $__internal_8d0d1e1135d9372cc858b332a1ba55b9365b2258ca250ec6af6161f3f04a79ed->leave($__internal_8d0d1e1135d9372cc858b332a1ba55b9365b2258ca250ec6af6161f3f04a79ed_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_702d0ec57c07d237fc5bcdb13b4fb593672849e62d24f23e8e152b83d5b540a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_702d0ec57c07d237fc5bcdb13b4fb593672849e62d24f23e8e152b83d5b540a2->enter($__internal_702d0ec57c07d237fc5bcdb13b4fb593672849e62d24f23e8e152b83d5b540a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_17931bd05b8648061abd89c014bdddec962cf7e806c68736fddfe816b9fdc358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17931bd05b8648061abd89c014bdddec962cf7e806c68736fddfe816b9fdc358->enter($__internal_17931bd05b8648061abd89c014bdddec962cf7e806c68736fddfe816b9fdc358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_17931bd05b8648061abd89c014bdddec962cf7e806c68736fddfe816b9fdc358->leave($__internal_17931bd05b8648061abd89c014bdddec962cf7e806c68736fddfe816b9fdc358_prof);

        
        $__internal_702d0ec57c07d237fc5bcdb13b4fb593672849e62d24f23e8e152b83d5b540a2->leave($__internal_702d0ec57c07d237fc5bcdb13b4fb593672849e62d24f23e8e152b83d5b540a2_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c081970a6162f4b41c388a32e372770eca0b1f87bc100db3eb816d22dc31adf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c081970a6162f4b41c388a32e372770eca0b1f87bc100db3eb816d22dc31adf4->enter($__internal_c081970a6162f4b41c388a32e372770eca0b1f87bc100db3eb816d22dc31adf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_f95b0697d40a2153d11ebe6dabf86944877b22aef672b1004d1babeff45a76e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95b0697d40a2153d11ebe6dabf86944877b22aef672b1004d1babeff45a76e5->enter($__internal_f95b0697d40a2153d11ebe6dabf86944877b22aef672b1004d1babeff45a76e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f95b0697d40a2153d11ebe6dabf86944877b22aef672b1004d1babeff45a76e5->leave($__internal_f95b0697d40a2153d11ebe6dabf86944877b22aef672b1004d1babeff45a76e5_prof);

        
        $__internal_c081970a6162f4b41c388a32e372770eca0b1f87bc100db3eb816d22dc31adf4->leave($__internal_c081970a6162f4b41c388a32e372770eca0b1f87bc100db3eb816d22dc31adf4_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5e89385b1b3705df1bf9a25d32d1a52aec5f43fe3b78445c13066099875ad2f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e89385b1b3705df1bf9a25d32d1a52aec5f43fe3b78445c13066099875ad2f4->enter($__internal_5e89385b1b3705df1bf9a25d32d1a52aec5f43fe3b78445c13066099875ad2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_50fcaaf5e0635ad6097d197811a4573e1792cbb93702f3110b5f1306a1ba610d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50fcaaf5e0635ad6097d197811a4573e1792cbb93702f3110b5f1306a1ba610d->enter($__internal_50fcaaf5e0635ad6097d197811a4573e1792cbb93702f3110b5f1306a1ba610d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_50fcaaf5e0635ad6097d197811a4573e1792cbb93702f3110b5f1306a1ba610d->leave($__internal_50fcaaf5e0635ad6097d197811a4573e1792cbb93702f3110b5f1306a1ba610d_prof);

        
        $__internal_5e89385b1b3705df1bf9a25d32d1a52aec5f43fe3b78445c13066099875ad2f4->leave($__internal_5e89385b1b3705df1bf9a25d32d1a52aec5f43fe3b78445c13066099875ad2f4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
