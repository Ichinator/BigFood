<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_110e45016bd3e5a7e27b0a5017efa5a93cc785891620023e714613bcb5d4466a extends Twig_Template
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
        $__internal_3524eab81f0057833590ee5d017349792d42c9d783d0b0d6d2acfd30151481b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3524eab81f0057833590ee5d017349792d42c9d783d0b0d6d2acfd30151481b6->enter($__internal_3524eab81f0057833590ee5d017349792d42c9d783d0b0d6d2acfd30151481b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_5b076cd3e15e7b3f889afb1f30341956184f34f3795d407de6c8cbfabb875bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b076cd3e15e7b3f889afb1f30341956184f34f3795d407de6c8cbfabb875bd6->enter($__internal_5b076cd3e15e7b3f889afb1f30341956184f34f3795d407de6c8cbfabb875bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3524eab81f0057833590ee5d017349792d42c9d783d0b0d6d2acfd30151481b6->leave($__internal_3524eab81f0057833590ee5d017349792d42c9d783d0b0d6d2acfd30151481b6_prof);

        
        $__internal_5b076cd3e15e7b3f889afb1f30341956184f34f3795d407de6c8cbfabb875bd6->leave($__internal_5b076cd3e15e7b3f889afb1f30341956184f34f3795d407de6c8cbfabb875bd6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
