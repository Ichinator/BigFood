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
        $__internal_8db8c9375bf8211e456311a6fd96cf1039c89813110acf830ea94ccdf59705a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8db8c9375bf8211e456311a6fd96cf1039c89813110acf830ea94ccdf59705a5->enter($__internal_8db8c9375bf8211e456311a6fd96cf1039c89813110acf830ea94ccdf59705a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_96f712b81ea2136fced8e21788d4265fb83d0e961a006e3a97aa20a96b352e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f712b81ea2136fced8e21788d4265fb83d0e961a006e3a97aa20a96b352e6c->enter($__internal_96f712b81ea2136fced8e21788d4265fb83d0e961a006e3a97aa20a96b352e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8db8c9375bf8211e456311a6fd96cf1039c89813110acf830ea94ccdf59705a5->leave($__internal_8db8c9375bf8211e456311a6fd96cf1039c89813110acf830ea94ccdf59705a5_prof);

        
        $__internal_96f712b81ea2136fced8e21788d4265fb83d0e961a006e3a97aa20a96b352e6c->leave($__internal_96f712b81ea2136fced8e21788d4265fb83d0e961a006e3a97aa20a96b352e6c_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_fd30c37899f9ad42fd56e2460eabee2f09bb9bd73f8548ec0a0a0691f257cb94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd30c37899f9ad42fd56e2460eabee2f09bb9bd73f8548ec0a0a0691f257cb94->enter($__internal_fd30c37899f9ad42fd56e2460eabee2f09bb9bd73f8548ec0a0a0691f257cb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_b6c3aa90e5ebef0d28a941558ef111bea101cd1706ca69ebddac86b616380956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c3aa90e5ebef0d28a941558ef111bea101cd1706ca69ebddac86b616380956->enter($__internal_b6c3aa90e5ebef0d28a941558ef111bea101cd1706ca69ebddac86b616380956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b6c3aa90e5ebef0d28a941558ef111bea101cd1706ca69ebddac86b616380956->leave($__internal_b6c3aa90e5ebef0d28a941558ef111bea101cd1706ca69ebddac86b616380956_prof);

        
        $__internal_fd30c37899f9ad42fd56e2460eabee2f09bb9bd73f8548ec0a0a0691f257cb94->leave($__internal_fd30c37899f9ad42fd56e2460eabee2f09bb9bd73f8548ec0a0a0691f257cb94_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_4bf5bcfd1f82adbf50f3f230b2fbb693f8ccd748dfc0f1a0d8ec4dde7d6b5179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf5bcfd1f82adbf50f3f230b2fbb693f8ccd748dfc0f1a0d8ec4dde7d6b5179->enter($__internal_4bf5bcfd1f82adbf50f3f230b2fbb693f8ccd748dfc0f1a0d8ec4dde7d6b5179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_9ee906af6db3fd33f379aecd13a8343a262ca65ec37a4cf5c554104eca05efa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee906af6db3fd33f379aecd13a8343a262ca65ec37a4cf5c554104eca05efa5->enter($__internal_9ee906af6db3fd33f379aecd13a8343a262ca65ec37a4cf5c554104eca05efa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_9ee906af6db3fd33f379aecd13a8343a262ca65ec37a4cf5c554104eca05efa5->leave($__internal_9ee906af6db3fd33f379aecd13a8343a262ca65ec37a4cf5c554104eca05efa5_prof);

        
        $__internal_4bf5bcfd1f82adbf50f3f230b2fbb693f8ccd748dfc0f1a0d8ec4dde7d6b5179->leave($__internal_4bf5bcfd1f82adbf50f3f230b2fbb693f8ccd748dfc0f1a0d8ec4dde7d6b5179_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_6e19ea8da6d6755d2a3988bc2c1ba707aa8fbbfde55da2a4cf9f96c53d6578ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e19ea8da6d6755d2a3988bc2c1ba707aa8fbbfde55da2a4cf9f96c53d6578ab->enter($__internal_6e19ea8da6d6755d2a3988bc2c1ba707aa8fbbfde55da2a4cf9f96c53d6578ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_a3e957d781ffada9df40cb8b14cac8c647be42cbcc4c2873895d099327bf8f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3e957d781ffada9df40cb8b14cac8c647be42cbcc4c2873895d099327bf8f02->enter($__internal_a3e957d781ffada9df40cb8b14cac8c647be42cbcc4c2873895d099327bf8f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_a3e957d781ffada9df40cb8b14cac8c647be42cbcc4c2873895d099327bf8f02->leave($__internal_a3e957d781ffada9df40cb8b14cac8c647be42cbcc4c2873895d099327bf8f02_prof);

        
        $__internal_6e19ea8da6d6755d2a3988bc2c1ba707aa8fbbfde55da2a4cf9f96c53d6578ab->leave($__internal_6e19ea8da6d6755d2a3988bc2c1ba707aa8fbbfde55da2a4cf9f96c53d6578ab_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_52d73f2c93e2ab75efdde6c167778e6b7799a92bc60b70c229bfee4adbee001f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d73f2c93e2ab75efdde6c167778e6b7799a92bc60b70c229bfee4adbee001f->enter($__internal_52d73f2c93e2ab75efdde6c167778e6b7799a92bc60b70c229bfee4adbee001f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_26d52ca1ac11f389479dc15476cd188464b970f1ca583ff4159c8adf8d8f47cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d52ca1ac11f389479dc15476cd188464b970f1ca583ff4159c8adf8d8f47cc->enter($__internal_26d52ca1ac11f389479dc15476cd188464b970f1ca583ff4159c8adf8d8f47cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_26d52ca1ac11f389479dc15476cd188464b970f1ca583ff4159c8adf8d8f47cc->leave($__internal_26d52ca1ac11f389479dc15476cd188464b970f1ca583ff4159c8adf8d8f47cc_prof);

        
        $__internal_52d73f2c93e2ab75efdde6c167778e6b7799a92bc60b70c229bfee4adbee001f->leave($__internal_52d73f2c93e2ab75efdde6c167778e6b7799a92bc60b70c229bfee4adbee001f_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_fd1aeedfbfef2db140fc88e0ab47d83b524d1c476bcadfb1ba03e3aa0c8c55d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd1aeedfbfef2db140fc88e0ab47d83b524d1c476bcadfb1ba03e3aa0c8c55d3->enter($__internal_fd1aeedfbfef2db140fc88e0ab47d83b524d1c476bcadfb1ba03e3aa0c8c55d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_972a188e04c8b64f3796331106dec7f5b0610a456cc296645c66f6f867728bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972a188e04c8b64f3796331106dec7f5b0610a456cc296645c66f6f867728bd9->enter($__internal_972a188e04c8b64f3796331106dec7f5b0610a456cc296645c66f6f867728bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_972a188e04c8b64f3796331106dec7f5b0610a456cc296645c66f6f867728bd9->leave($__internal_972a188e04c8b64f3796331106dec7f5b0610a456cc296645c66f6f867728bd9_prof);

        
        $__internal_fd1aeedfbfef2db140fc88e0ab47d83b524d1c476bcadfb1ba03e3aa0c8c55d3->leave($__internal_fd1aeedfbfef2db140fc88e0ab47d83b524d1c476bcadfb1ba03e3aa0c8c55d3_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_ea1d6b4fb1a13b06599011b20546d296b9c09482594f9d2c7f19f389c834be75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea1d6b4fb1a13b06599011b20546d296b9c09482594f9d2c7f19f389c834be75->enter($__internal_ea1d6b4fb1a13b06599011b20546d296b9c09482594f9d2c7f19f389c834be75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_5879104affdd2e0ea055a761e45bcd129b5b0a478499b9d05abd19ac1ffb3a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5879104affdd2e0ea055a761e45bcd129b5b0a478499b9d05abd19ac1ffb3a01->enter($__internal_5879104affdd2e0ea055a761e45bcd129b5b0a478499b9d05abd19ac1ffb3a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_5879104affdd2e0ea055a761e45bcd129b5b0a478499b9d05abd19ac1ffb3a01->leave($__internal_5879104affdd2e0ea055a761e45bcd129b5b0a478499b9d05abd19ac1ffb3a01_prof);

        
        $__internal_ea1d6b4fb1a13b06599011b20546d296b9c09482594f9d2c7f19f389c834be75->leave($__internal_ea1d6b4fb1a13b06599011b20546d296b9c09482594f9d2c7f19f389c834be75_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_b65f7e9f33f1c7ef8219b32480d4ba9fa1692a9693a12c26a99e8ef97723672c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b65f7e9f33f1c7ef8219b32480d4ba9fa1692a9693a12c26a99e8ef97723672c->enter($__internal_b65f7e9f33f1c7ef8219b32480d4ba9fa1692a9693a12c26a99e8ef97723672c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_1b1c89ed7022a070760bf4d918d21a5c70077f58032dbc0497f7c2f3872ba646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b1c89ed7022a070760bf4d918d21a5c70077f58032dbc0497f7c2f3872ba646->enter($__internal_1b1c89ed7022a070760bf4d918d21a5c70077f58032dbc0497f7c2f3872ba646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_1b1c89ed7022a070760bf4d918d21a5c70077f58032dbc0497f7c2f3872ba646->leave($__internal_1b1c89ed7022a070760bf4d918d21a5c70077f58032dbc0497f7c2f3872ba646_prof);

        
        $__internal_b65f7e9f33f1c7ef8219b32480d4ba9fa1692a9693a12c26a99e8ef97723672c->leave($__internal_b65f7e9f33f1c7ef8219b32480d4ba9fa1692a9693a12c26a99e8ef97723672c_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_45f74607a56b57c9288773ba70abf3479aaf709c5d9cb03f4a269483a540d0bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45f74607a56b57c9288773ba70abf3479aaf709c5d9cb03f4a269483a540d0bf->enter($__internal_45f74607a56b57c9288773ba70abf3479aaf709c5d9cb03f4a269483a540d0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_b6dfa2981e42e4d93eb4a793c7c2e1bb99d7d907a5408f482d2b0ac95f46878f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6dfa2981e42e4d93eb4a793c7c2e1bb99d7d907a5408f482d2b0ac95f46878f->enter($__internal_b6dfa2981e42e4d93eb4a793c7c2e1bb99d7d907a5408f482d2b0ac95f46878f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_b6dfa2981e42e4d93eb4a793c7c2e1bb99d7d907a5408f482d2b0ac95f46878f->leave($__internal_b6dfa2981e42e4d93eb4a793c7c2e1bb99d7d907a5408f482d2b0ac95f46878f_prof);

        
        $__internal_45f74607a56b57c9288773ba70abf3479aaf709c5d9cb03f4a269483a540d0bf->leave($__internal_45f74607a56b57c9288773ba70abf3479aaf709c5d9cb03f4a269483a540d0bf_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_9f8d198bd1eb29cc4687c7f7fecbde4502c9f2ddda7c08c5d3d4b6d903dc5cdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f8d198bd1eb29cc4687c7f7fecbde4502c9f2ddda7c08c5d3d4b6d903dc5cdf->enter($__internal_9f8d198bd1eb29cc4687c7f7fecbde4502c9f2ddda7c08c5d3d4b6d903dc5cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_84badf152b303afdfdd647aef9d7f39a53eb21e389ba90ea0314e587c372f97c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84badf152b303afdfdd647aef9d7f39a53eb21e389ba90ea0314e587c372f97c->enter($__internal_84badf152b303afdfdd647aef9d7f39a53eb21e389ba90ea0314e587c372f97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_84badf152b303afdfdd647aef9d7f39a53eb21e389ba90ea0314e587c372f97c->leave($__internal_84badf152b303afdfdd647aef9d7f39a53eb21e389ba90ea0314e587c372f97c_prof);

        
        $__internal_9f8d198bd1eb29cc4687c7f7fecbde4502c9f2ddda7c08c5d3d4b6d903dc5cdf->leave($__internal_9f8d198bd1eb29cc4687c7f7fecbde4502c9f2ddda7c08c5d3d4b6d903dc5cdf_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_2d95f514067456415a546eeb240acf18cac4a62322336bf6ea13083cc6d80b2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d95f514067456415a546eeb240acf18cac4a62322336bf6ea13083cc6d80b2d->enter($__internal_2d95f514067456415a546eeb240acf18cac4a62322336bf6ea13083cc6d80b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_2cc476f84c1f87093a9adfdb845462d2fef90823f6cac3157c2b5dea829570bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc476f84c1f87093a9adfdb845462d2fef90823f6cac3157c2b5dea829570bc->enter($__internal_2cc476f84c1f87093a9adfdb845462d2fef90823f6cac3157c2b5dea829570bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_2cc476f84c1f87093a9adfdb845462d2fef90823f6cac3157c2b5dea829570bc->leave($__internal_2cc476f84c1f87093a9adfdb845462d2fef90823f6cac3157c2b5dea829570bc_prof);

        
        $__internal_2d95f514067456415a546eeb240acf18cac4a62322336bf6ea13083cc6d80b2d->leave($__internal_2d95f514067456415a546eeb240acf18cac4a62322336bf6ea13083cc6d80b2d_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_613fd3ca5036fa3dd29043d34fdd4b2e6e16d7b8aacee4aca21aab0f593f3168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_613fd3ca5036fa3dd29043d34fdd4b2e6e16d7b8aacee4aca21aab0f593f3168->enter($__internal_613fd3ca5036fa3dd29043d34fdd4b2e6e16d7b8aacee4aca21aab0f593f3168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_687cbf1de0599e7557ba412f79e5ac5aa27c4b451065b8c97b18176207b9d888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_687cbf1de0599e7557ba412f79e5ac5aa27c4b451065b8c97b18176207b9d888->enter($__internal_687cbf1de0599e7557ba412f79e5ac5aa27c4b451065b8c97b18176207b9d888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_687cbf1de0599e7557ba412f79e5ac5aa27c4b451065b8c97b18176207b9d888->leave($__internal_687cbf1de0599e7557ba412f79e5ac5aa27c4b451065b8c97b18176207b9d888_prof);

        
        $__internal_613fd3ca5036fa3dd29043d34fdd4b2e6e16d7b8aacee4aca21aab0f593f3168->leave($__internal_613fd3ca5036fa3dd29043d34fdd4b2e6e16d7b8aacee4aca21aab0f593f3168_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_5feb7af60c4290f78e61340fc6d08bcc63b750f26cff2f9e1dd2245a7fa5b78c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5feb7af60c4290f78e61340fc6d08bcc63b750f26cff2f9e1dd2245a7fa5b78c->enter($__internal_5feb7af60c4290f78e61340fc6d08bcc63b750f26cff2f9e1dd2245a7fa5b78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_d4c75e0be114c85bf28ff832d601364d9280cc2fc67d6b9886e28c26d4162344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c75e0be114c85bf28ff832d601364d9280cc2fc67d6b9886e28c26d4162344->enter($__internal_d4c75e0be114c85bf28ff832d601364d9280cc2fc67d6b9886e28c26d4162344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_d4c75e0be114c85bf28ff832d601364d9280cc2fc67d6b9886e28c26d4162344->leave($__internal_d4c75e0be114c85bf28ff832d601364d9280cc2fc67d6b9886e28c26d4162344_prof);

        
        $__internal_5feb7af60c4290f78e61340fc6d08bcc63b750f26cff2f9e1dd2245a7fa5b78c->leave($__internal_5feb7af60c4290f78e61340fc6d08bcc63b750f26cff2f9e1dd2245a7fa5b78c_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_2c782f8df2ddd19e9d999f2c8b862200a9f8c7acc1160db8053fe42c2fc26bd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c782f8df2ddd19e9d999f2c8b862200a9f8c7acc1160db8053fe42c2fc26bd3->enter($__internal_2c782f8df2ddd19e9d999f2c8b862200a9f8c7acc1160db8053fe42c2fc26bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_62a50d8b0165fa5669f560d5fc310cc2d36d1b1d5a772ca146bd0eb17c8263cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a50d8b0165fa5669f560d5fc310cc2d36d1b1d5a772ca146bd0eb17c8263cc->enter($__internal_62a50d8b0165fa5669f560d5fc310cc2d36d1b1d5a772ca146bd0eb17c8263cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_62a50d8b0165fa5669f560d5fc310cc2d36d1b1d5a772ca146bd0eb17c8263cc->leave($__internal_62a50d8b0165fa5669f560d5fc310cc2d36d1b1d5a772ca146bd0eb17c8263cc_prof);

        
        $__internal_2c782f8df2ddd19e9d999f2c8b862200a9f8c7acc1160db8053fe42c2fc26bd3->leave($__internal_2c782f8df2ddd19e9d999f2c8b862200a9f8c7acc1160db8053fe42c2fc26bd3_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_9db5acbde3fefd66742760cbf77acac5075059e3ad11569ef8ded7844abea074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db5acbde3fefd66742760cbf77acac5075059e3ad11569ef8ded7844abea074->enter($__internal_9db5acbde3fefd66742760cbf77acac5075059e3ad11569ef8ded7844abea074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_764f27ca5d18fb2784a8fe1127e9c9433c392b21566a1923e0a85475f8db6cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764f27ca5d18fb2784a8fe1127e9c9433c392b21566a1923e0a85475f8db6cab->enter($__internal_764f27ca5d18fb2784a8fe1127e9c9433c392b21566a1923e0a85475f8db6cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

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
        
        $__internal_764f27ca5d18fb2784a8fe1127e9c9433c392b21566a1923e0a85475f8db6cab->leave($__internal_764f27ca5d18fb2784a8fe1127e9c9433c392b21566a1923e0a85475f8db6cab_prof);

        
        $__internal_9db5acbde3fefd66742760cbf77acac5075059e3ad11569ef8ded7844abea074->leave($__internal_9db5acbde3fefd66742760cbf77acac5075059e3ad11569ef8ded7844abea074_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_eab5f91e2223a46e053ef2e51b480e6f29696b5c31b7d65762135af4faa5bbcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eab5f91e2223a46e053ef2e51b480e6f29696b5c31b7d65762135af4faa5bbcc->enter($__internal_eab5f91e2223a46e053ef2e51b480e6f29696b5c31b7d65762135af4faa5bbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_1b5b0a72e94bff87fd964bbd578e9946de0148b3142c169f0040e210ce1c306c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5b0a72e94bff87fd964bbd578e9946de0148b3142c169f0040e210ce1c306c->enter($__internal_1b5b0a72e94bff87fd964bbd578e9946de0148b3142c169f0040e210ce1c306c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_1b5b0a72e94bff87fd964bbd578e9946de0148b3142c169f0040e210ce1c306c->leave($__internal_1b5b0a72e94bff87fd964bbd578e9946de0148b3142c169f0040e210ce1c306c_prof);

        
        $__internal_eab5f91e2223a46e053ef2e51b480e6f29696b5c31b7d65762135af4faa5bbcc->leave($__internal_eab5f91e2223a46e053ef2e51b480e6f29696b5c31b7d65762135af4faa5bbcc_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_df80c362a27babb633a7c7b1ad080c416b1a9057ac7944666036736ff7f4861e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df80c362a27babb633a7c7b1ad080c416b1a9057ac7944666036736ff7f4861e->enter($__internal_df80c362a27babb633a7c7b1ad080c416b1a9057ac7944666036736ff7f4861e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_df83511a22c79809a1608cc69490256d6b3a6887a59fe11e4b1fdd0f9c7f2ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df83511a22c79809a1608cc69490256d6b3a6887a59fe11e4b1fdd0f9c7f2ddb->enter($__internal_df83511a22c79809a1608cc69490256d6b3a6887a59fe11e4b1fdd0f9c7f2ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_df83511a22c79809a1608cc69490256d6b3a6887a59fe11e4b1fdd0f9c7f2ddb->leave($__internal_df83511a22c79809a1608cc69490256d6b3a6887a59fe11e4b1fdd0f9c7f2ddb_prof);

        
        $__internal_df80c362a27babb633a7c7b1ad080c416b1a9057ac7944666036736ff7f4861e->leave($__internal_df80c362a27babb633a7c7b1ad080c416b1a9057ac7944666036736ff7f4861e_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_c505fd52b27eb3ba217662cb03edbfc249a5b553c62e2ce50a5f2d0543acf7c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c505fd52b27eb3ba217662cb03edbfc249a5b553c62e2ce50a5f2d0543acf7c7->enter($__internal_c505fd52b27eb3ba217662cb03edbfc249a5b553c62e2ce50a5f2d0543acf7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_889324503b04be4aa9888359152dee7420fa418456363acbd66d05e498ee419f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889324503b04be4aa9888359152dee7420fa418456363acbd66d05e498ee419f->enter($__internal_889324503b04be4aa9888359152dee7420fa418456363acbd66d05e498ee419f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_889324503b04be4aa9888359152dee7420fa418456363acbd66d05e498ee419f->leave($__internal_889324503b04be4aa9888359152dee7420fa418456363acbd66d05e498ee419f_prof);

        
        $__internal_c505fd52b27eb3ba217662cb03edbfc249a5b553c62e2ce50a5f2d0543acf7c7->leave($__internal_c505fd52b27eb3ba217662cb03edbfc249a5b553c62e2ce50a5f2d0543acf7c7_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_69db56f6c7bebeb6587012722d01fa92bf479a1ee38cce888a34b315ea91b441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69db56f6c7bebeb6587012722d01fa92bf479a1ee38cce888a34b315ea91b441->enter($__internal_69db56f6c7bebeb6587012722d01fa92bf479a1ee38cce888a34b315ea91b441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_92e36bcf580b9508b50c0e774b7e691d604251a0d0bcc3b8df28bdc5cb8dc37a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e36bcf580b9508b50c0e774b7e691d604251a0d0bcc3b8df28bdc5cb8dc37a->enter($__internal_92e36bcf580b9508b50c0e774b7e691d604251a0d0bcc3b8df28bdc5cb8dc37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_92e36bcf580b9508b50c0e774b7e691d604251a0d0bcc3b8df28bdc5cb8dc37a->leave($__internal_92e36bcf580b9508b50c0e774b7e691d604251a0d0bcc3b8df28bdc5cb8dc37a_prof);

        
        $__internal_69db56f6c7bebeb6587012722d01fa92bf479a1ee38cce888a34b315ea91b441->leave($__internal_69db56f6c7bebeb6587012722d01fa92bf479a1ee38cce888a34b315ea91b441_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_a9cf5bdff3d80064eeb4dd440d5e0f86b2b9ba5a16fc0c03141550a85cf82b3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9cf5bdff3d80064eeb4dd440d5e0f86b2b9ba5a16fc0c03141550a85cf82b3c->enter($__internal_a9cf5bdff3d80064eeb4dd440d5e0f86b2b9ba5a16fc0c03141550a85cf82b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_ba3ba2afc3d37f862ff29046d9fcd35bbf712169c483ab7b1669b6f2e5bf8e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba3ba2afc3d37f862ff29046d9fcd35bbf712169c483ab7b1669b6f2e5bf8e09->enter($__internal_ba3ba2afc3d37f862ff29046d9fcd35bbf712169c483ab7b1669b6f2e5bf8e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ba3ba2afc3d37f862ff29046d9fcd35bbf712169c483ab7b1669b6f2e5bf8e09->leave($__internal_ba3ba2afc3d37f862ff29046d9fcd35bbf712169c483ab7b1669b6f2e5bf8e09_prof);

        
        $__internal_a9cf5bdff3d80064eeb4dd440d5e0f86b2b9ba5a16fc0c03141550a85cf82b3c->leave($__internal_a9cf5bdff3d80064eeb4dd440d5e0f86b2b9ba5a16fc0c03141550a85cf82b3c_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_328f506da7efaba662e4e7aed7576363043d4260463d5f272a49d10100ea1dbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_328f506da7efaba662e4e7aed7576363043d4260463d5f272a49d10100ea1dbd->enter($__internal_328f506da7efaba662e4e7aed7576363043d4260463d5f272a49d10100ea1dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_be4bf835b4c37d85ebc09f9c273d5433662dfb872a313b8365bf90cb9c236dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4bf835b4c37d85ebc09f9c273d5433662dfb872a313b8365bf90cb9c236dc4->enter($__internal_be4bf835b4c37d85ebc09f9c273d5433662dfb872a313b8365bf90cb9c236dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_be4bf835b4c37d85ebc09f9c273d5433662dfb872a313b8365bf90cb9c236dc4->leave($__internal_be4bf835b4c37d85ebc09f9c273d5433662dfb872a313b8365bf90cb9c236dc4_prof);

        
        $__internal_328f506da7efaba662e4e7aed7576363043d4260463d5f272a49d10100ea1dbd->leave($__internal_328f506da7efaba662e4e7aed7576363043d4260463d5f272a49d10100ea1dbd_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_2b4863c9ff4ae94849f4029029ede54a7802f2b94a3438c7ab5010f7cab8b4ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b4863c9ff4ae94849f4029029ede54a7802f2b94a3438c7ab5010f7cab8b4ba->enter($__internal_2b4863c9ff4ae94849f4029029ede54a7802f2b94a3438c7ab5010f7cab8b4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_0bb758fcc0a97c7f1998e32ef1f3ac7cdff4826e16774f220dfc24f42460e1a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bb758fcc0a97c7f1998e32ef1f3ac7cdff4826e16774f220dfc24f42460e1a4->enter($__internal_0bb758fcc0a97c7f1998e32ef1f3ac7cdff4826e16774f220dfc24f42460e1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0bb758fcc0a97c7f1998e32ef1f3ac7cdff4826e16774f220dfc24f42460e1a4->leave($__internal_0bb758fcc0a97c7f1998e32ef1f3ac7cdff4826e16774f220dfc24f42460e1a4_prof);

        
        $__internal_2b4863c9ff4ae94849f4029029ede54a7802f2b94a3438c7ab5010f7cab8b4ba->leave($__internal_2b4863c9ff4ae94849f4029029ede54a7802f2b94a3438c7ab5010f7cab8b4ba_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_803e0ee8c322c1e18bbbcba39631e4f5861907e42016d638f46ef2d2b1911924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_803e0ee8c322c1e18bbbcba39631e4f5861907e42016d638f46ef2d2b1911924->enter($__internal_803e0ee8c322c1e18bbbcba39631e4f5861907e42016d638f46ef2d2b1911924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_202bf7ee2118b2aa7c9986a1ccce3d391496ea6fe3cedab935619682ba07ef4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202bf7ee2118b2aa7c9986a1ccce3d391496ea6fe3cedab935619682ba07ef4b->enter($__internal_202bf7ee2118b2aa7c9986a1ccce3d391496ea6fe3cedab935619682ba07ef4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_202bf7ee2118b2aa7c9986a1ccce3d391496ea6fe3cedab935619682ba07ef4b->leave($__internal_202bf7ee2118b2aa7c9986a1ccce3d391496ea6fe3cedab935619682ba07ef4b_prof);

        
        $__internal_803e0ee8c322c1e18bbbcba39631e4f5861907e42016d638f46ef2d2b1911924->leave($__internal_803e0ee8c322c1e18bbbcba39631e4f5861907e42016d638f46ef2d2b1911924_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_fd02d3d108f6df804d6966f3fc5e8cc6e119784f4cd211c91873156eae04000f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd02d3d108f6df804d6966f3fc5e8cc6e119784f4cd211c91873156eae04000f->enter($__internal_fd02d3d108f6df804d6966f3fc5e8cc6e119784f4cd211c91873156eae04000f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_21fd7f457182ff0ea2f1cd4c3a20707433bdafc8ec9b6a333d9067f200994fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21fd7f457182ff0ea2f1cd4c3a20707433bdafc8ec9b6a333d9067f200994fe7->enter($__internal_21fd7f457182ff0ea2f1cd4c3a20707433bdafc8ec9b6a333d9067f200994fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_21fd7f457182ff0ea2f1cd4c3a20707433bdafc8ec9b6a333d9067f200994fe7->leave($__internal_21fd7f457182ff0ea2f1cd4c3a20707433bdafc8ec9b6a333d9067f200994fe7_prof);

        
        $__internal_fd02d3d108f6df804d6966f3fc5e8cc6e119784f4cd211c91873156eae04000f->leave($__internal_fd02d3d108f6df804d6966f3fc5e8cc6e119784f4cd211c91873156eae04000f_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_26474a81b7797cb6a28a63c3a5be64ccbe18267dca36e54e97e1e1886316274e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26474a81b7797cb6a28a63c3a5be64ccbe18267dca36e54e97e1e1886316274e->enter($__internal_26474a81b7797cb6a28a63c3a5be64ccbe18267dca36e54e97e1e1886316274e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_db359d8e45a26f5bbaa4e77abf035fc2421a39419e0132bad6f2329ccd7fd430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db359d8e45a26f5bbaa4e77abf035fc2421a39419e0132bad6f2329ccd7fd430->enter($__internal_db359d8e45a26f5bbaa4e77abf035fc2421a39419e0132bad6f2329ccd7fd430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_db359d8e45a26f5bbaa4e77abf035fc2421a39419e0132bad6f2329ccd7fd430->leave($__internal_db359d8e45a26f5bbaa4e77abf035fc2421a39419e0132bad6f2329ccd7fd430_prof);

        
        $__internal_26474a81b7797cb6a28a63c3a5be64ccbe18267dca36e54e97e1e1886316274e->leave($__internal_26474a81b7797cb6a28a63c3a5be64ccbe18267dca36e54e97e1e1886316274e_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_4c6f1ac62328cf194771eeecebe5b44c3bcecadb9d9bb45dab15ed4b80eca662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c6f1ac62328cf194771eeecebe5b44c3bcecadb9d9bb45dab15ed4b80eca662->enter($__internal_4c6f1ac62328cf194771eeecebe5b44c3bcecadb9d9bb45dab15ed4b80eca662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_d1518fbac8c0a1269ed6de9f01533717906171aa6a2a142b8f0abcb3c4cc3a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1518fbac8c0a1269ed6de9f01533717906171aa6a2a142b8f0abcb3c4cc3a86->enter($__internal_d1518fbac8c0a1269ed6de9f01533717906171aa6a2a142b8f0abcb3c4cc3a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_d1518fbac8c0a1269ed6de9f01533717906171aa6a2a142b8f0abcb3c4cc3a86->leave($__internal_d1518fbac8c0a1269ed6de9f01533717906171aa6a2a142b8f0abcb3c4cc3a86_prof);

        
        $__internal_4c6f1ac62328cf194771eeecebe5b44c3bcecadb9d9bb45dab15ed4b80eca662->leave($__internal_4c6f1ac62328cf194771eeecebe5b44c3bcecadb9d9bb45dab15ed4b80eca662_prof);

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
