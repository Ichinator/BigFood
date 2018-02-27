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
        $__internal_9ce0ca61cca0f7c1a00d699a67f0b10314723cf506ec9006958b6e1b388fa75f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ce0ca61cca0f7c1a00d699a67f0b10314723cf506ec9006958b6e1b388fa75f->enter($__internal_9ce0ca61cca0f7c1a00d699a67f0b10314723cf506ec9006958b6e1b388fa75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_d8f6541bd2a3ccbfb25c4bc72bdc9765b5a335807d0bea5ed75c02b7f8e7c955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f6541bd2a3ccbfb25c4bc72bdc9765b5a335807d0bea5ed75c02b7f8e7c955->enter($__internal_d8f6541bd2a3ccbfb25c4bc72bdc9765b5a335807d0bea5ed75c02b7f8e7c955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9ce0ca61cca0f7c1a00d699a67f0b10314723cf506ec9006958b6e1b388fa75f->leave($__internal_9ce0ca61cca0f7c1a00d699a67f0b10314723cf506ec9006958b6e1b388fa75f_prof);

        
        $__internal_d8f6541bd2a3ccbfb25c4bc72bdc9765b5a335807d0bea5ed75c02b7f8e7c955->leave($__internal_d8f6541bd2a3ccbfb25c4bc72bdc9765b5a335807d0bea5ed75c02b7f8e7c955_prof);

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
