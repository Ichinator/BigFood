<?php

/* IchinatorCommandBundle:Default:plat.html.twig */
class __TwigTemplate_06857a8218774df3a13ca48907e6bbb04432861566d1f9b89a7387640fb3c89b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IchinatorCommandBundle:Default:plat.html.twig", 1);
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
        $__internal_ded4abc2ddcd253cb8b1e270ee25a8412db744c4e48aa4af0ca4fcba0dba6334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ded4abc2ddcd253cb8b1e270ee25a8412db744c4e48aa4af0ca4fcba0dba6334->enter($__internal_ded4abc2ddcd253cb8b1e270ee25a8412db744c4e48aa4af0ca4fcba0dba6334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:plat.html.twig"));

        $__internal_cf0615d30a250ad6ed22fcc07f679ab8101545b17ccf4a551b81986593f2e3e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0615d30a250ad6ed22fcc07f679ab8101545b17ccf4a551b81986593f2e3e1->enter($__internal_cf0615d30a250ad6ed22fcc07f679ab8101545b17ccf4a551b81986593f2e3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:plat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ded4abc2ddcd253cb8b1e270ee25a8412db744c4e48aa4af0ca4fcba0dba6334->leave($__internal_ded4abc2ddcd253cb8b1e270ee25a8412db744c4e48aa4af0ca4fcba0dba6334_prof);

        
        $__internal_cf0615d30a250ad6ed22fcc07f679ab8101545b17ccf4a551b81986593f2e3e1->leave($__internal_cf0615d30a250ad6ed22fcc07f679ab8101545b17ccf4a551b81986593f2e3e1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_de8c5bd808dd0161b1dd92108cd3ec1037f24923be1f94fc62e792839a195c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8c5bd808dd0161b1dd92108cd3ec1037f24923be1f94fc62e792839a195c00->enter($__internal_de8c5bd808dd0161b1dd92108cd3ec1037f24923be1f94fc62e792839a195c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6951d6aefff43300534eb615c655ca7b87e04220b0883b1c473b48a43244a2c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6951d6aefff43300534eb615c655ca7b87e04220b0883b1c473b48a43244a2c0->enter($__internal_6951d6aefff43300534eb615c655ca7b87e04220b0883b1c473b48a43244a2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"row\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["plat"]);
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 6
            echo "
            <div class=\"card\" style=\"width:400px\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "name", array()), "html", null, true);
            echo "</h4>
                    <p class=\"card-text\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "price", array()), "html", null, true);
            echo " €</p>
                    <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["plat"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "image", array()), "html", null, true);
            echo "\" />
                    <p class=\"card-text\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "description", array()), "html", null, true);
            echo "</p>
                </div>
            </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </div>
";
        
        $__internal_6951d6aefff43300534eb615c655ca7b87e04220b0883b1c473b48a43244a2c0->leave($__internal_6951d6aefff43300534eb615c655ca7b87e04220b0883b1c473b48a43244a2c0_prof);

        
        $__internal_de8c5bd808dd0161b1dd92108cd3ec1037f24923be1f94fc62e792839a195c00->leave($__internal_de8c5bd808dd0161b1dd92108cd3ec1037f24923be1f94fc62e792839a195c00_prof);

    }

    public function getTemplateName()
    {
        return "IchinatorCommandBundle:Default:plat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 17,  78 => 12,  72 => 11,  68 => 10,  64 => 9,  59 => 6,  55 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
    {% for plat in plat %}

            <div class=\"card\" style=\"width:400px\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">{{ plat.name }}</h4>
                    <p class=\"card-text\">{{ plat.price }} €</p>
                    <img src=\"{{ vich_uploader_asset(plat, 'imageFile') }}\" alt=\"{{ plat.image }}\" />
                    <p class=\"card-text\">{{ plat.description }}</p>
                </div>
            </div>

    {% endfor %}
    </div>
{% endblock %}", "IchinatorCommandBundle:Default:plat.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/CommandBundle/Resources/views/Default/plat.html.twig");
    }
}
