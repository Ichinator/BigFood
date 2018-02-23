<?php

/* EasyAdminBundle:default:show.html.twig */
class __TwigTemplate_f9022a8ba99052b20a4ca623dfa77b04ccfcb8c1ab2aa9960363bca0dd8556ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'show_fields' => array($this, 'block_show_fields'),
            'show_field' => array($this, 'block_show_field'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:show.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52e0db26b47b162dca3666554a396acd7aa6564c8a5350fd75ff3be05dfa02f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52e0db26b47b162dca3666554a396acd7aa6564c8a5350fd75ff3be05dfa02f5->enter($__internal_52e0db26b47b162dca3666554a396acd7aa6564c8a5350fd75ff3be05dfa02f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        $__internal_80dd0f4c3a2b4929ed0ab42e7a71821add5278041f1ae9ba298e5b68ea98fcfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80dd0f4c3a2b4929ed0ab42e7a71821add5278041f1ae9ba298e5b68ea98fcfd->enter($__internal_80dd0f4c3a2b4929ed0ab42e7a71821add5278041f1ae9ba298e5b68ea98fcfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
        // line 4
        $context["__internal_3f710c008f802c0fd4b885687b318973a2082538594858eaba05fe77a2d7ab24"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_3f710c008f802c0fd4b885687b318973a2082538594858eaba05fe77a2d7ab24"] ?? $this->getContext($context, "__internal_3f710c008f802c0fd4b885687b318973a2082538594858eaba05fe77a2d7ab24"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_3f710c008f802c0fd4b885687b318973a2082538594858eaba05fe77a2d7ab24"] ?? $this->getContext($context, "__internal_3f710c008f802c0fd4b885687b318973a2082538594858eaba05fe77a2d7ab24"))), "%entity_id%" =>         // line 5
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52e0db26b47b162dca3666554a396acd7aa6564c8a5350fd75ff3be05dfa02f5->leave($__internal_52e0db26b47b162dca3666554a396acd7aa6564c8a5350fd75ff3be05dfa02f5_prof);

        
        $__internal_80dd0f4c3a2b4929ed0ab42e7a71821add5278041f1ae9ba298e5b68ea98fcfd->leave($__internal_80dd0f4c3a2b4929ed0ab42e7a71821add5278041f1ae9ba298e5b68ea98fcfd_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_e526b13caa366adc33feef479de93f651472b60352d4f780484cb427b7b2bd93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e526b13caa366adc33feef479de93f651472b60352d4f780484cb427b7b2bd93->enter($__internal_e526b13caa366adc33feef479de93f651472b60352d4f780484cb427b7b2bd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_67c75b0d9fab0d6e017229274b332675d53a9634e4ee70f11063e32e9a9f521f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c75b0d9fab0d6e017229274b332675d53a9634e4ee70f11063e32e9a9f521f->enter($__internal_67c75b0d9fab0d6e017229274b332675d53a9634e4ee70f11063e32e9a9f521f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_67c75b0d9fab0d6e017229274b332675d53a9634e4ee70f11063e32e9a9f521f->leave($__internal_67c75b0d9fab0d6e017229274b332675d53a9634e4ee70f11063e32e9a9f521f_prof);

        
        $__internal_e526b13caa366adc33feef479de93f651472b60352d4f780484cb427b7b2bd93->leave($__internal_e526b13caa366adc33feef479de93f651472b60352d4f780484cb427b7b2bd93_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_6820d061fb8c20de7b6a9b64e40b02b39dc526fd9904bc0587da594a6e5ae843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6820d061fb8c20de7b6a9b64e40b02b39dc526fd9904bc0587da594a6e5ae843->enter($__internal_6820d061fb8c20de7b6a9b64e40b02b39dc526fd9904bc0587da594a6e5ae843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_f9ff2d1170de60419f645af98459ed7961735af356e4192015bcfbca5ffcff03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ff2d1170de60419f645af98459ed7961735af356e4192015bcfbca5ffcff03->enter($__internal_f9ff2d1170de60419f645af98459ed7961735af356e4192015bcfbca5ffcff03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_f9ff2d1170de60419f645af98459ed7961735af356e4192015bcfbca5ffcff03->leave($__internal_f9ff2d1170de60419f645af98459ed7961735af356e4192015bcfbca5ffcff03_prof);

        
        $__internal_6820d061fb8c20de7b6a9b64e40b02b39dc526fd9904bc0587da594a6e5ae843->leave($__internal_6820d061fb8c20de7b6a9b64e40b02b39dc526fd9904bc0587da594a6e5ae843_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_52b9a0b305f118a710de1758605abc275e01b92d1d80e95bd42f14c2a99eec0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52b9a0b305f118a710de1758605abc275e01b92d1d80e95bd42f14c2a99eec0a->enter($__internal_52b9a0b305f118a710de1758605abc275e01b92d1d80e95bd42f14c2a99eec0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_312b6a1c292f486ceac33d7830bd46ceecf530db43f17e6d64ffe4ce183b9d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312b6a1c292f486ceac33d7830bd46ceecf530db43f17e6d64ffe4ce183b9d06->enter($__internal_312b6a1c292f486ceac33d7830bd46ceecf530db43f17e6d64ffe4ce183b9d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "show", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_3f710c008f802c0fd4b885687b318973a2082538594858eaba05fe77a2d7ab24"] ?? $this->getContext($context, "__internal_3f710c008f802c0fd4b885687b318973a2082538594858eaba05fe77a2d7ab24")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_312b6a1c292f486ceac33d7830bd46ceecf530db43f17e6d64ffe4ce183b9d06->leave($__internal_312b6a1c292f486ceac33d7830bd46ceecf530db43f17e6d64ffe4ce183b9d06_prof);

        
        $__internal_52b9a0b305f118a710de1758605abc275e01b92d1d80e95bd42f14c2a99eec0a->leave($__internal_52b9a0b305f118a710de1758605abc275e01b92d1d80e95bd42f14c2a99eec0a_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_34d1549f25a05c8025ff1d89c0f49443c4f02118fdc38bf1b0c8b08cb4bc7a34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34d1549f25a05c8025ff1d89c0f49443c4f02118fdc38bf1b0c8b08cb4bc7a34->enter($__internal_34d1549f25a05c8025ff1d89c0f49443c4f02118fdc38bf1b0c8b08cb4bc7a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_f81567d6d1585d39cbf04206491247da509e2ac06283e68ab894b97dd471890d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81567d6d1585d39cbf04206491247da509e2ac06283e68ab894b97dd471890d->enter($__internal_f81567d6d1585d39cbf04206491247da509e2ac06283e68ab894b97dd471890d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    <div class=\"form-horizontal\">
        ";
        // line 21
        $this->displayBlock('show_fields', $context, $blocks);
        // line 41
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 44
        $this->displayBlock('item_actions', $context, $blocks);
        // line 56
        echo "            </div>
        </div>
    </div>

    ";
        // line 60
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_f81567d6d1585d39cbf04206491247da509e2ac06283e68ab894b97dd471890d->leave($__internal_f81567d6d1585d39cbf04206491247da509e2ac06283e68ab894b97dd471890d_prof);

        
        $__internal_34d1549f25a05c8025ff1d89c0f49443c4f02118fdc38bf1b0c8b08cb4bc7a34->leave($__internal_34d1549f25a05c8025ff1d89c0f49443c4f02118fdc38bf1b0c8b08cb4bc7a34_prof);

    }

    // line 21
    public function block_show_fields($context, array $blocks = array())
    {
        $__internal_187278731425bf2680c5d81cc9ce38d3298d8ed0041d84eda59fccd496321359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187278731425bf2680c5d81cc9ce38d3298d8ed0041d84eda59fccd496321359->enter($__internal_187278731425bf2680c5d81cc9ce38d3298d8ed0041d84eda59fccd496321359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

        $__internal_6e32235cf28e11320beea1ac850a6d30e739398cf3268f2cdcee5d3193d384fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e32235cf28e11320beea1ac850a6d30e739398cf3268f2cdcee5d3193d384fb->enter($__internal_6e32235cf28e11320beea1ac850a6d30e739398cf3268f2cdcee5d3193d384fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

        // line 22
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
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
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 23
            echo "                ";
            $this->displayBlock('show_field', $context, $blocks);
            // line 39
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        ";
        
        $__internal_6e32235cf28e11320beea1ac850a6d30e739398cf3268f2cdcee5d3193d384fb->leave($__internal_6e32235cf28e11320beea1ac850a6d30e739398cf3268f2cdcee5d3193d384fb_prof);

        
        $__internal_187278731425bf2680c5d81cc9ce38d3298d8ed0041d84eda59fccd496321359->leave($__internal_187278731425bf2680c5d81cc9ce38d3298d8ed0041d84eda59fccd496321359_prof);

    }

    // line 23
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_414d0ba05153dc97b97d05d67647351df63837e4c25247d02a4ddf539a568a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414d0ba05153dc97b97d05d67647351df63837e4c25247d02a4ddf539a568a86->enter($__internal_414d0ba05153dc97b97d05d67647351df63837e4c25247d02a4ddf539a568a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_5e0941e37a7645fdebef4c9c3f8312906b16b66dfd468131ea9c3a2c0fc580de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0941e37a7645fdebef4c9c3f8312906b16b66dfd468131ea9c3a2c0fc580de->enter($__internal_5e0941e37a7645fdebef4c9c3f8312906b16b66dfd468131ea9c3a2c0fc580de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 24
        echo "                    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute(($context["metadata"] ?? null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["metadata"] ?? null), "type", array()), "default")) : ("default"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["metadata"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["metadata"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                        <label class=\"col-sm-2 control-label\">
                            ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "label", array())) ? ($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["field"] ?? $this->getContext($context, "field"))))), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_3f710c008f802c0fd4b885687b318973a2082538594858eaba05fe77a2d7ab24"] ?? $this->getContext($context, "__internal_3f710c008f802c0fd4b885687b318973a2082538594858eaba05fe77a2d7ab24")));
        // line 26
        echo "
                        </label>
                        <div class=\"col-sm-10\">
                            <div class=\"form-control\">
                                ";
        // line 30
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), ($context["entity"] ?? $this->getContext($context, "entity")), ($context["metadata"] ?? $this->getContext($context, "metadata")));
        echo "
                            </div>

                            ";
        // line 33
        if (((($this->getAttribute(($context["metadata"] ?? null), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["metadata"] ?? null), "help", array()), "")) : ("")) != "")) {
            // line 34
            echo "                                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "help", array()), array(),             // line 4
($context["__internal_3f710c008f802c0fd4b885687b318973a2082538594858eaba05fe77a2d7ab24"] ?? $this->getContext($context, "__internal_3f710c008f802c0fd4b885687b318973a2082538594858eaba05fe77a2d7ab24")));
            // line 34
            echo "</span>
                            ";
        }
        // line 36
        echo "                        </div>
                    </div>
                ";
        
        $__internal_5e0941e37a7645fdebef4c9c3f8312906b16b66dfd468131ea9c3a2c0fc580de->leave($__internal_5e0941e37a7645fdebef4c9c3f8312906b16b66dfd468131ea9c3a2c0fc580de_prof);

        
        $__internal_414d0ba05153dc97b97d05d67647351df63837e4c25247d02a4ddf539a568a86->leave($__internal_414d0ba05153dc97b97d05d67647351df63837e4c25247d02a4ddf539a568a86_prof);

    }

    // line 44
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_78a79d59d4ae739c6b39acbe67e2c8aeb2ac8d2cc98f0984400818731c42e5c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78a79d59d4ae739c6b39acbe67e2c8aeb2ac8d2cc98f0984400818731c42e5c1->enter($__internal_78a79d59d4ae739c6b39acbe67e2c8aeb2ac8d2cc98f0984400818731c42e5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_e15d09167f5e4ea24b8b4273c480b0276be021a2dfb237b17cccfc4cd8507176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e15d09167f5e4ea24b8b4273c480b0276be021a2dfb237b17cccfc4cd8507176->enter($__internal_e15d09167f5e4ea24b8b4273c480b0276be021a2dfb237b17cccfc4cd8507176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 45
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
        // line 46
        echo "                ";
        $context["_request_parameters"] = array("entity" => $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 47
        echo "
                ";
        // line 48
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 49
($context["_show_actions"] ?? $this->getContext($context, "_show_actions")), "request_parameters" =>         // line 50
($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 51
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 52
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 53
($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), false);
        // line 54
        echo "
            ";
        
        $__internal_e15d09167f5e4ea24b8b4273c480b0276be021a2dfb237b17cccfc4cd8507176->leave($__internal_e15d09167f5e4ea24b8b4273c480b0276be021a2dfb237b17cccfc4cd8507176_prof);

        
        $__internal_78a79d59d4ae739c6b39acbe67e2c8aeb2ac8d2cc98f0984400818731c42e5c1->leave($__internal_78a79d59d4ae739c6b39acbe67e2c8aeb2ac8d2cc98f0984400818731c42e5c1_prof);

    }

    // line 60
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_8b9eae4e1e185ee671a6d48c5704d4b1832ea2623b37254118fdac97d6d5862b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b9eae4e1e185ee671a6d48c5704d4b1832ea2623b37254118fdac97d6d5862b->enter($__internal_8b9eae4e1e185ee671a6d48c5704d4b1832ea2623b37254118fdac97d6d5862b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_e9ce48770423051a5ec73a90399c0341470d650956d32f2b6ccce53a7a7006de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ce48770423051a5ec73a90399c0341470d650956d32f2b6ccce53a7a7006de->enter($__internal_e9ce48770423051a5ec73a90399c0341470d650956d32f2b6ccce53a7a7006de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 61
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 63
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 64
($context["delete_form"] ?? $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 65
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 66
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 67
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 68
        echo "
    ";
        
        $__internal_e9ce48770423051a5ec73a90399c0341470d650956d32f2b6ccce53a7a7006de->leave($__internal_e9ce48770423051a5ec73a90399c0341470d650956d32f2b6ccce53a7a7006de_prof);

        
        $__internal_8b9eae4e1e185ee671a6d48c5704d4b1832ea2623b37254118fdac97d6d5862b->leave($__internal_8b9eae4e1e185ee671a6d48c5704d4b1832ea2623b37254118fdac97d6d5862b_prof);

    }

    // line 72
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_84b4abc16c62ab225021a3572ea84a18816b48a14a0d1ed1ff5916f9d3984f06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b4abc16c62ab225021a3572ea84a18816b48a14a0d1ed1ff5916f9d3984f06->enter($__internal_84b4abc16c62ab225021a3572ea84a18816b48a14a0d1ed1ff5916f9d3984f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_da265df78d4f0bba77b80b0bffeab13514c063f11075553fc966101b72ee55f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da265df78d4f0bba77b80b0bffeab13514c063f11075553fc966101b72ee55f9->enter($__internal_da265df78d4f0bba77b80b0bffeab13514c063f11075553fc966101b72ee55f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 73
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
";
        
        $__internal_da265df78d4f0bba77b80b0bffeab13514c063f11075553fc966101b72ee55f9->leave($__internal_da265df78d4f0bba77b80b0bffeab13514c063f11075553fc966101b72ee55f9_prof);

        
        $__internal_84b4abc16c62ab225021a3572ea84a18816b48a14a0d1ed1ff5916f9d3984f06->leave($__internal_84b4abc16c62ab225021a3572ea84a18816b48a14a0d1ed1ff5916f9d3984f06_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 73,  335 => 72,  324 => 68,  322 => 67,  321 => 66,  320 => 65,  319 => 64,  318 => 63,  316 => 61,  307 => 60,  296 => 54,  294 => 53,  293 => 52,  292 => 51,  291 => 50,  290 => 49,  289 => 48,  286 => 47,  283 => 46,  280 => 45,  271 => 44,  259 => 36,  255 => 34,  253 => 4,  251 => 34,  249 => 33,  243 => 30,  237 => 26,  235 => 4,  234 => 26,  226 => 24,  217 => 23,  207 => 40,  193 => 39,  190 => 23,  172 => 22,  163 => 21,  153 => 60,  147 => 56,  145 => 44,  140 => 41,  138 => 21,  135 => 20,  126 => 19,  113 => 15,  112 => 4,  110 => 15,  107 => 14,  105 => 13,  96 => 12,  78 => 10,  60 => 9,  50 => 7,  48 => 5,  47 => 4,  46 => 5,  45 => 4,  44 => 5,  42 => 4,  40 => 3,  38 => 1,  26 => 7,);
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
{# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
{% set _entity_id = '' ~ attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'show show-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.show.title is defined ? _entity_config.show.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    <div class=\"form-horizontal\">
        {% block show_fields %}
            {% for field, metadata in fields %}
                {% block show_field %}
                    <div class=\"form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}\">
                        <label class=\"col-sm-2 control-label\">
                            {{ (metadata.label ?: field|humanize)|trans(_trans_parameters)|raw }}
                        </label>
                        <div class=\"col-sm-10\">
                            <div class=\"form-control\">
                                {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}
                            </div>

                            {% if metadata.help|default('') != '' %}
                                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ metadata.help|trans|raw }}</span>
                            {% endif %}
                        </div>
                    </div>
                {% endblock %}
            {% endfor %}
        {% endblock %}

        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            {% block item_actions %}
                {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}
                {% set _request_parameters = { entity: _entity_config.name, referer: app.request.query.get('referer') } %}

                {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                    actions: _show_actions,
                    request_parameters: _request_parameters,
                    translation_domain: _entity_config.translation_domain,
                    trans_parameters: _trans_parameters,
                    item_id: _entity_id
                }, with_context = false) }}
            {% endblock item_actions %}
            </div>
        </div>
    </div>

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'show',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
{% endblock %}
", "EasyAdminBundle:default:show.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/show.html.twig");
    }
}
