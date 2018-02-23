<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_110e45016bd3e5a7e27b0a5017efa5a93cc785891620023e714613bcb5d4466a extends Twig_Template
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
        $__internal_2c1cdaddcd229b4464e327f8da297532e9bd2ee2b001be7244fd9d22992cbac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1cdaddcd229b4464e327f8da297532e9bd2ee2b001be7244fd9d22992cbac3->enter($__internal_2c1cdaddcd229b4464e327f8da297532e9bd2ee2b001be7244fd9d22992cbac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_24dcd32da338222d9e7d5f51576994d969da5e6bbd75d24db2c1988925efab4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24dcd32da338222d9e7d5f51576994d969da5e6bbd75d24db2c1988925efab4c->enter($__internal_24dcd32da338222d9e7d5f51576994d969da5e6bbd75d24db2c1988925efab4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_2c1cdaddcd229b4464e327f8da297532e9bd2ee2b001be7244fd9d22992cbac3->leave($__internal_2c1cdaddcd229b4464e327f8da297532e9bd2ee2b001be7244fd9d22992cbac3_prof);

        
        $__internal_24dcd32da338222d9e7d5f51576994d969da5e6bbd75d24db2c1988925efab4c->leave($__internal_24dcd32da338222d9e7d5f51576994d969da5e6bbd75d24db2c1988925efab4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
