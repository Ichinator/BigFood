<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7fa50b5f4a49a950431af2aba823739f323059f862b96592726f02c1d7669f56 extends Twig_Template
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
        $__internal_f4a6e30a2b94f59aff1873b19ed9ace56a242d048f5e9b8fc85368e002b227f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4a6e30a2b94f59aff1873b19ed9ace56a242d048f5e9b8fc85368e002b227f1->enter($__internal_f4a6e30a2b94f59aff1873b19ed9ace56a242d048f5e9b8fc85368e002b227f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_6d6dc6933caf6a88216fdbc4aecd5c2f0e4a5702561c78097f5b5e6259fddeff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6dc6933caf6a88216fdbc4aecd5c2f0e4a5702561c78097f5b5e6259fddeff->enter($__internal_6d6dc6933caf6a88216fdbc4aecd5c2f0e4a5702561c78097f5b5e6259fddeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f4a6e30a2b94f59aff1873b19ed9ace56a242d048f5e9b8fc85368e002b227f1->leave($__internal_f4a6e30a2b94f59aff1873b19ed9ace56a242d048f5e9b8fc85368e002b227f1_prof);

        
        $__internal_6d6dc6933caf6a88216fdbc4aecd5c2f0e4a5702561c78097f5b5e6259fddeff->leave($__internal_6d6dc6933caf6a88216fdbc4aecd5c2f0e4a5702561c78097f5b5e6259fddeff_prof);

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
