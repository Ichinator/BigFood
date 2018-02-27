<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_227128a408ae318382fec02564ee02087d68170a6156544bd8fd1817750595a8 extends Twig_Template
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
        $__internal_07b99b657df677e7ca458c7011f8bed54e4f06592f29a158787a7d5cf798ebd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07b99b657df677e7ca458c7011f8bed54e4f06592f29a158787a7d5cf798ebd8->enter($__internal_07b99b657df677e7ca458c7011f8bed54e4f06592f29a158787a7d5cf798ebd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_ee62d11295ca59ae5c7b82f3f170ab12a1f97ed9092b118622d9891158f5a2a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee62d11295ca59ae5c7b82f3f170ab12a1f97ed9092b118622d9891158f5a2a8->enter($__internal_ee62d11295ca59ae5c7b82f3f170ab12a1f97ed9092b118622d9891158f5a2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_07b99b657df677e7ca458c7011f8bed54e4f06592f29a158787a7d5cf798ebd8->leave($__internal_07b99b657df677e7ca458c7011f8bed54e4f06592f29a158787a7d5cf798ebd8_prof);

        
        $__internal_ee62d11295ca59ae5c7b82f3f170ab12a1f97ed9092b118622d9891158f5a2a8->leave($__internal_ee62d11295ca59ae5c7b82f3f170ab12a1f97ed9092b118622d9891158f5a2a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
