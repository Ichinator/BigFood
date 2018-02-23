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
        $__internal_978dd1feb2a38f5bab4aecf23c4380ac73a80c930d0412bb66486f230db0bf24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978dd1feb2a38f5bab4aecf23c4380ac73a80c930d0412bb66486f230db0bf24->enter($__internal_978dd1feb2a38f5bab4aecf23c4380ac73a80c930d0412bb66486f230db0bf24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_f2d0b974bd5dece56eec0f27ec5d8f2ec9b5ae3c88c20a311a856dc16ce0c333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d0b974bd5dece56eec0f27ec5d8f2ec9b5ae3c88c20a311a856dc16ce0c333->enter($__internal_f2d0b974bd5dece56eec0f27ec5d8f2ec9b5ae3c88c20a311a856dc16ce0c333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_978dd1feb2a38f5bab4aecf23c4380ac73a80c930d0412bb66486f230db0bf24->leave($__internal_978dd1feb2a38f5bab4aecf23c4380ac73a80c930d0412bb66486f230db0bf24_prof);

        
        $__internal_f2d0b974bd5dece56eec0f27ec5d8f2ec9b5ae3c88c20a311a856dc16ce0c333->leave($__internal_f2d0b974bd5dece56eec0f27ec5d8f2ec9b5ae3c88c20a311a856dc16ce0c333_prof);

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
