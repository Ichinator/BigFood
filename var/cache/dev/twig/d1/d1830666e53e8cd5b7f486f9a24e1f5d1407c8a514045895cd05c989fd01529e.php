<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5f75a7e34b9ede06c58bc21d02b7dfb208aae40fc5b44f32c8fe3e39fb2b3b4c extends Twig_Template
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
        $__internal_3c63eb4c8edaab6acff3b3c52ccdbb93ac3b6085383ed01a2a94b2ffbdaf7842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c63eb4c8edaab6acff3b3c52ccdbb93ac3b6085383ed01a2a94b2ffbdaf7842->enter($__internal_3c63eb4c8edaab6acff3b3c52ccdbb93ac3b6085383ed01a2a94b2ffbdaf7842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_4605cf5a25438b8e755506284a1e244753c85329cd39f0429258fc255554ac01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4605cf5a25438b8e755506284a1e244753c85329cd39f0429258fc255554ac01->enter($__internal_4605cf5a25438b8e755506284a1e244753c85329cd39f0429258fc255554ac01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3c63eb4c8edaab6acff3b3c52ccdbb93ac3b6085383ed01a2a94b2ffbdaf7842->leave($__internal_3c63eb4c8edaab6acff3b3c52ccdbb93ac3b6085383ed01a2a94b2ffbdaf7842_prof);

        
        $__internal_4605cf5a25438b8e755506284a1e244753c85329cd39f0429258fc255554ac01->leave($__internal_4605cf5a25438b8e755506284a1e244753c85329cd39f0429258fc255554ac01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
