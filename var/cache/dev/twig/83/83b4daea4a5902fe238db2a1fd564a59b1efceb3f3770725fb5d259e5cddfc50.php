<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_25bdfcf0119413ca9498ad95a105a77aee8ee604c536094237c17ae551c4d9a6 extends Twig_Template
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
        $__internal_562e8ead9bdc58b2c7c88a0325f701c5b1f18bc428bec2e3557080e0b2a9ab8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562e8ead9bdc58b2c7c88a0325f701c5b1f18bc428bec2e3557080e0b2a9ab8a->enter($__internal_562e8ead9bdc58b2c7c88a0325f701c5b1f18bc428bec2e3557080e0b2a9ab8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_1e89789f2eaf9afa11390dca6aeaf41b292e923408d69e102dce576d888af0a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e89789f2eaf9afa11390dca6aeaf41b292e923408d69e102dce576d888af0a7->enter($__internal_1e89789f2eaf9afa11390dca6aeaf41b292e923408d69e102dce576d888af0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_562e8ead9bdc58b2c7c88a0325f701c5b1f18bc428bec2e3557080e0b2a9ab8a->leave($__internal_562e8ead9bdc58b2c7c88a0325f701c5b1f18bc428bec2e3557080e0b2a9ab8a_prof);

        
        $__internal_1e89789f2eaf9afa11390dca6aeaf41b292e923408d69e102dce576d888af0a7->leave($__internal_1e89789f2eaf9afa11390dca6aeaf41b292e923408d69e102dce576d888af0a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
