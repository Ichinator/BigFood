<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_7285114d30a5ca034db136a0a535c5de339b09b7773656d2a6efe50acb9d4247 extends Twig_Template
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
        $__internal_1d32009e3c897235bd11503449b27f86a435d94fc98eddc46ad74ff4215fb752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d32009e3c897235bd11503449b27f86a435d94fc98eddc46ad74ff4215fb752->enter($__internal_1d32009e3c897235bd11503449b27f86a435d94fc98eddc46ad74ff4215fb752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_aa7c1abc6086363b20c2b8deaa334f7f547c0fa8f55f525caf9cb0b1450e6992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7c1abc6086363b20c2b8deaa334f7f547c0fa8f55f525caf9cb0b1450e6992->enter($__internal_aa7c1abc6086363b20c2b8deaa334f7f547c0fa8f55f525caf9cb0b1450e6992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_1d32009e3c897235bd11503449b27f86a435d94fc98eddc46ad74ff4215fb752->leave($__internal_1d32009e3c897235bd11503449b27f86a435d94fc98eddc46ad74ff4215fb752_prof);

        
        $__internal_aa7c1abc6086363b20c2b8deaa334f7f547c0fa8f55f525caf9cb0b1450e6992->leave($__internal_aa7c1abc6086363b20c2b8deaa334f7f547c0fa8f55f525caf9cb0b1450e6992_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
