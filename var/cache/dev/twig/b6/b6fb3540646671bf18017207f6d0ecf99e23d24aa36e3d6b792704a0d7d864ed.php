<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_fe45642747f47643d917ee5d2301e4eefc3935e28c9faf73fbfb99442c28e83e extends Twig_Template
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
        $__internal_ebc06db6696f2da1fe608206d7832d3872b9701cd5fb96182c4b565581637b2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebc06db6696f2da1fe608206d7832d3872b9701cd5fb96182c4b565581637b2a->enter($__internal_ebc06db6696f2da1fe608206d7832d3872b9701cd5fb96182c4b565581637b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_88916dd8b8104e8b01e743c7c56e72b84e54b824590dac3041880e24804eb668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88916dd8b8104e8b01e743c7c56e72b84e54b824590dac3041880e24804eb668->enter($__internal_88916dd8b8104e8b01e743c7c56e72b84e54b824590dac3041880e24804eb668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_ebc06db6696f2da1fe608206d7832d3872b9701cd5fb96182c4b565581637b2a->leave($__internal_ebc06db6696f2da1fe608206d7832d3872b9701cd5fb96182c4b565581637b2a_prof);

        
        $__internal_88916dd8b8104e8b01e743c7c56e72b84e54b824590dac3041880e24804eb668->leave($__internal_88916dd8b8104e8b01e743c7c56e72b84e54b824590dac3041880e24804eb668_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
