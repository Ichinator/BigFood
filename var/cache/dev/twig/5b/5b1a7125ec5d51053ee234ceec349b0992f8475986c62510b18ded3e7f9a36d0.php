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
        $__internal_4d51b8eb37e5976d26960b2099b21d971ad1a8ca98168569e53b48bfb040f3be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d51b8eb37e5976d26960b2099b21d971ad1a8ca98168569e53b48bfb040f3be->enter($__internal_4d51b8eb37e5976d26960b2099b21d971ad1a8ca98168569e53b48bfb040f3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_b966b1edb02b00afc8d4f469ff5f4b232557c4ba4cdabe98b1a872d5b549b727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b966b1edb02b00afc8d4f469ff5f4b232557c4ba4cdabe98b1a872d5b549b727->enter($__internal_b966b1edb02b00afc8d4f469ff5f4b232557c4ba4cdabe98b1a872d5b549b727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4d51b8eb37e5976d26960b2099b21d971ad1a8ca98168569e53b48bfb040f3be->leave($__internal_4d51b8eb37e5976d26960b2099b21d971ad1a8ca98168569e53b48bfb040f3be_prof);

        
        $__internal_b966b1edb02b00afc8d4f469ff5f4b232557c4ba4cdabe98b1a872d5b549b727->leave($__internal_b966b1edb02b00afc8d4f469ff5f4b232557c4ba4cdabe98b1a872d5b549b727_prof);

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
