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
        $__internal_66e486bf4b02b1b64531c47c5197c5b521892b58b4f20a8ed33ca0b9a97551f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e486bf4b02b1b64531c47c5197c5b521892b58b4f20a8ed33ca0b9a97551f9->enter($__internal_66e486bf4b02b1b64531c47c5197c5b521892b58b4f20a8ed33ca0b9a97551f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:burger.html.twig"));

        $__internal_80a08c14f3fcc1b80834c7e00a5f69a7513916101679c7249505a951f31740f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a08c14f3fcc1b80834c7e00a5f69a7513916101679c7249505a951f31740f5->enter($__internal_80a08c14f3fcc1b80834c7e00a5f69a7513916101679c7249505a951f31740f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:burger.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66e486bf4b02b1b64531c47c5197c5b521892b58b4f20a8ed33ca0b9a97551f9->leave($__internal_66e486bf4b02b1b64531c47c5197c5b521892b58b4f20a8ed33ca0b9a97551f9_prof);

        
        $__internal_80a08c14f3fcc1b80834c7e00a5f69a7513916101679c7249505a951f31740f5->leave($__internal_80a08c14f3fcc1b80834c7e00a5f69a7513916101679c7249505a951f31740f5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6674ecd3e6b9dc088b2ce1839e9636792c963922e0b22eb0d7af6d412a4e70df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6674ecd3e6b9dc088b2ce1839e9636792c963922e0b22eb0d7af6d412a4e70df->enter($__internal_6674ecd3e6b9dc088b2ce1839e9636792c963922e0b22eb0d7af6d412a4e70df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_780dca2b84e2bd89b0c0dc033a030ce41dec41f841e93fce37f37b26c7779925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_780dca2b84e2bd89b0c0dc033a030ce41dec41f841e93fce37f37b26c7779925->enter($__internal_780dca2b84e2bd89b0c0dc033a030ce41dec41f841e93fce37f37b26c7779925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oneBurgerRoute", array("id" => $this->getAttribute($context["burger"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Voir le burger</a>
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
        
        $__internal_780dca2b84e2bd89b0c0dc033a030ce41dec41f841e93fce37f37b26c7779925->leave($__internal_780dca2b84e2bd89b0c0dc033a030ce41dec41f841e93fce37f37b26c7779925_prof);

        
        $__internal_6674ecd3e6b9dc088b2ce1839e9636792c963922e0b22eb0d7af6d412a4e70df->leave($__internal_6674ecd3e6b9dc088b2ce1839e9636792c963922e0b22eb0d7af6d412a4e70df_prof);

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
        return array (  94 => 20,  84 => 16,  78 => 13,  72 => 12,  64 => 9,  59 => 6,  55 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
                        <a href=\"{{ path('oneBurgerRoute', { 'id': burger.id }) }}\" class=\"btn btn-primary\">Voir le burger</a>
                    </div>
                </div>
    {% endfor %}
    </div>
{% endblock %}", "IchinatorCommandBundle:Default:burger.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/CommandBundle/Resources/views/Default/burger.html.twig");
    }
}
