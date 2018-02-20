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
        $__internal_77a0203bcb4614d3ab43345c471164a4e56a76f1c20d5c0092ac70bc4c4ea5fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77a0203bcb4614d3ab43345c471164a4e56a76f1c20d5c0092ac70bc4c4ea5fd->enter($__internal_77a0203bcb4614d3ab43345c471164a4e56a76f1c20d5c0092ac70bc4c4ea5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_b96cdab95362b24f68ea0d801b97702f48a065db4c6e35620a20b34d542672dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96cdab95362b24f68ea0d801b97702f48a065db4c6e35620a20b34d542672dd->enter($__internal_b96cdab95362b24f68ea0d801b97702f48a065db4c6e35620a20b34d542672dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

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
        
        $__internal_77a0203bcb4614d3ab43345c471164a4e56a76f1c20d5c0092ac70bc4c4ea5fd->leave($__internal_77a0203bcb4614d3ab43345c471164a4e56a76f1c20d5c0092ac70bc4c4ea5fd_prof);

        
        $__internal_b96cdab95362b24f68ea0d801b97702f48a065db4c6e35620a20b34d542672dd->leave($__internal_b96cdab95362b24f68ea0d801b97702f48a065db4c6e35620a20b34d542672dd_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_481acb0711e08a18ad256ba3e60f541a837dba509f8e34d295bff85f50e7dee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_481acb0711e08a18ad256ba3e60f541a837dba509f8e34d295bff85f50e7dee2->enter($__internal_481acb0711e08a18ad256ba3e60f541a837dba509f8e34d295bff85f50e7dee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_627caa4f38230e04e48461e2264b96e666ad2911fe2ace7c9275d8e93f0c171b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627caa4f38230e04e48461e2264b96e666ad2911fe2ace7c9275d8e93f0c171b->enter($__internal_627caa4f38230e04e48461e2264b96e666ad2911fe2ace7c9275d8e93f0c171b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_627caa4f38230e04e48461e2264b96e666ad2911fe2ace7c9275d8e93f0c171b->leave($__internal_627caa4f38230e04e48461e2264b96e666ad2911fe2ace7c9275d8e93f0c171b_prof);

        
        $__internal_481acb0711e08a18ad256ba3e60f541a837dba509f8e34d295bff85f50e7dee2->leave($__internal_481acb0711e08a18ad256ba3e60f541a837dba509f8e34d295bff85f50e7dee2_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_b3760e2a78ddeacca8058e6a748988bfca5895bf760ec1f064560825c4c9279c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3760e2a78ddeacca8058e6a748988bfca5895bf760ec1f064560825c4c9279c->enter($__internal_b3760e2a78ddeacca8058e6a748988bfca5895bf760ec1f064560825c4c9279c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_da51e31ae0e05212279f76dfc8c638bb2a1022a8693e146ee930755a9b95a02a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da51e31ae0e05212279f76dfc8c638bb2a1022a8693e146ee930755a9b95a02a->enter($__internal_da51e31ae0e05212279f76dfc8c638bb2a1022a8693e146ee930755a9b95a02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_da51e31ae0e05212279f76dfc8c638bb2a1022a8693e146ee930755a9b95a02a->leave($__internal_da51e31ae0e05212279f76dfc8c638bb2a1022a8693e146ee930755a9b95a02a_prof);

        
        $__internal_b3760e2a78ddeacca8058e6a748988bfca5895bf760ec1f064560825c4c9279c->leave($__internal_b3760e2a78ddeacca8058e6a748988bfca5895bf760ec1f064560825c4c9279c_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_823e39d38e40f85899559a040a67a8349cc3fd6292d97c84c5d1761877923a0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_823e39d38e40f85899559a040a67a8349cc3fd6292d97c84c5d1761877923a0e->enter($__internal_823e39d38e40f85899559a040a67a8349cc3fd6292d97c84c5d1761877923a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_6caf6b8e3449e0180c96536c1c2ea78527dd41097175f94bec93f4f6d1647235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6caf6b8e3449e0180c96536c1c2ea78527dd41097175f94bec93f4f6d1647235->enter($__internal_6caf6b8e3449e0180c96536c1c2ea78527dd41097175f94bec93f4f6d1647235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6caf6b8e3449e0180c96536c1c2ea78527dd41097175f94bec93f4f6d1647235->leave($__internal_6caf6b8e3449e0180c96536c1c2ea78527dd41097175f94bec93f4f6d1647235_prof);

        
        $__internal_823e39d38e40f85899559a040a67a8349cc3fd6292d97c84c5d1761877923a0e->leave($__internal_823e39d38e40f85899559a040a67a8349cc3fd6292d97c84c5d1761877923a0e_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_cf702fcca2b599db07acf5f6335abe9efee5e371b962f36012035c478ad8c98c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf702fcca2b599db07acf5f6335abe9efee5e371b962f36012035c478ad8c98c->enter($__internal_cf702fcca2b599db07acf5f6335abe9efee5e371b962f36012035c478ad8c98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_1d521ec3fd3c56f34ea27c145d74679d6e559ffd02c878f3bc1713c3c63587ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d521ec3fd3c56f34ea27c145d74679d6e559ffd02c878f3bc1713c3c63587ba->enter($__internal_1d521ec3fd3c56f34ea27c145d74679d6e559ffd02c878f3bc1713c3c63587ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_1d521ec3fd3c56f34ea27c145d74679d6e559ffd02c878f3bc1713c3c63587ba->leave($__internal_1d521ec3fd3c56f34ea27c145d74679d6e559ffd02c878f3bc1713c3c63587ba_prof);

        
        $__internal_cf702fcca2b599db07acf5f6335abe9efee5e371b962f36012035c478ad8c98c->leave($__internal_cf702fcca2b599db07acf5f6335abe9efee5e371b962f36012035c478ad8c98c_prof);

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
