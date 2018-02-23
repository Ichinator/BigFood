<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8c80bf97cbfd1f6bea24a94a0df4c3613a0787b0865003a365e6d6f8b942c65c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_4db1be247fd59f5eb71b5c87ec7e1bb2d2d01d7a4ef4fe2067d9163de423d426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4db1be247fd59f5eb71b5c87ec7e1bb2d2d01d7a4ef4fe2067d9163de423d426->enter($__internal_4db1be247fd59f5eb71b5c87ec7e1bb2d2d01d7a4ef4fe2067d9163de423d426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_bb39a3ce3afa5f91b49f45eafa9cba62654e6c19ebdb447be0e36332a86b1bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb39a3ce3afa5f91b49f45eafa9cba62654e6c19ebdb447be0e36332a86b1bff->enter($__internal_bb39a3ce3afa5f91b49f45eafa9cba62654e6c19ebdb447be0e36332a86b1bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4db1be247fd59f5eb71b5c87ec7e1bb2d2d01d7a4ef4fe2067d9163de423d426->leave($__internal_4db1be247fd59f5eb71b5c87ec7e1bb2d2d01d7a4ef4fe2067d9163de423d426_prof);

        
        $__internal_bb39a3ce3afa5f91b49f45eafa9cba62654e6c19ebdb447be0e36332a86b1bff->leave($__internal_bb39a3ce3afa5f91b49f45eafa9cba62654e6c19ebdb447be0e36332a86b1bff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db4dfd02173bcfcf9e5906e9f6ac0d6cbab830fdb0e68d0ab4c3e472751a3390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4dfd02173bcfcf9e5906e9f6ac0d6cbab830fdb0e68d0ab4c3e472751a3390->enter($__internal_db4dfd02173bcfcf9e5906e9f6ac0d6cbab830fdb0e68d0ab4c3e472751a3390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9ab844a12c8234e72735a60608642d38ae171991c099e3210aeba7f2902c5d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ab844a12c8234e72735a60608642d38ae171991c099e3210aeba7f2902c5d74->enter($__internal_9ab844a12c8234e72735a60608642d38ae171991c099e3210aeba7f2902c5d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_9ab844a12c8234e72735a60608642d38ae171991c099e3210aeba7f2902c5d74->leave($__internal_9ab844a12c8234e72735a60608642d38ae171991c099e3210aeba7f2902c5d74_prof);

        
        $__internal_db4dfd02173bcfcf9e5906e9f6ac0d6cbab830fdb0e68d0ab4c3e472751a3390->leave($__internal_db4dfd02173bcfcf9e5906e9f6ac0d6cbab830fdb0e68d0ab4c3e472751a3390_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
