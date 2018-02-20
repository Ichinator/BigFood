<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_046a2e01a90c99dbf2feba9438677207cf769c5ac8f21527c94e45f7bf9bc49f extends Twig_Template
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
        $__internal_97d13fcbf173c2bec2f7985f99d56a7732ca57f21a98a6649cbb0fde7d42dd76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97d13fcbf173c2bec2f7985f99d56a7732ca57f21a98a6649cbb0fde7d42dd76->enter($__internal_97d13fcbf173c2bec2f7985f99d56a7732ca57f21a98a6649cbb0fde7d42dd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_04c15fcd4a01ab019430cc637a4f45d1c24a83e176d2acf3ed4df1dba717b0f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c15fcd4a01ab019430cc637a4f45d1c24a83e176d2acf3ed4df1dba717b0f5->enter($__internal_04c15fcd4a01ab019430cc637a4f45d1c24a83e176d2acf3ed4df1dba717b0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_97d13fcbf173c2bec2f7985f99d56a7732ca57f21a98a6649cbb0fde7d42dd76->leave($__internal_97d13fcbf173c2bec2f7985f99d56a7732ca57f21a98a6649cbb0fde7d42dd76_prof);

        
        $__internal_04c15fcd4a01ab019430cc637a4f45d1c24a83e176d2acf3ed4df1dba717b0f5->leave($__internal_04c15fcd4a01ab019430cc637a4f45d1c24a83e176d2acf3ed4df1dba717b0f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
