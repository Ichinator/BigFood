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
        $__internal_fa95bc9943361ee4a43f35221e7d805d3135cb320d2ed3e2aa2494bd77de76ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa95bc9943361ee4a43f35221e7d805d3135cb320d2ed3e2aa2494bd77de76ca->enter($__internal_fa95bc9943361ee4a43f35221e7d805d3135cb320d2ed3e2aa2494bd77de76ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_ef07d5c84e463661270a2738db027dd2c1d396d081ab97952c3c3232f171c06f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef07d5c84e463661270a2738db027dd2c1d396d081ab97952c3c3232f171c06f->enter($__internal_ef07d5c84e463661270a2738db027dd2c1d396d081ab97952c3c3232f171c06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_fa95bc9943361ee4a43f35221e7d805d3135cb320d2ed3e2aa2494bd77de76ca->leave($__internal_fa95bc9943361ee4a43f35221e7d805d3135cb320d2ed3e2aa2494bd77de76ca_prof);

        
        $__internal_ef07d5c84e463661270a2738db027dd2c1d396d081ab97952c3c3232f171c06f->leave($__internal_ef07d5c84e463661270a2738db027dd2c1d396d081ab97952c3c3232f171c06f_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_2f2df6bf1c65d518bfb9756aeb4b7d09b6191bc3fece383576bbdd7bdea950fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f2df6bf1c65d518bfb9756aeb4b7d09b6191bc3fece383576bbdd7bdea950fa->enter($__internal_2f2df6bf1c65d518bfb9756aeb4b7d09b6191bc3fece383576bbdd7bdea950fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a33991d5f16e7607c2aae17b3a16686767c31b48cf5012fa902b8f20526fea27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33991d5f16e7607c2aae17b3a16686767c31b48cf5012fa902b8f20526fea27->enter($__internal_a33991d5f16e7607c2aae17b3a16686767c31b48cf5012fa902b8f20526fea27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_a33991d5f16e7607c2aae17b3a16686767c31b48cf5012fa902b8f20526fea27->leave($__internal_a33991d5f16e7607c2aae17b3a16686767c31b48cf5012fa902b8f20526fea27_prof);

        
        $__internal_2f2df6bf1c65d518bfb9756aeb4b7d09b6191bc3fece383576bbdd7bdea950fa->leave($__internal_2f2df6bf1c65d518bfb9756aeb4b7d09b6191bc3fece383576bbdd7bdea950fa_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e341d0c87114ac2a086bd4e8150ac7f6514edfc1abc2de0a5a8ec9c10503e6ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e341d0c87114ac2a086bd4e8150ac7f6514edfc1abc2de0a5a8ec9c10503e6ec->enter($__internal_e341d0c87114ac2a086bd4e8150ac7f6514edfc1abc2de0a5a8ec9c10503e6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_b79110d3a7f5132e2dad169cf9b111884641a2639643e3731225f229de7e2b00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79110d3a7f5132e2dad169cf9b111884641a2639643e3731225f229de7e2b00->enter($__internal_b79110d3a7f5132e2dad169cf9b111884641a2639643e3731225f229de7e2b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_b79110d3a7f5132e2dad169cf9b111884641a2639643e3731225f229de7e2b00->leave($__internal_b79110d3a7f5132e2dad169cf9b111884641a2639643e3731225f229de7e2b00_prof);

        
        $__internal_e341d0c87114ac2a086bd4e8150ac7f6514edfc1abc2de0a5a8ec9c10503e6ec->leave($__internal_e341d0c87114ac2a086bd4e8150ac7f6514edfc1abc2de0a5a8ec9c10503e6ec_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_b748588ffbcba9ab51dedc67c2550f89015c83b37bc1cb837e3cdbd7cefa80d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b748588ffbcba9ab51dedc67c2550f89015c83b37bc1cb837e3cdbd7cefa80d1->enter($__internal_b748588ffbcba9ab51dedc67c2550f89015c83b37bc1cb837e3cdbd7cefa80d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_26797f2fedefbd3340e13b751bf3ef0c5b9df7804a8113ae1db59110a3b107a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26797f2fedefbd3340e13b751bf3ef0c5b9df7804a8113ae1db59110a3b107a1->enter($__internal_26797f2fedefbd3340e13b751bf3ef0c5b9df7804a8113ae1db59110a3b107a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_26797f2fedefbd3340e13b751bf3ef0c5b9df7804a8113ae1db59110a3b107a1->leave($__internal_26797f2fedefbd3340e13b751bf3ef0c5b9df7804a8113ae1db59110a3b107a1_prof);

        
        $__internal_b748588ffbcba9ab51dedc67c2550f89015c83b37bc1cb837e3cdbd7cefa80d1->leave($__internal_b748588ffbcba9ab51dedc67c2550f89015c83b37bc1cb837e3cdbd7cefa80d1_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_08e34620aa03f547e66a682c90471ae98b24713c06a737f01acc5501a126e5a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08e34620aa03f547e66a682c90471ae98b24713c06a737f01acc5501a126e5a9->enter($__internal_08e34620aa03f547e66a682c90471ae98b24713c06a737f01acc5501a126e5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_3f540f4f785e3bf6be2ccd547f0c50435bde91e7afdb6143990005372b511e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f540f4f785e3bf6be2ccd547f0c50435bde91e7afdb6143990005372b511e00->enter($__internal_3f540f4f785e3bf6be2ccd547f0c50435bde91e7afdb6143990005372b511e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_3f540f4f785e3bf6be2ccd547f0c50435bde91e7afdb6143990005372b511e00->leave($__internal_3f540f4f785e3bf6be2ccd547f0c50435bde91e7afdb6143990005372b511e00_prof);

        
        $__internal_08e34620aa03f547e66a682c90471ae98b24713c06a737f01acc5501a126e5a9->leave($__internal_08e34620aa03f547e66a682c90471ae98b24713c06a737f01acc5501a126e5a9_prof);

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
