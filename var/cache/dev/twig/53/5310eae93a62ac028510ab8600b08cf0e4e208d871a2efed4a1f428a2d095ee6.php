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
        $__internal_96eff9375de8575068f69bf85fd75520e10d5cc8e417353b2b4cbd0bebff0076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96eff9375de8575068f69bf85fd75520e10d5cc8e417353b2b4cbd0bebff0076->enter($__internal_96eff9375de8575068f69bf85fd75520e10d5cc8e417353b2b4cbd0bebff0076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_73ad4361b06513d553987fc10ec7986d5c1a37e3b77a84c0da8814800dd4acaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ad4361b06513d553987fc10ec7986d5c1a37e3b77a84c0da8814800dd4acaa->enter($__internal_73ad4361b06513d553987fc10ec7986d5c1a37e3b77a84c0da8814800dd4acaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_96eff9375de8575068f69bf85fd75520e10d5cc8e417353b2b4cbd0bebff0076->leave($__internal_96eff9375de8575068f69bf85fd75520e10d5cc8e417353b2b4cbd0bebff0076_prof);

        
        $__internal_73ad4361b06513d553987fc10ec7986d5c1a37e3b77a84c0da8814800dd4acaa->leave($__internal_73ad4361b06513d553987fc10ec7986d5c1a37e3b77a84c0da8814800dd4acaa_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d2be662fdabd58490a2068bc3835ec9a477bdbf9dd1e8d26895736edae619ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2be662fdabd58490a2068bc3835ec9a477bdbf9dd1e8d26895736edae619ccd->enter($__internal_d2be662fdabd58490a2068bc3835ec9a477bdbf9dd1e8d26895736edae619ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2b42a31d0ce1cba193a3a4ca9c9add03019aa64dc7c04c57a5d8590ce4c122e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b42a31d0ce1cba193a3a4ca9c9add03019aa64dc7c04c57a5d8590ce4c122e9->enter($__internal_2b42a31d0ce1cba193a3a4ca9c9add03019aa64dc7c04c57a5d8590ce4c122e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_2b42a31d0ce1cba193a3a4ca9c9add03019aa64dc7c04c57a5d8590ce4c122e9->leave($__internal_2b42a31d0ce1cba193a3a4ca9c9add03019aa64dc7c04c57a5d8590ce4c122e9_prof);

        
        $__internal_d2be662fdabd58490a2068bc3835ec9a477bdbf9dd1e8d26895736edae619ccd->leave($__internal_d2be662fdabd58490a2068bc3835ec9a477bdbf9dd1e8d26895736edae619ccd_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_7f90573b3c2f2e933da31e991c615bee171803d9b5068bc2677325d67ce8e5fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f90573b3c2f2e933da31e991c615bee171803d9b5068bc2677325d67ce8e5fc->enter($__internal_7f90573b3c2f2e933da31e991c615bee171803d9b5068bc2677325d67ce8e5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_a847a38149ea5139a6b75fbe9dd07b2d6b819a987223352040691a55de804dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a847a38149ea5139a6b75fbe9dd07b2d6b819a987223352040691a55de804dc5->enter($__internal_a847a38149ea5139a6b75fbe9dd07b2d6b819a987223352040691a55de804dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_a847a38149ea5139a6b75fbe9dd07b2d6b819a987223352040691a55de804dc5->leave($__internal_a847a38149ea5139a6b75fbe9dd07b2d6b819a987223352040691a55de804dc5_prof);

        
        $__internal_7f90573b3c2f2e933da31e991c615bee171803d9b5068bc2677325d67ce8e5fc->leave($__internal_7f90573b3c2f2e933da31e991c615bee171803d9b5068bc2677325d67ce8e5fc_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_d14624186bf0b1b8fb77d59f659eee667ffbe0798048b11d20698bd6e84d6be8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d14624186bf0b1b8fb77d59f659eee667ffbe0798048b11d20698bd6e84d6be8->enter($__internal_d14624186bf0b1b8fb77d59f659eee667ffbe0798048b11d20698bd6e84d6be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_baefe48bef1f2d9ae9db10cd45dcf308467d8006d681cd220cdf9e179531b5fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baefe48bef1f2d9ae9db10cd45dcf308467d8006d681cd220cdf9e179531b5fe->enter($__internal_baefe48bef1f2d9ae9db10cd45dcf308467d8006d681cd220cdf9e179531b5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_baefe48bef1f2d9ae9db10cd45dcf308467d8006d681cd220cdf9e179531b5fe->leave($__internal_baefe48bef1f2d9ae9db10cd45dcf308467d8006d681cd220cdf9e179531b5fe_prof);

        
        $__internal_d14624186bf0b1b8fb77d59f659eee667ffbe0798048b11d20698bd6e84d6be8->leave($__internal_d14624186bf0b1b8fb77d59f659eee667ffbe0798048b11d20698bd6e84d6be8_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_5afe1801cbe48d2e951e40aafe0f400212991ffe5a18354230dc4e01b111b1c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5afe1801cbe48d2e951e40aafe0f400212991ffe5a18354230dc4e01b111b1c1->enter($__internal_5afe1801cbe48d2e951e40aafe0f400212991ffe5a18354230dc4e01b111b1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_d2034d5dfd4a4dab171694ef3e4822dcd1d576461345d16db7821a0e77de6608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2034d5dfd4a4dab171694ef3e4822dcd1d576461345d16db7821a0e77de6608->enter($__internal_d2034d5dfd4a4dab171694ef3e4822dcd1d576461345d16db7821a0e77de6608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_d2034d5dfd4a4dab171694ef3e4822dcd1d576461345d16db7821a0e77de6608->leave($__internal_d2034d5dfd4a4dab171694ef3e4822dcd1d576461345d16db7821a0e77de6608_prof);

        
        $__internal_5afe1801cbe48d2e951e40aafe0f400212991ffe5a18354230dc4e01b111b1c1->leave($__internal_5afe1801cbe48d2e951e40aafe0f400212991ffe5a18354230dc4e01b111b1c1_prof);

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
