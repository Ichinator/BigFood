<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_67cd0ac67fa1c76b9ecd0dbc529be64deceaf19b11415b59ce0a72a6d0ddab5a extends Twig_Template
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
        $__internal_d235c6801a77ba891c33ff8466e49a3994c0a3fcd101a76c189c8c0a454719d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d235c6801a77ba891c33ff8466e49a3994c0a3fcd101a76c189c8c0a454719d2->enter($__internal_d235c6801a77ba891c33ff8466e49a3994c0a3fcd101a76c189c8c0a454719d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_043762a96ed8de54bec35475a9451b77e3a6eed81a9f5362600196b799120f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043762a96ed8de54bec35475a9451b77e3a6eed81a9f5362600196b799120f88->enter($__internal_043762a96ed8de54bec35475a9451b77e3a6eed81a9f5362600196b799120f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d235c6801a77ba891c33ff8466e49a3994c0a3fcd101a76c189c8c0a454719d2->leave($__internal_d235c6801a77ba891c33ff8466e49a3994c0a3fcd101a76c189c8c0a454719d2_prof);

        
        $__internal_043762a96ed8de54bec35475a9451b77e3a6eed81a9f5362600196b799120f88->leave($__internal_043762a96ed8de54bec35475a9451b77e3a6eed81a9f5362600196b799120f88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
