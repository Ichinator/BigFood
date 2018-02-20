<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_0f5726db922f492fb4ab1413a232faee5b60c363ebe342741e1cd5828ed30633 extends Twig_Template
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
        $__internal_8f93af06cb82d5eb19d0a806543698c090291eff4f698a835a1584c1a3f6d42b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f93af06cb82d5eb19d0a806543698c090291eff4f698a835a1584c1a3f6d42b->enter($__internal_8f93af06cb82d5eb19d0a806543698c090291eff4f698a835a1584c1a3f6d42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_4183149467ef4471df154fb6d5b24f1c82311230faef29178fd144c13c5a7661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4183149467ef4471df154fb6d5b24f1c82311230faef29178fd144c13c5a7661->enter($__internal_4183149467ef4471df154fb6d5b24f1c82311230faef29178fd144c13c5a7661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8f93af06cb82d5eb19d0a806543698c090291eff4f698a835a1584c1a3f6d42b->leave($__internal_8f93af06cb82d5eb19d0a806543698c090291eff4f698a835a1584c1a3f6d42b_prof);

        
        $__internal_4183149467ef4471df154fb6d5b24f1c82311230faef29178fd144c13c5a7661->leave($__internal_4183149467ef4471df154fb6d5b24f1c82311230faef29178fd144c13c5a7661_prof);

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
