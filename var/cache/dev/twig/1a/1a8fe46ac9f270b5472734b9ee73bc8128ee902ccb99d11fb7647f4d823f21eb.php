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
        $__internal_d46503e3f38e1aa063a549da6bf1c3154535482fa59410d92bc8593440eeb834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d46503e3f38e1aa063a549da6bf1c3154535482fa59410d92bc8593440eeb834->enter($__internal_d46503e3f38e1aa063a549da6bf1c3154535482fa59410d92bc8593440eeb834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_47c9a46fdf99e8fadb09fc82376d4d7983cd060e0a268ff250d1439966eaf017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c9a46fdf99e8fadb09fc82376d4d7983cd060e0a268ff250d1439966eaf017->enter($__internal_47c9a46fdf99e8fadb09fc82376d4d7983cd060e0a268ff250d1439966eaf017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_d46503e3f38e1aa063a549da6bf1c3154535482fa59410d92bc8593440eeb834->leave($__internal_d46503e3f38e1aa063a549da6bf1c3154535482fa59410d92bc8593440eeb834_prof);

        
        $__internal_47c9a46fdf99e8fadb09fc82376d4d7983cd060e0a268ff250d1439966eaf017->leave($__internal_47c9a46fdf99e8fadb09fc82376d4d7983cd060e0a268ff250d1439966eaf017_prof);

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