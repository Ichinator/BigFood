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
        $__internal_24605da4f674192f76c1a136a09bef0d2f4b330ba1bbcd03e5d880b83af9f37c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24605da4f674192f76c1a136a09bef0d2f4b330ba1bbcd03e5d880b83af9f37c->enter($__internal_24605da4f674192f76c1a136a09bef0d2f4b330ba1bbcd03e5d880b83af9f37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorNewsBundle:Default:news.html.twig"));

        $__internal_5a239100c03796e27e1beeb0f7309709e7e8dff4544db53e9d23fbc38573aab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a239100c03796e27e1beeb0f7309709e7e8dff4544db53e9d23fbc38573aab4->enter($__internal_5a239100c03796e27e1beeb0f7309709e7e8dff4544db53e9d23fbc38573aab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorNewsBundle:Default:news.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24605da4f674192f76c1a136a09bef0d2f4b330ba1bbcd03e5d880b83af9f37c->leave($__internal_24605da4f674192f76c1a136a09bef0d2f4b330ba1bbcd03e5d880b83af9f37c_prof);

        
        $__internal_5a239100c03796e27e1beeb0f7309709e7e8dff4544db53e9d23fbc38573aab4->leave($__internal_5a239100c03796e27e1beeb0f7309709e7e8dff4544db53e9d23fbc38573aab4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_91f31711dfc3340921fe0af6ce76515a03e571a5193e94a7d3e0c913c525f889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f31711dfc3340921fe0af6ce76515a03e571a5193e94a7d3e0c913c525f889->enter($__internal_91f31711dfc3340921fe0af6ce76515a03e571a5193e94a7d3e0c913c525f889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a719abfb0eaf84e0ef18d80943bef8149f3f605dcfa0a90634166e70e0732ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a719abfb0eaf84e0ef18d80943bef8149f3f605dcfa0a90634166e70e0732ca->enter($__internal_1a719abfb0eaf84e0ef18d80943bef8149f3f605dcfa0a90634166e70e0732ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1a719abfb0eaf84e0ef18d80943bef8149f3f605dcfa0a90634166e70e0732ca->leave($__internal_1a719abfb0eaf84e0ef18d80943bef8149f3f605dcfa0a90634166e70e0732ca_prof);

        
        $__internal_91f31711dfc3340921fe0af6ce76515a03e571a5193e94a7d3e0c913c525f889->leave($__internal_91f31711dfc3340921fe0af6ce76515a03e571a5193e94a7d3e0c913c525f889_prof);

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
