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
        $__internal_90331621eff168920c131d4d821d4367d64ade79f7a5fb727a84d5e3a7eb0f9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90331621eff168920c131d4d821d4367d64ade79f7a5fb727a84d5e3a7eb0f9c->enter($__internal_90331621eff168920c131d4d821d4367d64ade79f7a5fb727a84d5e3a7eb0f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_c030af8c58d9d0438a0fee0b0289426f2589742ded5ef35ff37dfbcb4635bba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c030af8c58d9d0438a0fee0b0289426f2589742ded5ef35ff37dfbcb4635bba2->enter($__internal_c030af8c58d9d0438a0fee0b0289426f2589742ded5ef35ff37dfbcb4635bba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

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
        
        $__internal_90331621eff168920c131d4d821d4367d64ade79f7a5fb727a84d5e3a7eb0f9c->leave($__internal_90331621eff168920c131d4d821d4367d64ade79f7a5fb727a84d5e3a7eb0f9c_prof);

        
        $__internal_c030af8c58d9d0438a0fee0b0289426f2589742ded5ef35ff37dfbcb4635bba2->leave($__internal_c030af8c58d9d0438a0fee0b0289426f2589742ded5ef35ff37dfbcb4635bba2_prof);

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
