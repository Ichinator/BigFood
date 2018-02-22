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
        $__internal_13efc3741b9b8f638d29123760c6d57a6caea3907de27496226dbfe9657816f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13efc3741b9b8f638d29123760c6d57a6caea3907de27496226dbfe9657816f9->enter($__internal_13efc3741b9b8f638d29123760c6d57a6caea3907de27496226dbfe9657816f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_ebb2407d3dba4d7b0beffa350d3fe352f3992989da335449befc53e1e1ad00ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb2407d3dba4d7b0beffa350d3fe352f3992989da335449befc53e1e1ad00ac->enter($__internal_ebb2407d3dba4d7b0beffa350d3fe352f3992989da335449befc53e1e1ad00ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

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
        
        $__internal_13efc3741b9b8f638d29123760c6d57a6caea3907de27496226dbfe9657816f9->leave($__internal_13efc3741b9b8f638d29123760c6d57a6caea3907de27496226dbfe9657816f9_prof);

        
        $__internal_ebb2407d3dba4d7b0beffa350d3fe352f3992989da335449befc53e1e1ad00ac->leave($__internal_ebb2407d3dba4d7b0beffa350d3fe352f3992989da335449befc53e1e1ad00ac_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_5c07583d383a4aa5cfad050d4ee0c167bd88a863b8a4d1c45991485f97bf253d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c07583d383a4aa5cfad050d4ee0c167bd88a863b8a4d1c45991485f97bf253d->enter($__internal_5c07583d383a4aa5cfad050d4ee0c167bd88a863b8a4d1c45991485f97bf253d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_470b59d138a315cea4155e4384fdf8e82343144c3647b753faf31d905a6ea4a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_470b59d138a315cea4155e4384fdf8e82343144c3647b753faf31d905a6ea4a2->enter($__internal_470b59d138a315cea4155e4384fdf8e82343144c3647b753faf31d905a6ea4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_470b59d138a315cea4155e4384fdf8e82343144c3647b753faf31d905a6ea4a2->leave($__internal_470b59d138a315cea4155e4384fdf8e82343144c3647b753faf31d905a6ea4a2_prof);

        
        $__internal_5c07583d383a4aa5cfad050d4ee0c167bd88a863b8a4d1c45991485f97bf253d->leave($__internal_5c07583d383a4aa5cfad050d4ee0c167bd88a863b8a4d1c45991485f97bf253d_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_e62a853114cd70183f97b1496ea8cde80d92f248de799a3d38ea01203b476ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e62a853114cd70183f97b1496ea8cde80d92f248de799a3d38ea01203b476ad3->enter($__internal_e62a853114cd70183f97b1496ea8cde80d92f248de799a3d38ea01203b476ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_a3a3ec29372f8c1ad43d37bf6c9363625fcbd95c6359324490b5c40acd018e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a3ec29372f8c1ad43d37bf6c9363625fcbd95c6359324490b5c40acd018e81->enter($__internal_a3a3ec29372f8c1ad43d37bf6c9363625fcbd95c6359324490b5c40acd018e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_a3a3ec29372f8c1ad43d37bf6c9363625fcbd95c6359324490b5c40acd018e81->leave($__internal_a3a3ec29372f8c1ad43d37bf6c9363625fcbd95c6359324490b5c40acd018e81_prof);

        
        $__internal_e62a853114cd70183f97b1496ea8cde80d92f248de799a3d38ea01203b476ad3->leave($__internal_e62a853114cd70183f97b1496ea8cde80d92f248de799a3d38ea01203b476ad3_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_8ef7d5ff269fd0f6047ad660ca73846065e14be7842f1c2d3f431c7961c70f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef7d5ff269fd0f6047ad660ca73846065e14be7842f1c2d3f431c7961c70f6f->enter($__internal_8ef7d5ff269fd0f6047ad660ca73846065e14be7842f1c2d3f431c7961c70f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_b4f8d132307035d60085c93fa2104a064167a8e4446c578dc21785d37c45056c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f8d132307035d60085c93fa2104a064167a8e4446c578dc21785d37c45056c->enter($__internal_b4f8d132307035d60085c93fa2104a064167a8e4446c578dc21785d37c45056c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b4f8d132307035d60085c93fa2104a064167a8e4446c578dc21785d37c45056c->leave($__internal_b4f8d132307035d60085c93fa2104a064167a8e4446c578dc21785d37c45056c_prof);

        
        $__internal_8ef7d5ff269fd0f6047ad660ca73846065e14be7842f1c2d3f431c7961c70f6f->leave($__internal_8ef7d5ff269fd0f6047ad660ca73846065e14be7842f1c2d3f431c7961c70f6f_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_a07eda047993b529365284dc344b837d0504ff4242aa78ee821bb26172001553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a07eda047993b529365284dc344b837d0504ff4242aa78ee821bb26172001553->enter($__internal_a07eda047993b529365284dc344b837d0504ff4242aa78ee821bb26172001553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_6e08522f00c7edd4762049e4cee621b0b54055488c34dcc8125e17d2c5bba9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e08522f00c7edd4762049e4cee621b0b54055488c34dcc8125e17d2c5bba9f0->enter($__internal_6e08522f00c7edd4762049e4cee621b0b54055488c34dcc8125e17d2c5bba9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_6e08522f00c7edd4762049e4cee621b0b54055488c34dcc8125e17d2c5bba9f0->leave($__internal_6e08522f00c7edd4762049e4cee621b0b54055488c34dcc8125e17d2c5bba9f0_prof);

        
        $__internal_a07eda047993b529365284dc344b837d0504ff4242aa78ee821bb26172001553->leave($__internal_a07eda047993b529365284dc344b837d0504ff4242aa78ee821bb26172001553_prof);

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
