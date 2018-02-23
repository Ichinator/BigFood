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
        $__internal_0b36342ef6dede699b8efa2b6cb82353a1afc50a58c2163b10ea695715557946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b36342ef6dede699b8efa2b6cb82353a1afc50a58c2163b10ea695715557946->enter($__internal_0b36342ef6dede699b8efa2b6cb82353a1afc50a58c2163b10ea695715557946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:burger.html.twig"));

        $__internal_a0affb37766f6f3bff5b399c27f1cec18d9fad4e4f54ae3719b6090c83c0ddeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0affb37766f6f3bff5b399c27f1cec18d9fad4e4f54ae3719b6090c83c0ddeb->enter($__internal_a0affb37766f6f3bff5b399c27f1cec18d9fad4e4f54ae3719b6090c83c0ddeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:burger.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b36342ef6dede699b8efa2b6cb82353a1afc50a58c2163b10ea695715557946->leave($__internal_0b36342ef6dede699b8efa2b6cb82353a1afc50a58c2163b10ea695715557946_prof);

        
        $__internal_a0affb37766f6f3bff5b399c27f1cec18d9fad4e4f54ae3719b6090c83c0ddeb->leave($__internal_a0affb37766f6f3bff5b399c27f1cec18d9fad4e4f54ae3719b6090c83c0ddeb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_460a4fb06ccc3d84f538ed499ed4648d698d2a99c8ad078dcdc64eb527aee61e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_460a4fb06ccc3d84f538ed499ed4648d698d2a99c8ad078dcdc64eb527aee61e->enter($__internal_460a4fb06ccc3d84f538ed499ed4648d698d2a99c8ad078dcdc64eb527aee61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ac11b2bd4cc706cf5548253ca713ce8968d022248c904d979b3a99934a2e886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac11b2bd4cc706cf5548253ca713ce8968d022248c904d979b3a99934a2e886->enter($__internal_1ac11b2bd4cc706cf5548253ca713ce8968d022248c904d979b3a99934a2e886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["burger"], "name", array()), "html", null, true);
            echo "</h4>
                        <p class=\"card-text\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["burger"], "price", array()), "html", null, true);
            echo " €</p>
                        <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["burger"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["burger"], "image", array()), "html", null, true);
            echo "\" class=\"rounded\" />
                        <p class=\"card-text\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["burger"], "description", array()), "html", null, true);
            echo "</p>
                    </div>
                </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['burger'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </div>
";
        
        $__internal_1ac11b2bd4cc706cf5548253ca713ce8968d022248c904d979b3a99934a2e886->leave($__internal_1ac11b2bd4cc706cf5548253ca713ce8968d022248c904d979b3a99934a2e886_prof);

        
        $__internal_460a4fb06ccc3d84f538ed499ed4648d698d2a99c8ad078dcdc64eb527aee61e->leave($__internal_460a4fb06ccc3d84f538ed499ed4648d698d2a99c8ad078dcdc64eb527aee61e_prof);

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
        return array (  88 => 16,  78 => 12,  72 => 11,  68 => 10,  64 => 9,  59 => 6,  55 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">{{ burger.name }}</h4>
                        <p class=\"card-text\">{{ burger.price }} €</p>
                        <img src=\"{{ vich_uploader_asset(burger, 'imageFile') }}\" alt=\"{{ burger.image }}\" class=\"rounded\" />
                        <p class=\"card-text\">{{ burger.description }}</p>
                    </div>
                </div>
    {% endfor %}
    </div>
{% endblock %}", "IchinatorCommandBundle:Default:burger.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/CommandBundle/Resources/views/Default/burger.html.twig");
    }
}
