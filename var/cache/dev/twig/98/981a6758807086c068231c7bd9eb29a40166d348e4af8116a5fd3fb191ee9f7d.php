<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_309738d5dca31281c4c74fa79823b3c674c0123eea445d2cc7e158a954e97b6e extends Twig_Template
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
        $__internal_140ae8514ad2399645bc2ccb129f548d2011f7d5da3cc9b16e1a04380a20ad86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_140ae8514ad2399645bc2ccb129f548d2011f7d5da3cc9b16e1a04380a20ad86->enter($__internal_140ae8514ad2399645bc2ccb129f548d2011f7d5da3cc9b16e1a04380a20ad86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_6877e65c34a6088676024894408a70b98f21fe742f829aeb14ff57325c206ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6877e65c34a6088676024894408a70b98f21fe742f829aeb14ff57325c206ac5->enter($__internal_6877e65c34a6088676024894408a70b98f21fe742f829aeb14ff57325c206ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_140ae8514ad2399645bc2ccb129f548d2011f7d5da3cc9b16e1a04380a20ad86->leave($__internal_140ae8514ad2399645bc2ccb129f548d2011f7d5da3cc9b16e1a04380a20ad86_prof);

        
        $__internal_6877e65c34a6088676024894408a70b98f21fe742f829aeb14ff57325c206ac5->leave($__internal_6877e65c34a6088676024894408a70b98f21fe742f829aeb14ff57325c206ac5_prof);

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
