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
        $__internal_58907a30b34f33406eb333986275b6fd7552e459ba863ba53e4f2bd5832fbefd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58907a30b34f33406eb333986275b6fd7552e459ba863ba53e4f2bd5832fbefd->enter($__internal_58907a30b34f33406eb333986275b6fd7552e459ba863ba53e4f2bd5832fbefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_1a0e8a2b4496591f0909716e77e8140abf090f16d5206fe916d9b01cebb11501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a0e8a2b4496591f0909716e77e8140abf090f16d5206fe916d9b01cebb11501->enter($__internal_1a0e8a2b4496591f0909716e77e8140abf090f16d5206fe916d9b01cebb11501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_58907a30b34f33406eb333986275b6fd7552e459ba863ba53e4f2bd5832fbefd->leave($__internal_58907a30b34f33406eb333986275b6fd7552e459ba863ba53e4f2bd5832fbefd_prof);

        
        $__internal_1a0e8a2b4496591f0909716e77e8140abf090f16d5206fe916d9b01cebb11501->leave($__internal_1a0e8a2b4496591f0909716e77e8140abf090f16d5206fe916d9b01cebb11501_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_07bb6516cb320a08002dd863e0b5be6c273b2fa7f37669b7cea72d43a9b7ab46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07bb6516cb320a08002dd863e0b5be6c273b2fa7f37669b7cea72d43a9b7ab46->enter($__internal_07bb6516cb320a08002dd863e0b5be6c273b2fa7f37669b7cea72d43a9b7ab46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_577cf0a227e2eff77884aea12756b32f6fa180e3bf13fc65c64f9f6df3b0b0b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_577cf0a227e2eff77884aea12756b32f6fa180e3bf13fc65c64f9f6df3b0b0b3->enter($__internal_577cf0a227e2eff77884aea12756b32f6fa180e3bf13fc65c64f9f6df3b0b0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_577cf0a227e2eff77884aea12756b32f6fa180e3bf13fc65c64f9f6df3b0b0b3->leave($__internal_577cf0a227e2eff77884aea12756b32f6fa180e3bf13fc65c64f9f6df3b0b0b3_prof);

        
        $__internal_07bb6516cb320a08002dd863e0b5be6c273b2fa7f37669b7cea72d43a9b7ab46->leave($__internal_07bb6516cb320a08002dd863e0b5be6c273b2fa7f37669b7cea72d43a9b7ab46_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_693bdf203e9843739053614a7664b7afad94350c11a19944a4b9c0a37ca926df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_693bdf203e9843739053614a7664b7afad94350c11a19944a4b9c0a37ca926df->enter($__internal_693bdf203e9843739053614a7664b7afad94350c11a19944a4b9c0a37ca926df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_53b58336cf13606367fd2669429f285b1330b7a1d4fdd95f38962fd8eca07ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b58336cf13606367fd2669429f285b1330b7a1d4fdd95f38962fd8eca07ba2->enter($__internal_53b58336cf13606367fd2669429f285b1330b7a1d4fdd95f38962fd8eca07ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_53b58336cf13606367fd2669429f285b1330b7a1d4fdd95f38962fd8eca07ba2->leave($__internal_53b58336cf13606367fd2669429f285b1330b7a1d4fdd95f38962fd8eca07ba2_prof);

        
        $__internal_693bdf203e9843739053614a7664b7afad94350c11a19944a4b9c0a37ca926df->leave($__internal_693bdf203e9843739053614a7664b7afad94350c11a19944a4b9c0a37ca926df_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_57bcd43baa99a6c44686d06b10860305db4ba0fb7137bf0e6140b081b8f1eff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57bcd43baa99a6c44686d06b10860305db4ba0fb7137bf0e6140b081b8f1eff0->enter($__internal_57bcd43baa99a6c44686d06b10860305db4ba0fb7137bf0e6140b081b8f1eff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_c562357cf4874f3dba0e4f15ff23942f74cdf04019d43526c5a6d7bbb9cea3a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c562357cf4874f3dba0e4f15ff23942f74cdf04019d43526c5a6d7bbb9cea3a1->enter($__internal_c562357cf4874f3dba0e4f15ff23942f74cdf04019d43526c5a6d7bbb9cea3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_c562357cf4874f3dba0e4f15ff23942f74cdf04019d43526c5a6d7bbb9cea3a1->leave($__internal_c562357cf4874f3dba0e4f15ff23942f74cdf04019d43526c5a6d7bbb9cea3a1_prof);

        
        $__internal_57bcd43baa99a6c44686d06b10860305db4ba0fb7137bf0e6140b081b8f1eff0->leave($__internal_57bcd43baa99a6c44686d06b10860305db4ba0fb7137bf0e6140b081b8f1eff0_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_17027b5d1079c47e10741ffdc052d06a90961de715e1b4d3b6750cd0244173ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17027b5d1079c47e10741ffdc052d06a90961de715e1b4d3b6750cd0244173ee->enter($__internal_17027b5d1079c47e10741ffdc052d06a90961de715e1b4d3b6750cd0244173ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_89384b5eb7b8bdf76298072d7fb8af95f4c13f9d9520b1b778b2da62ff6e04e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89384b5eb7b8bdf76298072d7fb8af95f4c13f9d9520b1b778b2da62ff6e04e8->enter($__internal_89384b5eb7b8bdf76298072d7fb8af95f4c13f9d9520b1b778b2da62ff6e04e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_cc9fde270c6aab0aedf56edb2ee12de88ef8ed089a6db985ceac69bc26365a4d = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_4d488a546c97ba169d208c983ed60cc65b0172bf31c70d64efd5a681942bc8e1 = "{{") && ('' === $__internal_4d488a546c97ba169d208c983ed60cc65b0172bf31c70d64efd5a681942bc8e1 || 0 === strpos($__internal_cc9fde270c6aab0aedf56edb2ee12de88ef8ed089a6db985ceac69bc26365a4d, $__internal_4d488a546c97ba169d208c983ed60cc65b0172bf31c70d64efd5a681942bc8e1)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_df208d561bb4eac5e252b13e4ae867b418f608849bdffe91fe614ba87399e13b = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_e7b711751bcf8429758df97c979a795935a7051b0b5e7a83cb996a131db76c38 = "}}") && ('' === $__internal_e7b711751bcf8429758df97c979a795935a7051b0b5e7a83cb996a131db76c38 || $__internal_e7b711751bcf8429758df97c979a795935a7051b0b5e7a83cb996a131db76c38 === substr($__internal_df208d561bb4eac5e252b13e4ae867b418f608849bdffe91fe614ba87399e13b, -strlen($__internal_e7b711751bcf8429758df97c979a795935a7051b0b5e7a83cb996a131db76c38))));
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
        
        $__internal_89384b5eb7b8bdf76298072d7fb8af95f4c13f9d9520b1b778b2da62ff6e04e8->leave($__internal_89384b5eb7b8bdf76298072d7fb8af95f4c13f9d9520b1b778b2da62ff6e04e8_prof);

        
        $__internal_17027b5d1079c47e10741ffdc052d06a90961de715e1b4d3b6750cd0244173ee->leave($__internal_17027b5d1079c47e10741ffdc052d06a90961de715e1b4d3b6750cd0244173ee_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_a026c702d2f82489e0a3499eab221af95930de5babbd020ad3fa32b64470954b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a026c702d2f82489e0a3499eab221af95930de5babbd020ad3fa32b64470954b->enter($__internal_a026c702d2f82489e0a3499eab221af95930de5babbd020ad3fa32b64470954b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_e406187b83e3f87b04019ece6afddf6db71d06c6ec3e18e97340e343d17b3787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e406187b83e3f87b04019ece6afddf6db71d06c6ec3e18e97340e343d17b3787->enter($__internal_e406187b83e3f87b04019ece6afddf6db71d06c6ec3e18e97340e343d17b3787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_e406187b83e3f87b04019ece6afddf6db71d06c6ec3e18e97340e343d17b3787->leave($__internal_e406187b83e3f87b04019ece6afddf6db71d06c6ec3e18e97340e343d17b3787_prof);

        
        $__internal_a026c702d2f82489e0a3499eab221af95930de5babbd020ad3fa32b64470954b->leave($__internal_a026c702d2f82489e0a3499eab221af95930de5babbd020ad3fa32b64470954b_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_3222cd6644d422536349337d88d6b9b51908c3d1f7c099fde0dfc2b5657fbbcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3222cd6644d422536349337d88d6b9b51908c3d1f7c099fde0dfc2b5657fbbcf->enter($__internal_3222cd6644d422536349337d88d6b9b51908c3d1f7c099fde0dfc2b5657fbbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_fe524450240bb22d416bee5cdf8cd7f90f0fee7726244768ae3576a91991e662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe524450240bb22d416bee5cdf8cd7f90f0fee7726244768ae3576a91991e662->enter($__internal_fe524450240bb22d416bee5cdf8cd7f90f0fee7726244768ae3576a91991e662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_fe524450240bb22d416bee5cdf8cd7f90f0fee7726244768ae3576a91991e662->leave($__internal_fe524450240bb22d416bee5cdf8cd7f90f0fee7726244768ae3576a91991e662_prof);

        
        $__internal_3222cd6644d422536349337d88d6b9b51908c3d1f7c099fde0dfc2b5657fbbcf->leave($__internal_3222cd6644d422536349337d88d6b9b51908c3d1f7c099fde0dfc2b5657fbbcf_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_5620836c0e936c307763bb103c3febe6a7a06b453870075b4729646cf28e907e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5620836c0e936c307763bb103c3febe6a7a06b453870075b4729646cf28e907e->enter($__internal_5620836c0e936c307763bb103c3febe6a7a06b453870075b4729646cf28e907e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_0591cbf821153c1b96da2c51fa32e055416a33ed55c4be6a62106573c6cae4b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0591cbf821153c1b96da2c51fa32e055416a33ed55c4be6a62106573c6cae4b2->enter($__internal_0591cbf821153c1b96da2c51fa32e055416a33ed55c4be6a62106573c6cae4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_0591cbf821153c1b96da2c51fa32e055416a33ed55c4be6a62106573c6cae4b2->leave($__internal_0591cbf821153c1b96da2c51fa32e055416a33ed55c4be6a62106573c6cae4b2_prof);

        
        $__internal_5620836c0e936c307763bb103c3febe6a7a06b453870075b4729646cf28e907e->leave($__internal_5620836c0e936c307763bb103c3febe6a7a06b453870075b4729646cf28e907e_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_ed5bef20d15de89c53db2ae37800ce8392f63c40bef15ed43b3e6db0aa3d1ac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed5bef20d15de89c53db2ae37800ce8392f63c40bef15ed43b3e6db0aa3d1ac0->enter($__internal_ed5bef20d15de89c53db2ae37800ce8392f63c40bef15ed43b3e6db0aa3d1ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_5ac18ddb32d8a3436378d49b5db8e7408f49b4a4b308ac790478343b68911165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac18ddb32d8a3436378d49b5db8e7408f49b4a4b308ac790478343b68911165->enter($__internal_5ac18ddb32d8a3436378d49b5db8e7408f49b4a4b308ac790478343b68911165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_5ac18ddb32d8a3436378d49b5db8e7408f49b4a4b308ac790478343b68911165->leave($__internal_5ac18ddb32d8a3436378d49b5db8e7408f49b4a4b308ac790478343b68911165_prof);

        
        $__internal_ed5bef20d15de89c53db2ae37800ce8392f63c40bef15ed43b3e6db0aa3d1ac0->leave($__internal_ed5bef20d15de89c53db2ae37800ce8392f63c40bef15ed43b3e6db0aa3d1ac0_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_87bb7f3325573ac3ba66473c53ccd420303e04c8942d9c58beb11caa4887f08a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87bb7f3325573ac3ba66473c53ccd420303e04c8942d9c58beb11caa4887f08a->enter($__internal_87bb7f3325573ac3ba66473c53ccd420303e04c8942d9c58beb11caa4887f08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_161eeaaa50fdb3442ddee9c2775c2891fcd06890869997c152f38d4c47fc90a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161eeaaa50fdb3442ddee9c2775c2891fcd06890869997c152f38d4c47fc90a6->enter($__internal_161eeaaa50fdb3442ddee9c2775c2891fcd06890869997c152f38d4c47fc90a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_161eeaaa50fdb3442ddee9c2775c2891fcd06890869997c152f38d4c47fc90a6->leave($__internal_161eeaaa50fdb3442ddee9c2775c2891fcd06890869997c152f38d4c47fc90a6_prof);

        
        $__internal_87bb7f3325573ac3ba66473c53ccd420303e04c8942d9c58beb11caa4887f08a->leave($__internal_87bb7f3325573ac3ba66473c53ccd420303e04c8942d9c58beb11caa4887f08a_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_20f492e48582755e98a9354621fd0a476a62904d7fa3ae9f5a040842913d473b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20f492e48582755e98a9354621fd0a476a62904d7fa3ae9f5a040842913d473b->enter($__internal_20f492e48582755e98a9354621fd0a476a62904d7fa3ae9f5a040842913d473b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_d9c85200548ff605539371aaea1a6effdefe92af5d8aef493e6c3cc5719419a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c85200548ff605539371aaea1a6effdefe92af5d8aef493e6c3cc5719419a1->enter($__internal_d9c85200548ff605539371aaea1a6effdefe92af5d8aef493e6c3cc5719419a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_d9c85200548ff605539371aaea1a6effdefe92af5d8aef493e6c3cc5719419a1->leave($__internal_d9c85200548ff605539371aaea1a6effdefe92af5d8aef493e6c3cc5719419a1_prof);

        
        $__internal_20f492e48582755e98a9354621fd0a476a62904d7fa3ae9f5a040842913d473b->leave($__internal_20f492e48582755e98a9354621fd0a476a62904d7fa3ae9f5a040842913d473b_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_0eaa344355a10d49013983420af9fc08e9c4f3c74d999d9499b39b9215b7f297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eaa344355a10d49013983420af9fc08e9c4f3c74d999d9499b39b9215b7f297->enter($__internal_0eaa344355a10d49013983420af9fc08e9c4f3c74d999d9499b39b9215b7f297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_0b85ceb592d7fe62c77f998851c2f423b66691597dff3dec6295c68abd76ee9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b85ceb592d7fe62c77f998851c2f423b66691597dff3dec6295c68abd76ee9a->enter($__internal_0b85ceb592d7fe62c77f998851c2f423b66691597dff3dec6295c68abd76ee9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_0b85ceb592d7fe62c77f998851c2f423b66691597dff3dec6295c68abd76ee9a->leave($__internal_0b85ceb592d7fe62c77f998851c2f423b66691597dff3dec6295c68abd76ee9a_prof);

        
        $__internal_0eaa344355a10d49013983420af9fc08e9c4f3c74d999d9499b39b9215b7f297->leave($__internal_0eaa344355a10d49013983420af9fc08e9c4f3c74d999d9499b39b9215b7f297_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_d4b1d7405aa8a2bcd5055a55f81c0d49801788bbc83733d852791aae8e33519e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b1d7405aa8a2bcd5055a55f81c0d49801788bbc83733d852791aae8e33519e->enter($__internal_d4b1d7405aa8a2bcd5055a55f81c0d49801788bbc83733d852791aae8e33519e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_bce4bdac7c3721b41fdfe392610aa5fd155ce940a4600dea039cbbb358a9c027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce4bdac7c3721b41fdfe392610aa5fd155ce940a4600dea039cbbb358a9c027->enter($__internal_bce4bdac7c3721b41fdfe392610aa5fd155ce940a4600dea039cbbb358a9c027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_bce4bdac7c3721b41fdfe392610aa5fd155ce940a4600dea039cbbb358a9c027->leave($__internal_bce4bdac7c3721b41fdfe392610aa5fd155ce940a4600dea039cbbb358a9c027_prof);

        
        $__internal_d4b1d7405aa8a2bcd5055a55f81c0d49801788bbc83733d852791aae8e33519e->leave($__internal_d4b1d7405aa8a2bcd5055a55f81c0d49801788bbc83733d852791aae8e33519e_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_4187b4223a494add351e1b370469385a97eb6b128ba733cf84447383ae9fb745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4187b4223a494add351e1b370469385a97eb6b128ba733cf84447383ae9fb745->enter($__internal_4187b4223a494add351e1b370469385a97eb6b128ba733cf84447383ae9fb745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_b182df1c45bb6b53a4471e197276f0b99d7b287e107b211238b9fffe35a8d6d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b182df1c45bb6b53a4471e197276f0b99d7b287e107b211238b9fffe35a8d6d6->enter($__internal_b182df1c45bb6b53a4471e197276f0b99d7b287e107b211238b9fffe35a8d6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_b182df1c45bb6b53a4471e197276f0b99d7b287e107b211238b9fffe35a8d6d6->leave($__internal_b182df1c45bb6b53a4471e197276f0b99d7b287e107b211238b9fffe35a8d6d6_prof);

        
        $__internal_4187b4223a494add351e1b370469385a97eb6b128ba733cf84447383ae9fb745->leave($__internal_4187b4223a494add351e1b370469385a97eb6b128ba733cf84447383ae9fb745_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_fd0d9853c511b2da0b463e30ef5c3269919a181ec4233872d395ea9ec909277e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd0d9853c511b2da0b463e30ef5c3269919a181ec4233872d395ea9ec909277e->enter($__internal_fd0d9853c511b2da0b463e30ef5c3269919a181ec4233872d395ea9ec909277e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_059c720db25bd834c70e9dad7c0f7cf4a678e372611409f064264a3482aeced8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_059c720db25bd834c70e9dad7c0f7cf4a678e372611409f064264a3482aeced8->enter($__internal_059c720db25bd834c70e9dad7c0f7cf4a678e372611409f064264a3482aeced8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_059c720db25bd834c70e9dad7c0f7cf4a678e372611409f064264a3482aeced8->leave($__internal_059c720db25bd834c70e9dad7c0f7cf4a678e372611409f064264a3482aeced8_prof);

        
        $__internal_fd0d9853c511b2da0b463e30ef5c3269919a181ec4233872d395ea9ec909277e->leave($__internal_fd0d9853c511b2da0b463e30ef5c3269919a181ec4233872d395ea9ec909277e_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_d486bc947827c5d828d5c28c01a18d5694fe2ed14fb42679d74714625feccb34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d486bc947827c5d828d5c28c01a18d5694fe2ed14fb42679d74714625feccb34->enter($__internal_d486bc947827c5d828d5c28c01a18d5694fe2ed14fb42679d74714625feccb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_f5f9ea55faa3b0808c78a3908c92c8028bbfc384a5bb392ebbc5afe39f9476d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f9ea55faa3b0808c78a3908c92c8028bbfc384a5bb392ebbc5afe39f9476d7->enter($__internal_f5f9ea55faa3b0808c78a3908c92c8028bbfc384a5bb392ebbc5afe39f9476d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_f5f9ea55faa3b0808c78a3908c92c8028bbfc384a5bb392ebbc5afe39f9476d7->leave($__internal_f5f9ea55faa3b0808c78a3908c92c8028bbfc384a5bb392ebbc5afe39f9476d7_prof);

        
        $__internal_d486bc947827c5d828d5c28c01a18d5694fe2ed14fb42679d74714625feccb34->leave($__internal_d486bc947827c5d828d5c28c01a18d5694fe2ed14fb42679d74714625feccb34_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_3fbd0381832a3f747589568b18cc424b12a2569be89cbf1f7b18581e90baab06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fbd0381832a3f747589568b18cc424b12a2569be89cbf1f7b18581e90baab06->enter($__internal_3fbd0381832a3f747589568b18cc424b12a2569be89cbf1f7b18581e90baab06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_982821b1f5597d57b524af5f8166e7bd7e84b6b166003a96f5b49c320226b708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982821b1f5597d57b524af5f8166e7bd7e84b6b166003a96f5b49c320226b708->enter($__internal_982821b1f5597d57b524af5f8166e7bd7e84b6b166003a96f5b49c320226b708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_982821b1f5597d57b524af5f8166e7bd7e84b6b166003a96f5b49c320226b708->leave($__internal_982821b1f5597d57b524af5f8166e7bd7e84b6b166003a96f5b49c320226b708_prof);

        
        $__internal_3fbd0381832a3f747589568b18cc424b12a2569be89cbf1f7b18581e90baab06->leave($__internal_3fbd0381832a3f747589568b18cc424b12a2569be89cbf1f7b18581e90baab06_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_37380cc61946b90869f9dd94e182054e3788d16e5036a44e0bd15e80d321094a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37380cc61946b90869f9dd94e182054e3788d16e5036a44e0bd15e80d321094a->enter($__internal_37380cc61946b90869f9dd94e182054e3788d16e5036a44e0bd15e80d321094a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_9ef949a3b7d4276329e4cc585205cec94c6abcce4d29af46d4278778599ed277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef949a3b7d4276329e4cc585205cec94c6abcce4d29af46d4278778599ed277->enter($__internal_9ef949a3b7d4276329e4cc585205cec94c6abcce4d29af46d4278778599ed277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_9ef949a3b7d4276329e4cc585205cec94c6abcce4d29af46d4278778599ed277->leave($__internal_9ef949a3b7d4276329e4cc585205cec94c6abcce4d29af46d4278778599ed277_prof);

        
        $__internal_37380cc61946b90869f9dd94e182054e3788d16e5036a44e0bd15e80d321094a->leave($__internal_37380cc61946b90869f9dd94e182054e3788d16e5036a44e0bd15e80d321094a_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_f86ce66927e7e5545eb5688b5e686e577aadc308469ab68373a85aa84d2a6fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f86ce66927e7e5545eb5688b5e686e577aadc308469ab68373a85aa84d2a6fc5->enter($__internal_f86ce66927e7e5545eb5688b5e686e577aadc308469ab68373a85aa84d2a6fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_9e36fe71169ddd169179fbba23a3ec9233c52e0086634bf2d8ad83bbb631cfd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e36fe71169ddd169179fbba23a3ec9233c52e0086634bf2d8ad83bbb631cfd6->enter($__internal_9e36fe71169ddd169179fbba23a3ec9233c52e0086634bf2d8ad83bbb631cfd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_9e36fe71169ddd169179fbba23a3ec9233c52e0086634bf2d8ad83bbb631cfd6->leave($__internal_9e36fe71169ddd169179fbba23a3ec9233c52e0086634bf2d8ad83bbb631cfd6_prof);

        
        $__internal_f86ce66927e7e5545eb5688b5e686e577aadc308469ab68373a85aa84d2a6fc5->leave($__internal_f86ce66927e7e5545eb5688b5e686e577aadc308469ab68373a85aa84d2a6fc5_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_61e8e5ab05ea4d958466f81055c7615f1d783564ac4244caf87d4052c93dffcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e8e5ab05ea4d958466f81055c7615f1d783564ac4244caf87d4052c93dffcf->enter($__internal_61e8e5ab05ea4d958466f81055c7615f1d783564ac4244caf87d4052c93dffcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_5eb754dbfdc8a50ffc3b74f3fd582245afabe443caf446e2022a0aa53bb94a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb754dbfdc8a50ffc3b74f3fd582245afabe443caf446e2022a0aa53bb94a21->enter($__internal_5eb754dbfdc8a50ffc3b74f3fd582245afabe443caf446e2022a0aa53bb94a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_5eb754dbfdc8a50ffc3b74f3fd582245afabe443caf446e2022a0aa53bb94a21->leave($__internal_5eb754dbfdc8a50ffc3b74f3fd582245afabe443caf446e2022a0aa53bb94a21_prof);

        
        $__internal_61e8e5ab05ea4d958466f81055c7615f1d783564ac4244caf87d4052c93dffcf->leave($__internal_61e8e5ab05ea4d958466f81055c7615f1d783564ac4244caf87d4052c93dffcf_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_64440288e127bbc960499a34edcab06432be2875489c4fada8aa0121cd020c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64440288e127bbc960499a34edcab06432be2875489c4fada8aa0121cd020c99->enter($__internal_64440288e127bbc960499a34edcab06432be2875489c4fada8aa0121cd020c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_0ea7cc94aafe1fa111f7f72f98e69b4d294c4e9810e47da89acae02d39ae87c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ea7cc94aafe1fa111f7f72f98e69b4d294c4e9810e47da89acae02d39ae87c9->enter($__internal_0ea7cc94aafe1fa111f7f72f98e69b4d294c4e9810e47da89acae02d39ae87c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_0ea7cc94aafe1fa111f7f72f98e69b4d294c4e9810e47da89acae02d39ae87c9->leave($__internal_0ea7cc94aafe1fa111f7f72f98e69b4d294c4e9810e47da89acae02d39ae87c9_prof);

        
        $__internal_64440288e127bbc960499a34edcab06432be2875489c4fada8aa0121cd020c99->leave($__internal_64440288e127bbc960499a34edcab06432be2875489c4fada8aa0121cd020c99_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_d181eb4819e9303843bacb60dcff7ad3fd8184c027c3f0ff0b9c7bdc647d016d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d181eb4819e9303843bacb60dcff7ad3fd8184c027c3f0ff0b9c7bdc647d016d->enter($__internal_d181eb4819e9303843bacb60dcff7ad3fd8184c027c3f0ff0b9c7bdc647d016d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_63541e1dbce5cc72fba26b8b712dc94860e4578581453437cc43bc7cfdab4be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63541e1dbce5cc72fba26b8b712dc94860e4578581453437cc43bc7cfdab4be3->enter($__internal_63541e1dbce5cc72fba26b8b712dc94860e4578581453437cc43bc7cfdab4be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_63541e1dbce5cc72fba26b8b712dc94860e4578581453437cc43bc7cfdab4be3->leave($__internal_63541e1dbce5cc72fba26b8b712dc94860e4578581453437cc43bc7cfdab4be3_prof);

        
        $__internal_d181eb4819e9303843bacb60dcff7ad3fd8184c027c3f0ff0b9c7bdc647d016d->leave($__internal_d181eb4819e9303843bacb60dcff7ad3fd8184c027c3f0ff0b9c7bdc647d016d_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_16226fbd3fd6f86af75f2e56f1b023e12665822a5fb40a30ee19c8af6cf0e206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16226fbd3fd6f86af75f2e56f1b023e12665822a5fb40a30ee19c8af6cf0e206->enter($__internal_16226fbd3fd6f86af75f2e56f1b023e12665822a5fb40a30ee19c8af6cf0e206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_cec607479fa611d432e9c612f61b70a0d0e657ab359787f6d1ca31ddb98ab79d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec607479fa611d432e9c612f61b70a0d0e657ab359787f6d1ca31ddb98ab79d->enter($__internal_cec607479fa611d432e9c612f61b70a0d0e657ab359787f6d1ca31ddb98ab79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_cec607479fa611d432e9c612f61b70a0d0e657ab359787f6d1ca31ddb98ab79d->leave($__internal_cec607479fa611d432e9c612f61b70a0d0e657ab359787f6d1ca31ddb98ab79d_prof);

        
        $__internal_16226fbd3fd6f86af75f2e56f1b023e12665822a5fb40a30ee19c8af6cf0e206->leave($__internal_16226fbd3fd6f86af75f2e56f1b023e12665822a5fb40a30ee19c8af6cf0e206_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_e435a7f1303a6bc085f9b50a23aecbecd50fda3272545c71012585e9b84f5ba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e435a7f1303a6bc085f9b50a23aecbecd50fda3272545c71012585e9b84f5ba8->enter($__internal_e435a7f1303a6bc085f9b50a23aecbecd50fda3272545c71012585e9b84f5ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_0b6b1f0c046081210764fe9c6128055a52b6f0738258371a1abc1fd3d8b6d75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6b1f0c046081210764fe9c6128055a52b6f0738258371a1abc1fd3d8b6d75d->enter($__internal_0b6b1f0c046081210764fe9c6128055a52b6f0738258371a1abc1fd3d8b6d75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0b6b1f0c046081210764fe9c6128055a52b6f0738258371a1abc1fd3d8b6d75d->leave($__internal_0b6b1f0c046081210764fe9c6128055a52b6f0738258371a1abc1fd3d8b6d75d_prof);

        
        $__internal_e435a7f1303a6bc085f9b50a23aecbecd50fda3272545c71012585e9b84f5ba8->leave($__internal_e435a7f1303a6bc085f9b50a23aecbecd50fda3272545c71012585e9b84f5ba8_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_ff6acb2243f06a1148aee0d548ca37ca11e4abe23fb15f5415190ad0db4d1027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff6acb2243f06a1148aee0d548ca37ca11e4abe23fb15f5415190ad0db4d1027->enter($__internal_ff6acb2243f06a1148aee0d548ca37ca11e4abe23fb15f5415190ad0db4d1027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_77387d0407df1903753b613b26e1e1658a6add98aa78594d80cf9743f5db0c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77387d0407df1903753b613b26e1e1658a6add98aa78594d80cf9743f5db0c53->enter($__internal_77387d0407df1903753b613b26e1e1658a6add98aa78594d80cf9743f5db0c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_77387d0407df1903753b613b26e1e1658a6add98aa78594d80cf9743f5db0c53->leave($__internal_77387d0407df1903753b613b26e1e1658a6add98aa78594d80cf9743f5db0c53_prof);

        
        $__internal_ff6acb2243f06a1148aee0d548ca37ca11e4abe23fb15f5415190ad0db4d1027->leave($__internal_ff6acb2243f06a1148aee0d548ca37ca11e4abe23fb15f5415190ad0db4d1027_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_0496a0c9de580533d5aee7165408a13c434cc911ffb269bc5b8ddef85d3b6718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0496a0c9de580533d5aee7165408a13c434cc911ffb269bc5b8ddef85d3b6718->enter($__internal_0496a0c9de580533d5aee7165408a13c434cc911ffb269bc5b8ddef85d3b6718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_721a86ee54229b1e425bdb653631985d3b77acc404b8c6cef5d99b87710b901b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_721a86ee54229b1e425bdb653631985d3b77acc404b8c6cef5d99b87710b901b->enter($__internal_721a86ee54229b1e425bdb653631985d3b77acc404b8c6cef5d99b87710b901b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_721a86ee54229b1e425bdb653631985d3b77acc404b8c6cef5d99b87710b901b->leave($__internal_721a86ee54229b1e425bdb653631985d3b77acc404b8c6cef5d99b87710b901b_prof);

        
        $__internal_0496a0c9de580533d5aee7165408a13c434cc911ffb269bc5b8ddef85d3b6718->leave($__internal_0496a0c9de580533d5aee7165408a13c434cc911ffb269bc5b8ddef85d3b6718_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_03bb38ad78d1b1cbb8593186ecac78965b19a423203d0a0b24ec4425b9f5dc16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03bb38ad78d1b1cbb8593186ecac78965b19a423203d0a0b24ec4425b9f5dc16->enter($__internal_03bb38ad78d1b1cbb8593186ecac78965b19a423203d0a0b24ec4425b9f5dc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_40d42054486979f218203594ed5b80bfdbef5354bc6abef88c3d7860c317faf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d42054486979f218203594ed5b80bfdbef5354bc6abef88c3d7860c317faf2->enter($__internal_40d42054486979f218203594ed5b80bfdbef5354bc6abef88c3d7860c317faf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_40d42054486979f218203594ed5b80bfdbef5354bc6abef88c3d7860c317faf2->leave($__internal_40d42054486979f218203594ed5b80bfdbef5354bc6abef88c3d7860c317faf2_prof);

        
        $__internal_03bb38ad78d1b1cbb8593186ecac78965b19a423203d0a0b24ec4425b9f5dc16->leave($__internal_03bb38ad78d1b1cbb8593186ecac78965b19a423203d0a0b24ec4425b9f5dc16_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_daf7445b52a96c344e106a1cc2ae9675aa5aa0ece0af3f992dd0f543a5e5ddf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf7445b52a96c344e106a1cc2ae9675aa5aa0ece0af3f992dd0f543a5e5ddf6->enter($__internal_daf7445b52a96c344e106a1cc2ae9675aa5aa0ece0af3f992dd0f543a5e5ddf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_cd76550a1374126de327ad6ab06fda4178acd6b873238b47dbb0c0f8dd306338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd76550a1374126de327ad6ab06fda4178acd6b873238b47dbb0c0f8dd306338->enter($__internal_cd76550a1374126de327ad6ab06fda4178acd6b873238b47dbb0c0f8dd306338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_cd76550a1374126de327ad6ab06fda4178acd6b873238b47dbb0c0f8dd306338->leave($__internal_cd76550a1374126de327ad6ab06fda4178acd6b873238b47dbb0c0f8dd306338_prof);

        
        $__internal_daf7445b52a96c344e106a1cc2ae9675aa5aa0ece0af3f992dd0f543a5e5ddf6->leave($__internal_daf7445b52a96c344e106a1cc2ae9675aa5aa0ece0af3f992dd0f543a5e5ddf6_prof);

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
