<?php

/* EasyAdminBundle:default:list.html.twig */
class __TwigTemplate_8317ec6f771582846fc25786c394b2275822112c65727e472b46c8d4f050bff6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'content_header' => array($this, 'block_content_header'),
            'content_title_wrapper' => array($this, 'block_content_title_wrapper'),
            'global_actions' => array($this, 'block_global_actions'),
            'search_action' => array($this, 'block_search_action'),
            'search_form' => array($this, 'block_search_form'),
            'new_action' => array($this, 'block_new_action'),
            'main' => array($this, 'block_main'),
            'table_head' => array($this, 'block_table_head'),
            'table_body' => array($this, 'block_table_body'),
            'item_actions' => array($this, 'block_item_actions'),
            'paginator' => array($this, 'block_paginator'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f37599bb36183910412c1b236a466bfd41f7f4ba98a429dc66c8cca9037e6d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f37599bb36183910412c1b236a466bfd41f7f4ba98a429dc66c8cca9037e6d4->enter($__internal_6f37599bb36183910412c1b236a466bfd41f7f4ba98a429dc66c8cca9037e6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:list.html.twig"));

        $__internal_340c9aa414204ff7950ee6d10dfa96a4f40f37ec0e9038dc4a8c08267c09073d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_340c9aa414204ff7950ee6d10dfa96a4f40f37ec0e9038dc4a8c08267c09073d->enter($__internal_340c9aa414204ff7950ee6d10dfa96a4f40f37ec0e9038dc4a8c08267c09073d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:list.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 2
        $context["__internal_ddf27f86e46bc9da5efc56ebdbb3cc883cb88e9d9c52eedf9cbdc2257f923b0e"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 3
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 2
($context["__internal_ddf27f86e46bc9da5efc56ebdbb3cc883cb88e9d9c52eedf9cbdc2257f923b0e"] ?? $this->getContext($context, "__internal_ddf27f86e46bc9da5efc56ebdbb3cc883cb88e9d9c52eedf9cbdc2257f923b0e"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 3
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 2
($context["__internal_ddf27f86e46bc9da5efc56ebdbb3cc883cb88e9d9c52eedf9cbdc2257f923b0e"] ?? $this->getContext($context, "__internal_ddf27f86e46bc9da5efc56ebdbb3cc883cb88e9d9c52eedf9cbdc2257f923b0e"))));
        // line 7
        $context["_request_parameters"] = twig_array_merge(((array_key_exists("_request_parameters", $context)) ? (_twig_default_filter(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), array())) : (array())), array("action" => $this->getAttribute($this->getAttribute(        // line 8
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"), "entity" => $this->getAttribute(        // line 9
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), "menuIndex" => $this->getAttribute($this->getAttribute(        // line 10
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "menuIndex"), "method"), "submenuIndex" => $this->getAttribute($this->getAttribute(        // line 11
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "submenuIndex"), "method"), "sortField" => $this->getAttribute($this->getAttribute(        // line 12
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"), "sortDirection" => $this->getAttribute($this->getAttribute(        // line 13
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"), "page" => $this->getAttribute($this->getAttribute(        // line 14
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "page", 1 => 1), "method")));
        // line 17
        if (("search" == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 18
            $context["_request_parameters"] = twig_array_merge(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), array("query" => (($this->getAttribute($this->getAttribute(            // line 19
($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "sortField" => (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 20
($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array()), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"))) : ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"))), "sortDirection" => (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 21
($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array()), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"))) : ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method")))));
        }
        // line 25
        $context["_request_parameters"] = twig_array_merge(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), array("referer" => twig_urlencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", ($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters"))))));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f37599bb36183910412c1b236a466bfd41f7f4ba98a429dc66c8cca9037e6d4->leave($__internal_6f37599bb36183910412c1b236a466bfd41f7f4ba98a429dc66c8cca9037e6d4_prof);

        
        $__internal_340c9aa414204ff7950ee6d10dfa96a4f40f37ec0e9038dc4a8c08267c09073d->leave($__internal_340c9aa414204ff7950ee6d10dfa96a4f40f37ec0e9038dc4a8c08267c09073d_prof);

    }

    // line 27
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_6fb96c48baec72edd500ad4b4274f7e7797b0c4e3b66442aeb3620c5adf5094a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb96c48baec72edd500ad4b4274f7e7797b0c4e3b66442aeb3620c5adf5094a->enter($__internal_6fb96c48baec72edd500ad4b4274f7e7797b0c4e3b66442aeb3620c5adf5094a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_ad98f22a5b6670bd7360e1608f4498ba8007729a87d46208cfeb5da05b2205ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad98f22a5b6670bd7360e1608f4498ba8007729a87d46208cfeb5da05b2205ba->enter($__internal_ad98f22a5b6670bd7360e1608f4498ba8007729a87d46208cfeb5da05b2205ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-list-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_ad98f22a5b6670bd7360e1608f4498ba8007729a87d46208cfeb5da05b2205ba->leave($__internal_ad98f22a5b6670bd7360e1608f4498ba8007729a87d46208cfeb5da05b2205ba_prof);

        
        $__internal_6fb96c48baec72edd500ad4b4274f7e7797b0c4e3b66442aeb3620c5adf5094a->leave($__internal_6fb96c48baec72edd500ad4b4274f7e7797b0c4e3b66442aeb3620c5adf5094a_prof);

    }

    // line 28
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_808ff3c540ebe80e54b0f2390c3b82fd09bc4b90b4991da5641ea5c93acc6487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808ff3c540ebe80e54b0f2390c3b82fd09bc4b90b4991da5641ea5c93acc6487->enter($__internal_808ff3c540ebe80e54b0f2390c3b82fd09bc4b90b4991da5641ea5c93acc6487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_e071a9e1accc3df5e1c1b925784410c41f1d6d5393623124c983bc3f9263067a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e071a9e1accc3df5e1c1b925784410c41f1d6d5393623124c983bc3f9263067a->enter($__internal_e071a9e1accc3df5e1c1b925784410c41f1d6d5393623124c983bc3f9263067a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_e071a9e1accc3df5e1c1b925784410c41f1d6d5393623124c983bc3f9263067a->leave($__internal_e071a9e1accc3df5e1c1b925784410c41f1d6d5393623124c983bc3f9263067a_prof);

        
        $__internal_808ff3c540ebe80e54b0f2390c3b82fd09bc4b90b4991da5641ea5c93acc6487->leave($__internal_808ff3c540ebe80e54b0f2390c3b82fd09bc4b90b4991da5641ea5c93acc6487_prof);

    }

    // line 30
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_63bb78b51291e9d40435de6ee7949b596a8b385999d48fd85dabb1ef78b384e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63bb78b51291e9d40435de6ee7949b596a8b385999d48fd85dabb1ef78b384e4->enter($__internal_63bb78b51291e9d40435de6ee7949b596a8b385999d48fd85dabb1ef78b384e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_6db4df7154ded5272d411f8a9592a4dfd55e7124b8c03f91de30eeebcb4b45ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db4df7154ded5272d411f8a9592a4dfd55e7124b8c03f91de30eeebcb4b45ca->enter($__internal_6db4df7154ded5272d411f8a9592a4dfd55e7124b8c03f91de30eeebcb4b45ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 31
        ob_start();
        // line 32
        echo "    ";
        if (("search" == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 33
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("search.page_title", $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nbResults", array()), array(), "EasyAdminBundle");
            // line 34
            echo "        ";
            echo (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "search", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "search", array()), "title", array()), $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nbResults", array()), array(),             // line 2
($context["__internal_ddf27f86e46bc9da5efc56ebdbb3cc883cb88e9d9c52eedf9cbdc2257f923b0e"] ?? $this->getContext($context, "__internal_ddf27f86e46bc9da5efc56ebdbb3cc883cb88e9d9c52eedf9cbdc2257f923b0e")))) : (            // line 34
($context["_default_title"] ?? $this->getContext($context, "_default_title"))));
            echo "
    ";
        } else {
            // line 36
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
            // line 37
            echo "        ";
            echo (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "list", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "list", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),             // line 2
($context["__internal_ddf27f86e46bc9da5efc56ebdbb3cc883cb88e9d9c52eedf9cbdc2257f923b0e"] ?? $this->getContext($context, "__internal_ddf27f86e46bc9da5efc56ebdbb3cc883cb88e9d9c52eedf9cbdc2257f923b0e")))) : (            // line 37
($context["_default_title"] ?? $this->getContext($context, "_default_title"))));
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6db4df7154ded5272d411f8a9592a4dfd55e7124b8c03f91de30eeebcb4b45ca->leave($__internal_6db4df7154ded5272d411f8a9592a4dfd55e7124b8c03f91de30eeebcb4b45ca_prof);

        
        $__internal_63bb78b51291e9d40435de6ee7949b596a8b385999d48fd85dabb1ef78b384e4->leave($__internal_63bb78b51291e9d40435de6ee7949b596a8b385999d48fd85dabb1ef78b384e4_prof);

    }

    // line 42
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_d2f16f659d5d558174ff83458728b227ae6ef7352322462c590e1155a04ca149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f16f659d5d558174ff83458728b227ae6ef7352322462c590e1155a04ca149->enter($__internal_d2f16f659d5d558174ff83458728b227ae6ef7352322462c590e1155a04ca149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_1da86cef4223f1cfc49ecfc8dade63ad7224bd7a6fb6d05c94d33fb932e7efcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da86cef4223f1cfc49ecfc8dade63ad7224bd7a6fb6d05c94d33fb932e7efcd->enter($__internal_1da86cef4223f1cfc49ecfc8dade63ad7224bd7a6fb6d05c94d33fb932e7efcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 43
        echo "    <div class=\"row\">
        <div class=\"col-sm-5\">
            ";
        // line 45
        $this->displayBlock('content_title_wrapper', $context, $blocks);
        // line 48
        echo "        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                ";
        // line 52
        $this->displayBlock('global_actions', $context, $blocks);
        // line 93
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_1da86cef4223f1cfc49ecfc8dade63ad7224bd7a6fb6d05c94d33fb932e7efcd->leave($__internal_1da86cef4223f1cfc49ecfc8dade63ad7224bd7a6fb6d05c94d33fb932e7efcd_prof);

        
        $__internal_d2f16f659d5d558174ff83458728b227ae6ef7352322462c590e1155a04ca149->leave($__internal_d2f16f659d5d558174ff83458728b227ae6ef7352322462c590e1155a04ca149_prof);

    }

    // line 45
    public function block_content_title_wrapper($context, array $blocks = array())
    {
        $__internal_6bebe5d98a55501e93ca3780993c0e44e7e396c299e49286ca6c948e33b6237e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bebe5d98a55501e93ca3780993c0e44e7e396c299e49286ca6c948e33b6237e->enter($__internal_6bebe5d98a55501e93ca3780993c0e44e7e396c299e49286ca6c948e33b6237e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title_wrapper"));

        $__internal_df2fe58bbee47bdd23d827511f7eb0f049542f2c69720e0395472a97ac64d980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2fe58bbee47bdd23d827511f7eb0f049542f2c69720e0395472a97ac64d980->enter($__internal_df2fe58bbee47bdd23d827511f7eb0f049542f2c69720e0395472a97ac64d980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title_wrapper"));

        // line 46
        echo "                <h1 class=\"title\">";
        $this->displayBlock("content_title", $context, $blocks);
        echo "</h1>
            ";
        
        $__internal_df2fe58bbee47bdd23d827511f7eb0f049542f2c69720e0395472a97ac64d980->leave($__internal_df2fe58bbee47bdd23d827511f7eb0f049542f2c69720e0395472a97ac64d980_prof);

        
        $__internal_6bebe5d98a55501e93ca3780993c0e44e7e396c299e49286ca6c948e33b6237e->leave($__internal_6bebe5d98a55501e93ca3780993c0e44e7e396c299e49286ca6c948e33b6237e_prof);

    }

    // line 52
    public function block_global_actions($context, array $blocks = array())
    {
        $__internal_6da6ff0ce010afa8d0f25a2fb9a1ca33b619ec33ac92c1bde58eceda6e8d521c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6da6ff0ce010afa8d0f25a2fb9a1ca33b619ec33ac92c1bde58eceda6e8d521c->enter($__internal_6da6ff0ce010afa8d0f25a2fb9a1ca33b619ec33ac92c1bde58eceda6e8d521c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        $__internal_e8ddbb850f9334c979138f016fb068e1172e99e140e13fbd5eeaea3753f75827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ddbb850f9334c979138f016fb068e1172e99e140e13fbd5eeaea3753f75827->enter($__internal_e8ddbb850f9334c979138f016fb068e1172e99e140e13fbd5eeaea3753f75827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        // line 53
        echo "                    ";
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "search", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 54
            echo "                        ";
            $context["_action"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "search", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
            // line 55
            echo "
                        ";
            // line 56
            $this->displayBlock('search_action', $context, $blocks);
            // line 79
            echo "                    ";
        }
        // line 80
        echo "
                    ";
        // line 81
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "new", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 82
            echo "                        ";
            $context["_action"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "new", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
            // line 83
            echo "                        ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 91
            echo "                    ";
        }
        // line 92
        echo "                ";
        
        $__internal_e8ddbb850f9334c979138f016fb068e1172e99e140e13fbd5eeaea3753f75827->leave($__internal_e8ddbb850f9334c979138f016fb068e1172e99e140e13fbd5eeaea3753f75827_prof);

        
        $__internal_6da6ff0ce010afa8d0f25a2fb9a1ca33b619ec33ac92c1bde58eceda6e8d521c->leave($__internal_6da6ff0ce010afa8d0f25a2fb9a1ca33b619ec33ac92c1bde58eceda6e8d521c_prof);

    }

    // line 56
    public function block_search_action($context, array $blocks = array())
    {
        $__internal_6e42d3ef777538336e0fdc80b91837bf551b113108f8a0e5ed15243fee225ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e42d3ef777538336e0fdc80b91837bf551b113108f8a0e5ed15243fee225ed8->enter($__internal_6e42d3ef777538336e0fdc80b91837bf551b113108f8a0e5ed15243fee225ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        $__internal_d094825d65ca091c953784ab17d9f63385641a2d38e55cbfb3dd3843e2f2bc40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d094825d65ca091c953784ab17d9f63385641a2d38e55cbfb3dd3843e2f2bc40->enter($__internal_d094825d65ca091c953784ab17d9f63385641a2d38e55cbfb3dd3843e2f2bc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        // line 57
        echo "                            <div class=\"form-action ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["_action"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_action"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                                <form method=\"get\" action=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                    ";
        // line 59
        $this->displayBlock('search_form', $context, $blocks);
        // line 76
        echo "                                </form>
                            </div>
                        ";
        
        $__internal_d094825d65ca091c953784ab17d9f63385641a2d38e55cbfb3dd3843e2f2bc40->leave($__internal_d094825d65ca091c953784ab17d9f63385641a2d38e55cbfb3dd3843e2f2bc40_prof);

        
        $__internal_6e42d3ef777538336e0fdc80b91837bf551b113108f8a0e5ed15243fee225ed8->leave($__internal_6e42d3ef777538336e0fdc80b91837bf551b113108f8a0e5ed15243fee225ed8_prof);

    }

    // line 59
    public function block_search_form($context, array $blocks = array())
    {
        $__internal_0997e088f1b6869702234a293f3b9e766ac7bae7b994626e896b7b1bae0467db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0997e088f1b6869702234a293f3b9e766ac7bae7b994626e896b7b1bae0467db->enter($__internal_0997e088f1b6869702234a293f3b9e766ac7bae7b994626e896b7b1bae0467db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_form"));

        $__internal_7cb0ffb7c79004aec0730bd7950ab7889bede5958274d52d1ba6cfeedc3c8601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb0ffb7c79004aec0730bd7950ab7889bede5958274d52d1ba6cfeedc3c8601->enter($__internal_7cb0ffb7c79004aec0730bd7950ab7889bede5958274d52d1ba6cfeedc3c8601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_form"));

        // line 60
        echo "                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "entity", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array()), $this->getAttribute(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "sortField", array()))) : ($this->getAttribute(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "sortField", array()))), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array()), $this->getAttribute(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "sortDirection", array()))) : ($this->getAttribute(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "sortDirection", array()))), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "menuIndex", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "submenuIndex", array()), "html", null, true);
        echo "\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "html", null, true);
        echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\" formtarget=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "target", array()), "html", null, true);
        echo "\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["_action"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_action"] ?? null), "label", array()), "action.search")) : ("action.search")), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 2
($context["__internal_ddf27f86e46bc9da5efc56ebdbb3cc883cb88e9d9c52eedf9cbdc2257f923b0e"] ?? $this->getContext($context, "__internal_ddf27f86e46bc9da5efc56ebdbb3cc883cb88e9d9c52eedf9cbdc2257f923b0e"))), "html", null, true);
        // line 71
        echo "</span>
                                                </button>
                                            </span>
                                        </div>
                                    ";
        
        $__internal_7cb0ffb7c79004aec0730bd7950ab7889bede5958274d52d1ba6cfeedc3c8601->leave($__internal_7cb0ffb7c79004aec0730bd7950ab7889bede5958274d52d1ba6cfeedc3c8601_prof);

        
        $__internal_0997e088f1b6869702234a293f3b9e766ac7bae7b994626e896b7b1bae0467db->leave($__internal_0997e088f1b6869702234a293f3b9e766ac7bae7b994626e896b7b1bae0467db_prof);

    }

    // line 83
    public function block_new_action($context, array $blocks = array())
    {
        $__internal_8800e11e818380128094e5a887fe269d707f3a5f17706604bb25e1f01f84f50a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8800e11e818380128094e5a887fe269d707f3a5f17706604bb25e1f01f84f50a->enter($__internal_8800e11e818380128094e5a887fe269d707f3a5f17706604bb25e1f01f84f50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        $__internal_76aa24f7334cd5fb0ce3c81c5c9713dd908f6522af3a773fe90cccb2ebfdb8b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76aa24f7334cd5fb0ce3c81c5c9713dd908f6522af3a773fe90cccb2ebfdb8b6->enter($__internal_76aa24f7334cd5fb0ce3c81c5c9713dd908f6522af3a773fe90cccb2ebfdb8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        // line 84
        echo "                            <div class=\"button-action\">
                                <a class=\"";
        // line 85
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["_action"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_action"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), array("action" => $this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "name", array())))), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "target", array()), "html", null, true);
        echo "\">
                                    ";
        // line 86
        if ($this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "icon", array())) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "icon", array()), "html", null, true);
            echo "\"></i>";
        }
        // line 87
        echo "                                    ";
        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["_action"] ?? null), "label", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "label", array())))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "label", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 2
($context["__internal_ddf27f86e46bc9da5efc56ebdbb3cc883cb88e9d9c52eedf9cbdc2257f923b0e"] ?? $this->getContext($context, "__internal_ddf27f86e46bc9da5efc56ebdbb3cc883cb88e9d9c52eedf9cbdc2257f923b0e")))) : ("")), "html", null, true);
        // line 87
        echo "
                                </a>
                            </div>
                        ";
        
        $__internal_76aa24f7334cd5fb0ce3c81c5c9713dd908f6522af3a773fe90cccb2ebfdb8b6->leave($__internal_76aa24f7334cd5fb0ce3c81c5c9713dd908f6522af3a773fe90cccb2ebfdb8b6_prof);

        
        $__internal_8800e11e818380128094e5a887fe269d707f3a5f17706604bb25e1f01f84f50a->leave($__internal_8800e11e818380128094e5a887fe269d707f3a5f17706604bb25e1f01f84f50a_prof);

    }

    // line 98
    public function block_main($context, array $blocks = array())
    {
        $__internal_067c4de23949f164bc9fd2bba3845b725824d07b13717b7bb7cf5cb59abf1917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_067c4de23949f164bc9fd2bba3845b725824d07b13717b7bb7cf5cb59abf1917->enter($__internal_067c4de23949f164bc9fd2bba3845b725824d07b13717b7bb7cf5cb59abf1917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_fa65a9ec436677bd771b7a4d7494736202aba869a1d9fd20c0a09a857c2113ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa65a9ec436677bd771b7a4d7494736202aba869a1d9fd20c0a09a857c2113ea->enter($__internal_fa65a9ec436677bd771b7a4d7494736202aba869a1d9fd20c0a09a857c2113ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 99
        echo "    ";
        $context["_list_item_actions"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("list", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
        // line 100
        echo "
    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        ";
        // line 104
        $this->displayBlock('table_head', $context, $blocks);
        // line 131
        echo "        </thead>

        <tbody>
        ";
        // line 134
        $this->displayBlock('table_body', $context, $blocks);
        // line 171
        echo "        </tbody>
    </table>
    </div>

    ";
        // line 175
        $this->displayBlock('paginator', $context, $blocks);
        // line 178
        echo "
    ";
        // line 179
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_fa65a9ec436677bd771b7a4d7494736202aba869a1d9fd20c0a09a857c2113ea->leave($__internal_fa65a9ec436677bd771b7a4d7494736202aba869a1d9fd20c0a09a857c2113ea_prof);

        
        $__internal_067c4de23949f164bc9fd2bba3845b725824d07b13717b7bb7cf5cb59abf1917->leave($__internal_067c4de23949f164bc9fd2bba3845b725824d07b13717b7bb7cf5cb59abf1917_prof);

    }

    // line 104
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_9da9c47731d71600ab1b9b3103d2eee898a3b698ba1a59ecbfbc7d98fa28eaea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9da9c47731d71600ab1b9b3103d2eee898a3b698ba1a59ecbfbc7d98fa28eaea->enter($__internal_9da9c47731d71600ab1b9b3103d2eee898a3b698ba1a59ecbfbc7d98fa28eaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        $__internal_e6132033ac329a7ae9677d0512a90e53bbc19d65e6f219df3bc8ff69c0c2a86a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6132033ac329a7ae9677d0512a90e53bbc19d65e6f219df3bc8ff69c0c2a86a->enter($__internal_e6132033ac329a7ae9677d0512a90e53bbc19d65e6f219df3bc8ff69c0c2a86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 105
        echo "            <tr>
                ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 107
            echo "                    ";
            $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField"), "method"), ".")));
            // line 108
            echo "                    ";
            $context["nextSortDirection"] = ((($context["isSortingField"] ?? $this->getContext($context, "isSortingField"))) ? (((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection"), "method") == "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 109
            echo "                    ";
            $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["field"]))), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),             // line 2
($context["__internal_ddf27f86e46bc9da5efc56ebdbb3cc883cb88e9d9c52eedf9cbdc2257f923b0e"] ?? $this->getContext($context, "__internal_ddf27f86e46bc9da5efc56ebdbb3cc883cb88e9d9c52eedf9cbdc2257f923b0e")));
            // line 110
            echo "                    ";
            $context["_column_icon"] = ((($context["isSortingField"] ?? $this->getContext($context, "isSortingField"))) ? ((((($context["nextSortDirection"] ?? $this->getContext($context, "nextSortDirection")) == "DESC")) ? ("fa-caret-up") : ("fa-caret-down"))) : ("fa-sort"));
            // line 111
            echo "
                    <th data-property-name=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "property", array()), "html", null, true);
            echo "\" class=\"";
            echo ((($context["isSortingField"] ?? $this->getContext($context, "isSortingField"))) ? ("sorted") : (""));
            echo " ";
            echo (($this->getAttribute($context["metadata"], "virtual", array())) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "css_class", array()), "html", null, true);
            echo "\">
                        ";
            // line 113
            if ($this->getAttribute($context["metadata"], "sortable", array())) {
                // line 114
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), array("page" => 1, "sortField" => $this->getAttribute($context["metadata"], "property", array()), "sortDirection" => ($context["nextSortDirection"] ?? $this->getContext($context, "nextSortDirection"))))), "html", null, true);
                echo "\">
                                <i class=\"fa ";
                // line 115
                echo twig_escape_filter($this->env, ($context["_column_icon"] ?? $this->getContext($context, "_column_icon")), "html", null, true);
                echo "\"></i>
                                ";
                // line 116
                echo ($context["_column_label"] ?? $this->getContext($context, "_column_label"));
                echo "
                            </a>
                        ";
            } else {
                // line 119
                echo "                            <span>";
                echo ($context["_column_label"] ?? $this->getContext($context, "_column_label"));
                echo "</span>
                        ";
            }
            // line 121
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "
                ";
        // line 124
        if ((twig_length_filter($this->env, ($context["_list_item_actions"] ?? $this->getContext($context, "_list_item_actions"))) > 0)) {
            // line 125
            echo "                    <th>
                        <span>";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </th>
                ";
        }
        // line 129
        echo "            </tr>
        ";
        
        $__internal_e6132033ac329a7ae9677d0512a90e53bbc19d65e6f219df3bc8ff69c0c2a86a->leave($__internal_e6132033ac329a7ae9677d0512a90e53bbc19d65e6f219df3bc8ff69c0c2a86a_prof);

        
        $__internal_9da9c47731d71600ab1b9b3103d2eee898a3b698ba1a59ecbfbc7d98fa28eaea->leave($__internal_9da9c47731d71600ab1b9b3103d2eee898a3b698ba1a59ecbfbc7d98fa28eaea_prof);

    }

    // line 134
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_2f895df328ab8ff75447214c67dea027abc008286f1bfe9936804a1619078153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f895df328ab8ff75447214c67dea027abc008286f1bfe9936804a1619078153->enter($__internal_2f895df328ab8ff75447214c67dea027abc008286f1bfe9936804a1619078153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_8f95c9b08fe7c3dd1acd393916e6931ce122ef004b7bcced8e9b9800295a797c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f95c9b08fe7c3dd1acd393916e6931ce122ef004b7bcced8e9b9800295a797c->enter($__internal_8f95c9b08fe7c3dd1acd393916e6931ce122ef004b7bcced8e9b9800295a797c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 135
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPageResults", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 136
            echo "                ";
            // line 137
            echo "                ";
            $context["_item_id"] = ("" . $this->getAttribute($context["item"], $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
            // line 138
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, ($context["_item_id"] ?? $this->getContext($context, "_item_id")), "html", null, true);
            echo "\">
                    ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
            foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                // line 140
                echo "                        ";
                $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField"), "method"));
                // line 141
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["field"]))), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),                 // line 2
($context["__internal_ddf27f86e46bc9da5efc56ebdbb3cc883cb88e9d9c52eedf9cbdc2257f923b0e"] ?? $this->getContext($context, "__internal_ddf27f86e46bc9da5efc56ebdbb3cc883cb88e9d9c52eedf9cbdc2257f923b0e")));
                // line 142
                echo "
                        <td data-label=\"";
                // line 143
                echo twig_escape_filter($this->env, ($context["_column_label"] ?? $this->getContext($context, "_column_label")), "html", null, true);
                echo "\" class=\"";
                echo ((($context["isSortingField"] ?? $this->getContext($context, "isSortingField"))) ? ("sorted") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "css_class", array()), "html", null, true);
                echo "\">
                            ";
                // line 144
                echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "list", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), $context["item"], $context["metadata"]);
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "
                    ";
            // line 148
            if ((twig_length_filter($this->env, ($context["_list_item_actions"] ?? $this->getContext($context, "_list_item_actions"))) > 0)) {
                // line 149
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
                // line 150
                echo "                        <td data-label=\"";
                echo twig_escape_filter($this->env, ($context["_column_label"] ?? $this->getContext($context, "_column_label")), "html", null, true);
                echo "\" class=\"actions\">
                        ";
                // line 151
                $this->displayBlock('item_actions', $context, $blocks);
                // line 160
                echo "                        </td>
                    ";
            }
            // line 162
            echo "                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 164
            echo "                <tr>
                    <td class=\"no-results\" colspan=\"";
            // line 165
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, ($context["_list_item_actions"] ?? $this->getContext($context, "_list_item_actions"))) > 0)) ? ((twig_length_filter($this->env, ($context["fields"] ?? $this->getContext($context, "fields"))) + 1)) : (twig_length_filter($this->env, ($context["fields"] ?? $this->getContext($context, "fields"))))), "html", null, true);
            echo "\">
                        ";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search.no_results", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "        ";
        
        $__internal_8f95c9b08fe7c3dd1acd393916e6931ce122ef004b7bcced8e9b9800295a797c->leave($__internal_8f95c9b08fe7c3dd1acd393916e6931ce122ef004b7bcced8e9b9800295a797c_prof);

        
        $__internal_2f895df328ab8ff75447214c67dea027abc008286f1bfe9936804a1619078153->leave($__internal_2f895df328ab8ff75447214c67dea027abc008286f1bfe9936804a1619078153_prof);

    }

    // line 151
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_e2419ae0a576bd981b1ff8262eea565bd2ee76dfe4fc6b9b8f13081410dfb4ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2419ae0a576bd981b1ff8262eea565bd2ee76dfe4fc6b9b8f13081410dfb4ac->enter($__internal_e2419ae0a576bd981b1ff8262eea565bd2ee76dfe4fc6b9b8f13081410dfb4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_6c8a8a95aecf3621c74a7c930fd3f58623d5bb2c92d1c9cc4e980f6f12492162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8a8a95aecf3621c74a7c930fd3f58623d5bb2c92d1c9cc4e980f6f12492162->enter($__internal_6c8a8a95aecf3621c74a7c930fd3f58623d5bb2c92d1c9cc4e980f6f12492162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 152
        echo "                            ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 153
($context["_list_item_actions"] ?? $this->getContext($context, "_list_item_actions")), "request_parameters" =>         // line 154
($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 155
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 156
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 157
($context["_item_id"] ?? $this->getContext($context, "_item_id"))), false);
        // line 158
        echo "
                        ";
        
        $__internal_6c8a8a95aecf3621c74a7c930fd3f58623d5bb2c92d1c9cc4e980f6f12492162->leave($__internal_6c8a8a95aecf3621c74a7c930fd3f58623d5bb2c92d1c9cc4e980f6f12492162_prof);

        
        $__internal_e2419ae0a576bd981b1ff8262eea565bd2ee76dfe4fc6b9b8f13081410dfb4ac->leave($__internal_e2419ae0a576bd981b1ff8262eea565bd2ee76dfe4fc6b9b8f13081410dfb4ac_prof);

    }

    // line 175
    public function block_paginator($context, array $blocks = array())
    {
        $__internal_57c149c783a29433fb5a953f60a8d003eaf9a7792ad56ea83ec63db2813277f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c149c783a29433fb5a953f60a8d003eaf9a7792ad56ea83ec63db2813277f0->enter($__internal_57c149c783a29433fb5a953f60a8d003eaf9a7792ad56ea83ec63db2813277f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        $__internal_b9fc05acd9f7e35a5eb934c8c44fa1b57bd62ae5be41735fd183d5ad3f9cfe34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9fc05acd9f7e35a5eb934c8c44fa1b57bd62ae5be41735fd183d5ad3f9cfe34->enter($__internal_b9fc05acd9f7e35a5eb934c8c44fa1b57bd62ae5be41735fd183d5ad3f9cfe34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        // line 176
        echo "        ";
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "paginator", array()));
        echo "
    ";
        
        $__internal_b9fc05acd9f7e35a5eb934c8c44fa1b57bd62ae5be41735fd183d5ad3f9cfe34->leave($__internal_b9fc05acd9f7e35a5eb934c8c44fa1b57bd62ae5be41735fd183d5ad3f9cfe34_prof);

        
        $__internal_57c149c783a29433fb5a953f60a8d003eaf9a7792ad56ea83ec63db2813277f0->leave($__internal_57c149c783a29433fb5a953f60a8d003eaf9a7792ad56ea83ec63db2813277f0_prof);

    }

    // line 179
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_9a27c807e5d4007145f71c04f0033d0a9ca704fda372e4eed0aed7f285a11f7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a27c807e5d4007145f71c04f0033d0a9ca704fda372e4eed0aed7f285a11f7b->enter($__internal_9a27c807e5d4007145f71c04f0033d0a9ca704fda372e4eed0aed7f285a11f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_306491d259548fad64e9e67fc10462d24bce1d4f2399ae4e1bc4bd683f48074a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306491d259548fad64e9e67fc10462d24bce1d4f2399ae4e1bc4bd683f48074a->enter($__internal_306491d259548fad64e9e67fc10462d24bce1d4f2399ae4e1bc4bd683f48074a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 180
        echo "        ";
        $context["referer"] = ((((($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", array()) == $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nbPages", array())) && (1 != $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", array()))) && (1 == twig_length_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPageResults", array()))))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge($this->getAttribute($this->getAttribute(        // line 181
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), array("page" => ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "page"), "method") - 1))))) : ($this->getAttribute($this->getAttribute(        // line 182
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "requestUri", array())));
        // line 184
        echo "
        ";
        // line 185
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "list", "referer" => twig_urlencode_filter(        // line 187
($context["referer"] ?? $this->getContext($context, "referer"))), "delete_form" =>         // line 188
($context["delete_form_template"] ?? $this->getContext($context, "delete_form_template")), "_translation_domain" => $this->getAttribute(        // line 189
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 190
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 191
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 192
        echo "
    ";
        
        $__internal_306491d259548fad64e9e67fc10462d24bce1d4f2399ae4e1bc4bd683f48074a->leave($__internal_306491d259548fad64e9e67fc10462d24bce1d4f2399ae4e1bc4bd683f48074a_prof);

        
        $__internal_9a27c807e5d4007145f71c04f0033d0a9ca704fda372e4eed0aed7f285a11f7b->leave($__internal_9a27c807e5d4007145f71c04f0033d0a9ca704fda372e4eed0aed7f285a11f7b_prof);

    }

    // line 196
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_32e098728ce9e490e4e8cf54fd60d4cb5a492658b627cb94c0a6291e70d18399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32e098728ce9e490e4e8cf54fd60d4cb5a492658b627cb94c0a6291e70d18399->enter($__internal_32e098728ce9e490e4e8cf54fd60d4cb5a492658b627cb94c0a6291e70d18399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_2ac37d6158ad7172d49cf670a2543158d66b7f6f523f7025050ecb84a53e7bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac37d6158ad7172d49cf670a2543158d66b7f6f523f7025050ecb84a53e7bc0->enter($__internal_2ac37d6158ad7172d49cf670a2543158d66b7f6f523f7025050ecb84a53e7bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 197
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"";
        // line 209
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "edit", "entity" => $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), "view" => "list"));
        echo "\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 240
        if (("search" == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 241
            echo "        <script type=\"text/javascript\">
            var _search_query = \"";
            // line 242
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
        
        $__internal_2ac37d6158ad7172d49cf670a2543158d66b7f6f523f7025050ecb84a53e7bc0->leave($__internal_2ac37d6158ad7172d49cf670a2543158d66b7f6f523f7025050ecb84a53e7bc0_prof);

        
        $__internal_32e098728ce9e490e4e8cf54fd60d4cb5a492658b627cb94c0a6291e70d18399->leave($__internal_32e098728ce9e490e4e8cf54fd60d4cb5a492658b627cb94c0a6291e70d18399_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  831 => 242,  828 => 241,  826 => 240,  792 => 209,  776 => 197,  767 => 196,  756 => 192,  754 => 191,  753 => 190,  752 => 189,  751 => 188,  750 => 187,  749 => 185,  746 => 184,  744 => 182,  743 => 181,  741 => 180,  732 => 179,  719 => 176,  710 => 175,  699 => 158,  697 => 157,  696 => 156,  695 => 155,  694 => 154,  693 => 153,  691 => 152,  682 => 151,  672 => 170,  662 => 166,  658 => 165,  655 => 164,  641 => 162,  637 => 160,  635 => 151,  630 => 150,  627 => 149,  625 => 148,  622 => 147,  613 => 144,  603 => 143,  600 => 142,  598 => 2,  596 => 141,  593 => 140,  589 => 139,  584 => 138,  581 => 137,  579 => 136,  560 => 135,  551 => 134,  540 => 129,  534 => 126,  531 => 125,  529 => 124,  526 => 123,  519 => 121,  513 => 119,  507 => 116,  503 => 115,  498 => 114,  496 => 113,  484 => 112,  481 => 111,  478 => 110,  476 => 2,  474 => 109,  471 => 108,  468 => 107,  464 => 106,  461 => 105,  452 => 104,  442 => 179,  439 => 178,  437 => 175,  431 => 171,  429 => 134,  424 => 131,  422 => 104,  416 => 100,  413 => 99,  404 => 98,  391 => 87,  389 => 2,  387 => 87,  381 => 86,  373 => 85,  370 => 84,  361 => 83,  347 => 71,  345 => 2,  344 => 71,  339 => 69,  334 => 67,  329 => 65,  325 => 64,  321 => 63,  317 => 62,  313 => 61,  310 => 60,  301 => 59,  289 => 76,  287 => 59,  283 => 58,  278 => 57,  269 => 56,  259 => 92,  256 => 91,  253 => 83,  250 => 82,  248 => 81,  245 => 80,  242 => 79,  240 => 56,  237 => 55,  234 => 54,  231 => 53,  222 => 52,  209 => 46,  200 => 45,  187 => 93,  185 => 52,  179 => 48,  177 => 45,  173 => 43,  164 => 42,  150 => 37,  149 => 2,  147 => 37,  144 => 36,  139 => 34,  138 => 2,  136 => 34,  133 => 33,  130 => 32,  128 => 31,  119 => 30,  101 => 28,  83 => 27,  73 => 5,  71 => 25,  68 => 21,  67 => 20,  66 => 19,  65 => 18,  63 => 17,  61 => 14,  60 => 13,  59 => 12,  58 => 11,  57 => 10,  56 => 9,  55 => 8,  54 => 7,  52 => 2,  51 => 3,  50 => 2,  49 => 3,  47 => 2,  45 => 1,  33 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% set _request_parameters = _request_parameters|default({})|merge({
    action: app.request.get('action'),
    entity: _entity_config.name,
    menuIndex: app.request.get('menuIndex'),
    submenuIndex: app.request.get('submenuIndex'),
    sortField: app.request.get('sortField', ''),
    sortDirection: app.request.get('sortDirection', 'DESC'),
    page: app.request.get('page', 1)
}) %}

{% if 'search' == app.request.get('action') %}
    {% set _request_parameters = _request_parameters|merge({
        query: app.request.get('query')|default(''),
        sortField: _entity_config.search.sort.field|default(app.request.get('sortField', '')),
        sortDirection: _entity_config.search.sort.direction|default(app.request.get('sortDirection', 'DESC')),
    }) %}
{% endif %}

{% set _request_parameters = _request_parameters|merge({ referer: path('easyadmin', _request_parameters)|url_encode }) %}

{% block body_id 'easyadmin-list-' ~ _entity_config.name %}
{% block body_class 'list list-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% if 'search' == app.request.get('action') %}
        {% set _default_title = 'search.page_title'|transchoice(paginator.nbResults, {}, 'EasyAdminBundle') %}
        {{ (_entity_config.search.title is defined ? _entity_config.search.title|transchoice(paginator.nbResults) : _default_title)|raw }}
    {% else %}
        {% set _default_title = 'list.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
        {{ (_entity_config.list.title is defined ? _entity_config.list.title|trans(_trans_parameters) : _default_title)|raw }}
    {% endif %}
{% endspaceless %}
{% endblock %}

{% block content_header %}
    <div class=\"row\">
        <div class=\"col-sm-5\">
            {% block content_title_wrapper %}
                <h1 class=\"title\">{{ block('content_title') }}</h1>
            {% endblock %}
        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                {% block global_actions %}
                    {% if easyadmin_action_is_enabled_for_list_view('search', _entity_config.name) %}
                        {% set _action = easyadmin_get_action_for_list_view('search', _entity_config.name) %}

                        {% block search_action %}
                            <div class=\"form-action {{ _action.css_class|default('') }}\">
                                <form method=\"get\" action=\"{{ path('easyadmin') }}\">
                                    {% block search_form %}
                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"{{ _request_parameters.entity }}\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"{{ _entity_config.search.sort.field|default(_request_parameters.sortField) }}\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"{{ _entity_config.search.sort.direction|default(_request_parameters.sortDirection) }}\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"{{ _request_parameters.menuIndex }}\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"{{ _request_parameters.submenuIndex }}\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"{{ app.request.get('query')|default('') }}\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\" formtarget=\"{{ _action.target }}\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">{{ _action.label|default('action.search')|trans(_trans_parameters) }}</span>
                                                </button>
                                            </span>
                                        </div>
                                    {% endblock %}
                                </form>
                            </div>
                        {% endblock search_action %}
                    {% endif %}

                    {% if easyadmin_action_is_enabled_for_list_view('new', _entity_config.name) %}
                        {% set _action = easyadmin_get_action_for_list_view('new', _entity_config.name) %}
                        {% block new_action %}
                            <div class=\"button-action\">
                                <a class=\"{{ _action.css_class|default('') }}\" href=\"{{ path('easyadmin', _request_parameters|merge({ action: _action.name })) }}\" target=\"{{ _action.target }}\">
                                    {% if _action.icon %}<i class=\"fa fa-{{ _action.icon }}\"></i>{% endif %}
                                    {{ _action.label is defined and not _action.label is empty ? _action.label|trans(_trans_parameters) }}
                                </a>
                            </div>
                        {% endblock new_action %}
                    {% endif %}
                {% endblock global_actions %}
            </div>
        </div>
    </div>
{% endblock content_header %}

{% block main %}
    {% set _list_item_actions = easyadmin_get_actions_for_list_item(_entity_config.name) %}

    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        {% block table_head %}
            <tr>
                {% for field, metadata in fields %}
                    {% set isSortingField = metadata.property == app.request.get('sortField')|split('.')|first %}
                    {% set nextSortDirection = isSortingField ? (app.request.get('sortDirection') == 'DESC' ? 'ASC' : 'DESC') : 'DESC' %}
                    {% set _column_label = (metadata.label ?: field|humanize)|trans(_trans_parameters) %}
                    {% set _column_icon = isSortingField ? (nextSortDirection == 'DESC' ? 'fa-caret-up' : 'fa-caret-down') : 'fa-sort' %}

                    <th data-property-name=\"{{ metadata.property }}\" class=\"{{ isSortingField ? 'sorted' }} {{ metadata.virtual ? 'virtual' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\">
                        {% if metadata.sortable %}
                            <a href=\"{{ path('easyadmin', _request_parameters|merge({ page: 1, sortField: metadata.property, sortDirection: nextSortDirection })) }}\">
                                <i class=\"fa {{ _column_icon }}\"></i>
                                {{ _column_label|raw }}
                            </a>
                        {% else %}
                            <span>{{ _column_label|raw }}</span>
                        {% endif %}
                    </th>
                {% endfor %}

                {% if _list_item_actions|length > 0 %}
                    <th>
                        <span>{{ 'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') }}</span>
                    </th>
                {% endif %}
            </tr>
        {% endblock table_head %}
        </thead>

        <tbody>
        {% block table_body %}
            {% for item in paginator.currentPageResults %}
                {# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
                {% set _item_id = '' ~ attribute(item, _entity_config.primary_key_field_name) %}
                <tr data-id=\"{{ _item_id }}\">
                    {% for field, metadata in fields %}
                        {% set isSortingField = metadata.property == app.request.get('sortField') %}
                        {% set _column_label =  (metadata.label ?: field|humanize)|trans(_trans_parameters)  %}

                        <td data-label=\"{{ _column_label }}\" class=\"{{ isSortingField ? 'sorted' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\">
                            {{ easyadmin_render_field_for_list_view(_entity_config.name, item, metadata) }}
                        </td>
                    {% endfor %}

                    {% if _list_item_actions|length > 0 %}
                        {% set _column_label =  'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') %}
                        <td data-label=\"{{ _column_label }}\" class=\"actions\">
                        {% block item_actions %}
                            {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                                actions: _list_item_actions,
                                request_parameters: _request_parameters,
                                translation_domain: _entity_config.translation_domain,
                                trans_parameters: _trans_parameters,
                                item_id: _item_id
                            }, with_context = false) }}
                        {% endblock item_actions %}
                        </td>
                    {% endif %}
                </tr>
            {% else %}
                <tr>
                    <td class=\"no-results\" colspan=\"{{ _list_item_actions|length > 0 ? fields|length + 1 : fields|length }}\">
                        {{ 'search.no_results'|trans(_trans_parameters, 'EasyAdminBundle') }}
                    </td>
                </tr>
            {% endfor %}
        {% endblock table_body %}
        </tbody>
    </table>
    </div>

    {% block paginator %}
        {{ include(_entity_config.templates.paginator) }}
    {% endblock paginator %}

    {% block delete_form %}
        {% set referer = paginator.currentPage == paginator.nbPages and 1 != paginator.currentPage and 1 == paginator.currentPageResults|length
            ? path('easyadmin', app.request.query|merge({ page: app.request.query.get('page') - 1 }))
            : app.request.requestUri
        %}

        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'list',
            referer: referer|url_encode,
            delete_form: delete_form_template,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock main %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"{{ path('easyadmin', { action: 'edit', entity: _entity_config.name, view: 'list' })|raw }}\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    {% if 'search' == app.request.get('action') %}
        <script type=\"text/javascript\">
            var _search_query = \"{{ app.request.get('query')|default('')|e('js') }}\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    {% endif %}
{% endblock %}
", "EasyAdminBundle:default:list.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/list.html.twig");
    }
}
