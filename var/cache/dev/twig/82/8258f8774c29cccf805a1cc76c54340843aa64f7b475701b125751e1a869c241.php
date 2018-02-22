<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f748505fbe719d3e84428c3aaffc992028098e14c733eb5af4e058f9cdcf525d extends Twig_Template
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
        $__internal_c2504fbf18de7d8fee9c96f34bdc6aa81c5f1e2ac3040587b5e27f4475cbda34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2504fbf18de7d8fee9c96f34bdc6aa81c5f1e2ac3040587b5e27f4475cbda34->enter($__internal_c2504fbf18de7d8fee9c96f34bdc6aa81c5f1e2ac3040587b5e27f4475cbda34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1ab7c1ad3728c1336f0d4a2581b491a17d8e389178eb0d7a244a2bdadebe3f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab7c1ad3728c1336f0d4a2581b491a17d8e389178eb0d7a244a2bdadebe3f4a->enter($__internal_1ab7c1ad3728c1336f0d4a2581b491a17d8e389178eb0d7a244a2bdadebe3f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c2504fbf18de7d8fee9c96f34bdc6aa81c5f1e2ac3040587b5e27f4475cbda34->leave($__internal_c2504fbf18de7d8fee9c96f34bdc6aa81c5f1e2ac3040587b5e27f4475cbda34_prof);

        
        $__internal_1ab7c1ad3728c1336f0d4a2581b491a17d8e389178eb0d7a244a2bdadebe3f4a->leave($__internal_1ab7c1ad3728c1336f0d4a2581b491a17d8e389178eb0d7a244a2bdadebe3f4a_prof);

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
