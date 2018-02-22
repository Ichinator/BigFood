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
        $__internal_1301af1a346512e4b9acfa0f6cd6208cf8cf299067b01dc200289c2fe8d97584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1301af1a346512e4b9acfa0f6cd6208cf8cf299067b01dc200289c2fe8d97584->enter($__internal_1301af1a346512e4b9acfa0f6cd6208cf8cf299067b01dc200289c2fe8d97584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_5733053acf4b32f3ef73d5d893ba22c4bea70a6c88d474a87df1fd1c702007c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5733053acf4b32f3ef73d5d893ba22c4bea70a6c88d474a87df1fd1c702007c2->enter($__internal_5733053acf4b32f3ef73d5d893ba22c4bea70a6c88d474a87df1fd1c702007c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_1301af1a346512e4b9acfa0f6cd6208cf8cf299067b01dc200289c2fe8d97584->leave($__internal_1301af1a346512e4b9acfa0f6cd6208cf8cf299067b01dc200289c2fe8d97584_prof);

        
        $__internal_5733053acf4b32f3ef73d5d893ba22c4bea70a6c88d474a87df1fd1c702007c2->leave($__internal_5733053acf4b32f3ef73d5d893ba22c4bea70a6c88d474a87df1fd1c702007c2_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c7ce45809cd06822b07ae717112f189683d9ee43d52c5120cce417ae1889f2df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7ce45809cd06822b07ae717112f189683d9ee43d52c5120cce417ae1889f2df->enter($__internal_c7ce45809cd06822b07ae717112f189683d9ee43d52c5120cce417ae1889f2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_33bee264c3c8dda04fe27412547881e9055dac18f44ea2262c402f14223b8580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33bee264c3c8dda04fe27412547881e9055dac18f44ea2262c402f14223b8580->enter($__internal_33bee264c3c8dda04fe27412547881e9055dac18f44ea2262c402f14223b8580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_33bee264c3c8dda04fe27412547881e9055dac18f44ea2262c402f14223b8580->leave($__internal_33bee264c3c8dda04fe27412547881e9055dac18f44ea2262c402f14223b8580_prof);

        
        $__internal_c7ce45809cd06822b07ae717112f189683d9ee43d52c5120cce417ae1889f2df->leave($__internal_c7ce45809cd06822b07ae717112f189683d9ee43d52c5120cce417ae1889f2df_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_7ea6f98a270a638d6b5c56ac0ed398d8260eb05ef9704f73ca3f352fd0de3323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea6f98a270a638d6b5c56ac0ed398d8260eb05ef9704f73ca3f352fd0de3323->enter($__internal_7ea6f98a270a638d6b5c56ac0ed398d8260eb05ef9704f73ca3f352fd0de3323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_cd0e054034c6ff0e643666961f8c846b524b2eabcacdc1b2076e1bbfadec0013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0e054034c6ff0e643666961f8c846b524b2eabcacdc1b2076e1bbfadec0013->enter($__internal_cd0e054034c6ff0e643666961f8c846b524b2eabcacdc1b2076e1bbfadec0013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_cd0e054034c6ff0e643666961f8c846b524b2eabcacdc1b2076e1bbfadec0013->leave($__internal_cd0e054034c6ff0e643666961f8c846b524b2eabcacdc1b2076e1bbfadec0013_prof);

        
        $__internal_7ea6f98a270a638d6b5c56ac0ed398d8260eb05ef9704f73ca3f352fd0de3323->leave($__internal_7ea6f98a270a638d6b5c56ac0ed398d8260eb05ef9704f73ca3f352fd0de3323_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_a7eac7d110a1785276fe4398c094f8af587973325dbe9f8293a64cde383183df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7eac7d110a1785276fe4398c094f8af587973325dbe9f8293a64cde383183df->enter($__internal_a7eac7d110a1785276fe4398c094f8af587973325dbe9f8293a64cde383183df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_452a1e60e570be375442dc9f614425c7578b787ed2a039f4033e3350fa85530c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452a1e60e570be375442dc9f614425c7578b787ed2a039f4033e3350fa85530c->enter($__internal_452a1e60e570be375442dc9f614425c7578b787ed2a039f4033e3350fa85530c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_452a1e60e570be375442dc9f614425c7578b787ed2a039f4033e3350fa85530c->leave($__internal_452a1e60e570be375442dc9f614425c7578b787ed2a039f4033e3350fa85530c_prof);

        
        $__internal_a7eac7d110a1785276fe4398c094f8af587973325dbe9f8293a64cde383183df->leave($__internal_a7eac7d110a1785276fe4398c094f8af587973325dbe9f8293a64cde383183df_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_ade96bc0eb8390af5f67e11acebfa933204807e15982b123eb214c434ea810bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade96bc0eb8390af5f67e11acebfa933204807e15982b123eb214c434ea810bb->enter($__internal_ade96bc0eb8390af5f67e11acebfa933204807e15982b123eb214c434ea810bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_33d91e496f7798a2c9981e12cc3de7651a657d8674119dbb5dfd1486e14299f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d91e496f7798a2c9981e12cc3de7651a657d8674119dbb5dfd1486e14299f5->enter($__internal_33d91e496f7798a2c9981e12cc3de7651a657d8674119dbb5dfd1486e14299f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_bc29cdbeb9c135ca2e01fcea8e604956b657b49acd089531d578c27311d2167e = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_6744b0c529a4c4215e6f321140c2ff70b4b6b46056f01eff7ebea461707b8efd = "{{") && ('' === $__internal_6744b0c529a4c4215e6f321140c2ff70b4b6b46056f01eff7ebea461707b8efd || 0 === strpos($__internal_bc29cdbeb9c135ca2e01fcea8e604956b657b49acd089531d578c27311d2167e, $__internal_6744b0c529a4c4215e6f321140c2ff70b4b6b46056f01eff7ebea461707b8efd)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_cbd01ffde896f809eefee249a87df40beb997bf89269a85c3e037df1cc6a4961 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_3f3add79924e1b9e1989e86dfa1cab4ee5084774ebdcf61b8e38e86beba3721b = "}}") && ('' === $__internal_3f3add79924e1b9e1989e86dfa1cab4ee5084774ebdcf61b8e38e86beba3721b || $__internal_3f3add79924e1b9e1989e86dfa1cab4ee5084774ebdcf61b8e38e86beba3721b === substr($__internal_cbd01ffde896f809eefee249a87df40beb997bf89269a85c3e037df1cc6a4961, -strlen($__internal_3f3add79924e1b9e1989e86dfa1cab4ee5084774ebdcf61b8e38e86beba3721b))));
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
        
        $__internal_33d91e496f7798a2c9981e12cc3de7651a657d8674119dbb5dfd1486e14299f5->leave($__internal_33d91e496f7798a2c9981e12cc3de7651a657d8674119dbb5dfd1486e14299f5_prof);

        
        $__internal_ade96bc0eb8390af5f67e11acebfa933204807e15982b123eb214c434ea810bb->leave($__internal_ade96bc0eb8390af5f67e11acebfa933204807e15982b123eb214c434ea810bb_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_e216615cd443e845fe312617fb8e1dd9b0d73e7ec78d80eddf9c6680b6867293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e216615cd443e845fe312617fb8e1dd9b0d73e7ec78d80eddf9c6680b6867293->enter($__internal_e216615cd443e845fe312617fb8e1dd9b0d73e7ec78d80eddf9c6680b6867293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_0f0e885f1e967c69627ddac33bc92cf33de46705dc3b6cf98bae7bd6ba0e05ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f0e885f1e967c69627ddac33bc92cf33de46705dc3b6cf98bae7bd6ba0e05ca->enter($__internal_0f0e885f1e967c69627ddac33bc92cf33de46705dc3b6cf98bae7bd6ba0e05ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_0f0e885f1e967c69627ddac33bc92cf33de46705dc3b6cf98bae7bd6ba0e05ca->leave($__internal_0f0e885f1e967c69627ddac33bc92cf33de46705dc3b6cf98bae7bd6ba0e05ca_prof);

        
        $__internal_e216615cd443e845fe312617fb8e1dd9b0d73e7ec78d80eddf9c6680b6867293->leave($__internal_e216615cd443e845fe312617fb8e1dd9b0d73e7ec78d80eddf9c6680b6867293_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_2cea47e3975bf99e4c3e8d1e17e04d860cbcc2c47f141c74c1b5d5945f6fbeac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cea47e3975bf99e4c3e8d1e17e04d860cbcc2c47f141c74c1b5d5945f6fbeac->enter($__internal_2cea47e3975bf99e4c3e8d1e17e04d860cbcc2c47f141c74c1b5d5945f6fbeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_17642db345972b05367c1cd3ac9df4deedf9cecfc6a9109c4e0b5a08ccacaae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17642db345972b05367c1cd3ac9df4deedf9cecfc6a9109c4e0b5a08ccacaae4->enter($__internal_17642db345972b05367c1cd3ac9df4deedf9cecfc6a9109c4e0b5a08ccacaae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_17642db345972b05367c1cd3ac9df4deedf9cecfc6a9109c4e0b5a08ccacaae4->leave($__internal_17642db345972b05367c1cd3ac9df4deedf9cecfc6a9109c4e0b5a08ccacaae4_prof);

        
        $__internal_2cea47e3975bf99e4c3e8d1e17e04d860cbcc2c47f141c74c1b5d5945f6fbeac->leave($__internal_2cea47e3975bf99e4c3e8d1e17e04d860cbcc2c47f141c74c1b5d5945f6fbeac_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_5880f0abd8bd9f7d5d58f03414a7983aea29358657a9681d3e8825cb57ffbf2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5880f0abd8bd9f7d5d58f03414a7983aea29358657a9681d3e8825cb57ffbf2d->enter($__internal_5880f0abd8bd9f7d5d58f03414a7983aea29358657a9681d3e8825cb57ffbf2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_4769f7c628d95b61aa8a7c7e667d3f97edd2a2d3c7fb2a897aa8012d6fbd7d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4769f7c628d95b61aa8a7c7e667d3f97edd2a2d3c7fb2a897aa8012d6fbd7d6d->enter($__internal_4769f7c628d95b61aa8a7c7e667d3f97edd2a2d3c7fb2a897aa8012d6fbd7d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_4769f7c628d95b61aa8a7c7e667d3f97edd2a2d3c7fb2a897aa8012d6fbd7d6d->leave($__internal_4769f7c628d95b61aa8a7c7e667d3f97edd2a2d3c7fb2a897aa8012d6fbd7d6d_prof);

        
        $__internal_5880f0abd8bd9f7d5d58f03414a7983aea29358657a9681d3e8825cb57ffbf2d->leave($__internal_5880f0abd8bd9f7d5d58f03414a7983aea29358657a9681d3e8825cb57ffbf2d_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_0772e972bcbbae75cda92d74c37cb4fdf7e910ed659f2ab1f41afc3e8136189c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0772e972bcbbae75cda92d74c37cb4fdf7e910ed659f2ab1f41afc3e8136189c->enter($__internal_0772e972bcbbae75cda92d74c37cb4fdf7e910ed659f2ab1f41afc3e8136189c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_8bfe1dd9689aebab03bf3e71774bd4d6ce6e2432844489db8bb512c88ee1e9aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bfe1dd9689aebab03bf3e71774bd4d6ce6e2432844489db8bb512c88ee1e9aa->enter($__internal_8bfe1dd9689aebab03bf3e71774bd4d6ce6e2432844489db8bb512c88ee1e9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_8bfe1dd9689aebab03bf3e71774bd4d6ce6e2432844489db8bb512c88ee1e9aa->leave($__internal_8bfe1dd9689aebab03bf3e71774bd4d6ce6e2432844489db8bb512c88ee1e9aa_prof);

        
        $__internal_0772e972bcbbae75cda92d74c37cb4fdf7e910ed659f2ab1f41afc3e8136189c->leave($__internal_0772e972bcbbae75cda92d74c37cb4fdf7e910ed659f2ab1f41afc3e8136189c_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_f0b1f4b4b3ff954df06960a14e869cd2e61b205861765de4c3d8e4db81756393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0b1f4b4b3ff954df06960a14e869cd2e61b205861765de4c3d8e4db81756393->enter($__internal_f0b1f4b4b3ff954df06960a14e869cd2e61b205861765de4c3d8e4db81756393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_a791f4fb3492869980ab22913614f96fece713957e67245be0506c8cf6c15340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a791f4fb3492869980ab22913614f96fece713957e67245be0506c8cf6c15340->enter($__internal_a791f4fb3492869980ab22913614f96fece713957e67245be0506c8cf6c15340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_a791f4fb3492869980ab22913614f96fece713957e67245be0506c8cf6c15340->leave($__internal_a791f4fb3492869980ab22913614f96fece713957e67245be0506c8cf6c15340_prof);

        
        $__internal_f0b1f4b4b3ff954df06960a14e869cd2e61b205861765de4c3d8e4db81756393->leave($__internal_f0b1f4b4b3ff954df06960a14e869cd2e61b205861765de4c3d8e4db81756393_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_557ce43aac54a44dbfd8e9ce79dfd90eb3224c0a78aa09d59cf74664210b56d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_557ce43aac54a44dbfd8e9ce79dfd90eb3224c0a78aa09d59cf74664210b56d1->enter($__internal_557ce43aac54a44dbfd8e9ce79dfd90eb3224c0a78aa09d59cf74664210b56d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_c402c914e04f0f7e393e7a07148ab5439489783d594145e2655c7905a8c25ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c402c914e04f0f7e393e7a07148ab5439489783d594145e2655c7905a8c25ac7->enter($__internal_c402c914e04f0f7e393e7a07148ab5439489783d594145e2655c7905a8c25ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_c402c914e04f0f7e393e7a07148ab5439489783d594145e2655c7905a8c25ac7->leave($__internal_c402c914e04f0f7e393e7a07148ab5439489783d594145e2655c7905a8c25ac7_prof);

        
        $__internal_557ce43aac54a44dbfd8e9ce79dfd90eb3224c0a78aa09d59cf74664210b56d1->leave($__internal_557ce43aac54a44dbfd8e9ce79dfd90eb3224c0a78aa09d59cf74664210b56d1_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_35cfcf60d1872b94e369434343fda2586c6958ef14eb23e959cf2e1ea20de834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35cfcf60d1872b94e369434343fda2586c6958ef14eb23e959cf2e1ea20de834->enter($__internal_35cfcf60d1872b94e369434343fda2586c6958ef14eb23e959cf2e1ea20de834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_80eeb8c4b777453ee986a0f81ed374504581baf6b0c91be7f485dfac472ff64b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80eeb8c4b777453ee986a0f81ed374504581baf6b0c91be7f485dfac472ff64b->enter($__internal_80eeb8c4b777453ee986a0f81ed374504581baf6b0c91be7f485dfac472ff64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_80eeb8c4b777453ee986a0f81ed374504581baf6b0c91be7f485dfac472ff64b->leave($__internal_80eeb8c4b777453ee986a0f81ed374504581baf6b0c91be7f485dfac472ff64b_prof);

        
        $__internal_35cfcf60d1872b94e369434343fda2586c6958ef14eb23e959cf2e1ea20de834->leave($__internal_35cfcf60d1872b94e369434343fda2586c6958ef14eb23e959cf2e1ea20de834_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_75ff6301dd0b40a11a504d9e445fef73df11f4920a8b67a0101dd254735a0449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75ff6301dd0b40a11a504d9e445fef73df11f4920a8b67a0101dd254735a0449->enter($__internal_75ff6301dd0b40a11a504d9e445fef73df11f4920a8b67a0101dd254735a0449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_05a5f4b24a786d7983844b3db6c2d5c18244863f1234bf6bc813a6cd2f509628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a5f4b24a786d7983844b3db6c2d5c18244863f1234bf6bc813a6cd2f509628->enter($__internal_05a5f4b24a786d7983844b3db6c2d5c18244863f1234bf6bc813a6cd2f509628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_05a5f4b24a786d7983844b3db6c2d5c18244863f1234bf6bc813a6cd2f509628->leave($__internal_05a5f4b24a786d7983844b3db6c2d5c18244863f1234bf6bc813a6cd2f509628_prof);

        
        $__internal_75ff6301dd0b40a11a504d9e445fef73df11f4920a8b67a0101dd254735a0449->leave($__internal_75ff6301dd0b40a11a504d9e445fef73df11f4920a8b67a0101dd254735a0449_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_9c71cfc5fbdf9d52c540ff04a9c112a63a0d961df68279fd91169aa070b98ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c71cfc5fbdf9d52c540ff04a9c112a63a0d961df68279fd91169aa070b98ee3->enter($__internal_9c71cfc5fbdf9d52c540ff04a9c112a63a0d961df68279fd91169aa070b98ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_43fc7ada8b8840bb5690e65c51242f98582d30880c3a29cc064fe5a1bc0260f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43fc7ada8b8840bb5690e65c51242f98582d30880c3a29cc064fe5a1bc0260f3->enter($__internal_43fc7ada8b8840bb5690e65c51242f98582d30880c3a29cc064fe5a1bc0260f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_43fc7ada8b8840bb5690e65c51242f98582d30880c3a29cc064fe5a1bc0260f3->leave($__internal_43fc7ada8b8840bb5690e65c51242f98582d30880c3a29cc064fe5a1bc0260f3_prof);

        
        $__internal_9c71cfc5fbdf9d52c540ff04a9c112a63a0d961df68279fd91169aa070b98ee3->leave($__internal_9c71cfc5fbdf9d52c540ff04a9c112a63a0d961df68279fd91169aa070b98ee3_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_11a42cbf5f7a563349876d46e2fca88adba8c0f52e99ea034acf5c7ad57d430a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11a42cbf5f7a563349876d46e2fca88adba8c0f52e99ea034acf5c7ad57d430a->enter($__internal_11a42cbf5f7a563349876d46e2fca88adba8c0f52e99ea034acf5c7ad57d430a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ea26d4aa16cda39998dba34187e688c9afb2efe4ddb7a4c8680ced74c889f31c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea26d4aa16cda39998dba34187e688c9afb2efe4ddb7a4c8680ced74c889f31c->enter($__internal_ea26d4aa16cda39998dba34187e688c9afb2efe4ddb7a4c8680ced74c889f31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_ea26d4aa16cda39998dba34187e688c9afb2efe4ddb7a4c8680ced74c889f31c->leave($__internal_ea26d4aa16cda39998dba34187e688c9afb2efe4ddb7a4c8680ced74c889f31c_prof);

        
        $__internal_11a42cbf5f7a563349876d46e2fca88adba8c0f52e99ea034acf5c7ad57d430a->leave($__internal_11a42cbf5f7a563349876d46e2fca88adba8c0f52e99ea034acf5c7ad57d430a_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_2ae9aeb3c6d84b719b75b0df98b840af4bcc99fcc6487aad27e13cb3f4ad3d28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae9aeb3c6d84b719b75b0df98b840af4bcc99fcc6487aad27e13cb3f4ad3d28->enter($__internal_2ae9aeb3c6d84b719b75b0df98b840af4bcc99fcc6487aad27e13cb3f4ad3d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_0ca628c2ee99d38a069257c3068503fae9ef29708e3ad6229fdc1fe44cf03fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca628c2ee99d38a069257c3068503fae9ef29708e3ad6229fdc1fe44cf03fec->enter($__internal_0ca628c2ee99d38a069257c3068503fae9ef29708e3ad6229fdc1fe44cf03fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_0ca628c2ee99d38a069257c3068503fae9ef29708e3ad6229fdc1fe44cf03fec->leave($__internal_0ca628c2ee99d38a069257c3068503fae9ef29708e3ad6229fdc1fe44cf03fec_prof);

        
        $__internal_2ae9aeb3c6d84b719b75b0df98b840af4bcc99fcc6487aad27e13cb3f4ad3d28->leave($__internal_2ae9aeb3c6d84b719b75b0df98b840af4bcc99fcc6487aad27e13cb3f4ad3d28_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_85c379284e37c8fed0c107d0475002628865307cbbbf51733cb2b8b49f66440a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c379284e37c8fed0c107d0475002628865307cbbbf51733cb2b8b49f66440a->enter($__internal_85c379284e37c8fed0c107d0475002628865307cbbbf51733cb2b8b49f66440a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_ac3c8f015308e1938a3ae633f871b6c5f2f2c8a3315f112e67a44f1c29bec229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3c8f015308e1938a3ae633f871b6c5f2f2c8a3315f112e67a44f1c29bec229->enter($__internal_ac3c8f015308e1938a3ae633f871b6c5f2f2c8a3315f112e67a44f1c29bec229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ac3c8f015308e1938a3ae633f871b6c5f2f2c8a3315f112e67a44f1c29bec229->leave($__internal_ac3c8f015308e1938a3ae633f871b6c5f2f2c8a3315f112e67a44f1c29bec229_prof);

        
        $__internal_85c379284e37c8fed0c107d0475002628865307cbbbf51733cb2b8b49f66440a->leave($__internal_85c379284e37c8fed0c107d0475002628865307cbbbf51733cb2b8b49f66440a_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_4d0c25a9b7bf3d76e85d00b193ee2841c84d2c471e88c5484fcc442fd34820f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d0c25a9b7bf3d76e85d00b193ee2841c84d2c471e88c5484fcc442fd34820f0->enter($__internal_4d0c25a9b7bf3d76e85d00b193ee2841c84d2c471e88c5484fcc442fd34820f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_def603f0af1b30ca10c7743ee488e4367e01c5e3c08fff7040629fb900c4f8d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_def603f0af1b30ca10c7743ee488e4367e01c5e3c08fff7040629fb900c4f8d4->enter($__internal_def603f0af1b30ca10c7743ee488e4367e01c5e3c08fff7040629fb900c4f8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_def603f0af1b30ca10c7743ee488e4367e01c5e3c08fff7040629fb900c4f8d4->leave($__internal_def603f0af1b30ca10c7743ee488e4367e01c5e3c08fff7040629fb900c4f8d4_prof);

        
        $__internal_4d0c25a9b7bf3d76e85d00b193ee2841c84d2c471e88c5484fcc442fd34820f0->leave($__internal_4d0c25a9b7bf3d76e85d00b193ee2841c84d2c471e88c5484fcc442fd34820f0_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_84320e7a0b6618509eea49ee64ac4217fc05ca12cf075be57c036183e6fd1fa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84320e7a0b6618509eea49ee64ac4217fc05ca12cf075be57c036183e6fd1fa3->enter($__internal_84320e7a0b6618509eea49ee64ac4217fc05ca12cf075be57c036183e6fd1fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_502789fb81015c3543bb9a0007e711f7dd85a5bdace0cfa160365be14292f232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_502789fb81015c3543bb9a0007e711f7dd85a5bdace0cfa160365be14292f232->enter($__internal_502789fb81015c3543bb9a0007e711f7dd85a5bdace0cfa160365be14292f232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_502789fb81015c3543bb9a0007e711f7dd85a5bdace0cfa160365be14292f232->leave($__internal_502789fb81015c3543bb9a0007e711f7dd85a5bdace0cfa160365be14292f232_prof);

        
        $__internal_84320e7a0b6618509eea49ee64ac4217fc05ca12cf075be57c036183e6fd1fa3->leave($__internal_84320e7a0b6618509eea49ee64ac4217fc05ca12cf075be57c036183e6fd1fa3_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_616743c550e82e18bc4944ed49ac76ecb84983885d92f954d131422a1b92317c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_616743c550e82e18bc4944ed49ac76ecb84983885d92f954d131422a1b92317c->enter($__internal_616743c550e82e18bc4944ed49ac76ecb84983885d92f954d131422a1b92317c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_12639396e8aa29771e749840fdb637a22c20678682357c2ce11442ff16c3befe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12639396e8aa29771e749840fdb637a22c20678682357c2ce11442ff16c3befe->enter($__internal_12639396e8aa29771e749840fdb637a22c20678682357c2ce11442ff16c3befe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_12639396e8aa29771e749840fdb637a22c20678682357c2ce11442ff16c3befe->leave($__internal_12639396e8aa29771e749840fdb637a22c20678682357c2ce11442ff16c3befe_prof);

        
        $__internal_616743c550e82e18bc4944ed49ac76ecb84983885d92f954d131422a1b92317c->leave($__internal_616743c550e82e18bc4944ed49ac76ecb84983885d92f954d131422a1b92317c_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_95aeaf27a2664784df168882f8d85df90e8ac4179f2f2f588ae46ac5fddb1c56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95aeaf27a2664784df168882f8d85df90e8ac4179f2f2f588ae46ac5fddb1c56->enter($__internal_95aeaf27a2664784df168882f8d85df90e8ac4179f2f2f588ae46ac5fddb1c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_d007f4483f6c2098bc4ab91a90cda6817b7805e1ce5d86fbc7cafcc17c8152a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d007f4483f6c2098bc4ab91a90cda6817b7805e1ce5d86fbc7cafcc17c8152a5->enter($__internal_d007f4483f6c2098bc4ab91a90cda6817b7805e1ce5d86fbc7cafcc17c8152a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_d007f4483f6c2098bc4ab91a90cda6817b7805e1ce5d86fbc7cafcc17c8152a5->leave($__internal_d007f4483f6c2098bc4ab91a90cda6817b7805e1ce5d86fbc7cafcc17c8152a5_prof);

        
        $__internal_95aeaf27a2664784df168882f8d85df90e8ac4179f2f2f588ae46ac5fddb1c56->leave($__internal_95aeaf27a2664784df168882f8d85df90e8ac4179f2f2f588ae46ac5fddb1c56_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_3e1b2807bf96ed3df9ab9a8f27b0271fa9c8c07f4ded5c5eef7fc1713244295c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e1b2807bf96ed3df9ab9a8f27b0271fa9c8c07f4ded5c5eef7fc1713244295c->enter($__internal_3e1b2807bf96ed3df9ab9a8f27b0271fa9c8c07f4ded5c5eef7fc1713244295c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_7e7f9edf8e6a4f867e2e8e4c7532564ceec83eb11af945ec5c5a27281c217773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e7f9edf8e6a4f867e2e8e4c7532564ceec83eb11af945ec5c5a27281c217773->enter($__internal_7e7f9edf8e6a4f867e2e8e4c7532564ceec83eb11af945ec5c5a27281c217773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7e7f9edf8e6a4f867e2e8e4c7532564ceec83eb11af945ec5c5a27281c217773->leave($__internal_7e7f9edf8e6a4f867e2e8e4c7532564ceec83eb11af945ec5c5a27281c217773_prof);

        
        $__internal_3e1b2807bf96ed3df9ab9a8f27b0271fa9c8c07f4ded5c5eef7fc1713244295c->leave($__internal_3e1b2807bf96ed3df9ab9a8f27b0271fa9c8c07f4ded5c5eef7fc1713244295c_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_b5c33d21740ff8c32e6dd3b318b7e44a239c415bcc3ed9b0fac0db3f5750e2ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c33d21740ff8c32e6dd3b318b7e44a239c415bcc3ed9b0fac0db3f5750e2ca->enter($__internal_b5c33d21740ff8c32e6dd3b318b7e44a239c415bcc3ed9b0fac0db3f5750e2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_12c13419f632d5d28c71fd50c3bcd3e241997c69f65719bc84dd8e64ef64c4e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12c13419f632d5d28c71fd50c3bcd3e241997c69f65719bc84dd8e64ef64c4e2->enter($__internal_12c13419f632d5d28c71fd50c3bcd3e241997c69f65719bc84dd8e64ef64c4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_12c13419f632d5d28c71fd50c3bcd3e241997c69f65719bc84dd8e64ef64c4e2->leave($__internal_12c13419f632d5d28c71fd50c3bcd3e241997c69f65719bc84dd8e64ef64c4e2_prof);

        
        $__internal_b5c33d21740ff8c32e6dd3b318b7e44a239c415bcc3ed9b0fac0db3f5750e2ca->leave($__internal_b5c33d21740ff8c32e6dd3b318b7e44a239c415bcc3ed9b0fac0db3f5750e2ca_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_bd92efcf3fec25d13715e516790f1a41f087c7de0e8d06bc3e357b69f18343d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd92efcf3fec25d13715e516790f1a41f087c7de0e8d06bc3e357b69f18343d5->enter($__internal_bd92efcf3fec25d13715e516790f1a41f087c7de0e8d06bc3e357b69f18343d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_1793fddee3779b61c653eb3ace583461c66323c7d0ca90c8ed687850fc4c8995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1793fddee3779b61c653eb3ace583461c66323c7d0ca90c8ed687850fc4c8995->enter($__internal_1793fddee3779b61c653eb3ace583461c66323c7d0ca90c8ed687850fc4c8995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1793fddee3779b61c653eb3ace583461c66323c7d0ca90c8ed687850fc4c8995->leave($__internal_1793fddee3779b61c653eb3ace583461c66323c7d0ca90c8ed687850fc4c8995_prof);

        
        $__internal_bd92efcf3fec25d13715e516790f1a41f087c7de0e8d06bc3e357b69f18343d5->leave($__internal_bd92efcf3fec25d13715e516790f1a41f087c7de0e8d06bc3e357b69f18343d5_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_e4a83f6721fca01b45e52eab1c9414d8fa86749f6966b5aa1604b4a75de3e5f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a83f6721fca01b45e52eab1c9414d8fa86749f6966b5aa1604b4a75de3e5f6->enter($__internal_e4a83f6721fca01b45e52eab1c9414d8fa86749f6966b5aa1604b4a75de3e5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_b9957734d18b467c9d1db7db957ee7f1f35f7f27c252ea98459e5665c011090e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9957734d18b467c9d1db7db957ee7f1f35f7f27c252ea98459e5665c011090e->enter($__internal_b9957734d18b467c9d1db7db957ee7f1f35f7f27c252ea98459e5665c011090e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b9957734d18b467c9d1db7db957ee7f1f35f7f27c252ea98459e5665c011090e->leave($__internal_b9957734d18b467c9d1db7db957ee7f1f35f7f27c252ea98459e5665c011090e_prof);

        
        $__internal_e4a83f6721fca01b45e52eab1c9414d8fa86749f6966b5aa1604b4a75de3e5f6->leave($__internal_e4a83f6721fca01b45e52eab1c9414d8fa86749f6966b5aa1604b4a75de3e5f6_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_3e2512564c219d244c39c2e4f78ba1b305c28801ff0a0e60ce697e147577e7bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e2512564c219d244c39c2e4f78ba1b305c28801ff0a0e60ce697e147577e7bc->enter($__internal_3e2512564c219d244c39c2e4f78ba1b305c28801ff0a0e60ce697e147577e7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_b45912f4efb3237ee46a60801ddb2c7697908554d242a00168a00a806a6d03d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45912f4efb3237ee46a60801ddb2c7697908554d242a00168a00a806a6d03d8->enter($__internal_b45912f4efb3237ee46a60801ddb2c7697908554d242a00168a00a806a6d03d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_b45912f4efb3237ee46a60801ddb2c7697908554d242a00168a00a806a6d03d8->leave($__internal_b45912f4efb3237ee46a60801ddb2c7697908554d242a00168a00a806a6d03d8_prof);

        
        $__internal_3e2512564c219d244c39c2e4f78ba1b305c28801ff0a0e60ce697e147577e7bc->leave($__internal_3e2512564c219d244c39c2e4f78ba1b305c28801ff0a0e60ce697e147577e7bc_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_dea14c4d9c2e983664360ae2581b28ca9eb176bf08f8f66cea74e4b9fb9a5553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea14c4d9c2e983664360ae2581b28ca9eb176bf08f8f66cea74e4b9fb9a5553->enter($__internal_dea14c4d9c2e983664360ae2581b28ca9eb176bf08f8f66cea74e4b9fb9a5553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_1e362e820a1c2a9e4b8798f666be496213579d15b0985917f2ceef54c0dd151d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e362e820a1c2a9e4b8798f666be496213579d15b0985917f2ceef54c0dd151d->enter($__internal_1e362e820a1c2a9e4b8798f666be496213579d15b0985917f2ceef54c0dd151d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_1e362e820a1c2a9e4b8798f666be496213579d15b0985917f2ceef54c0dd151d->leave($__internal_1e362e820a1c2a9e4b8798f666be496213579d15b0985917f2ceef54c0dd151d_prof);

        
        $__internal_dea14c4d9c2e983664360ae2581b28ca9eb176bf08f8f66cea74e4b9fb9a5553->leave($__internal_dea14c4d9c2e983664360ae2581b28ca9eb176bf08f8f66cea74e4b9fb9a5553_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_c87617bda4e8e0a1782237535e96c3d7da846f3cc94ca9f20f7a32daebe6770b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c87617bda4e8e0a1782237535e96c3d7da846f3cc94ca9f20f7a32daebe6770b->enter($__internal_c87617bda4e8e0a1782237535e96c3d7da846f3cc94ca9f20f7a32daebe6770b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_d5293bfe44a5c356da58acb4a8e3c7a89c1fd23e633a6868024732daaccad149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5293bfe44a5c356da58acb4a8e3c7a89c1fd23e633a6868024732daaccad149->enter($__internal_d5293bfe44a5c356da58acb4a8e3c7a89c1fd23e633a6868024732daaccad149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_d5293bfe44a5c356da58acb4a8e3c7a89c1fd23e633a6868024732daaccad149->leave($__internal_d5293bfe44a5c356da58acb4a8e3c7a89c1fd23e633a6868024732daaccad149_prof);

        
        $__internal_c87617bda4e8e0a1782237535e96c3d7da846f3cc94ca9f20f7a32daebe6770b->leave($__internal_c87617bda4e8e0a1782237535e96c3d7da846f3cc94ca9f20f7a32daebe6770b_prof);

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
