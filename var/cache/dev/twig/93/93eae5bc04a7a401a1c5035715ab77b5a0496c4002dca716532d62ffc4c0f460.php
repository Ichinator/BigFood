<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a4633d40d665ff9f47745de515a7b732447cc9c930832ddfd1948cc372401935 extends Twig_Template
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
        $__internal_93f0be5b36ad528a5ed9e2e21a814b4a6916a7d77330f4b1aa8bed25018fbd56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f0be5b36ad528a5ed9e2e21a814b4a6916a7d77330f4b1aa8bed25018fbd56->enter($__internal_93f0be5b36ad528a5ed9e2e21a814b4a6916a7d77330f4b1aa8bed25018fbd56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_f1d9dea16fb325984619196729de590f51284fcddf1365b0f8b2d109637dea18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d9dea16fb325984619196729de590f51284fcddf1365b0f8b2d109637dea18->enter($__internal_f1d9dea16fb325984619196729de590f51284fcddf1365b0f8b2d109637dea18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_93f0be5b36ad528a5ed9e2e21a814b4a6916a7d77330f4b1aa8bed25018fbd56->leave($__internal_93f0be5b36ad528a5ed9e2e21a814b4a6916a7d77330f4b1aa8bed25018fbd56_prof);

        
        $__internal_f1d9dea16fb325984619196729de590f51284fcddf1365b0f8b2d109637dea18->leave($__internal_f1d9dea16fb325984619196729de590f51284fcddf1365b0f8b2d109637dea18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
