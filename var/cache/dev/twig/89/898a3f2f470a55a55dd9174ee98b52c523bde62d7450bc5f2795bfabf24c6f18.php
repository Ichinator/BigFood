<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c588c558cc2647c8fa9f427f0bccbbe9910d9c62c43f8f1e2cfad99ad9093a18 extends Twig_Template
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
        $__internal_3fd22c601c61a368b2d31e9f344b7307ece04ef56c6d588ce297dcd47b525daa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fd22c601c61a368b2d31e9f344b7307ece04ef56c6d588ce297dcd47b525daa->enter($__internal_3fd22c601c61a368b2d31e9f344b7307ece04ef56c6d588ce297dcd47b525daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_158249f735fccd437153b3564a58535bc7671aaf3976af2260ab88930fa91990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158249f735fccd437153b3564a58535bc7671aaf3976af2260ab88930fa91990->enter($__internal_158249f735fccd437153b3564a58535bc7671aaf3976af2260ab88930fa91990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3fd22c601c61a368b2d31e9f344b7307ece04ef56c6d588ce297dcd47b525daa->leave($__internal_3fd22c601c61a368b2d31e9f344b7307ece04ef56c6d588ce297dcd47b525daa_prof);

        
        $__internal_158249f735fccd437153b3564a58535bc7671aaf3976af2260ab88930fa91990->leave($__internal_158249f735fccd437153b3564a58535bc7671aaf3976af2260ab88930fa91990_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
