<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_62da5b79f1e2ec9f18b45297876e76a33acd471379ce2c5d18e5eb2da21cecdc extends Twig_Template
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
        $__internal_14200b6f79d1c9b10a54572658f93517dcafc7317b45b5b0577f8c0bd188fab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14200b6f79d1c9b10a54572658f93517dcafc7317b45b5b0577f8c0bd188fab1->enter($__internal_14200b6f79d1c9b10a54572658f93517dcafc7317b45b5b0577f8c0bd188fab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_a4fd247a31ac0ced67a39bdbf7670ee5d4bd73ca89de94e025e6e04ade6a1408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4fd247a31ac0ced67a39bdbf7670ee5d4bd73ca89de94e025e6e04ade6a1408->enter($__internal_a4fd247a31ac0ced67a39bdbf7670ee5d4bd73ca89de94e025e6e04ade6a1408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_14200b6f79d1c9b10a54572658f93517dcafc7317b45b5b0577f8c0bd188fab1->leave($__internal_14200b6f79d1c9b10a54572658f93517dcafc7317b45b5b0577f8c0bd188fab1_prof);

        
        $__internal_a4fd247a31ac0ced67a39bdbf7670ee5d4bd73ca89de94e025e6e04ade6a1408->leave($__internal_a4fd247a31ac0ced67a39bdbf7670ee5d4bd73ca89de94e025e6e04ade6a1408_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
