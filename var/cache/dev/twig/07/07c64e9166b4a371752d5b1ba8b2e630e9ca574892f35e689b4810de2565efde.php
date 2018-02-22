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
        $__internal_552d89d14bfd6a99284a77c5b5c8393dd6f36727658f124eddc27b46b324d4f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_552d89d14bfd6a99284a77c5b5c8393dd6f36727658f124eddc27b46b324d4f8->enter($__internal_552d89d14bfd6a99284a77c5b5c8393dd6f36727658f124eddc27b46b324d4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:burger.html.twig"));

        $__internal_e14f65e5b078f786c11b8141f5fbff6f3e5ffd7c9b2a3a3ab5e1a96968c80c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e14f65e5b078f786c11b8141f5fbff6f3e5ffd7c9b2a3a3ab5e1a96968c80c8d->enter($__internal_e14f65e5b078f786c11b8141f5fbff6f3e5ffd7c9b2a3a3ab5e1a96968c80c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:burger.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_552d89d14bfd6a99284a77c5b5c8393dd6f36727658f124eddc27b46b324d4f8->leave($__internal_552d89d14bfd6a99284a77c5b5c8393dd6f36727658f124eddc27b46b324d4f8_prof);

        
        $__internal_e14f65e5b078f786c11b8141f5fbff6f3e5ffd7c9b2a3a3ab5e1a96968c80c8d->leave($__internal_e14f65e5b078f786c11b8141f5fbff6f3e5ffd7c9b2a3a3ab5e1a96968c80c8d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_afc2cbe2ad0fe395fc1597483b4ec7d9c99ded9b6b8b09d25b0a08d14b5caed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afc2cbe2ad0fe395fc1597483b4ec7d9c99ded9b6b8b09d25b0a08d14b5caed1->enter($__internal_afc2cbe2ad0fe395fc1597483b4ec7d9c99ded9b6b8b09d25b0a08d14b5caed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fdb91cfd8a01442855e45b02618e8dab0519f474875f6bf849ea1f1090ae0561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdb91cfd8a01442855e45b02618e8dab0519f474875f6bf849ea1f1090ae0561->enter($__internal_fdb91cfd8a01442855e45b02618e8dab0519f474875f6bf849ea1f1090ae0561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fdb91cfd8a01442855e45b02618e8dab0519f474875f6bf849ea1f1090ae0561->leave($__internal_fdb91cfd8a01442855e45b02618e8dab0519f474875f6bf849ea1f1090ae0561_prof);

        
        $__internal_afc2cbe2ad0fe395fc1597483b4ec7d9c99ded9b6b8b09d25b0a08d14b5caed1->leave($__internal_afc2cbe2ad0fe395fc1597483b4ec7d9c99ded9b6b8b09d25b0a08d14b5caed1_prof);

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
