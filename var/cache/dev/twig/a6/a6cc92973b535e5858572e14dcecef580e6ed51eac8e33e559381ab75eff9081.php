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
        $__internal_e388fc7ecd0a80181d0cc61d5b48954e13ac4d8767a717665d645996bb2def38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e388fc7ecd0a80181d0cc61d5b48954e13ac4d8767a717665d645996bb2def38->enter($__internal_e388fc7ecd0a80181d0cc61d5b48954e13ac4d8767a717665d645996bb2def38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_67e603b39025e9b643a9e3fd0c098624ed1b22370680e9ffae229897b1333971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e603b39025e9b643a9e3fd0c098624ed1b22370680e9ffae229897b1333971->enter($__internal_67e603b39025e9b643a9e3fd0c098624ed1b22370680e9ffae229897b1333971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e388fc7ecd0a80181d0cc61d5b48954e13ac4d8767a717665d645996bb2def38->leave($__internal_e388fc7ecd0a80181d0cc61d5b48954e13ac4d8767a717665d645996bb2def38_prof);

        
        $__internal_67e603b39025e9b643a9e3fd0c098624ed1b22370680e9ffae229897b1333971->leave($__internal_67e603b39025e9b643a9e3fd0c098624ed1b22370680e9ffae229897b1333971_prof);

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
