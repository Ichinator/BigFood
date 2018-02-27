<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2e37727e52297d03aa1c91db12f9f4178bd8ca589712e0d3ba20e4f25d77dd90 extends Twig_Template
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
        $__internal_bb4afa4a1eca3f6c4ce2b39dcd5c89473f9a3ef30ba1e6c9ce73f627505f5d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb4afa4a1eca3f6c4ce2b39dcd5c89473f9a3ef30ba1e6c9ce73f627505f5d89->enter($__internal_bb4afa4a1eca3f6c4ce2b39dcd5c89473f9a3ef30ba1e6c9ce73f627505f5d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_cc6592001fb4c369bb865025cedb25bf9f27571dab4be88955b71563a2d7c276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6592001fb4c369bb865025cedb25bf9f27571dab4be88955b71563a2d7c276->enter($__internal_cc6592001fb4c369bb865025cedb25bf9f27571dab4be88955b71563a2d7c276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_bb4afa4a1eca3f6c4ce2b39dcd5c89473f9a3ef30ba1e6c9ce73f627505f5d89->leave($__internal_bb4afa4a1eca3f6c4ce2b39dcd5c89473f9a3ef30ba1e6c9ce73f627505f5d89_prof);

        
        $__internal_cc6592001fb4c369bb865025cedb25bf9f27571dab4be88955b71563a2d7c276->leave($__internal_cc6592001fb4c369bb865025cedb25bf9f27571dab4be88955b71563a2d7c276_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
