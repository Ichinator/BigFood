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
        $__internal_5763411eda803902a11cbba40c53196de13ebf49f9be9da71dc66f2744f750f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5763411eda803902a11cbba40c53196de13ebf49f9be9da71dc66f2744f750f9->enter($__internal_5763411eda803902a11cbba40c53196de13ebf49f9be9da71dc66f2744f750f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_5c7889daa145c5191d6fd10db7d9facf39feafd35e9c1cf83655c1302023209c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7889daa145c5191d6fd10db7d9facf39feafd35e9c1cf83655c1302023209c->enter($__internal_5c7889daa145c5191d6fd10db7d9facf39feafd35e9c1cf83655c1302023209c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5763411eda803902a11cbba40c53196de13ebf49f9be9da71dc66f2744f750f9->leave($__internal_5763411eda803902a11cbba40c53196de13ebf49f9be9da71dc66f2744f750f9_prof);

        
        $__internal_5c7889daa145c5191d6fd10db7d9facf39feafd35e9c1cf83655c1302023209c->leave($__internal_5c7889daa145c5191d6fd10db7d9facf39feafd35e9c1cf83655c1302023209c_prof);

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
