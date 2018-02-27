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
        $__internal_42c398dbf0ee8e8c0a66688b62c6ea26e87f508e625250872bfcccb27c4c017e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42c398dbf0ee8e8c0a66688b62c6ea26e87f508e625250872bfcccb27c4c017e->enter($__internal_42c398dbf0ee8e8c0a66688b62c6ea26e87f508e625250872bfcccb27c4c017e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_f188b234056d74365ac1659d45a2125ca8fa0da6eb60f1306527c3bcbdb74b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f188b234056d74365ac1659d45a2125ca8fa0da6eb60f1306527c3bcbdb74b6d->enter($__internal_f188b234056d74365ac1659d45a2125ca8fa0da6eb60f1306527c3bcbdb74b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_42c398dbf0ee8e8c0a66688b62c6ea26e87f508e625250872bfcccb27c4c017e->leave($__internal_42c398dbf0ee8e8c0a66688b62c6ea26e87f508e625250872bfcccb27c4c017e_prof);

        
        $__internal_f188b234056d74365ac1659d45a2125ca8fa0da6eb60f1306527c3bcbdb74b6d->leave($__internal_f188b234056d74365ac1659d45a2125ca8fa0da6eb60f1306527c3bcbdb74b6d_prof);

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
