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
        $__internal_d6ec37cfbc29c5584f9a2310852d91cb0ff93708a2e0357fe6da94aacfb8288a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ec37cfbc29c5584f9a2310852d91cb0ff93708a2e0357fe6da94aacfb8288a->enter($__internal_d6ec37cfbc29c5584f9a2310852d91cb0ff93708a2e0357fe6da94aacfb8288a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_83c9e20766c2b0d4cacece13ae258759113ea5a07b74100c01454ae0be68ec45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c9e20766c2b0d4cacece13ae258759113ea5a07b74100c01454ae0be68ec45->enter($__internal_83c9e20766c2b0d4cacece13ae258759113ea5a07b74100c01454ae0be68ec45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d6ec37cfbc29c5584f9a2310852d91cb0ff93708a2e0357fe6da94aacfb8288a->leave($__internal_d6ec37cfbc29c5584f9a2310852d91cb0ff93708a2e0357fe6da94aacfb8288a_prof);

        
        $__internal_83c9e20766c2b0d4cacece13ae258759113ea5a07b74100c01454ae0be68ec45->leave($__internal_83c9e20766c2b0d4cacece13ae258759113ea5a07b74100c01454ae0be68ec45_prof);

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
