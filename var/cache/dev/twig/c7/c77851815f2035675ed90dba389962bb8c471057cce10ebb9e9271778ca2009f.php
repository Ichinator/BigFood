<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d0a9131c1065a2b0d6e5e4e52021e427eb1fdc1871a427d512b776c634f5903d extends Twig_Template
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
        $__internal_2abe9b5067cc49612e783ead8ecc65c7aa3439989a03de3fb34e58c1747ce653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2abe9b5067cc49612e783ead8ecc65c7aa3439989a03de3fb34e58c1747ce653->enter($__internal_2abe9b5067cc49612e783ead8ecc65c7aa3439989a03de3fb34e58c1747ce653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_59906e8b0ca3ca4b952191ff510b1e8f8c20f43afae7af1e725e9f55a716e7f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59906e8b0ca3ca4b952191ff510b1e8f8c20f43afae7af1e725e9f55a716e7f1->enter($__internal_59906e8b0ca3ca4b952191ff510b1e8f8c20f43afae7af1e725e9f55a716e7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2abe9b5067cc49612e783ead8ecc65c7aa3439989a03de3fb34e58c1747ce653->leave($__internal_2abe9b5067cc49612e783ead8ecc65c7aa3439989a03de3fb34e58c1747ce653_prof);

        
        $__internal_59906e8b0ca3ca4b952191ff510b1e8f8c20f43afae7af1e725e9f55a716e7f1->leave($__internal_59906e8b0ca3ca4b952191ff510b1e8f8c20f43afae7af1e725e9f55a716e7f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
