<?php

/* EasyAdminBundle:default:field_bigint.html.twig */
class __TwigTemplate_8833ceff36a29439363c12a3ff579c0b871d570109155962cd63c2841a645452 extends Twig_Template
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
        $__internal_52d23de733d7e10e34620a626cb92c1f4226d107640370bfcd31aaf7a1a0f565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d23de733d7e10e34620a626cb92c1f4226d107640370bfcd31aaf7a1a0f565->enter($__internal_52d23de733d7e10e34620a626cb92c1f4226d107640370bfcd31aaf7a1a0f565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

        $__internal_32ceae95e9ac4e8c23a0a1d7de6418ba6b95b9dd3d542dec0b7238c4325cdeda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ceae95e9ac4e8c23a0a1d7de6418ba6b95b9dd3d542dec0b7238c4325cdeda->enter($__internal_32ceae95e9ac4e8c23a0a1d7de6418ba6b95b9dd3d542dec0b7238c4325cdeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

        // line 1
        if ($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array()), ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_52d23de733d7e10e34620a626cb92c1f4226d107640370bfcd31aaf7a1a0f565->leave($__internal_52d23de733d7e10e34620a626cb92c1f4226d107640370bfcd31aaf7a1a0f565_prof);

        
        $__internal_32ceae95e9ac4e8c23a0a1d7de6418ba6b95b9dd3d542dec0b7238c4325cdeda->leave($__internal_32ceae95e9ac4e8c23a0a1d7de6418ba6b95b9dd3d542dec0b7238c4325cdeda_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_bigint.html.twig";
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
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format }}
{% endif %}
", "EasyAdminBundle:default:field_bigint.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_bigint.html.twig");
    }
}
