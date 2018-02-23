<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_67bdc9e2a58748dfaef446ee8e10241b207961f4fb4c7e1cff60d3115ebed42d extends Twig_Template
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
        $__internal_50b072ab0da4bf18fd3f3c4e1dfef751118da2e11f2fadef8294d29369a0f0ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b072ab0da4bf18fd3f3c4e1dfef751118da2e11f2fadef8294d29369a0f0ed->enter($__internal_50b072ab0da4bf18fd3f3c4e1dfef751118da2e11f2fadef8294d29369a0f0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_229fc3ffbf2b087ff821346b254bc4850df1b2190d4eb71c4994697dac3c75f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_229fc3ffbf2b087ff821346b254bc4850df1b2190d4eb71c4994697dac3c75f7->enter($__internal_229fc3ffbf2b087ff821346b254bc4850df1b2190d4eb71c4994697dac3c75f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_50b072ab0da4bf18fd3f3c4e1dfef751118da2e11f2fadef8294d29369a0f0ed->leave($__internal_50b072ab0da4bf18fd3f3c4e1dfef751118da2e11f2fadef8294d29369a0f0ed_prof);

        
        $__internal_229fc3ffbf2b087ff821346b254bc4850df1b2190d4eb71c4994697dac3c75f7->leave($__internal_229fc3ffbf2b087ff821346b254bc4850df1b2190d4eb71c4994697dac3c75f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
