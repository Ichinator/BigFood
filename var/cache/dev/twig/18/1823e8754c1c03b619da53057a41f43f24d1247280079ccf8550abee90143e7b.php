<?php

/* EasyAdminBundle:default:field_file.html.twig */
class __TwigTemplate_d6f49a3ee11f3b0b5f52a4babc1d920af29fa0972542a3cda9294faa0cb3fe5b extends Twig_Template
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
        $__internal_59da899190cdf921f44cceab18813dda47ab965694b6b62716f523c1665204fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59da899190cdf921f44cceab18813dda47ab965694b6b62716f523c1665204fe->enter($__internal_59da899190cdf921f44cceab18813dda47ab965694b6b62716f523c1665204fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

        $__internal_50c0f781934c934a4f9c0a59f8321e08dfa4b6fa8c8d6ba71433292a54fc38e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c0f781934c934a4f9c0a59f8321e08dfa4b6fa8c8d6ba71433292a54fc38e2->enter($__internal_50c0f781934c934a4f9c0a59f8321e08dfa4b6fa8c8d6ba71433292a54fc38e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "\" target=\"_blank\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["filename"] ?? $this->getContext($context, "filename"))), "html", null, true);
        echo "
</a>
";
        
        $__internal_59da899190cdf921f44cceab18813dda47ab965694b6b62716f523c1665204fe->leave($__internal_59da899190cdf921f44cceab18813dda47ab965694b6b62716f523c1665204fe_prof);

        
        $__internal_50c0f781934c934a4f9c0a59f8321e08dfa4b6fa8c8d6ba71433292a54fc38e2->leave($__internal_50c0f781934c934a4f9c0a59f8321e08dfa4b6fa8c8d6ba71433292a54fc38e2_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ asset(value) }}\" target=\"_blank\">
    {{ filename|easyadmin_truncate }}
</a>
", "EasyAdminBundle:default:field_file.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_file.html.twig");
    }
}
