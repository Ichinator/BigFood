<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_5611d7f8746cc34ec4e1f48dfcc072578be83ebcf516831c7c5273ac713c62cd extends Twig_Template
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
        $__internal_246c803d0638a2dcceabea288a9932d4bb7a125b23aaafa4a49d6d0652a7c6da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_246c803d0638a2dcceabea288a9932d4bb7a125b23aaafa4a49d6d0652a7c6da->enter($__internal_246c803d0638a2dcceabea288a9932d4bb7a125b23aaafa4a49d6d0652a7c6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_223907729898288744c84049245828a303ea2058f5a58e45634bdf9f0dc9f840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_223907729898288744c84049245828a303ea2058f5a58e45634bdf9f0dc9f840->enter($__internal_223907729898288744c84049245828a303ea2058f5a58e45634bdf9f0dc9f840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_246c803d0638a2dcceabea288a9932d4bb7a125b23aaafa4a49d6d0652a7c6da->leave($__internal_246c803d0638a2dcceabea288a9932d4bb7a125b23aaafa4a49d6d0652a7c6da_prof);

        
        $__internal_223907729898288744c84049245828a303ea2058f5a58e45634bdf9f0dc9f840->leave($__internal_223907729898288744c84049245828a303ea2058f5a58e45634bdf9f0dc9f840_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
