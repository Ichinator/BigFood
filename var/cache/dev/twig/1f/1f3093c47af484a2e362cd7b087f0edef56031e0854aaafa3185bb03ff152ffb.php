<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_e4bf4ce9bc3ab23a148fab2c5bc48127044119771059c59e1e3f187fa786f141 extends Twig_Template
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
        $__internal_c8f852e6576715568bb9f7bb3799708192a1ae3c06316c58bf5f61b064d144b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f852e6576715568bb9f7bb3799708192a1ae3c06316c58bf5f61b064d144b0->enter($__internal_c8f852e6576715568bb9f7bb3799708192a1ae3c06316c58bf5f61b064d144b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_bfc4aeb53c0acee2b1575809f45888848ea562072eef4c4c5c597733c6809a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc4aeb53c0acee2b1575809f45888848ea562072eef4c4c5c597733c6809a05->enter($__internal_bfc4aeb53c0acee2b1575809f45888848ea562072eef4c4c5c597733c6809a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_c8f852e6576715568bb9f7bb3799708192a1ae3c06316c58bf5f61b064d144b0->leave($__internal_c8f852e6576715568bb9f7bb3799708192a1ae3c06316c58bf5f61b064d144b0_prof);

        
        $__internal_bfc4aeb53c0acee2b1575809f45888848ea562072eef4c4c5c597733c6809a05->leave($__internal_bfc4aeb53c0acee2b1575809f45888848ea562072eef4c4c5c597733c6809a05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
