<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a15bfd4bb49fa521be3d8a0e48ed9010354c6066db1605f9a5e4e9936a49852f extends Twig_Template
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
        $__internal_25f8b5fd2904ee9e76641e419450f598673f5397314a10550ddafda6610c5c9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f8b5fd2904ee9e76641e419450f598673f5397314a10550ddafda6610c5c9f->enter($__internal_25f8b5fd2904ee9e76641e419450f598673f5397314a10550ddafda6610c5c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_dc33c26884c15b219ba981b7fcd15d5acb1965a42138291a90374d90d5f96ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc33c26884c15b219ba981b7fcd15d5acb1965a42138291a90374d90d5f96ec3->enter($__internal_dc33c26884c15b219ba981b7fcd15d5acb1965a42138291a90374d90d5f96ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_25f8b5fd2904ee9e76641e419450f598673f5397314a10550ddafda6610c5c9f->leave($__internal_25f8b5fd2904ee9e76641e419450f598673f5397314a10550ddafda6610c5c9f_prof);

        
        $__internal_dc33c26884c15b219ba981b7fcd15d5acb1965a42138291a90374d90d5f96ec3->leave($__internal_dc33c26884c15b219ba981b7fcd15d5acb1965a42138291a90374d90d5f96ec3_prof);

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
