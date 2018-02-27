<?php

/* IchinatorContactBundle:Default:index.html.twig */
class __TwigTemplate_8675b7f438861c0318bc85a0b269632294f26cf3ba8157bb4421a4da8db3af09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IchinatorContactBundle:Default:index.html.twig", 1);
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
        $__internal_8deb7359d1ce7066bcb6fea3778433748aba418b69719746a8a45f7c039a3a37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8deb7359d1ce7066bcb6fea3778433748aba418b69719746a8a45f7c039a3a37->enter($__internal_8deb7359d1ce7066bcb6fea3778433748aba418b69719746a8a45f7c039a3a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorContactBundle:Default:index.html.twig"));

        $__internal_bcf33fc5a27e9d7ded228eb2d9340ddfeb362079e8c811c79813c5479190ae8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf33fc5a27e9d7ded228eb2d9340ddfeb362079e8c811c79813c5479190ae8c->enter($__internal_bcf33fc5a27e9d7ded228eb2d9340ddfeb362079e8c811c79813c5479190ae8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorContactBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8deb7359d1ce7066bcb6fea3778433748aba418b69719746a8a45f7c039a3a37->leave($__internal_8deb7359d1ce7066bcb6fea3778433748aba418b69719746a8a45f7c039a3a37_prof);

        
        $__internal_bcf33fc5a27e9d7ded228eb2d9340ddfeb362079e8c811c79813c5479190ae8c->leave($__internal_bcf33fc5a27e9d7ded228eb2d9340ddfeb362079e8c811c79813c5479190ae8c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6cd0eca49483d6e7d26ae9dac90150341e677de0c9763c38208f992a5ba2f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6cd0eca49483d6e7d26ae9dac90150341e677de0c9763c38208f992a5ba2f67->enter($__internal_f6cd0eca49483d6e7d26ae9dac90150341e677de0c9763c38208f992a5ba2f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_392e753c3db9939ede8ca8e4ff6f8a26a63ebb42cb883f58415786f22e73b68c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392e753c3db9939ede8ca8e4ff6f8a26a63ebb42cb883f58415786f22e73b68c->enter($__internal_392e753c3db9939ede8ca8e4ff6f8a26a63ebb42cb883f58415786f22e73b68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_392e753c3db9939ede8ca8e4ff6f8a26a63ebb42cb883f58415786f22e73b68c->leave($__internal_392e753c3db9939ede8ca8e4ff6f8a26a63ebb42cb883f58415786f22e73b68c_prof);

        
        $__internal_f6cd0eca49483d6e7d26ae9dac90150341e677de0c9763c38208f992a5ba2f67->leave($__internal_f6cd0eca49483d6e7d26ae9dac90150341e677de0c9763c38208f992a5ba2f67_prof);

    }

    public function getTemplateName()
    {
        return "IchinatorContactBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 6,  58 => 5,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    {{ parent() }}
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}
", "IchinatorContactBundle:Default:index.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/ContactBundle/Resources/views/Default/index.html.twig");
    }
}
