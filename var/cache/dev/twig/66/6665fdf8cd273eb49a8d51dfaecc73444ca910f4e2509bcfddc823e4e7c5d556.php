<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_281d489087088fbebb580c1aeba8690e0ce91b86142214eb5a455bffc894109b extends Twig_Template
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
        $__internal_a4fc8493918d3769efd0df67506d7aca8cd52135bacca0c25f2f26b4840eb5a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4fc8493918d3769efd0df67506d7aca8cd52135bacca0c25f2f26b4840eb5a4->enter($__internal_a4fc8493918d3769efd0df67506d7aca8cd52135bacca0c25f2f26b4840eb5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_86917242e037e965cbe0b1e0079f853c64cab66f93ead14f4bfd759e56c38d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86917242e037e965cbe0b1e0079f853c64cab66f93ead14f4bfd759e56c38d33->enter($__internal_86917242e037e965cbe0b1e0079f853c64cab66f93ead14f4bfd759e56c38d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a4fc8493918d3769efd0df67506d7aca8cd52135bacca0c25f2f26b4840eb5a4->leave($__internal_a4fc8493918d3769efd0df67506d7aca8cd52135bacca0c25f2f26b4840eb5a4_prof);

        
        $__internal_86917242e037e965cbe0b1e0079f853c64cab66f93ead14f4bfd759e56c38d33->leave($__internal_86917242e037e965cbe0b1e0079f853c64cab66f93ead14f4bfd759e56c38d33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
