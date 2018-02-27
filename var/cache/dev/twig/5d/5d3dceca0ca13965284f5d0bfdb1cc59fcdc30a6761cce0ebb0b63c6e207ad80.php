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
        $__internal_ae329ba636d30cb52ddc1481896fb1e82b7e7d1b5e852b5cefd9e5e85b3d4c72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae329ba636d30cb52ddc1481896fb1e82b7e7d1b5e852b5cefd9e5e85b3d4c72->enter($__internal_ae329ba636d30cb52ddc1481896fb1e82b7e7d1b5e852b5cefd9e5e85b3d4c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_1c484cff1c20a1065e9c61c0da484f47e6cdb60d1eabd74e68049fdc012c5619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c484cff1c20a1065e9c61c0da484f47e6cdb60d1eabd74e68049fdc012c5619->enter($__internal_1c484cff1c20a1065e9c61c0da484f47e6cdb60d1eabd74e68049fdc012c5619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_ae329ba636d30cb52ddc1481896fb1e82b7e7d1b5e852b5cefd9e5e85b3d4c72->leave($__internal_ae329ba636d30cb52ddc1481896fb1e82b7e7d1b5e852b5cefd9e5e85b3d4c72_prof);

        
        $__internal_1c484cff1c20a1065e9c61c0da484f47e6cdb60d1eabd74e68049fdc012c5619->leave($__internal_1c484cff1c20a1065e9c61c0da484f47e6cdb60d1eabd74e68049fdc012c5619_prof);

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
