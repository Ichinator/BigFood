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
        $__internal_5a5a699db6b83e2f0e53a15054dc4cbb087840780110a5e415d93f9f3d5b2f97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a5a699db6b83e2f0e53a15054dc4cbb087840780110a5e415d93f9f3d5b2f97->enter($__internal_5a5a699db6b83e2f0e53a15054dc4cbb087840780110a5e415d93f9f3d5b2f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_1c0447d0b5dbf8b4cf154a96240c935edd07e2852ef5f37b7d69d1eb7b390e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c0447d0b5dbf8b4cf154a96240c935edd07e2852ef5f37b7d69d1eb7b390e09->enter($__internal_1c0447d0b5dbf8b4cf154a96240c935edd07e2852ef5f37b7d69d1eb7b390e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_5a5a699db6b83e2f0e53a15054dc4cbb087840780110a5e415d93f9f3d5b2f97->leave($__internal_5a5a699db6b83e2f0e53a15054dc4cbb087840780110a5e415d93f9f3d5b2f97_prof);

        
        $__internal_1c0447d0b5dbf8b4cf154a96240c935edd07e2852ef5f37b7d69d1eb7b390e09->leave($__internal_1c0447d0b5dbf8b4cf154a96240c935edd07e2852ef5f37b7d69d1eb7b390e09_prof);

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
