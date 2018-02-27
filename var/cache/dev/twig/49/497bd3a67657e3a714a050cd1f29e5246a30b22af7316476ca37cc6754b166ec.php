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
        $__internal_1e2dc9933de1cb64bf29871ae443978acb24e373bb8cb000847fd27e488b6363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e2dc9933de1cb64bf29871ae443978acb24e373bb8cb000847fd27e488b6363->enter($__internal_1e2dc9933de1cb64bf29871ae443978acb24e373bb8cb000847fd27e488b6363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:plat.html.twig"));

        $__internal_4d3e07d7a077f95918b6e123604649578d4654a85de9025e4a2b977d90d5437b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3e07d7a077f95918b6e123604649578d4654a85de9025e4a2b977d90d5437b->enter($__internal_4d3e07d7a077f95918b6e123604649578d4654a85de9025e4a2b977d90d5437b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:plat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e2dc9933de1cb64bf29871ae443978acb24e373bb8cb000847fd27e488b6363->leave($__internal_1e2dc9933de1cb64bf29871ae443978acb24e373bb8cb000847fd27e488b6363_prof);

        
        $__internal_4d3e07d7a077f95918b6e123604649578d4654a85de9025e4a2b977d90d5437b->leave($__internal_4d3e07d7a077f95918b6e123604649578d4654a85de9025e4a2b977d90d5437b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcd2a469c3eae27677623135e968fb84bebfaa0997bb9817035afeba089d54b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcd2a469c3eae27677623135e968fb84bebfaa0997bb9817035afeba089d54b1->enter($__internal_fcd2a469c3eae27677623135e968fb84bebfaa0997bb9817035afeba089d54b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_639d7a93bfa400a8a58307f9ac11f04cf1a9dba0e0e4399fb91799af57747594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639d7a93bfa400a8a58307f9ac11f04cf1a9dba0e0e4399fb91799af57747594->enter($__internal_639d7a93bfa400a8a58307f9ac11f04cf1a9dba0e0e4399fb91799af57747594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <div class=\"card-header\">
                    <h4 class=\"card-title\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "price", array()), "html", null, true);
            echo " €</h4>
                </div>
                <div class=\"card-body\">
                    <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["plat"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "image", array()), "html", null, true);
            echo "\" />
                    <p class=\"card-text\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "description", array()), "html", null, true);
            echo "</p>
                </div>
                <div class=\"card-footer\">
                    <p>On mettra ici les like</p>
                </div>
            </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>
";
        
        $__internal_639d7a93bfa400a8a58307f9ac11f04cf1a9dba0e0e4399fb91799af57747594->leave($__internal_639d7a93bfa400a8a58307f9ac11f04cf1a9dba0e0e4399fb91799af57747594_prof);

        
        $__internal_fcd2a469c3eae27677623135e968fb84bebfaa0997bb9817035afeba089d54b1->leave($__internal_fcd2a469c3eae27677623135e968fb84bebfaa0997bb9817035afeba089d54b1_prof);

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
        return array (  92 => 21,  78 => 13,  72 => 12,  64 => 9,  59 => 6,  55 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
                <div class=\"card-header\">
                    <h4 class=\"card-title\">{{ plat.name }} {{ plat.price }} €</h4>
                </div>
                <div class=\"card-body\">
                    <img src=\"{{ vich_uploader_asset(plat, 'imageFile') }}\" alt=\"{{ plat.image }}\" />
                    <p class=\"card-text\">{{ plat.description }}</p>
                </div>
                <div class=\"card-footer\">
                    <p>On mettra ici les like</p>
                </div>
            </div>

    {% endfor %}
    </div>
{% endblock %}", "IchinatorCommandBundle:Default:plat.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/CommandBundle/Resources/views/Default/plat.html.twig");
    }
}
