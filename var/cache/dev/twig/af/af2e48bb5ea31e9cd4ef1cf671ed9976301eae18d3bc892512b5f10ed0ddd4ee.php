<?php

/* EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_3a1202e8b99d057f974530a5450c533a90490d23c081feab3f2a67bc74d8b1c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@EasyAdmin/form/bootstrap_3_layout.html.twig", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@EasyAdmin/form/bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7763d2e97198f719c4397aad2ee468d1cf29786d76ef2a36e5259fa92533ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7763d2e97198f719c4397aad2ee468d1cf29786d76ef2a36e5259fa92533ec6->enter($__internal_e7763d2e97198f719c4397aad2ee468d1cf29786d76ef2a36e5259fa92533ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

        $__internal_c3ec7049507e93c6c8c718c8847dfd0d30b739976c4f57af6683895beeaa52e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ec7049507e93c6c8c718c8847dfd0d30b739976c4f57af6683895beeaa52e9->enter($__internal_c3ec7049507e93c6c8c718c8847dfd0d30b739976c4f57af6683895beeaa52e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('radio_row', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('submit_row', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('reset_row', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_e7763d2e97198f719c4397aad2ee468d1cf29786d76ef2a36e5259fa92533ec6->leave($__internal_e7763d2e97198f719c4397aad2ee468d1cf29786d76ef2a36e5259fa92533ec6_prof);

        
        $__internal_c3ec7049507e93c6c8c718c8847dfd0d30b739976c4f57af6683895beeaa52e9->leave($__internal_c3ec7049507e93c6c8c718c8847dfd0d30b739976c4f57af6683895beeaa52e9_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_f3733c8a74eda41384c4f659b5cb0a1b37f237143a4e019580fe285ed48a1918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3733c8a74eda41384c4f659b5cb0a1b37f237143a4e019580fe285ed48a1918->enter($__internal_f3733c8a74eda41384c4f659b5cb0a1b37f237143a4e019580fe285ed48a1918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_d49625b095ecccf32b3a4d439a986a1fbe6b20d1dcecc95fc713f2efa4478a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49625b095ecccf32b3a4d439a986a1fbe6b20d1dcecc95fc713f2efa4478a9d->enter($__internal_d49625b095ecccf32b3a4d439a986a1fbe6b20d1dcecc95fc713f2efa4478a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_d49625b095ecccf32b3a4d439a986a1fbe6b20d1dcecc95fc713f2efa4478a9d->leave($__internal_d49625b095ecccf32b3a4d439a986a1fbe6b20d1dcecc95fc713f2efa4478a9d_prof);

        
        $__internal_f3733c8a74eda41384c4f659b5cb0a1b37f237143a4e019580fe285ed48a1918->leave($__internal_f3733c8a74eda41384c4f659b5cb0a1b37f237143a4e019580fe285ed48a1918_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_bd6ac5acca9c111a2d9711f4e853b7c0cb8338529002a402b1c876ab2c1dee70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd6ac5acca9c111a2d9711f4e853b7c0cb8338529002a402b1c876ab2c1dee70->enter($__internal_bd6ac5acca9c111a2d9711f4e853b7c0cb8338529002a402b1c876ab2c1dee70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d354331d25668cd95d9a3bd0ef22a67f93079e389e14c239ccca7c2a204284df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d354331d25668cd95d9a3bd0ef22a67f93079e389e14c239ccca7c2a204284df->enter($__internal_d354331d25668cd95d9a3bd0ef22a67f93079e389e14c239ccca7c2a204284df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d354331d25668cd95d9a3bd0ef22a67f93079e389e14c239ccca7c2a204284df->leave($__internal_d354331d25668cd95d9a3bd0ef22a67f93079e389e14c239ccca7c2a204284df_prof);

        
        $__internal_bd6ac5acca9c111a2d9711f4e853b7c0cb8338529002a402b1c876ab2c1dee70->leave($__internal_bd6ac5acca9c111a2d9711f4e853b7c0cb8338529002a402b1c876ab2c1dee70_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_404e17b827d36eb7c6db71ef0daa38bb27d4a871aa87307166cf186115cca532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_404e17b827d36eb7c6db71ef0daa38bb27d4a871aa87307166cf186115cca532->enter($__internal_404e17b827d36eb7c6db71ef0daa38bb27d4a871aa87307166cf186115cca532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_518b927106104fdd28ef3285ca33fd1a3a02c3bee6b7edcc0fd60b438c18f5ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518b927106104fdd28ef3285ca33fd1a3a02c3bee6b7edcc0fd60b438c18f5ad->enter($__internal_518b927106104fdd28ef3285ca33fd1a3a02c3bee6b7edcc0fd60b438c18f5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_518b927106104fdd28ef3285ca33fd1a3a02c3bee6b7edcc0fd60b438c18f5ad->leave($__internal_518b927106104fdd28ef3285ca33fd1a3a02c3bee6b7edcc0fd60b438c18f5ad_prof);

        
        $__internal_404e17b827d36eb7c6db71ef0daa38bb27d4a871aa87307166cf186115cca532->leave($__internal_404e17b827d36eb7c6db71ef0daa38bb27d4a871aa87307166cf186115cca532_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_18d489152dc418618ecb06dbf3e2e7ef2ab44989c80a4d68486684c4ecc4c8e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18d489152dc418618ecb06dbf3e2e7ef2ab44989c80a4d68486684c4ecc4c8e9->enter($__internal_18d489152dc418618ecb06dbf3e2e7ef2ab44989c80a4d68486684c4ecc4c8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_61ea4010c6b9ec026097abf645152aeebdb723154742266ef6577d97a9f03201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ea4010c6b9ec026097abf645152aeebdb723154742266ef6577d97a9f03201->enter($__internal_61ea4010c6b9ec026097abf645152aeebdb723154742266ef6577d97a9f03201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        ob_start();
        // line 27
        echo "    ";
        $context["_field_type"] = (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 28
        echo "    <div class=\"form-group ";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"";
        // line 30
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

            ";
        // line 33
        if ((twig_in_filter(($context["_field_type"] ?? $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "date", 2 => "time", 3 => "birthday")) && (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 34
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 36
            if ((null === ($context["data"] ?? $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 44
        if (((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 45
            echo "                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()));
            echo "</span>
            ";
        }
        // line 47
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_61ea4010c6b9ec026097abf645152aeebdb723154742266ef6577d97a9f03201->leave($__internal_61ea4010c6b9ec026097abf645152aeebdb723154742266ef6577d97a9f03201_prof);

        
        $__internal_18d489152dc418618ecb06dbf3e2e7ef2ab44989c80a4d68486684c4ecc4c8e9->leave($__internal_18d489152dc418618ecb06dbf3e2e7ef2ab44989c80a4d68486684c4ecc4c8e9_prof);

    }

    // line 52
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_ef0a311c7efda6a6a7450c1e4881115d7210b52714e07769059102b4739add50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef0a311c7efda6a6a7450c1e4881115d7210b52714e07769059102b4739add50->enter($__internal_ef0a311c7efda6a6a7450c1e4881115d7210b52714e07769059102b4739add50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_6c7a61afeb9a48e2443b35ec0f97174d65e5c3c4c91b87404780188f9a6911a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c7a61afeb9a48e2443b35ec0f97174d65e5c3c4c91b87404780188f9a6911a6->enter($__internal_6c7a61afeb9a48e2443b35ec0f97174d65e5c3c4c91b87404780188f9a6911a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 53
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_6c7a61afeb9a48e2443b35ec0f97174d65e5c3c4c91b87404780188f9a6911a6->leave($__internal_6c7a61afeb9a48e2443b35ec0f97174d65e5c3c4c91b87404780188f9a6911a6_prof);

        
        $__internal_ef0a311c7efda6a6a7450c1e4881115d7210b52714e07769059102b4739add50->leave($__internal_ef0a311c7efda6a6a7450c1e4881115d7210b52714e07769059102b4739add50_prof);

    }

    // line 56
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_e5c4c1eb50d69c6c5b73654746982f88773924b83e1bc2c74c0d3520a469d3b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5c4c1eb50d69c6c5b73654746982f88773924b83e1bc2c74c0d3520a469d3b9->enter($__internal_e5c4c1eb50d69c6c5b73654746982f88773924b83e1bc2c74c0d3520a469d3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_44a3701406200b274c9ce407f6900b8b2152816ec89e492530c9d0ac71f48bb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a3701406200b274c9ce407f6900b8b2152816ec89e492530c9d0ac71f48bb7->enter($__internal_44a3701406200b274c9ce407f6900b8b2152816ec89e492530c9d0ac71f48bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 57
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_44a3701406200b274c9ce407f6900b8b2152816ec89e492530c9d0ac71f48bb7->leave($__internal_44a3701406200b274c9ce407f6900b8b2152816ec89e492530c9d0ac71f48bb7_prof);

        
        $__internal_e5c4c1eb50d69c6c5b73654746982f88773924b83e1bc2c74c0d3520a469d3b9->leave($__internal_e5c4c1eb50d69c6c5b73654746982f88773924b83e1bc2c74c0d3520a469d3b9_prof);

    }

    // line 60
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_b8c470c40ea00698ba4ee697da8bbce3199122618c055cc6f9166b3b82aec232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c470c40ea00698ba4ee697da8bbce3199122618c055cc6f9166b3b82aec232->enter($__internal_b8c470c40ea00698ba4ee697da8bbce3199122618c055cc6f9166b3b82aec232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_c12cecedf38b12f7de67cba22ce3cab8e28d0b520b6e990802ae0586cad248dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c12cecedf38b12f7de67cba22ce3cab8e28d0b520b6e990802ae0586cad248dd->enter($__internal_c12cecedf38b12f7de67cba22ce3cab8e28d0b520b6e990802ae0586cad248dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 61
        ob_start();
        // line 62
        echo "    <div class=\"form-group ";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 63
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 64
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c12cecedf38b12f7de67cba22ce3cab8e28d0b520b6e990802ae0586cad248dd->leave($__internal_c12cecedf38b12f7de67cba22ce3cab8e28d0b520b6e990802ae0586cad248dd_prof);

        
        $__internal_b8c470c40ea00698ba4ee697da8bbce3199122618c055cc6f9166b3b82aec232->leave($__internal_b8c470c40ea00698ba4ee697da8bbce3199122618c055cc6f9166b3b82aec232_prof);

    }

    // line 72
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_9ae5e29ff7a6ad22f4d2f18cdd3dfe1171410aa816049a52d91e02c121f76f78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ae5e29ff7a6ad22f4d2f18cdd3dfe1171410aa816049a52d91e02c121f76f78->enter($__internal_9ae5e29ff7a6ad22f4d2f18cdd3dfe1171410aa816049a52d91e02c121f76f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_629d4a8ef0b268ab61f3d43b07a9c78de725aa2027f99787269450905644c9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629d4a8ef0b268ab61f3d43b07a9c78de725aa2027f99787269450905644c9a5->enter($__internal_629d4a8ef0b268ab61f3d43b07a9c78de725aa2027f99787269450905644c9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 73
        ob_start();
        // line 74
        echo "    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 75
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 76
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_629d4a8ef0b268ab61f3d43b07a9c78de725aa2027f99787269450905644c9a5->leave($__internal_629d4a8ef0b268ab61f3d43b07a9c78de725aa2027f99787269450905644c9a5_prof);

        
        $__internal_9ae5e29ff7a6ad22f4d2f18cdd3dfe1171410aa816049a52d91e02c121f76f78->leave($__internal_9ae5e29ff7a6ad22f4d2f18cdd3dfe1171410aa816049a52d91e02c121f76f78_prof);

    }

    // line 83
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_de15a9a889d6bfdc83d7e0b0709b24f1cb0812863682fe0a6d886c1ccf6d2270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de15a9a889d6bfdc83d7e0b0709b24f1cb0812863682fe0a6d886c1ccf6d2270->enter($__internal_de15a9a889d6bfdc83d7e0b0709b24f1cb0812863682fe0a6d886c1ccf6d2270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_03dcbe18bbc106804121bab56dced6cd8ba2869748d2611d3b5f94d100f6aaac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03dcbe18bbc106804121bab56dced6cd8ba2869748d2611d3b5f94d100f6aaac->enter($__internal_03dcbe18bbc106804121bab56dced6cd8ba2869748d2611d3b5f94d100f6aaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 84
        ob_start();
        // line 85
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 86
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 87
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_03dcbe18bbc106804121bab56dced6cd8ba2869748d2611d3b5f94d100f6aaac->leave($__internal_03dcbe18bbc106804121bab56dced6cd8ba2869748d2611d3b5f94d100f6aaac_prof);

        
        $__internal_de15a9a889d6bfdc83d7e0b0709b24f1cb0812863682fe0a6d886c1ccf6d2270->leave($__internal_de15a9a889d6bfdc83d7e0b0709b24f1cb0812863682fe0a6d886c1ccf6d2270_prof);

    }

    // line 94
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_85d5462cf5e123f41ae638e928c7790baf9803c6afed9c5c597923b1bd16735b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85d5462cf5e123f41ae638e928c7790baf9803c6afed9c5c597923b1bd16735b->enter($__internal_85d5462cf5e123f41ae638e928c7790baf9803c6afed9c5c597923b1bd16735b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_fc176445762caf5d4db403e2a408143b688778d11994f5f7fcd4bdf95f81d1bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc176445762caf5d4db403e2a408143b688778d11994f5f7fcd4bdf95f81d1bb->enter($__internal_fc176445762caf5d4db403e2a408143b688778d11994f5f7fcd4bdf95f81d1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_fc176445762caf5d4db403e2a408143b688778d11994f5f7fcd4bdf95f81d1bb->leave($__internal_fc176445762caf5d4db403e2a408143b688778d11994f5f7fcd4bdf95f81d1bb_prof);

        
        $__internal_85d5462cf5e123f41ae638e928c7790baf9803c6afed9c5c597923b1bd16735b->leave($__internal_85d5462cf5e123f41ae638e928c7790baf9803c6afed9c5c597923b1bd16735b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  430 => 94,  415 => 88,  411 => 87,  407 => 86,  404 => 85,  402 => 84,  393 => 83,  378 => 77,  374 => 76,  370 => 75,  365 => 74,  363 => 73,  354 => 72,  339 => 66,  335 => 65,  331 => 64,  327 => 63,  318 => 62,  316 => 61,  307 => 60,  297 => 57,  288 => 56,  278 => 53,  269 => 52,  256 => 47,  250 => 45,  248 => 44,  243 => 42,  240 => 41,  233 => 37,  227 => 36,  223 => 34,  221 => 33,  216 => 31,  212 => 30,  208 => 29,  199 => 28,  196 => 27,  194 => 26,  185 => 25,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 94,  98 => 93,  96 => 83,  93 => 82,  91 => 72,  88 => 71,  86 => 60,  83 => 59,  81 => 56,  78 => 55,  76 => 52,  73 => 51,  71 => 25,  68 => 24,  65 => 22,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"@EasyAdmin/form/bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set _easyadmin_form_type = 'horizontal' %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class 'col-sm-2' %}

{# Rows #}

{% block form_row -%}
{% spaceless %}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{ form_label(form) }}
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}

            {% if _field_type in ['datetime', 'date', 'time', 'birthday'] and easyadmin.field.nullable|default(false) %}
                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                        {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                    </label>
                </div>
            {% endif %}

            {{ form_errors(form) }}

            {% if easyadmin.field.help|default('') != '' %}
                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
            {% endif %}
        </div>
    </div>
{% endspaceless %}
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class 'col-sm-10' %}
", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/form/bootstrap_3_horizontal_layout.html.twig");
    }
}