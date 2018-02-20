<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_0bab4eb47cff39b482b70ce623d1ab7cc4e1d445fc5d7b8b1e6d67a0a9eabe8b extends Twig_Template
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
        $__internal_7a45d79659b08b37645ec708ea725fd0b9b63009ee5ab80ca004b242e52ad574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a45d79659b08b37645ec708ea725fd0b9b63009ee5ab80ca004b242e52ad574->enter($__internal_7a45d79659b08b37645ec708ea725fd0b9b63009ee5ab80ca004b242e52ad574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_f0aa737035bbd15e8ff37d1b73ccef4b1ec3bd8b7ffdb27ef74710a5b55496de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0aa737035bbd15e8ff37d1b73ccef4b1ec3bd8b7ffdb27ef74710a5b55496de->enter($__internal_f0aa737035bbd15e8ff37d1b73ccef4b1ec3bd8b7ffdb27ef74710a5b55496de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7a45d79659b08b37645ec708ea725fd0b9b63009ee5ab80ca004b242e52ad574->leave($__internal_7a45d79659b08b37645ec708ea725fd0b9b63009ee5ab80ca004b242e52ad574_prof);

        
        $__internal_f0aa737035bbd15e8ff37d1b73ccef4b1ec3bd8b7ffdb27ef74710a5b55496de->leave($__internal_f0aa737035bbd15e8ff37d1b73ccef4b1ec3bd8b7ffdb27ef74710a5b55496de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
