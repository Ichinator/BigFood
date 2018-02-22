<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_3363c578d660e3a28097561b435455417f69bf74c2ce9633266b532165c22d73 extends Twig_Template
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
        $__internal_c43d81800455fe275f2aaae687e906c808e2df4d833d0da54cec8276a34b9f77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c43d81800455fe275f2aaae687e906c808e2df4d833d0da54cec8276a34b9f77->enter($__internal_c43d81800455fe275f2aaae687e906c808e2df4d833d0da54cec8276a34b9f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_3001e6751d22bf6d3d140e4e9fbd2fea190613b5cf4c5e5da1b0b98f13cdfd54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3001e6751d22bf6d3d140e4e9fbd2fea190613b5cf4c5e5da1b0b98f13cdfd54->enter($__internal_3001e6751d22bf6d3d140e4e9fbd2fea190613b5cf4c5e5da1b0b98f13cdfd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_c43d81800455fe275f2aaae687e906c808e2df4d833d0da54cec8276a34b9f77->leave($__internal_c43d81800455fe275f2aaae687e906c808e2df4d833d0da54cec8276a34b9f77_prof);

        
        $__internal_3001e6751d22bf6d3d140e4e9fbd2fea190613b5cf4c5e5da1b0b98f13cdfd54->leave($__internal_3001e6751d22bf6d3d140e4e9fbd2fea190613b5cf4c5e5da1b0b98f13cdfd54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
