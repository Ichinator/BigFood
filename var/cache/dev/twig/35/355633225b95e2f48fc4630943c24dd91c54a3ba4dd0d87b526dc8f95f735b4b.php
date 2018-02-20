<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_357b56d9b73d5c0a56d2b6f8b3ec72b1ff6e2fb3b0e91d3583c59605af22d044 extends Twig_Template
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
        $__internal_3d5fce46ed399cbf3fa680dc45309322d6222e6fd67207b50072b297b1701f96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d5fce46ed399cbf3fa680dc45309322d6222e6fd67207b50072b297b1701f96->enter($__internal_3d5fce46ed399cbf3fa680dc45309322d6222e6fd67207b50072b297b1701f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_cd74ba144a83d0557ead46f58fcbef5d93785a6a65472ba0d5949e296f274c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd74ba144a83d0557ead46f58fcbef5d93785a6a65472ba0d5949e296f274c94->enter($__internal_cd74ba144a83d0557ead46f58fcbef5d93785a6a65472ba0d5949e296f274c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_3d5fce46ed399cbf3fa680dc45309322d6222e6fd67207b50072b297b1701f96->leave($__internal_3d5fce46ed399cbf3fa680dc45309322d6222e6fd67207b50072b297b1701f96_prof);

        
        $__internal_cd74ba144a83d0557ead46f58fcbef5d93785a6a65472ba0d5949e296f274c94->leave($__internal_cd74ba144a83d0557ead46f58fcbef5d93785a6a65472ba0d5949e296f274c94_prof);

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
