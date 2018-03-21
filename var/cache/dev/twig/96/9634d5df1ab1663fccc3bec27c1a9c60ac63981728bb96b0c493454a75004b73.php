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
        $__internal_87b46a5eddc4ae3a6b0b1bbace5397498cfaf3d7a5b6a752f54331005d361a79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87b46a5eddc4ae3a6b0b1bbace5397498cfaf3d7a5b6a752f54331005d361a79->enter($__internal_87b46a5eddc4ae3a6b0b1bbace5397498cfaf3d7a5b6a752f54331005d361a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:dessert.html.twig"));

        $__internal_5933c1f4dbd3e392ce13b7636556ac3ca6f693f4b0bdc836f7251afbc2c79b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5933c1f4dbd3e392ce13b7636556ac3ca6f693f4b0bdc836f7251afbc2c79b05->enter($__internal_5933c1f4dbd3e392ce13b7636556ac3ca6f693f4b0bdc836f7251afbc2c79b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:dessert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87b46a5eddc4ae3a6b0b1bbace5397498cfaf3d7a5b6a752f54331005d361a79->leave($__internal_87b46a5eddc4ae3a6b0b1bbace5397498cfaf3d7a5b6a752f54331005d361a79_prof);

        
        $__internal_5933c1f4dbd3e392ce13b7636556ac3ca6f693f4b0bdc836f7251afbc2c79b05->leave($__internal_5933c1f4dbd3e392ce13b7636556ac3ca6f693f4b0bdc836f7251afbc2c79b05_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2470bb25e3f68e64f8f3054dbf344763c2cf871dc30197b4da70aae4e1e2d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2470bb25e3f68e64f8f3054dbf344763c2cf871dc30197b4da70aae4e1e2d8c->enter($__internal_a2470bb25e3f68e64f8f3054dbf344763c2cf871dc30197b4da70aae4e1e2d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a3cb1837ae1d3efae8f509e4dc6b7bacfcd38c3744f348c753f0a9ee149df0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a3cb1837ae1d3efae8f509e4dc6b7bacfcd38c3744f348c753f0a9ee149df0d->enter($__internal_5a3cb1837ae1d3efae8f509e4dc6b7bacfcd38c3744f348c753f0a9ee149df0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <div class=\"card-header\">
                    <h4 class=\"card-title\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["dessert"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dessert"], "price", array()), "html", null, true);
            echo " €</h4>
                </div>
                <div class=\"card-body\">
                    <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["dessert"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dessert"], "image", array()), "html", null, true);
            echo "\" />
                    <p class=\"card-text\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["dessert"], "description", array()), "html", null, true);
            echo " €</p>
                </div>
                <div class=\"card-footer\">
                    <p>On mettra ici les like</p>
                    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oneDessertRoute", array("id" => $this->getAttribute($context["dessert"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Voir le dessert</a>
                </div>
            </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dessert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </div>
";
        
        $__internal_5a3cb1837ae1d3efae8f509e4dc6b7bacfcd38c3744f348c753f0a9ee149df0d->leave($__internal_5a3cb1837ae1d3efae8f509e4dc6b7bacfcd38c3744f348c753f0a9ee149df0d_prof);

        
        $__internal_a2470bb25e3f68e64f8f3054dbf344763c2cf871dc30197b4da70aae4e1e2d8c->leave($__internal_a2470bb25e3f68e64f8f3054dbf344763c2cf871dc30197b4da70aae4e1e2d8c_prof);

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
        return array (  96 => 22,  85 => 17,  78 => 13,  72 => 12,  64 => 9,  59 => 6,  55 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
                <div class=\"card-header\">
                    <h4 class=\"card-title\">{{ dessert.name }} {{ dessert.price }} €</h4>
                </div>
                <div class=\"card-body\">
                    <img src=\"{{ vich_uploader_asset(dessert, 'imageFile') }}\" alt=\"{{ dessert.image }}\" />
                    <p class=\"card-text\">{{ dessert.description }} €</p>
                </div>
                <div class=\"card-footer\">
                    <p>On mettra ici les like</p>
                    <a href=\"{{ path('oneDessertRoute', { 'id': dessert.id }) }}\" class=\"btn btn-primary\">Voir le dessert</a>
                </div>
            </div>

    {% endfor %}
    </div>
{% endblock %}", "IchinatorCommandBundle:Default:dessert.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/CommandBundle/Resources/views/Default/dessert.html.twig");
    }
}
