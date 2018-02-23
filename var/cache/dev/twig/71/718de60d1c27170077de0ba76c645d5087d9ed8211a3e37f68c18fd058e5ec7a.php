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
        $__internal_29af35ab00d12799d5b56dc4c9781fe29b0ad7db323e2c0678beccf33fea247f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29af35ab00d12799d5b56dc4c9781fe29b0ad7db323e2c0678beccf33fea247f->enter($__internal_29af35ab00d12799d5b56dc4c9781fe29b0ad7db323e2c0678beccf33fea247f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_824804c1a8241a7d2c482fb9b4f66bd3fe22c8c89230a077924f5407232231a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_824804c1a8241a7d2c482fb9b4f66bd3fe22c8c89230a077924f5407232231a6->enter($__internal_824804c1a8241a7d2c482fb9b4f66bd3fe22c8c89230a077924f5407232231a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_29af35ab00d12799d5b56dc4c9781fe29b0ad7db323e2c0678beccf33fea247f->leave($__internal_29af35ab00d12799d5b56dc4c9781fe29b0ad7db323e2c0678beccf33fea247f_prof);

        
        $__internal_824804c1a8241a7d2c482fb9b4f66bd3fe22c8c89230a077924f5407232231a6->leave($__internal_824804c1a8241a7d2c482fb9b4f66bd3fe22c8c89230a077924f5407232231a6_prof);

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
