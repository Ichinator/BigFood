<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_3363c578d660e3a28097561b435455417f69bf74c2ce9633266b532165c22d73 extends Twig_Template
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
        $__internal_75ca78df736de3a2d9b313a40cda07b1fe685daf8ef4b0215f15bd58995c5333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75ca78df736de3a2d9b313a40cda07b1fe685daf8ef4b0215f15bd58995c5333->enter($__internal_75ca78df736de3a2d9b313a40cda07b1fe685daf8ef4b0215f15bd58995c5333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_9b2e5ac46cc1324395c323b3c6047dfe979fd2d287e89145181987b302187fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2e5ac46cc1324395c323b3c6047dfe979fd2d287e89145181987b302187fb5->enter($__internal_9b2e5ac46cc1324395c323b3c6047dfe979fd2d287e89145181987b302187fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_75ca78df736de3a2d9b313a40cda07b1fe685daf8ef4b0215f15bd58995c5333->leave($__internal_75ca78df736de3a2d9b313a40cda07b1fe685daf8ef4b0215f15bd58995c5333_prof);

        
        $__internal_9b2e5ac46cc1324395c323b3c6047dfe979fd2d287e89145181987b302187fb5->leave($__internal_9b2e5ac46cc1324395c323b3c6047dfe979fd2d287e89145181987b302187fb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
