<?php

/* form_table_layout.html.twig */
class __TwigTemplate_ffe3a04988e51d5017ea1aa892ba083b0d22be571df0869c2c7621703981fb55 extends Twig_Template
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
        $__internal_ddc17b10af1c1a1619a6c13188aa6f09bbfdf8f1c4582153e5fbbcb95ce91550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc17b10af1c1a1619a6c13188aa6f09bbfdf8f1c4582153e5fbbcb95ce91550->enter($__internal_ddc17b10af1c1a1619a6c13188aa6f09bbfdf8f1c4582153e5fbbcb95ce91550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_71a59ad8ca8056f58298cd5e9bd01c179eabba93fecf09b82d174310930ea38a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a59ad8ca8056f58298cd5e9bd01c179eabba93fecf09b82d174310930ea38a->enter($__internal_71a59ad8ca8056f58298cd5e9bd01c179eabba93fecf09b82d174310930ea38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_ddc17b10af1c1a1619a6c13188aa6f09bbfdf8f1c4582153e5fbbcb95ce91550->leave($__internal_ddc17b10af1c1a1619a6c13188aa6f09bbfdf8f1c4582153e5fbbcb95ce91550_prof);

        
        $__internal_71a59ad8ca8056f58298cd5e9bd01c179eabba93fecf09b82d174310930ea38a->leave($__internal_71a59ad8ca8056f58298cd5e9bd01c179eabba93fecf09b82d174310930ea38a_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1968d499bfd40f71ca0024beff0b1951545d4129ae7099e4f4d21fcdb60b8ecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1968d499bfd40f71ca0024beff0b1951545d4129ae7099e4f4d21fcdb60b8ecb->enter($__internal_1968d499bfd40f71ca0024beff0b1951545d4129ae7099e4f4d21fcdb60b8ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_8c54168a43a426a2a4dd3b9aafa82af1f405a26c1e83822abebb2946f397d94e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c54168a43a426a2a4dd3b9aafa82af1f405a26c1e83822abebb2946f397d94e->enter($__internal_8c54168a43a426a2a4dd3b9aafa82af1f405a26c1e83822abebb2946f397d94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_8c54168a43a426a2a4dd3b9aafa82af1f405a26c1e83822abebb2946f397d94e->leave($__internal_8c54168a43a426a2a4dd3b9aafa82af1f405a26c1e83822abebb2946f397d94e_prof);

        
        $__internal_1968d499bfd40f71ca0024beff0b1951545d4129ae7099e4f4d21fcdb60b8ecb->leave($__internal_1968d499bfd40f71ca0024beff0b1951545d4129ae7099e4f4d21fcdb60b8ecb_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_bf5db6c063fd3819e24612d99afee24553977e1e370d09ea0ac0d2e00a53207f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf5db6c063fd3819e24612d99afee24553977e1e370d09ea0ac0d2e00a53207f->enter($__internal_bf5db6c063fd3819e24612d99afee24553977e1e370d09ea0ac0d2e00a53207f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c63a981febeba72f1750233bab54fe99115a75f067bfa9fe417d82cb0ff0622d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63a981febeba72f1750233bab54fe99115a75f067bfa9fe417d82cb0ff0622d->enter($__internal_c63a981febeba72f1750233bab54fe99115a75f067bfa9fe417d82cb0ff0622d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_c63a981febeba72f1750233bab54fe99115a75f067bfa9fe417d82cb0ff0622d->leave($__internal_c63a981febeba72f1750233bab54fe99115a75f067bfa9fe417d82cb0ff0622d_prof);

        
        $__internal_bf5db6c063fd3819e24612d99afee24553977e1e370d09ea0ac0d2e00a53207f->leave($__internal_bf5db6c063fd3819e24612d99afee24553977e1e370d09ea0ac0d2e00a53207f_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_47d9778b26b46bd8396fd9bee4bb012126983158771580fd8887c68eaed81ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d9778b26b46bd8396fd9bee4bb012126983158771580fd8887c68eaed81ab2->enter($__internal_47d9778b26b46bd8396fd9bee4bb012126983158771580fd8887c68eaed81ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_815e890deb09287a7912cf54f8fea8139c9addbdd0a43d748117724ce8ea23f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815e890deb09287a7912cf54f8fea8139c9addbdd0a43d748117724ce8ea23f3->enter($__internal_815e890deb09287a7912cf54f8fea8139c9addbdd0a43d748117724ce8ea23f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_815e890deb09287a7912cf54f8fea8139c9addbdd0a43d748117724ce8ea23f3->leave($__internal_815e890deb09287a7912cf54f8fea8139c9addbdd0a43d748117724ce8ea23f3_prof);

        
        $__internal_47d9778b26b46bd8396fd9bee4bb012126983158771580fd8887c68eaed81ab2->leave($__internal_47d9778b26b46bd8396fd9bee4bb012126983158771580fd8887c68eaed81ab2_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_db58e7e49b06cf45253780b08240a150d238a9aaec62a62199d3b322670fe6f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db58e7e49b06cf45253780b08240a150d238a9aaec62a62199d3b322670fe6f8->enter($__internal_db58e7e49b06cf45253780b08240a150d238a9aaec62a62199d3b322670fe6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_565dabaeacfcb38f962748ce0e4b11f5049e203f8d5eb1c19ab1b74c59dbcd51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565dabaeacfcb38f962748ce0e4b11f5049e203f8d5eb1c19ab1b74c59dbcd51->enter($__internal_565dabaeacfcb38f962748ce0e4b11f5049e203f8d5eb1c19ab1b74c59dbcd51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_565dabaeacfcb38f962748ce0e4b11f5049e203f8d5eb1c19ab1b74c59dbcd51->leave($__internal_565dabaeacfcb38f962748ce0e4b11f5049e203f8d5eb1c19ab1b74c59dbcd51_prof);

        
        $__internal_db58e7e49b06cf45253780b08240a150d238a9aaec62a62199d3b322670fe6f8->leave($__internal_db58e7e49b06cf45253780b08240a150d238a9aaec62a62199d3b322670fe6f8_prof);

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
