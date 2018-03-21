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
        $__internal_006e1b8b8e1f201479ac259b35f864f97ab8cd036998d6df4d72a85aaa2191fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_006e1b8b8e1f201479ac259b35f864f97ab8cd036998d6df4d72a85aaa2191fd->enter($__internal_006e1b8b8e1f201479ac259b35f864f97ab8cd036998d6df4d72a85aaa2191fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:plat.html.twig"));

        $__internal_3305c3cd41dc23429d8cf66a6c32502419469067375961b09a32c5f346aa8beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3305c3cd41dc23429d8cf66a6c32502419469067375961b09a32c5f346aa8beb->enter($__internal_3305c3cd41dc23429d8cf66a6c32502419469067375961b09a32c5f346aa8beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:plat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_006e1b8b8e1f201479ac259b35f864f97ab8cd036998d6df4d72a85aaa2191fd->leave($__internal_006e1b8b8e1f201479ac259b35f864f97ab8cd036998d6df4d72a85aaa2191fd_prof);

        
        $__internal_3305c3cd41dc23429d8cf66a6c32502419469067375961b09a32c5f346aa8beb->leave($__internal_3305c3cd41dc23429d8cf66a6c32502419469067375961b09a32c5f346aa8beb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d108e48af3af2f21831e047686fb9630d771b015530f2dd8589827ee49e954f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d108e48af3af2f21831e047686fb9630d771b015530f2dd8589827ee49e954f2->enter($__internal_d108e48af3af2f21831e047686fb9630d771b015530f2dd8589827ee49e954f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e813cb54f7bfa2752d62d0689dc2a0a830ebfa007bc843c2e4b4584aeeea7c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e813cb54f7bfa2752d62d0689dc2a0a830ebfa007bc843c2e4b4584aeeea7c0->enter($__internal_1e813cb54f7bfa2752d62d0689dc2a0a830ebfa007bc843c2e4b4584aeeea7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("onePlatRoute", array("id" => $this->getAttribute($context["plat"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Voir le plat</a>
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
        
        $__internal_1e813cb54f7bfa2752d62d0689dc2a0a830ebfa007bc843c2e4b4584aeeea7c0->leave($__internal_1e813cb54f7bfa2752d62d0689dc2a0a830ebfa007bc843c2e4b4584aeeea7c0_prof);

        
        $__internal_d108e48af3af2f21831e047686fb9630d771b015530f2dd8589827ee49e954f2->leave($__internal_d108e48af3af2f21831e047686fb9630d771b015530f2dd8589827ee49e954f2_prof);

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
        return array (  95 => 21,  84 => 16,  78 => 13,  72 => 12,  64 => 9,  59 => 6,  55 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
                    <a href=\"{{ path('onePlatRoute', { 'id': plat.id }) }}\" class=\"btn btn-primary\">Voir le plat</a>
                </div>
            </div>

    {% endfor %}
    </div>
{% endblock %}", "IchinatorCommandBundle:Default:plat.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/CommandBundle/Resources/views/Default/plat.html.twig");
    }
}
