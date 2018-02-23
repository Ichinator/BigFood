<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f812f544ce19bf85b38e8209788cc82c7aca048cf923f34daed7cb344c07e87f extends Twig_Template
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
        $__internal_ebd5dc7d333a8ebf77b1eeaa5282ffc2bfbecaa6f59c3c0f470e7b1a68b17b82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd5dc7d333a8ebf77b1eeaa5282ffc2bfbecaa6f59c3c0f470e7b1a68b17b82->enter($__internal_ebd5dc7d333a8ebf77b1eeaa5282ffc2bfbecaa6f59c3c0f470e7b1a68b17b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_232325662b4b760bbf0cca4be5ba54d2ddcb1261c885fbc6ffc03f3648e0c1b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232325662b4b760bbf0cca4be5ba54d2ddcb1261c885fbc6ffc03f3648e0c1b8->enter($__internal_232325662b4b760bbf0cca4be5ba54d2ddcb1261c885fbc6ffc03f3648e0c1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ebd5dc7d333a8ebf77b1eeaa5282ffc2bfbecaa6f59c3c0f470e7b1a68b17b82->leave($__internal_ebd5dc7d333a8ebf77b1eeaa5282ffc2bfbecaa6f59c3c0f470e7b1a68b17b82_prof);

        
        $__internal_232325662b4b760bbf0cca4be5ba54d2ddcb1261c885fbc6ffc03f3648e0c1b8->leave($__internal_232325662b4b760bbf0cca4be5ba54d2ddcb1261c885fbc6ffc03f3648e0c1b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
