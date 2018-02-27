<?php

/* IchinatorCommandBundle:Default:command.html.twig */
class __TwigTemplate_cac216efcf767a28df7c20649b38ef304df356c7a65b61ff159e4a499cb2cdb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IchinatorCommandBundle:Default:command.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aee8f8ae754cd3f80564c9be5dcc9c214ebe8f4ee02e36d8b2b30b820177db4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aee8f8ae754cd3f80564c9be5dcc9c214ebe8f4ee02e36d8b2b30b820177db4c->enter($__internal_aee8f8ae754cd3f80564c9be5dcc9c214ebe8f4ee02e36d8b2b30b820177db4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:command.html.twig"));

        $__internal_15a9de4efab2b959addd434a2edd8f7a24a6edef4976253d080a1e1a6ccd2e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a9de4efab2b959addd434a2edd8f7a24a6edef4976253d080a1e1a6ccd2e86->enter($__internal_15a9de4efab2b959addd434a2edd8f7a24a6edef4976253d080a1e1a6ccd2e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:command.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aee8f8ae754cd3f80564c9be5dcc9c214ebe8f4ee02e36d8b2b30b820177db4c->leave($__internal_aee8f8ae754cd3f80564c9be5dcc9c214ebe8f4ee02e36d8b2b30b820177db4c_prof);

        
        $__internal_15a9de4efab2b959addd434a2edd8f7a24a6edef4976253d080a1e1a6ccd2e86->leave($__internal_15a9de4efab2b959addd434a2edd8f7a24a6edef4976253d080a1e1a6ccd2e86_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9185207fb1438f5d0e4aa88c292a4430ae54e9a007d50d632b421a15502f9e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9185207fb1438f5d0e4aa88c292a4430ae54e9a007d50d632b421a15502f9e41->enter($__internal_9185207fb1438f5d0e4aa88c292a4430ae54e9a007d50d632b421a15502f9e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_029a35bbc234c5058339532ce0ed6b331ad361df7329887c6f032d7c42055b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_029a35bbc234c5058339532ce0ed6b331ad361df7329887c6f032d7c42055b4f->enter($__internal_029a35bbc234c5058339532ce0ed6b331ad361df7329887c6f032d7c42055b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"row\">
        <div class=\"col-sm-8\">
            ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_029a35bbc234c5058339532ce0ed6b331ad361df7329887c6f032d7c42055b4f->leave($__internal_029a35bbc234c5058339532ce0ed6b331ad361df7329887c6f032d7c42055b4f_prof);

        
        $__internal_9185207fb1438f5d0e4aa88c292a4430ae54e9a007d50d632b421a15502f9e41->leave($__internal_9185207fb1438f5d0e4aa88c292a4430ae54e9a007d50d632b421a15502f9e41_prof);

    }

    public function getTemplateName()
    {
        return "IchinatorCommandBundle:Default:command.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 8,  60 => 7,  56 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
    {{ parent() }}
    <div class=\"row\">
        <div class=\"col-sm-8\">
            {{ form_start(form) }}
            {{ form_widget(form) }}
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", "IchinatorCommandBundle:Default:command.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/CommandBundle/Resources/views/Default/command.html.twig");
    }
}
