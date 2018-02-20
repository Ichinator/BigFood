<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_e166aafb67bdcc93e08f895fd492f10445f9103f072d4b40b060e969ed1223c2 extends Twig_Template
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
        $__internal_65190152d147e97aeea4a895c0ef8158e448b2af9fc9c33aebddc6fbf8a8c09c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65190152d147e97aeea4a895c0ef8158e448b2af9fc9c33aebddc6fbf8a8c09c->enter($__internal_65190152d147e97aeea4a895c0ef8158e448b2af9fc9c33aebddc6fbf8a8c09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_eeef36eb50049c48830a3ab0727e7bd9508caace3683d5be37cb58fc733ea060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeef36eb50049c48830a3ab0727e7bd9508caace3683d5be37cb58fc733ea060->enter($__internal_eeef36eb50049c48830a3ab0727e7bd9508caace3683d5be37cb58fc733ea060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_65190152d147e97aeea4a895c0ef8158e448b2af9fc9c33aebddc6fbf8a8c09c->leave($__internal_65190152d147e97aeea4a895c0ef8158e448b2af9fc9c33aebddc6fbf8a8c09c_prof);

        
        $__internal_eeef36eb50049c48830a3ab0727e7bd9508caace3683d5be37cb58fc733ea060->leave($__internal_eeef36eb50049c48830a3ab0727e7bd9508caace3683d5be37cb58fc733ea060_prof);

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
