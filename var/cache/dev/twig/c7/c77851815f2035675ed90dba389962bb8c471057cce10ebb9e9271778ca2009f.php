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
        $__internal_41ffb1465cba6043265a9ea87f54a06d0526e3fd2377201594ac11fe814bda0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41ffb1465cba6043265a9ea87f54a06d0526e3fd2377201594ac11fe814bda0f->enter($__internal_41ffb1465cba6043265a9ea87f54a06d0526e3fd2377201594ac11fe814bda0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_e86569fbbf527369f14e3c4b5694e62807b6418ff39f10aae5adae700ba61c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e86569fbbf527369f14e3c4b5694e62807b6418ff39f10aae5adae700ba61c74->enter($__internal_e86569fbbf527369f14e3c4b5694e62807b6418ff39f10aae5adae700ba61c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_41ffb1465cba6043265a9ea87f54a06d0526e3fd2377201594ac11fe814bda0f->leave($__internal_41ffb1465cba6043265a9ea87f54a06d0526e3fd2377201594ac11fe814bda0f_prof);

        
        $__internal_e86569fbbf527369f14e3c4b5694e62807b6418ff39f10aae5adae700ba61c74->leave($__internal_e86569fbbf527369f14e3c4b5694e62807b6418ff39f10aae5adae700ba61c74_prof);

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
