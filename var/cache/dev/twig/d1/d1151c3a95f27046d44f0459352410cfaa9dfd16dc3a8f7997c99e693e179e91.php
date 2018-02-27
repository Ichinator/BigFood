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
        $__internal_168d03b0242655c0c3cb35d174407c1d0df61dabc78aebf8a567e427a4bc2209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_168d03b0242655c0c3cb35d174407c1d0df61dabc78aebf8a567e427a4bc2209->enter($__internal_168d03b0242655c0c3cb35d174407c1d0df61dabc78aebf8a567e427a4bc2209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_0b901106d069467a04b0daf924cc18424c846b02f60ef6c5917e5bdd925ee9e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b901106d069467a04b0daf924cc18424c846b02f60ef6c5917e5bdd925ee9e5->enter($__internal_0b901106d069467a04b0daf924cc18424c846b02f60ef6c5917e5bdd925ee9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_168d03b0242655c0c3cb35d174407c1d0df61dabc78aebf8a567e427a4bc2209->leave($__internal_168d03b0242655c0c3cb35d174407c1d0df61dabc78aebf8a567e427a4bc2209_prof);

        
        $__internal_0b901106d069467a04b0daf924cc18424c846b02f60ef6c5917e5bdd925ee9e5->leave($__internal_0b901106d069467a04b0daf924cc18424c846b02f60ef6c5917e5bdd925ee9e5_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_c144949961a7c07ba4a59e7f5e0a9289b0e9dde43664bdff957f0109e21ca718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c144949961a7c07ba4a59e7f5e0a9289b0e9dde43664bdff957f0109e21ca718->enter($__internal_c144949961a7c07ba4a59e7f5e0a9289b0e9dde43664bdff957f0109e21ca718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_59e97be99d17e8a689cc7ee9b5baaed21524a1637c7adc8d7577af8e97fe74fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e97be99d17e8a689cc7ee9b5baaed21524a1637c7adc8d7577af8e97fe74fd->enter($__internal_59e97be99d17e8a689cc7ee9b5baaed21524a1637c7adc8d7577af8e97fe74fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_59e97be99d17e8a689cc7ee9b5baaed21524a1637c7adc8d7577af8e97fe74fd->leave($__internal_59e97be99d17e8a689cc7ee9b5baaed21524a1637c7adc8d7577af8e97fe74fd_prof);

        
        $__internal_c144949961a7c07ba4a59e7f5e0a9289b0e9dde43664bdff957f0109e21ca718->leave($__internal_c144949961a7c07ba4a59e7f5e0a9289b0e9dde43664bdff957f0109e21ca718_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c711681a5485e85e0db26bcbd9e273b172bcec642c86bc2a5f22cad3c247d7f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c711681a5485e85e0db26bcbd9e273b172bcec642c86bc2a5f22cad3c247d7f9->enter($__internal_c711681a5485e85e0db26bcbd9e273b172bcec642c86bc2a5f22cad3c247d7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_73776c2653ef7a48dc1017f6e61e4c5b1e48a37ab054dfc374b07e00cfc17bed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73776c2653ef7a48dc1017f6e61e4c5b1e48a37ab054dfc374b07e00cfc17bed->enter($__internal_73776c2653ef7a48dc1017f6e61e4c5b1e48a37ab054dfc374b07e00cfc17bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_73776c2653ef7a48dc1017f6e61e4c5b1e48a37ab054dfc374b07e00cfc17bed->leave($__internal_73776c2653ef7a48dc1017f6e61e4c5b1e48a37ab054dfc374b07e00cfc17bed_prof);

        
        $__internal_c711681a5485e85e0db26bcbd9e273b172bcec642c86bc2a5f22cad3c247d7f9->leave($__internal_c711681a5485e85e0db26bcbd9e273b172bcec642c86bc2a5f22cad3c247d7f9_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_579647c5b0b6a74cae8521165804831ce1960e8fc00c762c117a8f2019d52a4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_579647c5b0b6a74cae8521165804831ce1960e8fc00c762c117a8f2019d52a4a->enter($__internal_579647c5b0b6a74cae8521165804831ce1960e8fc00c762c117a8f2019d52a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_60dc41d6c2edfdcb139cfb033a9e35886cc3649ec099abcd4b27ec1f53a77926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60dc41d6c2edfdcb139cfb033a9e35886cc3649ec099abcd4b27ec1f53a77926->enter($__internal_60dc41d6c2edfdcb139cfb033a9e35886cc3649ec099abcd4b27ec1f53a77926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_60dc41d6c2edfdcb139cfb033a9e35886cc3649ec099abcd4b27ec1f53a77926->leave($__internal_60dc41d6c2edfdcb139cfb033a9e35886cc3649ec099abcd4b27ec1f53a77926_prof);

        
        $__internal_579647c5b0b6a74cae8521165804831ce1960e8fc00c762c117a8f2019d52a4a->leave($__internal_579647c5b0b6a74cae8521165804831ce1960e8fc00c762c117a8f2019d52a4a_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d81243dab655ae795720a7e4eed939ea6368d84b4241bd6ccbd3227fb79d0dc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d81243dab655ae795720a7e4eed939ea6368d84b4241bd6ccbd3227fb79d0dc9->enter($__internal_d81243dab655ae795720a7e4eed939ea6368d84b4241bd6ccbd3227fb79d0dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_643d5ef4c47112e581b26e8e6cc946b9c08005fcc2a8d7bc35483624d14348c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643d5ef4c47112e581b26e8e6cc946b9c08005fcc2a8d7bc35483624d14348c8->enter($__internal_643d5ef4c47112e581b26e8e6cc946b9c08005fcc2a8d7bc35483624d14348c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_643d5ef4c47112e581b26e8e6cc946b9c08005fcc2a8d7bc35483624d14348c8->leave($__internal_643d5ef4c47112e581b26e8e6cc946b9c08005fcc2a8d7bc35483624d14348c8_prof);

        
        $__internal_d81243dab655ae795720a7e4eed939ea6368d84b4241bd6ccbd3227fb79d0dc9->leave($__internal_d81243dab655ae795720a7e4eed939ea6368d84b4241bd6ccbd3227fb79d0dc9_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_3e56f3426c79b405881ee1fceff8fb02726730ceac82e89119f467111aa8eb9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e56f3426c79b405881ee1fceff8fb02726730ceac82e89119f467111aa8eb9a->enter($__internal_3e56f3426c79b405881ee1fceff8fb02726730ceac82e89119f467111aa8eb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ce948178522e130849b5f2c0b28a44811b85821fcd973b89f5287792a3eeed42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce948178522e130849b5f2c0b28a44811b85821fcd973b89f5287792a3eeed42->enter($__internal_ce948178522e130849b5f2c0b28a44811b85821fcd973b89f5287792a3eeed42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_ce948178522e130849b5f2c0b28a44811b85821fcd973b89f5287792a3eeed42->leave($__internal_ce948178522e130849b5f2c0b28a44811b85821fcd973b89f5287792a3eeed42_prof);

        
        $__internal_3e56f3426c79b405881ee1fceff8fb02726730ceac82e89119f467111aa8eb9a->leave($__internal_3e56f3426c79b405881ee1fceff8fb02726730ceac82e89119f467111aa8eb9a_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_ba91a1b5fe5a765d89959b5637f4bc10e6b43689c896e7af88ce5eb047b53915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba91a1b5fe5a765d89959b5637f4bc10e6b43689c896e7af88ce5eb047b53915->enter($__internal_ba91a1b5fe5a765d89959b5637f4bc10e6b43689c896e7af88ce5eb047b53915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_0195f37699c5b4072d6e414b607b3b62f49ce8814859e6cb12008e541fe1a172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0195f37699c5b4072d6e414b607b3b62f49ce8814859e6cb12008e541fe1a172->enter($__internal_0195f37699c5b4072d6e414b607b3b62f49ce8814859e6cb12008e541fe1a172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_0195f37699c5b4072d6e414b607b3b62f49ce8814859e6cb12008e541fe1a172->leave($__internal_0195f37699c5b4072d6e414b607b3b62f49ce8814859e6cb12008e541fe1a172_prof);

        
        $__internal_ba91a1b5fe5a765d89959b5637f4bc10e6b43689c896e7af88ce5eb047b53915->leave($__internal_ba91a1b5fe5a765d89959b5637f4bc10e6b43689c896e7af88ce5eb047b53915_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_47882c7671bab8fdd25e7a2ecd47b46cc35f784d3c63a1aa4417fa47c4fb69d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47882c7671bab8fdd25e7a2ecd47b46cc35f784d3c63a1aa4417fa47c4fb69d6->enter($__internal_47882c7671bab8fdd25e7a2ecd47b46cc35f784d3c63a1aa4417fa47c4fb69d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_00c12fe8818578310379690627b3bd748d55bf3c8d0e62b13d036e865aa3d81a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c12fe8818578310379690627b3bd748d55bf3c8d0e62b13d036e865aa3d81a->enter($__internal_00c12fe8818578310379690627b3bd748d55bf3c8d0e62b13d036e865aa3d81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_00c12fe8818578310379690627b3bd748d55bf3c8d0e62b13d036e865aa3d81a->leave($__internal_00c12fe8818578310379690627b3bd748d55bf3c8d0e62b13d036e865aa3d81a_prof);

        
        $__internal_47882c7671bab8fdd25e7a2ecd47b46cc35f784d3c63a1aa4417fa47c4fb69d6->leave($__internal_47882c7671bab8fdd25e7a2ecd47b46cc35f784d3c63a1aa4417fa47c4fb69d6_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_e66b4991bc17eb2349fd5f0bc5cbe0d423c100503d5c0ce92c8b13d5e0814853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e66b4991bc17eb2349fd5f0bc5cbe0d423c100503d5c0ce92c8b13d5e0814853->enter($__internal_e66b4991bc17eb2349fd5f0bc5cbe0d423c100503d5c0ce92c8b13d5e0814853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_505175ae6a41882eb3462ff3c009744b487a75edf06ac56451a90e5b50b73e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505175ae6a41882eb3462ff3c009744b487a75edf06ac56451a90e5b50b73e12->enter($__internal_505175ae6a41882eb3462ff3c009744b487a75edf06ac56451a90e5b50b73e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_505175ae6a41882eb3462ff3c009744b487a75edf06ac56451a90e5b50b73e12->leave($__internal_505175ae6a41882eb3462ff3c009744b487a75edf06ac56451a90e5b50b73e12_prof);

        
        $__internal_e66b4991bc17eb2349fd5f0bc5cbe0d423c100503d5c0ce92c8b13d5e0814853->leave($__internal_e66b4991bc17eb2349fd5f0bc5cbe0d423c100503d5c0ce92c8b13d5e0814853_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_333e5e70eb745c4cd2e13686eef13ad2e324f43a77c9c8d1dac2da7e40294c48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_333e5e70eb745c4cd2e13686eef13ad2e324f43a77c9c8d1dac2da7e40294c48->enter($__internal_333e5e70eb745c4cd2e13686eef13ad2e324f43a77c9c8d1dac2da7e40294c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_455d7db2709ec06398ddd8a6d2566e59f2019febcea1fdd6316c27b092db972e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_455d7db2709ec06398ddd8a6d2566e59f2019febcea1fdd6316c27b092db972e->enter($__internal_455d7db2709ec06398ddd8a6d2566e59f2019febcea1fdd6316c27b092db972e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_455d7db2709ec06398ddd8a6d2566e59f2019febcea1fdd6316c27b092db972e->leave($__internal_455d7db2709ec06398ddd8a6d2566e59f2019febcea1fdd6316c27b092db972e_prof);

        
        $__internal_333e5e70eb745c4cd2e13686eef13ad2e324f43a77c9c8d1dac2da7e40294c48->leave($__internal_333e5e70eb745c4cd2e13686eef13ad2e324f43a77c9c8d1dac2da7e40294c48_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_2189aad836f743e29de6fc5632a41ab084dd05f8797a787224c9c4bf42226a61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2189aad836f743e29de6fc5632a41ab084dd05f8797a787224c9c4bf42226a61->enter($__internal_2189aad836f743e29de6fc5632a41ab084dd05f8797a787224c9c4bf42226a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_ee645518747204cf1af0ffc33f83c50bb751fd7fd25be956fdcff9485d936347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee645518747204cf1af0ffc33f83c50bb751fd7fd25be956fdcff9485d936347->enter($__internal_ee645518747204cf1af0ffc33f83c50bb751fd7fd25be956fdcff9485d936347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_ee645518747204cf1af0ffc33f83c50bb751fd7fd25be956fdcff9485d936347->leave($__internal_ee645518747204cf1af0ffc33f83c50bb751fd7fd25be956fdcff9485d936347_prof);

        
        $__internal_2189aad836f743e29de6fc5632a41ab084dd05f8797a787224c9c4bf42226a61->leave($__internal_2189aad836f743e29de6fc5632a41ab084dd05f8797a787224c9c4bf42226a61_prof);

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
