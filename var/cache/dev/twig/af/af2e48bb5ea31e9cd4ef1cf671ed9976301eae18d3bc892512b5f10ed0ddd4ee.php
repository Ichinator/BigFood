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
        $__internal_64903aaa76dad34152634934237479c8f94aea27f1ba700eef794b3ff159a741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64903aaa76dad34152634934237479c8f94aea27f1ba700eef794b3ff159a741->enter($__internal_64903aaa76dad34152634934237479c8f94aea27f1ba700eef794b3ff159a741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

        $__internal_363a05d86e1c776b49c3c1b6b16b2699be4cc87013c398bf96455a3e54fae933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363a05d86e1c776b49c3c1b6b16b2699be4cc87013c398bf96455a3e54fae933->enter($__internal_363a05d86e1c776b49c3c1b6b16b2699be4cc87013c398bf96455a3e54fae933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_64903aaa76dad34152634934237479c8f94aea27f1ba700eef794b3ff159a741->leave($__internal_64903aaa76dad34152634934237479c8f94aea27f1ba700eef794b3ff159a741_prof);

        
        $__internal_363a05d86e1c776b49c3c1b6b16b2699be4cc87013c398bf96455a3e54fae933->leave($__internal_363a05d86e1c776b49c3c1b6b16b2699be4cc87013c398bf96455a3e54fae933_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_601d08a08b954432d3db56d719141947d1b67c30b324b9bcb74b8b255ace6bff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_601d08a08b954432d3db56d719141947d1b67c30b324b9bcb74b8b255ace6bff->enter($__internal_601d08a08b954432d3db56d719141947d1b67c30b324b9bcb74b8b255ace6bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_ec99d4a6f23562a96a75b8fb5fc4cf8c5140af1245040920fc7ca2ea62c93243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec99d4a6f23562a96a75b8fb5fc4cf8c5140af1245040920fc7ca2ea62c93243->enter($__internal_ec99d4a6f23562a96a75b8fb5fc4cf8c5140af1245040920fc7ca2ea62c93243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_ec99d4a6f23562a96a75b8fb5fc4cf8c5140af1245040920fc7ca2ea62c93243->leave($__internal_ec99d4a6f23562a96a75b8fb5fc4cf8c5140af1245040920fc7ca2ea62c93243_prof);

        
        $__internal_601d08a08b954432d3db56d719141947d1b67c30b324b9bcb74b8b255ace6bff->leave($__internal_601d08a08b954432d3db56d719141947d1b67c30b324b9bcb74b8b255ace6bff_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_62ca67da738eb75aa04c56051fddf96fc0c21beb32ecefc37c123d8776cdf194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62ca67da738eb75aa04c56051fddf96fc0c21beb32ecefc37c123d8776cdf194->enter($__internal_62ca67da738eb75aa04c56051fddf96fc0c21beb32ecefc37c123d8776cdf194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ed1e25bf35b38b38e27fddcbde9ea834afed441378decff96b41100dfedc18ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1e25bf35b38b38e27fddcbde9ea834afed441378decff96b41100dfedc18ed->enter($__internal_ed1e25bf35b38b38e27fddcbde9ea834afed441378decff96b41100dfedc18ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_ed1e25bf35b38b38e27fddcbde9ea834afed441378decff96b41100dfedc18ed->leave($__internal_ed1e25bf35b38b38e27fddcbde9ea834afed441378decff96b41100dfedc18ed_prof);

        
        $__internal_62ca67da738eb75aa04c56051fddf96fc0c21beb32ecefc37c123d8776cdf194->leave($__internal_62ca67da738eb75aa04c56051fddf96fc0c21beb32ecefc37c123d8776cdf194_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_847abe880c53a02f3155dcf17d1f2c236599fff4ca2d228948f93f58aa11069b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_847abe880c53a02f3155dcf17d1f2c236599fff4ca2d228948f93f58aa11069b->enter($__internal_847abe880c53a02f3155dcf17d1f2c236599fff4ca2d228948f93f58aa11069b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_e29590727ff1a8fd56a52a575691ef7ab384f608f3a39b773f3e8d6b230ce3ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29590727ff1a8fd56a52a575691ef7ab384f608f3a39b773f3e8d6b230ce3ee->enter($__internal_e29590727ff1a8fd56a52a575691ef7ab384f608f3a39b773f3e8d6b230ce3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_e29590727ff1a8fd56a52a575691ef7ab384f608f3a39b773f3e8d6b230ce3ee->leave($__internal_e29590727ff1a8fd56a52a575691ef7ab384f608f3a39b773f3e8d6b230ce3ee_prof);

        
        $__internal_847abe880c53a02f3155dcf17d1f2c236599fff4ca2d228948f93f58aa11069b->leave($__internal_847abe880c53a02f3155dcf17d1f2c236599fff4ca2d228948f93f58aa11069b_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a8e4fa1fea0615c5d7a75964e0d44575e7d5c48bc6b585ca4d026dcb4a2c4dc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8e4fa1fea0615c5d7a75964e0d44575e7d5c48bc6b585ca4d026dcb4a2c4dc8->enter($__internal_a8e4fa1fea0615c5d7a75964e0d44575e7d5c48bc6b585ca4d026dcb4a2c4dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e238b4f528d39db59ed858b400265ffc47c37fd8b1a9b0c4299593ae07bf3fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e238b4f528d39db59ed858b400265ffc47c37fd8b1a9b0c4299593ae07bf3fde->enter($__internal_e238b4f528d39db59ed858b400265ffc47c37fd8b1a9b0c4299593ae07bf3fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_e238b4f528d39db59ed858b400265ffc47c37fd8b1a9b0c4299593ae07bf3fde->leave($__internal_e238b4f528d39db59ed858b400265ffc47c37fd8b1a9b0c4299593ae07bf3fde_prof);

        
        $__internal_a8e4fa1fea0615c5d7a75964e0d44575e7d5c48bc6b585ca4d026dcb4a2c4dc8->leave($__internal_a8e4fa1fea0615c5d7a75964e0d44575e7d5c48bc6b585ca4d026dcb4a2c4dc8_prof);

    }

    // line 52
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d5ebf2c3fc273ad7c9de4fe3082cc483e27c791a284c3fb77b77a0b7db75dab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5ebf2c3fc273ad7c9de4fe3082cc483e27c791a284c3fb77b77a0b7db75dab8->enter($__internal_d5ebf2c3fc273ad7c9de4fe3082cc483e27c791a284c3fb77b77a0b7db75dab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_e7a7ac0568ee91860e7f7a2198d28962c4580eda760144813a4ac1156cd90e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a7ac0568ee91860e7f7a2198d28962c4580eda760144813a4ac1156cd90e29->enter($__internal_e7a7ac0568ee91860e7f7a2198d28962c4580eda760144813a4ac1156cd90e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 53
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_e7a7ac0568ee91860e7f7a2198d28962c4580eda760144813a4ac1156cd90e29->leave($__internal_e7a7ac0568ee91860e7f7a2198d28962c4580eda760144813a4ac1156cd90e29_prof);

        
        $__internal_d5ebf2c3fc273ad7c9de4fe3082cc483e27c791a284c3fb77b77a0b7db75dab8->leave($__internal_d5ebf2c3fc273ad7c9de4fe3082cc483e27c791a284c3fb77b77a0b7db75dab8_prof);

    }

    // line 56
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_429c47679a63fb31210f9887e514f8808fba916c0bef0ba8f07738c431249277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_429c47679a63fb31210f9887e514f8808fba916c0bef0ba8f07738c431249277->enter($__internal_429c47679a63fb31210f9887e514f8808fba916c0bef0ba8f07738c431249277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_548e55e5339737cfe88760da08749e1d31e27dc113066ee1518e2f58d4d8cba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548e55e5339737cfe88760da08749e1d31e27dc113066ee1518e2f58d4d8cba8->enter($__internal_548e55e5339737cfe88760da08749e1d31e27dc113066ee1518e2f58d4d8cba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 57
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_548e55e5339737cfe88760da08749e1d31e27dc113066ee1518e2f58d4d8cba8->leave($__internal_548e55e5339737cfe88760da08749e1d31e27dc113066ee1518e2f58d4d8cba8_prof);

        
        $__internal_429c47679a63fb31210f9887e514f8808fba916c0bef0ba8f07738c431249277->leave($__internal_429c47679a63fb31210f9887e514f8808fba916c0bef0ba8f07738c431249277_prof);

    }

    // line 60
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_ffe00bbe4c49d06535a3e2c55db14850511de35255c6a32d80a7c1ae1aea7deb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffe00bbe4c49d06535a3e2c55db14850511de35255c6a32d80a7c1ae1aea7deb->enter($__internal_ffe00bbe4c49d06535a3e2c55db14850511de35255c6a32d80a7c1ae1aea7deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_593251dad777d8b5fe2a8e782a612880b174487fe5b413c9455bf84f77a7407d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593251dad777d8b5fe2a8e782a612880b174487fe5b413c9455bf84f77a7407d->enter($__internal_593251dad777d8b5fe2a8e782a612880b174487fe5b413c9455bf84f77a7407d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_593251dad777d8b5fe2a8e782a612880b174487fe5b413c9455bf84f77a7407d->leave($__internal_593251dad777d8b5fe2a8e782a612880b174487fe5b413c9455bf84f77a7407d_prof);

        
        $__internal_ffe00bbe4c49d06535a3e2c55db14850511de35255c6a32d80a7c1ae1aea7deb->leave($__internal_ffe00bbe4c49d06535a3e2c55db14850511de35255c6a32d80a7c1ae1aea7deb_prof);

    }

    // line 72
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_2c88374b6faf3e8bf870c968bab41a494e68bc39c1944c6b6e6c60a103b92772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c88374b6faf3e8bf870c968bab41a494e68bc39c1944c6b6e6c60a103b92772->enter($__internal_2c88374b6faf3e8bf870c968bab41a494e68bc39c1944c6b6e6c60a103b92772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_9073e9fdcc1e63f48a35c363a1a981b3529ddebe972d6d3e1d9f75bdfda711c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9073e9fdcc1e63f48a35c363a1a981b3529ddebe972d6d3e1d9f75bdfda711c0->enter($__internal_9073e9fdcc1e63f48a35c363a1a981b3529ddebe972d6d3e1d9f75bdfda711c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_9073e9fdcc1e63f48a35c363a1a981b3529ddebe972d6d3e1d9f75bdfda711c0->leave($__internal_9073e9fdcc1e63f48a35c363a1a981b3529ddebe972d6d3e1d9f75bdfda711c0_prof);

        
        $__internal_2c88374b6faf3e8bf870c968bab41a494e68bc39c1944c6b6e6c60a103b92772->leave($__internal_2c88374b6faf3e8bf870c968bab41a494e68bc39c1944c6b6e6c60a103b92772_prof);

    }

    // line 83
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_fcea4134181d4268c329f0033520000453445761ff20f9862b9ebc6ab6e397d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcea4134181d4268c329f0033520000453445761ff20f9862b9ebc6ab6e397d6->enter($__internal_fcea4134181d4268c329f0033520000453445761ff20f9862b9ebc6ab6e397d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_b6214ada431ead35222365ae5547ab5f92bb24af1a1ff63f4454ff073cb2486e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6214ada431ead35222365ae5547ab5f92bb24af1a1ff63f4454ff073cb2486e->enter($__internal_b6214ada431ead35222365ae5547ab5f92bb24af1a1ff63f4454ff073cb2486e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_b6214ada431ead35222365ae5547ab5f92bb24af1a1ff63f4454ff073cb2486e->leave($__internal_b6214ada431ead35222365ae5547ab5f92bb24af1a1ff63f4454ff073cb2486e_prof);

        
        $__internal_fcea4134181d4268c329f0033520000453445761ff20f9862b9ebc6ab6e397d6->leave($__internal_fcea4134181d4268c329f0033520000453445761ff20f9862b9ebc6ab6e397d6_prof);

    }

    // line 94
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_083ec79c5db197ad4a7bf9fd3dd589d5bf8e9130a8828d713009389f594bbc0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_083ec79c5db197ad4a7bf9fd3dd589d5bf8e9130a8828d713009389f594bbc0c->enter($__internal_083ec79c5db197ad4a7bf9fd3dd589d5bf8e9130a8828d713009389f594bbc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_50df049c4b4c8ed949809ce244ad878b7379e4ce11aa52396fe64ed120b7456e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50df049c4b4c8ed949809ce244ad878b7379e4ce11aa52396fe64ed120b7456e->enter($__internal_50df049c4b4c8ed949809ce244ad878b7379e4ce11aa52396fe64ed120b7456e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_50df049c4b4c8ed949809ce244ad878b7379e4ce11aa52396fe64ed120b7456e->leave($__internal_50df049c4b4c8ed949809ce244ad878b7379e4ce11aa52396fe64ed120b7456e_prof);

        
        $__internal_083ec79c5db197ad4a7bf9fd3dd589d5bf8e9130a8828d713009389f594bbc0c->leave($__internal_083ec79c5db197ad4a7bf9fd3dd589d5bf8e9130a8828d713009389f594bbc0c_prof);

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
