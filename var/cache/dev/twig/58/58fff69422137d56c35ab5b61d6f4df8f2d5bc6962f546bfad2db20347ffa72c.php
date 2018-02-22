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
        $__internal_aeb2d12d183d8d08e1718e1d59e21087d2f2bd479474850811cff1a74c3960b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeb2d12d183d8d08e1718e1d59e21087d2f2bd479474850811cff1a74c3960b9->enter($__internal_aeb2d12d183d8d08e1718e1d59e21087d2f2bd479474850811cff1a74c3960b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ef77150771d98fe2e66bf4c8e3f0f94ad59693eab0777e3183b03002a7654c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef77150771d98fe2e66bf4c8e3f0f94ad59693eab0777e3183b03002a7654c5d->enter($__internal_ef77150771d98fe2e66bf4c8e3f0f94ad59693eab0777e3183b03002a7654c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_aeb2d12d183d8d08e1718e1d59e21087d2f2bd479474850811cff1a74c3960b9->leave($__internal_aeb2d12d183d8d08e1718e1d59e21087d2f2bd479474850811cff1a74c3960b9_prof);

        
        $__internal_ef77150771d98fe2e66bf4c8e3f0f94ad59693eab0777e3183b03002a7654c5d->leave($__internal_ef77150771d98fe2e66bf4c8e3f0f94ad59693eab0777e3183b03002a7654c5d_prof);

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
