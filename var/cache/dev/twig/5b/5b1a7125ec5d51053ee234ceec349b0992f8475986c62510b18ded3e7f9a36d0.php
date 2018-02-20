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
        $__internal_2eb4f81c8fd26364006090eb04b04438ad6624027a228f2d697d19aedc57df23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eb4f81c8fd26364006090eb04b04438ad6624027a228f2d697d19aedc57df23->enter($__internal_2eb4f81c8fd26364006090eb04b04438ad6624027a228f2d697d19aedc57df23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_7fb89412f4ffa419458c2ff0c96c9fcb87b104dfb0ce400fcf0838a03a517860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb89412f4ffa419458c2ff0c96c9fcb87b104dfb0ce400fcf0838a03a517860->enter($__internal_7fb89412f4ffa419458c2ff0c96c9fcb87b104dfb0ce400fcf0838a03a517860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2eb4f81c8fd26364006090eb04b04438ad6624027a228f2d697d19aedc57df23->leave($__internal_2eb4f81c8fd26364006090eb04b04438ad6624027a228f2d697d19aedc57df23_prof);

        
        $__internal_7fb89412f4ffa419458c2ff0c96c9fcb87b104dfb0ce400fcf0838a03a517860->leave($__internal_7fb89412f4ffa419458c2ff0c96c9fcb87b104dfb0ce400fcf0838a03a517860_prof);

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
