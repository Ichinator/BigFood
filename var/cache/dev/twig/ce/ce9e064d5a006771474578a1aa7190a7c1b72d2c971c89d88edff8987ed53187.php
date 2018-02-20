<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_fb4af6c4d4ad6092d379b5ffe1aacfa7d4c8e7c0bce98e23a64025f01932511f extends Twig_Template
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
        $__internal_bba9e5813de5839d1bb29c750298327ea4ec52dbcf5333af3efce9a58ba48de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bba9e5813de5839d1bb29c750298327ea4ec52dbcf5333af3efce9a58ba48de1->enter($__internal_bba9e5813de5839d1bb29c750298327ea4ec52dbcf5333af3efce9a58ba48de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_f343ed25e5f781056574edf1aea3a6de605898edd52f5916a60898ed55636701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f343ed25e5f781056574edf1aea3a6de605898edd52f5916a60898ed55636701->enter($__internal_f343ed25e5f781056574edf1aea3a6de605898edd52f5916a60898ed55636701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_bba9e5813de5839d1bb29c750298327ea4ec52dbcf5333af3efce9a58ba48de1->leave($__internal_bba9e5813de5839d1bb29c750298327ea4ec52dbcf5333af3efce9a58ba48de1_prof);

        
        $__internal_f343ed25e5f781056574edf1aea3a6de605898edd52f5916a60898ed55636701->leave($__internal_f343ed25e5f781056574edf1aea3a6de605898edd52f5916a60898ed55636701_prof);

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
