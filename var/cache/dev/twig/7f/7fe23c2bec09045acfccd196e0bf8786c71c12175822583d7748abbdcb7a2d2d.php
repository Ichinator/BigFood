<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_df2770e957d483c63246581c08c934d7b3e38642d79da483550bf08786dd186b extends Twig_Template
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
        $__internal_f0e46705ffa402db9ae09d5f5fa174b722bb6d510e86b474e01b22c2399aa41b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0e46705ffa402db9ae09d5f5fa174b722bb6d510e86b474e01b22c2399aa41b->enter($__internal_f0e46705ffa402db9ae09d5f5fa174b722bb6d510e86b474e01b22c2399aa41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_902786de064a35e34f0dd9cbd3dc79645840c5d3aa21fb7e6770fb7f5716a69e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_902786de064a35e34f0dd9cbd3dc79645840c5d3aa21fb7e6770fb7f5716a69e->enter($__internal_902786de064a35e34f0dd9cbd3dc79645840c5d3aa21fb7e6770fb7f5716a69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f0e46705ffa402db9ae09d5f5fa174b722bb6d510e86b474e01b22c2399aa41b->leave($__internal_f0e46705ffa402db9ae09d5f5fa174b722bb6d510e86b474e01b22c2399aa41b_prof);

        
        $__internal_902786de064a35e34f0dd9cbd3dc79645840c5d3aa21fb7e6770fb7f5716a69e->leave($__internal_902786de064a35e34f0dd9cbd3dc79645840c5d3aa21fb7e6770fb7f5716a69e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
