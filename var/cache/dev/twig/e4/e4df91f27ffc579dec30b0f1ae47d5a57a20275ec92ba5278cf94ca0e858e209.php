<?php

/* IchinatorNewsBundle:Default:news.html.twig */
class __TwigTemplate_53d5520c5d2aa2eb8becd14ff3a8fda10c158ebc1ffe1c7bbc68b2a96e6d33a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IchinatorNewsBundle:Default:news.html.twig", 1);
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
        $__internal_88f27080cf9ab4be45ef01f01de3c94b33d319a9ec0391362c7be53c96ca8737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88f27080cf9ab4be45ef01f01de3c94b33d319a9ec0391362c7be53c96ca8737->enter($__internal_88f27080cf9ab4be45ef01f01de3c94b33d319a9ec0391362c7be53c96ca8737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorNewsBundle:Default:news.html.twig"));

        $__internal_6d023c0ed17fe3d4d39ae108dcf3c5b80e2a1507fedee0b928987647547dcf28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d023c0ed17fe3d4d39ae108dcf3c5b80e2a1507fedee0b928987647547dcf28->enter($__internal_6d023c0ed17fe3d4d39ae108dcf3c5b80e2a1507fedee0b928987647547dcf28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorNewsBundle:Default:news.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88f27080cf9ab4be45ef01f01de3c94b33d319a9ec0391362c7be53c96ca8737->leave($__internal_88f27080cf9ab4be45ef01f01de3c94b33d319a9ec0391362c7be53c96ca8737_prof);

        
        $__internal_6d023c0ed17fe3d4d39ae108dcf3c5b80e2a1507fedee0b928987647547dcf28->leave($__internal_6d023c0ed17fe3d4d39ae108dcf3c5b80e2a1507fedee0b928987647547dcf28_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf26ab3ac871468e225e83941ec7b9ccf09a6b099e99df3dad37d2c97ac1dd45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf26ab3ac871468e225e83941ec7b9ccf09a6b099e99df3dad37d2c97ac1dd45->enter($__internal_cf26ab3ac871468e225e83941ec7b9ccf09a6b099e99df3dad37d2c97ac1dd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e098dd79f7313d7be8a18cf954cb26cb148749207273a5e5b2e97faaf4063e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e098dd79f7313d7be8a18cf954cb26cb148749207273a5e5b2e97faaf4063e4->enter($__internal_9e098dd79f7313d7be8a18cf954cb26cb148749207273a5e5b2e97faaf4063e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9e098dd79f7313d7be8a18cf954cb26cb148749207273a5e5b2e97faaf4063e4->leave($__internal_9e098dd79f7313d7be8a18cf954cb26cb148749207273a5e5b2e97faaf4063e4_prof);

        
        $__internal_cf26ab3ac871468e225e83941ec7b9ccf09a6b099e99df3dad37d2c97ac1dd45->leave($__internal_cf26ab3ac871468e225e83941ec7b9ccf09a6b099e99df3dad37d2c97ac1dd45_prof);

    }

    public function getTemplateName()
    {
        return "IchinatorNewsBundle:Default:news.html.twig";
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
{% endblock %}", "IchinatorNewsBundle:Default:news.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/NewsBundle/Resources/views/Default/news.html.twig");
    }
}
