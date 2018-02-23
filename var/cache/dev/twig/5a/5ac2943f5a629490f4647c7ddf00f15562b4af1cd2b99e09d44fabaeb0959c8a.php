<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_e58f0c4b03339107dd1b75f2368c3868d89929569e542c03ec15ac5b6f003f88 extends Twig_Template
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
        $__internal_0d049d41d79be311919d7aa9642ea2d67300ad7a629055e82ac607789f77f5c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d049d41d79be311919d7aa9642ea2d67300ad7a629055e82ac607789f77f5c1->enter($__internal_0d049d41d79be311919d7aa9642ea2d67300ad7a629055e82ac607789f77f5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_dea2395457b223386664dcaa3ec6fc5eaa80de8f02a91ef41c143e3e21ea5a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea2395457b223386664dcaa3ec6fc5eaa80de8f02a91ef41c143e3e21ea5a67->enter($__internal_dea2395457b223386664dcaa3ec6fc5eaa80de8f02a91ef41c143e3e21ea5a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_0d049d41d79be311919d7aa9642ea2d67300ad7a629055e82ac607789f77f5c1->leave($__internal_0d049d41d79be311919d7aa9642ea2d67300ad7a629055e82ac607789f77f5c1_prof);

        
        $__internal_dea2395457b223386664dcaa3ec6fc5eaa80de8f02a91ef41c143e3e21ea5a67->leave($__internal_dea2395457b223386664dcaa3ec6fc5eaa80de8f02a91ef41c143e3e21ea5a67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
