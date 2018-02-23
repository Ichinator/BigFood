<?php

/* EasyAdminBundle:default:field_url.html.twig */
class __TwigTemplate_1ace17b21ad8fccbff76474c1e9a437a8a2428fbea84701793173a76f8262de4 extends Twig_Template
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
        $__internal_89e2cb4abfa7feab486fbe5f4e6a86da8d55813595b49924ff603080b40dbdd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89e2cb4abfa7feab486fbe5f4e6a86da8d55813595b49924ff603080b40dbdd9->enter($__internal_89e2cb4abfa7feab486fbe5f4e6a86da8d55813595b49924ff603080b40dbdd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_url.html.twig"));

        $__internal_bdc9c3531011f5087b1488e4799a8a84baed8e11bb3448cfbd1ce88516c1b3f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdc9c3531011f5087b1488e4799a8a84baed8e11bb3448cfbd1ce88516c1b3f0->enter($__internal_bdc9c3531011f5087b1488e4799a8a84baed8e11bb3448cfbd1ce88516c1b3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_url.html.twig"));

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
        
        $__internal_89e2cb4abfa7feab486fbe5f4e6a86da8d55813595b49924ff603080b40dbdd9->leave($__internal_89e2cb4abfa7feab486fbe5f4e6a86da8d55813595b49924ff603080b40dbdd9_prof);

        
        $__internal_bdc9c3531011f5087b1488e4799a8a84baed8e11bb3448cfbd1ce88516c1b3f0->leave($__internal_bdc9c3531011f5087b1488e4799a8a84baed8e11bb3448cfbd1ce88516c1b3f0_prof);

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
