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
        $__internal_7c512174109f993e81fcf5c3d668e79e553108367f9e0784007cd11918785eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c512174109f993e81fcf5c3d668e79e553108367f9e0784007cd11918785eb1->enter($__internal_7c512174109f993e81fcf5c3d668e79e553108367f9e0784007cd11918785eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_c22782eaf3ae35832c0d0751cf1bd0e1795b9046bd617e0785119da52c976eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22782eaf3ae35832c0d0751cf1bd0e1795b9046bd617e0785119da52c976eb4->enter($__internal_c22782eaf3ae35832c0d0751cf1bd0e1795b9046bd617e0785119da52c976eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

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
        
        $__internal_7c512174109f993e81fcf5c3d668e79e553108367f9e0784007cd11918785eb1->leave($__internal_7c512174109f993e81fcf5c3d668e79e553108367f9e0784007cd11918785eb1_prof);

        
        $__internal_c22782eaf3ae35832c0d0751cf1bd0e1795b9046bd617e0785119da52c976eb4->leave($__internal_c22782eaf3ae35832c0d0751cf1bd0e1795b9046bd617e0785119da52c976eb4_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_f8ce329dc12a6c9ea8a68bf5f3b3d2f9af3b64bcdf145d23ed36977b2b6fa8b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8ce329dc12a6c9ea8a68bf5f3b3d2f9af3b64bcdf145d23ed36977b2b6fa8b7->enter($__internal_f8ce329dc12a6c9ea8a68bf5f3b3d2f9af3b64bcdf145d23ed36977b2b6fa8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_ec28595cf2cf263867797766e9667faa16e8df5fc90091d899007b8d12839516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec28595cf2cf263867797766e9667faa16e8df5fc90091d899007b8d12839516->enter($__internal_ec28595cf2cf263867797766e9667faa16e8df5fc90091d899007b8d12839516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ec28595cf2cf263867797766e9667faa16e8df5fc90091d899007b8d12839516->leave($__internal_ec28595cf2cf263867797766e9667faa16e8df5fc90091d899007b8d12839516_prof);

        
        $__internal_f8ce329dc12a6c9ea8a68bf5f3b3d2f9af3b64bcdf145d23ed36977b2b6fa8b7->leave($__internal_f8ce329dc12a6c9ea8a68bf5f3b3d2f9af3b64bcdf145d23ed36977b2b6fa8b7_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_5679f18c4e825b5262c27d6e583c35bc7ae8d374c4d1d50092cf66567460ef9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5679f18c4e825b5262c27d6e583c35bc7ae8d374c4d1d50092cf66567460ef9c->enter($__internal_5679f18c4e825b5262c27d6e583c35bc7ae8d374c4d1d50092cf66567460ef9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_d7bbbc5681407799593c68f6a9037ee5ca1b8a161108db5275cffb31c405767a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7bbbc5681407799593c68f6a9037ee5ca1b8a161108db5275cffb31c405767a->enter($__internal_d7bbbc5681407799593c68f6a9037ee5ca1b8a161108db5275cffb31c405767a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_d7bbbc5681407799593c68f6a9037ee5ca1b8a161108db5275cffb31c405767a->leave($__internal_d7bbbc5681407799593c68f6a9037ee5ca1b8a161108db5275cffb31c405767a_prof);

        
        $__internal_5679f18c4e825b5262c27d6e583c35bc7ae8d374c4d1d50092cf66567460ef9c->leave($__internal_5679f18c4e825b5262c27d6e583c35bc7ae8d374c4d1d50092cf66567460ef9c_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_f2c8199a86315d82e6e9d64c4b7167e7dc83ec6d397c6c4056ac53845dea8f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2c8199a86315d82e6e9d64c4b7167e7dc83ec6d397c6c4056ac53845dea8f81->enter($__internal_f2c8199a86315d82e6e9d64c4b7167e7dc83ec6d397c6c4056ac53845dea8f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_d589f24e34e63d17fe282925cbd64b861bf54cb13b62aa17a3811fd56ea8bada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d589f24e34e63d17fe282925cbd64b861bf54cb13b62aa17a3811fd56ea8bada->enter($__internal_d589f24e34e63d17fe282925cbd64b861bf54cb13b62aa17a3811fd56ea8bada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d589f24e34e63d17fe282925cbd64b861bf54cb13b62aa17a3811fd56ea8bada->leave($__internal_d589f24e34e63d17fe282925cbd64b861bf54cb13b62aa17a3811fd56ea8bada_prof);

        
        $__internal_f2c8199a86315d82e6e9d64c4b7167e7dc83ec6d397c6c4056ac53845dea8f81->leave($__internal_f2c8199a86315d82e6e9d64c4b7167e7dc83ec6d397c6c4056ac53845dea8f81_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_82934a9176756f85e80a5482f9a30114a4d5d9739253bda394a896c423bce038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82934a9176756f85e80a5482f9a30114a4d5d9739253bda394a896c423bce038->enter($__internal_82934a9176756f85e80a5482f9a30114a4d5d9739253bda394a896c423bce038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_3c28d9d38c21a90e90e6f5ff4754c5cd8d5d3bc62f361f2aebbaa3791673daad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c28d9d38c21a90e90e6f5ff4754c5cd8d5d3bc62f361f2aebbaa3791673daad->enter($__internal_3c28d9d38c21a90e90e6f5ff4754c5cd8d5d3bc62f361f2aebbaa3791673daad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_3c28d9d38c21a90e90e6f5ff4754c5cd8d5d3bc62f361f2aebbaa3791673daad->leave($__internal_3c28d9d38c21a90e90e6f5ff4754c5cd8d5d3bc62f361f2aebbaa3791673daad_prof);

        
        $__internal_82934a9176756f85e80a5482f9a30114a4d5d9739253bda394a896c423bce038->leave($__internal_82934a9176756f85e80a5482f9a30114a4d5d9739253bda394a896c423bce038_prof);

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
