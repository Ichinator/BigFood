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
        $__internal_a2ea595f7dd9d66234873cdd8d851eb813d27ee0e56882a8cb6a1fdc7d6dcb48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ea595f7dd9d66234873cdd8d851eb813d27ee0e56882a8cb6a1fdc7d6dcb48->enter($__internal_a2ea595f7dd9d66234873cdd8d851eb813d27ee0e56882a8cb6a1fdc7d6dcb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_95a41c66d8f4445c4cdc5e02ba80639da8ed8c106d135e09ab24a0eb292ed25b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a41c66d8f4445c4cdc5e02ba80639da8ed8c106d135e09ab24a0eb292ed25b->enter($__internal_95a41c66d8f4445c4cdc5e02ba80639da8ed8c106d135e09ab24a0eb292ed25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a2ea595f7dd9d66234873cdd8d851eb813d27ee0e56882a8cb6a1fdc7d6dcb48->leave($__internal_a2ea595f7dd9d66234873cdd8d851eb813d27ee0e56882a8cb6a1fdc7d6dcb48_prof);

        
        $__internal_95a41c66d8f4445c4cdc5e02ba80639da8ed8c106d135e09ab24a0eb292ed25b->leave($__internal_95a41c66d8f4445c4cdc5e02ba80639da8ed8c106d135e09ab24a0eb292ed25b_prof);

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
