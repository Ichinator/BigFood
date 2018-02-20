<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d33066fc139f1dc4a46d60a9b1dca53b20963cd2253c5ddee54afe8a1810cfc5 extends Twig_Template
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
        $__internal_d353d65a105083ac45144ae6f845f40ce629692d03104e950d27d6e78445ef32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d353d65a105083ac45144ae6f845f40ce629692d03104e950d27d6e78445ef32->enter($__internal_d353d65a105083ac45144ae6f845f40ce629692d03104e950d27d6e78445ef32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_da857d5516737825e857fd2b96113e3d8758de1b1f7d74e4d7bb895d36c37896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da857d5516737825e857fd2b96113e3d8758de1b1f7d74e4d7bb895d36c37896->enter($__internal_da857d5516737825e857fd2b96113e3d8758de1b1f7d74e4d7bb895d36c37896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_d353d65a105083ac45144ae6f845f40ce629692d03104e950d27d6e78445ef32->leave($__internal_d353d65a105083ac45144ae6f845f40ce629692d03104e950d27d6e78445ef32_prof);

        
        $__internal_da857d5516737825e857fd2b96113e3d8758de1b1f7d74e4d7bb895d36c37896->leave($__internal_da857d5516737825e857fd2b96113e3d8758de1b1f7d74e4d7bb895d36c37896_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
