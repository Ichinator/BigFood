<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_bb552177007c5c71ca85b0f2d917f62f651ef0c9396cd2e6dec5d8258e26f114 extends Twig_Template
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
        $__internal_42b82bd9b3c6ea7a4ad92c6a67b4fdfe63dfe31096eedd8ae37e91040c667fb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42b82bd9b3c6ea7a4ad92c6a67b4fdfe63dfe31096eedd8ae37e91040c667fb3->enter($__internal_42b82bd9b3c6ea7a4ad92c6a67b4fdfe63dfe31096eedd8ae37e91040c667fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_92d5e0fbaf1336d4664d222b98970331f36946147ddaf887770bab01562af36d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d5e0fbaf1336d4664d222b98970331f36946147ddaf887770bab01562af36d->enter($__internal_92d5e0fbaf1336d4664d222b98970331f36946147ddaf887770bab01562af36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_42b82bd9b3c6ea7a4ad92c6a67b4fdfe63dfe31096eedd8ae37e91040c667fb3->leave($__internal_42b82bd9b3c6ea7a4ad92c6a67b4fdfe63dfe31096eedd8ae37e91040c667fb3_prof);

        
        $__internal_92d5e0fbaf1336d4664d222b98970331f36946147ddaf887770bab01562af36d->leave($__internal_92d5e0fbaf1336d4664d222b98970331f36946147ddaf887770bab01562af36d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
