<?php

/* CoreSphereConsoleBundle:Toolbar:toolbar.html.twig */
class __TwigTemplate_0966c564871d713361f7682bca1b19f77b69842372c855971d4791d3c3417550 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6684af7f47f65d6697347fc6b0db0e4aa7a56d9340851907203748e6ee3640d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6684af7f47f65d6697347fc6b0db0e4aa7a56d9340851907203748e6ee3640d->enter($__internal_f6684af7f47f65d6697347fc6b0db0e4aa7a56d9340851907203748e6ee3640d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $__internal_f81b51d025bad5d7b8c444ad3e848bf7f73b61cbad971a23f7eaa630b3fffe6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81b51d025bad5d7b8c444ad3e848bf7f73b61cbad971a23f7eaa630b3fffe6f->enter($__internal_f81b51d025bad5d7b8c444ad3e848bf7f73b61cbad971a23f7eaa630b3fffe6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6684af7f47f65d6697347fc6b0db0e4aa7a56d9340851907203748e6ee3640d->leave($__internal_f6684af7f47f65d6697347fc6b0db0e4aa7a56d9340851907203748e6ee3640d_prof);

        
        $__internal_f81b51d025bad5d7b8c444ad3e848bf7f73b61cbad971a23f7eaa630b3fffe6f->leave($__internal_f81b51d025bad5d7b8c444ad3e848bf7f73b61cbad971a23f7eaa630b3fffe6f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2865a0fdd07bd16ac952e6801208daa12e133026c735c1cc04a7581279d57d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2865a0fdd07bd16ac952e6801208daa12e133026c735c1cc04a7581279d57d60->enter($__internal_2865a0fdd07bd16ac952e6801208daa12e133026c735c1cc04a7581279d57d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a7a875db15222a84074271da28610d5e64e2961438d9aadb68898bcf56115bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a875db15222a84074271da28610d5e64e2961438d9aadb68898bcf56115bd5->enter($__internal_a7a875db15222a84074271da28610d5e64e2961438d9aadb68898bcf56115bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("console");
        echo "\" class=\"coresphere_console_popover\">
            <img width=\"13\" height=\"28\" alt=\"Console\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAG5JREFUeNpi/P//PwM1ARMDlcGogZQDlhMnTlAtmi0sLBip70IkNiOF
rsMwkKGiouL/CE42Bw4cAGOqGejg4AA3mGouRDaYnGSD1YXoFhCyhIVYm4l16UguvmB5keLCAVTk
UNOFjKO13ggwECDAAAMNHZ7ErsJjAAAAAElFTkSuQmCC\"/>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "    ";
        $context["text"] = ('' === $tmp = "Console") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig", 14)->display(array_merge($context, array("link" => false)));
        
        $__internal_a7a875db15222a84074271da28610d5e64e2961438d9aadb68898bcf56115bd5->leave($__internal_a7a875db15222a84074271da28610d5e64e2961438d9aadb68898bcf56115bd5_prof);

        
        $__internal_2865a0fdd07bd16ac952e6801208daa12e133026c735c1cc04a7581279d57d60->leave($__internal_2865a0fdd07bd16ac952e6801208daa12e133026c735c1cc04a7581279d57d60_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  66 => 13,  63 => 12,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        <a href=\"{{ path('console') }}\" class=\"coresphere_console_popover\">
            <img width=\"13\" height=\"28\" alt=\"Console\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAG5JREFUeNpi/P//PwM1ARMDlcGogZQDlhMnTlAtmi0sLBip70IkNiOF
rsMwkKGiouL/CE42Bw4cAGOqGejg4AA3mGouRDaYnGSD1YXoFhCyhIVYm4l16UguvmB5keLCAVTk
UNOFjKO13ggwECDAAAMNHZ7ErsJjAAAAAElFTkSuQmCC\"/>
        </a>
    {% endset %}
    {% set text %}Console{% endset %}

    {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': false } %}
{% endblock %}
", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/coresphere/console-bundle/Resources/views/Toolbar/toolbar.html.twig");
    }
}
