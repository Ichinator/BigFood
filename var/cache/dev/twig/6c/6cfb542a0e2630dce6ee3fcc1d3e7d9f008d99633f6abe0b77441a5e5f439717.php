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
        $__internal_db428ca6c6791b63b4f7f43c791d3b2b920ef2f0d28b4128770723358ba0d78e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db428ca6c6791b63b4f7f43c791d3b2b920ef2f0d28b4128770723358ba0d78e->enter($__internal_db428ca6c6791b63b4f7f43c791d3b2b920ef2f0d28b4128770723358ba0d78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        $__internal_c4cea510e597599841cb5189c73b055cc17e6feb7f19afa05d6fcdec902f6461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4cea510e597599841cb5189c73b055cc17e6feb7f19afa05d6fcdec902f6461->enter($__internal_c4cea510e597599841cb5189c73b055cc17e6feb7f19afa05d6fcdec902f6461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
        // line 4
        $context["__internal_27f2fcd8be1c92b9e8d82cd497f4bdd08c5076f9480777c9ede9eb7e76e897a4"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_27f2fcd8be1c92b9e8d82cd497f4bdd08c5076f9480777c9ede9eb7e76e897a4"] ?? $this->getContext($context, "__internal_27f2fcd8be1c92b9e8d82cd497f4bdd08c5076f9480777c9ede9eb7e76e897a4"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_27f2fcd8be1c92b9e8d82cd497f4bdd08c5076f9480777c9ede9eb7e76e897a4"] ?? $this->getContext($context, "__internal_27f2fcd8be1c92b9e8d82cd497f4bdd08c5076f9480777c9ede9eb7e76e897a4"))), "%entity_id%" =>         // line 5
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db428ca6c6791b63b4f7f43c791d3b2b920ef2f0d28b4128770723358ba0d78e->leave($__internal_db428ca6c6791b63b4f7f43c791d3b2b920ef2f0d28b4128770723358ba0d78e_prof);

        
        $__internal_c4cea510e597599841cb5189c73b055cc17e6feb7f19afa05d6fcdec902f6461->leave($__internal_c4cea510e597599841cb5189c73b055cc17e6feb7f19afa05d6fcdec902f6461_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_1f18b0efec6e5d8081b0b4ea85f789fbb028fa0e8cba89c4dece087c13d00f12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f18b0efec6e5d8081b0b4ea85f789fbb028fa0e8cba89c4dece087c13d00f12->enter($__internal_1f18b0efec6e5d8081b0b4ea85f789fbb028fa0e8cba89c4dece087c13d00f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_8590ca4400f87693553cdee6f1791f50271c965b8fba548535502a2b745c4d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8590ca4400f87693553cdee6f1791f50271c965b8fba548535502a2b745c4d03->enter($__internal_8590ca4400f87693553cdee6f1791f50271c965b8fba548535502a2b745c4d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_8590ca4400f87693553cdee6f1791f50271c965b8fba548535502a2b745c4d03->leave($__internal_8590ca4400f87693553cdee6f1791f50271c965b8fba548535502a2b745c4d03_prof);

        
        $__internal_1f18b0efec6e5d8081b0b4ea85f789fbb028fa0e8cba89c4dece087c13d00f12->leave($__internal_1f18b0efec6e5d8081b0b4ea85f789fbb028fa0e8cba89c4dece087c13d00f12_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_fa963e83cf05ed7f2cd9687f913a596018b7eed224fde110c5bd0842952daf19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa963e83cf05ed7f2cd9687f913a596018b7eed224fde110c5bd0842952daf19->enter($__internal_fa963e83cf05ed7f2cd9687f913a596018b7eed224fde110c5bd0842952daf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_dd0153b6fd33db3b173d828a213feeb7c00862b5222720687ad2fc364c19df95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0153b6fd33db3b173d828a213feeb7c00862b5222720687ad2fc364c19df95->enter($__internal_dd0153b6fd33db3b173d828a213feeb7c00862b5222720687ad2fc364c19df95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_dd0153b6fd33db3b173d828a213feeb7c00862b5222720687ad2fc364c19df95->leave($__internal_dd0153b6fd33db3b173d828a213feeb7c00862b5222720687ad2fc364c19df95_prof);

        
        $__internal_fa963e83cf05ed7f2cd9687f913a596018b7eed224fde110c5bd0842952daf19->leave($__internal_fa963e83cf05ed7f2cd9687f913a596018b7eed224fde110c5bd0842952daf19_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_6da0dc03dd2bacfd254d44591b8d34288a2f067b69270b217a0a5858c09c7622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6da0dc03dd2bacfd254d44591b8d34288a2f067b69270b217a0a5858c09c7622->enter($__internal_6da0dc03dd2bacfd254d44591b8d34288a2f067b69270b217a0a5858c09c7622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_1544a6443d739b39d4f7f2bd76e6b11cde54d7af87bbf5f5e841eb71a29d38e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1544a6443d739b39d4f7f2bd76e6b11cde54d7af87bbf5f5e841eb71a29d38e2->enter($__internal_1544a6443d739b39d4f7f2bd76e6b11cde54d7af87bbf5f5e841eb71a29d38e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "show", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_27f2fcd8be1c92b9e8d82cd497f4bdd08c5076f9480777c9ede9eb7e76e897a4"] ?? $this->getContext($context, "__internal_27f2fcd8be1c92b9e8d82cd497f4bdd08c5076f9480777c9ede9eb7e76e897a4")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1544a6443d739b39d4f7f2bd76e6b11cde54d7af87bbf5f5e841eb71a29d38e2->leave($__internal_1544a6443d739b39d4f7f2bd76e6b11cde54d7af87bbf5f5e841eb71a29d38e2_prof);

        
        $__internal_6da0dc03dd2bacfd254d44591b8d34288a2f067b69270b217a0a5858c09c7622->leave($__internal_6da0dc03dd2bacfd254d44591b8d34288a2f067b69270b217a0a5858c09c7622_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_7185d584b925e74ad6020b491e3300fa0fd981078e0f72ae61cb02bdef7d55f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7185d584b925e74ad6020b491e3300fa0fd981078e0f72ae61cb02bdef7d55f8->enter($__internal_7185d584b925e74ad6020b491e3300fa0fd981078e0f72ae61cb02bdef7d55f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_7c2d420080d1ec4a5ac66baa738119d3e98c85809d63eaf4482f1c86fc0d8101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2d420080d1ec4a5ac66baa738119d3e98c85809d63eaf4482f1c86fc0d8101->enter($__internal_7c2d420080d1ec4a5ac66baa738119d3e98c85809d63eaf4482f1c86fc0d8101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_7c2d420080d1ec4a5ac66baa738119d3e98c85809d63eaf4482f1c86fc0d8101->leave($__internal_7c2d420080d1ec4a5ac66baa738119d3e98c85809d63eaf4482f1c86fc0d8101_prof);

        
        $__internal_7185d584b925e74ad6020b491e3300fa0fd981078e0f72ae61cb02bdef7d55f8->leave($__internal_7185d584b925e74ad6020b491e3300fa0fd981078e0f72ae61cb02bdef7d55f8_prof);

    }

    // line 21
    public function block_show_fields($context, array $blocks = array())
    {
        $__internal_1ac9bb5c1d91890dd9b988e7a705b897176cf4e7c7c8907cadcfa8edc218e3e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac9bb5c1d91890dd9b988e7a705b897176cf4e7c7c8907cadcfa8edc218e3e8->enter($__internal_1ac9bb5c1d91890dd9b988e7a705b897176cf4e7c7c8907cadcfa8edc218e3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

        $__internal_f3ac0e96c1ed407795281296b030b3193e0d3160e9fcde6cbe106ac0e46de51c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ac0e96c1ed407795281296b030b3193e0d3160e9fcde6cbe106ac0e46de51c->enter($__internal_f3ac0e96c1ed407795281296b030b3193e0d3160e9fcde6cbe106ac0e46de51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

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
        
        $__internal_f3ac0e96c1ed407795281296b030b3193e0d3160e9fcde6cbe106ac0e46de51c->leave($__internal_f3ac0e96c1ed407795281296b030b3193e0d3160e9fcde6cbe106ac0e46de51c_prof);

        
        $__internal_1ac9bb5c1d91890dd9b988e7a705b897176cf4e7c7c8907cadcfa8edc218e3e8->leave($__internal_1ac9bb5c1d91890dd9b988e7a705b897176cf4e7c7c8907cadcfa8edc218e3e8_prof);

    }

    // line 23
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_dd1b8c51a64e7db84fe7e40201f47eeae94108539b2e00700156f98ead60be1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd1b8c51a64e7db84fe7e40201f47eeae94108539b2e00700156f98ead60be1f->enter($__internal_dd1b8c51a64e7db84fe7e40201f47eeae94108539b2e00700156f98ead60be1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_b3da41249007257fe2c5eca5bd51ad22e065fc7f4c27b9472328895da6da2573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3da41249007257fe2c5eca5bd51ad22e065fc7f4c27b9472328895da6da2573->enter($__internal_b3da41249007257fe2c5eca5bd51ad22e065fc7f4c27b9472328895da6da2573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

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
($context["__internal_27f2fcd8be1c92b9e8d82cd497f4bdd08c5076f9480777c9ede9eb7e76e897a4"] ?? $this->getContext($context, "__internal_27f2fcd8be1c92b9e8d82cd497f4bdd08c5076f9480777c9ede9eb7e76e897a4")));
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
($context["__internal_27f2fcd8be1c92b9e8d82cd497f4bdd08c5076f9480777c9ede9eb7e76e897a4"] ?? $this->getContext($context, "__internal_27f2fcd8be1c92b9e8d82cd497f4bdd08c5076f9480777c9ede9eb7e76e897a4")));
            // line 34
            echo "</span>
                            ";
        }
        // line 36
        echo "                        </div>
                    </div>
                ";
        
        $__internal_b3da41249007257fe2c5eca5bd51ad22e065fc7f4c27b9472328895da6da2573->leave($__internal_b3da41249007257fe2c5eca5bd51ad22e065fc7f4c27b9472328895da6da2573_prof);

        
        $__internal_dd1b8c51a64e7db84fe7e40201f47eeae94108539b2e00700156f98ead60be1f->leave($__internal_dd1b8c51a64e7db84fe7e40201f47eeae94108539b2e00700156f98ead60be1f_prof);

    }

    // line 44
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_ebc01197300e0f210645b8f405e542d47178ceb1c62459bd7074115dffb40a5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebc01197300e0f210645b8f405e542d47178ceb1c62459bd7074115dffb40a5f->enter($__internal_ebc01197300e0f210645b8f405e542d47178ceb1c62459bd7074115dffb40a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_dec22554bd3a323319c31c444796112d6342e36872fda3355e5fc77ff5e3b6af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec22554bd3a323319c31c444796112d6342e36872fda3355e5fc77ff5e3b6af->enter($__internal_dec22554bd3a323319c31c444796112d6342e36872fda3355e5fc77ff5e3b6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

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
        
        $__internal_dec22554bd3a323319c31c444796112d6342e36872fda3355e5fc77ff5e3b6af->leave($__internal_dec22554bd3a323319c31c444796112d6342e36872fda3355e5fc77ff5e3b6af_prof);

        
        $__internal_ebc01197300e0f210645b8f405e542d47178ceb1c62459bd7074115dffb40a5f->leave($__internal_ebc01197300e0f210645b8f405e542d47178ceb1c62459bd7074115dffb40a5f_prof);

    }

    // line 60
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_41c2fcbcb895203f813fbb535eacb4dd8e75ec27314c4d425f0b5d56b51806c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41c2fcbcb895203f813fbb535eacb4dd8e75ec27314c4d425f0b5d56b51806c3->enter($__internal_41c2fcbcb895203f813fbb535eacb4dd8e75ec27314c4d425f0b5d56b51806c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_253385381203a8dc0ea09c65e2acfd06aaf3202dd90863ef6dea838bcc6c2cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253385381203a8dc0ea09c65e2acfd06aaf3202dd90863ef6dea838bcc6c2cbd->enter($__internal_253385381203a8dc0ea09c65e2acfd06aaf3202dd90863ef6dea838bcc6c2cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_253385381203a8dc0ea09c65e2acfd06aaf3202dd90863ef6dea838bcc6c2cbd->leave($__internal_253385381203a8dc0ea09c65e2acfd06aaf3202dd90863ef6dea838bcc6c2cbd_prof);

        
        $__internal_41c2fcbcb895203f813fbb535eacb4dd8e75ec27314c4d425f0b5d56b51806c3->leave($__internal_41c2fcbcb895203f813fbb535eacb4dd8e75ec27314c4d425f0b5d56b51806c3_prof);

    }

    // line 72
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_4fc75e2d456cfc07eebfffea82dd034ed01fd39e081bd0dcdfa5fa9684d077d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fc75e2d456cfc07eebfffea82dd034ed01fd39e081bd0dcdfa5fa9684d077d9->enter($__internal_4fc75e2d456cfc07eebfffea82dd034ed01fd39e081bd0dcdfa5fa9684d077d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_17926e674e9ba9f0916846c0066cfbe6d9491fe021782fc14d82cbba95d3e8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17926e674e9ba9f0916846c0066cfbe6d9491fe021782fc14d82cbba95d3e8a3->enter($__internal_17926e674e9ba9f0916846c0066cfbe6d9491fe021782fc14d82cbba95d3e8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_17926e674e9ba9f0916846c0066cfbe6d9491fe021782fc14d82cbba95d3e8a3->leave($__internal_17926e674e9ba9f0916846c0066cfbe6d9491fe021782fc14d82cbba95d3e8a3_prof);

        
        $__internal_4fc75e2d456cfc07eebfffea82dd034ed01fd39e081bd0dcdfa5fa9684d077d9->leave($__internal_4fc75e2d456cfc07eebfffea82dd034ed01fd39e081bd0dcdfa5fa9684d077d9_prof);

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
