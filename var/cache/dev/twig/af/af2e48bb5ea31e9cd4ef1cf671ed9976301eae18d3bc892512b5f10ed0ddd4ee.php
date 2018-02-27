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
        $__internal_4229d38ea04a565225d7f48190167b3d3bac3730ee3b3c804166a75cb5d51a29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4229d38ea04a565225d7f48190167b3d3bac3730ee3b3c804166a75cb5d51a29->enter($__internal_4229d38ea04a565225d7f48190167b3d3bac3730ee3b3c804166a75cb5d51a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

        $__internal_ac588b71eb78b5eebcd09bfc1d993a526bea25a7ddb7572fe24b78014139853f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac588b71eb78b5eebcd09bfc1d993a526bea25a7ddb7572fe24b78014139853f->enter($__internal_ac588b71eb78b5eebcd09bfc1d993a526bea25a7ddb7572fe24b78014139853f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_4229d38ea04a565225d7f48190167b3d3bac3730ee3b3c804166a75cb5d51a29->leave($__internal_4229d38ea04a565225d7f48190167b3d3bac3730ee3b3c804166a75cb5d51a29_prof);

        
        $__internal_ac588b71eb78b5eebcd09bfc1d993a526bea25a7ddb7572fe24b78014139853f->leave($__internal_ac588b71eb78b5eebcd09bfc1d993a526bea25a7ddb7572fe24b78014139853f_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_a482ac44169c37061c786b9f9e50b05f5726ded0e59840b5a1b9c4394d8fa17d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a482ac44169c37061c786b9f9e50b05f5726ded0e59840b5a1b9c4394d8fa17d->enter($__internal_a482ac44169c37061c786b9f9e50b05f5726ded0e59840b5a1b9c4394d8fa17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_7fd606cae416122f6d87adc168202ee12149dde1e723b116c17bcabf9c6aebd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd606cae416122f6d87adc168202ee12149dde1e723b116c17bcabf9c6aebd2->enter($__internal_7fd606cae416122f6d87adc168202ee12149dde1e723b116c17bcabf9c6aebd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_7fd606cae416122f6d87adc168202ee12149dde1e723b116c17bcabf9c6aebd2->leave($__internal_7fd606cae416122f6d87adc168202ee12149dde1e723b116c17bcabf9c6aebd2_prof);

        
        $__internal_a482ac44169c37061c786b9f9e50b05f5726ded0e59840b5a1b9c4394d8fa17d->leave($__internal_a482ac44169c37061c786b9f9e50b05f5726ded0e59840b5a1b9c4394d8fa17d_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_981e42e38ef6e228698dd02020a7d339ed4661eaf394a1148c6303c670a21e88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_981e42e38ef6e228698dd02020a7d339ed4661eaf394a1148c6303c670a21e88->enter($__internal_981e42e38ef6e228698dd02020a7d339ed4661eaf394a1148c6303c670a21e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_130b8629159b7baa7ed4d0aec5937b3c577b7479f223b6207f8de93e0163ebbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130b8629159b7baa7ed4d0aec5937b3c577b7479f223b6207f8de93e0163ebbf->enter($__internal_130b8629159b7baa7ed4d0aec5937b3c577b7479f223b6207f8de93e0163ebbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_130b8629159b7baa7ed4d0aec5937b3c577b7479f223b6207f8de93e0163ebbf->leave($__internal_130b8629159b7baa7ed4d0aec5937b3c577b7479f223b6207f8de93e0163ebbf_prof);

        
        $__internal_981e42e38ef6e228698dd02020a7d339ed4661eaf394a1148c6303c670a21e88->leave($__internal_981e42e38ef6e228698dd02020a7d339ed4661eaf394a1148c6303c670a21e88_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_953a0a79ae1344718fa4d53a49653e3b969d0daacfb62e445492230e899407a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_953a0a79ae1344718fa4d53a49653e3b969d0daacfb62e445492230e899407a8->enter($__internal_953a0a79ae1344718fa4d53a49653e3b969d0daacfb62e445492230e899407a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_35afbdddc541b99a115d64dc3d6d110168b9415f17d68b00e3766901e9e8a800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35afbdddc541b99a115d64dc3d6d110168b9415f17d68b00e3766901e9e8a800->enter($__internal_35afbdddc541b99a115d64dc3d6d110168b9415f17d68b00e3766901e9e8a800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_35afbdddc541b99a115d64dc3d6d110168b9415f17d68b00e3766901e9e8a800->leave($__internal_35afbdddc541b99a115d64dc3d6d110168b9415f17d68b00e3766901e9e8a800_prof);

        
        $__internal_953a0a79ae1344718fa4d53a49653e3b969d0daacfb62e445492230e899407a8->leave($__internal_953a0a79ae1344718fa4d53a49653e3b969d0daacfb62e445492230e899407a8_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ae0e00cef94fc529caa5141ef898f72b2de7714c0b6f2e433caa268cb327efc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae0e00cef94fc529caa5141ef898f72b2de7714c0b6f2e433caa268cb327efc6->enter($__internal_ae0e00cef94fc529caa5141ef898f72b2de7714c0b6f2e433caa268cb327efc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_fde292af0ca00db4b76467617243089ac5fdc0862e6b7578a4d317571cbe0e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde292af0ca00db4b76467617243089ac5fdc0862e6b7578a4d317571cbe0e79->enter($__internal_fde292af0ca00db4b76467617243089ac5fdc0862e6b7578a4d317571cbe0e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_fde292af0ca00db4b76467617243089ac5fdc0862e6b7578a4d317571cbe0e79->leave($__internal_fde292af0ca00db4b76467617243089ac5fdc0862e6b7578a4d317571cbe0e79_prof);

        
        $__internal_ae0e00cef94fc529caa5141ef898f72b2de7714c0b6f2e433caa268cb327efc6->leave($__internal_ae0e00cef94fc529caa5141ef898f72b2de7714c0b6f2e433caa268cb327efc6_prof);

    }

    // line 52
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d896cebf6508f75264a49618b74201ff197027c49e7afb99d3d7547ea905f9b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d896cebf6508f75264a49618b74201ff197027c49e7afb99d3d7547ea905f9b2->enter($__internal_d896cebf6508f75264a49618b74201ff197027c49e7afb99d3d7547ea905f9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_33153d338b72813a9e4eadf7300c5779621decd12d49f64017c4a1bf5c3008eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33153d338b72813a9e4eadf7300c5779621decd12d49f64017c4a1bf5c3008eb->enter($__internal_33153d338b72813a9e4eadf7300c5779621decd12d49f64017c4a1bf5c3008eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 53
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_33153d338b72813a9e4eadf7300c5779621decd12d49f64017c4a1bf5c3008eb->leave($__internal_33153d338b72813a9e4eadf7300c5779621decd12d49f64017c4a1bf5c3008eb_prof);

        
        $__internal_d896cebf6508f75264a49618b74201ff197027c49e7afb99d3d7547ea905f9b2->leave($__internal_d896cebf6508f75264a49618b74201ff197027c49e7afb99d3d7547ea905f9b2_prof);

    }

    // line 56
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_fbb4a3c261adefd1e3a858914af030abc5eaa9c42d1b6a460f130d6430e01d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbb4a3c261adefd1e3a858914af030abc5eaa9c42d1b6a460f130d6430e01d47->enter($__internal_fbb4a3c261adefd1e3a858914af030abc5eaa9c42d1b6a460f130d6430e01d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_9c5af061523100403f76294d91bd8aeb4437bd085900deb7409c00ec2677042f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c5af061523100403f76294d91bd8aeb4437bd085900deb7409c00ec2677042f->enter($__internal_9c5af061523100403f76294d91bd8aeb4437bd085900deb7409c00ec2677042f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 57
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_9c5af061523100403f76294d91bd8aeb4437bd085900deb7409c00ec2677042f->leave($__internal_9c5af061523100403f76294d91bd8aeb4437bd085900deb7409c00ec2677042f_prof);

        
        $__internal_fbb4a3c261adefd1e3a858914af030abc5eaa9c42d1b6a460f130d6430e01d47->leave($__internal_fbb4a3c261adefd1e3a858914af030abc5eaa9c42d1b6a460f130d6430e01d47_prof);

    }

    // line 60
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_b8c6143bd6162d968fb656f6dd72efaabaac18f2ac990fbb14205c0608d17389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c6143bd6162d968fb656f6dd72efaabaac18f2ac990fbb14205c0608d17389->enter($__internal_b8c6143bd6162d968fb656f6dd72efaabaac18f2ac990fbb14205c0608d17389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_36dfa59a601f0c8528e16a4efcc497acea8cdf5b681539e1be9b55ef2a509b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36dfa59a601f0c8528e16a4efcc497acea8cdf5b681539e1be9b55ef2a509b28->enter($__internal_36dfa59a601f0c8528e16a4efcc497acea8cdf5b681539e1be9b55ef2a509b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_36dfa59a601f0c8528e16a4efcc497acea8cdf5b681539e1be9b55ef2a509b28->leave($__internal_36dfa59a601f0c8528e16a4efcc497acea8cdf5b681539e1be9b55ef2a509b28_prof);

        
        $__internal_b8c6143bd6162d968fb656f6dd72efaabaac18f2ac990fbb14205c0608d17389->leave($__internal_b8c6143bd6162d968fb656f6dd72efaabaac18f2ac990fbb14205c0608d17389_prof);

    }

    // line 72
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_3b9a961a2198f6b78bc95a780b18c93b3545f30771a5ea58152ccef46bc1aec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b9a961a2198f6b78bc95a780b18c93b3545f30771a5ea58152ccef46bc1aec6->enter($__internal_3b9a961a2198f6b78bc95a780b18c93b3545f30771a5ea58152ccef46bc1aec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_93bca09b8a0a0b13397a4ca15944d518588d54532b0ae85d031cc81ce5f04adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93bca09b8a0a0b13397a4ca15944d518588d54532b0ae85d031cc81ce5f04adc->enter($__internal_93bca09b8a0a0b13397a4ca15944d518588d54532b0ae85d031cc81ce5f04adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_93bca09b8a0a0b13397a4ca15944d518588d54532b0ae85d031cc81ce5f04adc->leave($__internal_93bca09b8a0a0b13397a4ca15944d518588d54532b0ae85d031cc81ce5f04adc_prof);

        
        $__internal_3b9a961a2198f6b78bc95a780b18c93b3545f30771a5ea58152ccef46bc1aec6->leave($__internal_3b9a961a2198f6b78bc95a780b18c93b3545f30771a5ea58152ccef46bc1aec6_prof);

    }

    // line 83
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_9b4813814112b59680d0f6ebbc1fd66ff53699a3fcc6b72be6839f01baf7ec52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b4813814112b59680d0f6ebbc1fd66ff53699a3fcc6b72be6839f01baf7ec52->enter($__internal_9b4813814112b59680d0f6ebbc1fd66ff53699a3fcc6b72be6839f01baf7ec52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_aa1fae3e1f40fad3cbf6e91db3ccf6278b15da7b1afd833d04d5653140095be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1fae3e1f40fad3cbf6e91db3ccf6278b15da7b1afd833d04d5653140095be6->enter($__internal_aa1fae3e1f40fad3cbf6e91db3ccf6278b15da7b1afd833d04d5653140095be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_aa1fae3e1f40fad3cbf6e91db3ccf6278b15da7b1afd833d04d5653140095be6->leave($__internal_aa1fae3e1f40fad3cbf6e91db3ccf6278b15da7b1afd833d04d5653140095be6_prof);

        
        $__internal_9b4813814112b59680d0f6ebbc1fd66ff53699a3fcc6b72be6839f01baf7ec52->leave($__internal_9b4813814112b59680d0f6ebbc1fd66ff53699a3fcc6b72be6839f01baf7ec52_prof);

    }

    // line 94
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_8e621f80e2d83b3e58028e33397894ec913d316c0fd79e62c692cd3a119296b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e621f80e2d83b3e58028e33397894ec913d316c0fd79e62c692cd3a119296b7->enter($__internal_8e621f80e2d83b3e58028e33397894ec913d316c0fd79e62c692cd3a119296b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_a5d6578581691804c6af014b374f109806f132cb4855bf177f92681a8bab51be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d6578581691804c6af014b374f109806f132cb4855bf177f92681a8bab51be->enter($__internal_a5d6578581691804c6af014b374f109806f132cb4855bf177f92681a8bab51be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_a5d6578581691804c6af014b374f109806f132cb4855bf177f92681a8bab51be->leave($__internal_a5d6578581691804c6af014b374f109806f132cb4855bf177f92681a8bab51be_prof);

        
        $__internal_8e621f80e2d83b3e58028e33397894ec913d316c0fd79e62c692cd3a119296b7->leave($__internal_8e621f80e2d83b3e58028e33397894ec913d316c0fd79e62c692cd3a119296b7_prof);

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
