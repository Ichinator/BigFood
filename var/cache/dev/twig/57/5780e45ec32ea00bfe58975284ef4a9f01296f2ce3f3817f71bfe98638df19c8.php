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
        $__internal_51e958f1cd6f9346838a2b91078d4f47ae4b9ee5978a7f0aff91a89e26dfdcee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51e958f1cd6f9346838a2b91078d4f47ae4b9ee5978a7f0aff91a89e26dfdcee->enter($__internal_51e958f1cd6f9346838a2b91078d4f47ae4b9ee5978a7f0aff91a89e26dfdcee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_5287a03e0eec07cbbafd5ffd5cd526eecf591f25ab0260a4c94bde807b88f4c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5287a03e0eec07cbbafd5ffd5cd526eecf591f25ab0260a4c94bde807b88f4c1->enter($__internal_5287a03e0eec07cbbafd5ffd5cd526eecf591f25ab0260a4c94bde807b88f4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_51e958f1cd6f9346838a2b91078d4f47ae4b9ee5978a7f0aff91a89e26dfdcee->leave($__internal_51e958f1cd6f9346838a2b91078d4f47ae4b9ee5978a7f0aff91a89e26dfdcee_prof);

        
        $__internal_5287a03e0eec07cbbafd5ffd5cd526eecf591f25ab0260a4c94bde807b88f4c1->leave($__internal_5287a03e0eec07cbbafd5ffd5cd526eecf591f25ab0260a4c94bde807b88f4c1_prof);

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
