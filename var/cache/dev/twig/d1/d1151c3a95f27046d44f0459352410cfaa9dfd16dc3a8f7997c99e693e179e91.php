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
        $__internal_3480f2061056e25663369cb51eb5f599426d6e240e4a15c30b74425ebb89461d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3480f2061056e25663369cb51eb5f599426d6e240e4a15c30b74425ebb89461d->enter($__internal_3480f2061056e25663369cb51eb5f599426d6e240e4a15c30b74425ebb89461d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_7e77a4df6b15df389640ec3612123f6e2e1c23bbeabab27c89cccc9a2b49283d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e77a4df6b15df389640ec3612123f6e2e1c23bbeabab27c89cccc9a2b49283d->enter($__internal_7e77a4df6b15df389640ec3612123f6e2e1c23bbeabab27c89cccc9a2b49283d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_3480f2061056e25663369cb51eb5f599426d6e240e4a15c30b74425ebb89461d->leave($__internal_3480f2061056e25663369cb51eb5f599426d6e240e4a15c30b74425ebb89461d_prof);

        
        $__internal_7e77a4df6b15df389640ec3612123f6e2e1c23bbeabab27c89cccc9a2b49283d->leave($__internal_7e77a4df6b15df389640ec3612123f6e2e1c23bbeabab27c89cccc9a2b49283d_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_9fa499a86f1eae548a825e5113982d4c529c9469f06b21af5d4af3cd75ac3de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fa499a86f1eae548a825e5113982d4c529c9469f06b21af5d4af3cd75ac3de5->enter($__internal_9fa499a86f1eae548a825e5113982d4c529c9469f06b21af5d4af3cd75ac3de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_99bf77bff15ed49bb458ef63f75eb7f8b4c97d0d74161f3e9d8f6f128a204099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99bf77bff15ed49bb458ef63f75eb7f8b4c97d0d74161f3e9d8f6f128a204099->enter($__internal_99bf77bff15ed49bb458ef63f75eb7f8b4c97d0d74161f3e9d8f6f128a204099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_99bf77bff15ed49bb458ef63f75eb7f8b4c97d0d74161f3e9d8f6f128a204099->leave($__internal_99bf77bff15ed49bb458ef63f75eb7f8b4c97d0d74161f3e9d8f6f128a204099_prof);

        
        $__internal_9fa499a86f1eae548a825e5113982d4c529c9469f06b21af5d4af3cd75ac3de5->leave($__internal_9fa499a86f1eae548a825e5113982d4c529c9469f06b21af5d4af3cd75ac3de5_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b2163978e2aa803183540414a7cf0974b337dde0893d1e380916b0ae37800412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2163978e2aa803183540414a7cf0974b337dde0893d1e380916b0ae37800412->enter($__internal_b2163978e2aa803183540414a7cf0974b337dde0893d1e380916b0ae37800412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_f40f27d7cf550883574f14be6105cc547f4b753cf119d4e0f142299b47d8c011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f40f27d7cf550883574f14be6105cc547f4b753cf119d4e0f142299b47d8c011->enter($__internal_f40f27d7cf550883574f14be6105cc547f4b753cf119d4e0f142299b47d8c011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_f40f27d7cf550883574f14be6105cc547f4b753cf119d4e0f142299b47d8c011->leave($__internal_f40f27d7cf550883574f14be6105cc547f4b753cf119d4e0f142299b47d8c011_prof);

        
        $__internal_b2163978e2aa803183540414a7cf0974b337dde0893d1e380916b0ae37800412->leave($__internal_b2163978e2aa803183540414a7cf0974b337dde0893d1e380916b0ae37800412_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_3997f17edc30ddc9f6c4fe4a703a521ba19ad8e896031f878f7db48edb410965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3997f17edc30ddc9f6c4fe4a703a521ba19ad8e896031f878f7db48edb410965->enter($__internal_3997f17edc30ddc9f6c4fe4a703a521ba19ad8e896031f878f7db48edb410965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_d349cb64890c1412b7d3c743118fc28aadaedd341232e20304b827796fe94525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d349cb64890c1412b7d3c743118fc28aadaedd341232e20304b827796fe94525->enter($__internal_d349cb64890c1412b7d3c743118fc28aadaedd341232e20304b827796fe94525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_d349cb64890c1412b7d3c743118fc28aadaedd341232e20304b827796fe94525->leave($__internal_d349cb64890c1412b7d3c743118fc28aadaedd341232e20304b827796fe94525_prof);

        
        $__internal_3997f17edc30ddc9f6c4fe4a703a521ba19ad8e896031f878f7db48edb410965->leave($__internal_3997f17edc30ddc9f6c4fe4a703a521ba19ad8e896031f878f7db48edb410965_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c4e6098c790848807222ae42f1de2a28c023f87902e7c851303d0a8db7913d03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4e6098c790848807222ae42f1de2a28c023f87902e7c851303d0a8db7913d03->enter($__internal_c4e6098c790848807222ae42f1de2a28c023f87902e7c851303d0a8db7913d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_d312bb7463104afb65db4e4945acaa614497d6c5ab7b8b7c658a657a9670b173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d312bb7463104afb65db4e4945acaa614497d6c5ab7b8b7c658a657a9670b173->enter($__internal_d312bb7463104afb65db4e4945acaa614497d6c5ab7b8b7c658a657a9670b173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_d312bb7463104afb65db4e4945acaa614497d6c5ab7b8b7c658a657a9670b173->leave($__internal_d312bb7463104afb65db4e4945acaa614497d6c5ab7b8b7c658a657a9670b173_prof);

        
        $__internal_c4e6098c790848807222ae42f1de2a28c023f87902e7c851303d0a8db7913d03->leave($__internal_c4e6098c790848807222ae42f1de2a28c023f87902e7c851303d0a8db7913d03_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a3e759c0f97ee647e73898babb41cd2faed3b5a590fae253b902c4ac5a40d680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3e759c0f97ee647e73898babb41cd2faed3b5a590fae253b902c4ac5a40d680->enter($__internal_a3e759c0f97ee647e73898babb41cd2faed3b5a590fae253b902c4ac5a40d680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_caa91162a18dbeaba1b5094000e7c9dc310dabfad1ee2acafb6435e88e8cc9d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa91162a18dbeaba1b5094000e7c9dc310dabfad1ee2acafb6435e88e8cc9d0->enter($__internal_caa91162a18dbeaba1b5094000e7c9dc310dabfad1ee2acafb6435e88e8cc9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_caa91162a18dbeaba1b5094000e7c9dc310dabfad1ee2acafb6435e88e8cc9d0->leave($__internal_caa91162a18dbeaba1b5094000e7c9dc310dabfad1ee2acafb6435e88e8cc9d0_prof);

        
        $__internal_a3e759c0f97ee647e73898babb41cd2faed3b5a590fae253b902c4ac5a40d680->leave($__internal_a3e759c0f97ee647e73898babb41cd2faed3b5a590fae253b902c4ac5a40d680_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_0d97f66237c8a74fabc9178384c20557f6646debc3108dcd5d01398b5d58978a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d97f66237c8a74fabc9178384c20557f6646debc3108dcd5d01398b5d58978a->enter($__internal_0d97f66237c8a74fabc9178384c20557f6646debc3108dcd5d01398b5d58978a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_9e74741b9e0102d089214443508afd85e4aa4510e4d63b0c79e6744694a845b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e74741b9e0102d089214443508afd85e4aa4510e4d63b0c79e6744694a845b9->enter($__internal_9e74741b9e0102d089214443508afd85e4aa4510e4d63b0c79e6744694a845b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_9e74741b9e0102d089214443508afd85e4aa4510e4d63b0c79e6744694a845b9->leave($__internal_9e74741b9e0102d089214443508afd85e4aa4510e4d63b0c79e6744694a845b9_prof);

        
        $__internal_0d97f66237c8a74fabc9178384c20557f6646debc3108dcd5d01398b5d58978a->leave($__internal_0d97f66237c8a74fabc9178384c20557f6646debc3108dcd5d01398b5d58978a_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_a1a0a64e3707abf4679428f78d74cbb689efe42895ab65d791cccec648fd17e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1a0a64e3707abf4679428f78d74cbb689efe42895ab65d791cccec648fd17e0->enter($__internal_a1a0a64e3707abf4679428f78d74cbb689efe42895ab65d791cccec648fd17e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_78c6b27bb3026981598c00072192e2aa65c4dcb8e43c218e14cb3db5e8e222ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78c6b27bb3026981598c00072192e2aa65c4dcb8e43c218e14cb3db5e8e222ea->enter($__internal_78c6b27bb3026981598c00072192e2aa65c4dcb8e43c218e14cb3db5e8e222ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_78c6b27bb3026981598c00072192e2aa65c4dcb8e43c218e14cb3db5e8e222ea->leave($__internal_78c6b27bb3026981598c00072192e2aa65c4dcb8e43c218e14cb3db5e8e222ea_prof);

        
        $__internal_a1a0a64e3707abf4679428f78d74cbb689efe42895ab65d791cccec648fd17e0->leave($__internal_a1a0a64e3707abf4679428f78d74cbb689efe42895ab65d791cccec648fd17e0_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_219970667675ae954d73d0f1fb900756847e46899009da5a15b0d8726de664c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_219970667675ae954d73d0f1fb900756847e46899009da5a15b0d8726de664c6->enter($__internal_219970667675ae954d73d0f1fb900756847e46899009da5a15b0d8726de664c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_752d037671772f6097870be2dcd84bcbc68facb432605c976ec8774cd32cb5c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752d037671772f6097870be2dcd84bcbc68facb432605c976ec8774cd32cb5c7->enter($__internal_752d037671772f6097870be2dcd84bcbc68facb432605c976ec8774cd32cb5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_752d037671772f6097870be2dcd84bcbc68facb432605c976ec8774cd32cb5c7->leave($__internal_752d037671772f6097870be2dcd84bcbc68facb432605c976ec8774cd32cb5c7_prof);

        
        $__internal_219970667675ae954d73d0f1fb900756847e46899009da5a15b0d8726de664c6->leave($__internal_219970667675ae954d73d0f1fb900756847e46899009da5a15b0d8726de664c6_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_1de23686058121cfff136a553d4fc9dad35156af028ea7de8cf20c2f07068c29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1de23686058121cfff136a553d4fc9dad35156af028ea7de8cf20c2f07068c29->enter($__internal_1de23686058121cfff136a553d4fc9dad35156af028ea7de8cf20c2f07068c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_3e0c0fbf585dac9be36bc5a9b8762fb8e7f7db1c31a99556b30480e6f9a70a02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e0c0fbf585dac9be36bc5a9b8762fb8e7f7db1c31a99556b30480e6f9a70a02->enter($__internal_3e0c0fbf585dac9be36bc5a9b8762fb8e7f7db1c31a99556b30480e6f9a70a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_3e0c0fbf585dac9be36bc5a9b8762fb8e7f7db1c31a99556b30480e6f9a70a02->leave($__internal_3e0c0fbf585dac9be36bc5a9b8762fb8e7f7db1c31a99556b30480e6f9a70a02_prof);

        
        $__internal_1de23686058121cfff136a553d4fc9dad35156af028ea7de8cf20c2f07068c29->leave($__internal_1de23686058121cfff136a553d4fc9dad35156af028ea7de8cf20c2f07068c29_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_3e2b404aa29daf48c2163c5eea527b7896312e31f153da4dbdb4d9e90af6af17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e2b404aa29daf48c2163c5eea527b7896312e31f153da4dbdb4d9e90af6af17->enter($__internal_3e2b404aa29daf48c2163c5eea527b7896312e31f153da4dbdb4d9e90af6af17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_f1154c5c6eddbed11eca9f0a6c38828f2be7422142dceb72573fe3e7cc056391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1154c5c6eddbed11eca9f0a6c38828f2be7422142dceb72573fe3e7cc056391->enter($__internal_f1154c5c6eddbed11eca9f0a6c38828f2be7422142dceb72573fe3e7cc056391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_f1154c5c6eddbed11eca9f0a6c38828f2be7422142dceb72573fe3e7cc056391->leave($__internal_f1154c5c6eddbed11eca9f0a6c38828f2be7422142dceb72573fe3e7cc056391_prof);

        
        $__internal_3e2b404aa29daf48c2163c5eea527b7896312e31f153da4dbdb4d9e90af6af17->leave($__internal_3e2b404aa29daf48c2163c5eea527b7896312e31f153da4dbdb4d9e90af6af17_prof);

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
