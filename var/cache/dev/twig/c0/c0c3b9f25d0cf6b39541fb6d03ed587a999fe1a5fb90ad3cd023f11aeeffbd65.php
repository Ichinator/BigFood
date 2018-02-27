<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_1c0dc10308c22e0e624afe62868f70de72d6e9cc48b6237f85a3eeb3d2a5c0c3 extends Twig_Template
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
        $__internal_fce0a5f697628dfb6254681281e6acc386d5dc5984a6abdf65e218daa6ef05df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fce0a5f697628dfb6254681281e6acc386d5dc5984a6abdf65e218daa6ef05df->enter($__internal_fce0a5f697628dfb6254681281e6acc386d5dc5984a6abdf65e218daa6ef05df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_d36ec10711e711eea0e60307e5f260f7090b76ef0101de819fa2c6650ad9031c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36ec10711e711eea0e60307e5f260f7090b76ef0101de819fa2c6650ad9031c->enter($__internal_d36ec10711e711eea0e60307e5f260f7090b76ef0101de819fa2c6650ad9031c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_fce0a5f697628dfb6254681281e6acc386d5dc5984a6abdf65e218daa6ef05df->leave($__internal_fce0a5f697628dfb6254681281e6acc386d5dc5984a6abdf65e218daa6ef05df_prof);

        
        $__internal_d36ec10711e711eea0e60307e5f260f7090b76ef0101de819fa2c6650ad9031c->leave($__internal_d36ec10711e711eea0e60307e5f260f7090b76ef0101de819fa2c6650ad9031c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
