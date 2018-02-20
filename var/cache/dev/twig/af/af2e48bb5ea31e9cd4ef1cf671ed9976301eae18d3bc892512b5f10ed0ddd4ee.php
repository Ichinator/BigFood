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
        $__internal_b4fcaf86a2749eb9462017a477010a867969657e05c180d5b8e55c6224ee460c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4fcaf86a2749eb9462017a477010a867969657e05c180d5b8e55c6224ee460c->enter($__internal_b4fcaf86a2749eb9462017a477010a867969657e05c180d5b8e55c6224ee460c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

        $__internal_e71f8845bd66864ae042b6d25218de708824fe858e665f28b9ab87d7fa22bc30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71f8845bd66864ae042b6d25218de708824fe858e665f28b9ab87d7fa22bc30->enter($__internal_e71f8845bd66864ae042b6d25218de708824fe858e665f28b9ab87d7fa22bc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_b4fcaf86a2749eb9462017a477010a867969657e05c180d5b8e55c6224ee460c->leave($__internal_b4fcaf86a2749eb9462017a477010a867969657e05c180d5b8e55c6224ee460c_prof);

        
        $__internal_e71f8845bd66864ae042b6d25218de708824fe858e665f28b9ab87d7fa22bc30->leave($__internal_e71f8845bd66864ae042b6d25218de708824fe858e665f28b9ab87d7fa22bc30_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_43b12efc8c9db23ad5d94c6c531999a0f08dcc7408f5025614e31fe5a3e64095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43b12efc8c9db23ad5d94c6c531999a0f08dcc7408f5025614e31fe5a3e64095->enter($__internal_43b12efc8c9db23ad5d94c6c531999a0f08dcc7408f5025614e31fe5a3e64095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_da2484a91c81ffaabad782461227c54c889b87289ff09ae920992c8bd873cba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da2484a91c81ffaabad782461227c54c889b87289ff09ae920992c8bd873cba0->enter($__internal_da2484a91c81ffaabad782461227c54c889b87289ff09ae920992c8bd873cba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_da2484a91c81ffaabad782461227c54c889b87289ff09ae920992c8bd873cba0->leave($__internal_da2484a91c81ffaabad782461227c54c889b87289ff09ae920992c8bd873cba0_prof);

        
        $__internal_43b12efc8c9db23ad5d94c6c531999a0f08dcc7408f5025614e31fe5a3e64095->leave($__internal_43b12efc8c9db23ad5d94c6c531999a0f08dcc7408f5025614e31fe5a3e64095_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c3eeb408fe6267e5eb7d9bba99bc748431b839257297738e60debf13f1a10fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3eeb408fe6267e5eb7d9bba99bc748431b839257297738e60debf13f1a10fc4->enter($__internal_c3eeb408fe6267e5eb7d9bba99bc748431b839257297738e60debf13f1a10fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_9684cf884dd6dc14a9336c1530e77694bfab57f0b656fe18bb63c79576cc34f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9684cf884dd6dc14a9336c1530e77694bfab57f0b656fe18bb63c79576cc34f2->enter($__internal_9684cf884dd6dc14a9336c1530e77694bfab57f0b656fe18bb63c79576cc34f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_9684cf884dd6dc14a9336c1530e77694bfab57f0b656fe18bb63c79576cc34f2->leave($__internal_9684cf884dd6dc14a9336c1530e77694bfab57f0b656fe18bb63c79576cc34f2_prof);

        
        $__internal_c3eeb408fe6267e5eb7d9bba99bc748431b839257297738e60debf13f1a10fc4->leave($__internal_c3eeb408fe6267e5eb7d9bba99bc748431b839257297738e60debf13f1a10fc4_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_0e660f823eaedf3047a64cd66b686d4efe1a8e8235da0b2242ff75337f4eddec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e660f823eaedf3047a64cd66b686d4efe1a8e8235da0b2242ff75337f4eddec->enter($__internal_0e660f823eaedf3047a64cd66b686d4efe1a8e8235da0b2242ff75337f4eddec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_190b678928ee3b8be16a5cd05c22089772d972de73beeb7a8d19c123895a713b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190b678928ee3b8be16a5cd05c22089772d972de73beeb7a8d19c123895a713b->enter($__internal_190b678928ee3b8be16a5cd05c22089772d972de73beeb7a8d19c123895a713b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_190b678928ee3b8be16a5cd05c22089772d972de73beeb7a8d19c123895a713b->leave($__internal_190b678928ee3b8be16a5cd05c22089772d972de73beeb7a8d19c123895a713b_prof);

        
        $__internal_0e660f823eaedf3047a64cd66b686d4efe1a8e8235da0b2242ff75337f4eddec->leave($__internal_0e660f823eaedf3047a64cd66b686d4efe1a8e8235da0b2242ff75337f4eddec_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ed8ebedf0077111ffbe58f09ed8beaa8db44234d21dd34c85a8be7982817c7b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed8ebedf0077111ffbe58f09ed8beaa8db44234d21dd34c85a8be7982817c7b2->enter($__internal_ed8ebedf0077111ffbe58f09ed8beaa8db44234d21dd34c85a8be7982817c7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_5bbd133cc406aba7fb23c611261798d97a0c3a57d696a584be00f5ddb02b607d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bbd133cc406aba7fb23c611261798d97a0c3a57d696a584be00f5ddb02b607d->enter($__internal_5bbd133cc406aba7fb23c611261798d97a0c3a57d696a584be00f5ddb02b607d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_5bbd133cc406aba7fb23c611261798d97a0c3a57d696a584be00f5ddb02b607d->leave($__internal_5bbd133cc406aba7fb23c611261798d97a0c3a57d696a584be00f5ddb02b607d_prof);

        
        $__internal_ed8ebedf0077111ffbe58f09ed8beaa8db44234d21dd34c85a8be7982817c7b2->leave($__internal_ed8ebedf0077111ffbe58f09ed8beaa8db44234d21dd34c85a8be7982817c7b2_prof);

    }

    // line 52
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_2b3ae5d17d83085d6f194b43fb28e2aaef752995397f4deeefc09db8efd664ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3ae5d17d83085d6f194b43fb28e2aaef752995397f4deeefc09db8efd664ed->enter($__internal_2b3ae5d17d83085d6f194b43fb28e2aaef752995397f4deeefc09db8efd664ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_99135763e44a184c1dfc04828bfd1c478ea04a2e1f38adb4e1d044ffbcc5a1c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99135763e44a184c1dfc04828bfd1c478ea04a2e1f38adb4e1d044ffbcc5a1c4->enter($__internal_99135763e44a184c1dfc04828bfd1c478ea04a2e1f38adb4e1d044ffbcc5a1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 53
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_99135763e44a184c1dfc04828bfd1c478ea04a2e1f38adb4e1d044ffbcc5a1c4->leave($__internal_99135763e44a184c1dfc04828bfd1c478ea04a2e1f38adb4e1d044ffbcc5a1c4_prof);

        
        $__internal_2b3ae5d17d83085d6f194b43fb28e2aaef752995397f4deeefc09db8efd664ed->leave($__internal_2b3ae5d17d83085d6f194b43fb28e2aaef752995397f4deeefc09db8efd664ed_prof);

    }

    // line 56
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_126b43fa8a28be664a2b3b001ca67fb8ebf7c2a20ba54f99a06e727aa6a0722c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_126b43fa8a28be664a2b3b001ca67fb8ebf7c2a20ba54f99a06e727aa6a0722c->enter($__internal_126b43fa8a28be664a2b3b001ca67fb8ebf7c2a20ba54f99a06e727aa6a0722c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_b966452ed1a90b1148ca0f7c6fc0a8af830f5f3274d258fc1847a3fdeba34e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b966452ed1a90b1148ca0f7c6fc0a8af830f5f3274d258fc1847a3fdeba34e29->enter($__internal_b966452ed1a90b1148ca0f7c6fc0a8af830f5f3274d258fc1847a3fdeba34e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 57
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_b966452ed1a90b1148ca0f7c6fc0a8af830f5f3274d258fc1847a3fdeba34e29->leave($__internal_b966452ed1a90b1148ca0f7c6fc0a8af830f5f3274d258fc1847a3fdeba34e29_prof);

        
        $__internal_126b43fa8a28be664a2b3b001ca67fb8ebf7c2a20ba54f99a06e727aa6a0722c->leave($__internal_126b43fa8a28be664a2b3b001ca67fb8ebf7c2a20ba54f99a06e727aa6a0722c_prof);

    }

    // line 60
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_f8adf0c681dc324cfbbb0166831dca0515f7eb2abd1ef73fc2b90d3aaf5354f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8adf0c681dc324cfbbb0166831dca0515f7eb2abd1ef73fc2b90d3aaf5354f6->enter($__internal_f8adf0c681dc324cfbbb0166831dca0515f7eb2abd1ef73fc2b90d3aaf5354f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_12c407a650a4edf6c2473fb457f9def6942728fa228d0fd9b289a1c994f9a39b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12c407a650a4edf6c2473fb457f9def6942728fa228d0fd9b289a1c994f9a39b->enter($__internal_12c407a650a4edf6c2473fb457f9def6942728fa228d0fd9b289a1c994f9a39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_12c407a650a4edf6c2473fb457f9def6942728fa228d0fd9b289a1c994f9a39b->leave($__internal_12c407a650a4edf6c2473fb457f9def6942728fa228d0fd9b289a1c994f9a39b_prof);

        
        $__internal_f8adf0c681dc324cfbbb0166831dca0515f7eb2abd1ef73fc2b90d3aaf5354f6->leave($__internal_f8adf0c681dc324cfbbb0166831dca0515f7eb2abd1ef73fc2b90d3aaf5354f6_prof);

    }

    // line 72
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_ee285d373d3880ee02d16fa2cf2b0b9e71c80beaccaed65b4b09ab40f662ee3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee285d373d3880ee02d16fa2cf2b0b9e71c80beaccaed65b4b09ab40f662ee3c->enter($__internal_ee285d373d3880ee02d16fa2cf2b0b9e71c80beaccaed65b4b09ab40f662ee3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_9c991ad8b0ce3a335737627cf51b90e72891491fbfbbf10ffec3b72333e148f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c991ad8b0ce3a335737627cf51b90e72891491fbfbbf10ffec3b72333e148f1->enter($__internal_9c991ad8b0ce3a335737627cf51b90e72891491fbfbbf10ffec3b72333e148f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_9c991ad8b0ce3a335737627cf51b90e72891491fbfbbf10ffec3b72333e148f1->leave($__internal_9c991ad8b0ce3a335737627cf51b90e72891491fbfbbf10ffec3b72333e148f1_prof);

        
        $__internal_ee285d373d3880ee02d16fa2cf2b0b9e71c80beaccaed65b4b09ab40f662ee3c->leave($__internal_ee285d373d3880ee02d16fa2cf2b0b9e71c80beaccaed65b4b09ab40f662ee3c_prof);

    }

    // line 83
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_4ab1493743ba983a0d242233873bb09a8df2912d49a29c68109410e20a2d9276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ab1493743ba983a0d242233873bb09a8df2912d49a29c68109410e20a2d9276->enter($__internal_4ab1493743ba983a0d242233873bb09a8df2912d49a29c68109410e20a2d9276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_6347911df6af1b8a5979b2474b54a412c51c532b87ffe620444689927a84eb46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6347911df6af1b8a5979b2474b54a412c51c532b87ffe620444689927a84eb46->enter($__internal_6347911df6af1b8a5979b2474b54a412c51c532b87ffe620444689927a84eb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_6347911df6af1b8a5979b2474b54a412c51c532b87ffe620444689927a84eb46->leave($__internal_6347911df6af1b8a5979b2474b54a412c51c532b87ffe620444689927a84eb46_prof);

        
        $__internal_4ab1493743ba983a0d242233873bb09a8df2912d49a29c68109410e20a2d9276->leave($__internal_4ab1493743ba983a0d242233873bb09a8df2912d49a29c68109410e20a2d9276_prof);

    }

    // line 94
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_31e9620be6e2cafddd8bc1e734437dc5b76ba0c8b630b526e6a53acca4a2bbdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31e9620be6e2cafddd8bc1e734437dc5b76ba0c8b630b526e6a53acca4a2bbdc->enter($__internal_31e9620be6e2cafddd8bc1e734437dc5b76ba0c8b630b526e6a53acca4a2bbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_f2a496972680b984440c19f7bd60f418ff750e542d4570ab14433751f2fa65a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a496972680b984440c19f7bd60f418ff750e542d4570ab14433751f2fa65a1->enter($__internal_f2a496972680b984440c19f7bd60f418ff750e542d4570ab14433751f2fa65a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_f2a496972680b984440c19f7bd60f418ff750e542d4570ab14433751f2fa65a1->leave($__internal_f2a496972680b984440c19f7bd60f418ff750e542d4570ab14433751f2fa65a1_prof);

        
        $__internal_31e9620be6e2cafddd8bc1e734437dc5b76ba0c8b630b526e6a53acca4a2bbdc->leave($__internal_31e9620be6e2cafddd8bc1e734437dc5b76ba0c8b630b526e6a53acca4a2bbdc_prof);

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
