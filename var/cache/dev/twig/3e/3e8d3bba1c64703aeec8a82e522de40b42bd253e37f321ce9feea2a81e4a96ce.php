<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_d695d7f939402b054d946c16ecbcda7cfa438217d570bcad858fb10b09647088 extends Twig_Template
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
        $__internal_96e0310e1ade57942567830e547809e889bb59e5bd8e3f784bf5cdbcdec30050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e0310e1ade57942567830e547809e889bb59e5bd8e3f784bf5cdbcdec30050->enter($__internal_96e0310e1ade57942567830e547809e889bb59e5bd8e3f784bf5cdbcdec30050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_da2e6f28b8cbe85e97b758d3451505437511fa17109459d0e00133fe844b4911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da2e6f28b8cbe85e97b758d3451505437511fa17109459d0e00133fe844b4911->enter($__internal_da2e6f28b8cbe85e97b758d3451505437511fa17109459d0e00133fe844b4911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_96e0310e1ade57942567830e547809e889bb59e5bd8e3f784bf5cdbcdec30050->leave($__internal_96e0310e1ade57942567830e547809e889bb59e5bd8e3f784bf5cdbcdec30050_prof);

        
        $__internal_da2e6f28b8cbe85e97b758d3451505437511fa17109459d0e00133fe844b4911->leave($__internal_da2e6f28b8cbe85e97b758d3451505437511fa17109459d0e00133fe844b4911_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
