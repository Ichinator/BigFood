<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_2d2685af1b7ead936cdff055a38d3effad0b48b9ffbb141b39259d35b5eda8fa extends Twig_Template
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
        $__internal_6817f5527cbdd7251bc6edbcf07d1a1a0b877904361ea0b39b8239952cc3d6b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6817f5527cbdd7251bc6edbcf07d1a1a0b877904361ea0b39b8239952cc3d6b3->enter($__internal_6817f5527cbdd7251bc6edbcf07d1a1a0b877904361ea0b39b8239952cc3d6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_abde5b463552258b19cec25f37831f03c8f9ae13ab12639046649351cb232a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abde5b463552258b19cec25f37831f03c8f9ae13ab12639046649351cb232a7d->enter($__internal_abde5b463552258b19cec25f37831f03c8f9ae13ab12639046649351cb232a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_6817f5527cbdd7251bc6edbcf07d1a1a0b877904361ea0b39b8239952cc3d6b3->leave($__internal_6817f5527cbdd7251bc6edbcf07d1a1a0b877904361ea0b39b8239952cc3d6b3_prof);

        
        $__internal_abde5b463552258b19cec25f37831f03c8f9ae13ab12639046649351cb232a7d->leave($__internal_abde5b463552258b19cec25f37831f03c8f9ae13ab12639046649351cb232a7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
