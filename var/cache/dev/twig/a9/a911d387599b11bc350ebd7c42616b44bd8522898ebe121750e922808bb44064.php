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
        $__internal_a08a8cd8b0da238241f471cea4ddd1d8fbd6b738c3b29cfa46d6fefa264880bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a08a8cd8b0da238241f471cea4ddd1d8fbd6b738c3b29cfa46d6fefa264880bf->enter($__internal_a08a8cd8b0da238241f471cea4ddd1d8fbd6b738c3b29cfa46d6fefa264880bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_3b08a7ad76be9e0645a3da5f724a0e6fb546525bf370e27a8509fc83bfb10960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b08a7ad76be9e0645a3da5f724a0e6fb546525bf370e27a8509fc83bfb10960->enter($__internal_3b08a7ad76be9e0645a3da5f724a0e6fb546525bf370e27a8509fc83bfb10960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a08a8cd8b0da238241f471cea4ddd1d8fbd6b738c3b29cfa46d6fefa264880bf->leave($__internal_a08a8cd8b0da238241f471cea4ddd1d8fbd6b738c3b29cfa46d6fefa264880bf_prof);

        
        $__internal_3b08a7ad76be9e0645a3da5f724a0e6fb546525bf370e27a8509fc83bfb10960->leave($__internal_3b08a7ad76be9e0645a3da5f724a0e6fb546525bf370e27a8509fc83bfb10960_prof);

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
