<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_69d0eaadfc10afa4cd8f77a47182b85dce22a55dc3b1a998b57041a775d8877f extends Twig_Template
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
        $__internal_398b320ec5a6dd40b1a3660d66ff214b03beca0550dbd89bcecb4ba0e7dd3215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398b320ec5a6dd40b1a3660d66ff214b03beca0550dbd89bcecb4ba0e7dd3215->enter($__internal_398b320ec5a6dd40b1a3660d66ff214b03beca0550dbd89bcecb4ba0e7dd3215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ce1788eb753ca79b9bbc595244f4d85218cfcf9e519669a575669b4fde4af18e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1788eb753ca79b9bbc595244f4d85218cfcf9e519669a575669b4fde4af18e->enter($__internal_ce1788eb753ca79b9bbc595244f4d85218cfcf9e519669a575669b4fde4af18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_398b320ec5a6dd40b1a3660d66ff214b03beca0550dbd89bcecb4ba0e7dd3215->leave($__internal_398b320ec5a6dd40b1a3660d66ff214b03beca0550dbd89bcecb4ba0e7dd3215_prof);

        
        $__internal_ce1788eb753ca79b9bbc595244f4d85218cfcf9e519669a575669b4fde4af18e->leave($__internal_ce1788eb753ca79b9bbc595244f4d85218cfcf9e519669a575669b4fde4af18e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
