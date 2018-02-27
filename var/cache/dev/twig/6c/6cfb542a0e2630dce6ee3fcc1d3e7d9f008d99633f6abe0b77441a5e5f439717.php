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
        $__internal_7d64d15b81bcbb36d3dabf6ab752ba00a402b73aae107edcef0c8245fc43cb14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d64d15b81bcbb36d3dabf6ab752ba00a402b73aae107edcef0c8245fc43cb14->enter($__internal_7d64d15b81bcbb36d3dabf6ab752ba00a402b73aae107edcef0c8245fc43cb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        $__internal_4a9ea76c79ea7a4cac235ce9816a77ee3eab9e23365bd880687cb3be670a3429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9ea76c79ea7a4cac235ce9816a77ee3eab9e23365bd880687cb3be670a3429->enter($__internal_4a9ea76c79ea7a4cac235ce9816a77ee3eab9e23365bd880687cb3be670a3429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
        // line 4
        $context["__internal_07298bb579ee46bbfa22cf0ba9d45c0366695f790a71fe5cc34cd6da3662b916"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_07298bb579ee46bbfa22cf0ba9d45c0366695f790a71fe5cc34cd6da3662b916"] ?? $this->getContext($context, "__internal_07298bb579ee46bbfa22cf0ba9d45c0366695f790a71fe5cc34cd6da3662b916"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_07298bb579ee46bbfa22cf0ba9d45c0366695f790a71fe5cc34cd6da3662b916"] ?? $this->getContext($context, "__internal_07298bb579ee46bbfa22cf0ba9d45c0366695f790a71fe5cc34cd6da3662b916"))), "%entity_id%" =>         // line 5
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d64d15b81bcbb36d3dabf6ab752ba00a402b73aae107edcef0c8245fc43cb14->leave($__internal_7d64d15b81bcbb36d3dabf6ab752ba00a402b73aae107edcef0c8245fc43cb14_prof);

        
        $__internal_4a9ea76c79ea7a4cac235ce9816a77ee3eab9e23365bd880687cb3be670a3429->leave($__internal_4a9ea76c79ea7a4cac235ce9816a77ee3eab9e23365bd880687cb3be670a3429_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_8d8e263fbee3a96dd49ef2495c7f0a456363b487521993d7d76aa02b2d7cb204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d8e263fbee3a96dd49ef2495c7f0a456363b487521993d7d76aa02b2d7cb204->enter($__internal_8d8e263fbee3a96dd49ef2495c7f0a456363b487521993d7d76aa02b2d7cb204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_66f8b3150ed52a8b8ee615e1e586f71b4d17b3d117dd50da918c0b5b55968c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f8b3150ed52a8b8ee615e1e586f71b4d17b3d117dd50da918c0b5b55968c93->enter($__internal_66f8b3150ed52a8b8ee615e1e586f71b4d17b3d117dd50da918c0b5b55968c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_66f8b3150ed52a8b8ee615e1e586f71b4d17b3d117dd50da918c0b5b55968c93->leave($__internal_66f8b3150ed52a8b8ee615e1e586f71b4d17b3d117dd50da918c0b5b55968c93_prof);

        
        $__internal_8d8e263fbee3a96dd49ef2495c7f0a456363b487521993d7d76aa02b2d7cb204->leave($__internal_8d8e263fbee3a96dd49ef2495c7f0a456363b487521993d7d76aa02b2d7cb204_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_9136e24c853e14a2bd063a2616f5ea126c74197ede1e561bb10f5f83830ed661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9136e24c853e14a2bd063a2616f5ea126c74197ede1e561bb10f5f83830ed661->enter($__internal_9136e24c853e14a2bd063a2616f5ea126c74197ede1e561bb10f5f83830ed661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_dbfa15528dbd60099f5a6aeae126d090cece5c4149e2aeea03e117e9d9867aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbfa15528dbd60099f5a6aeae126d090cece5c4149e2aeea03e117e9d9867aae->enter($__internal_dbfa15528dbd60099f5a6aeae126d090cece5c4149e2aeea03e117e9d9867aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_dbfa15528dbd60099f5a6aeae126d090cece5c4149e2aeea03e117e9d9867aae->leave($__internal_dbfa15528dbd60099f5a6aeae126d090cece5c4149e2aeea03e117e9d9867aae_prof);

        
        $__internal_9136e24c853e14a2bd063a2616f5ea126c74197ede1e561bb10f5f83830ed661->leave($__internal_9136e24c853e14a2bd063a2616f5ea126c74197ede1e561bb10f5f83830ed661_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_da6c70c0b4f43955f45a886423e2b4cffad25722d42ac5567e0843294ce15940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da6c70c0b4f43955f45a886423e2b4cffad25722d42ac5567e0843294ce15940->enter($__internal_da6c70c0b4f43955f45a886423e2b4cffad25722d42ac5567e0843294ce15940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_405839da387d1ff9c17ee834b540143d23f9db0ffd50dfeeb82b51ec347f4824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_405839da387d1ff9c17ee834b540143d23f9db0ffd50dfeeb82b51ec347f4824->enter($__internal_405839da387d1ff9c17ee834b540143d23f9db0ffd50dfeeb82b51ec347f4824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "show", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_07298bb579ee46bbfa22cf0ba9d45c0366695f790a71fe5cc34cd6da3662b916"] ?? $this->getContext($context, "__internal_07298bb579ee46bbfa22cf0ba9d45c0366695f790a71fe5cc34cd6da3662b916")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_405839da387d1ff9c17ee834b540143d23f9db0ffd50dfeeb82b51ec347f4824->leave($__internal_405839da387d1ff9c17ee834b540143d23f9db0ffd50dfeeb82b51ec347f4824_prof);

        
        $__internal_da6c70c0b4f43955f45a886423e2b4cffad25722d42ac5567e0843294ce15940->leave($__internal_da6c70c0b4f43955f45a886423e2b4cffad25722d42ac5567e0843294ce15940_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_fd621e5274e8bd5a0d0f92d6ac480d74cb3ba6366eb68d6a0e88bcfed36b9b1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd621e5274e8bd5a0d0f92d6ac480d74cb3ba6366eb68d6a0e88bcfed36b9b1b->enter($__internal_fd621e5274e8bd5a0d0f92d6ac480d74cb3ba6366eb68d6a0e88bcfed36b9b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_a3f51c943b1fe53269d905b703fd967f13017557f4e9216a3b6550a618039011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f51c943b1fe53269d905b703fd967f13017557f4e9216a3b6550a618039011->enter($__internal_a3f51c943b1fe53269d905b703fd967f13017557f4e9216a3b6550a618039011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_a3f51c943b1fe53269d905b703fd967f13017557f4e9216a3b6550a618039011->leave($__internal_a3f51c943b1fe53269d905b703fd967f13017557f4e9216a3b6550a618039011_prof);

        
        $__internal_fd621e5274e8bd5a0d0f92d6ac480d74cb3ba6366eb68d6a0e88bcfed36b9b1b->leave($__internal_fd621e5274e8bd5a0d0f92d6ac480d74cb3ba6366eb68d6a0e88bcfed36b9b1b_prof);

    }

    // line 21
    public function block_show_fields($context, array $blocks = array())
    {
        $__internal_8bbef291a7da4e8a8df5d079d5fe38f16a1e9231808e8af2223f38b808c1206f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bbef291a7da4e8a8df5d079d5fe38f16a1e9231808e8af2223f38b808c1206f->enter($__internal_8bbef291a7da4e8a8df5d079d5fe38f16a1e9231808e8af2223f38b808c1206f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

        $__internal_159a67282262dcd9598dc894c409f0a55accdc404443cb6e188e0ab926afb94b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159a67282262dcd9598dc894c409f0a55accdc404443cb6e188e0ab926afb94b->enter($__internal_159a67282262dcd9598dc894c409f0a55accdc404443cb6e188e0ab926afb94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

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
        
        $__internal_159a67282262dcd9598dc894c409f0a55accdc404443cb6e188e0ab926afb94b->leave($__internal_159a67282262dcd9598dc894c409f0a55accdc404443cb6e188e0ab926afb94b_prof);

        
        $__internal_8bbef291a7da4e8a8df5d079d5fe38f16a1e9231808e8af2223f38b808c1206f->leave($__internal_8bbef291a7da4e8a8df5d079d5fe38f16a1e9231808e8af2223f38b808c1206f_prof);

    }

    // line 23
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_55dfaaef3e9db32fa7fcaa1d3b840cdf196bc1b6f6076c24f1347e33df5a9688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55dfaaef3e9db32fa7fcaa1d3b840cdf196bc1b6f6076c24f1347e33df5a9688->enter($__internal_55dfaaef3e9db32fa7fcaa1d3b840cdf196bc1b6f6076c24f1347e33df5a9688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_b1a7c51040eaa51d3bed2b79e544dc8455aa7aaaee90232460b7c8b6cd7dacc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a7c51040eaa51d3bed2b79e544dc8455aa7aaaee90232460b7c8b6cd7dacc7->enter($__internal_b1a7c51040eaa51d3bed2b79e544dc8455aa7aaaee90232460b7c8b6cd7dacc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

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
($context["__internal_07298bb579ee46bbfa22cf0ba9d45c0366695f790a71fe5cc34cd6da3662b916"] ?? $this->getContext($context, "__internal_07298bb579ee46bbfa22cf0ba9d45c0366695f790a71fe5cc34cd6da3662b916")));
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
($context["__internal_07298bb579ee46bbfa22cf0ba9d45c0366695f790a71fe5cc34cd6da3662b916"] ?? $this->getContext($context, "__internal_07298bb579ee46bbfa22cf0ba9d45c0366695f790a71fe5cc34cd6da3662b916")));
            // line 34
            echo "</span>
                            ";
        }
        // line 36
        echo "                        </div>
                    </div>
                ";
        
        $__internal_b1a7c51040eaa51d3bed2b79e544dc8455aa7aaaee90232460b7c8b6cd7dacc7->leave($__internal_b1a7c51040eaa51d3bed2b79e544dc8455aa7aaaee90232460b7c8b6cd7dacc7_prof);

        
        $__internal_55dfaaef3e9db32fa7fcaa1d3b840cdf196bc1b6f6076c24f1347e33df5a9688->leave($__internal_55dfaaef3e9db32fa7fcaa1d3b840cdf196bc1b6f6076c24f1347e33df5a9688_prof);

    }

    // line 44
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_07347f8656557b2e1b5a3da553d7babcc1c73e7b08f146fd1c89aeea308b105b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07347f8656557b2e1b5a3da553d7babcc1c73e7b08f146fd1c89aeea308b105b->enter($__internal_07347f8656557b2e1b5a3da553d7babcc1c73e7b08f146fd1c89aeea308b105b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_6e671c0a08bd46c513a3130373c820ce599f03df45b0227181614715db010efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e671c0a08bd46c513a3130373c820ce599f03df45b0227181614715db010efd->enter($__internal_6e671c0a08bd46c513a3130373c820ce599f03df45b0227181614715db010efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

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
        
        $__internal_6e671c0a08bd46c513a3130373c820ce599f03df45b0227181614715db010efd->leave($__internal_6e671c0a08bd46c513a3130373c820ce599f03df45b0227181614715db010efd_prof);

        
        $__internal_07347f8656557b2e1b5a3da553d7babcc1c73e7b08f146fd1c89aeea308b105b->leave($__internal_07347f8656557b2e1b5a3da553d7babcc1c73e7b08f146fd1c89aeea308b105b_prof);

    }

    // line 60
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_e06e3ae7e987a79f00fe2f17659e7227ee5efc3167644061434d55c4baf335a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e06e3ae7e987a79f00fe2f17659e7227ee5efc3167644061434d55c4baf335a0->enter($__internal_e06e3ae7e987a79f00fe2f17659e7227ee5efc3167644061434d55c4baf335a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_e1591ada1025acf782cfd7fa50406d840fa946b99ac1b2bb9c32a3b22eb28091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1591ada1025acf782cfd7fa50406d840fa946b99ac1b2bb9c32a3b22eb28091->enter($__internal_e1591ada1025acf782cfd7fa50406d840fa946b99ac1b2bb9c32a3b22eb28091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_e1591ada1025acf782cfd7fa50406d840fa946b99ac1b2bb9c32a3b22eb28091->leave($__internal_e1591ada1025acf782cfd7fa50406d840fa946b99ac1b2bb9c32a3b22eb28091_prof);

        
        $__internal_e06e3ae7e987a79f00fe2f17659e7227ee5efc3167644061434d55c4baf335a0->leave($__internal_e06e3ae7e987a79f00fe2f17659e7227ee5efc3167644061434d55c4baf335a0_prof);

    }

    // line 72
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_fd889f1db9e76aa6e6c9a6a0d642f2f95c08a7148f829ad513dd92e186506153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd889f1db9e76aa6e6c9a6a0d642f2f95c08a7148f829ad513dd92e186506153->enter($__internal_fd889f1db9e76aa6e6c9a6a0d642f2f95c08a7148f829ad513dd92e186506153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_bf9598cb794095db8bd04ebf04ec0504370454d029fcaef9a38e31bdac3c9bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9598cb794095db8bd04ebf04ec0504370454d029fcaef9a38e31bdac3c9bb9->enter($__internal_bf9598cb794095db8bd04ebf04ec0504370454d029fcaef9a38e31bdac3c9bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_bf9598cb794095db8bd04ebf04ec0504370454d029fcaef9a38e31bdac3c9bb9->leave($__internal_bf9598cb794095db8bd04ebf04ec0504370454d029fcaef9a38e31bdac3c9bb9_prof);

        
        $__internal_fd889f1db9e76aa6e6c9a6a0d642f2f95c08a7148f829ad513dd92e186506153->leave($__internal_fd889f1db9e76aa6e6c9a6a0d642f2f95c08a7148f829ad513dd92e186506153_prof);

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
