<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e49ec750850e70e4ce3fac7a4d5589de307e501e73e03d1fdfa3b1ab0a7584e6 extends Twig_Template
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
        $__internal_98f7082f9db3b4246daba3900c0c100184e06b6dd29ebef75bf1484f91e51201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98f7082f9db3b4246daba3900c0c100184e06b6dd29ebef75bf1484f91e51201->enter($__internal_98f7082f9db3b4246daba3900c0c100184e06b6dd29ebef75bf1484f91e51201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_e087aebc5bc5164d24b39b8bb829d3663347cb243cc4c18eb6f8840e2384f133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e087aebc5bc5164d24b39b8bb829d3663347cb243cc4c18eb6f8840e2384f133->enter($__internal_e087aebc5bc5164d24b39b8bb829d3663347cb243cc4c18eb6f8840e2384f133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_98f7082f9db3b4246daba3900c0c100184e06b6dd29ebef75bf1484f91e51201->leave($__internal_98f7082f9db3b4246daba3900c0c100184e06b6dd29ebef75bf1484f91e51201_prof);

        
        $__internal_e087aebc5bc5164d24b39b8bb829d3663347cb243cc4c18eb6f8840e2384f133->leave($__internal_e087aebc5bc5164d24b39b8bb829d3663347cb243cc4c18eb6f8840e2384f133_prof);

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
