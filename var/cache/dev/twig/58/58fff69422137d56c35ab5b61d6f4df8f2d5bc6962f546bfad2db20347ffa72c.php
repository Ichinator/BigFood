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
        $__internal_7916d5f753329951347af4b0553e9c0af3e2d28780f88bc8167feba5b59fdbea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7916d5f753329951347af4b0553e9c0af3e2d28780f88bc8167feba5b59fdbea->enter($__internal_7916d5f753329951347af4b0553e9c0af3e2d28780f88bc8167feba5b59fdbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_08a3ec7cfad386cb21227f4bceeac4093b39ec24c5fa7ac113a2633ddcb83d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a3ec7cfad386cb21227f4bceeac4093b39ec24c5fa7ac113a2633ddcb83d05->enter($__internal_08a3ec7cfad386cb21227f4bceeac4093b39ec24c5fa7ac113a2633ddcb83d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_7916d5f753329951347af4b0553e9c0af3e2d28780f88bc8167feba5b59fdbea->leave($__internal_7916d5f753329951347af4b0553e9c0af3e2d28780f88bc8167feba5b59fdbea_prof);

        
        $__internal_08a3ec7cfad386cb21227f4bceeac4093b39ec24c5fa7ac113a2633ddcb83d05->leave($__internal_08a3ec7cfad386cb21227f4bceeac4093b39ec24c5fa7ac113a2633ddcb83d05_prof);

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
