<?php

/* IchinatorCommandBundle:Default:dessert.html.twig */
class __TwigTemplate_bf1ac906f9179b687953190ca5d574db8551d12fdfe156750acc48ef20e267aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IchinatorCommandBundle:Default:dessert.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d566d5251881eb5b04985df6fb31ece7402e29abd47e84debe1a401c5cc6a91d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d566d5251881eb5b04985df6fb31ece7402e29abd47e84debe1a401c5cc6a91d->enter($__internal_d566d5251881eb5b04985df6fb31ece7402e29abd47e84debe1a401c5cc6a91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:dessert.html.twig"));

        $__internal_41ae57ded9c032ec527b7111435e4991f3dfca33cce2ba4034ca2bdbe1f25ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ae57ded9c032ec527b7111435e4991f3dfca33cce2ba4034ca2bdbe1f25ba5->enter($__internal_41ae57ded9c032ec527b7111435e4991f3dfca33cce2ba4034ca2bdbe1f25ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:dessert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d566d5251881eb5b04985df6fb31ece7402e29abd47e84debe1a401c5cc6a91d->leave($__internal_d566d5251881eb5b04985df6fb31ece7402e29abd47e84debe1a401c5cc6a91d_prof);

        
        $__internal_41ae57ded9c032ec527b7111435e4991f3dfca33cce2ba4034ca2bdbe1f25ba5->leave($__internal_41ae57ded9c032ec527b7111435e4991f3dfca33cce2ba4034ca2bdbe1f25ba5_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b7c5b36837392dedcc0db4b571c224447c7d4d6b25ed110b916a878488094f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b7c5b36837392dedcc0db4b571c224447c7d4d6b25ed110b916a878488094f4->enter($__internal_2b7c5b36837392dedcc0db4b571c224447c7d4d6b25ed110b916a878488094f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ba741c4562197e1328b9c50ad697afdcdce62162d2b7fe3a72c82f1ed44e422c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba741c4562197e1328b9c50ad697afdcdce62162d2b7fe3a72c82f1ed44e422c->enter($__internal_ba741c4562197e1328b9c50ad697afdcdce62162d2b7fe3a72c82f1ed44e422c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_ba741c4562197e1328b9c50ad697afdcdce62162d2b7fe3a72c82f1ed44e422c->leave($__internal_ba741c4562197e1328b9c50ad697afdcdce62162d2b7fe3a72c82f1ed44e422c_prof);

        
        $__internal_2b7c5b36837392dedcc0db4b571c224447c7d4d6b25ed110b916a878488094f4->leave($__internal_2b7c5b36837392dedcc0db4b571c224447c7d4d6b25ed110b916a878488094f4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c0117b6fd8d68c7f51bab9430d3e9d6d5cf98d5de21cee7e7d77bf5651db2a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c0117b6fd8d68c7f51bab9430d3e9d6d5cf98d5de21cee7e7d77bf5651db2a3->enter($__internal_1c0117b6fd8d68c7f51bab9430d3e9d6d5cf98d5de21cee7e7d77bf5651db2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_823d8bddb6f18f25fba8bef5dd34c78a25688aa312fb1bffca8285731d163321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823d8bddb6f18f25fba8bef5dd34c78a25688aa312fb1bffca8285731d163321->enter($__internal_823d8bddb6f18f25fba8bef5dd34c78a25688aa312fb1bffca8285731d163321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <p>Page des desserts</p>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["dessert"]);
        foreach ($context['_seq'] as $context["_key"] => $context["dessert"]) {
            // line 9
            echo "        <div class=\"col-sm-4\">
            <div class=\"card\" style=\"width:400px\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["dessert"], "name", array()), "html", null, true);
            echo "</h4>
                    <p class=\"card-text\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["dessert"], "price", array()), "html", null, true);
            echo " €</p>
                    <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["dessert"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dessert"], "image", array()), "html", null, true);
            echo "\" />
                    <p class=\"card-text\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["dessert"], "description", array()), "html", null, true);
            echo " €</p>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dessert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_823d8bddb6f18f25fba8bef5dd34c78a25688aa312fb1bffca8285731d163321->leave($__internal_823d8bddb6f18f25fba8bef5dd34c78a25688aa312fb1bffca8285731d163321_prof);

        
        $__internal_1c0117b6fd8d68c7f51bab9430d3e9d6d5cf98d5de21cee7e7d77bf5651db2a3->leave($__internal_1c0117b6fd8d68c7f51bab9430d3e9d6d5cf98d5de21cee7e7d77bf5651db2a3_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_54b59b9a4e7d047a4f2e3f716cc024b0b1e1aa74f7e5d704b996f3d65df8eb7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54b59b9a4e7d047a4f2e3f716cc024b0b1e1aa74f7e5d704b996f3d65df8eb7a->enter($__internal_54b59b9a4e7d047a4f2e3f716cc024b0b1e1aa74f7e5d704b996f3d65df8eb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_68bd56fe7dc79e94a64a5728eb3c6c251f5a3a86bdc648a666a42e369c6f14f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68bd56fe7dc79e94a64a5728eb3c6c251f5a3a86bdc648a666a42e369c6f14f1->enter($__internal_68bd56fe7dc79e94a64a5728eb3c6c251f5a3a86bdc648a666a42e369c6f14f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_68bd56fe7dc79e94a64a5728eb3c6c251f5a3a86bdc648a666a42e369c6f14f1->leave($__internal_68bd56fe7dc79e94a64a5728eb3c6c251f5a3a86bdc648a666a42e369c6f14f1_prof);

        
        $__internal_54b59b9a4e7d047a4f2e3f716cc024b0b1e1aa74f7e5d704b996f3d65df8eb7a->leave($__internal_54b59b9a4e7d047a4f2e3f716cc024b0b1e1aa74f7e5d704b996f3d65df8eb7a_prof);

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
        return array (  130 => 22,  121 => 21,  102 => 15,  96 => 14,  92 => 13,  88 => 12,  83 => 9,  79 => 8,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
{% block stylesheets %}
    {{ parent() }}
{% endblock %}
{% block body %}
    {{ parent() }}
    <p>Page des desserts</p>
    {% for dessert in dessert %}
        <div class=\"col-sm-4\">
            <div class=\"card\" style=\"width:400px\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">{{ dessert.name }}</h4>
                    <p class=\"card-text\">{{ dessert.price }} €</p>
                    <img src=\"{{ vich_uploader_asset(dessert, 'imageFile') }}\" alt=\"{{ dessert.image }}\" />
                    <p class=\"card-text\">{{ dessert.description }} €</p>
                </div>
            </div>
        </div>
    {% endfor %}
{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}", "IchinatorCommandBundle:Default:dessert.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/CommandBundle/Resources/views/Default/dessert.html.twig");
    }
}
