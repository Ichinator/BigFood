<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_119aa086df65fcdd7822dc9481004821e6b836714e87412187f8887a53bb877d extends Twig_Template
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
        $__internal_a773a5dac7d65741fb631d2272e957a7f3232f75af1111ffe2e5490a664e0ebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a773a5dac7d65741fb631d2272e957a7f3232f75af1111ffe2e5490a664e0ebc->enter($__internal_a773a5dac7d65741fb631d2272e957a7f3232f75af1111ffe2e5490a664e0ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_4ee1492b3b8cffb7c67f7b2e470a5024870a1e402720f9c29449f5eb7d0e1fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee1492b3b8cffb7c67f7b2e470a5024870a1e402720f9c29449f5eb7d0e1fb2->enter($__internal_4ee1492b3b8cffb7c67f7b2e470a5024870a1e402720f9c29449f5eb7d0e1fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a773a5dac7d65741fb631d2272e957a7f3232f75af1111ffe2e5490a664e0ebc->leave($__internal_a773a5dac7d65741fb631d2272e957a7f3232f75af1111ffe2e5490a664e0ebc_prof);

        
        $__internal_4ee1492b3b8cffb7c67f7b2e470a5024870a1e402720f9c29449f5eb7d0e1fb2->leave($__internal_4ee1492b3b8cffb7c67f7b2e470a5024870a1e402720f9c29449f5eb7d0e1fb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
