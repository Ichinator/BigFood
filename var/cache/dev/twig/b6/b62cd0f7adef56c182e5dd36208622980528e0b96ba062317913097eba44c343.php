<?php

/* CoreSphereConsoleBundle:Toolbar:toolbar.html.twig */
class __TwigTemplate_1d63dbf07a356dfdd4378914fbf8fc70d979dbba17164b08d868dd41f00f1632 extends Twig_Template
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
        $__internal_2cd6cc8d7257732a55940adaba719e7d2b42752adf254c8f1013995229fb717a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd6cc8d7257732a55940adaba719e7d2b42752adf254c8f1013995229fb717a->enter($__internal_2cd6cc8d7257732a55940adaba719e7d2b42752adf254c8f1013995229fb717a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $__internal_a3bd173d4acc84348c7a0b1179ed97a13295f504b1bb6973fc9fdcde5ef1b284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3bd173d4acc84348c7a0b1179ed97a13295f504b1bb6973fc9fdcde5ef1b284->enter($__internal_a3bd173d4acc84348c7a0b1179ed97a13295f504b1bb6973fc9fdcde5ef1b284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cd6cc8d7257732a55940adaba719e7d2b42752adf254c8f1013995229fb717a->leave($__internal_2cd6cc8d7257732a55940adaba719e7d2b42752adf254c8f1013995229fb717a_prof);

        
        $__internal_a3bd173d4acc84348c7a0b1179ed97a13295f504b1bb6973fc9fdcde5ef1b284->leave($__internal_a3bd173d4acc84348c7a0b1179ed97a13295f504b1bb6973fc9fdcde5ef1b284_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4090936343433166de04363353b7d13f0955a3d20f26a49b3b26e6cdbbb06c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4090936343433166de04363353b7d13f0955a3d20f26a49b3b26e6cdbbb06c44->enter($__internal_4090936343433166de04363353b7d13f0955a3d20f26a49b3b26e6cdbbb06c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1d672d08cc32415f222a29fb53dac60db0320f58a1c116240d5eb220fdf10535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d672d08cc32415f222a29fb53dac60db0320f58a1c116240d5eb220fdf10535->enter($__internal_1d672d08cc32415f222a29fb53dac60db0320f58a1c116240d5eb220fdf10535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_1d672d08cc32415f222a29fb53dac60db0320f58a1c116240d5eb220fdf10535->leave($__internal_1d672d08cc32415f222a29fb53dac60db0320f58a1c116240d5eb220fdf10535_prof);

        
        $__internal_4090936343433166de04363353b7d13f0955a3d20f26a49b3b26e6cdbbb06c44->leave($__internal_4090936343433166de04363353b7d13f0955a3d20f26a49b3b26e6cdbbb06c44_prof);

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
