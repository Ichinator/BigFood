<?php

/* form_table_layout.html.twig */
class __TwigTemplate_4c88641d3b130b7d783faf748c17c182ab46f706a11e302c51f2b723326067f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_451e17dacb5301b3c5d64bda5e8f199dd27e52274e76a1041ee2d737201b7b7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_451e17dacb5301b3c5d64bda5e8f199dd27e52274e76a1041ee2d737201b7b7f->enter($__internal_451e17dacb5301b3c5d64bda5e8f199dd27e52274e76a1041ee2d737201b7b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_d12645b5d94a2b80ea09793ffb075e9d3f91a276f291be6cc352e39e797644b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12645b5d94a2b80ea09793ffb075e9d3f91a276f291be6cc352e39e797644b2->enter($__internal_d12645b5d94a2b80ea09793ffb075e9d3f91a276f291be6cc352e39e797644b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_451e17dacb5301b3c5d64bda5e8f199dd27e52274e76a1041ee2d737201b7b7f->leave($__internal_451e17dacb5301b3c5d64bda5e8f199dd27e52274e76a1041ee2d737201b7b7f_prof);

        
        $__internal_d12645b5d94a2b80ea09793ffb075e9d3f91a276f291be6cc352e39e797644b2->leave($__internal_d12645b5d94a2b80ea09793ffb075e9d3f91a276f291be6cc352e39e797644b2_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_314b3482b818d6a7022dc10058354ed7bad1671d02fefae7a376137e5ea7cece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_314b3482b818d6a7022dc10058354ed7bad1671d02fefae7a376137e5ea7cece->enter($__internal_314b3482b818d6a7022dc10058354ed7bad1671d02fefae7a376137e5ea7cece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_5da9f648b0d0297442cd119299f3372eeff1fd7c123faea2f6299666ec12d2a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da9f648b0d0297442cd119299f3372eeff1fd7c123faea2f6299666ec12d2a2->enter($__internal_5da9f648b0d0297442cd119299f3372eeff1fd7c123faea2f6299666ec12d2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_5da9f648b0d0297442cd119299f3372eeff1fd7c123faea2f6299666ec12d2a2->leave($__internal_5da9f648b0d0297442cd119299f3372eeff1fd7c123faea2f6299666ec12d2a2_prof);

        
        $__internal_314b3482b818d6a7022dc10058354ed7bad1671d02fefae7a376137e5ea7cece->leave($__internal_314b3482b818d6a7022dc10058354ed7bad1671d02fefae7a376137e5ea7cece_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f1040cb595c55253ba37904e4219b5fb6abd65fde4aaafee51b2bb6964feaaad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1040cb595c55253ba37904e4219b5fb6abd65fde4aaafee51b2bb6964feaaad->enter($__internal_f1040cb595c55253ba37904e4219b5fb6abd65fde4aaafee51b2bb6964feaaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_2f3928ea025679b94bf3ee40d1bd6c2de38c03acd6b3b7b0edae301e3a035647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3928ea025679b94bf3ee40d1bd6c2de38c03acd6b3b7b0edae301e3a035647->enter($__internal_2f3928ea025679b94bf3ee40d1bd6c2de38c03acd6b3b7b0edae301e3a035647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_2f3928ea025679b94bf3ee40d1bd6c2de38c03acd6b3b7b0edae301e3a035647->leave($__internal_2f3928ea025679b94bf3ee40d1bd6c2de38c03acd6b3b7b0edae301e3a035647_prof);

        
        $__internal_f1040cb595c55253ba37904e4219b5fb6abd65fde4aaafee51b2bb6964feaaad->leave($__internal_f1040cb595c55253ba37904e4219b5fb6abd65fde4aaafee51b2bb6964feaaad_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_8df947dcd74e4b5c0326971b2c75d8eaa4d20b8c45f581f39675b0d536ee65cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df947dcd74e4b5c0326971b2c75d8eaa4d20b8c45f581f39675b0d536ee65cd->enter($__internal_8df947dcd74e4b5c0326971b2c75d8eaa4d20b8c45f581f39675b0d536ee65cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_b23459e9b737b004eab54ab166921a344ffe9923182a243c80aa6b33e897002d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23459e9b737b004eab54ab166921a344ffe9923182a243c80aa6b33e897002d->enter($__internal_b23459e9b737b004eab54ab166921a344ffe9923182a243c80aa6b33e897002d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_b23459e9b737b004eab54ab166921a344ffe9923182a243c80aa6b33e897002d->leave($__internal_b23459e9b737b004eab54ab166921a344ffe9923182a243c80aa6b33e897002d_prof);

        
        $__internal_8df947dcd74e4b5c0326971b2c75d8eaa4d20b8c45f581f39675b0d536ee65cd->leave($__internal_8df947dcd74e4b5c0326971b2c75d8eaa4d20b8c45f581f39675b0d536ee65cd_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_d980ebb9e20a55aacb8730b45d7b22ae5fa0fe7b00d175dbb8baaac21d180b83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d980ebb9e20a55aacb8730b45d7b22ae5fa0fe7b00d175dbb8baaac21d180b83->enter($__internal_d980ebb9e20a55aacb8730b45d7b22ae5fa0fe7b00d175dbb8baaac21d180b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_4b43ac02e74ea069ec01b0ae19a7c0d8463323fd80c98b728cf569d48589b3a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b43ac02e74ea069ec01b0ae19a7c0d8463323fd80c98b728cf569d48589b3a4->enter($__internal_4b43ac02e74ea069ec01b0ae19a7c0d8463323fd80c98b728cf569d48589b3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_4b43ac02e74ea069ec01b0ae19a7c0d8463323fd80c98b728cf569d48589b3a4->leave($__internal_4b43ac02e74ea069ec01b0ae19a7c0d8463323fd80c98b728cf569d48589b3a4_prof);

        
        $__internal_d980ebb9e20a55aacb8730b45d7b22ae5fa0fe7b00d175dbb8baaac21d180b83->leave($__internal_d980ebb9e20a55aacb8730b45d7b22ae5fa0fe7b00d175dbb8baaac21d180b83_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
