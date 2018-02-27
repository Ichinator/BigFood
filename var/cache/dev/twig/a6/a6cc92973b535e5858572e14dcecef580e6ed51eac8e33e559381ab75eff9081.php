<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_cfe2f327ac69b51491c2ec7ff64a8bff55b302d5fb3ab64886d2dc1f0b7fe887 extends Twig_Template
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
        $__internal_d4c0f29a608ccd5938ce7b2546d2bcfcb5aaf5bc82d420936d3689a15d03bd13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c0f29a608ccd5938ce7b2546d2bcfcb5aaf5bc82d420936d3689a15d03bd13->enter($__internal_d4c0f29a608ccd5938ce7b2546d2bcfcb5aaf5bc82d420936d3689a15d03bd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_a0d16542e72d75e406cdb66c22b8803deae5251a2f5358862ac5d86473369856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d16542e72d75e406cdb66c22b8803deae5251a2f5358862ac5d86473369856->enter($__internal_a0d16542e72d75e406cdb66c22b8803deae5251a2f5358862ac5d86473369856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d4c0f29a608ccd5938ce7b2546d2bcfcb5aaf5bc82d420936d3689a15d03bd13->leave($__internal_d4c0f29a608ccd5938ce7b2546d2bcfcb5aaf5bc82d420936d3689a15d03bd13_prof);

        
        $__internal_a0d16542e72d75e406cdb66c22b8803deae5251a2f5358862ac5d86473369856->leave($__internal_a0d16542e72d75e406cdb66c22b8803deae5251a2f5358862ac5d86473369856_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
