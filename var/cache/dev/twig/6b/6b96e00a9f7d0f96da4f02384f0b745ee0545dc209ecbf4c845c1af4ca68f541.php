<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_87b3de82fcf2e33a1e1d28140af0fd92ca237d0896efe263d33dda21005e3975 extends Twig_Template
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
        $__internal_48f31130e1b6d7ee27b18a31a550a8d54ebd7d65e809a305077618cb19d42cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48f31130e1b6d7ee27b18a31a550a8d54ebd7d65e809a305077618cb19d42cb8->enter($__internal_48f31130e1b6d7ee27b18a31a550a8d54ebd7d65e809a305077618cb19d42cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_6f5374697d507fedb47c86eb24876acfb0d4c5a765eafcd86c83af51579c4c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f5374697d507fedb47c86eb24876acfb0d4c5a765eafcd86c83af51579c4c8b->enter($__internal_6f5374697d507fedb47c86eb24876acfb0d4c5a765eafcd86c83af51579c4c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_48f31130e1b6d7ee27b18a31a550a8d54ebd7d65e809a305077618cb19d42cb8->leave($__internal_48f31130e1b6d7ee27b18a31a550a8d54ebd7d65e809a305077618cb19d42cb8_prof);

        
        $__internal_6f5374697d507fedb47c86eb24876acfb0d4c5a765eafcd86c83af51579c4c8b->leave($__internal_6f5374697d507fedb47c86eb24876acfb0d4c5a765eafcd86c83af51579c4c8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
