<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_becda890922a4aceb41b4d781d3c69d54eb6d6ea18ab531557a5b5f63d53236f extends Twig_Template
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
        $__internal_fcd4b03dc0731eb1f6df10c9d595f0c9a031838ce0fd2838461d81733dd2080e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcd4b03dc0731eb1f6df10c9d595f0c9a031838ce0fd2838461d81733dd2080e->enter($__internal_fcd4b03dc0731eb1f6df10c9d595f0c9a031838ce0fd2838461d81733dd2080e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_8d6bc0b920aaace69f5487c59d49a3aeed3032b156ffc0ebec7f3e06127571a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6bc0b920aaace69f5487c59d49a3aeed3032b156ffc0ebec7f3e06127571a3->enter($__internal_8d6bc0b920aaace69f5487c59d49a3aeed3032b156ffc0ebec7f3e06127571a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_fcd4b03dc0731eb1f6df10c9d595f0c9a031838ce0fd2838461d81733dd2080e->leave($__internal_fcd4b03dc0731eb1f6df10c9d595f0c9a031838ce0fd2838461d81733dd2080e_prof);

        
        $__internal_8d6bc0b920aaace69f5487c59d49a3aeed3032b156ffc0ebec7f3e06127571a3->leave($__internal_8d6bc0b920aaace69f5487c59d49a3aeed3032b156ffc0ebec7f3e06127571a3_prof);

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
