<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8aabd82785bf33e75b38a365c8084183a737aecc5095d8c500382931cf2cc0d3 extends Twig_Template
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
        $__internal_dec8e31dfc274ae3cc840457a9764715c75da6a94dab93ba77addbf650d25123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dec8e31dfc274ae3cc840457a9764715c75da6a94dab93ba77addbf650d25123->enter($__internal_dec8e31dfc274ae3cc840457a9764715c75da6a94dab93ba77addbf650d25123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_71c6ba5cc8c02af8ad99a650a7093e870654d6a3fdb6cc86955bdaaae5687158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c6ba5cc8c02af8ad99a650a7093e870654d6a3fdb6cc86955bdaaae5687158->enter($__internal_71c6ba5cc8c02af8ad99a650a7093e870654d6a3fdb6cc86955bdaaae5687158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_dec8e31dfc274ae3cc840457a9764715c75da6a94dab93ba77addbf650d25123->leave($__internal_dec8e31dfc274ae3cc840457a9764715c75da6a94dab93ba77addbf650d25123_prof);

        
        $__internal_71c6ba5cc8c02af8ad99a650a7093e870654d6a3fdb6cc86955bdaaae5687158->leave($__internal_71c6ba5cc8c02af8ad99a650a7093e870654d6a3fdb6cc86955bdaaae5687158_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
