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
        $__internal_8bfb533e38c47d6c1b7220677ed9faabc67d731c8b1aee9d860c908957d4d847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bfb533e38c47d6c1b7220677ed9faabc67d731c8b1aee9d860c908957d4d847->enter($__internal_8bfb533e38c47d6c1b7220677ed9faabc67d731c8b1aee9d860c908957d4d847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_d97ba6efdaeee8a4842dd9fb53c4a4da4cd4983e3941a1e28412b471b2d5b0b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97ba6efdaeee8a4842dd9fb53c4a4da4cd4983e3941a1e28412b471b2d5b0b5->enter($__internal_d97ba6efdaeee8a4842dd9fb53c4a4da4cd4983e3941a1e28412b471b2d5b0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_8bfb533e38c47d6c1b7220677ed9faabc67d731c8b1aee9d860c908957d4d847->leave($__internal_8bfb533e38c47d6c1b7220677ed9faabc67d731c8b1aee9d860c908957d4d847_prof);

        
        $__internal_d97ba6efdaeee8a4842dd9fb53c4a4da4cd4983e3941a1e28412b471b2d5b0b5->leave($__internal_d97ba6efdaeee8a4842dd9fb53c4a4da4cd4983e3941a1e28412b471b2d5b0b5_prof);

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
