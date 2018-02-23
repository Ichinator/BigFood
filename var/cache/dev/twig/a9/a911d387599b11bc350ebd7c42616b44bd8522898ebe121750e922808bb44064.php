<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_110e45016bd3e5a7e27b0a5017efa5a93cc785891620023e714613bcb5d4466a extends Twig_Template
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
        $__internal_960c16cedb6719e2b1104d6a4fe2d6c2edf1bbca19045d10d2375574384f6163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_960c16cedb6719e2b1104d6a4fe2d6c2edf1bbca19045d10d2375574384f6163->enter($__internal_960c16cedb6719e2b1104d6a4fe2d6c2edf1bbca19045d10d2375574384f6163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_f3f553466676e4b8a8745f27b3eb8067ba64e3d74c352ea766a66d1765b904d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f553466676e4b8a8745f27b3eb8067ba64e3d74c352ea766a66d1765b904d1->enter($__internal_f3f553466676e4b8a8745f27b3eb8067ba64e3d74c352ea766a66d1765b904d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_960c16cedb6719e2b1104d6a4fe2d6c2edf1bbca19045d10d2375574384f6163->leave($__internal_960c16cedb6719e2b1104d6a4fe2d6c2edf1bbca19045d10d2375574384f6163_prof);

        
        $__internal_f3f553466676e4b8a8745f27b3eb8067ba64e3d74c352ea766a66d1765b904d1->leave($__internal_f3f553466676e4b8a8745f27b3eb8067ba64e3d74c352ea766a66d1765b904d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
