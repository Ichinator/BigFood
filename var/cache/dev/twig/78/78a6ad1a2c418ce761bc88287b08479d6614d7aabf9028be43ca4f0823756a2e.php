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
        $__internal_e1537cff5b8fd6acf8608cdc8fb573ead362557cdf0cb44fe5f8cc4fac783076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1537cff5b8fd6acf8608cdc8fb573ead362557cdf0cb44fe5f8cc4fac783076->enter($__internal_e1537cff5b8fd6acf8608cdc8fb573ead362557cdf0cb44fe5f8cc4fac783076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_146bab6ddf1f32f8f49e0e4a4909aaf18ac5b2723a80497aafc00ca43225ea7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146bab6ddf1f32f8f49e0e4a4909aaf18ac5b2723a80497aafc00ca43225ea7e->enter($__internal_146bab6ddf1f32f8f49e0e4a4909aaf18ac5b2723a80497aafc00ca43225ea7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_e1537cff5b8fd6acf8608cdc8fb573ead362557cdf0cb44fe5f8cc4fac783076->leave($__internal_e1537cff5b8fd6acf8608cdc8fb573ead362557cdf0cb44fe5f8cc4fac783076_prof);

        
        $__internal_146bab6ddf1f32f8f49e0e4a4909aaf18ac5b2723a80497aafc00ca43225ea7e->leave($__internal_146bab6ddf1f32f8f49e0e4a4909aaf18ac5b2723a80497aafc00ca43225ea7e_prof);

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
