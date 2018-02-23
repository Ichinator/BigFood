<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_7285114d30a5ca034db136a0a535c5de339b09b7773656d2a6efe50acb9d4247 extends Twig_Template
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
        $__internal_8ba4322e97bd8fd2d47cf9c44cda773d8c0adf8dd73d3d06865d53d24f5cc974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ba4322e97bd8fd2d47cf9c44cda773d8c0adf8dd73d3d06865d53d24f5cc974->enter($__internal_8ba4322e97bd8fd2d47cf9c44cda773d8c0adf8dd73d3d06865d53d24f5cc974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_c2b0153891650a336ab602e05c03e14ad231353f65ed085160f1d2c3ae214071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b0153891650a336ab602e05c03e14ad231353f65ed085160f1d2c3ae214071->enter($__internal_c2b0153891650a336ab602e05c03e14ad231353f65ed085160f1d2c3ae214071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_8ba4322e97bd8fd2d47cf9c44cda773d8c0adf8dd73d3d06865d53d24f5cc974->leave($__internal_8ba4322e97bd8fd2d47cf9c44cda773d8c0adf8dd73d3d06865d53d24f5cc974_prof);

        
        $__internal_c2b0153891650a336ab602e05c03e14ad231353f65ed085160f1d2c3ae214071->leave($__internal_c2b0153891650a336ab602e05c03e14ad231353f65ed085160f1d2c3ae214071_prof);

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
