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
        $__internal_7792ad5b28cb07285d0e60e8bc52109ab287c9cdbfac78ab8adef118fe2cbe17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7792ad5b28cb07285d0e60e8bc52109ab287c9cdbfac78ab8adef118fe2cbe17->enter($__internal_7792ad5b28cb07285d0e60e8bc52109ab287c9cdbfac78ab8adef118fe2cbe17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_cf7aedb7c75521185a2bcfb137b97cc66060d91998ab43fb6b7afcbfe9c95353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7aedb7c75521185a2bcfb137b97cc66060d91998ab43fb6b7afcbfe9c95353->enter($__internal_cf7aedb7c75521185a2bcfb137b97cc66060d91998ab43fb6b7afcbfe9c95353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_7792ad5b28cb07285d0e60e8bc52109ab287c9cdbfac78ab8adef118fe2cbe17->leave($__internal_7792ad5b28cb07285d0e60e8bc52109ab287c9cdbfac78ab8adef118fe2cbe17_prof);

        
        $__internal_cf7aedb7c75521185a2bcfb137b97cc66060d91998ab43fb6b7afcbfe9c95353->leave($__internal_cf7aedb7c75521185a2bcfb137b97cc66060d91998ab43fb6b7afcbfe9c95353_prof);

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
