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
        $__internal_fd23479b9131369a6e8ab8bc5c1944f3bd85a63236c511d409b6cbadd86fd8c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd23479b9131369a6e8ab8bc5c1944f3bd85a63236c511d409b6cbadd86fd8c3->enter($__internal_fd23479b9131369a6e8ab8bc5c1944f3bd85a63236c511d409b6cbadd86fd8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_751326e6d7f3955bad5d29c95023b6e8e39e9d929720f73fdce1a2be052ad05a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_751326e6d7f3955bad5d29c95023b6e8e39e9d929720f73fdce1a2be052ad05a->enter($__internal_751326e6d7f3955bad5d29c95023b6e8e39e9d929720f73fdce1a2be052ad05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

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
        
        $__internal_fd23479b9131369a6e8ab8bc5c1944f3bd85a63236c511d409b6cbadd86fd8c3->leave($__internal_fd23479b9131369a6e8ab8bc5c1944f3bd85a63236c511d409b6cbadd86fd8c3_prof);

        
        $__internal_751326e6d7f3955bad5d29c95023b6e8e39e9d929720f73fdce1a2be052ad05a->leave($__internal_751326e6d7f3955bad5d29c95023b6e8e39e9d929720f73fdce1a2be052ad05a_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_0e2393092a5351efd8f49dbd5b2252029e545305ed3f38d0320ac916af1e2502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2393092a5351efd8f49dbd5b2252029e545305ed3f38d0320ac916af1e2502->enter($__internal_0e2393092a5351efd8f49dbd5b2252029e545305ed3f38d0320ac916af1e2502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_31dd658811dd1698d58f7b10d6bd2e9c7cf4dc3a71045c66a9984366df208a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31dd658811dd1698d58f7b10d6bd2e9c7cf4dc3a71045c66a9984366df208a48->enter($__internal_31dd658811dd1698d58f7b10d6bd2e9c7cf4dc3a71045c66a9984366df208a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_31dd658811dd1698d58f7b10d6bd2e9c7cf4dc3a71045c66a9984366df208a48->leave($__internal_31dd658811dd1698d58f7b10d6bd2e9c7cf4dc3a71045c66a9984366df208a48_prof);

        
        $__internal_0e2393092a5351efd8f49dbd5b2252029e545305ed3f38d0320ac916af1e2502->leave($__internal_0e2393092a5351efd8f49dbd5b2252029e545305ed3f38d0320ac916af1e2502_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_1a7b9e75c82fb406f470555e3cd30d9e07f4755beb5252851fc771bc1fbd73e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a7b9e75c82fb406f470555e3cd30d9e07f4755beb5252851fc771bc1fbd73e5->enter($__internal_1a7b9e75c82fb406f470555e3cd30d9e07f4755beb5252851fc771bc1fbd73e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_0071996aa85bc04698f94c7fd08ebc207c4721029c6a260df1b636e7cffa0364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0071996aa85bc04698f94c7fd08ebc207c4721029c6a260df1b636e7cffa0364->enter($__internal_0071996aa85bc04698f94c7fd08ebc207c4721029c6a260df1b636e7cffa0364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_0071996aa85bc04698f94c7fd08ebc207c4721029c6a260df1b636e7cffa0364->leave($__internal_0071996aa85bc04698f94c7fd08ebc207c4721029c6a260df1b636e7cffa0364_prof);

        
        $__internal_1a7b9e75c82fb406f470555e3cd30d9e07f4755beb5252851fc771bc1fbd73e5->leave($__internal_1a7b9e75c82fb406f470555e3cd30d9e07f4755beb5252851fc771bc1fbd73e5_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_4c34eef9039ded3f8ed3cd4d53c722a3a6faabced901d1832b455205bc160262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c34eef9039ded3f8ed3cd4d53c722a3a6faabced901d1832b455205bc160262->enter($__internal_4c34eef9039ded3f8ed3cd4d53c722a3a6faabced901d1832b455205bc160262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_e5e1f422766a7a9a6867ee26a27b5c02f60a99ff9d3ea66dca5c5fef4d895ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e1f422766a7a9a6867ee26a27b5c02f60a99ff9d3ea66dca5c5fef4d895ec3->enter($__internal_e5e1f422766a7a9a6867ee26a27b5c02f60a99ff9d3ea66dca5c5fef4d895ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e5e1f422766a7a9a6867ee26a27b5c02f60a99ff9d3ea66dca5c5fef4d895ec3->leave($__internal_e5e1f422766a7a9a6867ee26a27b5c02f60a99ff9d3ea66dca5c5fef4d895ec3_prof);

        
        $__internal_4c34eef9039ded3f8ed3cd4d53c722a3a6faabced901d1832b455205bc160262->leave($__internal_4c34eef9039ded3f8ed3cd4d53c722a3a6faabced901d1832b455205bc160262_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_dc4885f71d89ff6739bcc5dca2ad1d6822df0043076f61a80bc24c72cbb3181c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc4885f71d89ff6739bcc5dca2ad1d6822df0043076f61a80bc24c72cbb3181c->enter($__internal_dc4885f71d89ff6739bcc5dca2ad1d6822df0043076f61a80bc24c72cbb3181c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_c6ffb463effe8e8efafc68672e62c05f87187cd168089c4995a3571e7e014f99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ffb463effe8e8efafc68672e62c05f87187cd168089c4995a3571e7e014f99->enter($__internal_c6ffb463effe8e8efafc68672e62c05f87187cd168089c4995a3571e7e014f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_c6ffb463effe8e8efafc68672e62c05f87187cd168089c4995a3571e7e014f99->leave($__internal_c6ffb463effe8e8efafc68672e62c05f87187cd168089c4995a3571e7e014f99_prof);

        
        $__internal_dc4885f71d89ff6739bcc5dca2ad1d6822df0043076f61a80bc24c72cbb3181c->leave($__internal_dc4885f71d89ff6739bcc5dca2ad1d6822df0043076f61a80bc24c72cbb3181c_prof);

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
