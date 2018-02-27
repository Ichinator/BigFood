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
        $__internal_e710b88889345a1367bb037aa36c4ea22ceed0c4d8f66ff9d1781bc641a5549c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e710b88889345a1367bb037aa36c4ea22ceed0c4d8f66ff9d1781bc641a5549c->enter($__internal_e710b88889345a1367bb037aa36c4ea22ceed0c4d8f66ff9d1781bc641a5549c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_b7b43eb831d60a94e81c4a67671e1a001f47292a0077815258d39a1c4907c65c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b43eb831d60a94e81c4a67671e1a001f47292a0077815258d39a1c4907c65c->enter($__internal_b7b43eb831d60a94e81c4a67671e1a001f47292a0077815258d39a1c4907c65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e710b88889345a1367bb037aa36c4ea22ceed0c4d8f66ff9d1781bc641a5549c->leave($__internal_e710b88889345a1367bb037aa36c4ea22ceed0c4d8f66ff9d1781bc641a5549c_prof);

        
        $__internal_b7b43eb831d60a94e81c4a67671e1a001f47292a0077815258d39a1c4907c65c->leave($__internal_b7b43eb831d60a94e81c4a67671e1a001f47292a0077815258d39a1c4907c65c_prof);

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
