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
        $__internal_fdcf3106300cc1e209470cf83f4da5d276d9693adce8f78e39246f5ff42c2b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdcf3106300cc1e209470cf83f4da5d276d9693adce8f78e39246f5ff42c2b80->enter($__internal_fdcf3106300cc1e209470cf83f4da5d276d9693adce8f78e39246f5ff42c2b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_d1ce69075c9f82e9011d4182ffdbb1e7173d403486ff2e160ae5f0b7eb775e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ce69075c9f82e9011d4182ffdbb1e7173d403486ff2e160ae5f0b7eb775e89->enter($__internal_d1ce69075c9f82e9011d4182ffdbb1e7173d403486ff2e160ae5f0b7eb775e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdcf3106300cc1e209470cf83f4da5d276d9693adce8f78e39246f5ff42c2b80->leave($__internal_fdcf3106300cc1e209470cf83f4da5d276d9693adce8f78e39246f5ff42c2b80_prof);

        
        $__internal_d1ce69075c9f82e9011d4182ffdbb1e7173d403486ff2e160ae5f0b7eb775e89->leave($__internal_d1ce69075c9f82e9011d4182ffdbb1e7173d403486ff2e160ae5f0b7eb775e89_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_64d1e024e9988f7992e571938febda3515d390e7adede01f75a07923ab424da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d1e024e9988f7992e571938febda3515d390e7adede01f75a07923ab424da9->enter($__internal_64d1e024e9988f7992e571938febda3515d390e7adede01f75a07923ab424da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_38c0b564909eaae7784422f8cac3b22d3ad720a9b4ce6f9e05a6d12c96438d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c0b564909eaae7784422f8cac3b22d3ad720a9b4ce6f9e05a6d12c96438d78->enter($__internal_38c0b564909eaae7784422f8cac3b22d3ad720a9b4ce6f9e05a6d12c96438d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_38c0b564909eaae7784422f8cac3b22d3ad720a9b4ce6f9e05a6d12c96438d78->leave($__internal_38c0b564909eaae7784422f8cac3b22d3ad720a9b4ce6f9e05a6d12c96438d78_prof);

        
        $__internal_64d1e024e9988f7992e571938febda3515d390e7adede01f75a07923ab424da9->leave($__internal_64d1e024e9988f7992e571938febda3515d390e7adede01f75a07923ab424da9_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_cd812902bd34357664426347472bd89c0b5c13fd02f14084e7dcbd8f1ac93e9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd812902bd34357664426347472bd89c0b5c13fd02f14084e7dcbd8f1ac93e9d->enter($__internal_cd812902bd34357664426347472bd89c0b5c13fd02f14084e7dcbd8f1ac93e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_b0f8e2622939e562325a3d02fc69d0009cc9d38620fde4c94fe5aa2d966cdaa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f8e2622939e562325a3d02fc69d0009cc9d38620fde4c94fe5aa2d966cdaa4->enter($__internal_b0f8e2622939e562325a3d02fc69d0009cc9d38620fde4c94fe5aa2d966cdaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_b0f8e2622939e562325a3d02fc69d0009cc9d38620fde4c94fe5aa2d966cdaa4->leave($__internal_b0f8e2622939e562325a3d02fc69d0009cc9d38620fde4c94fe5aa2d966cdaa4_prof);

        
        $__internal_cd812902bd34357664426347472bd89c0b5c13fd02f14084e7dcbd8f1ac93e9d->leave($__internal_cd812902bd34357664426347472bd89c0b5c13fd02f14084e7dcbd8f1ac93e9d_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_8c119819dce28981f937eda931acab26dda24d64e4735db3a80f210d1fe61da1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c119819dce28981f937eda931acab26dda24d64e4735db3a80f210d1fe61da1->enter($__internal_8c119819dce28981f937eda931acab26dda24d64e4735db3a80f210d1fe61da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_38eb71a48a1555721e399316d7ec8c57a333698060debc88bb4a20a401b36906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38eb71a48a1555721e399316d7ec8c57a333698060debc88bb4a20a401b36906->enter($__internal_38eb71a48a1555721e399316d7ec8c57a333698060debc88bb4a20a401b36906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_38eb71a48a1555721e399316d7ec8c57a333698060debc88bb4a20a401b36906->leave($__internal_38eb71a48a1555721e399316d7ec8c57a333698060debc88bb4a20a401b36906_prof);

        
        $__internal_8c119819dce28981f937eda931acab26dda24d64e4735db3a80f210d1fe61da1->leave($__internal_8c119819dce28981f937eda931acab26dda24d64e4735db3a80f210d1fe61da1_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_786efb9dece311f73acee50bf5251a0b3a4dcdbbdd977338dd0010105dbf5d22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_786efb9dece311f73acee50bf5251a0b3a4dcdbbdd977338dd0010105dbf5d22->enter($__internal_786efb9dece311f73acee50bf5251a0b3a4dcdbbdd977338dd0010105dbf5d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_9609f744cf1d736ef9907a9b04da895cea47ec67e19d2e492b38f051a23114e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9609f744cf1d736ef9907a9b04da895cea47ec67e19d2e492b38f051a23114e9->enter($__internal_9609f744cf1d736ef9907a9b04da895cea47ec67e19d2e492b38f051a23114e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_9609f744cf1d736ef9907a9b04da895cea47ec67e19d2e492b38f051a23114e9->leave($__internal_9609f744cf1d736ef9907a9b04da895cea47ec67e19d2e492b38f051a23114e9_prof);

        
        $__internal_786efb9dece311f73acee50bf5251a0b3a4dcdbbdd977338dd0010105dbf5d22->leave($__internal_786efb9dece311f73acee50bf5251a0b3a4dcdbbdd977338dd0010105dbf5d22_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_5e8253a09d99d1c0c8fc2f9ce1828df511ff118ef33e4ec7f2db13d51227513a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e8253a09d99d1c0c8fc2f9ce1828df511ff118ef33e4ec7f2db13d51227513a->enter($__internal_5e8253a09d99d1c0c8fc2f9ce1828df511ff118ef33e4ec7f2db13d51227513a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_396be74a83b3ebcc13a310a14b86f50995a522e5c074f8a5d4fdd403cd30dcc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_396be74a83b3ebcc13a310a14b86f50995a522e5c074f8a5d4fdd403cd30dcc9->enter($__internal_396be74a83b3ebcc13a310a14b86f50995a522e5c074f8a5d4fdd403cd30dcc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_396be74a83b3ebcc13a310a14b86f50995a522e5c074f8a5d4fdd403cd30dcc9->leave($__internal_396be74a83b3ebcc13a310a14b86f50995a522e5c074f8a5d4fdd403cd30dcc9_prof);

        
        $__internal_5e8253a09d99d1c0c8fc2f9ce1828df511ff118ef33e4ec7f2db13d51227513a->leave($__internal_5e8253a09d99d1c0c8fc2f9ce1828df511ff118ef33e4ec7f2db13d51227513a_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_52ec086337154e63678040df2133b78ddac8e260744f8c9718c8bc362e023cee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52ec086337154e63678040df2133b78ddac8e260744f8c9718c8bc362e023cee->enter($__internal_52ec086337154e63678040df2133b78ddac8e260744f8c9718c8bc362e023cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_dec76444c354d989a4df0023f942052bc5889ca7134c9c4c7af52d1b9f6ce09e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec76444c354d989a4df0023f942052bc5889ca7134c9c4c7af52d1b9f6ce09e->enter($__internal_dec76444c354d989a4df0023f942052bc5889ca7134c9c4c7af52d1b9f6ce09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_dec76444c354d989a4df0023f942052bc5889ca7134c9c4c7af52d1b9f6ce09e->leave($__internal_dec76444c354d989a4df0023f942052bc5889ca7134c9c4c7af52d1b9f6ce09e_prof);

        
        $__internal_52ec086337154e63678040df2133b78ddac8e260744f8c9718c8bc362e023cee->leave($__internal_52ec086337154e63678040df2133b78ddac8e260744f8c9718c8bc362e023cee_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_a61e94efd94e2b40a03ba19cc02f007417ffc725cbe466d167754bcc0f426a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a61e94efd94e2b40a03ba19cc02f007417ffc725cbe466d167754bcc0f426a59->enter($__internal_a61e94efd94e2b40a03ba19cc02f007417ffc725cbe466d167754bcc0f426a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_86b958764ada70eee097e62caa5c6d8bf1992a972bfae10d608b80f8ea1df908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b958764ada70eee097e62caa5c6d8bf1992a972bfae10d608b80f8ea1df908->enter($__internal_86b958764ada70eee097e62caa5c6d8bf1992a972bfae10d608b80f8ea1df908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_86b958764ada70eee097e62caa5c6d8bf1992a972bfae10d608b80f8ea1df908->leave($__internal_86b958764ada70eee097e62caa5c6d8bf1992a972bfae10d608b80f8ea1df908_prof);

        
        $__internal_a61e94efd94e2b40a03ba19cc02f007417ffc725cbe466d167754bcc0f426a59->leave($__internal_a61e94efd94e2b40a03ba19cc02f007417ffc725cbe466d167754bcc0f426a59_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_175a32436005a6240e649b2baba648bb8f1c694fc086d069def3aebc3c893802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_175a32436005a6240e649b2baba648bb8f1c694fc086d069def3aebc3c893802->enter($__internal_175a32436005a6240e649b2baba648bb8f1c694fc086d069def3aebc3c893802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_65738fa5dd379917abd5d96a46ee2d1af6eb31f9c373d94b42e35e31550df6a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65738fa5dd379917abd5d96a46ee2d1af6eb31f9c373d94b42e35e31550df6a8->enter($__internal_65738fa5dd379917abd5d96a46ee2d1af6eb31f9c373d94b42e35e31550df6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_65738fa5dd379917abd5d96a46ee2d1af6eb31f9c373d94b42e35e31550df6a8->leave($__internal_65738fa5dd379917abd5d96a46ee2d1af6eb31f9c373d94b42e35e31550df6a8_prof);

        
        $__internal_175a32436005a6240e649b2baba648bb8f1c694fc086d069def3aebc3c893802->leave($__internal_175a32436005a6240e649b2baba648bb8f1c694fc086d069def3aebc3c893802_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_a60c6888ebabecb2463844bf49a441a78b2f681d771dc69acb68f91af90b1e0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a60c6888ebabecb2463844bf49a441a78b2f681d771dc69acb68f91af90b1e0a->enter($__internal_a60c6888ebabecb2463844bf49a441a78b2f681d771dc69acb68f91af90b1e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_f4bff04d7835ecfecd279e2149e72361dac4b61a95849538aab65cda61284569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4bff04d7835ecfecd279e2149e72361dac4b61a95849538aab65cda61284569->enter($__internal_f4bff04d7835ecfecd279e2149e72361dac4b61a95849538aab65cda61284569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_f4bff04d7835ecfecd279e2149e72361dac4b61a95849538aab65cda61284569->leave($__internal_f4bff04d7835ecfecd279e2149e72361dac4b61a95849538aab65cda61284569_prof);

        
        $__internal_a60c6888ebabecb2463844bf49a441a78b2f681d771dc69acb68f91af90b1e0a->leave($__internal_a60c6888ebabecb2463844bf49a441a78b2f681d771dc69acb68f91af90b1e0a_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_84a0f61930f4f78e8935c485debde6d76e9f8a0987050a3643bfbdb6ad0d613f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a0f61930f4f78e8935c485debde6d76e9f8a0987050a3643bfbdb6ad0d613f->enter($__internal_84a0f61930f4f78e8935c485debde6d76e9f8a0987050a3643bfbdb6ad0d613f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_21702d21c1eb72203ea97421c3291f05f5eca2282172a9e7cb67038b3c3c6b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21702d21c1eb72203ea97421c3291f05f5eca2282172a9e7cb67038b3c3c6b90->enter($__internal_21702d21c1eb72203ea97421c3291f05f5eca2282172a9e7cb67038b3c3c6b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_21702d21c1eb72203ea97421c3291f05f5eca2282172a9e7cb67038b3c3c6b90->leave($__internal_21702d21c1eb72203ea97421c3291f05f5eca2282172a9e7cb67038b3c3c6b90_prof);

        
        $__internal_84a0f61930f4f78e8935c485debde6d76e9f8a0987050a3643bfbdb6ad0d613f->leave($__internal_84a0f61930f4f78e8935c485debde6d76e9f8a0987050a3643bfbdb6ad0d613f_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_2874a5968002d3341ee53a375ba8857fc6da6463b099e92a677c4adaf1aefcdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2874a5968002d3341ee53a375ba8857fc6da6463b099e92a677c4adaf1aefcdb->enter($__internal_2874a5968002d3341ee53a375ba8857fc6da6463b099e92a677c4adaf1aefcdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_9fa1af1acf665433577f4ee1d297951f75fbcad456967e12995f3cd38decb95d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa1af1acf665433577f4ee1d297951f75fbcad456967e12995f3cd38decb95d->enter($__internal_9fa1af1acf665433577f4ee1d297951f75fbcad456967e12995f3cd38decb95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_9fa1af1acf665433577f4ee1d297951f75fbcad456967e12995f3cd38decb95d->leave($__internal_9fa1af1acf665433577f4ee1d297951f75fbcad456967e12995f3cd38decb95d_prof);

        
        $__internal_2874a5968002d3341ee53a375ba8857fc6da6463b099e92a677c4adaf1aefcdb->leave($__internal_2874a5968002d3341ee53a375ba8857fc6da6463b099e92a677c4adaf1aefcdb_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_79d13a8d7321beeec8cb0abb7521fbf308c870720d361c82bf27e37a049ae570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d13a8d7321beeec8cb0abb7521fbf308c870720d361c82bf27e37a049ae570->enter($__internal_79d13a8d7321beeec8cb0abb7521fbf308c870720d361c82bf27e37a049ae570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_f86daa95fba57126636b03cc511a0fa7091206aa11fa4f6ffb5ecb5f96c4ef9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f86daa95fba57126636b03cc511a0fa7091206aa11fa4f6ffb5ecb5f96c4ef9b->enter($__internal_f86daa95fba57126636b03cc511a0fa7091206aa11fa4f6ffb5ecb5f96c4ef9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_f86daa95fba57126636b03cc511a0fa7091206aa11fa4f6ffb5ecb5f96c4ef9b->leave($__internal_f86daa95fba57126636b03cc511a0fa7091206aa11fa4f6ffb5ecb5f96c4ef9b_prof);

        
        $__internal_79d13a8d7321beeec8cb0abb7521fbf308c870720d361c82bf27e37a049ae570->leave($__internal_79d13a8d7321beeec8cb0abb7521fbf308c870720d361c82bf27e37a049ae570_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ab4eb343351fb0e1264752921b245811cb955855d15cdaac2a0c835b44976eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab4eb343351fb0e1264752921b245811cb955855d15cdaac2a0c835b44976eec->enter($__internal_ab4eb343351fb0e1264752921b245811cb955855d15cdaac2a0c835b44976eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_b4a5d4ced40e49586c68e81d19f9d7a28b22ae6a2f45b54c1ca64fada201de54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a5d4ced40e49586c68e81d19f9d7a28b22ae6a2f45b54c1ca64fada201de54->enter($__internal_b4a5d4ced40e49586c68e81d19f9d7a28b22ae6a2f45b54c1ca64fada201de54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_b4a5d4ced40e49586c68e81d19f9d7a28b22ae6a2f45b54c1ca64fada201de54->leave($__internal_b4a5d4ced40e49586c68e81d19f9d7a28b22ae6a2f45b54c1ca64fada201de54_prof);

        
        $__internal_ab4eb343351fb0e1264752921b245811cb955855d15cdaac2a0c835b44976eec->leave($__internal_ab4eb343351fb0e1264752921b245811cb955855d15cdaac2a0c835b44976eec_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_623af211f4cdf9c0dc76dfc4ecbcca9e8a2e19d828fa389263b9c8417c28d665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_623af211f4cdf9c0dc76dfc4ecbcca9e8a2e19d828fa389263b9c8417c28d665->enter($__internal_623af211f4cdf9c0dc76dfc4ecbcca9e8a2e19d828fa389263b9c8417c28d665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_4c4f96c880ede6aaf44efc6a6f264a4eca1b2b7615cab72e4c39f46c7876d76a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c4f96c880ede6aaf44efc6a6f264a4eca1b2b7615cab72e4c39f46c7876d76a->enter($__internal_4c4f96c880ede6aaf44efc6a6f264a4eca1b2b7615cab72e4c39f46c7876d76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

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
        
        $__internal_4c4f96c880ede6aaf44efc6a6f264a4eca1b2b7615cab72e4c39f46c7876d76a->leave($__internal_4c4f96c880ede6aaf44efc6a6f264a4eca1b2b7615cab72e4c39f46c7876d76a_prof);

        
        $__internal_623af211f4cdf9c0dc76dfc4ecbcca9e8a2e19d828fa389263b9c8417c28d665->leave($__internal_623af211f4cdf9c0dc76dfc4ecbcca9e8a2e19d828fa389263b9c8417c28d665_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_411b5155142ea1db4064290094c4edea5ce2bd6f4ca66645c0fe96c49a37202d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_411b5155142ea1db4064290094c4edea5ce2bd6f4ca66645c0fe96c49a37202d->enter($__internal_411b5155142ea1db4064290094c4edea5ce2bd6f4ca66645c0fe96c49a37202d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_3cee69a3b12eb20999c82a7a75269628a5ee5ebab5d3215922150a97338dc711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cee69a3b12eb20999c82a7a75269628a5ee5ebab5d3215922150a97338dc711->enter($__internal_3cee69a3b12eb20999c82a7a75269628a5ee5ebab5d3215922150a97338dc711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3cee69a3b12eb20999c82a7a75269628a5ee5ebab5d3215922150a97338dc711->leave($__internal_3cee69a3b12eb20999c82a7a75269628a5ee5ebab5d3215922150a97338dc711_prof);

        
        $__internal_411b5155142ea1db4064290094c4edea5ce2bd6f4ca66645c0fe96c49a37202d->leave($__internal_411b5155142ea1db4064290094c4edea5ce2bd6f4ca66645c0fe96c49a37202d_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_8966353c950be4c8b9bc66a4048fa30aa2145d498a2c279008f308ec0c726419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8966353c950be4c8b9bc66a4048fa30aa2145d498a2c279008f308ec0c726419->enter($__internal_8966353c950be4c8b9bc66a4048fa30aa2145d498a2c279008f308ec0c726419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_a8ec76aed22cfe0ef8328b1c6802464b13225a1252072ce1ce5ee4221ff0256e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ec76aed22cfe0ef8328b1c6802464b13225a1252072ce1ce5ee4221ff0256e->enter($__internal_a8ec76aed22cfe0ef8328b1c6802464b13225a1252072ce1ce5ee4221ff0256e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a8ec76aed22cfe0ef8328b1c6802464b13225a1252072ce1ce5ee4221ff0256e->leave($__internal_a8ec76aed22cfe0ef8328b1c6802464b13225a1252072ce1ce5ee4221ff0256e_prof);

        
        $__internal_8966353c950be4c8b9bc66a4048fa30aa2145d498a2c279008f308ec0c726419->leave($__internal_8966353c950be4c8b9bc66a4048fa30aa2145d498a2c279008f308ec0c726419_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_2b207b0d729e38d20f10c5cc3cc52343f7ca21247b2651cde96e7a072a6b24d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b207b0d729e38d20f10c5cc3cc52343f7ca21247b2651cde96e7a072a6b24d7->enter($__internal_2b207b0d729e38d20f10c5cc3cc52343f7ca21247b2651cde96e7a072a6b24d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_4c1f2bdb7b824a0ca24655b0f0fe8b17c47489c7b20d62608e9010abd50c3c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1f2bdb7b824a0ca24655b0f0fe8b17c47489c7b20d62608e9010abd50c3c9d->enter($__internal_4c1f2bdb7b824a0ca24655b0f0fe8b17c47489c7b20d62608e9010abd50c3c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_4c1f2bdb7b824a0ca24655b0f0fe8b17c47489c7b20d62608e9010abd50c3c9d->leave($__internal_4c1f2bdb7b824a0ca24655b0f0fe8b17c47489c7b20d62608e9010abd50c3c9d_prof);

        
        $__internal_2b207b0d729e38d20f10c5cc3cc52343f7ca21247b2651cde96e7a072a6b24d7->leave($__internal_2b207b0d729e38d20f10c5cc3cc52343f7ca21247b2651cde96e7a072a6b24d7_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_fe3e5fd259b3cdf41545e8264162aa339734192838848ef4b106f5aaa040e3f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe3e5fd259b3cdf41545e8264162aa339734192838848ef4b106f5aaa040e3f5->enter($__internal_fe3e5fd259b3cdf41545e8264162aa339734192838848ef4b106f5aaa040e3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_83e243ecb0a73610d1bebdb0cf890f6b6125d347d8cce9b10a746b4a3fd98af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e243ecb0a73610d1bebdb0cf890f6b6125d347d8cce9b10a746b4a3fd98af2->enter($__internal_83e243ecb0a73610d1bebdb0cf890f6b6125d347d8cce9b10a746b4a3fd98af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_83e243ecb0a73610d1bebdb0cf890f6b6125d347d8cce9b10a746b4a3fd98af2->leave($__internal_83e243ecb0a73610d1bebdb0cf890f6b6125d347d8cce9b10a746b4a3fd98af2_prof);

        
        $__internal_fe3e5fd259b3cdf41545e8264162aa339734192838848ef4b106f5aaa040e3f5->leave($__internal_fe3e5fd259b3cdf41545e8264162aa339734192838848ef4b106f5aaa040e3f5_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_323f174ef8325afedb1754bdeec29520e69e0cfaed3962a886120abf74039fe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323f174ef8325afedb1754bdeec29520e69e0cfaed3962a886120abf74039fe6->enter($__internal_323f174ef8325afedb1754bdeec29520e69e0cfaed3962a886120abf74039fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_c483d4d20fda9498736475db99e0578215d2b30cf2dbfc7016aa5bc8a9825136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c483d4d20fda9498736475db99e0578215d2b30cf2dbfc7016aa5bc8a9825136->enter($__internal_c483d4d20fda9498736475db99e0578215d2b30cf2dbfc7016aa5bc8a9825136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c483d4d20fda9498736475db99e0578215d2b30cf2dbfc7016aa5bc8a9825136->leave($__internal_c483d4d20fda9498736475db99e0578215d2b30cf2dbfc7016aa5bc8a9825136_prof);

        
        $__internal_323f174ef8325afedb1754bdeec29520e69e0cfaed3962a886120abf74039fe6->leave($__internal_323f174ef8325afedb1754bdeec29520e69e0cfaed3962a886120abf74039fe6_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_3ce2ce3cbb7e776c3d2caa04ba90e6f72336106264c26119cbb5280c56061815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ce2ce3cbb7e776c3d2caa04ba90e6f72336106264c26119cbb5280c56061815->enter($__internal_3ce2ce3cbb7e776c3d2caa04ba90e6f72336106264c26119cbb5280c56061815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_a69515096f5b05e09c17bd85e697f725372df5f8bf22148831218e06e9d588a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a69515096f5b05e09c17bd85e697f725372df5f8bf22148831218e06e9d588a4->enter($__internal_a69515096f5b05e09c17bd85e697f725372df5f8bf22148831218e06e9d588a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a69515096f5b05e09c17bd85e697f725372df5f8bf22148831218e06e9d588a4->leave($__internal_a69515096f5b05e09c17bd85e697f725372df5f8bf22148831218e06e9d588a4_prof);

        
        $__internal_3ce2ce3cbb7e776c3d2caa04ba90e6f72336106264c26119cbb5280c56061815->leave($__internal_3ce2ce3cbb7e776c3d2caa04ba90e6f72336106264c26119cbb5280c56061815_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_d313670a4240f782b8d40a2a1877f5376a4c30aee0b7556cb479e83b87825e9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d313670a4240f782b8d40a2a1877f5376a4c30aee0b7556cb479e83b87825e9d->enter($__internal_d313670a4240f782b8d40a2a1877f5376a4c30aee0b7556cb479e83b87825e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_e9ab4bf390776d09275f9962349cdcd9a5786ad75c8079f0378c959d3f090085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ab4bf390776d09275f9962349cdcd9a5786ad75c8079f0378c959d3f090085->enter($__internal_e9ab4bf390776d09275f9962349cdcd9a5786ad75c8079f0378c959d3f090085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e9ab4bf390776d09275f9962349cdcd9a5786ad75c8079f0378c959d3f090085->leave($__internal_e9ab4bf390776d09275f9962349cdcd9a5786ad75c8079f0378c959d3f090085_prof);

        
        $__internal_d313670a4240f782b8d40a2a1877f5376a4c30aee0b7556cb479e83b87825e9d->leave($__internal_d313670a4240f782b8d40a2a1877f5376a4c30aee0b7556cb479e83b87825e9d_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_bcb9c5730fa025524636419577fecd2d5934e14e0f1e4f0af3d48ae03e58e4c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb9c5730fa025524636419577fecd2d5934e14e0f1e4f0af3d48ae03e58e4c3->enter($__internal_bcb9c5730fa025524636419577fecd2d5934e14e0f1e4f0af3d48ae03e58e4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_e45e2c1163e04c192a73daa19d30df3b88fa52ddab38df000074279b3ffe601a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e45e2c1163e04c192a73daa19d30df3b88fa52ddab38df000074279b3ffe601a->enter($__internal_e45e2c1163e04c192a73daa19d30df3b88fa52ddab38df000074279b3ffe601a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e45e2c1163e04c192a73daa19d30df3b88fa52ddab38df000074279b3ffe601a->leave($__internal_e45e2c1163e04c192a73daa19d30df3b88fa52ddab38df000074279b3ffe601a_prof);

        
        $__internal_bcb9c5730fa025524636419577fecd2d5934e14e0f1e4f0af3d48ae03e58e4c3->leave($__internal_bcb9c5730fa025524636419577fecd2d5934e14e0f1e4f0af3d48ae03e58e4c3_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_234116f0ab26516ef603e9ae027825fe1f594794333db825f00713456cfbe3af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_234116f0ab26516ef603e9ae027825fe1f594794333db825f00713456cfbe3af->enter($__internal_234116f0ab26516ef603e9ae027825fe1f594794333db825f00713456cfbe3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_40313f150d3f4edc919035d6d57051ef4362276f2a05f0546c8e9d5acbd16056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40313f150d3f4edc919035d6d57051ef4362276f2a05f0546c8e9d5acbd16056->enter($__internal_40313f150d3f4edc919035d6d57051ef4362276f2a05f0546c8e9d5acbd16056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_40313f150d3f4edc919035d6d57051ef4362276f2a05f0546c8e9d5acbd16056->leave($__internal_40313f150d3f4edc919035d6d57051ef4362276f2a05f0546c8e9d5acbd16056_prof);

        
        $__internal_234116f0ab26516ef603e9ae027825fe1f594794333db825f00713456cfbe3af->leave($__internal_234116f0ab26516ef603e9ae027825fe1f594794333db825f00713456cfbe3af_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_aeb3d1e92dda589a9fe9f58e946c9640d3ca7ea293ee9b3c354f2f6a792fb5e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeb3d1e92dda589a9fe9f58e946c9640d3ca7ea293ee9b3c354f2f6a792fb5e4->enter($__internal_aeb3d1e92dda589a9fe9f58e946c9640d3ca7ea293ee9b3c354f2f6a792fb5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_e279c4c72d520181828a6245f87177a1f2c33aa8953930a1a9b5a2163acb4949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e279c4c72d520181828a6245f87177a1f2c33aa8953930a1a9b5a2163acb4949->enter($__internal_e279c4c72d520181828a6245f87177a1f2c33aa8953930a1a9b5a2163acb4949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_e279c4c72d520181828a6245f87177a1f2c33aa8953930a1a9b5a2163acb4949->leave($__internal_e279c4c72d520181828a6245f87177a1f2c33aa8953930a1a9b5a2163acb4949_prof);

        
        $__internal_aeb3d1e92dda589a9fe9f58e946c9640d3ca7ea293ee9b3c354f2f6a792fb5e4->leave($__internal_aeb3d1e92dda589a9fe9f58e946c9640d3ca7ea293ee9b3c354f2f6a792fb5e4_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_41587e25e3b76f69733d35134f0d8cd9d5c1ec77155207a1b1dae90c6a6d4b08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41587e25e3b76f69733d35134f0d8cd9d5c1ec77155207a1b1dae90c6a6d4b08->enter($__internal_41587e25e3b76f69733d35134f0d8cd9d5c1ec77155207a1b1dae90c6a6d4b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_cf34412be0fa4d13f114b0717d233e0f2c2294d0942c3a3d3e5419b226fc08e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf34412be0fa4d13f114b0717d233e0f2c2294d0942c3a3d3e5419b226fc08e5->enter($__internal_cf34412be0fa4d13f114b0717d233e0f2c2294d0942c3a3d3e5419b226fc08e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_cf34412be0fa4d13f114b0717d233e0f2c2294d0942c3a3d3e5419b226fc08e5->leave($__internal_cf34412be0fa4d13f114b0717d233e0f2c2294d0942c3a3d3e5419b226fc08e5_prof);

        
        $__internal_41587e25e3b76f69733d35134f0d8cd9d5c1ec77155207a1b1dae90c6a6d4b08->leave($__internal_41587e25e3b76f69733d35134f0d8cd9d5c1ec77155207a1b1dae90c6a6d4b08_prof);

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
