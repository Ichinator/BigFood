<?php

/* EasyAdminBundle:default:field_raw.html.twig */
class __TwigTemplate_5c40bf49052520bc7e90226534622d7126f14b896a5ae89a68410eeaeb0273b7 extends Twig_Template
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
        $__internal_28683ec758382397efd0dafc1d062a0a428448e7e25c8bb7e57b8eb25c74f9ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28683ec758382397efd0dafc1d062a0a428448e7e25c8bb7e57b8eb25c74f9ce->enter($__internal_28683ec758382397efd0dafc1d062a0a428448e7e25c8bb7e57b8eb25c74f9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_raw.html.twig"));

        $__internal_352b26fb1334172e34f5a22e16bc8f1cf4566ea234396315ec8148a3ca7fedc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352b26fb1334172e34f5a22e16bc8f1cf4566ea234396315ec8148a3ca7fedc0->enter($__internal_352b26fb1334172e34f5a22e16bc8f1cf4566ea234396315ec8148a3ca7fedc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_raw.html.twig"));

        // line 1
        echo ($context["value"] ?? $this->getContext($context, "value"));
        echo "
";
        
        $__internal_28683ec758382397efd0dafc1d062a0a428448e7e25c8bb7e57b8eb25c74f9ce->leave($__internal_28683ec758382397efd0dafc1d062a0a428448e7e25c8bb7e57b8eb25c74f9ce_prof);

        
        $__internal_352b26fb1334172e34f5a22e16bc8f1cf4566ea234396315ec8148a3ca7fedc0->leave($__internal_352b26fb1334172e34f5a22e16bc8f1cf4566ea234396315ec8148a3ca7fedc0_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_raw.html.twig";
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
        return new Twig_Source("{{ value|raw }}
", "EasyAdminBundle:default:field_raw.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_raw.html.twig");
    }
}
