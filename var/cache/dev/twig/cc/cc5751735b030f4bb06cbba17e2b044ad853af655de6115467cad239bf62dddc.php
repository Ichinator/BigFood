<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9522c68220092c9c6773bc254adb75a2b4f8e0e9f3dca8bfcc52b9e14952fd89 extends Twig_Template
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
        $__internal_98eb336632db976e9beebc702a534a13291dc46388d181f82499e53225f0cb2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98eb336632db976e9beebc702a534a13291dc46388d181f82499e53225f0cb2a->enter($__internal_98eb336632db976e9beebc702a534a13291dc46388d181f82499e53225f0cb2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_d5fdfa1458c2f0ac96fb23b974c0e9b5305c909991f1f42e268168b027b8ac1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5fdfa1458c2f0ac96fb23b974c0e9b5305c909991f1f42e268168b027b8ac1f->enter($__internal_d5fdfa1458c2f0ac96fb23b974c0e9b5305c909991f1f42e268168b027b8ac1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_98eb336632db976e9beebc702a534a13291dc46388d181f82499e53225f0cb2a->leave($__internal_98eb336632db976e9beebc702a534a13291dc46388d181f82499e53225f0cb2a_prof);

        
        $__internal_d5fdfa1458c2f0ac96fb23b974c0e9b5305c909991f1f42e268168b027b8ac1f->leave($__internal_d5fdfa1458c2f0ac96fb23b974c0e9b5305c909991f1f42e268168b027b8ac1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
