<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_bb67e1da9e626af55152d2053149bbce9536c371b9a386a6fc1685fc7534d132 extends Twig_Template
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
        $__internal_76d55c196dee94171c55a5f89a23d71abc06c29ce0f085ab2735dd1a6ee15419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76d55c196dee94171c55a5f89a23d71abc06c29ce0f085ab2735dd1a6ee15419->enter($__internal_76d55c196dee94171c55a5f89a23d71abc06c29ce0f085ab2735dd1a6ee15419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_9975c20118b5d04337b240f45d2809ff73bfe3a98164f2cc45fa091dedb6ab4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9975c20118b5d04337b240f45d2809ff73bfe3a98164f2cc45fa091dedb6ab4a->enter($__internal_9975c20118b5d04337b240f45d2809ff73bfe3a98164f2cc45fa091dedb6ab4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_76d55c196dee94171c55a5f89a23d71abc06c29ce0f085ab2735dd1a6ee15419->leave($__internal_76d55c196dee94171c55a5f89a23d71abc06c29ce0f085ab2735dd1a6ee15419_prof);

        
        $__internal_9975c20118b5d04337b240f45d2809ff73bfe3a98164f2cc45fa091dedb6ab4a->leave($__internal_9975c20118b5d04337b240f45d2809ff73bfe3a98164f2cc45fa091dedb6ab4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
