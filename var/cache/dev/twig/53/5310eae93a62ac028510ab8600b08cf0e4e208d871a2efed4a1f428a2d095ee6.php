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
        $__internal_5dc71bb4aa0ef0fe33f92846b9a2e9bfb0e899f4f71565835184ee344b8da600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc71bb4aa0ef0fe33f92846b9a2e9bfb0e899f4f71565835184ee344b8da600->enter($__internal_5dc71bb4aa0ef0fe33f92846b9a2e9bfb0e899f4f71565835184ee344b8da600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_0498ce70d6f21eef8479798a63658003833d81ef4fabd3c353d6058b4f34ddd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0498ce70d6f21eef8479798a63658003833d81ef4fabd3c353d6058b4f34ddd3->enter($__internal_0498ce70d6f21eef8479798a63658003833d81ef4fabd3c353d6058b4f34ddd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_5dc71bb4aa0ef0fe33f92846b9a2e9bfb0e899f4f71565835184ee344b8da600->leave($__internal_5dc71bb4aa0ef0fe33f92846b9a2e9bfb0e899f4f71565835184ee344b8da600_prof);

        
        $__internal_0498ce70d6f21eef8479798a63658003833d81ef4fabd3c353d6058b4f34ddd3->leave($__internal_0498ce70d6f21eef8479798a63658003833d81ef4fabd3c353d6058b4f34ddd3_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_32cde7c2ad982a1bfcec2083d24d2d99d9fa470a87ef87102f23fb509b6a93c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32cde7c2ad982a1bfcec2083d24d2d99d9fa470a87ef87102f23fb509b6a93c3->enter($__internal_32cde7c2ad982a1bfcec2083d24d2d99d9fa470a87ef87102f23fb509b6a93c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2ccd1e279c9a3ad877fae6cfac1b331c55849273688c040da975b380b57358a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ccd1e279c9a3ad877fae6cfac1b331c55849273688c040da975b380b57358a8->enter($__internal_2ccd1e279c9a3ad877fae6cfac1b331c55849273688c040da975b380b57358a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_2ccd1e279c9a3ad877fae6cfac1b331c55849273688c040da975b380b57358a8->leave($__internal_2ccd1e279c9a3ad877fae6cfac1b331c55849273688c040da975b380b57358a8_prof);

        
        $__internal_32cde7c2ad982a1bfcec2083d24d2d99d9fa470a87ef87102f23fb509b6a93c3->leave($__internal_32cde7c2ad982a1bfcec2083d24d2d99d9fa470a87ef87102f23fb509b6a93c3_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_b6c8b904c11685776aa4e3768b413c4369df92c83337ffd6874f04ea4fbd1f9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6c8b904c11685776aa4e3768b413c4369df92c83337ffd6874f04ea4fbd1f9e->enter($__internal_b6c8b904c11685776aa4e3768b413c4369df92c83337ffd6874f04ea4fbd1f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_142808fb093220eab0276020d87a10a6fa931f85ecdd601fc72b1f97cc3fa84e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_142808fb093220eab0276020d87a10a6fa931f85ecdd601fc72b1f97cc3fa84e->enter($__internal_142808fb093220eab0276020d87a10a6fa931f85ecdd601fc72b1f97cc3fa84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_142808fb093220eab0276020d87a10a6fa931f85ecdd601fc72b1f97cc3fa84e->leave($__internal_142808fb093220eab0276020d87a10a6fa931f85ecdd601fc72b1f97cc3fa84e_prof);

        
        $__internal_b6c8b904c11685776aa4e3768b413c4369df92c83337ffd6874f04ea4fbd1f9e->leave($__internal_b6c8b904c11685776aa4e3768b413c4369df92c83337ffd6874f04ea4fbd1f9e_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_8c72afdbd2db6ab37ac4cf91365db2ef6344fe3398843065c7d350ef50754287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c72afdbd2db6ab37ac4cf91365db2ef6344fe3398843065c7d350ef50754287->enter($__internal_8c72afdbd2db6ab37ac4cf91365db2ef6344fe3398843065c7d350ef50754287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_5a266e615f63915837bdcac91d12791c2ef8c43efe9173f5bcbff19a2cf603e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a266e615f63915837bdcac91d12791c2ef8c43efe9173f5bcbff19a2cf603e8->enter($__internal_5a266e615f63915837bdcac91d12791c2ef8c43efe9173f5bcbff19a2cf603e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_5a266e615f63915837bdcac91d12791c2ef8c43efe9173f5bcbff19a2cf603e8->leave($__internal_5a266e615f63915837bdcac91d12791c2ef8c43efe9173f5bcbff19a2cf603e8_prof);

        
        $__internal_8c72afdbd2db6ab37ac4cf91365db2ef6344fe3398843065c7d350ef50754287->leave($__internal_8c72afdbd2db6ab37ac4cf91365db2ef6344fe3398843065c7d350ef50754287_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_aa311f7a47195cd772249b99a313e53e047a8556c286e33018b7fc7d383cd3b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa311f7a47195cd772249b99a313e53e047a8556c286e33018b7fc7d383cd3b3->enter($__internal_aa311f7a47195cd772249b99a313e53e047a8556c286e33018b7fc7d383cd3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_6def474a8b23ea6a0c4f2328ce67eb6273988e8d50df9cdb4df505d9ed58a468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6def474a8b23ea6a0c4f2328ce67eb6273988e8d50df9cdb4df505d9ed58a468->enter($__internal_6def474a8b23ea6a0c4f2328ce67eb6273988e8d50df9cdb4df505d9ed58a468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_6def474a8b23ea6a0c4f2328ce67eb6273988e8d50df9cdb4df505d9ed58a468->leave($__internal_6def474a8b23ea6a0c4f2328ce67eb6273988e8d50df9cdb4df505d9ed58a468_prof);

        
        $__internal_aa311f7a47195cd772249b99a313e53e047a8556c286e33018b7fc7d383cd3b3->leave($__internal_aa311f7a47195cd772249b99a313e53e047a8556c286e33018b7fc7d383cd3b3_prof);

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
