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
        $__internal_bcb3487c33bb5504341bb01d350fa4be6e03d5a12c5ae92e43f7573a69c46b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb3487c33bb5504341bb01d350fa4be6e03d5a12c5ae92e43f7573a69c46b8b->enter($__internal_bcb3487c33bb5504341bb01d350fa4be6e03d5a12c5ae92e43f7573a69c46b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_cb6d1d2685e7402ea90a07de9a16685d3aefd6906b13f7b56245e8b4043c74a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6d1d2685e7402ea90a07de9a16685d3aefd6906b13f7b56245e8b4043c74a1->enter($__internal_cb6d1d2685e7402ea90a07de9a16685d3aefd6906b13f7b56245e8b4043c74a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_bcb3487c33bb5504341bb01d350fa4be6e03d5a12c5ae92e43f7573a69c46b8b->leave($__internal_bcb3487c33bb5504341bb01d350fa4be6e03d5a12c5ae92e43f7573a69c46b8b_prof);

        
        $__internal_cb6d1d2685e7402ea90a07de9a16685d3aefd6906b13f7b56245e8b4043c74a1->leave($__internal_cb6d1d2685e7402ea90a07de9a16685d3aefd6906b13f7b56245e8b4043c74a1_prof);

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
