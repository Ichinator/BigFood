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
        $__internal_6ce85631b3baad1fd63cbf0e515f2d3f72c580634ac9f8222a94e82cd8e0e8d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce85631b3baad1fd63cbf0e515f2d3f72c580634ac9f8222a94e82cd8e0e8d5->enter($__internal_6ce85631b3baad1fd63cbf0e515f2d3f72c580634ac9f8222a94e82cd8e0e8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_ec89b035519d0fe2702e256894244a07060173bd8970aeecd8221b831d48d2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec89b035519d0fe2702e256894244a07060173bd8970aeecd8221b831d48d2c5->enter($__internal_ec89b035519d0fe2702e256894244a07060173bd8970aeecd8221b831d48d2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_6ce85631b3baad1fd63cbf0e515f2d3f72c580634ac9f8222a94e82cd8e0e8d5->leave($__internal_6ce85631b3baad1fd63cbf0e515f2d3f72c580634ac9f8222a94e82cd8e0e8d5_prof);

        
        $__internal_ec89b035519d0fe2702e256894244a07060173bd8970aeecd8221b831d48d2c5->leave($__internal_ec89b035519d0fe2702e256894244a07060173bd8970aeecd8221b831d48d2c5_prof);

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
