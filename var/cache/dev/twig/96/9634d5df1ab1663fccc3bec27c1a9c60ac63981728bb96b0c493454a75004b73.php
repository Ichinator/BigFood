<?php

/* IchinatorCommandBundle:Default:dessert.html.twig */
class __TwigTemplate_4479ca5c101842361c19023106a532766d22678849c558ff82e5f53b8a8d38e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IchinatorCommandBundle:Default:dessert.html.twig", 1);
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
        $__internal_6c51654a9a60b8812bc1d3649f326e8be567008dd8613ad760d459286c232f36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c51654a9a60b8812bc1d3649f326e8be567008dd8613ad760d459286c232f36->enter($__internal_6c51654a9a60b8812bc1d3649f326e8be567008dd8613ad760d459286c232f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:dessert.html.twig"));

        $__internal_5d8a6e6c0353ba235d7473c45610209efcc2d7158be17fe8f434215e971df55e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8a6e6c0353ba235d7473c45610209efcc2d7158be17fe8f434215e971df55e->enter($__internal_5d8a6e6c0353ba235d7473c45610209efcc2d7158be17fe8f434215e971df55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:dessert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c51654a9a60b8812bc1d3649f326e8be567008dd8613ad760d459286c232f36->leave($__internal_6c51654a9a60b8812bc1d3649f326e8be567008dd8613ad760d459286c232f36_prof);

        
        $__internal_5d8a6e6c0353ba235d7473c45610209efcc2d7158be17fe8f434215e971df55e->leave($__internal_5d8a6e6c0353ba235d7473c45610209efcc2d7158be17fe8f434215e971df55e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_90172444a1c70f744f33f72dba358e9243aeb29df174383f113d69154cca4cbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90172444a1c70f744f33f72dba358e9243aeb29df174383f113d69154cca4cbb->enter($__internal_90172444a1c70f744f33f72dba358e9243aeb29df174383f113d69154cca4cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53d615f16192a8611b5524f463572754cbaec53281a60ab9bee596add99f32f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d615f16192a8611b5524f463572754cbaec53281a60ab9bee596add99f32f2->enter($__internal_53d615f16192a8611b5524f463572754cbaec53281a60ab9bee596add99f32f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"row\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["dessert"]);
        foreach ($context['_seq'] as $context["_key"] => $context["dessert"]) {
            // line 6
            echo "
            <div class=\"card\" style=\"width:400px\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["dessert"], "name", array()), "html", null, true);
            echo "</h4>
                    <p class=\"card-text\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["dessert"], "price", array()), "html", null, true);
            echo " €</p>
                    <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["dessert"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dessert"], "image", array()), "html", null, true);
            echo "\" />
                    <p class=\"card-text\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["dessert"], "description", array()), "html", null, true);
            echo " €</p>
                    <a href=\"#\" class=\"btn btn-primary\">Another link</a>
                </div>
            </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dessert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>
";
        
        $__internal_53d615f16192a8611b5524f463572754cbaec53281a60ab9bee596add99f32f2->leave($__internal_53d615f16192a8611b5524f463572754cbaec53281a60ab9bee596add99f32f2_prof);

        
        $__internal_90172444a1c70f744f33f72dba358e9243aeb29df174383f113d69154cca4cbb->leave($__internal_90172444a1c70f744f33f72dba358e9243aeb29df174383f113d69154cca4cbb_prof);

    }

    public function getTemplateName()
    {
        return "IchinatorCommandBundle:Default:dessert.html.twig";
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
    {% for dessert in dessert %}

            <div class=\"card\" style=\"width:400px\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">{{ dessert.name }}</h4>
                    <p class=\"card-text\">{{ dessert.price }} €</p>
                    <img src=\"{{ vich_uploader_asset(dessert, 'imageFile') }}\" alt=\"{{ dessert.image }}\" />
                    <p class=\"card-text\">{{ dessert.description }} €</p>
                    <a href=\"#\" class=\"btn btn-primary\">Another link</a>
                </div>
            </div>

    {% endfor %}
    </div>
{% endblock %}", "IchinatorCommandBundle:Default:dessert.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/CommandBundle/Resources/views/Default/dessert.html.twig");
    }
}
