<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_119aa086df65fcdd7822dc9481004821e6b836714e87412187f8887a53bb877d extends Twig_Template
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
        $__internal_23c0d812ad0075ea42f7c4d365422d1b498e0fbf4022b81ac53dbb4018ad8f6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23c0d812ad0075ea42f7c4d365422d1b498e0fbf4022b81ac53dbb4018ad8f6a->enter($__internal_23c0d812ad0075ea42f7c4d365422d1b498e0fbf4022b81ac53dbb4018ad8f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_2d62dd20c288bb9d951cf6f59e3037affda45bc187e3de9e589040040a82e60d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d62dd20c288bb9d951cf6f59e3037affda45bc187e3de9e589040040a82e60d->enter($__internal_2d62dd20c288bb9d951cf6f59e3037affda45bc187e3de9e589040040a82e60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_23c0d812ad0075ea42f7c4d365422d1b498e0fbf4022b81ac53dbb4018ad8f6a->leave($__internal_23c0d812ad0075ea42f7c4d365422d1b498e0fbf4022b81ac53dbb4018ad8f6a_prof);

        
        $__internal_2d62dd20c288bb9d951cf6f59e3037affda45bc187e3de9e589040040a82e60d->leave($__internal_2d62dd20c288bb9d951cf6f59e3037affda45bc187e3de9e589040040a82e60d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
