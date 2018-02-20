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
        $__internal_d680edb5b6fa42194212a3edab61d8ead6bf8b4ecf9e7529d3a153c973a30cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d680edb5b6fa42194212a3edab61d8ead6bf8b4ecf9e7529d3a153c973a30cb6->enter($__internal_d680edb5b6fa42194212a3edab61d8ead6bf8b4ecf9e7529d3a153c973a30cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_7bfd320c3d25a99340cc2debeb000598d59cdc957a1c1f6c646c61f952076aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bfd320c3d25a99340cc2debeb000598d59cdc957a1c1f6c646c61f952076aa6->enter($__internal_7bfd320c3d25a99340cc2debeb000598d59cdc957a1c1f6c646c61f952076aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d680edb5b6fa42194212a3edab61d8ead6bf8b4ecf9e7529d3a153c973a30cb6->leave($__internal_d680edb5b6fa42194212a3edab61d8ead6bf8b4ecf9e7529d3a153c973a30cb6_prof);

        
        $__internal_7bfd320c3d25a99340cc2debeb000598d59cdc957a1c1f6c646c61f952076aa6->leave($__internal_7bfd320c3d25a99340cc2debeb000598d59cdc957a1c1f6c646c61f952076aa6_prof);

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
