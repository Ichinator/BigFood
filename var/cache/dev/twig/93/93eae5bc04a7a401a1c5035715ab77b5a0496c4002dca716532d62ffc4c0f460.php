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
        $__internal_f57aca746fde6fd2327514a594ceb2801ced0d7e582764435a8ea1b325a0a64d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f57aca746fde6fd2327514a594ceb2801ced0d7e582764435a8ea1b325a0a64d->enter($__internal_f57aca746fde6fd2327514a594ceb2801ced0d7e582764435a8ea1b325a0a64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_0b220db22dae22caaf1869dccd52c7b4d6ad1c366c7377ac3ee5529b844f8d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b220db22dae22caaf1869dccd52c7b4d6ad1c366c7377ac3ee5529b844f8d1a->enter($__internal_0b220db22dae22caaf1869dccd52c7b4d6ad1c366c7377ac3ee5529b844f8d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f57aca746fde6fd2327514a594ceb2801ced0d7e582764435a8ea1b325a0a64d->leave($__internal_f57aca746fde6fd2327514a594ceb2801ced0d7e582764435a8ea1b325a0a64d_prof);

        
        $__internal_0b220db22dae22caaf1869dccd52c7b4d6ad1c366c7377ac3ee5529b844f8d1a->leave($__internal_0b220db22dae22caaf1869dccd52c7b4d6ad1c366c7377ac3ee5529b844f8d1a_prof);

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
