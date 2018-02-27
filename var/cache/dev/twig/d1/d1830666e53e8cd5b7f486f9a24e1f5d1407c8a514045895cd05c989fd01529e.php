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
        $__internal_c0ead651994b14c599d1f4d447cdab22985444b5e79c9e7d5027b4a54cea1895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ead651994b14c599d1f4d447cdab22985444b5e79c9e7d5027b4a54cea1895->enter($__internal_c0ead651994b14c599d1f4d447cdab22985444b5e79c9e7d5027b4a54cea1895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_5e3ec262396c470af1728c996e3e16b28dd04307ed8e913fbd0dbb5f8a4d1bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3ec262396c470af1728c996e3e16b28dd04307ed8e913fbd0dbb5f8a4d1bab->enter($__internal_5e3ec262396c470af1728c996e3e16b28dd04307ed8e913fbd0dbb5f8a4d1bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c0ead651994b14c599d1f4d447cdab22985444b5e79c9e7d5027b4a54cea1895->leave($__internal_c0ead651994b14c599d1f4d447cdab22985444b5e79c9e7d5027b4a54cea1895_prof);

        
        $__internal_5e3ec262396c470af1728c996e3e16b28dd04307ed8e913fbd0dbb5f8a4d1bab->leave($__internal_5e3ec262396c470af1728c996e3e16b28dd04307ed8e913fbd0dbb5f8a4d1bab_prof);

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
