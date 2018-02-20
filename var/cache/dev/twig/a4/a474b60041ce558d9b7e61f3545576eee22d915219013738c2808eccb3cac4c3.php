<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_431e2d61e55fc707413176a85f21497d2f1cb98410ed3775ad2742c2fad7b17b extends Twig_Template
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
        $__internal_c23428c58fa6f932038c32e6c9ebfc9f76d0322eb56660b9e53a086c2338bf4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c23428c58fa6f932038c32e6c9ebfc9f76d0322eb56660b9e53a086c2338bf4b->enter($__internal_c23428c58fa6f932038c32e6c9ebfc9f76d0322eb56660b9e53a086c2338bf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_bfc1692abb1a36852d1a8510b67fc8bfd100f8ae4a963c49f42c84d7f2aafcf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc1692abb1a36852d1a8510b67fc8bfd100f8ae4a963c49f42c84d7f2aafcf2->enter($__internal_bfc1692abb1a36852d1a8510b67fc8bfd100f8ae4a963c49f42c84d7f2aafcf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_c23428c58fa6f932038c32e6c9ebfc9f76d0322eb56660b9e53a086c2338bf4b->leave($__internal_c23428c58fa6f932038c32e6c9ebfc9f76d0322eb56660b9e53a086c2338bf4b_prof);

        
        $__internal_bfc1692abb1a36852d1a8510b67fc8bfd100f8ae4a963c49f42c84d7f2aafcf2->leave($__internal_bfc1692abb1a36852d1a8510b67fc8bfd100f8ae4a963c49f42c84d7f2aafcf2_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_1f4e7b982e404c1824882d0f15e608f3ed374edf8b8b9a64ade9049312a1cefe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f4e7b982e404c1824882d0f15e608f3ed374edf8b8b9a64ade9049312a1cefe->enter($__internal_1f4e7b982e404c1824882d0f15e608f3ed374edf8b8b9a64ade9049312a1cefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_f875f3f9885d93df9317e22a238057879811ae2b347689cde90f27ce50ff9bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f875f3f9885d93df9317e22a238057879811ae2b347689cde90f27ce50ff9bfc->enter($__internal_f875f3f9885d93df9317e22a238057879811ae2b347689cde90f27ce50ff9bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f875f3f9885d93df9317e22a238057879811ae2b347689cde90f27ce50ff9bfc->leave($__internal_f875f3f9885d93df9317e22a238057879811ae2b347689cde90f27ce50ff9bfc_prof);

        
        $__internal_1f4e7b982e404c1824882d0f15e608f3ed374edf8b8b9a64ade9049312a1cefe->leave($__internal_1f4e7b982e404c1824882d0f15e608f3ed374edf8b8b9a64ade9049312a1cefe_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_5c6dd7964014d77d0946ae113e7718dadbeb361d9bd3ace29ab4dacc81a25e52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c6dd7964014d77d0946ae113e7718dadbeb361d9bd3ace29ab4dacc81a25e52->enter($__internal_5c6dd7964014d77d0946ae113e7718dadbeb361d9bd3ace29ab4dacc81a25e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_f19ca551c114f12d5f86ec013b7ae04b5d4437a0a11eac3b5a136a0ab3b77d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f19ca551c114f12d5f86ec013b7ae04b5d4437a0a11eac3b5a136a0ab3b77d88->enter($__internal_f19ca551c114f12d5f86ec013b7ae04b5d4437a0a11eac3b5a136a0ab3b77d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_f19ca551c114f12d5f86ec013b7ae04b5d4437a0a11eac3b5a136a0ab3b77d88->leave($__internal_f19ca551c114f12d5f86ec013b7ae04b5d4437a0a11eac3b5a136a0ab3b77d88_prof);

        
        $__internal_5c6dd7964014d77d0946ae113e7718dadbeb361d9bd3ace29ab4dacc81a25e52->leave($__internal_5c6dd7964014d77d0946ae113e7718dadbeb361d9bd3ace29ab4dacc81a25e52_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_90dc8e2aa60e0f50de3e5f45aae803fa3b8c1bda6672b42625cc93931a967ba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90dc8e2aa60e0f50de3e5f45aae803fa3b8c1bda6672b42625cc93931a967ba6->enter($__internal_90dc8e2aa60e0f50de3e5f45aae803fa3b8c1bda6672b42625cc93931a967ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_26971a328819d95ee5cabc3c61dd71153c7496a01b3f030c2e2b6bd3e9296793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26971a328819d95ee5cabc3c61dd71153c7496a01b3f030c2e2b6bd3e9296793->enter($__internal_26971a328819d95ee5cabc3c61dd71153c7496a01b3f030c2e2b6bd3e9296793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_26971a328819d95ee5cabc3c61dd71153c7496a01b3f030c2e2b6bd3e9296793->leave($__internal_26971a328819d95ee5cabc3c61dd71153c7496a01b3f030c2e2b6bd3e9296793_prof);

        
        $__internal_90dc8e2aa60e0f50de3e5f45aae803fa3b8c1bda6672b42625cc93931a967ba6->leave($__internal_90dc8e2aa60e0f50de3e5f45aae803fa3b8c1bda6672b42625cc93931a967ba6_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_56673e2dfb470fdab8541f4e837e8bcb439cc2b8dbca5abbf1c6e893b53d11ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56673e2dfb470fdab8541f4e837e8bcb439cc2b8dbca5abbf1c6e893b53d11ae->enter($__internal_56673e2dfb470fdab8541f4e837e8bcb439cc2b8dbca5abbf1c6e893b53d11ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_415335934164f43f1cd5450e330e51b78ec832524245c57cbba3316d1ac38554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_415335934164f43f1cd5450e330e51b78ec832524245c57cbba3316d1ac38554->enter($__internal_415335934164f43f1cd5450e330e51b78ec832524245c57cbba3316d1ac38554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_d5e1469ed06020ec87e162e9e91732dc3b3406eaa698de38aea753c89413e185 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_8ade151662edf6789a6c9ee58827c3b7096a1c590cdd3cd422281cf56b18b939 = "{{") && ('' === $__internal_8ade151662edf6789a6c9ee58827c3b7096a1c590cdd3cd422281cf56b18b939 || 0 === strpos($__internal_d5e1469ed06020ec87e162e9e91732dc3b3406eaa698de38aea753c89413e185, $__internal_8ade151662edf6789a6c9ee58827c3b7096a1c590cdd3cd422281cf56b18b939)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_8ea04b391012137d3f7fcc2f837e957ce686210f6d3b0ca864f8b50486f1539e = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_407cb7bab84c5f8a3ca6e5ed0d1e97eb0534cb83011dd0880b81fd92e4a82e8c = "}}") && ('' === $__internal_407cb7bab84c5f8a3ca6e5ed0d1e97eb0534cb83011dd0880b81fd92e4a82e8c || $__internal_407cb7bab84c5f8a3ca6e5ed0d1e97eb0534cb83011dd0880b81fd92e4a82e8c === substr($__internal_8ea04b391012137d3f7fcc2f837e957ce686210f6d3b0ca864f8b50486f1539e, -strlen($__internal_407cb7bab84c5f8a3ca6e5ed0d1e97eb0534cb83011dd0880b81fd92e4a82e8c))));
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
        
        $__internal_415335934164f43f1cd5450e330e51b78ec832524245c57cbba3316d1ac38554->leave($__internal_415335934164f43f1cd5450e330e51b78ec832524245c57cbba3316d1ac38554_prof);

        
        $__internal_56673e2dfb470fdab8541f4e837e8bcb439cc2b8dbca5abbf1c6e893b53d11ae->leave($__internal_56673e2dfb470fdab8541f4e837e8bcb439cc2b8dbca5abbf1c6e893b53d11ae_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_c4af8b3da821c1fb743341c3663b8ef88e4075da0e5a2a5e2bc7685845c7359d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4af8b3da821c1fb743341c3663b8ef88e4075da0e5a2a5e2bc7685845c7359d->enter($__internal_c4af8b3da821c1fb743341c3663b8ef88e4075da0e5a2a5e2bc7685845c7359d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_cdc272691626a9ce447f06986a02e7b571c8e587a0c761960855ba44b4cead9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdc272691626a9ce447f06986a02e7b571c8e587a0c761960855ba44b4cead9b->enter($__internal_cdc272691626a9ce447f06986a02e7b571c8e587a0c761960855ba44b4cead9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_cdc272691626a9ce447f06986a02e7b571c8e587a0c761960855ba44b4cead9b->leave($__internal_cdc272691626a9ce447f06986a02e7b571c8e587a0c761960855ba44b4cead9b_prof);

        
        $__internal_c4af8b3da821c1fb743341c3663b8ef88e4075da0e5a2a5e2bc7685845c7359d->leave($__internal_c4af8b3da821c1fb743341c3663b8ef88e4075da0e5a2a5e2bc7685845c7359d_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_df1b8e60a8ea18c9d73024e4557f8f9c8ac615ee27cc81f53039f77e0b8ce5ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df1b8e60a8ea18c9d73024e4557f8f9c8ac615ee27cc81f53039f77e0b8ce5ef->enter($__internal_df1b8e60a8ea18c9d73024e4557f8f9c8ac615ee27cc81f53039f77e0b8ce5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_c45f53d5be20a7288ec3936b74248b9043d333ca328077741f023ee617ed87e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45f53d5be20a7288ec3936b74248b9043d333ca328077741f023ee617ed87e0->enter($__internal_c45f53d5be20a7288ec3936b74248b9043d333ca328077741f023ee617ed87e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_c45f53d5be20a7288ec3936b74248b9043d333ca328077741f023ee617ed87e0->leave($__internal_c45f53d5be20a7288ec3936b74248b9043d333ca328077741f023ee617ed87e0_prof);

        
        $__internal_df1b8e60a8ea18c9d73024e4557f8f9c8ac615ee27cc81f53039f77e0b8ce5ef->leave($__internal_df1b8e60a8ea18c9d73024e4557f8f9c8ac615ee27cc81f53039f77e0b8ce5ef_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_5b05e80384729ddc27243b248f9cb2092cd72f3815fe35b8bc5ef283536cfabe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b05e80384729ddc27243b248f9cb2092cd72f3815fe35b8bc5ef283536cfabe->enter($__internal_5b05e80384729ddc27243b248f9cb2092cd72f3815fe35b8bc5ef283536cfabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_0c3b194412a3e99275e94fcc950977ba633475544a7542b37b8d7e52ffecb0bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c3b194412a3e99275e94fcc950977ba633475544a7542b37b8d7e52ffecb0bc->enter($__internal_0c3b194412a3e99275e94fcc950977ba633475544a7542b37b8d7e52ffecb0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_0c3b194412a3e99275e94fcc950977ba633475544a7542b37b8d7e52ffecb0bc->leave($__internal_0c3b194412a3e99275e94fcc950977ba633475544a7542b37b8d7e52ffecb0bc_prof);

        
        $__internal_5b05e80384729ddc27243b248f9cb2092cd72f3815fe35b8bc5ef283536cfabe->leave($__internal_5b05e80384729ddc27243b248f9cb2092cd72f3815fe35b8bc5ef283536cfabe_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_22d1a7c6aee5bcff99ec40cedfb2bfdb8723857bf8acdba56817992ea137f640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d1a7c6aee5bcff99ec40cedfb2bfdb8723857bf8acdba56817992ea137f640->enter($__internal_22d1a7c6aee5bcff99ec40cedfb2bfdb8723857bf8acdba56817992ea137f640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_347550fbba5498d4ecbc8f443e5b64d714b28fee847c272dd9685aa9a371d5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347550fbba5498d4ecbc8f443e5b64d714b28fee847c272dd9685aa9a371d5b5->enter($__internal_347550fbba5498d4ecbc8f443e5b64d714b28fee847c272dd9685aa9a371d5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_347550fbba5498d4ecbc8f443e5b64d714b28fee847c272dd9685aa9a371d5b5->leave($__internal_347550fbba5498d4ecbc8f443e5b64d714b28fee847c272dd9685aa9a371d5b5_prof);

        
        $__internal_22d1a7c6aee5bcff99ec40cedfb2bfdb8723857bf8acdba56817992ea137f640->leave($__internal_22d1a7c6aee5bcff99ec40cedfb2bfdb8723857bf8acdba56817992ea137f640_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_e38cb1359a93dbec77f487fe98a8e503ab93a676b23da98c4c30724bef099ff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e38cb1359a93dbec77f487fe98a8e503ab93a676b23da98c4c30724bef099ff3->enter($__internal_e38cb1359a93dbec77f487fe98a8e503ab93a676b23da98c4c30724bef099ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_06dce9244fa6d940b7c18eff122bde3bef8ac628453619b6e430be3947ff9f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06dce9244fa6d940b7c18eff122bde3bef8ac628453619b6e430be3947ff9f55->enter($__internal_06dce9244fa6d940b7c18eff122bde3bef8ac628453619b6e430be3947ff9f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_06dce9244fa6d940b7c18eff122bde3bef8ac628453619b6e430be3947ff9f55->leave($__internal_06dce9244fa6d940b7c18eff122bde3bef8ac628453619b6e430be3947ff9f55_prof);

        
        $__internal_e38cb1359a93dbec77f487fe98a8e503ab93a676b23da98c4c30724bef099ff3->leave($__internal_e38cb1359a93dbec77f487fe98a8e503ab93a676b23da98c4c30724bef099ff3_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_bc62aedb097eee09240f55c2794b58bad35c530e9655756b76d522033e9d3a13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc62aedb097eee09240f55c2794b58bad35c530e9655756b76d522033e9d3a13->enter($__internal_bc62aedb097eee09240f55c2794b58bad35c530e9655756b76d522033e9d3a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_1b01a6ccfcb70eaa0248c3e5448ecfa30535ab0a864391f08b04c4fad9d78176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b01a6ccfcb70eaa0248c3e5448ecfa30535ab0a864391f08b04c4fad9d78176->enter($__internal_1b01a6ccfcb70eaa0248c3e5448ecfa30535ab0a864391f08b04c4fad9d78176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_1b01a6ccfcb70eaa0248c3e5448ecfa30535ab0a864391f08b04c4fad9d78176->leave($__internal_1b01a6ccfcb70eaa0248c3e5448ecfa30535ab0a864391f08b04c4fad9d78176_prof);

        
        $__internal_bc62aedb097eee09240f55c2794b58bad35c530e9655756b76d522033e9d3a13->leave($__internal_bc62aedb097eee09240f55c2794b58bad35c530e9655756b76d522033e9d3a13_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_4e5fc771d3b8a62f48fc7f46a2e685830265d014d31dd3a1a77d39539a5d1f35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e5fc771d3b8a62f48fc7f46a2e685830265d014d31dd3a1a77d39539a5d1f35->enter($__internal_4e5fc771d3b8a62f48fc7f46a2e685830265d014d31dd3a1a77d39539a5d1f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_0e6fce1bfca8f03ed996ce677b5ece69eeca21b2e9ba61d10843c741214643d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6fce1bfca8f03ed996ce677b5ece69eeca21b2e9ba61d10843c741214643d0->enter($__internal_0e6fce1bfca8f03ed996ce677b5ece69eeca21b2e9ba61d10843c741214643d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_0e6fce1bfca8f03ed996ce677b5ece69eeca21b2e9ba61d10843c741214643d0->leave($__internal_0e6fce1bfca8f03ed996ce677b5ece69eeca21b2e9ba61d10843c741214643d0_prof);

        
        $__internal_4e5fc771d3b8a62f48fc7f46a2e685830265d014d31dd3a1a77d39539a5d1f35->leave($__internal_4e5fc771d3b8a62f48fc7f46a2e685830265d014d31dd3a1a77d39539a5d1f35_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a6aa713998eebe9bf651d3cd154950c5e226c0facc38dfba67fa46815b64a83c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6aa713998eebe9bf651d3cd154950c5e226c0facc38dfba67fa46815b64a83c->enter($__internal_a6aa713998eebe9bf651d3cd154950c5e226c0facc38dfba67fa46815b64a83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_7adb8cdf57b2c7f190c63d04f7165366dfeaed35f963e340452135459759f652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7adb8cdf57b2c7f190c63d04f7165366dfeaed35f963e340452135459759f652->enter($__internal_7adb8cdf57b2c7f190c63d04f7165366dfeaed35f963e340452135459759f652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_7adb8cdf57b2c7f190c63d04f7165366dfeaed35f963e340452135459759f652->leave($__internal_7adb8cdf57b2c7f190c63d04f7165366dfeaed35f963e340452135459759f652_prof);

        
        $__internal_a6aa713998eebe9bf651d3cd154950c5e226c0facc38dfba67fa46815b64a83c->leave($__internal_a6aa713998eebe9bf651d3cd154950c5e226c0facc38dfba67fa46815b64a83c_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_ce3f97fd75b2d03352a13042b359300b4d34ffa8636039ae6e0750922f13bc2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce3f97fd75b2d03352a13042b359300b4d34ffa8636039ae6e0750922f13bc2b->enter($__internal_ce3f97fd75b2d03352a13042b359300b4d34ffa8636039ae6e0750922f13bc2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_7d570311843b2d96277afce52288de53102011e9d9e2e82c80e2285c75dea2a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d570311843b2d96277afce52288de53102011e9d9e2e82c80e2285c75dea2a5->enter($__internal_7d570311843b2d96277afce52288de53102011e9d9e2e82c80e2285c75dea2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_7d570311843b2d96277afce52288de53102011e9d9e2e82c80e2285c75dea2a5->leave($__internal_7d570311843b2d96277afce52288de53102011e9d9e2e82c80e2285c75dea2a5_prof);

        
        $__internal_ce3f97fd75b2d03352a13042b359300b4d34ffa8636039ae6e0750922f13bc2b->leave($__internal_ce3f97fd75b2d03352a13042b359300b4d34ffa8636039ae6e0750922f13bc2b_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_06dadc8662cbed61eb9090d9f24d03d381acf56fea4e03785439b29637c8a94d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06dadc8662cbed61eb9090d9f24d03d381acf56fea4e03785439b29637c8a94d->enter($__internal_06dadc8662cbed61eb9090d9f24d03d381acf56fea4e03785439b29637c8a94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ae17c44403965cc7c4902a14a23dc74709e24e18ffa6bae8b21b155fd8df0226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae17c44403965cc7c4902a14a23dc74709e24e18ffa6bae8b21b155fd8df0226->enter($__internal_ae17c44403965cc7c4902a14a23dc74709e24e18ffa6bae8b21b155fd8df0226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_ae17c44403965cc7c4902a14a23dc74709e24e18ffa6bae8b21b155fd8df0226->leave($__internal_ae17c44403965cc7c4902a14a23dc74709e24e18ffa6bae8b21b155fd8df0226_prof);

        
        $__internal_06dadc8662cbed61eb9090d9f24d03d381acf56fea4e03785439b29637c8a94d->leave($__internal_06dadc8662cbed61eb9090d9f24d03d381acf56fea4e03785439b29637c8a94d_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_1d43f092f52a90dfb6616f3f9977e170aa9e132be8abdd136ce81e3474daa625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d43f092f52a90dfb6616f3f9977e170aa9e132be8abdd136ce81e3474daa625->enter($__internal_1d43f092f52a90dfb6616f3f9977e170aa9e132be8abdd136ce81e3474daa625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_b4fd777d57006c0738cf821c2072d04bf7087b64bc9749451015e366e68bde7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4fd777d57006c0738cf821c2072d04bf7087b64bc9749451015e366e68bde7f->enter($__internal_b4fd777d57006c0738cf821c2072d04bf7087b64bc9749451015e366e68bde7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_b4fd777d57006c0738cf821c2072d04bf7087b64bc9749451015e366e68bde7f->leave($__internal_b4fd777d57006c0738cf821c2072d04bf7087b64bc9749451015e366e68bde7f_prof);

        
        $__internal_1d43f092f52a90dfb6616f3f9977e170aa9e132be8abdd136ce81e3474daa625->leave($__internal_1d43f092f52a90dfb6616f3f9977e170aa9e132be8abdd136ce81e3474daa625_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_f09df22801197f7dc577009edce4051f212eb73ccca9ce6ac3e86559dacad57c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f09df22801197f7dc577009edce4051f212eb73ccca9ce6ac3e86559dacad57c->enter($__internal_f09df22801197f7dc577009edce4051f212eb73ccca9ce6ac3e86559dacad57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_ee3251f943800722ba8021ddff6847a8ac7a14bf6c36050b6b9e7c7cd338eb43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee3251f943800722ba8021ddff6847a8ac7a14bf6c36050b6b9e7c7cd338eb43->enter($__internal_ee3251f943800722ba8021ddff6847a8ac7a14bf6c36050b6b9e7c7cd338eb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ee3251f943800722ba8021ddff6847a8ac7a14bf6c36050b6b9e7c7cd338eb43->leave($__internal_ee3251f943800722ba8021ddff6847a8ac7a14bf6c36050b6b9e7c7cd338eb43_prof);

        
        $__internal_f09df22801197f7dc577009edce4051f212eb73ccca9ce6ac3e86559dacad57c->leave($__internal_f09df22801197f7dc577009edce4051f212eb73ccca9ce6ac3e86559dacad57c_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_65c433b6fbf1441a57f9a5ec78e0cf96ecef7cf15aeb4a2b4d437f113cc3b093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65c433b6fbf1441a57f9a5ec78e0cf96ecef7cf15aeb4a2b4d437f113cc3b093->enter($__internal_65c433b6fbf1441a57f9a5ec78e0cf96ecef7cf15aeb4a2b4d437f113cc3b093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_52fec7d1281552240eacb5ae1e93100dd30f0a751f214630ffcf22cc9af410cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52fec7d1281552240eacb5ae1e93100dd30f0a751f214630ffcf22cc9af410cd->enter($__internal_52fec7d1281552240eacb5ae1e93100dd30f0a751f214630ffcf22cc9af410cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_52fec7d1281552240eacb5ae1e93100dd30f0a751f214630ffcf22cc9af410cd->leave($__internal_52fec7d1281552240eacb5ae1e93100dd30f0a751f214630ffcf22cc9af410cd_prof);

        
        $__internal_65c433b6fbf1441a57f9a5ec78e0cf96ecef7cf15aeb4a2b4d437f113cc3b093->leave($__internal_65c433b6fbf1441a57f9a5ec78e0cf96ecef7cf15aeb4a2b4d437f113cc3b093_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_328f0b75281859685bee4551b11c2303c8e746191818fb03d27ca98a9f5382a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_328f0b75281859685bee4551b11c2303c8e746191818fb03d27ca98a9f5382a4->enter($__internal_328f0b75281859685bee4551b11c2303c8e746191818fb03d27ca98a9f5382a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_cd94dd742929ee79fa49a0e910099c74bd61dfaf818274d3af4ecf2ba7641cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd94dd742929ee79fa49a0e910099c74bd61dfaf818274d3af4ecf2ba7641cf8->enter($__internal_cd94dd742929ee79fa49a0e910099c74bd61dfaf818274d3af4ecf2ba7641cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_cd94dd742929ee79fa49a0e910099c74bd61dfaf818274d3af4ecf2ba7641cf8->leave($__internal_cd94dd742929ee79fa49a0e910099c74bd61dfaf818274d3af4ecf2ba7641cf8_prof);

        
        $__internal_328f0b75281859685bee4551b11c2303c8e746191818fb03d27ca98a9f5382a4->leave($__internal_328f0b75281859685bee4551b11c2303c8e746191818fb03d27ca98a9f5382a4_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_23e8454d8c3dc26e58dce694e0c7f585d8f3cc9d7a7f96d235853cad3fddfe6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e8454d8c3dc26e58dce694e0c7f585d8f3cc9d7a7f96d235853cad3fddfe6b->enter($__internal_23e8454d8c3dc26e58dce694e0c7f585d8f3cc9d7a7f96d235853cad3fddfe6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_53b9ee368b56b55a72f8efb4b0680a1c563e4ffc66fa966c7192c1cb4f13e9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b9ee368b56b55a72f8efb4b0680a1c563e4ffc66fa966c7192c1cb4f13e9f0->enter($__internal_53b9ee368b56b55a72f8efb4b0680a1c563e4ffc66fa966c7192c1cb4f13e9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_53b9ee368b56b55a72f8efb4b0680a1c563e4ffc66fa966c7192c1cb4f13e9f0->leave($__internal_53b9ee368b56b55a72f8efb4b0680a1c563e4ffc66fa966c7192c1cb4f13e9f0_prof);

        
        $__internal_23e8454d8c3dc26e58dce694e0c7f585d8f3cc9d7a7f96d235853cad3fddfe6b->leave($__internal_23e8454d8c3dc26e58dce694e0c7f585d8f3cc9d7a7f96d235853cad3fddfe6b_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_a16d9eff407e1e4edbd07b0d3899f23fe047e1ceaef3ceab5538e8d9011b76d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a16d9eff407e1e4edbd07b0d3899f23fe047e1ceaef3ceab5538e8d9011b76d9->enter($__internal_a16d9eff407e1e4edbd07b0d3899f23fe047e1ceaef3ceab5538e8d9011b76d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_e2c9766b0d12a8f92a2978be1d66c02673529ba4f38865a3f70ec3cd8bfaf86c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c9766b0d12a8f92a2978be1d66c02673529ba4f38865a3f70ec3cd8bfaf86c->enter($__internal_e2c9766b0d12a8f92a2978be1d66c02673529ba4f38865a3f70ec3cd8bfaf86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_e2c9766b0d12a8f92a2978be1d66c02673529ba4f38865a3f70ec3cd8bfaf86c->leave($__internal_e2c9766b0d12a8f92a2978be1d66c02673529ba4f38865a3f70ec3cd8bfaf86c_prof);

        
        $__internal_a16d9eff407e1e4edbd07b0d3899f23fe047e1ceaef3ceab5538e8d9011b76d9->leave($__internal_a16d9eff407e1e4edbd07b0d3899f23fe047e1ceaef3ceab5538e8d9011b76d9_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_ed853ca15be3ea5065b1cf34299ab3f83e6bd7ac81e28adc3b11c5cd411acb10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed853ca15be3ea5065b1cf34299ab3f83e6bd7ac81e28adc3b11c5cd411acb10->enter($__internal_ed853ca15be3ea5065b1cf34299ab3f83e6bd7ac81e28adc3b11c5cd411acb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_74716241a35a89c25c5888af8278ef91fdd6674f057d3d71043c75a95b08a551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74716241a35a89c25c5888af8278ef91fdd6674f057d3d71043c75a95b08a551->enter($__internal_74716241a35a89c25c5888af8278ef91fdd6674f057d3d71043c75a95b08a551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_74716241a35a89c25c5888af8278ef91fdd6674f057d3d71043c75a95b08a551->leave($__internal_74716241a35a89c25c5888af8278ef91fdd6674f057d3d71043c75a95b08a551_prof);

        
        $__internal_ed853ca15be3ea5065b1cf34299ab3f83e6bd7ac81e28adc3b11c5cd411acb10->leave($__internal_ed853ca15be3ea5065b1cf34299ab3f83e6bd7ac81e28adc3b11c5cd411acb10_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_fd9f78ef1f85d7b8245e050bb1dcd1f913bf683a6e90af9df0f0c322b906c33b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd9f78ef1f85d7b8245e050bb1dcd1f913bf683a6e90af9df0f0c322b906c33b->enter($__internal_fd9f78ef1f85d7b8245e050bb1dcd1f913bf683a6e90af9df0f0c322b906c33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_ad061bdb4841c0bde6745830d81d62700ecf7cfb375d907fad93d14a636ed8d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad061bdb4841c0bde6745830d81d62700ecf7cfb375d907fad93d14a636ed8d9->enter($__internal_ad061bdb4841c0bde6745830d81d62700ecf7cfb375d907fad93d14a636ed8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ad061bdb4841c0bde6745830d81d62700ecf7cfb375d907fad93d14a636ed8d9->leave($__internal_ad061bdb4841c0bde6745830d81d62700ecf7cfb375d907fad93d14a636ed8d9_prof);

        
        $__internal_fd9f78ef1f85d7b8245e050bb1dcd1f913bf683a6e90af9df0f0c322b906c33b->leave($__internal_fd9f78ef1f85d7b8245e050bb1dcd1f913bf683a6e90af9df0f0c322b906c33b_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_022c8ddf99ed6160ac84ace9f8de15fbb19b6c7a5e154fcaf026d368829e1d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_022c8ddf99ed6160ac84ace9f8de15fbb19b6c7a5e154fcaf026d368829e1d23->enter($__internal_022c8ddf99ed6160ac84ace9f8de15fbb19b6c7a5e154fcaf026d368829e1d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_908f8113c60cdd324496c7edae85493c46807b1ad23e0a2334912c060448921a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908f8113c60cdd324496c7edae85493c46807b1ad23e0a2334912c060448921a->enter($__internal_908f8113c60cdd324496c7edae85493c46807b1ad23e0a2334912c060448921a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_908f8113c60cdd324496c7edae85493c46807b1ad23e0a2334912c060448921a->leave($__internal_908f8113c60cdd324496c7edae85493c46807b1ad23e0a2334912c060448921a_prof);

        
        $__internal_022c8ddf99ed6160ac84ace9f8de15fbb19b6c7a5e154fcaf026d368829e1d23->leave($__internal_022c8ddf99ed6160ac84ace9f8de15fbb19b6c7a5e154fcaf026d368829e1d23_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_bed25e2a21e4306eedb61400b4f9628e7501cd0c3ec5c6a3c5016f3ad4906023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed25e2a21e4306eedb61400b4f9628e7501cd0c3ec5c6a3c5016f3ad4906023->enter($__internal_bed25e2a21e4306eedb61400b4f9628e7501cd0c3ec5c6a3c5016f3ad4906023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_f720f4812adc0f3ff40c75b3dcf1171f9705cc51ead2f220a1583e3133bbc503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f720f4812adc0f3ff40c75b3dcf1171f9705cc51ead2f220a1583e3133bbc503->enter($__internal_f720f4812adc0f3ff40c75b3dcf1171f9705cc51ead2f220a1583e3133bbc503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f720f4812adc0f3ff40c75b3dcf1171f9705cc51ead2f220a1583e3133bbc503->leave($__internal_f720f4812adc0f3ff40c75b3dcf1171f9705cc51ead2f220a1583e3133bbc503_prof);

        
        $__internal_bed25e2a21e4306eedb61400b4f9628e7501cd0c3ec5c6a3c5016f3ad4906023->leave($__internal_bed25e2a21e4306eedb61400b4f9628e7501cd0c3ec5c6a3c5016f3ad4906023_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_1967f39776025f641e58f0e6b3e91f7adcacb8b6b66cfc781bfd2b4ceea62ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1967f39776025f641e58f0e6b3e91f7adcacb8b6b66cfc781bfd2b4ceea62ae3->enter($__internal_1967f39776025f641e58f0e6b3e91f7adcacb8b6b66cfc781bfd2b4ceea62ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_7fb5fa8f58e6a99c597826f9c3dd1d2e2336fc947d71079f13b64542172fa84d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb5fa8f58e6a99c597826f9c3dd1d2e2336fc947d71079f13b64542172fa84d->enter($__internal_7fb5fa8f58e6a99c597826f9c3dd1d2e2336fc947d71079f13b64542172fa84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_7fb5fa8f58e6a99c597826f9c3dd1d2e2336fc947d71079f13b64542172fa84d->leave($__internal_7fb5fa8f58e6a99c597826f9c3dd1d2e2336fc947d71079f13b64542172fa84d_prof);

        
        $__internal_1967f39776025f641e58f0e6b3e91f7adcacb8b6b66cfc781bfd2b4ceea62ae3->leave($__internal_1967f39776025f641e58f0e6b3e91f7adcacb8b6b66cfc781bfd2b4ceea62ae3_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_bce74f8a45d6218c9759c4d65869c2cbff891281ddc6cb9808b7776b7c24c8b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bce74f8a45d6218c9759c4d65869c2cbff891281ddc6cb9808b7776b7c24c8b7->enter($__internal_bce74f8a45d6218c9759c4d65869c2cbff891281ddc6cb9808b7776b7c24c8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_cbe1c9d68b88bcbbe9b58ad3d42a2fa12ad595f4bd3856820719bcc8c0d49be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe1c9d68b88bcbbe9b58ad3d42a2fa12ad595f4bd3856820719bcc8c0d49be3->enter($__internal_cbe1c9d68b88bcbbe9b58ad3d42a2fa12ad595f4bd3856820719bcc8c0d49be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_cbe1c9d68b88bcbbe9b58ad3d42a2fa12ad595f4bd3856820719bcc8c0d49be3->leave($__internal_cbe1c9d68b88bcbbe9b58ad3d42a2fa12ad595f4bd3856820719bcc8c0d49be3_prof);

        
        $__internal_bce74f8a45d6218c9759c4d65869c2cbff891281ddc6cb9808b7776b7c24c8b7->leave($__internal_bce74f8a45d6218c9759c4d65869c2cbff891281ddc6cb9808b7776b7c24c8b7_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_eda360bf4aac0096dd1b0e3c85faf2b973e744320d729c3e899668c252a1b727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda360bf4aac0096dd1b0e3c85faf2b973e744320d729c3e899668c252a1b727->enter($__internal_eda360bf4aac0096dd1b0e3c85faf2b973e744320d729c3e899668c252a1b727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_8a97b2e566fff858472da43ab4aaac6cfedfed88c6ecdcbb6adec64c9544e848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a97b2e566fff858472da43ab4aaac6cfedfed88c6ecdcbb6adec64c9544e848->enter($__internal_8a97b2e566fff858472da43ab4aaac6cfedfed88c6ecdcbb6adec64c9544e848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_8a97b2e566fff858472da43ab4aaac6cfedfed88c6ecdcbb6adec64c9544e848->leave($__internal_8a97b2e566fff858472da43ab4aaac6cfedfed88c6ecdcbb6adec64c9544e848_prof);

        
        $__internal_eda360bf4aac0096dd1b0e3c85faf2b973e744320d729c3e899668c252a1b727->leave($__internal_eda360bf4aac0096dd1b0e3c85faf2b973e744320d729c3e899668c252a1b727_prof);

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
