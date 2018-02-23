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
        $__internal_4929779231d1c9c9f030431128e48c8ca5f1b08d1db9220c97a6fe4ae2a9df26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4929779231d1c9c9f030431128e48c8ca5f1b08d1db9220c97a6fe4ae2a9df26->enter($__internal_4929779231d1c9c9f030431128e48c8ca5f1b08d1db9220c97a6fe4ae2a9df26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_d90ffae6cc387a4a8a43525cae875e6180ad16d22ef2934e2c32e232453058dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90ffae6cc387a4a8a43525cae875e6180ad16d22ef2934e2c32e232453058dd->enter($__internal_d90ffae6cc387a4a8a43525cae875e6180ad16d22ef2934e2c32e232453058dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4929779231d1c9c9f030431128e48c8ca5f1b08d1db9220c97a6fe4ae2a9df26->leave($__internal_4929779231d1c9c9f030431128e48c8ca5f1b08d1db9220c97a6fe4ae2a9df26_prof);

        
        $__internal_d90ffae6cc387a4a8a43525cae875e6180ad16d22ef2934e2c32e232453058dd->leave($__internal_d90ffae6cc387a4a8a43525cae875e6180ad16d22ef2934e2c32e232453058dd_prof);

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
