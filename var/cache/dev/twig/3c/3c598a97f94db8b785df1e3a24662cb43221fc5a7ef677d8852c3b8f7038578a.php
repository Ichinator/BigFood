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
        $__internal_2cccb6e6312d85c08aab27d6e87a4e7a716e8a21358a9a302f759637063eaf64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cccb6e6312d85c08aab27d6e87a4e7a716e8a21358a9a302f759637063eaf64->enter($__internal_2cccb6e6312d85c08aab27d6e87a4e7a716e8a21358a9a302f759637063eaf64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        $__internal_5cea1af15bcf30e24043f0e55166c09d10ec3f7392672a95bdb557a3db4c4e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cea1af15bcf30e24043f0e55166c09d10ec3f7392672a95bdb557a3db4c4e7d->enter($__internal_5cea1af15bcf30e24043f0e55166c09d10ec3f7392672a95bdb557a3db4c4e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

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
        
        $__internal_2cccb6e6312d85c08aab27d6e87a4e7a716e8a21358a9a302f759637063eaf64->leave($__internal_2cccb6e6312d85c08aab27d6e87a4e7a716e8a21358a9a302f759637063eaf64_prof);

        
        $__internal_5cea1af15bcf30e24043f0e55166c09d10ec3f7392672a95bdb557a3db4c4e7d->leave($__internal_5cea1af15bcf30e24043f0e55166c09d10ec3f7392672a95bdb557a3db4c4e7d_prof);

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
