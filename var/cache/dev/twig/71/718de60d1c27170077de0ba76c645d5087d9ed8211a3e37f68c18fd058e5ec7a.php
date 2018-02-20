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
        $__internal_bffcc2f4933c2d190dc4e8bc80ffeed572723c0cf6c8051337f9a50f7ff2e449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bffcc2f4933c2d190dc4e8bc80ffeed572723c0cf6c8051337f9a50f7ff2e449->enter($__internal_bffcc2f4933c2d190dc4e8bc80ffeed572723c0cf6c8051337f9a50f7ff2e449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_52fb439e6d0841bb45ba01a367179e442ff086798c3c51decfb75ebb0c99088b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52fb439e6d0841bb45ba01a367179e442ff086798c3c51decfb75ebb0c99088b->enter($__internal_52fb439e6d0841bb45ba01a367179e442ff086798c3c51decfb75ebb0c99088b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_bffcc2f4933c2d190dc4e8bc80ffeed572723c0cf6c8051337f9a50f7ff2e449->leave($__internal_bffcc2f4933c2d190dc4e8bc80ffeed572723c0cf6c8051337f9a50f7ff2e449_prof);

        
        $__internal_52fb439e6d0841bb45ba01a367179e442ff086798c3c51decfb75ebb0c99088b->leave($__internal_52fb439e6d0841bb45ba01a367179e442ff086798c3c51decfb75ebb0c99088b_prof);

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
