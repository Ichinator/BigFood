<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_a25a15fcd6c460f9e222fde789bdb2c6612cdbfbb1acf607e84b7f640204229d extends Twig_Template
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
        $__internal_00b79797c6d75ff2860786af90ceeceea9550d3d44c9e32d4da7c62325bb62c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00b79797c6d75ff2860786af90ceeceea9550d3d44c9e32d4da7c62325bb62c9->enter($__internal_00b79797c6d75ff2860786af90ceeceea9550d3d44c9e32d4da7c62325bb62c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_d86c221e1eea804c3e1f5f493181ef5bc551c6dcd7d5cf2b7b97db0b19bb182a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86c221e1eea804c3e1f5f493181ef5bc551c6dcd7d5cf2b7b97db0b19bb182a->enter($__internal_d86c221e1eea804c3e1f5f493181ef5bc551c6dcd7d5cf2b7b97db0b19bb182a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_00b79797c6d75ff2860786af90ceeceea9550d3d44c9e32d4da7c62325bb62c9->leave($__internal_00b79797c6d75ff2860786af90ceeceea9550d3d44c9e32d4da7c62325bb62c9_prof);

        
        $__internal_d86c221e1eea804c3e1f5f493181ef5bc551c6dcd7d5cf2b7b97db0b19bb182a->leave($__internal_d86c221e1eea804c3e1f5f493181ef5bc551c6dcd7d5cf2b7b97db0b19bb182a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
