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
        $__internal_b51d04d66a5f30454ab2dda3c17cb809e97a6b622e9bf1bc56f9e68e0b7b17d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51d04d66a5f30454ab2dda3c17cb809e97a6b622e9bf1bc56f9e68e0b7b17d6->enter($__internal_b51d04d66a5f30454ab2dda3c17cb809e97a6b622e9bf1bc56f9e68e0b7b17d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

        $__internal_6df95180d97f5ef517dadc28f60c1b4a563648a2855929c5d9759580a289aeb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df95180d97f5ef517dadc28f60c1b4a563648a2855929c5d9759580a289aeb5->enter($__internal_6df95180d97f5ef517dadc28f60c1b4a563648a2855929c5d9759580a289aeb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_b51d04d66a5f30454ab2dda3c17cb809e97a6b622e9bf1bc56f9e68e0b7b17d6->leave($__internal_b51d04d66a5f30454ab2dda3c17cb809e97a6b622e9bf1bc56f9e68e0b7b17d6_prof);

        
        $__internal_6df95180d97f5ef517dadc28f60c1b4a563648a2855929c5d9759580a289aeb5->leave($__internal_6df95180d97f5ef517dadc28f60c1b4a563648a2855929c5d9759580a289aeb5_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_ce5866153a44ef230de90747ad826825dc1725808e8ee5d96975dbf84d98e362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce5866153a44ef230de90747ad826825dc1725808e8ee5d96975dbf84d98e362->enter($__internal_ce5866153a44ef230de90747ad826825dc1725808e8ee5d96975dbf84d98e362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_cbdbac50dd693321b183a9df5b941473ded8515ca3c0a40ec58cf41ee0d42b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbdbac50dd693321b183a9df5b941473ded8515ca3c0a40ec58cf41ee0d42b6b->enter($__internal_cbdbac50dd693321b183a9df5b941473ded8515ca3c0a40ec58cf41ee0d42b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_cbdbac50dd693321b183a9df5b941473ded8515ca3c0a40ec58cf41ee0d42b6b->leave($__internal_cbdbac50dd693321b183a9df5b941473ded8515ca3c0a40ec58cf41ee0d42b6b_prof);

        
        $__internal_ce5866153a44ef230de90747ad826825dc1725808e8ee5d96975dbf84d98e362->leave($__internal_ce5866153a44ef230de90747ad826825dc1725808e8ee5d96975dbf84d98e362_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_147ae67fb02889f3a6bfa8ef7c55e182f514004d72db639675d368f5c4de4601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147ae67fb02889f3a6bfa8ef7c55e182f514004d72db639675d368f5c4de4601->enter($__internal_147ae67fb02889f3a6bfa8ef7c55e182f514004d72db639675d368f5c4de4601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_c5d912a9e68b901311794c9c8a9d28ae5ff5e45a0f2a2498f3bb29644702eed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d912a9e68b901311794c9c8a9d28ae5ff5e45a0f2a2498f3bb29644702eed1->enter($__internal_c5d912a9e68b901311794c9c8a9d28ae5ff5e45a0f2a2498f3bb29644702eed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_c5d912a9e68b901311794c9c8a9d28ae5ff5e45a0f2a2498f3bb29644702eed1->leave($__internal_c5d912a9e68b901311794c9c8a9d28ae5ff5e45a0f2a2498f3bb29644702eed1_prof);

        
        $__internal_147ae67fb02889f3a6bfa8ef7c55e182f514004d72db639675d368f5c4de4601->leave($__internal_147ae67fb02889f3a6bfa8ef7c55e182f514004d72db639675d368f5c4de4601_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_85de84957a82c8c3f817e4dcad3d0d33cf2d5629c2a34560728238975a88d30e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85de84957a82c8c3f817e4dcad3d0d33cf2d5629c2a34560728238975a88d30e->enter($__internal_85de84957a82c8c3f817e4dcad3d0d33cf2d5629c2a34560728238975a88d30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_ffecccfbcd57eabe5463beae16c37ad4a4c47eb230a35866d80f675f496c5cb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffecccfbcd57eabe5463beae16c37ad4a4c47eb230a35866d80f675f496c5cb1->enter($__internal_ffecccfbcd57eabe5463beae16c37ad4a4c47eb230a35866d80f675f496c5cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_ffecccfbcd57eabe5463beae16c37ad4a4c47eb230a35866d80f675f496c5cb1->leave($__internal_ffecccfbcd57eabe5463beae16c37ad4a4c47eb230a35866d80f675f496c5cb1_prof);

        
        $__internal_85de84957a82c8c3f817e4dcad3d0d33cf2d5629c2a34560728238975a88d30e->leave($__internal_85de84957a82c8c3f817e4dcad3d0d33cf2d5629c2a34560728238975a88d30e_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_be8b31b642f4a145717857c49e1fb7b02ed2e071cd6bd8c0a3addf75159b7913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be8b31b642f4a145717857c49e1fb7b02ed2e071cd6bd8c0a3addf75159b7913->enter($__internal_be8b31b642f4a145717857c49e1fb7b02ed2e071cd6bd8c0a3addf75159b7913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e2335b04a43a058a63cad55dd284fe5351239919a7952f18a194dc7269e8f29a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2335b04a43a058a63cad55dd284fe5351239919a7952f18a194dc7269e8f29a->enter($__internal_e2335b04a43a058a63cad55dd284fe5351239919a7952f18a194dc7269e8f29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_e2335b04a43a058a63cad55dd284fe5351239919a7952f18a194dc7269e8f29a->leave($__internal_e2335b04a43a058a63cad55dd284fe5351239919a7952f18a194dc7269e8f29a_prof);

        
        $__internal_be8b31b642f4a145717857c49e1fb7b02ed2e071cd6bd8c0a3addf75159b7913->leave($__internal_be8b31b642f4a145717857c49e1fb7b02ed2e071cd6bd8c0a3addf75159b7913_prof);

    }

    // line 52
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6dabb0ef3026fef80c13422708967d40b3b23473a740324761ebef46a70f30ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dabb0ef3026fef80c13422708967d40b3b23473a740324761ebef46a70f30ac->enter($__internal_6dabb0ef3026fef80c13422708967d40b3b23473a740324761ebef46a70f30ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_8aae512e6564075be0ac1348b0b882e2c1f90bc66598951e6daa3525113009f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aae512e6564075be0ac1348b0b882e2c1f90bc66598951e6daa3525113009f3->enter($__internal_8aae512e6564075be0ac1348b0b882e2c1f90bc66598951e6daa3525113009f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 53
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_8aae512e6564075be0ac1348b0b882e2c1f90bc66598951e6daa3525113009f3->leave($__internal_8aae512e6564075be0ac1348b0b882e2c1f90bc66598951e6daa3525113009f3_prof);

        
        $__internal_6dabb0ef3026fef80c13422708967d40b3b23473a740324761ebef46a70f30ac->leave($__internal_6dabb0ef3026fef80c13422708967d40b3b23473a740324761ebef46a70f30ac_prof);

    }

    // line 56
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_69c12c69b053c901456d767334e009f19d67cc6d2e856f335ee43a7bff392516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69c12c69b053c901456d767334e009f19d67cc6d2e856f335ee43a7bff392516->enter($__internal_69c12c69b053c901456d767334e009f19d67cc6d2e856f335ee43a7bff392516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_27e6f7204a5cc7dd60e93d3e79f9210c184dddd531952f42029fbc354cb096b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e6f7204a5cc7dd60e93d3e79f9210c184dddd531952f42029fbc354cb096b4->enter($__internal_27e6f7204a5cc7dd60e93d3e79f9210c184dddd531952f42029fbc354cb096b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 57
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_27e6f7204a5cc7dd60e93d3e79f9210c184dddd531952f42029fbc354cb096b4->leave($__internal_27e6f7204a5cc7dd60e93d3e79f9210c184dddd531952f42029fbc354cb096b4_prof);

        
        $__internal_69c12c69b053c901456d767334e009f19d67cc6d2e856f335ee43a7bff392516->leave($__internal_69c12c69b053c901456d767334e009f19d67cc6d2e856f335ee43a7bff392516_prof);

    }

    // line 60
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_624f0a665364cde47a7cf9c3b57032bcb971514ef2281114caba50d65d0c0259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_624f0a665364cde47a7cf9c3b57032bcb971514ef2281114caba50d65d0c0259->enter($__internal_624f0a665364cde47a7cf9c3b57032bcb971514ef2281114caba50d65d0c0259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_0075dfc63cb99b05064de9fb2b403f6ac8b8952771bee8dc6e2534395f19c7e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0075dfc63cb99b05064de9fb2b403f6ac8b8952771bee8dc6e2534395f19c7e7->enter($__internal_0075dfc63cb99b05064de9fb2b403f6ac8b8952771bee8dc6e2534395f19c7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_0075dfc63cb99b05064de9fb2b403f6ac8b8952771bee8dc6e2534395f19c7e7->leave($__internal_0075dfc63cb99b05064de9fb2b403f6ac8b8952771bee8dc6e2534395f19c7e7_prof);

        
        $__internal_624f0a665364cde47a7cf9c3b57032bcb971514ef2281114caba50d65d0c0259->leave($__internal_624f0a665364cde47a7cf9c3b57032bcb971514ef2281114caba50d65d0c0259_prof);

    }

    // line 72
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_ecf87fdfe342905544ef56215ff25344b9202cb27a159c36dc72a667752606bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf87fdfe342905544ef56215ff25344b9202cb27a159c36dc72a667752606bc->enter($__internal_ecf87fdfe342905544ef56215ff25344b9202cb27a159c36dc72a667752606bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_4b88203d250c6e9bf9ec01649b75b20c2ee55c756a9a2bdc25d92660add6f62c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b88203d250c6e9bf9ec01649b75b20c2ee55c756a9a2bdc25d92660add6f62c->enter($__internal_4b88203d250c6e9bf9ec01649b75b20c2ee55c756a9a2bdc25d92660add6f62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_4b88203d250c6e9bf9ec01649b75b20c2ee55c756a9a2bdc25d92660add6f62c->leave($__internal_4b88203d250c6e9bf9ec01649b75b20c2ee55c756a9a2bdc25d92660add6f62c_prof);

        
        $__internal_ecf87fdfe342905544ef56215ff25344b9202cb27a159c36dc72a667752606bc->leave($__internal_ecf87fdfe342905544ef56215ff25344b9202cb27a159c36dc72a667752606bc_prof);

    }

    // line 83
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_c778acf52253c0f9ad490d89ab0f4b5d031f0d559389c2170b7d237d7c2d5454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c778acf52253c0f9ad490d89ab0f4b5d031f0d559389c2170b7d237d7c2d5454->enter($__internal_c778acf52253c0f9ad490d89ab0f4b5d031f0d559389c2170b7d237d7c2d5454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_f76d0cdbdcdf5fa5684edb4d482a15d50fc585337693fc27af40ac197bc81705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76d0cdbdcdf5fa5684edb4d482a15d50fc585337693fc27af40ac197bc81705->enter($__internal_f76d0cdbdcdf5fa5684edb4d482a15d50fc585337693fc27af40ac197bc81705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_f76d0cdbdcdf5fa5684edb4d482a15d50fc585337693fc27af40ac197bc81705->leave($__internal_f76d0cdbdcdf5fa5684edb4d482a15d50fc585337693fc27af40ac197bc81705_prof);

        
        $__internal_c778acf52253c0f9ad490d89ab0f4b5d031f0d559389c2170b7d237d7c2d5454->leave($__internal_c778acf52253c0f9ad490d89ab0f4b5d031f0d559389c2170b7d237d7c2d5454_prof);

    }

    // line 94
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_8a1acf040cc4311ef04fcda429d8c842ac7add39e4f93b36a50df3faaf373b11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1acf040cc4311ef04fcda429d8c842ac7add39e4f93b36a50df3faaf373b11->enter($__internal_8a1acf040cc4311ef04fcda429d8c842ac7add39e4f93b36a50df3faaf373b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_590a44832ff0fb13badbd0cee6c1b62ff89cc86bc13fbdbc04826266da379493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_590a44832ff0fb13badbd0cee6c1b62ff89cc86bc13fbdbc04826266da379493->enter($__internal_590a44832ff0fb13badbd0cee6c1b62ff89cc86bc13fbdbc04826266da379493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_590a44832ff0fb13badbd0cee6c1b62ff89cc86bc13fbdbc04826266da379493->leave($__internal_590a44832ff0fb13badbd0cee6c1b62ff89cc86bc13fbdbc04826266da379493_prof);

        
        $__internal_8a1acf040cc4311ef04fcda429d8c842ac7add39e4f93b36a50df3faaf373b11->leave($__internal_8a1acf040cc4311ef04fcda429d8c842ac7add39e4f93b36a50df3faaf373b11_prof);

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
