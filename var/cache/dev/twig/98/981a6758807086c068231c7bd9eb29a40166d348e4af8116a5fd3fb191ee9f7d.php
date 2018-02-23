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
        $__internal_6289fb08d7203bd516ca05582186993b3315b682856d89e317cecf4610835e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6289fb08d7203bd516ca05582186993b3315b682856d89e317cecf4610835e4c->enter($__internal_6289fb08d7203bd516ca05582186993b3315b682856d89e317cecf4610835e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_a090495d43fa29f0f7b82f4b02487b3f327909df19119db7ddcc0cc0bac8b54e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a090495d43fa29f0f7b82f4b02487b3f327909df19119db7ddcc0cc0bac8b54e->enter($__internal_a090495d43fa29f0f7b82f4b02487b3f327909df19119db7ddcc0cc0bac8b54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_6289fb08d7203bd516ca05582186993b3315b682856d89e317cecf4610835e4c->leave($__internal_6289fb08d7203bd516ca05582186993b3315b682856d89e317cecf4610835e4c_prof);

        
        $__internal_a090495d43fa29f0f7b82f4b02487b3f327909df19119db7ddcc0cc0bac8b54e->leave($__internal_a090495d43fa29f0f7b82f4b02487b3f327909df19119db7ddcc0cc0bac8b54e_prof);

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
