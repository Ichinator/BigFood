<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e49ec750850e70e4ce3fac7a4d5589de307e501e73e03d1fdfa3b1ab0a7584e6 extends Twig_Template
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
        $__internal_4d59a4d3d68bb7a9a8ac8c4468be45eb678b1636f6234d793e53a66fdffa38a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d59a4d3d68bb7a9a8ac8c4468be45eb678b1636f6234d793e53a66fdffa38a1->enter($__internal_4d59a4d3d68bb7a9a8ac8c4468be45eb678b1636f6234d793e53a66fdffa38a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_2c67ca0423440b650d88ce5efb3f193774c7fdb88fe63b6050e967660a49ec68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c67ca0423440b650d88ce5efb3f193774c7fdb88fe63b6050e967660a49ec68->enter($__internal_2c67ca0423440b650d88ce5efb3f193774c7fdb88fe63b6050e967660a49ec68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4d59a4d3d68bb7a9a8ac8c4468be45eb678b1636f6234d793e53a66fdffa38a1->leave($__internal_4d59a4d3d68bb7a9a8ac8c4468be45eb678b1636f6234d793e53a66fdffa38a1_prof);

        
        $__internal_2c67ca0423440b650d88ce5efb3f193774c7fdb88fe63b6050e967660a49ec68->leave($__internal_2c67ca0423440b650d88ce5efb3f193774c7fdb88fe63b6050e967660a49ec68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
