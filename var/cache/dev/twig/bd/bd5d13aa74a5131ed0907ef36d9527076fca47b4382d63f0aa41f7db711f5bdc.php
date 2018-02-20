<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_c1a13688cd1e6b5e1fe8ae819b9ecb2dc6772aabe552b927d7b98c2dd5ff6df5 extends Twig_Template
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
        $__internal_be2c93a44e27de4940eb76cdac0642e35ecfd6d3c9cf4f2fc900060ce16fdd3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be2c93a44e27de4940eb76cdac0642e35ecfd6d3c9cf4f2fc900060ce16fdd3d->enter($__internal_be2c93a44e27de4940eb76cdac0642e35ecfd6d3c9cf4f2fc900060ce16fdd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_e3b61a5545af058cbb745af14881b4eb086237686900e08166a98eaee80bedac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b61a5545af058cbb745af14881b4eb086237686900e08166a98eaee80bedac->enter($__internal_e3b61a5545af058cbb745af14881b4eb086237686900e08166a98eaee80bedac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_be2c93a44e27de4940eb76cdac0642e35ecfd6d3c9cf4f2fc900060ce16fdd3d->leave($__internal_be2c93a44e27de4940eb76cdac0642e35ecfd6d3c9cf4f2fc900060ce16fdd3d_prof);

        
        $__internal_e3b61a5545af058cbb745af14881b4eb086237686900e08166a98eaee80bedac->leave($__internal_e3b61a5545af058cbb745af14881b4eb086237686900e08166a98eaee80bedac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
