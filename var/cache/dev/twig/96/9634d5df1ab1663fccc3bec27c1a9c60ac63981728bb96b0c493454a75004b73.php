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
        $__internal_5e0d6b933574a2ac9c62630cc54f0ca1bc5e7fb6d8c7dc16e01eb747ac82ecc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e0d6b933574a2ac9c62630cc54f0ca1bc5e7fb6d8c7dc16e01eb747ac82ecc1->enter($__internal_5e0d6b933574a2ac9c62630cc54f0ca1bc5e7fb6d8c7dc16e01eb747ac82ecc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:dessert.html.twig"));

        $__internal_6225cda26fd506a27d40738445b9831b5032d24497b3137263a65b01bdc641b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6225cda26fd506a27d40738445b9831b5032d24497b3137263a65b01bdc641b3->enter($__internal_6225cda26fd506a27d40738445b9831b5032d24497b3137263a65b01bdc641b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:dessert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e0d6b933574a2ac9c62630cc54f0ca1bc5e7fb6d8c7dc16e01eb747ac82ecc1->leave($__internal_5e0d6b933574a2ac9c62630cc54f0ca1bc5e7fb6d8c7dc16e01eb747ac82ecc1_prof);

        
        $__internal_6225cda26fd506a27d40738445b9831b5032d24497b3137263a65b01bdc641b3->leave($__internal_6225cda26fd506a27d40738445b9831b5032d24497b3137263a65b01bdc641b3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e53e1d546f820474c61cda82208fa8355e3dbac01f3b51b5efd27f600af99096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e53e1d546f820474c61cda82208fa8355e3dbac01f3b51b5efd27f600af99096->enter($__internal_e53e1d546f820474c61cda82208fa8355e3dbac01f3b51b5efd27f600af99096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f72d86ca633732b3e44a27692cd328f1c25b49fc9e7e754e6d686e0599e19178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72d86ca633732b3e44a27692cd328f1c25b49fc9e7e754e6d686e0599e19178->enter($__internal_f72d86ca633732b3e44a27692cd328f1c25b49fc9e7e754e6d686e0599e19178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                </div>
            </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dessert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </div>
";
        
        $__internal_f72d86ca633732b3e44a27692cd328f1c25b49fc9e7e754e6d686e0599e19178->leave($__internal_f72d86ca633732b3e44a27692cd328f1c25b49fc9e7e754e6d686e0599e19178_prof);

        
        $__internal_e53e1d546f820474c61cda82208fa8355e3dbac01f3b51b5efd27f600af99096->leave($__internal_e53e1d546f820474c61cda82208fa8355e3dbac01f3b51b5efd27f600af99096_prof);

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
    {% for dessert in dessert %}

            <div class=\"card\" style=\"width:400px\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">{{ dessert.name }}</h4>
                    <p class=\"card-text\">{{ dessert.price }} €</p>
                    <img src=\"{{ vich_uploader_asset(dessert, 'imageFile') }}\" alt=\"{{ dessert.image }}\" />
                    <p class=\"card-text\">{{ dessert.description }} €</p>
                </div>
            </div>

    {% endfor %}
    </div>
{% endblock %}", "IchinatorCommandBundle:Default:dessert.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/CommandBundle/Resources/views/Default/dessert.html.twig");
    }
}
