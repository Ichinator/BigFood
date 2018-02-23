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
        $__internal_8356af1dd7af989c74cca6221ee7b3c1144b287bb7f3d0476dd49787b47e2f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8356af1dd7af989c74cca6221ee7b3c1144b287bb7f3d0476dd49787b47e2f8e->enter($__internal_8356af1dd7af989c74cca6221ee7b3c1144b287bb7f3d0476dd49787b47e2f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_e8b82890ec2e6aafeff4563f1e37f3aae7623e5972e88df3e64f3a2f14c96349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b82890ec2e6aafeff4563f1e37f3aae7623e5972e88df3e64f3a2f14c96349->enter($__internal_e8b82890ec2e6aafeff4563f1e37f3aae7623e5972e88df3e64f3a2f14c96349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_8356af1dd7af989c74cca6221ee7b3c1144b287bb7f3d0476dd49787b47e2f8e->leave($__internal_8356af1dd7af989c74cca6221ee7b3c1144b287bb7f3d0476dd49787b47e2f8e_prof);

        
        $__internal_e8b82890ec2e6aafeff4563f1e37f3aae7623e5972e88df3e64f3a2f14c96349->leave($__internal_e8b82890ec2e6aafeff4563f1e37f3aae7623e5972e88df3e64f3a2f14c96349_prof);

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
