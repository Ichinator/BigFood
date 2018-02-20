<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c588c558cc2647c8fa9f427f0bccbbe9910d9c62c43f8f1e2cfad99ad9093a18 extends Twig_Template
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
        $__internal_f7cb881964462f33c25028bb823b7d16a6f6ff86059949f2ca85c76961396473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7cb881964462f33c25028bb823b7d16a6f6ff86059949f2ca85c76961396473->enter($__internal_f7cb881964462f33c25028bb823b7d16a6f6ff86059949f2ca85c76961396473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_2f9dff3fcdcb9239696c50b5bd05b7e4dd905c5673ab012e4daefa063247e551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f9dff3fcdcb9239696c50b5bd05b7e4dd905c5673ab012e4daefa063247e551->enter($__internal_2f9dff3fcdcb9239696c50b5bd05b7e4dd905c5673ab012e4daefa063247e551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_f7cb881964462f33c25028bb823b7d16a6f6ff86059949f2ca85c76961396473->leave($__internal_f7cb881964462f33c25028bb823b7d16a6f6ff86059949f2ca85c76961396473_prof);

        
        $__internal_2f9dff3fcdcb9239696c50b5bd05b7e4dd905c5673ab012e4daefa063247e551->leave($__internal_2f9dff3fcdcb9239696c50b5bd05b7e4dd905c5673ab012e4daefa063247e551_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
