<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_5e50565b0eed54cd3704afd288f6d8294f329fd9d8afd9cd4f6a3ff5fa3bd619 extends Twig_Template
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
        $__internal_89ea785fc4aa1f5faf65faa0e01dd5dc730d67785328323fcb0892f16752b3cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ea785fc4aa1f5faf65faa0e01dd5dc730d67785328323fcb0892f16752b3cd->enter($__internal_89ea785fc4aa1f5faf65faa0e01dd5dc730d67785328323fcb0892f16752b3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_72542f72cddcb3856661d4f14ad415390d7fed1b84877f9a03a42b13a6c4d4b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72542f72cddcb3856661d4f14ad415390d7fed1b84877f9a03a42b13a6c4d4b8->enter($__internal_72542f72cddcb3856661d4f14ad415390d7fed1b84877f9a03a42b13a6c4d4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_89ea785fc4aa1f5faf65faa0e01dd5dc730d67785328323fcb0892f16752b3cd->leave($__internal_89ea785fc4aa1f5faf65faa0e01dd5dc730d67785328323fcb0892f16752b3cd_prof);

        
        $__internal_72542f72cddcb3856661d4f14ad415390d7fed1b84877f9a03a42b13a6c4d4b8->leave($__internal_72542f72cddcb3856661d4f14ad415390d7fed1b84877f9a03a42b13a6c4d4b8_prof);

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
