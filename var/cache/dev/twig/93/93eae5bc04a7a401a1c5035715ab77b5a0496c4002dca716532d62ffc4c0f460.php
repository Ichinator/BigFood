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
        $__internal_3e3e85564820a5cf26ab2d59baf415e5eb5dbdb885fc5527ecc5a4c19bbea732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e3e85564820a5cf26ab2d59baf415e5eb5dbdb885fc5527ecc5a4c19bbea732->enter($__internal_3e3e85564820a5cf26ab2d59baf415e5eb5dbdb885fc5527ecc5a4c19bbea732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_2301955c0f84519023214332823445659ad2901a458bd89da62cd5df4aa446d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2301955c0f84519023214332823445659ad2901a458bd89da62cd5df4aa446d3->enter($__internal_2301955c0f84519023214332823445659ad2901a458bd89da62cd5df4aa446d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3e3e85564820a5cf26ab2d59baf415e5eb5dbdb885fc5527ecc5a4c19bbea732->leave($__internal_3e3e85564820a5cf26ab2d59baf415e5eb5dbdb885fc5527ecc5a4c19bbea732_prof);

        
        $__internal_2301955c0f84519023214332823445659ad2901a458bd89da62cd5df4aa446d3->leave($__internal_2301955c0f84519023214332823445659ad2901a458bd89da62cd5df4aa446d3_prof);

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
