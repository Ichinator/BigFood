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
        $__internal_a4f1266c6e125ad07c245ca44cf33a1268f9b631c2983cdab47a3e592ea8ec63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4f1266c6e125ad07c245ca44cf33a1268f9b631c2983cdab47a3e592ea8ec63->enter($__internal_a4f1266c6e125ad07c245ca44cf33a1268f9b631c2983cdab47a3e592ea8ec63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_dc723542fa991073f8de1c33c237c56dbf61fe328d01875235c4f39c852aa3a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc723542fa991073f8de1c33c237c56dbf61fe328d01875235c4f39c852aa3a5->enter($__internal_dc723542fa991073f8de1c33c237c56dbf61fe328d01875235c4f39c852aa3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_a4f1266c6e125ad07c245ca44cf33a1268f9b631c2983cdab47a3e592ea8ec63->leave($__internal_a4f1266c6e125ad07c245ca44cf33a1268f9b631c2983cdab47a3e592ea8ec63_prof);

        
        $__internal_dc723542fa991073f8de1c33c237c56dbf61fe328d01875235c4f39c852aa3a5->leave($__internal_dc723542fa991073f8de1c33c237c56dbf61fe328d01875235c4f39c852aa3a5_prof);

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
