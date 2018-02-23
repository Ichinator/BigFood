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
        $__internal_602f648177c2dca3bb4f8f1f2a555f70b2b6a6768c7ed499380ab53e835e545d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_602f648177c2dca3bb4f8f1f2a555f70b2b6a6768c7ed499380ab53e835e545d->enter($__internal_602f648177c2dca3bb4f8f1f2a555f70b2b6a6768c7ed499380ab53e835e545d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_caefd00d6aa75b98cbd3222958e7db4b31aa16a16c7df749072b99b3134ea896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caefd00d6aa75b98cbd3222958e7db4b31aa16a16c7df749072b99b3134ea896->enter($__internal_caefd00d6aa75b98cbd3222958e7db4b31aa16a16c7df749072b99b3134ea896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_602f648177c2dca3bb4f8f1f2a555f70b2b6a6768c7ed499380ab53e835e545d->leave($__internal_602f648177c2dca3bb4f8f1f2a555f70b2b6a6768c7ed499380ab53e835e545d_prof);

        
        $__internal_caefd00d6aa75b98cbd3222958e7db4b31aa16a16c7df749072b99b3134ea896->leave($__internal_caefd00d6aa75b98cbd3222958e7db4b31aa16a16c7df749072b99b3134ea896_prof);

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
