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
        $__internal_2808b38ee7fe8064239aa35fa4043990e6a4d86947cbc9fd1824d2302f91020a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2808b38ee7fe8064239aa35fa4043990e6a4d86947cbc9fd1824d2302f91020a->enter($__internal_2808b38ee7fe8064239aa35fa4043990e6a4d86947cbc9fd1824d2302f91020a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_c3d6e63f03dedd83270b61c23f94859f241f57f67d80ce65b284834af22f3a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d6e63f03dedd83270b61c23f94859f241f57f67d80ce65b284834af22f3a22->enter($__internal_c3d6e63f03dedd83270b61c23f94859f241f57f67d80ce65b284834af22f3a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_2808b38ee7fe8064239aa35fa4043990e6a4d86947cbc9fd1824d2302f91020a->leave($__internal_2808b38ee7fe8064239aa35fa4043990e6a4d86947cbc9fd1824d2302f91020a_prof);

        
        $__internal_c3d6e63f03dedd83270b61c23f94859f241f57f67d80ce65b284834af22f3a22->leave($__internal_c3d6e63f03dedd83270b61c23f94859f241f57f67d80ce65b284834af22f3a22_prof);

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
