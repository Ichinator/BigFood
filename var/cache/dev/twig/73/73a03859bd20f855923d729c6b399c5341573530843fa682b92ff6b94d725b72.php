<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_b08f5519084a116cf64377913132ef6e8dc04fc0883a4b6a8774bda399704c72 extends Twig_Template
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
        $__internal_315cdf3729b29a24a29cce2b5472c4f632f0bbe37feb824ca4dc62a67b3ae1ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_315cdf3729b29a24a29cce2b5472c4f632f0bbe37feb824ca4dc62a67b3ae1ab->enter($__internal_315cdf3729b29a24a29cce2b5472c4f632f0bbe37feb824ca4dc62a67b3ae1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_1c2e4a4b063a016a5c9a8d3aa0ba85215596f3cae3d411166b7b80fc5a76e3a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2e4a4b063a016a5c9a8d3aa0ba85215596f3cae3d411166b7b80fc5a76e3a1->enter($__internal_1c2e4a4b063a016a5c9a8d3aa0ba85215596f3cae3d411166b7b80fc5a76e3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_315cdf3729b29a24a29cce2b5472c4f632f0bbe37feb824ca4dc62a67b3ae1ab->leave($__internal_315cdf3729b29a24a29cce2b5472c4f632f0bbe37feb824ca4dc62a67b3ae1ab_prof);

        
        $__internal_1c2e4a4b063a016a5c9a8d3aa0ba85215596f3cae3d411166b7b80fc5a76e3a1->leave($__internal_1c2e4a4b063a016a5c9a8d3aa0ba85215596f3cae3d411166b7b80fc5a76e3a1_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_958f8f330a7d8f8d2c99719df6ef2efb2066b290469d09c82bc19bcf85a26fbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_958f8f330a7d8f8d2c99719df6ef2efb2066b290469d09c82bc19bcf85a26fbe->enter($__internal_958f8f330a7d8f8d2c99719df6ef2efb2066b290469d09c82bc19bcf85a26fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_085aeef7cf46e311de1e257a8d898c040c5c0c726f8458c43670596dcbf175f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085aeef7cf46e311de1e257a8d898c040c5c0c726f8458c43670596dcbf175f4->enter($__internal_085aeef7cf46e311de1e257a8d898c040c5c0c726f8458c43670596dcbf175f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_085aeef7cf46e311de1e257a8d898c040c5c0c726f8458c43670596dcbf175f4->leave($__internal_085aeef7cf46e311de1e257a8d898c040c5c0c726f8458c43670596dcbf175f4_prof);

        
        $__internal_958f8f330a7d8f8d2c99719df6ef2efb2066b290469d09c82bc19bcf85a26fbe->leave($__internal_958f8f330a7d8f8d2c99719df6ef2efb2066b290469d09c82bc19bcf85a26fbe_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_4d03db456cd8a8603caaa8f164051f6a5be3c4d6352eabf4a7449748b7bcce18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d03db456cd8a8603caaa8f164051f6a5be3c4d6352eabf4a7449748b7bcce18->enter($__internal_4d03db456cd8a8603caaa8f164051f6a5be3c4d6352eabf4a7449748b7bcce18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_6d10428cfd2624f15ac185f1bb9459604bf47bad2d8d71bb7df31976c402894d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d10428cfd2624f15ac185f1bb9459604bf47bad2d8d71bb7df31976c402894d->enter($__internal_6d10428cfd2624f15ac185f1bb9459604bf47bad2d8d71bb7df31976c402894d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_6d10428cfd2624f15ac185f1bb9459604bf47bad2d8d71bb7df31976c402894d->leave($__internal_6d10428cfd2624f15ac185f1bb9459604bf47bad2d8d71bb7df31976c402894d_prof);

        
        $__internal_4d03db456cd8a8603caaa8f164051f6a5be3c4d6352eabf4a7449748b7bcce18->leave($__internal_4d03db456cd8a8603caaa8f164051f6a5be3c4d6352eabf4a7449748b7bcce18_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_62887349a2b6ae52144cf6f3fdaaa35bc14b8b3c70e950c64bc0485e08035666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62887349a2b6ae52144cf6f3fdaaa35bc14b8b3c70e950c64bc0485e08035666->enter($__internal_62887349a2b6ae52144cf6f3fdaaa35bc14b8b3c70e950c64bc0485e08035666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_e75b8ce331af80e39ba50284f4162d108c17ef1956ab20fe280caf98db9896dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75b8ce331af80e39ba50284f4162d108c17ef1956ab20fe280caf98db9896dc->enter($__internal_e75b8ce331af80e39ba50284f4162d108c17ef1956ab20fe280caf98db9896dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_e75b8ce331af80e39ba50284f4162d108c17ef1956ab20fe280caf98db9896dc->leave($__internal_e75b8ce331af80e39ba50284f4162d108c17ef1956ab20fe280caf98db9896dc_prof);

        
        $__internal_62887349a2b6ae52144cf6f3fdaaa35bc14b8b3c70e950c64bc0485e08035666->leave($__internal_62887349a2b6ae52144cf6f3fdaaa35bc14b8b3c70e950c64bc0485e08035666_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_627faf6036b3635399124a22944b311b69e7fd0fbbd8a70e7f2e052790e2a785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_627faf6036b3635399124a22944b311b69e7fd0fbbd8a70e7f2e052790e2a785->enter($__internal_627faf6036b3635399124a22944b311b69e7fd0fbbd8a70e7f2e052790e2a785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_8a57d085cf2fad63008f31633ee9bc2e8017055c55a25c233ce5a1be1ac20638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a57d085cf2fad63008f31633ee9bc2e8017055c55a25c233ce5a1be1ac20638->enter($__internal_8a57d085cf2fad63008f31633ee9bc2e8017055c55a25c233ce5a1be1ac20638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_8a57d085cf2fad63008f31633ee9bc2e8017055c55a25c233ce5a1be1ac20638->leave($__internal_8a57d085cf2fad63008f31633ee9bc2e8017055c55a25c233ce5a1be1ac20638_prof);

        
        $__internal_627faf6036b3635399124a22944b311b69e7fd0fbbd8a70e7f2e052790e2a785->leave($__internal_627faf6036b3635399124a22944b311b69e7fd0fbbd8a70e7f2e052790e2a785_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_32bbe7eaa7ffc4b80242ac79607a998ee0d93cba02ba00bbbbfd9958df6641a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32bbe7eaa7ffc4b80242ac79607a998ee0d93cba02ba00bbbbfd9958df6641a9->enter($__internal_32bbe7eaa7ffc4b80242ac79607a998ee0d93cba02ba00bbbbfd9958df6641a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_a6e7945d81dd6df1d273e2f592e21448c065017ec0187f5dc7d0008bb2d28703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e7945d81dd6df1d273e2f592e21448c065017ec0187f5dc7d0008bb2d28703->enter($__internal_a6e7945d81dd6df1d273e2f592e21448c065017ec0187f5dc7d0008bb2d28703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_a6e7945d81dd6df1d273e2f592e21448c065017ec0187f5dc7d0008bb2d28703->leave($__internal_a6e7945d81dd6df1d273e2f592e21448c065017ec0187f5dc7d0008bb2d28703_prof);

        
        $__internal_32bbe7eaa7ffc4b80242ac79607a998ee0d93cba02ba00bbbbfd9958df6641a9->leave($__internal_32bbe7eaa7ffc4b80242ac79607a998ee0d93cba02ba00bbbbfd9958df6641a9_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_fda2946c7a9d6bac4ab694b8d6a713c2b96a531a9ba3ca6f66327c58586ae864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fda2946c7a9d6bac4ab694b8d6a713c2b96a531a9ba3ca6f66327c58586ae864->enter($__internal_fda2946c7a9d6bac4ab694b8d6a713c2b96a531a9ba3ca6f66327c58586ae864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_0dda8db8215f4973e2f7ac24228d7e2f86f19dac1f3d8ca9128b6c8014d9f3a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dda8db8215f4973e2f7ac24228d7e2f86f19dac1f3d8ca9128b6c8014d9f3a8->enter($__internal_0dda8db8215f4973e2f7ac24228d7e2f86f19dac1f3d8ca9128b6c8014d9f3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_0dda8db8215f4973e2f7ac24228d7e2f86f19dac1f3d8ca9128b6c8014d9f3a8->leave($__internal_0dda8db8215f4973e2f7ac24228d7e2f86f19dac1f3d8ca9128b6c8014d9f3a8_prof);

        
        $__internal_fda2946c7a9d6bac4ab694b8d6a713c2b96a531a9ba3ca6f66327c58586ae864->leave($__internal_fda2946c7a9d6bac4ab694b8d6a713c2b96a531a9ba3ca6f66327c58586ae864_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_fe8b3ea617f656f048cfc4a9fab63f46932c171fa6e61466fe935e0089be6b5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe8b3ea617f656f048cfc4a9fab63f46932c171fa6e61466fe935e0089be6b5b->enter($__internal_fe8b3ea617f656f048cfc4a9fab63f46932c171fa6e61466fe935e0089be6b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_bb78a28aaf1564bc1c4a5c1d440318890d19a7cc0763bd53a7260048626546b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb78a28aaf1564bc1c4a5c1d440318890d19a7cc0763bd53a7260048626546b8->enter($__internal_bb78a28aaf1564bc1c4a5c1d440318890d19a7cc0763bd53a7260048626546b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_bb78a28aaf1564bc1c4a5c1d440318890d19a7cc0763bd53a7260048626546b8->leave($__internal_bb78a28aaf1564bc1c4a5c1d440318890d19a7cc0763bd53a7260048626546b8_prof);

        
        $__internal_fe8b3ea617f656f048cfc4a9fab63f46932c171fa6e61466fe935e0089be6b5b->leave($__internal_fe8b3ea617f656f048cfc4a9fab63f46932c171fa6e61466fe935e0089be6b5b_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_d58333aeba2140bc9cd5bc6c7d7e568f1ad3e9c13feb47720eb54efddcbcd970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d58333aeba2140bc9cd5bc6c7d7e568f1ad3e9c13feb47720eb54efddcbcd970->enter($__internal_d58333aeba2140bc9cd5bc6c7d7e568f1ad3e9c13feb47720eb54efddcbcd970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_d8c545ada91271a7d950fa4dd4df8d9644c86086ebf3fe915c4121ffd0b47f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c545ada91271a7d950fa4dd4df8d9644c86086ebf3fe915c4121ffd0b47f84->enter($__internal_d8c545ada91271a7d950fa4dd4df8d9644c86086ebf3fe915c4121ffd0b47f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_d8c545ada91271a7d950fa4dd4df8d9644c86086ebf3fe915c4121ffd0b47f84->leave($__internal_d8c545ada91271a7d950fa4dd4df8d9644c86086ebf3fe915c4121ffd0b47f84_prof);

        
        $__internal_d58333aeba2140bc9cd5bc6c7d7e568f1ad3e9c13feb47720eb54efddcbcd970->leave($__internal_d58333aeba2140bc9cd5bc6c7d7e568f1ad3e9c13feb47720eb54efddcbcd970_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_13c1364a6e3d95c6407ba7effea9427ee8bf9da03253a3780a521ab977f33b3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13c1364a6e3d95c6407ba7effea9427ee8bf9da03253a3780a521ab977f33b3b->enter($__internal_13c1364a6e3d95c6407ba7effea9427ee8bf9da03253a3780a521ab977f33b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_d7c2ee47906a043a0d9dadd3806df6d68699d8d609dfa464f1d2aa2c3fb60eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c2ee47906a043a0d9dadd3806df6d68699d8d609dfa464f1d2aa2c3fb60eda->enter($__internal_d7c2ee47906a043a0d9dadd3806df6d68699d8d609dfa464f1d2aa2c3fb60eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_d7c2ee47906a043a0d9dadd3806df6d68699d8d609dfa464f1d2aa2c3fb60eda->leave($__internal_d7c2ee47906a043a0d9dadd3806df6d68699d8d609dfa464f1d2aa2c3fb60eda_prof);

        
        $__internal_13c1364a6e3d95c6407ba7effea9427ee8bf9da03253a3780a521ab977f33b3b->leave($__internal_13c1364a6e3d95c6407ba7effea9427ee8bf9da03253a3780a521ab977f33b3b_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_7f6995ea192c21c1b75be30f5cda30436eb9e32fef8f9fabd5678edbc7be7105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f6995ea192c21c1b75be30f5cda30436eb9e32fef8f9fabd5678edbc7be7105->enter($__internal_7f6995ea192c21c1b75be30f5cda30436eb9e32fef8f9fabd5678edbc7be7105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_e5ed69f1a634d2eaa8fa7d516f515e8e931a4587182ca6d5e024eed3276e880e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ed69f1a634d2eaa8fa7d516f515e8e931a4587182ca6d5e024eed3276e880e->enter($__internal_e5ed69f1a634d2eaa8fa7d516f515e8e931a4587182ca6d5e024eed3276e880e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_e5ed69f1a634d2eaa8fa7d516f515e8e931a4587182ca6d5e024eed3276e880e->leave($__internal_e5ed69f1a634d2eaa8fa7d516f515e8e931a4587182ca6d5e024eed3276e880e_prof);

        
        $__internal_7f6995ea192c21c1b75be30f5cda30436eb9e32fef8f9fabd5678edbc7be7105->leave($__internal_7f6995ea192c21c1b75be30f5cda30436eb9e32fef8f9fabd5678edbc7be7105_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_89415b0a38eb8f9e65c1ef65fefef9f1b8fbdb6bc7c09a80c7f1e2b6427ded9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89415b0a38eb8f9e65c1ef65fefef9f1b8fbdb6bc7c09a80c7f1e2b6427ded9b->enter($__internal_89415b0a38eb8f9e65c1ef65fefef9f1b8fbdb6bc7c09a80c7f1e2b6427ded9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6970962f82a2252fa7d544f8b05dc6bbebde1169c87ea56c2632d0963a88668c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6970962f82a2252fa7d544f8b05dc6bbebde1169c87ea56c2632d0963a88668c->enter($__internal_6970962f82a2252fa7d544f8b05dc6bbebde1169c87ea56c2632d0963a88668c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_6970962f82a2252fa7d544f8b05dc6bbebde1169c87ea56c2632d0963a88668c->leave($__internal_6970962f82a2252fa7d544f8b05dc6bbebde1169c87ea56c2632d0963a88668c_prof);

        
        $__internal_89415b0a38eb8f9e65c1ef65fefef9f1b8fbdb6bc7c09a80c7f1e2b6427ded9b->leave($__internal_89415b0a38eb8f9e65c1ef65fefef9f1b8fbdb6bc7c09a80c7f1e2b6427ded9b_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_f8be41dd602fc7bc62aeae2e2ab8044aafd65137bbbc35a49edfd3154a7205f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8be41dd602fc7bc62aeae2e2ab8044aafd65137bbbc35a49edfd3154a7205f4->enter($__internal_f8be41dd602fc7bc62aeae2e2ab8044aafd65137bbbc35a49edfd3154a7205f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_a63611a761286c98876303b69c01b5505fe091432588e91411d09d9317869acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63611a761286c98876303b69c01b5505fe091432588e91411d09d9317869acc->enter($__internal_a63611a761286c98876303b69c01b5505fe091432588e91411d09d9317869acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_a63611a761286c98876303b69c01b5505fe091432588e91411d09d9317869acc->leave($__internal_a63611a761286c98876303b69c01b5505fe091432588e91411d09d9317869acc_prof);

        
        $__internal_f8be41dd602fc7bc62aeae2e2ab8044aafd65137bbbc35a49edfd3154a7205f4->leave($__internal_f8be41dd602fc7bc62aeae2e2ab8044aafd65137bbbc35a49edfd3154a7205f4_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_81a83c4177527668ccd39ee8bafb169946ea00182e61e2144a5c7309912dc110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81a83c4177527668ccd39ee8bafb169946ea00182e61e2144a5c7309912dc110->enter($__internal_81a83c4177527668ccd39ee8bafb169946ea00182e61e2144a5c7309912dc110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_5adfd3f33cdddb1924bd9019f4ff843eb80493488152e0c839595f27e812f7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5adfd3f33cdddb1924bd9019f4ff843eb80493488152e0c839595f27e812f7eb->enter($__internal_5adfd3f33cdddb1924bd9019f4ff843eb80493488152e0c839595f27e812f7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_5adfd3f33cdddb1924bd9019f4ff843eb80493488152e0c839595f27e812f7eb->leave($__internal_5adfd3f33cdddb1924bd9019f4ff843eb80493488152e0c839595f27e812f7eb_prof);

        
        $__internal_81a83c4177527668ccd39ee8bafb169946ea00182e61e2144a5c7309912dc110->leave($__internal_81a83c4177527668ccd39ee8bafb169946ea00182e61e2144a5c7309912dc110_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_feb59a8364fab3126087f1dabe38c44b74dadfe4c02fcde0302d0ef9cd277de4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feb59a8364fab3126087f1dabe38c44b74dadfe4c02fcde0302d0ef9cd277de4->enter($__internal_feb59a8364fab3126087f1dabe38c44b74dadfe4c02fcde0302d0ef9cd277de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_b3ef3086665f625785e718e97801fee389d557e1cc7364a6c6bc0589e06473f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ef3086665f625785e718e97801fee389d557e1cc7364a6c6bc0589e06473f4->enter($__internal_b3ef3086665f625785e718e97801fee389d557e1cc7364a6c6bc0589e06473f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

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
        
        $__internal_b3ef3086665f625785e718e97801fee389d557e1cc7364a6c6bc0589e06473f4->leave($__internal_b3ef3086665f625785e718e97801fee389d557e1cc7364a6c6bc0589e06473f4_prof);

        
        $__internal_feb59a8364fab3126087f1dabe38c44b74dadfe4c02fcde0302d0ef9cd277de4->leave($__internal_feb59a8364fab3126087f1dabe38c44b74dadfe4c02fcde0302d0ef9cd277de4_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_c5f0dcce36a6439be0d1f4383ee2e7dca888d117bc1715e4f9e8576a1c58a5b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5f0dcce36a6439be0d1f4383ee2e7dca888d117bc1715e4f9e8576a1c58a5b0->enter($__internal_c5f0dcce36a6439be0d1f4383ee2e7dca888d117bc1715e4f9e8576a1c58a5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_8f6fcdb9011b3dcbf6cd9d7f29075f4baface9cb6f9ecb1a6d0c6725ba2080ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6fcdb9011b3dcbf6cd9d7f29075f4baface9cb6f9ecb1a6d0c6725ba2080ea->enter($__internal_8f6fcdb9011b3dcbf6cd9d7f29075f4baface9cb6f9ecb1a6d0c6725ba2080ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8f6fcdb9011b3dcbf6cd9d7f29075f4baface9cb6f9ecb1a6d0c6725ba2080ea->leave($__internal_8f6fcdb9011b3dcbf6cd9d7f29075f4baface9cb6f9ecb1a6d0c6725ba2080ea_prof);

        
        $__internal_c5f0dcce36a6439be0d1f4383ee2e7dca888d117bc1715e4f9e8576a1c58a5b0->leave($__internal_c5f0dcce36a6439be0d1f4383ee2e7dca888d117bc1715e4f9e8576a1c58a5b0_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_34f15c8ce462133e2ed3ab468b91f30bd746eb19cdad05a6f9a4873c3a80c6b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34f15c8ce462133e2ed3ab468b91f30bd746eb19cdad05a6f9a4873c3a80c6b7->enter($__internal_34f15c8ce462133e2ed3ab468b91f30bd746eb19cdad05a6f9a4873c3a80c6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_e8f3680ae1af8a8e9f1b1e9996286f5f7e438d342e869f622fb0d45194cd3ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f3680ae1af8a8e9f1b1e9996286f5f7e438d342e869f622fb0d45194cd3ee2->enter($__internal_e8f3680ae1af8a8e9f1b1e9996286f5f7e438d342e869f622fb0d45194cd3ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e8f3680ae1af8a8e9f1b1e9996286f5f7e438d342e869f622fb0d45194cd3ee2->leave($__internal_e8f3680ae1af8a8e9f1b1e9996286f5f7e438d342e869f622fb0d45194cd3ee2_prof);

        
        $__internal_34f15c8ce462133e2ed3ab468b91f30bd746eb19cdad05a6f9a4873c3a80c6b7->leave($__internal_34f15c8ce462133e2ed3ab468b91f30bd746eb19cdad05a6f9a4873c3a80c6b7_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_6f8c845fa10e747114d81a15b495ade785eae99dfe4677f2a7ea055a38150717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8c845fa10e747114d81a15b495ade785eae99dfe4677f2a7ea055a38150717->enter($__internal_6f8c845fa10e747114d81a15b495ade785eae99dfe4677f2a7ea055a38150717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_2ab41cd29eb6b6e0e5844a8db8177f9d517d2af0a15a3e4d2165e13985e77a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab41cd29eb6b6e0e5844a8db8177f9d517d2af0a15a3e4d2165e13985e77a47->enter($__internal_2ab41cd29eb6b6e0e5844a8db8177f9d517d2af0a15a3e4d2165e13985e77a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_2ab41cd29eb6b6e0e5844a8db8177f9d517d2af0a15a3e4d2165e13985e77a47->leave($__internal_2ab41cd29eb6b6e0e5844a8db8177f9d517d2af0a15a3e4d2165e13985e77a47_prof);

        
        $__internal_6f8c845fa10e747114d81a15b495ade785eae99dfe4677f2a7ea055a38150717->leave($__internal_6f8c845fa10e747114d81a15b495ade785eae99dfe4677f2a7ea055a38150717_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_bed2207591690a49aa013bbf9e1bb66cd6f12e094e90808a4a61fc5fa8e334f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed2207591690a49aa013bbf9e1bb66cd6f12e094e90808a4a61fc5fa8e334f0->enter($__internal_bed2207591690a49aa013bbf9e1bb66cd6f12e094e90808a4a61fc5fa8e334f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4909544636c9f6f9dc131e70fc3a5bfaae35a9bd238e89a146a0cd3398690ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4909544636c9f6f9dc131e70fc3a5bfaae35a9bd238e89a146a0cd3398690ab9->enter($__internal_4909544636c9f6f9dc131e70fc3a5bfaae35a9bd238e89a146a0cd3398690ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_4909544636c9f6f9dc131e70fc3a5bfaae35a9bd238e89a146a0cd3398690ab9->leave($__internal_4909544636c9f6f9dc131e70fc3a5bfaae35a9bd238e89a146a0cd3398690ab9_prof);

        
        $__internal_bed2207591690a49aa013bbf9e1bb66cd6f12e094e90808a4a61fc5fa8e334f0->leave($__internal_bed2207591690a49aa013bbf9e1bb66cd6f12e094e90808a4a61fc5fa8e334f0_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_44f56c7ba3da2a7114133ffb7ee4db939eebd7b8c5d7dc3dd1cc3e6bfdcf32d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44f56c7ba3da2a7114133ffb7ee4db939eebd7b8c5d7dc3dd1cc3e6bfdcf32d5->enter($__internal_44f56c7ba3da2a7114133ffb7ee4db939eebd7b8c5d7dc3dd1cc3e6bfdcf32d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_7eae66332786049cbed883c55e115a1fb44f389385f594276442aebc83bda3f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eae66332786049cbed883c55e115a1fb44f389385f594276442aebc83bda3f0->enter($__internal_7eae66332786049cbed883c55e115a1fb44f389385f594276442aebc83bda3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7eae66332786049cbed883c55e115a1fb44f389385f594276442aebc83bda3f0->leave($__internal_7eae66332786049cbed883c55e115a1fb44f389385f594276442aebc83bda3f0_prof);

        
        $__internal_44f56c7ba3da2a7114133ffb7ee4db939eebd7b8c5d7dc3dd1cc3e6bfdcf32d5->leave($__internal_44f56c7ba3da2a7114133ffb7ee4db939eebd7b8c5d7dc3dd1cc3e6bfdcf32d5_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_cf84128601ab98ace346d2ce10d81c8a4748225071c87f8f5beab3bbbf5a7b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf84128601ab98ace346d2ce10d81c8a4748225071c87f8f5beab3bbbf5a7b6e->enter($__internal_cf84128601ab98ace346d2ce10d81c8a4748225071c87f8f5beab3bbbf5a7b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_79ae12e2639b6098030d49ef748322e0f73e82ed2929ac48a7d8df8fcbe1fa58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ae12e2639b6098030d49ef748322e0f73e82ed2929ac48a7d8df8fcbe1fa58->enter($__internal_79ae12e2639b6098030d49ef748322e0f73e82ed2929ac48a7d8df8fcbe1fa58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_79ae12e2639b6098030d49ef748322e0f73e82ed2929ac48a7d8df8fcbe1fa58->leave($__internal_79ae12e2639b6098030d49ef748322e0f73e82ed2929ac48a7d8df8fcbe1fa58_prof);

        
        $__internal_cf84128601ab98ace346d2ce10d81c8a4748225071c87f8f5beab3bbbf5a7b6e->leave($__internal_cf84128601ab98ace346d2ce10d81c8a4748225071c87f8f5beab3bbbf5a7b6e_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_0cbcadba935e3a285b94fda8246391afcbdbcce543805c59a85ac2f124ea1a98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cbcadba935e3a285b94fda8246391afcbdbcce543805c59a85ac2f124ea1a98->enter($__internal_0cbcadba935e3a285b94fda8246391afcbdbcce543805c59a85ac2f124ea1a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_7533817defbd14cb8b04692be0af4820c360f009522bb15c6d1e5dfd08106de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7533817defbd14cb8b04692be0af4820c360f009522bb15c6d1e5dfd08106de8->enter($__internal_7533817defbd14cb8b04692be0af4820c360f009522bb15c6d1e5dfd08106de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7533817defbd14cb8b04692be0af4820c360f009522bb15c6d1e5dfd08106de8->leave($__internal_7533817defbd14cb8b04692be0af4820c360f009522bb15c6d1e5dfd08106de8_prof);

        
        $__internal_0cbcadba935e3a285b94fda8246391afcbdbcce543805c59a85ac2f124ea1a98->leave($__internal_0cbcadba935e3a285b94fda8246391afcbdbcce543805c59a85ac2f124ea1a98_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_91dcda93a66e1e504189ba320f412871a02cc2d935cb473da20dcedcd286ce9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91dcda93a66e1e504189ba320f412871a02cc2d935cb473da20dcedcd286ce9c->enter($__internal_91dcda93a66e1e504189ba320f412871a02cc2d935cb473da20dcedcd286ce9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_c9e263ce377ed8a19e55daaa32cb386998b709fee426e9b08065caf069ec5ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e263ce377ed8a19e55daaa32cb386998b709fee426e9b08065caf069ec5ecb->enter($__internal_c9e263ce377ed8a19e55daaa32cb386998b709fee426e9b08065caf069ec5ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c9e263ce377ed8a19e55daaa32cb386998b709fee426e9b08065caf069ec5ecb->leave($__internal_c9e263ce377ed8a19e55daaa32cb386998b709fee426e9b08065caf069ec5ecb_prof);

        
        $__internal_91dcda93a66e1e504189ba320f412871a02cc2d935cb473da20dcedcd286ce9c->leave($__internal_91dcda93a66e1e504189ba320f412871a02cc2d935cb473da20dcedcd286ce9c_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_22320eabb62eb2eaccb10eb99c0a7c68a32d139fc40bf4e853caffeb96e75444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22320eabb62eb2eaccb10eb99c0a7c68a32d139fc40bf4e853caffeb96e75444->enter($__internal_22320eabb62eb2eaccb10eb99c0a7c68a32d139fc40bf4e853caffeb96e75444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c73feda7bc7250bbadf46376eea915a83f8fd10e04abc2a62bd175c977e014d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73feda7bc7250bbadf46376eea915a83f8fd10e04abc2a62bd175c977e014d7->enter($__internal_c73feda7bc7250bbadf46376eea915a83f8fd10e04abc2a62bd175c977e014d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_c73feda7bc7250bbadf46376eea915a83f8fd10e04abc2a62bd175c977e014d7->leave($__internal_c73feda7bc7250bbadf46376eea915a83f8fd10e04abc2a62bd175c977e014d7_prof);

        
        $__internal_22320eabb62eb2eaccb10eb99c0a7c68a32d139fc40bf4e853caffeb96e75444->leave($__internal_22320eabb62eb2eaccb10eb99c0a7c68a32d139fc40bf4e853caffeb96e75444_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_3dfd0f233db56488e3abb5dd60c8811add41edab39bc275a2b7ac9ec06a92b51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dfd0f233db56488e3abb5dd60c8811add41edab39bc275a2b7ac9ec06a92b51->enter($__internal_3dfd0f233db56488e3abb5dd60c8811add41edab39bc275a2b7ac9ec06a92b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_6a198d0907c607012df51d959cd32fd3c5389ee25dd0e801800bb110cb7a450f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a198d0907c607012df51d959cd32fd3c5389ee25dd0e801800bb110cb7a450f->enter($__internal_6a198d0907c607012df51d959cd32fd3c5389ee25dd0e801800bb110cb7a450f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_6a198d0907c607012df51d959cd32fd3c5389ee25dd0e801800bb110cb7a450f->leave($__internal_6a198d0907c607012df51d959cd32fd3c5389ee25dd0e801800bb110cb7a450f_prof);

        
        $__internal_3dfd0f233db56488e3abb5dd60c8811add41edab39bc275a2b7ac9ec06a92b51->leave($__internal_3dfd0f233db56488e3abb5dd60c8811add41edab39bc275a2b7ac9ec06a92b51_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_a20eab2ef02411e86bd69ff70131f89d3889fd4fbe874fc84f6fb737a9f09031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a20eab2ef02411e86bd69ff70131f89d3889fd4fbe874fc84f6fb737a9f09031->enter($__internal_a20eab2ef02411e86bd69ff70131f89d3889fd4fbe874fc84f6fb737a9f09031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_e1a52feffb22cc38558709b96f920725f47d99de2f4a5fe8912cd6a3c751b19d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a52feffb22cc38558709b96f920725f47d99de2f4a5fe8912cd6a3c751b19d->enter($__internal_e1a52feffb22cc38558709b96f920725f47d99de2f4a5fe8912cd6a3c751b19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_e1a52feffb22cc38558709b96f920725f47d99de2f4a5fe8912cd6a3c751b19d->leave($__internal_e1a52feffb22cc38558709b96f920725f47d99de2f4a5fe8912cd6a3c751b19d_prof);

        
        $__internal_a20eab2ef02411e86bd69ff70131f89d3889fd4fbe874fc84f6fb737a9f09031->leave($__internal_a20eab2ef02411e86bd69ff70131f89d3889fd4fbe874fc84f6fb737a9f09031_prof);

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
