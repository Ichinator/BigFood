<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_74f87bec213198d5574de303c7d2db423f42e26490044dce56b64df5884edb51 extends Twig_Template
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
        $__internal_36415038e93debb8bc16798709d41128731773e1d5f12eb447b5ee51f534bec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36415038e93debb8bc16798709d41128731773e1d5f12eb447b5ee51f534bec7->enter($__internal_36415038e93debb8bc16798709d41128731773e1d5f12eb447b5ee51f534bec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_b5fac6d7b47710013239882440a7ade0276e468de491602931b8456549e49f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5fac6d7b47710013239882440a7ade0276e468de491602931b8456549e49f34->enter($__internal_b5fac6d7b47710013239882440a7ade0276e468de491602931b8456549e49f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_36415038e93debb8bc16798709d41128731773e1d5f12eb447b5ee51f534bec7->leave($__internal_36415038e93debb8bc16798709d41128731773e1d5f12eb447b5ee51f534bec7_prof);

        
        $__internal_b5fac6d7b47710013239882440a7ade0276e468de491602931b8456549e49f34->leave($__internal_b5fac6d7b47710013239882440a7ade0276e468de491602931b8456549e49f34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
