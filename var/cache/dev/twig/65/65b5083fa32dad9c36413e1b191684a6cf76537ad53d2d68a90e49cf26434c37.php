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
        $__internal_dd1652ddb1d92ad87f1b3992525cf3b56398aa5b2c57caffac25830b06a85dd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd1652ddb1d92ad87f1b3992525cf3b56398aa5b2c57caffac25830b06a85dd4->enter($__internal_dd1652ddb1d92ad87f1b3992525cf3b56398aa5b2c57caffac25830b06a85dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_b5b03ad5f01d15a3f071cfd58fc0b7cd60cbae53e2e34f473c300bd2a1031296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b03ad5f01d15a3f071cfd58fc0b7cd60cbae53e2e34f473c300bd2a1031296->enter($__internal_b5b03ad5f01d15a3f071cfd58fc0b7cd60cbae53e2e34f473c300bd2a1031296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_dd1652ddb1d92ad87f1b3992525cf3b56398aa5b2c57caffac25830b06a85dd4->leave($__internal_dd1652ddb1d92ad87f1b3992525cf3b56398aa5b2c57caffac25830b06a85dd4_prof);

        
        $__internal_b5b03ad5f01d15a3f071cfd58fc0b7cd60cbae53e2e34f473c300bd2a1031296->leave($__internal_b5b03ad5f01d15a3f071cfd58fc0b7cd60cbae53e2e34f473c300bd2a1031296_prof);

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
