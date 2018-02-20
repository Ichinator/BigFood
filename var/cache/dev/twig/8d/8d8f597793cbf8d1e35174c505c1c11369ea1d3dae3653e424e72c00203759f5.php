<?php

/* EasyAdminBundle:default:show.html.twig */
class __TwigTemplate_cf7bc9c13e837920cc8088fb0dcc2d8e1ac5bf62fee6474b7d40a2387a32d9af extends Twig_Template
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
        $__internal_a06702e4e3778b07a7302e1b2148dc788e3f48742c8f19e6cea4eb3dab04d1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a06702e4e3778b07a7302e1b2148dc788e3f48742c8f19e6cea4eb3dab04d1c4->enter($__internal_a06702e4e3778b07a7302e1b2148dc788e3f48742c8f19e6cea4eb3dab04d1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        $__internal_1671e8fe5dec0c9384b97751be51e9d0bde90ef220ed979b24782430a8841445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1671e8fe5dec0c9384b97751be51e9d0bde90ef220ed979b24782430a8841445->enter($__internal_1671e8fe5dec0c9384b97751be51e9d0bde90ef220ed979b24782430a8841445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
        // line 4
        $context["__internal_2583922d575fb319d2d174bbc8effc88c64ff9b7a73da0915cb8c5d1501f0c88"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_2583922d575fb319d2d174bbc8effc88c64ff9b7a73da0915cb8c5d1501f0c88"] ?? $this->getContext($context, "__internal_2583922d575fb319d2d174bbc8effc88c64ff9b7a73da0915cb8c5d1501f0c88"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_2583922d575fb319d2d174bbc8effc88c64ff9b7a73da0915cb8c5d1501f0c88"] ?? $this->getContext($context, "__internal_2583922d575fb319d2d174bbc8effc88c64ff9b7a73da0915cb8c5d1501f0c88"))), "%entity_id%" =>         // line 5
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a06702e4e3778b07a7302e1b2148dc788e3f48742c8f19e6cea4eb3dab04d1c4->leave($__internal_a06702e4e3778b07a7302e1b2148dc788e3f48742c8f19e6cea4eb3dab04d1c4_prof);

        
        $__internal_1671e8fe5dec0c9384b97751be51e9d0bde90ef220ed979b24782430a8841445->leave($__internal_1671e8fe5dec0c9384b97751be51e9d0bde90ef220ed979b24782430a8841445_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_007597d1a4ac3e1c9600d96ed21ca00b0a81d00d5d39c617933d9949a66c8c51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_007597d1a4ac3e1c9600d96ed21ca00b0a81d00d5d39c617933d9949a66c8c51->enter($__internal_007597d1a4ac3e1c9600d96ed21ca00b0a81d00d5d39c617933d9949a66c8c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_7cd88634beeaaaa900df3c0d58de769c9965566fce2f1fd5ef6e785ff122144e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd88634beeaaaa900df3c0d58de769c9965566fce2f1fd5ef6e785ff122144e->enter($__internal_7cd88634beeaaaa900df3c0d58de769c9965566fce2f1fd5ef6e785ff122144e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_7cd88634beeaaaa900df3c0d58de769c9965566fce2f1fd5ef6e785ff122144e->leave($__internal_7cd88634beeaaaa900df3c0d58de769c9965566fce2f1fd5ef6e785ff122144e_prof);

        
        $__internal_007597d1a4ac3e1c9600d96ed21ca00b0a81d00d5d39c617933d9949a66c8c51->leave($__internal_007597d1a4ac3e1c9600d96ed21ca00b0a81d00d5d39c617933d9949a66c8c51_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_037ca4c1c8c40484ff3efb1c3ffcf8799d9929c08e7ef3fc6cf3fcf9758041a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_037ca4c1c8c40484ff3efb1c3ffcf8799d9929c08e7ef3fc6cf3fcf9758041a0->enter($__internal_037ca4c1c8c40484ff3efb1c3ffcf8799d9929c08e7ef3fc6cf3fcf9758041a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_0c0a7361ddee0d275fab11791879cc6923349aad8fc6e3d6f8fc247bd9de8616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0a7361ddee0d275fab11791879cc6923349aad8fc6e3d6f8fc247bd9de8616->enter($__internal_0c0a7361ddee0d275fab11791879cc6923349aad8fc6e3d6f8fc247bd9de8616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_0c0a7361ddee0d275fab11791879cc6923349aad8fc6e3d6f8fc247bd9de8616->leave($__internal_0c0a7361ddee0d275fab11791879cc6923349aad8fc6e3d6f8fc247bd9de8616_prof);

        
        $__internal_037ca4c1c8c40484ff3efb1c3ffcf8799d9929c08e7ef3fc6cf3fcf9758041a0->leave($__internal_037ca4c1c8c40484ff3efb1c3ffcf8799d9929c08e7ef3fc6cf3fcf9758041a0_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_a257119ed0868b87c4097d9730d70e698e5137c64020f47f58daa60a216e4361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a257119ed0868b87c4097d9730d70e698e5137c64020f47f58daa60a216e4361->enter($__internal_a257119ed0868b87c4097d9730d70e698e5137c64020f47f58daa60a216e4361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_a1c805941b8877826e0ec76ea60ab8a59958fb07d59d0f94bc080ab327d0aabc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c805941b8877826e0ec76ea60ab8a59958fb07d59d0f94bc080ab327d0aabc->enter($__internal_a1c805941b8877826e0ec76ea60ab8a59958fb07d59d0f94bc080ab327d0aabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "show", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_2583922d575fb319d2d174bbc8effc88c64ff9b7a73da0915cb8c5d1501f0c88"] ?? $this->getContext($context, "__internal_2583922d575fb319d2d174bbc8effc88c64ff9b7a73da0915cb8c5d1501f0c88")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a1c805941b8877826e0ec76ea60ab8a59958fb07d59d0f94bc080ab327d0aabc->leave($__internal_a1c805941b8877826e0ec76ea60ab8a59958fb07d59d0f94bc080ab327d0aabc_prof);

        
        $__internal_a257119ed0868b87c4097d9730d70e698e5137c64020f47f58daa60a216e4361->leave($__internal_a257119ed0868b87c4097d9730d70e698e5137c64020f47f58daa60a216e4361_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_aa0565ae2503d0fbc1e5f280c5207374cc852d9c94aad6f7f47ccbf3dd0c6a7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa0565ae2503d0fbc1e5f280c5207374cc852d9c94aad6f7f47ccbf3dd0c6a7f->enter($__internal_aa0565ae2503d0fbc1e5f280c5207374cc852d9c94aad6f7f47ccbf3dd0c6a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_5bf32d14c37c4f6207d10f18e5e817722d27138d2d086377ba28b8554fad2074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf32d14c37c4f6207d10f18e5e817722d27138d2d086377ba28b8554fad2074->enter($__internal_5bf32d14c37c4f6207d10f18e5e817722d27138d2d086377ba28b8554fad2074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_5bf32d14c37c4f6207d10f18e5e817722d27138d2d086377ba28b8554fad2074->leave($__internal_5bf32d14c37c4f6207d10f18e5e817722d27138d2d086377ba28b8554fad2074_prof);

        
        $__internal_aa0565ae2503d0fbc1e5f280c5207374cc852d9c94aad6f7f47ccbf3dd0c6a7f->leave($__internal_aa0565ae2503d0fbc1e5f280c5207374cc852d9c94aad6f7f47ccbf3dd0c6a7f_prof);

    }

    // line 21
    public function block_show_fields($context, array $blocks = array())
    {
        $__internal_096a41176bb96c8b59c663c01dd1416454a9e62eefaa2f583e07d590f9d614da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_096a41176bb96c8b59c663c01dd1416454a9e62eefaa2f583e07d590f9d614da->enter($__internal_096a41176bb96c8b59c663c01dd1416454a9e62eefaa2f583e07d590f9d614da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

        $__internal_cbe9a5867e05c31aef71bf35e10442a4a1a24392126d56a62902e2554fcd702c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe9a5867e05c31aef71bf35e10442a4a1a24392126d56a62902e2554fcd702c->enter($__internal_cbe9a5867e05c31aef71bf35e10442a4a1a24392126d56a62902e2554fcd702c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

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
        
        $__internal_cbe9a5867e05c31aef71bf35e10442a4a1a24392126d56a62902e2554fcd702c->leave($__internal_cbe9a5867e05c31aef71bf35e10442a4a1a24392126d56a62902e2554fcd702c_prof);

        
        $__internal_096a41176bb96c8b59c663c01dd1416454a9e62eefaa2f583e07d590f9d614da->leave($__internal_096a41176bb96c8b59c663c01dd1416454a9e62eefaa2f583e07d590f9d614da_prof);

    }

    // line 23
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_3188b933eee82f2b7b4b1eee4a3bcc30ebe97b6f547f6d271f5240c08fbb65a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3188b933eee82f2b7b4b1eee4a3bcc30ebe97b6f547f6d271f5240c08fbb65a5->enter($__internal_3188b933eee82f2b7b4b1eee4a3bcc30ebe97b6f547f6d271f5240c08fbb65a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_93d3f1616e5f6dcd46aba17782a51a574ba9cc23bac428a387683c85b8612fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d3f1616e5f6dcd46aba17782a51a574ba9cc23bac428a387683c85b8612fb3->enter($__internal_93d3f1616e5f6dcd46aba17782a51a574ba9cc23bac428a387683c85b8612fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

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
($context["__internal_2583922d575fb319d2d174bbc8effc88c64ff9b7a73da0915cb8c5d1501f0c88"] ?? $this->getContext($context, "__internal_2583922d575fb319d2d174bbc8effc88c64ff9b7a73da0915cb8c5d1501f0c88")));
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
($context["__internal_2583922d575fb319d2d174bbc8effc88c64ff9b7a73da0915cb8c5d1501f0c88"] ?? $this->getContext($context, "__internal_2583922d575fb319d2d174bbc8effc88c64ff9b7a73da0915cb8c5d1501f0c88")));
            // line 34
            echo "</span>
                            ";
        }
        // line 36
        echo "                        </div>
                    </div>
                ";
        
        $__internal_93d3f1616e5f6dcd46aba17782a51a574ba9cc23bac428a387683c85b8612fb3->leave($__internal_93d3f1616e5f6dcd46aba17782a51a574ba9cc23bac428a387683c85b8612fb3_prof);

        
        $__internal_3188b933eee82f2b7b4b1eee4a3bcc30ebe97b6f547f6d271f5240c08fbb65a5->leave($__internal_3188b933eee82f2b7b4b1eee4a3bcc30ebe97b6f547f6d271f5240c08fbb65a5_prof);

    }

    // line 44
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_67f64407872cd71521e17bdc05614081f8d4b426ab220affa5119371880d0f31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f64407872cd71521e17bdc05614081f8d4b426ab220affa5119371880d0f31->enter($__internal_67f64407872cd71521e17bdc05614081f8d4b426ab220affa5119371880d0f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_4d374c657a0b70442fcabb8ce353d0d497934515a1945543474d5186a3bf7046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d374c657a0b70442fcabb8ce353d0d497934515a1945543474d5186a3bf7046->enter($__internal_4d374c657a0b70442fcabb8ce353d0d497934515a1945543474d5186a3bf7046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

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
        
        $__internal_4d374c657a0b70442fcabb8ce353d0d497934515a1945543474d5186a3bf7046->leave($__internal_4d374c657a0b70442fcabb8ce353d0d497934515a1945543474d5186a3bf7046_prof);

        
        $__internal_67f64407872cd71521e17bdc05614081f8d4b426ab220affa5119371880d0f31->leave($__internal_67f64407872cd71521e17bdc05614081f8d4b426ab220affa5119371880d0f31_prof);

    }

    // line 60
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_4712d1467ebe384b0d8fe6c2542c1a64bb8d695b75ad3dc1f2c63d56b21d0510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4712d1467ebe384b0d8fe6c2542c1a64bb8d695b75ad3dc1f2c63d56b21d0510->enter($__internal_4712d1467ebe384b0d8fe6c2542c1a64bb8d695b75ad3dc1f2c63d56b21d0510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_9bb51c0930307f726abe3c4bd8e89ea8cdebea84f1d53b1bb315f7fdc4aae3e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bb51c0930307f726abe3c4bd8e89ea8cdebea84f1d53b1bb315f7fdc4aae3e9->enter($__internal_9bb51c0930307f726abe3c4bd8e89ea8cdebea84f1d53b1bb315f7fdc4aae3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_9bb51c0930307f726abe3c4bd8e89ea8cdebea84f1d53b1bb315f7fdc4aae3e9->leave($__internal_9bb51c0930307f726abe3c4bd8e89ea8cdebea84f1d53b1bb315f7fdc4aae3e9_prof);

        
        $__internal_4712d1467ebe384b0d8fe6c2542c1a64bb8d695b75ad3dc1f2c63d56b21d0510->leave($__internal_4712d1467ebe384b0d8fe6c2542c1a64bb8d695b75ad3dc1f2c63d56b21d0510_prof);

    }

    // line 72
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_6e77961a821ac04732d4bdd0e750925de95aacfdf4881de2c21019a000c20ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e77961a821ac04732d4bdd0e750925de95aacfdf4881de2c21019a000c20ac6->enter($__internal_6e77961a821ac04732d4bdd0e750925de95aacfdf4881de2c21019a000c20ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_a0f676e119e9c804093dccc7ba77acecf5b53ee9abc928ed7662363b16ff1cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f676e119e9c804093dccc7ba77acecf5b53ee9abc928ed7662363b16ff1cf6->enter($__internal_a0f676e119e9c804093dccc7ba77acecf5b53ee9abc928ed7662363b16ff1cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_a0f676e119e9c804093dccc7ba77acecf5b53ee9abc928ed7662363b16ff1cf6->leave($__internal_a0f676e119e9c804093dccc7ba77acecf5b53ee9abc928ed7662363b16ff1cf6_prof);

        
        $__internal_6e77961a821ac04732d4bdd0e750925de95aacfdf4881de2c21019a000c20ac6->leave($__internal_6e77961a821ac04732d4bdd0e750925de95aacfdf4881de2c21019a000c20ac6_prof);

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
