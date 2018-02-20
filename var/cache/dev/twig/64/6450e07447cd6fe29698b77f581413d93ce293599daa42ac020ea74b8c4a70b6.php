<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_db3922abd59b978d08e5b639cd658fd24f00c62cf0d018a3ed65fed47388acf2 extends Twig_Template
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
        $__internal_0c15e84eefc2d9a44aa8e5d2902f5c31d7c54a3698415f3a560f1491ccd937a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c15e84eefc2d9a44aa8e5d2902f5c31d7c54a3698415f3a560f1491ccd937a3->enter($__internal_0c15e84eefc2d9a44aa8e5d2902f5c31d7c54a3698415f3a560f1491ccd937a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_c208002c6ef647ccd631673843699376399af23f4a6875d8efe3964e52add9b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c208002c6ef647ccd631673843699376399af23f4a6875d8efe3964e52add9b5->enter($__internal_c208002c6ef647ccd631673843699376399af23f4a6875d8efe3964e52add9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_0c15e84eefc2d9a44aa8e5d2902f5c31d7c54a3698415f3a560f1491ccd937a3->leave($__internal_0c15e84eefc2d9a44aa8e5d2902f5c31d7c54a3698415f3a560f1491ccd937a3_prof);

        
        $__internal_c208002c6ef647ccd631673843699376399af23f4a6875d8efe3964e52add9b5->leave($__internal_c208002c6ef647ccd631673843699376399af23f4a6875d8efe3964e52add9b5_prof);

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
