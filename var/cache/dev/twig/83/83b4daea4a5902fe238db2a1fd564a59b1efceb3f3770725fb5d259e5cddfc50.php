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
        $__internal_7dbde52d79c329498d4d62d0f41e6f24ea7d4b79fe0ae8200a235efca3efe729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dbde52d79c329498d4d62d0f41e6f24ea7d4b79fe0ae8200a235efca3efe729->enter($__internal_7dbde52d79c329498d4d62d0f41e6f24ea7d4b79fe0ae8200a235efca3efe729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_15fbd9cb12752f10d8633b596e0f3c3d459b2cd139a843095a015b821491bc43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15fbd9cb12752f10d8633b596e0f3c3d459b2cd139a843095a015b821491bc43->enter($__internal_15fbd9cb12752f10d8633b596e0f3c3d459b2cd139a843095a015b821491bc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_7dbde52d79c329498d4d62d0f41e6f24ea7d4b79fe0ae8200a235efca3efe729->leave($__internal_7dbde52d79c329498d4d62d0f41e6f24ea7d4b79fe0ae8200a235efca3efe729_prof);

        
        $__internal_15fbd9cb12752f10d8633b596e0f3c3d459b2cd139a843095a015b821491bc43->leave($__internal_15fbd9cb12752f10d8633b596e0f3c3d459b2cd139a843095a015b821491bc43_prof);

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
