<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ac1ae320e18be2ae5efd094320272ab51e20a15b47b3e6486f7c4dd10381dffb extends Twig_Template
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
        $__internal_7dfd07192f86d6d76944670d59462080d147a0163166ae68524b5e9c1a08306f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dfd07192f86d6d76944670d59462080d147a0163166ae68524b5e9c1a08306f->enter($__internal_7dfd07192f86d6d76944670d59462080d147a0163166ae68524b5e9c1a08306f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_0771572906f984a54b14216104f35687e6e67a4f1973a9d8e60f582f4d78fbb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0771572906f984a54b14216104f35687e6e67a4f1973a9d8e60f582f4d78fbb2->enter($__internal_0771572906f984a54b14216104f35687e6e67a4f1973a9d8e60f582f4d78fbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_7dfd07192f86d6d76944670d59462080d147a0163166ae68524b5e9c1a08306f->leave($__internal_7dfd07192f86d6d76944670d59462080d147a0163166ae68524b5e9c1a08306f_prof);

        
        $__internal_0771572906f984a54b14216104f35687e6e67a4f1973a9d8e60f582f4d78fbb2->leave($__internal_0771572906f984a54b14216104f35687e6e67a4f1973a9d8e60f582f4d78fbb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
