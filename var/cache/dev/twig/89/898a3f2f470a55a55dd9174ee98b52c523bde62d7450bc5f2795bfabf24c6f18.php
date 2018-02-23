<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c588c558cc2647c8fa9f427f0bccbbe9910d9c62c43f8f1e2cfad99ad9093a18 extends Twig_Template
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
        $__internal_6e2e90c33d43fa469e5789cb59b93e24725ba3ee96c75c1fe5a791582351795b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e2e90c33d43fa469e5789cb59b93e24725ba3ee96c75c1fe5a791582351795b->enter($__internal_6e2e90c33d43fa469e5789cb59b93e24725ba3ee96c75c1fe5a791582351795b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_c34cbb5ffbc1094c4e55b694e81c6ebdb464e9839e4bb6d2841162e94ea973eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34cbb5ffbc1094c4e55b694e81c6ebdb464e9839e4bb6d2841162e94ea973eb->enter($__internal_c34cbb5ffbc1094c4e55b694e81c6ebdb464e9839e4bb6d2841162e94ea973eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_6e2e90c33d43fa469e5789cb59b93e24725ba3ee96c75c1fe5a791582351795b->leave($__internal_6e2e90c33d43fa469e5789cb59b93e24725ba3ee96c75c1fe5a791582351795b_prof);

        
        $__internal_c34cbb5ffbc1094c4e55b694e81c6ebdb464e9839e4bb6d2841162e94ea973eb->leave($__internal_c34cbb5ffbc1094c4e55b694e81c6ebdb464e9839e4bb6d2841162e94ea973eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
