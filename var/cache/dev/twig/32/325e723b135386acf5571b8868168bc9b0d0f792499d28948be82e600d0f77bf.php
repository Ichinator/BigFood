<?php

/* EasyAdminBundle:default:field_time.html.twig */
class __TwigTemplate_7960dc55ca434a3bc47a3020ada32be25a73085820d837d1068af5f498982cd6 extends Twig_Template
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
        $__internal_bc1b0f73610a1fbf35b1e511095e88e4cee266d13f231978d135dd6df40ffad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc1b0f73610a1fbf35b1e511095e88e4cee266d13f231978d135dd6df40ffad3->enter($__internal_bc1b0f73610a1fbf35b1e511095e88e4cee266d13f231978d135dd6df40ffad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        $__internal_94001c30d7ad39fac40fa2090fd427653701738cfa497671de95088d53a16a75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94001c30d7ad39fac40fa2090fd427653701738cfa497671de95088d53a16a75->enter($__internal_94001c30d7ad39fac40fa2090fd427653701738cfa497671de95088d53a16a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_bc1b0f73610a1fbf35b1e511095e88e4cee266d13f231978d135dd6df40ffad3->leave($__internal_bc1b0f73610a1fbf35b1e511095e88e4cee266d13f231978d135dd6df40ffad3_prof);

        
        $__internal_94001c30d7ad39fac40fa2090fd427653701738cfa497671de95088d53a16a75->leave($__internal_94001c30d7ad39fac40fa2090fd427653701738cfa497671de95088d53a16a75_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ value|date(field_options.format) }}
", "EasyAdminBundle:default:field_time.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_time.html.twig");
    }
}
