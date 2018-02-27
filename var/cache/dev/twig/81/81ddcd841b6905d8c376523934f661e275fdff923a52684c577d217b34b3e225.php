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
        $__internal_60092ade049582e109d59b602d192d1e6d9c91aef849076e5f179fc812a5d303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60092ade049582e109d59b602d192d1e6d9c91aef849076e5f179fc812a5d303->enter($__internal_60092ade049582e109d59b602d192d1e6d9c91aef849076e5f179fc812a5d303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_180d588baaf69807533484d80d23374c9c9d6e21f57ff175711d5bbaf859fb79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_180d588baaf69807533484d80d23374c9c9d6e21f57ff175711d5bbaf859fb79->enter($__internal_180d588baaf69807533484d80d23374c9c9d6e21f57ff175711d5bbaf859fb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_60092ade049582e109d59b602d192d1e6d9c91aef849076e5f179fc812a5d303->leave($__internal_60092ade049582e109d59b602d192d1e6d9c91aef849076e5f179fc812a5d303_prof);

        
        $__internal_180d588baaf69807533484d80d23374c9c9d6e21f57ff175711d5bbaf859fb79->leave($__internal_180d588baaf69807533484d80d23374c9c9d6e21f57ff175711d5bbaf859fb79_prof);

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
