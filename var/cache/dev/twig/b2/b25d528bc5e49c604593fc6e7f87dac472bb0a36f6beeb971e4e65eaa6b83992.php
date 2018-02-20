<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_48e1a8a978f664c9b50dd21e9b620bc3a59e6ca6a87b11e7cf2cc4b2c8d43ef0 extends Twig_Template
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
        $__internal_c885cfcbe85000506307c03e68339dec9eafd62b00191b50c6b1a1b95cc384fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c885cfcbe85000506307c03e68339dec9eafd62b00191b50c6b1a1b95cc384fb->enter($__internal_c885cfcbe85000506307c03e68339dec9eafd62b00191b50c6b1a1b95cc384fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_e13aea607d1862b807cb6f807e0079976ee40c0e8de60f9c4495a09b8d6cf939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e13aea607d1862b807cb6f807e0079976ee40c0e8de60f9c4495a09b8d6cf939->enter($__internal_e13aea607d1862b807cb6f807e0079976ee40c0e8de60f9c4495a09b8d6cf939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_c885cfcbe85000506307c03e68339dec9eafd62b00191b50c6b1a1b95cc384fb->leave($__internal_c885cfcbe85000506307c03e68339dec9eafd62b00191b50c6b1a1b95cc384fb_prof);

        
        $__internal_e13aea607d1862b807cb6f807e0079976ee40c0e8de60f9c4495a09b8d6cf939->leave($__internal_e13aea607d1862b807cb6f807e0079976ee40c0e8de60f9c4495a09b8d6cf939_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
