<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_5e50565b0eed54cd3704afd288f6d8294f329fd9d8afd9cd4f6a3ff5fa3bd619 extends Twig_Template
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
        $__internal_0aa362a9d7d5ee43e3082aa5062c48e098160eb47231025c8d6f411a66bead38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa362a9d7d5ee43e3082aa5062c48e098160eb47231025c8d6f411a66bead38->enter($__internal_0aa362a9d7d5ee43e3082aa5062c48e098160eb47231025c8d6f411a66bead38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_63529dd8bd3a2bda8e063db5693a33371086d1eb6fc4b08b5be6e161dec8c4ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63529dd8bd3a2bda8e063db5693a33371086d1eb6fc4b08b5be6e161dec8c4ae->enter($__internal_63529dd8bd3a2bda8e063db5693a33371086d1eb6fc4b08b5be6e161dec8c4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0aa362a9d7d5ee43e3082aa5062c48e098160eb47231025c8d6f411a66bead38->leave($__internal_0aa362a9d7d5ee43e3082aa5062c48e098160eb47231025c8d6f411a66bead38_prof);

        
        $__internal_63529dd8bd3a2bda8e063db5693a33371086d1eb6fc4b08b5be6e161dec8c4ae->leave($__internal_63529dd8bd3a2bda8e063db5693a33371086d1eb6fc4b08b5be6e161dec8c4ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
