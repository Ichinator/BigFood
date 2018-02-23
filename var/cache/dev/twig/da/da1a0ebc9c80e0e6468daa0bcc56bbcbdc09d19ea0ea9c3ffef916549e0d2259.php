<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_222d7cbd1015fc9940bb38d10ecb3f74d2ca6a544d0a6041fdd356be64b50e78 extends Twig_Template
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
        $__internal_5087eb670f1f906e79e1ff50d224470615173e3945777af9f6e16d9a48dcadf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5087eb670f1f906e79e1ff50d224470615173e3945777af9f6e16d9a48dcadf3->enter($__internal_5087eb670f1f906e79e1ff50d224470615173e3945777af9f6e16d9a48dcadf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_7e01fd9562828e9cac02f8586daf2f37488becab68ce4a8485fc90618ecaf973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e01fd9562828e9cac02f8586daf2f37488becab68ce4a8485fc90618ecaf973->enter($__internal_7e01fd9562828e9cac02f8586daf2f37488becab68ce4a8485fc90618ecaf973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5087eb670f1f906e79e1ff50d224470615173e3945777af9f6e16d9a48dcadf3->leave($__internal_5087eb670f1f906e79e1ff50d224470615173e3945777af9f6e16d9a48dcadf3_prof);

        
        $__internal_7e01fd9562828e9cac02f8586daf2f37488becab68ce4a8485fc90618ecaf973->leave($__internal_7e01fd9562828e9cac02f8586daf2f37488becab68ce4a8485fc90618ecaf973_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
