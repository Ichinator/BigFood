<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_c45a49d50ccf6ac27fd55b9de4457f2f7bbef29fd51cd564ab2ee8ed8d177e8a extends Twig_Template
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
        $__internal_d821476261d4d2aa82df14ebe2f6cf7ad0c373607147a781edf9d74feec5253d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d821476261d4d2aa82df14ebe2f6cf7ad0c373607147a781edf9d74feec5253d->enter($__internal_d821476261d4d2aa82df14ebe2f6cf7ad0c373607147a781edf9d74feec5253d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a3eb569c320b29c9493eb4f0019f6c5bb6f93964abb8da4fed1eaf76510e3f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3eb569c320b29c9493eb4f0019f6c5bb6f93964abb8da4fed1eaf76510e3f67->enter($__internal_a3eb569c320b29c9493eb4f0019f6c5bb6f93964abb8da4fed1eaf76510e3f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_d821476261d4d2aa82df14ebe2f6cf7ad0c373607147a781edf9d74feec5253d->leave($__internal_d821476261d4d2aa82df14ebe2f6cf7ad0c373607147a781edf9d74feec5253d_prof);

        
        $__internal_a3eb569c320b29c9493eb4f0019f6c5bb6f93964abb8da4fed1eaf76510e3f67->leave($__internal_a3eb569c320b29c9493eb4f0019f6c5bb6f93964abb8da4fed1eaf76510e3f67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
