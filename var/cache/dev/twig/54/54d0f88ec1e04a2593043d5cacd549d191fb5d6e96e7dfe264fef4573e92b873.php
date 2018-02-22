<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_9f7e82b22d3713fb122212d4225b181f7f7c9fb5b8f6fd60961ca2434997cf76 extends Twig_Template
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
        $__internal_5417e1b897dbad4809b6a5099b385fc2473028ce3637b8b32fb84522d6ee87dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5417e1b897dbad4809b6a5099b385fc2473028ce3637b8b32fb84522d6ee87dd->enter($__internal_5417e1b897dbad4809b6a5099b385fc2473028ce3637b8b32fb84522d6ee87dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_dac3415b338c5b571e672a9d31992ca38038e81fce0f8e18ec34656ea8455cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac3415b338c5b571e672a9d31992ca38038e81fce0f8e18ec34656ea8455cf3->enter($__internal_dac3415b338c5b571e672a9d31992ca38038e81fce0f8e18ec34656ea8455cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_5417e1b897dbad4809b6a5099b385fc2473028ce3637b8b32fb84522d6ee87dd->leave($__internal_5417e1b897dbad4809b6a5099b385fc2473028ce3637b8b32fb84522d6ee87dd_prof);

        
        $__internal_dac3415b338c5b571e672a9d31992ca38038e81fce0f8e18ec34656ea8455cf3->leave($__internal_dac3415b338c5b571e672a9d31992ca38038e81fce0f8e18ec34656ea8455cf3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
