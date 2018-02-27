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
        $__internal_a4ad89100a05827d8d33f789b278986b403612288ca6e259e24349e93e0c4bf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ad89100a05827d8d33f789b278986b403612288ca6e259e24349e93e0c4bf6->enter($__internal_a4ad89100a05827d8d33f789b278986b403612288ca6e259e24349e93e0c4bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_fb473f520c27723d76d26ba5f522d375c811caaeaa75973a86e5adbfa664abe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb473f520c27723d76d26ba5f522d375c811caaeaa75973a86e5adbfa664abe2->enter($__internal_fb473f520c27723d76d26ba5f522d375c811caaeaa75973a86e5adbfa664abe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a4ad89100a05827d8d33f789b278986b403612288ca6e259e24349e93e0c4bf6->leave($__internal_a4ad89100a05827d8d33f789b278986b403612288ca6e259e24349e93e0c4bf6_prof);

        
        $__internal_fb473f520c27723d76d26ba5f522d375c811caaeaa75973a86e5adbfa664abe2->leave($__internal_fb473f520c27723d76d26ba5f522d375c811caaeaa75973a86e5adbfa664abe2_prof);

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
