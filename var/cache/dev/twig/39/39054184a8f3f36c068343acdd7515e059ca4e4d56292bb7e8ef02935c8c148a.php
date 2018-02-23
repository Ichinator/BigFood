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
        $__internal_cfd63a25cea720d9e2812e5814b3da2842a460196d9e8a81514fb1576f6d21c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd63a25cea720d9e2812e5814b3da2842a460196d9e8a81514fb1576f6d21c4->enter($__internal_cfd63a25cea720d9e2812e5814b3da2842a460196d9e8a81514fb1576f6d21c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f48cac45fba055e13dace71ecebaa08130a8685e1539ade8483841cdaa29df99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48cac45fba055e13dace71ecebaa08130a8685e1539ade8483841cdaa29df99->enter($__internal_f48cac45fba055e13dace71ecebaa08130a8685e1539ade8483841cdaa29df99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_cfd63a25cea720d9e2812e5814b3da2842a460196d9e8a81514fb1576f6d21c4->leave($__internal_cfd63a25cea720d9e2812e5814b3da2842a460196d9e8a81514fb1576f6d21c4_prof);

        
        $__internal_f48cac45fba055e13dace71ecebaa08130a8685e1539ade8483841cdaa29df99->leave($__internal_f48cac45fba055e13dace71ecebaa08130a8685e1539ade8483841cdaa29df99_prof);

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
