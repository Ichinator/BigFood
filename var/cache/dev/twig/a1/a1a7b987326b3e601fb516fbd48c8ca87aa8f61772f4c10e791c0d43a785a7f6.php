<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_deb4ab3829fb6845ca1f70589d253b78504a7cf1c921e0a5d96b794b6494eac4 extends Twig_Template
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
        $__internal_7ac15d440d15bf07a14e4e2d260f44568156f72eb1a9127573bb36c9c986db83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac15d440d15bf07a14e4e2d260f44568156f72eb1a9127573bb36c9c986db83->enter($__internal_7ac15d440d15bf07a14e4e2d260f44568156f72eb1a9127573bb36c9c986db83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_7f6104ae838b96a898754d84d60252fcfe59f287889801beaae25c6df16e13b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6104ae838b96a898754d84d60252fcfe59f287889801beaae25c6df16e13b6->enter($__internal_7f6104ae838b96a898754d84d60252fcfe59f287889801beaae25c6df16e13b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7ac15d440d15bf07a14e4e2d260f44568156f72eb1a9127573bb36c9c986db83->leave($__internal_7ac15d440d15bf07a14e4e2d260f44568156f72eb1a9127573bb36c9c986db83_prof);

        
        $__internal_7f6104ae838b96a898754d84d60252fcfe59f287889801beaae25c6df16e13b6->leave($__internal_7f6104ae838b96a898754d84d60252fcfe59f287889801beaae25c6df16e13b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
