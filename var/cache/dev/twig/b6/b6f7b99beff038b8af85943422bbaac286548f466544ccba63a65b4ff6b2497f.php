<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_e033bcb7532a0afb1385b2228377d05a14f4311138878c5fc411ade2ab1baccc extends Twig_Template
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
        $__internal_7a0f30b9d6a366d7a4866c4383989ed76f562a285bc8406a9d744681ec8fe989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a0f30b9d6a366d7a4866c4383989ed76f562a285bc8406a9d744681ec8fe989->enter($__internal_7a0f30b9d6a366d7a4866c4383989ed76f562a285bc8406a9d744681ec8fe989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_40261de4e0aac0f1a4cf5d39f51af8e4673d68a4227cf52a974953e0dc8dd7c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40261de4e0aac0f1a4cf5d39f51af8e4673d68a4227cf52a974953e0dc8dd7c5->enter($__internal_40261de4e0aac0f1a4cf5d39f51af8e4673d68a4227cf52a974953e0dc8dd7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_7a0f30b9d6a366d7a4866c4383989ed76f562a285bc8406a9d744681ec8fe989->leave($__internal_7a0f30b9d6a366d7a4866c4383989ed76f562a285bc8406a9d744681ec8fe989_prof);

        
        $__internal_40261de4e0aac0f1a4cf5d39f51af8e4673d68a4227cf52a974953e0dc8dd7c5->leave($__internal_40261de4e0aac0f1a4cf5d39f51af8e4673d68a4227cf52a974953e0dc8dd7c5_prof);

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
