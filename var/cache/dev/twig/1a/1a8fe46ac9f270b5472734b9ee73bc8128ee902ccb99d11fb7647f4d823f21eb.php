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
        $__internal_e2356ccb599fdb956decdf913a582a2c8ca24e1223719e338bc6e4294a0f4fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2356ccb599fdb956decdf913a582a2c8ca24e1223719e338bc6e4294a0f4fd0->enter($__internal_e2356ccb599fdb956decdf913a582a2c8ca24e1223719e338bc6e4294a0f4fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_7c38ad61f37caa2965a057eb98c393c8b95951f0a9e35b5fb72d4b43d44858ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c38ad61f37caa2965a057eb98c393c8b95951f0a9e35b5fb72d4b43d44858ee->enter($__internal_7c38ad61f37caa2965a057eb98c393c8b95951f0a9e35b5fb72d4b43d44858ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e2356ccb599fdb956decdf913a582a2c8ca24e1223719e338bc6e4294a0f4fd0->leave($__internal_e2356ccb599fdb956decdf913a582a2c8ca24e1223719e338bc6e4294a0f4fd0_prof);

        
        $__internal_7c38ad61f37caa2965a057eb98c393c8b95951f0a9e35b5fb72d4b43d44858ee->leave($__internal_7c38ad61f37caa2965a057eb98c393c8b95951f0a9e35b5fb72d4b43d44858ee_prof);

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
