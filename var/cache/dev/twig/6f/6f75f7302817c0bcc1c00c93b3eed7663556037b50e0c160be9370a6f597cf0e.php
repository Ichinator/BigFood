<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_4635a3a9e3ef83a3c947bacdca5de5cf41b1c8c78cc804515e100fb9140959ec extends Twig_Template
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
        $__internal_3378baaf88a79ae817175bb2907eab54ddb2530b9bd53e1ca5a9ac99ca06947d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3378baaf88a79ae817175bb2907eab54ddb2530b9bd53e1ca5a9ac99ca06947d->enter($__internal_3378baaf88a79ae817175bb2907eab54ddb2530b9bd53e1ca5a9ac99ca06947d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_fae6f7a35d8bfd0e43aaf6ff07a1c92498751077e0a3a2fda2965e1c4d374c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae6f7a35d8bfd0e43aaf6ff07a1c92498751077e0a3a2fda2965e1c4d374c83->enter($__internal_fae6f7a35d8bfd0e43aaf6ff07a1c92498751077e0a3a2fda2965e1c4d374c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_3378baaf88a79ae817175bb2907eab54ddb2530b9bd53e1ca5a9ac99ca06947d->leave($__internal_3378baaf88a79ae817175bb2907eab54ddb2530b9bd53e1ca5a9ac99ca06947d_prof);

        
        $__internal_fae6f7a35d8bfd0e43aaf6ff07a1c92498751077e0a3a2fda2965e1c4d374c83->leave($__internal_fae6f7a35d8bfd0e43aaf6ff07a1c92498751077e0a3a2fda2965e1c4d374c83_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_de5d5130277fe0e75e943c6ba8cc36ddbfd62f6d6ec3b3efb4109f75f7a8f609 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de5d5130277fe0e75e943c6ba8cc36ddbfd62f6d6ec3b3efb4109f75f7a8f609->enter($__internal_de5d5130277fe0e75e943c6ba8cc36ddbfd62f6d6ec3b3efb4109f75f7a8f609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_3e390c4bf7a45ff36cdf1dd7c0fe97211df3740b8a6eaa80dcf913022566c15d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e390c4bf7a45ff36cdf1dd7c0fe97211df3740b8a6eaa80dcf913022566c15d->enter($__internal_3e390c4bf7a45ff36cdf1dd7c0fe97211df3740b8a6eaa80dcf913022566c15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_3e390c4bf7a45ff36cdf1dd7c0fe97211df3740b8a6eaa80dcf913022566c15d->leave($__internal_3e390c4bf7a45ff36cdf1dd7c0fe97211df3740b8a6eaa80dcf913022566c15d_prof);

        
        $__internal_de5d5130277fe0e75e943c6ba8cc36ddbfd62f6d6ec3b3efb4109f75f7a8f609->leave($__internal_de5d5130277fe0e75e943c6ba8cc36ddbfd62f6d6ec3b3efb4109f75f7a8f609_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_26074ece948b9ba57862a09957dbcf6a163a99e22530480a45c50e3f77fdedf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26074ece948b9ba57862a09957dbcf6a163a99e22530480a45c50e3f77fdedf5->enter($__internal_26074ece948b9ba57862a09957dbcf6a163a99e22530480a45c50e3f77fdedf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_037d65a33d6f3ffe0f980c4fa6332b387cd119a6eb9a47c29aad42e6c0ca5633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037d65a33d6f3ffe0f980c4fa6332b387cd119a6eb9a47c29aad42e6c0ca5633->enter($__internal_037d65a33d6f3ffe0f980c4fa6332b387cd119a6eb9a47c29aad42e6c0ca5633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_037d65a33d6f3ffe0f980c4fa6332b387cd119a6eb9a47c29aad42e6c0ca5633->leave($__internal_037d65a33d6f3ffe0f980c4fa6332b387cd119a6eb9a47c29aad42e6c0ca5633_prof);

        
        $__internal_26074ece948b9ba57862a09957dbcf6a163a99e22530480a45c50e3f77fdedf5->leave($__internal_26074ece948b9ba57862a09957dbcf6a163a99e22530480a45c50e3f77fdedf5_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_0af7309d677ff5ebe997d9b5edf26d0e5841a206827061a9cb0f5ee7cfca6152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af7309d677ff5ebe997d9b5edf26d0e5841a206827061a9cb0f5ee7cfca6152->enter($__internal_0af7309d677ff5ebe997d9b5edf26d0e5841a206827061a9cb0f5ee7cfca6152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_10ceeca35f6554e5da4e5195c20399c5161eb56b350eea909557b0bea8cec097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ceeca35f6554e5da4e5195c20399c5161eb56b350eea909557b0bea8cec097->enter($__internal_10ceeca35f6554e5da4e5195c20399c5161eb56b350eea909557b0bea8cec097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_10ceeca35f6554e5da4e5195c20399c5161eb56b350eea909557b0bea8cec097->leave($__internal_10ceeca35f6554e5da4e5195c20399c5161eb56b350eea909557b0bea8cec097_prof);

        
        $__internal_0af7309d677ff5ebe997d9b5edf26d0e5841a206827061a9cb0f5ee7cfca6152->leave($__internal_0af7309d677ff5ebe997d9b5edf26d0e5841a206827061a9cb0f5ee7cfca6152_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_fcedbc2c2a9d47cae73de272d9a4bee8e7a2e563ebfcf0906c9bc8f025cbc029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcedbc2c2a9d47cae73de272d9a4bee8e7a2e563ebfcf0906c9bc8f025cbc029->enter($__internal_fcedbc2c2a9d47cae73de272d9a4bee8e7a2e563ebfcf0906c9bc8f025cbc029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a5adcc62f8567ba736a51a863e69187446b471d5d654c12ea55e93a19797c3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5adcc62f8567ba736a51a863e69187446b471d5d654c12ea55e93a19797c3d6->enter($__internal_a5adcc62f8567ba736a51a863e69187446b471d5d654c12ea55e93a19797c3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_a5adcc62f8567ba736a51a863e69187446b471d5d654c12ea55e93a19797c3d6->leave($__internal_a5adcc62f8567ba736a51a863e69187446b471d5d654c12ea55e93a19797c3d6_prof);

        
        $__internal_fcedbc2c2a9d47cae73de272d9a4bee8e7a2e563ebfcf0906c9bc8f025cbc029->leave($__internal_fcedbc2c2a9d47cae73de272d9a4bee8e7a2e563ebfcf0906c9bc8f025cbc029_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b7937add6c9e776646bb87db46a64eeb45872f6aaa221e5639b6ccdbba7dffd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7937add6c9e776646bb87db46a64eeb45872f6aaa221e5639b6ccdbba7dffd4->enter($__internal_b7937add6c9e776646bb87db46a64eeb45872f6aaa221e5639b6ccdbba7dffd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_2475406c885ce6b27d724651aba0b8aad4ae24ad1012739d94abd31d67307052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2475406c885ce6b27d724651aba0b8aad4ae24ad1012739d94abd31d67307052->enter($__internal_2475406c885ce6b27d724651aba0b8aad4ae24ad1012739d94abd31d67307052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_2475406c885ce6b27d724651aba0b8aad4ae24ad1012739d94abd31d67307052->leave($__internal_2475406c885ce6b27d724651aba0b8aad4ae24ad1012739d94abd31d67307052_prof);

        
        $__internal_b7937add6c9e776646bb87db46a64eeb45872f6aaa221e5639b6ccdbba7dffd4->leave($__internal_b7937add6c9e776646bb87db46a64eeb45872f6aaa221e5639b6ccdbba7dffd4_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_57edc7833d90b3a86437fab475c5ccd7fe3435b65d87c481d43e7f695e7330d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57edc7833d90b3a86437fab475c5ccd7fe3435b65d87c481d43e7f695e7330d2->enter($__internal_57edc7833d90b3a86437fab475c5ccd7fe3435b65d87c481d43e7f695e7330d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_329d8a09911d6f4f83de7fabf1b9762f80b5f250364f57b11f9ac611b9ea8301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329d8a09911d6f4f83de7fabf1b9762f80b5f250364f57b11f9ac611b9ea8301->enter($__internal_329d8a09911d6f4f83de7fabf1b9762f80b5f250364f57b11f9ac611b9ea8301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_329d8a09911d6f4f83de7fabf1b9762f80b5f250364f57b11f9ac611b9ea8301->leave($__internal_329d8a09911d6f4f83de7fabf1b9762f80b5f250364f57b11f9ac611b9ea8301_prof);

        
        $__internal_57edc7833d90b3a86437fab475c5ccd7fe3435b65d87c481d43e7f695e7330d2->leave($__internal_57edc7833d90b3a86437fab475c5ccd7fe3435b65d87c481d43e7f695e7330d2_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_44e7d65811f5e8833bf426eb904831fa51443852923b03d710036490b603bb9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44e7d65811f5e8833bf426eb904831fa51443852923b03d710036490b603bb9c->enter($__internal_44e7d65811f5e8833bf426eb904831fa51443852923b03d710036490b603bb9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_8bb6523606adcbedad92e59f20ff90cfec91623609ab29bc34dd28f69397875b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb6523606adcbedad92e59f20ff90cfec91623609ab29bc34dd28f69397875b->enter($__internal_8bb6523606adcbedad92e59f20ff90cfec91623609ab29bc34dd28f69397875b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_8bb6523606adcbedad92e59f20ff90cfec91623609ab29bc34dd28f69397875b->leave($__internal_8bb6523606adcbedad92e59f20ff90cfec91623609ab29bc34dd28f69397875b_prof);

        
        $__internal_44e7d65811f5e8833bf426eb904831fa51443852923b03d710036490b603bb9c->leave($__internal_44e7d65811f5e8833bf426eb904831fa51443852923b03d710036490b603bb9c_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_0f5061600b18777e85fdcf28a433d5d24ec85cdd6a013c79516a79af929ff03e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f5061600b18777e85fdcf28a433d5d24ec85cdd6a013c79516a79af929ff03e->enter($__internal_0f5061600b18777e85fdcf28a433d5d24ec85cdd6a013c79516a79af929ff03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_2b07bd47f030031f2409aa929c7b8cbb8629c9689956674cad2eb74f77d4bd62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b07bd47f030031f2409aa929c7b8cbb8629c9689956674cad2eb74f77d4bd62->enter($__internal_2b07bd47f030031f2409aa929c7b8cbb8629c9689956674cad2eb74f77d4bd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_2b07bd47f030031f2409aa929c7b8cbb8629c9689956674cad2eb74f77d4bd62->leave($__internal_2b07bd47f030031f2409aa929c7b8cbb8629c9689956674cad2eb74f77d4bd62_prof);

        
        $__internal_0f5061600b18777e85fdcf28a433d5d24ec85cdd6a013c79516a79af929ff03e->leave($__internal_0f5061600b18777e85fdcf28a433d5d24ec85cdd6a013c79516a79af929ff03e_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_a71da78b73c92fa28c65eb84af1587654e3706e1b086c42a5e0d8cc8a77aa898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a71da78b73c92fa28c65eb84af1587654e3706e1b086c42a5e0d8cc8a77aa898->enter($__internal_a71da78b73c92fa28c65eb84af1587654e3706e1b086c42a5e0d8cc8a77aa898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_79d348527772f2142ff0a5c00f0b0f499fd5b2947e6ef723ca63cf31d8251e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d348527772f2142ff0a5c00f0b0f499fd5b2947e6ef723ca63cf31d8251e8b->enter($__internal_79d348527772f2142ff0a5c00f0b0f499fd5b2947e6ef723ca63cf31d8251e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_79d348527772f2142ff0a5c00f0b0f499fd5b2947e6ef723ca63cf31d8251e8b->leave($__internal_79d348527772f2142ff0a5c00f0b0f499fd5b2947e6ef723ca63cf31d8251e8b_prof);

        
        $__internal_a71da78b73c92fa28c65eb84af1587654e3706e1b086c42a5e0d8cc8a77aa898->leave($__internal_a71da78b73c92fa28c65eb84af1587654e3706e1b086c42a5e0d8cc8a77aa898_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_2e7133df591021b95ca5cca381b703d5ee9bed0ee71df2a89fab64334c4d0290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e7133df591021b95ca5cca381b703d5ee9bed0ee71df2a89fab64334c4d0290->enter($__internal_2e7133df591021b95ca5cca381b703d5ee9bed0ee71df2a89fab64334c4d0290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_05a0e9c5853feb891479f3d298fe83ab3064e0b5fb5008ad41f64c6d142c7bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a0e9c5853feb891479f3d298fe83ab3064e0b5fb5008ad41f64c6d142c7bd3->enter($__internal_05a0e9c5853feb891479f3d298fe83ab3064e0b5fb5008ad41f64c6d142c7bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_05a0e9c5853feb891479f3d298fe83ab3064e0b5fb5008ad41f64c6d142c7bd3->leave($__internal_05a0e9c5853feb891479f3d298fe83ab3064e0b5fb5008ad41f64c6d142c7bd3_prof);

        
        $__internal_2e7133df591021b95ca5cca381b703d5ee9bed0ee71df2a89fab64334c4d0290->leave($__internal_2e7133df591021b95ca5cca381b703d5ee9bed0ee71df2a89fab64334c4d0290_prof);

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
