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
        $__internal_52ee4ee062212c0f62745898ca50ce4b3f84a6135fb4672e2dd57d1ed4840f4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52ee4ee062212c0f62745898ca50ce4b3f84a6135fb4672e2dd57d1ed4840f4b->enter($__internal_52ee4ee062212c0f62745898ca50ce4b3f84a6135fb4672e2dd57d1ed4840f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_406f08b41b35304963975801947df8f73bf6e05ec570e418812f46b3ff866ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406f08b41b35304963975801947df8f73bf6e05ec570e418812f46b3ff866ea4->enter($__internal_406f08b41b35304963975801947df8f73bf6e05ec570e418812f46b3ff866ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52ee4ee062212c0f62745898ca50ce4b3f84a6135fb4672e2dd57d1ed4840f4b->leave($__internal_52ee4ee062212c0f62745898ca50ce4b3f84a6135fb4672e2dd57d1ed4840f4b_prof);

        
        $__internal_406f08b41b35304963975801947df8f73bf6e05ec570e418812f46b3ff866ea4->leave($__internal_406f08b41b35304963975801947df8f73bf6e05ec570e418812f46b3ff866ea4_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_7f5ed5122ae625ec06a822f3cfd61177a47b3f5f760bc557caadad469d03f390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f5ed5122ae625ec06a822f3cfd61177a47b3f5f760bc557caadad469d03f390->enter($__internal_7f5ed5122ae625ec06a822f3cfd61177a47b3f5f760bc557caadad469d03f390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_cc0ebcd344c5aab3d3784dfc3369438843dbe4526fd90d8b4f159992aacf09f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0ebcd344c5aab3d3784dfc3369438843dbe4526fd90d8b4f159992aacf09f7->enter($__internal_cc0ebcd344c5aab3d3784dfc3369438843dbe4526fd90d8b4f159992aacf09f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_cc0ebcd344c5aab3d3784dfc3369438843dbe4526fd90d8b4f159992aacf09f7->leave($__internal_cc0ebcd344c5aab3d3784dfc3369438843dbe4526fd90d8b4f159992aacf09f7_prof);

        
        $__internal_7f5ed5122ae625ec06a822f3cfd61177a47b3f5f760bc557caadad469d03f390->leave($__internal_7f5ed5122ae625ec06a822f3cfd61177a47b3f5f760bc557caadad469d03f390_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_da1523d0bc27a9363db47b9bd7605b4558d865975c48a5151b1852c607a5e6be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da1523d0bc27a9363db47b9bd7605b4558d865975c48a5151b1852c607a5e6be->enter($__internal_da1523d0bc27a9363db47b9bd7605b4558d865975c48a5151b1852c607a5e6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_295d83944420c2a7b32e4407c026cffb57419202e8e439161e96f2f224a208c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295d83944420c2a7b32e4407c026cffb57419202e8e439161e96f2f224a208c7->enter($__internal_295d83944420c2a7b32e4407c026cffb57419202e8e439161e96f2f224a208c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_295d83944420c2a7b32e4407c026cffb57419202e8e439161e96f2f224a208c7->leave($__internal_295d83944420c2a7b32e4407c026cffb57419202e8e439161e96f2f224a208c7_prof);

        
        $__internal_da1523d0bc27a9363db47b9bd7605b4558d865975c48a5151b1852c607a5e6be->leave($__internal_da1523d0bc27a9363db47b9bd7605b4558d865975c48a5151b1852c607a5e6be_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_7f4619108e5ad5f056d58a1805ca1bdd0f9d4892e7c0a11c5a8b0590d6029d98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f4619108e5ad5f056d58a1805ca1bdd0f9d4892e7c0a11c5a8b0590d6029d98->enter($__internal_7f4619108e5ad5f056d58a1805ca1bdd0f9d4892e7c0a11c5a8b0590d6029d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_57d1990fc713727f3f6eb4906ab0a03af42fe8a8635aaea596e4f1ace1808591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d1990fc713727f3f6eb4906ab0a03af42fe8a8635aaea596e4f1ace1808591->enter($__internal_57d1990fc713727f3f6eb4906ab0a03af42fe8a8635aaea596e4f1ace1808591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_57d1990fc713727f3f6eb4906ab0a03af42fe8a8635aaea596e4f1ace1808591->leave($__internal_57d1990fc713727f3f6eb4906ab0a03af42fe8a8635aaea596e4f1ace1808591_prof);

        
        $__internal_7f4619108e5ad5f056d58a1805ca1bdd0f9d4892e7c0a11c5a8b0590d6029d98->leave($__internal_7f4619108e5ad5f056d58a1805ca1bdd0f9d4892e7c0a11c5a8b0590d6029d98_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_95f552db2f27cdf68461b70546a56676949885efbeaddcaf244b33c2ce0cb8a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f552db2f27cdf68461b70546a56676949885efbeaddcaf244b33c2ce0cb8a0->enter($__internal_95f552db2f27cdf68461b70546a56676949885efbeaddcaf244b33c2ce0cb8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_79560235e0066aa45072d8f5b9e904408c0d811d11fd0c5c29c4e1f7e8ed4ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79560235e0066aa45072d8f5b9e904408c0d811d11fd0c5c29c4e1f7e8ed4ba7->enter($__internal_79560235e0066aa45072d8f5b9e904408c0d811d11fd0c5c29c4e1f7e8ed4ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_79560235e0066aa45072d8f5b9e904408c0d811d11fd0c5c29c4e1f7e8ed4ba7->leave($__internal_79560235e0066aa45072d8f5b9e904408c0d811d11fd0c5c29c4e1f7e8ed4ba7_prof);

        
        $__internal_95f552db2f27cdf68461b70546a56676949885efbeaddcaf244b33c2ce0cb8a0->leave($__internal_95f552db2f27cdf68461b70546a56676949885efbeaddcaf244b33c2ce0cb8a0_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_745931d3d183f2e3d7c359760c9516b0f867bf38beaee91f40c296598ab84174 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_745931d3d183f2e3d7c359760c9516b0f867bf38beaee91f40c296598ab84174->enter($__internal_745931d3d183f2e3d7c359760c9516b0f867bf38beaee91f40c296598ab84174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_0b1a829a80770ec7e8280ecf04f6b29e5eb441e9e2522c4f147bda376262ecc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b1a829a80770ec7e8280ecf04f6b29e5eb441e9e2522c4f147bda376262ecc9->enter($__internal_0b1a829a80770ec7e8280ecf04f6b29e5eb441e9e2522c4f147bda376262ecc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_0b1a829a80770ec7e8280ecf04f6b29e5eb441e9e2522c4f147bda376262ecc9->leave($__internal_0b1a829a80770ec7e8280ecf04f6b29e5eb441e9e2522c4f147bda376262ecc9_prof);

        
        $__internal_745931d3d183f2e3d7c359760c9516b0f867bf38beaee91f40c296598ab84174->leave($__internal_745931d3d183f2e3d7c359760c9516b0f867bf38beaee91f40c296598ab84174_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_b28b0ccf11424b118b845f793f330a325bf86cda54b6a5a1d48a0a71fa27a83e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b28b0ccf11424b118b845f793f330a325bf86cda54b6a5a1d48a0a71fa27a83e->enter($__internal_b28b0ccf11424b118b845f793f330a325bf86cda54b6a5a1d48a0a71fa27a83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_9910a69e3b1c5ee2f0df867cc92bdf404dd90856ff7ce460eda90c54e67c76ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9910a69e3b1c5ee2f0df867cc92bdf404dd90856ff7ce460eda90c54e67c76ec->enter($__internal_9910a69e3b1c5ee2f0df867cc92bdf404dd90856ff7ce460eda90c54e67c76ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_9910a69e3b1c5ee2f0df867cc92bdf404dd90856ff7ce460eda90c54e67c76ec->leave($__internal_9910a69e3b1c5ee2f0df867cc92bdf404dd90856ff7ce460eda90c54e67c76ec_prof);

        
        $__internal_b28b0ccf11424b118b845f793f330a325bf86cda54b6a5a1d48a0a71fa27a83e->leave($__internal_b28b0ccf11424b118b845f793f330a325bf86cda54b6a5a1d48a0a71fa27a83e_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_10af0601cec445eac1f2c3c56dd0a709adfd14ff640ecdee7264a8a77918e593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10af0601cec445eac1f2c3c56dd0a709adfd14ff640ecdee7264a8a77918e593->enter($__internal_10af0601cec445eac1f2c3c56dd0a709adfd14ff640ecdee7264a8a77918e593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_69368aebc9da88985866f5f53f27780a6df69b6ed74699256ed8687f677c36d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69368aebc9da88985866f5f53f27780a6df69b6ed74699256ed8687f677c36d1->enter($__internal_69368aebc9da88985866f5f53f27780a6df69b6ed74699256ed8687f677c36d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_69368aebc9da88985866f5f53f27780a6df69b6ed74699256ed8687f677c36d1->leave($__internal_69368aebc9da88985866f5f53f27780a6df69b6ed74699256ed8687f677c36d1_prof);

        
        $__internal_10af0601cec445eac1f2c3c56dd0a709adfd14ff640ecdee7264a8a77918e593->leave($__internal_10af0601cec445eac1f2c3c56dd0a709adfd14ff640ecdee7264a8a77918e593_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_14b845aa998c76d95497a66cbe2dcd9a338240427acb5d31df2b6a568a851211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14b845aa998c76d95497a66cbe2dcd9a338240427acb5d31df2b6a568a851211->enter($__internal_14b845aa998c76d95497a66cbe2dcd9a338240427acb5d31df2b6a568a851211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_1477d736bc355346757b7c3e2891628b758abf0f0e59bf4a9f85ea4292bd6830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1477d736bc355346757b7c3e2891628b758abf0f0e59bf4a9f85ea4292bd6830->enter($__internal_1477d736bc355346757b7c3e2891628b758abf0f0e59bf4a9f85ea4292bd6830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_1477d736bc355346757b7c3e2891628b758abf0f0e59bf4a9f85ea4292bd6830->leave($__internal_1477d736bc355346757b7c3e2891628b758abf0f0e59bf4a9f85ea4292bd6830_prof);

        
        $__internal_14b845aa998c76d95497a66cbe2dcd9a338240427acb5d31df2b6a568a851211->leave($__internal_14b845aa998c76d95497a66cbe2dcd9a338240427acb5d31df2b6a568a851211_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_7fbb470f529aae6f90730b5bd389ac23a7e9fcca94ad0fe3f06bf5413a304598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fbb470f529aae6f90730b5bd389ac23a7e9fcca94ad0fe3f06bf5413a304598->enter($__internal_7fbb470f529aae6f90730b5bd389ac23a7e9fcca94ad0fe3f06bf5413a304598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_f9925b89e71fc92273e43d1cf110df3a53a27c90d7de644cfe32f127386b2695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9925b89e71fc92273e43d1cf110df3a53a27c90d7de644cfe32f127386b2695->enter($__internal_f9925b89e71fc92273e43d1cf110df3a53a27c90d7de644cfe32f127386b2695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_f9925b89e71fc92273e43d1cf110df3a53a27c90d7de644cfe32f127386b2695->leave($__internal_f9925b89e71fc92273e43d1cf110df3a53a27c90d7de644cfe32f127386b2695_prof);

        
        $__internal_7fbb470f529aae6f90730b5bd389ac23a7e9fcca94ad0fe3f06bf5413a304598->leave($__internal_7fbb470f529aae6f90730b5bd389ac23a7e9fcca94ad0fe3f06bf5413a304598_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_5eaafccd250ad9b5d27b2eb34e2cb091ce5116eabe1f0c04c01a1d1ce5e37c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eaafccd250ad9b5d27b2eb34e2cb091ce5116eabe1f0c04c01a1d1ce5e37c09->enter($__internal_5eaafccd250ad9b5d27b2eb34e2cb091ce5116eabe1f0c04c01a1d1ce5e37c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_07a9e87f23ccaa9ea8e3c3ae08f88986b72c28e47fc7ea49856005c3d1f9bfa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a9e87f23ccaa9ea8e3c3ae08f88986b72c28e47fc7ea49856005c3d1f9bfa5->enter($__internal_07a9e87f23ccaa9ea8e3c3ae08f88986b72c28e47fc7ea49856005c3d1f9bfa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_07a9e87f23ccaa9ea8e3c3ae08f88986b72c28e47fc7ea49856005c3d1f9bfa5->leave($__internal_07a9e87f23ccaa9ea8e3c3ae08f88986b72c28e47fc7ea49856005c3d1f9bfa5_prof);

        
        $__internal_5eaafccd250ad9b5d27b2eb34e2cb091ce5116eabe1f0c04c01a1d1ce5e37c09->leave($__internal_5eaafccd250ad9b5d27b2eb34e2cb091ce5116eabe1f0c04c01a1d1ce5e37c09_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_f6544f936c7b2af42b4690349646f6454c9a033e9ed35e30ca8b77288e2ccc57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6544f936c7b2af42b4690349646f6454c9a033e9ed35e30ca8b77288e2ccc57->enter($__internal_f6544f936c7b2af42b4690349646f6454c9a033e9ed35e30ca8b77288e2ccc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_82e89e05dd55095d2b4ee5167c2e03401d0cede12f126240c75674287042e4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e89e05dd55095d2b4ee5167c2e03401d0cede12f126240c75674287042e4c5->enter($__internal_82e89e05dd55095d2b4ee5167c2e03401d0cede12f126240c75674287042e4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_82e89e05dd55095d2b4ee5167c2e03401d0cede12f126240c75674287042e4c5->leave($__internal_82e89e05dd55095d2b4ee5167c2e03401d0cede12f126240c75674287042e4c5_prof);

        
        $__internal_f6544f936c7b2af42b4690349646f6454c9a033e9ed35e30ca8b77288e2ccc57->leave($__internal_f6544f936c7b2af42b4690349646f6454c9a033e9ed35e30ca8b77288e2ccc57_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_6a520905c2eb8ec7be0eee211d5fb4f43958260253d4c600cf44109da81b14fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a520905c2eb8ec7be0eee211d5fb4f43958260253d4c600cf44109da81b14fb->enter($__internal_6a520905c2eb8ec7be0eee211d5fb4f43958260253d4c600cf44109da81b14fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_1c1fe2d5fd1552a3330c7df5f033eb944daf4e5b43e0de8bf2ffea55886f66cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1fe2d5fd1552a3330c7df5f033eb944daf4e5b43e0de8bf2ffea55886f66cb->enter($__internal_1c1fe2d5fd1552a3330c7df5f033eb944daf4e5b43e0de8bf2ffea55886f66cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_1c1fe2d5fd1552a3330c7df5f033eb944daf4e5b43e0de8bf2ffea55886f66cb->leave($__internal_1c1fe2d5fd1552a3330c7df5f033eb944daf4e5b43e0de8bf2ffea55886f66cb_prof);

        
        $__internal_6a520905c2eb8ec7be0eee211d5fb4f43958260253d4c600cf44109da81b14fb->leave($__internal_6a520905c2eb8ec7be0eee211d5fb4f43958260253d4c600cf44109da81b14fb_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_e2266eaf46442d0c96a54aec94496dd2c2b8c6f0ff04d6cff85b2e094a81cae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2266eaf46442d0c96a54aec94496dd2c2b8c6f0ff04d6cff85b2e094a81cae5->enter($__internal_e2266eaf46442d0c96a54aec94496dd2c2b8c6f0ff04d6cff85b2e094a81cae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_fdee1794511c3487559da849241c16b7abaa2f864991bf13c5d52e01d5f4c73d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdee1794511c3487559da849241c16b7abaa2f864991bf13c5d52e01d5f4c73d->enter($__internal_fdee1794511c3487559da849241c16b7abaa2f864991bf13c5d52e01d5f4c73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_fdee1794511c3487559da849241c16b7abaa2f864991bf13c5d52e01d5f4c73d->leave($__internal_fdee1794511c3487559da849241c16b7abaa2f864991bf13c5d52e01d5f4c73d_prof);

        
        $__internal_e2266eaf46442d0c96a54aec94496dd2c2b8c6f0ff04d6cff85b2e094a81cae5->leave($__internal_e2266eaf46442d0c96a54aec94496dd2c2b8c6f0ff04d6cff85b2e094a81cae5_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_3430b2c4faa0e940325997d19ab13569648e31162f08c8b5e27c07c1fc3b9033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3430b2c4faa0e940325997d19ab13569648e31162f08c8b5e27c07c1fc3b9033->enter($__internal_3430b2c4faa0e940325997d19ab13569648e31162f08c8b5e27c07c1fc3b9033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_4333d8c0416880da1bfaba5fe183b6ac505f158c025f85a8d4c70c100d10bfc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4333d8c0416880da1bfaba5fe183b6ac505f158c025f85a8d4c70c100d10bfc2->enter($__internal_4333d8c0416880da1bfaba5fe183b6ac505f158c025f85a8d4c70c100d10bfc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

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
        
        $__internal_4333d8c0416880da1bfaba5fe183b6ac505f158c025f85a8d4c70c100d10bfc2->leave($__internal_4333d8c0416880da1bfaba5fe183b6ac505f158c025f85a8d4c70c100d10bfc2_prof);

        
        $__internal_3430b2c4faa0e940325997d19ab13569648e31162f08c8b5e27c07c1fc3b9033->leave($__internal_3430b2c4faa0e940325997d19ab13569648e31162f08c8b5e27c07c1fc3b9033_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_09edad3ca3319f0b83983c4d19c6a718400dd661b4ac4971b3dfae9eb5370b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09edad3ca3319f0b83983c4d19c6a718400dd661b4ac4971b3dfae9eb5370b7c->enter($__internal_09edad3ca3319f0b83983c4d19c6a718400dd661b4ac4971b3dfae9eb5370b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_caf630d44b788306ea44246bccd20ad6f4c5381c046d5ffcfd43fd19917cc01f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf630d44b788306ea44246bccd20ad6f4c5381c046d5ffcfd43fd19917cc01f->enter($__internal_caf630d44b788306ea44246bccd20ad6f4c5381c046d5ffcfd43fd19917cc01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_caf630d44b788306ea44246bccd20ad6f4c5381c046d5ffcfd43fd19917cc01f->leave($__internal_caf630d44b788306ea44246bccd20ad6f4c5381c046d5ffcfd43fd19917cc01f_prof);

        
        $__internal_09edad3ca3319f0b83983c4d19c6a718400dd661b4ac4971b3dfae9eb5370b7c->leave($__internal_09edad3ca3319f0b83983c4d19c6a718400dd661b4ac4971b3dfae9eb5370b7c_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_7d96310eb7a613db8287d3a2fd2d0ea61604f89006fed9a237a28e6056df8854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d96310eb7a613db8287d3a2fd2d0ea61604f89006fed9a237a28e6056df8854->enter($__internal_7d96310eb7a613db8287d3a2fd2d0ea61604f89006fed9a237a28e6056df8854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_0e4369a731327c77491d4fcb2a95b60269300e879fe67a4ae92a5d267ee211c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e4369a731327c77491d4fcb2a95b60269300e879fe67a4ae92a5d267ee211c8->enter($__internal_0e4369a731327c77491d4fcb2a95b60269300e879fe67a4ae92a5d267ee211c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_0e4369a731327c77491d4fcb2a95b60269300e879fe67a4ae92a5d267ee211c8->leave($__internal_0e4369a731327c77491d4fcb2a95b60269300e879fe67a4ae92a5d267ee211c8_prof);

        
        $__internal_7d96310eb7a613db8287d3a2fd2d0ea61604f89006fed9a237a28e6056df8854->leave($__internal_7d96310eb7a613db8287d3a2fd2d0ea61604f89006fed9a237a28e6056df8854_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_98271726a51c0ffce9f92fbfc76ebe122d4c9bdca27b2316645acc49edfd7094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98271726a51c0ffce9f92fbfc76ebe122d4c9bdca27b2316645acc49edfd7094->enter($__internal_98271726a51c0ffce9f92fbfc76ebe122d4c9bdca27b2316645acc49edfd7094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_62e443f562e363b5c8dbcd331d6efa7675c69d89d89909021d20cf8293dbda97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e443f562e363b5c8dbcd331d6efa7675c69d89d89909021d20cf8293dbda97->enter($__internal_62e443f562e363b5c8dbcd331d6efa7675c69d89d89909021d20cf8293dbda97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_62e443f562e363b5c8dbcd331d6efa7675c69d89d89909021d20cf8293dbda97->leave($__internal_62e443f562e363b5c8dbcd331d6efa7675c69d89d89909021d20cf8293dbda97_prof);

        
        $__internal_98271726a51c0ffce9f92fbfc76ebe122d4c9bdca27b2316645acc49edfd7094->leave($__internal_98271726a51c0ffce9f92fbfc76ebe122d4c9bdca27b2316645acc49edfd7094_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b9e533eadee9917949f04dc95a93ef643229ec9e683cffa8f011220c52f5d305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9e533eadee9917949f04dc95a93ef643229ec9e683cffa8f011220c52f5d305->enter($__internal_b9e533eadee9917949f04dc95a93ef643229ec9e683cffa8f011220c52f5d305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e241079238baabb658fc79a03f90ced6efb65d96fcf185ff7af889543dc078ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e241079238baabb658fc79a03f90ced6efb65d96fcf185ff7af889543dc078ac->enter($__internal_e241079238baabb658fc79a03f90ced6efb65d96fcf185ff7af889543dc078ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_e241079238baabb658fc79a03f90ced6efb65d96fcf185ff7af889543dc078ac->leave($__internal_e241079238baabb658fc79a03f90ced6efb65d96fcf185ff7af889543dc078ac_prof);

        
        $__internal_b9e533eadee9917949f04dc95a93ef643229ec9e683cffa8f011220c52f5d305->leave($__internal_b9e533eadee9917949f04dc95a93ef643229ec9e683cffa8f011220c52f5d305_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_78684c99599e9e141dad4143c7b5f1861f8843da7b45afb4b855f0a888e73e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78684c99599e9e141dad4143c7b5f1861f8843da7b45afb4b855f0a888e73e9f->enter($__internal_78684c99599e9e141dad4143c7b5f1861f8843da7b45afb4b855f0a888e73e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_3396d931a84f0713e9a6c346816281281ec5effff2c0e51b66baafba2f825d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3396d931a84f0713e9a6c346816281281ec5effff2c0e51b66baafba2f825d61->enter($__internal_3396d931a84f0713e9a6c346816281281ec5effff2c0e51b66baafba2f825d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3396d931a84f0713e9a6c346816281281ec5effff2c0e51b66baafba2f825d61->leave($__internal_3396d931a84f0713e9a6c346816281281ec5effff2c0e51b66baafba2f825d61_prof);

        
        $__internal_78684c99599e9e141dad4143c7b5f1861f8843da7b45afb4b855f0a888e73e9f->leave($__internal_78684c99599e9e141dad4143c7b5f1861f8843da7b45afb4b855f0a888e73e9f_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_7b511fc7316617ecc696d9c082a01202fc6a6095525715e6fc67f149f9df1d90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b511fc7316617ecc696d9c082a01202fc6a6095525715e6fc67f149f9df1d90->enter($__internal_7b511fc7316617ecc696d9c082a01202fc6a6095525715e6fc67f149f9df1d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_46243bb5e6918b7aeef0f3f515d87ab67b1b1037349e62fc3e2adb0d6438ce08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46243bb5e6918b7aeef0f3f515d87ab67b1b1037349e62fc3e2adb0d6438ce08->enter($__internal_46243bb5e6918b7aeef0f3f515d87ab67b1b1037349e62fc3e2adb0d6438ce08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_46243bb5e6918b7aeef0f3f515d87ab67b1b1037349e62fc3e2adb0d6438ce08->leave($__internal_46243bb5e6918b7aeef0f3f515d87ab67b1b1037349e62fc3e2adb0d6438ce08_prof);

        
        $__internal_7b511fc7316617ecc696d9c082a01202fc6a6095525715e6fc67f149f9df1d90->leave($__internal_7b511fc7316617ecc696d9c082a01202fc6a6095525715e6fc67f149f9df1d90_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_d482f83d578d9621f52732edc898960e0339c0dde2ef4062f166980e1fdd3879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d482f83d578d9621f52732edc898960e0339c0dde2ef4062f166980e1fdd3879->enter($__internal_d482f83d578d9621f52732edc898960e0339c0dde2ef4062f166980e1fdd3879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_4aecf0e6e99fa7dbed9c960e3e148e6f9b7fa641c759dc441c195af55af3ede3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aecf0e6e99fa7dbed9c960e3e148e6f9b7fa641c759dc441c195af55af3ede3->enter($__internal_4aecf0e6e99fa7dbed9c960e3e148e6f9b7fa641c759dc441c195af55af3ede3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4aecf0e6e99fa7dbed9c960e3e148e6f9b7fa641c759dc441c195af55af3ede3->leave($__internal_4aecf0e6e99fa7dbed9c960e3e148e6f9b7fa641c759dc441c195af55af3ede3_prof);

        
        $__internal_d482f83d578d9621f52732edc898960e0339c0dde2ef4062f166980e1fdd3879->leave($__internal_d482f83d578d9621f52732edc898960e0339c0dde2ef4062f166980e1fdd3879_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_700b2767c896f3132bebee9dad207981055a48561ab19c09a4f5c16096c76c57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_700b2767c896f3132bebee9dad207981055a48561ab19c09a4f5c16096c76c57->enter($__internal_700b2767c896f3132bebee9dad207981055a48561ab19c09a4f5c16096c76c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_a6f26ce3685f84a6d61712e04ca3447f0ceb1322e17df480100124bd0d5de60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f26ce3685f84a6d61712e04ca3447f0ceb1322e17df480100124bd0d5de60e->enter($__internal_a6f26ce3685f84a6d61712e04ca3447f0ceb1322e17df480100124bd0d5de60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a6f26ce3685f84a6d61712e04ca3447f0ceb1322e17df480100124bd0d5de60e->leave($__internal_a6f26ce3685f84a6d61712e04ca3447f0ceb1322e17df480100124bd0d5de60e_prof);

        
        $__internal_700b2767c896f3132bebee9dad207981055a48561ab19c09a4f5c16096c76c57->leave($__internal_700b2767c896f3132bebee9dad207981055a48561ab19c09a4f5c16096c76c57_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_726a02012c00b87cac256565aca4e907b1d1f5d38d60f05bc62246b748c2ee8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_726a02012c00b87cac256565aca4e907b1d1f5d38d60f05bc62246b748c2ee8e->enter($__internal_726a02012c00b87cac256565aca4e907b1d1f5d38d60f05bc62246b748c2ee8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_55b1f8d32e7e175b5e7cbd0fb273b6e303d06e3de92e151dc0bfbf857caadfea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b1f8d32e7e175b5e7cbd0fb273b6e303d06e3de92e151dc0bfbf857caadfea->enter($__internal_55b1f8d32e7e175b5e7cbd0fb273b6e303d06e3de92e151dc0bfbf857caadfea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_55b1f8d32e7e175b5e7cbd0fb273b6e303d06e3de92e151dc0bfbf857caadfea->leave($__internal_55b1f8d32e7e175b5e7cbd0fb273b6e303d06e3de92e151dc0bfbf857caadfea_prof);

        
        $__internal_726a02012c00b87cac256565aca4e907b1d1f5d38d60f05bc62246b748c2ee8e->leave($__internal_726a02012c00b87cac256565aca4e907b1d1f5d38d60f05bc62246b748c2ee8e_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_717a8a26fb53f6a93f748482a73108396e382e9d87bf7998b88bd9e47830f72c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_717a8a26fb53f6a93f748482a73108396e382e9d87bf7998b88bd9e47830f72c->enter($__internal_717a8a26fb53f6a93f748482a73108396e382e9d87bf7998b88bd9e47830f72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_644e65c5f2f73bc3a52c6e9e7527925f82ffc1edada1f5e266e0f79054cabd7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644e65c5f2f73bc3a52c6e9e7527925f82ffc1edada1f5e266e0f79054cabd7b->enter($__internal_644e65c5f2f73bc3a52c6e9e7527925f82ffc1edada1f5e266e0f79054cabd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_644e65c5f2f73bc3a52c6e9e7527925f82ffc1edada1f5e266e0f79054cabd7b->leave($__internal_644e65c5f2f73bc3a52c6e9e7527925f82ffc1edada1f5e266e0f79054cabd7b_prof);

        
        $__internal_717a8a26fb53f6a93f748482a73108396e382e9d87bf7998b88bd9e47830f72c->leave($__internal_717a8a26fb53f6a93f748482a73108396e382e9d87bf7998b88bd9e47830f72c_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_46a9ec3fef0f169cd9a4fcdf44772d736e9d0947231f08f988e3c219e2655a4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46a9ec3fef0f169cd9a4fcdf44772d736e9d0947231f08f988e3c219e2655a4f->enter($__internal_46a9ec3fef0f169cd9a4fcdf44772d736e9d0947231f08f988e3c219e2655a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_1ffe83c689a14034e9dec9d6b3fef35f33eb9f5a22af1671ca537e800aa4ca9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ffe83c689a14034e9dec9d6b3fef35f33eb9f5a22af1671ca537e800aa4ca9c->enter($__internal_1ffe83c689a14034e9dec9d6b3fef35f33eb9f5a22af1671ca537e800aa4ca9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_1ffe83c689a14034e9dec9d6b3fef35f33eb9f5a22af1671ca537e800aa4ca9c->leave($__internal_1ffe83c689a14034e9dec9d6b3fef35f33eb9f5a22af1671ca537e800aa4ca9c_prof);

        
        $__internal_46a9ec3fef0f169cd9a4fcdf44772d736e9d0947231f08f988e3c219e2655a4f->leave($__internal_46a9ec3fef0f169cd9a4fcdf44772d736e9d0947231f08f988e3c219e2655a4f_prof);

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
