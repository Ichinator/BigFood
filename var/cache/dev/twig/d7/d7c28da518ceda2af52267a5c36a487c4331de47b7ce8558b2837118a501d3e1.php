<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_35f51fa4eb091e2f77ed951579e6e42efe08dc90dc3fd0c8b77e1b08f9fe22fd extends Twig_Template
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
        $__internal_fef088e9ce9a0ce34a8c6adf199aa3382cfe38cca13418b32be467e9f02758f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fef088e9ce9a0ce34a8c6adf199aa3382cfe38cca13418b32be467e9f02758f0->enter($__internal_fef088e9ce9a0ce34a8c6adf199aa3382cfe38cca13418b32be467e9f02758f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_10fc91ee893cbaf6beb4d5b42add5ae98c9c2329aeea1107986cb9492fba1066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10fc91ee893cbaf6beb4d5b42add5ae98c9c2329aeea1107986cb9492fba1066->enter($__internal_10fc91ee893cbaf6beb4d5b42add5ae98c9c2329aeea1107986cb9492fba1066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_fef088e9ce9a0ce34a8c6adf199aa3382cfe38cca13418b32be467e9f02758f0->leave($__internal_fef088e9ce9a0ce34a8c6adf199aa3382cfe38cca13418b32be467e9f02758f0_prof);

        
        $__internal_10fc91ee893cbaf6beb4d5b42add5ae98c9c2329aeea1107986cb9492fba1066->leave($__internal_10fc91ee893cbaf6beb4d5b42add5ae98c9c2329aeea1107986cb9492fba1066_prof);

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
