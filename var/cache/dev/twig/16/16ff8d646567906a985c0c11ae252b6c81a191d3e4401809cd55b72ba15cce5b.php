<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a5c79ecc3dc0a78c8be61e93261a0458230904081d96025c43c78a322794cdbd extends Twig_Template
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
        $__internal_901be2b3a0368aa3d1965cba768ddbea754386da08e40b8a8162865f7fa53fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_901be2b3a0368aa3d1965cba768ddbea754386da08e40b8a8162865f7fa53fcd->enter($__internal_901be2b3a0368aa3d1965cba768ddbea754386da08e40b8a8162865f7fa53fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_f859213d057e2389537c4193dc846bbb833be4097b9faf73e219b967491ff975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f859213d057e2389537c4193dc846bbb833be4097b9faf73e219b967491ff975->enter($__internal_f859213d057e2389537c4193dc846bbb833be4097b9faf73e219b967491ff975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_901be2b3a0368aa3d1965cba768ddbea754386da08e40b8a8162865f7fa53fcd->leave($__internal_901be2b3a0368aa3d1965cba768ddbea754386da08e40b8a8162865f7fa53fcd_prof);

        
        $__internal_f859213d057e2389537c4193dc846bbb833be4097b9faf73e219b967491ff975->leave($__internal_f859213d057e2389537c4193dc846bbb833be4097b9faf73e219b967491ff975_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
