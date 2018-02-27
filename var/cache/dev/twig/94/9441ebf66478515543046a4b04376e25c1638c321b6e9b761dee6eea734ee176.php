<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e49ec750850e70e4ce3fac7a4d5589de307e501e73e03d1fdfa3b1ab0a7584e6 extends Twig_Template
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
        $__internal_45c63d9984196d696edfe06ea42c7357038a60e5bafeeddd930fb02fc415e2a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45c63d9984196d696edfe06ea42c7357038a60e5bafeeddd930fb02fc415e2a8->enter($__internal_45c63d9984196d696edfe06ea42c7357038a60e5bafeeddd930fb02fc415e2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_4006209dceb06ae112322811e55711340a6c017b58d8af576d38fd5403deb044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4006209dceb06ae112322811e55711340a6c017b58d8af576d38fd5403deb044->enter($__internal_4006209dceb06ae112322811e55711340a6c017b58d8af576d38fd5403deb044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_45c63d9984196d696edfe06ea42c7357038a60e5bafeeddd930fb02fc415e2a8->leave($__internal_45c63d9984196d696edfe06ea42c7357038a60e5bafeeddd930fb02fc415e2a8_prof);

        
        $__internal_4006209dceb06ae112322811e55711340a6c017b58d8af576d38fd5403deb044->leave($__internal_4006209dceb06ae112322811e55711340a6c017b58d8af576d38fd5403deb044_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
