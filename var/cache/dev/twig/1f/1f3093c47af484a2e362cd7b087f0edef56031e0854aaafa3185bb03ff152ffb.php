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
        $__internal_ad93462decdd55b26df1cf748bea5e9246b237afacdea5fdf8e08606b16e2b2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad93462decdd55b26df1cf748bea5e9246b237afacdea5fdf8e08606b16e2b2b->enter($__internal_ad93462decdd55b26df1cf748bea5e9246b237afacdea5fdf8e08606b16e2b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_a3ccc1020d77208abe50b2a294e8ec6721d7ba05c0315b1ec0a6bb46f9320f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ccc1020d77208abe50b2a294e8ec6721d7ba05c0315b1ec0a6bb46f9320f3b->enter($__internal_a3ccc1020d77208abe50b2a294e8ec6721d7ba05c0315b1ec0a6bb46f9320f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ad93462decdd55b26df1cf748bea5e9246b237afacdea5fdf8e08606b16e2b2b->leave($__internal_ad93462decdd55b26df1cf748bea5e9246b237afacdea5fdf8e08606b16e2b2b_prof);

        
        $__internal_a3ccc1020d77208abe50b2a294e8ec6721d7ba05c0315b1ec0a6bb46f9320f3b->leave($__internal_a3ccc1020d77208abe50b2a294e8ec6721d7ba05c0315b1ec0a6bb46f9320f3b_prof);

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
