<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_b641e193e94fbe89902178228d1b9de85f3900990499a79803965135de3f845b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9727dee1c46473169481ddb734784611d8fab0c91911efaa4d483b982929779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9727dee1c46473169481ddb734784611d8fab0c91911efaa4d483b982929779->enter($__internal_c9727dee1c46473169481ddb734784611d8fab0c91911efaa4d483b982929779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_52c6aed8e2409bd11fefb19ee6d0d761243891d96c109e52647fc015c833dc1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c6aed8e2409bd11fefb19ee6d0d761243891d96c109e52647fc015c833dc1e->enter($__internal_52c6aed8e2409bd11fefb19ee6d0d761243891d96c109e52647fc015c833dc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9727dee1c46473169481ddb734784611d8fab0c91911efaa4d483b982929779->leave($__internal_c9727dee1c46473169481ddb734784611d8fab0c91911efaa4d483b982929779_prof);

        
        $__internal_52c6aed8e2409bd11fefb19ee6d0d761243891d96c109e52647fc015c833dc1e->leave($__internal_52c6aed8e2409bd11fefb19ee6d0d761243891d96c109e52647fc015c833dc1e_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_d5327e3cb5498ef0d6f0fad37e7930f09e381579285fb0b7096d7afafced8258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5327e3cb5498ef0d6f0fad37e7930f09e381579285fb0b7096d7afafced8258->enter($__internal_d5327e3cb5498ef0d6f0fad37e7930f09e381579285fb0b7096d7afafced8258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_79af44a36ea908567ea3c48db4b900fbdeb7a60e17f0aefc71e1cbb028b9b272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79af44a36ea908567ea3c48db4b900fbdeb7a60e17f0aefc71e1cbb028b9b272->enter($__internal_79af44a36ea908567ea3c48db4b900fbdeb7a60e17f0aefc71e1cbb028b9b272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_79af44a36ea908567ea3c48db4b900fbdeb7a60e17f0aefc71e1cbb028b9b272->leave($__internal_79af44a36ea908567ea3c48db4b900fbdeb7a60e17f0aefc71e1cbb028b9b272_prof);

        
        $__internal_d5327e3cb5498ef0d6f0fad37e7930f09e381579285fb0b7096d7afafced8258->leave($__internal_d5327e3cb5498ef0d6f0fad37e7930f09e381579285fb0b7096d7afafced8258_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_60adaa645ed3561aa76327cb765615b6726e834290950c5f1311ae15ae4a64d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60adaa645ed3561aa76327cb765615b6726e834290950c5f1311ae15ae4a64d5->enter($__internal_60adaa645ed3561aa76327cb765615b6726e834290950c5f1311ae15ae4a64d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_836cfb0e301f8e390e55f67d1de5a5a6a966eb5b80881b3e361ceb78a9353651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836cfb0e301f8e390e55f67d1de5a5a6a966eb5b80881b3e361ceb78a9353651->enter($__internal_836cfb0e301f8e390e55f67d1de5a5a6a966eb5b80881b3e361ceb78a9353651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_836cfb0e301f8e390e55f67d1de5a5a6a966eb5b80881b3e361ceb78a9353651->leave($__internal_836cfb0e301f8e390e55f67d1de5a5a6a966eb5b80881b3e361ceb78a9353651_prof);

        
        $__internal_60adaa645ed3561aa76327cb765615b6726e834290950c5f1311ae15ae4a64d5->leave($__internal_60adaa645ed3561aa76327cb765615b6726e834290950c5f1311ae15ae4a64d5_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_5c6e73015ca09ecd4c5843f3cacbb586266b47aaac4e4b80a3e0b7059f1359b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c6e73015ca09ecd4c5843f3cacbb586266b47aaac4e4b80a3e0b7059f1359b3->enter($__internal_5c6e73015ca09ecd4c5843f3cacbb586266b47aaac4e4b80a3e0b7059f1359b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_017f4cf02fa008dff5925994a8c4e698d1eeab9d5759170dc7257c94fb7dafa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017f4cf02fa008dff5925994a8c4e698d1eeab9d5759170dc7257c94fb7dafa1->enter($__internal_017f4cf02fa008dff5925994a8c4e698d1eeab9d5759170dc7257c94fb7dafa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_017f4cf02fa008dff5925994a8c4e698d1eeab9d5759170dc7257c94fb7dafa1->leave($__internal_017f4cf02fa008dff5925994a8c4e698d1eeab9d5759170dc7257c94fb7dafa1_prof);

        
        $__internal_5c6e73015ca09ecd4c5843f3cacbb586266b47aaac4e4b80a3e0b7059f1359b3->leave($__internal_5c6e73015ca09ecd4c5843f3cacbb586266b47aaac4e4b80a3e0b7059f1359b3_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_2f34aca0e0e9ab829309f76f33b4b0685dbbff144827ab0b060b17e841c26ce1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f34aca0e0e9ab829309f76f33b4b0685dbbff144827ab0b060b17e841c26ce1->enter($__internal_2f34aca0e0e9ab829309f76f33b4b0685dbbff144827ab0b060b17e841c26ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_b56ae27cd538ddfb3862fd8e30e8a543f43d5d73d6c8a69df1b9cf3054b0fb80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56ae27cd538ddfb3862fd8e30e8a543f43d5d73d6c8a69df1b9cf3054b0fb80->enter($__internal_b56ae27cd538ddfb3862fd8e30e8a543f43d5d73d6c8a69df1b9cf3054b0fb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_b56ae27cd538ddfb3862fd8e30e8a543f43d5d73d6c8a69df1b9cf3054b0fb80->leave($__internal_b56ae27cd538ddfb3862fd8e30e8a543f43d5d73d6c8a69df1b9cf3054b0fb80_prof);

        
        $__internal_2f34aca0e0e9ab829309f76f33b4b0685dbbff144827ab0b060b17e841c26ce1->leave($__internal_2f34aca0e0e9ab829309f76f33b4b0685dbbff144827ab0b060b17e841c26ce1_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_40ed512f736ea73d07e62e9ca34b726add91040b482319613fa1b656a2507304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ed512f736ea73d07e62e9ca34b726add91040b482319613fa1b656a2507304->enter($__internal_40ed512f736ea73d07e62e9ca34b726add91040b482319613fa1b656a2507304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_912e80ceb1ca58623109466e99be17d4036f8da658c77c30af6dc9d4e227d717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912e80ceb1ca58623109466e99be17d4036f8da658c77c30af6dc9d4e227d717->enter($__internal_912e80ceb1ca58623109466e99be17d4036f8da658c77c30af6dc9d4e227d717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_912e80ceb1ca58623109466e99be17d4036f8da658c77c30af6dc9d4e227d717->leave($__internal_912e80ceb1ca58623109466e99be17d4036f8da658c77c30af6dc9d4e227d717_prof);

        
        $__internal_40ed512f736ea73d07e62e9ca34b726add91040b482319613fa1b656a2507304->leave($__internal_40ed512f736ea73d07e62e9ca34b726add91040b482319613fa1b656a2507304_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_69f211ee500217effcf3f8c7791f7df8ac30a149b3a888935dcf3a5337960072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69f211ee500217effcf3f8c7791f7df8ac30a149b3a888935dcf3a5337960072->enter($__internal_69f211ee500217effcf3f8c7791f7df8ac30a149b3a888935dcf3a5337960072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_e93a28a7df1b9c0d81a4accea691d31abc216b41bf2eac8ead77c66844821d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e93a28a7df1b9c0d81a4accea691d31abc216b41bf2eac8ead77c66844821d03->enter($__internal_e93a28a7df1b9c0d81a4accea691d31abc216b41bf2eac8ead77c66844821d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_e93a28a7df1b9c0d81a4accea691d31abc216b41bf2eac8ead77c66844821d03->leave($__internal_e93a28a7df1b9c0d81a4accea691d31abc216b41bf2eac8ead77c66844821d03_prof);

        
        $__internal_69f211ee500217effcf3f8c7791f7df8ac30a149b3a888935dcf3a5337960072->leave($__internal_69f211ee500217effcf3f8c7791f7df8ac30a149b3a888935dcf3a5337960072_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_b749b6f32308b86cd34bf40f7e7f7e30e79e812f3d48fd0383731a39c4dc424d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b749b6f32308b86cd34bf40f7e7f7e30e79e812f3d48fd0383731a39c4dc424d->enter($__internal_b749b6f32308b86cd34bf40f7e7f7e30e79e812f3d48fd0383731a39c4dc424d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_bcafc971de824a52894855826b2721a277770491977610bab8c62e8292b9b045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcafc971de824a52894855826b2721a277770491977610bab8c62e8292b9b045->enter($__internal_bcafc971de824a52894855826b2721a277770491977610bab8c62e8292b9b045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_bcafc971de824a52894855826b2721a277770491977610bab8c62e8292b9b045->leave($__internal_bcafc971de824a52894855826b2721a277770491977610bab8c62e8292b9b045_prof);

        
        $__internal_b749b6f32308b86cd34bf40f7e7f7e30e79e812f3d48fd0383731a39c4dc424d->leave($__internal_b749b6f32308b86cd34bf40f7e7f7e30e79e812f3d48fd0383731a39c4dc424d_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_6f6b944c33c7a2be6f3405c6aa414aae5dc465d2468f28de517859e411208f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f6b944c33c7a2be6f3405c6aa414aae5dc465d2468f28de517859e411208f83->enter($__internal_6f6b944c33c7a2be6f3405c6aa414aae5dc465d2468f28de517859e411208f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_e8f491145f89583891d93f78fec36ac648827f40477963aa1c37c37c2f57e9a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f491145f89583891d93f78fec36ac648827f40477963aa1c37c37c2f57e9a1->enter($__internal_e8f491145f89583891d93f78fec36ac648827f40477963aa1c37c37c2f57e9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_e8f491145f89583891d93f78fec36ac648827f40477963aa1c37c37c2f57e9a1->leave($__internal_e8f491145f89583891d93f78fec36ac648827f40477963aa1c37c37c2f57e9a1_prof);

        
        $__internal_6f6b944c33c7a2be6f3405c6aa414aae5dc465d2468f28de517859e411208f83->leave($__internal_6f6b944c33c7a2be6f3405c6aa414aae5dc465d2468f28de517859e411208f83_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_ae7e265f29986b6cbfd80dec78bcbccdae52c84a957e7a06c95f5354c441c8f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae7e265f29986b6cbfd80dec78bcbccdae52c84a957e7a06c95f5354c441c8f0->enter($__internal_ae7e265f29986b6cbfd80dec78bcbccdae52c84a957e7a06c95f5354c441c8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_6645a019c1b09acb147254ab45f73c46938fac65fc3c514084d9b0a7b1b7d643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6645a019c1b09acb147254ab45f73c46938fac65fc3c514084d9b0a7b1b7d643->enter($__internal_6645a019c1b09acb147254ab45f73c46938fac65fc3c514084d9b0a7b1b7d643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_6645a019c1b09acb147254ab45f73c46938fac65fc3c514084d9b0a7b1b7d643->leave($__internal_6645a019c1b09acb147254ab45f73c46938fac65fc3c514084d9b0a7b1b7d643_prof);

        
        $__internal_ae7e265f29986b6cbfd80dec78bcbccdae52c84a957e7a06c95f5354c441c8f0->leave($__internal_ae7e265f29986b6cbfd80dec78bcbccdae52c84a957e7a06c95f5354c441c8f0_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_baa850b9a9ce03bf82e752637c31aab21ae263a1076ce173efb2a3038b8e5ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baa850b9a9ce03bf82e752637c31aab21ae263a1076ce173efb2a3038b8e5ef2->enter($__internal_baa850b9a9ce03bf82e752637c31aab21ae263a1076ce173efb2a3038b8e5ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_bcde87cd64bee579c59df943acbab4131dadbf9bfb0a73c4125f93cabd90eb49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcde87cd64bee579c59df943acbab4131dadbf9bfb0a73c4125f93cabd90eb49->enter($__internal_bcde87cd64bee579c59df943acbab4131dadbf9bfb0a73c4125f93cabd90eb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_bcde87cd64bee579c59df943acbab4131dadbf9bfb0a73c4125f93cabd90eb49->leave($__internal_bcde87cd64bee579c59df943acbab4131dadbf9bfb0a73c4125f93cabd90eb49_prof);

        
        $__internal_baa850b9a9ce03bf82e752637c31aab21ae263a1076ce173efb2a3038b8e5ef2->leave($__internal_baa850b9a9ce03bf82e752637c31aab21ae263a1076ce173efb2a3038b8e5ef2_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_bc768a5f705b75d70635dba6525c5a7f63117c15959212e9729372ac5646a389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc768a5f705b75d70635dba6525c5a7f63117c15959212e9729372ac5646a389->enter($__internal_bc768a5f705b75d70635dba6525c5a7f63117c15959212e9729372ac5646a389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_497aa2e7a84d786460a27fa6578b7893ca794fdfab96553a285ddaea1c5b7ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497aa2e7a84d786460a27fa6578b7893ca794fdfab96553a285ddaea1c5b7ad8->enter($__internal_497aa2e7a84d786460a27fa6578b7893ca794fdfab96553a285ddaea1c5b7ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_497aa2e7a84d786460a27fa6578b7893ca794fdfab96553a285ddaea1c5b7ad8->leave($__internal_497aa2e7a84d786460a27fa6578b7893ca794fdfab96553a285ddaea1c5b7ad8_prof);

        
        $__internal_bc768a5f705b75d70635dba6525c5a7f63117c15959212e9729372ac5646a389->leave($__internal_bc768a5f705b75d70635dba6525c5a7f63117c15959212e9729372ac5646a389_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_db1e375e6820f0f421e02ea8bd3a97384577e4eec03f96aa560e9b8795c8ab77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db1e375e6820f0f421e02ea8bd3a97384577e4eec03f96aa560e9b8795c8ab77->enter($__internal_db1e375e6820f0f421e02ea8bd3a97384577e4eec03f96aa560e9b8795c8ab77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_06114c0f60188fb65b1ae7916acd6837356eb44d54b32399da38b7c5d9e53da5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06114c0f60188fb65b1ae7916acd6837356eb44d54b32399da38b7c5d9e53da5->enter($__internal_06114c0f60188fb65b1ae7916acd6837356eb44d54b32399da38b7c5d9e53da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_06114c0f60188fb65b1ae7916acd6837356eb44d54b32399da38b7c5d9e53da5->leave($__internal_06114c0f60188fb65b1ae7916acd6837356eb44d54b32399da38b7c5d9e53da5_prof);

        
        $__internal_db1e375e6820f0f421e02ea8bd3a97384577e4eec03f96aa560e9b8795c8ab77->leave($__internal_db1e375e6820f0f421e02ea8bd3a97384577e4eec03f96aa560e9b8795c8ab77_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_70aebf14e980aa9727bf316496e4334ea355eb3eb2f17ca528f98fe931b6022f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70aebf14e980aa9727bf316496e4334ea355eb3eb2f17ca528f98fe931b6022f->enter($__internal_70aebf14e980aa9727bf316496e4334ea355eb3eb2f17ca528f98fe931b6022f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_550efd2dc6df8e3113dfb6d5b5b33e928a77e03d3e820fdff730d2eb3789bce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_550efd2dc6df8e3113dfb6d5b5b33e928a77e03d3e820fdff730d2eb3789bce2->enter($__internal_550efd2dc6df8e3113dfb6d5b5b33e928a77e03d3e820fdff730d2eb3789bce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_550efd2dc6df8e3113dfb6d5b5b33e928a77e03d3e820fdff730d2eb3789bce2->leave($__internal_550efd2dc6df8e3113dfb6d5b5b33e928a77e03d3e820fdff730d2eb3789bce2_prof);

        
        $__internal_70aebf14e980aa9727bf316496e4334ea355eb3eb2f17ca528f98fe931b6022f->leave($__internal_70aebf14e980aa9727bf316496e4334ea355eb3eb2f17ca528f98fe931b6022f_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_61e9e0dca9e7034f0ecfe79d1d06758bef9b7dfa1901d88170a5d3cfa1d385d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e9e0dca9e7034f0ecfe79d1d06758bef9b7dfa1901d88170a5d3cfa1d385d2->enter($__internal_61e9e0dca9e7034f0ecfe79d1d06758bef9b7dfa1901d88170a5d3cfa1d385d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_4b74c9ed341b532ed33eeeef9a041c1a0c6cf7fb4dfd6f9649a9af6ec412d35d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b74c9ed341b532ed33eeeef9a041c1a0c6cf7fb4dfd6f9649a9af6ec412d35d->enter($__internal_4b74c9ed341b532ed33eeeef9a041c1a0c6cf7fb4dfd6f9649a9af6ec412d35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_4b74c9ed341b532ed33eeeef9a041c1a0c6cf7fb4dfd6f9649a9af6ec412d35d->leave($__internal_4b74c9ed341b532ed33eeeef9a041c1a0c6cf7fb4dfd6f9649a9af6ec412d35d_prof);

        
        $__internal_61e9e0dca9e7034f0ecfe79d1d06758bef9b7dfa1901d88170a5d3cfa1d385d2->leave($__internal_61e9e0dca9e7034f0ecfe79d1d06758bef9b7dfa1901d88170a5d3cfa1d385d2_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_802c3646e4370492e96c7fc67e73bd9b8d29d16f7a6eb1116f02135605ad1b09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_802c3646e4370492e96c7fc67e73bd9b8d29d16f7a6eb1116f02135605ad1b09->enter($__internal_802c3646e4370492e96c7fc67e73bd9b8d29d16f7a6eb1116f02135605ad1b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_6d3f280e2e7e2f947ca9adf08c44795b0fa971367202e445349b4e8a6864957f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d3f280e2e7e2f947ca9adf08c44795b0fa971367202e445349b4e8a6864957f->enter($__internal_6d3f280e2e7e2f947ca9adf08c44795b0fa971367202e445349b4e8a6864957f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6d3f280e2e7e2f947ca9adf08c44795b0fa971367202e445349b4e8a6864957f->leave($__internal_6d3f280e2e7e2f947ca9adf08c44795b0fa971367202e445349b4e8a6864957f_prof);

        
        $__internal_802c3646e4370492e96c7fc67e73bd9b8d29d16f7a6eb1116f02135605ad1b09->leave($__internal_802c3646e4370492e96c7fc67e73bd9b8d29d16f7a6eb1116f02135605ad1b09_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_301b83ba426f31d501f07e01e87e9868b283101ea96020a0d8a305950ea4a017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_301b83ba426f31d501f07e01e87e9868b283101ea96020a0d8a305950ea4a017->enter($__internal_301b83ba426f31d501f07e01e87e9868b283101ea96020a0d8a305950ea4a017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_82d3829cdc0328af9c3a768feb1d7a59e3e2ab91ee1007ec011facfbf29da37a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d3829cdc0328af9c3a768feb1d7a59e3e2ab91ee1007ec011facfbf29da37a->enter($__internal_82d3829cdc0328af9c3a768feb1d7a59e3e2ab91ee1007ec011facfbf29da37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_82d3829cdc0328af9c3a768feb1d7a59e3e2ab91ee1007ec011facfbf29da37a->leave($__internal_82d3829cdc0328af9c3a768feb1d7a59e3e2ab91ee1007ec011facfbf29da37a_prof);

        
        $__internal_301b83ba426f31d501f07e01e87e9868b283101ea96020a0d8a305950ea4a017->leave($__internal_301b83ba426f31d501f07e01e87e9868b283101ea96020a0d8a305950ea4a017_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_f6fb8a7b2a2942cc580da223d85384504aa001d2df5ddd02573ce1b17fc3bfab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6fb8a7b2a2942cc580da223d85384504aa001d2df5ddd02573ce1b17fc3bfab->enter($__internal_f6fb8a7b2a2942cc580da223d85384504aa001d2df5ddd02573ce1b17fc3bfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_7dc787b0e65a91075160996fe4a973ec71351aa4bebaf623f7644f1eada0f0ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc787b0e65a91075160996fe4a973ec71351aa4bebaf623f7644f1eada0f0ec->enter($__internal_7dc787b0e65a91075160996fe4a973ec71351aa4bebaf623f7644f1eada0f0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_7dc787b0e65a91075160996fe4a973ec71351aa4bebaf623f7644f1eada0f0ec->leave($__internal_7dc787b0e65a91075160996fe4a973ec71351aa4bebaf623f7644f1eada0f0ec_prof);

        
        $__internal_f6fb8a7b2a2942cc580da223d85384504aa001d2df5ddd02573ce1b17fc3bfab->leave($__internal_f6fb8a7b2a2942cc580da223d85384504aa001d2df5ddd02573ce1b17fc3bfab_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0da3eca79d833da3559e50dee2b14cbbd0583edbee46fc856625f59affa3573c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0da3eca79d833da3559e50dee2b14cbbd0583edbee46fc856625f59affa3573c->enter($__internal_0da3eca79d833da3559e50dee2b14cbbd0583edbee46fc856625f59affa3573c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b6a0a0bb4091c2fbb6f1f1d9723babc28d8148b0366b647050cd695be25f988d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a0a0bb4091c2fbb6f1f1d9723babc28d8148b0366b647050cd695be25f988d->enter($__internal_b6a0a0bb4091c2fbb6f1f1d9723babc28d8148b0366b647050cd695be25f988d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_b6a0a0bb4091c2fbb6f1f1d9723babc28d8148b0366b647050cd695be25f988d->leave($__internal_b6a0a0bb4091c2fbb6f1f1d9723babc28d8148b0366b647050cd695be25f988d_prof);

        
        $__internal_0da3eca79d833da3559e50dee2b14cbbd0583edbee46fc856625f59affa3573c->leave($__internal_0da3eca79d833da3559e50dee2b14cbbd0583edbee46fc856625f59affa3573c_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_afb924b0755d5a780536a6505cc3ac64055d77732138c6067b3d356c7dd3e082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afb924b0755d5a780536a6505cc3ac64055d77732138c6067b3d356c7dd3e082->enter($__internal_afb924b0755d5a780536a6505cc3ac64055d77732138c6067b3d356c7dd3e082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_2039922b20a6969ed1705f3bb59062e2263e33c7ba309d84959f3c020216f816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2039922b20a6969ed1705f3bb59062e2263e33c7ba309d84959f3c020216f816->enter($__internal_2039922b20a6969ed1705f3bb59062e2263e33c7ba309d84959f3c020216f816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2039922b20a6969ed1705f3bb59062e2263e33c7ba309d84959f3c020216f816->leave($__internal_2039922b20a6969ed1705f3bb59062e2263e33c7ba309d84959f3c020216f816_prof);

        
        $__internal_afb924b0755d5a780536a6505cc3ac64055d77732138c6067b3d356c7dd3e082->leave($__internal_afb924b0755d5a780536a6505cc3ac64055d77732138c6067b3d356c7dd3e082_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_357e805f25162988c796fe9d1f65142bb639a3ce4f75369512cd8304cc9c760e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357e805f25162988c796fe9d1f65142bb639a3ce4f75369512cd8304cc9c760e->enter($__internal_357e805f25162988c796fe9d1f65142bb639a3ce4f75369512cd8304cc9c760e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_b9d9960d955e06e49527ecd914ea03f7974d70c2dc7141663962e5a0499e89b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9d9960d955e06e49527ecd914ea03f7974d70c2dc7141663962e5a0499e89b9->enter($__internal_b9d9960d955e06e49527ecd914ea03f7974d70c2dc7141663962e5a0499e89b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b9d9960d955e06e49527ecd914ea03f7974d70c2dc7141663962e5a0499e89b9->leave($__internal_b9d9960d955e06e49527ecd914ea03f7974d70c2dc7141663962e5a0499e89b9_prof);

        
        $__internal_357e805f25162988c796fe9d1f65142bb639a3ce4f75369512cd8304cc9c760e->leave($__internal_357e805f25162988c796fe9d1f65142bb639a3ce4f75369512cd8304cc9c760e_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_3ac1c48d02d1a5a5fd2c3508234a0f83a7a7d3bbe87d3a752b3984dceb008af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ac1c48d02d1a5a5fd2c3508234a0f83a7a7d3bbe87d3a752b3984dceb008af0->enter($__internal_3ac1c48d02d1a5a5fd2c3508234a0f83a7a7d3bbe87d3a752b3984dceb008af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_edbbef0b2cef26a65fa09637a62322c3567e7d81263359bbaccdeec15f80be15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edbbef0b2cef26a65fa09637a62322c3567e7d81263359bbaccdeec15f80be15->enter($__internal_edbbef0b2cef26a65fa09637a62322c3567e7d81263359bbaccdeec15f80be15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_edbbef0b2cef26a65fa09637a62322c3567e7d81263359bbaccdeec15f80be15->leave($__internal_edbbef0b2cef26a65fa09637a62322c3567e7d81263359bbaccdeec15f80be15_prof);

        
        $__internal_3ac1c48d02d1a5a5fd2c3508234a0f83a7a7d3bbe87d3a752b3984dceb008af0->leave($__internal_3ac1c48d02d1a5a5fd2c3508234a0f83a7a7d3bbe87d3a752b3984dceb008af0_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_3cd1cc594038ab67cd2a4b4da863d4c8a6ad51234fc3e635026ac24d73d22ebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cd1cc594038ab67cd2a4b4da863d4c8a6ad51234fc3e635026ac24d73d22ebd->enter($__internal_3cd1cc594038ab67cd2a4b4da863d4c8a6ad51234fc3e635026ac24d73d22ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_588a9d84f670d711ebdf93f1197573e423f22faee9ca4a82ce3830946ab154ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588a9d84f670d711ebdf93f1197573e423f22faee9ca4a82ce3830946ab154ae->enter($__internal_588a9d84f670d711ebdf93f1197573e423f22faee9ca4a82ce3830946ab154ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_588a9d84f670d711ebdf93f1197573e423f22faee9ca4a82ce3830946ab154ae->leave($__internal_588a9d84f670d711ebdf93f1197573e423f22faee9ca4a82ce3830946ab154ae_prof);

        
        $__internal_3cd1cc594038ab67cd2a4b4da863d4c8a6ad51234fc3e635026ac24d73d22ebd->leave($__internal_3cd1cc594038ab67cd2a4b4da863d4c8a6ad51234fc3e635026ac24d73d22ebd_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_636d6ad3a80f12180b44dc60a38b4fac9ded7604daf19817dffeafdfb7058adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_636d6ad3a80f12180b44dc60a38b4fac9ded7604daf19817dffeafdfb7058adc->enter($__internal_636d6ad3a80f12180b44dc60a38b4fac9ded7604daf19817dffeafdfb7058adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_55cc1826d950acfa8e9edf20465ca1605d3082c66347d56a4671dd2300bdc8dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55cc1826d950acfa8e9edf20465ca1605d3082c66347d56a4671dd2300bdc8dd->enter($__internal_55cc1826d950acfa8e9edf20465ca1605d3082c66347d56a4671dd2300bdc8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_55cc1826d950acfa8e9edf20465ca1605d3082c66347d56a4671dd2300bdc8dd->leave($__internal_55cc1826d950acfa8e9edf20465ca1605d3082c66347d56a4671dd2300bdc8dd_prof);

        
        $__internal_636d6ad3a80f12180b44dc60a38b4fac9ded7604daf19817dffeafdfb7058adc->leave($__internal_636d6ad3a80f12180b44dc60a38b4fac9ded7604daf19817dffeafdfb7058adc_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_429c562c867b26e937e30cc112e4ec7d7000fc14e5193e1f3462114ea58bbf3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_429c562c867b26e937e30cc112e4ec7d7000fc14e5193e1f3462114ea58bbf3c->enter($__internal_429c562c867b26e937e30cc112e4ec7d7000fc14e5193e1f3462114ea58bbf3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_13e11eaa900aedd7b6b7a18104648e620469f26115168ee790625fbb61c687f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e11eaa900aedd7b6b7a18104648e620469f26115168ee790625fbb61c687f2->enter($__internal_13e11eaa900aedd7b6b7a18104648e620469f26115168ee790625fbb61c687f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_13e11eaa900aedd7b6b7a18104648e620469f26115168ee790625fbb61c687f2->leave($__internal_13e11eaa900aedd7b6b7a18104648e620469f26115168ee790625fbb61c687f2_prof);

        
        $__internal_429c562c867b26e937e30cc112e4ec7d7000fc14e5193e1f3462114ea58bbf3c->leave($__internal_429c562c867b26e937e30cc112e4ec7d7000fc14e5193e1f3462114ea58bbf3c_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_e97b8e5a0074f61d7e23602b0231b4c879f75e2b583445f37ea8bbe774c17529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e97b8e5a0074f61d7e23602b0231b4c879f75e2b583445f37ea8bbe774c17529->enter($__internal_e97b8e5a0074f61d7e23602b0231b4c879f75e2b583445f37ea8bbe774c17529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_ec41726dc62b363113d4fb5400f4bd7f77de3786e9611db354a99a3e503c867d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec41726dc62b363113d4fb5400f4bd7f77de3786e9611db354a99a3e503c867d->enter($__internal_ec41726dc62b363113d4fb5400f4bd7f77de3786e9611db354a99a3e503c867d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_ec41726dc62b363113d4fb5400f4bd7f77de3786e9611db354a99a3e503c867d->leave($__internal_ec41726dc62b363113d4fb5400f4bd7f77de3786e9611db354a99a3e503c867d_prof);

        
        $__internal_e97b8e5a0074f61d7e23602b0231b4c879f75e2b583445f37ea8bbe774c17529->leave($__internal_e97b8e5a0074f61d7e23602b0231b4c879f75e2b583445f37ea8bbe774c17529_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
