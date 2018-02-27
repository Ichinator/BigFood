<?php

/* EasyAdminBundle:default:menu.html.twig */
class __TwigTemplate_f71e844021f8c0a1fc2bd30ccdf24dc1a577be26e92aeb56863638290a52fc03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main_menu_before' => array($this, 'block_main_menu_before'),
            'main_menu' => array($this, 'block_main_menu'),
            'menu_item' => array($this, 'block_menu_item'),
            'menu_subitem' => array($this, 'block_menu_subitem'),
            'main_menu_after' => array($this, 'block_main_menu_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86b7fc30564899eaa29978fb318f162582d6b26d3d30bec168090aaf04a2a9cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b7fc30564899eaa29978fb318f162582d6b26d3d30bec168090aaf04a2a9cf->enter($__internal_86b7fc30564899eaa29978fb318f162582d6b26d3d30bec168090aaf04a2a9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:menu.html.twig"));

        $__internal_4c14409cc9f526d896a1df13c18684fe280333ada595cc184daae231f24aafcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c14409cc9f526d896a1df13c18684fe280333ada595cc184daae231f24aafcd->enter($__internal_4c14409cc9f526d896a1df13c18684fe280333ada595cc184daae231f24aafcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:menu.html.twig"));

        // line 28
        echo "
";
        // line 29
        $context["helper"] = $this;
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 32
        echo "
<ul class=\"sidebar-menu\">
    ";
        // line 34
        $context["_menu_items"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.menu");
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock('main_menu', $context, $blocks);
        // line 57
        echo "</ul>

";
        // line 59
        $this->displayBlock('main_menu_after', $context, $blocks);
        
        $__internal_86b7fc30564899eaa29978fb318f162582d6b26d3d30bec168090aaf04a2a9cf->leave($__internal_86b7fc30564899eaa29978fb318f162582d6b26d3d30bec168090aaf04a2a9cf_prof);

        
        $__internal_4c14409cc9f526d896a1df13c18684fe280333ada595cc184daae231f24aafcd->leave($__internal_4c14409cc9f526d896a1df13c18684fe280333ada595cc184daae231f24aafcd_prof);

    }

    // line 31
    public function block_main_menu_before($context, array $blocks = array())
    {
        $__internal_c2a20e35299e06bab180c61beb83f5ad7797f85418d3ba728a5eb73266293e99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2a20e35299e06bab180c61beb83f5ad7797f85418d3ba728a5eb73266293e99->enter($__internal_c2a20e35299e06bab180c61beb83f5ad7797f85418d3ba728a5eb73266293e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        $__internal_4411c0eb8cf0d62797f0b50a6da6ec9e0ce947cfc7e835622c50e137f251ed41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4411c0eb8cf0d62797f0b50a6da6ec9e0ce947cfc7e835622c50e137f251ed41->enter($__internal_4411c0eb8cf0d62797f0b50a6da6ec9e0ce947cfc7e835622c50e137f251ed41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        
        $__internal_4411c0eb8cf0d62797f0b50a6da6ec9e0ce947cfc7e835622c50e137f251ed41->leave($__internal_4411c0eb8cf0d62797f0b50a6da6ec9e0ce947cfc7e835622c50e137f251ed41_prof);

        
        $__internal_c2a20e35299e06bab180c61beb83f5ad7797f85418d3ba728a5eb73266293e99->leave($__internal_c2a20e35299e06bab180c61beb83f5ad7797f85418d3ba728a5eb73266293e99_prof);

    }

    // line 36
    public function block_main_menu($context, array $blocks = array())
    {
        $__internal_5135fae0bdc1b50f20daa8124cb71b3d5f6add946d611ee7f1c6459936558c5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5135fae0bdc1b50f20daa8124cb71b3d5f6add946d611ee7f1c6459936558c5a->enter($__internal_5135fae0bdc1b50f20daa8124cb71b3d5f6add946d611ee7f1c6459936558c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        $__internal_9f3896bb2f90ba0e9827754fe94a8d67191e76262b9dcc7bbfc7ef28d4bfa44a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3896bb2f90ba0e9827754fe94a8d67191e76262b9dcc7bbfc7ef28d4bfa44a->enter($__internal_9f3896bb2f90ba0e9827754fe94a8d67191e76262b9dcc7bbfc7ef28d4bfa44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        // line 37
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["_menu_items"] ?? $this->getContext($context, "_menu_items")));
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
            // line 38
            echo "            ";
            $this->displayBlock('menu_item', $context, $blocks);
            // line 55
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    ";
        
        $__internal_9f3896bb2f90ba0e9827754fe94a8d67191e76262b9dcc7bbfc7ef28d4bfa44a->leave($__internal_9f3896bb2f90ba0e9827754fe94a8d67191e76262b9dcc7bbfc7ef28d4bfa44a_prof);

        
        $__internal_5135fae0bdc1b50f20daa8124cb71b3d5f6add946d611ee7f1c6459936558c5a->leave($__internal_5135fae0bdc1b50f20daa8124cb71b3d5f6add946d611ee7f1c6459936558c5a_prof);

    }

    // line 38
    public function block_menu_item($context, array $blocks = array())
    {
        $__internal_c5afbd6fae95a16cd25d2bcf4959b20973f04f8ef16a70ab99c21a15deb8d969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5afbd6fae95a16cd25d2bcf4959b20973f04f8ef16a70ab99c21a15deb8d969->enter($__internal_c5afbd6fae95a16cd25d2bcf4959b20973f04f8ef16a70ab99c21a15deb8d969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_item"));

        $__internal_8dd8a989472bd9474cbbdc483f231fd37e8d10332a00b997e383e5512ec633d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd8a989472bd9474cbbdc483f231fd37e8d10332a00b997e383e5512ec633d2->enter($__internal_8dd8a989472bd9474cbbdc483f231fd37e8d10332a00b997e383e5512ec633d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_item"));

        // line 39
        echo "                <li class=\"";
        echo ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "divider")) ? ("header") : (""));
        echo " ";
        echo (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "children", array()))) ? ("treeview") : (""));
        echo " ";
        echo ((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute(($context["loop"] ?? $this->getContext($context, "loop")), "index0", array()))) ? ("active") : (""));
        echo " ";
        echo ((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) !=  -1)) ? ("submenu-active") : (""));
        echo "\">
                    ";
        // line 40
        echo $context["helper"]->getrender_menu_item(($context["item"] ?? $this->getContext($context, "item")), (($this->getAttribute(($context["_entity_config"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_entity_config"] ?? null), "translation_domain", array()), "messages")) : ("messages")));
        echo "

                    ";
        // line 42
        if ( !twig_test_empty((($this->getAttribute(($context["item"] ?? null), "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "children", array()), array())) : (array())))) {
            // line 43
            echo "                        <ul class=\"treeview-menu\">
                            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "children", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                // line 45
                echo "                                ";
                $this->displayBlock('menu_subitem', $context, $blocks);
                // line 50
                echo "                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                        </ul>
                    ";
        }
        // line 53
        echo "                </li>
            ";
        
        $__internal_8dd8a989472bd9474cbbdc483f231fd37e8d10332a00b997e383e5512ec633d2->leave($__internal_8dd8a989472bd9474cbbdc483f231fd37e8d10332a00b997e383e5512ec633d2_prof);

        
        $__internal_c5afbd6fae95a16cd25d2bcf4959b20973f04f8ef16a70ab99c21a15deb8d969->leave($__internal_c5afbd6fae95a16cd25d2bcf4959b20973f04f8ef16a70ab99c21a15deb8d969_prof);

    }

    // line 45
    public function block_menu_subitem($context, array $blocks = array())
    {
        $__internal_c82b789474637fae5f0d29ede83f847036b2afe0b566c85a4ebe797385260f58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c82b789474637fae5f0d29ede83f847036b2afe0b566c85a4ebe797385260f58->enter($__internal_c82b789474637fae5f0d29ede83f847036b2afe0b566c85a4ebe797385260f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_subitem"));

        $__internal_80dff23df836b4859bd7d7f7cbc978d635deda5dd0c98e9ecafaaaef14ff7f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80dff23df836b4859bd7d7f7cbc978d635deda5dd0c98e9ecafaaaef14ff7f90->enter($__internal_80dff23df836b4859bd7d7f7cbc978d635deda5dd0c98e9ecafaaaef14ff7f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_subitem"));

        // line 46
        echo "                                    <li class=\"";
        echo ((($this->getAttribute(($context["subitem"] ?? $this->getContext($context, "subitem")), "type", array()) == "divider")) ? ("header") : (""));
        echo " ";
        echo (((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["loop"] ?? $this->getContext($context, "loop")), "parent", array()), "loop", array()), "index0", array())) && ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute(($context["loop"] ?? $this->getContext($context, "loop")), "index0", array())))) ? ("active") : (""));
        echo "\">
                                        ";
        // line 47
        echo $context["helper"]->getrender_menu_item(($context["subitem"] ?? $this->getContext($context, "subitem")), (($this->getAttribute(($context["_entity_config"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_entity_config"] ?? null), "translation_domain", array()), "messages")) : ("messages")));
        echo "
                                    </li>
                                ";
        
        $__internal_80dff23df836b4859bd7d7f7cbc978d635deda5dd0c98e9ecafaaaef14ff7f90->leave($__internal_80dff23df836b4859bd7d7f7cbc978d635deda5dd0c98e9ecafaaaef14ff7f90_prof);

        
        $__internal_c82b789474637fae5f0d29ede83f847036b2afe0b566c85a4ebe797385260f58->leave($__internal_c82b789474637fae5f0d29ede83f847036b2afe0b566c85a4ebe797385260f58_prof);

    }

    // line 59
    public function block_main_menu_after($context, array $blocks = array())
    {
        $__internal_414ae5294aacece3d695d2956cd6752c89146120bf61b4bef513cd2456d970ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414ae5294aacece3d695d2956cd6752c89146120bf61b4bef513cd2456d970ef->enter($__internal_414ae5294aacece3d695d2956cd6752c89146120bf61b4bef513cd2456d970ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        $__internal_be9787e94c1a6b37573d6ef88b5034ed6ddc747a56b74af9c2f5808aed5e321e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9787e94c1a6b37573d6ef88b5034ed6ddc747a56b74af9c2f5808aed5e321e->enter($__internal_be9787e94c1a6b37573d6ef88b5034ed6ddc747a56b74af9c2f5808aed5e321e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        
        $__internal_be9787e94c1a6b37573d6ef88b5034ed6ddc747a56b74af9c2f5808aed5e321e->leave($__internal_be9787e94c1a6b37573d6ef88b5034ed6ddc747a56b74af9c2f5808aed5e321e_prof);

        
        $__internal_414ae5294aacece3d695d2956cd6752c89146120bf61b4bef513cd2456d970ef->leave($__internal_414ae5294aacece3d695d2956cd6752c89146120bf61b4bef513cd2456d970ef_prof);

    }

    // line 1
    public function getrender_menu_item($__item__ = null, $__translation_domain__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "translation_domain" => $__translation_domain__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a510afb628fa7da90321f404b62f17e9bf62e3321303700d527b9960275a1308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_a510afb628fa7da90321f404b62f17e9bf62e3321303700d527b9960275a1308->enter($__internal_a510afb628fa7da90321f404b62f17e9bf62e3321303700d527b9960275a1308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            $__internal_05afbc62a9e9f54ab25f5775008f58f2700c9ef8cc7cf1a997defb6a587b2029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_05afbc62a9e9f54ab25f5775008f58f2700c9ef8cc7cf1a997defb6a587b2029->enter($__internal_05afbc62a9e9f54ab25f5775008f58f2700c9ef8cc7cf1a997defb6a587b2029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            // line 2
            echo "    ";
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "divider")) {
                // line 3
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                $context["menu_params"] = array("menuIndex" => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "menu_index", array()), "submenuIndex" => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "submenu_index", array()));
                // line 6
                echo "        ";
                $context["path"] = ((($this->getAttribute(                // line 7
($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "link")) ? ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "url", array())) : (((($this->getAttribute(                // line 8
($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "route")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "route", array()), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "params", array()))) : (((($this->getAttribute(                // line 9
($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "entity")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(twig_array_merge(array("entity" => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "entity", array()), "action" => "list"), ($context["menu_params"] ?? $this->getContext($context, "menu_params"))), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "params", array())))) : (((($this->getAttribute(                // line 10
($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "empty")) ? ("#") : (""))))))));
                // line 12
                echo "
        ";
                // line 17
                echo "        ";
                if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "route") && (is_string($__internal_50688eba6d6ef4d9538ce652c09efffc5ec90f32774ba661ccf1767b8e6ba49b = ($context["path"] ?? $this->getContext($context, "path"))) && is_string($__internal_5a8a779e4e0436d4373d64750a0427e52c0da3d05f5e5cadad0a7d0da7997bed = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin")) && ('' === $__internal_5a8a779e4e0436d4373d64750a0427e52c0da3d05f5e5cadad0a7d0da7997bed || 0 === strpos($__internal_50688eba6d6ef4d9538ce652c09efffc5ec90f32774ba661ccf1767b8e6ba49b, $__internal_5a8a779e4e0436d4373d64750a0427e52c0da3d05f5e5cadad0a7d0da7997bed))))) {
                    // line 18
                    echo "            ";
                    $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "route", array()), twig_array_merge(($context["menu_params"] ?? $this->getContext($context, "menu_params")), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "params", array())));
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "
        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
                echo "\" ";
                if ((($this->getAttribute(($context["item"] ?? null), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "target", array()), false)) : (false))) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "target", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 22
                if ( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "icon", array()))) {
                    echo "<i class=\"fa ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "icon", array()), "html", null, true);
                    echo "\"></i>";
                }
                // line 23
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</span>
            ";
                // line 24
                if ( !twig_test_empty((($this->getAttribute(($context["item"] ?? null), "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "children", array()), array())) : (array())))) {
                    echo "<i class=\"fa fa-angle-left pull-right\"></i>";
                }
                // line 25
                echo "        </a>
    ";
            }
            
            $__internal_05afbc62a9e9f54ab25f5775008f58f2700c9ef8cc7cf1a997defb6a587b2029->leave($__internal_05afbc62a9e9f54ab25f5775008f58f2700c9ef8cc7cf1a997defb6a587b2029_prof);

            
            $__internal_a510afb628fa7da90321f404b62f17e9bf62e3321303700d527b9960275a1308->leave($__internal_a510afb628fa7da90321f404b62f17e9bf62e3321303700d527b9960275a1308_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 25,  335 => 24,  330 => 23,  324 => 22,  314 => 21,  311 => 20,  308 => 19,  305 => 18,  302 => 17,  299 => 12,  297 => 10,  296 => 9,  295 => 8,  294 => 7,  292 => 6,  289 => 5,  283 => 3,  280 => 2,  261 => 1,  244 => 59,  231 => 47,  224 => 46,  215 => 45,  204 => 53,  200 => 51,  186 => 50,  183 => 45,  166 => 44,  163 => 43,  161 => 42,  156 => 40,  145 => 39,  136 => 38,  126 => 56,  112 => 55,  109 => 38,  91 => 37,  82 => 36,  65 => 31,  55 => 59,  51 => 57,  49 => 36,  46 => 35,  44 => 34,  40 => 32,  38 => 31,  35 => 30,  33 => 29,  30 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro render_menu_item(item, translation_domain) %}
    {% if item.type == 'divider' %}
        {{ item.label|trans(domain = translation_domain) }}
    {% else %}
        {% set menu_params = { menuIndex: item.menu_index, submenuIndex: item.submenu_index } %}
        {% set path =
            item.type == 'link' ? item.url :
            item.type == 'route' ? path(item.route, item.params) :
            item.type == 'entity' ? path('easyadmin', { entity: item.entity, action: 'list' }|merge(menu_params)|merge(item.params)) :
            item.type == 'empty' ? '#' : ''
        %}

        {# if the URL generated for the route belongs to the backend, regenerate
           the URL to include the menu_params to display the selected menu item
           (this is checked comparing the beginning of the route URL with the backend homepage URL)
        #}
        {% if item.type == 'route' and (path starts with path('easyadmin')) %}
            {% set path = path(item.route, menu_params|merge(item.params)) %}
        {% endif %}

        <a href=\"{{ path }}\" {% if item.target|default(false) %}target=\"{{ item.target }}\"{% endif %}>
            {% if item.icon is not empty %}<i class=\"fa {{ item.icon }}\"></i>{% endif %}
            <span>{{ item.label|trans(domain = translation_domain) }}</span>
            {% if item.children|default([]) is not empty %}<i class=\"fa fa-angle-left pull-right\"></i>{% endif %}
        </a>
    {% endif %}
{% endmacro %}

{% import _self as helper %}

{% block main_menu_before %}{% endblock %}

<ul class=\"sidebar-menu\">
    {% set _menu_items = easyadmin_config('design.menu') %}

    {% block main_menu %}
        {% for item in _menu_items %}
            {% block menu_item %}
                <li class=\"{{ item.type == 'divider' ? 'header' }} {{ item.children is not empty ? 'treeview' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.index0 ? 'active' }} {{ app.request.query.get('submenuIndex')|default(-1) != -1 ? 'submenu-active' }}\">
                    {{ helper.render_menu_item(item, _entity_config.translation_domain|default('messages')) }}

                    {% if item.children|default([]) is not empty %}
                        <ul class=\"treeview-menu\">
                            {% for subitem in item.children %}
                                {% block menu_subitem %}
                                    <li class=\"{{ subitem.type == 'divider' ? 'header' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.parent.loop.index0 and app.request.query.get('submenuIndex')|default(-1) == loop.index0 ? 'active' }}\">
                                        {{ helper.render_menu_item(subitem, _entity_config.translation_domain|default('messages')) }}
                                    </li>
                                {% endblock menu_subitem %}
                            {% endfor %}
                        </ul>
                    {% endif %}
                </li>
            {% endblock menu_item %}
        {% endfor %}
    {% endblock main_menu %}
</ul>

{% block main_menu_after %}{% endblock %}
", "EasyAdminBundle:default:menu.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/menu.html.twig");
    }
}
