<?php

/* EasyAdminBundle:default:field_text.html.twig */
class __TwigTemplate_d6508c1de6b93726a9bc0a31485c1f132618d52d8f8b14117e0995044cba014c extends Twig_Template
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
        $__internal_31d997ccd4225394316fe667156a5d114a6bdee39d257543eea129b2b2c4fd65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31d997ccd4225394316fe667156a5d114a6bdee39d257543eea129b2b2c4fd65->enter($__internal_31d997ccd4225394316fe667156a5d114a6bdee39d257543eea129b2b2c4fd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        $__internal_0a28db4df98aa0a18ce36e7d58f6ee88d3393aa4b1fc2df1db52c67bb7ac2529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a28db4df98aa0a18ce36e7d58f6ee88d3393aa4b1fc2df1db52c67bb7ac2529->enter($__internal_0a28db4df98aa0a18ce36e7d58f6ee88d3393aa4b1fc2df1db52c67bb7ac2529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

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
        
        $__internal_31d997ccd4225394316fe667156a5d114a6bdee39d257543eea129b2b2c4fd65->leave($__internal_31d997ccd4225394316fe667156a5d114a6bdee39d257543eea129b2b2c4fd65_prof);

        
        $__internal_0a28db4df98aa0a18ce36e7d58f6ee88d3393aa4b1fc2df1db52c67bb7ac2529->leave($__internal_0a28db4df98aa0a18ce36e7d58f6ee88d3393aa4b1fc2df1db52c67bb7ac2529_prof);

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
