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
        $__internal_1c76eb4893103a78eccfac3a7c023783eae4e248e7deb66838f4c6ede6d36841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c76eb4893103a78eccfac3a7c023783eae4e248e7deb66838f4c6ede6d36841->enter($__internal_1c76eb4893103a78eccfac3a7c023783eae4e248e7deb66838f4c6ede6d36841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_dcf5ff1ff62f00711e3e28072beb634027c1b5bc9f75a3ea505b08bd3c475b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf5ff1ff62f00711e3e28072beb634027c1b5bc9f75a3ea505b08bd3c475b73->enter($__internal_dcf5ff1ff62f00711e3e28072beb634027c1b5bc9f75a3ea505b08bd3c475b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1c76eb4893103a78eccfac3a7c023783eae4e248e7deb66838f4c6ede6d36841->leave($__internal_1c76eb4893103a78eccfac3a7c023783eae4e248e7deb66838f4c6ede6d36841_prof);

        
        $__internal_dcf5ff1ff62f00711e3e28072beb634027c1b5bc9f75a3ea505b08bd3c475b73->leave($__internal_dcf5ff1ff62f00711e3e28072beb634027c1b5bc9f75a3ea505b08bd3c475b73_prof);

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
