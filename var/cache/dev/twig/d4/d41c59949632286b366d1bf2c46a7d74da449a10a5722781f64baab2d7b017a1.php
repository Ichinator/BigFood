<?php

/* @Framework/Form/choice_widget_options.html.php */
class __TwigTemplate_95b9824e1f81fd9eaf34e3135fcb5a9d4bdb88a616a771a21cd8a1d12741a391 extends Twig_Template
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
        $__internal_73c3c5c24e15f61d138cab7c41a4a437965d98afa737b03c73f638312d36230a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c3c5c24e15f61d138cab7c41a4a437965d98afa737b03c73f638312d36230a->enter($__internal_73c3c5c24e15f61d138cab7c41a4a437965d98afa737b03c73f638312d36230a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_options.html.php"));

        $__internal_48fc6144a71897644a009a3ec5cba49a7864a30c922369b796e0a56e1dd0cab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48fc6144a71897644a009a3ec5cba49a7864a30c922369b796e0a56e1dd0cab6->enter($__internal_48fc6144a71897644a009a3ec5cba49a7864a30c922369b796e0a56e1dd0cab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_options.html.php"));

        // line 1
        echo "<?php use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceGroupView;

\$translatorHelper = \$view['translator']; // outside of the loop for performance reasons! ?>
<?php \$formHelper = \$view['form']; ?>
<?php foreach (\$choices as \$group_label => \$choice): ?>
    <?php if (is_array(\$choice) || \$choice instanceof ChoiceGroupView): ?>
        <optgroup label=\"<?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$group_label, array(), \$choice_translation_domain) : \$group_label) ?>\">
            <?php echo \$formHelper->block(\$form, 'choice_widget_options', array('choices' => \$choice)) ?>
        </optgroup>
    <?php else: ?>
        <option value=\"<?php echo \$view->escape(\$choice->value) ?>\" <?php echo \$formHelper->block(\$form, 'choice_attributes', array('choice_attr' => \$choice->attr)) ?><?php if (\$is_selected(\$choice->value, \$value)): ?> selected=\"selected\"<?php endif?>><?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$choice->label, array(), \$choice_translation_domain) : \$choice->label) ?></option>
    <?php endif ?>
<?php endforeach ?>
";
        
        $__internal_73c3c5c24e15f61d138cab7c41a4a437965d98afa737b03c73f638312d36230a->leave($__internal_73c3c5c24e15f61d138cab7c41a4a437965d98afa737b03c73f638312d36230a_prof);

        
        $__internal_48fc6144a71897644a009a3ec5cba49a7864a30c922369b796e0a56e1dd0cab6->leave($__internal_48fc6144a71897644a009a3ec5cba49a7864a30c922369b796e0a56e1dd0cab6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_options.html.php";
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
        return new Twig_Source("<?php use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceGroupView;

\$translatorHelper = \$view['translator']; // outside of the loop for performance reasons! ?>
<?php \$formHelper = \$view['form']; ?>
<?php foreach (\$choices as \$group_label => \$choice): ?>
    <?php if (is_array(\$choice) || \$choice instanceof ChoiceGroupView): ?>
        <optgroup label=\"<?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$group_label, array(), \$choice_translation_domain) : \$group_label) ?>\">
            <?php echo \$formHelper->block(\$form, 'choice_widget_options', array('choices' => \$choice)) ?>
        </optgroup>
    <?php else: ?>
        <option value=\"<?php echo \$view->escape(\$choice->value) ?>\" <?php echo \$formHelper->block(\$form, 'choice_attributes', array('choice_attr' => \$choice->attr)) ?><?php if (\$is_selected(\$choice->value, \$value)): ?> selected=\"selected\"<?php endif?>><?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$choice->label, array(), \$choice_translation_domain) : \$choice->label) ?></option>
    <?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_widget_options.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_options.html.php");
    }
}
