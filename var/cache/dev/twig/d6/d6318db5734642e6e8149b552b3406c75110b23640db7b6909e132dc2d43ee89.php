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
        $__internal_3b64f80b02aece78686035ac62758c9b635f6a0e0075b1b6d686565f4de36181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b64f80b02aece78686035ac62758c9b635f6a0e0075b1b6d686565f4de36181->enter($__internal_3b64f80b02aece78686035ac62758c9b635f6a0e0075b1b6d686565f4de36181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_6c1f804007ae5cb92f6c90841e1ade3500ae09dada09cc43e0755acc69b9c3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1f804007ae5cb92f6c90841e1ade3500ae09dada09cc43e0755acc69b9c3a9->enter($__internal_6c1f804007ae5cb92f6c90841e1ade3500ae09dada09cc43e0755acc69b9c3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3b64f80b02aece78686035ac62758c9b635f6a0e0075b1b6d686565f4de36181->leave($__internal_3b64f80b02aece78686035ac62758c9b635f6a0e0075b1b6d686565f4de36181_prof);

        
        $__internal_6c1f804007ae5cb92f6c90841e1ade3500ae09dada09cc43e0755acc69b9c3a9->leave($__internal_6c1f804007ae5cb92f6c90841e1ade3500ae09dada09cc43e0755acc69b9c3a9_prof);

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
