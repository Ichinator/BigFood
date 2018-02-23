<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_2d8abc382e65e0bc38c9e04b4352f664c3977046e921abd3244ca9fbaa486347 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_111bfdb71b0be53c8205eb500cd38dec70d819fa61f30898fcc19e8c4e1e483d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_111bfdb71b0be53c8205eb500cd38dec70d819fa61f30898fcc19e8c4e1e483d->enter($__internal_111bfdb71b0be53c8205eb500cd38dec70d819fa61f30898fcc19e8c4e1e483d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_14a87e9892cdad39549aa022c64cb99a9e57e97da3635aa881cbc3e482d678d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a87e9892cdad39549aa022c64cb99a9e57e97da3635aa881cbc3e482d678d8->enter($__internal_14a87e9892cdad39549aa022c64cb99a9e57e97da3635aa881cbc3e482d678d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_111bfdb71b0be53c8205eb500cd38dec70d819fa61f30898fcc19e8c4e1e483d->leave($__internal_111bfdb71b0be53c8205eb500cd38dec70d819fa61f30898fcc19e8c4e1e483d_prof);

        
        $__internal_14a87e9892cdad39549aa022c64cb99a9e57e97da3635aa881cbc3e482d678d8->leave($__internal_14a87e9892cdad39549aa022c64cb99a9e57e97da3635aa881cbc3e482d678d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Group/list_content.html.twig");
    }
}
