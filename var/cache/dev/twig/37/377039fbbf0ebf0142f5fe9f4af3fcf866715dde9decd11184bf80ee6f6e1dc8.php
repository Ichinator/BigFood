<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_f366ba3dbec13e15ca14a56495cf1d98fbeb643959b8d1c0fe842e1a5d012ca0 extends Twig_Template
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
        $__internal_006cd9e0211a5aef5d9b799bdc019721a92816f0ba77087a4a31a04ea51bf799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_006cd9e0211a5aef5d9b799bdc019721a92816f0ba77087a4a31a04ea51bf799->enter($__internal_006cd9e0211a5aef5d9b799bdc019721a92816f0ba77087a4a31a04ea51bf799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_6c7a1bc975777657f796680e7d80cf296248eb9f215c77574a9905e4db586886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c7a1bc975777657f796680e7d80cf296248eb9f215c77574a9905e4db586886->enter($__internal_6c7a1bc975777657f796680e7d80cf296248eb9f215c77574a9905e4db586886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_006cd9e0211a5aef5d9b799bdc019721a92816f0ba77087a4a31a04ea51bf799->leave($__internal_006cd9e0211a5aef5d9b799bdc019721a92816f0ba77087a4a31a04ea51bf799_prof);

        
        $__internal_6c7a1bc975777657f796680e7d80cf296248eb9f215c77574a9905e4db586886->leave($__internal_6c7a1bc975777657f796680e7d80cf296248eb9f215c77574a9905e4db586886_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
