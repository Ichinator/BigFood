<?php

/* IchinatorCommandBundle:Default:burger.html.twig */
class __TwigTemplate_02382702a6173b30c984378ebe217f0b4883948db681722d635bbfa129ad3056 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IchinatorCommandBundle:Default:burger.html.twig", 1);
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
        $__internal_291cfe46c901635f074d45371c61f25ba24997b9c54c20c26db89128c16c8a10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_291cfe46c901635f074d45371c61f25ba24997b9c54c20c26db89128c16c8a10->enter($__internal_291cfe46c901635f074d45371c61f25ba24997b9c54c20c26db89128c16c8a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:burger.html.twig"));

        $__internal_d7d601dcdf300cce94980adf6d57379d1434c047aca08d5815403b2310840ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d601dcdf300cce94980adf6d57379d1434c047aca08d5815403b2310840ac4->enter($__internal_d7d601dcdf300cce94980adf6d57379d1434c047aca08d5815403b2310840ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:burger.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_291cfe46c901635f074d45371c61f25ba24997b9c54c20c26db89128c16c8a10->leave($__internal_291cfe46c901635f074d45371c61f25ba24997b9c54c20c26db89128c16c8a10_prof);

        
        $__internal_d7d601dcdf300cce94980adf6d57379d1434c047aca08d5815403b2310840ac4->leave($__internal_d7d601dcdf300cce94980adf6d57379d1434c047aca08d5815403b2310840ac4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_29841f3ebb20e954f5a940dc9f84eda8bc89519cdf638a97de79317490ec7800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29841f3ebb20e954f5a940dc9f84eda8bc89519cdf638a97de79317490ec7800->enter($__internal_29841f3ebb20e954f5a940dc9f84eda8bc89519cdf638a97de79317490ec7800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c224fd7757823d1da757304eab0d0a0a9b7b5ac12d9782c86e93fe737676bec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c224fd7757823d1da757304eab0d0a0a9b7b5ac12d9782c86e93fe737676bec0->enter($__internal_c224fd7757823d1da757304eab0d0a0a9b7b5ac12d9782c86e93fe737676bec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"row\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["burger"]);
        foreach ($context['_seq'] as $context["_key"] => $context["burger"]) {
            // line 6
            echo "
                <div class=\"card\" style=\"width:400px\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["burger"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["burger"], "price", array()), "html", null, true);
            echo " €</h4>
                    </div>
                    <div class=\"card-body\">
                        <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["burger"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["burger"], "image", array()), "html", null, true);
            echo "\" class=\"rounded\" />
                        <p class=\"card-text\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["burger"], "description", array()), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"card-footer\">
                        <p>On mettra ici les like</p>
                    </div>
                </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['burger'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>
";
        
        $__internal_c224fd7757823d1da757304eab0d0a0a9b7b5ac12d9782c86e93fe737676bec0->leave($__internal_c224fd7757823d1da757304eab0d0a0a9b7b5ac12d9782c86e93fe737676bec0_prof);

        
        $__internal_29841f3ebb20e954f5a940dc9f84eda8bc89519cdf638a97de79317490ec7800->leave($__internal_29841f3ebb20e954f5a940dc9f84eda8bc89519cdf638a97de79317490ec7800_prof);

    }

    public function getTemplateName()
    {
        return "IchinatorCommandBundle:Default:burger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  78 => 13,  72 => 12,  64 => 9,  59 => 6,  55 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
    {% for burger in burger %}

                <div class=\"card\" style=\"width:400px\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">{{ burger.name }} {{ burger.price }} €</h4>
                    </div>
                    <div class=\"card-body\">
                        <img src=\"{{ vich_uploader_asset(burger, 'imageFile') }}\" alt=\"{{ burger.image }}\" class=\"rounded\" />
                        <p class=\"card-text\">{{ burger.description }}</p>
                    </div>
                    <div class=\"card-footer\">
                        <p>On mettra ici les like</p>
                    </div>
                </div>
    {% endfor %}
    </div>
{% endblock %}", "IchinatorCommandBundle:Default:burger.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/CommandBundle/Resources/views/Default/burger.html.twig");
    }
}
