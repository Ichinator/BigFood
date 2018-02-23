<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_8f7060e4aa2bb0ca3994ed86810cac4b6c4fc37d16234541177a3deb2caeb422 extends Twig_Template
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
        $__internal_56ce087d8f44d749ec7f51d238208037fc862ec36ebcdba713d352a6f63f1bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56ce087d8f44d749ec7f51d238208037fc862ec36ebcdba713d352a6f63f1bca->enter($__internal_56ce087d8f44d749ec7f51d238208037fc862ec36ebcdba713d352a6f63f1bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_b19604bd8e6d91010b54905233f69138127a053e9cb01f4f24fc4ff1deb3d3ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b19604bd8e6d91010b54905233f69138127a053e9cb01f4f24fc4ff1deb3d3ae->enter($__internal_b19604bd8e6d91010b54905233f69138127a053e9cb01f4f24fc4ff1deb3d3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_56ce087d8f44d749ec7f51d238208037fc862ec36ebcdba713d352a6f63f1bca->leave($__internal_56ce087d8f44d749ec7f51d238208037fc862ec36ebcdba713d352a6f63f1bca_prof);

        
        $__internal_b19604bd8e6d91010b54905233f69138127a053e9cb01f4f24fc4ff1deb3d3ae->leave($__internal_b19604bd8e6d91010b54905233f69138127a053e9cb01f4f24fc4ff1deb3d3ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
