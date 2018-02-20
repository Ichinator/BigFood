<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_7ef4656076d5416ccf1bf8c94709984ac0181b13a2e34991a50cb784deb19aaf extends Twig_Template
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
        $__internal_f93e41f1fd74afefbb5a580299be6f0a1d9904dbbe4f2f8eb89b05515af6b9eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f93e41f1fd74afefbb5a580299be6f0a1d9904dbbe4f2f8eb89b05515af6b9eb->enter($__internal_f93e41f1fd74afefbb5a580299be6f0a1d9904dbbe4f2f8eb89b05515af6b9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_570b74b9976ba8b1594392b4d20b77a9f84e4b8c72263866a7651023bc533779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570b74b9976ba8b1594392b4d20b77a9f84e4b8c72263866a7651023bc533779->enter($__internal_570b74b9976ba8b1594392b4d20b77a9f84e4b8c72263866a7651023bc533779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f93e41f1fd74afefbb5a580299be6f0a1d9904dbbe4f2f8eb89b05515af6b9eb->leave($__internal_f93e41f1fd74afefbb5a580299be6f0a1d9904dbbe4f2f8eb89b05515af6b9eb_prof);

        
        $__internal_570b74b9976ba8b1594392b4d20b77a9f84e4b8c72263866a7651023bc533779->leave($__internal_570b74b9976ba8b1594392b4d20b77a9f84e4b8c72263866a7651023bc533779_prof);

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
