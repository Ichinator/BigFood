<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_008b3054c071b14cac0acdf53c8f9687cc9233013162bc2a85095a098ad7e010 extends Twig_Template
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
        $__internal_a43d5aaaf62de7a20500b2cfdd20d158ec1f53bc1206bef12108d562804af568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a43d5aaaf62de7a20500b2cfdd20d158ec1f53bc1206bef12108d562804af568->enter($__internal_a43d5aaaf62de7a20500b2cfdd20d158ec1f53bc1206bef12108d562804af568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_64cbc0df30d3e27a352b50c44375667f115af51e47ca4e52bf459fc0d4e1032a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64cbc0df30d3e27a352b50c44375667f115af51e47ca4e52bf459fc0d4e1032a->enter($__internal_64cbc0df30d3e27a352b50c44375667f115af51e47ca4e52bf459fc0d4e1032a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_a43d5aaaf62de7a20500b2cfdd20d158ec1f53bc1206bef12108d562804af568->leave($__internal_a43d5aaaf62de7a20500b2cfdd20d158ec1f53bc1206bef12108d562804af568_prof);

        
        $__internal_64cbc0df30d3e27a352b50c44375667f115af51e47ca4e52bf459fc0d4e1032a->leave($__internal_64cbc0df30d3e27a352b50c44375667f115af51e47ca4e52bf459fc0d4e1032a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
