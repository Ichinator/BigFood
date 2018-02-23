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
        $__internal_761446289b2488ecf628bae0ab00de9dd9721b9742d79daf0c90151cef66638d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_761446289b2488ecf628bae0ab00de9dd9721b9742d79daf0c90151cef66638d->enter($__internal_761446289b2488ecf628bae0ab00de9dd9721b9742d79daf0c90151cef66638d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_d82d4ac2b9ef56824e811cf0e8b14d456ef985722f973cfd30dc2ee72d4aa57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d82d4ac2b9ef56824e811cf0e8b14d456ef985722f973cfd30dc2ee72d4aa57a->enter($__internal_d82d4ac2b9ef56824e811cf0e8b14d456ef985722f973cfd30dc2ee72d4aa57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_761446289b2488ecf628bae0ab00de9dd9721b9742d79daf0c90151cef66638d->leave($__internal_761446289b2488ecf628bae0ab00de9dd9721b9742d79daf0c90151cef66638d_prof);

        
        $__internal_d82d4ac2b9ef56824e811cf0e8b14d456ef985722f973cfd30dc2ee72d4aa57a->leave($__internal_d82d4ac2b9ef56824e811cf0e8b14d456ef985722f973cfd30dc2ee72d4aa57a_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_9db35ceba6ebc4475bfdadad873f8af497b8c73062b284ab1479f94b4340ef15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db35ceba6ebc4475bfdadad873f8af497b8c73062b284ab1479f94b4340ef15->enter($__internal_9db35ceba6ebc4475bfdadad873f8af497b8c73062b284ab1479f94b4340ef15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_ade7b6bf25e08f7031d61ae7ec964745b13685c9e37746e7147128ad51c9af47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade7b6bf25e08f7031d61ae7ec964745b13685c9e37746e7147128ad51c9af47->enter($__internal_ade7b6bf25e08f7031d61ae7ec964745b13685c9e37746e7147128ad51c9af47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_ade7b6bf25e08f7031d61ae7ec964745b13685c9e37746e7147128ad51c9af47->leave($__internal_ade7b6bf25e08f7031d61ae7ec964745b13685c9e37746e7147128ad51c9af47_prof);

        
        $__internal_9db35ceba6ebc4475bfdadad873f8af497b8c73062b284ab1479f94b4340ef15->leave($__internal_9db35ceba6ebc4475bfdadad873f8af497b8c73062b284ab1479f94b4340ef15_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c45acdd4fb002283bfec4c7a0582538ce9dd4db724bfbaae3b8848607c7f0528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c45acdd4fb002283bfec4c7a0582538ce9dd4db724bfbaae3b8848607c7f0528->enter($__internal_c45acdd4fb002283bfec4c7a0582538ce9dd4db724bfbaae3b8848607c7f0528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_3e4ca1cf38d00739bffc43b1bae38dac01ba788992fabcc387f06af05635fdb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e4ca1cf38d00739bffc43b1bae38dac01ba788992fabcc387f06af05635fdb4->enter($__internal_3e4ca1cf38d00739bffc43b1bae38dac01ba788992fabcc387f06af05635fdb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_3e4ca1cf38d00739bffc43b1bae38dac01ba788992fabcc387f06af05635fdb4->leave($__internal_3e4ca1cf38d00739bffc43b1bae38dac01ba788992fabcc387f06af05635fdb4_prof);

        
        $__internal_c45acdd4fb002283bfec4c7a0582538ce9dd4db724bfbaae3b8848607c7f0528->leave($__internal_c45acdd4fb002283bfec4c7a0582538ce9dd4db724bfbaae3b8848607c7f0528_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_158c61da110719effe0102e2b77fe595a28c7e50cab2eafb9af8ef04235c6428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158c61da110719effe0102e2b77fe595a28c7e50cab2eafb9af8ef04235c6428->enter($__internal_158c61da110719effe0102e2b77fe595a28c7e50cab2eafb9af8ef04235c6428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_36820f2f892de46c4f073be3af365986b1e1e66fcd913c2a356438678e816c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36820f2f892de46c4f073be3af365986b1e1e66fcd913c2a356438678e816c92->enter($__internal_36820f2f892de46c4f073be3af365986b1e1e66fcd913c2a356438678e816c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_36820f2f892de46c4f073be3af365986b1e1e66fcd913c2a356438678e816c92->leave($__internal_36820f2f892de46c4f073be3af365986b1e1e66fcd913c2a356438678e816c92_prof);

        
        $__internal_158c61da110719effe0102e2b77fe595a28c7e50cab2eafb9af8ef04235c6428->leave($__internal_158c61da110719effe0102e2b77fe595a28c7e50cab2eafb9af8ef04235c6428_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f1ca3549c4554f89ee3c31a523f97fddd64192e05f5606d2fc9a53eff9905a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ca3549c4554f89ee3c31a523f97fddd64192e05f5606d2fc9a53eff9905a93->enter($__internal_f1ca3549c4554f89ee3c31a523f97fddd64192e05f5606d2fc9a53eff9905a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3f81c8808af01caa6cb4d5c243ed84f34e364c2332a1a474dae69717a591e2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f81c8808af01caa6cb4d5c243ed84f34e364c2332a1a474dae69717a591e2c3->enter($__internal_3f81c8808af01caa6cb4d5c243ed84f34e364c2332a1a474dae69717a591e2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_3f81c8808af01caa6cb4d5c243ed84f34e364c2332a1a474dae69717a591e2c3->leave($__internal_3f81c8808af01caa6cb4d5c243ed84f34e364c2332a1a474dae69717a591e2c3_prof);

        
        $__internal_f1ca3549c4554f89ee3c31a523f97fddd64192e05f5606d2fc9a53eff9905a93->leave($__internal_f1ca3549c4554f89ee3c31a523f97fddd64192e05f5606d2fc9a53eff9905a93_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_3f307d1b5a5c033dc429969c4273c5046944331952984f6aa736607ba1a36feb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f307d1b5a5c033dc429969c4273c5046944331952984f6aa736607ba1a36feb->enter($__internal_3f307d1b5a5c033dc429969c4273c5046944331952984f6aa736607ba1a36feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_20c866bcff70d56e60448ecaf5e8801ed158200f08c448edd7738fab40f21544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c866bcff70d56e60448ecaf5e8801ed158200f08c448edd7738fab40f21544->enter($__internal_20c866bcff70d56e60448ecaf5e8801ed158200f08c448edd7738fab40f21544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_20c866bcff70d56e60448ecaf5e8801ed158200f08c448edd7738fab40f21544->leave($__internal_20c866bcff70d56e60448ecaf5e8801ed158200f08c448edd7738fab40f21544_prof);

        
        $__internal_3f307d1b5a5c033dc429969c4273c5046944331952984f6aa736607ba1a36feb->leave($__internal_3f307d1b5a5c033dc429969c4273c5046944331952984f6aa736607ba1a36feb_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_5cf7172a3c429c1afb4ab2319bb18281ebfa9af46bc4b56e9baebd7b6d70914b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf7172a3c429c1afb4ab2319bb18281ebfa9af46bc4b56e9baebd7b6d70914b->enter($__internal_5cf7172a3c429c1afb4ab2319bb18281ebfa9af46bc4b56e9baebd7b6d70914b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_26858b328e185a53c743b5528bb20d6c07b351381b6206b71ac2f02cdd2749f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26858b328e185a53c743b5528bb20d6c07b351381b6206b71ac2f02cdd2749f0->enter($__internal_26858b328e185a53c743b5528bb20d6c07b351381b6206b71ac2f02cdd2749f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_26858b328e185a53c743b5528bb20d6c07b351381b6206b71ac2f02cdd2749f0->leave($__internal_26858b328e185a53c743b5528bb20d6c07b351381b6206b71ac2f02cdd2749f0_prof);

        
        $__internal_5cf7172a3c429c1afb4ab2319bb18281ebfa9af46bc4b56e9baebd7b6d70914b->leave($__internal_5cf7172a3c429c1afb4ab2319bb18281ebfa9af46bc4b56e9baebd7b6d70914b_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_b510c3adccc36c629ab8e3df0aead1e46c77e1b110ee89f15479f822bd98bd79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b510c3adccc36c629ab8e3df0aead1e46c77e1b110ee89f15479f822bd98bd79->enter($__internal_b510c3adccc36c629ab8e3df0aead1e46c77e1b110ee89f15479f822bd98bd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_3699cb5b9e7f6ae8c437c9801a35b799cdd03e8b7531f06e49287aa08d9c3042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3699cb5b9e7f6ae8c437c9801a35b799cdd03e8b7531f06e49287aa08d9c3042->enter($__internal_3699cb5b9e7f6ae8c437c9801a35b799cdd03e8b7531f06e49287aa08d9c3042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_3699cb5b9e7f6ae8c437c9801a35b799cdd03e8b7531f06e49287aa08d9c3042->leave($__internal_3699cb5b9e7f6ae8c437c9801a35b799cdd03e8b7531f06e49287aa08d9c3042_prof);

        
        $__internal_b510c3adccc36c629ab8e3df0aead1e46c77e1b110ee89f15479f822bd98bd79->leave($__internal_b510c3adccc36c629ab8e3df0aead1e46c77e1b110ee89f15479f822bd98bd79_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_4d05c83bd617fec503448a26d8651a857dd7442cd9cee48c3c79c089e5b8112c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d05c83bd617fec503448a26d8651a857dd7442cd9cee48c3c79c089e5b8112c->enter($__internal_4d05c83bd617fec503448a26d8651a857dd7442cd9cee48c3c79c089e5b8112c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_bbe3fa1986598afd476597fcb72d4e9a624791a09f13c5be0ec55e42d629b324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe3fa1986598afd476597fcb72d4e9a624791a09f13c5be0ec55e42d629b324->enter($__internal_bbe3fa1986598afd476597fcb72d4e9a624791a09f13c5be0ec55e42d629b324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_bbe3fa1986598afd476597fcb72d4e9a624791a09f13c5be0ec55e42d629b324->leave($__internal_bbe3fa1986598afd476597fcb72d4e9a624791a09f13c5be0ec55e42d629b324_prof);

        
        $__internal_4d05c83bd617fec503448a26d8651a857dd7442cd9cee48c3c79c089e5b8112c->leave($__internal_4d05c83bd617fec503448a26d8651a857dd7442cd9cee48c3c79c089e5b8112c_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_dd34e71c31a2e1bd236883d37c2b738576b1d37b8ec4d4f65604a2bc07f33245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd34e71c31a2e1bd236883d37c2b738576b1d37b8ec4d4f65604a2bc07f33245->enter($__internal_dd34e71c31a2e1bd236883d37c2b738576b1d37b8ec4d4f65604a2bc07f33245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_6fbc802a1bbfb80001517311d34a78ef81c96253608b2a60fce1ffd1394eb54d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fbc802a1bbfb80001517311d34a78ef81c96253608b2a60fce1ffd1394eb54d->enter($__internal_6fbc802a1bbfb80001517311d34a78ef81c96253608b2a60fce1ffd1394eb54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_6fbc802a1bbfb80001517311d34a78ef81c96253608b2a60fce1ffd1394eb54d->leave($__internal_6fbc802a1bbfb80001517311d34a78ef81c96253608b2a60fce1ffd1394eb54d_prof);

        
        $__internal_dd34e71c31a2e1bd236883d37c2b738576b1d37b8ec4d4f65604a2bc07f33245->leave($__internal_dd34e71c31a2e1bd236883d37c2b738576b1d37b8ec4d4f65604a2bc07f33245_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_e8986fba7d545af2df04221fbe754d0d73aeb4b6487844245164fd39371ceb6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8986fba7d545af2df04221fbe754d0d73aeb4b6487844245164fd39371ceb6d->enter($__internal_e8986fba7d545af2df04221fbe754d0d73aeb4b6487844245164fd39371ceb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_c4fe1e641de267a4965a941e3cae02ab23549b5166d1907ab1c2ced5524b1aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4fe1e641de267a4965a941e3cae02ab23549b5166d1907ab1c2ced5524b1aec->enter($__internal_c4fe1e641de267a4965a941e3cae02ab23549b5166d1907ab1c2ced5524b1aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_c4fe1e641de267a4965a941e3cae02ab23549b5166d1907ab1c2ced5524b1aec->leave($__internal_c4fe1e641de267a4965a941e3cae02ab23549b5166d1907ab1c2ced5524b1aec_prof);

        
        $__internal_e8986fba7d545af2df04221fbe754d0d73aeb4b6487844245164fd39371ceb6d->leave($__internal_e8986fba7d545af2df04221fbe754d0d73aeb4b6487844245164fd39371ceb6d_prof);

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
