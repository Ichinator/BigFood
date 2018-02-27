<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_c5ab84a95d6be2b51a9e81cedcca6035f0b7b8867aa6c5f74065bd5f81507b99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25e78f4e6bb83e8574d36657c8453d09ca9a90c69be8ccd808528ada5a53f45a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25e78f4e6bb83e8574d36657c8453d09ca9a90c69be8ccd808528ada5a53f45a->enter($__internal_25e78f4e6bb83e8574d36657c8453d09ca9a90c69be8ccd808528ada5a53f45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        $__internal_8a4592fb63f10aecb55e9c44f55d9eb0ad615f15b1abe0e897904241cd6fd4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4592fb63f10aecb55e9c44f55d9eb0ad615f15b1abe0e897904241cd6fd4b7->enter($__internal_8a4592fb63f10aecb55e9c44f55d9eb0ad615f15b1abe0e897904241cd6fd4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => ($context["token"] ?? $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_25e78f4e6bb83e8574d36657c8453d09ca9a90c69be8ccd808528ada5a53f45a->leave($__internal_25e78f4e6bb83e8574d36657c8453d09ca9a90c69be8ccd808528ada5a53f45a_prof);

        
        $__internal_8a4592fb63f10aecb55e9c44f55d9eb0ad615f15b1abe0e897904241cd6fd4b7->leave($__internal_8a4592fb63f10aecb55e9c44f55d9eb0ad615f15b1abe0e897904241cd6fd4b7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Resetting:reset_content.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Resetting/reset_content.html.twig");
    }
}
