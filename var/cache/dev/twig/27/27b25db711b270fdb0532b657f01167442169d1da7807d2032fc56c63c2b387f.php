<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d28ee4c44ead648f5cb6a569d5015c0bb8ac372f8fb8af0b3a593548b1863a53 extends Twig_Template
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
        $__internal_e9692303d5aa34e6356b29f039be455d81d4b993ff6d78086c87c2697a7cdd4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9692303d5aa34e6356b29f039be455d81d4b993ff6d78086c87c2697a7cdd4f->enter($__internal_e9692303d5aa34e6356b29f039be455d81d4b993ff6d78086c87c2697a7cdd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_fb85764d4a4da541dddef27a81e318e78fc7da42f2b29d23ae2a7b26c62a3973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb85764d4a4da541dddef27a81e318e78fc7da42f2b29d23ae2a7b26c62a3973->enter($__internal_fb85764d4a4da541dddef27a81e318e78fc7da42f2b29d23ae2a7b26c62a3973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_e9692303d5aa34e6356b29f039be455d81d4b993ff6d78086c87c2697a7cdd4f->leave($__internal_e9692303d5aa34e6356b29f039be455d81d4b993ff6d78086c87c2697a7cdd4f_prof);

        
        $__internal_fb85764d4a4da541dddef27a81e318e78fc7da42f2b29d23ae2a7b26c62a3973->leave($__internal_fb85764d4a4da541dddef27a81e318e78fc7da42f2b29d23ae2a7b26c62a3973_prof);

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
