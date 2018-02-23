<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f748505fbe719d3e84428c3aaffc992028098e14c733eb5af4e058f9cdcf525d extends Twig_Template
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
        $__internal_4a16811129299202621a807dd4411a517d7abb92f5da4ed33be6ad9084c14e85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a16811129299202621a807dd4411a517d7abb92f5da4ed33be6ad9084c14e85->enter($__internal_4a16811129299202621a807dd4411a517d7abb92f5da4ed33be6ad9084c14e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_f5785071920c09f99789577ff32627d0b379059e5476f056a81d14045d970429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5785071920c09f99789577ff32627d0b379059e5476f056a81d14045d970429->enter($__internal_f5785071920c09f99789577ff32627d0b379059e5476f056a81d14045d970429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4a16811129299202621a807dd4411a517d7abb92f5da4ed33be6ad9084c14e85->leave($__internal_4a16811129299202621a807dd4411a517d7abb92f5da4ed33be6ad9084c14e85_prof);

        
        $__internal_f5785071920c09f99789577ff32627d0b379059e5476f056a81d14045d970429->leave($__internal_f5785071920c09f99789577ff32627d0b379059e5476f056a81d14045d970429_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
