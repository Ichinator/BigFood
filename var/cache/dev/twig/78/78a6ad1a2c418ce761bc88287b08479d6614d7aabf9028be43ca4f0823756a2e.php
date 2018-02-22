<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_7285114d30a5ca034db136a0a535c5de339b09b7773656d2a6efe50acb9d4247 extends Twig_Template
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
        $__internal_b2a6699faea386be3507a250ee3d53835ab7a7f8284ddbaf30bd4d73aaea7a39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a6699faea386be3507a250ee3d53835ab7a7f8284ddbaf30bd4d73aaea7a39->enter($__internal_b2a6699faea386be3507a250ee3d53835ab7a7f8284ddbaf30bd4d73aaea7a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_6a5088ebc5e5276dee488ef0787a3f557b6e7f7519687e105545ec79f69acf0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5088ebc5e5276dee488ef0787a3f557b6e7f7519687e105545ec79f69acf0e->enter($__internal_6a5088ebc5e5276dee488ef0787a3f557b6e7f7519687e105545ec79f69acf0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b2a6699faea386be3507a250ee3d53835ab7a7f8284ddbaf30bd4d73aaea7a39->leave($__internal_b2a6699faea386be3507a250ee3d53835ab7a7f8284ddbaf30bd4d73aaea7a39_prof);

        
        $__internal_6a5088ebc5e5276dee488ef0787a3f557b6e7f7519687e105545ec79f69acf0e->leave($__internal_6a5088ebc5e5276dee488ef0787a3f557b6e7f7519687e105545ec79f69acf0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
