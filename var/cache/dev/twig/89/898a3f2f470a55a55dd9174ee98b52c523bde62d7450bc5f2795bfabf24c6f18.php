<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c588c558cc2647c8fa9f427f0bccbbe9910d9c62c43f8f1e2cfad99ad9093a18 extends Twig_Template
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
        $__internal_be11f9a8988dfc37ecb2cf8eb2f20206f37e96d2d20d24b422366b49f769f2cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be11f9a8988dfc37ecb2cf8eb2f20206f37e96d2d20d24b422366b49f769f2cd->enter($__internal_be11f9a8988dfc37ecb2cf8eb2f20206f37e96d2d20d24b422366b49f769f2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_1bd435b3e74dc566d43b4d06b14bca11779838860d6275d3ed74bc205b55111b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd435b3e74dc566d43b4d06b14bca11779838860d6275d3ed74bc205b55111b->enter($__internal_1bd435b3e74dc566d43b4d06b14bca11779838860d6275d3ed74bc205b55111b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_be11f9a8988dfc37ecb2cf8eb2f20206f37e96d2d20d24b422366b49f769f2cd->leave($__internal_be11f9a8988dfc37ecb2cf8eb2f20206f37e96d2d20d24b422366b49f769f2cd_prof);

        
        $__internal_1bd435b3e74dc566d43b4d06b14bca11779838860d6275d3ed74bc205b55111b->leave($__internal_1bd435b3e74dc566d43b4d06b14bca11779838860d6275d3ed74bc205b55111b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
