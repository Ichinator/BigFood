<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_141722bd7e485a2c78df59e3ee473be1b1a2441c668b675abd35e21519e3175e extends Twig_Template
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
        $__internal_8df0a30e59072bf465cb6524c7a3536dc57313154452d68dec2e54565d7f5f5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df0a30e59072bf465cb6524c7a3536dc57313154452d68dec2e54565d7f5f5f->enter($__internal_8df0a30e59072bf465cb6524c7a3536dc57313154452d68dec2e54565d7f5f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_9876fb54a3ad448cd7ffda355b68ef8b0be6b4ae6649e9a9d6561d983ab581a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9876fb54a3ad448cd7ffda355b68ef8b0be6b4ae6649e9a9d6561d983ab581a9->enter($__internal_9876fb54a3ad448cd7ffda355b68ef8b0be6b4ae6649e9a9d6561d983ab581a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_8df0a30e59072bf465cb6524c7a3536dc57313154452d68dec2e54565d7f5f5f->leave($__internal_8df0a30e59072bf465cb6524c7a3536dc57313154452d68dec2e54565d7f5f5f_prof);

        
        $__internal_9876fb54a3ad448cd7ffda355b68ef8b0be6b4ae6649e9a9d6561d983ab581a9->leave($__internal_9876fb54a3ad448cd7ffda355b68ef8b0be6b4ae6649e9a9d6561d983ab581a9_prof);

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
