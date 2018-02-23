<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3b336d554070b3ecd313059e04093c942aa73c673092a737bbe38f64dc7d8ac6 extends Twig_Template
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
        $__internal_113851a3925fecb78d18ff825fefd6a1cb4c39be3e512ba901345d6293538750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_113851a3925fecb78d18ff825fefd6a1cb4c39be3e512ba901345d6293538750->enter($__internal_113851a3925fecb78d18ff825fefd6a1cb4c39be3e512ba901345d6293538750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_3481aa8140df75f1197a8349b1bd34b4b996654de2d6c5ece715b18416deb831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3481aa8140df75f1197a8349b1bd34b4b996654de2d6c5ece715b18416deb831->enter($__internal_3481aa8140df75f1197a8349b1bd34b4b996654de2d6c5ece715b18416deb831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_113851a3925fecb78d18ff825fefd6a1cb4c39be3e512ba901345d6293538750->leave($__internal_113851a3925fecb78d18ff825fefd6a1cb4c39be3e512ba901345d6293538750_prof);

        
        $__internal_3481aa8140df75f1197a8349b1bd34b4b996654de2d6c5ece715b18416deb831->leave($__internal_3481aa8140df75f1197a8349b1bd34b4b996654de2d6c5ece715b18416deb831_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
