<?php

/* EasyAdminBundle:default:field_url.html.twig */
class __TwigTemplate_8676ee299239374a661243cc54b1f8c3a4963e35796b6d01d9156169e6a98f2d extends Twig_Template
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
        $__internal_908e2cdcd1e5fb865c44f615189062aa6cceecb7b3227615d77f9b171480513a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_908e2cdcd1e5fb865c44f615189062aa6cceecb7b3227615d77f9b171480513a->enter($__internal_908e2cdcd1e5fb865c44f615189062aa6cceecb7b3227615d77f9b171480513a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_url.html.twig"));

        $__internal_e2293135acc8b7e3b33635330de05339b59b507375d77dd22dfbea8abfa555b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2293135acc8b7e3b33635330de05339b59b507375d77dd22dfbea8abfa555b6->enter($__internal_e2293135acc8b7e3b33635330de05339b59b507375d77dd22dfbea8abfa555b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_url.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, twig_replace_filter(($context["value"] ?? $this->getContext($context, "value")), array("https://" => "", "http://" => ""))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_908e2cdcd1e5fb865c44f615189062aa6cceecb7b3227615d77f9b171480513a->leave($__internal_908e2cdcd1e5fb865c44f615189062aa6cceecb7b3227615d77f9b171480513a_prof);

        
        $__internal_e2293135acc8b7e3b33635330de05339b59b507375d77dd22dfbea8abfa555b6->leave($__internal_e2293135acc8b7e3b33635330de05339b59b507375d77dd22dfbea8abfa555b6_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  27 => 2,  25 => 1,);
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
    <a target=\"_blank\" href=\"{{ value }}\">{{ value }}</a>
{% else %}
    <a target=\"_blank\" href=\"{{ value }}\">{{ value|replace({ 'https://': '', 'http://': '' })|easyadmin_truncate }}</a>
{% endif %}
", "EasyAdminBundle:default:field_url.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_url.html.twig");
    }
}
