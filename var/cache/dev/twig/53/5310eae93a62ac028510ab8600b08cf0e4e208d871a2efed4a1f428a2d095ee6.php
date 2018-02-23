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
        $__internal_905cf90c2163a88ebb16df29e33cbe49c5d273f731088c38fa44f1597b62c1ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_905cf90c2163a88ebb16df29e33cbe49c5d273f731088c38fa44f1597b62c1ee->enter($__internal_905cf90c2163a88ebb16df29e33cbe49c5d273f731088c38fa44f1597b62c1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_639d6fe9dc614bb3c07a063aefb643d7942f11f0f630a1f4f882451dc7ebe24e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639d6fe9dc614bb3c07a063aefb643d7942f11f0f630a1f4f882451dc7ebe24e->enter($__internal_639d6fe9dc614bb3c07a063aefb643d7942f11f0f630a1f4f882451dc7ebe24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_905cf90c2163a88ebb16df29e33cbe49c5d273f731088c38fa44f1597b62c1ee->leave($__internal_905cf90c2163a88ebb16df29e33cbe49c5d273f731088c38fa44f1597b62c1ee_prof);

        
        $__internal_639d6fe9dc614bb3c07a063aefb643d7942f11f0f630a1f4f882451dc7ebe24e->leave($__internal_639d6fe9dc614bb3c07a063aefb643d7942f11f0f630a1f4f882451dc7ebe24e_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6bb03dedf056b34e95e0b5c8d85974f3c5aefc7d97b91c0eedeea5f552290425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bb03dedf056b34e95e0b5c8d85974f3c5aefc7d97b91c0eedeea5f552290425->enter($__internal_6bb03dedf056b34e95e0b5c8d85974f3c5aefc7d97b91c0eedeea5f552290425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4360799d1bcb97680bb37a5ed2cd5e3bbeed212c906e7727596086c4958bceee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4360799d1bcb97680bb37a5ed2cd5e3bbeed212c906e7727596086c4958bceee->enter($__internal_4360799d1bcb97680bb37a5ed2cd5e3bbeed212c906e7727596086c4958bceee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_4360799d1bcb97680bb37a5ed2cd5e3bbeed212c906e7727596086c4958bceee->leave($__internal_4360799d1bcb97680bb37a5ed2cd5e3bbeed212c906e7727596086c4958bceee_prof);

        
        $__internal_6bb03dedf056b34e95e0b5c8d85974f3c5aefc7d97b91c0eedeea5f552290425->leave($__internal_6bb03dedf056b34e95e0b5c8d85974f3c5aefc7d97b91c0eedeea5f552290425_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_d47813b5d2a4a8ac5a5752edfeca626b0b4bd67cbab459b4730ca86737a91818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d47813b5d2a4a8ac5a5752edfeca626b0b4bd67cbab459b4730ca86737a91818->enter($__internal_d47813b5d2a4a8ac5a5752edfeca626b0b4bd67cbab459b4730ca86737a91818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_f444a67be1688095b7bff6ffe2fca45116e5ace39a8159f6437244b5b1c6ff02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f444a67be1688095b7bff6ffe2fca45116e5ace39a8159f6437244b5b1c6ff02->enter($__internal_f444a67be1688095b7bff6ffe2fca45116e5ace39a8159f6437244b5b1c6ff02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_f444a67be1688095b7bff6ffe2fca45116e5ace39a8159f6437244b5b1c6ff02->leave($__internal_f444a67be1688095b7bff6ffe2fca45116e5ace39a8159f6437244b5b1c6ff02_prof);

        
        $__internal_d47813b5d2a4a8ac5a5752edfeca626b0b4bd67cbab459b4730ca86737a91818->leave($__internal_d47813b5d2a4a8ac5a5752edfeca626b0b4bd67cbab459b4730ca86737a91818_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_270b8f1300a027e5a12b4c2acfdaf6e3f9e24162e89e7a2f84b0aead8337ee81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_270b8f1300a027e5a12b4c2acfdaf6e3f9e24162e89e7a2f84b0aead8337ee81->enter($__internal_270b8f1300a027e5a12b4c2acfdaf6e3f9e24162e89e7a2f84b0aead8337ee81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_3d1b79037bd042654d111073c6119c1ad90b77cadda8ead142ce8f5c8043fc94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1b79037bd042654d111073c6119c1ad90b77cadda8ead142ce8f5c8043fc94->enter($__internal_3d1b79037bd042654d111073c6119c1ad90b77cadda8ead142ce8f5c8043fc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_3d1b79037bd042654d111073c6119c1ad90b77cadda8ead142ce8f5c8043fc94->leave($__internal_3d1b79037bd042654d111073c6119c1ad90b77cadda8ead142ce8f5c8043fc94_prof);

        
        $__internal_270b8f1300a027e5a12b4c2acfdaf6e3f9e24162e89e7a2f84b0aead8337ee81->leave($__internal_270b8f1300a027e5a12b4c2acfdaf6e3f9e24162e89e7a2f84b0aead8337ee81_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_12ddf543e1f6fa884ba9959cd8382d493b532fc9f11e4f86fc40211d48c5eb32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12ddf543e1f6fa884ba9959cd8382d493b532fc9f11e4f86fc40211d48c5eb32->enter($__internal_12ddf543e1f6fa884ba9959cd8382d493b532fc9f11e4f86fc40211d48c5eb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_45f9f9f6d6127b8bc3811f1b6ed719d8aa96ed58df6427fa62541f79bc9b99dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f9f9f6d6127b8bc3811f1b6ed719d8aa96ed58df6427fa62541f79bc9b99dd->enter($__internal_45f9f9f6d6127b8bc3811f1b6ed719d8aa96ed58df6427fa62541f79bc9b99dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_45f9f9f6d6127b8bc3811f1b6ed719d8aa96ed58df6427fa62541f79bc9b99dd->leave($__internal_45f9f9f6d6127b8bc3811f1b6ed719d8aa96ed58df6427fa62541f79bc9b99dd_prof);

        
        $__internal_12ddf543e1f6fa884ba9959cd8382d493b532fc9f11e4f86fc40211d48c5eb32->leave($__internal_12ddf543e1f6fa884ba9959cd8382d493b532fc9f11e4f86fc40211d48c5eb32_prof);

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
