<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5f75a7e34b9ede06c58bc21d02b7dfb208aae40fc5b44f32c8fe3e39fb2b3b4c extends Twig_Template
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
        $__internal_0df8d1a88c569c5e11de8315b5fd0db2536bcc981c8dfdf5dc4ef4bddbad161a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0df8d1a88c569c5e11de8315b5fd0db2536bcc981c8dfdf5dc4ef4bddbad161a->enter($__internal_0df8d1a88c569c5e11de8315b5fd0db2536bcc981c8dfdf5dc4ef4bddbad161a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_f2a8579e4f8bbf3443cda215591ec5ed603268041f1d9ebbb62bf2705742ad30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a8579e4f8bbf3443cda215591ec5ed603268041f1d9ebbb62bf2705742ad30->enter($__internal_f2a8579e4f8bbf3443cda215591ec5ed603268041f1d9ebbb62bf2705742ad30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0df8d1a88c569c5e11de8315b5fd0db2536bcc981c8dfdf5dc4ef4bddbad161a->leave($__internal_0df8d1a88c569c5e11de8315b5fd0db2536bcc981c8dfdf5dc4ef4bddbad161a_prof);

        
        $__internal_f2a8579e4f8bbf3443cda215591ec5ed603268041f1d9ebbb62bf2705742ad30->leave($__internal_f2a8579e4f8bbf3443cda215591ec5ed603268041f1d9ebbb62bf2705742ad30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
