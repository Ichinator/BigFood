<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_55ded026e517b29046b260c9799b63c21615001d056c7ac0f342d4436afaf27a extends Twig_Template
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
        $__internal_9df01b01a06a6d6cebe7752b0625adb0ee25f09aa3c7166ddaa6e526f3e13c15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9df01b01a06a6d6cebe7752b0625adb0ee25f09aa3c7166ddaa6e526f3e13c15->enter($__internal_9df01b01a06a6d6cebe7752b0625adb0ee25f09aa3c7166ddaa6e526f3e13c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_dd1ae17b78d277337323e362b1feafcf5d089fdb753299469893b1d815c6a692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1ae17b78d277337323e362b1feafcf5d089fdb753299469893b1d815c6a692->enter($__internal_dd1ae17b78d277337323e362b1feafcf5d089fdb753299469893b1d815c6a692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9df01b01a06a6d6cebe7752b0625adb0ee25f09aa3c7166ddaa6e526f3e13c15->leave($__internal_9df01b01a06a6d6cebe7752b0625adb0ee25f09aa3c7166ddaa6e526f3e13c15_prof);

        
        $__internal_dd1ae17b78d277337323e362b1feafcf5d089fdb753299469893b1d815c6a692->leave($__internal_dd1ae17b78d277337323e362b1feafcf5d089fdb753299469893b1d815c6a692_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
