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
        $__internal_4af17401332a9935b9a9bb4d49cca52cc473539e8e67599749803197f80a799e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4af17401332a9935b9a9bb4d49cca52cc473539e8e67599749803197f80a799e->enter($__internal_4af17401332a9935b9a9bb4d49cca52cc473539e8e67599749803197f80a799e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_20ff7394500394f2a7610187fc2e95406922d73eaa324a891fc329a7d54f8f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ff7394500394f2a7610187fc2e95406922d73eaa324a891fc329a7d54f8f68->enter($__internal_20ff7394500394f2a7610187fc2e95406922d73eaa324a891fc329a7d54f8f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_4af17401332a9935b9a9bb4d49cca52cc473539e8e67599749803197f80a799e->leave($__internal_4af17401332a9935b9a9bb4d49cca52cc473539e8e67599749803197f80a799e_prof);

        
        $__internal_20ff7394500394f2a7610187fc2e95406922d73eaa324a891fc329a7d54f8f68->leave($__internal_20ff7394500394f2a7610187fc2e95406922d73eaa324a891fc329a7d54f8f68_prof);

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
