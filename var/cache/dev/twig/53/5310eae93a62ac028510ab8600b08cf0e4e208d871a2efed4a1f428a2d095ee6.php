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
        $__internal_e75e157e039e7b7e64f1dfcc867b996d8e8293a9181165f62dcb30044ffed9b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75e157e039e7b7e64f1dfcc867b996d8e8293a9181165f62dcb30044ffed9b3->enter($__internal_e75e157e039e7b7e64f1dfcc867b996d8e8293a9181165f62dcb30044ffed9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_87fbe3797bab2c0e3342eb3fef26bc0681bfc53c4f571d1819eb7f59eede6577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87fbe3797bab2c0e3342eb3fef26bc0681bfc53c4f571d1819eb7f59eede6577->enter($__internal_87fbe3797bab2c0e3342eb3fef26bc0681bfc53c4f571d1819eb7f59eede6577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_e75e157e039e7b7e64f1dfcc867b996d8e8293a9181165f62dcb30044ffed9b3->leave($__internal_e75e157e039e7b7e64f1dfcc867b996d8e8293a9181165f62dcb30044ffed9b3_prof);

        
        $__internal_87fbe3797bab2c0e3342eb3fef26bc0681bfc53c4f571d1819eb7f59eede6577->leave($__internal_87fbe3797bab2c0e3342eb3fef26bc0681bfc53c4f571d1819eb7f59eede6577_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_85e4d51042d8c6a864a7a82cab0aa1f2c31cd43ccdcd41dfcd7e6ab547c9013a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e4d51042d8c6a864a7a82cab0aa1f2c31cd43ccdcd41dfcd7e6ab547c9013a->enter($__internal_85e4d51042d8c6a864a7a82cab0aa1f2c31cd43ccdcd41dfcd7e6ab547c9013a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_eb27a82117758fc9632647bd619134e6a23f0f406b33fabed1d9730cf2aed94f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb27a82117758fc9632647bd619134e6a23f0f406b33fabed1d9730cf2aed94f->enter($__internal_eb27a82117758fc9632647bd619134e6a23f0f406b33fabed1d9730cf2aed94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_eb27a82117758fc9632647bd619134e6a23f0f406b33fabed1d9730cf2aed94f->leave($__internal_eb27a82117758fc9632647bd619134e6a23f0f406b33fabed1d9730cf2aed94f_prof);

        
        $__internal_85e4d51042d8c6a864a7a82cab0aa1f2c31cd43ccdcd41dfcd7e6ab547c9013a->leave($__internal_85e4d51042d8c6a864a7a82cab0aa1f2c31cd43ccdcd41dfcd7e6ab547c9013a_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_ae7f389759d9da2594dda3284028aaf2800b59fbc118ee71d8eeba2ee0eeb3c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae7f389759d9da2594dda3284028aaf2800b59fbc118ee71d8eeba2ee0eeb3c8->enter($__internal_ae7f389759d9da2594dda3284028aaf2800b59fbc118ee71d8eeba2ee0eeb3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_00865101bb6424326bd0f7183aa3022891f69d5491933c9bda8605530e635c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00865101bb6424326bd0f7183aa3022891f69d5491933c9bda8605530e635c0d->enter($__internal_00865101bb6424326bd0f7183aa3022891f69d5491933c9bda8605530e635c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_00865101bb6424326bd0f7183aa3022891f69d5491933c9bda8605530e635c0d->leave($__internal_00865101bb6424326bd0f7183aa3022891f69d5491933c9bda8605530e635c0d_prof);

        
        $__internal_ae7f389759d9da2594dda3284028aaf2800b59fbc118ee71d8eeba2ee0eeb3c8->leave($__internal_ae7f389759d9da2594dda3284028aaf2800b59fbc118ee71d8eeba2ee0eeb3c8_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_8580e0962855c1f56441b1cdeae8d5cbce0ccd1c0aea66fd44ef9a597c7e0f79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8580e0962855c1f56441b1cdeae8d5cbce0ccd1c0aea66fd44ef9a597c7e0f79->enter($__internal_8580e0962855c1f56441b1cdeae8d5cbce0ccd1c0aea66fd44ef9a597c7e0f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_5e663a1ae0582a72fe42da4aa837c1c0a7ba84639865d2a653f2fddd73d1633d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e663a1ae0582a72fe42da4aa837c1c0a7ba84639865d2a653f2fddd73d1633d->enter($__internal_5e663a1ae0582a72fe42da4aa837c1c0a7ba84639865d2a653f2fddd73d1633d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_5e663a1ae0582a72fe42da4aa837c1c0a7ba84639865d2a653f2fddd73d1633d->leave($__internal_5e663a1ae0582a72fe42da4aa837c1c0a7ba84639865d2a653f2fddd73d1633d_prof);

        
        $__internal_8580e0962855c1f56441b1cdeae8d5cbce0ccd1c0aea66fd44ef9a597c7e0f79->leave($__internal_8580e0962855c1f56441b1cdeae8d5cbce0ccd1c0aea66fd44ef9a597c7e0f79_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_9940a8d3a9d8b9cf4c3caf7f9a580329719f0dcae5a604a0c4b123515b1d4d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9940a8d3a9d8b9cf4c3caf7f9a580329719f0dcae5a604a0c4b123515b1d4d0e->enter($__internal_9940a8d3a9d8b9cf4c3caf7f9a580329719f0dcae5a604a0c4b123515b1d4d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_0ddac2fc784efbbf374167d30da87262e4aeef6251b192934ef34e5f730e8b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ddac2fc784efbbf374167d30da87262e4aeef6251b192934ef34e5f730e8b1f->enter($__internal_0ddac2fc784efbbf374167d30da87262e4aeef6251b192934ef34e5f730e8b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_0ddac2fc784efbbf374167d30da87262e4aeef6251b192934ef34e5f730e8b1f->leave($__internal_0ddac2fc784efbbf374167d30da87262e4aeef6251b192934ef34e5f730e8b1f_prof);

        
        $__internal_9940a8d3a9d8b9cf4c3caf7f9a580329719f0dcae5a604a0c4b123515b1d4d0e->leave($__internal_9940a8d3a9d8b9cf4c3caf7f9a580329719f0dcae5a604a0c4b123515b1d4d0e_prof);

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
