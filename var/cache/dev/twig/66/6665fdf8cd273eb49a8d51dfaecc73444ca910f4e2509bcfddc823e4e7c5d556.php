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
        $__internal_ecf049deceeac7a272e1b7605af98bccf6aa176b84c0e657733543e8c3b7ecbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf049deceeac7a272e1b7605af98bccf6aa176b84c0e657733543e8c3b7ecbb->enter($__internal_ecf049deceeac7a272e1b7605af98bccf6aa176b84c0e657733543e8c3b7ecbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_5c7f121c88b1686925d4fca718d2b28b3a1cb0a7b329f518f1cb3df16708de62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7f121c88b1686925d4fca718d2b28b3a1cb0a7b329f518f1cb3df16708de62->enter($__internal_5c7f121c88b1686925d4fca718d2b28b3a1cb0a7b329f518f1cb3df16708de62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ecf049deceeac7a272e1b7605af98bccf6aa176b84c0e657733543e8c3b7ecbb->leave($__internal_ecf049deceeac7a272e1b7605af98bccf6aa176b84c0e657733543e8c3b7ecbb_prof);

        
        $__internal_5c7f121c88b1686925d4fca718d2b28b3a1cb0a7b329f518f1cb3df16708de62->leave($__internal_5c7f121c88b1686925d4fca718d2b28b3a1cb0a7b329f518f1cb3df16708de62_prof);

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
