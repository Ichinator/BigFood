<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6a72f599d8eca551b1a54b769ab92be07b8a90f6e99b69bb6e87ba5a68152319 extends Twig_Template
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
        $__internal_b898d7e540128b65bdad6bcb8a11f3c4978df47bcf2e0f32a371fda930c61967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b898d7e540128b65bdad6bcb8a11f3c4978df47bcf2e0f32a371fda930c61967->enter($__internal_b898d7e540128b65bdad6bcb8a11f3c4978df47bcf2e0f32a371fda930c61967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_3a5a0c91e89cf2a01a58eec5a976d704014b7e90bd26c429e9e0d16ac7e1b70f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a5a0c91e89cf2a01a58eec5a976d704014b7e90bd26c429e9e0d16ac7e1b70f->enter($__internal_3a5a0c91e89cf2a01a58eec5a976d704014b7e90bd26c429e9e0d16ac7e1b70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b898d7e540128b65bdad6bcb8a11f3c4978df47bcf2e0f32a371fda930c61967->leave($__internal_b898d7e540128b65bdad6bcb8a11f3c4978df47bcf2e0f32a371fda930c61967_prof);

        
        $__internal_3a5a0c91e89cf2a01a58eec5a976d704014b7e90bd26c429e9e0d16ac7e1b70f->leave($__internal_3a5a0c91e89cf2a01a58eec5a976d704014b7e90bd26c429e9e0d16ac7e1b70f_prof);

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
