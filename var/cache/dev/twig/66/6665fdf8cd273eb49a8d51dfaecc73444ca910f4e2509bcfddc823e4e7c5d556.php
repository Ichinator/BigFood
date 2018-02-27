<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_281d489087088fbebb580c1aeba8690e0ce91b86142214eb5a455bffc894109b extends Twig_Template
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
        $__internal_60638cbde544b0b6c65b66f0959f56b5863ac4124972a82f5ff78070ea57765b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60638cbde544b0b6c65b66f0959f56b5863ac4124972a82f5ff78070ea57765b->enter($__internal_60638cbde544b0b6c65b66f0959f56b5863ac4124972a82f5ff78070ea57765b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_39ca4c53401610a71a04e584b0a0fa492b552a07ee1352191214f00e9b615765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ca4c53401610a71a04e584b0a0fa492b552a07ee1352191214f00e9b615765->enter($__internal_39ca4c53401610a71a04e584b0a0fa492b552a07ee1352191214f00e9b615765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_60638cbde544b0b6c65b66f0959f56b5863ac4124972a82f5ff78070ea57765b->leave($__internal_60638cbde544b0b6c65b66f0959f56b5863ac4124972a82f5ff78070ea57765b_prof);

        
        $__internal_39ca4c53401610a71a04e584b0a0fa492b552a07ee1352191214f00e9b615765->leave($__internal_39ca4c53401610a71a04e584b0a0fa492b552a07ee1352191214f00e9b615765_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
