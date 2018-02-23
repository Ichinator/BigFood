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
        $__internal_178c6f147851d16b67d851b3544d19599f1b1c5a656fef708bb63f960301ca05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_178c6f147851d16b67d851b3544d19599f1b1c5a656fef708bb63f960301ca05->enter($__internal_178c6f147851d16b67d851b3544d19599f1b1c5a656fef708bb63f960301ca05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        $__internal_a544ac0778c7a0749518a6639b5fde4f667d7382e0c37dd9689e6df70b303bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a544ac0778c7a0749518a6639b5fde4f667d7382e0c37dd9689e6df70b303bc9->enter($__internal_a544ac0778c7a0749518a6639b5fde4f667d7382e0c37dd9689e6df70b303bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
        // line 4
        $context["__internal_65b5920c30cf3e0224e3f520046b83dfa8030c360aec5f98b179669719e3491b"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_65b5920c30cf3e0224e3f520046b83dfa8030c360aec5f98b179669719e3491b"] ?? $this->getContext($context, "__internal_65b5920c30cf3e0224e3f520046b83dfa8030c360aec5f98b179669719e3491b"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_65b5920c30cf3e0224e3f520046b83dfa8030c360aec5f98b179669719e3491b"] ?? $this->getContext($context, "__internal_65b5920c30cf3e0224e3f520046b83dfa8030c360aec5f98b179669719e3491b"))), "%entity_id%" =>         // line 5
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_178c6f147851d16b67d851b3544d19599f1b1c5a656fef708bb63f960301ca05->leave($__internal_178c6f147851d16b67d851b3544d19599f1b1c5a656fef708bb63f960301ca05_prof);

        
        $__internal_a544ac0778c7a0749518a6639b5fde4f667d7382e0c37dd9689e6df70b303bc9->leave($__internal_a544ac0778c7a0749518a6639b5fde4f667d7382e0c37dd9689e6df70b303bc9_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_172defcdb070d1461443c0eaf10e601aa3e09823ba18f1ebaef27f6c7dcabe25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_172defcdb070d1461443c0eaf10e601aa3e09823ba18f1ebaef27f6c7dcabe25->enter($__internal_172defcdb070d1461443c0eaf10e601aa3e09823ba18f1ebaef27f6c7dcabe25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_cbfce90c82a1d475964c26a1319db243302ec990c008ad6809d31f4ef641e8fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbfce90c82a1d475964c26a1319db243302ec990c008ad6809d31f4ef641e8fd->enter($__internal_cbfce90c82a1d475964c26a1319db243302ec990c008ad6809d31f4ef641e8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_cbfce90c82a1d475964c26a1319db243302ec990c008ad6809d31f4ef641e8fd->leave($__internal_cbfce90c82a1d475964c26a1319db243302ec990c008ad6809d31f4ef641e8fd_prof);

        
        $__internal_172defcdb070d1461443c0eaf10e601aa3e09823ba18f1ebaef27f6c7dcabe25->leave($__internal_172defcdb070d1461443c0eaf10e601aa3e09823ba18f1ebaef27f6c7dcabe25_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_f3d9e921e1ed58dd093cb55046420bbc0d17bdf851397265ad946e5378179bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3d9e921e1ed58dd093cb55046420bbc0d17bdf851397265ad946e5378179bad->enter($__internal_f3d9e921e1ed58dd093cb55046420bbc0d17bdf851397265ad946e5378179bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_f1098f77dd21e1876a08a1956573c182b3a8fe38c9280406cd6a8e5a5a34c30b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1098f77dd21e1876a08a1956573c182b3a8fe38c9280406cd6a8e5a5a34c30b->enter($__internal_f1098f77dd21e1876a08a1956573c182b3a8fe38c9280406cd6a8e5a5a34c30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_f1098f77dd21e1876a08a1956573c182b3a8fe38c9280406cd6a8e5a5a34c30b->leave($__internal_f1098f77dd21e1876a08a1956573c182b3a8fe38c9280406cd6a8e5a5a34c30b_prof);

        
        $__internal_f3d9e921e1ed58dd093cb55046420bbc0d17bdf851397265ad946e5378179bad->leave($__internal_f3d9e921e1ed58dd093cb55046420bbc0d17bdf851397265ad946e5378179bad_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_2e4df199855c29e284af907ff4b58f1140c5422c4d323e44b83f05caac5b7839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e4df199855c29e284af907ff4b58f1140c5422c4d323e44b83f05caac5b7839->enter($__internal_2e4df199855c29e284af907ff4b58f1140c5422c4d323e44b83f05caac5b7839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_64eb7828860ff00062dbdeaf5775c365ab9cca9005b6681401b3f61e7b203792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64eb7828860ff00062dbdeaf5775c365ab9cca9005b6681401b3f61e7b203792->enter($__internal_64eb7828860ff00062dbdeaf5775c365ab9cca9005b6681401b3f61e7b203792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "show", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_65b5920c30cf3e0224e3f520046b83dfa8030c360aec5f98b179669719e3491b"] ?? $this->getContext($context, "__internal_65b5920c30cf3e0224e3f520046b83dfa8030c360aec5f98b179669719e3491b")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_64eb7828860ff00062dbdeaf5775c365ab9cca9005b6681401b3f61e7b203792->leave($__internal_64eb7828860ff00062dbdeaf5775c365ab9cca9005b6681401b3f61e7b203792_prof);

        
        $__internal_2e4df199855c29e284af907ff4b58f1140c5422c4d323e44b83f05caac5b7839->leave($__internal_2e4df199855c29e284af907ff4b58f1140c5422c4d323e44b83f05caac5b7839_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_ea94740d30ca9502b51e9648ffa663aa0c56d287050288757a62b183fa5adfea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea94740d30ca9502b51e9648ffa663aa0c56d287050288757a62b183fa5adfea->enter($__internal_ea94740d30ca9502b51e9648ffa663aa0c56d287050288757a62b183fa5adfea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_d0a859cccb7db4c495ae9f9beeb67e4b1d2715706334849568d1dafedd8024b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a859cccb7db4c495ae9f9beeb67e4b1d2715706334849568d1dafedd8024b6->enter($__internal_d0a859cccb7db4c495ae9f9beeb67e4b1d2715706334849568d1dafedd8024b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_d0a859cccb7db4c495ae9f9beeb67e4b1d2715706334849568d1dafedd8024b6->leave($__internal_d0a859cccb7db4c495ae9f9beeb67e4b1d2715706334849568d1dafedd8024b6_prof);

        
        $__internal_ea94740d30ca9502b51e9648ffa663aa0c56d287050288757a62b183fa5adfea->leave($__internal_ea94740d30ca9502b51e9648ffa663aa0c56d287050288757a62b183fa5adfea_prof);

    }

    // line 21
    public function block_show_fields($context, array $blocks = array())
    {
        $__internal_20429d79dd73cc3d4f53761830c61e5ca66b47accd3d082b559b5fe890235f92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20429d79dd73cc3d4f53761830c61e5ca66b47accd3d082b559b5fe890235f92->enter($__internal_20429d79dd73cc3d4f53761830c61e5ca66b47accd3d082b559b5fe890235f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

        $__internal_e8c2afb8be793d56d246338f948b00a637209350fc24f93995b50019247c7d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c2afb8be793d56d246338f948b00a637209350fc24f93995b50019247c7d3c->enter($__internal_e8c2afb8be793d56d246338f948b00a637209350fc24f93995b50019247c7d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

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
        
        $__internal_e8c2afb8be793d56d246338f948b00a637209350fc24f93995b50019247c7d3c->leave($__internal_e8c2afb8be793d56d246338f948b00a637209350fc24f93995b50019247c7d3c_prof);

        
        $__internal_20429d79dd73cc3d4f53761830c61e5ca66b47accd3d082b559b5fe890235f92->leave($__internal_20429d79dd73cc3d4f53761830c61e5ca66b47accd3d082b559b5fe890235f92_prof);

    }

    // line 23
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_7d7b91acfd1aa17a1f1592e54ae4f60e673e13af10e29a37d160e0fee697ad03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d7b91acfd1aa17a1f1592e54ae4f60e673e13af10e29a37d160e0fee697ad03->enter($__internal_7d7b91acfd1aa17a1f1592e54ae4f60e673e13af10e29a37d160e0fee697ad03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_db626fab970f79927f97a3a1a59c4379dc917209169c9d2260090851fd6d03b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db626fab970f79927f97a3a1a59c4379dc917209169c9d2260090851fd6d03b3->enter($__internal_db626fab970f79927f97a3a1a59c4379dc917209169c9d2260090851fd6d03b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

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
($context["__internal_65b5920c30cf3e0224e3f520046b83dfa8030c360aec5f98b179669719e3491b"] ?? $this->getContext($context, "__internal_65b5920c30cf3e0224e3f520046b83dfa8030c360aec5f98b179669719e3491b")));
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
($context["__internal_65b5920c30cf3e0224e3f520046b83dfa8030c360aec5f98b179669719e3491b"] ?? $this->getContext($context, "__internal_65b5920c30cf3e0224e3f520046b83dfa8030c360aec5f98b179669719e3491b")));
            // line 34
            echo "</span>
                            ";
        }
        // line 36
        echo "                        </div>
                    </div>
                ";
        
        $__internal_db626fab970f79927f97a3a1a59c4379dc917209169c9d2260090851fd6d03b3->leave($__internal_db626fab970f79927f97a3a1a59c4379dc917209169c9d2260090851fd6d03b3_prof);

        
        $__internal_7d7b91acfd1aa17a1f1592e54ae4f60e673e13af10e29a37d160e0fee697ad03->leave($__internal_7d7b91acfd1aa17a1f1592e54ae4f60e673e13af10e29a37d160e0fee697ad03_prof);

    }

    // line 44
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_8617fce2ca6e7cb65aa789a19583e6cb098bac8fed723b993c2833ec6d728de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8617fce2ca6e7cb65aa789a19583e6cb098bac8fed723b993c2833ec6d728de1->enter($__internal_8617fce2ca6e7cb65aa789a19583e6cb098bac8fed723b993c2833ec6d728de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_ec8990944cf674857708b991fc760420464ee38d7fca0e141dc0a18bf5ef3f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec8990944cf674857708b991fc760420464ee38d7fca0e141dc0a18bf5ef3f4b->enter($__internal_ec8990944cf674857708b991fc760420464ee38d7fca0e141dc0a18bf5ef3f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

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
        
        $__internal_ec8990944cf674857708b991fc760420464ee38d7fca0e141dc0a18bf5ef3f4b->leave($__internal_ec8990944cf674857708b991fc760420464ee38d7fca0e141dc0a18bf5ef3f4b_prof);

        
        $__internal_8617fce2ca6e7cb65aa789a19583e6cb098bac8fed723b993c2833ec6d728de1->leave($__internal_8617fce2ca6e7cb65aa789a19583e6cb098bac8fed723b993c2833ec6d728de1_prof);

    }

    // line 60
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_746c9d7c1fddb9ebf1170e1c4693366232e1d3ea6505d4fc7a56294e0efb39ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_746c9d7c1fddb9ebf1170e1c4693366232e1d3ea6505d4fc7a56294e0efb39ae->enter($__internal_746c9d7c1fddb9ebf1170e1c4693366232e1d3ea6505d4fc7a56294e0efb39ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_629a5252e7b816c3dc4207414dadb6de4d3492e805967ae42f69bcd5382fbe90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629a5252e7b816c3dc4207414dadb6de4d3492e805967ae42f69bcd5382fbe90->enter($__internal_629a5252e7b816c3dc4207414dadb6de4d3492e805967ae42f69bcd5382fbe90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_629a5252e7b816c3dc4207414dadb6de4d3492e805967ae42f69bcd5382fbe90->leave($__internal_629a5252e7b816c3dc4207414dadb6de4d3492e805967ae42f69bcd5382fbe90_prof);

        
        $__internal_746c9d7c1fddb9ebf1170e1c4693366232e1d3ea6505d4fc7a56294e0efb39ae->leave($__internal_746c9d7c1fddb9ebf1170e1c4693366232e1d3ea6505d4fc7a56294e0efb39ae_prof);

    }

    // line 72
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_f4e04379a4f96ae6b4ca9751e76c50791af5389e358d75eba62afc3b5c751586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4e04379a4f96ae6b4ca9751e76c50791af5389e358d75eba62afc3b5c751586->enter($__internal_f4e04379a4f96ae6b4ca9751e76c50791af5389e358d75eba62afc3b5c751586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_0047fa6fb3f48883ed11bebb26cc3153827f899ce36c52c1774d06197d1f90e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0047fa6fb3f48883ed11bebb26cc3153827f899ce36c52c1774d06197d1f90e1->enter($__internal_0047fa6fb3f48883ed11bebb26cc3153827f899ce36c52c1774d06197d1f90e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_0047fa6fb3f48883ed11bebb26cc3153827f899ce36c52c1774d06197d1f90e1->leave($__internal_0047fa6fb3f48883ed11bebb26cc3153827f899ce36c52c1774d06197d1f90e1_prof);

        
        $__internal_f4e04379a4f96ae6b4ca9751e76c50791af5389e358d75eba62afc3b5c751586->leave($__internal_f4e04379a4f96ae6b4ca9751e76c50791af5389e358d75eba62afc3b5c751586_prof);

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
