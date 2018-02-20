<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_597a2b0b3be11d1574b3f30ab2efda607e6faa6190497bba8c6ab0f56ebd2b03 extends Twig_Template
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
        $__internal_06ffb242bf59c4f0cb9850d6ce9b816b78fada6187beedb5af32b0d3730df576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06ffb242bf59c4f0cb9850d6ce9b816b78fada6187beedb5af32b0d3730df576->enter($__internal_06ffb242bf59c4f0cb9850d6ce9b816b78fada6187beedb5af32b0d3730df576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_fcf15d6b27bda90dd667ef4b0a447e8432bf343da712e880917b2c1c2983f2c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf15d6b27bda90dd667ef4b0a447e8432bf343da712e880917b2c1c2983f2c1->enter($__internal_fcf15d6b27bda90dd667ef4b0a447e8432bf343da712e880917b2c1c2983f2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_06ffb242bf59c4f0cb9850d6ce9b816b78fada6187beedb5af32b0d3730df576->leave($__internal_06ffb242bf59c4f0cb9850d6ce9b816b78fada6187beedb5af32b0d3730df576_prof);

        
        $__internal_fcf15d6b27bda90dd667ef4b0a447e8432bf343da712e880917b2c1c2983f2c1->leave($__internal_fcf15d6b27bda90dd667ef4b0a447e8432bf343da712e880917b2c1c2983f2c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
