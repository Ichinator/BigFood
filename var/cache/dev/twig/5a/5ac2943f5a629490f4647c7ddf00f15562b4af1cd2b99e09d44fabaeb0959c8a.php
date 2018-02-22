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
        $__internal_254fc5ce77f6058e600169732443d5261907251cfbcd592ee94eab1584bd0d00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254fc5ce77f6058e600169732443d5261907251cfbcd592ee94eab1584bd0d00->enter($__internal_254fc5ce77f6058e600169732443d5261907251cfbcd592ee94eab1584bd0d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_07f6338a9dc224094327431ce0070781c7ca966a69b835388c491e97fd4c8569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f6338a9dc224094327431ce0070781c7ca966a69b835388c491e97fd4c8569->enter($__internal_07f6338a9dc224094327431ce0070781c7ca966a69b835388c491e97fd4c8569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_254fc5ce77f6058e600169732443d5261907251cfbcd592ee94eab1584bd0d00->leave($__internal_254fc5ce77f6058e600169732443d5261907251cfbcd592ee94eab1584bd0d00_prof);

        
        $__internal_07f6338a9dc224094327431ce0070781c7ca966a69b835388c491e97fd4c8569->leave($__internal_07f6338a9dc224094327431ce0070781c7ca966a69b835388c491e97fd4c8569_prof);

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
