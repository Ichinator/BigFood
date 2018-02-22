<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_26add4472f3bbe63db168b8f3f63056e2d7f2c1d50e28977c530b2cc041ec064 extends Twig_Template
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
        $__internal_698bbcadd30db7430cf50286b73090a3e8d65845ddd44e1cac3d440d60818b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_698bbcadd30db7430cf50286b73090a3e8d65845ddd44e1cac3d440d60818b47->enter($__internal_698bbcadd30db7430cf50286b73090a3e8d65845ddd44e1cac3d440d60818b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_dd4c8e8c8ee9014675b75fdd60c4781924a24b83505c624741e8bfa86e2c879d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4c8e8c8ee9014675b75fdd60c4781924a24b83505c624741e8bfa86e2c879d->enter($__internal_dd4c8e8c8ee9014675b75fdd60c4781924a24b83505c624741e8bfa86e2c879d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_698bbcadd30db7430cf50286b73090a3e8d65845ddd44e1cac3d440d60818b47->leave($__internal_698bbcadd30db7430cf50286b73090a3e8d65845ddd44e1cac3d440d60818b47_prof);

        
        $__internal_dd4c8e8c8ee9014675b75fdd60c4781924a24b83505c624741e8bfa86e2c879d->leave($__internal_dd4c8e8c8ee9014675b75fdd60c4781924a24b83505c624741e8bfa86e2c879d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
