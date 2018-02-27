<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5f75a7e34b9ede06c58bc21d02b7dfb208aae40fc5b44f32c8fe3e39fb2b3b4c extends Twig_Template
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
        $__internal_070231dbf33f1f7f5be3d1942062df87b83ddb86b799979c21c3e022f4c1a9db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_070231dbf33f1f7f5be3d1942062df87b83ddb86b799979c21c3e022f4c1a9db->enter($__internal_070231dbf33f1f7f5be3d1942062df87b83ddb86b799979c21c3e022f4c1a9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_d50e76e359cb8ea01aaaf3c812ace4236598e868ca24b25cedc9a572e2f44920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50e76e359cb8ea01aaaf3c812ace4236598e868ca24b25cedc9a572e2f44920->enter($__internal_d50e76e359cb8ea01aaaf3c812ace4236598e868ca24b25cedc9a572e2f44920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_070231dbf33f1f7f5be3d1942062df87b83ddb86b799979c21c3e022f4c1a9db->leave($__internal_070231dbf33f1f7f5be3d1942062df87b83ddb86b799979c21c3e022f4c1a9db_prof);

        
        $__internal_d50e76e359cb8ea01aaaf3c812ace4236598e868ca24b25cedc9a572e2f44920->leave($__internal_d50e76e359cb8ea01aaaf3c812ace4236598e868ca24b25cedc9a572e2f44920_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
