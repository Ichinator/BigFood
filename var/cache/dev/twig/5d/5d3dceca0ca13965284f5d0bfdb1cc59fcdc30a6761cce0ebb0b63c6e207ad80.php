<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a6f9ffcbdd38f669fa13663171ba0a001164843a6edbec8111c0a341316a6cf4 extends Twig_Template
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
        $__internal_910bdd9e145087178aa188c8aae4f951f19b5c97fcc761b044d0cc637d46a1c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_910bdd9e145087178aa188c8aae4f951f19b5c97fcc761b044d0cc637d46a1c6->enter($__internal_910bdd9e145087178aa188c8aae4f951f19b5c97fcc761b044d0cc637d46a1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_a5a5978e19d2a0e727f92be9dd7935f9c8a980d9a263925d1d00283d277b0dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a5978e19d2a0e727f92be9dd7935f9c8a980d9a263925d1d00283d277b0dd1->enter($__internal_a5a5978e19d2a0e727f92be9dd7935f9c8a980d9a263925d1d00283d277b0dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_910bdd9e145087178aa188c8aae4f951f19b5c97fcc761b044d0cc637d46a1c6->leave($__internal_910bdd9e145087178aa188c8aae4f951f19b5c97fcc761b044d0cc637d46a1c6_prof);

        
        $__internal_a5a5978e19d2a0e727f92be9dd7935f9c8a980d9a263925d1d00283d277b0dd1->leave($__internal_a5a5978e19d2a0e727f92be9dd7935f9c8a980d9a263925d1d00283d277b0dd1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
