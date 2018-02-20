<?php

/* IchinatorCommandBundle:Default:burger.html.twig */
class __TwigTemplate_61a10d4e97f1f4e2962ea704862e4be8da3fdafa112fbd39561e8a02bf9ae2ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IchinatorCommandBundle:Default:burger.html.twig", 1);
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
        $__internal_af54d183fa8984cd5d7602d609d1d78f783ed681cd1668b63ea925ec3378f409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af54d183fa8984cd5d7602d609d1d78f783ed681cd1668b63ea925ec3378f409->enter($__internal_af54d183fa8984cd5d7602d609d1d78f783ed681cd1668b63ea925ec3378f409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:burger.html.twig"));

        $__internal_1f45b9c3e05fff88c4e59560834a12538e7329584bc332c9ebf94d11f2bb99cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f45b9c3e05fff88c4e59560834a12538e7329584bc332c9ebf94d11f2bb99cd->enter($__internal_1f45b9c3e05fff88c4e59560834a12538e7329584bc332c9ebf94d11f2bb99cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:burger.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af54d183fa8984cd5d7602d609d1d78f783ed681cd1668b63ea925ec3378f409->leave($__internal_af54d183fa8984cd5d7602d609d1d78f783ed681cd1668b63ea925ec3378f409_prof);

        
        $__internal_1f45b9c3e05fff88c4e59560834a12538e7329584bc332c9ebf94d11f2bb99cd->leave($__internal_1f45b9c3e05fff88c4e59560834a12538e7329584bc332c9ebf94d11f2bb99cd_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e8215196d39e3adaa275dae98111913a8c1c0abf356c65f88c92daba1961a58c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8215196d39e3adaa275dae98111913a8c1c0abf356c65f88c92daba1961a58c->enter($__internal_e8215196d39e3adaa275dae98111913a8c1c0abf356c65f88c92daba1961a58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e90476f7dfc65d313eca050abfd5c639d95e612c3239794667d778cc4a3953e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90476f7dfc65d313eca050abfd5c639d95e612c3239794667d778cc4a3953e7->enter($__internal_e90476f7dfc65d313eca050abfd5c639d95e612c3239794667d778cc4a3953e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_e90476f7dfc65d313eca050abfd5c639d95e612c3239794667d778cc4a3953e7->leave($__internal_e90476f7dfc65d313eca050abfd5c639d95e612c3239794667d778cc4a3953e7_prof);

        
        $__internal_e8215196d39e3adaa275dae98111913a8c1c0abf356c65f88c92daba1961a58c->leave($__internal_e8215196d39e3adaa275dae98111913a8c1c0abf356c65f88c92daba1961a58c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_61ff0bb0d3e936bd2a1a308c93c169bf45336c0f0835e638ba0531b1b4f4c291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61ff0bb0d3e936bd2a1a308c93c169bf45336c0f0835e638ba0531b1b4f4c291->enter($__internal_61ff0bb0d3e936bd2a1a308c93c169bf45336c0f0835e638ba0531b1b4f4c291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca5b535f5e0ada945fa803b1fcae1673739ca824c0a64f1ed9dcbe983e8a411a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca5b535f5e0ada945fa803b1fcae1673739ca824c0a64f1ed9dcbe983e8a411a->enter($__internal_ca5b535f5e0ada945fa803b1fcae1673739ca824c0a64f1ed9dcbe983e8a411a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <p>Page des burgers</p>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["burger"]);
        foreach ($context['_seq'] as $context["_key"] => $context["burger"]) {
            // line 9
            echo "        <div class=\"col-sm-4\">
                <div class=\"card\" style=\"width:400px\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["burger"], "name", array()), "html", null, true);
            echo "</h4>
                        <p class=\"card-text\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["burger"], "price", array()), "html", null, true);
            echo " €</p>
                        <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["burger"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["burger"], "image", array()), "html", null, true);
            echo "\" />
                        <p class=\"card-text\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["burger"], "description", array()), "html", null, true);
            echo "</p>
                    </div>
                </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['burger'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ca5b535f5e0ada945fa803b1fcae1673739ca824c0a64f1ed9dcbe983e8a411a->leave($__internal_ca5b535f5e0ada945fa803b1fcae1673739ca824c0a64f1ed9dcbe983e8a411a_prof);

        
        $__internal_61ff0bb0d3e936bd2a1a308c93c169bf45336c0f0835e638ba0531b1b4f4c291->leave($__internal_61ff0bb0d3e936bd2a1a308c93c169bf45336c0f0835e638ba0531b1b4f4c291_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3df36f0bdfaf7308a6effd04f8a5adfcd9ec46c2cf0447b0f9f12135d68f615e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df36f0bdfaf7308a6effd04f8a5adfcd9ec46c2cf0447b0f9f12135d68f615e->enter($__internal_3df36f0bdfaf7308a6effd04f8a5adfcd9ec46c2cf0447b0f9f12135d68f615e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f3fc7ab734ea33d3d1cc5dc183951a213136f775885efc00c9a8b90ecabdb196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3fc7ab734ea33d3d1cc5dc183951a213136f775885efc00c9a8b90ecabdb196->enter($__internal_f3fc7ab734ea33d3d1cc5dc183951a213136f775885efc00c9a8b90ecabdb196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_f3fc7ab734ea33d3d1cc5dc183951a213136f775885efc00c9a8b90ecabdb196->leave($__internal_f3fc7ab734ea33d3d1cc5dc183951a213136f775885efc00c9a8b90ecabdb196_prof);

        
        $__internal_3df36f0bdfaf7308a6effd04f8a5adfcd9ec46c2cf0447b0f9f12135d68f615e->leave($__internal_3df36f0bdfaf7308a6effd04f8a5adfcd9ec46c2cf0447b0f9f12135d68f615e_prof);

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
    <p>Page des burgers</p>
    {% for burger in burger %}
        <div class=\"col-sm-4\">
                <div class=\"card\" style=\"width:400px\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">{{ burger.name }}</h4>
                        <p class=\"card-text\">{{ burger.price }} €</p>
                        <img src=\"{{ vich_uploader_asset(burger, 'imageFile') }}\" alt=\"{{ burger.image }}\" />
                        <p class=\"card-text\">{{ burger.description }}</p>
                    </div>
                </div>
        </div>
    {% endfor %}
{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}", "IchinatorCommandBundle:Default:burger.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/CommandBundle/Resources/views/Default/burger.html.twig");
    }
}
