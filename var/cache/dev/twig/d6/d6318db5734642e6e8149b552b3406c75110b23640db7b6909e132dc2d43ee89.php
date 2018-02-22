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
        $__internal_027a24b0abc9680797433fa3f19d7aab9e3699611d7b58cbc4d8a454c51d9b61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_027a24b0abc9680797433fa3f19d7aab9e3699611d7b58cbc4d8a454c51d9b61->enter($__internal_027a24b0abc9680797433fa3f19d7aab9e3699611d7b58cbc4d8a454c51d9b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_b207b17953f1f613b1009e4bddd0b352e91ffefd953ddafd2c745809ea717975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b207b17953f1f613b1009e4bddd0b352e91ffefd953ddafd2c745809ea717975->enter($__internal_b207b17953f1f613b1009e4bddd0b352e91ffefd953ddafd2c745809ea717975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_027a24b0abc9680797433fa3f19d7aab9e3699611d7b58cbc4d8a454c51d9b61->leave($__internal_027a24b0abc9680797433fa3f19d7aab9e3699611d7b58cbc4d8a454c51d9b61_prof);

        
        $__internal_b207b17953f1f613b1009e4bddd0b352e91ffefd953ddafd2c745809ea717975->leave($__internal_b207b17953f1f613b1009e4bddd0b352e91ffefd953ddafd2c745809ea717975_prof);

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
