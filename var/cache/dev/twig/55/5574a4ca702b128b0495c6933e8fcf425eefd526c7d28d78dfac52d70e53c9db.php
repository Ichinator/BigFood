<?php

/* IchinatorCommandBundle:Default:plat.html.twig */
class __TwigTemplate_6d10c6fbce4af9181525c625ea24368a5c85794e6abdfe7a5713609cfec789d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IchinatorCommandBundle:Default:plat.html.twig", 1);
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
        $__internal_d43c0428cbddfba342d24da680c66e063cdcf9879eb1063ce9db22a9d689c330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d43c0428cbddfba342d24da680c66e063cdcf9879eb1063ce9db22a9d689c330->enter($__internal_d43c0428cbddfba342d24da680c66e063cdcf9879eb1063ce9db22a9d689c330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:plat.html.twig"));

        $__internal_041c3012051d93a39a1dcf8921452b851696f2ba11e3142ccc4ab8a4effe0cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041c3012051d93a39a1dcf8921452b851696f2ba11e3142ccc4ab8a4effe0cbf->enter($__internal_041c3012051d93a39a1dcf8921452b851696f2ba11e3142ccc4ab8a4effe0cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:plat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d43c0428cbddfba342d24da680c66e063cdcf9879eb1063ce9db22a9d689c330->leave($__internal_d43c0428cbddfba342d24da680c66e063cdcf9879eb1063ce9db22a9d689c330_prof);

        
        $__internal_041c3012051d93a39a1dcf8921452b851696f2ba11e3142ccc4ab8a4effe0cbf->leave($__internal_041c3012051d93a39a1dcf8921452b851696f2ba11e3142ccc4ab8a4effe0cbf_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_84e8b32051ce94f2fab4e69bb1c8d20bb417c9d5eb663e2fd03d48744420214b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84e8b32051ce94f2fab4e69bb1c8d20bb417c9d5eb663e2fd03d48744420214b->enter($__internal_84e8b32051ce94f2fab4e69bb1c8d20bb417c9d5eb663e2fd03d48744420214b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_432dfa24560adea41aabdf12e85ced43bdd8c40a3191e26e7da079e8b6ea3b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_432dfa24560adea41aabdf12e85ced43bdd8c40a3191e26e7da079e8b6ea3b05->enter($__internal_432dfa24560adea41aabdf12e85ced43bdd8c40a3191e26e7da079e8b6ea3b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_432dfa24560adea41aabdf12e85ced43bdd8c40a3191e26e7da079e8b6ea3b05->leave($__internal_432dfa24560adea41aabdf12e85ced43bdd8c40a3191e26e7da079e8b6ea3b05_prof);

        
        $__internal_84e8b32051ce94f2fab4e69bb1c8d20bb417c9d5eb663e2fd03d48744420214b->leave($__internal_84e8b32051ce94f2fab4e69bb1c8d20bb417c9d5eb663e2fd03d48744420214b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6dc9bf5da1ccc440d1e69610f4829b20065a17d7694ab722d7b9300a2a64487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6dc9bf5da1ccc440d1e69610f4829b20065a17d7694ab722d7b9300a2a64487->enter($__internal_a6dc9bf5da1ccc440d1e69610f4829b20065a17d7694ab722d7b9300a2a64487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cbb47a6df89693db8b3f1b02ad25d944f20216780d26e57ce9f97f0bd0bd64a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb47a6df89693db8b3f1b02ad25d944f20216780d26e57ce9f97f0bd0bd64a5->enter($__internal_cbb47a6df89693db8b3f1b02ad25d944f20216780d26e57ce9f97f0bd0bd64a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <p>Page des plats</p>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["plat"]);
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 9
            echo "        <div class=\"col-sm-4\">
            <div class=\"card\" style=\"width:400px\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "name", array()), "html", null, true);
            echo "</h4>
                    <p class=\"card-text\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "price", array()), "html", null, true);
            echo " €</p>
                    <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["plat"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "image", array()), "html", null, true);
            echo "\" />
                    <p class=\"card-text\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "description", array()), "html", null, true);
            echo "</p>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_cbb47a6df89693db8b3f1b02ad25d944f20216780d26e57ce9f97f0bd0bd64a5->leave($__internal_cbb47a6df89693db8b3f1b02ad25d944f20216780d26e57ce9f97f0bd0bd64a5_prof);

        
        $__internal_a6dc9bf5da1ccc440d1e69610f4829b20065a17d7694ab722d7b9300a2a64487->leave($__internal_a6dc9bf5da1ccc440d1e69610f4829b20065a17d7694ab722d7b9300a2a64487_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f2f790ceea698e57cf232afabc9bf3b0e168faf4c1a037dc797e5155db8c4d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f790ceea698e57cf232afabc9bf3b0e168faf4c1a037dc797e5155db8c4d1e->enter($__internal_f2f790ceea698e57cf232afabc9bf3b0e168faf4c1a037dc797e5155db8c4d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_119640ac67e0b625e2199e85aedb5b3f30f0eebdb3100b03f6ead9536673f351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119640ac67e0b625e2199e85aedb5b3f30f0eebdb3100b03f6ead9536673f351->enter($__internal_119640ac67e0b625e2199e85aedb5b3f30f0eebdb3100b03f6ead9536673f351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_119640ac67e0b625e2199e85aedb5b3f30f0eebdb3100b03f6ead9536673f351->leave($__internal_119640ac67e0b625e2199e85aedb5b3f30f0eebdb3100b03f6ead9536673f351_prof);

        
        $__internal_f2f790ceea698e57cf232afabc9bf3b0e168faf4c1a037dc797e5155db8c4d1e->leave($__internal_f2f790ceea698e57cf232afabc9bf3b0e168faf4c1a037dc797e5155db8c4d1e_prof);

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
    <p>Page des plats</p>
    {% for plat in plat %}
        <div class=\"col-sm-4\">
            <div class=\"card\" style=\"width:400px\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">{{ plat.name }}</h4>
                    <p class=\"card-text\">{{ plat.price }} €</p>
                    <img src=\"{{ vich_uploader_asset(plat, 'imageFile') }}\" alt=\"{{ plat.image }}\" />
                    <p class=\"card-text\">{{ plat.description }}</p>
                </div>
            </div>
        </div>
    {% endfor %}
{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}", "IchinatorCommandBundle:Default:plat.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/CommandBundle/Resources/views/Default/plat.html.twig");
    }
}
