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
        $__internal_2189034a1ad9de6660e49ed5814daf4e14d3d8894b3fa375146a9a69a91ea929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2189034a1ad9de6660e49ed5814daf4e14d3d8894b3fa375146a9a69a91ea929->enter($__internal_2189034a1ad9de6660e49ed5814daf4e14d3d8894b3fa375146a9a69a91ea929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:dessert.html.twig"));

        $__internal_de6248b9c252220cc4c56622884569badf496f08137d507bd0bb99f8a7b6c42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6248b9c252220cc4c56622884569badf496f08137d507bd0bb99f8a7b6c42e->enter($__internal_de6248b9c252220cc4c56622884569badf496f08137d507bd0bb99f8a7b6c42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IchinatorCommandBundle:Default:dessert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2189034a1ad9de6660e49ed5814daf4e14d3d8894b3fa375146a9a69a91ea929->leave($__internal_2189034a1ad9de6660e49ed5814daf4e14d3d8894b3fa375146a9a69a91ea929_prof);

        
        $__internal_de6248b9c252220cc4c56622884569badf496f08137d507bd0bb99f8a7b6c42e->leave($__internal_de6248b9c252220cc4c56622884569badf496f08137d507bd0bb99f8a7b6c42e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0669cfeeeff5707e412f957c029b3bc9a844c79d5367590acf507379cf5cd8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0669cfeeeff5707e412f957c029b3bc9a844c79d5367590acf507379cf5cd8d->enter($__internal_c0669cfeeeff5707e412f957c029b3bc9a844c79d5367590acf507379cf5cd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9cd89dccc8baec3e0738fa2ac82596d965ac2be884df316faa47b4295796905b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd89dccc8baec3e0738fa2ac82596d965ac2be884df316faa47b4295796905b->enter($__internal_9cd89dccc8baec3e0738fa2ac82596d965ac2be884df316faa47b4295796905b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <a href=\"#\" class=\"btn btn-primary\">Another link</a>
                </div>
            </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dessert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>
";
        
        $__internal_9cd89dccc8baec3e0738fa2ac82596d965ac2be884df316faa47b4295796905b->leave($__internal_9cd89dccc8baec3e0738fa2ac82596d965ac2be884df316faa47b4295796905b_prof);

        
        $__internal_c0669cfeeeff5707e412f957c029b3bc9a844c79d5367590acf507379cf5cd8d->leave($__internal_c0669cfeeeff5707e412f957c029b3bc9a844c79d5367590acf507379cf5cd8d_prof);

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
        return array (  90 => 18,  78 => 12,  72 => 11,  68 => 10,  64 => 9,  59 => 6,  55 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
                    <a href=\"#\" class=\"btn btn-primary\">Another link</a>
                </div>
            </div>

    {% endfor %}
    </div>
{% endblock %}", "IchinatorCommandBundle:Default:dessert.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/src/Ichinator/CommandBundle/Resources/views/Default/dessert.html.twig");
    }
}
