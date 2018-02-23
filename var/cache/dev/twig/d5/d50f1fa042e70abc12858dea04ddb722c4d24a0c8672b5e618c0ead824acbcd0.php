<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_227128a408ae318382fec02564ee02087d68170a6156544bd8fd1817750595a8 extends Twig_Template
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
        $__internal_2c0ee25f45bcd32785047058141946a3886a1dc37d3140c322e63dcc847fa990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c0ee25f45bcd32785047058141946a3886a1dc37d3140c322e63dcc847fa990->enter($__internal_2c0ee25f45bcd32785047058141946a3886a1dc37d3140c322e63dcc847fa990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_9060cee00c31924a5b2b6aca64c0dd8c9dbf6432b819adbf048a384c554bebfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9060cee00c31924a5b2b6aca64c0dd8c9dbf6432b819adbf048a384c554bebfd->enter($__internal_9060cee00c31924a5b2b6aca64c0dd8c9dbf6432b819adbf048a384c554bebfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_2c0ee25f45bcd32785047058141946a3886a1dc37d3140c322e63dcc847fa990->leave($__internal_2c0ee25f45bcd32785047058141946a3886a1dc37d3140c322e63dcc847fa990_prof);

        
        $__internal_9060cee00c31924a5b2b6aca64c0dd8c9dbf6432b819adbf048a384c554bebfd->leave($__internal_9060cee00c31924a5b2b6aca64c0dd8c9dbf6432b819adbf048a384c554bebfd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
