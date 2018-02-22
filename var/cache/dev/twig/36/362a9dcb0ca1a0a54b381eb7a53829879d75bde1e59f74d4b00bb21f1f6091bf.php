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
        $__internal_243dc114790e35b204a54e5fe8cf06abb6bdfc5c7e08f6556f06f77c152c1478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_243dc114790e35b204a54e5fe8cf06abb6bdfc5c7e08f6556f06f77c152c1478->enter($__internal_243dc114790e35b204a54e5fe8cf06abb6bdfc5c7e08f6556f06f77c152c1478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_0c1aad77b6ba42d8763e836d32a3e1d25cee53ab0a246ff6dc90a4e9886574da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1aad77b6ba42d8763e836d32a3e1d25cee53ab0a246ff6dc90a4e9886574da->enter($__internal_0c1aad77b6ba42d8763e836d32a3e1d25cee53ab0a246ff6dc90a4e9886574da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_243dc114790e35b204a54e5fe8cf06abb6bdfc5c7e08f6556f06f77c152c1478->leave($__internal_243dc114790e35b204a54e5fe8cf06abb6bdfc5c7e08f6556f06f77c152c1478_prof);

        
        $__internal_0c1aad77b6ba42d8763e836d32a3e1d25cee53ab0a246ff6dc90a4e9886574da->leave($__internal_0c1aad77b6ba42d8763e836d32a3e1d25cee53ab0a246ff6dc90a4e9886574da_prof);

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
