<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_5b196c07de6793d9580efffa7e15356b52eb096f01e93f4cb141d06dabf93200 extends Twig_Template
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
        $__internal_691b60509dd55bf8e6a767cc7786859e3a9b1ba77db7fdf1ddb3fdde66c9bf74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_691b60509dd55bf8e6a767cc7786859e3a9b1ba77db7fdf1ddb3fdde66c9bf74->enter($__internal_691b60509dd55bf8e6a767cc7786859e3a9b1ba77db7fdf1ddb3fdde66c9bf74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_e7bbf2b21aebdae2db1b28dfcb911bfeeec38ba86808b60a33c9ab1f66f73c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7bbf2b21aebdae2db1b28dfcb911bfeeec38ba86808b60a33c9ab1f66f73c6d->enter($__internal_e7bbf2b21aebdae2db1b28dfcb911bfeeec38ba86808b60a33c9ab1f66f73c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_691b60509dd55bf8e6a767cc7786859e3a9b1ba77db7fdf1ddb3fdde66c9bf74->leave($__internal_691b60509dd55bf8e6a767cc7786859e3a9b1ba77db7fdf1ddb3fdde66c9bf74_prof);

        
        $__internal_e7bbf2b21aebdae2db1b28dfcb911bfeeec38ba86808b60a33c9ab1f66f73c6d->leave($__internal_e7bbf2b21aebdae2db1b28dfcb911bfeeec38ba86808b60a33c9ab1f66f73c6d_prof);

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
