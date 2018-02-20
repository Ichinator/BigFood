<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9ef2a80b3469674e185482cab87e54ef5a4d997e97c4ea03caf28e667cc3a3da extends Twig_Template
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
        $__internal_73fbe8ffbb072d838d238fa6530564b182824262613e2ec5a67e4bad3c7ced48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73fbe8ffbb072d838d238fa6530564b182824262613e2ec5a67e4bad3c7ced48->enter($__internal_73fbe8ffbb072d838d238fa6530564b182824262613e2ec5a67e4bad3c7ced48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_f7ab09153ee09af646df8b94ee63d5bef67d943fef9e135b50a61ed273e2b7e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ab09153ee09af646df8b94ee63d5bef67d943fef9e135b50a61ed273e2b7e1->enter($__internal_f7ab09153ee09af646df8b94ee63d5bef67d943fef9e135b50a61ed273e2b7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_73fbe8ffbb072d838d238fa6530564b182824262613e2ec5a67e4bad3c7ced48->leave($__internal_73fbe8ffbb072d838d238fa6530564b182824262613e2ec5a67e4bad3c7ced48_prof);

        
        $__internal_f7ab09153ee09af646df8b94ee63d5bef67d943fef9e135b50a61ed273e2b7e1->leave($__internal_f7ab09153ee09af646df8b94ee63d5bef67d943fef9e135b50a61ed273e2b7e1_prof);

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
