<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_e58f0c4b03339107dd1b75f2368c3868d89929569e542c03ec15ac5b6f003f88 extends Twig_Template
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
        $__internal_9d487bcd534d710c2e59cbe6e3c950070ef9207c26f76caf9d00c15356de3547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d487bcd534d710c2e59cbe6e3c950070ef9207c26f76caf9d00c15356de3547->enter($__internal_9d487bcd534d710c2e59cbe6e3c950070ef9207c26f76caf9d00c15356de3547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_3ce41a562be4562c8febd5b171048284635a197e905428be6daf554110a02f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce41a562be4562c8febd5b171048284635a197e905428be6daf554110a02f25->enter($__internal_3ce41a562be4562c8febd5b171048284635a197e905428be6daf554110a02f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_9d487bcd534d710c2e59cbe6e3c950070ef9207c26f76caf9d00c15356de3547->leave($__internal_9d487bcd534d710c2e59cbe6e3c950070ef9207c26f76caf9d00c15356de3547_prof);

        
        $__internal_3ce41a562be4562c8febd5b171048284635a197e905428be6daf554110a02f25->leave($__internal_3ce41a562be4562c8febd5b171048284635a197e905428be6daf554110a02f25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
