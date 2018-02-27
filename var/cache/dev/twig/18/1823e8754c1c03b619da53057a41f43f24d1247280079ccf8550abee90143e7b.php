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
        $__internal_3e6e60dd8ca08a5c9fe299c25f57e867c2b80a8571822d16aef14a44b7cec1d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e6e60dd8ca08a5c9fe299c25f57e867c2b80a8571822d16aef14a44b7cec1d8->enter($__internal_3e6e60dd8ca08a5c9fe299c25f57e867c2b80a8571822d16aef14a44b7cec1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

        $__internal_b9fc4cfae362b66ac08d35446868e7c8ef96c1a471b85d975c8768d653e1dd5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9fc4cfae362b66ac08d35446868e7c8ef96c1a471b85d975c8768d653e1dd5b->enter($__internal_b9fc4cfae362b66ac08d35446868e7c8ef96c1a471b85d975c8768d653e1dd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

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
        
        $__internal_3e6e60dd8ca08a5c9fe299c25f57e867c2b80a8571822d16aef14a44b7cec1d8->leave($__internal_3e6e60dd8ca08a5c9fe299c25f57e867c2b80a8571822d16aef14a44b7cec1d8_prof);

        
        $__internal_b9fc4cfae362b66ac08d35446868e7c8ef96c1a471b85d975c8768d653e1dd5b->leave($__internal_b9fc4cfae362b66ac08d35446868e7c8ef96c1a471b85d975c8768d653e1dd5b_prof);

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
