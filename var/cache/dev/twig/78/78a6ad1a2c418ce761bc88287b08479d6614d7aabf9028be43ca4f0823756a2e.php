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
        $__internal_052ece99c851ecc5aedc41e1c72b2d892bd421315536c1a0bc08e5b664c17bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_052ece99c851ecc5aedc41e1c72b2d892bd421315536c1a0bc08e5b664c17bca->enter($__internal_052ece99c851ecc5aedc41e1c72b2d892bd421315536c1a0bc08e5b664c17bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_3c1c94616b47c5fb47065874648ab59b9b4969f812e6183ed5342256b88efa8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c1c94616b47c5fb47065874648ab59b9b4969f812e6183ed5342256b88efa8a->enter($__internal_3c1c94616b47c5fb47065874648ab59b9b4969f812e6183ed5342256b88efa8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_052ece99c851ecc5aedc41e1c72b2d892bd421315536c1a0bc08e5b664c17bca->leave($__internal_052ece99c851ecc5aedc41e1c72b2d892bd421315536c1a0bc08e5b664c17bca_prof);

        
        $__internal_3c1c94616b47c5fb47065874648ab59b9b4969f812e6183ed5342256b88efa8a->leave($__internal_3c1c94616b47c5fb47065874648ab59b9b4969f812e6183ed5342256b88efa8a_prof);

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
