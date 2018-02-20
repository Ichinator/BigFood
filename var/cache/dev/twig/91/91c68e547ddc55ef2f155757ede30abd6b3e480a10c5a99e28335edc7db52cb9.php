<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_3d2af22eace3c6113570ae52b90015e38a3ce1d72a3867fc8f622fbd83dc2358 extends Twig_Template
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
        $__internal_5e765256e7b087cb055ffafa0083482dbea5582cf5cd42cf972c61492bf2cf14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e765256e7b087cb055ffafa0083482dbea5582cf5cd42cf972c61492bf2cf14->enter($__internal_5e765256e7b087cb055ffafa0083482dbea5582cf5cd42cf972c61492bf2cf14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_c5cb66cce086ad501b083cf26aad8060ac5f2b4ebcafdc6e96776b79f9a1a903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5cb66cce086ad501b083cf26aad8060ac5f2b4ebcafdc6e96776b79f9a1a903->enter($__internal_c5cb66cce086ad501b083cf26aad8060ac5f2b4ebcafdc6e96776b79f9a1a903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

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
        
        $__internal_5e765256e7b087cb055ffafa0083482dbea5582cf5cd42cf972c61492bf2cf14->leave($__internal_5e765256e7b087cb055ffafa0083482dbea5582cf5cd42cf972c61492bf2cf14_prof);

        
        $__internal_c5cb66cce086ad501b083cf26aad8060ac5f2b4ebcafdc6e96776b79f9a1a903->leave($__internal_c5cb66cce086ad501b083cf26aad8060ac5f2b4ebcafdc6e96776b79f9a1a903_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_8a139e79fd106cf877aba432915b3e0e541df8e509dc910df7bcee2c9ddda379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a139e79fd106cf877aba432915b3e0e541df8e509dc910df7bcee2c9ddda379->enter($__internal_8a139e79fd106cf877aba432915b3e0e541df8e509dc910df7bcee2c9ddda379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_83099e8634523dfa467777907f2b65bd99ac9096aae3fff26a7431f81abd0c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83099e8634523dfa467777907f2b65bd99ac9096aae3fff26a7431f81abd0c56->enter($__internal_83099e8634523dfa467777907f2b65bd99ac9096aae3fff26a7431f81abd0c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_83099e8634523dfa467777907f2b65bd99ac9096aae3fff26a7431f81abd0c56->leave($__internal_83099e8634523dfa467777907f2b65bd99ac9096aae3fff26a7431f81abd0c56_prof);

        
        $__internal_8a139e79fd106cf877aba432915b3e0e541df8e509dc910df7bcee2c9ddda379->leave($__internal_8a139e79fd106cf877aba432915b3e0e541df8e509dc910df7bcee2c9ddda379_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_80e108cb7eea7157a9db7783e39b7fa2ea740ca6bfd1779e21ce3dd1db59496d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80e108cb7eea7157a9db7783e39b7fa2ea740ca6bfd1779e21ce3dd1db59496d->enter($__internal_80e108cb7eea7157a9db7783e39b7fa2ea740ca6bfd1779e21ce3dd1db59496d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_a0441288581fdd4a1787b49ba3c6deba9214148642d4ded7d8e68c3469c1fb21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0441288581fdd4a1787b49ba3c6deba9214148642d4ded7d8e68c3469c1fb21->enter($__internal_a0441288581fdd4a1787b49ba3c6deba9214148642d4ded7d8e68c3469c1fb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_a0441288581fdd4a1787b49ba3c6deba9214148642d4ded7d8e68c3469c1fb21->leave($__internal_a0441288581fdd4a1787b49ba3c6deba9214148642d4ded7d8e68c3469c1fb21_prof);

        
        $__internal_80e108cb7eea7157a9db7783e39b7fa2ea740ca6bfd1779e21ce3dd1db59496d->leave($__internal_80e108cb7eea7157a9db7783e39b7fa2ea740ca6bfd1779e21ce3dd1db59496d_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_278030b4a107b26459f6f007ad25b4550bd50341593a7663e79699550494d6d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_278030b4a107b26459f6f007ad25b4550bd50341593a7663e79699550494d6d5->enter($__internal_278030b4a107b26459f6f007ad25b4550bd50341593a7663e79699550494d6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_3fb73b613012ced9550d14352b54877bc18ff14b22e3ddbc30f8e6c31390b50c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb73b613012ced9550d14352b54877bc18ff14b22e3ddbc30f8e6c31390b50c->enter($__internal_3fb73b613012ced9550d14352b54877bc18ff14b22e3ddbc30f8e6c31390b50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3fb73b613012ced9550d14352b54877bc18ff14b22e3ddbc30f8e6c31390b50c->leave($__internal_3fb73b613012ced9550d14352b54877bc18ff14b22e3ddbc30f8e6c31390b50c_prof);

        
        $__internal_278030b4a107b26459f6f007ad25b4550bd50341593a7663e79699550494d6d5->leave($__internal_278030b4a107b26459f6f007ad25b4550bd50341593a7663e79699550494d6d5_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_1d0f6cfa675368c73fae88f2fec41a6393d912a1d4b83ee576566b4dbb55b599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d0f6cfa675368c73fae88f2fec41a6393d912a1d4b83ee576566b4dbb55b599->enter($__internal_1d0f6cfa675368c73fae88f2fec41a6393d912a1d4b83ee576566b4dbb55b599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_3a37b343f4f3c9c39be72af2126c9a296f5bcfe856cfde32ff2edae6a7038745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a37b343f4f3c9c39be72af2126c9a296f5bcfe856cfde32ff2edae6a7038745->enter($__internal_3a37b343f4f3c9c39be72af2126c9a296f5bcfe856cfde32ff2edae6a7038745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_3a37b343f4f3c9c39be72af2126c9a296f5bcfe856cfde32ff2edae6a7038745->leave($__internal_3a37b343f4f3c9c39be72af2126c9a296f5bcfe856cfde32ff2edae6a7038745_prof);

        
        $__internal_1d0f6cfa675368c73fae88f2fec41a6393d912a1d4b83ee576566b4dbb55b599->leave($__internal_1d0f6cfa675368c73fae88f2fec41a6393d912a1d4b83ee576566b4dbb55b599_prof);

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
