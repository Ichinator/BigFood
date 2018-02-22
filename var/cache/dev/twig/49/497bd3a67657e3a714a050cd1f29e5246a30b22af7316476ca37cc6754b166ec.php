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
        $__internal_c5d5deeeea91c24239c270b68a67cab54bea070345e13f1130709e8ab974d4c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d5deeeea91c24239c270b68a67cab54bea070345e13f1130709e8ab974d4c9->enter($__internal_c5d5deeeea91c24239c270b68a67cab54bea070345e13f1130709e8ab974d4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:plat.html.twig"));

        $__internal_0d54d104dc11d9cf5bc51d5850f8f6a683d5878847c43d662d4ef63b3d583b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d54d104dc11d9cf5bc51d5850f8f6a683d5878847c43d662d4ef63b3d583b8c->enter($__internal_0d54d104dc11d9cf5bc51d5850f8f6a683d5878847c43d662d4ef63b3d583b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:plat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5d5deeeea91c24239c270b68a67cab54bea070345e13f1130709e8ab974d4c9->leave($__internal_c5d5deeeea91c24239c270b68a67cab54bea070345e13f1130709e8ab974d4c9_prof);

        
        $__internal_0d54d104dc11d9cf5bc51d5850f8f6a683d5878847c43d662d4ef63b3d583b8c->leave($__internal_0d54d104dc11d9cf5bc51d5850f8f6a683d5878847c43d662d4ef63b3d583b8c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc95771dcb361c5c123ca64141ad18040bd375e574fa38730ada8ade597653d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc95771dcb361c5c123ca64141ad18040bd375e574fa38730ada8ade597653d7->enter($__internal_dc95771dcb361c5c123ca64141ad18040bd375e574fa38730ada8ade597653d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46b75e2b2de579683a5a693567636358f2b955942fd75d8924ceee9f06ac8883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b75e2b2de579683a5a693567636358f2b955942fd75d8924ceee9f06ac8883->enter($__internal_46b75e2b2de579683a5a693567636358f2b955942fd75d8924ceee9f06ac8883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <a href=\"#\" class=\"btn btn-primary\">Another link</a>
                </div>
            </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>
";
        
        $__internal_46b75e2b2de579683a5a693567636358f2b955942fd75d8924ceee9f06ac8883->leave($__internal_46b75e2b2de579683a5a693567636358f2b955942fd75d8924ceee9f06ac8883_prof);

        
        $__internal_dc95771dcb361c5c123ca64141ad18040bd375e574fa38730ada8ade597653d7->leave($__internal_dc95771dcb361c5c123ca64141ad18040bd375e574fa38730ada8ade597653d7_prof);

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
        return array (  90 => 18,  78 => 12,  72 => 11,  68 => 10,  64 => 9,  59 => 6,  55 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
                    <a href=\"#\" class=\"btn btn-primary\">Another link</a>
                </div>
            </div>

    {% endfor %}
    </div>
{% endblock %}", "IchinatorCommandBundle:Default:plat.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/CommandBundle/Resources/views/Default/plat.html.twig");
    }
}
