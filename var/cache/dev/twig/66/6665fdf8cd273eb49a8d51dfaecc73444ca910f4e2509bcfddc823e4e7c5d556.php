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
        $__internal_fcdfb6daaaa954e26ce95ec0e8a22651331982e36c044cfc688ce6694c606cda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcdfb6daaaa954e26ce95ec0e8a22651331982e36c044cfc688ce6694c606cda->enter($__internal_fcdfb6daaaa954e26ce95ec0e8a22651331982e36c044cfc688ce6694c606cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_ee3d5c01098585bc6f338c1650e5ed22782851796e23314de23dd9a90e34e6ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee3d5c01098585bc6f338c1650e5ed22782851796e23314de23dd9a90e34e6ce->enter($__internal_ee3d5c01098585bc6f338c1650e5ed22782851796e23314de23dd9a90e34e6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_fcdfb6daaaa954e26ce95ec0e8a22651331982e36c044cfc688ce6694c606cda->leave($__internal_fcdfb6daaaa954e26ce95ec0e8a22651331982e36c044cfc688ce6694c606cda_prof);

        
        $__internal_ee3d5c01098585bc6f338c1650e5ed22782851796e23314de23dd9a90e34e6ce->leave($__internal_ee3d5c01098585bc6f338c1650e5ed22782851796e23314de23dd9a90e34e6ce_prof);

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
