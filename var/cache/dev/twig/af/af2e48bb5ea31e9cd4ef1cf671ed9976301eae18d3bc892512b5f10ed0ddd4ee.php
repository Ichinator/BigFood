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
        $__internal_05d3561083960358f86437c8eee69a2bd34a8c7cc23266f99b72b297143a2c47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05d3561083960358f86437c8eee69a2bd34a8c7cc23266f99b72b297143a2c47->enter($__internal_05d3561083960358f86437c8eee69a2bd34a8c7cc23266f99b72b297143a2c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

        $__internal_4628e950775ec5a7a31ec8e93f83be6c1b4e1bee37c68b29732f8686d0f522f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4628e950775ec5a7a31ec8e93f83be6c1b4e1bee37c68b29732f8686d0f522f8->enter($__internal_4628e950775ec5a7a31ec8e93f83be6c1b4e1bee37c68b29732f8686d0f522f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_05d3561083960358f86437c8eee69a2bd34a8c7cc23266f99b72b297143a2c47->leave($__internal_05d3561083960358f86437c8eee69a2bd34a8c7cc23266f99b72b297143a2c47_prof);

        
        $__internal_4628e950775ec5a7a31ec8e93f83be6c1b4e1bee37c68b29732f8686d0f522f8->leave($__internal_4628e950775ec5a7a31ec8e93f83be6c1b4e1bee37c68b29732f8686d0f522f8_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_d66c875fd8bd8aff17a7403be30a93141c8ad47ae76a253c15d16e440fc1a051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d66c875fd8bd8aff17a7403be30a93141c8ad47ae76a253c15d16e440fc1a051->enter($__internal_d66c875fd8bd8aff17a7403be30a93141c8ad47ae76a253c15d16e440fc1a051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_8100cc79b539a1ab2de401fcea9a491aa3d55bfd74ed44332c0e1e376de25be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8100cc79b539a1ab2de401fcea9a491aa3d55bfd74ed44332c0e1e376de25be2->enter($__internal_8100cc79b539a1ab2de401fcea9a491aa3d55bfd74ed44332c0e1e376de25be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_8100cc79b539a1ab2de401fcea9a491aa3d55bfd74ed44332c0e1e376de25be2->leave($__internal_8100cc79b539a1ab2de401fcea9a491aa3d55bfd74ed44332c0e1e376de25be2_prof);

        
        $__internal_d66c875fd8bd8aff17a7403be30a93141c8ad47ae76a253c15d16e440fc1a051->leave($__internal_d66c875fd8bd8aff17a7403be30a93141c8ad47ae76a253c15d16e440fc1a051_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5a9b585bf67a7dc642b6898a0280aa3ae0c5b3452493412206956b8aa45fa00f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a9b585bf67a7dc642b6898a0280aa3ae0c5b3452493412206956b8aa45fa00f->enter($__internal_5a9b585bf67a7dc642b6898a0280aa3ae0c5b3452493412206956b8aa45fa00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_a169f957d08fdeca5a1b102fe6efcfab4a267f9a0598557662bda337151a8c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a169f957d08fdeca5a1b102fe6efcfab4a267f9a0598557662bda337151a8c01->enter($__internal_a169f957d08fdeca5a1b102fe6efcfab4a267f9a0598557662bda337151a8c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_a169f957d08fdeca5a1b102fe6efcfab4a267f9a0598557662bda337151a8c01->leave($__internal_a169f957d08fdeca5a1b102fe6efcfab4a267f9a0598557662bda337151a8c01_prof);

        
        $__internal_5a9b585bf67a7dc642b6898a0280aa3ae0c5b3452493412206956b8aa45fa00f->leave($__internal_5a9b585bf67a7dc642b6898a0280aa3ae0c5b3452493412206956b8aa45fa00f_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_1a46edb36506e2372d1d38b8681000d5099a59bd031be0d6e0816906869d2423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a46edb36506e2372d1d38b8681000d5099a59bd031be0d6e0816906869d2423->enter($__internal_1a46edb36506e2372d1d38b8681000d5099a59bd031be0d6e0816906869d2423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_3a3c5424557653377dfb97ad48bcc901497da01877bad9677ea15ebf6589421f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3c5424557653377dfb97ad48bcc901497da01877bad9677ea15ebf6589421f->enter($__internal_3a3c5424557653377dfb97ad48bcc901497da01877bad9677ea15ebf6589421f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_3a3c5424557653377dfb97ad48bcc901497da01877bad9677ea15ebf6589421f->leave($__internal_3a3c5424557653377dfb97ad48bcc901497da01877bad9677ea15ebf6589421f_prof);

        
        $__internal_1a46edb36506e2372d1d38b8681000d5099a59bd031be0d6e0816906869d2423->leave($__internal_1a46edb36506e2372d1d38b8681000d5099a59bd031be0d6e0816906869d2423_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9c187ca82bcac90158a091269cdbb4c47dfc98da5e3cae9187d00f05cf677d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c187ca82bcac90158a091269cdbb4c47dfc98da5e3cae9187d00f05cf677d83->enter($__internal_9c187ca82bcac90158a091269cdbb4c47dfc98da5e3cae9187d00f05cf677d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_d4991318c580bf3193026f636fa9a1ea8fd333f67cee730bccb0d2c7b273a4ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4991318c580bf3193026f636fa9a1ea8fd333f67cee730bccb0d2c7b273a4ad->enter($__internal_d4991318c580bf3193026f636fa9a1ea8fd333f67cee730bccb0d2c7b273a4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_d4991318c580bf3193026f636fa9a1ea8fd333f67cee730bccb0d2c7b273a4ad->leave($__internal_d4991318c580bf3193026f636fa9a1ea8fd333f67cee730bccb0d2c7b273a4ad_prof);

        
        $__internal_9c187ca82bcac90158a091269cdbb4c47dfc98da5e3cae9187d00f05cf677d83->leave($__internal_9c187ca82bcac90158a091269cdbb4c47dfc98da5e3cae9187d00f05cf677d83_prof);

    }

    // line 52
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4460e3cf6bcbd397ab541a353a2a709895c6907ffe0a9cc1a56e9c402857ca57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4460e3cf6bcbd397ab541a353a2a709895c6907ffe0a9cc1a56e9c402857ca57->enter($__internal_4460e3cf6bcbd397ab541a353a2a709895c6907ffe0a9cc1a56e9c402857ca57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_eb7736ab19677fe7178e335ade09c92024dd6f3dd8ab34b55f8e83bdfcf31388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb7736ab19677fe7178e335ade09c92024dd6f3dd8ab34b55f8e83bdfcf31388->enter($__internal_eb7736ab19677fe7178e335ade09c92024dd6f3dd8ab34b55f8e83bdfcf31388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 53
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_eb7736ab19677fe7178e335ade09c92024dd6f3dd8ab34b55f8e83bdfcf31388->leave($__internal_eb7736ab19677fe7178e335ade09c92024dd6f3dd8ab34b55f8e83bdfcf31388_prof);

        
        $__internal_4460e3cf6bcbd397ab541a353a2a709895c6907ffe0a9cc1a56e9c402857ca57->leave($__internal_4460e3cf6bcbd397ab541a353a2a709895c6907ffe0a9cc1a56e9c402857ca57_prof);

    }

    // line 56
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_dc1c186dabdb2a62c2e4524c53c040663c998c1869008a2946e665919a7ba769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc1c186dabdb2a62c2e4524c53c040663c998c1869008a2946e665919a7ba769->enter($__internal_dc1c186dabdb2a62c2e4524c53c040663c998c1869008a2946e665919a7ba769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_37b0d5adcdba535585c31b5f7eea75127dff98f331803a5fd75fea9fd99f73ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b0d5adcdba535585c31b5f7eea75127dff98f331803a5fd75fea9fd99f73ba->enter($__internal_37b0d5adcdba535585c31b5f7eea75127dff98f331803a5fd75fea9fd99f73ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 57
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_37b0d5adcdba535585c31b5f7eea75127dff98f331803a5fd75fea9fd99f73ba->leave($__internal_37b0d5adcdba535585c31b5f7eea75127dff98f331803a5fd75fea9fd99f73ba_prof);

        
        $__internal_dc1c186dabdb2a62c2e4524c53c040663c998c1869008a2946e665919a7ba769->leave($__internal_dc1c186dabdb2a62c2e4524c53c040663c998c1869008a2946e665919a7ba769_prof);

    }

    // line 60
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_2a7f41c2dddf506314f2b402add56aee885445af36a337c6d338ba1690724513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a7f41c2dddf506314f2b402add56aee885445af36a337c6d338ba1690724513->enter($__internal_2a7f41c2dddf506314f2b402add56aee885445af36a337c6d338ba1690724513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_f903177e0d69ab2b2df53cf6c1d9586de59452041705fd08bd2444c41dca91d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f903177e0d69ab2b2df53cf6c1d9586de59452041705fd08bd2444c41dca91d6->enter($__internal_f903177e0d69ab2b2df53cf6c1d9586de59452041705fd08bd2444c41dca91d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_f903177e0d69ab2b2df53cf6c1d9586de59452041705fd08bd2444c41dca91d6->leave($__internal_f903177e0d69ab2b2df53cf6c1d9586de59452041705fd08bd2444c41dca91d6_prof);

        
        $__internal_2a7f41c2dddf506314f2b402add56aee885445af36a337c6d338ba1690724513->leave($__internal_2a7f41c2dddf506314f2b402add56aee885445af36a337c6d338ba1690724513_prof);

    }

    // line 72
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_bbdfcd958ffce5831771291abf4de46c8daa9bc1ecdd51a3d9fd4a4b9843515b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbdfcd958ffce5831771291abf4de46c8daa9bc1ecdd51a3d9fd4a4b9843515b->enter($__internal_bbdfcd958ffce5831771291abf4de46c8daa9bc1ecdd51a3d9fd4a4b9843515b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_c78557b053ae5ebfdfd449748271a5883368c1723ec1e1aa926a32df3058e376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78557b053ae5ebfdfd449748271a5883368c1723ec1e1aa926a32df3058e376->enter($__internal_c78557b053ae5ebfdfd449748271a5883368c1723ec1e1aa926a32df3058e376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_c78557b053ae5ebfdfd449748271a5883368c1723ec1e1aa926a32df3058e376->leave($__internal_c78557b053ae5ebfdfd449748271a5883368c1723ec1e1aa926a32df3058e376_prof);

        
        $__internal_bbdfcd958ffce5831771291abf4de46c8daa9bc1ecdd51a3d9fd4a4b9843515b->leave($__internal_bbdfcd958ffce5831771291abf4de46c8daa9bc1ecdd51a3d9fd4a4b9843515b_prof);

    }

    // line 83
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_2c17802badd587375c4d2fe8f08d58305ff332030bff36234d74efa37337e021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c17802badd587375c4d2fe8f08d58305ff332030bff36234d74efa37337e021->enter($__internal_2c17802badd587375c4d2fe8f08d58305ff332030bff36234d74efa37337e021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_ec833442dde277ee6358ce1ca93f8f6e9df6079b13156c5d968eff476cfa1067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec833442dde277ee6358ce1ca93f8f6e9df6079b13156c5d968eff476cfa1067->enter($__internal_ec833442dde277ee6358ce1ca93f8f6e9df6079b13156c5d968eff476cfa1067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_ec833442dde277ee6358ce1ca93f8f6e9df6079b13156c5d968eff476cfa1067->leave($__internal_ec833442dde277ee6358ce1ca93f8f6e9df6079b13156c5d968eff476cfa1067_prof);

        
        $__internal_2c17802badd587375c4d2fe8f08d58305ff332030bff36234d74efa37337e021->leave($__internal_2c17802badd587375c4d2fe8f08d58305ff332030bff36234d74efa37337e021_prof);

    }

    // line 94
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_88d15efb7c6007879b818241179e4dea00c5b63236d99558ce36d60b540ccc4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88d15efb7c6007879b818241179e4dea00c5b63236d99558ce36d60b540ccc4b->enter($__internal_88d15efb7c6007879b818241179e4dea00c5b63236d99558ce36d60b540ccc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_5ec9ee95f966ae69a69148ca6514b1b0d68371d85d686e568ccbf18d28bbefe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec9ee95f966ae69a69148ca6514b1b0d68371d85d686e568ccbf18d28bbefe9->enter($__internal_5ec9ee95f966ae69a69148ca6514b1b0d68371d85d686e568ccbf18d28bbefe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_5ec9ee95f966ae69a69148ca6514b1b0d68371d85d686e568ccbf18d28bbefe9->leave($__internal_5ec9ee95f966ae69a69148ca6514b1b0d68371d85d686e568ccbf18d28bbefe9_prof);

        
        $__internal_88d15efb7c6007879b818241179e4dea00c5b63236d99558ce36d60b540ccc4b->leave($__internal_88d15efb7c6007879b818241179e4dea00c5b63236d99558ce36d60b540ccc4b_prof);

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
