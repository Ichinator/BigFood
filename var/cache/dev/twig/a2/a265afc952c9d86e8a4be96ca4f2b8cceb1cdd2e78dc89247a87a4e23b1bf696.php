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
        $__internal_91167b6c1677a2d78b002470756891471ecad9a00ea90053f9d72cf7b4cea5a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91167b6c1677a2d78b002470756891471ecad9a00ea90053f9d72cf7b4cea5a1->enter($__internal_91167b6c1677a2d78b002470756891471ecad9a00ea90053f9d72cf7b4cea5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_c4ec1238f1a0954aab03556ff7b3f7137994e6308f28aaab56fcd43b936c638a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ec1238f1a0954aab03556ff7b3f7137994e6308f28aaab56fcd43b936c638a->enter($__internal_c4ec1238f1a0954aab03556ff7b3f7137994e6308f28aaab56fcd43b936c638a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_91167b6c1677a2d78b002470756891471ecad9a00ea90053f9d72cf7b4cea5a1->leave($__internal_91167b6c1677a2d78b002470756891471ecad9a00ea90053f9d72cf7b4cea5a1_prof);

        
        $__internal_c4ec1238f1a0954aab03556ff7b3f7137994e6308f28aaab56fcd43b936c638a->leave($__internal_c4ec1238f1a0954aab03556ff7b3f7137994e6308f28aaab56fcd43b936c638a_prof);

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
