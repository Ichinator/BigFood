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
        $__internal_f05bc187ab2bf069a1ac6335d0251f52f0311d7d8cb24d2f2df2225befeab09a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f05bc187ab2bf069a1ac6335d0251f52f0311d7d8cb24d2f2df2225befeab09a->enter($__internal_f05bc187ab2bf069a1ac6335d0251f52f0311d7d8cb24d2f2df2225befeab09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_1417113d09387785410bfe0d38190ba7b6b5e088a6dcaa24ca32817bcf777c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1417113d09387785410bfe0d38190ba7b6b5e088a6dcaa24ca32817bcf777c2e->enter($__internal_1417113d09387785410bfe0d38190ba7b6b5e088a6dcaa24ca32817bcf777c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f05bc187ab2bf069a1ac6335d0251f52f0311d7d8cb24d2f2df2225befeab09a->leave($__internal_f05bc187ab2bf069a1ac6335d0251f52f0311d7d8cb24d2f2df2225befeab09a_prof);

        
        $__internal_1417113d09387785410bfe0d38190ba7b6b5e088a6dcaa24ca32817bcf777c2e->leave($__internal_1417113d09387785410bfe0d38190ba7b6b5e088a6dcaa24ca32817bcf777c2e_prof);

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
