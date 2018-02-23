<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_597a2b0b3be11d1574b3f30ab2efda607e6faa6190497bba8c6ab0f56ebd2b03 extends Twig_Template
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
        $__internal_14b4963f8022e1b3dceee1bacc056fbfea29045dc49a0efa5bab185a2bf6f343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14b4963f8022e1b3dceee1bacc056fbfea29045dc49a0efa5bab185a2bf6f343->enter($__internal_14b4963f8022e1b3dceee1bacc056fbfea29045dc49a0efa5bab185a2bf6f343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_3c511be00a3cf17ca3e0e63a9cbe9f946f5b69cec2ae3edb6fac3db5b9eeccb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c511be00a3cf17ca3e0e63a9cbe9f946f5b69cec2ae3edb6fac3db5b9eeccb8->enter($__internal_3c511be00a3cf17ca3e0e63a9cbe9f946f5b69cec2ae3edb6fac3db5b9eeccb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_14b4963f8022e1b3dceee1bacc056fbfea29045dc49a0efa5bab185a2bf6f343->leave($__internal_14b4963f8022e1b3dceee1bacc056fbfea29045dc49a0efa5bab185a2bf6f343_prof);

        
        $__internal_3c511be00a3cf17ca3e0e63a9cbe9f946f5b69cec2ae3edb6fac3db5b9eeccb8->leave($__internal_3c511be00a3cf17ca3e0e63a9cbe9f946f5b69cec2ae3edb6fac3db5b9eeccb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
