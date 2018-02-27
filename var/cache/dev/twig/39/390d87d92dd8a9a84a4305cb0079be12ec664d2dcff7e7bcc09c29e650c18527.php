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
        $__internal_25c4f66d7910aa8a7a4de27bc80b4bdba1ed679057dfe8d3413302407319272b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c4f66d7910aa8a7a4de27bc80b4bdba1ed679057dfe8d3413302407319272b->enter($__internal_25c4f66d7910aa8a7a4de27bc80b4bdba1ed679057dfe8d3413302407319272b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_7f0b1f4be261f1a009d19d3bc2806e73dc2c2bba58a216b3b89308fa661b81b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0b1f4be261f1a009d19d3bc2806e73dc2c2bba58a216b3b89308fa661b81b0->enter($__internal_7f0b1f4be261f1a009d19d3bc2806e73dc2c2bba58a216b3b89308fa661b81b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25c4f66d7910aa8a7a4de27bc80b4bdba1ed679057dfe8d3413302407319272b->leave($__internal_25c4f66d7910aa8a7a4de27bc80b4bdba1ed679057dfe8d3413302407319272b_prof);

        
        $__internal_7f0b1f4be261f1a009d19d3bc2806e73dc2c2bba58a216b3b89308fa661b81b0->leave($__internal_7f0b1f4be261f1a009d19d3bc2806e73dc2c2bba58a216b3b89308fa661b81b0_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c75400c584da367128890fe2bc020fbaf74926cb6b0bc53286bd616bd007d802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c75400c584da367128890fe2bc020fbaf74926cb6b0bc53286bd616bd007d802->enter($__internal_c75400c584da367128890fe2bc020fbaf74926cb6b0bc53286bd616bd007d802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_5a912e419892e2b9802a7b7b47a69155377877418291a9b479c035f50c7c08c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a912e419892e2b9802a7b7b47a69155377877418291a9b479c035f50c7c08c9->enter($__internal_5a912e419892e2b9802a7b7b47a69155377877418291a9b479c035f50c7c08c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5a912e419892e2b9802a7b7b47a69155377877418291a9b479c035f50c7c08c9->leave($__internal_5a912e419892e2b9802a7b7b47a69155377877418291a9b479c035f50c7c08c9_prof);

        
        $__internal_c75400c584da367128890fe2bc020fbaf74926cb6b0bc53286bd616bd007d802->leave($__internal_c75400c584da367128890fe2bc020fbaf74926cb6b0bc53286bd616bd007d802_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_ed8fd5ec051eab1992e88aa040c0ed5697d5785d0cabc975f818a4f3e5e6af3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed8fd5ec051eab1992e88aa040c0ed5697d5785d0cabc975f818a4f3e5e6af3c->enter($__internal_ed8fd5ec051eab1992e88aa040c0ed5697d5785d0cabc975f818a4f3e5e6af3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_3ea691408fb3ebfd502c34a8d000a080f9b9925e9cf465fb231bc04aa94abf8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea691408fb3ebfd502c34a8d000a080f9b9925e9cf465fb231bc04aa94abf8c->enter($__internal_3ea691408fb3ebfd502c34a8d000a080f9b9925e9cf465fb231bc04aa94abf8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_3ea691408fb3ebfd502c34a8d000a080f9b9925e9cf465fb231bc04aa94abf8c->leave($__internal_3ea691408fb3ebfd502c34a8d000a080f9b9925e9cf465fb231bc04aa94abf8c_prof);

        
        $__internal_ed8fd5ec051eab1992e88aa040c0ed5697d5785d0cabc975f818a4f3e5e6af3c->leave($__internal_ed8fd5ec051eab1992e88aa040c0ed5697d5785d0cabc975f818a4f3e5e6af3c_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_970e6ea7262fbe66197c1cc92efab1082060f2390c99d96183901412a2311e90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_970e6ea7262fbe66197c1cc92efab1082060f2390c99d96183901412a2311e90->enter($__internal_970e6ea7262fbe66197c1cc92efab1082060f2390c99d96183901412a2311e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_2b7e3d1921266ff99fee31c0bfa6a2ba7c8b0c00d64bd660d88675eb1f600270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7e3d1921266ff99fee31c0bfa6a2ba7c8b0c00d64bd660d88675eb1f600270->enter($__internal_2b7e3d1921266ff99fee31c0bfa6a2ba7c8b0c00d64bd660d88675eb1f600270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_2b7e3d1921266ff99fee31c0bfa6a2ba7c8b0c00d64bd660d88675eb1f600270->leave($__internal_2b7e3d1921266ff99fee31c0bfa6a2ba7c8b0c00d64bd660d88675eb1f600270_prof);

        
        $__internal_970e6ea7262fbe66197c1cc92efab1082060f2390c99d96183901412a2311e90->leave($__internal_970e6ea7262fbe66197c1cc92efab1082060f2390c99d96183901412a2311e90_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_5b2fd8c1d22979ce4795472b2a49cef73b3d3863155e5a0a0d792089ea5af274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b2fd8c1d22979ce4795472b2a49cef73b3d3863155e5a0a0d792089ea5af274->enter($__internal_5b2fd8c1d22979ce4795472b2a49cef73b3d3863155e5a0a0d792089ea5af274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_de08da1ef77b11170330ad116824fd728b154ad38f457c3954c483729a412d81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de08da1ef77b11170330ad116824fd728b154ad38f457c3954c483729a412d81->enter($__internal_de08da1ef77b11170330ad116824fd728b154ad38f457c3954c483729a412d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_de08da1ef77b11170330ad116824fd728b154ad38f457c3954c483729a412d81->leave($__internal_de08da1ef77b11170330ad116824fd728b154ad38f457c3954c483729a412d81_prof);

        
        $__internal_5b2fd8c1d22979ce4795472b2a49cef73b3d3863155e5a0a0d792089ea5af274->leave($__internal_5b2fd8c1d22979ce4795472b2a49cef73b3d3863155e5a0a0d792089ea5af274_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_87e55faddd2bb757c0a44180c2d0145e7ac09bcb49ff6b7fd880092e7a3fa62f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e55faddd2bb757c0a44180c2d0145e7ac09bcb49ff6b7fd880092e7a3fa62f->enter($__internal_87e55faddd2bb757c0a44180c2d0145e7ac09bcb49ff6b7fd880092e7a3fa62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_bfedf2b362a6df92a91f4f80472845133b38f4a2d2058ac40ee44ccf7b0302e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfedf2b362a6df92a91f4f80472845133b38f4a2d2058ac40ee44ccf7b0302e8->enter($__internal_bfedf2b362a6df92a91f4f80472845133b38f4a2d2058ac40ee44ccf7b0302e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_bfedf2b362a6df92a91f4f80472845133b38f4a2d2058ac40ee44ccf7b0302e8->leave($__internal_bfedf2b362a6df92a91f4f80472845133b38f4a2d2058ac40ee44ccf7b0302e8_prof);

        
        $__internal_87e55faddd2bb757c0a44180c2d0145e7ac09bcb49ff6b7fd880092e7a3fa62f->leave($__internal_87e55faddd2bb757c0a44180c2d0145e7ac09bcb49ff6b7fd880092e7a3fa62f_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_ff5191c60f7ffe701df0f08166262a03ecc23e7eaa42bff901bae2b0c341385e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff5191c60f7ffe701df0f08166262a03ecc23e7eaa42bff901bae2b0c341385e->enter($__internal_ff5191c60f7ffe701df0f08166262a03ecc23e7eaa42bff901bae2b0c341385e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_3cd282e519e00f69d65196dbf32c717dd88c3a8aad734e9bc4cc000c4a5419d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd282e519e00f69d65196dbf32c717dd88c3a8aad734e9bc4cc000c4a5419d9->enter($__internal_3cd282e519e00f69d65196dbf32c717dd88c3a8aad734e9bc4cc000c4a5419d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_3cd282e519e00f69d65196dbf32c717dd88c3a8aad734e9bc4cc000c4a5419d9->leave($__internal_3cd282e519e00f69d65196dbf32c717dd88c3a8aad734e9bc4cc000c4a5419d9_prof);

        
        $__internal_ff5191c60f7ffe701df0f08166262a03ecc23e7eaa42bff901bae2b0c341385e->leave($__internal_ff5191c60f7ffe701df0f08166262a03ecc23e7eaa42bff901bae2b0c341385e_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_7ad35192ed7c7452bbe3fc812c26c6ce9aff83f0825999befa2c3fbc7538a168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ad35192ed7c7452bbe3fc812c26c6ce9aff83f0825999befa2c3fbc7538a168->enter($__internal_7ad35192ed7c7452bbe3fc812c26c6ce9aff83f0825999befa2c3fbc7538a168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_12c40ea39212e6e28f139d16acc4ea771e6ffdc931f9ba3e60c8a2658c727043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12c40ea39212e6e28f139d16acc4ea771e6ffdc931f9ba3e60c8a2658c727043->enter($__internal_12c40ea39212e6e28f139d16acc4ea771e6ffdc931f9ba3e60c8a2658c727043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_12c40ea39212e6e28f139d16acc4ea771e6ffdc931f9ba3e60c8a2658c727043->leave($__internal_12c40ea39212e6e28f139d16acc4ea771e6ffdc931f9ba3e60c8a2658c727043_prof);

        
        $__internal_7ad35192ed7c7452bbe3fc812c26c6ce9aff83f0825999befa2c3fbc7538a168->leave($__internal_7ad35192ed7c7452bbe3fc812c26c6ce9aff83f0825999befa2c3fbc7538a168_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_00549ddcb1006fb185ba9bcb459aa9f991cc0acc45692e269ed616a7aa9739d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00549ddcb1006fb185ba9bcb459aa9f991cc0acc45692e269ed616a7aa9739d3->enter($__internal_00549ddcb1006fb185ba9bcb459aa9f991cc0acc45692e269ed616a7aa9739d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_3a7a590d97abbc3b6311eb7c8046a0cdb890e50d5800ce5db505f84ffae1057b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7a590d97abbc3b6311eb7c8046a0cdb890e50d5800ce5db505f84ffae1057b->enter($__internal_3a7a590d97abbc3b6311eb7c8046a0cdb890e50d5800ce5db505f84ffae1057b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_3a7a590d97abbc3b6311eb7c8046a0cdb890e50d5800ce5db505f84ffae1057b->leave($__internal_3a7a590d97abbc3b6311eb7c8046a0cdb890e50d5800ce5db505f84ffae1057b_prof);

        
        $__internal_00549ddcb1006fb185ba9bcb459aa9f991cc0acc45692e269ed616a7aa9739d3->leave($__internal_00549ddcb1006fb185ba9bcb459aa9f991cc0acc45692e269ed616a7aa9739d3_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_f75788ca732a704feb8e54194edf4f0d9b4e4b9c206a88111ee783a2e13143e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f75788ca732a704feb8e54194edf4f0d9b4e4b9c206a88111ee783a2e13143e1->enter($__internal_f75788ca732a704feb8e54194edf4f0d9b4e4b9c206a88111ee783a2e13143e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_8c41dd01070e03abe93112a715138d167c40c7aaa0b0d0af188de69647235668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c41dd01070e03abe93112a715138d167c40c7aaa0b0d0af188de69647235668->enter($__internal_8c41dd01070e03abe93112a715138d167c40c7aaa0b0d0af188de69647235668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_8c41dd01070e03abe93112a715138d167c40c7aaa0b0d0af188de69647235668->leave($__internal_8c41dd01070e03abe93112a715138d167c40c7aaa0b0d0af188de69647235668_prof);

        
        $__internal_f75788ca732a704feb8e54194edf4f0d9b4e4b9c206a88111ee783a2e13143e1->leave($__internal_f75788ca732a704feb8e54194edf4f0d9b4e4b9c206a88111ee783a2e13143e1_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_27e6d3321f4ed5065d2c2e7e4496180f839465c0110ac263d049043641ab894c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e6d3321f4ed5065d2c2e7e4496180f839465c0110ac263d049043641ab894c->enter($__internal_27e6d3321f4ed5065d2c2e7e4496180f839465c0110ac263d049043641ab894c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_b5f2bd0f02ee5d62463cb9d94fc09948f2f29b4ff97e29135b8a4e8bb6b4e626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f2bd0f02ee5d62463cb9d94fc09948f2f29b4ff97e29135b8a4e8bb6b4e626->enter($__internal_b5f2bd0f02ee5d62463cb9d94fc09948f2f29b4ff97e29135b8a4e8bb6b4e626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_b5f2bd0f02ee5d62463cb9d94fc09948f2f29b4ff97e29135b8a4e8bb6b4e626->leave($__internal_b5f2bd0f02ee5d62463cb9d94fc09948f2f29b4ff97e29135b8a4e8bb6b4e626_prof);

        
        $__internal_27e6d3321f4ed5065d2c2e7e4496180f839465c0110ac263d049043641ab894c->leave($__internal_27e6d3321f4ed5065d2c2e7e4496180f839465c0110ac263d049043641ab894c_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_1e3c0741d78d3aae4b9ca5b62ab062f8f7e46e847fff0a2ef3aabace89f0ee0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e3c0741d78d3aae4b9ca5b62ab062f8f7e46e847fff0a2ef3aabace89f0ee0e->enter($__internal_1e3c0741d78d3aae4b9ca5b62ab062f8f7e46e847fff0a2ef3aabace89f0ee0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_475ff39d980e070d164c647f4700a23d0d4df5ed0daee5b859a6824638034973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_475ff39d980e070d164c647f4700a23d0d4df5ed0daee5b859a6824638034973->enter($__internal_475ff39d980e070d164c647f4700a23d0d4df5ed0daee5b859a6824638034973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_475ff39d980e070d164c647f4700a23d0d4df5ed0daee5b859a6824638034973->leave($__internal_475ff39d980e070d164c647f4700a23d0d4df5ed0daee5b859a6824638034973_prof);

        
        $__internal_1e3c0741d78d3aae4b9ca5b62ab062f8f7e46e847fff0a2ef3aabace89f0ee0e->leave($__internal_1e3c0741d78d3aae4b9ca5b62ab062f8f7e46e847fff0a2ef3aabace89f0ee0e_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_9e3db98564312de97b3088a75163196ca115724e11ef74ca4830a6e772cc078f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e3db98564312de97b3088a75163196ca115724e11ef74ca4830a6e772cc078f->enter($__internal_9e3db98564312de97b3088a75163196ca115724e11ef74ca4830a6e772cc078f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_e8b77867714755b2bd1d205121ccebefddfb874c4ae873130309cdb598ba7df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b77867714755b2bd1d205121ccebefddfb874c4ae873130309cdb598ba7df0->enter($__internal_e8b77867714755b2bd1d205121ccebefddfb874c4ae873130309cdb598ba7df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_e8b77867714755b2bd1d205121ccebefddfb874c4ae873130309cdb598ba7df0->leave($__internal_e8b77867714755b2bd1d205121ccebefddfb874c4ae873130309cdb598ba7df0_prof);

        
        $__internal_9e3db98564312de97b3088a75163196ca115724e11ef74ca4830a6e772cc078f->leave($__internal_9e3db98564312de97b3088a75163196ca115724e11ef74ca4830a6e772cc078f_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b9ed106c99bb3e970b5e0c76465f40261c48c691b5d5e4a9208bee48706f18e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9ed106c99bb3e970b5e0c76465f40261c48c691b5d5e4a9208bee48706f18e5->enter($__internal_b9ed106c99bb3e970b5e0c76465f40261c48c691b5d5e4a9208bee48706f18e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_9129b562b8d62f716eb95ea847321fb4ea6d42f37cbf638d7f42e64f681916df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9129b562b8d62f716eb95ea847321fb4ea6d42f37cbf638d7f42e64f681916df->enter($__internal_9129b562b8d62f716eb95ea847321fb4ea6d42f37cbf638d7f42e64f681916df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_9129b562b8d62f716eb95ea847321fb4ea6d42f37cbf638d7f42e64f681916df->leave($__internal_9129b562b8d62f716eb95ea847321fb4ea6d42f37cbf638d7f42e64f681916df_prof);

        
        $__internal_b9ed106c99bb3e970b5e0c76465f40261c48c691b5d5e4a9208bee48706f18e5->leave($__internal_b9ed106c99bb3e970b5e0c76465f40261c48c691b5d5e4a9208bee48706f18e5_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_7bb72df74011a7451242ec7f859a6afb208ce21b7dc6645c090c7b72b37407d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bb72df74011a7451242ec7f859a6afb208ce21b7dc6645c090c7b72b37407d6->enter($__internal_7bb72df74011a7451242ec7f859a6afb208ce21b7dc6645c090c7b72b37407d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_b36e58486005e49f05690e5c71fc2073b58449bd274d79a3e3717f7c2c14b476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36e58486005e49f05690e5c71fc2073b58449bd274d79a3e3717f7c2c14b476->enter($__internal_b36e58486005e49f05690e5c71fc2073b58449bd274d79a3e3717f7c2c14b476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

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
        
        $__internal_b36e58486005e49f05690e5c71fc2073b58449bd274d79a3e3717f7c2c14b476->leave($__internal_b36e58486005e49f05690e5c71fc2073b58449bd274d79a3e3717f7c2c14b476_prof);

        
        $__internal_7bb72df74011a7451242ec7f859a6afb208ce21b7dc6645c090c7b72b37407d6->leave($__internal_7bb72df74011a7451242ec7f859a6afb208ce21b7dc6645c090c7b72b37407d6_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_e074b605fa93456119453beb183d0163d33b03001f62a3ef1f5eb48f83538889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e074b605fa93456119453beb183d0163d33b03001f62a3ef1f5eb48f83538889->enter($__internal_e074b605fa93456119453beb183d0163d33b03001f62a3ef1f5eb48f83538889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_26ca98a4f7f04a31e546a166c39bd5bcb2a63dfa8edcb11be88cd96551067fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ca98a4f7f04a31e546a166c39bd5bcb2a63dfa8edcb11be88cd96551067fe1->enter($__internal_26ca98a4f7f04a31e546a166c39bd5bcb2a63dfa8edcb11be88cd96551067fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_26ca98a4f7f04a31e546a166c39bd5bcb2a63dfa8edcb11be88cd96551067fe1->leave($__internal_26ca98a4f7f04a31e546a166c39bd5bcb2a63dfa8edcb11be88cd96551067fe1_prof);

        
        $__internal_e074b605fa93456119453beb183d0163d33b03001f62a3ef1f5eb48f83538889->leave($__internal_e074b605fa93456119453beb183d0163d33b03001f62a3ef1f5eb48f83538889_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_fb2d2c37a4b2d6f0ea1c874184508be22250b162034df28c86d4d93e7a59837f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb2d2c37a4b2d6f0ea1c874184508be22250b162034df28c86d4d93e7a59837f->enter($__internal_fb2d2c37a4b2d6f0ea1c874184508be22250b162034df28c86d4d93e7a59837f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_f5a34c36f0e30f1d7e082d69bcdca7dcf881b815477bfab9c68942d106ead981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a34c36f0e30f1d7e082d69bcdca7dcf881b815477bfab9c68942d106ead981->enter($__internal_f5a34c36f0e30f1d7e082d69bcdca7dcf881b815477bfab9c68942d106ead981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_f5a34c36f0e30f1d7e082d69bcdca7dcf881b815477bfab9c68942d106ead981->leave($__internal_f5a34c36f0e30f1d7e082d69bcdca7dcf881b815477bfab9c68942d106ead981_prof);

        
        $__internal_fb2d2c37a4b2d6f0ea1c874184508be22250b162034df28c86d4d93e7a59837f->leave($__internal_fb2d2c37a4b2d6f0ea1c874184508be22250b162034df28c86d4d93e7a59837f_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_7790793685b1391d1c1c162c9b7403d1b38926bb934e6fa492b58e1c10a2357d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7790793685b1391d1c1c162c9b7403d1b38926bb934e6fa492b58e1c10a2357d->enter($__internal_7790793685b1391d1c1c162c9b7403d1b38926bb934e6fa492b58e1c10a2357d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_d09317fbf4ee7ba5811d4012e2579b6d1e03279098300286892b15568caa97d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09317fbf4ee7ba5811d4012e2579b6d1e03279098300286892b15568caa97d3->enter($__internal_d09317fbf4ee7ba5811d4012e2579b6d1e03279098300286892b15568caa97d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_d09317fbf4ee7ba5811d4012e2579b6d1e03279098300286892b15568caa97d3->leave($__internal_d09317fbf4ee7ba5811d4012e2579b6d1e03279098300286892b15568caa97d3_prof);

        
        $__internal_7790793685b1391d1c1c162c9b7403d1b38926bb934e6fa492b58e1c10a2357d->leave($__internal_7790793685b1391d1c1c162c9b7403d1b38926bb934e6fa492b58e1c10a2357d_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c2b7e74f0c1bd54c124db96fcf49fd2a6aa39c012acc711ce2fbf2f3a94827c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2b7e74f0c1bd54c124db96fcf49fd2a6aa39c012acc711ce2fbf2f3a94827c0->enter($__internal_c2b7e74f0c1bd54c124db96fcf49fd2a6aa39c012acc711ce2fbf2f3a94827c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4d7bf077716cb40c6b5b34a672bd53036bcb935d99c1cdde665fbe619800838f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7bf077716cb40c6b5b34a672bd53036bcb935d99c1cdde665fbe619800838f->enter($__internal_4d7bf077716cb40c6b5b34a672bd53036bcb935d99c1cdde665fbe619800838f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_4d7bf077716cb40c6b5b34a672bd53036bcb935d99c1cdde665fbe619800838f->leave($__internal_4d7bf077716cb40c6b5b34a672bd53036bcb935d99c1cdde665fbe619800838f_prof);

        
        $__internal_c2b7e74f0c1bd54c124db96fcf49fd2a6aa39c012acc711ce2fbf2f3a94827c0->leave($__internal_c2b7e74f0c1bd54c124db96fcf49fd2a6aa39c012acc711ce2fbf2f3a94827c0_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_adf418b7ec61b2aaa0ec272b0b4413d3376d4a614147ca9b89bc80805d1c9f07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adf418b7ec61b2aaa0ec272b0b4413d3376d4a614147ca9b89bc80805d1c9f07->enter($__internal_adf418b7ec61b2aaa0ec272b0b4413d3376d4a614147ca9b89bc80805d1c9f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_8c6d52c9976709fbeac68675158c5d9442fc2c7887faa981be4fb85ab2e784a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6d52c9976709fbeac68675158c5d9442fc2c7887faa981be4fb85ab2e784a9->enter($__internal_8c6d52c9976709fbeac68675158c5d9442fc2c7887faa981be4fb85ab2e784a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8c6d52c9976709fbeac68675158c5d9442fc2c7887faa981be4fb85ab2e784a9->leave($__internal_8c6d52c9976709fbeac68675158c5d9442fc2c7887faa981be4fb85ab2e784a9_prof);

        
        $__internal_adf418b7ec61b2aaa0ec272b0b4413d3376d4a614147ca9b89bc80805d1c9f07->leave($__internal_adf418b7ec61b2aaa0ec272b0b4413d3376d4a614147ca9b89bc80805d1c9f07_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_54811131da853bf502742e864910506a31b774fb6dbb670ab85440a8a845b94e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54811131da853bf502742e864910506a31b774fb6dbb670ab85440a8a845b94e->enter($__internal_54811131da853bf502742e864910506a31b774fb6dbb670ab85440a8a845b94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_6dc009c668936b69fcf3128aab9069346d2a974c48e3b545cebc6ec6b0354c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc009c668936b69fcf3128aab9069346d2a974c48e3b545cebc6ec6b0354c07->enter($__internal_6dc009c668936b69fcf3128aab9069346d2a974c48e3b545cebc6ec6b0354c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6dc009c668936b69fcf3128aab9069346d2a974c48e3b545cebc6ec6b0354c07->leave($__internal_6dc009c668936b69fcf3128aab9069346d2a974c48e3b545cebc6ec6b0354c07_prof);

        
        $__internal_54811131da853bf502742e864910506a31b774fb6dbb670ab85440a8a845b94e->leave($__internal_54811131da853bf502742e864910506a31b774fb6dbb670ab85440a8a845b94e_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_20625edfe933d9b8e6592a4713b44adbd2ec48d6217c752f0b2c60fdccb8235c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20625edfe933d9b8e6592a4713b44adbd2ec48d6217c752f0b2c60fdccb8235c->enter($__internal_20625edfe933d9b8e6592a4713b44adbd2ec48d6217c752f0b2c60fdccb8235c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_e61c7d5f31b83d65d3b114dfd011764ae4bbc07311ecb453cba1f858cfa0edd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61c7d5f31b83d65d3b114dfd011764ae4bbc07311ecb453cba1f858cfa0edd8->enter($__internal_e61c7d5f31b83d65d3b114dfd011764ae4bbc07311ecb453cba1f858cfa0edd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e61c7d5f31b83d65d3b114dfd011764ae4bbc07311ecb453cba1f858cfa0edd8->leave($__internal_e61c7d5f31b83d65d3b114dfd011764ae4bbc07311ecb453cba1f858cfa0edd8_prof);

        
        $__internal_20625edfe933d9b8e6592a4713b44adbd2ec48d6217c752f0b2c60fdccb8235c->leave($__internal_20625edfe933d9b8e6592a4713b44adbd2ec48d6217c752f0b2c60fdccb8235c_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_8fd681ddbbec6c3ae3aab85b37af4a2d80f64f8a777e42f3e1db1a4355ec2f80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fd681ddbbec6c3ae3aab85b37af4a2d80f64f8a777e42f3e1db1a4355ec2f80->enter($__internal_8fd681ddbbec6c3ae3aab85b37af4a2d80f64f8a777e42f3e1db1a4355ec2f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_bd886406166716aa404e60486f7f19c3ad9d3706aaf99f0546b2ce8e542efb02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd886406166716aa404e60486f7f19c3ad9d3706aaf99f0546b2ce8e542efb02->enter($__internal_bd886406166716aa404e60486f7f19c3ad9d3706aaf99f0546b2ce8e542efb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_bd886406166716aa404e60486f7f19c3ad9d3706aaf99f0546b2ce8e542efb02->leave($__internal_bd886406166716aa404e60486f7f19c3ad9d3706aaf99f0546b2ce8e542efb02_prof);

        
        $__internal_8fd681ddbbec6c3ae3aab85b37af4a2d80f64f8a777e42f3e1db1a4355ec2f80->leave($__internal_8fd681ddbbec6c3ae3aab85b37af4a2d80f64f8a777e42f3e1db1a4355ec2f80_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_32123ff950300e3b12fbd63d1867dec2094caaf420e0f6652b7804f606963fa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32123ff950300e3b12fbd63d1867dec2094caaf420e0f6652b7804f606963fa1->enter($__internal_32123ff950300e3b12fbd63d1867dec2094caaf420e0f6652b7804f606963fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ba3766305f8eac2247d5260bc1a179415a9c399b438ccd8871999879a90904f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba3766305f8eac2247d5260bc1a179415a9c399b438ccd8871999879a90904f2->enter($__internal_ba3766305f8eac2247d5260bc1a179415a9c399b438ccd8871999879a90904f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_ba3766305f8eac2247d5260bc1a179415a9c399b438ccd8871999879a90904f2->leave($__internal_ba3766305f8eac2247d5260bc1a179415a9c399b438ccd8871999879a90904f2_prof);

        
        $__internal_32123ff950300e3b12fbd63d1867dec2094caaf420e0f6652b7804f606963fa1->leave($__internal_32123ff950300e3b12fbd63d1867dec2094caaf420e0f6652b7804f606963fa1_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_16b8fa338de579a14576f406b2c29cce83b39905541a2cdeb3c269ab9e1ee724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b8fa338de579a14576f406b2c29cce83b39905541a2cdeb3c269ab9e1ee724->enter($__internal_16b8fa338de579a14576f406b2c29cce83b39905541a2cdeb3c269ab9e1ee724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_3ceae3a5a8d7cd3a27dfdee73936b98e9c1f2c31198ac3e4bb2314c89c21fa1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ceae3a5a8d7cd3a27dfdee73936b98e9c1f2c31198ac3e4bb2314c89c21fa1e->enter($__internal_3ceae3a5a8d7cd3a27dfdee73936b98e9c1f2c31198ac3e4bb2314c89c21fa1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_3ceae3a5a8d7cd3a27dfdee73936b98e9c1f2c31198ac3e4bb2314c89c21fa1e->leave($__internal_3ceae3a5a8d7cd3a27dfdee73936b98e9c1f2c31198ac3e4bb2314c89c21fa1e_prof);

        
        $__internal_16b8fa338de579a14576f406b2c29cce83b39905541a2cdeb3c269ab9e1ee724->leave($__internal_16b8fa338de579a14576f406b2c29cce83b39905541a2cdeb3c269ab9e1ee724_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_f10c1ab4f94081a325bd43e754bd200d7178f5a12c9af6830db2192849cbfe2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f10c1ab4f94081a325bd43e754bd200d7178f5a12c9af6830db2192849cbfe2b->enter($__internal_f10c1ab4f94081a325bd43e754bd200d7178f5a12c9af6830db2192849cbfe2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_42a32a98781a0ca48b60a84ae1e8509863e6809ab06ab1bc4e8f8577e6425720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a32a98781a0ca48b60a84ae1e8509863e6809ab06ab1bc4e8f8577e6425720->enter($__internal_42a32a98781a0ca48b60a84ae1e8509863e6809ab06ab1bc4e8f8577e6425720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_42a32a98781a0ca48b60a84ae1e8509863e6809ab06ab1bc4e8f8577e6425720->leave($__internal_42a32a98781a0ca48b60a84ae1e8509863e6809ab06ab1bc4e8f8577e6425720_prof);

        
        $__internal_f10c1ab4f94081a325bd43e754bd200d7178f5a12c9af6830db2192849cbfe2b->leave($__internal_f10c1ab4f94081a325bd43e754bd200d7178f5a12c9af6830db2192849cbfe2b_prof);

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
