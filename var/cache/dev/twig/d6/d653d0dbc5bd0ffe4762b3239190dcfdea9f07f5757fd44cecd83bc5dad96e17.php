<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_8f7060e4aa2bb0ca3994ed86810cac4b6c4fc37d16234541177a3deb2caeb422 extends Twig_Template
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
        $__internal_aa8d274f64cf3e8ed0f5fb6aaea30c706ba57b7894311cfef48c93e5173c86b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa8d274f64cf3e8ed0f5fb6aaea30c706ba57b7894311cfef48c93e5173c86b6->enter($__internal_aa8d274f64cf3e8ed0f5fb6aaea30c706ba57b7894311cfef48c93e5173c86b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_8ad860d5c03ff9f11a167d7f3109db6f55aaf7d4e1d316a6fab48fa3c56eb1e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad860d5c03ff9f11a167d7f3109db6f55aaf7d4e1d316a6fab48fa3c56eb1e1->enter($__internal_8ad860d5c03ff9f11a167d7f3109db6f55aaf7d4e1d316a6fab48fa3c56eb1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_aa8d274f64cf3e8ed0f5fb6aaea30c706ba57b7894311cfef48c93e5173c86b6->leave($__internal_aa8d274f64cf3e8ed0f5fb6aaea30c706ba57b7894311cfef48c93e5173c86b6_prof);

        
        $__internal_8ad860d5c03ff9f11a167d7f3109db6f55aaf7d4e1d316a6fab48fa3c56eb1e1->leave($__internal_8ad860d5c03ff9f11a167d7f3109db6f55aaf7d4e1d316a6fab48fa3c56eb1e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
