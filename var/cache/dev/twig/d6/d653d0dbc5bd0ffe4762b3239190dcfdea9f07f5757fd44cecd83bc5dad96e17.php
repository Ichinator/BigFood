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
        $__internal_37028a6168e880664316da1067311a53b492c65537e4e05298bc328deb4516d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37028a6168e880664316da1067311a53b492c65537e4e05298bc328deb4516d8->enter($__internal_37028a6168e880664316da1067311a53b492c65537e4e05298bc328deb4516d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_aa1cb70502ee3d70e02d9519fa72445b860a6a004b65048a66a578489e27e8ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1cb70502ee3d70e02d9519fa72445b860a6a004b65048a66a578489e27e8ae->enter($__internal_aa1cb70502ee3d70e02d9519fa72445b860a6a004b65048a66a578489e27e8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_37028a6168e880664316da1067311a53b492c65537e4e05298bc328deb4516d8->leave($__internal_37028a6168e880664316da1067311a53b492c65537e4e05298bc328deb4516d8_prof);

        
        $__internal_aa1cb70502ee3d70e02d9519fa72445b860a6a004b65048a66a578489e27e8ae->leave($__internal_aa1cb70502ee3d70e02d9519fa72445b860a6a004b65048a66a578489e27e8ae_prof);

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
