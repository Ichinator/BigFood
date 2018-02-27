<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_d681c30b258442a2fa368ee8aac02b9fcb35d748363dbe586cdff9d7f4a5f3f9 extends Twig_Template
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
        $__internal_95ccf4881735aab7e68f5d1ccb1f5a01513b5524af9b4a5c96420b4620343d2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95ccf4881735aab7e68f5d1ccb1f5a01513b5524af9b4a5c96420b4620343d2c->enter($__internal_95ccf4881735aab7e68f5d1ccb1f5a01513b5524af9b4a5c96420b4620343d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_81f10c7ae3a9d2f248d039ea27f47d80e1e295eb6ef7b06a518b0d157d4ab021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f10c7ae3a9d2f248d039ea27f47d80e1e295eb6ef7b06a518b0d157d4ab021->enter($__internal_81f10c7ae3a9d2f248d039ea27f47d80e1e295eb6ef7b06a518b0d157d4ab021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_95ccf4881735aab7e68f5d1ccb1f5a01513b5524af9b4a5c96420b4620343d2c->leave($__internal_95ccf4881735aab7e68f5d1ccb1f5a01513b5524af9b4a5c96420b4620343d2c_prof);

        
        $__internal_81f10c7ae3a9d2f248d039ea27f47d80e1e295eb6ef7b06a518b0d157d4ab021->leave($__internal_81f10c7ae3a9d2f248d039ea27f47d80e1e295eb6ef7b06a518b0d157d4ab021_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
