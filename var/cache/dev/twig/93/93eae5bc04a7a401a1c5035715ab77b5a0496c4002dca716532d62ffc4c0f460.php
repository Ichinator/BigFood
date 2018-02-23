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
        $__internal_47e533775e8db414cb2b531f34b395e9fd1a0365b6f0046f128ed50206f95bd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e533775e8db414cb2b531f34b395e9fd1a0365b6f0046f128ed50206f95bd8->enter($__internal_47e533775e8db414cb2b531f34b395e9fd1a0365b6f0046f128ed50206f95bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_5b9e8f777e6f03ac6e68e40d6d888a302908a6812a80a3ae0e6cfec510f1825a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9e8f777e6f03ac6e68e40d6d888a302908a6812a80a3ae0e6cfec510f1825a->enter($__internal_5b9e8f777e6f03ac6e68e40d6d888a302908a6812a80a3ae0e6cfec510f1825a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_47e533775e8db414cb2b531f34b395e9fd1a0365b6f0046f128ed50206f95bd8->leave($__internal_47e533775e8db414cb2b531f34b395e9fd1a0365b6f0046f128ed50206f95bd8_prof);

        
        $__internal_5b9e8f777e6f03ac6e68e40d6d888a302908a6812a80a3ae0e6cfec510f1825a->leave($__internal_5b9e8f777e6f03ac6e68e40d6d888a302908a6812a80a3ae0e6cfec510f1825a_prof);

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
