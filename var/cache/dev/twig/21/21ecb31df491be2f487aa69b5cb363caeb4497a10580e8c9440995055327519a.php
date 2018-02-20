<?php

/* @EasyAdmin/form/bootstrap_3_layout.html.twig */
class __TwigTemplate_c30cc09ce292d17c2d14a496598096965bb13821b05d303f4ee8230bfb155595 extends Twig_Template
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
        $__internal_004b74bdb2a3bafcf41c9fac4d772323305c1901ab4e495a40d01c5626ea06fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_004b74bdb2a3bafcf41c9fac4d772323305c1901ab4e495a40d01c5626ea06fc->enter($__internal_004b74bdb2a3bafcf41c9fac4d772323305c1901ab4e495a40d01c5626ea06fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        $__internal_f793fa4649ee73577b0d383e49ec424f9e1a4eaa23567b4ee8177b1fc044439a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f793fa4649ee73577b0d383e49ec424f9e1a4eaa23567b4ee8177b1fc044439a->enter($__internal_f793fa4649ee73577b0d383e49ec424f9e1a4eaa23567b4ee8177b1fc044439a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

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
        
        $__internal_004b74bdb2a3bafcf41c9fac4d772323305c1901ab4e495a40d01c5626ea06fc->leave($__internal_004b74bdb2a3bafcf41c9fac4d772323305c1901ab4e495a40d01c5626ea06fc_prof);

        
        $__internal_f793fa4649ee73577b0d383e49ec424f9e1a4eaa23567b4ee8177b1fc044439a->leave($__internal_f793fa4649ee73577b0d383e49ec424f9e1a4eaa23567b4ee8177b1fc044439a_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_bfd653c0cd4914d5a573f7f3b776f294f86410d7f37885789166a39c709a35ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfd653c0cd4914d5a573f7f3b776f294f86410d7f37885789166a39c709a35ce->enter($__internal_bfd653c0cd4914d5a573f7f3b776f294f86410d7f37885789166a39c709a35ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_745aa97a115b93525492d42bd1db50cae402ea381a2c16d28c59839a7f242cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_745aa97a115b93525492d42bd1db50cae402ea381a2c16d28c59839a7f242cfa->enter($__internal_745aa97a115b93525492d42bd1db50cae402ea381a2c16d28c59839a7f242cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

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
        
        $__internal_745aa97a115b93525492d42bd1db50cae402ea381a2c16d28c59839a7f242cfa->leave($__internal_745aa97a115b93525492d42bd1db50cae402ea381a2c16d28c59839a7f242cfa_prof);

        
        $__internal_bfd653c0cd4914d5a573f7f3b776f294f86410d7f37885789166a39c709a35ce->leave($__internal_bfd653c0cd4914d5a573f7f3b776f294f86410d7f37885789166a39c709a35ce_prof);

    }

    // line 28
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_fcc53526d968c026b6460629826d93ef6ac5b42e4c1aaa1e25b0225104d03f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcc53526d968c026b6460629826d93ef6ac5b42e4c1aaa1e25b0225104d03f7a->enter($__internal_fcc53526d968c026b6460629826d93ef6ac5b42e4c1aaa1e25b0225104d03f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_83bb68b319cdf4f8f1ed0f24f385bc229b81b6c2d3ec5f1dfaaac8b2511ebbdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83bb68b319cdf4f8f1ed0f24f385bc229b81b6c2d3ec5f1dfaaac8b2511ebbdc->enter($__internal_83bb68b319cdf4f8f1ed0f24f385bc229b81b6c2d3ec5f1dfaaac8b2511ebbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

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
        
        $__internal_83bb68b319cdf4f8f1ed0f24f385bc229b81b6c2d3ec5f1dfaaac8b2511ebbdc->leave($__internal_83bb68b319cdf4f8f1ed0f24f385bc229b81b6c2d3ec5f1dfaaac8b2511ebbdc_prof);

        
        $__internal_fcc53526d968c026b6460629826d93ef6ac5b42e4c1aaa1e25b0225104d03f7a->leave($__internal_fcc53526d968c026b6460629826d93ef6ac5b42e4c1aaa1e25b0225104d03f7a_prof);

    }

    // line 56
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_9273f12931a9381d5c20f49426f5063da4e83f125ae1c9a2419f494a8fb500f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9273f12931a9381d5c20f49426f5063da4e83f125ae1c9a2419f494a8fb500f5->enter($__internal_9273f12931a9381d5c20f49426f5063da4e83f125ae1c9a2419f494a8fb500f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_07b86c9dc12fd7a3fb778ca9ce6320292f63a6ce51e2f3b31e7eb98fb5d7c7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b86c9dc12fd7a3fb778ca9ce6320292f63a6ce51e2f3b31e7eb98fb5d7c7c9->enter($__internal_07b86c9dc12fd7a3fb778ca9ce6320292f63a6ce51e2f3b31e7eb98fb5d7c7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 57
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 58
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 60
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_07b86c9dc12fd7a3fb778ca9ce6320292f63a6ce51e2f3b31e7eb98fb5d7c7c9->leave($__internal_07b86c9dc12fd7a3fb778ca9ce6320292f63a6ce51e2f3b31e7eb98fb5d7c7c9_prof);

        
        $__internal_9273f12931a9381d5c20f49426f5063da4e83f125ae1c9a2419f494a8fb500f5->leave($__internal_9273f12931a9381d5c20f49426f5063da4e83f125ae1c9a2419f494a8fb500f5_prof);

    }

    // line 63
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_af6c8cc271bdb1b19a44b7b32022f56e5d97359a4ce1375390ea3b2da147e34f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af6c8cc271bdb1b19a44b7b32022f56e5d97359a4ce1375390ea3b2da147e34f->enter($__internal_af6c8cc271bdb1b19a44b7b32022f56e5d97359a4ce1375390ea3b2da147e34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_1bd9db101dd5ce2c0b9dad425ba7f6324e0f21c33658edf4b1ac10c1f77773c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd9db101dd5ce2c0b9dad425ba7f6324e0f21c33658edf4b1ac10c1f77773c4->enter($__internal_1bd9db101dd5ce2c0b9dad425ba7f6324e0f21c33658edf4b1ac10c1f77773c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 64
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 65
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_1bd9db101dd5ce2c0b9dad425ba7f6324e0f21c33658edf4b1ac10c1f77773c4->leave($__internal_1bd9db101dd5ce2c0b9dad425ba7f6324e0f21c33658edf4b1ac10c1f77773c4_prof);

        
        $__internal_af6c8cc271bdb1b19a44b7b32022f56e5d97359a4ce1375390ea3b2da147e34f->leave($__internal_af6c8cc271bdb1b19a44b7b32022f56e5d97359a4ce1375390ea3b2da147e34f_prof);

    }

    // line 68
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_09e26fd79b353aedf59157e2b87f0fa79cec9660c5a01c5c547d08a15edd0855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09e26fd79b353aedf59157e2b87f0fa79cec9660c5a01c5c547d08a15edd0855->enter($__internal_09e26fd79b353aedf59157e2b87f0fa79cec9660c5a01c5c547d08a15edd0855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_8cb5d2e77b5cd6d56561e04c233897402ee53171b3a69351c98c7c904d5d9115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb5d2e77b5cd6d56561e04c233897402ee53171b3a69351c98c7c904d5d9115->enter($__internal_8cb5d2e77b5cd6d56561e04c233897402ee53171b3a69351c98c7c904d5d9115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 69
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 70
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_8cb5d2e77b5cd6d56561e04c233897402ee53171b3a69351c98c7c904d5d9115->leave($__internal_8cb5d2e77b5cd6d56561e04c233897402ee53171b3a69351c98c7c904d5d9115_prof);

        
        $__internal_09e26fd79b353aedf59157e2b87f0fa79cec9660c5a01c5c547d08a15edd0855->leave($__internal_09e26fd79b353aedf59157e2b87f0fa79cec9660c5a01c5c547d08a15edd0855_prof);

    }

    // line 73
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_acdc53542625c2dbab8487ee9cfeb266253477cefcfa2a72513b351a8f2c4eaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acdc53542625c2dbab8487ee9cfeb266253477cefcfa2a72513b351a8f2c4eaf->enter($__internal_acdc53542625c2dbab8487ee9cfeb266253477cefcfa2a72513b351a8f2c4eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_a8cd982276eef72a3b0efe13da5b968f342c2e5a80eeede5e90038e66c46c63e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8cd982276eef72a3b0efe13da5b968f342c2e5a80eeede5e90038e66c46c63e->enter($__internal_a8cd982276eef72a3b0efe13da5b968f342c2e5a80eeede5e90038e66c46c63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_a8cd982276eef72a3b0efe13da5b968f342c2e5a80eeede5e90038e66c46c63e->leave($__internal_a8cd982276eef72a3b0efe13da5b968f342c2e5a80eeede5e90038e66c46c63e_prof);

        
        $__internal_acdc53542625c2dbab8487ee9cfeb266253477cefcfa2a72513b351a8f2c4eaf->leave($__internal_acdc53542625c2dbab8487ee9cfeb266253477cefcfa2a72513b351a8f2c4eaf_prof);

    }

    // line 86
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_d531ed134c735abfc1448d1c771db5ea7d86d61522fc609f478405daaf691d9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d531ed134c735abfc1448d1c771db5ea7d86d61522fc609f478405daaf691d9f->enter($__internal_d531ed134c735abfc1448d1c771db5ea7d86d61522fc609f478405daaf691d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_66ee103a75128f652da08e1afba46eb97c83ccfb6149023ce3b63196a09db2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ee103a75128f652da08e1afba46eb97c83ccfb6149023ce3b63196a09db2ed->enter($__internal_66ee103a75128f652da08e1afba46eb97c83ccfb6149023ce3b63196a09db2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 87
        echo "<div class=\"input-group\">";
        // line 88
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 89
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_66ee103a75128f652da08e1afba46eb97c83ccfb6149023ce3b63196a09db2ed->leave($__internal_66ee103a75128f652da08e1afba46eb97c83ccfb6149023ce3b63196a09db2ed_prof);

        
        $__internal_d531ed134c735abfc1448d1c771db5ea7d86d61522fc609f478405daaf691d9f->leave($__internal_d531ed134c735abfc1448d1c771db5ea7d86d61522fc609f478405daaf691d9f_prof);

    }

    // line 93
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_86eb38a0b64f210d75b03ac0de35876fb8622e3a1b8b98bcc2759b9c907eb5de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86eb38a0b64f210d75b03ac0de35876fb8622e3a1b8b98bcc2759b9c907eb5de->enter($__internal_86eb38a0b64f210d75b03ac0de35876fb8622e3a1b8b98bcc2759b9c907eb5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_1270115cbaee1d56b79f1c9ab872610ab3927edcf83e70e534ec95d9bdca280d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1270115cbaee1d56b79f1c9ab872610ab3927edcf83e70e534ec95d9bdca280d->enter($__internal_1270115cbaee1d56b79f1c9ab872610ab3927edcf83e70e534ec95d9bdca280d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_1270115cbaee1d56b79f1c9ab872610ab3927edcf83e70e534ec95d9bdca280d->leave($__internal_1270115cbaee1d56b79f1c9ab872610ab3927edcf83e70e534ec95d9bdca280d_prof);

        
        $__internal_86eb38a0b64f210d75b03ac0de35876fb8622e3a1b8b98bcc2759b9c907eb5de->leave($__internal_86eb38a0b64f210d75b03ac0de35876fb8622e3a1b8b98bcc2759b9c907eb5de_prof);

    }

    // line 107
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_078d1bdc4e72b934c5ff2664cd58c778c81b62d714939bdbd663f09736d688bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_078d1bdc4e72b934c5ff2664cd58c778c81b62d714939bdbd663f09736d688bb->enter($__internal_078d1bdc4e72b934c5ff2664cd58c778c81b62d714939bdbd663f09736d688bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_00a013fc7e66862e1a1078479d53bd688789f2bc2a62b102606ad10b0f8674ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a013fc7e66862e1a1078479d53bd688789f2bc2a62b102606ad10b0f8674ec->enter($__internal_00a013fc7e66862e1a1078479d53bd688789f2bc2a62b102606ad10b0f8674ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_00a013fc7e66862e1a1078479d53bd688789f2bc2a62b102606ad10b0f8674ec->leave($__internal_00a013fc7e66862e1a1078479d53bd688789f2bc2a62b102606ad10b0f8674ec_prof);

        
        $__internal_078d1bdc4e72b934c5ff2664cd58c778c81b62d714939bdbd663f09736d688bb->leave($__internal_078d1bdc4e72b934c5ff2664cd58c778c81b62d714939bdbd663f09736d688bb_prof);

    }

    // line 126
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_34cdbb0ff2bb4e361ca0511a71155104461445e90e15c5f4484e34c2b9eca284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34cdbb0ff2bb4e361ca0511a71155104461445e90e15c5f4484e34c2b9eca284->enter($__internal_34cdbb0ff2bb4e361ca0511a71155104461445e90e15c5f4484e34c2b9eca284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_003831a83fa4cd19534ead77677d9e19abd8d68fb91c7fb41e8bc25a770bf0ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003831a83fa4cd19534ead77677d9e19abd8d68fb91c7fb41e8bc25a770bf0ed->enter($__internal_003831a83fa4cd19534ead77677d9e19abd8d68fb91c7fb41e8bc25a770bf0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_003831a83fa4cd19534ead77677d9e19abd8d68fb91c7fb41e8bc25a770bf0ed->leave($__internal_003831a83fa4cd19534ead77677d9e19abd8d68fb91c7fb41e8bc25a770bf0ed_prof);

        
        $__internal_34cdbb0ff2bb4e361ca0511a71155104461445e90e15c5f4484e34c2b9eca284->leave($__internal_34cdbb0ff2bb4e361ca0511a71155104461445e90e15c5f4484e34c2b9eca284_prof);

    }

    // line 141
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_017e6a8a334f451c743cc11260814318ab1882047e008078c464043076e96fe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_017e6a8a334f451c743cc11260814318ab1882047e008078c464043076e96fe0->enter($__internal_017e6a8a334f451c743cc11260814318ab1882047e008078c464043076e96fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_1f9fe85fc2e1d88de11be675f2a3f1a8766ef3fd6bc1efcfba2223f45d0e3db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9fe85fc2e1d88de11be675f2a3f1a8766ef3fd6bc1efcfba2223f45d0e3db9->enter($__internal_1f9fe85fc2e1d88de11be675f2a3f1a8766ef3fd6bc1efcfba2223f45d0e3db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_1f9fe85fc2e1d88de11be675f2a3f1a8766ef3fd6bc1efcfba2223f45d0e3db9->leave($__internal_1f9fe85fc2e1d88de11be675f2a3f1a8766ef3fd6bc1efcfba2223f45d0e3db9_prof);

        
        $__internal_017e6a8a334f451c743cc11260814318ab1882047e008078c464043076e96fe0->leave($__internal_017e6a8a334f451c743cc11260814318ab1882047e008078c464043076e96fe0_prof);

    }

    // line 169
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_e7a8125ef338dc1b7df1f9ee873d5541e4f0752d5ccfc76fbbd2043a46db9eb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7a8125ef338dc1b7df1f9ee873d5541e4f0752d5ccfc76fbbd2043a46db9eb7->enter($__internal_e7a8125ef338dc1b7df1f9ee873d5541e4f0752d5ccfc76fbbd2043a46db9eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_33da9541978252a9f0bf1fa2f3bafcd3795473db3bcb2d89d21854cfd76a7eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33da9541978252a9f0bf1fa2f3bafcd3795473db3bcb2d89d21854cfd76a7eb0->enter($__internal_33da9541978252a9f0bf1fa2f3bafcd3795473db3bcb2d89d21854cfd76a7eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_33da9541978252a9f0bf1fa2f3bafcd3795473db3bcb2d89d21854cfd76a7eb0->leave($__internal_33da9541978252a9f0bf1fa2f3bafcd3795473db3bcb2d89d21854cfd76a7eb0_prof);

        
        $__internal_e7a8125ef338dc1b7df1f9ee873d5541e4f0752d5ccfc76fbbd2043a46db9eb7->leave($__internal_e7a8125ef338dc1b7df1f9ee873d5541e4f0752d5ccfc76fbbd2043a46db9eb7_prof);

    }

    // line 191
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_f2893847421c2b41c754600544be04912d4d7c021401977c2835d591da98b938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2893847421c2b41c754600544be04912d4d7c021401977c2835d591da98b938->enter($__internal_f2893847421c2b41c754600544be04912d4d7c021401977c2835d591da98b938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_85175a6a3d799de8a2aa367200c5f4323f9ad53d613aeba2339cc7bade56c6cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85175a6a3d799de8a2aa367200c5f4323f9ad53d613aeba2339cc7bade56c6cd->enter($__internal_85175a6a3d799de8a2aa367200c5f4323f9ad53d613aeba2339cc7bade56c6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_85175a6a3d799de8a2aa367200c5f4323f9ad53d613aeba2339cc7bade56c6cd->leave($__internal_85175a6a3d799de8a2aa367200c5f4323f9ad53d613aeba2339cc7bade56c6cd_prof);

        
        $__internal_f2893847421c2b41c754600544be04912d4d7c021401977c2835d591da98b938->leave($__internal_f2893847421c2b41c754600544be04912d4d7c021401977c2835d591da98b938_prof);

    }

    // line 202
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_b3164ccd338ed1b363b267011b515804e74f28dd3f42f054738bcce9a21b1aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3164ccd338ed1b363b267011b515804e74f28dd3f42f054738bcce9a21b1aa1->enter($__internal_b3164ccd338ed1b363b267011b515804e74f28dd3f42f054738bcce9a21b1aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_b5d51d8088b2a12f8439a381f4323f3ae58f115aecb72e0856715cec90c80a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d51d8088b2a12f8439a381f4323f3ae58f115aecb72e0856715cec90c80a1e->enter($__internal_b5d51d8088b2a12f8439a381f4323f3ae58f115aecb72e0856715cec90c80a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_b5d51d8088b2a12f8439a381f4323f3ae58f115aecb72e0856715cec90c80a1e->leave($__internal_b5d51d8088b2a12f8439a381f4323f3ae58f115aecb72e0856715cec90c80a1e_prof);

        
        $__internal_b3164ccd338ed1b363b267011b515804e74f28dd3f42f054738bcce9a21b1aa1->leave($__internal_b3164ccd338ed1b363b267011b515804e74f28dd3f42f054738bcce9a21b1aa1_prof);

    }

    // line 215
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_479977dac26f4862b80e62c578c6447aa286f040642c775e2d36c4a5fa4194c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_479977dac26f4862b80e62c578c6447aa286f040642c775e2d36c4a5fa4194c9->enter($__internal_479977dac26f4862b80e62c578c6447aa286f040642c775e2d36c4a5fa4194c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7434ba9cd3efba3bd413c9f1030cd98fb689d4a3c325c1a8819c84382cbf299f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7434ba9cd3efba3bd413c9f1030cd98fb689d4a3c325c1a8819c84382cbf299f->enter($__internal_7434ba9cd3efba3bd413c9f1030cd98fb689d4a3c325c1a8819c84382cbf299f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 216
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 217
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_7434ba9cd3efba3bd413c9f1030cd98fb689d4a3c325c1a8819c84382cbf299f->leave($__internal_7434ba9cd3efba3bd413c9f1030cd98fb689d4a3c325c1a8819c84382cbf299f_prof);

        
        $__internal_479977dac26f4862b80e62c578c6447aa286f040642c775e2d36c4a5fa4194c9->leave($__internal_479977dac26f4862b80e62c578c6447aa286f040642c775e2d36c4a5fa4194c9_prof);

    }

    // line 220
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_9e59ba5d08f8fe0653c482e0b37711fdf0c4545c28e0d2cd67329780eb7b5838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e59ba5d08f8fe0653c482e0b37711fdf0c4545c28e0d2cd67329780eb7b5838->enter($__internal_9e59ba5d08f8fe0653c482e0b37711fdf0c4545c28e0d2cd67329780eb7b5838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_f743932611167bfce679e2132a2b1f945428914b240904d9ce9e6520025dd8fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f743932611167bfce679e2132a2b1f945428914b240904d9ce9e6520025dd8fb->enter($__internal_f743932611167bfce679e2132a2b1f945428914b240904d9ce9e6520025dd8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 222
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 223
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_f743932611167bfce679e2132a2b1f945428914b240904d9ce9e6520025dd8fb->leave($__internal_f743932611167bfce679e2132a2b1f945428914b240904d9ce9e6520025dd8fb_prof);

        
        $__internal_9e59ba5d08f8fe0653c482e0b37711fdf0c4545c28e0d2cd67329780eb7b5838->leave($__internal_9e59ba5d08f8fe0653c482e0b37711fdf0c4545c28e0d2cd67329780eb7b5838_prof);

    }

    // line 226
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_5085eee48ef02efdae6baef88708da9de2ef9f941c9fcc363bfb4084d413240a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5085eee48ef02efdae6baef88708da9de2ef9f941c9fcc363bfb4084d413240a->enter($__internal_5085eee48ef02efdae6baef88708da9de2ef9f941c9fcc363bfb4084d413240a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_51b687ac3b4fe4779edf82392dd981ab4dcadc5467affa662f10245cdb9c283e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b687ac3b4fe4779edf82392dd981ab4dcadc5467affa662f10245cdb9c283e->enter($__internal_51b687ac3b4fe4779edf82392dd981ab4dcadc5467affa662f10245cdb9c283e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 227
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_51b687ac3b4fe4779edf82392dd981ab4dcadc5467affa662f10245cdb9c283e->leave($__internal_51b687ac3b4fe4779edf82392dd981ab4dcadc5467affa662f10245cdb9c283e_prof);

        
        $__internal_5085eee48ef02efdae6baef88708da9de2ef9f941c9fcc363bfb4084d413240a->leave($__internal_5085eee48ef02efdae6baef88708da9de2ef9f941c9fcc363bfb4084d413240a_prof);

    }

    // line 230
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_9c1e92e668b129f5a7f11d8eb39377c0f86cf2b68ba4162d4755dbb7d093a452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c1e92e668b129f5a7f11d8eb39377c0f86cf2b68ba4162d4755dbb7d093a452->enter($__internal_9c1e92e668b129f5a7f11d8eb39377c0f86cf2b68ba4162d4755dbb7d093a452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_2b6d9855445a7857167bd8f317337dacb58dda146ca15046a877ccf4ab6414d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b6d9855445a7857167bd8f317337dacb58dda146ca15046a877ccf4ab6414d2->enter($__internal_2b6d9855445a7857167bd8f317337dacb58dda146ca15046a877ccf4ab6414d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 231
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_2b6d9855445a7857167bd8f317337dacb58dda146ca15046a877ccf4ab6414d2->leave($__internal_2b6d9855445a7857167bd8f317337dacb58dda146ca15046a877ccf4ab6414d2_prof);

        
        $__internal_9c1e92e668b129f5a7f11d8eb39377c0f86cf2b68ba4162d4755dbb7d093a452->leave($__internal_9c1e92e668b129f5a7f11d8eb39377c0f86cf2b68ba4162d4755dbb7d093a452_prof);

    }

    // line 234
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_73f33849fdcb19218d93cc1da95c8eac149812670670eaf738fd4eb2baff6a69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f33849fdcb19218d93cc1da95c8eac149812670670eaf738fd4eb2baff6a69->enter($__internal_73f33849fdcb19218d93cc1da95c8eac149812670670eaf738fd4eb2baff6a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_d18735398f51e30e236a4aac646682499d676a91f700e22846d927cfdc3495d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18735398f51e30e236a4aac646682499d676a91f700e22846d927cfdc3495d4->enter($__internal_d18735398f51e30e236a4aac646682499d676a91f700e22846d927cfdc3495d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_d18735398f51e30e236a4aac646682499d676a91f700e22846d927cfdc3495d4->leave($__internal_d18735398f51e30e236a4aac646682499d676a91f700e22846d927cfdc3495d4_prof);

        
        $__internal_73f33849fdcb19218d93cc1da95c8eac149812670670eaf738fd4eb2baff6a69->leave($__internal_73f33849fdcb19218d93cc1da95c8eac149812670670eaf738fd4eb2baff6a69_prof);

    }

    // line 255
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_57efd0889143e5523a9c6250fdcd02f499180c54903b80837286d7a5f93700c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57efd0889143e5523a9c6250fdcd02f499180c54903b80837286d7a5f93700c7->enter($__internal_57efd0889143e5523a9c6250fdcd02f499180c54903b80837286d7a5f93700c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b9b04cafb6ceb2addbe450b682a0f41a7de58bf435617c9225d105f3c37c85ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b04cafb6ceb2addbe450b682a0f41a7de58bf435617c9225d105f3c37c85ef->enter($__internal_b9b04cafb6ceb2addbe450b682a0f41a7de58bf435617c9225d105f3c37c85ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_b9b04cafb6ceb2addbe450b682a0f41a7de58bf435617c9225d105f3c37c85ef->leave($__internal_b9b04cafb6ceb2addbe450b682a0f41a7de58bf435617c9225d105f3c37c85ef_prof);

        
        $__internal_57efd0889143e5523a9c6250fdcd02f499180c54903b80837286d7a5f93700c7->leave($__internal_57efd0889143e5523a9c6250fdcd02f499180c54903b80837286d7a5f93700c7_prof);

    }

    // line 278
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_85662a4b77992fcf35f310c28d874872d4edba24164ebd168f635e5c4468aa4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85662a4b77992fcf35f310c28d874872d4edba24164ebd168f635e5c4468aa4d->enter($__internal_85662a4b77992fcf35f310c28d874872d4edba24164ebd168f635e5c4468aa4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        $__internal_40bd27248db3a5e678a4e08906d9c7b408ea91c30e39d3ded8630ab824a099f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40bd27248db3a5e678a4e08906d9c7b408ea91c30e39d3ded8630ab824a099f8->enter($__internal_40bd27248db3a5e678a4e08906d9c7b408ea91c30e39d3ded8630ab824a099f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

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
        
        $__internal_40bd27248db3a5e678a4e08906d9c7b408ea91c30e39d3ded8630ab824a099f8->leave($__internal_40bd27248db3a5e678a4e08906d9c7b408ea91c30e39d3ded8630ab824a099f8_prof);

        
        $__internal_85662a4b77992fcf35f310c28d874872d4edba24164ebd168f635e5c4468aa4d->leave($__internal_85662a4b77992fcf35f310c28d874872d4edba24164ebd168f635e5c4468aa4d_prof);

    }

    // line 314
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_0342b35a8bfa075ed9b60d818b89675e36b96e64ea0b4333ca9efc1a856ded1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0342b35a8bfa075ed9b60d818b89675e36b96e64ea0b4333ca9efc1a856ded1a->enter($__internal_0342b35a8bfa075ed9b60d818b89675e36b96e64ea0b4333ca9efc1a856ded1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_17bec42367b64a5fc9d178929e7c0373126ec273b62732d72f0422361d20c7d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17bec42367b64a5fc9d178929e7c0373126ec273b62732d72f0422361d20c7d0->enter($__internal_17bec42367b64a5fc9d178929e7c0373126ec273b62732d72f0422361d20c7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

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
        
        $__internal_17bec42367b64a5fc9d178929e7c0373126ec273b62732d72f0422361d20c7d0->leave($__internal_17bec42367b64a5fc9d178929e7c0373126ec273b62732d72f0422361d20c7d0_prof);

        
        $__internal_0342b35a8bfa075ed9b60d818b89675e36b96e64ea0b4333ca9efc1a856ded1a->leave($__internal_0342b35a8bfa075ed9b60d818b89675e36b96e64ea0b4333ca9efc1a856ded1a_prof);

    }

    // line 320
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_3b052fd0c6304a4da6dc81e26ad5f75c23f4edc22bc533f06c0762ae861c7436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b052fd0c6304a4da6dc81e26ad5f75c23f4edc22bc533f06c0762ae861c7436->enter($__internal_3b052fd0c6304a4da6dc81e26ad5f75c23f4edc22bc533f06c0762ae861c7436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_f574b7899dbfa358dbb67f5323209a8b10386d6dbe3d7390792c506ac1fdca11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f574b7899dbfa358dbb67f5323209a8b10386d6dbe3d7390792c506ac1fdca11->enter($__internal_f574b7899dbfa358dbb67f5323209a8b10386d6dbe3d7390792c506ac1fdca11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 321
        $context["force_error"] = true;
        // line 322
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f574b7899dbfa358dbb67f5323209a8b10386d6dbe3d7390792c506ac1fdca11->leave($__internal_f574b7899dbfa358dbb67f5323209a8b10386d6dbe3d7390792c506ac1fdca11_prof);

        
        $__internal_3b052fd0c6304a4da6dc81e26ad5f75c23f4edc22bc533f06c0762ae861c7436->leave($__internal_3b052fd0c6304a4da6dc81e26ad5f75c23f4edc22bc533f06c0762ae861c7436_prof);

    }

    // line 325
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_6a2ff716eb114cb6db30540b2d12b4b3b334208e11c8d87b3f4a8fb3f4b8291a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a2ff716eb114cb6db30540b2d12b4b3b334208e11c8d87b3f4a8fb3f4b8291a->enter($__internal_6a2ff716eb114cb6db30540b2d12b4b3b334208e11c8d87b3f4a8fb3f4b8291a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_d38c777e7a212dac58ef4ef20d0b87dbcc00a4d00574bcae0adde39c5672e785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38c777e7a212dac58ef4ef20d0b87dbcc00a4d00574bcae0adde39c5672e785->enter($__internal_d38c777e7a212dac58ef4ef20d0b87dbcc00a4d00574bcae0adde39c5672e785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 326
        $context["force_error"] = true;
        // line 327
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d38c777e7a212dac58ef4ef20d0b87dbcc00a4d00574bcae0adde39c5672e785->leave($__internal_d38c777e7a212dac58ef4ef20d0b87dbcc00a4d00574bcae0adde39c5672e785_prof);

        
        $__internal_6a2ff716eb114cb6db30540b2d12b4b3b334208e11c8d87b3f4a8fb3f4b8291a->leave($__internal_6a2ff716eb114cb6db30540b2d12b4b3b334208e11c8d87b3f4a8fb3f4b8291a_prof);

    }

    // line 330
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_c892dca24ca5d12ecabbd6220e3fabc9b9cef51b0fa49f60b91c7bd8aa40241b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c892dca24ca5d12ecabbd6220e3fabc9b9cef51b0fa49f60b91c7bd8aa40241b->enter($__internal_c892dca24ca5d12ecabbd6220e3fabc9b9cef51b0fa49f60b91c7bd8aa40241b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_371893ef0884eaef3b5b06b91bd154bea68396a433fd241e8659b735b377885f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_371893ef0884eaef3b5b06b91bd154bea68396a433fd241e8659b735b377885f->enter($__internal_371893ef0884eaef3b5b06b91bd154bea68396a433fd241e8659b735b377885f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 331
        $context["force_error"] = true;
        // line 332
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_371893ef0884eaef3b5b06b91bd154bea68396a433fd241e8659b735b377885f->leave($__internal_371893ef0884eaef3b5b06b91bd154bea68396a433fd241e8659b735b377885f_prof);

        
        $__internal_c892dca24ca5d12ecabbd6220e3fabc9b9cef51b0fa49f60b91c7bd8aa40241b->leave($__internal_c892dca24ca5d12ecabbd6220e3fabc9b9cef51b0fa49f60b91c7bd8aa40241b_prof);

    }

    // line 335
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_65a0ef3d26edfb2fe373af035b4bef91efb3016be4bf79415f4f6212a341ebae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65a0ef3d26edfb2fe373af035b4bef91efb3016be4bf79415f4f6212a341ebae->enter($__internal_65a0ef3d26edfb2fe373af035b4bef91efb3016be4bf79415f4f6212a341ebae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_c54fe4d3667bd8046292d94d30973f744c82c8ed5228b4d83d77c70092543f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c54fe4d3667bd8046292d94d30973f744c82c8ed5228b4d83d77c70092543f47->enter($__internal_c54fe4d3667bd8046292d94d30973f744c82c8ed5228b4d83d77c70092543f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 336
        $context["force_error"] = true;
        // line 337
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c54fe4d3667bd8046292d94d30973f744c82c8ed5228b4d83d77c70092543f47->leave($__internal_c54fe4d3667bd8046292d94d30973f744c82c8ed5228b4d83d77c70092543f47_prof);

        
        $__internal_65a0ef3d26edfb2fe373af035b4bef91efb3016be4bf79415f4f6212a341ebae->leave($__internal_65a0ef3d26edfb2fe373af035b4bef91efb3016be4bf79415f4f6212a341ebae_prof);

    }

    // line 340
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6e519e5a71b1dffd9fc14e6a354432d4840d10b4b9af414d8475c61a27f22262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e519e5a71b1dffd9fc14e6a354432d4840d10b4b9af414d8475c61a27f22262->enter($__internal_6e519e5a71b1dffd9fc14e6a354432d4840d10b4b9af414d8475c61a27f22262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_da32b1e263241c331a544e89dbe7a92c63ba43d242b83e7e84adbe837ca3c5da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da32b1e263241c331a544e89dbe7a92c63ba43d242b83e7e84adbe837ca3c5da->enter($__internal_da32b1e263241c331a544e89dbe7a92c63ba43d242b83e7e84adbe837ca3c5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_da32b1e263241c331a544e89dbe7a92c63ba43d242b83e7e84adbe837ca3c5da->leave($__internal_da32b1e263241c331a544e89dbe7a92c63ba43d242b83e7e84adbe837ca3c5da_prof);

        
        $__internal_6e519e5a71b1dffd9fc14e6a354432d4840d10b4b9af414d8475c61a27f22262->leave($__internal_6e519e5a71b1dffd9fc14e6a354432d4840d10b4b9af414d8475c61a27f22262_prof);

    }

    // line 347
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_2b354fcd5854e1de5df98578c21a431fd6bcab198129fb8310792b32a25c5f47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b354fcd5854e1de5df98578c21a431fd6bcab198129fb8310792b32a25c5f47->enter($__internal_2b354fcd5854e1de5df98578c21a431fd6bcab198129fb8310792b32a25c5f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_9501b7c32cecbf1e028abc5d20295b108b0d3e5ca44c4b84e3a111ec83b3ba21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9501b7c32cecbf1e028abc5d20295b108b0d3e5ca44c4b84e3a111ec83b3ba21->enter($__internal_9501b7c32cecbf1e028abc5d20295b108b0d3e5ca44c4b84e3a111ec83b3ba21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_9501b7c32cecbf1e028abc5d20295b108b0d3e5ca44c4b84e3a111ec83b3ba21->leave($__internal_9501b7c32cecbf1e028abc5d20295b108b0d3e5ca44c4b84e3a111ec83b3ba21_prof);

        
        $__internal_2b354fcd5854e1de5df98578c21a431fd6bcab198129fb8310792b32a25c5f47->leave($__internal_2b354fcd5854e1de5df98578c21a431fd6bcab198129fb8310792b32a25c5f47_prof);

    }

    // line 355
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_3893f4773e1c05492cd6f934690e90f55deb37892ce285a54f0094b2311f8110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3893f4773e1c05492cd6f934690e90f55deb37892ce285a54f0094b2311f8110->enter($__internal_3893f4773e1c05492cd6f934690e90f55deb37892ce285a54f0094b2311f8110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_8d7a7f608eedffd63c4429f268139ed33e2b61b238265a59509e908dbacc272d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7a7f608eedffd63c4429f268139ed33e2b61b238265a59509e908dbacc272d->enter($__internal_8d7a7f608eedffd63c4429f268139ed33e2b61b238265a59509e908dbacc272d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_8d7a7f608eedffd63c4429f268139ed33e2b61b238265a59509e908dbacc272d->leave($__internal_8d7a7f608eedffd63c4429f268139ed33e2b61b238265a59509e908dbacc272d_prof);

        
        $__internal_3893f4773e1c05492cd6f934690e90f55deb37892ce285a54f0094b2311f8110->leave($__internal_3893f4773e1c05492cd6f934690e90f55deb37892ce285a54f0094b2311f8110_prof);

    }

    // line 373
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_665c65afe71eec1bc8b2fc3aed3f970407e5b8a335aad905ba1e66b95f07c5db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_665c65afe71eec1bc8b2fc3aed3f970407e5b8a335aad905ba1e66b95f07c5db->enter($__internal_665c65afe71eec1bc8b2fc3aed3f970407e5b8a335aad905ba1e66b95f07c5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_8b8278e2ed16b1ad48dcb4cb24dc8795c7191c5221b8fdc4ae793844cce9017b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8278e2ed16b1ad48dcb4cb24dc8795c7191c5221b8fdc4ae793844cce9017b->enter($__internal_8b8278e2ed16b1ad48dcb4cb24dc8795c7191c5221b8fdc4ae793844cce9017b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_8b8278e2ed16b1ad48dcb4cb24dc8795c7191c5221b8fdc4ae793844cce9017b->leave($__internal_8b8278e2ed16b1ad48dcb4cb24dc8795c7191c5221b8fdc4ae793844cce9017b_prof);

        
        $__internal_665c65afe71eec1bc8b2fc3aed3f970407e5b8a335aad905ba1e66b95f07c5db->leave($__internal_665c65afe71eec1bc8b2fc3aed3f970407e5b8a335aad905ba1e66b95f07c5db_prof);

    }

    // line 386
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_a3490adc0327f448dfc448ad4a665a18f265f6c3a572c7c4db7bcd393cce5f94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3490adc0327f448dfc448ad4a665a18f265f6c3a572c7c4db7bcd393cce5f94->enter($__internal_a3490adc0327f448dfc448ad4a665a18f265f6c3a572c7c4db7bcd393cce5f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        $__internal_71733a74dac8952a5190e2b77e340d7459aceae77f2441efed46f10ba9733319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71733a74dac8952a5190e2b77e340d7459aceae77f2441efed46f10ba9733319->enter($__internal_71733a74dac8952a5190e2b77e340d7459aceae77f2441efed46f10ba9733319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 387
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 388
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
        
        $__internal_71733a74dac8952a5190e2b77e340d7459aceae77f2441efed46f10ba9733319->leave($__internal_71733a74dac8952a5190e2b77e340d7459aceae77f2441efed46f10ba9733319_prof);

        
        $__internal_a3490adc0327f448dfc448ad4a665a18f265f6c3a572c7c4db7bcd393cce5f94->leave($__internal_a3490adc0327f448dfc448ad4a665a18f265f6c3a572c7c4db7bcd393cce5f94_prof);

    }

    // line 392
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_dcd708fe6ec033290ba5ef1f5420714f1ae225fa9ae01cafa2427ab589b7ac4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcd708fe6ec033290ba5ef1f5420714f1ae225fa9ae01cafa2427ab589b7ac4f->enter($__internal_dcd708fe6ec033290ba5ef1f5420714f1ae225fa9ae01cafa2427ab589b7ac4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_4e7ffc12bebee1de18c50b8f06a0f448f7ccf463f4f694a724b4b99f5c520a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7ffc12bebee1de18c50b8f06a0f448f7ccf463f4f694a724b4b99f5c520a37->enter($__internal_4e7ffc12bebee1de18c50b8f06a0f448f7ccf463f4f694a724b4b99f5c520a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 393
        echo "    ";
        $context["force_error"] = true;
        // line 394
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_4e7ffc12bebee1de18c50b8f06a0f448f7ccf463f4f694a724b4b99f5c520a37->leave($__internal_4e7ffc12bebee1de18c50b8f06a0f448f7ccf463f4f694a724b4b99f5c520a37_prof);

        
        $__internal_dcd708fe6ec033290ba5ef1f5420714f1ae225fa9ae01cafa2427ab589b7ac4f->leave($__internal_dcd708fe6ec033290ba5ef1f5420714f1ae225fa9ae01cafa2427ab589b7ac4f_prof);

    }

    // line 397
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_99405814298d250d7037ec533eda8c1f877d7580a98b74a6aa6827d0d47a3a99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99405814298d250d7037ec533eda8c1f877d7580a98b74a6aa6827d0d47a3a99->enter($__internal_99405814298d250d7037ec533eda8c1f877d7580a98b74a6aa6827d0d47a3a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_2550df7a88695fe790d716ba0e7471953a068db6f284847e43988f94b3d76bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2550df7a88695fe790d716ba0e7471953a068db6f284847e43988f94b3d76bd8->enter($__internal_2550df7a88695fe790d716ba0e7471953a068db6f284847e43988f94b3d76bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_2550df7a88695fe790d716ba0e7471953a068db6f284847e43988f94b3d76bd8->leave($__internal_2550df7a88695fe790d716ba0e7471953a068db6f284847e43988f94b3d76bd8_prof);

        
        $__internal_99405814298d250d7037ec533eda8c1f877d7580a98b74a6aa6827d0d47a3a99->leave($__internal_99405814298d250d7037ec533eda8c1f877d7580a98b74a6aa6827d0d47a3a99_prof);

    }

    // line 419
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_5346940fd26a4004a36a5aeaeb08d1aae1f821d8b505df4c9ca4eb512f1a8667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5346940fd26a4004a36a5aeaeb08d1aae1f821d8b505df4c9ca4eb512f1a8667->enter($__internal_5346940fd26a4004a36a5aeaeb08d1aae1f821d8b505df4c9ca4eb512f1a8667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_535fd2b9df67aaf458e26d98576f0d62383354ed0814171a400b31bd16e684c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_535fd2b9df67aaf458e26d98576f0d62383354ed0814171a400b31bd16e684c7->enter($__internal_535fd2b9df67aaf458e26d98576f0d62383354ed0814171a400b31bd16e684c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 420
        echo "    ";
        $context["force_error"] = true;
        // line 421
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_535fd2b9df67aaf458e26d98576f0d62383354ed0814171a400b31bd16e684c7->leave($__internal_535fd2b9df67aaf458e26d98576f0d62383354ed0814171a400b31bd16e684c7_prof);

        
        $__internal_5346940fd26a4004a36a5aeaeb08d1aae1f821d8b505df4c9ca4eb512f1a8667->leave($__internal_5346940fd26a4004a36a5aeaeb08d1aae1f821d8b505df4c9ca4eb512f1a8667_prof);

    }

    // line 424
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_5efc47f04921b38dad2a8b2c04b02a1e88e9c5d025f64467172d0e02b95566fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5efc47f04921b38dad2a8b2c04b02a1e88e9c5d025f64467172d0e02b95566fa->enter($__internal_5efc47f04921b38dad2a8b2c04b02a1e88e9c5d025f64467172d0e02b95566fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_630de228fefa7d2b665542b8c630d12828911a0e6819f406b9c50496c1a98f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_630de228fefa7d2b665542b8c630d12828911a0e6819f406b9c50496c1a98f7c->enter($__internal_630de228fefa7d2b665542b8c630d12828911a0e6819f406b9c50496c1a98f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_630de228fefa7d2b665542b8c630d12828911a0e6819f406b9c50496c1a98f7c->leave($__internal_630de228fefa7d2b665542b8c630d12828911a0e6819f406b9c50496c1a98f7c_prof);

        
        $__internal_5efc47f04921b38dad2a8b2c04b02a1e88e9c5d025f64467172d0e02b95566fa->leave($__internal_5efc47f04921b38dad2a8b2c04b02a1e88e9c5d025f64467172d0e02b95566fa_prof);

    }

    // line 447
    public function block_easyadmin_rest($context, array $blocks = array())
    {
        $__internal_c3976c516321fb3f777c27131c59e96a6fd8db3435deedc1ec6fe6245587d84c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3976c516321fb3f777c27131c59e96a6fd8db3435deedc1ec6fe6245587d84c->enter($__internal_c3976c516321fb3f777c27131c59e96a6fd8db3435deedc1ec6fe6245587d84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_rest"));

        $__internal_9a9ed25fe7238662d02fad97dfce8939c45ac8ebccf542fdef299f11c4824857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9ed25fe7238662d02fad97dfce8939c45ac8ebccf542fdef299f11c4824857->enter($__internal_9a9ed25fe7238662d02fad97dfce8939c45ac8ebccf542fdef299f11c4824857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_rest"));

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
        
        $__internal_9a9ed25fe7238662d02fad97dfce8939c45ac8ebccf542fdef299f11c4824857->leave($__internal_9a9ed25fe7238662d02fad97dfce8939c45ac8ebccf542fdef299f11c4824857_prof);

        
        $__internal_c3976c516321fb3f777c27131c59e96a6fd8db3435deedc1ec6fe6245587d84c->leave($__internal_c3976c516321fb3f777c27131c59e96a6fd8db3435deedc1ec6fe6245587d84c_prof);

    }

    // line 460
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_a7b8c00445ec74dec496b45083d9e7ddd526d03248dcc7f47070a1fd40e3b338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7b8c00445ec74dec496b45083d9e7ddd526d03248dcc7f47070a1fd40e3b338->enter($__internal_a7b8c00445ec74dec496b45083d9e7ddd526d03248dcc7f47070a1fd40e3b338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_3a61a06dfb61b40fd3f891b805eadc6ad34ac22f106d4135a68e54a99473eb40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a61a06dfb61b40fd3f891b805eadc6ad34ac22f106d4135a68e54a99473eb40->enter($__internal_3a61a06dfb61b40fd3f891b805eadc6ad34ac22f106d4135a68e54a99473eb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

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
        
        $__internal_3a61a06dfb61b40fd3f891b805eadc6ad34ac22f106d4135a68e54a99473eb40->leave($__internal_3a61a06dfb61b40fd3f891b805eadc6ad34ac22f106d4135a68e54a99473eb40_prof);

        
        $__internal_a7b8c00445ec74dec496b45083d9e7ddd526d03248dcc7f47070a1fd40e3b338->leave($__internal_a7b8c00445ec74dec496b45083d9e7ddd526d03248dcc7f47070a1fd40e3b338_prof);

    }

    // line 489
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_aa8906f7ae3348f3a96f7a7014c91bd1e98114dd40c2a287f119e5744f11e4b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa8906f7ae3348f3a96f7a7014c91bd1e98114dd40c2a287f119e5744f11e4b3->enter($__internal_aa8906f7ae3348f3a96f7a7014c91bd1e98114dd40c2a287f119e5744f11e4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        $__internal_a064b9d282f17e767d6cc8f6ff9a46492f504db6bf2e17b01c3ff2bd4f94a8b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a064b9d282f17e767d6cc8f6ff9a46492f504db6bf2e17b01c3ff2bd4f94a8b4->enter($__internal_a064b9d282f17e767d6cc8f6ff9a46492f504db6bf2e17b01c3ff2bd4f94a8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

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
        
        $__internal_a064b9d282f17e767d6cc8f6ff9a46492f504db6bf2e17b01c3ff2bd4f94a8b4->leave($__internal_a064b9d282f17e767d6cc8f6ff9a46492f504db6bf2e17b01c3ff2bd4f94a8b4_prof);

        
        $__internal_aa8906f7ae3348f3a96f7a7014c91bd1e98114dd40c2a287f119e5744f11e4b3->leave($__internal_aa8906f7ae3348f3a96f7a7014c91bd1e98114dd40c2a287f119e5744f11e4b3_prof);

    }

    // line 532
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_b1569d1238734a71633625f8b62c916215f4e538a1f437d90442299f64cc6402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1569d1238734a71633625f8b62c916215f4e538a1f437d90442299f64cc6402->enter($__internal_b1569d1238734a71633625f8b62c916215f4e538a1f437d90442299f64cc6402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        $__internal_3003945088617d5025d97a6be1fedfbd66ac0c61561e384739bd4247bfb28b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3003945088617d5025d97a6be1fedfbd66ac0c61561e384739bd4247bfb28b5c->enter($__internal_3003945088617d5025d97a6be1fedfbd66ac0c61561e384739bd4247bfb28b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        // line 533
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 534
($context["attr"] ?? $this->getContext($context, "attr")), array("data-easyadmin-autocomplete-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 537
($context["autocomplete_entity_name"] ?? $this->getContext($context, "autocomplete_entity_name"))))))));
        // line 540
        echo "
";
        
        $__internal_3003945088617d5025d97a6be1fedfbd66ac0c61561e384739bd4247bfb28b5c->leave($__internal_3003945088617d5025d97a6be1fedfbd66ac0c61561e384739bd4247bfb28b5c_prof);

        
        $__internal_b1569d1238734a71633625f8b62c916215f4e538a1f437d90442299f64cc6402->leave($__internal_b1569d1238734a71633625f8b62c916215f4e538a1f437d90442299f64cc6402_prof);

    }

    // line 543
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        $__internal_b5cbe139b40ee35194b15aea6bbe6cd127263489189bb93c965ca82394badd6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5cbe139b40ee35194b15aea6bbe6cd127263489189bb93c965ca82394badd6f->enter($__internal_b5cbe139b40ee35194b15aea6bbe6cd127263489189bb93c965ca82394badd6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        $__internal_34c4c35aa0cfdae0f73d96cab610b556597ea258ef98cb7393df0a7c1fe14f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c4c35aa0cfdae0f73d96cab610b556597ea258ef98cb7393df0a7c1fe14f03->enter($__internal_34c4c35aa0cfdae0f73d96cab610b556597ea258ef98cb7393df0a7c1fe14f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 544
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "vars", array()), "name", array());
        // line 545
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_34c4c35aa0cfdae0f73d96cab610b556597ea258ef98cb7393df0a7c1fe14f03->leave($__internal_34c4c35aa0cfdae0f73d96cab610b556597ea258ef98cb7393df0a7c1fe14f03_prof);

        
        $__internal_b5cbe139b40ee35194b15aea6bbe6cd127263489189bb93c965ca82394badd6f->leave($__internal_b5cbe139b40ee35194b15aea6bbe6cd127263489189bb93c965ca82394badd6f_prof);

    }

    // line 549
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        $__internal_32c5055e8a2b4ef9919f54dde35ca9071552af195288fdcef6fa2ba30dee601e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c5055e8a2b4ef9919f54dde35ca9071552af195288fdcef6fa2ba30dee601e->enter($__internal_32c5055e8a2b4ef9919f54dde35ca9071552af195288fdcef6fa2ba30dee601e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        $__internal_a08a92e1e2aa51f85dcbdc392d864908303a0db0f8ce725569741e163baebf16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08a92e1e2aa51f85dcbdc392d864908303a0db0f8ce725569741e163baebf16->enter($__internal_a08a92e1e2aa51f85dcbdc392d864908303a0db0f8ce725569741e163baebf16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        // line 550
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
        
        $__internal_a08a92e1e2aa51f85dcbdc392d864908303a0db0f8ce725569741e163baebf16->leave($__internal_a08a92e1e2aa51f85dcbdc392d864908303a0db0f8ce725569741e163baebf16_prof);

        
        $__internal_32c5055e8a2b4ef9919f54dde35ca9071552af195288fdcef6fa2ba30dee601e->leave($__internal_32c5055e8a2b4ef9919f54dde35ca9071552af195288fdcef6fa2ba30dee601e_prof);

    }

    // line 556
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        $__internal_9161ea22f990f02457f89b024173f89236b49b75e6061317b7dab5d7ab0ecfca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9161ea22f990f02457f89b024173f89236b49b75e6061317b7dab5d7ab0ecfca->enter($__internal_9161ea22f990f02457f89b024173f89236b49b75e6061317b7dab5d7ab0ecfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        $__internal_c0b7702f1b0ff009f58bf2650152eab942e9f38c66432b7aa531efa152bca6eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b7702f1b0ff009f58bf2650152eab942e9f38c66432b7aa531efa152bca6eb->enter($__internal_c0b7702f1b0ff009f58bf2650152eab942e9f38c66432b7aa531efa152bca6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

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
        
        $__internal_c0b7702f1b0ff009f58bf2650152eab942e9f38c66432b7aa531efa152bca6eb->leave($__internal_c0b7702f1b0ff009f58bf2650152eab942e9f38c66432b7aa531efa152bca6eb_prof);

        
        $__internal_9161ea22f990f02457f89b024173f89236b49b75e6061317b7dab5d7ab0ecfca->leave($__internal_9161ea22f990f02457f89b024173f89236b49b75e6061317b7dab5d7ab0ecfca_prof);

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
