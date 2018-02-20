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
        $__internal_a80a1ea033c42da1b8864d377d809a542f21b16258bbf551f90ea25594b01bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a80a1ea033c42da1b8864d377d809a542f21b16258bbf551f90ea25594b01bd0->enter($__internal_a80a1ea033c42da1b8864d377d809a542f21b16258bbf551f90ea25594b01bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_c7cf5342de50f6f0af8c85fed7709a578e43901002ea16eba4fd9d6aef04cdf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7cf5342de50f6f0af8c85fed7709a578e43901002ea16eba4fd9d6aef04cdf5->enter($__internal_c7cf5342de50f6f0af8c85fed7709a578e43901002ea16eba4fd9d6aef04cdf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a80a1ea033c42da1b8864d377d809a542f21b16258bbf551f90ea25594b01bd0->leave($__internal_a80a1ea033c42da1b8864d377d809a542f21b16258bbf551f90ea25594b01bd0_prof);

        
        $__internal_c7cf5342de50f6f0af8c85fed7709a578e43901002ea16eba4fd9d6aef04cdf5->leave($__internal_c7cf5342de50f6f0af8c85fed7709a578e43901002ea16eba4fd9d6aef04cdf5_prof);

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
