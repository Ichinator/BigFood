<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a4709ab46706790cf17f27ea3544f2370022c4ae1421c58387ed410d547525b3 extends Twig_Template
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
        $__internal_5f3675e6366ea938d8ff0dac4213900c63e30c0edba3e6d2e1333ee631071b8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f3675e6366ea938d8ff0dac4213900c63e30c0edba3e6d2e1333ee631071b8c->enter($__internal_5f3675e6366ea938d8ff0dac4213900c63e30c0edba3e6d2e1333ee631071b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_e013000f153d4598bd529706aa1dddcce2f0e066e27c8d87e9b9ed8155925f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e013000f153d4598bd529706aa1dddcce2f0e066e27c8d87e9b9ed8155925f95->enter($__internal_e013000f153d4598bd529706aa1dddcce2f0e066e27c8d87e9b9ed8155925f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5f3675e6366ea938d8ff0dac4213900c63e30c0edba3e6d2e1333ee631071b8c->leave($__internal_5f3675e6366ea938d8ff0dac4213900c63e30c0edba3e6d2e1333ee631071b8c_prof);

        
        $__internal_e013000f153d4598bd529706aa1dddcce2f0e066e27c8d87e9b9ed8155925f95->leave($__internal_e013000f153d4598bd529706aa1dddcce2f0e066e27c8d87e9b9ed8155925f95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
