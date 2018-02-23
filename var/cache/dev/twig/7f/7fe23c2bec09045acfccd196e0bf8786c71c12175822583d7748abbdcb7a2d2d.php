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
        $__internal_fed78d0a2232339c7a9a4fb1123830d70645158096e8472cec2d4f7038dbd0d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fed78d0a2232339c7a9a4fb1123830d70645158096e8472cec2d4f7038dbd0d7->enter($__internal_fed78d0a2232339c7a9a4fb1123830d70645158096e8472cec2d4f7038dbd0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_00226496f86a5e5e7c7fd23f99b7d2caa52050d91810c7453e86f32af1fb83f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00226496f86a5e5e7c7fd23f99b7d2caa52050d91810c7453e86f32af1fb83f4->enter($__internal_00226496f86a5e5e7c7fd23f99b7d2caa52050d91810c7453e86f32af1fb83f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fed78d0a2232339c7a9a4fb1123830d70645158096e8472cec2d4f7038dbd0d7->leave($__internal_fed78d0a2232339c7a9a4fb1123830d70645158096e8472cec2d4f7038dbd0d7_prof);

        
        $__internal_00226496f86a5e5e7c7fd23f99b7d2caa52050d91810c7453e86f32af1fb83f4->leave($__internal_00226496f86a5e5e7c7fd23f99b7d2caa52050d91810c7453e86f32af1fb83f4_prof);

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
