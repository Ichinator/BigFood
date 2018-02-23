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
        $__internal_a807210ac8377b32f8ea37666b90b716feae6144ce7cb06576ac2edf853a5ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a807210ac8377b32f8ea37666b90b716feae6144ce7cb06576ac2edf853a5ccd->enter($__internal_a807210ac8377b32f8ea37666b90b716feae6144ce7cb06576ac2edf853a5ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_c81bdaf9be1044c99e46e7d0ca7ef671f3137e1c3f654403b0868bb1c566bfb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c81bdaf9be1044c99e46e7d0ca7ef671f3137e1c3f654403b0868bb1c566bfb4->enter($__internal_c81bdaf9be1044c99e46e7d0ca7ef671f3137e1c3f654403b0868bb1c566bfb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_a807210ac8377b32f8ea37666b90b716feae6144ce7cb06576ac2edf853a5ccd->leave($__internal_a807210ac8377b32f8ea37666b90b716feae6144ce7cb06576ac2edf853a5ccd_prof);

        
        $__internal_c81bdaf9be1044c99e46e7d0ca7ef671f3137e1c3f654403b0868bb1c566bfb4->leave($__internal_c81bdaf9be1044c99e46e7d0ca7ef671f3137e1c3f654403b0868bb1c566bfb4_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_6cd36bff205bf819963063a3dd633aa919aa220a3b3b31452cf21755838f0171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cd36bff205bf819963063a3dd633aa919aa220a3b3b31452cf21755838f0171->enter($__internal_6cd36bff205bf819963063a3dd633aa919aa220a3b3b31452cf21755838f0171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_77afba952135b1d71c909c9893d4ed996f5c39fbd74b4a6caa11b84bc2a09cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77afba952135b1d71c909c9893d4ed996f5c39fbd74b4a6caa11b84bc2a09cc6->enter($__internal_77afba952135b1d71c909c9893d4ed996f5c39fbd74b4a6caa11b84bc2a09cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_77afba952135b1d71c909c9893d4ed996f5c39fbd74b4a6caa11b84bc2a09cc6->leave($__internal_77afba952135b1d71c909c9893d4ed996f5c39fbd74b4a6caa11b84bc2a09cc6_prof);

        
        $__internal_6cd36bff205bf819963063a3dd633aa919aa220a3b3b31452cf21755838f0171->leave($__internal_6cd36bff205bf819963063a3dd633aa919aa220a3b3b31452cf21755838f0171_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_0956cf74eca0b39b0fa1ec8d03aef6d77e188810f386922d1f48fbf1cb42fa20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0956cf74eca0b39b0fa1ec8d03aef6d77e188810f386922d1f48fbf1cb42fa20->enter($__internal_0956cf74eca0b39b0fa1ec8d03aef6d77e188810f386922d1f48fbf1cb42fa20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_967d2932a88b429e0b1a0d9314ede3bff78075766258884f72fe747698aa90c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_967d2932a88b429e0b1a0d9314ede3bff78075766258884f72fe747698aa90c5->enter($__internal_967d2932a88b429e0b1a0d9314ede3bff78075766258884f72fe747698aa90c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_967d2932a88b429e0b1a0d9314ede3bff78075766258884f72fe747698aa90c5->leave($__internal_967d2932a88b429e0b1a0d9314ede3bff78075766258884f72fe747698aa90c5_prof);

        
        $__internal_0956cf74eca0b39b0fa1ec8d03aef6d77e188810f386922d1f48fbf1cb42fa20->leave($__internal_0956cf74eca0b39b0fa1ec8d03aef6d77e188810f386922d1f48fbf1cb42fa20_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_331db4871e8510c8d86feb2c86215897eb7a1593aeac5ce239539372a9aacb91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_331db4871e8510c8d86feb2c86215897eb7a1593aeac5ce239539372a9aacb91->enter($__internal_331db4871e8510c8d86feb2c86215897eb7a1593aeac5ce239539372a9aacb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_0f074c32f349778ae9754320005d01c6d5119c3cdbf1720cf0bc4e231d0501fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f074c32f349778ae9754320005d01c6d5119c3cdbf1720cf0bc4e231d0501fd->enter($__internal_0f074c32f349778ae9754320005d01c6d5119c3cdbf1720cf0bc4e231d0501fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_0f074c32f349778ae9754320005d01c6d5119c3cdbf1720cf0bc4e231d0501fd->leave($__internal_0f074c32f349778ae9754320005d01c6d5119c3cdbf1720cf0bc4e231d0501fd_prof);

        
        $__internal_331db4871e8510c8d86feb2c86215897eb7a1593aeac5ce239539372a9aacb91->leave($__internal_331db4871e8510c8d86feb2c86215897eb7a1593aeac5ce239539372a9aacb91_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_bbc919777c20ec036f04d5afe78a1282902d1241478b655227eb1b4f9bb36c32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbc919777c20ec036f04d5afe78a1282902d1241478b655227eb1b4f9bb36c32->enter($__internal_bbc919777c20ec036f04d5afe78a1282902d1241478b655227eb1b4f9bb36c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_b17ef180dc896da5997b8e55eac59d60465435d7a710456eb4f040235c5f3a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b17ef180dc896da5997b8e55eac59d60465435d7a710456eb4f040235c5f3a4a->enter($__internal_b17ef180dc896da5997b8e55eac59d60465435d7a710456eb4f040235c5f3a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_c9018f8c58c75e0902f6e9dcb016ddac98c245a3818e6954d861e19f0e82dbd0 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_81ad3ad25ea7c8ac7ebc16e1ec99dd615542baf2011553dd476509d7a54b3a0b = "{{") && ('' === $__internal_81ad3ad25ea7c8ac7ebc16e1ec99dd615542baf2011553dd476509d7a54b3a0b || 0 === strpos($__internal_c9018f8c58c75e0902f6e9dcb016ddac98c245a3818e6954d861e19f0e82dbd0, $__internal_81ad3ad25ea7c8ac7ebc16e1ec99dd615542baf2011553dd476509d7a54b3a0b)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_3d45683bf3c39f9c6ab77138cb445a4cfd119dbc2ad6cd4e6b37a528c5966611 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_a2b2f94ce45a1d49b52c3cde9b2b43b7fa9d6b33202c1703d9d62d5e2f1a10ea = "}}") && ('' === $__internal_a2b2f94ce45a1d49b52c3cde9b2b43b7fa9d6b33202c1703d9d62d5e2f1a10ea || $__internal_a2b2f94ce45a1d49b52c3cde9b2b43b7fa9d6b33202c1703d9d62d5e2f1a10ea === substr($__internal_3d45683bf3c39f9c6ab77138cb445a4cfd119dbc2ad6cd4e6b37a528c5966611, -strlen($__internal_a2b2f94ce45a1d49b52c3cde9b2b43b7fa9d6b33202c1703d9d62d5e2f1a10ea))));
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
        
        $__internal_b17ef180dc896da5997b8e55eac59d60465435d7a710456eb4f040235c5f3a4a->leave($__internal_b17ef180dc896da5997b8e55eac59d60465435d7a710456eb4f040235c5f3a4a_prof);

        
        $__internal_bbc919777c20ec036f04d5afe78a1282902d1241478b655227eb1b4f9bb36c32->leave($__internal_bbc919777c20ec036f04d5afe78a1282902d1241478b655227eb1b4f9bb36c32_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_0119fc77ba5ccad7b1b06de3eb2431ddad14566221d114f9bf68b2bd881a25ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0119fc77ba5ccad7b1b06de3eb2431ddad14566221d114f9bf68b2bd881a25ff->enter($__internal_0119fc77ba5ccad7b1b06de3eb2431ddad14566221d114f9bf68b2bd881a25ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_f2076f4ad026a2e9d2ea8409b1a597957c6d2e6a02948d6df60f1474e889d79a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2076f4ad026a2e9d2ea8409b1a597957c6d2e6a02948d6df60f1474e889d79a->enter($__internal_f2076f4ad026a2e9d2ea8409b1a597957c6d2e6a02948d6df60f1474e889d79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_f2076f4ad026a2e9d2ea8409b1a597957c6d2e6a02948d6df60f1474e889d79a->leave($__internal_f2076f4ad026a2e9d2ea8409b1a597957c6d2e6a02948d6df60f1474e889d79a_prof);

        
        $__internal_0119fc77ba5ccad7b1b06de3eb2431ddad14566221d114f9bf68b2bd881a25ff->leave($__internal_0119fc77ba5ccad7b1b06de3eb2431ddad14566221d114f9bf68b2bd881a25ff_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_8f4bcd04b4a9091a245438acf447f48cb2b3ff7fdc0ccc4a81acb66a650262fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f4bcd04b4a9091a245438acf447f48cb2b3ff7fdc0ccc4a81acb66a650262fe->enter($__internal_8f4bcd04b4a9091a245438acf447f48cb2b3ff7fdc0ccc4a81acb66a650262fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_c8df7375aee3492e35b2f5642969b4f573aec6ca0ba222616fe41ee2b023f22c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8df7375aee3492e35b2f5642969b4f573aec6ca0ba222616fe41ee2b023f22c->enter($__internal_c8df7375aee3492e35b2f5642969b4f573aec6ca0ba222616fe41ee2b023f22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_c8df7375aee3492e35b2f5642969b4f573aec6ca0ba222616fe41ee2b023f22c->leave($__internal_c8df7375aee3492e35b2f5642969b4f573aec6ca0ba222616fe41ee2b023f22c_prof);

        
        $__internal_8f4bcd04b4a9091a245438acf447f48cb2b3ff7fdc0ccc4a81acb66a650262fe->leave($__internal_8f4bcd04b4a9091a245438acf447f48cb2b3ff7fdc0ccc4a81acb66a650262fe_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_37f0c53b48cd72e9995f8122472f2016a8d0ee4a8a9c59e2d5db58b1395e6d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37f0c53b48cd72e9995f8122472f2016a8d0ee4a8a9c59e2d5db58b1395e6d5c->enter($__internal_37f0c53b48cd72e9995f8122472f2016a8d0ee4a8a9c59e2d5db58b1395e6d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_b6c0a7e4b31b5b9ad1dff69988f273e5bb24ad603f9c0c53e157c41366b4a5cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c0a7e4b31b5b9ad1dff69988f273e5bb24ad603f9c0c53e157c41366b4a5cd->enter($__internal_b6c0a7e4b31b5b9ad1dff69988f273e5bb24ad603f9c0c53e157c41366b4a5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_b6c0a7e4b31b5b9ad1dff69988f273e5bb24ad603f9c0c53e157c41366b4a5cd->leave($__internal_b6c0a7e4b31b5b9ad1dff69988f273e5bb24ad603f9c0c53e157c41366b4a5cd_prof);

        
        $__internal_37f0c53b48cd72e9995f8122472f2016a8d0ee4a8a9c59e2d5db58b1395e6d5c->leave($__internal_37f0c53b48cd72e9995f8122472f2016a8d0ee4a8a9c59e2d5db58b1395e6d5c_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_c67bbe98d20b1d18a81874d2b6fdba9b2f95aad035b4618f3a1775ca50eedfff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c67bbe98d20b1d18a81874d2b6fdba9b2f95aad035b4618f3a1775ca50eedfff->enter($__internal_c67bbe98d20b1d18a81874d2b6fdba9b2f95aad035b4618f3a1775ca50eedfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_086804f1607bef844c83bc5633f9524621c447ac983d11b67a8a4af80165359f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086804f1607bef844c83bc5633f9524621c447ac983d11b67a8a4af80165359f->enter($__internal_086804f1607bef844c83bc5633f9524621c447ac983d11b67a8a4af80165359f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_086804f1607bef844c83bc5633f9524621c447ac983d11b67a8a4af80165359f->leave($__internal_086804f1607bef844c83bc5633f9524621c447ac983d11b67a8a4af80165359f_prof);

        
        $__internal_c67bbe98d20b1d18a81874d2b6fdba9b2f95aad035b4618f3a1775ca50eedfff->leave($__internal_c67bbe98d20b1d18a81874d2b6fdba9b2f95aad035b4618f3a1775ca50eedfff_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_346467926a2f2ce0be3f9d3647bdcce192fc52de7193e6fcbe612440c29d5033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_346467926a2f2ce0be3f9d3647bdcce192fc52de7193e6fcbe612440c29d5033->enter($__internal_346467926a2f2ce0be3f9d3647bdcce192fc52de7193e6fcbe612440c29d5033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_fe39777ea3f674adddbef8dbd51dffb3fccf25fe17dbfecf1ceb8c2367069216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe39777ea3f674adddbef8dbd51dffb3fccf25fe17dbfecf1ceb8c2367069216->enter($__internal_fe39777ea3f674adddbef8dbd51dffb3fccf25fe17dbfecf1ceb8c2367069216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_fe39777ea3f674adddbef8dbd51dffb3fccf25fe17dbfecf1ceb8c2367069216->leave($__internal_fe39777ea3f674adddbef8dbd51dffb3fccf25fe17dbfecf1ceb8c2367069216_prof);

        
        $__internal_346467926a2f2ce0be3f9d3647bdcce192fc52de7193e6fcbe612440c29d5033->leave($__internal_346467926a2f2ce0be3f9d3647bdcce192fc52de7193e6fcbe612440c29d5033_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_afbe2a7b9b967e2983bb94cce7f34da8c6e503044ae5768a5b8f2e944099a55b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afbe2a7b9b967e2983bb94cce7f34da8c6e503044ae5768a5b8f2e944099a55b->enter($__internal_afbe2a7b9b967e2983bb94cce7f34da8c6e503044ae5768a5b8f2e944099a55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_fb4d01e4d1262b3c012906c7b1bdb1ba6795665cd009951a5e8c135ab9e33869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4d01e4d1262b3c012906c7b1bdb1ba6795665cd009951a5e8c135ab9e33869->enter($__internal_fb4d01e4d1262b3c012906c7b1bdb1ba6795665cd009951a5e8c135ab9e33869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_fb4d01e4d1262b3c012906c7b1bdb1ba6795665cd009951a5e8c135ab9e33869->leave($__internal_fb4d01e4d1262b3c012906c7b1bdb1ba6795665cd009951a5e8c135ab9e33869_prof);

        
        $__internal_afbe2a7b9b967e2983bb94cce7f34da8c6e503044ae5768a5b8f2e944099a55b->leave($__internal_afbe2a7b9b967e2983bb94cce7f34da8c6e503044ae5768a5b8f2e944099a55b_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_fa9d7f605d346bdfded4122a4f8cd52803ff6afd388d86b3b4fe7fab832a8167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9d7f605d346bdfded4122a4f8cd52803ff6afd388d86b3b4fe7fab832a8167->enter($__internal_fa9d7f605d346bdfded4122a4f8cd52803ff6afd388d86b3b4fe7fab832a8167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_30f96f2fa8fdebb20449245bdf142eebb6cf150ad58c0805fe86a76a6cdb63d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f96f2fa8fdebb20449245bdf142eebb6cf150ad58c0805fe86a76a6cdb63d7->enter($__internal_30f96f2fa8fdebb20449245bdf142eebb6cf150ad58c0805fe86a76a6cdb63d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_30f96f2fa8fdebb20449245bdf142eebb6cf150ad58c0805fe86a76a6cdb63d7->leave($__internal_30f96f2fa8fdebb20449245bdf142eebb6cf150ad58c0805fe86a76a6cdb63d7_prof);

        
        $__internal_fa9d7f605d346bdfded4122a4f8cd52803ff6afd388d86b3b4fe7fab832a8167->leave($__internal_fa9d7f605d346bdfded4122a4f8cd52803ff6afd388d86b3b4fe7fab832a8167_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_36477f775df081815dd41241ccaea28452d92688a3ba07e2ce50738d1a81ba0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36477f775df081815dd41241ccaea28452d92688a3ba07e2ce50738d1a81ba0b->enter($__internal_36477f775df081815dd41241ccaea28452d92688a3ba07e2ce50738d1a81ba0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_bb0429f7e67321fe929320c7da2a64e14182f1222db72a3e966a4e840958d8ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb0429f7e67321fe929320c7da2a64e14182f1222db72a3e966a4e840958d8ef->enter($__internal_bb0429f7e67321fe929320c7da2a64e14182f1222db72a3e966a4e840958d8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_bb0429f7e67321fe929320c7da2a64e14182f1222db72a3e966a4e840958d8ef->leave($__internal_bb0429f7e67321fe929320c7da2a64e14182f1222db72a3e966a4e840958d8ef_prof);

        
        $__internal_36477f775df081815dd41241ccaea28452d92688a3ba07e2ce50738d1a81ba0b->leave($__internal_36477f775df081815dd41241ccaea28452d92688a3ba07e2ce50738d1a81ba0b_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_ad7d9542adb00d045d6c099e5331253ae5b40ae6b58d1d2c61bb95baaa082204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad7d9542adb00d045d6c099e5331253ae5b40ae6b58d1d2c61bb95baaa082204->enter($__internal_ad7d9542adb00d045d6c099e5331253ae5b40ae6b58d1d2c61bb95baaa082204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_7bb4fab071362bc3a2eacdb3ae47cae0e46e4b4b00e4765021a89cd04fe67e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb4fab071362bc3a2eacdb3ae47cae0e46e4b4b00e4765021a89cd04fe67e6e->enter($__internal_7bb4fab071362bc3a2eacdb3ae47cae0e46e4b4b00e4765021a89cd04fe67e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_7bb4fab071362bc3a2eacdb3ae47cae0e46e4b4b00e4765021a89cd04fe67e6e->leave($__internal_7bb4fab071362bc3a2eacdb3ae47cae0e46e4b4b00e4765021a89cd04fe67e6e_prof);

        
        $__internal_ad7d9542adb00d045d6c099e5331253ae5b40ae6b58d1d2c61bb95baaa082204->leave($__internal_ad7d9542adb00d045d6c099e5331253ae5b40ae6b58d1d2c61bb95baaa082204_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_4d04e626e7178a34914e29caa9d5d5cd5a52370ece81989900b50024ca741aad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d04e626e7178a34914e29caa9d5d5cd5a52370ece81989900b50024ca741aad->enter($__internal_4d04e626e7178a34914e29caa9d5d5cd5a52370ece81989900b50024ca741aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_3ddc665b7e690462ab33d078042d423d2c403923e6cd3e9bf8d04048699f2e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ddc665b7e690462ab33d078042d423d2c403923e6cd3e9bf8d04048699f2e73->enter($__internal_3ddc665b7e690462ab33d078042d423d2c403923e6cd3e9bf8d04048699f2e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_3ddc665b7e690462ab33d078042d423d2c403923e6cd3e9bf8d04048699f2e73->leave($__internal_3ddc665b7e690462ab33d078042d423d2c403923e6cd3e9bf8d04048699f2e73_prof);

        
        $__internal_4d04e626e7178a34914e29caa9d5d5cd5a52370ece81989900b50024ca741aad->leave($__internal_4d04e626e7178a34914e29caa9d5d5cd5a52370ece81989900b50024ca741aad_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_227a20c5847d27adfae729bf64f5b06d7d1feb1aa849297e098fd8e3e606c018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_227a20c5847d27adfae729bf64f5b06d7d1feb1aa849297e098fd8e3e606c018->enter($__internal_227a20c5847d27adfae729bf64f5b06d7d1feb1aa849297e098fd8e3e606c018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_0130eace24951b5ef2dae840286e456262bbf2fafba266bafa4ef0759ef1cbe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0130eace24951b5ef2dae840286e456262bbf2fafba266bafa4ef0759ef1cbe3->enter($__internal_0130eace24951b5ef2dae840286e456262bbf2fafba266bafa4ef0759ef1cbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_0130eace24951b5ef2dae840286e456262bbf2fafba266bafa4ef0759ef1cbe3->leave($__internal_0130eace24951b5ef2dae840286e456262bbf2fafba266bafa4ef0759ef1cbe3_prof);

        
        $__internal_227a20c5847d27adfae729bf64f5b06d7d1feb1aa849297e098fd8e3e606c018->leave($__internal_227a20c5847d27adfae729bf64f5b06d7d1feb1aa849297e098fd8e3e606c018_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_2ec8cce44e9071895173989d21ba8e931eda40faf61965220914c4f10f31eea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ec8cce44e9071895173989d21ba8e931eda40faf61965220914c4f10f31eea9->enter($__internal_2ec8cce44e9071895173989d21ba8e931eda40faf61965220914c4f10f31eea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_7796cc8e14197efe7b20e739d0a94706ad54e95d5b000ce3411e26f49ccd1aaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7796cc8e14197efe7b20e739d0a94706ad54e95d5b000ce3411e26f49ccd1aaa->enter($__internal_7796cc8e14197efe7b20e739d0a94706ad54e95d5b000ce3411e26f49ccd1aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7796cc8e14197efe7b20e739d0a94706ad54e95d5b000ce3411e26f49ccd1aaa->leave($__internal_7796cc8e14197efe7b20e739d0a94706ad54e95d5b000ce3411e26f49ccd1aaa_prof);

        
        $__internal_2ec8cce44e9071895173989d21ba8e931eda40faf61965220914c4f10f31eea9->leave($__internal_2ec8cce44e9071895173989d21ba8e931eda40faf61965220914c4f10f31eea9_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_217a8e7ad0f06048e0566049710611451323eca252f2d39cadf2c40638488734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_217a8e7ad0f06048e0566049710611451323eca252f2d39cadf2c40638488734->enter($__internal_217a8e7ad0f06048e0566049710611451323eca252f2d39cadf2c40638488734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_064d1f06c095aec33f713c983b8cf7e940c51c4c189783f46426b8339de14c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064d1f06c095aec33f713c983b8cf7e940c51c4c189783f46426b8339de14c75->enter($__internal_064d1f06c095aec33f713c983b8cf7e940c51c4c189783f46426b8339de14c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_064d1f06c095aec33f713c983b8cf7e940c51c4c189783f46426b8339de14c75->leave($__internal_064d1f06c095aec33f713c983b8cf7e940c51c4c189783f46426b8339de14c75_prof);

        
        $__internal_217a8e7ad0f06048e0566049710611451323eca252f2d39cadf2c40638488734->leave($__internal_217a8e7ad0f06048e0566049710611451323eca252f2d39cadf2c40638488734_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_8112d8cbdc6281f22a3fac5e71987068d8d67d07b836dc1a253a83beb3a8805a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8112d8cbdc6281f22a3fac5e71987068d8d67d07b836dc1a253a83beb3a8805a->enter($__internal_8112d8cbdc6281f22a3fac5e71987068d8d67d07b836dc1a253a83beb3a8805a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_a233ef1de637b6f2cb8c1051664a7a3597300f7654c9310f5ab32c3b085821cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a233ef1de637b6f2cb8c1051664a7a3597300f7654c9310f5ab32c3b085821cb->enter($__internal_a233ef1de637b6f2cb8c1051664a7a3597300f7654c9310f5ab32c3b085821cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_a233ef1de637b6f2cb8c1051664a7a3597300f7654c9310f5ab32c3b085821cb->leave($__internal_a233ef1de637b6f2cb8c1051664a7a3597300f7654c9310f5ab32c3b085821cb_prof);

        
        $__internal_8112d8cbdc6281f22a3fac5e71987068d8d67d07b836dc1a253a83beb3a8805a->leave($__internal_8112d8cbdc6281f22a3fac5e71987068d8d67d07b836dc1a253a83beb3a8805a_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d08d94850681d96f84c68de0843301bdc73bfffe19612ae44eb697164530c38f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08d94850681d96f84c68de0843301bdc73bfffe19612ae44eb697164530c38f->enter($__internal_d08d94850681d96f84c68de0843301bdc73bfffe19612ae44eb697164530c38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_10affa3f053417373e45c07ac71ace7e13a6bfdf3606978ec1198671a1db490b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10affa3f053417373e45c07ac71ace7e13a6bfdf3606978ec1198671a1db490b->enter($__internal_10affa3f053417373e45c07ac71ace7e13a6bfdf3606978ec1198671a1db490b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_10affa3f053417373e45c07ac71ace7e13a6bfdf3606978ec1198671a1db490b->leave($__internal_10affa3f053417373e45c07ac71ace7e13a6bfdf3606978ec1198671a1db490b_prof);

        
        $__internal_d08d94850681d96f84c68de0843301bdc73bfffe19612ae44eb697164530c38f->leave($__internal_d08d94850681d96f84c68de0843301bdc73bfffe19612ae44eb697164530c38f_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_cd8a13d9eeb1ea1e61e9e58e69fee831c8c9cfee42a7c5c1fefdf6206671c09c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd8a13d9eeb1ea1e61e9e58e69fee831c8c9cfee42a7c5c1fefdf6206671c09c->enter($__internal_cd8a13d9eeb1ea1e61e9e58e69fee831c8c9cfee42a7c5c1fefdf6206671c09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_0a386ab61dc5db392bb75db6057dc78d48916e6b66e9614e70fdd13d43bcffd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a386ab61dc5db392bb75db6057dc78d48916e6b66e9614e70fdd13d43bcffd8->enter($__internal_0a386ab61dc5db392bb75db6057dc78d48916e6b66e9614e70fdd13d43bcffd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_0a386ab61dc5db392bb75db6057dc78d48916e6b66e9614e70fdd13d43bcffd8->leave($__internal_0a386ab61dc5db392bb75db6057dc78d48916e6b66e9614e70fdd13d43bcffd8_prof);

        
        $__internal_cd8a13d9eeb1ea1e61e9e58e69fee831c8c9cfee42a7c5c1fefdf6206671c09c->leave($__internal_cd8a13d9eeb1ea1e61e9e58e69fee831c8c9cfee42a7c5c1fefdf6206671c09c_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_7d48433fb26677f67022a97c31ee057f26bba0a4908402d49150948cc6bf411a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d48433fb26677f67022a97c31ee057f26bba0a4908402d49150948cc6bf411a->enter($__internal_7d48433fb26677f67022a97c31ee057f26bba0a4908402d49150948cc6bf411a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_7bf6cc524e056aac0fa10bb9ca2666fc582a6e9c31915a85c140c90ab99d4f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf6cc524e056aac0fa10bb9ca2666fc582a6e9c31915a85c140c90ab99d4f89->enter($__internal_7bf6cc524e056aac0fa10bb9ca2666fc582a6e9c31915a85c140c90ab99d4f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7bf6cc524e056aac0fa10bb9ca2666fc582a6e9c31915a85c140c90ab99d4f89->leave($__internal_7bf6cc524e056aac0fa10bb9ca2666fc582a6e9c31915a85c140c90ab99d4f89_prof);

        
        $__internal_7d48433fb26677f67022a97c31ee057f26bba0a4908402d49150948cc6bf411a->leave($__internal_7d48433fb26677f67022a97c31ee057f26bba0a4908402d49150948cc6bf411a_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_4f1f3e5687a576d6da24fd77240d83ed943cae4350c8cc2c22bcc9ace7070a5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f1f3e5687a576d6da24fd77240d83ed943cae4350c8cc2c22bcc9ace7070a5f->enter($__internal_4f1f3e5687a576d6da24fd77240d83ed943cae4350c8cc2c22bcc9ace7070a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_1bd181acccce6d4151d551d1ce37881d090800d5a6d4eff46ec400889bed5c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd181acccce6d4151d551d1ce37881d090800d5a6d4eff46ec400889bed5c9d->enter($__internal_1bd181acccce6d4151d551d1ce37881d090800d5a6d4eff46ec400889bed5c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1bd181acccce6d4151d551d1ce37881d090800d5a6d4eff46ec400889bed5c9d->leave($__internal_1bd181acccce6d4151d551d1ce37881d090800d5a6d4eff46ec400889bed5c9d_prof);

        
        $__internal_4f1f3e5687a576d6da24fd77240d83ed943cae4350c8cc2c22bcc9ace7070a5f->leave($__internal_4f1f3e5687a576d6da24fd77240d83ed943cae4350c8cc2c22bcc9ace7070a5f_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_7cca6a77f0fb9f4079d0eb9dcf7cdd344b0ca4f84178ad83ff55cceec3f6d607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cca6a77f0fb9f4079d0eb9dcf7cdd344b0ca4f84178ad83ff55cceec3f6d607->enter($__internal_7cca6a77f0fb9f4079d0eb9dcf7cdd344b0ca4f84178ad83ff55cceec3f6d607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_0787684b15642bbb8d78d105d8707b47fa84ea9c04729e3a7cc0b30dd5a3c2a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0787684b15642bbb8d78d105d8707b47fa84ea9c04729e3a7cc0b30dd5a3c2a0->enter($__internal_0787684b15642bbb8d78d105d8707b47fa84ea9c04729e3a7cc0b30dd5a3c2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0787684b15642bbb8d78d105d8707b47fa84ea9c04729e3a7cc0b30dd5a3c2a0->leave($__internal_0787684b15642bbb8d78d105d8707b47fa84ea9c04729e3a7cc0b30dd5a3c2a0_prof);

        
        $__internal_7cca6a77f0fb9f4079d0eb9dcf7cdd344b0ca4f84178ad83ff55cceec3f6d607->leave($__internal_7cca6a77f0fb9f4079d0eb9dcf7cdd344b0ca4f84178ad83ff55cceec3f6d607_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_4f3dfad7fc1b699f10fa995513616bf7f0bced23cf18d481e730665f102d0555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f3dfad7fc1b699f10fa995513616bf7f0bced23cf18d481e730665f102d0555->enter($__internal_4f3dfad7fc1b699f10fa995513616bf7f0bced23cf18d481e730665f102d0555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_b4d56a9b8eca4aae6ba27098e336539c96098ebc531650885f939bfeab47cb90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d56a9b8eca4aae6ba27098e336539c96098ebc531650885f939bfeab47cb90->enter($__internal_b4d56a9b8eca4aae6ba27098e336539c96098ebc531650885f939bfeab47cb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b4d56a9b8eca4aae6ba27098e336539c96098ebc531650885f939bfeab47cb90->leave($__internal_b4d56a9b8eca4aae6ba27098e336539c96098ebc531650885f939bfeab47cb90_prof);

        
        $__internal_4f3dfad7fc1b699f10fa995513616bf7f0bced23cf18d481e730665f102d0555->leave($__internal_4f3dfad7fc1b699f10fa995513616bf7f0bced23cf18d481e730665f102d0555_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_face0b948781c2a298dfa0f93f91d15d9214918853ab4bbfadf9b0358be25b89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_face0b948781c2a298dfa0f93f91d15d9214918853ab4bbfadf9b0358be25b89->enter($__internal_face0b948781c2a298dfa0f93f91d15d9214918853ab4bbfadf9b0358be25b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_21b6dfeea82d4d5b8cfdd89cb3dc64079973dd7fe18e94d92ca4dd80bac3bb8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b6dfeea82d4d5b8cfdd89cb3dc64079973dd7fe18e94d92ca4dd80bac3bb8c->enter($__internal_21b6dfeea82d4d5b8cfdd89cb3dc64079973dd7fe18e94d92ca4dd80bac3bb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_21b6dfeea82d4d5b8cfdd89cb3dc64079973dd7fe18e94d92ca4dd80bac3bb8c->leave($__internal_21b6dfeea82d4d5b8cfdd89cb3dc64079973dd7fe18e94d92ca4dd80bac3bb8c_prof);

        
        $__internal_face0b948781c2a298dfa0f93f91d15d9214918853ab4bbfadf9b0358be25b89->leave($__internal_face0b948781c2a298dfa0f93f91d15d9214918853ab4bbfadf9b0358be25b89_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_21bf3bd159781ace7458ab84be9401e3e35c6510997dd8b0ae31f5f37dd2f117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21bf3bd159781ace7458ab84be9401e3e35c6510997dd8b0ae31f5f37dd2f117->enter($__internal_21bf3bd159781ace7458ab84be9401e3e35c6510997dd8b0ae31f5f37dd2f117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_9d5e3e3eabb27ae9684bff094bdc28b1e20fffead705a45eb34eca5f01271ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5e3e3eabb27ae9684bff094bdc28b1e20fffead705a45eb34eca5f01271ab9->enter($__internal_9d5e3e3eabb27ae9684bff094bdc28b1e20fffead705a45eb34eca5f01271ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_9d5e3e3eabb27ae9684bff094bdc28b1e20fffead705a45eb34eca5f01271ab9->leave($__internal_9d5e3e3eabb27ae9684bff094bdc28b1e20fffead705a45eb34eca5f01271ab9_prof);

        
        $__internal_21bf3bd159781ace7458ab84be9401e3e35c6510997dd8b0ae31f5f37dd2f117->leave($__internal_21bf3bd159781ace7458ab84be9401e3e35c6510997dd8b0ae31f5f37dd2f117_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_bd04ff729772b08f52a37625f0d95d220804bddf71022920574b907c837d62d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd04ff729772b08f52a37625f0d95d220804bddf71022920574b907c837d62d3->enter($__internal_bd04ff729772b08f52a37625f0d95d220804bddf71022920574b907c837d62d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_ac2559127b809c8078186d988dd3d5a3e685d686dc08c2408821204029a3fa5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac2559127b809c8078186d988dd3d5a3e685d686dc08c2408821204029a3fa5e->enter($__internal_ac2559127b809c8078186d988dd3d5a3e685d686dc08c2408821204029a3fa5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_ac2559127b809c8078186d988dd3d5a3e685d686dc08c2408821204029a3fa5e->leave($__internal_ac2559127b809c8078186d988dd3d5a3e685d686dc08c2408821204029a3fa5e_prof);

        
        $__internal_bd04ff729772b08f52a37625f0d95d220804bddf71022920574b907c837d62d3->leave($__internal_bd04ff729772b08f52a37625f0d95d220804bddf71022920574b907c837d62d3_prof);

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
