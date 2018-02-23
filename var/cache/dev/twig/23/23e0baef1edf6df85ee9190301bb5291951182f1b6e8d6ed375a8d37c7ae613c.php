<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_b56f6eeb07e964562bf31132f1987f61a875420a5575352c53e383f7b6a566b8 extends Twig_Template
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
        $__internal_c264f9f3922a4f289bf4a9d4c48246c0e58a3162adaed994948581f1a68b67bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c264f9f3922a4f289bf4a9d4c48246c0e58a3162adaed994948581f1a68b67bc->enter($__internal_c264f9f3922a4f289bf4a9d4c48246c0e58a3162adaed994948581f1a68b67bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_7cc8499c8c5d279557d94bf1640439ad619e0132b509e14ef2c5bf56fc053f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc8499c8c5d279557d94bf1640439ad619e0132b509e14ef2c5bf56fc053f90->enter($__internal_7cc8499c8c5d279557d94bf1640439ad619e0132b509e14ef2c5bf56fc053f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
<p>Bonjour avant de vous inscrire veillez lire les conditions d'utilisations suivantes :</p>
<h1>CONDITIONS</h1>

";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_c264f9f3922a4f289bf4a9d4c48246c0e58a3162adaed994948581f1a68b67bc->leave($__internal_c264f9f3922a4f289bf4a9d4c48246c0e58a3162adaed994948581f1a68b67bc_prof);

        
        $__internal_7cc8499c8c5d279557d94bf1640439ad619e0132b509e14ef2c5bf56fc053f90->leave($__internal_7cc8499c8c5d279557d94bf1640439ad619e0132b509e14ef2c5bf56fc053f90_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  40 => 9,  35 => 7,  31 => 6,  25 => 2,);
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

<p>Bonjour avant de vous inscrire veillez lire les conditions d'utilisations suivantes :</p>
<h1>CONDITIONS</h1>

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}


", "FOSUserBundle:Registration:register_content.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
