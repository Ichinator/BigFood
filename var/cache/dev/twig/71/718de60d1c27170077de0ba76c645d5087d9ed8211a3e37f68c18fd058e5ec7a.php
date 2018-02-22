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
        $__internal_3ec8202863ed101e00894197dc94acd029a1c0971b2c8da403d93e182d15c04a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ec8202863ed101e00894197dc94acd029a1c0971b2c8da403d93e182d15c04a->enter($__internal_3ec8202863ed101e00894197dc94acd029a1c0971b2c8da403d93e182d15c04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f409e8216b52eb3a29a0a69bcebaf337bb6dc430ca5858a23cf5792646915021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f409e8216b52eb3a29a0a69bcebaf337bb6dc430ca5858a23cf5792646915021->enter($__internal_f409e8216b52eb3a29a0a69bcebaf337bb6dc430ca5858a23cf5792646915021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_3ec8202863ed101e00894197dc94acd029a1c0971b2c8da403d93e182d15c04a->leave($__internal_3ec8202863ed101e00894197dc94acd029a1c0971b2c8da403d93e182d15c04a_prof);

        
        $__internal_f409e8216b52eb3a29a0a69bcebaf337bb6dc430ca5858a23cf5792646915021->leave($__internal_f409e8216b52eb3a29a0a69bcebaf337bb6dc430ca5858a23cf5792646915021_prof);

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
