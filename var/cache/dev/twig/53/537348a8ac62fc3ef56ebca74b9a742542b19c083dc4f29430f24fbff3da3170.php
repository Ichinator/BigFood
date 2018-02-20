<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_20dc5b0de14a2c44b06cafd6fd5ab2c8f52223bc98d6f5f013381b16dacceb3f extends Twig_Template
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
        $__internal_138d0a166191e5e3848d4a4360652aeec67f932f65d202761f17adbdae8dfce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_138d0a166191e5e3848d4a4360652aeec67f932f65d202761f17adbdae8dfce9->enter($__internal_138d0a166191e5e3848d4a4360652aeec67f932f65d202761f17adbdae8dfce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d532df13b83935556be450f7355a9482591ae4d5b8b1380493190784211f5d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d532df13b83935556be450f7355a9482591ae4d5b8b1380493190784211f5d7c->enter($__internal_d532df13b83935556be450f7355a9482591ae4d5b8b1380493190784211f5d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_138d0a166191e5e3848d4a4360652aeec67f932f65d202761f17adbdae8dfce9->leave($__internal_138d0a166191e5e3848d4a4360652aeec67f932f65d202761f17adbdae8dfce9_prof);

        
        $__internal_d532df13b83935556be450f7355a9482591ae4d5b8b1380493190784211f5d7c->leave($__internal_d532df13b83935556be450f7355a9482591ae4d5b8b1380493190784211f5d7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
