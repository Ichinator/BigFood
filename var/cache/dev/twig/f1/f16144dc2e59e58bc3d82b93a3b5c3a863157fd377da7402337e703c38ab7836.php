<?php

/* EasyAdminBundle:default:field_text.html.twig */
class __TwigTemplate_7c158628fb0eb034bd7bf3bcac25327525d6e60eab8f85a1fd3dbba233ed00d2 extends Twig_Template
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
        $__internal_fee8eb87bda7636d145935a7964399a2112bb965525c8a296cdf8ff673a2eaef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee8eb87bda7636d145935a7964399a2112bb965525c8a296cdf8ff673a2eaef->enter($__internal_fee8eb87bda7636d145935a7964399a2112bb965525c8a296cdf8ff673a2eaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        $__internal_324d70615ac095bb3195d1b5c924b2343bece2af1fe08c8952aaaa3af63a6db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324d70615ac095bb3195d1b5c924b2343bece2af1fe08c8952aaaa3af63a6db8->enter($__internal_324d70615ac095bb3195d1b5c924b2343bece2af1fe08c8952aaaa3af63a6db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_fee8eb87bda7636d145935a7964399a2112bb965525c8a296cdf8ff673a2eaef->leave($__internal_fee8eb87bda7636d145935a7964399a2112bb965525c8a296cdf8ff673a2eaef_prof);

        
        $__internal_324d70615ac095bb3195d1b5c924b2343bece2af1fe08c8952aaaa3af63a6db8->leave($__internal_324d70615ac095bb3195d1b5c924b2343bece2af1fe08c8952aaaa3af63a6db8_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_text.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_text.html.twig");
    }
}
