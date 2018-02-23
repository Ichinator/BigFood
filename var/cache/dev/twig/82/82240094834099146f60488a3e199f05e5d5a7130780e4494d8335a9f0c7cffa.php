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
        $__internal_b4862ee407e39b3dd1f1fa361a46591271963ade251e32aace58de4fb8554d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4862ee407e39b3dd1f1fa361a46591271963ade251e32aace58de4fb8554d7a->enter($__internal_b4862ee407e39b3dd1f1fa361a46591271963ade251e32aace58de4fb8554d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_b819c853185f29c7e4fe77a6c523a8b7a1ca1db0716f3936624672cfd2b49d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b819c853185f29c7e4fe77a6c523a8b7a1ca1db0716f3936624672cfd2b49d70->enter($__internal_b819c853185f29c7e4fe77a6c523a8b7a1ca1db0716f3936624672cfd2b49d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b4862ee407e39b3dd1f1fa361a46591271963ade251e32aace58de4fb8554d7a->leave($__internal_b4862ee407e39b3dd1f1fa361a46591271963ade251e32aace58de4fb8554d7a_prof);

        
        $__internal_b819c853185f29c7e4fe77a6c523a8b7a1ca1db0716f3936624672cfd2b49d70->leave($__internal_b819c853185f29c7e4fe77a6c523a8b7a1ca1db0716f3936624672cfd2b49d70_prof);

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
