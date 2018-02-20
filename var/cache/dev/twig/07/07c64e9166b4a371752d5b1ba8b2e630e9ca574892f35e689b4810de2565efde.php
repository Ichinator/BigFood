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
        $__internal_ecfc3abf029385d942ffbb6a76fde4f7c5cdfd59367e2ef25aa31d34d3fefa49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecfc3abf029385d942ffbb6a76fde4f7c5cdfd59367e2ef25aa31d34d3fefa49->enter($__internal_ecfc3abf029385d942ffbb6a76fde4f7c5cdfd59367e2ef25aa31d34d3fefa49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:burger.html.twig"));

        $__internal_2269f36a4d8933ef411a5d0a94959556de3eff56842c08aa5d02603cc85cf652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2269f36a4d8933ef411a5d0a94959556de3eff56842c08aa5d02603cc85cf652->enter($__internal_2269f36a4d8933ef411a5d0a94959556de3eff56842c08aa5d02603cc85cf652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:burger.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecfc3abf029385d942ffbb6a76fde4f7c5cdfd59367e2ef25aa31d34d3fefa49->leave($__internal_ecfc3abf029385d942ffbb6a76fde4f7c5cdfd59367e2ef25aa31d34d3fefa49_prof);

        
        $__internal_2269f36a4d8933ef411a5d0a94959556de3eff56842c08aa5d02603cc85cf652->leave($__internal_2269f36a4d8933ef411a5d0a94959556de3eff56842c08aa5d02603cc85cf652_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d13a772cc9fa23c6460dd4071259e4eeb98f9004ac0df4791a48b506a1bf7a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d13a772cc9fa23c6460dd4071259e4eeb98f9004ac0df4791a48b506a1bf7a4->enter($__internal_8d13a772cc9fa23c6460dd4071259e4eeb98f9004ac0df4791a48b506a1bf7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c94482f93257a89a5f6865f094f1f8071f483e719a58903f4335678b8fe22172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c94482f93257a89a5f6865f094f1f8071f483e719a58903f4335678b8fe22172->enter($__internal_c94482f93257a89a5f6865f094f1f8071f483e719a58903f4335678b8fe22172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <a href=\"#\" class=\"btn btn-primary\">Another link</a>
                    </div>
                </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['burger'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </div>
";
        
        $__internal_c94482f93257a89a5f6865f094f1f8071f483e719a58903f4335678b8fe22172->leave($__internal_c94482f93257a89a5f6865f094f1f8071f483e719a58903f4335678b8fe22172_prof);

        
        $__internal_8d13a772cc9fa23c6460dd4071259e4eeb98f9004ac0df4791a48b506a1bf7a4->leave($__internal_8d13a772cc9fa23c6460dd4071259e4eeb98f9004ac0df4791a48b506a1bf7a4_prof);

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
    {% for burger in burger %}

                <div class=\"card\" style=\"width:400px\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">{{ burger.name }}</h4>
                        <p class=\"card-text\">{{ burger.price }} €</p>
                        <img src=\"{{ vich_uploader_asset(burger, 'imageFile') }}\" alt=\"{{ burger.image }}\" class=\"rounded\" />
                        <p class=\"card-text\">{{ burger.description }}</p>
                        <a href=\"#\" class=\"btn btn-primary\">Another link</a>
                    </div>
                </div>
    {% endfor %}
    </div>
{% endblock %}", "IchinatorCommandBundle:Default:burger.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/CommandBundle/Resources/views/Default/burger.html.twig");
    }
}
