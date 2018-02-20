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
        $__internal_8fe6e7bf7342099a9f7e027e3602cb2aefe7cfd66603c5daf5891b975199da2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fe6e7bf7342099a9f7e027e3602cb2aefe7cfd66603c5daf5891b975199da2e->enter($__internal_8fe6e7bf7342099a9f7e027e3602cb2aefe7cfd66603c5daf5891b975199da2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_b06ae483a19d260e81d68161e4698e41f5c71650bd1d46453ff6f97d42bf2205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06ae483a19d260e81d68161e4698e41f5c71650bd1d46453ff6f97d42bf2205->enter($__internal_b06ae483a19d260e81d68161e4698e41f5c71650bd1d46453ff6f97d42bf2205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8fe6e7bf7342099a9f7e027e3602cb2aefe7cfd66603c5daf5891b975199da2e->leave($__internal_8fe6e7bf7342099a9f7e027e3602cb2aefe7cfd66603c5daf5891b975199da2e_prof);

        
        $__internal_b06ae483a19d260e81d68161e4698e41f5c71650bd1d46453ff6f97d42bf2205->leave($__internal_b06ae483a19d260e81d68161e4698e41f5c71650bd1d46453ff6f97d42bf2205_prof);

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
