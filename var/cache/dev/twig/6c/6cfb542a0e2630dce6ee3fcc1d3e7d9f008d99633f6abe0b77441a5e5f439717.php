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
        $__internal_936b6ceee7f010d47cc105180e59a09484a01c9a8748054b6a7e0e01ef15f9bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_936b6ceee7f010d47cc105180e59a09484a01c9a8748054b6a7e0e01ef15f9bf->enter($__internal_936b6ceee7f010d47cc105180e59a09484a01c9a8748054b6a7e0e01ef15f9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        $__internal_463ff79841e46ac19e9152ddc266c876085e4729709b5f24661a9b2791a38c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463ff79841e46ac19e9152ddc266c876085e4729709b5f24661a9b2791a38c00->enter($__internal_463ff79841e46ac19e9152ddc266c876085e4729709b5f24661a9b2791a38c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
        // line 4
        $context["__internal_efd309ed6e4ab5b8f4321685ae5ba6c8dfc786817f16fcb8b7e5d068687d3df7"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_efd309ed6e4ab5b8f4321685ae5ba6c8dfc786817f16fcb8b7e5d068687d3df7"] ?? $this->getContext($context, "__internal_efd309ed6e4ab5b8f4321685ae5ba6c8dfc786817f16fcb8b7e5d068687d3df7"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_efd309ed6e4ab5b8f4321685ae5ba6c8dfc786817f16fcb8b7e5d068687d3df7"] ?? $this->getContext($context, "__internal_efd309ed6e4ab5b8f4321685ae5ba6c8dfc786817f16fcb8b7e5d068687d3df7"))), "%entity_id%" =>         // line 5
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_936b6ceee7f010d47cc105180e59a09484a01c9a8748054b6a7e0e01ef15f9bf->leave($__internal_936b6ceee7f010d47cc105180e59a09484a01c9a8748054b6a7e0e01ef15f9bf_prof);

        
        $__internal_463ff79841e46ac19e9152ddc266c876085e4729709b5f24661a9b2791a38c00->leave($__internal_463ff79841e46ac19e9152ddc266c876085e4729709b5f24661a9b2791a38c00_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_5b140602632e361080c79715ba65a6600cf9f11935fbc47b27c9f2ee4533a22e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b140602632e361080c79715ba65a6600cf9f11935fbc47b27c9f2ee4533a22e->enter($__internal_5b140602632e361080c79715ba65a6600cf9f11935fbc47b27c9f2ee4533a22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_719b8dca46d6e807ffb55dd648009bba91d66d5469aa7587699539027b993cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719b8dca46d6e807ffb55dd648009bba91d66d5469aa7587699539027b993cc8->enter($__internal_719b8dca46d6e807ffb55dd648009bba91d66d5469aa7587699539027b993cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_719b8dca46d6e807ffb55dd648009bba91d66d5469aa7587699539027b993cc8->leave($__internal_719b8dca46d6e807ffb55dd648009bba91d66d5469aa7587699539027b993cc8_prof);

        
        $__internal_5b140602632e361080c79715ba65a6600cf9f11935fbc47b27c9f2ee4533a22e->leave($__internal_5b140602632e361080c79715ba65a6600cf9f11935fbc47b27c9f2ee4533a22e_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_8113ef2969c25a93fe8da219ee4449103f77a140bfddca2180b432a79cc16c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8113ef2969c25a93fe8da219ee4449103f77a140bfddca2180b432a79cc16c9c->enter($__internal_8113ef2969c25a93fe8da219ee4449103f77a140bfddca2180b432a79cc16c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_930e7a4dadcf56465c1a6880516d376475389b8be97335b93db3886c8c57b66c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_930e7a4dadcf56465c1a6880516d376475389b8be97335b93db3886c8c57b66c->enter($__internal_930e7a4dadcf56465c1a6880516d376475389b8be97335b93db3886c8c57b66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_930e7a4dadcf56465c1a6880516d376475389b8be97335b93db3886c8c57b66c->leave($__internal_930e7a4dadcf56465c1a6880516d376475389b8be97335b93db3886c8c57b66c_prof);

        
        $__internal_8113ef2969c25a93fe8da219ee4449103f77a140bfddca2180b432a79cc16c9c->leave($__internal_8113ef2969c25a93fe8da219ee4449103f77a140bfddca2180b432a79cc16c9c_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_0da9dbe4dd591c0c2c8f2491fabee88e7eb53bfb3ba9fc29ae13acf550feb435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0da9dbe4dd591c0c2c8f2491fabee88e7eb53bfb3ba9fc29ae13acf550feb435->enter($__internal_0da9dbe4dd591c0c2c8f2491fabee88e7eb53bfb3ba9fc29ae13acf550feb435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_63976ab0eb4a79e6176f28733e151129b8c7e522d96da1dcb46cde10dae1b690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63976ab0eb4a79e6176f28733e151129b8c7e522d96da1dcb46cde10dae1b690->enter($__internal_63976ab0eb4a79e6176f28733e151129b8c7e522d96da1dcb46cde10dae1b690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "show", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_efd309ed6e4ab5b8f4321685ae5ba6c8dfc786817f16fcb8b7e5d068687d3df7"] ?? $this->getContext($context, "__internal_efd309ed6e4ab5b8f4321685ae5ba6c8dfc786817f16fcb8b7e5d068687d3df7")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_63976ab0eb4a79e6176f28733e151129b8c7e522d96da1dcb46cde10dae1b690->leave($__internal_63976ab0eb4a79e6176f28733e151129b8c7e522d96da1dcb46cde10dae1b690_prof);

        
        $__internal_0da9dbe4dd591c0c2c8f2491fabee88e7eb53bfb3ba9fc29ae13acf550feb435->leave($__internal_0da9dbe4dd591c0c2c8f2491fabee88e7eb53bfb3ba9fc29ae13acf550feb435_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_0fd7cc445ef5496da53f9e37cf1db1aae9ad576d715a41cd4e660138266b16c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd7cc445ef5496da53f9e37cf1db1aae9ad576d715a41cd4e660138266b16c2->enter($__internal_0fd7cc445ef5496da53f9e37cf1db1aae9ad576d715a41cd4e660138266b16c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_f6edd466252a801732d6d4c0b5e01c42ba1b9b5650abda2642d3b2f6a04ac9a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6edd466252a801732d6d4c0b5e01c42ba1b9b5650abda2642d3b2f6a04ac9a7->enter($__internal_f6edd466252a801732d6d4c0b5e01c42ba1b9b5650abda2642d3b2f6a04ac9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_f6edd466252a801732d6d4c0b5e01c42ba1b9b5650abda2642d3b2f6a04ac9a7->leave($__internal_f6edd466252a801732d6d4c0b5e01c42ba1b9b5650abda2642d3b2f6a04ac9a7_prof);

        
        $__internal_0fd7cc445ef5496da53f9e37cf1db1aae9ad576d715a41cd4e660138266b16c2->leave($__internal_0fd7cc445ef5496da53f9e37cf1db1aae9ad576d715a41cd4e660138266b16c2_prof);

    }

    // line 21
    public function block_show_fields($context, array $blocks = array())
    {
        $__internal_031551fd438ea8ec1c1691bed6b6137c5aaab12575e079768ebfd7cd4b84aed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_031551fd438ea8ec1c1691bed6b6137c5aaab12575e079768ebfd7cd4b84aed3->enter($__internal_031551fd438ea8ec1c1691bed6b6137c5aaab12575e079768ebfd7cd4b84aed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

        $__internal_04f8469d58682a4efe141a9e61706b80da55efe51f9ea4b12b602e4e1a6fb266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f8469d58682a4efe141a9e61706b80da55efe51f9ea4b12b602e4e1a6fb266->enter($__internal_04f8469d58682a4efe141a9e61706b80da55efe51f9ea4b12b602e4e1a6fb266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

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
        
        $__internal_04f8469d58682a4efe141a9e61706b80da55efe51f9ea4b12b602e4e1a6fb266->leave($__internal_04f8469d58682a4efe141a9e61706b80da55efe51f9ea4b12b602e4e1a6fb266_prof);

        
        $__internal_031551fd438ea8ec1c1691bed6b6137c5aaab12575e079768ebfd7cd4b84aed3->leave($__internal_031551fd438ea8ec1c1691bed6b6137c5aaab12575e079768ebfd7cd4b84aed3_prof);

    }

    // line 23
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_54f018795ea59051fc4398bdad3340d6e27f751264e20bb3fd2ca8c131313313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54f018795ea59051fc4398bdad3340d6e27f751264e20bb3fd2ca8c131313313->enter($__internal_54f018795ea59051fc4398bdad3340d6e27f751264e20bb3fd2ca8c131313313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_5b90cd68ed9920a00afe6686a0ae6e83fbf8ee815c824b2dcd8c8c9861e5c96e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b90cd68ed9920a00afe6686a0ae6e83fbf8ee815c824b2dcd8c8c9861e5c96e->enter($__internal_5b90cd68ed9920a00afe6686a0ae6e83fbf8ee815c824b2dcd8c8c9861e5c96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

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
($context["__internal_efd309ed6e4ab5b8f4321685ae5ba6c8dfc786817f16fcb8b7e5d068687d3df7"] ?? $this->getContext($context, "__internal_efd309ed6e4ab5b8f4321685ae5ba6c8dfc786817f16fcb8b7e5d068687d3df7")));
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
($context["__internal_efd309ed6e4ab5b8f4321685ae5ba6c8dfc786817f16fcb8b7e5d068687d3df7"] ?? $this->getContext($context, "__internal_efd309ed6e4ab5b8f4321685ae5ba6c8dfc786817f16fcb8b7e5d068687d3df7")));
            // line 34
            echo "</span>
                            ";
        }
        // line 36
        echo "                        </div>
                    </div>
                ";
        
        $__internal_5b90cd68ed9920a00afe6686a0ae6e83fbf8ee815c824b2dcd8c8c9861e5c96e->leave($__internal_5b90cd68ed9920a00afe6686a0ae6e83fbf8ee815c824b2dcd8c8c9861e5c96e_prof);

        
        $__internal_54f018795ea59051fc4398bdad3340d6e27f751264e20bb3fd2ca8c131313313->leave($__internal_54f018795ea59051fc4398bdad3340d6e27f751264e20bb3fd2ca8c131313313_prof);

    }

    // line 44
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_465f2f8592519a8cfab47aa9e1cab99ebb3d8f3b32f2d08343fb81ed1ca3ae6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_465f2f8592519a8cfab47aa9e1cab99ebb3d8f3b32f2d08343fb81ed1ca3ae6b->enter($__internal_465f2f8592519a8cfab47aa9e1cab99ebb3d8f3b32f2d08343fb81ed1ca3ae6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_dccd61a7a28136759b4dff79df701045632ccdbadea9a1d107e52d276154087f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dccd61a7a28136759b4dff79df701045632ccdbadea9a1d107e52d276154087f->enter($__internal_dccd61a7a28136759b4dff79df701045632ccdbadea9a1d107e52d276154087f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

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
        
        $__internal_dccd61a7a28136759b4dff79df701045632ccdbadea9a1d107e52d276154087f->leave($__internal_dccd61a7a28136759b4dff79df701045632ccdbadea9a1d107e52d276154087f_prof);

        
        $__internal_465f2f8592519a8cfab47aa9e1cab99ebb3d8f3b32f2d08343fb81ed1ca3ae6b->leave($__internal_465f2f8592519a8cfab47aa9e1cab99ebb3d8f3b32f2d08343fb81ed1ca3ae6b_prof);

    }

    // line 60
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_965b8d1198784fff3290c1ca7206cf3bc8f3231b86463ae050c1cbaf76f29a7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_965b8d1198784fff3290c1ca7206cf3bc8f3231b86463ae050c1cbaf76f29a7f->enter($__internal_965b8d1198784fff3290c1ca7206cf3bc8f3231b86463ae050c1cbaf76f29a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_ddabe2068b99d20462d63a876e4f5ab861ed83ebfd28416e3d74f57901f66f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddabe2068b99d20462d63a876e4f5ab861ed83ebfd28416e3d74f57901f66f96->enter($__internal_ddabe2068b99d20462d63a876e4f5ab861ed83ebfd28416e3d74f57901f66f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_ddabe2068b99d20462d63a876e4f5ab861ed83ebfd28416e3d74f57901f66f96->leave($__internal_ddabe2068b99d20462d63a876e4f5ab861ed83ebfd28416e3d74f57901f66f96_prof);

        
        $__internal_965b8d1198784fff3290c1ca7206cf3bc8f3231b86463ae050c1cbaf76f29a7f->leave($__internal_965b8d1198784fff3290c1ca7206cf3bc8f3231b86463ae050c1cbaf76f29a7f_prof);

    }

    // line 72
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_2c0223f93c723278488b5182dd6e330576a4983fe4313db000e4e6eba960680e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c0223f93c723278488b5182dd6e330576a4983fe4313db000e4e6eba960680e->enter($__internal_2c0223f93c723278488b5182dd6e330576a4983fe4313db000e4e6eba960680e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_eabb2b8438df7578a708d61d02337160ef632c2d2b10f6adc6e74cda3e914bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eabb2b8438df7578a708d61d02337160ef632c2d2b10f6adc6e74cda3e914bcd->enter($__internal_eabb2b8438df7578a708d61d02337160ef632c2d2b10f6adc6e74cda3e914bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_eabb2b8438df7578a708d61d02337160ef632c2d2b10f6adc6e74cda3e914bcd->leave($__internal_eabb2b8438df7578a708d61d02337160ef632c2d2b10f6adc6e74cda3e914bcd_prof);

        
        $__internal_2c0223f93c723278488b5182dd6e330576a4983fe4313db000e4e6eba960680e->leave($__internal_2c0223f93c723278488b5182dd6e330576a4983fe4313db000e4e6eba960680e_prof);

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
