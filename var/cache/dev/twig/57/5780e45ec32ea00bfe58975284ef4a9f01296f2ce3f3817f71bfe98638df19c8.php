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
        $__internal_2543049ea07d86c203bd8e5c2bf7577f555849b2197f9f7bd84f979e0eb36eee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2543049ea07d86c203bd8e5c2bf7577f555849b2197f9f7bd84f979e0eb36eee->enter($__internal_2543049ea07d86c203bd8e5c2bf7577f555849b2197f9f7bd84f979e0eb36eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_9d1645858e034adb0e28f0e5445d5ba94bb6c2921d53446a9fb2b4ff746ea81b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1645858e034adb0e28f0e5445d5ba94bb6c2921d53446a9fb2b4ff746ea81b->enter($__internal_9d1645858e034adb0e28f0e5445d5ba94bb6c2921d53446a9fb2b4ff746ea81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_2543049ea07d86c203bd8e5c2bf7577f555849b2197f9f7bd84f979e0eb36eee->leave($__internal_2543049ea07d86c203bd8e5c2bf7577f555849b2197f9f7bd84f979e0eb36eee_prof);

        
        $__internal_9d1645858e034adb0e28f0e5445d5ba94bb6c2921d53446a9fb2b4ff746ea81b->leave($__internal_9d1645858e034adb0e28f0e5445d5ba94bb6c2921d53446a9fb2b4ff746ea81b_prof);

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
