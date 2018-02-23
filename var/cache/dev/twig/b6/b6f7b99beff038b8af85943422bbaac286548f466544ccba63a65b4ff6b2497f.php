<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_e033bcb7532a0afb1385b2228377d05a14f4311138878c5fc411ade2ab1baccc extends Twig_Template
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
        $__internal_2677dfb41c1d2cbd29863506f5e55cda83fec349a20333f44471944dec0ac06b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2677dfb41c1d2cbd29863506f5e55cda83fec349a20333f44471944dec0ac06b->enter($__internal_2677dfb41c1d2cbd29863506f5e55cda83fec349a20333f44471944dec0ac06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_c50b8c9e56afa7dfe65f030c7125912e7a616ab6e20e87a24c017f4eedf2ff39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50b8c9e56afa7dfe65f030c7125912e7a616ab6e20e87a24c017f4eedf2ff39->enter($__internal_c50b8c9e56afa7dfe65f030c7125912e7a616ab6e20e87a24c017f4eedf2ff39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_2677dfb41c1d2cbd29863506f5e55cda83fec349a20333f44471944dec0ac06b->leave($__internal_2677dfb41c1d2cbd29863506f5e55cda83fec349a20333f44471944dec0ac06b_prof);

        
        $__internal_c50b8c9e56afa7dfe65f030c7125912e7a616ab6e20e87a24c017f4eedf2ff39->leave($__internal_c50b8c9e56afa7dfe65f030c7125912e7a616ab6e20e87a24c017f4eedf2ff39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
