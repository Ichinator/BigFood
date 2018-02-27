<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_d695d7f939402b054d946c16ecbcda7cfa438217d570bcad858fb10b09647088 extends Twig_Template
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
        $__internal_092bb5d1d8600bdd86f76bdd9453b82008d4ce96cdca748a0f9260509081c16c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_092bb5d1d8600bdd86f76bdd9453b82008d4ce96cdca748a0f9260509081c16c->enter($__internal_092bb5d1d8600bdd86f76bdd9453b82008d4ce96cdca748a0f9260509081c16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_8f2e60f03fd31af9b09318fa2f283dcfffbab3efa9dcd21dbd2e5f91175d843c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2e60f03fd31af9b09318fa2f283dcfffbab3efa9dcd21dbd2e5f91175d843c->enter($__internal_8f2e60f03fd31af9b09318fa2f283dcfffbab3efa9dcd21dbd2e5f91175d843c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_092bb5d1d8600bdd86f76bdd9453b82008d4ce96cdca748a0f9260509081c16c->leave($__internal_092bb5d1d8600bdd86f76bdd9453b82008d4ce96cdca748a0f9260509081c16c_prof);

        
        $__internal_8f2e60f03fd31af9b09318fa2f283dcfffbab3efa9dcd21dbd2e5f91175d843c->leave($__internal_8f2e60f03fd31af9b09318fa2f283dcfffbab3efa9dcd21dbd2e5f91175d843c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
