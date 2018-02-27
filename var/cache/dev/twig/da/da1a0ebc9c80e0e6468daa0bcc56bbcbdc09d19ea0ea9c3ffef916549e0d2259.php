<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_222d7cbd1015fc9940bb38d10ecb3f74d2ca6a544d0a6041fdd356be64b50e78 extends Twig_Template
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
        $__internal_f90a03e670be548a25751b3c91601b81ccb5ba611733aebb1deb30a188bfef98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f90a03e670be548a25751b3c91601b81ccb5ba611733aebb1deb30a188bfef98->enter($__internal_f90a03e670be548a25751b3c91601b81ccb5ba611733aebb1deb30a188bfef98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_5379cc8fcacc205942ca3204e621d023a935e507878879d1333797559540ab55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5379cc8fcacc205942ca3204e621d023a935e507878879d1333797559540ab55->enter($__internal_5379cc8fcacc205942ca3204e621d023a935e507878879d1333797559540ab55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f90a03e670be548a25751b3c91601b81ccb5ba611733aebb1deb30a188bfef98->leave($__internal_f90a03e670be548a25751b3c91601b81ccb5ba611733aebb1deb30a188bfef98_prof);

        
        $__internal_5379cc8fcacc205942ca3204e621d023a935e507878879d1333797559540ab55->leave($__internal_5379cc8fcacc205942ca3204e621d023a935e507878879d1333797559540ab55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
