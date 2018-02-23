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
        $__internal_33b9d08539ae5044aca60903e46c17acfc088924bbf27da6303c637cffd943fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b9d08539ae5044aca60903e46c17acfc088924bbf27da6303c637cffd943fe->enter($__internal_33b9d08539ae5044aca60903e46c17acfc088924bbf27da6303c637cffd943fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_698e1d460c6831c77977c5366d29c17e14a0f65c9f06af2b37fc8f6cd21742b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_698e1d460c6831c77977c5366d29c17e14a0f65c9f06af2b37fc8f6cd21742b8->enter($__internal_698e1d460c6831c77977c5366d29c17e14a0f65c9f06af2b37fc8f6cd21742b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_33b9d08539ae5044aca60903e46c17acfc088924bbf27da6303c637cffd943fe->leave($__internal_33b9d08539ae5044aca60903e46c17acfc088924bbf27da6303c637cffd943fe_prof);

        
        $__internal_698e1d460c6831c77977c5366d29c17e14a0f65c9f06af2b37fc8f6cd21742b8->leave($__internal_698e1d460c6831c77977c5366d29c17e14a0f65c9f06af2b37fc8f6cd21742b8_prof);

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
