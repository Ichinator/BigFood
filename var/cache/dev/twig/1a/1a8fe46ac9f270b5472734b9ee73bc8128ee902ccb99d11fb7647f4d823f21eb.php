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
        $__internal_dc1fe29083a31284d7d23288d64d28e16aa02a313414a6fe86b2889580bcc7d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc1fe29083a31284d7d23288d64d28e16aa02a313414a6fe86b2889580bcc7d9->enter($__internal_dc1fe29083a31284d7d23288d64d28e16aa02a313414a6fe86b2889580bcc7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_4b067d1c741f8ba0ec5cae8b886288d179811ff923bacad92cadf45bb85bc668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b067d1c741f8ba0ec5cae8b886288d179811ff923bacad92cadf45bb85bc668->enter($__internal_4b067d1c741f8ba0ec5cae8b886288d179811ff923bacad92cadf45bb85bc668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_dc1fe29083a31284d7d23288d64d28e16aa02a313414a6fe86b2889580bcc7d9->leave($__internal_dc1fe29083a31284d7d23288d64d28e16aa02a313414a6fe86b2889580bcc7d9_prof);

        
        $__internal_4b067d1c741f8ba0ec5cae8b886288d179811ff923bacad92cadf45bb85bc668->leave($__internal_4b067d1c741f8ba0ec5cae8b886288d179811ff923bacad92cadf45bb85bc668_prof);

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
