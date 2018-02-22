<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_a326c421224499b65a226d19dabaecee27be21718fdbfa6836b513dcfeb93e64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
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
        $__internal_f9ef4171920c58bd6335d77e53a6d37c55c466d1607ad41b778d5e89b1946a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ef4171920c58bd6335d77e53a6d37c55c466d1607ad41b778d5e89b1946a11->enter($__internal_f9ef4171920c58bd6335d77e53a6d37c55c466d1607ad41b778d5e89b1946a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_bf799b6c4451f307399573793727bb096e06f8d9c7cb1e62c0f869b660f56dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf799b6c4451f307399573793727bb096e06f8d9c7cb1e62c0f869b660f56dfc->enter($__internal_bf799b6c4451f307399573793727bb096e06f8d9c7cb1e62c0f869b660f56dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_f9ef4171920c58bd6335d77e53a6d37c55c466d1607ad41b778d5e89b1946a11->leave($__internal_f9ef4171920c58bd6335d77e53a6d37c55c466d1607ad41b778d5e89b1946a11_prof);

        
        $__internal_bf799b6c4451f307399573793727bb096e06f8d9c7cb1e62c0f869b660f56dfc->leave($__internal_bf799b6c4451f307399573793727bb096e06f8d9c7cb1e62c0f869b660f56dfc_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_b342093aa97fa9b79b6c66cd3483d04bce4edcc3b0f3c7cb56125c77238040b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b342093aa97fa9b79b6c66cd3483d04bce4edcc3b0f3c7cb56125c77238040b3->enter($__internal_b342093aa97fa9b79b6c66cd3483d04bce4edcc3b0f3c7cb56125c77238040b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_b47eca0e60566e6cd8b07ee53b935f93364f26b3e5dfbfa1d1aeceaca0b617da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47eca0e60566e6cd8b07ee53b935f93364f26b3e5dfbfa1d1aeceaca0b617da->enter($__internal_b47eca0e60566e6cd8b07ee53b935f93364f26b3e5dfbfa1d1aeceaca0b617da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_b47eca0e60566e6cd8b07ee53b935f93364f26b3e5dfbfa1d1aeceaca0b617da->leave($__internal_b47eca0e60566e6cd8b07ee53b935f93364f26b3e5dfbfa1d1aeceaca0b617da_prof);

        
        $__internal_b342093aa97fa9b79b6c66cd3483d04bce4edcc3b0f3c7cb56125c77238040b3->leave($__internal_b342093aa97fa9b79b6c66cd3483d04bce4edcc3b0f3c7cb56125c77238040b3_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a987d8e7669e8a22aded7e5561c4e12f5c5310adb2a29f794fa6b6ef019f7d6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a987d8e7669e8a22aded7e5561c4e12f5c5310adb2a29f794fa6b6ef019f7d6a->enter($__internal_a987d8e7669e8a22aded7e5561c4e12f5c5310adb2a29f794fa6b6ef019f7d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_a76a1226f675c038cc8804d514c076be0e295710a957744392cec1abf836473e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76a1226f675c038cc8804d514c076be0e295710a957744392cec1abf836473e->enter($__internal_a76a1226f675c038cc8804d514c076be0e295710a957744392cec1abf836473e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_a76a1226f675c038cc8804d514c076be0e295710a957744392cec1abf836473e->leave($__internal_a76a1226f675c038cc8804d514c076be0e295710a957744392cec1abf836473e_prof);

        
        $__internal_a987d8e7669e8a22aded7e5561c4e12f5c5310adb2a29f794fa6b6ef019f7d6a->leave($__internal_a987d8e7669e8a22aded7e5561c4e12f5c5310adb2a29f794fa6b6ef019f7d6a_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_ad7f42856805716b64114c79d05a56b363b68d5245ec0e0a7af4cf7d516896bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad7f42856805716b64114c79d05a56b363b68d5245ec0e0a7af4cf7d516896bf->enter($__internal_ad7f42856805716b64114c79d05a56b363b68d5245ec0e0a7af4cf7d516896bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_cd601f1252cc6965ab65404e4ff9bc6831211da588dbdde70c6bb87f157104d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd601f1252cc6965ab65404e4ff9bc6831211da588dbdde70c6bb87f157104d3->enter($__internal_cd601f1252cc6965ab65404e4ff9bc6831211da588dbdde70c6bb87f157104d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_cd601f1252cc6965ab65404e4ff9bc6831211da588dbdde70c6bb87f157104d3->leave($__internal_cd601f1252cc6965ab65404e4ff9bc6831211da588dbdde70c6bb87f157104d3_prof);

        
        $__internal_ad7f42856805716b64114c79d05a56b363b68d5245ec0e0a7af4cf7d516896bf->leave($__internal_ad7f42856805716b64114c79d05a56b363b68d5245ec0e0a7af4cf7d516896bf_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_685ff7345581b7f8afc4a5ea6925817273367aa13b657cc11220b42a00974840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_685ff7345581b7f8afc4a5ea6925817273367aa13b657cc11220b42a00974840->enter($__internal_685ff7345581b7f8afc4a5ea6925817273367aa13b657cc11220b42a00974840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f9056cf47cf43c8f17ad46113e23f6efefde8878697677d3fe7a260ede03bccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9056cf47cf43c8f17ad46113e23f6efefde8878697677d3fe7a260ede03bccc->enter($__internal_f9056cf47cf43c8f17ad46113e23f6efefde8878697677d3fe7a260ede03bccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_f9056cf47cf43c8f17ad46113e23f6efefde8878697677d3fe7a260ede03bccc->leave($__internal_f9056cf47cf43c8f17ad46113e23f6efefde8878697677d3fe7a260ede03bccc_prof);

        
        $__internal_685ff7345581b7f8afc4a5ea6925817273367aa13b657cc11220b42a00974840->leave($__internal_685ff7345581b7f8afc4a5ea6925817273367aa13b657cc11220b42a00974840_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d627304afb6cf50fbb17fada3db9016e80ba4cf84cafd079bdfeacf9b0849f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d627304afb6cf50fbb17fada3db9016e80ba4cf84cafd079bdfeacf9b0849f67->enter($__internal_d627304afb6cf50fbb17fada3db9016e80ba4cf84cafd079bdfeacf9b0849f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_3fc2abae639dc5d7f2e60ca3c7b471dc9d8753d3258937ff964627236217cd2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc2abae639dc5d7f2e60ca3c7b471dc9d8753d3258937ff964627236217cd2a->enter($__internal_3fc2abae639dc5d7f2e60ca3c7b471dc9d8753d3258937ff964627236217cd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_3fc2abae639dc5d7f2e60ca3c7b471dc9d8753d3258937ff964627236217cd2a->leave($__internal_3fc2abae639dc5d7f2e60ca3c7b471dc9d8753d3258937ff964627236217cd2a_prof);

        
        $__internal_d627304afb6cf50fbb17fada3db9016e80ba4cf84cafd079bdfeacf9b0849f67->leave($__internal_d627304afb6cf50fbb17fada3db9016e80ba4cf84cafd079bdfeacf9b0849f67_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_84dd9004fd6527573ceb91639cfac3fed21add136b91ed5ab81dd04cc451ed50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84dd9004fd6527573ceb91639cfac3fed21add136b91ed5ab81dd04cc451ed50->enter($__internal_84dd9004fd6527573ceb91639cfac3fed21add136b91ed5ab81dd04cc451ed50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_3522e9ff9b78739575614f0e912abed7155e4407f0623610060f2a06dffde9b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3522e9ff9b78739575614f0e912abed7155e4407f0623610060f2a06dffde9b9->enter($__internal_3522e9ff9b78739575614f0e912abed7155e4407f0623610060f2a06dffde9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_3522e9ff9b78739575614f0e912abed7155e4407f0623610060f2a06dffde9b9->leave($__internal_3522e9ff9b78739575614f0e912abed7155e4407f0623610060f2a06dffde9b9_prof);

        
        $__internal_84dd9004fd6527573ceb91639cfac3fed21add136b91ed5ab81dd04cc451ed50->leave($__internal_84dd9004fd6527573ceb91639cfac3fed21add136b91ed5ab81dd04cc451ed50_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_ab378b769908dba256ede9dd69cd2294fed5a610653d54ef979347257f5aeddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab378b769908dba256ede9dd69cd2294fed5a610653d54ef979347257f5aeddf->enter($__internal_ab378b769908dba256ede9dd69cd2294fed5a610653d54ef979347257f5aeddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_b6a45c45ad90b4f2c83cc2e00306aec1680a0e84da1324a6f546c55ef9651f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a45c45ad90b4f2c83cc2e00306aec1680a0e84da1324a6f546c55ef9651f51->enter($__internal_b6a45c45ad90b4f2c83cc2e00306aec1680a0e84da1324a6f546c55ef9651f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b6a45c45ad90b4f2c83cc2e00306aec1680a0e84da1324a6f546c55ef9651f51->leave($__internal_b6a45c45ad90b4f2c83cc2e00306aec1680a0e84da1324a6f546c55ef9651f51_prof);

        
        $__internal_ab378b769908dba256ede9dd69cd2294fed5a610653d54ef979347257f5aeddf->leave($__internal_ab378b769908dba256ede9dd69cd2294fed5a610653d54ef979347257f5aeddf_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_baea7e82bc694e45daa011a45e57ea503ea5c6eb59210ef24cf2c177dc2711be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baea7e82bc694e45daa011a45e57ea503ea5c6eb59210ef24cf2c177dc2711be->enter($__internal_baea7e82bc694e45daa011a45e57ea503ea5c6eb59210ef24cf2c177dc2711be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_45aed6ec76bf3600d3c07790a64c387bfac1d81cc06655dceeaece65b2476210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45aed6ec76bf3600d3c07790a64c387bfac1d81cc06655dceeaece65b2476210->enter($__internal_45aed6ec76bf3600d3c07790a64c387bfac1d81cc06655dceeaece65b2476210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_45aed6ec76bf3600d3c07790a64c387bfac1d81cc06655dceeaece65b2476210->leave($__internal_45aed6ec76bf3600d3c07790a64c387bfac1d81cc06655dceeaece65b2476210_prof);

        
        $__internal_baea7e82bc694e45daa011a45e57ea503ea5c6eb59210ef24cf2c177dc2711be->leave($__internal_baea7e82bc694e45daa011a45e57ea503ea5c6eb59210ef24cf2c177dc2711be_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_79a175e88722dd94c22b0da2f194884482962f385213d2efe7f925cf291ccddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79a175e88722dd94c22b0da2f194884482962f385213d2efe7f925cf291ccddb->enter($__internal_79a175e88722dd94c22b0da2f194884482962f385213d2efe7f925cf291ccddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_7917002796759193be2de64af77f66344da8f586086ea422e431c5d272dfae5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7917002796759193be2de64af77f66344da8f586086ea422e431c5d272dfae5a->enter($__internal_7917002796759193be2de64af77f66344da8f586086ea422e431c5d272dfae5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7917002796759193be2de64af77f66344da8f586086ea422e431c5d272dfae5a->leave($__internal_7917002796759193be2de64af77f66344da8f586086ea422e431c5d272dfae5a_prof);

        
        $__internal_79a175e88722dd94c22b0da2f194884482962f385213d2efe7f925cf291ccddb->leave($__internal_79a175e88722dd94c22b0da2f194884482962f385213d2efe7f925cf291ccddb_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_d1f5d78f21b4ce9134ae141a52197f3cd731a150cc3257828e4ba2de5a67cdc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1f5d78f21b4ce9134ae141a52197f3cd731a150cc3257828e4ba2de5a67cdc5->enter($__internal_d1f5d78f21b4ce9134ae141a52197f3cd731a150cc3257828e4ba2de5a67cdc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_d3770f68cbd4a51dacf89ca1e0a920810295f1bc00354c6dceb581572ee5de8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3770f68cbd4a51dacf89ca1e0a920810295f1bc00354c6dceb581572ee5de8c->enter($__internal_d3770f68cbd4a51dacf89ca1e0a920810295f1bc00354c6dceb581572ee5de8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_d3770f68cbd4a51dacf89ca1e0a920810295f1bc00354c6dceb581572ee5de8c->leave($__internal_d3770f68cbd4a51dacf89ca1e0a920810295f1bc00354c6dceb581572ee5de8c_prof);

        
        $__internal_d1f5d78f21b4ce9134ae141a52197f3cd731a150cc3257828e4ba2de5a67cdc5->leave($__internal_d1f5d78f21b4ce9134ae141a52197f3cd731a150cc3257828e4ba2de5a67cdc5_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
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

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
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
    <div class=\"form-group\">
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

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
