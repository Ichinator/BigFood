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
        $__internal_725b1bb273c06f7c56fa66ec85b333ea116036bc7244b47b32b01e7075444f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_725b1bb273c06f7c56fa66ec85b333ea116036bc7244b47b32b01e7075444f56->enter($__internal_725b1bb273c06f7c56fa66ec85b333ea116036bc7244b47b32b01e7075444f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_7ecb7f3fb13d62cf5fd93986ea772aac732fbb79fc1e1b98b1b099e565ac8d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ecb7f3fb13d62cf5fd93986ea772aac732fbb79fc1e1b98b1b099e565ac8d0c->enter($__internal_7ecb7f3fb13d62cf5fd93986ea772aac732fbb79fc1e1b98b1b099e565ac8d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

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
        
        $__internal_725b1bb273c06f7c56fa66ec85b333ea116036bc7244b47b32b01e7075444f56->leave($__internal_725b1bb273c06f7c56fa66ec85b333ea116036bc7244b47b32b01e7075444f56_prof);

        
        $__internal_7ecb7f3fb13d62cf5fd93986ea772aac732fbb79fc1e1b98b1b099e565ac8d0c->leave($__internal_7ecb7f3fb13d62cf5fd93986ea772aac732fbb79fc1e1b98b1b099e565ac8d0c_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_d7107d8eda3b2407378d24227fe9c094bf4c5bbe41350f3469763c499c1e4b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7107d8eda3b2407378d24227fe9c094bf4c5bbe41350f3469763c499c1e4b8d->enter($__internal_d7107d8eda3b2407378d24227fe9c094bf4c5bbe41350f3469763c499c1e4b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_04f761a3ea5a7dfccac9365245f95ee09e552b39cf362e818fc54e2703e671a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f761a3ea5a7dfccac9365245f95ee09e552b39cf362e818fc54e2703e671a7->enter($__internal_04f761a3ea5a7dfccac9365245f95ee09e552b39cf362e818fc54e2703e671a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_04f761a3ea5a7dfccac9365245f95ee09e552b39cf362e818fc54e2703e671a7->leave($__internal_04f761a3ea5a7dfccac9365245f95ee09e552b39cf362e818fc54e2703e671a7_prof);

        
        $__internal_d7107d8eda3b2407378d24227fe9c094bf4c5bbe41350f3469763c499c1e4b8d->leave($__internal_d7107d8eda3b2407378d24227fe9c094bf4c5bbe41350f3469763c499c1e4b8d_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_8c9977b83a359e4f29f4a67319085b7269ecf2e01e9589c08190a8ee771a156b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c9977b83a359e4f29f4a67319085b7269ecf2e01e9589c08190a8ee771a156b->enter($__internal_8c9977b83a359e4f29f4a67319085b7269ecf2e01e9589c08190a8ee771a156b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_26e70293cf41e56f3201984e1348429f80c690b4dc4f8f1ffd3f72b99742d7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e70293cf41e56f3201984e1348429f80c690b4dc4f8f1ffd3f72b99742d7eb->enter($__internal_26e70293cf41e56f3201984e1348429f80c690b4dc4f8f1ffd3f72b99742d7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_26e70293cf41e56f3201984e1348429f80c690b4dc4f8f1ffd3f72b99742d7eb->leave($__internal_26e70293cf41e56f3201984e1348429f80c690b4dc4f8f1ffd3f72b99742d7eb_prof);

        
        $__internal_8c9977b83a359e4f29f4a67319085b7269ecf2e01e9589c08190a8ee771a156b->leave($__internal_8c9977b83a359e4f29f4a67319085b7269ecf2e01e9589c08190a8ee771a156b_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_4a03c7e36dde1a71a98dbe79ed81883c3f368d97d8310eaffbe84556df9c1068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a03c7e36dde1a71a98dbe79ed81883c3f368d97d8310eaffbe84556df9c1068->enter($__internal_4a03c7e36dde1a71a98dbe79ed81883c3f368d97d8310eaffbe84556df9c1068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_7536a64e0a9b7f68c5313c6c55b526f8f1399bbf8fa1ec4b2486761aea419efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7536a64e0a9b7f68c5313c6c55b526f8f1399bbf8fa1ec4b2486761aea419efb->enter($__internal_7536a64e0a9b7f68c5313c6c55b526f8f1399bbf8fa1ec4b2486761aea419efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7536a64e0a9b7f68c5313c6c55b526f8f1399bbf8fa1ec4b2486761aea419efb->leave($__internal_7536a64e0a9b7f68c5313c6c55b526f8f1399bbf8fa1ec4b2486761aea419efb_prof);

        
        $__internal_4a03c7e36dde1a71a98dbe79ed81883c3f368d97d8310eaffbe84556df9c1068->leave($__internal_4a03c7e36dde1a71a98dbe79ed81883c3f368d97d8310eaffbe84556df9c1068_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_1eb2e663ee0c04cccd1b04db2de528c8e6682d40fd1aa0853d00ae79df2892a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eb2e663ee0c04cccd1b04db2de528c8e6682d40fd1aa0853d00ae79df2892a3->enter($__internal_1eb2e663ee0c04cccd1b04db2de528c8e6682d40fd1aa0853d00ae79df2892a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_ca061930c2ad8275e31f53d39b1a706f79f5c8f41e6661de0ead8a58183fff85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca061930c2ad8275e31f53d39b1a706f79f5c8f41e6661de0ead8a58183fff85->enter($__internal_ca061930c2ad8275e31f53d39b1a706f79f5c8f41e6661de0ead8a58183fff85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_ca061930c2ad8275e31f53d39b1a706f79f5c8f41e6661de0ead8a58183fff85->leave($__internal_ca061930c2ad8275e31f53d39b1a706f79f5c8f41e6661de0ead8a58183fff85_prof);

        
        $__internal_1eb2e663ee0c04cccd1b04db2de528c8e6682d40fd1aa0853d00ae79df2892a3->leave($__internal_1eb2e663ee0c04cccd1b04db2de528c8e6682d40fd1aa0853d00ae79df2892a3_prof);

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
