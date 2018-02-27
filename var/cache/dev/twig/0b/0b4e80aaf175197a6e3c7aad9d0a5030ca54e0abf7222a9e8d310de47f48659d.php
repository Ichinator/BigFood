<?php

/* FOSUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_68d8aa647ebe09b0d37aad1260c41a9b64bf719abc0d09f4f4e0e736086a0052 extends Twig_Template
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
        $__internal_bee47e31689db34d92b9783fc22c28b165e6ad374eeb523a35d8eaecaf551ef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bee47e31689db34d92b9783fc22c28b165e6ad374eeb523a35d8eaecaf551ef9->enter($__internal_bee47e31689db34d92b9783fc22c28b165e6ad374eeb523a35d8eaecaf551ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        $__internal_882a528631e47c0c3a4d55eaca22ead7c76cd80f9b1bd40d3ed2c26d4548033e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_882a528631e47c0c3a4d55eaca22ead7c76cd80f9b1bd40d3ed2c26d4548033e->enter($__internal_882a528631e47c0c3a4d55eaca22ead7c76cd80f9b1bd40d3ed2c26d4548033e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_edit", array("groupName" => ($context["group_name"] ?? $this->getContext($context, "group_name")))), "attr" => array("class" => "fos_user_group_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_bee47e31689db34d92b9783fc22c28b165e6ad374eeb523a35d8eaecaf551ef9->leave($__internal_bee47e31689db34d92b9783fc22c28b165e6ad374eeb523a35d8eaecaf551ef9_prof);

        
        $__internal_882a528631e47c0c3a4d55eaca22ead7c76cd80f9b1bd40d3ed2c26d4548033e->leave($__internal_882a528631e47c0c3a4d55eaca22ead7c76cd80f9b1bd40d3ed2c26d4548033e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_group_edit', {'groupName': group_name}), 'attr': { 'class': 'fos_user_group_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:edit_content.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Group/edit_content.html.twig");
    }
}
