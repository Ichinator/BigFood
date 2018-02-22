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
        $__internal_055f2b4bdc0bf9ee2361f3ad9fb78cacdc0f547964b964d852f4d2877aa21429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_055f2b4bdc0bf9ee2361f3ad9fb78cacdc0f547964b964d852f4d2877aa21429->enter($__internal_055f2b4bdc0bf9ee2361f3ad9fb78cacdc0f547964b964d852f4d2877aa21429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_0f0ad6e990867b12df3bbfae3d5916b7b2e495476d8fbfc9a6f90fdb4528d2d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f0ad6e990867b12df3bbfae3d5916b7b2e495476d8fbfc9a6f90fdb4528d2d4->enter($__internal_0f0ad6e990867b12df3bbfae3d5916b7b2e495476d8fbfc9a6f90fdb4528d2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_055f2b4bdc0bf9ee2361f3ad9fb78cacdc0f547964b964d852f4d2877aa21429->leave($__internal_055f2b4bdc0bf9ee2361f3ad9fb78cacdc0f547964b964d852f4d2877aa21429_prof);

        
        $__internal_0f0ad6e990867b12df3bbfae3d5916b7b2e495476d8fbfc9a6f90fdb4528d2d4->leave($__internal_0f0ad6e990867b12df3bbfae3d5916b7b2e495476d8fbfc9a6f90fdb4528d2d4_prof);

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
