<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_51d33f79332bd4bb5076767cc0f5f522a4794636d75661c4f1f0aae789b77687 extends Twig_Template
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
        $__internal_89f52a5e7ef769628147ff6361e3f633e529b2c56bc992d0645e6b8fd14e4d02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89f52a5e7ef769628147ff6361e3f633e529b2c56bc992d0645e6b8fd14e4d02->enter($__internal_89f52a5e7ef769628147ff6361e3f633e529b2c56bc992d0645e6b8fd14e4d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_6dcae19e9843beb2c15c242e5de4acb7aad3e6139d1212e617ca0b6ca6709d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dcae19e9843beb2c15c242e5de4acb7aad3e6139d1212e617ca0b6ca6709d18->enter($__internal_6dcae19e9843beb2c15c242e5de4acb7aad3e6139d1212e617ca0b6ca6709d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_89f52a5e7ef769628147ff6361e3f633e529b2c56bc992d0645e6b8fd14e4d02->leave($__internal_89f52a5e7ef769628147ff6361e3f633e529b2c56bc992d0645e6b8fd14e4d02_prof);

        
        $__internal_6dcae19e9843beb2c15c242e5de4acb7aad3e6139d1212e617ca0b6ca6709d18->leave($__internal_6dcae19e9843beb2c15c242e5de4acb7aad3e6139d1212e617ca0b6ca6709d18_prof);

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
