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
        $__internal_439718650e14827096a7d6fffa718e03dee7da24f313cf26e0261e034d2f9289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_439718650e14827096a7d6fffa718e03dee7da24f313cf26e0261e034d2f9289->enter($__internal_439718650e14827096a7d6fffa718e03dee7da24f313cf26e0261e034d2f9289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_4cfe73ee4657db999b6571cdd8c3a6a5dfce070560cdc6f1314e3a390516838f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cfe73ee4657db999b6571cdd8c3a6a5dfce070560cdc6f1314e3a390516838f->enter($__internal_4cfe73ee4657db999b6571cdd8c3a6a5dfce070560cdc6f1314e3a390516838f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_439718650e14827096a7d6fffa718e03dee7da24f313cf26e0261e034d2f9289->leave($__internal_439718650e14827096a7d6fffa718e03dee7da24f313cf26e0261e034d2f9289_prof);

        
        $__internal_4cfe73ee4657db999b6571cdd8c3a6a5dfce070560cdc6f1314e3a390516838f->leave($__internal_4cfe73ee4657db999b6571cdd8c3a6a5dfce070560cdc6f1314e3a390516838f_prof);

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
