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
        $__internal_760012b416a10afac5fa7a6ee3e282bc10b884006bea4db1ed314a09f3bde48c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_760012b416a10afac5fa7a6ee3e282bc10b884006bea4db1ed314a09f3bde48c->enter($__internal_760012b416a10afac5fa7a6ee3e282bc10b884006bea4db1ed314a09f3bde48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_7b5d26d95f13fd37c57748f4801a6ee09393855f33006d338c61eedeb981f459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b5d26d95f13fd37c57748f4801a6ee09393855f33006d338c61eedeb981f459->enter($__internal_7b5d26d95f13fd37c57748f4801a6ee09393855f33006d338c61eedeb981f459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_760012b416a10afac5fa7a6ee3e282bc10b884006bea4db1ed314a09f3bde48c->leave($__internal_760012b416a10afac5fa7a6ee3e282bc10b884006bea4db1ed314a09f3bde48c_prof);

        
        $__internal_7b5d26d95f13fd37c57748f4801a6ee09393855f33006d338c61eedeb981f459->leave($__internal_7b5d26d95f13fd37c57748f4801a6ee09393855f33006d338c61eedeb981f459_prof);

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
