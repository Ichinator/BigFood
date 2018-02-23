<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_719b8937309116414dfc1e18764299e886c7f27f2df69c23e97370f0c2a9d46a extends Twig_Template
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
        $__internal_051a0c7dbef6b5b56f9472e542ebab8e5b8c4d3f55f7c1e34c0f6cd17346537c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051a0c7dbef6b5b56f9472e542ebab8e5b8c4d3f55f7c1e34c0f6cd17346537c->enter($__internal_051a0c7dbef6b5b56f9472e542ebab8e5b8c4d3f55f7c1e34c0f6cd17346537c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_2ccc669ec64f5c250399c6acf589d9259fffdaf926c3538fc48f73ff4d9c7e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ccc669ec64f5c250399c6acf589d9259fffdaf926c3538fc48f73ff4d9c7e1a->enter($__internal_2ccc669ec64f5c250399c6acf589d9259fffdaf926c3538fc48f73ff4d9c7e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_051a0c7dbef6b5b56f9472e542ebab8e5b8c4d3f55f7c1e34c0f6cd17346537c->leave($__internal_051a0c7dbef6b5b56f9472e542ebab8e5b8c4d3f55f7c1e34c0f6cd17346537c_prof);

        
        $__internal_2ccc669ec64f5c250399c6acf589d9259fffdaf926c3538fc48f73ff4d9c7e1a->leave($__internal_2ccc669ec64f5c250399c6acf589d9259fffdaf926c3538fc48f73ff4d9c7e1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
