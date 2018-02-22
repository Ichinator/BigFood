<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3a5f843e5bc17280ad20b902c3cab599355bb524735a97de65d6dc4cd050f1f1 extends Twig_Template
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
        $__internal_d165c37c600c5d29576e5dbf9511609220bd286952761a94572758685541ba51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d165c37c600c5d29576e5dbf9511609220bd286952761a94572758685541ba51->enter($__internal_d165c37c600c5d29576e5dbf9511609220bd286952761a94572758685541ba51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_1b9d63812a053e29df0a2d504b13c56528b382399263b434d6b16a6bd7f0e4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9d63812a053e29df0a2d504b13c56528b382399263b434d6b16a6bd7f0e4c5->enter($__internal_1b9d63812a053e29df0a2d504b13c56528b382399263b434d6b16a6bd7f0e4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d165c37c600c5d29576e5dbf9511609220bd286952761a94572758685541ba51->leave($__internal_d165c37c600c5d29576e5dbf9511609220bd286952761a94572758685541ba51_prof);

        
        $__internal_1b9d63812a053e29df0a2d504b13c56528b382399263b434d6b16a6bd7f0e4c5->leave($__internal_1b9d63812a053e29df0a2d504b13c56528b382399263b434d6b16a6bd7f0e4c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
