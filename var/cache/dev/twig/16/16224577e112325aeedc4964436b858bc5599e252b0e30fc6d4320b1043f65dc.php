<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2e37727e52297d03aa1c91db12f9f4178bd8ca589712e0d3ba20e4f25d77dd90 extends Twig_Template
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
        $__internal_cca87dce39367bdf37980e96bdd8f8a1b768c3608b6d5d4e4fe7913a5b58565f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cca87dce39367bdf37980e96bdd8f8a1b768c3608b6d5d4e4fe7913a5b58565f->enter($__internal_cca87dce39367bdf37980e96bdd8f8a1b768c3608b6d5d4e4fe7913a5b58565f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_31acf7487c9e52183dcc4e56eeddb123ee8ab1db8bef60d6ac1046b4cf0fd971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31acf7487c9e52183dcc4e56eeddb123ee8ab1db8bef60d6ac1046b4cf0fd971->enter($__internal_31acf7487c9e52183dcc4e56eeddb123ee8ab1db8bef60d6ac1046b4cf0fd971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cca87dce39367bdf37980e96bdd8f8a1b768c3608b6d5d4e4fe7913a5b58565f->leave($__internal_cca87dce39367bdf37980e96bdd8f8a1b768c3608b6d5d4e4fe7913a5b58565f_prof);

        
        $__internal_31acf7487c9e52183dcc4e56eeddb123ee8ab1db8bef60d6ac1046b4cf0fd971->leave($__internal_31acf7487c9e52183dcc4e56eeddb123ee8ab1db8bef60d6ac1046b4cf0fd971_prof);

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
