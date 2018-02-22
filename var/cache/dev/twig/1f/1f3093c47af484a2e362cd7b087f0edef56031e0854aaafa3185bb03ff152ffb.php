<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_e4bf4ce9bc3ab23a148fab2c5bc48127044119771059c59e1e3f187fa786f141 extends Twig_Template
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
        $__internal_d9ec40c5eb55f8ddf155b20a9e8ef685afe00d96af904ea7790f4484cec0222a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ec40c5eb55f8ddf155b20a9e8ef685afe00d96af904ea7790f4484cec0222a->enter($__internal_d9ec40c5eb55f8ddf155b20a9e8ef685afe00d96af904ea7790f4484cec0222a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_2b2f9399a14c922e0407c3197ef328e68f06bf9c0badfaf73a840f9760f1e506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b2f9399a14c922e0407c3197ef328e68f06bf9c0badfaf73a840f9760f1e506->enter($__internal_2b2f9399a14c922e0407c3197ef328e68f06bf9c0badfaf73a840f9760f1e506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d9ec40c5eb55f8ddf155b20a9e8ef685afe00d96af904ea7790f4484cec0222a->leave($__internal_d9ec40c5eb55f8ddf155b20a9e8ef685afe00d96af904ea7790f4484cec0222a_prof);

        
        $__internal_2b2f9399a14c922e0407c3197ef328e68f06bf9c0badfaf73a840f9760f1e506->leave($__internal_2b2f9399a14c922e0407c3197ef328e68f06bf9c0badfaf73a840f9760f1e506_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
