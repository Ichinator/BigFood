<?php

/* @Framework/Form/choice_widget_collapsed.html.php */
class __TwigTemplate_083dbd57a59605829def5a454790fd9b6927f412db6d1fa34d3db40408504770 extends Twig_Template
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
        $__internal_ec930fce83a27f9e287d5c078da95d6d8d9de15fbe58293a12ff463646c4e094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec930fce83a27f9e287d5c078da95d6d8d9de15fbe58293a12ff463646c4e094->enter($__internal_ec930fce83a27f9e287d5c078da95d6d8d9de15fbe58293a12ff463646c4e094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_collapsed.html.php"));

        $__internal_8601fe718b424ce0988ca45b6fa6ccd980119563a99d2850f6d168f052d9e598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8601fe718b424ce0988ca45b6fa6ccd980119563a99d2850f6d168f052d9e598->enter($__internal_8601fe718b424ce0988ca45b6fa6ccd980119563a99d2850f6d168f052d9e598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_collapsed.html.php"));

        // line 1
        echo "<select
    <?php if (\$required && null === \$placeholder && \$placeholder_in_choices === false && \$multiple === false && (!isset(\$attr['size']) || \$attr['size'] <= 1)):
        \$required = false;
    endif; ?>
    <?php echo \$view['form']->block(\$form, 'widget_attributes', array(
        'required' => \$required,
    )) ?>
    <?php if (\$multiple): ?> multiple=\"multiple\"<?php endif ?>
>
    <?php if (null !== \$placeholder): ?><option value=\"\"<?php if (\$required && empty(\$value) && '0' !== \$value): ?> selected=\"selected\"<?php endif?>><?php echo '' != \$placeholder ? \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$placeholder, array(), \$translation_domain) : \$placeholder) : '' ?></option><?php endif; ?>
    <?php if (count(\$preferred_choices) > 0): ?>
        <?php echo \$view['form']->block(\$form, 'choice_widget_options', array('choices' => \$preferred_choices)) ?>
        <?php if (count(\$choices) > 0 && null !== \$separator): ?>
            <option disabled=\"disabled\"><?php echo \$separator ?></option>
        <?php endif ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'choice_widget_options', array('choices' => \$choices)) ?>
</select>
";
        
        $__internal_ec930fce83a27f9e287d5c078da95d6d8d9de15fbe58293a12ff463646c4e094->leave($__internal_ec930fce83a27f9e287d5c078da95d6d8d9de15fbe58293a12ff463646c4e094_prof);

        
        $__internal_8601fe718b424ce0988ca45b6fa6ccd980119563a99d2850f6d168f052d9e598->leave($__internal_8601fe718b424ce0988ca45b6fa6ccd980119563a99d2850f6d168f052d9e598_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_collapsed.html.php";
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
        return new Twig_Source("<select
    <?php if (\$required && null === \$placeholder && \$placeholder_in_choices === false && \$multiple === false && (!isset(\$attr['size']) || \$attr['size'] <= 1)):
        \$required = false;
    endif; ?>
    <?php echo \$view['form']->block(\$form, 'widget_attributes', array(
        'required' => \$required,
    )) ?>
    <?php if (\$multiple): ?> multiple=\"multiple\"<?php endif ?>
>
    <?php if (null !== \$placeholder): ?><option value=\"\"<?php if (\$required && empty(\$value) && '0' !== \$value): ?> selected=\"selected\"<?php endif?>><?php echo '' != \$placeholder ? \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$placeholder, array(), \$translation_domain) : \$placeholder) : '' ?></option><?php endif; ?>
    <?php if (count(\$preferred_choices) > 0): ?>
        <?php echo \$view['form']->block(\$form, 'choice_widget_options', array('choices' => \$preferred_choices)) ?>
        <?php if (count(\$choices) > 0 && null !== \$separator): ?>
            <option disabled=\"disabled\"><?php echo \$separator ?></option>
        <?php endif ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'choice_widget_options', array('choices' => \$choices)) ?>
</select>
", "@Framework/Form/choice_widget_collapsed.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_collapsed.html.php");
    }
}
