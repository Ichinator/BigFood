<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d0a9131c1065a2b0d6e5e4e52021e427eb1fdc1871a427d512b776c634f5903d extends Twig_Template
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
        $__internal_de21f6656512f4612092d2c3cd2c89f303b2235d51a943c7cb94ee8b773e8858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de21f6656512f4612092d2c3cd2c89f303b2235d51a943c7cb94ee8b773e8858->enter($__internal_de21f6656512f4612092d2c3cd2c89f303b2235d51a943c7cb94ee8b773e8858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_fa44f70d68576e859f1f85ced45f256bb9b144b27f1d073b26112ef729cd2f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa44f70d68576e859f1f85ced45f256bb9b144b27f1d073b26112ef729cd2f7a->enter($__internal_fa44f70d68576e859f1f85ced45f256bb9b144b27f1d073b26112ef729cd2f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_de21f6656512f4612092d2c3cd2c89f303b2235d51a943c7cb94ee8b773e8858->leave($__internal_de21f6656512f4612092d2c3cd2c89f303b2235d51a943c7cb94ee8b773e8858_prof);

        
        $__internal_fa44f70d68576e859f1f85ced45f256bb9b144b27f1d073b26112ef729cd2f7a->leave($__internal_fa44f70d68576e859f1f85ced45f256bb9b144b27f1d073b26112ef729cd2f7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
