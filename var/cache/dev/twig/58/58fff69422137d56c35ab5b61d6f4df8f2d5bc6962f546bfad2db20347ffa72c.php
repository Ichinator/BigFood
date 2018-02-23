<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_fe1ca619e25e85bf62efc3460e94811fd32c67e00969d569d8dc988b61fd28d2 extends Twig_Template
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
        $__internal_fd36611d633b4e7d4b96c371af50a163112f7aea2de9d54ad9c1fbafe2f771b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd36611d633b4e7d4b96c371af50a163112f7aea2de9d54ad9c1fbafe2f771b2->enter($__internal_fd36611d633b4e7d4b96c371af50a163112f7aea2de9d54ad9c1fbafe2f771b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_9caa04b73212cb25cb8b0eeea081b8ef91b73cdf6dfbef990ded21a72840fde0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9caa04b73212cb25cb8b0eeea081b8ef91b73cdf6dfbef990ded21a72840fde0->enter($__internal_9caa04b73212cb25cb8b0eeea081b8ef91b73cdf6dfbef990ded21a72840fde0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_fd36611d633b4e7d4b96c371af50a163112f7aea2de9d54ad9c1fbafe2f771b2->leave($__internal_fd36611d633b4e7d4b96c371af50a163112f7aea2de9d54ad9c1fbafe2f771b2_prof);

        
        $__internal_9caa04b73212cb25cb8b0eeea081b8ef91b73cdf6dfbef990ded21a72840fde0->leave($__internal_9caa04b73212cb25cb8b0eeea081b8ef91b73cdf6dfbef990ded21a72840fde0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
