<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_1b7a01ba69cbce90d13e8b6485bed17df67b102acb9b466f8d82667399d635a9 extends Twig_Template
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
        $__internal_8c953b523f527c453a764f84e132fecd27550562218ac19bf7ec8d49ffc2a4e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c953b523f527c453a764f84e132fecd27550562218ac19bf7ec8d49ffc2a4e0->enter($__internal_8c953b523f527c453a764f84e132fecd27550562218ac19bf7ec8d49ffc2a4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_77605d57fd0e0842b0f0e9158cd343f9cd9315fb5cf2140c812f4ef80f006566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77605d57fd0e0842b0f0e9158cd343f9cd9315fb5cf2140c812f4ef80f006566->enter($__internal_77605d57fd0e0842b0f0e9158cd343f9cd9315fb5cf2140c812f4ef80f006566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_8c953b523f527c453a764f84e132fecd27550562218ac19bf7ec8d49ffc2a4e0->leave($__internal_8c953b523f527c453a764f84e132fecd27550562218ac19bf7ec8d49ffc2a4e0_prof);

        
        $__internal_77605d57fd0e0842b0f0e9158cd343f9cd9315fb5cf2140c812f4ef80f006566->leave($__internal_77605d57fd0e0842b0f0e9158cd343f9cd9315fb5cf2140c812f4ef80f006566_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
