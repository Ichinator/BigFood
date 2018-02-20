<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_222d7cbd1015fc9940bb38d10ecb3f74d2ca6a544d0a6041fdd356be64b50e78 extends Twig_Template
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
        $__internal_1a50499f063ab09508032acef409eafa2217ed384e18c0741c076ee9537be27e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a50499f063ab09508032acef409eafa2217ed384e18c0741c076ee9537be27e->enter($__internal_1a50499f063ab09508032acef409eafa2217ed384e18c0741c076ee9537be27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_456491dabae76e92101a0ae03f3aac938a9874cac325739e2d446710992df1d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456491dabae76e92101a0ae03f3aac938a9874cac325739e2d446710992df1d7->enter($__internal_456491dabae76e92101a0ae03f3aac938a9874cac325739e2d446710992df1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1a50499f063ab09508032acef409eafa2217ed384e18c0741c076ee9537be27e->leave($__internal_1a50499f063ab09508032acef409eafa2217ed384e18c0741c076ee9537be27e_prof);

        
        $__internal_456491dabae76e92101a0ae03f3aac938a9874cac325739e2d446710992df1d7->leave($__internal_456491dabae76e92101a0ae03f3aac938a9874cac325739e2d446710992df1d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
