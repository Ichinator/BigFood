<?php

/* @EasyAdmin/form/bootstrap_3_layout.html.twig */
class __TwigTemplate_cc3b01df380edc8f7933dd69d98f2a6eea9ab52c5c7056733bad96e58ae0a7b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@EasyAdmin/form/bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_rest' => array($this, 'block_easyadmin_rest'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'easyadmin_autocomplete_widget' => array($this, 'block_easyadmin_autocomplete_widget'),
                'easyadmin_autocomplete_inner_label' => array($this, 'block_easyadmin_autocomplete_inner_label'),
                'easyadmin_divider_row' => array($this, 'block_easyadmin_divider_row'),
                'easyadmin_section_row' => array($this, 'block_easyadmin_section_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0534295b608a521c4636124d4e475c8578d95b2da199fa470adb43066e977034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0534295b608a521c4636124d4e475c8578d95b2da199fa470adb43066e977034->enter($__internal_0534295b608a521c4636124d4e475c8578d95b2da199fa470adb43066e977034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        $__internal_7b263f6c2c8d5ac854e7a97e783c2fcb95a65c9503ff71dfc5521d8bef2e63be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b263f6c2c8d5ac854e7a97e783c2fcb95a65c9503ff71dfc5521d8bef2e63be->enter($__internal_7b263f6c2c8d5ac854e7a97e783c2fcb95a65c9503ff71dfc5521d8bef2e63be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('form_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('button_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('money_widget', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 106
        echo "
";
        // line 107
        $this->displayBlock('date_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('time_widget', $context, $blocks);
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 190
        echo "
";
        // line 191
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 201
        echo "
";
        // line 202
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 212
        echo "
";
        // line 214
        echo "
";
        // line 215
        $this->displayBlock('form_label', $context, $blocks);
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('choice_label', $context, $blocks);
        // line 225
        echo "
";
        // line 226
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 229
        echo "
";
        // line 230
        $this->displayBlock('radio_label', $context, $blocks);
        // line 233
        echo "
";
        // line 234
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 252
        echo "
";
        // line 254
        echo "
";
        // line 255
        $this->displayBlock('form_row', $context, $blocks);
        // line 277
        echo "
";
        // line 278
        $this->displayBlock('collection_row', $context, $blocks);
        // line 313
        echo "
";
        // line 314
        $this->displayBlock('button_row', $context, $blocks);
        // line 319
        echo "
";
        // line 320
        $this->displayBlock('choice_row', $context, $blocks);
        // line 324
        echo "
";
        // line 325
        $this->displayBlock('date_row', $context, $blocks);
        // line 329
        echo "
";
        // line 330
        $this->displayBlock('time_row', $context, $blocks);
        // line 334
        echo "
";
        // line 335
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 339
        echo "
";
        // line 340
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 346
        echo "
";
        // line 347
        $this->displayBlock('radio_row', $context, $blocks);
        // line 353
        echo "
";
        // line 355
        $this->displayBlock('form_errors', $context, $blocks);
        // line 373
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 386
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 391
        echo "
";
        // line 392
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 396
        echo "
";
        // line 397
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 418
        echo "
";
        // line 419
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 423
        echo "
";
        // line 424
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 446
        echo "
";
        // line 447
        $this->displayBlock('easyadmin_rest', $context, $blocks);
        // line 459
        echo "
";
        // line 460
        $this->displayBlock('item_actions', $context, $blocks);
        // line 487
        echo "
";
        // line 489
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 530
        echo "
";
        // line 532
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 542
        echo "
";
        // line 543
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 547
        echo "
";
        // line 549
        $this->displayBlock('easyadmin_divider_row', $context, $blocks);
        // line 554
        echo "
";
        // line 556
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
        
        $__internal_0534295b608a521c4636124d4e475c8578d95b2da199fa470adb43066e977034->leave($__internal_0534295b608a521c4636124d4e475c8578d95b2da199fa470adb43066e977034_prof);

        
        $__internal_7b263f6c2c8d5ac854e7a97e783c2fcb95a65c9503ff71dfc5521d8bef2e63be->leave($__internal_7b263f6c2c8d5ac854e7a97e783c2fcb95a65c9503ff71dfc5521d8bef2e63be_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_8b252314e2a959b1c2fc0c9cf9865cb6d386b95eecec324ae9180c5e715c630f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b252314e2a959b1c2fc0c9cf9865cb6d386b95eecec324ae9180c5e715c630f->enter($__internal_8b252314e2a959b1c2fc0c9cf9865cb6d386b95eecec324ae9180c5e715c630f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_a542d6e68b1b0940e6363b5de7e70d1c03117090a61948eabb8a27370379af48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a542d6e68b1b0940e6363b5de7e70d1c03117090a61948eabb8a27370379af48->enter($__internal_a542d6e68b1b0940e6363b5de7e70d1c03117090a61948eabb8a27370379af48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_join_filter(array(0 => (((((            // line 7
array_key_exists("_easyadmin_form_type", $context)) ? (_twig_default_filter(($context["_easyadmin_form_type"] ?? $this->getContext($context, "_easyadmin_form_type")), "")) : ("")) == "horizontal")) ? ("form-horizontal") : ("form-vertical")), 1 => (($this->getAttribute(            // line 8
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")), 2 => ($this->getAttribute(            // line 9
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "view", array()) . "-form")), " "), "data-view" => $this->getAttribute(            // line 11
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "view", array()), "data-entity" => $this->getAttribute($this->getAttribute(            // line 12
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "data-entity-id" => $this->getAttribute(            // line 13
($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
            // line 18
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
    ";
        }
        // line 21
        $this->displayParentBlock("form_start", $context, $blocks);
        // line 23
        echo "<input type=\"hidden\" name=\"referer\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>";
        
        $__internal_a542d6e68b1b0940e6363b5de7e70d1c03117090a61948eabb8a27370379af48->leave($__internal_a542d6e68b1b0940e6363b5de7e70d1c03117090a61948eabb8a27370379af48_prof);

        
        $__internal_8b252314e2a959b1c2fc0c9cf9865cb6d386b95eecec324ae9180c5e715c630f->leave($__internal_8b252314e2a959b1c2fc0c9cf9865cb6d386b95eecec324ae9180c5e715c630f_prof);

    }

    // line 28
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_78879d1918d1958c4af5500d902169d82eb195ae3b9d4b5d7bccb8da620836ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78879d1918d1958c4af5500d902169d82eb195ae3b9d4b5d7bccb8da620836ef->enter($__internal_78879d1918d1958c4af5500d902169d82eb195ae3b9d4b5d7bccb8da620836ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_79cb8ff8202eb29d8398089b0caf86da67ae73aa59d80d7ebb577e9e6061fd57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79cb8ff8202eb29d8398089b0caf86da67ae73aa59d80d7ebb577e9e6061fd57->enter($__internal_79cb8ff8202eb29d8398089b0caf86da67ae73aa59d80d7ebb577e9e6061fd57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 29
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 31
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 32
            echo "        ";
            ob_start();
            // line 33
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 36
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 46
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 48
            echo ($context["remove_item_javascript"] ?? $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_79cb8ff8202eb29d8398089b0caf86da67ae73aa59d80d7ebb577e9e6061fd57->leave($__internal_79cb8ff8202eb29d8398089b0caf86da67ae73aa59d80d7ebb577e9e6061fd57_prof);

        
        $__internal_78879d1918d1958c4af5500d902169d82eb195ae3b9d4b5d7bccb8da620836ef->leave($__internal_78879d1918d1958c4af5500d902169d82eb195ae3b9d4b5d7bccb8da620836ef_prof);

    }

    // line 56
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_36949b5f0c51188a0f2ed575eb651d22d0b165c8b5c3d94a5da150402b09bc9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36949b5f0c51188a0f2ed575eb651d22d0b165c8b5c3d94a5da150402b09bc9b->enter($__internal_36949b5f0c51188a0f2ed575eb651d22d0b165c8b5c3d94a5da150402b09bc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_bdfb5fa8f264440901971265e2d8293e6a0b918b90a4b42501f0a9c021f9cc81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdfb5fa8f264440901971265e2d8293e6a0b918b90a4b42501f0a9c021f9cc81->enter($__internal_bdfb5fa8f264440901971265e2d8293e6a0b918b90a4b42501f0a9c021f9cc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 57
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 58
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 60
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bdfb5fa8f264440901971265e2d8293e6a0b918b90a4b42501f0a9c021f9cc81->leave($__internal_bdfb5fa8f264440901971265e2d8293e6a0b918b90a4b42501f0a9c021f9cc81_prof);

        
        $__internal_36949b5f0c51188a0f2ed575eb651d22d0b165c8b5c3d94a5da150402b09bc9b->leave($__internal_36949b5f0c51188a0f2ed575eb651d22d0b165c8b5c3d94a5da150402b09bc9b_prof);

    }

    // line 63
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_cc73d74567e80561c375ce6b3b2450e3a17a20795b45f78ddc0f6e79c77da6ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc73d74567e80561c375ce6b3b2450e3a17a20795b45f78ddc0f6e79c77da6ee->enter($__internal_cc73d74567e80561c375ce6b3b2450e3a17a20795b45f78ddc0f6e79c77da6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_a740146ab0bd136ff4137e1e422e6494d3cca7b8291fab5f2a779f41d36d12cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a740146ab0bd136ff4137e1e422e6494d3cca7b8291fab5f2a779f41d36d12cb->enter($__internal_a740146ab0bd136ff4137e1e422e6494d3cca7b8291fab5f2a779f41d36d12cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 64
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 65
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_a740146ab0bd136ff4137e1e422e6494d3cca7b8291fab5f2a779f41d36d12cb->leave($__internal_a740146ab0bd136ff4137e1e422e6494d3cca7b8291fab5f2a779f41d36d12cb_prof);

        
        $__internal_cc73d74567e80561c375ce6b3b2450e3a17a20795b45f78ddc0f6e79c77da6ee->leave($__internal_cc73d74567e80561c375ce6b3b2450e3a17a20795b45f78ddc0f6e79c77da6ee_prof);

    }

    // line 68
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_ad336aba8b1bd4a16cb3f2b1f06c8a1cf5d033b3ad4ad853f47212d577f063d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad336aba8b1bd4a16cb3f2b1f06c8a1cf5d033b3ad4ad853f47212d577f063d6->enter($__internal_ad336aba8b1bd4a16cb3f2b1f06c8a1cf5d033b3ad4ad853f47212d577f063d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_c1519e2c56479116b948a63f498ebdcdab01c73abf1cc8f545fc1844e587123f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1519e2c56479116b948a63f498ebdcdab01c73abf1cc8f545fc1844e587123f->enter($__internal_c1519e2c56479116b948a63f498ebdcdab01c73abf1cc8f545fc1844e587123f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 69
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 70
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_c1519e2c56479116b948a63f498ebdcdab01c73abf1cc8f545fc1844e587123f->leave($__internal_c1519e2c56479116b948a63f498ebdcdab01c73abf1cc8f545fc1844e587123f_prof);

        
        $__internal_ad336aba8b1bd4a16cb3f2b1f06c8a1cf5d033b3ad4ad853f47212d577f063d6->leave($__internal_ad336aba8b1bd4a16cb3f2b1f06c8a1cf5d033b3ad4ad853f47212d577f063d6_prof);

    }

    // line 73
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_c08c9e1be095e4bf187a222ed86ea1b77c51ff2c5a60dafd752b7f9d27e15f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c08c9e1be095e4bf187a222ed86ea1b77c51ff2c5a60dafd752b7f9d27e15f15->enter($__internal_c08c9e1be095e4bf187a222ed86ea1b77c51ff2c5a60dafd752b7f9d27e15f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_f9d258c7e2d73ee79f4fad20ad76c7b1113d1dc7a84f733e91bed898dca0cab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d258c7e2d73ee79f4fad20ad76c7b1113d1dc7a84f733e91bed898dca0cab6->enter($__internal_f9d258c7e2d73ee79f4fad20ad76c7b1113d1dc7a84f733e91bed898dca0cab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 74
        echo "<div class=\"input-group\">
        ";
        // line 75
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 76
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 77
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 79
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 80
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 81
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 83
        echo "    </div>";
        
        $__internal_f9d258c7e2d73ee79f4fad20ad76c7b1113d1dc7a84f733e91bed898dca0cab6->leave($__internal_f9d258c7e2d73ee79f4fad20ad76c7b1113d1dc7a84f733e91bed898dca0cab6_prof);

        
        $__internal_c08c9e1be095e4bf187a222ed86ea1b77c51ff2c5a60dafd752b7f9d27e15f15->leave($__internal_c08c9e1be095e4bf187a222ed86ea1b77c51ff2c5a60dafd752b7f9d27e15f15_prof);

    }

    // line 86
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_1b1bf7cf57ef8ec629778973a2d9c3338c0705769f0ebbad76f6e24e8211996e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b1bf7cf57ef8ec629778973a2d9c3338c0705769f0ebbad76f6e24e8211996e->enter($__internal_1b1bf7cf57ef8ec629778973a2d9c3338c0705769f0ebbad76f6e24e8211996e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_98eb5a2ae991873c06e97ffe6dc55b6e9a3ce91a9081f5b09a1b25ff71f2a97b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98eb5a2ae991873c06e97ffe6dc55b6e9a3ce91a9081f5b09a1b25ff71f2a97b->enter($__internal_98eb5a2ae991873c06e97ffe6dc55b6e9a3ce91a9081f5b09a1b25ff71f2a97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 87
        echo "<div class=\"input-group\">";
        // line 88
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 89
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_98eb5a2ae991873c06e97ffe6dc55b6e9a3ce91a9081f5b09a1b25ff71f2a97b->leave($__internal_98eb5a2ae991873c06e97ffe6dc55b6e9a3ce91a9081f5b09a1b25ff71f2a97b_prof);

        
        $__internal_1b1bf7cf57ef8ec629778973a2d9c3338c0705769f0ebbad76f6e24e8211996e->leave($__internal_1b1bf7cf57ef8ec629778973a2d9c3338c0705769f0ebbad76f6e24e8211996e_prof);

    }

    // line 93
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_4c6bbecc8b2bd91a153a20576196f38f692ba226f383acae8e50909d5de1cf34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c6bbecc8b2bd91a153a20576196f38f692ba226f383acae8e50909d5de1cf34->enter($__internal_4c6bbecc8b2bd91a153a20576196f38f692ba226f383acae8e50909d5de1cf34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_156324f0c5b2181966513dcccf0fbf410cb51d3215bdc7faea445e06e30b4d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156324f0c5b2181966513dcccf0fbf410cb51d3215bdc7faea445e06e30b4d1b->enter($__internal_156324f0c5b2181966513dcccf0fbf410cb51d3215bdc7faea445e06e30b4d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 94
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 95
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 97
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 98
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 99
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 100
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 102
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 103
            echo "</div>";
        }
        
        $__internal_156324f0c5b2181966513dcccf0fbf410cb51d3215bdc7faea445e06e30b4d1b->leave($__internal_156324f0c5b2181966513dcccf0fbf410cb51d3215bdc7faea445e06e30b4d1b_prof);

        
        $__internal_4c6bbecc8b2bd91a153a20576196f38f692ba226f383acae8e50909d5de1cf34->leave($__internal_4c6bbecc8b2bd91a153a20576196f38f692ba226f383acae8e50909d5de1cf34_prof);

    }

    // line 107
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_74e860ff32bc20d0c7d07efc326ca8e53a5ace699c68712e813eb6b9f73163d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74e860ff32bc20d0c7d07efc326ca8e53a5ace699c68712e813eb6b9f73163d9->enter($__internal_74e860ff32bc20d0c7d07efc326ca8e53a5ace699c68712e813eb6b9f73163d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_f1a14d50552fca5cc1ed37eff71f191256609654838b94c59634971469cd7f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a14d50552fca5cc1ed37eff71f191256609654838b94c59634971469cd7f97->enter($__internal_f1a14d50552fca5cc1ed37eff71f191256609654838b94c59634971469cd7f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 108
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 109
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 111
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 112
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 113
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 115
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 116
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 117
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 118
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 120
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 121
                echo "</div>";
            }
        }
        
        $__internal_f1a14d50552fca5cc1ed37eff71f191256609654838b94c59634971469cd7f97->leave($__internal_f1a14d50552fca5cc1ed37eff71f191256609654838b94c59634971469cd7f97_prof);

        
        $__internal_74e860ff32bc20d0c7d07efc326ca8e53a5ace699c68712e813eb6b9f73163d9->leave($__internal_74e860ff32bc20d0c7d07efc326ca8e53a5ace699c68712e813eb6b9f73163d9_prof);

    }

    // line 126
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_365d7b8c1d492e433c19ebd5e031b2671ef246af474a5d848c67e586c94f078f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_365d7b8c1d492e433c19ebd5e031b2671ef246af474a5d848c67e586c94f078f->enter($__internal_365d7b8c1d492e433c19ebd5e031b2671ef246af474a5d848c67e586c94f078f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_27e73ef704eac727620ca99814d72be168684753ff9f0525492cda5ce1c89f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e73ef704eac727620ca99814d72be168684753ff9f0525492cda5ce1c89f7c->enter($__internal_27e73ef704eac727620ca99814d72be168684753ff9f0525492cda5ce1c89f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 127
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 128
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 130
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 131
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 132
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 134
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 135
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 136
                echo "</div>";
            }
        }
        
        $__internal_27e73ef704eac727620ca99814d72be168684753ff9f0525492cda5ce1c89f7c->leave($__internal_27e73ef704eac727620ca99814d72be168684753ff9f0525492cda5ce1c89f7c_prof);

        
        $__internal_365d7b8c1d492e433c19ebd5e031b2671ef246af474a5d848c67e586c94f078f->leave($__internal_365d7b8c1d492e433c19ebd5e031b2671ef246af474a5d848c67e586c94f078f_prof);

    }

    // line 141
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_0990be19bb14947538392033bf83ee0cf4f4cbae0f02ad5c9bb75f86a572798f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0990be19bb14947538392033bf83ee0cf4f4cbae0f02ad5c9bb75f86a572798f->enter($__internal_0990be19bb14947538392033bf83ee0cf4f4cbae0f02ad5c9bb75f86a572798f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_d8b50ffbcb04e2475cb4c750173635a2101d720d46d1897599727a033e10f0b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b50ffbcb04e2475cb4c750173635a2101d720d46d1897599727a033e10f0b7->enter($__internal_d8b50ffbcb04e2475cb4c750173635a2101d720d46d1897599727a033e10f0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 142
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 143
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 144
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 145
            echo "        ";
            ob_start();
            // line 146
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 149
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 159
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 161
            echo ($context["remove_item_javascript"] ?? $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_d8b50ffbcb04e2475cb4c750173635a2101d720d46d1897599727a033e10f0b7->leave($__internal_d8b50ffbcb04e2475cb4c750173635a2101d720d46d1897599727a033e10f0b7_prof);

        
        $__internal_0990be19bb14947538392033bf83ee0cf4f4cbae0f02ad5c9bb75f86a572798f->leave($__internal_0990be19bb14947538392033bf83ee0cf4f4cbae0f02ad5c9bb75f86a572798f_prof);

    }

    // line 169
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_642f883705e58ba2daaf69e3db7ccf79bbbfeda33927a00f39e96a2fca43e4a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_642f883705e58ba2daaf69e3db7ccf79bbbfeda33927a00f39e96a2fca43e4a7->enter($__internal_642f883705e58ba2daaf69e3db7ccf79bbbfeda33927a00f39e96a2fca43e4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_bfc8f57139f756788129fa46538fd003f6e3f3d67acb4c51db0708f83475a446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc8f57139f756788129fa46538fd003f6e3f3d67acb4c51db0708f83475a446->enter($__internal_bfc8f57139f756788129fa46538fd003f6e3f3d67acb4c51db0708f83475a446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 170
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 171
            echo "<div class=\"control-group\">";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 173
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 174
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 175
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "</div>";
        } else {
            // line 180
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 182
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 183
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 184
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "</div>";
        }
        
        $__internal_bfc8f57139f756788129fa46538fd003f6e3f3d67acb4c51db0708f83475a446->leave($__internal_bfc8f57139f756788129fa46538fd003f6e3f3d67acb4c51db0708f83475a446_prof);

        
        $__internal_642f883705e58ba2daaf69e3db7ccf79bbbfeda33927a00f39e96a2fca43e4a7->leave($__internal_642f883705e58ba2daaf69e3db7ccf79bbbfeda33927a00f39e96a2fca43e4a7_prof);

    }

    // line 191
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_3b3500452ca80381a46e0356233bc4d27480248cea6e4c1db95c342030fe9399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3500452ca80381a46e0356233bc4d27480248cea6e4c1db95c342030fe9399->enter($__internal_3b3500452ca80381a46e0356233bc4d27480248cea6e4c1db95c342030fe9399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6a2768eea8788a8701c0947081a5a9224256aa125758e92ab4d6bb4dbf68aa40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2768eea8788a8701c0947081a5a9224256aa125758e92ab4d6bb4dbf68aa40->enter($__internal_6a2768eea8788a8701c0947081a5a9224256aa125758e92ab4d6bb4dbf68aa40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 192
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 193
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 194
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 196
            echo "<div class=\"checkbox\">";
            // line 197
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 198
            echo "</div>";
        }
        
        $__internal_6a2768eea8788a8701c0947081a5a9224256aa125758e92ab4d6bb4dbf68aa40->leave($__internal_6a2768eea8788a8701c0947081a5a9224256aa125758e92ab4d6bb4dbf68aa40_prof);

        
        $__internal_3b3500452ca80381a46e0356233bc4d27480248cea6e4c1db95c342030fe9399->leave($__internal_3b3500452ca80381a46e0356233bc4d27480248cea6e4c1db95c342030fe9399_prof);

    }

    // line 202
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_c2cbba3c5cfbe0c1b8c07a4d656f1b0f822470bb18deca563f96d5b06800e657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2cbba3c5cfbe0c1b8c07a4d656f1b0f822470bb18deca563f96d5b06800e657->enter($__internal_c2cbba3c5cfbe0c1b8c07a4d656f1b0f822470bb18deca563f96d5b06800e657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_621a0763a7583c53a3ded80b8898a5062e1d2378494869890127ab117f99ca8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_621a0763a7583c53a3ded80b8898a5062e1d2378494869890127ab117f99ca8c->enter($__internal_621a0763a7583c53a3ded80b8898a5062e1d2378494869890127ab117f99ca8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 203
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 204
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 205
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 207
            echo "<div class=\"radio\">";
            // line 208
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 209
            echo "</div>";
        }
        
        $__internal_621a0763a7583c53a3ded80b8898a5062e1d2378494869890127ab117f99ca8c->leave($__internal_621a0763a7583c53a3ded80b8898a5062e1d2378494869890127ab117f99ca8c_prof);

        
        $__internal_c2cbba3c5cfbe0c1b8c07a4d656f1b0f822470bb18deca563f96d5b06800e657->leave($__internal_c2cbba3c5cfbe0c1b8c07a4d656f1b0f822470bb18deca563f96d5b06800e657_prof);

    }

    // line 215
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_f79e79bd74012c47c2790b55dff0d9a2c04640860e73d5ab08d2835b9c0eeb0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f79e79bd74012c47c2790b55dff0d9a2c04640860e73d5ab08d2835b9c0eeb0c->enter($__internal_f79e79bd74012c47c2790b55dff0d9a2c04640860e73d5ab08d2835b9c0eeb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_0d878c4f486ee310aca5485f7c2d54a36e70d2fe76f87488edf6b504641cb7b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d878c4f486ee310aca5485f7c2d54a36e70d2fe76f87488edf6b504641cb7b5->enter($__internal_0d878c4f486ee310aca5485f7c2d54a36e70d2fe76f87488edf6b504641cb7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 216
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 217
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_0d878c4f486ee310aca5485f7c2d54a36e70d2fe76f87488edf6b504641cb7b5->leave($__internal_0d878c4f486ee310aca5485f7c2d54a36e70d2fe76f87488edf6b504641cb7b5_prof);

        
        $__internal_f79e79bd74012c47c2790b55dff0d9a2c04640860e73d5ab08d2835b9c0eeb0c->leave($__internal_f79e79bd74012c47c2790b55dff0d9a2c04640860e73d5ab08d2835b9c0eeb0c_prof);

    }

    // line 220
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_999c722541c097c87b063858a57540dff0c5c2ddb1756d399063031c63894664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_999c722541c097c87b063858a57540dff0c5c2ddb1756d399063031c63894664->enter($__internal_999c722541c097c87b063858a57540dff0c5c2ddb1756d399063031c63894664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_e001db3a9673035f69683ba3826afd3295bf9dd879cd3bed480ab9825d56d8e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e001db3a9673035f69683ba3826afd3295bf9dd879cd3bed480ab9825d56d8e5->enter($__internal_e001db3a9673035f69683ba3826afd3295bf9dd879cd3bed480ab9825d56d8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 222
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 223
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_e001db3a9673035f69683ba3826afd3295bf9dd879cd3bed480ab9825d56d8e5->leave($__internal_e001db3a9673035f69683ba3826afd3295bf9dd879cd3bed480ab9825d56d8e5_prof);

        
        $__internal_999c722541c097c87b063858a57540dff0c5c2ddb1756d399063031c63894664->leave($__internal_999c722541c097c87b063858a57540dff0c5c2ddb1756d399063031c63894664_prof);

    }

    // line 226
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_3383bd06678c09e6fab90b124af730c161b2d9588cd19f85748488faff3ba2f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3383bd06678c09e6fab90b124af730c161b2d9588cd19f85748488faff3ba2f8->enter($__internal_3383bd06678c09e6fab90b124af730c161b2d9588cd19f85748488faff3ba2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_b78cac5d1802c5ac8aee4224e72cd0724616b6c60b3d171425309e0bac6c3edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b78cac5d1802c5ac8aee4224e72cd0724616b6c60b3d171425309e0bac6c3edb->enter($__internal_b78cac5d1802c5ac8aee4224e72cd0724616b6c60b3d171425309e0bac6c3edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 227
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_b78cac5d1802c5ac8aee4224e72cd0724616b6c60b3d171425309e0bac6c3edb->leave($__internal_b78cac5d1802c5ac8aee4224e72cd0724616b6c60b3d171425309e0bac6c3edb_prof);

        
        $__internal_3383bd06678c09e6fab90b124af730c161b2d9588cd19f85748488faff3ba2f8->leave($__internal_3383bd06678c09e6fab90b124af730c161b2d9588cd19f85748488faff3ba2f8_prof);

    }

    // line 230
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_5894a74a82b97ff4e620f64b68d8f46ad1a1113fa8097ec29d02c0f5e5a15e22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5894a74a82b97ff4e620f64b68d8f46ad1a1113fa8097ec29d02c0f5e5a15e22->enter($__internal_5894a74a82b97ff4e620f64b68d8f46ad1a1113fa8097ec29d02c0f5e5a15e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_1b39b70eb44a0931e10c05514eb2f793e80851d2a532f3eb3d280acc7c134e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b39b70eb44a0931e10c05514eb2f793e80851d2a532f3eb3d280acc7c134e6c->enter($__internal_1b39b70eb44a0931e10c05514eb2f793e80851d2a532f3eb3d280acc7c134e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 231
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_1b39b70eb44a0931e10c05514eb2f793e80851d2a532f3eb3d280acc7c134e6c->leave($__internal_1b39b70eb44a0931e10c05514eb2f793e80851d2a532f3eb3d280acc7c134e6c_prof);

        
        $__internal_5894a74a82b97ff4e620f64b68d8f46ad1a1113fa8097ec29d02c0f5e5a15e22->leave($__internal_5894a74a82b97ff4e620f64b68d8f46ad1a1113fa8097ec29d02c0f5e5a15e22_prof);

    }

    // line 234
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_c7b7e20257c08e1337a921b53e9cfaa62efc8b1367a3da8d964a8d1cd6c0247f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7b7e20257c08e1337a921b53e9cfaa62efc8b1367a3da8d964a8d1cd6c0247f->enter($__internal_c7b7e20257c08e1337a921b53e9cfaa62efc8b1367a3da8d964a8d1cd6c0247f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_06e563ee16d4dbde8094f6a328e1e6d863cd348bdcd4a6aabfd17129dca50004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e563ee16d4dbde8094f6a328e1e6d863cd348bdcd4a6aabfd17129dca50004->enter($__internal_06e563ee16d4dbde8094f6a328e1e6d863cd348bdcd4a6aabfd17129dca50004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 235
        echo "    ";
        // line 236
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 237
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 238
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 239
                echo "        ";
            }
            // line 240
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 241
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 242
                echo "        ";
            }
            // line 243
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 244
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                // line 245
                echo "        ";
            }
            // line 246
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 247
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            // line 248
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ((($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))) ? (($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))) : ($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()))))) : ("")), "html", null, true);
            // line 249
            echo "</label>
    ";
        }
        
        $__internal_06e563ee16d4dbde8094f6a328e1e6d863cd348bdcd4a6aabfd17129dca50004->leave($__internal_06e563ee16d4dbde8094f6a328e1e6d863cd348bdcd4a6aabfd17129dca50004_prof);

        
        $__internal_c7b7e20257c08e1337a921b53e9cfaa62efc8b1367a3da8d964a8d1cd6c0247f->leave($__internal_c7b7e20257c08e1337a921b53e9cfaa62efc8b1367a3da8d964a8d1cd6c0247f_prof);

    }

    // line 255
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f829e0eec93d4039e49d061386432eb0e20c0a01e665e90eadbb3dca9460e4c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f829e0eec93d4039e49d061386432eb0e20c0a01e665e90eadbb3dca9460e4c3->enter($__internal_f829e0eec93d4039e49d061386432eb0e20c0a01e665e90eadbb3dca9460e4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6c894dcc4c261333423b504fcdaa1cfc4fe4cdc836a77389ef9a976ad09afbcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c894dcc4c261333423b504fcdaa1cfc4fe4cdc836a77389ef9a976ad09afbcf->enter($__internal_6c894dcc4c261333423b504fcdaa1cfc4fe4cdc836a77389ef9a976ad09afbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 256
        $context["_field_type"] = (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 257
        echo "    <div class=\"form-group ";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 258
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 261
        if ((twig_in_filter(($context["_field_type"] ?? $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "date", 2 => "time", 3 => "birthday")) && (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 262
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 264
            if ((null === ($context["data"] ?? $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 265
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 272
        if (((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 273
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()));
            echo "</span>
        ";
        }
        // line 275
        echo "    </div>";
        
        $__internal_6c894dcc4c261333423b504fcdaa1cfc4fe4cdc836a77389ef9a976ad09afbcf->leave($__internal_6c894dcc4c261333423b504fcdaa1cfc4fe4cdc836a77389ef9a976ad09afbcf_prof);

        
        $__internal_f829e0eec93d4039e49d061386432eb0e20c0a01e665e90eadbb3dca9460e4c3->leave($__internal_f829e0eec93d4039e49d061386432eb0e20c0a01e665e90eadbb3dca9460e4c3_prof);

    }

    // line 278
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_22fc2095dddbe46af3284a7e652e8793e753f3918a805a1b07b1a806066b5a19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22fc2095dddbe46af3284a7e652e8793e753f3918a805a1b07b1a806066b5a19->enter($__internal_22fc2095dddbe46af3284a7e652e8793e753f3918a805a1b07b1a806066b5a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        $__internal_c39ec8e4353cbfd59b8a5957e4f8b638d08edadbef048cc7ec04aa2e0b983ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c39ec8e4353cbfd59b8a5957e4f8b638d08edadbef048cc7ec04aa2e0b983ec3->enter($__internal_c39ec8e4353cbfd59b8a5957e4f8b638d08edadbef048cc7ec04aa2e0b983ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        // line 279
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 281
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter(($context["allow_add"] ?? $this->getContext($context, "allow_add")), false)) : (false))) {
            // line 282
            echo "        ";
            ob_start();
            // line 283
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 286
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 294
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 295
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 304
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 306
            echo ($context["js_add_item"] ?? $this->getContext($context, "js_add_item"));
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 308
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((((twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_c39ec8e4353cbfd59b8a5957e4f8b638d08edadbef048cc7ec04aa2e0b983ec3->leave($__internal_c39ec8e4353cbfd59b8a5957e4f8b638d08edadbef048cc7ec04aa2e0b983ec3_prof);

        
        $__internal_22fc2095dddbe46af3284a7e652e8793e753f3918a805a1b07b1a806066b5a19->leave($__internal_22fc2095dddbe46af3284a7e652e8793e753f3918a805a1b07b1a806066b5a19_prof);

    }

    // line 314
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_9280ff6155ef68f3fdfe1f7f83e27a3b065cb1bbad28818b533b8dfd2915d790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9280ff6155ef68f3fdfe1f7f83e27a3b065cb1bbad28818b533b8dfd2915d790->enter($__internal_9280ff6155ef68f3fdfe1f7f83e27a3b065cb1bbad28818b533b8dfd2915d790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_ef75b2940876b2e90796a2680ae3f365041ca0549e44c3c559c67f75c8823b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef75b2940876b2e90796a2680ae3f365041ca0549e44c3c559c67f75c8823b3c->enter($__internal_ef75b2940876b2e90796a2680ae3f365041ca0549e44c3c559c67f75c8823b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 315
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 316
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 317
        echo "</div>";
        
        $__internal_ef75b2940876b2e90796a2680ae3f365041ca0549e44c3c559c67f75c8823b3c->leave($__internal_ef75b2940876b2e90796a2680ae3f365041ca0549e44c3c559c67f75c8823b3c_prof);

        
        $__internal_9280ff6155ef68f3fdfe1f7f83e27a3b065cb1bbad28818b533b8dfd2915d790->leave($__internal_9280ff6155ef68f3fdfe1f7f83e27a3b065cb1bbad28818b533b8dfd2915d790_prof);

    }

    // line 320
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_9c13c48e99e828ba6fe016e0323a2d20fe8259fb43ccbce7eec76ffed0809e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c13c48e99e828ba6fe016e0323a2d20fe8259fb43ccbce7eec76ffed0809e96->enter($__internal_9c13c48e99e828ba6fe016e0323a2d20fe8259fb43ccbce7eec76ffed0809e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_288a30ee60050e7aaee8b8c9b79c08b4355b1bc465bc88641f565bc1a37c6ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288a30ee60050e7aaee8b8c9b79c08b4355b1bc465bc88641f565bc1a37c6ef1->enter($__internal_288a30ee60050e7aaee8b8c9b79c08b4355b1bc465bc88641f565bc1a37c6ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 321
        $context["force_error"] = true;
        // line 322
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_288a30ee60050e7aaee8b8c9b79c08b4355b1bc465bc88641f565bc1a37c6ef1->leave($__internal_288a30ee60050e7aaee8b8c9b79c08b4355b1bc465bc88641f565bc1a37c6ef1_prof);

        
        $__internal_9c13c48e99e828ba6fe016e0323a2d20fe8259fb43ccbce7eec76ffed0809e96->leave($__internal_9c13c48e99e828ba6fe016e0323a2d20fe8259fb43ccbce7eec76ffed0809e96_prof);

    }

    // line 325
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_f6ada121ec0237108197c83fd1a5eaa0155bc062e98bb773a5acec15d4892128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ada121ec0237108197c83fd1a5eaa0155bc062e98bb773a5acec15d4892128->enter($__internal_f6ada121ec0237108197c83fd1a5eaa0155bc062e98bb773a5acec15d4892128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_d53e11b50d461235b1987e063a86ed801465905daccaa3e005d5cd8f7a7651ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53e11b50d461235b1987e063a86ed801465905daccaa3e005d5cd8f7a7651ee->enter($__internal_d53e11b50d461235b1987e063a86ed801465905daccaa3e005d5cd8f7a7651ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 326
        $context["force_error"] = true;
        // line 327
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d53e11b50d461235b1987e063a86ed801465905daccaa3e005d5cd8f7a7651ee->leave($__internal_d53e11b50d461235b1987e063a86ed801465905daccaa3e005d5cd8f7a7651ee_prof);

        
        $__internal_f6ada121ec0237108197c83fd1a5eaa0155bc062e98bb773a5acec15d4892128->leave($__internal_f6ada121ec0237108197c83fd1a5eaa0155bc062e98bb773a5acec15d4892128_prof);

    }

    // line 330
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_0f1a7331ac146a578e74094503c5e3820ce42e2cd868f5befd400188e5cde2da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f1a7331ac146a578e74094503c5e3820ce42e2cd868f5befd400188e5cde2da->enter($__internal_0f1a7331ac146a578e74094503c5e3820ce42e2cd868f5befd400188e5cde2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_129f8731f5f6da406629c5412999b1d48bdd860306a89c34fd786466de2759a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129f8731f5f6da406629c5412999b1d48bdd860306a89c34fd786466de2759a6->enter($__internal_129f8731f5f6da406629c5412999b1d48bdd860306a89c34fd786466de2759a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 331
        $context["force_error"] = true;
        // line 332
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_129f8731f5f6da406629c5412999b1d48bdd860306a89c34fd786466de2759a6->leave($__internal_129f8731f5f6da406629c5412999b1d48bdd860306a89c34fd786466de2759a6_prof);

        
        $__internal_0f1a7331ac146a578e74094503c5e3820ce42e2cd868f5befd400188e5cde2da->leave($__internal_0f1a7331ac146a578e74094503c5e3820ce42e2cd868f5befd400188e5cde2da_prof);

    }

    // line 335
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_2e99bd052cd6823bca9750d877ed18f13b384d3ef4d5165d4ac964c7338cc369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e99bd052cd6823bca9750d877ed18f13b384d3ef4d5165d4ac964c7338cc369->enter($__internal_2e99bd052cd6823bca9750d877ed18f13b384d3ef4d5165d4ac964c7338cc369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_936ac0ecf7816099040731c2a336c7e803cd892c4762b3c2fd02d384751ccf46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_936ac0ecf7816099040731c2a336c7e803cd892c4762b3c2fd02d384751ccf46->enter($__internal_936ac0ecf7816099040731c2a336c7e803cd892c4762b3c2fd02d384751ccf46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 336
        $context["force_error"] = true;
        // line 337
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_936ac0ecf7816099040731c2a336c7e803cd892c4762b3c2fd02d384751ccf46->leave($__internal_936ac0ecf7816099040731c2a336c7e803cd892c4762b3c2fd02d384751ccf46_prof);

        
        $__internal_2e99bd052cd6823bca9750d877ed18f13b384d3ef4d5165d4ac964c7338cc369->leave($__internal_2e99bd052cd6823bca9750d877ed18f13b384d3ef4d5165d4ac964c7338cc369_prof);

    }

    // line 340
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_837648c33420252d1e1e86249f6480802b22a1a6842c3c0940e0df3ad7d89bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_837648c33420252d1e1e86249f6480802b22a1a6842c3c0940e0df3ad7d89bad->enter($__internal_837648c33420252d1e1e86249f6480802b22a1a6842c3c0940e0df3ad7d89bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_a8e9f78f9e872f9914e52bd7beab7ddb9e116673f782c08ff688583ef3f2fd7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e9f78f9e872f9914e52bd7beab7ddb9e116673f782c08ff688583ef3f2fd7f->enter($__internal_a8e9f78f9e872f9914e52bd7beab7ddb9e116673f782c08ff688583ef3f2fd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 341
        echo "<div class=\"form-group ";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 342
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 343
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 344
        echo "</div>";
        
        $__internal_a8e9f78f9e872f9914e52bd7beab7ddb9e116673f782c08ff688583ef3f2fd7f->leave($__internal_a8e9f78f9e872f9914e52bd7beab7ddb9e116673f782c08ff688583ef3f2fd7f_prof);

        
        $__internal_837648c33420252d1e1e86249f6480802b22a1a6842c3c0940e0df3ad7d89bad->leave($__internal_837648c33420252d1e1e86249f6480802b22a1a6842c3c0940e0df3ad7d89bad_prof);

    }

    // line 347
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_403d4fa81cc60a4089a53c69bdc1306a726969233feb876d7423d5bd0ee45215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_403d4fa81cc60a4089a53c69bdc1306a726969233feb876d7423d5bd0ee45215->enter($__internal_403d4fa81cc60a4089a53c69bdc1306a726969233feb876d7423d5bd0ee45215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_7f37dac0eddc2d56aba080ba68f88661327cbc1d58ab594d7df9e7ed77987c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f37dac0eddc2d56aba080ba68f88661327cbc1d58ab594d7df9e7ed77987c3a->enter($__internal_7f37dac0eddc2d56aba080ba68f88661327cbc1d58ab594d7df9e7ed77987c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 348
        echo "<div class=\"form-group ";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 349
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 350
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 351
        echo "</div>";
        
        $__internal_7f37dac0eddc2d56aba080ba68f88661327cbc1d58ab594d7df9e7ed77987c3a->leave($__internal_7f37dac0eddc2d56aba080ba68f88661327cbc1d58ab594d7df9e7ed77987c3a_prof);

        
        $__internal_403d4fa81cc60a4089a53c69bdc1306a726969233feb876d7423d5bd0ee45215->leave($__internal_403d4fa81cc60a4089a53c69bdc1306a726969233feb876d7423d5bd0ee45215_prof);

    }

    // line 355
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_fc5977c87373b50e6076094b9198d80d09a1d743106c9b3ae255871d12762455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc5977c87373b50e6076094b9198d80d09a1d743106c9b3ae255871d12762455->enter($__internal_fc5977c87373b50e6076094b9198d80d09a1d743106c9b3ae255871d12762455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_33330edc454c2c3250185cd205100a0958d60e27b5b0d8d6aa7b1e8d1c231f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33330edc454c2c3250185cd205100a0958d60e27b5b0d8d6aa7b1e8d1c231f22->enter($__internal_33330edc454c2c3250185cd205100a0958d60e27b5b0d8d6aa7b1e8d1c231f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 356
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors")));
        // line 357
        echo "    ";
        if ((($context["error_count"] ?? $this->getContext($context, "error_count")) >= 1)) {
            // line 358
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 359
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", ($context["error_count"] ?? $this->getContext($context, "error_count")), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 360
            if ((($context["error_count"] ?? $this->getContext($context, "error_count")) == 1)) {
                // line 361
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 363
                echo "                <ul>
                    ";
                // line 364
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 365
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 367
                echo "                </ul>
            ";
            }
            // line 369
            echo "        </div>
    ";
        }
        
        $__internal_33330edc454c2c3250185cd205100a0958d60e27b5b0d8d6aa7b1e8d1c231f22->leave($__internal_33330edc454c2c3250185cd205100a0958d60e27b5b0d8d6aa7b1e8d1c231f22_prof);

        
        $__internal_fc5977c87373b50e6076094b9198d80d09a1d743106c9b3ae255871d12762455->leave($__internal_fc5977c87373b50e6076094b9198d80d09a1d743106c9b3ae255871d12762455_prof);

    }

    // line 373
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_430593c18bd34d36f92316daeffe60d8d6fffcdd98e6504ad223a3379f5f27f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_430593c18bd34d36f92316daeffe60d8d6fffcdd98e6504ad223a3379f5f27f5->enter($__internal_430593c18bd34d36f92316daeffe60d8d6fffcdd98e6504ad223a3379f5f27f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_06170d566e00d033e80dbd5c8d8331129d0dd92ef588ad45c8214eb1fc1ee305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06170d566e00d033e80dbd5c8d8331129d0dd92ef588ad45c8214eb1fc1ee305->enter($__internal_06170d566e00d033e80dbd5c8d8331129d0dd92ef588ad45c8214eb1fc1ee305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 376
        echo "    ";
        if ((twig_test_iterable(($context["value"] ?? $this->getContext($context, "value"))) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
            // line 377
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 379
        echo "    ";
        if (((twig_test_iterable(($context["value"] ?? $this->getContext($context, "value"))) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) || $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 380
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)));
            // line 381
            echo "    ";
        }
        // line 382
        echo "
    ";
        // line 383
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        
        $__internal_06170d566e00d033e80dbd5c8d8331129d0dd92ef588ad45c8214eb1fc1ee305->leave($__internal_06170d566e00d033e80dbd5c8d8331129d0dd92ef588ad45c8214eb1fc1ee305_prof);

        
        $__internal_430593c18bd34d36f92316daeffe60d8d6fffcdd98e6504ad223a3379f5f27f5->leave($__internal_430593c18bd34d36f92316daeffe60d8d6fffcdd98e6504ad223a3379f5f27f5_prof);

    }

    // line 386
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_cb4fcdef0187867fb5946c3af07a78b05faacffe79ad9ae2434ed6070f9266a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb4fcdef0187867fb5946c3af07a78b05faacffe79ad9ae2434ed6070f9266a3->enter($__internal_cb4fcdef0187867fb5946c3af07a78b05faacffe79ad9ae2434ed6070f9266a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        $__internal_568f390bafd094e899dd7a035160e2b923719d5445f1d640ff2ad4ab8eef11f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568f390bafd094e899dd7a035160e2b923719d5445f1d640ff2ad4ab8eef11f2->enter($__internal_568f390bafd094e899dd7a035160e2b923719d5445f1d640ff2ad4ab8eef11f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 387
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 388
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
        
        $__internal_568f390bafd094e899dd7a035160e2b923719d5445f1d640ff2ad4ab8eef11f2->leave($__internal_568f390bafd094e899dd7a035160e2b923719d5445f1d640ff2ad4ab8eef11f2_prof);

        
        $__internal_cb4fcdef0187867fb5946c3af07a78b05faacffe79ad9ae2434ed6070f9266a3->leave($__internal_cb4fcdef0187867fb5946c3af07a78b05faacffe79ad9ae2434ed6070f9266a3_prof);

    }

    // line 392
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_6421bef297e8ebf9ac250dac680234f7e1e4b05d683498993288aa29762b8840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6421bef297e8ebf9ac250dac680234f7e1e4b05d683498993288aa29762b8840->enter($__internal_6421bef297e8ebf9ac250dac680234f7e1e4b05d683498993288aa29762b8840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_98b2e2ecb1bebd469afefff212d49cd07ca2aa72c3d45b5805d49452da864490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b2e2ecb1bebd469afefff212d49cd07ca2aa72c3d45b5805d49452da864490->enter($__internal_98b2e2ecb1bebd469afefff212d49cd07ca2aa72c3d45b5805d49452da864490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 393
        echo "    ";
        $context["force_error"] = true;
        // line 394
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_98b2e2ecb1bebd469afefff212d49cd07ca2aa72c3d45b5805d49452da864490->leave($__internal_98b2e2ecb1bebd469afefff212d49cd07ca2aa72c3d45b5805d49452da864490_prof);

        
        $__internal_6421bef297e8ebf9ac250dac680234f7e1e4b05d683498993288aa29762b8840->leave($__internal_6421bef297e8ebf9ac250dac680234f7e1e4b05d683498993288aa29762b8840_prof);

    }

    // line 397
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_3c0238d16f872f16367ae7089c7645b6caff2b77477c4380287cc960d2f63180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c0238d16f872f16367ae7089c7645b6caff2b77477c4380287cc960d2f63180->enter($__internal_3c0238d16f872f16367ae7089c7645b6caff2b77477c4380287cc960d2f63180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_12f5877a153194c4e8958557b0011e84618ada31ef6296330e5d241118cbb446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12f5877a153194c4e8958557b0011e84618ada31ef6296330e5d241118cbb446->enter($__internal_12f5877a153194c4e8958557b0011e84618ada31ef6296330e5d241118cbb446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 398
        ob_start();
        // line 399
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 400
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 401
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "/"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle")));
            // line 402
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["download_uri"] ?? $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["download_title"] ?? $this->getContext($context, "download_title")), "html", null, true);
            echo "</a>
        ";
        }
        // line 404
        echo "
        <div class=\"row\">
            ";
        // line 406
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 407
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 408
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
            </div>
            ";
        }
        // line 411
        echo "            <div class=\"";
        echo (($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 412
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_12f5877a153194c4e8958557b0011e84618ada31ef6296330e5d241118cbb446->leave($__internal_12f5877a153194c4e8958557b0011e84618ada31ef6296330e5d241118cbb446_prof);

        
        $__internal_3c0238d16f872f16367ae7089c7645b6caff2b77477c4380287cc960d2f63180->leave($__internal_3c0238d16f872f16367ae7089c7645b6caff2b77477c4380287cc960d2f63180_prof);

    }

    // line 419
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_f44ef8bcadde11c2716d652b13026f73110a2920deab06c0d0fdc763ba1e7e68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44ef8bcadde11c2716d652b13026f73110a2920deab06c0d0fdc763ba1e7e68->enter($__internal_f44ef8bcadde11c2716d652b13026f73110a2920deab06c0d0fdc763ba1e7e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_6a80eff77964fa8582b0d11c261950d8c3fd05e9ec4871af9b64686ff4afbd78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a80eff77964fa8582b0d11c261950d8c3fd05e9ec4871af9b64686ff4afbd78->enter($__internal_6a80eff77964fa8582b0d11c261950d8c3fd05e9ec4871af9b64686ff4afbd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 420
        echo "    ";
        $context["force_error"] = true;
        // line 421
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_6a80eff77964fa8582b0d11c261950d8c3fd05e9ec4871af9b64686ff4afbd78->leave($__internal_6a80eff77964fa8582b0d11c261950d8c3fd05e9ec4871af9b64686ff4afbd78_prof);

        
        $__internal_f44ef8bcadde11c2716d652b13026f73110a2920deab06c0d0fdc763ba1e7e68->leave($__internal_f44ef8bcadde11c2716d652b13026f73110a2920deab06c0d0fdc763ba1e7e68_prof);

    }

    // line 424
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_d9a761aefe5c31dea814cacad14efbc2b809ac0f88e138e88960c41c3f5342a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9a761aefe5c31dea814cacad14efbc2b809ac0f88e138e88960c41c3f5342a0->enter($__internal_d9a761aefe5c31dea814cacad14efbc2b809ac0f88e138e88960c41c3f5342a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_6bd8492f6cedc41dc75929bf457f911c77e07c18249095fb86ad7f770ab035ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd8492f6cedc41dc75929bf457f911c77e07c18249095fb86ad7f770ab035ba->enter($__internal_6bd8492f6cedc41dc75929bf457f911c77e07c18249095fb86ad7f770ab035ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 425
        ob_start();
        // line 426
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 427
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 428
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 429
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
        ";
        }
        // line 431
        echo "
        ";
        // line 432
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 433
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . ($context["id"] ?? $this->getContext($context, "id")));
            // line 434
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 435
            echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 436
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["download_uri"] ?? $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 439
            echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 440
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["download_uri"] ?? $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 443
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6bd8492f6cedc41dc75929bf457f911c77e07c18249095fb86ad7f770ab035ba->leave($__internal_6bd8492f6cedc41dc75929bf457f911c77e07c18249095fb86ad7f770ab035ba_prof);

        
        $__internal_d9a761aefe5c31dea814cacad14efbc2b809ac0f88e138e88960c41c3f5342a0->leave($__internal_d9a761aefe5c31dea814cacad14efbc2b809ac0f88e138e88960c41c3f5342a0_prof);

    }

    // line 447
    public function block_easyadmin_rest($context, array $blocks = array())
    {
        $__internal_9a4705d6f4b4ab32d1715a5245fa5b690257db0fcf15d077755d78f546720533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a4705d6f4b4ab32d1715a5245fa5b690257db0fcf15d077755d78f546720533->enter($__internal_9a4705d6f4b4ab32d1715a5245fa5b690257db0fcf15d077755d78f546720533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_rest"));

        $__internal_82b7f62cf1e7959ce303b4213743883a390a857c6691ec027521756f963659d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b7f62cf1e7959ce303b4213743883a390a857c6691ec027521756f963659d2->enter($__internal_82b7f62cf1e7959ce303b4213743883a390a857c6691ec027521756f963659d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_rest"));

        // line 448
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 449
        echo "<div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">";
        // line 453
        $this->displayBlock("item_actions", $context, $blocks);
        // line 454
        echo "</div>
            </div>
        </div>
    </div>
";
        
        $__internal_82b7f62cf1e7959ce303b4213743883a390a857c6691ec027521756f963659d2->leave($__internal_82b7f62cf1e7959ce303b4213743883a390a857c6691ec027521756f963659d2_prof);

        
        $__internal_9a4705d6f4b4ab32d1715a5245fa5b690257db0fcf15d077755d78f546720533->leave($__internal_9a4705d6f4b4ab32d1715a5245fa5b690257db0fcf15d077755d78f546720533_prof);

    }

    // line 460
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_4c1492fe6c7a36fb9ccb2511cc5120786f77b9187d46d070ee87874dfb0cb9fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c1492fe6c7a36fb9ccb2511cc5120786f77b9187d46d070ee87874dfb0cb9fa->enter($__internal_4c1492fe6c7a36fb9ccb2511cc5120786f77b9187d46d070ee87874dfb0cb9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_c412ef909df14cba32c8b0cd2c6494bdf9ff71e686a08b12a64d5c301af0108f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c412ef909df14cba32c8b0cd2c6494bdf9ff71e686a08b12a64d5c301af0108f->enter($__internal_c412ef909df14cba32c8b0cd2c6494bdf9ff71e686a08b12a64d5c301af0108f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 461
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 462
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "label", array())));
        // line 463
        echo "
    ";
        // line 465
        echo "    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <i class=\"fa fa-save\"></i> ";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain"))), "html", null, true);
        echo "
    </button>

    ";
        // line 469
        $context["_entity_actions"] = ((($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("new", $this->getAttribute($this->getAttribute(        // line 470
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))) : ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("edit", $this->getAttribute($this->getAttribute(        // line 471
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))));
        // line 472
        echo "
    ";
        // line 473
        $context["_entity_id"] = ((($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? (null) : ($this->getAttribute($this->getAttribute(        // line 475
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "item", array()), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
        // line 476
        echo "
    ";
        // line 477
        $context["_request_parameters"] = array("entity" => $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 478
        echo "
    ";
        // line 479
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 480
($context["_entity_actions"] ?? $this->getContext($context, "_entity_actions")), "request_parameters" =>         // line 481
($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "translation_domain" =>         // line 482
($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain")), "trans_parameters" =>         // line 483
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 484
($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), false);
        // line 485
        echo "
";
        
        $__internal_c412ef909df14cba32c8b0cd2c6494bdf9ff71e686a08b12a64d5c301af0108f->leave($__internal_c412ef909df14cba32c8b0cd2c6494bdf9ff71e686a08b12a64d5c301af0108f_prof);

        
        $__internal_4c1492fe6c7a36fb9ccb2511cc5120786f77b9187d46d070ee87874dfb0cb9fa->leave($__internal_4c1492fe6c7a36fb9ccb2511cc5120786f77b9187d46d070ee87874dfb0cb9fa_prof);

    }

    // line 489
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_13a94adba67d7b12e19547defe0c1a5f477b6f7df07590290e2f61574acf113c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a94adba67d7b12e19547defe0c1a5f477b6f7df07590290e2f61574acf113c->enter($__internal_13a94adba67d7b12e19547defe0c1a5f477b6f7df07590290e2f61574acf113c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        $__internal_6e8a3a144bcbda768314147149c7be3b65353d6122ee69c24609e0e19b12c016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e8a3a144bcbda768314147149c7be3b65353d6122ee69c24609e0e19b12c016->enter($__internal_6e8a3a144bcbda768314147149c7be3b65353d6122ee69c24609e0e19b12c016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 490
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 491
        echo "    <div class=\"row\">
        ";
        // line 492
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_groups"] ?? $this->getContext($context, "easyadmin_form_groups")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            // line 493
            echo "            <div class=\"field-group col-xs-12 ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["group_config"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <div class=\"box box-default\">
                    ";
            // line 495
            if (((($this->getAttribute($context["group_config"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "label", array()), false)) : (false)) || (($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false)))) {
                // line 496
                echo "                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                ";
                // line 498
                if ((($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false))) {
                    // line 499
                    echo "                                    <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group_config"], "icon", array()), "html", null, true);
                    echo "\"></i>
                                ";
                }
                // line 501
                echo "                                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "label", array()), array(), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain")));
                echo "
                            </h3>
                        </div>
                    ";
            }
            // line 505
            echo "
                    <div class=\"box-body\">
                        ";
            // line 507
            if ((($this->getAttribute($context["group_config"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "help", array()), false)) : (false))) {
                // line 508
                echo "                            <p class=\"help-block\">";
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "help", array()), array(), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain"))), "html", null, true));
                echo "</p>
                        ";
            }
            // line 510
            echo "
                        <div class=\"row\">
                            ";
            // line 512
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_group", array()) == $context["group_name"]))) {
                    // line 513
                    echo "                                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                                    ";
                    // line 514
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                                </div>
                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 517
            echo "                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 522
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array()))) {
                    // line 523
                    echo "                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                    ";
                    // line 524
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                </div>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 527
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 528
        echo "    </div>
";
        
        $__internal_6e8a3a144bcbda768314147149c7be3b65353d6122ee69c24609e0e19b12c016->leave($__internal_6e8a3a144bcbda768314147149c7be3b65353d6122ee69c24609e0e19b12c016_prof);

        
        $__internal_13a94adba67d7b12e19547defe0c1a5f477b6f7df07590290e2f61574acf113c->leave($__internal_13a94adba67d7b12e19547defe0c1a5f477b6f7df07590290e2f61574acf113c_prof);

    }

    // line 532
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_52b6f52acbcd49caac2e3c1ac573b4f6940b6874c7af98f15adc26e9c3e52492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52b6f52acbcd49caac2e3c1ac573b4f6940b6874c7af98f15adc26e9c3e52492->enter($__internal_52b6f52acbcd49caac2e3c1ac573b4f6940b6874c7af98f15adc26e9c3e52492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        $__internal_b980484420596ea0dcfa1e11223202b451e2ca275e274e2f5bc8bc61856cdbec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b980484420596ea0dcfa1e11223202b451e2ca275e274e2f5bc8bc61856cdbec->enter($__internal_b980484420596ea0dcfa1e11223202b451e2ca275e274e2f5bc8bc61856cdbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        // line 533
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 534
($context["attr"] ?? $this->getContext($context, "attr")), array("data-easyadmin-autocomplete-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 537
($context["autocomplete_entity_name"] ?? $this->getContext($context, "autocomplete_entity_name"))))))));
        // line 540
        echo "
";
        
        $__internal_b980484420596ea0dcfa1e11223202b451e2ca275e274e2f5bc8bc61856cdbec->leave($__internal_b980484420596ea0dcfa1e11223202b451e2ca275e274e2f5bc8bc61856cdbec_prof);

        
        $__internal_52b6f52acbcd49caac2e3c1ac573b4f6940b6874c7af98f15adc26e9c3e52492->leave($__internal_52b6f52acbcd49caac2e3c1ac573b4f6940b6874c7af98f15adc26e9c3e52492_prof);

    }

    // line 543
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        $__internal_77bba6bc35121ed92a9904483c45936f7020a504547bd99852fe768d4ab77eb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77bba6bc35121ed92a9904483c45936f7020a504547bd99852fe768d4ab77eb2->enter($__internal_77bba6bc35121ed92a9904483c45936f7020a504547bd99852fe768d4ab77eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        $__internal_b73ba8e8042ce3af5916d608c22481c4e09d5f0735896ba765afa1cbb3417def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b73ba8e8042ce3af5916d608c22481c4e09d5f0735896ba765afa1cbb3417def->enter($__internal_b73ba8e8042ce3af5916d608c22481c4e09d5f0735896ba765afa1cbb3417def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 544
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "vars", array()), "name", array());
        // line 545
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_b73ba8e8042ce3af5916d608c22481c4e09d5f0735896ba765afa1cbb3417def->leave($__internal_b73ba8e8042ce3af5916d608c22481c4e09d5f0735896ba765afa1cbb3417def_prof);

        
        $__internal_77bba6bc35121ed92a9904483c45936f7020a504547bd99852fe768d4ab77eb2->leave($__internal_77bba6bc35121ed92a9904483c45936f7020a504547bd99852fe768d4ab77eb2_prof);

    }

    // line 549
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        $__internal_716551ea28b168b61dff6548603b875310f6b0e55818a5af04e7a308053720c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_716551ea28b168b61dff6548603b875310f6b0e55818a5af04e7a308053720c5->enter($__internal_716551ea28b168b61dff6548603b875310f6b0e55818a5af04e7a308053720c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        $__internal_278da224b409a7387ee4809131266d863b1a63f5eba21017f2ec52dc5b3e04b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278da224b409a7387ee4809131266d863b1a63f5eba21017f2ec52dc5b3e04b3->enter($__internal_278da224b409a7387ee4809131266d863b1a63f5eba21017f2ec52dc5b3e04b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        // line 550
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
        
        $__internal_278da224b409a7387ee4809131266d863b1a63f5eba21017f2ec52dc5b3e04b3->leave($__internal_278da224b409a7387ee4809131266d863b1a63f5eba21017f2ec52dc5b3e04b3_prof);

        
        $__internal_716551ea28b168b61dff6548603b875310f6b0e55818a5af04e7a308053720c5->leave($__internal_716551ea28b168b61dff6548603b875310f6b0e55818a5af04e7a308053720c5_prof);

    }

    // line 556
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        $__internal_3677581d160d624cd1ab90096dda137d8220dc9d299da9cb766210fc1eb87c19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3677581d160d624cd1ab90096dda137d8220dc9d299da9cb766210fc1eb87c19->enter($__internal_3677581d160d624cd1ab90096dda137d8220dc9d299da9cb766210fc1eb87c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        $__internal_d9a5835d0ee11c332724aa9aaadbed31439003d109849d6edbf892052fa6a9e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9a5835d0ee11c332724aa9aaadbed31439003d109849d6edbf892052fa6a9e0->enter($__internal_d9a5835d0ee11c332724aa9aaadbed31439003d109849d6edbf892052fa6a9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        // line 557
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 558
        echo "    <div class=\"field-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
        ";
        // line 559
        if (((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), false)) : (false)) || (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false)))) {
            // line 560
            echo "            <h2>
                ";
            // line 561
            if ((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false))) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 562
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), "")) : ("")), array(), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain")));
            echo "
            </h2>
        ";
        }
        // line 565
        echo "
        ";
        // line 566
        if ((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), false)) : (false))) {
            // line 567
            echo "            <p class=\"help-block\">";
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain"))), "html", null, true));
            echo "</p>
        ";
        }
        // line 569
        echo "    </div>
";
        
        $__internal_d9a5835d0ee11c332724aa9aaadbed31439003d109849d6edbf892052fa6a9e0->leave($__internal_d9a5835d0ee11c332724aa9aaadbed31439003d109849d6edbf892052fa6a9e0_prof);

        
        $__internal_3677581d160d624cd1ab90096dda137d8220dc9d299da9cb766210fc1eb87c19->leave($__internal_3677581d160d624cd1ab90096dda137d8220dc9d299da9cb766210fc1eb87c19_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1960 => 569,  1954 => 567,  1952 => 566,  1949 => 565,  1942 => 562,  1936 => 561,  1933 => 560,  1931 => 559,  1926 => 558,  1923 => 557,  1914 => 556,  1901 => 550,  1892 => 549,  1882 => 545,  1879 => 544,  1870 => 543,  1859 => 540,  1857 => 537,  1856 => 534,  1854 => 533,  1845 => 532,  1834 => 528,  1828 => 527,  1818 => 524,  1813 => 523,  1807 => 522,  1798 => 517,  1788 => 514,  1783 => 513,  1778 => 512,  1774 => 510,  1768 => 508,  1766 => 507,  1762 => 505,  1754 => 501,  1748 => 499,  1746 => 498,  1742 => 496,  1740 => 495,  1734 => 493,  1729 => 492,  1726 => 491,  1723 => 490,  1714 => 489,  1703 => 485,  1701 => 484,  1700 => 483,  1699 => 482,  1698 => 481,  1697 => 480,  1696 => 479,  1693 => 478,  1691 => 477,  1688 => 476,  1686 => 475,  1685 => 473,  1682 => 472,  1680 => 471,  1679 => 470,  1678 => 469,  1672 => 466,  1669 => 465,  1666 => 463,  1663 => 462,  1660 => 461,  1651 => 460,  1637 => 454,  1635 => 453,  1630 => 449,  1628 => 448,  1619 => 447,  1607 => 443,  1601 => 440,  1597 => 439,  1591 => 436,  1587 => 435,  1584 => 434,  1581 => 433,  1579 => 432,  1576 => 431,  1570 => 429,  1568 => 428,  1564 => 427,  1561 => 426,  1559 => 425,  1550 => 424,  1537 => 421,  1534 => 420,  1525 => 419,  1509 => 412,  1504 => 411,  1498 => 408,  1495 => 407,  1493 => 406,  1489 => 404,  1481 => 402,  1478 => 401,  1476 => 400,  1473 => 399,  1471 => 398,  1462 => 397,  1449 => 394,  1446 => 393,  1437 => 392,  1424 => 388,  1421 => 387,  1412 => 386,  1402 => 383,  1399 => 382,  1396 => 381,  1393 => 380,  1390 => 379,  1384 => 377,  1381 => 376,  1372 => 373,  1360 => 369,  1356 => 367,  1347 => 365,  1343 => 364,  1340 => 363,  1334 => 361,  1332 => 360,  1328 => 359,  1325 => 358,  1322 => 357,  1319 => 356,  1310 => 355,  1300 => 351,  1298 => 350,  1296 => 349,  1288 => 348,  1279 => 347,  1269 => 344,  1267 => 343,  1265 => 342,  1257 => 341,  1248 => 340,  1238 => 337,  1236 => 336,  1227 => 335,  1217 => 332,  1215 => 331,  1206 => 330,  1196 => 327,  1194 => 326,  1185 => 325,  1175 => 322,  1173 => 321,  1164 => 320,  1154 => 317,  1152 => 316,  1146 => 315,  1137 => 314,  1122 => 308,  1117 => 306,  1113 => 304,  1099 => 295,  1093 => 294,  1082 => 286,  1077 => 283,  1074 => 282,  1072 => 281,  1066 => 279,  1057 => 278,  1047 => 275,  1041 => 273,  1039 => 272,  1037 => 270,  1030 => 265,  1024 => 264,  1020 => 262,  1018 => 261,  1016 => 259,  1014 => 258,  1006 => 257,  1004 => 256,  995 => 255,  983 => 249,  981 => 248,  979 => 247,  964 => 246,  961 => 245,  958 => 244,  955 => 243,  952 => 242,  949 => 241,  946 => 240,  943 => 239,  940 => 238,  937 => 237,  934 => 236,  932 => 235,  923 => 234,  913 => 231,  904 => 230,  894 => 227,  885 => 226,  875 => 223,  873 => 222,  864 => 220,  854 => 217,  852 => 216,  843 => 215,  832 => 209,  830 => 208,  828 => 207,  825 => 205,  823 => 204,  821 => 203,  812 => 202,  801 => 198,  799 => 197,  797 => 196,  794 => 194,  792 => 193,  790 => 192,  781 => 191,  770 => 187,  764 => 184,  763 => 183,  762 => 182,  758 => 181,  754 => 180,  751 => 178,  745 => 175,  744 => 174,  743 => 173,  739 => 172,  737 => 171,  735 => 170,  726 => 169,  711 => 163,  706 => 161,  702 => 159,  689 => 149,  684 => 146,  681 => 145,  679 => 144,  677 => 143,  675 => 142,  666 => 141,  654 => 136,  651 => 135,  643 => 134,  638 => 132,  636 => 131,  634 => 130,  631 => 128,  629 => 127,  620 => 126,  608 => 121,  606 => 120,  604 => 118,  603 => 117,  602 => 116,  601 => 115,  596 => 113,  594 => 112,  592 => 111,  589 => 109,  587 => 108,  578 => 107,  567 => 103,  565 => 102,  563 => 101,  561 => 100,  559 => 99,  555 => 98,  553 => 97,  550 => 95,  548 => 94,  539 => 93,  528 => 89,  526 => 88,  524 => 87,  515 => 86,  505 => 83,  499 => 81,  497 => 80,  495 => 79,  489 => 77,  486 => 76,  484 => 75,  481 => 74,  472 => 73,  462 => 70,  460 => 69,  451 => 68,  441 => 65,  439 => 64,  430 => 63,  420 => 60,  417 => 58,  415 => 57,  406 => 56,  391 => 50,  386 => 48,  382 => 46,  369 => 36,  364 => 33,  361 => 32,  359 => 31,  357 => 29,  348 => 28,  336 => 23,  334 => 21,  328 => 18,  326 => 17,  323 => 16,  320 => 15,  318 => 13,  317 => 12,  316 => 11,  315 => 9,  314 => 8,  313 => 7,  311 => 5,  309 => 4,  300 => 3,  290 => 556,  287 => 554,  285 => 549,  282 => 547,  280 => 543,  277 => 542,  275 => 532,  272 => 530,  270 => 489,  267 => 487,  265 => 460,  262 => 459,  260 => 447,  257 => 446,  255 => 424,  252 => 423,  250 => 419,  247 => 418,  245 => 397,  242 => 396,  240 => 392,  237 => 391,  235 => 386,  233 => 373,  231 => 355,  228 => 353,  226 => 347,  223 => 346,  221 => 340,  218 => 339,  216 => 335,  213 => 334,  211 => 330,  208 => 329,  206 => 325,  203 => 324,  201 => 320,  198 => 319,  196 => 314,  193 => 313,  191 => 278,  188 => 277,  186 => 255,  183 => 254,  180 => 252,  178 => 234,  175 => 233,  173 => 230,  170 => 229,  168 => 226,  165 => 225,  163 => 220,  160 => 219,  158 => 215,  155 => 214,  152 => 212,  150 => 202,  147 => 201,  145 => 191,  142 => 190,  140 => 169,  137 => 168,  135 => 141,  132 => 140,  130 => 126,  127 => 125,  125 => 107,  122 => 106,  120 => 93,  117 => 92,  115 => 86,  112 => 85,  110 => 73,  107 => 72,  105 => 68,  102 => 67,  100 => 63,  97 => 62,  95 => 56,  92 => 55,  90 => 28,  87 => 27,  84 => 25,  82 => 3,  79 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use 'form_div_layout.html.twig' %}

{% block form_start -%}
    {% if 'easyadmin' == block_prefixes|slice(-2)|first %}
        {% set attr = attr|merge({
            'class': [
                _easyadmin_form_type|default('') == 'horizontal' ? 'form-horizontal' : 'form-vertical',
                attr.class|default(''),
                easyadmin.view ~ '-form'
            ]|join(' '),
            'data-view': easyadmin.view,
            'data-entity': easyadmin.entity.name,
            'data-entity-id': attribute(value, easyadmin.entity.primary_key_field_name),
        }) %}
    {% endif %}

    {% if form.vars.errors|length > 0 %}
        {{ form_errors(form) }}
    {% endif %}

    {{- parent() -}}

    <input type=\"hidden\" name=\"referer\" value=\"{{ app.request.query.get('referer', '') }}\"/>
{%- endblock form_start %}

{# Widgets #}

{% block form_widget %}
    {{- parent() -}}

    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock form_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        <div class=\"control-group\">
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do no display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {{- label is not same as(false) ? label|trans({}, translation_domain ?: easyadmin.entity.translation_domain) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}

        {% if _field_type in ['datetime', 'date', 'time', 'birthday'] and easyadmin.field.nullable|default(false) %}
            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                    {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                </label>
            </div>
        {% endif %}

        {{- form_errors(form) -}}

        {% if easyadmin.field.help|default('') != '' %}
            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
        {% endif %}
    </div>
{%- endblock form_row %}

{% block collection_row %}
    {{ block('form_row') }}

    {% if allow_add|default(false) %}
        {% set js_add_item %}
            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#{{ id }}');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_{{ name }}___name__/g, '_{{ name }}_' + numItems)
                    .replace(/{{ name }}\\]\\[__name__\\]/g, '{{ name }}][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        {% endset %}

        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"{{ js_add_item|raw }}\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                {{ (form|length == 0 ? 'action.add_new_item' : 'action.add_another_item')|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock collection_row %}

{% block button_row -%}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }} {{ easyadmin.field.css_class|default('') }}\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}
{% block form_errors %}
    {% set error_count = errors|length %}
    {% if error_count >= 1 %}
        <div class=\"error-block\">
            <span class=\"label label-danger\">{{ 'errors'|transchoice(error_count, {}, 'EasyAdminBundle') }}</span>
            {% if error_count == 1 %}
                {{ errors|first.message }}
            {% else %}
                <ul>
                    {% for error in errors %}
                        <li>{{ error.message }}</li>
                    {% endfor %}
                </ul>
            {% endif %}
        </div>
    {% endif %}
{% endblock form_errors %}

{%- block form_widget_compound -%}
    {# the \"is iterable\" check is needed because if an object implements __toString() and
       returns an empty string, \"is empty\" returns true even if it's not a collection #}
    {% if value is iterable and value is empty %}
        {{ block('empty_collection') }}
    {% endif %}
    {% if value is iterable and value is empty or form.vars.prototype is defined %}
        {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}
    {% endif %}

    {{ parent() }}
{%- endblock form_widget_compound -%}

{% block empty_collection %}
    <div class=\"empty collection-empty\">
        {{ include(easyadmin.entity.templates.label_empty) }}
    </div>
{% endblock empty_collection %}

{% block vich_file_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-file\">
        {% if download_uri|default('') is not empty %}
            {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}
            <a href=\"{{ asset(download_uri) }}\">{{ download_title }}</a>
        {% endif %}

        <div class=\"row\">
            {% if form.delete is defined %}
            <div class=\"col-sm-3 col-md-2\">
                {{ form_row(form.delete, { label: 'action.delete' }) }}
            </div>
            {% endif %}
            <div class=\"{{ form.delete is defined ? 'col-sm-9 col-md-10' : 'col-sm-12' }}\">
                {{ form_widget(form.file) }}
            </div>
        </div>
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
            {{ form_row(form.delete, { label: 'action.delete' }) }}
        {% endif %}

        {% if download_uri|default('') is not empty %}
            {% set _lightbox_id = 'easyadmin-lightbox-' ~ id %}

            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#{{ _lightbox_id }}\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"{{ asset(download_uri) }}\">
            </a>

            <div id=\"{{ _lightbox_id }}\" class=\"easyadmin-lightbox\">
                <img src=\"{{ asset(download_uri) }}\">
            </div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block easyadmin_rest %}
    {{- form_rest(form) -}}
    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    {{- block('item_actions') -}}
                </div>
            </div>
        </div>
    </div>
{% endblock easyadmin_rest %}

{% block item_actions %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}

    {# the 'save' action is hardcoded for the 'edit' and 'new' views #}
    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <i class=\"fa fa-save\"></i> {{ 'action.save'|trans(_trans_parameters, _translation_domain) }}
    </button>

    {% set _entity_actions = (easyadmin.view == 'new')
        ? easyadmin_get_actions_for_new_item(easyadmin.entity.name)
        : easyadmin_get_actions_for_edit_item(easyadmin.entity.name) %}

    {% set _entity_id = (easyadmin.view == 'new')
        ? null
        : attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) %}

    {% set _request_parameters = { entity: easyadmin.entity.name, referer: app.request.query.get('referer') } %}

    {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
        actions: _entity_actions,
        request_parameters: _request_parameters,
        translation_domain: _translation_domain,
        trans_parameters: _trans_parameters,
        item_id: _entity_id
    }, with_context = false) }}
{% endblock item_actions %}

{# EasyAdmin form type #}
{% block easyadmin_widget %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"row\">
        {% for group_name, group_config in easyadmin_form_groups %}
            <div class=\"field-group col-xs-12 {{ group_config.css_class|default('') }}\">
                <div class=\"box box-default\">
                    {% if group_config.label|default(false) or group_config.icon|default(false) %}
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                {% if group_config.icon|default(false) %}
                                    <i class=\"fa fa-{{ group_config.icon }}\"></i>
                                {% endif %}
                                {{ group_config.label|trans(domain = _translation_domain)|raw }}
                            </h3>
                        </div>
                    {% endif %}

                    <div class=\"box-body\">
                        {% if group_config.help|default(false) %}
                            <p class=\"help-block\">{{ group_config.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
                        {% endif %}

                        <div class=\"row\">
                            {% for field in form if 'hidden' not in field.vars.block_prefixes and field.vars.easyadmin.form_group == group_name %}
                                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                                    {{ form_row(field) }}
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            {% for field in form if 'hidden' not in field.vars.block_prefixes %}
                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                    {{ form_row(field) }}
                </div>
            {% endfor %}
        {% endfor %}
    </div>
{% endblock easyadmin_widget %}

{# EasyAdminAutocomplete form type #}
{% block easyadmin_autocomplete_widget %}
    {{ form_widget(form.autocomplete, {
        attr: attr|merge({
            'data-easyadmin-autocomplete-url' : path('easyadmin', {
                action: 'autocomplete',
                entity: autocomplete_entity_name,
            })|raw })
        })
    }}
{% endblock easyadmin_autocomplete_widget %}

{% block easyadmin_autocomplete_inner_label %}
    {% set name = form.parent.vars.name %}
    {{- block('form_label') -}}
{% endblock easyadmin_autocomplete_inner_label %}

{# EasyAdminDivider form type #}
{% block easyadmin_divider_row %}
    <div class=\"field-divider\">
        <hr>
    </div>
{% endblock easyadmin_divider_row %}

{# EasyAdminSection form type #}
{% block easyadmin_section_row %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"field-section {{ easyadmin.field.css_class|default('') }}\">
        {% if easyadmin.field.label|default(false) or easyadmin.field.icon|default(false) %}
            <h2>
                {% if easyadmin.field.icon|default(false) %}<i class=\"fa fa-{{ easyadmin.field.icon }}\"></i>{% endif %}
                {{ easyadmin.field.label|default('')|trans(domain = _translation_domain)|raw }}
            </h2>
        {% endif %}

        {% if easyadmin.field.help|default(false) %}
            <p class=\"help-block\">{{ easyadmin.field.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
        {% endif %}
    </div>
{% endblock easyadmin_section_row %}
", "@EasyAdmin/form/bootstrap_3_layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/form/bootstrap_3_layout.html.twig");
    }
}
