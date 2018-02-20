<?php

/* CoreSphereConsoleBundle:Console:htmlTemplates.html.twig */
class __TwigTemplate_4b2f0ef2b1736833bc1950ab48110a5723e51bf5a6e0566c2cbdb7b2b5a3bdb9 extends Twig_Template
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
        $__internal_76b91f24aabd44134db91398322537b2dfe8bd329813719e13280f3d54e9689a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76b91f24aabd44134db91398322537b2dfe8bd329813719e13280f3d54e9689a->enter($__internal_76b91f24aabd44134db91398322537b2dfe8bd329813719e13280f3d54e9689a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:htmlTemplates.html.twig"));

        $__internal_7c01469a5a61238d24e4281c5bd9f1536a7da2e623a67ae3c212da96c66f26e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c01469a5a61238d24e4281c5bd9f1536a7da2e623a67ae3c212da96c66f26e3->enter($__internal_7c01469a5a61238d24e4281c5bd9f1536a7da2e623a67ae3c212da96c66f26e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:htmlTemplates.html.twig"));

        // line 1
        echo "<script type=\"text/html\" id=\"template_console_command\">
    <li>
        <div class=\"console_log_input console_%status%\">%command%%environment%</div>
        <div class=\"console_log_output\">%output%</div>
    </li>
</script>

<script type=\"text/html\" id=\"template_console_environment\">
    <span class=\"console_env_info\">%label%: <strong>%environment%</strong></span>
</script>

<script type=\"text/html\" id=\"template_console_error\">
    <li class=\"console_error\">
        <div class=\"console_log_input\">%command%</div>
        <div class=\"console_log_output\">[%message%] %error%</div>
    </li>
</script>

<script type=\"text/html\" id=\"template_console_loading\">
    <li class=\"console_loading\">
        <div class=\"console_log_input\">%command%</div>
        <div class=\"console_log_output\">%message%</div>
    </li>
</script>

<script type=\"text/html\" id=\"template_suggestion_list\">
    <h2 class=\"console_suggestion_head\">%head%</h2>
    <ul>%suggestions%</ul>
</script>

<script type=\"text/html\" id=\"template_console_highlight\">
    <strong class=\"match\">%word%</strong>
</script>

<script type=\"text/html\" id=\"suggestion_item_active\">
    <li class=\"%state%\">%suggestion%</li>
</script>

<script type=\"text/html\" id=\"suggestion_item\">
    <li>%suggestion%</li>
</script>
";
        
        $__internal_76b91f24aabd44134db91398322537b2dfe8bd329813719e13280f3d54e9689a->leave($__internal_76b91f24aabd44134db91398322537b2dfe8bd329813719e13280f3d54e9689a_prof);

        
        $__internal_7c01469a5a61238d24e4281c5bd9f1536a7da2e623a67ae3c212da96c66f26e3->leave($__internal_7c01469a5a61238d24e4281c5bd9f1536a7da2e623a67ae3c212da96c66f26e3_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:htmlTemplates.html.twig";
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
        return new Twig_Source("<script type=\"text/html\" id=\"template_console_command\">
    <li>
        <div class=\"console_log_input console_%status%\">%command%%environment%</div>
        <div class=\"console_log_output\">%output%</div>
    </li>
</script>

<script type=\"text/html\" id=\"template_console_environment\">
    <span class=\"console_env_info\">%label%: <strong>%environment%</strong></span>
</script>

<script type=\"text/html\" id=\"template_console_error\">
    <li class=\"console_error\">
        <div class=\"console_log_input\">%command%</div>
        <div class=\"console_log_output\">[%message%] %error%</div>
    </li>
</script>

<script type=\"text/html\" id=\"template_console_loading\">
    <li class=\"console_loading\">
        <div class=\"console_log_input\">%command%</div>
        <div class=\"console_log_output\">%message%</div>
    </li>
</script>

<script type=\"text/html\" id=\"template_suggestion_list\">
    <h2 class=\"console_suggestion_head\">%head%</h2>
    <ul>%suggestions%</ul>
</script>

<script type=\"text/html\" id=\"template_console_highlight\">
    <strong class=\"match\">%word%</strong>
</script>

<script type=\"text/html\" id=\"suggestion_item_active\">
    <li class=\"%state%\">%suggestion%</li>
</script>

<script type=\"text/html\" id=\"suggestion_item\">
    <li>%suggestion%</li>
</script>
", "CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/coresphere/console-bundle/Resources/views/Console/htmlTemplates.html.twig");
    }
}
