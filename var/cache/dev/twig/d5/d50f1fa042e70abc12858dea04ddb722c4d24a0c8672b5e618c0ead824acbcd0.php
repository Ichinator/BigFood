<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_227128a408ae318382fec02564ee02087d68170a6156544bd8fd1817750595a8 extends Twig_Template
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
        $__internal_284a258d82e22c4ca48d4e3ffde649b8caa5f558c6ef73c42d1506e2e75b29b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_284a258d82e22c4ca48d4e3ffde649b8caa5f558c6ef73c42d1506e2e75b29b8->enter($__internal_284a258d82e22c4ca48d4e3ffde649b8caa5f558c6ef73c42d1506e2e75b29b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_6a12a4a8bf0cb5343d76d772992d35d8d1250c8c46dc1e69c258db63487ccf98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a12a4a8bf0cb5343d76d772992d35d8d1250c8c46dc1e69c258db63487ccf98->enter($__internal_6a12a4a8bf0cb5343d76d772992d35d8d1250c8c46dc1e69c258db63487ccf98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_284a258d82e22c4ca48d4e3ffde649b8caa5f558c6ef73c42d1506e2e75b29b8->leave($__internal_284a258d82e22c4ca48d4e3ffde649b8caa5f558c6ef73c42d1506e2e75b29b8_prof);

        
        $__internal_6a12a4a8bf0cb5343d76d772992d35d8d1250c8c46dc1e69c258db63487ccf98->leave($__internal_6a12a4a8bf0cb5343d76d772992d35d8d1250c8c46dc1e69c258db63487ccf98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
