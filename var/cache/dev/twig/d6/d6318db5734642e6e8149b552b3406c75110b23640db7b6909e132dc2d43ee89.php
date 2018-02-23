<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_d681c30b258442a2fa368ee8aac02b9fcb35d748363dbe586cdff9d7f4a5f3f9 extends Twig_Template
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
        $__internal_8e98286c6c573fc5a48c3b9700f3edb66f1fdf6cc85a47b7de5918461fbf0c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e98286c6c573fc5a48c3b9700f3edb66f1fdf6cc85a47b7de5918461fbf0c74->enter($__internal_8e98286c6c573fc5a48c3b9700f3edb66f1fdf6cc85a47b7de5918461fbf0c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e4fc0083b12010650e144b6cfdfbe2a6dc1f0cd46614b962de6c5889d78ac5fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4fc0083b12010650e144b6cfdfbe2a6dc1f0cd46614b962de6c5889d78ac5fc->enter($__internal_e4fc0083b12010650e144b6cfdfbe2a6dc1f0cd46614b962de6c5889d78ac5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_8e98286c6c573fc5a48c3b9700f3edb66f1fdf6cc85a47b7de5918461fbf0c74->leave($__internal_8e98286c6c573fc5a48c3b9700f3edb66f1fdf6cc85a47b7de5918461fbf0c74_prof);

        
        $__internal_e4fc0083b12010650e144b6cfdfbe2a6dc1f0cd46614b962de6c5889d78ac5fc->leave($__internal_e4fc0083b12010650e144b6cfdfbe2a6dc1f0cd46614b962de6c5889d78ac5fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
