<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f748505fbe719d3e84428c3aaffc992028098e14c733eb5af4e058f9cdcf525d extends Twig_Template
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
        $__internal_01333b7496933e10ed8513ece7980d0bba513b7d2f5f6d5f0e7b675f6175b89f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01333b7496933e10ed8513ece7980d0bba513b7d2f5f6d5f0e7b675f6175b89f->enter($__internal_01333b7496933e10ed8513ece7980d0bba513b7d2f5f6d5f0e7b675f6175b89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1fa4259acdbd13cd22725e8d9c9577d490bc0a17642b178deb7570dfe2d1b63e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa4259acdbd13cd22725e8d9c9577d490bc0a17642b178deb7570dfe2d1b63e->enter($__internal_1fa4259acdbd13cd22725e8d9c9577d490bc0a17642b178deb7570dfe2d1b63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_01333b7496933e10ed8513ece7980d0bba513b7d2f5f6d5f0e7b675f6175b89f->leave($__internal_01333b7496933e10ed8513ece7980d0bba513b7d2f5f6d5f0e7b675f6175b89f_prof);

        
        $__internal_1fa4259acdbd13cd22725e8d9c9577d490bc0a17642b178deb7570dfe2d1b63e->leave($__internal_1fa4259acdbd13cd22725e8d9c9577d490bc0a17642b178deb7570dfe2d1b63e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
