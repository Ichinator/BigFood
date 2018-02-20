<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_c4b6940ad6d687fc4c79303bffd425eebf723ec491215b08614a9b32363997c2 extends Twig_Template
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
        $__internal_a55d05edd82db7dab92fc1fd1594adfaf62c5f45204f42bdc54d36c261b65b31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a55d05edd82db7dab92fc1fd1594adfaf62c5f45204f42bdc54d36c261b65b31->enter($__internal_a55d05edd82db7dab92fc1fd1594adfaf62c5f45204f42bdc54d36c261b65b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_cfad4d6db1ed18e99f4fa3ad0c7cdc381aece51db3bbc537f135194f436b5058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfad4d6db1ed18e99f4fa3ad0c7cdc381aece51db3bbc537f135194f436b5058->enter($__internal_cfad4d6db1ed18e99f4fa3ad0c7cdc381aece51db3bbc537f135194f436b5058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a55d05edd82db7dab92fc1fd1594adfaf62c5f45204f42bdc54d36c261b65b31->leave($__internal_a55d05edd82db7dab92fc1fd1594adfaf62c5f45204f42bdc54d36c261b65b31_prof);

        
        $__internal_cfad4d6db1ed18e99f4fa3ad0c7cdc381aece51db3bbc537f135194f436b5058->leave($__internal_cfad4d6db1ed18e99f4fa3ad0c7cdc381aece51db3bbc537f135194f436b5058_prof);

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
