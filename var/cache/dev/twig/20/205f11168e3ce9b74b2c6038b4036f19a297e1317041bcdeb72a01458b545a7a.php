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
        $__internal_8a0baae903984bc39bb9151d3a42a91f5993a4c35c12b27fea49a882f1ddc3ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a0baae903984bc39bb9151d3a42a91f5993a4c35c12b27fea49a882f1ddc3ef->enter($__internal_8a0baae903984bc39bb9151d3a42a91f5993a4c35c12b27fea49a882f1ddc3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        $__internal_7bf537483c7d9e622c4ae7e7567ad348fc9ad15e4a84e474eedac594a7fde200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf537483c7d9e622c4ae7e7567ad348fc9ad15e4a84e474eedac594a7fde200->enter($__internal_7bf537483c7d9e622c4ae7e7567ad348fc9ad15e4a84e474eedac594a7fde200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

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
        
        $__internal_8a0baae903984bc39bb9151d3a42a91f5993a4c35c12b27fea49a882f1ddc3ef->leave($__internal_8a0baae903984bc39bb9151d3a42a91f5993a4c35c12b27fea49a882f1ddc3ef_prof);

        
        $__internal_7bf537483c7d9e622c4ae7e7567ad348fc9ad15e4a84e474eedac594a7fde200->leave($__internal_7bf537483c7d9e622c4ae7e7567ad348fc9ad15e4a84e474eedac594a7fde200_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_d742936bf9e0f6709e6d182ef99994d0ec92772cc0e3b08ac78096601666dc8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d742936bf9e0f6709e6d182ef99994d0ec92772cc0e3b08ac78096601666dc8b->enter($__internal_d742936bf9e0f6709e6d182ef99994d0ec92772cc0e3b08ac78096601666dc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_d02a1d32ad65a3ef7341f62ff0a75d14adf07a160aba059a7b9f4d7f2789c02e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02a1d32ad65a3ef7341f62ff0a75d14adf07a160aba059a7b9f4d7f2789c02e->enter($__internal_d02a1d32ad65a3ef7341f62ff0a75d14adf07a160aba059a7b9f4d7f2789c02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

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
        
        $__internal_d02a1d32ad65a3ef7341f62ff0a75d14adf07a160aba059a7b9f4d7f2789c02e->leave($__internal_d02a1d32ad65a3ef7341f62ff0a75d14adf07a160aba059a7b9f4d7f2789c02e_prof);

        
        $__internal_d742936bf9e0f6709e6d182ef99994d0ec92772cc0e3b08ac78096601666dc8b->leave($__internal_d742936bf9e0f6709e6d182ef99994d0ec92772cc0e3b08ac78096601666dc8b_prof);

    }

    // line 28
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_7eddfc1727e2124b7500bb483ddfc9314de58c2e87b0351381ba86f2971276c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eddfc1727e2124b7500bb483ddfc9314de58c2e87b0351381ba86f2971276c9->enter($__internal_7eddfc1727e2124b7500bb483ddfc9314de58c2e87b0351381ba86f2971276c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_328a69355f74c55adff72ba623c875be1cac4ea33b64b4fb49cfbc64c5f4c851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_328a69355f74c55adff72ba623c875be1cac4ea33b64b4fb49cfbc64c5f4c851->enter($__internal_328a69355f74c55adff72ba623c875be1cac4ea33b64b4fb49cfbc64c5f4c851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

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
        
        $__internal_328a69355f74c55adff72ba623c875be1cac4ea33b64b4fb49cfbc64c5f4c851->leave($__internal_328a69355f74c55adff72ba623c875be1cac4ea33b64b4fb49cfbc64c5f4c851_prof);

        
        $__internal_7eddfc1727e2124b7500bb483ddfc9314de58c2e87b0351381ba86f2971276c9->leave($__internal_7eddfc1727e2124b7500bb483ddfc9314de58c2e87b0351381ba86f2971276c9_prof);

    }

    // line 56
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_21bdd151028545f0cb2d28badaa145c80a9d678b56a6a28ad53c0073f8c710b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21bdd151028545f0cb2d28badaa145c80a9d678b56a6a28ad53c0073f8c710b0->enter($__internal_21bdd151028545f0cb2d28badaa145c80a9d678b56a6a28ad53c0073f8c710b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_e879ae4fb288b7db579bce48c6c6c95b8737d8cc3b14fb37aa7969f1868b9cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e879ae4fb288b7db579bce48c6c6c95b8737d8cc3b14fb37aa7969f1868b9cbe->enter($__internal_e879ae4fb288b7db579bce48c6c6c95b8737d8cc3b14fb37aa7969f1868b9cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 57
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 58
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 60
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e879ae4fb288b7db579bce48c6c6c95b8737d8cc3b14fb37aa7969f1868b9cbe->leave($__internal_e879ae4fb288b7db579bce48c6c6c95b8737d8cc3b14fb37aa7969f1868b9cbe_prof);

        
        $__internal_21bdd151028545f0cb2d28badaa145c80a9d678b56a6a28ad53c0073f8c710b0->leave($__internal_21bdd151028545f0cb2d28badaa145c80a9d678b56a6a28ad53c0073f8c710b0_prof);

    }

    // line 63
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_e69cd9ada48afbe529a81471f1913650ba7529cdee2a78dacc3cf602dcd7d8e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e69cd9ada48afbe529a81471f1913650ba7529cdee2a78dacc3cf602dcd7d8e4->enter($__internal_e69cd9ada48afbe529a81471f1913650ba7529cdee2a78dacc3cf602dcd7d8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_a6b9e7d68743b9194b568f1fe1f248d48c171a7aca082d380b9d754439cd5aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b9e7d68743b9194b568f1fe1f248d48c171a7aca082d380b9d754439cd5aef->enter($__internal_a6b9e7d68743b9194b568f1fe1f248d48c171a7aca082d380b9d754439cd5aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 64
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 65
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_a6b9e7d68743b9194b568f1fe1f248d48c171a7aca082d380b9d754439cd5aef->leave($__internal_a6b9e7d68743b9194b568f1fe1f248d48c171a7aca082d380b9d754439cd5aef_prof);

        
        $__internal_e69cd9ada48afbe529a81471f1913650ba7529cdee2a78dacc3cf602dcd7d8e4->leave($__internal_e69cd9ada48afbe529a81471f1913650ba7529cdee2a78dacc3cf602dcd7d8e4_prof);

    }

    // line 68
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_0080dbb9520873f8fb71f3a635e7837ab744afc9b91891ec6da24961abd557fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0080dbb9520873f8fb71f3a635e7837ab744afc9b91891ec6da24961abd557fb->enter($__internal_0080dbb9520873f8fb71f3a635e7837ab744afc9b91891ec6da24961abd557fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_3c70537fa7108fd551f9466de42c782a1d6e9b274a05dbe9e76dc5be18cd6f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c70537fa7108fd551f9466de42c782a1d6e9b274a05dbe9e76dc5be18cd6f12->enter($__internal_3c70537fa7108fd551f9466de42c782a1d6e9b274a05dbe9e76dc5be18cd6f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 69
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 70
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_3c70537fa7108fd551f9466de42c782a1d6e9b274a05dbe9e76dc5be18cd6f12->leave($__internal_3c70537fa7108fd551f9466de42c782a1d6e9b274a05dbe9e76dc5be18cd6f12_prof);

        
        $__internal_0080dbb9520873f8fb71f3a635e7837ab744afc9b91891ec6da24961abd557fb->leave($__internal_0080dbb9520873f8fb71f3a635e7837ab744afc9b91891ec6da24961abd557fb_prof);

    }

    // line 73
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_530489fa864200bb018e43a96e6c2b052f24549a78940162915ce10b509235fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_530489fa864200bb018e43a96e6c2b052f24549a78940162915ce10b509235fc->enter($__internal_530489fa864200bb018e43a96e6c2b052f24549a78940162915ce10b509235fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_cf74f05e70843142950df11d9bb1320ee285a5bf2af9070319e156a2a6d56623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf74f05e70843142950df11d9bb1320ee285a5bf2af9070319e156a2a6d56623->enter($__internal_cf74f05e70843142950df11d9bb1320ee285a5bf2af9070319e156a2a6d56623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_cf74f05e70843142950df11d9bb1320ee285a5bf2af9070319e156a2a6d56623->leave($__internal_cf74f05e70843142950df11d9bb1320ee285a5bf2af9070319e156a2a6d56623_prof);

        
        $__internal_530489fa864200bb018e43a96e6c2b052f24549a78940162915ce10b509235fc->leave($__internal_530489fa864200bb018e43a96e6c2b052f24549a78940162915ce10b509235fc_prof);

    }

    // line 86
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_371f4226c1ab1081272fcd08d7a964e60260e6a1af3ca81ee67f5843baee7832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_371f4226c1ab1081272fcd08d7a964e60260e6a1af3ca81ee67f5843baee7832->enter($__internal_371f4226c1ab1081272fcd08d7a964e60260e6a1af3ca81ee67f5843baee7832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_cdf3b967512825488b7525c57f19a1cc1354407440a4a8eb3a193bc38dcd264a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf3b967512825488b7525c57f19a1cc1354407440a4a8eb3a193bc38dcd264a->enter($__internal_cdf3b967512825488b7525c57f19a1cc1354407440a4a8eb3a193bc38dcd264a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 87
        echo "<div class=\"input-group\">";
        // line 88
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 89
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_cdf3b967512825488b7525c57f19a1cc1354407440a4a8eb3a193bc38dcd264a->leave($__internal_cdf3b967512825488b7525c57f19a1cc1354407440a4a8eb3a193bc38dcd264a_prof);

        
        $__internal_371f4226c1ab1081272fcd08d7a964e60260e6a1af3ca81ee67f5843baee7832->leave($__internal_371f4226c1ab1081272fcd08d7a964e60260e6a1af3ca81ee67f5843baee7832_prof);

    }

    // line 93
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_32b4d766b5ead1dc9548ea0801b016729cd34023110f516a60748ee7a2da2c80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32b4d766b5ead1dc9548ea0801b016729cd34023110f516a60748ee7a2da2c80->enter($__internal_32b4d766b5ead1dc9548ea0801b016729cd34023110f516a60748ee7a2da2c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_9e25ee32cae352ada2b235705dd04874a9c873bb49b963662c7c2ea72875ab82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e25ee32cae352ada2b235705dd04874a9c873bb49b963662c7c2ea72875ab82->enter($__internal_9e25ee32cae352ada2b235705dd04874a9c873bb49b963662c7c2ea72875ab82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_9e25ee32cae352ada2b235705dd04874a9c873bb49b963662c7c2ea72875ab82->leave($__internal_9e25ee32cae352ada2b235705dd04874a9c873bb49b963662c7c2ea72875ab82_prof);

        
        $__internal_32b4d766b5ead1dc9548ea0801b016729cd34023110f516a60748ee7a2da2c80->leave($__internal_32b4d766b5ead1dc9548ea0801b016729cd34023110f516a60748ee7a2da2c80_prof);

    }

    // line 107
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_4785d92e891e19ac9448a87b5b43eb167fd0d3f012816ecc5ad8ac8e74858347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4785d92e891e19ac9448a87b5b43eb167fd0d3f012816ecc5ad8ac8e74858347->enter($__internal_4785d92e891e19ac9448a87b5b43eb167fd0d3f012816ecc5ad8ac8e74858347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_1af08b08726e841959443374ba63639a2cc6dac4a1d25fb12cbf99c1d0fc7a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af08b08726e841959443374ba63639a2cc6dac4a1d25fb12cbf99c1d0fc7a44->enter($__internal_1af08b08726e841959443374ba63639a2cc6dac4a1d25fb12cbf99c1d0fc7a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_1af08b08726e841959443374ba63639a2cc6dac4a1d25fb12cbf99c1d0fc7a44->leave($__internal_1af08b08726e841959443374ba63639a2cc6dac4a1d25fb12cbf99c1d0fc7a44_prof);

        
        $__internal_4785d92e891e19ac9448a87b5b43eb167fd0d3f012816ecc5ad8ac8e74858347->leave($__internal_4785d92e891e19ac9448a87b5b43eb167fd0d3f012816ecc5ad8ac8e74858347_prof);

    }

    // line 126
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_a171db256afa65a6118644a0cb7815c9e3ed8ff326911a3febf5dccec645cbeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a171db256afa65a6118644a0cb7815c9e3ed8ff326911a3febf5dccec645cbeb->enter($__internal_a171db256afa65a6118644a0cb7815c9e3ed8ff326911a3febf5dccec645cbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_c77c27096502e88576c1e2f38293e425d4f44a4dca586de3c1f566af1ed802c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77c27096502e88576c1e2f38293e425d4f44a4dca586de3c1f566af1ed802c3->enter($__internal_c77c27096502e88576c1e2f38293e425d4f44a4dca586de3c1f566af1ed802c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_c77c27096502e88576c1e2f38293e425d4f44a4dca586de3c1f566af1ed802c3->leave($__internal_c77c27096502e88576c1e2f38293e425d4f44a4dca586de3c1f566af1ed802c3_prof);

        
        $__internal_a171db256afa65a6118644a0cb7815c9e3ed8ff326911a3febf5dccec645cbeb->leave($__internal_a171db256afa65a6118644a0cb7815c9e3ed8ff326911a3febf5dccec645cbeb_prof);

    }

    // line 141
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_d8aa40f359f5c6027cf4e0be332c4c035732a59b47218fea645d443cf5226c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8aa40f359f5c6027cf4e0be332c4c035732a59b47218fea645d443cf5226c2b->enter($__internal_d8aa40f359f5c6027cf4e0be332c4c035732a59b47218fea645d443cf5226c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_f9f100939f48be9d8fb5dba488996ab5691221e83f7e333792a557b6d76949c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f100939f48be9d8fb5dba488996ab5691221e83f7e333792a557b6d76949c9->enter($__internal_f9f100939f48be9d8fb5dba488996ab5691221e83f7e333792a557b6d76949c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_f9f100939f48be9d8fb5dba488996ab5691221e83f7e333792a557b6d76949c9->leave($__internal_f9f100939f48be9d8fb5dba488996ab5691221e83f7e333792a557b6d76949c9_prof);

        
        $__internal_d8aa40f359f5c6027cf4e0be332c4c035732a59b47218fea645d443cf5226c2b->leave($__internal_d8aa40f359f5c6027cf4e0be332c4c035732a59b47218fea645d443cf5226c2b_prof);

    }

    // line 169
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_7f44bf0b38604d051d2e90450239e45cb542b2b41fb0b9c5402ad1958e9c45ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f44bf0b38604d051d2e90450239e45cb542b2b41fb0b9c5402ad1958e9c45ac->enter($__internal_7f44bf0b38604d051d2e90450239e45cb542b2b41fb0b9c5402ad1958e9c45ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_6a90a62fab9f30eea03cc8aa66bacdcdab2b86dfdde75746839ad07b4791f95e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a90a62fab9f30eea03cc8aa66bacdcdab2b86dfdde75746839ad07b4791f95e->enter($__internal_6a90a62fab9f30eea03cc8aa66bacdcdab2b86dfdde75746839ad07b4791f95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_6a90a62fab9f30eea03cc8aa66bacdcdab2b86dfdde75746839ad07b4791f95e->leave($__internal_6a90a62fab9f30eea03cc8aa66bacdcdab2b86dfdde75746839ad07b4791f95e_prof);

        
        $__internal_7f44bf0b38604d051d2e90450239e45cb542b2b41fb0b9c5402ad1958e9c45ac->leave($__internal_7f44bf0b38604d051d2e90450239e45cb542b2b41fb0b9c5402ad1958e9c45ac_prof);

    }

    // line 191
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_5aca4fd6b7d5121379b286b5b37d08635d45c123ed950e4c1e9bd136eac206b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aca4fd6b7d5121379b286b5b37d08635d45c123ed950e4c1e9bd136eac206b7->enter($__internal_5aca4fd6b7d5121379b286b5b37d08635d45c123ed950e4c1e9bd136eac206b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_4382a92ddccde93929004b4c015a4282d1dd4b48470989c7b2d7e5e4a0ab9312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4382a92ddccde93929004b4c015a4282d1dd4b48470989c7b2d7e5e4a0ab9312->enter($__internal_4382a92ddccde93929004b4c015a4282d1dd4b48470989c7b2d7e5e4a0ab9312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_4382a92ddccde93929004b4c015a4282d1dd4b48470989c7b2d7e5e4a0ab9312->leave($__internal_4382a92ddccde93929004b4c015a4282d1dd4b48470989c7b2d7e5e4a0ab9312_prof);

        
        $__internal_5aca4fd6b7d5121379b286b5b37d08635d45c123ed950e4c1e9bd136eac206b7->leave($__internal_5aca4fd6b7d5121379b286b5b37d08635d45c123ed950e4c1e9bd136eac206b7_prof);

    }

    // line 202
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_b3d7a03f9b90f4b6497d8db84e6364c1c6d68e2658980f74980382d7fae52c7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3d7a03f9b90f4b6497d8db84e6364c1c6d68e2658980f74980382d7fae52c7f->enter($__internal_b3d7a03f9b90f4b6497d8db84e6364c1c6d68e2658980f74980382d7fae52c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_172079c57a78ee1b6d91aa9dca8d518ac0d67e1baf16f7bdd59c99717d21d1cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172079c57a78ee1b6d91aa9dca8d518ac0d67e1baf16f7bdd59c99717d21d1cd->enter($__internal_172079c57a78ee1b6d91aa9dca8d518ac0d67e1baf16f7bdd59c99717d21d1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_172079c57a78ee1b6d91aa9dca8d518ac0d67e1baf16f7bdd59c99717d21d1cd->leave($__internal_172079c57a78ee1b6d91aa9dca8d518ac0d67e1baf16f7bdd59c99717d21d1cd_prof);

        
        $__internal_b3d7a03f9b90f4b6497d8db84e6364c1c6d68e2658980f74980382d7fae52c7f->leave($__internal_b3d7a03f9b90f4b6497d8db84e6364c1c6d68e2658980f74980382d7fae52c7f_prof);

    }

    // line 215
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_9d6eb1b29e3222f117628b51afc603d85e79513a6c303c9a28a5d8839ef15002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d6eb1b29e3222f117628b51afc603d85e79513a6c303c9a28a5d8839ef15002->enter($__internal_9d6eb1b29e3222f117628b51afc603d85e79513a6c303c9a28a5d8839ef15002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6c16b2a8f9b42d31b674c573926e862ae70be293c109f26000a1eea272975ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c16b2a8f9b42d31b674c573926e862ae70be293c109f26000a1eea272975ad8->enter($__internal_6c16b2a8f9b42d31b674c573926e862ae70be293c109f26000a1eea272975ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 216
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 217
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_6c16b2a8f9b42d31b674c573926e862ae70be293c109f26000a1eea272975ad8->leave($__internal_6c16b2a8f9b42d31b674c573926e862ae70be293c109f26000a1eea272975ad8_prof);

        
        $__internal_9d6eb1b29e3222f117628b51afc603d85e79513a6c303c9a28a5d8839ef15002->leave($__internal_9d6eb1b29e3222f117628b51afc603d85e79513a6c303c9a28a5d8839ef15002_prof);

    }

    // line 220
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_89c5c3f86206c33c8d96eaac81fbc35f1ff64c2fcec09749226c4ed24e287628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89c5c3f86206c33c8d96eaac81fbc35f1ff64c2fcec09749226c4ed24e287628->enter($__internal_89c5c3f86206c33c8d96eaac81fbc35f1ff64c2fcec09749226c4ed24e287628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_cccf78627c878a764628effa466faf83d80db9a274c78291ce88efec3b42b8a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cccf78627c878a764628effa466faf83d80db9a274c78291ce88efec3b42b8a1->enter($__internal_cccf78627c878a764628effa466faf83d80db9a274c78291ce88efec3b42b8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 222
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 223
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_cccf78627c878a764628effa466faf83d80db9a274c78291ce88efec3b42b8a1->leave($__internal_cccf78627c878a764628effa466faf83d80db9a274c78291ce88efec3b42b8a1_prof);

        
        $__internal_89c5c3f86206c33c8d96eaac81fbc35f1ff64c2fcec09749226c4ed24e287628->leave($__internal_89c5c3f86206c33c8d96eaac81fbc35f1ff64c2fcec09749226c4ed24e287628_prof);

    }

    // line 226
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_8c02b54455926f79d4ca01fef6820956890d22d8c11fd7d549d66d85655c5db6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c02b54455926f79d4ca01fef6820956890d22d8c11fd7d549d66d85655c5db6->enter($__internal_8c02b54455926f79d4ca01fef6820956890d22d8c11fd7d549d66d85655c5db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_49f16fc32764e14d898cbd94de5597df15df0cae34317e160c7ace6920a36001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f16fc32764e14d898cbd94de5597df15df0cae34317e160c7ace6920a36001->enter($__internal_49f16fc32764e14d898cbd94de5597df15df0cae34317e160c7ace6920a36001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 227
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_49f16fc32764e14d898cbd94de5597df15df0cae34317e160c7ace6920a36001->leave($__internal_49f16fc32764e14d898cbd94de5597df15df0cae34317e160c7ace6920a36001_prof);

        
        $__internal_8c02b54455926f79d4ca01fef6820956890d22d8c11fd7d549d66d85655c5db6->leave($__internal_8c02b54455926f79d4ca01fef6820956890d22d8c11fd7d549d66d85655c5db6_prof);

    }

    // line 230
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_4286ae757f591deec9b654c058349a1951ef6f8abf054098dad637939df00ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4286ae757f591deec9b654c058349a1951ef6f8abf054098dad637939df00ac5->enter($__internal_4286ae757f591deec9b654c058349a1951ef6f8abf054098dad637939df00ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_d8bfb1866556bf1f7b1beb822a2643284821cf0ea4ef71de4d194caff3258411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8bfb1866556bf1f7b1beb822a2643284821cf0ea4ef71de4d194caff3258411->enter($__internal_d8bfb1866556bf1f7b1beb822a2643284821cf0ea4ef71de4d194caff3258411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 231
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d8bfb1866556bf1f7b1beb822a2643284821cf0ea4ef71de4d194caff3258411->leave($__internal_d8bfb1866556bf1f7b1beb822a2643284821cf0ea4ef71de4d194caff3258411_prof);

        
        $__internal_4286ae757f591deec9b654c058349a1951ef6f8abf054098dad637939df00ac5->leave($__internal_4286ae757f591deec9b654c058349a1951ef6f8abf054098dad637939df00ac5_prof);

    }

    // line 234
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_5f677795a9afa4483c7f2e8fa05400ec9f4d0d60e25844598f27d67010abae8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f677795a9afa4483c7f2e8fa05400ec9f4d0d60e25844598f27d67010abae8b->enter($__internal_5f677795a9afa4483c7f2e8fa05400ec9f4d0d60e25844598f27d67010abae8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_2fa7588a997a73a7315b487aa7684b8754c9c1b9dd2c47fe9f8448b8bd278fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa7588a997a73a7315b487aa7684b8754c9c1b9dd2c47fe9f8448b8bd278fb4->enter($__internal_2fa7588a997a73a7315b487aa7684b8754c9c1b9dd2c47fe9f8448b8bd278fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_2fa7588a997a73a7315b487aa7684b8754c9c1b9dd2c47fe9f8448b8bd278fb4->leave($__internal_2fa7588a997a73a7315b487aa7684b8754c9c1b9dd2c47fe9f8448b8bd278fb4_prof);

        
        $__internal_5f677795a9afa4483c7f2e8fa05400ec9f4d0d60e25844598f27d67010abae8b->leave($__internal_5f677795a9afa4483c7f2e8fa05400ec9f4d0d60e25844598f27d67010abae8b_prof);

    }

    // line 255
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_111c3a1c7f6301146cb714e59d148c7dc3a5532fd3931071deadc09a6457c6a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_111c3a1c7f6301146cb714e59d148c7dc3a5532fd3931071deadc09a6457c6a1->enter($__internal_111c3a1c7f6301146cb714e59d148c7dc3a5532fd3931071deadc09a6457c6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_05e638df91fd549cbf2baf242b1cab83cb700e72d2e4149fc6d081dbaeff8c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05e638df91fd549cbf2baf242b1cab83cb700e72d2e4149fc6d081dbaeff8c23->enter($__internal_05e638df91fd549cbf2baf242b1cab83cb700e72d2e4149fc6d081dbaeff8c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_05e638df91fd549cbf2baf242b1cab83cb700e72d2e4149fc6d081dbaeff8c23->leave($__internal_05e638df91fd549cbf2baf242b1cab83cb700e72d2e4149fc6d081dbaeff8c23_prof);

        
        $__internal_111c3a1c7f6301146cb714e59d148c7dc3a5532fd3931071deadc09a6457c6a1->leave($__internal_111c3a1c7f6301146cb714e59d148c7dc3a5532fd3931071deadc09a6457c6a1_prof);

    }

    // line 278
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_dcca9c781b7b961c0a5043b2fdb9e808bd0fe91f497af579252cb07bbfdcfc7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcca9c781b7b961c0a5043b2fdb9e808bd0fe91f497af579252cb07bbfdcfc7d->enter($__internal_dcca9c781b7b961c0a5043b2fdb9e808bd0fe91f497af579252cb07bbfdcfc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        $__internal_e2a41d6b972c85941c9c0b3f962e243118362b0a854cbc95b073cc58afbd4c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a41d6b972c85941c9c0b3f962e243118362b0a854cbc95b073cc58afbd4c32->enter($__internal_e2a41d6b972c85941c9c0b3f962e243118362b0a854cbc95b073cc58afbd4c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

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
        
        $__internal_e2a41d6b972c85941c9c0b3f962e243118362b0a854cbc95b073cc58afbd4c32->leave($__internal_e2a41d6b972c85941c9c0b3f962e243118362b0a854cbc95b073cc58afbd4c32_prof);

        
        $__internal_dcca9c781b7b961c0a5043b2fdb9e808bd0fe91f497af579252cb07bbfdcfc7d->leave($__internal_dcca9c781b7b961c0a5043b2fdb9e808bd0fe91f497af579252cb07bbfdcfc7d_prof);

    }

    // line 314
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_a71422c5706df6a96b22e541f947affee053ab12ed272584e4e40b58e0158079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a71422c5706df6a96b22e541f947affee053ab12ed272584e4e40b58e0158079->enter($__internal_a71422c5706df6a96b22e541f947affee053ab12ed272584e4e40b58e0158079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_1ca09a6038c2f264a0b6a02f016bc1c7121969b7fb3fd14b701a8020c2bb6dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca09a6038c2f264a0b6a02f016bc1c7121969b7fb3fd14b701a8020c2bb6dd1->enter($__internal_1ca09a6038c2f264a0b6a02f016bc1c7121969b7fb3fd14b701a8020c2bb6dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

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
        
        $__internal_1ca09a6038c2f264a0b6a02f016bc1c7121969b7fb3fd14b701a8020c2bb6dd1->leave($__internal_1ca09a6038c2f264a0b6a02f016bc1c7121969b7fb3fd14b701a8020c2bb6dd1_prof);

        
        $__internal_a71422c5706df6a96b22e541f947affee053ab12ed272584e4e40b58e0158079->leave($__internal_a71422c5706df6a96b22e541f947affee053ab12ed272584e4e40b58e0158079_prof);

    }

    // line 320
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_0b2028fee26b5bc025a870f839e9aeb3bb4e907b94f842e199ed69f7298e8c18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b2028fee26b5bc025a870f839e9aeb3bb4e907b94f842e199ed69f7298e8c18->enter($__internal_0b2028fee26b5bc025a870f839e9aeb3bb4e907b94f842e199ed69f7298e8c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_4ad612fc04c9e4e56c6901a8b02cda64d2008495d8974460e18d04170fc55882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad612fc04c9e4e56c6901a8b02cda64d2008495d8974460e18d04170fc55882->enter($__internal_4ad612fc04c9e4e56c6901a8b02cda64d2008495d8974460e18d04170fc55882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 321
        $context["force_error"] = true;
        // line 322
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4ad612fc04c9e4e56c6901a8b02cda64d2008495d8974460e18d04170fc55882->leave($__internal_4ad612fc04c9e4e56c6901a8b02cda64d2008495d8974460e18d04170fc55882_prof);

        
        $__internal_0b2028fee26b5bc025a870f839e9aeb3bb4e907b94f842e199ed69f7298e8c18->leave($__internal_0b2028fee26b5bc025a870f839e9aeb3bb4e907b94f842e199ed69f7298e8c18_prof);

    }

    // line 325
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_6ea738e76cceb63e760515ebff13786674617e2dee11f3584aaa057807528666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ea738e76cceb63e760515ebff13786674617e2dee11f3584aaa057807528666->enter($__internal_6ea738e76cceb63e760515ebff13786674617e2dee11f3584aaa057807528666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_372cd760b4597f500036632a109e0655e1da0001e4def6b3c9b2cd72eec6b43f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_372cd760b4597f500036632a109e0655e1da0001e4def6b3c9b2cd72eec6b43f->enter($__internal_372cd760b4597f500036632a109e0655e1da0001e4def6b3c9b2cd72eec6b43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 326
        $context["force_error"] = true;
        // line 327
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_372cd760b4597f500036632a109e0655e1da0001e4def6b3c9b2cd72eec6b43f->leave($__internal_372cd760b4597f500036632a109e0655e1da0001e4def6b3c9b2cd72eec6b43f_prof);

        
        $__internal_6ea738e76cceb63e760515ebff13786674617e2dee11f3584aaa057807528666->leave($__internal_6ea738e76cceb63e760515ebff13786674617e2dee11f3584aaa057807528666_prof);

    }

    // line 330
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_9739f76a3ae4c02eeaa30567b5fedd5a6e5b21977324405a80b49cb19aedb229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9739f76a3ae4c02eeaa30567b5fedd5a6e5b21977324405a80b49cb19aedb229->enter($__internal_9739f76a3ae4c02eeaa30567b5fedd5a6e5b21977324405a80b49cb19aedb229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_27479488092b2b2387ec6a4d931d56247b9d5f5065b0d4b170424324dc598f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27479488092b2b2387ec6a4d931d56247b9d5f5065b0d4b170424324dc598f1e->enter($__internal_27479488092b2b2387ec6a4d931d56247b9d5f5065b0d4b170424324dc598f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 331
        $context["force_error"] = true;
        // line 332
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_27479488092b2b2387ec6a4d931d56247b9d5f5065b0d4b170424324dc598f1e->leave($__internal_27479488092b2b2387ec6a4d931d56247b9d5f5065b0d4b170424324dc598f1e_prof);

        
        $__internal_9739f76a3ae4c02eeaa30567b5fedd5a6e5b21977324405a80b49cb19aedb229->leave($__internal_9739f76a3ae4c02eeaa30567b5fedd5a6e5b21977324405a80b49cb19aedb229_prof);

    }

    // line 335
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_4027f7fcc430337a44f1976e825a7055c536e4712bf8b52f4e8ed01fa6d4e301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4027f7fcc430337a44f1976e825a7055c536e4712bf8b52f4e8ed01fa6d4e301->enter($__internal_4027f7fcc430337a44f1976e825a7055c536e4712bf8b52f4e8ed01fa6d4e301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_418560a3213ac21ec1f31f7cfa016ced5fda3839055aef58262609aad8808539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_418560a3213ac21ec1f31f7cfa016ced5fda3839055aef58262609aad8808539->enter($__internal_418560a3213ac21ec1f31f7cfa016ced5fda3839055aef58262609aad8808539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 336
        $context["force_error"] = true;
        // line 337
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_418560a3213ac21ec1f31f7cfa016ced5fda3839055aef58262609aad8808539->leave($__internal_418560a3213ac21ec1f31f7cfa016ced5fda3839055aef58262609aad8808539_prof);

        
        $__internal_4027f7fcc430337a44f1976e825a7055c536e4712bf8b52f4e8ed01fa6d4e301->leave($__internal_4027f7fcc430337a44f1976e825a7055c536e4712bf8b52f4e8ed01fa6d4e301_prof);

    }

    // line 340
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_7b6f20c5978984f6d3606595dda7128bc7da265d7d853e91a74cc95e3d093602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b6f20c5978984f6d3606595dda7128bc7da265d7d853e91a74cc95e3d093602->enter($__internal_7b6f20c5978984f6d3606595dda7128bc7da265d7d853e91a74cc95e3d093602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ec1415457d21576c3893bcdec0870469b406ac52df468191cb05e9e35eb8f146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec1415457d21576c3893bcdec0870469b406ac52df468191cb05e9e35eb8f146->enter($__internal_ec1415457d21576c3893bcdec0870469b406ac52df468191cb05e9e35eb8f146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_ec1415457d21576c3893bcdec0870469b406ac52df468191cb05e9e35eb8f146->leave($__internal_ec1415457d21576c3893bcdec0870469b406ac52df468191cb05e9e35eb8f146_prof);

        
        $__internal_7b6f20c5978984f6d3606595dda7128bc7da265d7d853e91a74cc95e3d093602->leave($__internal_7b6f20c5978984f6d3606595dda7128bc7da265d7d853e91a74cc95e3d093602_prof);

    }

    // line 347
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_2a0129f842e9b790b6d64e5c836ddcdc891e7cb58f5dd04e45b94384eccd501a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a0129f842e9b790b6d64e5c836ddcdc891e7cb58f5dd04e45b94384eccd501a->enter($__internal_2a0129f842e9b790b6d64e5c836ddcdc891e7cb58f5dd04e45b94384eccd501a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_2051ceba60996a842ebd81aeeabf62878f273db19d73fa86e97ea61ea0aea724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2051ceba60996a842ebd81aeeabf62878f273db19d73fa86e97ea61ea0aea724->enter($__internal_2051ceba60996a842ebd81aeeabf62878f273db19d73fa86e97ea61ea0aea724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_2051ceba60996a842ebd81aeeabf62878f273db19d73fa86e97ea61ea0aea724->leave($__internal_2051ceba60996a842ebd81aeeabf62878f273db19d73fa86e97ea61ea0aea724_prof);

        
        $__internal_2a0129f842e9b790b6d64e5c836ddcdc891e7cb58f5dd04e45b94384eccd501a->leave($__internal_2a0129f842e9b790b6d64e5c836ddcdc891e7cb58f5dd04e45b94384eccd501a_prof);

    }

    // line 355
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_99e6d057d849d887da163ea536f33e690ea63b1be36cf974aea2819b56491165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99e6d057d849d887da163ea536f33e690ea63b1be36cf974aea2819b56491165->enter($__internal_99e6d057d849d887da163ea536f33e690ea63b1be36cf974aea2819b56491165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_e17354708d0f7677b744ffaba90c6428059a21d800ef0b7c09480b0e60ee1df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17354708d0f7677b744ffaba90c6428059a21d800ef0b7c09480b0e60ee1df7->enter($__internal_e17354708d0f7677b744ffaba90c6428059a21d800ef0b7c09480b0e60ee1df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_e17354708d0f7677b744ffaba90c6428059a21d800ef0b7c09480b0e60ee1df7->leave($__internal_e17354708d0f7677b744ffaba90c6428059a21d800ef0b7c09480b0e60ee1df7_prof);

        
        $__internal_99e6d057d849d887da163ea536f33e690ea63b1be36cf974aea2819b56491165->leave($__internal_99e6d057d849d887da163ea536f33e690ea63b1be36cf974aea2819b56491165_prof);

    }

    // line 373
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_29e1fa480d2e95f0364a5e02cea4202ffae8f68235fce252c590afba7f510350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29e1fa480d2e95f0364a5e02cea4202ffae8f68235fce252c590afba7f510350->enter($__internal_29e1fa480d2e95f0364a5e02cea4202ffae8f68235fce252c590afba7f510350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_74520c05ae3a29b4fa13804f80b3d58b48c8fa593dffe4d4710fdefe28d9451e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74520c05ae3a29b4fa13804f80b3d58b48c8fa593dffe4d4710fdefe28d9451e->enter($__internal_74520c05ae3a29b4fa13804f80b3d58b48c8fa593dffe4d4710fdefe28d9451e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_74520c05ae3a29b4fa13804f80b3d58b48c8fa593dffe4d4710fdefe28d9451e->leave($__internal_74520c05ae3a29b4fa13804f80b3d58b48c8fa593dffe4d4710fdefe28d9451e_prof);

        
        $__internal_29e1fa480d2e95f0364a5e02cea4202ffae8f68235fce252c590afba7f510350->leave($__internal_29e1fa480d2e95f0364a5e02cea4202ffae8f68235fce252c590afba7f510350_prof);

    }

    // line 386
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_c36d084a2ee33298c81afb8531b79e6f5a860dc6e755f5987aa8d1ee32bc5e66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c36d084a2ee33298c81afb8531b79e6f5a860dc6e755f5987aa8d1ee32bc5e66->enter($__internal_c36d084a2ee33298c81afb8531b79e6f5a860dc6e755f5987aa8d1ee32bc5e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        $__internal_17679427fef12d6395ee8b49be591021fab09b8286d4acc156accefd831b78f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17679427fef12d6395ee8b49be591021fab09b8286d4acc156accefd831b78f6->enter($__internal_17679427fef12d6395ee8b49be591021fab09b8286d4acc156accefd831b78f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 387
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 388
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
        
        $__internal_17679427fef12d6395ee8b49be591021fab09b8286d4acc156accefd831b78f6->leave($__internal_17679427fef12d6395ee8b49be591021fab09b8286d4acc156accefd831b78f6_prof);

        
        $__internal_c36d084a2ee33298c81afb8531b79e6f5a860dc6e755f5987aa8d1ee32bc5e66->leave($__internal_c36d084a2ee33298c81afb8531b79e6f5a860dc6e755f5987aa8d1ee32bc5e66_prof);

    }

    // line 392
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_8c2ad7382a05dcae3320afe658f67971d192a5b4f5e6c5e268a2952187c6b284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c2ad7382a05dcae3320afe658f67971d192a5b4f5e6c5e268a2952187c6b284->enter($__internal_8c2ad7382a05dcae3320afe658f67971d192a5b4f5e6c5e268a2952187c6b284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_a22eaba3dd0168d30cd36c935d34fa222c561f4366d00d1a4f589d900673ad86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a22eaba3dd0168d30cd36c935d34fa222c561f4366d00d1a4f589d900673ad86->enter($__internal_a22eaba3dd0168d30cd36c935d34fa222c561f4366d00d1a4f589d900673ad86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 393
        echo "    ";
        $context["force_error"] = true;
        // line 394
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_a22eaba3dd0168d30cd36c935d34fa222c561f4366d00d1a4f589d900673ad86->leave($__internal_a22eaba3dd0168d30cd36c935d34fa222c561f4366d00d1a4f589d900673ad86_prof);

        
        $__internal_8c2ad7382a05dcae3320afe658f67971d192a5b4f5e6c5e268a2952187c6b284->leave($__internal_8c2ad7382a05dcae3320afe658f67971d192a5b4f5e6c5e268a2952187c6b284_prof);

    }

    // line 397
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_d0bf079bc734c584341e78ffc8ba05f7a40ced65f8f04e315b319965f7496d80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0bf079bc734c584341e78ffc8ba05f7a40ced65f8f04e315b319965f7496d80->enter($__internal_d0bf079bc734c584341e78ffc8ba05f7a40ced65f8f04e315b319965f7496d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_684ce48c2a7de6326e1260547e1d8e88210f8cee1777fcb7442553e23b1112d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684ce48c2a7de6326e1260547e1d8e88210f8cee1777fcb7442553e23b1112d8->enter($__internal_684ce48c2a7de6326e1260547e1d8e88210f8cee1777fcb7442553e23b1112d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_684ce48c2a7de6326e1260547e1d8e88210f8cee1777fcb7442553e23b1112d8->leave($__internal_684ce48c2a7de6326e1260547e1d8e88210f8cee1777fcb7442553e23b1112d8_prof);

        
        $__internal_d0bf079bc734c584341e78ffc8ba05f7a40ced65f8f04e315b319965f7496d80->leave($__internal_d0bf079bc734c584341e78ffc8ba05f7a40ced65f8f04e315b319965f7496d80_prof);

    }

    // line 419
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_fac493df470455d8a46dea010759be96b5b37c1220099d07dc7e0316aa41a449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fac493df470455d8a46dea010759be96b5b37c1220099d07dc7e0316aa41a449->enter($__internal_fac493df470455d8a46dea010759be96b5b37c1220099d07dc7e0316aa41a449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_a7f2b0d81fe607d475e24ad9b1a13ac3bd3e3025db9cc227c997b0b6d5789829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f2b0d81fe607d475e24ad9b1a13ac3bd3e3025db9cc227c997b0b6d5789829->enter($__internal_a7f2b0d81fe607d475e24ad9b1a13ac3bd3e3025db9cc227c997b0b6d5789829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 420
        echo "    ";
        $context["force_error"] = true;
        // line 421
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_a7f2b0d81fe607d475e24ad9b1a13ac3bd3e3025db9cc227c997b0b6d5789829->leave($__internal_a7f2b0d81fe607d475e24ad9b1a13ac3bd3e3025db9cc227c997b0b6d5789829_prof);

        
        $__internal_fac493df470455d8a46dea010759be96b5b37c1220099d07dc7e0316aa41a449->leave($__internal_fac493df470455d8a46dea010759be96b5b37c1220099d07dc7e0316aa41a449_prof);

    }

    // line 424
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_0060ff9aad32726a281e1593f9958d20ac3e9d4e88578e596254b5a6a2a50837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0060ff9aad32726a281e1593f9958d20ac3e9d4e88578e596254b5a6a2a50837->enter($__internal_0060ff9aad32726a281e1593f9958d20ac3e9d4e88578e596254b5a6a2a50837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_24fc36b28c9fb16801b33983db389a8f4895bade7191a273a7c20c7677c41c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24fc36b28c9fb16801b33983db389a8f4895bade7191a273a7c20c7677c41c62->enter($__internal_24fc36b28c9fb16801b33983db389a8f4895bade7191a273a7c20c7677c41c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_24fc36b28c9fb16801b33983db389a8f4895bade7191a273a7c20c7677c41c62->leave($__internal_24fc36b28c9fb16801b33983db389a8f4895bade7191a273a7c20c7677c41c62_prof);

        
        $__internal_0060ff9aad32726a281e1593f9958d20ac3e9d4e88578e596254b5a6a2a50837->leave($__internal_0060ff9aad32726a281e1593f9958d20ac3e9d4e88578e596254b5a6a2a50837_prof);

    }

    // line 447
    public function block_easyadmin_rest($context, array $blocks = array())
    {
        $__internal_16385048b4a6108ed3ef99f9d1cfd73e24a724fe6f53b5a6114599900ffe3297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16385048b4a6108ed3ef99f9d1cfd73e24a724fe6f53b5a6114599900ffe3297->enter($__internal_16385048b4a6108ed3ef99f9d1cfd73e24a724fe6f53b5a6114599900ffe3297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_rest"));

        $__internal_d85af0e05e552859dc93718c41ff3e2cfa3430a435135769080d5121487b5109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85af0e05e552859dc93718c41ff3e2cfa3430a435135769080d5121487b5109->enter($__internal_d85af0e05e552859dc93718c41ff3e2cfa3430a435135769080d5121487b5109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_rest"));

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
        
        $__internal_d85af0e05e552859dc93718c41ff3e2cfa3430a435135769080d5121487b5109->leave($__internal_d85af0e05e552859dc93718c41ff3e2cfa3430a435135769080d5121487b5109_prof);

        
        $__internal_16385048b4a6108ed3ef99f9d1cfd73e24a724fe6f53b5a6114599900ffe3297->leave($__internal_16385048b4a6108ed3ef99f9d1cfd73e24a724fe6f53b5a6114599900ffe3297_prof);

    }

    // line 460
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_389b4dec87c5822e7b8de74859715538deaf8d6ea88e56ad6caa951085eb556a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_389b4dec87c5822e7b8de74859715538deaf8d6ea88e56ad6caa951085eb556a->enter($__internal_389b4dec87c5822e7b8de74859715538deaf8d6ea88e56ad6caa951085eb556a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_d73499fac3e70b257b12905e8e8f604489695f03714a6ed4408e24cf31c41156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73499fac3e70b257b12905e8e8f604489695f03714a6ed4408e24cf31c41156->enter($__internal_d73499fac3e70b257b12905e8e8f604489695f03714a6ed4408e24cf31c41156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

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
        
        $__internal_d73499fac3e70b257b12905e8e8f604489695f03714a6ed4408e24cf31c41156->leave($__internal_d73499fac3e70b257b12905e8e8f604489695f03714a6ed4408e24cf31c41156_prof);

        
        $__internal_389b4dec87c5822e7b8de74859715538deaf8d6ea88e56ad6caa951085eb556a->leave($__internal_389b4dec87c5822e7b8de74859715538deaf8d6ea88e56ad6caa951085eb556a_prof);

    }

    // line 489
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_1729c5b3c8e9c2b822b7080fe1a900e06ef07ea73dd5ab9419ffd1542a4b2e29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1729c5b3c8e9c2b822b7080fe1a900e06ef07ea73dd5ab9419ffd1542a4b2e29->enter($__internal_1729c5b3c8e9c2b822b7080fe1a900e06ef07ea73dd5ab9419ffd1542a4b2e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        $__internal_1b214829603dfd86e105d4f3839b9989a8f527394f69eb6602b3c8ebbfd7b646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b214829603dfd86e105d4f3839b9989a8f527394f69eb6602b3c8ebbfd7b646->enter($__internal_1b214829603dfd86e105d4f3839b9989a8f527394f69eb6602b3c8ebbfd7b646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

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
        
        $__internal_1b214829603dfd86e105d4f3839b9989a8f527394f69eb6602b3c8ebbfd7b646->leave($__internal_1b214829603dfd86e105d4f3839b9989a8f527394f69eb6602b3c8ebbfd7b646_prof);

        
        $__internal_1729c5b3c8e9c2b822b7080fe1a900e06ef07ea73dd5ab9419ffd1542a4b2e29->leave($__internal_1729c5b3c8e9c2b822b7080fe1a900e06ef07ea73dd5ab9419ffd1542a4b2e29_prof);

    }

    // line 532
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_699f287da716288ad36f10dd89a9e843887c7d0af5a56043877e1d77f5473d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_699f287da716288ad36f10dd89a9e843887c7d0af5a56043877e1d77f5473d37->enter($__internal_699f287da716288ad36f10dd89a9e843887c7d0af5a56043877e1d77f5473d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        $__internal_8985d592a6802d8fb9dd05f1f929bc80dc9425f8b266d5fed11ba4b3ae7cf221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8985d592a6802d8fb9dd05f1f929bc80dc9425f8b266d5fed11ba4b3ae7cf221->enter($__internal_8985d592a6802d8fb9dd05f1f929bc80dc9425f8b266d5fed11ba4b3ae7cf221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        // line 533
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 534
($context["attr"] ?? $this->getContext($context, "attr")), array("data-easyadmin-autocomplete-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 537
($context["autocomplete_entity_name"] ?? $this->getContext($context, "autocomplete_entity_name"))))))));
        // line 540
        echo "
";
        
        $__internal_8985d592a6802d8fb9dd05f1f929bc80dc9425f8b266d5fed11ba4b3ae7cf221->leave($__internal_8985d592a6802d8fb9dd05f1f929bc80dc9425f8b266d5fed11ba4b3ae7cf221_prof);

        
        $__internal_699f287da716288ad36f10dd89a9e843887c7d0af5a56043877e1d77f5473d37->leave($__internal_699f287da716288ad36f10dd89a9e843887c7d0af5a56043877e1d77f5473d37_prof);

    }

    // line 543
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        $__internal_a31cda00d8da2a845f6b2a63fa401dc26dc89462c200def90ba57d5cf4a3132e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a31cda00d8da2a845f6b2a63fa401dc26dc89462c200def90ba57d5cf4a3132e->enter($__internal_a31cda00d8da2a845f6b2a63fa401dc26dc89462c200def90ba57d5cf4a3132e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        $__internal_2935aa6adf723e344457820dc7f1857f1efbc6c5f2e7bc9306bfd265dcd45e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2935aa6adf723e344457820dc7f1857f1efbc6c5f2e7bc9306bfd265dcd45e6a->enter($__internal_2935aa6adf723e344457820dc7f1857f1efbc6c5f2e7bc9306bfd265dcd45e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 544
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "vars", array()), "name", array());
        // line 545
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_2935aa6adf723e344457820dc7f1857f1efbc6c5f2e7bc9306bfd265dcd45e6a->leave($__internal_2935aa6adf723e344457820dc7f1857f1efbc6c5f2e7bc9306bfd265dcd45e6a_prof);

        
        $__internal_a31cda00d8da2a845f6b2a63fa401dc26dc89462c200def90ba57d5cf4a3132e->leave($__internal_a31cda00d8da2a845f6b2a63fa401dc26dc89462c200def90ba57d5cf4a3132e_prof);

    }

    // line 549
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        $__internal_35c42f19d74566208f4b23b7902ad63adfe05c56a8e0b7149563a7e94e25e426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c42f19d74566208f4b23b7902ad63adfe05c56a8e0b7149563a7e94e25e426->enter($__internal_35c42f19d74566208f4b23b7902ad63adfe05c56a8e0b7149563a7e94e25e426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        $__internal_d7c257b55091eda15276bace68d2fca1389d68445d17d07d3d46fce570523448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c257b55091eda15276bace68d2fca1389d68445d17d07d3d46fce570523448->enter($__internal_d7c257b55091eda15276bace68d2fca1389d68445d17d07d3d46fce570523448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        // line 550
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
        
        $__internal_d7c257b55091eda15276bace68d2fca1389d68445d17d07d3d46fce570523448->leave($__internal_d7c257b55091eda15276bace68d2fca1389d68445d17d07d3d46fce570523448_prof);

        
        $__internal_35c42f19d74566208f4b23b7902ad63adfe05c56a8e0b7149563a7e94e25e426->leave($__internal_35c42f19d74566208f4b23b7902ad63adfe05c56a8e0b7149563a7e94e25e426_prof);

    }

    // line 556
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        $__internal_c8bb4412b065313acfc86b4d275712cac2281ac7bb16eaec15ea5a96f792c7d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8bb4412b065313acfc86b4d275712cac2281ac7bb16eaec15ea5a96f792c7d1->enter($__internal_c8bb4412b065313acfc86b4d275712cac2281ac7bb16eaec15ea5a96f792c7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        $__internal_933c9d6b95b85b79b3b9aa2d5ee3f9e05c470979ac30b37f18d8d5f2a027ecfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933c9d6b95b85b79b3b9aa2d5ee3f9e05c470979ac30b37f18d8d5f2a027ecfa->enter($__internal_933c9d6b95b85b79b3b9aa2d5ee3f9e05c470979ac30b37f18d8d5f2a027ecfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

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
        
        $__internal_933c9d6b95b85b79b3b9aa2d5ee3f9e05c470979ac30b37f18d8d5f2a027ecfa->leave($__internal_933c9d6b95b85b79b3b9aa2d5ee3f9e05c470979ac30b37f18d8d5f2a027ecfa_prof);

        
        $__internal_c8bb4412b065313acfc86b4d275712cac2281ac7bb16eaec15ea5a96f792c7d1->leave($__internal_c8bb4412b065313acfc86b4d275712cac2281ac7bb16eaec15ea5a96f792c7d1_prof);

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
