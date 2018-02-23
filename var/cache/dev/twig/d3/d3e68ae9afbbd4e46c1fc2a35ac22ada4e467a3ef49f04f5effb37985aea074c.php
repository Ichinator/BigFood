<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_b7e70ee4eb72ac16ba35f5bddc504ccbf6d1601748d5a901661df998508f4c09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1160fa0cadf0b259b65d4c39edd03aac315dc31ae9028982028c1c44841adc0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1160fa0cadf0b259b65d4c39edd03aac315dc31ae9028982028c1c44841adc0f->enter($__internal_1160fa0cadf0b259b65d4c39edd03aac315dc31ae9028982028c1c44841adc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_5c5ffd714256d21c6098c5c46c62fee000e93cc33b64964a4caffc40dbc9b05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c5ffd714256d21c6098c5c46c62fee000e93cc33b64964a4caffc40dbc9b05e->enter($__internal_5c5ffd714256d21c6098c5c46c62fee000e93cc33b64964a4caffc40dbc9b05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_1160fa0cadf0b259b65d4c39edd03aac315dc31ae9028982028c1c44841adc0f->leave($__internal_1160fa0cadf0b259b65d4c39edd03aac315dc31ae9028982028c1c44841adc0f_prof);

        
        $__internal_5c5ffd714256d21c6098c5c46c62fee000e93cc33b64964a4caffc40dbc9b05e->leave($__internal_5c5ffd714256d21c6098c5c46c62fee000e93cc33b64964a4caffc40dbc9b05e_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_685e7d9b4bbe0cc5562e63e3784cacfa766b1c082e9bf7646b7e360360720e67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_685e7d9b4bbe0cc5562e63e3784cacfa766b1c082e9bf7646b7e360360720e67->enter($__internal_685e7d9b4bbe0cc5562e63e3784cacfa766b1c082e9bf7646b7e360360720e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_2655266af6cd2ca71f40cab9e3dce104616fdf47eb69ec0ffcc3ac63fc64d225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2655266af6cd2ca71f40cab9e3dce104616fdf47eb69ec0ffcc3ac63fc64d225->enter($__internal_2655266af6cd2ca71f40cab9e3dce104616fdf47eb69ec0ffcc3ac63fc64d225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2655266af6cd2ca71f40cab9e3dce104616fdf47eb69ec0ffcc3ac63fc64d225->leave($__internal_2655266af6cd2ca71f40cab9e3dce104616fdf47eb69ec0ffcc3ac63fc64d225_prof);

        
        $__internal_685e7d9b4bbe0cc5562e63e3784cacfa766b1c082e9bf7646b7e360360720e67->leave($__internal_685e7d9b4bbe0cc5562e63e3784cacfa766b1c082e9bf7646b7e360360720e67_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_420782370b76fbf42bceea5597b2c0dbcab1d5cc930c678842575b2629f6aeaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_420782370b76fbf42bceea5597b2c0dbcab1d5cc930c678842575b2629f6aeaa->enter($__internal_420782370b76fbf42bceea5597b2c0dbcab1d5cc930c678842575b2629f6aeaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_d17468d0f0fa04271779381a638611ab74499f85c4590e48e61eb2277e14022c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17468d0f0fa04271779381a638611ab74499f85c4590e48e61eb2277e14022c->enter($__internal_d17468d0f0fa04271779381a638611ab74499f85c4590e48e61eb2277e14022c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        ob_start();
        // line 8
        echo "    <div class=\"vich-file\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 10
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 15
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 17
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d17468d0f0fa04271779381a638611ab74499f85c4590e48e61eb2277e14022c->leave($__internal_d17468d0f0fa04271779381a638611ab74499f85c4590e48e61eb2277e14022c_prof);

        
        $__internal_420782370b76fbf42bceea5597b2c0dbcab1d5cc930c678842575b2629f6aeaa->leave($__internal_420782370b76fbf42bceea5597b2c0dbcab1d5cc930c678842575b2629f6aeaa_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_53738e9e93dfd88462f91a1b843f9eaa754c23275b338a4ecfd5c8519a44ccf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53738e9e93dfd88462f91a1b843f9eaa754c23275b338a4ecfd5c8519a44ccf9->enter($__internal_53738e9e93dfd88462f91a1b843f9eaa754c23275b338a4ecfd5c8519a44ccf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_a9e702722a9705ee6288f6b769d14bab171aa20cb7279f04cbb1b4497567f07a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e702722a9705ee6288f6b769d14bab171aa20cb7279f04cbb1b4497567f07a->enter($__internal_a9e702722a9705ee6288f6b769d14bab171aa20cb7279f04cbb1b4497567f07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a9e702722a9705ee6288f6b769d14bab171aa20cb7279f04cbb1b4497567f07a->leave($__internal_a9e702722a9705ee6288f6b769d14bab171aa20cb7279f04cbb1b4497567f07a_prof);

        
        $__internal_53738e9e93dfd88462f91a1b843f9eaa754c23275b338a4ecfd5c8519a44ccf9->leave($__internal_53738e9e93dfd88462f91a1b843f9eaa754c23275b338a4ecfd5c8519a44ccf9_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_8742cf856b522a704f6dd3b3d8ff8020342f3e42278b40b4ff420f131932f09e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8742cf856b522a704f6dd3b3d8ff8020342f3e42278b40b4ff420f131932f09e->enter($__internal_8742cf856b522a704f6dd3b3d8ff8020342f3e42278b40b4ff420f131932f09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_4a794efe8f2c3f1f817550160f9b5420796fbc630ed10f33487719def771a5e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a794efe8f2c3f1f817550160f9b5420796fbc630ed10f33487719def771a5e6->enter($__internal_4a794efe8f2c3f1f817550160f9b5420796fbc630ed10f33487719def771a5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        ob_start();
        // line 28
        echo "    <div class=\"vich-image\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 30
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 31
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 35
            echo "         <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 37
        echo "        ";
        if (((($context["show_download_link"] ?? $this->getContext($context, "show_download_link")) && array_key_exists("download_uri", $context)) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 38
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 40
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4a794efe8f2c3f1f817550160f9b5420796fbc630ed10f33487719def771a5e6->leave($__internal_4a794efe8f2c3f1f817550160f9b5420796fbc630ed10f33487719def771a5e6_prof);

        
        $__internal_8742cf856b522a704f6dd3b3d8ff8020342f3e42278b40b4ff420f131932f09e->leave($__internal_8742cf856b522a704f6dd3b3d8ff8020342f3e42278b40b4ff420f131932f09e_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 40,  189 => 38,  186 => 37,  178 => 35,  176 => 34,  173 => 33,  167 => 31,  165 => 30,  161 => 29,  158 => 28,  156 => 27,  147 => 26,  137 => 23,  135 => 22,  126 => 21,  114 => 17,  106 => 15,  104 => 14,  101 => 13,  95 => 11,  93 => 10,  89 => 9,  86 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"vich-file\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
         <a href=\"{{ download_uri }}\"><img src=\"{{ download_uri }}\" alt=\"\" /></a>
        {% endif %}
        {% if show_download_link and download_uri is defined and download_uri%}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}
", "VichUploaderBundle:Form:fields.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/vich/uploader-bundle/Resources/views/Form/fields.html.twig");
    }
}
