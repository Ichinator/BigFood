<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_ae7c0be6f915ffc18d4bca2d56e4ed3f1646293ae64ece4eca34fbe043a8a278 extends Twig_Template
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
        $__internal_6b65b94f4753fd8b73c3c77e27c349b20aec9dc2b5beb585f99eef21e2d57683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b65b94f4753fd8b73c3c77e27c349b20aec9dc2b5beb585f99eef21e2d57683->enter($__internal_6b65b94f4753fd8b73c3c77e27c349b20aec9dc2b5beb585f99eef21e2d57683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_5856966ae2727875de9512780f062ea261243f40a2e15d14a6e1c5957fc97422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5856966ae2727875de9512780f062ea261243f40a2e15d14a6e1c5957fc97422->enter($__internal_5856966ae2727875de9512780f062ea261243f40a2e15d14a6e1c5957fc97422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_6b65b94f4753fd8b73c3c77e27c349b20aec9dc2b5beb585f99eef21e2d57683->leave($__internal_6b65b94f4753fd8b73c3c77e27c349b20aec9dc2b5beb585f99eef21e2d57683_prof);

        
        $__internal_5856966ae2727875de9512780f062ea261243f40a2e15d14a6e1c5957fc97422->leave($__internal_5856966ae2727875de9512780f062ea261243f40a2e15d14a6e1c5957fc97422_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
