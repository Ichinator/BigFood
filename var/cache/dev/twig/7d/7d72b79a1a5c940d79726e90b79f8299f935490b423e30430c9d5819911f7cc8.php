<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_26add4472f3bbe63db168b8f3f63056e2d7f2c1d50e28977c530b2cc041ec064 extends Twig_Template
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
        $__internal_2412bdcf5e45cdd84b1d1393c60ce065e9aa335dc1f68656048727c7b59308b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2412bdcf5e45cdd84b1d1393c60ce065e9aa335dc1f68656048727c7b59308b8->enter($__internal_2412bdcf5e45cdd84b1d1393c60ce065e9aa335dc1f68656048727c7b59308b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_100d961a01589a383b4a39d26f6e1e14cda1750d1349de5577ca475f4f7df1f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_100d961a01589a383b4a39d26f6e1e14cda1750d1349de5577ca475f4f7df1f9->enter($__internal_100d961a01589a383b4a39d26f6e1e14cda1750d1349de5577ca475f4f7df1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2412bdcf5e45cdd84b1d1393c60ce065e9aa335dc1f68656048727c7b59308b8->leave($__internal_2412bdcf5e45cdd84b1d1393c60ce065e9aa335dc1f68656048727c7b59308b8_prof);

        
        $__internal_100d961a01589a383b4a39d26f6e1e14cda1750d1349de5577ca475f4f7df1f9->leave($__internal_100d961a01589a383b4a39d26f6e1e14cda1750d1349de5577ca475f4f7df1f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
