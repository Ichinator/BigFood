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
        $__internal_5e99dee78322c25b120388d0a915e624d3424231b21deae99143e75cc79e49cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e99dee78322c25b120388d0a915e624d3424231b21deae99143e75cc79e49cf->enter($__internal_5e99dee78322c25b120388d0a915e624d3424231b21deae99143e75cc79e49cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_2ac418afeb173b1c6b484e8f3d7effc1081e7bbf3fc2799066bddfb333d47da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac418afeb173b1c6b484e8f3d7effc1081e7bbf3fc2799066bddfb333d47da7->enter($__internal_2ac418afeb173b1c6b484e8f3d7effc1081e7bbf3fc2799066bddfb333d47da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_5e99dee78322c25b120388d0a915e624d3424231b21deae99143e75cc79e49cf->leave($__internal_5e99dee78322c25b120388d0a915e624d3424231b21deae99143e75cc79e49cf_prof);

        
        $__internal_2ac418afeb173b1c6b484e8f3d7effc1081e7bbf3fc2799066bddfb333d47da7->leave($__internal_2ac418afeb173b1c6b484e8f3d7effc1081e7bbf3fc2799066bddfb333d47da7_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_ef400709950498e9907580df2d5fa4539ce6704e93eaf4d8f433e75a488aca4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef400709950498e9907580df2d5fa4539ce6704e93eaf4d8f433e75a488aca4d->enter($__internal_ef400709950498e9907580df2d5fa4539ce6704e93eaf4d8f433e75a488aca4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_9fd6df9592f2701c4a00f76a9320932bd6ea3b0c1f91d7789a3ff62050114629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd6df9592f2701c4a00f76a9320932bd6ea3b0c1f91d7789a3ff62050114629->enter($__internal_9fd6df9592f2701c4a00f76a9320932bd6ea3b0c1f91d7789a3ff62050114629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9fd6df9592f2701c4a00f76a9320932bd6ea3b0c1f91d7789a3ff62050114629->leave($__internal_9fd6df9592f2701c4a00f76a9320932bd6ea3b0c1f91d7789a3ff62050114629_prof);

        
        $__internal_ef400709950498e9907580df2d5fa4539ce6704e93eaf4d8f433e75a488aca4d->leave($__internal_ef400709950498e9907580df2d5fa4539ce6704e93eaf4d8f433e75a488aca4d_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d564dac4cca24504ae5942249c83343ab3ae5bd0ea7769addf12587299dc50f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d564dac4cca24504ae5942249c83343ab3ae5bd0ea7769addf12587299dc50f7->enter($__internal_d564dac4cca24504ae5942249c83343ab3ae5bd0ea7769addf12587299dc50f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_675f20d61a1872a933aff7379c20084e52cea5c030268542de7d24878e5613b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_675f20d61a1872a933aff7379c20084e52cea5c030268542de7d24878e5613b2->enter($__internal_675f20d61a1872a933aff7379c20084e52cea5c030268542de7d24878e5613b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_675f20d61a1872a933aff7379c20084e52cea5c030268542de7d24878e5613b2->leave($__internal_675f20d61a1872a933aff7379c20084e52cea5c030268542de7d24878e5613b2_prof);

        
        $__internal_d564dac4cca24504ae5942249c83343ab3ae5bd0ea7769addf12587299dc50f7->leave($__internal_d564dac4cca24504ae5942249c83343ab3ae5bd0ea7769addf12587299dc50f7_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_c85582fc6094cf8225694cb29f9e3b1eda0496f593aaa60c8c34da6e96bfaee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c85582fc6094cf8225694cb29f9e3b1eda0496f593aaa60c8c34da6e96bfaee4->enter($__internal_c85582fc6094cf8225694cb29f9e3b1eda0496f593aaa60c8c34da6e96bfaee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_9a477e49922ae7395dbc812e188a8da95f7ee86290068bf42c0a2b32ec731143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a477e49922ae7395dbc812e188a8da95f7ee86290068bf42c0a2b32ec731143->enter($__internal_9a477e49922ae7395dbc812e188a8da95f7ee86290068bf42c0a2b32ec731143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_9a477e49922ae7395dbc812e188a8da95f7ee86290068bf42c0a2b32ec731143->leave($__internal_9a477e49922ae7395dbc812e188a8da95f7ee86290068bf42c0a2b32ec731143_prof);

        
        $__internal_c85582fc6094cf8225694cb29f9e3b1eda0496f593aaa60c8c34da6e96bfaee4->leave($__internal_c85582fc6094cf8225694cb29f9e3b1eda0496f593aaa60c8c34da6e96bfaee4_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_fd90023823b4e591558aacbfe1608d517ca7258f899cc40c540ab45272bb07b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd90023823b4e591558aacbfe1608d517ca7258f899cc40c540ab45272bb07b1->enter($__internal_fd90023823b4e591558aacbfe1608d517ca7258f899cc40c540ab45272bb07b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_7c60ae07c0b09ad1db050fd1e8ef24243ad425d5cb473d937fc1dfe807afbc97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c60ae07c0b09ad1db050fd1e8ef24243ad425d5cb473d937fc1dfe807afbc97->enter($__internal_7c60ae07c0b09ad1db050fd1e8ef24243ad425d5cb473d937fc1dfe807afbc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_467b33a415d39e5efad5a4ebbdc7b19e32ed41c629e6fb8e6fbf0bd4968e913c = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_bf672b64ed8a88d9a51592b331e933216e40b6cdff7a1f4ecace4a071f8a8f73 = "{{") && ('' === $__internal_bf672b64ed8a88d9a51592b331e933216e40b6cdff7a1f4ecace4a071f8a8f73 || 0 === strpos($__internal_467b33a415d39e5efad5a4ebbdc7b19e32ed41c629e6fb8e6fbf0bd4968e913c, $__internal_bf672b64ed8a88d9a51592b331e933216e40b6cdff7a1f4ecace4a071f8a8f73)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_cd1fbf3098a8ecc8c57f24bb6924ed3dbd690fc477efaea5190ff08045c44fcb = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_b482c959557ea8ac10f791d6fb016b48669ba1b53f6915fb93c670bde1ab333d = "}}") && ('' === $__internal_b482c959557ea8ac10f791d6fb016b48669ba1b53f6915fb93c670bde1ab333d || $__internal_b482c959557ea8ac10f791d6fb016b48669ba1b53f6915fb93c670bde1ab333d === substr($__internal_cd1fbf3098a8ecc8c57f24bb6924ed3dbd690fc477efaea5190ff08045c44fcb, -strlen($__internal_b482c959557ea8ac10f791d6fb016b48669ba1b53f6915fb93c670bde1ab333d))));
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
        
        $__internal_7c60ae07c0b09ad1db050fd1e8ef24243ad425d5cb473d937fc1dfe807afbc97->leave($__internal_7c60ae07c0b09ad1db050fd1e8ef24243ad425d5cb473d937fc1dfe807afbc97_prof);

        
        $__internal_fd90023823b4e591558aacbfe1608d517ca7258f899cc40c540ab45272bb07b1->leave($__internal_fd90023823b4e591558aacbfe1608d517ca7258f899cc40c540ab45272bb07b1_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_749bbc29ac3c50176a29d1e03ebf506bf247400029adeeca855bec1f8bd6c563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_749bbc29ac3c50176a29d1e03ebf506bf247400029adeeca855bec1f8bd6c563->enter($__internal_749bbc29ac3c50176a29d1e03ebf506bf247400029adeeca855bec1f8bd6c563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_d0aaae022b3e4c7148757b9cf58c26d9dcf43355502936909740e192fe8092ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0aaae022b3e4c7148757b9cf58c26d9dcf43355502936909740e192fe8092ea->enter($__internal_d0aaae022b3e4c7148757b9cf58c26d9dcf43355502936909740e192fe8092ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_d0aaae022b3e4c7148757b9cf58c26d9dcf43355502936909740e192fe8092ea->leave($__internal_d0aaae022b3e4c7148757b9cf58c26d9dcf43355502936909740e192fe8092ea_prof);

        
        $__internal_749bbc29ac3c50176a29d1e03ebf506bf247400029adeeca855bec1f8bd6c563->leave($__internal_749bbc29ac3c50176a29d1e03ebf506bf247400029adeeca855bec1f8bd6c563_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_fcac3291ed459052883bb24bdcefb97020b70710d69f1bbd9ec9345189b7c29d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcac3291ed459052883bb24bdcefb97020b70710d69f1bbd9ec9345189b7c29d->enter($__internal_fcac3291ed459052883bb24bdcefb97020b70710d69f1bbd9ec9345189b7c29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_4b81a1aaac7d99aa0ad2ea7dba3665c4613b013b12cffb73ab266679c9f7a7d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b81a1aaac7d99aa0ad2ea7dba3665c4613b013b12cffb73ab266679c9f7a7d5->enter($__internal_4b81a1aaac7d99aa0ad2ea7dba3665c4613b013b12cffb73ab266679c9f7a7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_4b81a1aaac7d99aa0ad2ea7dba3665c4613b013b12cffb73ab266679c9f7a7d5->leave($__internal_4b81a1aaac7d99aa0ad2ea7dba3665c4613b013b12cffb73ab266679c9f7a7d5_prof);

        
        $__internal_fcac3291ed459052883bb24bdcefb97020b70710d69f1bbd9ec9345189b7c29d->leave($__internal_fcac3291ed459052883bb24bdcefb97020b70710d69f1bbd9ec9345189b7c29d_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_8961c28034a6e3d236de390c9f91d06ce08ca0c4c3c3c3e5173ffa5214bb2fdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8961c28034a6e3d236de390c9f91d06ce08ca0c4c3c3c3e5173ffa5214bb2fdb->enter($__internal_8961c28034a6e3d236de390c9f91d06ce08ca0c4c3c3c3e5173ffa5214bb2fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_048aed4f3fd11f612acc7e0564238565f4646b1f4bed9f208081ee9d3a8ec695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_048aed4f3fd11f612acc7e0564238565f4646b1f4bed9f208081ee9d3a8ec695->enter($__internal_048aed4f3fd11f612acc7e0564238565f4646b1f4bed9f208081ee9d3a8ec695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_048aed4f3fd11f612acc7e0564238565f4646b1f4bed9f208081ee9d3a8ec695->leave($__internal_048aed4f3fd11f612acc7e0564238565f4646b1f4bed9f208081ee9d3a8ec695_prof);

        
        $__internal_8961c28034a6e3d236de390c9f91d06ce08ca0c4c3c3c3e5173ffa5214bb2fdb->leave($__internal_8961c28034a6e3d236de390c9f91d06ce08ca0c4c3c3c3e5173ffa5214bb2fdb_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_fd1474afb4611c8d53edb83e84abf4267247fa2f82fc2006d09091cffb415132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd1474afb4611c8d53edb83e84abf4267247fa2f82fc2006d09091cffb415132->enter($__internal_fd1474afb4611c8d53edb83e84abf4267247fa2f82fc2006d09091cffb415132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_7710f85addfe800198cecdcb03e8111ba4a28d73b181d24977c3a0e4be80f879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7710f85addfe800198cecdcb03e8111ba4a28d73b181d24977c3a0e4be80f879->enter($__internal_7710f85addfe800198cecdcb03e8111ba4a28d73b181d24977c3a0e4be80f879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_7710f85addfe800198cecdcb03e8111ba4a28d73b181d24977c3a0e4be80f879->leave($__internal_7710f85addfe800198cecdcb03e8111ba4a28d73b181d24977c3a0e4be80f879_prof);

        
        $__internal_fd1474afb4611c8d53edb83e84abf4267247fa2f82fc2006d09091cffb415132->leave($__internal_fd1474afb4611c8d53edb83e84abf4267247fa2f82fc2006d09091cffb415132_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_66b7766f5f5a156dd45aa46df81b7b63271eea60f646c7c850f325509a89e180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b7766f5f5a156dd45aa46df81b7b63271eea60f646c7c850f325509a89e180->enter($__internal_66b7766f5f5a156dd45aa46df81b7b63271eea60f646c7c850f325509a89e180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_b6dcffb37ed4b29aba225c8593dcfe88547c8a07a69403b2bb8885088d9dceeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6dcffb37ed4b29aba225c8593dcfe88547c8a07a69403b2bb8885088d9dceeb->enter($__internal_b6dcffb37ed4b29aba225c8593dcfe88547c8a07a69403b2bb8885088d9dceeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_b6dcffb37ed4b29aba225c8593dcfe88547c8a07a69403b2bb8885088d9dceeb->leave($__internal_b6dcffb37ed4b29aba225c8593dcfe88547c8a07a69403b2bb8885088d9dceeb_prof);

        
        $__internal_66b7766f5f5a156dd45aa46df81b7b63271eea60f646c7c850f325509a89e180->leave($__internal_66b7766f5f5a156dd45aa46df81b7b63271eea60f646c7c850f325509a89e180_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_79a002600875e753e9e4e0e4be6be90c3f67c57f618e6489d6caf29efdc77ed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79a002600875e753e9e4e0e4be6be90c3f67c57f618e6489d6caf29efdc77ed1->enter($__internal_79a002600875e753e9e4e0e4be6be90c3f67c57f618e6489d6caf29efdc77ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_d122d108ef8b1736cc0e85444a8a8a5114e187783eef55b48eced1290a6f16b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d122d108ef8b1736cc0e85444a8a8a5114e187783eef55b48eced1290a6f16b3->enter($__internal_d122d108ef8b1736cc0e85444a8a8a5114e187783eef55b48eced1290a6f16b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_d122d108ef8b1736cc0e85444a8a8a5114e187783eef55b48eced1290a6f16b3->leave($__internal_d122d108ef8b1736cc0e85444a8a8a5114e187783eef55b48eced1290a6f16b3_prof);

        
        $__internal_79a002600875e753e9e4e0e4be6be90c3f67c57f618e6489d6caf29efdc77ed1->leave($__internal_79a002600875e753e9e4e0e4be6be90c3f67c57f618e6489d6caf29efdc77ed1_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_9d3127d0b857d43ff422da91861978233763723fce257f945bfdb7c4322c8e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d3127d0b857d43ff422da91861978233763723fce257f945bfdb7c4322c8e03->enter($__internal_9d3127d0b857d43ff422da91861978233763723fce257f945bfdb7c4322c8e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_74410654a99ffc508355f561e8efe68b639fed99a74b75dfeee1b554d0b1f256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74410654a99ffc508355f561e8efe68b639fed99a74b75dfeee1b554d0b1f256->enter($__internal_74410654a99ffc508355f561e8efe68b639fed99a74b75dfeee1b554d0b1f256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_74410654a99ffc508355f561e8efe68b639fed99a74b75dfeee1b554d0b1f256->leave($__internal_74410654a99ffc508355f561e8efe68b639fed99a74b75dfeee1b554d0b1f256_prof);

        
        $__internal_9d3127d0b857d43ff422da91861978233763723fce257f945bfdb7c4322c8e03->leave($__internal_9d3127d0b857d43ff422da91861978233763723fce257f945bfdb7c4322c8e03_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_d257b986a6a9b05847c91408d4003584baa8072045d00cf4014ec3725ad7569e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d257b986a6a9b05847c91408d4003584baa8072045d00cf4014ec3725ad7569e->enter($__internal_d257b986a6a9b05847c91408d4003584baa8072045d00cf4014ec3725ad7569e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_7262a937882ec05790693d0aa9498531d9a228f91143160587d3a4c97495f1c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7262a937882ec05790693d0aa9498531d9a228f91143160587d3a4c97495f1c8->enter($__internal_7262a937882ec05790693d0aa9498531d9a228f91143160587d3a4c97495f1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_7262a937882ec05790693d0aa9498531d9a228f91143160587d3a4c97495f1c8->leave($__internal_7262a937882ec05790693d0aa9498531d9a228f91143160587d3a4c97495f1c8_prof);

        
        $__internal_d257b986a6a9b05847c91408d4003584baa8072045d00cf4014ec3725ad7569e->leave($__internal_d257b986a6a9b05847c91408d4003584baa8072045d00cf4014ec3725ad7569e_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_43eb56aa7dc233724187ecbd55725aba0fbdaf517fcb01ee00cfff32b25359b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43eb56aa7dc233724187ecbd55725aba0fbdaf517fcb01ee00cfff32b25359b9->enter($__internal_43eb56aa7dc233724187ecbd55725aba0fbdaf517fcb01ee00cfff32b25359b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_cf965d9cf36a7639b7b03be9e2832b625a43ac48f76488306e3bad7b118359ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf965d9cf36a7639b7b03be9e2832b625a43ac48f76488306e3bad7b118359ee->enter($__internal_cf965d9cf36a7639b7b03be9e2832b625a43ac48f76488306e3bad7b118359ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_cf965d9cf36a7639b7b03be9e2832b625a43ac48f76488306e3bad7b118359ee->leave($__internal_cf965d9cf36a7639b7b03be9e2832b625a43ac48f76488306e3bad7b118359ee_prof);

        
        $__internal_43eb56aa7dc233724187ecbd55725aba0fbdaf517fcb01ee00cfff32b25359b9->leave($__internal_43eb56aa7dc233724187ecbd55725aba0fbdaf517fcb01ee00cfff32b25359b9_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d5af31a2e9b49899e181aa8c9afb7d34a44624969287580515f07ec6553d76ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5af31a2e9b49899e181aa8c9afb7d34a44624969287580515f07ec6553d76ca->enter($__internal_d5af31a2e9b49899e181aa8c9afb7d34a44624969287580515f07ec6553d76ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_b5d9bd8683009cbc22377cc6c2c3a89a8f653ed86c70867ea8da577341acb1d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d9bd8683009cbc22377cc6c2c3a89a8f653ed86c70867ea8da577341acb1d6->enter($__internal_b5d9bd8683009cbc22377cc6c2c3a89a8f653ed86c70867ea8da577341acb1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_b5d9bd8683009cbc22377cc6c2c3a89a8f653ed86c70867ea8da577341acb1d6->leave($__internal_b5d9bd8683009cbc22377cc6c2c3a89a8f653ed86c70867ea8da577341acb1d6_prof);

        
        $__internal_d5af31a2e9b49899e181aa8c9afb7d34a44624969287580515f07ec6553d76ca->leave($__internal_d5af31a2e9b49899e181aa8c9afb7d34a44624969287580515f07ec6553d76ca_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_1560ae87265863c995f90e80b2fe1dc1e2ea27dd1b48a754a049817a8e944bbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1560ae87265863c995f90e80b2fe1dc1e2ea27dd1b48a754a049817a8e944bbc->enter($__internal_1560ae87265863c995f90e80b2fe1dc1e2ea27dd1b48a754a049817a8e944bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_ea1ec2691bba3521b5ab611ba402ae3b9595149dda7a0ddfac4b11f0d50c027b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1ec2691bba3521b5ab611ba402ae3b9595149dda7a0ddfac4b11f0d50c027b->enter($__internal_ea1ec2691bba3521b5ab611ba402ae3b9595149dda7a0ddfac4b11f0d50c027b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_ea1ec2691bba3521b5ab611ba402ae3b9595149dda7a0ddfac4b11f0d50c027b->leave($__internal_ea1ec2691bba3521b5ab611ba402ae3b9595149dda7a0ddfac4b11f0d50c027b_prof);

        
        $__internal_1560ae87265863c995f90e80b2fe1dc1e2ea27dd1b48a754a049817a8e944bbc->leave($__internal_1560ae87265863c995f90e80b2fe1dc1e2ea27dd1b48a754a049817a8e944bbc_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_4d875f9894d51b3a7059662f747990202664d532d94a3b1540dd8019aa5b7298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d875f9894d51b3a7059662f747990202664d532d94a3b1540dd8019aa5b7298->enter($__internal_4d875f9894d51b3a7059662f747990202664d532d94a3b1540dd8019aa5b7298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_4edb42ebfedf973a474526430be40d90b8a24baab1455f06b07c5bd8ba6a76d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4edb42ebfedf973a474526430be40d90b8a24baab1455f06b07c5bd8ba6a76d6->enter($__internal_4edb42ebfedf973a474526430be40d90b8a24baab1455f06b07c5bd8ba6a76d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_4edb42ebfedf973a474526430be40d90b8a24baab1455f06b07c5bd8ba6a76d6->leave($__internal_4edb42ebfedf973a474526430be40d90b8a24baab1455f06b07c5bd8ba6a76d6_prof);

        
        $__internal_4d875f9894d51b3a7059662f747990202664d532d94a3b1540dd8019aa5b7298->leave($__internal_4d875f9894d51b3a7059662f747990202664d532d94a3b1540dd8019aa5b7298_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_757e3b9be9247dd016a60d97063c586ba0bd45d0e44b677696cfc0e803c200d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_757e3b9be9247dd016a60d97063c586ba0bd45d0e44b677696cfc0e803c200d8->enter($__internal_757e3b9be9247dd016a60d97063c586ba0bd45d0e44b677696cfc0e803c200d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_6731b9231a203487290f9f4122be50f8a29d5f4bf3897755b405dcd42ad01cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6731b9231a203487290f9f4122be50f8a29d5f4bf3897755b405dcd42ad01cd7->enter($__internal_6731b9231a203487290f9f4122be50f8a29d5f4bf3897755b405dcd42ad01cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6731b9231a203487290f9f4122be50f8a29d5f4bf3897755b405dcd42ad01cd7->leave($__internal_6731b9231a203487290f9f4122be50f8a29d5f4bf3897755b405dcd42ad01cd7_prof);

        
        $__internal_757e3b9be9247dd016a60d97063c586ba0bd45d0e44b677696cfc0e803c200d8->leave($__internal_757e3b9be9247dd016a60d97063c586ba0bd45d0e44b677696cfc0e803c200d8_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_5cc9079bdd132efd2359dfc8bcdb82b0986359b26d2ec35d57a4e478aca779d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc9079bdd132efd2359dfc8bcdb82b0986359b26d2ec35d57a4e478aca779d2->enter($__internal_5cc9079bdd132efd2359dfc8bcdb82b0986359b26d2ec35d57a4e478aca779d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_f2d210e53837f2aeb4870588002acb1009a2aa95f42012c52bd74235f1fceb74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d210e53837f2aeb4870588002acb1009a2aa95f42012c52bd74235f1fceb74->enter($__internal_f2d210e53837f2aeb4870588002acb1009a2aa95f42012c52bd74235f1fceb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_f2d210e53837f2aeb4870588002acb1009a2aa95f42012c52bd74235f1fceb74->leave($__internal_f2d210e53837f2aeb4870588002acb1009a2aa95f42012c52bd74235f1fceb74_prof);

        
        $__internal_5cc9079bdd132efd2359dfc8bcdb82b0986359b26d2ec35d57a4e478aca779d2->leave($__internal_5cc9079bdd132efd2359dfc8bcdb82b0986359b26d2ec35d57a4e478aca779d2_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e9d9ece22dd5a1312711eb484cbad599b44718097d36fd377e718823741f2684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9d9ece22dd5a1312711eb484cbad599b44718097d36fd377e718823741f2684->enter($__internal_e9d9ece22dd5a1312711eb484cbad599b44718097d36fd377e718823741f2684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_27e9e7320270ad67334d50eee14e066b1744fe8b10448e25ef3e850235381034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e9e7320270ad67334d50eee14e066b1744fe8b10448e25ef3e850235381034->enter($__internal_27e9e7320270ad67334d50eee14e066b1744fe8b10448e25ef3e850235381034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_27e9e7320270ad67334d50eee14e066b1744fe8b10448e25ef3e850235381034->leave($__internal_27e9e7320270ad67334d50eee14e066b1744fe8b10448e25ef3e850235381034_prof);

        
        $__internal_e9d9ece22dd5a1312711eb484cbad599b44718097d36fd377e718823741f2684->leave($__internal_e9d9ece22dd5a1312711eb484cbad599b44718097d36fd377e718823741f2684_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_569585f3129f014c70a13cebd7971e66ec1afbab7f96684a4dd57aaffd2883a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_569585f3129f014c70a13cebd7971e66ec1afbab7f96684a4dd57aaffd2883a5->enter($__internal_569585f3129f014c70a13cebd7971e66ec1afbab7f96684a4dd57aaffd2883a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_2e26968af5f450f6ec967463b8a5e9fbeaa2272a3022e013481b96ab7b0947a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e26968af5f450f6ec967463b8a5e9fbeaa2272a3022e013481b96ab7b0947a2->enter($__internal_2e26968af5f450f6ec967463b8a5e9fbeaa2272a3022e013481b96ab7b0947a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_2e26968af5f450f6ec967463b8a5e9fbeaa2272a3022e013481b96ab7b0947a2->leave($__internal_2e26968af5f450f6ec967463b8a5e9fbeaa2272a3022e013481b96ab7b0947a2_prof);

        
        $__internal_569585f3129f014c70a13cebd7971e66ec1afbab7f96684a4dd57aaffd2883a5->leave($__internal_569585f3129f014c70a13cebd7971e66ec1afbab7f96684a4dd57aaffd2883a5_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_4b6f3ed05694507df89249cfca4d6f9e702be0b0c7e953af6ccd64aacf50311f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b6f3ed05694507df89249cfca4d6f9e702be0b0c7e953af6ccd64aacf50311f->enter($__internal_4b6f3ed05694507df89249cfca4d6f9e702be0b0c7e953af6ccd64aacf50311f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_a59afe9e445ad27b7a883f6894dab07ebd75508146b2233eedae05ac4911b5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59afe9e445ad27b7a883f6894dab07ebd75508146b2233eedae05ac4911b5c5->enter($__internal_a59afe9e445ad27b7a883f6894dab07ebd75508146b2233eedae05ac4911b5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a59afe9e445ad27b7a883f6894dab07ebd75508146b2233eedae05ac4911b5c5->leave($__internal_a59afe9e445ad27b7a883f6894dab07ebd75508146b2233eedae05ac4911b5c5_prof);

        
        $__internal_4b6f3ed05694507df89249cfca4d6f9e702be0b0c7e953af6ccd64aacf50311f->leave($__internal_4b6f3ed05694507df89249cfca4d6f9e702be0b0c7e953af6ccd64aacf50311f_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_f60c512b54f918c4df43201fb83f13114785b596395bb4e5616e37b679e5d90d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f60c512b54f918c4df43201fb83f13114785b596395bb4e5616e37b679e5d90d->enter($__internal_f60c512b54f918c4df43201fb83f13114785b596395bb4e5616e37b679e5d90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_0a991d0f5c69917ca3e6e7c170079e6d92bc5d5a5908edde9e9f0a33a5a146b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a991d0f5c69917ca3e6e7c170079e6d92bc5d5a5908edde9e9f0a33a5a146b5->enter($__internal_0a991d0f5c69917ca3e6e7c170079e6d92bc5d5a5908edde9e9f0a33a5a146b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0a991d0f5c69917ca3e6e7c170079e6d92bc5d5a5908edde9e9f0a33a5a146b5->leave($__internal_0a991d0f5c69917ca3e6e7c170079e6d92bc5d5a5908edde9e9f0a33a5a146b5_prof);

        
        $__internal_f60c512b54f918c4df43201fb83f13114785b596395bb4e5616e37b679e5d90d->leave($__internal_f60c512b54f918c4df43201fb83f13114785b596395bb4e5616e37b679e5d90d_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_b1cff6d400a50cb2439afb78af57820fc1472af3631a1455baf86e0e4e8f5acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1cff6d400a50cb2439afb78af57820fc1472af3631a1455baf86e0e4e8f5acd->enter($__internal_b1cff6d400a50cb2439afb78af57820fc1472af3631a1455baf86e0e4e8f5acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_908af3402f322a0d4e2c3d71881609baf08722f24e238811c29dc330691007b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908af3402f322a0d4e2c3d71881609baf08722f24e238811c29dc330691007b3->enter($__internal_908af3402f322a0d4e2c3d71881609baf08722f24e238811c29dc330691007b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_908af3402f322a0d4e2c3d71881609baf08722f24e238811c29dc330691007b3->leave($__internal_908af3402f322a0d4e2c3d71881609baf08722f24e238811c29dc330691007b3_prof);

        
        $__internal_b1cff6d400a50cb2439afb78af57820fc1472af3631a1455baf86e0e4e8f5acd->leave($__internal_b1cff6d400a50cb2439afb78af57820fc1472af3631a1455baf86e0e4e8f5acd_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_6e657028bf2d496aaac231c48ef954e5dcd0aa4b77d75ed693c2d3b8ea00b3d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e657028bf2d496aaac231c48ef954e5dcd0aa4b77d75ed693c2d3b8ea00b3d9->enter($__internal_6e657028bf2d496aaac231c48ef954e5dcd0aa4b77d75ed693c2d3b8ea00b3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_7560b890604b4bc68ad1f46fe6a82792e5f20fff0a6cdf93ee94b4499d6dee03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7560b890604b4bc68ad1f46fe6a82792e5f20fff0a6cdf93ee94b4499d6dee03->enter($__internal_7560b890604b4bc68ad1f46fe6a82792e5f20fff0a6cdf93ee94b4499d6dee03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7560b890604b4bc68ad1f46fe6a82792e5f20fff0a6cdf93ee94b4499d6dee03->leave($__internal_7560b890604b4bc68ad1f46fe6a82792e5f20fff0a6cdf93ee94b4499d6dee03_prof);

        
        $__internal_6e657028bf2d496aaac231c48ef954e5dcd0aa4b77d75ed693c2d3b8ea00b3d9->leave($__internal_6e657028bf2d496aaac231c48ef954e5dcd0aa4b77d75ed693c2d3b8ea00b3d9_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d36e1f95e531ac3b9a2a7040d596d177f8ab58c885d800a5a7b9915012ab3ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d36e1f95e531ac3b9a2a7040d596d177f8ab58c885d800a5a7b9915012ab3ddb->enter($__internal_d36e1f95e531ac3b9a2a7040d596d177f8ab58c885d800a5a7b9915012ab3ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_750623fffa143f37521e5944c2589c82f85fee825ffb27136b9ce57917bd44ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750623fffa143f37521e5944c2589c82f85fee825ffb27136b9ce57917bd44ad->enter($__internal_750623fffa143f37521e5944c2589c82f85fee825ffb27136b9ce57917bd44ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_750623fffa143f37521e5944c2589c82f85fee825ffb27136b9ce57917bd44ad->leave($__internal_750623fffa143f37521e5944c2589c82f85fee825ffb27136b9ce57917bd44ad_prof);

        
        $__internal_d36e1f95e531ac3b9a2a7040d596d177f8ab58c885d800a5a7b9915012ab3ddb->leave($__internal_d36e1f95e531ac3b9a2a7040d596d177f8ab58c885d800a5a7b9915012ab3ddb_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_ab07ed8421d5f6f212d25f4ab4233498a6a86548cc7621deca05c5d6510755c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab07ed8421d5f6f212d25f4ab4233498a6a86548cc7621deca05c5d6510755c4->enter($__internal_ab07ed8421d5f6f212d25f4ab4233498a6a86548cc7621deca05c5d6510755c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_c5715428aeb7a6706c416b60830640551613db7c1c1e8ae95dee4033031d7330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5715428aeb7a6706c416b60830640551613db7c1c1e8ae95dee4033031d7330->enter($__internal_c5715428aeb7a6706c416b60830640551613db7c1c1e8ae95dee4033031d7330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_c5715428aeb7a6706c416b60830640551613db7c1c1e8ae95dee4033031d7330->leave($__internal_c5715428aeb7a6706c416b60830640551613db7c1c1e8ae95dee4033031d7330_prof);

        
        $__internal_ab07ed8421d5f6f212d25f4ab4233498a6a86548cc7621deca05c5d6510755c4->leave($__internal_ab07ed8421d5f6f212d25f4ab4233498a6a86548cc7621deca05c5d6510755c4_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_33e499bddca4af3d9963fab8b7c761fabfca3e7c89a625d6962ceeb2a33abd81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33e499bddca4af3d9963fab8b7c761fabfca3e7c89a625d6962ceeb2a33abd81->enter($__internal_33e499bddca4af3d9963fab8b7c761fabfca3e7c89a625d6962ceeb2a33abd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_79ba3b729942980c89e31e24d86cdfeb5245643f8b57f0876305ccbc98050c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ba3b729942980c89e31e24d86cdfeb5245643f8b57f0876305ccbc98050c7f->enter($__internal_79ba3b729942980c89e31e24d86cdfeb5245643f8b57f0876305ccbc98050c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_79ba3b729942980c89e31e24d86cdfeb5245643f8b57f0876305ccbc98050c7f->leave($__internal_79ba3b729942980c89e31e24d86cdfeb5245643f8b57f0876305ccbc98050c7f_prof);

        
        $__internal_33e499bddca4af3d9963fab8b7c761fabfca3e7c89a625d6962ceeb2a33abd81->leave($__internal_33e499bddca4af3d9963fab8b7c761fabfca3e7c89a625d6962ceeb2a33abd81_prof);

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
