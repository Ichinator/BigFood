<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_25bdfcf0119413ca9498ad95a105a77aee8ee604c536094237c17ae551c4d9a6 extends Twig_Template
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
        $__internal_6d6a2b1e14ca94ed7d3b9ea493df7c32068a395e0d5b2c533157a326d3fc1b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d6a2b1e14ca94ed7d3b9ea493df7c32068a395e0d5b2c533157a326d3fc1b52->enter($__internal_6d6a2b1e14ca94ed7d3b9ea493df7c32068a395e0d5b2c533157a326d3fc1b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_757bc83e4a84fa1a77a886cea1be0b9663252bac47f968562cce81b1190469b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757bc83e4a84fa1a77a886cea1be0b9663252bac47f968562cce81b1190469b5->enter($__internal_757bc83e4a84fa1a77a886cea1be0b9663252bac47f968562cce81b1190469b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_6d6a2b1e14ca94ed7d3b9ea493df7c32068a395e0d5b2c533157a326d3fc1b52->leave($__internal_6d6a2b1e14ca94ed7d3b9ea493df7c32068a395e0d5b2c533157a326d3fc1b52_prof);

        
        $__internal_757bc83e4a84fa1a77a886cea1be0b9663252bac47f968562cce81b1190469b5->leave($__internal_757bc83e4a84fa1a77a886cea1be0b9663252bac47f968562cce81b1190469b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
