<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2fb2bf767f3838610ed6c6ec750e4181194448a493a253d0251a5c7291f9a273 extends Twig_Template
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
        $__internal_5bac495e85b6c1795a70ae6027d55586736d75d1ef323829dd122e9b5c6675a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bac495e85b6c1795a70ae6027d55586736d75d1ef323829dd122e9b5c6675a4->enter($__internal_5bac495e85b6c1795a70ae6027d55586736d75d1ef323829dd122e9b5c6675a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_80ebade6c888a09f9ff1a168b27e03a8f29c43939e793fe6ba78460a1ec84244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ebade6c888a09f9ff1a168b27e03a8f29c43939e793fe6ba78460a1ec84244->enter($__internal_80ebade6c888a09f9ff1a168b27e03a8f29c43939e793fe6ba78460a1ec84244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_5bac495e85b6c1795a70ae6027d55586736d75d1ef323829dd122e9b5c6675a4->leave($__internal_5bac495e85b6c1795a70ae6027d55586736d75d1ef323829dd122e9b5c6675a4_prof);

        
        $__internal_80ebade6c888a09f9ff1a168b27e03a8f29c43939e793fe6ba78460a1ec84244->leave($__internal_80ebade6c888a09f9ff1a168b27e03a8f29c43939e793fe6ba78460a1ec84244_prof);

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
