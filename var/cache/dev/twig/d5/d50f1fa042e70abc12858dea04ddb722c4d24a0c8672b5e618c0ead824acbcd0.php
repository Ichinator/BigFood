<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_227128a408ae318382fec02564ee02087d68170a6156544bd8fd1817750595a8 extends Twig_Template
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
        $__internal_404e6b3db6816f226f1e6003a2ac3e9a652c47add89508f5bd8a706247b96099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_404e6b3db6816f226f1e6003a2ac3e9a652c47add89508f5bd8a706247b96099->enter($__internal_404e6b3db6816f226f1e6003a2ac3e9a652c47add89508f5bd8a706247b96099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_b84e6f03542f61a6e1bc13c6f0c8b4d6e3c91f5e7174533ede5e3ea0f9501ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b84e6f03542f61a6e1bc13c6f0c8b4d6e3c91f5e7174533ede5e3ea0f9501ca3->enter($__internal_b84e6f03542f61a6e1bc13c6f0c8b4d6e3c91f5e7174533ede5e3ea0f9501ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_404e6b3db6816f226f1e6003a2ac3e9a652c47add89508f5bd8a706247b96099->leave($__internal_404e6b3db6816f226f1e6003a2ac3e9a652c47add89508f5bd8a706247b96099_prof);

        
        $__internal_b84e6f03542f61a6e1bc13c6f0c8b4d6e3c91f5e7174533ede5e3ea0f9501ca3->leave($__internal_b84e6f03542f61a6e1bc13c6f0c8b4d6e3c91f5e7174533ede5e3ea0f9501ca3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
