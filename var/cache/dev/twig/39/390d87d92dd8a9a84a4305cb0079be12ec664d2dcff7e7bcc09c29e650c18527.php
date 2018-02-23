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
        $__internal_dc0a0188e051bdde90782f2b32df4c4ba88caad61e7a6399840adca22ef181c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc0a0188e051bdde90782f2b32df4c4ba88caad61e7a6399840adca22ef181c6->enter($__internal_dc0a0188e051bdde90782f2b32df4c4ba88caad61e7a6399840adca22ef181c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_85236c85af343632336baf39ac39c684e4daa0f11e0dbfba51740fee928314de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85236c85af343632336baf39ac39c684e4daa0f11e0dbfba51740fee928314de->enter($__internal_85236c85af343632336baf39ac39c684e4daa0f11e0dbfba51740fee928314de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc0a0188e051bdde90782f2b32df4c4ba88caad61e7a6399840adca22ef181c6->leave($__internal_dc0a0188e051bdde90782f2b32df4c4ba88caad61e7a6399840adca22ef181c6_prof);

        
        $__internal_85236c85af343632336baf39ac39c684e4daa0f11e0dbfba51740fee928314de->leave($__internal_85236c85af343632336baf39ac39c684e4daa0f11e0dbfba51740fee928314de_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_97628b4dc93953ff68bfca86f12ceb84b2686fa0820e754f7e8dce793dc4a017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97628b4dc93953ff68bfca86f12ceb84b2686fa0820e754f7e8dce793dc4a017->enter($__internal_97628b4dc93953ff68bfca86f12ceb84b2686fa0820e754f7e8dce793dc4a017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_26e0b811513cdf417dda76e0b639be65378553ed8431ed7624b1cbf64334a625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e0b811513cdf417dda76e0b639be65378553ed8431ed7624b1cbf64334a625->enter($__internal_26e0b811513cdf417dda76e0b639be65378553ed8431ed7624b1cbf64334a625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_26e0b811513cdf417dda76e0b639be65378553ed8431ed7624b1cbf64334a625->leave($__internal_26e0b811513cdf417dda76e0b639be65378553ed8431ed7624b1cbf64334a625_prof);

        
        $__internal_97628b4dc93953ff68bfca86f12ceb84b2686fa0820e754f7e8dce793dc4a017->leave($__internal_97628b4dc93953ff68bfca86f12ceb84b2686fa0820e754f7e8dce793dc4a017_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_ba68d46d8873961b1ca975671bf16864cc6ebe8bdd92d29b16b59a1a5220b9ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba68d46d8873961b1ca975671bf16864cc6ebe8bdd92d29b16b59a1a5220b9ae->enter($__internal_ba68d46d8873961b1ca975671bf16864cc6ebe8bdd92d29b16b59a1a5220b9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_76658f83e7304a1d109515a7833e58d6b2b5d3347a2bab01ff5d692d9a5f8e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76658f83e7304a1d109515a7833e58d6b2b5d3347a2bab01ff5d692d9a5f8e19->enter($__internal_76658f83e7304a1d109515a7833e58d6b2b5d3347a2bab01ff5d692d9a5f8e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_76658f83e7304a1d109515a7833e58d6b2b5d3347a2bab01ff5d692d9a5f8e19->leave($__internal_76658f83e7304a1d109515a7833e58d6b2b5d3347a2bab01ff5d692d9a5f8e19_prof);

        
        $__internal_ba68d46d8873961b1ca975671bf16864cc6ebe8bdd92d29b16b59a1a5220b9ae->leave($__internal_ba68d46d8873961b1ca975671bf16864cc6ebe8bdd92d29b16b59a1a5220b9ae_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_240a71b35cfe2ebf7815eb04a8784387682d4a06743fa1775ed9ac5049dff719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_240a71b35cfe2ebf7815eb04a8784387682d4a06743fa1775ed9ac5049dff719->enter($__internal_240a71b35cfe2ebf7815eb04a8784387682d4a06743fa1775ed9ac5049dff719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_2b088a1ff7f87c2fc0674dca9d765182a35580b52e57925fb341e3b754e1725a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b088a1ff7f87c2fc0674dca9d765182a35580b52e57925fb341e3b754e1725a->enter($__internal_2b088a1ff7f87c2fc0674dca9d765182a35580b52e57925fb341e3b754e1725a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_2b088a1ff7f87c2fc0674dca9d765182a35580b52e57925fb341e3b754e1725a->leave($__internal_2b088a1ff7f87c2fc0674dca9d765182a35580b52e57925fb341e3b754e1725a_prof);

        
        $__internal_240a71b35cfe2ebf7815eb04a8784387682d4a06743fa1775ed9ac5049dff719->leave($__internal_240a71b35cfe2ebf7815eb04a8784387682d4a06743fa1775ed9ac5049dff719_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_937620ac7e021dff23ac4c20b0f724c5ed87ecfee2ac3a2e1af077732a4adf10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_937620ac7e021dff23ac4c20b0f724c5ed87ecfee2ac3a2e1af077732a4adf10->enter($__internal_937620ac7e021dff23ac4c20b0f724c5ed87ecfee2ac3a2e1af077732a4adf10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_900282c9bf5aec80ed4c0ae0b522227745cd1ce1e9538710e448a29da3de6d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900282c9bf5aec80ed4c0ae0b522227745cd1ce1e9538710e448a29da3de6d0d->enter($__internal_900282c9bf5aec80ed4c0ae0b522227745cd1ce1e9538710e448a29da3de6d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_900282c9bf5aec80ed4c0ae0b522227745cd1ce1e9538710e448a29da3de6d0d->leave($__internal_900282c9bf5aec80ed4c0ae0b522227745cd1ce1e9538710e448a29da3de6d0d_prof);

        
        $__internal_937620ac7e021dff23ac4c20b0f724c5ed87ecfee2ac3a2e1af077732a4adf10->leave($__internal_937620ac7e021dff23ac4c20b0f724c5ed87ecfee2ac3a2e1af077732a4adf10_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_3da66a37970fc497331149f1505b83aa2cf789b31c4ee909b526a3484ffab7b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3da66a37970fc497331149f1505b83aa2cf789b31c4ee909b526a3484ffab7b9->enter($__internal_3da66a37970fc497331149f1505b83aa2cf789b31c4ee909b526a3484ffab7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_8e065e20ec45bf6454f1a5dc0b5b8c089019a46337e16f66c2034b3658180be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e065e20ec45bf6454f1a5dc0b5b8c089019a46337e16f66c2034b3658180be4->enter($__internal_8e065e20ec45bf6454f1a5dc0b5b8c089019a46337e16f66c2034b3658180be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_8e065e20ec45bf6454f1a5dc0b5b8c089019a46337e16f66c2034b3658180be4->leave($__internal_8e065e20ec45bf6454f1a5dc0b5b8c089019a46337e16f66c2034b3658180be4_prof);

        
        $__internal_3da66a37970fc497331149f1505b83aa2cf789b31c4ee909b526a3484ffab7b9->leave($__internal_3da66a37970fc497331149f1505b83aa2cf789b31c4ee909b526a3484ffab7b9_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_905eb37c8a734fc48f700ed7d98b7c9cedcc0737a0b44ad33d27f61ae60921a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_905eb37c8a734fc48f700ed7d98b7c9cedcc0737a0b44ad33d27f61ae60921a1->enter($__internal_905eb37c8a734fc48f700ed7d98b7c9cedcc0737a0b44ad33d27f61ae60921a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_d81a5c2fe621bd7bb26e56b38e844a23f540b5e410965e0d52dd062048f765d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d81a5c2fe621bd7bb26e56b38e844a23f540b5e410965e0d52dd062048f765d6->enter($__internal_d81a5c2fe621bd7bb26e56b38e844a23f540b5e410965e0d52dd062048f765d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_d81a5c2fe621bd7bb26e56b38e844a23f540b5e410965e0d52dd062048f765d6->leave($__internal_d81a5c2fe621bd7bb26e56b38e844a23f540b5e410965e0d52dd062048f765d6_prof);

        
        $__internal_905eb37c8a734fc48f700ed7d98b7c9cedcc0737a0b44ad33d27f61ae60921a1->leave($__internal_905eb37c8a734fc48f700ed7d98b7c9cedcc0737a0b44ad33d27f61ae60921a1_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_922470dbaa6b70aa1c12b988e10255e71a7fc85d902cf1d5acbef04a76118577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_922470dbaa6b70aa1c12b988e10255e71a7fc85d902cf1d5acbef04a76118577->enter($__internal_922470dbaa6b70aa1c12b988e10255e71a7fc85d902cf1d5acbef04a76118577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_c2f6cdbea4750b842c9fabd97bb9c0f6decfa795a1a4ce795225e87029d4f0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f6cdbea4750b842c9fabd97bb9c0f6decfa795a1a4ce795225e87029d4f0dd->enter($__internal_c2f6cdbea4750b842c9fabd97bb9c0f6decfa795a1a4ce795225e87029d4f0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_c2f6cdbea4750b842c9fabd97bb9c0f6decfa795a1a4ce795225e87029d4f0dd->leave($__internal_c2f6cdbea4750b842c9fabd97bb9c0f6decfa795a1a4ce795225e87029d4f0dd_prof);

        
        $__internal_922470dbaa6b70aa1c12b988e10255e71a7fc85d902cf1d5acbef04a76118577->leave($__internal_922470dbaa6b70aa1c12b988e10255e71a7fc85d902cf1d5acbef04a76118577_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_7271dc90f11606a3b7de273e390c71fe4292dd8db11f78e5d5880ed1ab1f063e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7271dc90f11606a3b7de273e390c71fe4292dd8db11f78e5d5880ed1ab1f063e->enter($__internal_7271dc90f11606a3b7de273e390c71fe4292dd8db11f78e5d5880ed1ab1f063e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_af5eacf7eb21db7a7cc7c8ab8181def1c35c0d1fd44f96ad4af52c96f10d775a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5eacf7eb21db7a7cc7c8ab8181def1c35c0d1fd44f96ad4af52c96f10d775a->enter($__internal_af5eacf7eb21db7a7cc7c8ab8181def1c35c0d1fd44f96ad4af52c96f10d775a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_af5eacf7eb21db7a7cc7c8ab8181def1c35c0d1fd44f96ad4af52c96f10d775a->leave($__internal_af5eacf7eb21db7a7cc7c8ab8181def1c35c0d1fd44f96ad4af52c96f10d775a_prof);

        
        $__internal_7271dc90f11606a3b7de273e390c71fe4292dd8db11f78e5d5880ed1ab1f063e->leave($__internal_7271dc90f11606a3b7de273e390c71fe4292dd8db11f78e5d5880ed1ab1f063e_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_2805ec26b816320a408e23c24cf54d70f6a854971f5e353da0a10ec9c74bad64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2805ec26b816320a408e23c24cf54d70f6a854971f5e353da0a10ec9c74bad64->enter($__internal_2805ec26b816320a408e23c24cf54d70f6a854971f5e353da0a10ec9c74bad64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_01629e0230174a3d928278f5ac041daa1287b9d661785b5e4afe8eaf0a82f89f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01629e0230174a3d928278f5ac041daa1287b9d661785b5e4afe8eaf0a82f89f->enter($__internal_01629e0230174a3d928278f5ac041daa1287b9d661785b5e4afe8eaf0a82f89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_01629e0230174a3d928278f5ac041daa1287b9d661785b5e4afe8eaf0a82f89f->leave($__internal_01629e0230174a3d928278f5ac041daa1287b9d661785b5e4afe8eaf0a82f89f_prof);

        
        $__internal_2805ec26b816320a408e23c24cf54d70f6a854971f5e353da0a10ec9c74bad64->leave($__internal_2805ec26b816320a408e23c24cf54d70f6a854971f5e353da0a10ec9c74bad64_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_460506a767205e7e38aa807ff843c71c44250a8b6ece340bba6ced70eb1dd5ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_460506a767205e7e38aa807ff843c71c44250a8b6ece340bba6ced70eb1dd5ca->enter($__internal_460506a767205e7e38aa807ff843c71c44250a8b6ece340bba6ced70eb1dd5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_5f5b8eedf3ab6cb81982cf36b1854438b946b74a7c15da24b0e39f9cf4144b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5b8eedf3ab6cb81982cf36b1854438b946b74a7c15da24b0e39f9cf4144b92->enter($__internal_5f5b8eedf3ab6cb81982cf36b1854438b946b74a7c15da24b0e39f9cf4144b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_5f5b8eedf3ab6cb81982cf36b1854438b946b74a7c15da24b0e39f9cf4144b92->leave($__internal_5f5b8eedf3ab6cb81982cf36b1854438b946b74a7c15da24b0e39f9cf4144b92_prof);

        
        $__internal_460506a767205e7e38aa807ff843c71c44250a8b6ece340bba6ced70eb1dd5ca->leave($__internal_460506a767205e7e38aa807ff843c71c44250a8b6ece340bba6ced70eb1dd5ca_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_b3fad651c58c1b30306498f346503812045b92a1cd4ecd7a497220ec51035026 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3fad651c58c1b30306498f346503812045b92a1cd4ecd7a497220ec51035026->enter($__internal_b3fad651c58c1b30306498f346503812045b92a1cd4ecd7a497220ec51035026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_65e9db1ba1bdf22dd666e40a8b06acc22180586d0b09657e210d7a49d809260c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e9db1ba1bdf22dd666e40a8b06acc22180586d0b09657e210d7a49d809260c->enter($__internal_65e9db1ba1bdf22dd666e40a8b06acc22180586d0b09657e210d7a49d809260c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_65e9db1ba1bdf22dd666e40a8b06acc22180586d0b09657e210d7a49d809260c->leave($__internal_65e9db1ba1bdf22dd666e40a8b06acc22180586d0b09657e210d7a49d809260c_prof);

        
        $__internal_b3fad651c58c1b30306498f346503812045b92a1cd4ecd7a497220ec51035026->leave($__internal_b3fad651c58c1b30306498f346503812045b92a1cd4ecd7a497220ec51035026_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_5693df69431e2c92930a316306b79e784f3bf2c1ac503e5900f7050fcd7b47ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5693df69431e2c92930a316306b79e784f3bf2c1ac503e5900f7050fcd7b47ab->enter($__internal_5693df69431e2c92930a316306b79e784f3bf2c1ac503e5900f7050fcd7b47ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_649a7396a6f6edc409b389275ebdc322776fefde58ca662c1d29da4f41d37725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649a7396a6f6edc409b389275ebdc322776fefde58ca662c1d29da4f41d37725->enter($__internal_649a7396a6f6edc409b389275ebdc322776fefde58ca662c1d29da4f41d37725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_649a7396a6f6edc409b389275ebdc322776fefde58ca662c1d29da4f41d37725->leave($__internal_649a7396a6f6edc409b389275ebdc322776fefde58ca662c1d29da4f41d37725_prof);

        
        $__internal_5693df69431e2c92930a316306b79e784f3bf2c1ac503e5900f7050fcd7b47ab->leave($__internal_5693df69431e2c92930a316306b79e784f3bf2c1ac503e5900f7050fcd7b47ab_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_97753c0eee374a7055fd82e660aef13f076f57dfcd87cc6d027c76df37faf7aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97753c0eee374a7055fd82e660aef13f076f57dfcd87cc6d027c76df37faf7aa->enter($__internal_97753c0eee374a7055fd82e660aef13f076f57dfcd87cc6d027c76df37faf7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_0b791903efc7a2b9dea647b84452b212c4d294b0c1a3a74c41470824b293f661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b791903efc7a2b9dea647b84452b212c4d294b0c1a3a74c41470824b293f661->enter($__internal_0b791903efc7a2b9dea647b84452b212c4d294b0c1a3a74c41470824b293f661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_0b791903efc7a2b9dea647b84452b212c4d294b0c1a3a74c41470824b293f661->leave($__internal_0b791903efc7a2b9dea647b84452b212c4d294b0c1a3a74c41470824b293f661_prof);

        
        $__internal_97753c0eee374a7055fd82e660aef13f076f57dfcd87cc6d027c76df37faf7aa->leave($__internal_97753c0eee374a7055fd82e660aef13f076f57dfcd87cc6d027c76df37faf7aa_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_99258c503433dbe26e202fde4bb400e33ab382615c6c1dcee3bf236b24c22a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99258c503433dbe26e202fde4bb400e33ab382615c6c1dcee3bf236b24c22a7c->enter($__internal_99258c503433dbe26e202fde4bb400e33ab382615c6c1dcee3bf236b24c22a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_aecc4d0e2ef4d2429ea8fee2e62c5493d71964baefab3c6fc4a91dbe8cdbb4f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aecc4d0e2ef4d2429ea8fee2e62c5493d71964baefab3c6fc4a91dbe8cdbb4f2->enter($__internal_aecc4d0e2ef4d2429ea8fee2e62c5493d71964baefab3c6fc4a91dbe8cdbb4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

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
        
        $__internal_aecc4d0e2ef4d2429ea8fee2e62c5493d71964baefab3c6fc4a91dbe8cdbb4f2->leave($__internal_aecc4d0e2ef4d2429ea8fee2e62c5493d71964baefab3c6fc4a91dbe8cdbb4f2_prof);

        
        $__internal_99258c503433dbe26e202fde4bb400e33ab382615c6c1dcee3bf236b24c22a7c->leave($__internal_99258c503433dbe26e202fde4bb400e33ab382615c6c1dcee3bf236b24c22a7c_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_02319bbff0c70a14673c88ea843708cec56608177bf68291dc3cacb20402af15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02319bbff0c70a14673c88ea843708cec56608177bf68291dc3cacb20402af15->enter($__internal_02319bbff0c70a14673c88ea843708cec56608177bf68291dc3cacb20402af15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_6230482d2a2bb28cb4f661d2fc1cb91f72a036037a628cbdd0555269045ef349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6230482d2a2bb28cb4f661d2fc1cb91f72a036037a628cbdd0555269045ef349->enter($__internal_6230482d2a2bb28cb4f661d2fc1cb91f72a036037a628cbdd0555269045ef349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6230482d2a2bb28cb4f661d2fc1cb91f72a036037a628cbdd0555269045ef349->leave($__internal_6230482d2a2bb28cb4f661d2fc1cb91f72a036037a628cbdd0555269045ef349_prof);

        
        $__internal_02319bbff0c70a14673c88ea843708cec56608177bf68291dc3cacb20402af15->leave($__internal_02319bbff0c70a14673c88ea843708cec56608177bf68291dc3cacb20402af15_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_32eb60e4542cf8a8574c680871db6aa19a6d3ecabe9929b4d2d5b744c6f70c85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32eb60e4542cf8a8574c680871db6aa19a6d3ecabe9929b4d2d5b744c6f70c85->enter($__internal_32eb60e4542cf8a8574c680871db6aa19a6d3ecabe9929b4d2d5b744c6f70c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_bcb3947756d840650c9ab37d2db79cc95bb8d66f2e0692393f7bb7117f81f39c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb3947756d840650c9ab37d2db79cc95bb8d66f2e0692393f7bb7117f81f39c->enter($__internal_bcb3947756d840650c9ab37d2db79cc95bb8d66f2e0692393f7bb7117f81f39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_bcb3947756d840650c9ab37d2db79cc95bb8d66f2e0692393f7bb7117f81f39c->leave($__internal_bcb3947756d840650c9ab37d2db79cc95bb8d66f2e0692393f7bb7117f81f39c_prof);

        
        $__internal_32eb60e4542cf8a8574c680871db6aa19a6d3ecabe9929b4d2d5b744c6f70c85->leave($__internal_32eb60e4542cf8a8574c680871db6aa19a6d3ecabe9929b4d2d5b744c6f70c85_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_1da786a277bc9b7238f665437f0bad70453639b5def9171687ba89dd3e5837ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da786a277bc9b7238f665437f0bad70453639b5def9171687ba89dd3e5837ce->enter($__internal_1da786a277bc9b7238f665437f0bad70453639b5def9171687ba89dd3e5837ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_78ccd8dabc4d451739b87ac52c2e254d85f8efd52f9396f589ed57c98d890883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ccd8dabc4d451739b87ac52c2e254d85f8efd52f9396f589ed57c98d890883->enter($__internal_78ccd8dabc4d451739b87ac52c2e254d85f8efd52f9396f589ed57c98d890883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_78ccd8dabc4d451739b87ac52c2e254d85f8efd52f9396f589ed57c98d890883->leave($__internal_78ccd8dabc4d451739b87ac52c2e254d85f8efd52f9396f589ed57c98d890883_prof);

        
        $__internal_1da786a277bc9b7238f665437f0bad70453639b5def9171687ba89dd3e5837ce->leave($__internal_1da786a277bc9b7238f665437f0bad70453639b5def9171687ba89dd3e5837ce_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_abda734c2eced262c653afd1187fcfbfe670f6e6c5168170586e854b0fe5550a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abda734c2eced262c653afd1187fcfbfe670f6e6c5168170586e854b0fe5550a->enter($__internal_abda734c2eced262c653afd1187fcfbfe670f6e6c5168170586e854b0fe5550a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_8e7e3742b30209735f78b63a87f1b56b375870fd01b50a2acc1ebe01e4dcb710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7e3742b30209735f78b63a87f1b56b375870fd01b50a2acc1ebe01e4dcb710->enter($__internal_8e7e3742b30209735f78b63a87f1b56b375870fd01b50a2acc1ebe01e4dcb710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_8e7e3742b30209735f78b63a87f1b56b375870fd01b50a2acc1ebe01e4dcb710->leave($__internal_8e7e3742b30209735f78b63a87f1b56b375870fd01b50a2acc1ebe01e4dcb710_prof);

        
        $__internal_abda734c2eced262c653afd1187fcfbfe670f6e6c5168170586e854b0fe5550a->leave($__internal_abda734c2eced262c653afd1187fcfbfe670f6e6c5168170586e854b0fe5550a_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_6d90bd7d27c6c2b186da2bc6404543bbd51d034fcde429bacef2c1d4fcecaa20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d90bd7d27c6c2b186da2bc6404543bbd51d034fcde429bacef2c1d4fcecaa20->enter($__internal_6d90bd7d27c6c2b186da2bc6404543bbd51d034fcde429bacef2c1d4fcecaa20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_ae3451410007a06219330e0964e29815a1efbe8e737ef724a5bf6e9251006148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3451410007a06219330e0964e29815a1efbe8e737ef724a5bf6e9251006148->enter($__internal_ae3451410007a06219330e0964e29815a1efbe8e737ef724a5bf6e9251006148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ae3451410007a06219330e0964e29815a1efbe8e737ef724a5bf6e9251006148->leave($__internal_ae3451410007a06219330e0964e29815a1efbe8e737ef724a5bf6e9251006148_prof);

        
        $__internal_6d90bd7d27c6c2b186da2bc6404543bbd51d034fcde429bacef2c1d4fcecaa20->leave($__internal_6d90bd7d27c6c2b186da2bc6404543bbd51d034fcde429bacef2c1d4fcecaa20_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_317318ff7e0d5e1cbdab99d509540ca8da6d7ee60822bb46c9e98a5e87b0b542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_317318ff7e0d5e1cbdab99d509540ca8da6d7ee60822bb46c9e98a5e87b0b542->enter($__internal_317318ff7e0d5e1cbdab99d509540ca8da6d7ee60822bb46c9e98a5e87b0b542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_974b932ce9b7a2bb698bd0bee82b026eb3b9f4f3fcc8bc429c967ed37e1af739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_974b932ce9b7a2bb698bd0bee82b026eb3b9f4f3fcc8bc429c967ed37e1af739->enter($__internal_974b932ce9b7a2bb698bd0bee82b026eb3b9f4f3fcc8bc429c967ed37e1af739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_974b932ce9b7a2bb698bd0bee82b026eb3b9f4f3fcc8bc429c967ed37e1af739->leave($__internal_974b932ce9b7a2bb698bd0bee82b026eb3b9f4f3fcc8bc429c967ed37e1af739_prof);

        
        $__internal_317318ff7e0d5e1cbdab99d509540ca8da6d7ee60822bb46c9e98a5e87b0b542->leave($__internal_317318ff7e0d5e1cbdab99d509540ca8da6d7ee60822bb46c9e98a5e87b0b542_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_fb8e05f758d0760d8fe701868b1acaed932a83b77c96d2f658ed36fc30e05160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb8e05f758d0760d8fe701868b1acaed932a83b77c96d2f658ed36fc30e05160->enter($__internal_fb8e05f758d0760d8fe701868b1acaed932a83b77c96d2f658ed36fc30e05160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_11bd9326f91336ff2980fe9117483474da9c622c5b14a78eec10ee8743a2e985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11bd9326f91336ff2980fe9117483474da9c622c5b14a78eec10ee8743a2e985->enter($__internal_11bd9326f91336ff2980fe9117483474da9c622c5b14a78eec10ee8743a2e985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_11bd9326f91336ff2980fe9117483474da9c622c5b14a78eec10ee8743a2e985->leave($__internal_11bd9326f91336ff2980fe9117483474da9c622c5b14a78eec10ee8743a2e985_prof);

        
        $__internal_fb8e05f758d0760d8fe701868b1acaed932a83b77c96d2f658ed36fc30e05160->leave($__internal_fb8e05f758d0760d8fe701868b1acaed932a83b77c96d2f658ed36fc30e05160_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_1be5009a51e39e96211068135a5b478af070afa8ddd76da324ea9e84427bb379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1be5009a51e39e96211068135a5b478af070afa8ddd76da324ea9e84427bb379->enter($__internal_1be5009a51e39e96211068135a5b478af070afa8ddd76da324ea9e84427bb379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_9c82c39e21607cfcbb62461e9a32fdbf79f1d8e74b295b3eadbcf9b2e5c2e1aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c82c39e21607cfcbb62461e9a32fdbf79f1d8e74b295b3eadbcf9b2e5c2e1aa->enter($__internal_9c82c39e21607cfcbb62461e9a32fdbf79f1d8e74b295b3eadbcf9b2e5c2e1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9c82c39e21607cfcbb62461e9a32fdbf79f1d8e74b295b3eadbcf9b2e5c2e1aa->leave($__internal_9c82c39e21607cfcbb62461e9a32fdbf79f1d8e74b295b3eadbcf9b2e5c2e1aa_prof);

        
        $__internal_1be5009a51e39e96211068135a5b478af070afa8ddd76da324ea9e84427bb379->leave($__internal_1be5009a51e39e96211068135a5b478af070afa8ddd76da324ea9e84427bb379_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_8ec13ccbb1c9cecfdd2c2e3d8b925c21667f7c714bd8c0404014f909546eb8fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ec13ccbb1c9cecfdd2c2e3d8b925c21667f7c714bd8c0404014f909546eb8fe->enter($__internal_8ec13ccbb1c9cecfdd2c2e3d8b925c21667f7c714bd8c0404014f909546eb8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_5016d00c5bbd073cee5a84eb05962a6fedd27330b1ac4897d02830a158eec712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5016d00c5bbd073cee5a84eb05962a6fedd27330b1ac4897d02830a158eec712->enter($__internal_5016d00c5bbd073cee5a84eb05962a6fedd27330b1ac4897d02830a158eec712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_5016d00c5bbd073cee5a84eb05962a6fedd27330b1ac4897d02830a158eec712->leave($__internal_5016d00c5bbd073cee5a84eb05962a6fedd27330b1ac4897d02830a158eec712_prof);

        
        $__internal_8ec13ccbb1c9cecfdd2c2e3d8b925c21667f7c714bd8c0404014f909546eb8fe->leave($__internal_8ec13ccbb1c9cecfdd2c2e3d8b925c21667f7c714bd8c0404014f909546eb8fe_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_28fb1c199deb0c3486d687dadf5464edb84d5965296481c1efdeabed445c459c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28fb1c199deb0c3486d687dadf5464edb84d5965296481c1efdeabed445c459c->enter($__internal_28fb1c199deb0c3486d687dadf5464edb84d5965296481c1efdeabed445c459c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_e151f9bc3c4466d7a8abb52fb5798d4a593ea1119ce5ff79d012d03646986c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e151f9bc3c4466d7a8abb52fb5798d4a593ea1119ce5ff79d012d03646986c1c->enter($__internal_e151f9bc3c4466d7a8abb52fb5798d4a593ea1119ce5ff79d012d03646986c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_e151f9bc3c4466d7a8abb52fb5798d4a593ea1119ce5ff79d012d03646986c1c->leave($__internal_e151f9bc3c4466d7a8abb52fb5798d4a593ea1119ce5ff79d012d03646986c1c_prof);

        
        $__internal_28fb1c199deb0c3486d687dadf5464edb84d5965296481c1efdeabed445c459c->leave($__internal_28fb1c199deb0c3486d687dadf5464edb84d5965296481c1efdeabed445c459c_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_7b6a359dee36541a4bf457c3e870d742a280702f8a3c226067119fc10065280c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b6a359dee36541a4bf457c3e870d742a280702f8a3c226067119fc10065280c->enter($__internal_7b6a359dee36541a4bf457c3e870d742a280702f8a3c226067119fc10065280c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_729e82ea5e146a041b48ab8b9ee531396076df63902bd1af89edd0cf3a6fb587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729e82ea5e146a041b48ab8b9ee531396076df63902bd1af89edd0cf3a6fb587->enter($__internal_729e82ea5e146a041b48ab8b9ee531396076df63902bd1af89edd0cf3a6fb587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_729e82ea5e146a041b48ab8b9ee531396076df63902bd1af89edd0cf3a6fb587->leave($__internal_729e82ea5e146a041b48ab8b9ee531396076df63902bd1af89edd0cf3a6fb587_prof);

        
        $__internal_7b6a359dee36541a4bf457c3e870d742a280702f8a3c226067119fc10065280c->leave($__internal_7b6a359dee36541a4bf457c3e870d742a280702f8a3c226067119fc10065280c_prof);

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
