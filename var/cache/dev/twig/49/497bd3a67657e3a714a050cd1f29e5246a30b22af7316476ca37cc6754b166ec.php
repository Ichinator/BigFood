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
        $__internal_b02f5260e90f2424ee506cab327a8751703da1f74d8cef9aa931ad0c65303f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b02f5260e90f2424ee506cab327a8751703da1f74d8cef9aa931ad0c65303f82->enter($__internal_b02f5260e90f2424ee506cab327a8751703da1f74d8cef9aa931ad0c65303f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:plat.html.twig"));

        $__internal_f668d3bf0c37f2c844e6065dd86e1412eac0234136cc141aeb3918a3ab35bae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f668d3bf0c37f2c844e6065dd86e1412eac0234136cc141aeb3918a3ab35bae9->enter($__internal_f668d3bf0c37f2c844e6065dd86e1412eac0234136cc141aeb3918a3ab35bae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:plat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b02f5260e90f2424ee506cab327a8751703da1f74d8cef9aa931ad0c65303f82->leave($__internal_b02f5260e90f2424ee506cab327a8751703da1f74d8cef9aa931ad0c65303f82_prof);

        
        $__internal_f668d3bf0c37f2c844e6065dd86e1412eac0234136cc141aeb3918a3ab35bae9->leave($__internal_f668d3bf0c37f2c844e6065dd86e1412eac0234136cc141aeb3918a3ab35bae9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_10c4bc28a2096068b66627e231db4799384a51670bdb8286766773e2d245daf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10c4bc28a2096068b66627e231db4799384a51670bdb8286766773e2d245daf6->enter($__internal_10c4bc28a2096068b66627e231db4799384a51670bdb8286766773e2d245daf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6312c1dc0451be8b1d3a79e34a2449e70e3ddc59d45c56f03f6c3311b86c55e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6312c1dc0451be8b1d3a79e34a2449e70e3ddc59d45c56f03f6c3311b86c55e8->enter($__internal_6312c1dc0451be8b1d3a79e34a2449e70e3ddc59d45c56f03f6c3311b86c55e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6312c1dc0451be8b1d3a79e34a2449e70e3ddc59d45c56f03f6c3311b86c55e8->leave($__internal_6312c1dc0451be8b1d3a79e34a2449e70e3ddc59d45c56f03f6c3311b86c55e8_prof);

        
        $__internal_10c4bc28a2096068b66627e231db4799384a51670bdb8286766773e2d245daf6->leave($__internal_10c4bc28a2096068b66627e231db4799384a51670bdb8286766773e2d245daf6_prof);

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
