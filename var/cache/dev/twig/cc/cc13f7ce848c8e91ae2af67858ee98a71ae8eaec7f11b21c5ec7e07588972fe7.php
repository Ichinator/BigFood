<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_e7d0626bac98cd864b9b66c10fe5413dcedc02df3b45693ac437155da55f84fc extends Twig_Template
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
        $__internal_061136a51831f0cec06505ee1a1a11fffb3f04fb75c27497d39eb6985df2524b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_061136a51831f0cec06505ee1a1a11fffb3f04fb75c27497d39eb6985df2524b->enter($__internal_061136a51831f0cec06505ee1a1a11fffb3f04fb75c27497d39eb6985df2524b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_678e853133fcacbe6044095f7ff7e1ddd573e20b11927407578692c49bb9b82c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_678e853133fcacbe6044095f7ff7e1ddd573e20b11927407578692c49bb9b82c->enter($__internal_678e853133fcacbe6044095f7ff7e1ddd573e20b11927407578692c49bb9b82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_061136a51831f0cec06505ee1a1a11fffb3f04fb75c27497d39eb6985df2524b->leave($__internal_061136a51831f0cec06505ee1a1a11fffb3f04fb75c27497d39eb6985df2524b_prof);

        
        $__internal_678e853133fcacbe6044095f7ff7e1ddd573e20b11927407578692c49bb9b82c->leave($__internal_678e853133fcacbe6044095f7ff7e1ddd573e20b11927407578692c49bb9b82c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
