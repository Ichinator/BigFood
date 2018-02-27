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
        $__internal_1ec9bd1b1210331ad998082ecbba34b9c067660e924b3b356c02d47481653d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ec9bd1b1210331ad998082ecbba34b9c067660e924b3b356c02d47481653d89->enter($__internal_1ec9bd1b1210331ad998082ecbba34b9c067660e924b3b356c02d47481653d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_0b76bfbc31a12857d520ccb480d224dc1369d319b17f7ac5fb6a5e49dd232aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b76bfbc31a12857d520ccb480d224dc1369d319b17f7ac5fb6a5e49dd232aca->enter($__internal_0b76bfbc31a12857d520ccb480d224dc1369d319b17f7ac5fb6a5e49dd232aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_1ec9bd1b1210331ad998082ecbba34b9c067660e924b3b356c02d47481653d89->leave($__internal_1ec9bd1b1210331ad998082ecbba34b9c067660e924b3b356c02d47481653d89_prof);

        
        $__internal_0b76bfbc31a12857d520ccb480d224dc1369d319b17f7ac5fb6a5e49dd232aca->leave($__internal_0b76bfbc31a12857d520ccb480d224dc1369d319b17f7ac5fb6a5e49dd232aca_prof);

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
