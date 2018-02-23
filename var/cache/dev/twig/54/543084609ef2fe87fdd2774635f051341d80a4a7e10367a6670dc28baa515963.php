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
        $__internal_bc5ecd59b78f62afd85e69807b76198e481fe39f7252a13cea7df88be5013142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc5ecd59b78f62afd85e69807b76198e481fe39f7252a13cea7df88be5013142->enter($__internal_bc5ecd59b78f62afd85e69807b76198e481fe39f7252a13cea7df88be5013142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_16ffb4af571cb671f844a20bf98310c74cadeaf824452f164a789e2f6320b010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ffb4af571cb671f844a20bf98310c74cadeaf824452f164a789e2f6320b010->enter($__internal_16ffb4af571cb671f844a20bf98310c74cadeaf824452f164a789e2f6320b010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_bc5ecd59b78f62afd85e69807b76198e481fe39f7252a13cea7df88be5013142->leave($__internal_bc5ecd59b78f62afd85e69807b76198e481fe39f7252a13cea7df88be5013142_prof);

        
        $__internal_16ffb4af571cb671f844a20bf98310c74cadeaf824452f164a789e2f6320b010->leave($__internal_16ffb4af571cb671f844a20bf98310c74cadeaf824452f164a789e2f6320b010_prof);

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
