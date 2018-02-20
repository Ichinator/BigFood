<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5a1c9b0eb5cc2362e29b1da7940dbf60bd30ad35efe95d0f84b087b773645ae7 extends Twig_Template
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
        $__internal_5325f9a257c149e5c279f52ec97f89c9da3c933d28befe26caed52590fba9398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5325f9a257c149e5c279f52ec97f89c9da3c933d28befe26caed52590fba9398->enter($__internal_5325f9a257c149e5c279f52ec97f89c9da3c933d28befe26caed52590fba9398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_b2d99e02114d6b3769ad865877d23b11cd8aba701bda19b8c92295fb17156fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d99e02114d6b3769ad865877d23b11cd8aba701bda19b8c92295fb17156fd0->enter($__internal_b2d99e02114d6b3769ad865877d23b11cd8aba701bda19b8c92295fb17156fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5325f9a257c149e5c279f52ec97f89c9da3c933d28befe26caed52590fba9398->leave($__internal_5325f9a257c149e5c279f52ec97f89c9da3c933d28befe26caed52590fba9398_prof);

        
        $__internal_b2d99e02114d6b3769ad865877d23b11cd8aba701bda19b8c92295fb17156fd0->leave($__internal_b2d99e02114d6b3769ad865877d23b11cd8aba701bda19b8c92295fb17156fd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
