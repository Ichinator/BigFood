<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_e70d822dc438b45e032d8f0574f93b19c4998b40c6de7810f192d8899e683b63 extends Twig_Template
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
        $__internal_7cf6fa9fbde91f3eb994bed9fef2377a9f7e225512679af845e98927f0058ea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cf6fa9fbde91f3eb994bed9fef2377a9f7e225512679af845e98927f0058ea1->enter($__internal_7cf6fa9fbde91f3eb994bed9fef2377a9f7e225512679af845e98927f0058ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_695bc6a2ddc4904c91ac6952f9d5d13973a782189dc272660be917f658a43bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695bc6a2ddc4904c91ac6952f9d5d13973a782189dc272660be917f658a43bba->enter($__internal_695bc6a2ddc4904c91ac6952f9d5d13973a782189dc272660be917f658a43bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_7cf6fa9fbde91f3eb994bed9fef2377a9f7e225512679af845e98927f0058ea1->leave($__internal_7cf6fa9fbde91f3eb994bed9fef2377a9f7e225512679af845e98927f0058ea1_prof);

        
        $__internal_695bc6a2ddc4904c91ac6952f9d5d13973a782189dc272660be917f658a43bba->leave($__internal_695bc6a2ddc4904c91ac6952f9d5d13973a782189dc272660be917f658a43bba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
