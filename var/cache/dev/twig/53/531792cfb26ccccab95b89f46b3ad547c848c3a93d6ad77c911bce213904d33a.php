<?php

/* EasyAdminBundle:default:menu.html.twig */
class __TwigTemplate_7c4f49b7e4bb031186b1b1793ce95116759e64baca0514ade119c99fa08cb7e7 extends Twig_Template
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
        $__internal_96ea5fb1b0aeafda31af89e399dea67a94f0208663e61dbd10c4645fd3187e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96ea5fb1b0aeafda31af89e399dea67a94f0208663e61dbd10c4645fd3187e37->enter($__internal_96ea5fb1b0aeafda31af89e399dea67a94f0208663e61dbd10c4645fd3187e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:menu.html.twig"));

        $__internal_5e18049c544a2f09c285c9cf6b07d1058970e9d23ec24f117165c5459bd37fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e18049c544a2f09c285c9cf6b07d1058970e9d23ec24f117165c5459bd37fc6->enter($__internal_5e18049c544a2f09c285c9cf6b07d1058970e9d23ec24f117165c5459bd37fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:menu.html.twig"));

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
        
        $__internal_96ea5fb1b0aeafda31af89e399dea67a94f0208663e61dbd10c4645fd3187e37->leave($__internal_96ea5fb1b0aeafda31af89e399dea67a94f0208663e61dbd10c4645fd3187e37_prof);

        
        $__internal_5e18049c544a2f09c285c9cf6b07d1058970e9d23ec24f117165c5459bd37fc6->leave($__internal_5e18049c544a2f09c285c9cf6b07d1058970e9d23ec24f117165c5459bd37fc6_prof);

    }

    // line 31
    public function block_main_menu_before($context, array $blocks = array())
    {
        $__internal_ecb9297f6dda0146b251454ada58113b9d4569d51773b3ede846c4a4fc16640f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecb9297f6dda0146b251454ada58113b9d4569d51773b3ede846c4a4fc16640f->enter($__internal_ecb9297f6dda0146b251454ada58113b9d4569d51773b3ede846c4a4fc16640f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        $__internal_26627714ddb72ae55dd020dbb95e54076893d256cb6d374fe45010ddafe3bebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26627714ddb72ae55dd020dbb95e54076893d256cb6d374fe45010ddafe3bebc->enter($__internal_26627714ddb72ae55dd020dbb95e54076893d256cb6d374fe45010ddafe3bebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        
        $__internal_26627714ddb72ae55dd020dbb95e54076893d256cb6d374fe45010ddafe3bebc->leave($__internal_26627714ddb72ae55dd020dbb95e54076893d256cb6d374fe45010ddafe3bebc_prof);

        
        $__internal_ecb9297f6dda0146b251454ada58113b9d4569d51773b3ede846c4a4fc16640f->leave($__internal_ecb9297f6dda0146b251454ada58113b9d4569d51773b3ede846c4a4fc16640f_prof);

    }

    // line 36
    public function block_main_menu($context, array $blocks = array())
    {
        $__internal_aa75de4c222f573f1fe925d57c3d723f984e2102c9b479b1d43e7fe0ee43d6ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa75de4c222f573f1fe925d57c3d723f984e2102c9b479b1d43e7fe0ee43d6ec->enter($__internal_aa75de4c222f573f1fe925d57c3d723f984e2102c9b479b1d43e7fe0ee43d6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        $__internal_6423b564f77594e3350767c2e145caca99cf623cb549197b7295c3ef7349e94e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6423b564f77594e3350767c2e145caca99cf623cb549197b7295c3ef7349e94e->enter($__internal_6423b564f77594e3350767c2e145caca99cf623cb549197b7295c3ef7349e94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

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
        
        $__internal_6423b564f77594e3350767c2e145caca99cf623cb549197b7295c3ef7349e94e->leave($__internal_6423b564f77594e3350767c2e145caca99cf623cb549197b7295c3ef7349e94e_prof);

        
        $__internal_aa75de4c222f573f1fe925d57c3d723f984e2102c9b479b1d43e7fe0ee43d6ec->leave($__internal_aa75de4c222f573f1fe925d57c3d723f984e2102c9b479b1d43e7fe0ee43d6ec_prof);

    }

    // line 38
    public function block_menu_item($context, array $blocks = array())
    {
        $__internal_88c44992cd49beb40cdd5180d65ad297f137a6d434b5df1591bdfc1d05cc88ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88c44992cd49beb40cdd5180d65ad297f137a6d434b5df1591bdfc1d05cc88ba->enter($__internal_88c44992cd49beb40cdd5180d65ad297f137a6d434b5df1591bdfc1d05cc88ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_item"));

        $__internal_7869187c686c08c8f9afd3fecfc557866c18f38a19bee002d6a44cc1aa3fc979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7869187c686c08c8f9afd3fecfc557866c18f38a19bee002d6a44cc1aa3fc979->enter($__internal_7869187c686c08c8f9afd3fecfc557866c18f38a19bee002d6a44cc1aa3fc979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_item"));

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
        
        $__internal_7869187c686c08c8f9afd3fecfc557866c18f38a19bee002d6a44cc1aa3fc979->leave($__internal_7869187c686c08c8f9afd3fecfc557866c18f38a19bee002d6a44cc1aa3fc979_prof);

        
        $__internal_88c44992cd49beb40cdd5180d65ad297f137a6d434b5df1591bdfc1d05cc88ba->leave($__internal_88c44992cd49beb40cdd5180d65ad297f137a6d434b5df1591bdfc1d05cc88ba_prof);

    }

    // line 45
    public function block_menu_subitem($context, array $blocks = array())
    {
        $__internal_9380fe49635074d4c657224964308429515be53906e4a10b6e01be9cec848065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9380fe49635074d4c657224964308429515be53906e4a10b6e01be9cec848065->enter($__internal_9380fe49635074d4c657224964308429515be53906e4a10b6e01be9cec848065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_subitem"));

        $__internal_4c670aef5941b8c4b30108f575ea968fca1bafccc0436103a510504af8ffcbb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c670aef5941b8c4b30108f575ea968fca1bafccc0436103a510504af8ffcbb7->enter($__internal_4c670aef5941b8c4b30108f575ea968fca1bafccc0436103a510504af8ffcbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_subitem"));

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
        
        $__internal_4c670aef5941b8c4b30108f575ea968fca1bafccc0436103a510504af8ffcbb7->leave($__internal_4c670aef5941b8c4b30108f575ea968fca1bafccc0436103a510504af8ffcbb7_prof);

        
        $__internal_9380fe49635074d4c657224964308429515be53906e4a10b6e01be9cec848065->leave($__internal_9380fe49635074d4c657224964308429515be53906e4a10b6e01be9cec848065_prof);

    }

    // line 59
    public function block_main_menu_after($context, array $blocks = array())
    {
        $__internal_534db251fa4cb0af49f12b11a674da94831ae5e2b0ab89e48b010024497da54f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_534db251fa4cb0af49f12b11a674da94831ae5e2b0ab89e48b010024497da54f->enter($__internal_534db251fa4cb0af49f12b11a674da94831ae5e2b0ab89e48b010024497da54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        $__internal_288eea6e75435df5806e9c245dcd339b58a8fc27945130f941eac4d4d8501d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288eea6e75435df5806e9c245dcd339b58a8fc27945130f941eac4d4d8501d87->enter($__internal_288eea6e75435df5806e9c245dcd339b58a8fc27945130f941eac4d4d8501d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        
        $__internal_288eea6e75435df5806e9c245dcd339b58a8fc27945130f941eac4d4d8501d87->leave($__internal_288eea6e75435df5806e9c245dcd339b58a8fc27945130f941eac4d4d8501d87_prof);

        
        $__internal_534db251fa4cb0af49f12b11a674da94831ae5e2b0ab89e48b010024497da54f->leave($__internal_534db251fa4cb0af49f12b11a674da94831ae5e2b0ab89e48b010024497da54f_prof);

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
            $__internal_4b5e28c36fe8a926a87bf5d6ecb793e3ca6d6923714abd19e0510d0ef84f16a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_4b5e28c36fe8a926a87bf5d6ecb793e3ca6d6923714abd19e0510d0ef84f16a9->enter($__internal_4b5e28c36fe8a926a87bf5d6ecb793e3ca6d6923714abd19e0510d0ef84f16a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            $__internal_d7e3223dfb8a190105cbb18e60986d2b481c28bed01b22a18a731cab559754b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_d7e3223dfb8a190105cbb18e60986d2b481c28bed01b22a18a731cab559754b2->enter($__internal_d7e3223dfb8a190105cbb18e60986d2b481c28bed01b22a18a731cab559754b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

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
                if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "route") && (is_string($__internal_b297d867cd52756331d6230325d1e41c5426757f57a809f3fa18033a6535d085 = ($context["path"] ?? $this->getContext($context, "path"))) && is_string($__internal_555d3dc4bc85f5c877ceb313bbfb6e5417853a94d406fb7a5b6fa293343a1594 = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin")) && ('' === $__internal_555d3dc4bc85f5c877ceb313bbfb6e5417853a94d406fb7a5b6fa293343a1594 || 0 === strpos($__internal_b297d867cd52756331d6230325d1e41c5426757f57a809f3fa18033a6535d085, $__internal_555d3dc4bc85f5c877ceb313bbfb6e5417853a94d406fb7a5b6fa293343a1594))))) {
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
            
            $__internal_d7e3223dfb8a190105cbb18e60986d2b481c28bed01b22a18a731cab559754b2->leave($__internal_d7e3223dfb8a190105cbb18e60986d2b481c28bed01b22a18a731cab559754b2_prof);

            
            $__internal_4b5e28c36fe8a926a87bf5d6ecb793e3ca6d6923714abd19e0510d0ef84f16a9->leave($__internal_4b5e28c36fe8a926a87bf5d6ecb793e3ca6d6923714abd19e0510d0ef84f16a9_prof);

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
