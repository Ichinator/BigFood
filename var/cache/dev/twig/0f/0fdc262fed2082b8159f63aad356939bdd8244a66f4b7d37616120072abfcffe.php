<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_cbbd8701fad608112e7aa97b0444444cd15f52bdb137d9381ea3c5008084eea6 extends Twig_Template
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
        $__internal_6f70ffd555c061a225c70d68ef76aa42574f49c4ce9bc888fc4a2fc833bd3d9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f70ffd555c061a225c70d68ef76aa42574f49c4ce9bc888fc4a2fc833bd3d9f->enter($__internal_6f70ffd555c061a225c70d68ef76aa42574f49c4ce9bc888fc4a2fc833bd3d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_b9d67c9f607940b238e5d3c1fe6bf4c91cef84c431bcef4adcc7016e8ce3274a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9d67c9f607940b238e5d3c1fe6bf4c91cef84c431bcef4adcc7016e8ce3274a->enter($__internal_b9d67c9f607940b238e5d3c1fe6bf4c91cef84c431bcef4adcc7016e8ce3274a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6f70ffd555c061a225c70d68ef76aa42574f49c4ce9bc888fc4a2fc833bd3d9f->leave($__internal_6f70ffd555c061a225c70d68ef76aa42574f49c4ce9bc888fc4a2fc833bd3d9f_prof);

        
        $__internal_b9d67c9f607940b238e5d3c1fe6bf4c91cef84c431bcef4adcc7016e8ce3274a->leave($__internal_b9d67c9f607940b238e5d3c1fe6bf4c91cef84c431bcef4adcc7016e8ce3274a_prof);

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
