<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_14f0792d3efd1ee3a8af53063c8bd4447fb6c566634c413fe93e02d87b1f4fbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
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
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fa1fab2070092981bfb3b5d635df781b0123e20c01f394b494b8198e3336a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa1fab2070092981bfb3b5d635df781b0123e20c01f394b494b8198e3336a76->enter($__internal_1fa1fab2070092981bfb3b5d635df781b0123e20c01f394b494b8198e3336a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_b190dfc200e3e203e06444788fd271a61db249c0b1823a320896db6bd58a13e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b190dfc200e3e203e06444788fd271a61db249c0b1823a320896db6bd58a13e5->enter($__internal_b190dfc200e3e203e06444788fd271a61db249c0b1823a320896db6bd58a13e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 95
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 133
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 179
        echo "
";
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('form_label', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('choice_label', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('radio_label', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 229
        echo "
";
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('form_row', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('button_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('choice_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('date_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('time_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('radio_row', $context, $blocks);
        // line 279
        echo "
";
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_1fa1fab2070092981bfb3b5d635df781b0123e20c01f394b494b8198e3336a76->leave($__internal_1fa1fab2070092981bfb3b5d635df781b0123e20c01f394b494b8198e3336a76_prof);

        
        $__internal_b190dfc200e3e203e06444788fd271a61db249c0b1823a320896db6bd58a13e5->leave($__internal_b190dfc200e3e203e06444788fd271a61db249c0b1823a320896db6bd58a13e5_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_544709ec1afa6db490239474a6e6c4d0cc968961e29882bb1d9c66d177c1e451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544709ec1afa6db490239474a6e6c4d0cc968961e29882bb1d9c66d177c1e451->enter($__internal_544709ec1afa6db490239474a6e6c4d0cc968961e29882bb1d9c66d177c1e451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_e1f052ed612f30570ccaba8b886970b2d2c550d5ef0b156d7d345fce77a91afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f052ed612f30570ccaba8b886970b2d2c550d5ef0b156d7d345fce77a91afc->enter($__internal_e1f052ed612f30570ccaba8b886970b2d2c550d5ef0b156d7d345fce77a91afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e1f052ed612f30570ccaba8b886970b2d2c550d5ef0b156d7d345fce77a91afc->leave($__internal_e1f052ed612f30570ccaba8b886970b2d2c550d5ef0b156d7d345fce77a91afc_prof);

        
        $__internal_544709ec1afa6db490239474a6e6c4d0cc968961e29882bb1d9c66d177c1e451->leave($__internal_544709ec1afa6db490239474a6e6c4d0cc968961e29882bb1d9c66d177c1e451_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c5af4b4327ed6ad331fc57e3cc6a36484a713de16bca24580004c2e6cae9f53f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5af4b4327ed6ad331fc57e3cc6a36484a713de16bca24580004c2e6cae9f53f->enter($__internal_c5af4b4327ed6ad331fc57e3cc6a36484a713de16bca24580004c2e6cae9f53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_aef9163ce6cb94b2af52dd8c444ceaeafe6ceacd32170ae73abf3bc6b5b98456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef9163ce6cb94b2af52dd8c444ceaeafe6ceacd32170ae73abf3bc6b5b98456->enter($__internal_aef9163ce6cb94b2af52dd8c444ceaeafe6ceacd32170ae73abf3bc6b5b98456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_aef9163ce6cb94b2af52dd8c444ceaeafe6ceacd32170ae73abf3bc6b5b98456->leave($__internal_aef9163ce6cb94b2af52dd8c444ceaeafe6ceacd32170ae73abf3bc6b5b98456_prof);

        
        $__internal_c5af4b4327ed6ad331fc57e3cc6a36484a713de16bca24580004c2e6cae9f53f->leave($__internal_c5af4b4327ed6ad331fc57e3cc6a36484a713de16bca24580004c2e6cae9f53f_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_9a405f4bad576f0a501c3b3c0875a5793def677428c01075c0f7b7f464c7d7ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a405f4bad576f0a501c3b3c0875a5793def677428c01075c0f7b7f464c7d7ab->enter($__internal_9a405f4bad576f0a501c3b3c0875a5793def677428c01075c0f7b7f464c7d7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_bd3c79a94490cde3e7bb3d6d91d746724e8fd4afb863fee5637015a494af7a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3c79a94490cde3e7bb3d6d91d746724e8fd4afb863fee5637015a494af7a71->enter($__internal_bd3c79a94490cde3e7bb3d6d91d746724e8fd4afb863fee5637015a494af7a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_bd3c79a94490cde3e7bb3d6d91d746724e8fd4afb863fee5637015a494af7a71->leave($__internal_bd3c79a94490cde3e7bb3d6d91d746724e8fd4afb863fee5637015a494af7a71_prof);

        
        $__internal_9a405f4bad576f0a501c3b3c0875a5793def677428c01075c0f7b7f464c7d7ab->leave($__internal_9a405f4bad576f0a501c3b3c0875a5793def677428c01075c0f7b7f464c7d7ab_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_60590b1d937e7e65b914c31af66508c96a67444c00b73839d896a0defee67670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60590b1d937e7e65b914c31af66508c96a67444c00b73839d896a0defee67670->enter($__internal_60590b1d937e7e65b914c31af66508c96a67444c00b73839d896a0defee67670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_1444db906ef7b2fa2d581a0629dd7931f72466502eb1526f954771832cb371ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1444db906ef7b2fa2d581a0629dd7931f72466502eb1526f954771832cb371ed->enter($__internal_1444db906ef7b2fa2d581a0629dd7931f72466502eb1526f954771832cb371ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_184aabe4049ade27fe9c3b3c1c6b2f71d441b78049f6199019eb3bcef7fe260d = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_fd955ecc261e700d6bc625cecaf8dbbe7674ba3a925e3ed4f433f24d8d07f4bf = "{{") && ('' === $__internal_fd955ecc261e700d6bc625cecaf8dbbe7674ba3a925e3ed4f433f24d8d07f4bf || 0 === strpos($__internal_184aabe4049ade27fe9c3b3c1c6b2f71d441b78049f6199019eb3bcef7fe260d, $__internal_fd955ecc261e700d6bc625cecaf8dbbe7674ba3a925e3ed4f433f24d8d07f4bf)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_f9df1aca457253ac667054c0d12a0132226f84199270ee042963c2830a0ffa16 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_b1e6317f4a3b4964959cd26fef17c7e2b8c58bd07e7c0012b0e3ee4b14e65d75 = "}}") && ('' === $__internal_b1e6317f4a3b4964959cd26fef17c7e2b8c58bd07e7c0012b0e3ee4b14e65d75 || $__internal_b1e6317f4a3b4964959cd26fef17c7e2b8c58bd07e7c0012b0e3ee4b14e65d75 === substr($__internal_f9df1aca457253ac667054c0d12a0132226f84199270ee042963c2830a0ffa16, -strlen($__internal_b1e6317f4a3b4964959cd26fef17c7e2b8c58bd07e7c0012b0e3ee4b14e65d75))));
        // line 25
        echo "    ";
        if ((($context["prepend"] ?? $this->getContext($context, "prepend")) || ($context["append"] ?? $this->getContext($context, "append")))) {
            // line 26
            echo "        <div class=\"input-group\">
            ";
            // line 27
            if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
                // line 28
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 30
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 31
            if (($context["append"] ?? $this->getContext($context, "append"))) {
                // line 32
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 34
            echo "        </div>
    ";
        } else {
            // line 36
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_1444db906ef7b2fa2d581a0629dd7931f72466502eb1526f954771832cb371ed->leave($__internal_1444db906ef7b2fa2d581a0629dd7931f72466502eb1526f954771832cb371ed_prof);

        
        $__internal_60590b1d937e7e65b914c31af66508c96a67444c00b73839d896a0defee67670->leave($__internal_60590b1d937e7e65b914c31af66508c96a67444c00b73839d896a0defee67670_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_76898b15a2b835f0829158f6b9677474d7c50a324060ab33062c78b53c2a92c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76898b15a2b835f0829158f6b9677474d7c50a324060ab33062c78b53c2a92c4->enter($__internal_76898b15a2b835f0829158f6b9677474d7c50a324060ab33062c78b53c2a92c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_3a5337a688969abf93af4ab2579e8ca9d303a5f240602a698fe29e1262e2170d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a5337a688969abf93af4ab2579e8ca9d303a5f240602a698fe29e1262e2170d->enter($__internal_3a5337a688969abf93af4ab2579e8ca9d303a5f240602a698fe29e1262e2170d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_3a5337a688969abf93af4ab2579e8ca9d303a5f240602a698fe29e1262e2170d->leave($__internal_3a5337a688969abf93af4ab2579e8ca9d303a5f240602a698fe29e1262e2170d_prof);

        
        $__internal_76898b15a2b835f0829158f6b9677474d7c50a324060ab33062c78b53c2a92c4->leave($__internal_76898b15a2b835f0829158f6b9677474d7c50a324060ab33062c78b53c2a92c4_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_3ecccb1c9c26f9e516430ec46858b43fe523f44a70a25965ce84e36750b41ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ecccb1c9c26f9e516430ec46858b43fe523f44a70a25965ce84e36750b41ea7->enter($__internal_3ecccb1c9c26f9e516430ec46858b43fe523f44a70a25965ce84e36750b41ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_33eaa82f4d061487433a0c282ec39e310fc20dcdb3627f00ba68c7f459aa1714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33eaa82f4d061487433a0c282ec39e310fc20dcdb3627f00ba68c7f459aa1714->enter($__internal_33eaa82f4d061487433a0c282ec39e310fc20dcdb3627f00ba68c7f459aa1714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 48
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 51
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 52
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 57
            echo "</div>";
        }
        
        $__internal_33eaa82f4d061487433a0c282ec39e310fc20dcdb3627f00ba68c7f459aa1714->leave($__internal_33eaa82f4d061487433a0c282ec39e310fc20dcdb3627f00ba68c7f459aa1714_prof);

        
        $__internal_3ecccb1c9c26f9e516430ec46858b43fe523f44a70a25965ce84e36750b41ea7->leave($__internal_3ecccb1c9c26f9e516430ec46858b43fe523f44a70a25965ce84e36750b41ea7_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_a9f4fe086125e586aacb1a1c724ccb6521e327139ac44416d7bae6aaae0589f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f4fe086125e586aacb1a1c724ccb6521e327139ac44416d7bae6aaae0589f4->enter($__internal_a9f4fe086125e586aacb1a1c724ccb6521e327139ac44416d7bae6aaae0589f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_5f424207f3ac4cd93fd183a9f8d35124d286936268f8733a24bf418cecfb43b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f424207f3ac4cd93fd183a9f8d35124d286936268f8733a24bf418cecfb43b5->enter($__internal_5f424207f3ac4cd93fd183a9f8d35124d286936268f8733a24bf418cecfb43b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 62
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 66
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 67
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 69
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 70
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 71
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 72
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 74
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 75
                echo "</div>";
            }
        }
        
        $__internal_5f424207f3ac4cd93fd183a9f8d35124d286936268f8733a24bf418cecfb43b5->leave($__internal_5f424207f3ac4cd93fd183a9f8d35124d286936268f8733a24bf418cecfb43b5_prof);

        
        $__internal_a9f4fe086125e586aacb1a1c724ccb6521e327139ac44416d7bae6aaae0589f4->leave($__internal_a9f4fe086125e586aacb1a1c724ccb6521e327139ac44416d7bae6aaae0589f4_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_14a4035359db0c530f9fa239fe4dda878ed939780927f9fcd71b8c5ecad810b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14a4035359db0c530f9fa239fe4dda878ed939780927f9fcd71b8c5ecad810b0->enter($__internal_14a4035359db0c530f9fa239fe4dda878ed939780927f9fcd71b8c5ecad810b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_abd3ecd97806dc73d50cd7372f685a50c7cce79833e7ab367bc49797da32fff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abd3ecd97806dc73d50cd7372f685a50c7cce79833e7ab367bc49797da32fff0->enter($__internal_abd3ecd97806dc73d50cd7372f685a50c7cce79833e7ab367bc49797da32fff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 82
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 84
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 85
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 86
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 89
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 90
                echo "</div>";
            }
        }
        
        $__internal_abd3ecd97806dc73d50cd7372f685a50c7cce79833e7ab367bc49797da32fff0->leave($__internal_abd3ecd97806dc73d50cd7372f685a50c7cce79833e7ab367bc49797da32fff0_prof);

        
        $__internal_14a4035359db0c530f9fa239fe4dda878ed939780927f9fcd71b8c5ecad810b0->leave($__internal_14a4035359db0c530f9fa239fe4dda878ed939780927f9fcd71b8c5ecad810b0_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_3c4e35299c526498329ca1e9ece14f9ca41b536b02ccb7d3c91b49ee5c2c6f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c4e35299c526498329ca1e9ece14f9ca41b536b02ccb7d3c91b49ee5c2c6f7e->enter($__internal_3c4e35299c526498329ca1e9ece14f9ca41b536b02ccb7d3c91b49ee5c2c6f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_6fcb1050ad193d6dc7b659e957cb1bf859501815f65a54e01f1992a0b1860ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fcb1050ad193d6dc7b659e957cb1bf859501815f65a54e01f1992a0b1860ef7->enter($__internal_6fcb1050ad193d6dc7b659e957cb1bf859501815f65a54e01f1992a0b1860ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 96
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 102
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 103
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 106
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 108
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 109
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 110
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 111
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 112
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 113
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 117
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 119
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 120
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 121
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 122
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 123
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 124
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 128
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 129
            echo "</div>";
        }
        
        $__internal_6fcb1050ad193d6dc7b659e957cb1bf859501815f65a54e01f1992a0b1860ef7->leave($__internal_6fcb1050ad193d6dc7b659e957cb1bf859501815f65a54e01f1992a0b1860ef7_prof);

        
        $__internal_3c4e35299c526498329ca1e9ece14f9ca41b536b02ccb7d3c91b49ee5c2c6f7e->leave($__internal_3c4e35299c526498329ca1e9ece14f9ca41b536b02ccb7d3c91b49ee5c2c6f7e_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_16ec121f112b43b731c405076026cee86ea1a9b130dc9716b2e0704bec601840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16ec121f112b43b731c405076026cee86ea1a9b130dc9716b2e0704bec601840->enter($__internal_16ec121f112b43b731c405076026cee86ea1a9b130dc9716b2e0704bec601840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_9ac89e5a3b139976282aa680eb8c8bca582dbc64e0aa50efac658c4d6fa4fdf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac89e5a3b139976282aa680eb8c8bca582dbc64e0aa50efac658c4d6fa4fdf7->enter($__internal_9ac89e5a3b139976282aa680eb8c8bca582dbc64e0aa50efac658c4d6fa4fdf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_9ac89e5a3b139976282aa680eb8c8bca582dbc64e0aa50efac658c4d6fa4fdf7->leave($__internal_9ac89e5a3b139976282aa680eb8c8bca582dbc64e0aa50efac658c4d6fa4fdf7_prof);

        
        $__internal_16ec121f112b43b731c405076026cee86ea1a9b130dc9716b2e0704bec601840->leave($__internal_16ec121f112b43b731c405076026cee86ea1a9b130dc9716b2e0704bec601840_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_d8b2384cfb93af94c33831c0d0ce688a2b5e0869939ce48451779ae8171da5e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8b2384cfb93af94c33831c0d0ce688a2b5e0869939ce48451779ae8171da5e3->enter($__internal_d8b2384cfb93af94c33831c0d0ce688a2b5e0869939ce48451779ae8171da5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_f56dd81fb58425861eb988c0d7c397b8acd5ee567d122f8548fc9ca686df9f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56dd81fb58425861eb988c0d7c397b8acd5ee567d122f8548fc9ca686df9f59->enter($__internal_f56dd81fb58425861eb988c0d7c397b8acd5ee567d122f8548fc9ca686df9f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 139
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 141
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 142
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 143
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 147
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 150
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 151
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "</div>";
        }
        
        $__internal_f56dd81fb58425861eb988c0d7c397b8acd5ee567d122f8548fc9ca686df9f59->leave($__internal_f56dd81fb58425861eb988c0d7c397b8acd5ee567d122f8548fc9ca686df9f59_prof);

        
        $__internal_d8b2384cfb93af94c33831c0d0ce688a2b5e0869939ce48451779ae8171da5e3->leave($__internal_d8b2384cfb93af94c33831c0d0ce688a2b5e0869939ce48451779ae8171da5e3_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_bdfd94394e6ec7504a26ecc582b588a9528ee8a055160e7c8733c3e49b987ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdfd94394e6ec7504a26ecc582b588a9528ee8a055160e7c8733c3e49b987ec4->enter($__internal_bdfd94394e6ec7504a26ecc582b588a9528ee8a055160e7c8733c3e49b987ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_b3863c749a051917dd356fdbab21ec56f9e0cbdc01e882c02bf72220a9a408fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3863c749a051917dd356fdbab21ec56f9e0cbdc01e882c02bf72220a9a408fd->enter($__internal_b3863c749a051917dd356fdbab21ec56f9e0cbdc01e882c02bf72220a9a408fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 159
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 160
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 161
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 163
            echo "<div class=\"checkbox\">";
            // line 164
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 165
            echo "</div>";
        }
        
        $__internal_b3863c749a051917dd356fdbab21ec56f9e0cbdc01e882c02bf72220a9a408fd->leave($__internal_b3863c749a051917dd356fdbab21ec56f9e0cbdc01e882c02bf72220a9a408fd_prof);

        
        $__internal_bdfd94394e6ec7504a26ecc582b588a9528ee8a055160e7c8733c3e49b987ec4->leave($__internal_bdfd94394e6ec7504a26ecc582b588a9528ee8a055160e7c8733c3e49b987ec4_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_10412bffd7d8618f06e427ad3a353b013cd110c5622d4e3c4eb27ee94c7fdc49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10412bffd7d8618f06e427ad3a353b013cd110c5622d4e3c4eb27ee94c7fdc49->enter($__internal_10412bffd7d8618f06e427ad3a353b013cd110c5622d4e3c4eb27ee94c7fdc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_b6f0459d60126130818c7814f814084ccc50f5c81e4e397c00cc8acce8c16966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6f0459d60126130818c7814f814084ccc50f5c81e4e397c00cc8acce8c16966->enter($__internal_b6f0459d60126130818c7814f814084ccc50f5c81e4e397c00cc8acce8c16966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 170
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 171
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 172
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 174
            echo "<div class=\"radio\">";
            // line 175
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 176
            echo "</div>";
        }
        
        $__internal_b6f0459d60126130818c7814f814084ccc50f5c81e4e397c00cc8acce8c16966->leave($__internal_b6f0459d60126130818c7814f814084ccc50f5c81e4e397c00cc8acce8c16966_prof);

        
        $__internal_10412bffd7d8618f06e427ad3a353b013cd110c5622d4e3c4eb27ee94c7fdc49->leave($__internal_10412bffd7d8618f06e427ad3a353b013cd110c5622d4e3c4eb27ee94c7fdc49_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_06235335de1bab6565f6b4d08c366a7cc58167f5f865f398a6af3ca4d6e4c250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06235335de1bab6565f6b4d08c366a7cc58167f5f865f398a6af3ca4d6e4c250->enter($__internal_06235335de1bab6565f6b4d08c366a7cc58167f5f865f398a6af3ca4d6e4c250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_f659f93aaf1c6a7a44cc75f4237105edfc9b307cf38f076a272e149edb3089fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f659f93aaf1c6a7a44cc75f4237105edfc9b307cf38f076a272e149edb3089fe->enter($__internal_f659f93aaf1c6a7a44cc75f4237105edfc9b307cf38f076a272e149edb3089fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_f659f93aaf1c6a7a44cc75f4237105edfc9b307cf38f076a272e149edb3089fe->leave($__internal_f659f93aaf1c6a7a44cc75f4237105edfc9b307cf38f076a272e149edb3089fe_prof);

        
        $__internal_06235335de1bab6565f6b4d08c366a7cc58167f5f865f398a6af3ca4d6e4c250->leave($__internal_06235335de1bab6565f6b4d08c366a7cc58167f5f865f398a6af3ca4d6e4c250_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_5d7c584f8e931b771de55ee3d1a0cc6c1406137aa02a9c426b36102a6459e593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d7c584f8e931b771de55ee3d1a0cc6c1406137aa02a9c426b36102a6459e593->enter($__internal_5d7c584f8e931b771de55ee3d1a0cc6c1406137aa02a9c426b36102a6459e593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_c90e2b6b57ba042597346b17303f891b6bcc1d1e297486428a9b65ef6d5a0c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c90e2b6b57ba042597346b17303f891b6bcc1d1e297486428a9b65ef6d5a0c17->enter($__internal_c90e2b6b57ba042597346b17303f891b6bcc1d1e297486428a9b65ef6d5a0c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_c90e2b6b57ba042597346b17303f891b6bcc1d1e297486428a9b65ef6d5a0c17->leave($__internal_c90e2b6b57ba042597346b17303f891b6bcc1d1e297486428a9b65ef6d5a0c17_prof);

        
        $__internal_5d7c584f8e931b771de55ee3d1a0cc6c1406137aa02a9c426b36102a6459e593->leave($__internal_5d7c584f8e931b771de55ee3d1a0cc6c1406137aa02a9c426b36102a6459e593_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_0651becdf5584a29ba27fb429d34754995a375a4fd774bf3539b662e371f5e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0651becdf5584a29ba27fb429d34754995a375a4fd774bf3539b662e371f5e00->enter($__internal_0651becdf5584a29ba27fb429d34754995a375a4fd774bf3539b662e371f5e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_70fa8f0b0ceadadd964e90b19dc6bf2ca4f614065f44fa8306e666888c43d87d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70fa8f0b0ceadadd964e90b19dc6bf2ca4f614065f44fa8306e666888c43d87d->enter($__internal_70fa8f0b0ceadadd964e90b19dc6bf2ca4f614065f44fa8306e666888c43d87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_70fa8f0b0ceadadd964e90b19dc6bf2ca4f614065f44fa8306e666888c43d87d->leave($__internal_70fa8f0b0ceadadd964e90b19dc6bf2ca4f614065f44fa8306e666888c43d87d_prof);

        
        $__internal_0651becdf5584a29ba27fb429d34754995a375a4fd774bf3539b662e371f5e00->leave($__internal_0651becdf5584a29ba27fb429d34754995a375a4fd774bf3539b662e371f5e00_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_8a67128d01fcb170dd0c56a4e521d8ac65ae3553d53ade3daeba7308706dfc04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a67128d01fcb170dd0c56a4e521d8ac65ae3553d53ade3daeba7308706dfc04->enter($__internal_8a67128d01fcb170dd0c56a4e521d8ac65ae3553d53ade3daeba7308706dfc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_6bbb0493f8891cc63b8a5906af38ef63584f3cee2350d2965dc9411722c5b428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bbb0493f8891cc63b8a5906af38ef63584f3cee2350d2965dc9411722c5b428->enter($__internal_6bbb0493f8891cc63b8a5906af38ef63584f3cee2350d2965dc9411722c5b428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6bbb0493f8891cc63b8a5906af38ef63584f3cee2350d2965dc9411722c5b428->leave($__internal_6bbb0493f8891cc63b8a5906af38ef63584f3cee2350d2965dc9411722c5b428_prof);

        
        $__internal_8a67128d01fcb170dd0c56a4e521d8ac65ae3553d53ade3daeba7308706dfc04->leave($__internal_8a67128d01fcb170dd0c56a4e521d8ac65ae3553d53ade3daeba7308706dfc04_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_361a34db7b4fd7e341c57d138dfc30cd9d5c9c5b79a060982fd9ccb7103f2fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_361a34db7b4fd7e341c57d138dfc30cd9d5c9c5b79a060982fd9ccb7103f2fed->enter($__internal_361a34db7b4fd7e341c57d138dfc30cd9d5c9c5b79a060982fd9ccb7103f2fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_98a4a1ef39c91e9c974b7c3dda4f1262dbbbca93b2756b55314af330bfea784b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a4a1ef39c91e9c974b7c3dda4f1262dbbbca93b2756b55314af330bfea784b->enter($__internal_98a4a1ef39c91e9c974b7c3dda4f1262dbbbca93b2756b55314af330bfea784b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 206
        echo "    ";
        // line 207
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 208
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 209
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 210
                echo "        ";
            }
            // line 211
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 212
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 213
                echo "        ";
            }
            // line 214
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 215
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 216
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 217
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 218
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 221
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 224
            echo "        <label";
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
            echo ">";
            // line 225
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 226
            echo "</label>
    ";
        }
        
        $__internal_98a4a1ef39c91e9c974b7c3dda4f1262dbbbca93b2756b55314af330bfea784b->leave($__internal_98a4a1ef39c91e9c974b7c3dda4f1262dbbbca93b2756b55314af330bfea784b_prof);

        
        $__internal_361a34db7b4fd7e341c57d138dfc30cd9d5c9c5b79a060982fd9ccb7103f2fed->leave($__internal_361a34db7b4fd7e341c57d138dfc30cd9d5c9c5b79a060982fd9ccb7103f2fed_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f5e6aecad584ce03ac9bc187f6703f4aecc16b1edbd70998164516a9c65c3bbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5e6aecad584ce03ac9bc187f6703f4aecc16b1edbd70998164516a9c65c3bbc->enter($__internal_f5e6aecad584ce03ac9bc187f6703f4aecc16b1edbd70998164516a9c65c3bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e5e70771315b9a8b58017e16eda45ebac025b562e89b9687e1101991f29b950b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e70771315b9a8b58017e16eda45ebac025b562e89b9687e1101991f29b950b->enter($__internal_e5e70771315b9a8b58017e16eda45ebac025b562e89b9687e1101991f29b950b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 233
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 236
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 237
        echo "</div>";
        
        $__internal_e5e70771315b9a8b58017e16eda45ebac025b562e89b9687e1101991f29b950b->leave($__internal_e5e70771315b9a8b58017e16eda45ebac025b562e89b9687e1101991f29b950b_prof);

        
        $__internal_f5e6aecad584ce03ac9bc187f6703f4aecc16b1edbd70998164516a9c65c3bbc->leave($__internal_f5e6aecad584ce03ac9bc187f6703f4aecc16b1edbd70998164516a9c65c3bbc_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_30fe2c80497f2b4c4711d666e801c7b7da4563dca024379096404e0c43327536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30fe2c80497f2b4c4711d666e801c7b7da4563dca024379096404e0c43327536->enter($__internal_30fe2c80497f2b4c4711d666e801c7b7da4563dca024379096404e0c43327536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_798067ceab9217907a20b09bc936fa69a303801f8070a33cd7c65ecc767ff7cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_798067ceab9217907a20b09bc936fa69a303801f8070a33cd7c65ecc767ff7cf->enter($__internal_798067ceab9217907a20b09bc936fa69a303801f8070a33cd7c65ecc767ff7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_798067ceab9217907a20b09bc936fa69a303801f8070a33cd7c65ecc767ff7cf->leave($__internal_798067ceab9217907a20b09bc936fa69a303801f8070a33cd7c65ecc767ff7cf_prof);

        
        $__internal_30fe2c80497f2b4c4711d666e801c7b7da4563dca024379096404e0c43327536->leave($__internal_30fe2c80497f2b4c4711d666e801c7b7da4563dca024379096404e0c43327536_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_83123fe3521f9493a7fbcbe8b290f9adfdb77f3ae89a5ad6db7236bbfb4cae9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83123fe3521f9493a7fbcbe8b290f9adfdb77f3ae89a5ad6db7236bbfb4cae9a->enter($__internal_83123fe3521f9493a7fbcbe8b290f9adfdb77f3ae89a5ad6db7236bbfb4cae9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_cec008c875187c1f6163b10da3bdc4ffe1e4a4dc337fd8bbffdacd677177d1e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec008c875187c1f6163b10da3bdc4ffe1e4a4dc337fd8bbffdacd677177d1e7->enter($__internal_cec008c875187c1f6163b10da3bdc4ffe1e4a4dc337fd8bbffdacd677177d1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_cec008c875187c1f6163b10da3bdc4ffe1e4a4dc337fd8bbffdacd677177d1e7->leave($__internal_cec008c875187c1f6163b10da3bdc4ffe1e4a4dc337fd8bbffdacd677177d1e7_prof);

        
        $__internal_83123fe3521f9493a7fbcbe8b290f9adfdb77f3ae89a5ad6db7236bbfb4cae9a->leave($__internal_83123fe3521f9493a7fbcbe8b290f9adfdb77f3ae89a5ad6db7236bbfb4cae9a_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_9cbfc66a0e910d9ddecf062dd93729c629f593b66310366fce2f6b6af9d325f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cbfc66a0e910d9ddecf062dd93729c629f593b66310366fce2f6b6af9d325f2->enter($__internal_9cbfc66a0e910d9ddecf062dd93729c629f593b66310366fce2f6b6af9d325f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_9552d952e2dfb910db1cdc7bd05700d6a5f9773b700772bbf6b0ac0ab17f9399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9552d952e2dfb910db1cdc7bd05700d6a5f9773b700772bbf6b0ac0ab17f9399->enter($__internal_9552d952e2dfb910db1cdc7bd05700d6a5f9773b700772bbf6b0ac0ab17f9399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9552d952e2dfb910db1cdc7bd05700d6a5f9773b700772bbf6b0ac0ab17f9399->leave($__internal_9552d952e2dfb910db1cdc7bd05700d6a5f9773b700772bbf6b0ac0ab17f9399_prof);

        
        $__internal_9cbfc66a0e910d9ddecf062dd93729c629f593b66310366fce2f6b6af9d325f2->leave($__internal_9cbfc66a0e910d9ddecf062dd93729c629f593b66310366fce2f6b6af9d325f2_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_d08bb8427e4e12fc428e0b05bd0deb51c844400ed4ca9c7462ff7209ff21e80d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08bb8427e4e12fc428e0b05bd0deb51c844400ed4ca9c7462ff7209ff21e80d->enter($__internal_d08bb8427e4e12fc428e0b05bd0deb51c844400ed4ca9c7462ff7209ff21e80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_d5a5a22c4f1e281d4b9ef394be09b7571b8b91849c7dfd7f4780b6009524e519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a5a22c4f1e281d4b9ef394be09b7571b8b91849c7dfd7f4780b6009524e519->enter($__internal_d5a5a22c4f1e281d4b9ef394be09b7571b8b91849c7dfd7f4780b6009524e519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d5a5a22c4f1e281d4b9ef394be09b7571b8b91849c7dfd7f4780b6009524e519->leave($__internal_d5a5a22c4f1e281d4b9ef394be09b7571b8b91849c7dfd7f4780b6009524e519_prof);

        
        $__internal_d08bb8427e4e12fc428e0b05bd0deb51c844400ed4ca9c7462ff7209ff21e80d->leave($__internal_d08bb8427e4e12fc428e0b05bd0deb51c844400ed4ca9c7462ff7209ff21e80d_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_74fa6dc49a693506fb9e4d0329384087d981ae336be9c7cf962b128ecf7ac2f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74fa6dc49a693506fb9e4d0329384087d981ae336be9c7cf962b128ecf7ac2f7->enter($__internal_74fa6dc49a693506fb9e4d0329384087d981ae336be9c7cf962b128ecf7ac2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_3d9071aa47d495b6fafa4f89433d3fb670ad8fe5476716751e79d6513d74ac66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d9071aa47d495b6fafa4f89433d3fb670ad8fe5476716751e79d6513d74ac66->enter($__internal_3d9071aa47d495b6fafa4f89433d3fb670ad8fe5476716751e79d6513d74ac66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3d9071aa47d495b6fafa4f89433d3fb670ad8fe5476716751e79d6513d74ac66->leave($__internal_3d9071aa47d495b6fafa4f89433d3fb670ad8fe5476716751e79d6513d74ac66_prof);

        
        $__internal_74fa6dc49a693506fb9e4d0329384087d981ae336be9c7cf962b128ecf7ac2f7->leave($__internal_74fa6dc49a693506fb9e4d0329384087d981ae336be9c7cf962b128ecf7ac2f7_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_32adb18f77b3db6c339a487ee4f0976a0fec8d6caa86d24a86390dc81e3eb83a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32adb18f77b3db6c339a487ee4f0976a0fec8d6caa86d24a86390dc81e3eb83a->enter($__internal_32adb18f77b3db6c339a487ee4f0976a0fec8d6caa86d24a86390dc81e3eb83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_f14b29a2ad63151286d11891a7ed2c12fe4e005b11e5ab9851238b206a21918a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14b29a2ad63151286d11891a7ed2c12fe4e005b11e5ab9851238b206a21918a->enter($__internal_f14b29a2ad63151286d11891a7ed2c12fe4e005b11e5ab9851238b206a21918a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 267
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 270
        echo "</div>";
        
        $__internal_f14b29a2ad63151286d11891a7ed2c12fe4e005b11e5ab9851238b206a21918a->leave($__internal_f14b29a2ad63151286d11891a7ed2c12fe4e005b11e5ab9851238b206a21918a_prof);

        
        $__internal_32adb18f77b3db6c339a487ee4f0976a0fec8d6caa86d24a86390dc81e3eb83a->leave($__internal_32adb18f77b3db6c339a487ee4f0976a0fec8d6caa86d24a86390dc81e3eb83a_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_c6d17d2fbe685c4036d29dfe94d4bdd14914964bc7677601eb52b97c57b57737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d17d2fbe685c4036d29dfe94d4bdd14914964bc7677601eb52b97c57b57737->enter($__internal_c6d17d2fbe685c4036d29dfe94d4bdd14914964bc7677601eb52b97c57b57737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_1cdda9e5e39c3a3f530917d9f56e1cf7e5a6d5417df063c3e031810f42cc61cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cdda9e5e39c3a3f530917d9f56e1cf7e5a6d5417df063c3e031810f42cc61cb->enter($__internal_1cdda9e5e39c3a3f530917d9f56e1cf7e5a6d5417df063c3e031810f42cc61cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 274
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 277
        echo "</div>";
        
        $__internal_1cdda9e5e39c3a3f530917d9f56e1cf7e5a6d5417df063c3e031810f42cc61cb->leave($__internal_1cdda9e5e39c3a3f530917d9f56e1cf7e5a6d5417df063c3e031810f42cc61cb_prof);

        
        $__internal_c6d17d2fbe685c4036d29dfe94d4bdd14914964bc7677601eb52b97c57b57737->leave($__internal_c6d17d2fbe685c4036d29dfe94d4bdd14914964bc7677601eb52b97c57b57737_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_0eb015103c265970be366944f45165bce2c6c568de5be2ca927a654a892d26e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb015103c265970be366944f45165bce2c6c568de5be2ca927a654a892d26e0->enter($__internal_0eb015103c265970be366944f45165bce2c6c568de5be2ca927a654a892d26e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_b7a494031318cbe048fe0e5df916e492766d78b06a18909a59a6d1d080734152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a494031318cbe048fe0e5df916e492766d78b06a18909a59a6d1d080734152->enter($__internal_b7a494031318cbe048fe0e5df916e492766d78b06a18909a59a6d1d080734152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 283
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 284
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 285
            echo "    <ul class=\"list-unstyled\">";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 287
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "</ul>
    ";
            // line 290
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_b7a494031318cbe048fe0e5df916e492766d78b06a18909a59a6d1d080734152->leave($__internal_b7a494031318cbe048fe0e5df916e492766d78b06a18909a59a6d1d080734152_prof);

        
        $__internal_0eb015103c265970be366944f45165bce2c6c568de5be2ca927a654a892d26e0->leave($__internal_0eb015103c265970be366944f45165bce2c6c568de5be2ca927a654a892d26e0_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1149 => 290,  1146 => 289,  1138 => 287,  1134 => 286,  1132 => 285,  1126 => 284,  1124 => 283,  1115 => 282,  1105 => 277,  1103 => 276,  1101 => 275,  1095 => 274,  1086 => 273,  1076 => 270,  1074 => 269,  1072 => 268,  1066 => 267,  1057 => 266,  1047 => 263,  1045 => 262,  1036 => 261,  1026 => 258,  1024 => 257,  1015 => 256,  1005 => 253,  1003 => 252,  994 => 251,  984 => 248,  982 => 247,  973 => 246,  963 => 243,  961 => 242,  959 => 241,  950 => 240,  940 => 237,  938 => 236,  936 => 235,  934 => 234,  928 => 233,  919 => 232,  907 => 226,  903 => 225,  888 => 224,  884 => 221,  881 => 218,  880 => 217,  879 => 216,  877 => 215,  874 => 214,  871 => 213,  868 => 212,  865 => 211,  862 => 210,  859 => 209,  856 => 208,  853 => 207,  851 => 206,  842 => 205,  832 => 202,  830 => 200,  821 => 199,  811 => 196,  809 => 194,  800 => 193,  790 => 190,  788 => 189,  779 => 187,  769 => 184,  767 => 183,  758 => 182,  747 => 176,  745 => 175,  743 => 174,  740 => 172,  738 => 171,  736 => 170,  727 => 169,  716 => 165,  714 => 164,  712 => 163,  709 => 161,  707 => 160,  705 => 159,  696 => 158,  685 => 154,  679 => 151,  678 => 150,  677 => 149,  673 => 148,  669 => 147,  662 => 143,  661 => 142,  660 => 141,  656 => 140,  654 => 139,  645 => 138,  635 => 135,  633 => 134,  624 => 133,  613 => 129,  609 => 128,  604 => 124,  598 => 123,  592 => 122,  586 => 121,  580 => 120,  574 => 119,  568 => 118,  562 => 117,  557 => 113,  551 => 112,  545 => 111,  539 => 110,  533 => 109,  527 => 108,  521 => 107,  515 => 106,  510 => 103,  507 => 102,  505 => 101,  501 => 100,  499 => 99,  496 => 97,  494 => 96,  485 => 95,  473 => 90,  470 => 89,  460 => 88,  455 => 86,  453 => 85,  451 => 84,  448 => 82,  446 => 81,  437 => 80,  425 => 75,  423 => 74,  421 => 72,  420 => 71,  419 => 70,  418 => 69,  413 => 67,  411 => 66,  409 => 65,  406 => 63,  404 => 62,  395 => 61,  384 => 57,  382 => 56,  380 => 55,  378 => 54,  376 => 53,  372 => 52,  370 => 51,  367 => 49,  365 => 48,  356 => 47,  345 => 43,  343 => 42,  341 => 41,  332 => 40,  321 => 36,  317 => 34,  311 => 32,  309 => 31,  307 => 30,  301 => 28,  299 => 27,  296 => 26,  293 => 25,  290 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 282,  200 => 281,  197 => 279,  195 => 273,  192 => 272,  190 => 266,  187 => 265,  185 => 261,  182 => 260,  180 => 256,  177 => 255,  175 => 251,  172 => 250,  170 => 246,  167 => 245,  165 => 240,  162 => 239,  160 => 232,  157 => 231,  154 => 229,  152 => 205,  149 => 204,  147 => 199,  144 => 198,  142 => 193,  139 => 192,  137 => 187,  134 => 186,  132 => 182,  129 => 181,  126 => 179,  124 => 169,  121 => 168,  119 => 158,  116 => 157,  114 => 138,  111 => 137,  109 => 133,  107 => 95,  105 => 80,  102 => 79,  100 => 61,  97 => 60,  95 => 47,  92 => 46,  90 => 40,  87 => 39,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
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
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
