<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_85151cccdce7c1e3f18c407a7687871ce318e9064b86979514634befbc8ecdf8 extends Twig_Template
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
        $__internal_7b44ed014bd06ba24903ba41e3d396e3f237bfa49d714638885db07330a351ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b44ed014bd06ba24903ba41e3d396e3f237bfa49d714638885db07330a351ed->enter($__internal_7b44ed014bd06ba24903ba41e3d396e3f237bfa49d714638885db07330a351ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_5430242bc9e830b684c9a990c42948a6383eaf0f1742dcf9bc6cf60a7bfd49e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5430242bc9e830b684c9a990c42948a6383eaf0f1742dcf9bc6cf60a7bfd49e2->enter($__internal_5430242bc9e830b684c9a990c42948a6383eaf0f1742dcf9bc6cf60a7bfd49e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7b44ed014bd06ba24903ba41e3d396e3f237bfa49d714638885db07330a351ed->leave($__internal_7b44ed014bd06ba24903ba41e3d396e3f237bfa49d714638885db07330a351ed_prof);

        
        $__internal_5430242bc9e830b684c9a990c42948a6383eaf0f1742dcf9bc6cf60a7bfd49e2->leave($__internal_5430242bc9e830b684c9a990c42948a6383eaf0f1742dcf9bc6cf60a7bfd49e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
