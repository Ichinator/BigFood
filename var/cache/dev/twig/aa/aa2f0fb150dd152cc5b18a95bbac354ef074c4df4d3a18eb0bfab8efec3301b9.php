<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_091ac0e66eb4d4a68cb1366bfac36edaef20e46a601373bc03ea7da8553d4928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed0c5d2d52793bbb79638c90b84cc26964a585a5a48d6c6ed88aa4b187bc4b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed0c5d2d52793bbb79638c90b84cc26964a585a5a48d6c6ed88aa4b187bc4b42->enter($__internal_ed0c5d2d52793bbb79638c90b84cc26964a585a5a48d6c6ed88aa4b187bc4b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_201a3b6fa1b1afbe4f571d9a3bfd12df56fd7ab794083ed6751b6a94770b40f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201a3b6fa1b1afbe4f571d9a3bfd12df56fd7ab794083ed6751b6a94770b40f6->enter($__internal_201a3b6fa1b1afbe4f571d9a3bfd12df56fd7ab794083ed6751b6a94770b40f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed0c5d2d52793bbb79638c90b84cc26964a585a5a48d6c6ed88aa4b187bc4b42->leave($__internal_ed0c5d2d52793bbb79638c90b84cc26964a585a5a48d6c6ed88aa4b187bc4b42_prof);

        
        $__internal_201a3b6fa1b1afbe4f571d9a3bfd12df56fd7ab794083ed6751b6a94770b40f6->leave($__internal_201a3b6fa1b1afbe4f571d9a3bfd12df56fd7ab794083ed6751b6a94770b40f6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d4f99566b94ca4431c76ba7ee6dd1ea0e66c53794fb7024b1f45557b77abca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d4f99566b94ca4431c76ba7ee6dd1ea0e66c53794fb7024b1f45557b77abca7->enter($__internal_7d4f99566b94ca4431c76ba7ee6dd1ea0e66c53794fb7024b1f45557b77abca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_074e612bd403876a7fd77530ed6830ec156a571419f8e9943624155782954d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074e612bd403876a7fd77530ed6830ec156a571419f8e9943624155782954d57->enter($__internal_074e612bd403876a7fd77530ed6830ec156a571419f8e9943624155782954d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_074e612bd403876a7fd77530ed6830ec156a571419f8e9943624155782954d57->leave($__internal_074e612bd403876a7fd77530ed6830ec156a571419f8e9943624155782954d57_prof);

        
        $__internal_7d4f99566b94ca4431c76ba7ee6dd1ea0e66c53794fb7024b1f45557b77abca7->leave($__internal_7d4f99566b94ca4431c76ba7ee6dd1ea0e66c53794fb7024b1f45557b77abca7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
