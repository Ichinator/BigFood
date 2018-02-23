<?php

/* EasyAdminBundle:default:layout.html.twig */
class __TwigTemplate_4b7a9a5138e852d4bb0514d776ae8a1548e26664f64ab25fd9b3a14e49306e25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b135f7a5a02ad213bda75f1540849280773e510493dbd513e4c387c99c92604c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b135f7a5a02ad213bda75f1540849280773e510493dbd513e4c387c99c92604c->enter($__internal_b135f7a5a02ad213bda75f1540849280773e510493dbd513e4c387c99c92604c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        $__internal_5f631af460d07c10d2c8e1b930a716ad278b884c0cc71b57a849094e1a05451c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f631af460d07c10d2c8e1b930a716ad278b884c0cc71b57a849094e1a05451c->enter($__internal_5f631af460d07c10d2c8e1b930a716ad278b884c0cc71b57a849094e1a05451c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "    </head>

    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 167
        echo "</html>
";
        
        $__internal_b135f7a5a02ad213bda75f1540849280773e510493dbd513e4c387c99c92604c->leave($__internal_b135f7a5a02ad213bda75f1540849280773e510493dbd513e4c387c99c92604c_prof);

        
        $__internal_5f631af460d07c10d2c8e1b930a716ad278b884c0cc71b57a849094e1a05451c->leave($__internal_5f631af460d07c10d2c8e1b930a716ad278b884c0cc71b57a849094e1a05451c_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_6614f018a616fbcb77989f066470a626009b0b86bcf1117495a54c9c4c62aeac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6614f018a616fbcb77989f066470a626009b0b86bcf1117495a54c9c4c62aeac->enter($__internal_6614f018a616fbcb77989f066470a626009b0b86bcf1117495a54c9c4c62aeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_806b860082f14ba5b10eb33862526dc9fbc33299a15f6dd7d6906b02798d2328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806b860082f14ba5b10eb33862526dc9fbc33299a15f6dd7d6906b02798d2328->enter($__internal_806b860082f14ba5b10eb33862526dc9fbc33299a15f6dd7d6906b02798d2328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_806b860082f14ba5b10eb33862526dc9fbc33299a15f6dd7d6906b02798d2328->leave($__internal_806b860082f14ba5b10eb33862526dc9fbc33299a15f6dd7d6906b02798d2328_prof);

        
        $__internal_6614f018a616fbcb77989f066470a626009b0b86bcf1117495a54c9c4c62aeac->leave($__internal_6614f018a616fbcb77989f066470a626009b0b86bcf1117495a54c9c4c62aeac_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_f9c5853ac1c86d51eba83966ca90943fd21c4f2b5d9fb6e659942b62ea09e5c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c5853ac1c86d51eba83966ca90943fd21c4f2b5d9fb6e659942b62ea09e5c9->enter($__internal_f9c5853ac1c86d51eba83966ca90943fd21c4f2b5d9fb6e659942b62ea09e5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_093b9df6f01a8ad25a71071861b8ed91c2e98ce19445f70d5bc6c324c7248a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_093b9df6f01a8ad25a71071861b8ed91c2e98ce19445f70d5bc6c324c7248a96->enter($__internal_093b9df6f01a8ad25a71071861b8ed91c2e98ce19445f70d5bc6c324c7248a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_093b9df6f01a8ad25a71071861b8ed91c2e98ce19445f70d5bc6c324c7248a96->leave($__internal_093b9df6f01a8ad25a71071861b8ed91c2e98ce19445f70d5bc6c324c7248a96_prof);

        
        $__internal_f9c5853ac1c86d51eba83966ca90943fd21c4f2b5d9fb6e659942b62ea09e5c9->leave($__internal_f9c5853ac1c86d51eba83966ca90943fd21c4f2b5d9fb6e659942b62ea09e5c9_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_1890d876229fc47c32509c4b6f23e45f6ffc145274ed8a2e401ff797a460dcaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1890d876229fc47c32509c4b6f23e45f6ffc145274ed8a2e401ff797a460dcaf->enter($__internal_1890d876229fc47c32509c4b6f23e45f6ffc145274ed8a2e401ff797a460dcaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_33a12a7f1223ea5a0814adf1db9ef1663ca53fcb53d6608637eb921d9e292670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a12a7f1223ea5a0814adf1db9ef1663ca53fcb53d6608637eb921d9e292670->enter($__internal_33a12a7f1223ea5a0814adf1db9ef1663ca53fcb53d6608637eb921d9e292670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_33a12a7f1223ea5a0814adf1db9ef1663ca53fcb53d6608637eb921d9e292670->leave($__internal_33a12a7f1223ea5a0814adf1db9ef1663ca53fcb53d6608637eb921d9e292670_prof);

        
        $__internal_1890d876229fc47c32509c4b6f23e45f6ffc145274ed8a2e401ff797a460dcaf->leave($__internal_1890d876229fc47c32509c4b6f23e45f6ffc145274ed8a2e401ff797a460dcaf_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_0473026a911bb8b1418c2b18a8f7756e960ef9576dc980841a2b15a01d3b9eb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0473026a911bb8b1418c2b18a8f7756e960ef9576dc980841a2b15a01d3b9eb2->enter($__internal_0473026a911bb8b1418c2b18a8f7756e960ef9576dc980841a2b15a01d3b9eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_688427ea3d3bb400b30a1b98475515671962420d9ed245161d941c16a73814dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688427ea3d3bb400b30a1b98475515671962420d9ed245161d941c16a73814dd->enter($__internal_688427ea3d3bb400b30a1b98475515671962420d9ed245161d941c16a73814dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_688427ea3d3bb400b30a1b98475515671962420d9ed245161d941c16a73814dd->leave($__internal_688427ea3d3bb400b30a1b98475515671962420d9ed245161d941c16a73814dd_prof);

        
        $__internal_0473026a911bb8b1418c2b18a8f7756e960ef9576dc980841a2b15a01d3b9eb2->leave($__internal_0473026a911bb8b1418c2b18a8f7756e960ef9576dc980841a2b15a01d3b9eb2_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_d157022eff8e3cd974a25c6baac0a608e5aa28c357f34be40e5377aac9abb62d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d157022eff8e3cd974a25c6baac0a608e5aa28c357f34be40e5377aac9abb62d->enter($__internal_d157022eff8e3cd974a25c6baac0a608e5aa28c357f34be40e5377aac9abb62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_3d67cfac5895770ad0f54846620de1e1b547964619d22e1763f3ea9c0a91cb7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d67cfac5895770ad0f54846620de1e1b547964619d22e1763f3ea9c0a91cb7f->enter($__internal_3d67cfac5895770ad0f54846620de1e1b547964619d22e1763f3ea9c0a91cb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_3d67cfac5895770ad0f54846620de1e1b547964619d22e1763f3ea9c0a91cb7f->leave($__internal_3d67cfac5895770ad0f54846620de1e1b547964619d22e1763f3ea9c0a91cb7f_prof);

        
        $__internal_d157022eff8e3cd974a25c6baac0a608e5aa28c357f34be40e5377aac9abb62d->leave($__internal_d157022eff8e3cd974a25c6baac0a608e5aa28c357f34be40e5377aac9abb62d_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_1113e95f221fba2bd0e972f82ae8ed32cec303b5bf4ad38fa3b0f757970dbf41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1113e95f221fba2bd0e972f82ae8ed32cec303b5bf4ad38fa3b0f757970dbf41->enter($__internal_1113e95f221fba2bd0e972f82ae8ed32cec303b5bf4ad38fa3b0f757970dbf41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ad1e87e1218818824626879d5df21a7bd1322eb7e63a72dbff5c7176018209f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad1e87e1218818824626879d5df21a7bd1322eb7e63a72dbff5c7176018209f->enter($__internal_7ad1e87e1218818824626879d5df21a7bd1322eb7e63a72dbff5c7176018209f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('wrapper', $context, $blocks);
        // line 158
        echo "        </div>

        ";
        // line 160
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 161
        echo "
        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 163
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "    </body>
    ";
        
        $__internal_7ad1e87e1218818824626879d5df21a7bd1322eb7e63a72dbff5c7176018209f->leave($__internal_7ad1e87e1218818824626879d5df21a7bd1322eb7e63a72dbff5c7176018209f_prof);

        
        $__internal_1113e95f221fba2bd0e972f82ae8ed32cec303b5bf4ad38fa3b0f757970dbf41->leave($__internal_1113e95f221fba2bd0e972f82ae8ed32cec303b5bf4ad38fa3b0f757970dbf41_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a40c8ad06f9a818ddc2012ad8e0a235360bc5cf9ca31776e9f412be43015cf86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a40c8ad06f9a818ddc2012ad8e0a235360bc5cf9ca31776e9f412be43015cf86->enter($__internal_a40c8ad06f9a818ddc2012ad8e0a235360bc5cf9ca31776e9f412be43015cf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_1d654b1252cfb1e02588e092c758fc43937932a2c5dd14335347cb7dd999bb96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d654b1252cfb1e02588e092c758fc43937932a2c5dd14335347cb7dd999bb96->enter($__internal_1d654b1252cfb1e02588e092c758fc43937932a2c5dd14335347cb7dd999bb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_1d654b1252cfb1e02588e092c758fc43937932a2c5dd14335347cb7dd999bb96->leave($__internal_1d654b1252cfb1e02588e092c758fc43937932a2c5dd14335347cb7dd999bb96_prof);

        
        $__internal_a40c8ad06f9a818ddc2012ad8e0a235360bc5cf9ca31776e9f412be43015cf86->leave($__internal_a40c8ad06f9a818ddc2012ad8e0a235360bc5cf9ca31776e9f412be43015cf86_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_daaad49307f9659f0f2c7d3ed23263212140d2c6633211d0881d66f31341c9c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daaad49307f9659f0f2c7d3ed23263212140d2c6633211d0881d66f31341c9c6->enter($__internal_daaad49307f9659f0f2c7d3ed23263212140d2c6633211d0881d66f31341c9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_f1428e351976dbfb82db848aa112811de4ced23ffa404b46109430ac5314899a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1428e351976dbfb82db848aa112811de4ced23ffa404b46109430ac5314899a->enter($__internal_f1428e351976dbfb82db848aa112811de4ced23ffa404b46109430ac5314899a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_f1428e351976dbfb82db848aa112811de4ced23ffa404b46109430ac5314899a->leave($__internal_f1428e351976dbfb82db848aa112811de4ced23ffa404b46109430ac5314899a_prof);

        
        $__internal_daaad49307f9659f0f2c7d3ed23263212140d2c6633211d0881d66f31341c9c6->leave($__internal_daaad49307f9659f0f2c7d3ed23263212140d2c6633211d0881d66f31341c9c6_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_84898b4cf7df7f532ad1ea27e2ca24b7a5aa62cb1e73db24aa47224ee57de9ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84898b4cf7df7f532ad1ea27e2ca24b7a5aa62cb1e73db24aa47224ee57de9ac->enter($__internal_84898b4cf7df7f532ad1ea27e2ca24b7a5aa62cb1e73db24aa47224ee57de9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_09b7a2d2fae8e7de21d004f1b7c5b930d703baa02c2d981d13e32139c74fcde9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b7a2d2fae8e7de21d004f1b7c5b930d703baa02c2d981d13e32139c74fcde9->enter($__internal_09b7a2d2fae8e7de21d004f1b7c5b930d703baa02c2d981d13e32139c74fcde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 56
        echo "            <header class=\"main-header\">
            ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 115
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 118
        $this->displayBlock('sidebar', $context, $blocks);
        // line 129
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 156
        echo "            </div>
        ";
        
        $__internal_09b7a2d2fae8e7de21d004f1b7c5b930d703baa02c2d981d13e32139c74fcde9->leave($__internal_09b7a2d2fae8e7de21d004f1b7c5b930d703baa02c2d981d13e32139c74fcde9_prof);

        
        $__internal_84898b4cf7df7f532ad1ea27e2ca24b7a5aa62cb1e73db24aa47224ee57de9ac->leave($__internal_84898b4cf7df7f532ad1ea27e2ca24b7a5aa62cb1e73db24aa47224ee57de9ac_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_77325556f5855ca740f356a1debb3c98855e863b83281334c33033ffced9410f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77325556f5855ca740f356a1debb3c98855e863b83281334c33033ffced9410f->enter($__internal_77325556f5855ca740f356a1debb3c98855e863b83281334c33033ffced9410f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_d77f3f62c2467841f70d28fd4fade11e799491d071ddcfaea1fe26fa0c934b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d77f3f62c2467841f70d28fd4fade11e799491d071ddcfaea1fe26fa0c934b08->enter($__internal_d77f3f62c2467841f70d28fd4fade11e799491d071ddcfaea1fe26fa0c934b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 58
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 64
        $this->displayBlock('header_logo', $context, $blocks);
        // line 69
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 72
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 112
        echo "                    </div>
                </nav>
            ";
        
        $__internal_d77f3f62c2467841f70d28fd4fade11e799491d071ddcfaea1fe26fa0c934b08->leave($__internal_d77f3f62c2467841f70d28fd4fade11e799491d071ddcfaea1fe26fa0c934b08_prof);

        
        $__internal_77325556f5855ca740f356a1debb3c98855e863b83281334c33033ffced9410f->leave($__internal_77325556f5855ca740f356a1debb3c98855e863b83281334c33033ffced9410f_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_8317f01301cd0c84a7f2e307c614a2cee3e24a54ec19253d3328cc86e43ba828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8317f01301cd0c84a7f2e307c614a2cee3e24a54ec19253d3328cc86e43ba828->enter($__internal_8317f01301cd0c84a7f2e307c614a2cee3e24a54ec19253d3328cc86e43ba828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_cca3be6de59643c5fd3a000272d32d05f755bd9780a55f4c54235339708b2f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca3be6de59643c5fd3a000272d32d05f755bd9780a55f4c54235339708b2f3a->enter($__internal_cca3be6de59643c5fd3a000272d32d05f755bd9780a55f4c54235339708b2f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 65
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 66
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_cca3be6de59643c5fd3a000272d32d05f755bd9780a55f4c54235339708b2f3a->leave($__internal_cca3be6de59643c5fd3a000272d32d05f755bd9780a55f4c54235339708b2f3a_prof);

        
        $__internal_8317f01301cd0c84a7f2e307c614a2cee3e24a54ec19253d3328cc86e43ba828->leave($__internal_8317f01301cd0c84a7f2e307c614a2cee3e24a54ec19253d3328cc86e43ba828_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_c0e7156b5498a439f502193ab494849fc733f90e7561f220671dca909775cfab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e7156b5498a439f502193ab494849fc733f90e7561f220671dca909775cfab->enter($__internal_c0e7156b5498a439f502193ab494849fc733f90e7561f220671dca909775cfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_c7f90de4e1db2e92f1abea2f456160a5188945da05f40d8df5d120e82e6d5881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f90de4e1db2e92f1abea2f456160a5188945da05f40d8df5d120e82e6d5881->enter($__internal_c7f90de4e1db2e92f1abea2f456160a5188945da05f40d8df5d120e82e6d5881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 73
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 74
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 76
        $this->displayBlock('user_menu', $context, $blocks);
        // line 109
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_c7f90de4e1db2e92f1abea2f456160a5188945da05f40d8df5d120e82e6d5881->leave($__internal_c7f90de4e1db2e92f1abea2f456160a5188945da05f40d8df5d120e82e6d5881_prof);

        
        $__internal_c0e7156b5498a439f502193ab494849fc733f90e7561f220671dca909775cfab->leave($__internal_c0e7156b5498a439f502193ab494849fc733f90e7561f220671dca909775cfab_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_25d664230151ea3c9149ee51a8e8d4de5373639daa124ccc99dbd7c7921f813e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d664230151ea3c9149ee51a8e8d4de5373639daa124ccc99dbd7c7921f813e->enter($__internal_25d664230151ea3c9149ee51a8e8d4de5373639daa124ccc99dbd7c7921f813e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_696b367a66faaa9570c08e85a9768595e4785df968d6186cc33e4b01b09adc6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696b367a66faaa9570c08e85a9768595e4785df968d6186cc33e4b01b09adc6d->enter($__internal_696b367a66faaa9570c08e85a9768595e4785df968d6186cc33e4b01b09adc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 77
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 79
        if (((($this->getAttribute(($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["app"] ?? null), "user", array()), false)) : (false)) == false)) {
            // line 80
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 82
($context["_logout_path"] ?? $this->getContext($context, "_logout_path"))) {
            // line 83
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 84
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 95
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 105
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 108
        echo "                                ";
        
        $__internal_696b367a66faaa9570c08e85a9768595e4785df968d6186cc33e4b01b09adc6d->leave($__internal_696b367a66faaa9570c08e85a9768595e4785df968d6186cc33e4b01b09adc6d_prof);

        
        $__internal_25d664230151ea3c9149ee51a8e8d4de5373639daa124ccc99dbd7c7921f813e->leave($__internal_25d664230151ea3c9149ee51a8e8d4de5373639daa124ccc99dbd7c7921f813e_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_cdfa6b74f9065826b4fa7187f4ac446824e458e2938186c6b49e363e55c7dc97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdfa6b74f9065826b4fa7187f4ac446824e458e2938186c6b49e363e55c7dc97->enter($__internal_cdfa6b74f9065826b4fa7187f4ac446824e458e2938186c6b49e363e55c7dc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_1ecc5e909bc2c2a1799336c80aa8551d621af3df5a6071f0ff2a2fabfec8b67f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ecc5e909bc2c2a1799336c80aa8551d621af3df5a6071f0ff2a2fabfec8b67f->enter($__internal_1ecc5e909bc2c2a1799336c80aa8551d621af3df5a6071f0ff2a2fabfec8b67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 96
        echo "                                                <li>
                                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["_logout_path"] ?? $this->getContext($context, "_logout_path")), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        // line 99
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN")) {
            // line 100
            echo "                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> ";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.exit_impersonation", array(), "EasyAdminBundle"), "html", null, true);
            echo "</a>
                                                    </li>
                                                ";
        }
        // line 104
        echo "                                                ";
        
        $__internal_1ecc5e909bc2c2a1799336c80aa8551d621af3df5a6071f0ff2a2fabfec8b67f->leave($__internal_1ecc5e909bc2c2a1799336c80aa8551d621af3df5a6071f0ff2a2fabfec8b67f_prof);

        
        $__internal_cdfa6b74f9065826b4fa7187f4ac446824e458e2938186c6b49e363e55c7dc97->leave($__internal_cdfa6b74f9065826b4fa7187f4ac446824e458e2938186c6b49e363e55c7dc97_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ca7b8005a09cd145c67ec45ebf717aa9f8f4d71999a12cc7b56d63db86512bc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca7b8005a09cd145c67ec45ebf717aa9f8f4d71999a12cc7b56d63db86512bc8->enter($__internal_ca7b8005a09cd145c67ec45ebf717aa9f8f4d71999a12cc7b56d63db86512bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_47fe6b08620bbc397e143b4e96f82731c30bc7684104d013d784fff7e90d1db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47fe6b08620bbc397e143b4e96f82731c30bc7684104d013d784fff7e90d1db6->enter($__internal_47fe6b08620bbc397e143b4e96f82731c30bc7684104d013d784fff7e90d1db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_47fe6b08620bbc397e143b4e96f82731c30bc7684104d013d784fff7e90d1db6->leave($__internal_47fe6b08620bbc397e143b4e96f82731c30bc7684104d013d784fff7e90d1db6_prof);

        
        $__internal_ca7b8005a09cd145c67ec45ebf717aa9f8f4d71999a12cc7b56d63db86512bc8->leave($__internal_ca7b8005a09cd145c67ec45ebf717aa9f8f4d71999a12cc7b56d63db86512bc8_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_3df0e666a8d7ce8e3b58429871adc428f83b5ab605b06b794a296aa8d92b51ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df0e666a8d7ce8e3b58429871adc428f83b5ab605b06b794a296aa8d92b51ee->enter($__internal_3df0e666a8d7ce8e3b58429871adc428f83b5ab605b06b794a296aa8d92b51ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_d83b135ca1d3ad2b5449b24f1a4a1b47d17a52d40919ca2b6d82f6f119574310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83b135ca1d3ad2b5449b24f1a4a1b47d17a52d40919ca2b6d82f6f119574310->enter($__internal_d83b135ca1d3ad2b5449b24f1a4a1b47d17a52d40919ca2b6d82f6f119574310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_d83b135ca1d3ad2b5449b24f1a4a1b47d17a52d40919ca2b6d82f6f119574310->leave($__internal_d83b135ca1d3ad2b5449b24f1a4a1b47d17a52d40919ca2b6d82f6f119574310_prof);

        
        $__internal_3df0e666a8d7ce8e3b58429871adc428f83b5ab605b06b794a296aa8d92b51ee->leave($__internal_3df0e666a8d7ce8e3b58429871adc428f83b5ab605b06b794a296aa8d92b51ee_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_675c1de17cb8db6846084068b319b1aed0d53165306be171349e8434711d5cb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_675c1de17cb8db6846084068b319b1aed0d53165306be171349e8434711d5cb4->enter($__internal_675c1de17cb8db6846084068b319b1aed0d53165306be171349e8434711d5cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_710dda49d266cad687178cfa85279f5bd5949e05e89b84ffe1d63d5da275a82c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710dda49d266cad687178cfa85279f5bd5949e05e89b84ffe1d63d5da275a82c->enter($__internal_710dda49d266cad687178cfa85279f5bd5949e05e89b84ffe1d63d5da275a82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 133
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 136
        echo "
                <section class=\"content-header\">
                ";
        // line 138
        $this->displayBlock('content_header', $context, $blocks);
        // line 141
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 150
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 153
        $this->displayBlock('main', $context, $blocks);
        // line 154
        echo "                </section>
            ";
        
        $__internal_710dda49d266cad687178cfa85279f5bd5949e05e89b84ffe1d63d5da275a82c->leave($__internal_710dda49d266cad687178cfa85279f5bd5949e05e89b84ffe1d63d5da275a82c_prof);

        
        $__internal_675c1de17cb8db6846084068b319b1aed0d53165306be171349e8434711d5cb4->leave($__internal_675c1de17cb8db6846084068b319b1aed0d53165306be171349e8434711d5cb4_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_4066175677aa75f60ff5523df15a5354721850e375c6ed59dd3bbf6e012d8f1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4066175677aa75f60ff5523df15a5354721850e375c6ed59dd3bbf6e012d8f1c->enter($__internal_4066175677aa75f60ff5523df15a5354721850e375c6ed59dd3bbf6e012d8f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_d10376ed7cf337ebbf171ae7f9530189ba487cce2813f96fa18efdaf6ed72b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10376ed7cf337ebbf171ae7f9530189ba487cce2813f96fa18efdaf6ed72b55->enter($__internal_d10376ed7cf337ebbf171ae7f9530189ba487cce2813f96fa18efdaf6ed72b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_d10376ed7cf337ebbf171ae7f9530189ba487cce2813f96fa18efdaf6ed72b55->leave($__internal_d10376ed7cf337ebbf171ae7f9530189ba487cce2813f96fa18efdaf6ed72b55_prof);

        
        $__internal_4066175677aa75f60ff5523df15a5354721850e375c6ed59dd3bbf6e012d8f1c->leave($__internal_4066175677aa75f60ff5523df15a5354721850e375c6ed59dd3bbf6e012d8f1c_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_8b86e5ca482e2a4944ae9adf541690fa49c7c52aa5de02f5275cc5431292c2f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b86e5ca482e2a4944ae9adf541690fa49c7c52aa5de02f5275cc5431292c2f5->enter($__internal_8b86e5ca482e2a4944ae9adf541690fa49c7c52aa5de02f5275cc5431292c2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_e0d2c9a66cfd59940a473d98a810cd49d8840a4fc1798d6f5cf3354cd8d08b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d2c9a66cfd59940a473d98a810cd49d8840a4fc1798d6f5cf3354cd8d08b30->enter($__internal_e0d2c9a66cfd59940a473d98a810cd49d8840a4fc1798d6f5cf3354cd8d08b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_e0d2c9a66cfd59940a473d98a810cd49d8840a4fc1798d6f5cf3354cd8d08b30->leave($__internal_e0d2c9a66cfd59940a473d98a810cd49d8840a4fc1798d6f5cf3354cd8d08b30_prof);

        
        $__internal_8b86e5ca482e2a4944ae9adf541690fa49c7c52aa5de02f5275cc5431292c2f5->leave($__internal_8b86e5ca482e2a4944ae9adf541690fa49c7c52aa5de02f5275cc5431292c2f5_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_217855989c7f212979777b45190cff0285ee50621c26279e22e3bc3667dbf2d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_217855989c7f212979777b45190cff0285ee50621c26279e22e3bc3667dbf2d0->enter($__internal_217855989c7f212979777b45190cff0285ee50621c26279e22e3bc3667dbf2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_310db4f338b1da0e4862c7047f2ecdd9ff8f04658f51dad844cf60bce1b98ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_310db4f338b1da0e4862c7047f2ecdd9ff8f04658f51dad844cf60bce1b98ca7->enter($__internal_310db4f338b1da0e4862c7047f2ecdd9ff8f04658f51dad844cf60bce1b98ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_310db4f338b1da0e4862c7047f2ecdd9ff8f04658f51dad844cf60bce1b98ca7->leave($__internal_310db4f338b1da0e4862c7047f2ecdd9ff8f04658f51dad844cf60bce1b98ca7_prof);

        
        $__internal_217855989c7f212979777b45190cff0285ee50621c26279e22e3bc3667dbf2d0->leave($__internal_217855989c7f212979777b45190cff0285ee50621c26279e22e3bc3667dbf2d0_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_fa1df1cdf3be67256f8f2267b1e6b77906679c0d80b8b4301365eb080439f5f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1df1cdf3be67256f8f2267b1e6b77906679c0d80b8b4301365eb080439f5f9->enter($__internal_fa1df1cdf3be67256f8f2267b1e6b77906679c0d80b8b4301365eb080439f5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_5a6b64cc1a916004a8a86016485ef258b0dabe30abb00149dfce05d803990ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a6b64cc1a916004a8a86016485ef258b0dabe30abb00149dfce05d803990ecf->enter($__internal_5a6b64cc1a916004a8a86016485ef258b0dabe30abb00149dfce05d803990ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 142
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 143
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 149
        echo "                ";
        
        $__internal_5a6b64cc1a916004a8a86016485ef258b0dabe30abb00149dfce05d803990ecf->leave($__internal_5a6b64cc1a916004a8a86016485ef258b0dabe30abb00149dfce05d803990ecf_prof);

        
        $__internal_fa1df1cdf3be67256f8f2267b1e6b77906679c0d80b8b4301365eb080439f5f9->leave($__internal_fa1df1cdf3be67256f8f2267b1e6b77906679c0d80b8b4301365eb080439f5f9_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_e11094e562376512fd2e02158caf9da28f1cd37489048d231685bcd9ab4ea6af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e11094e562376512fd2e02158caf9da28f1cd37489048d231685bcd9ab4ea6af->enter($__internal_e11094e562376512fd2e02158caf9da28f1cd37489048d231685bcd9ab4ea6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_79cc0fc76ba624eab9224f817ed7dbe7f6372ee7db8dbcedadb9ec6586d9fd40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79cc0fc76ba624eab9224f817ed7dbe7f6372ee7db8dbcedadb9ec6586d9fd40->enter($__internal_79cc0fc76ba624eab9224f817ed7dbe7f6372ee7db8dbcedadb9ec6586d9fd40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_79cc0fc76ba624eab9224f817ed7dbe7f6372ee7db8dbcedadb9ec6586d9fd40->leave($__internal_79cc0fc76ba624eab9224f817ed7dbe7f6372ee7db8dbcedadb9ec6586d9fd40_prof);

        
        $__internal_e11094e562376512fd2e02158caf9da28f1cd37489048d231685bcd9ab4ea6af->leave($__internal_e11094e562376512fd2e02158caf9da28f1cd37489048d231685bcd9ab4ea6af_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_a0b5e16ce51018b7ee5bfd2987598bd76fcc6d2cd4aa6e2b3bb6524645e51771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b5e16ce51018b7ee5bfd2987598bd76fcc6d2cd4aa6e2b3bb6524645e51771->enter($__internal_a0b5e16ce51018b7ee5bfd2987598bd76fcc6d2cd4aa6e2b3bb6524645e51771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_69cceb0a6085a35eda3015f4826a710b5ad8a266d60c6eed172442dcf8bf5477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69cceb0a6085a35eda3015f4826a710b5ad8a266d60c6eed172442dcf8bf5477->enter($__internal_69cceb0a6085a35eda3015f4826a710b5ad8a266d60c6eed172442dcf8bf5477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_69cceb0a6085a35eda3015f4826a710b5ad8a266d60c6eed172442dcf8bf5477->leave($__internal_69cceb0a6085a35eda3015f4826a710b5ad8a266d60c6eed172442dcf8bf5477_prof);

        
        $__internal_a0b5e16ce51018b7ee5bfd2987598bd76fcc6d2cd4aa6e2b3bb6524645e51771->leave($__internal_a0b5e16ce51018b7ee5bfd2987598bd76fcc6d2cd4aa6e2b3bb6524645e51771_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  788 => 160,  771 => 153,  761 => 149,  754 => 145,  750 => 143,  747 => 142,  738 => 141,  709 => 139,  700 => 138,  687 => 134,  678 => 133,  667 => 154,  665 => 153,  660 => 150,  657 => 141,  655 => 138,  651 => 136,  648 => 133,  639 => 132,  628 => 125,  626 => 122,  624 => 121,  615 => 120,  604 => 127,  602 => 120,  599 => 119,  590 => 118,  580 => 104,  574 => 101,  571 => 100,  569 => 99,  562 => 97,  559 => 96,  550 => 95,  540 => 108,  535 => 105,  533 => 95,  524 => 89,  519 => 86,  514 => 84,  511 => 83,  509 => 82,  505 => 81,  502 => 80,  500 => 79,  494 => 77,  485 => 76,  473 => 109,  471 => 76,  467 => 74,  464 => 73,  455 => 72,  442 => 66,  433 => 65,  424 => 64,  412 => 112,  410 => 72,  405 => 69,  403 => 64,  396 => 60,  392 => 58,  383 => 57,  372 => 156,  370 => 132,  365 => 129,  363 => 118,  358 => 115,  356 => 57,  353 => 56,  344 => 55,  311 => 53,  300 => 165,  291 => 163,  287 => 162,  284 => 161,  282 => 160,  278 => 158,  276 => 55,  266 => 53,  257 => 52,  236 => 30,  227 => 29,  215 => 43,  212 => 42,  209 => 29,  200 => 28,  185 => 25,  182 => 24,  173 => 23,  160 => 15,  154 => 13,  145 => 12,  127 => 10,  116 => 167,  114 => 52,  110 => 50,  105 => 48,  100 => 47,  98 => 46,  95 => 45,  93 => 28,  90 => 27,  88 => 23,  85 => 22,  76 => 20,  72 => 19,  69 => 18,  67 => 12,  62 => 10,  51 => 2,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% if is_granted('ROLE_PREVIOUS_ADMIN') %}
                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> {{ 'user.exit_impersonation'|trans(domain = 'EasyAdminBundle') }}</a>
                                                    </li>
                                                {% endif %}
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "EasyAdminBundle:default:layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
