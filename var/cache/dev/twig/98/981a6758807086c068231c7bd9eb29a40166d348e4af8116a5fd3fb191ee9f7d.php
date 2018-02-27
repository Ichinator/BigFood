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
        $__internal_b8f0600b0d631afd33df716b65b5c2fe4ed093166de3b8b2c4a4f742b2f0b10d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f0600b0d631afd33df716b65b5c2fe4ed093166de3b8b2c4a4f742b2f0b10d->enter($__internal_b8f0600b0d631afd33df716b65b5c2fe4ed093166de3b8b2c4a4f742b2f0b10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_db966ed2b48d750725b2892579281d011ba90cba82f755b4121b631ef77b453b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db966ed2b48d750725b2892579281d011ba90cba82f755b4121b631ef77b453b->enter($__internal_db966ed2b48d750725b2892579281d011ba90cba82f755b4121b631ef77b453b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_b8f0600b0d631afd33df716b65b5c2fe4ed093166de3b8b2c4a4f742b2f0b10d->leave($__internal_b8f0600b0d631afd33df716b65b5c2fe4ed093166de3b8b2c4a4f742b2f0b10d_prof);

        
        $__internal_db966ed2b48d750725b2892579281d011ba90cba82f755b4121b631ef77b453b->leave($__internal_db966ed2b48d750725b2892579281d011ba90cba82f755b4121b631ef77b453b_prof);

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
