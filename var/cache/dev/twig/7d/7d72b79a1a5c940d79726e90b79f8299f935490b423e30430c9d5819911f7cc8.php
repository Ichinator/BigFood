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
        $__internal_48ddcad0ac844ce7c7783723eb140552ef30d777f55f47d95e51f95232d6e819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ddcad0ac844ce7c7783723eb140552ef30d777f55f47d95e51f95232d6e819->enter($__internal_48ddcad0ac844ce7c7783723eb140552ef30d777f55f47d95e51f95232d6e819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_59b9f913ade9e6569d0d1103df4cbc95456f8dbb33eb71539801ace0f54ac219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b9f913ade9e6569d0d1103df4cbc95456f8dbb33eb71539801ace0f54ac219->enter($__internal_59b9f913ade9e6569d0d1103df4cbc95456f8dbb33eb71539801ace0f54ac219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_48ddcad0ac844ce7c7783723eb140552ef30d777f55f47d95e51f95232d6e819->leave($__internal_48ddcad0ac844ce7c7783723eb140552ef30d777f55f47d95e51f95232d6e819_prof);

        
        $__internal_59b9f913ade9e6569d0d1103df4cbc95456f8dbb33eb71539801ace0f54ac219->leave($__internal_59b9f913ade9e6569d0d1103df4cbc95456f8dbb33eb71539801ace0f54ac219_prof);

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
