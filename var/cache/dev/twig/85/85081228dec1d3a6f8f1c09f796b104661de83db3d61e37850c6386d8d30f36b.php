<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_be900470fe600636a826fecfff1790b5da1ef20635b63323f59d072029ba206d extends Twig_Template
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
        $__internal_a7b3ab86964f91ba8d156da2df523062ea45eefd198dca4817bf1b2d54401ae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7b3ab86964f91ba8d156da2df523062ea45eefd198dca4817bf1b2d54401ae8->enter($__internal_a7b3ab86964f91ba8d156da2df523062ea45eefd198dca4817bf1b2d54401ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_cd955b7409ae8453fbcf7aa83dc7c1530c7b3631da3ff5e2f33780378538d78f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd955b7409ae8453fbcf7aa83dc7c1530c7b3631da3ff5e2f33780378538d78f->enter($__internal_cd955b7409ae8453fbcf7aa83dc7c1530c7b3631da3ff5e2f33780378538d78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a7b3ab86964f91ba8d156da2df523062ea45eefd198dca4817bf1b2d54401ae8->leave($__internal_a7b3ab86964f91ba8d156da2df523062ea45eefd198dca4817bf1b2d54401ae8_prof);

        
        $__internal_cd955b7409ae8453fbcf7aa83dc7c1530c7b3631da3ff5e2f33780378538d78f->leave($__internal_cd955b7409ae8453fbcf7aa83dc7c1530c7b3631da3ff5e2f33780378538d78f_prof);

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
