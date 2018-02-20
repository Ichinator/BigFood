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
        $__internal_6961e4f22d6f434e86f2deab1e3b5704af5fba0c2362cb99837b21ac8fea9bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6961e4f22d6f434e86f2deab1e3b5704af5fba0c2362cb99837b21ac8fea9bcc->enter($__internal_6961e4f22d6f434e86f2deab1e3b5704af5fba0c2362cb99837b21ac8fea9bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorNewsBundle:Default:news.html.twig"));

        $__internal_50c11e088440c4b65ba8ca0d2c465f493c9fab0adf1d4d201971eb517f008a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c11e088440c4b65ba8ca0d2c465f493c9fab0adf1d4d201971eb517f008a45->enter($__internal_50c11e088440c4b65ba8ca0d2c465f493c9fab0adf1d4d201971eb517f008a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorNewsBundle:Default:news.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6961e4f22d6f434e86f2deab1e3b5704af5fba0c2362cb99837b21ac8fea9bcc->leave($__internal_6961e4f22d6f434e86f2deab1e3b5704af5fba0c2362cb99837b21ac8fea9bcc_prof);

        
        $__internal_50c11e088440c4b65ba8ca0d2c465f493c9fab0adf1d4d201971eb517f008a45->leave($__internal_50c11e088440c4b65ba8ca0d2c465f493c9fab0adf1d4d201971eb517f008a45_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ac4cdfd467f54df5e142da49c11f2ea4e8bf1cc726576f5382ebeef8a4bc2f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac4cdfd467f54df5e142da49c11f2ea4e8bf1cc726576f5382ebeef8a4bc2f5->enter($__internal_7ac4cdfd467f54df5e142da49c11f2ea4e8bf1cc726576f5382ebeef8a4bc2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb9a31ea72621c0091520f76940cc025ef1d92d86f6d8da0f61d3f59a0579686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb9a31ea72621c0091520f76940cc025ef1d92d86f6d8da0f61d3f59a0579686->enter($__internal_fb9a31ea72621c0091520f76940cc025ef1d92d86f6d8da0f61d3f59a0579686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fb9a31ea72621c0091520f76940cc025ef1d92d86f6d8da0f61d3f59a0579686->leave($__internal_fb9a31ea72621c0091520f76940cc025ef1d92d86f6d8da0f61d3f59a0579686_prof);

        
        $__internal_7ac4cdfd467f54df5e142da49c11f2ea4e8bf1cc726576f5382ebeef8a4bc2f5->leave($__internal_7ac4cdfd467f54df5e142da49c11f2ea4e8bf1cc726576f5382ebeef8a4bc2f5_prof);

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
