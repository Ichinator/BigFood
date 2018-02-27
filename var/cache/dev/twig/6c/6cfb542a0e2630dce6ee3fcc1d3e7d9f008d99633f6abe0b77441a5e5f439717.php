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
        $__internal_ee861b9232932b06c47fb688b971bbc417e1b2493e4e9f167c49d0217899c920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee861b9232932b06c47fb688b971bbc417e1b2493e4e9f167c49d0217899c920->enter($__internal_ee861b9232932b06c47fb688b971bbc417e1b2493e4e9f167c49d0217899c920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        $__internal_58f2f4168a84559012bd3a1b0e640fc31fe28a09d80fd6d82db201200cb54334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f2f4168a84559012bd3a1b0e640fc31fe28a09d80fd6d82db201200cb54334->enter($__internal_58f2f4168a84559012bd3a1b0e640fc31fe28a09d80fd6d82db201200cb54334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
        // line 4
        $context["__internal_0b3df21e65bcd7890efa39c1f9f969274986eea80d0d0aac03575db44e298e5c"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_0b3df21e65bcd7890efa39c1f9f969274986eea80d0d0aac03575db44e298e5c"] ?? $this->getContext($context, "__internal_0b3df21e65bcd7890efa39c1f9f969274986eea80d0d0aac03575db44e298e5c"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_0b3df21e65bcd7890efa39c1f9f969274986eea80d0d0aac03575db44e298e5c"] ?? $this->getContext($context, "__internal_0b3df21e65bcd7890efa39c1f9f969274986eea80d0d0aac03575db44e298e5c"))), "%entity_id%" =>         // line 5
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee861b9232932b06c47fb688b971bbc417e1b2493e4e9f167c49d0217899c920->leave($__internal_ee861b9232932b06c47fb688b971bbc417e1b2493e4e9f167c49d0217899c920_prof);

        
        $__internal_58f2f4168a84559012bd3a1b0e640fc31fe28a09d80fd6d82db201200cb54334->leave($__internal_58f2f4168a84559012bd3a1b0e640fc31fe28a09d80fd6d82db201200cb54334_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_0652d3a9bc6d79a515b4b800e8c06814d9b31a7b244bff93adcc1f46f18559ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0652d3a9bc6d79a515b4b800e8c06814d9b31a7b244bff93adcc1f46f18559ad->enter($__internal_0652d3a9bc6d79a515b4b800e8c06814d9b31a7b244bff93adcc1f46f18559ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_c6bc261d1d6552af951158acd65cc06c6b0ee36341e962b40cb2611771fc8558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6bc261d1d6552af951158acd65cc06c6b0ee36341e962b40cb2611771fc8558->enter($__internal_c6bc261d1d6552af951158acd65cc06c6b0ee36341e962b40cb2611771fc8558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_c6bc261d1d6552af951158acd65cc06c6b0ee36341e962b40cb2611771fc8558->leave($__internal_c6bc261d1d6552af951158acd65cc06c6b0ee36341e962b40cb2611771fc8558_prof);

        
        $__internal_0652d3a9bc6d79a515b4b800e8c06814d9b31a7b244bff93adcc1f46f18559ad->leave($__internal_0652d3a9bc6d79a515b4b800e8c06814d9b31a7b244bff93adcc1f46f18559ad_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_57e5aff76aa490fa567e1f2f9ce6e8773f3014448d5908cad75905e72b70700e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57e5aff76aa490fa567e1f2f9ce6e8773f3014448d5908cad75905e72b70700e->enter($__internal_57e5aff76aa490fa567e1f2f9ce6e8773f3014448d5908cad75905e72b70700e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_e3df16b9057af35d830a6beb487e50ecc1ab49f5b5bf48bafc809d979e477c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3df16b9057af35d830a6beb487e50ecc1ab49f5b5bf48bafc809d979e477c8f->enter($__internal_e3df16b9057af35d830a6beb487e50ecc1ab49f5b5bf48bafc809d979e477c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_e3df16b9057af35d830a6beb487e50ecc1ab49f5b5bf48bafc809d979e477c8f->leave($__internal_e3df16b9057af35d830a6beb487e50ecc1ab49f5b5bf48bafc809d979e477c8f_prof);

        
        $__internal_57e5aff76aa490fa567e1f2f9ce6e8773f3014448d5908cad75905e72b70700e->leave($__internal_57e5aff76aa490fa567e1f2f9ce6e8773f3014448d5908cad75905e72b70700e_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_a7e0bb79948c329052906ed3d99ddffa06033d16ccfa9d853d999d16815a9511 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e0bb79948c329052906ed3d99ddffa06033d16ccfa9d853d999d16815a9511->enter($__internal_a7e0bb79948c329052906ed3d99ddffa06033d16ccfa9d853d999d16815a9511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_b25ef3b9e90dec3b6f1d148696afde14a179c4e9ad4ec178e301a340c7013f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25ef3b9e90dec3b6f1d148696afde14a179c4e9ad4ec178e301a340c7013f11->enter($__internal_b25ef3b9e90dec3b6f1d148696afde14a179c4e9ad4ec178e301a340c7013f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "show", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_0b3df21e65bcd7890efa39c1f9f969274986eea80d0d0aac03575db44e298e5c"] ?? $this->getContext($context, "__internal_0b3df21e65bcd7890efa39c1f9f969274986eea80d0d0aac03575db44e298e5c")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b25ef3b9e90dec3b6f1d148696afde14a179c4e9ad4ec178e301a340c7013f11->leave($__internal_b25ef3b9e90dec3b6f1d148696afde14a179c4e9ad4ec178e301a340c7013f11_prof);

        
        $__internal_a7e0bb79948c329052906ed3d99ddffa06033d16ccfa9d853d999d16815a9511->leave($__internal_a7e0bb79948c329052906ed3d99ddffa06033d16ccfa9d853d999d16815a9511_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_2f5c3ddba03c43de6361831ffe894e25a21cee7fa3d0b05135f4db3862bfedd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f5c3ddba03c43de6361831ffe894e25a21cee7fa3d0b05135f4db3862bfedd3->enter($__internal_2f5c3ddba03c43de6361831ffe894e25a21cee7fa3d0b05135f4db3862bfedd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_54009389dc94620afbcf3059eddc746e9fd69eb00017facdc8adce1d78d94400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54009389dc94620afbcf3059eddc746e9fd69eb00017facdc8adce1d78d94400->enter($__internal_54009389dc94620afbcf3059eddc746e9fd69eb00017facdc8adce1d78d94400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_54009389dc94620afbcf3059eddc746e9fd69eb00017facdc8adce1d78d94400->leave($__internal_54009389dc94620afbcf3059eddc746e9fd69eb00017facdc8adce1d78d94400_prof);

        
        $__internal_2f5c3ddba03c43de6361831ffe894e25a21cee7fa3d0b05135f4db3862bfedd3->leave($__internal_2f5c3ddba03c43de6361831ffe894e25a21cee7fa3d0b05135f4db3862bfedd3_prof);

    }

    // line 21
    public function block_show_fields($context, array $blocks = array())
    {
        $__internal_6b8ca0ec5c302097b828c32fa2c8491d4413c181af7b770a2b2322c50dec62d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b8ca0ec5c302097b828c32fa2c8491d4413c181af7b770a2b2322c50dec62d3->enter($__internal_6b8ca0ec5c302097b828c32fa2c8491d4413c181af7b770a2b2322c50dec62d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

        $__internal_d189a7c71b3dc8c1c9c21fd27118b6658751fb496774bba84bda5e2b260aba1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d189a7c71b3dc8c1c9c21fd27118b6658751fb496774bba84bda5e2b260aba1a->enter($__internal_d189a7c71b3dc8c1c9c21fd27118b6658751fb496774bba84bda5e2b260aba1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

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
        
        $__internal_d189a7c71b3dc8c1c9c21fd27118b6658751fb496774bba84bda5e2b260aba1a->leave($__internal_d189a7c71b3dc8c1c9c21fd27118b6658751fb496774bba84bda5e2b260aba1a_prof);

        
        $__internal_6b8ca0ec5c302097b828c32fa2c8491d4413c181af7b770a2b2322c50dec62d3->leave($__internal_6b8ca0ec5c302097b828c32fa2c8491d4413c181af7b770a2b2322c50dec62d3_prof);

    }

    // line 23
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_2db45e5b20047cb262fef6c1330d5e35c17cbf01251bc7ce0203ec201b77ddf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2db45e5b20047cb262fef6c1330d5e35c17cbf01251bc7ce0203ec201b77ddf6->enter($__internal_2db45e5b20047cb262fef6c1330d5e35c17cbf01251bc7ce0203ec201b77ddf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_db319026550302e2a15e2de89e6d3867288a4165c51a5b7f795c23f902690546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db319026550302e2a15e2de89e6d3867288a4165c51a5b7f795c23f902690546->enter($__internal_db319026550302e2a15e2de89e6d3867288a4165c51a5b7f795c23f902690546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

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
($context["__internal_0b3df21e65bcd7890efa39c1f9f969274986eea80d0d0aac03575db44e298e5c"] ?? $this->getContext($context, "__internal_0b3df21e65bcd7890efa39c1f9f969274986eea80d0d0aac03575db44e298e5c")));
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
($context["__internal_0b3df21e65bcd7890efa39c1f9f969274986eea80d0d0aac03575db44e298e5c"] ?? $this->getContext($context, "__internal_0b3df21e65bcd7890efa39c1f9f969274986eea80d0d0aac03575db44e298e5c")));
            // line 34
            echo "</span>
                            ";
        }
        // line 36
        echo "                        </div>
                    </div>
                ";
        
        $__internal_db319026550302e2a15e2de89e6d3867288a4165c51a5b7f795c23f902690546->leave($__internal_db319026550302e2a15e2de89e6d3867288a4165c51a5b7f795c23f902690546_prof);

        
        $__internal_2db45e5b20047cb262fef6c1330d5e35c17cbf01251bc7ce0203ec201b77ddf6->leave($__internal_2db45e5b20047cb262fef6c1330d5e35c17cbf01251bc7ce0203ec201b77ddf6_prof);

    }

    // line 44
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_aa219f727cbc3e8b6ce37c11d2dc4d506026b8d0b30b1499085f058862355df7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa219f727cbc3e8b6ce37c11d2dc4d506026b8d0b30b1499085f058862355df7->enter($__internal_aa219f727cbc3e8b6ce37c11d2dc4d506026b8d0b30b1499085f058862355df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_c36bb37574b8de66e71cd1fea5893be17d9c61a8e9d1f89c0e89b7070eb18209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36bb37574b8de66e71cd1fea5893be17d9c61a8e9d1f89c0e89b7070eb18209->enter($__internal_c36bb37574b8de66e71cd1fea5893be17d9c61a8e9d1f89c0e89b7070eb18209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

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
        
        $__internal_c36bb37574b8de66e71cd1fea5893be17d9c61a8e9d1f89c0e89b7070eb18209->leave($__internal_c36bb37574b8de66e71cd1fea5893be17d9c61a8e9d1f89c0e89b7070eb18209_prof);

        
        $__internal_aa219f727cbc3e8b6ce37c11d2dc4d506026b8d0b30b1499085f058862355df7->leave($__internal_aa219f727cbc3e8b6ce37c11d2dc4d506026b8d0b30b1499085f058862355df7_prof);

    }

    // line 60
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_251661c2b488db2957fca8a3f9a94a3dd6586aa4863f495a1d592853ee17d3e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_251661c2b488db2957fca8a3f9a94a3dd6586aa4863f495a1d592853ee17d3e6->enter($__internal_251661c2b488db2957fca8a3f9a94a3dd6586aa4863f495a1d592853ee17d3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_1fe3a9cfb70b47553aff004cf0762fea326d819cda31d7d77606d7dd278d93d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe3a9cfb70b47553aff004cf0762fea326d819cda31d7d77606d7dd278d93d4->enter($__internal_1fe3a9cfb70b47553aff004cf0762fea326d819cda31d7d77606d7dd278d93d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_1fe3a9cfb70b47553aff004cf0762fea326d819cda31d7d77606d7dd278d93d4->leave($__internal_1fe3a9cfb70b47553aff004cf0762fea326d819cda31d7d77606d7dd278d93d4_prof);

        
        $__internal_251661c2b488db2957fca8a3f9a94a3dd6586aa4863f495a1d592853ee17d3e6->leave($__internal_251661c2b488db2957fca8a3f9a94a3dd6586aa4863f495a1d592853ee17d3e6_prof);

    }

    // line 72
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_6eaafd207240a0d8c4bef24a4d6523e2c722b96540cf39a91421ae404d1362bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eaafd207240a0d8c4bef24a4d6523e2c722b96540cf39a91421ae404d1362bc->enter($__internal_6eaafd207240a0d8c4bef24a4d6523e2c722b96540cf39a91421ae404d1362bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_8057c455682636aa80e5986905c048352ccbe2d1ef2576fd3c8ab648f17b303f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8057c455682636aa80e5986905c048352ccbe2d1ef2576fd3c8ab648f17b303f->enter($__internal_8057c455682636aa80e5986905c048352ccbe2d1ef2576fd3c8ab648f17b303f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_8057c455682636aa80e5986905c048352ccbe2d1ef2576fd3c8ab648f17b303f->leave($__internal_8057c455682636aa80e5986905c048352ccbe2d1ef2576fd3c8ab648f17b303f_prof);

        
        $__internal_6eaafd207240a0d8c4bef24a4d6523e2c722b96540cf39a91421ae404d1362bc->leave($__internal_6eaafd207240a0d8c4bef24a4d6523e2c722b96540cf39a91421ae404d1362bc_prof);

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
