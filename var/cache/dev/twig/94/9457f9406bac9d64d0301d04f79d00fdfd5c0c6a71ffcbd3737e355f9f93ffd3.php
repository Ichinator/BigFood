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
        $__internal_d2283b591fb82b3a984c0e4542eb8188f6051eb354ef68cd2e413db77ffcfec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2283b591fb82b3a984c0e4542eb8188f6051eb354ef68cd2e413db77ffcfec6->enter($__internal_d2283b591fb82b3a984c0e4542eb8188f6051eb354ef68cd2e413db77ffcfec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        $__internal_21a2992825a8998afb95e2ff4ec23c6c33d3a710ef9baa1b09239a994107b487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a2992825a8998afb95e2ff4ec23c6c33d3a710ef9baa1b09239a994107b487->enter($__internal_21a2992825a8998afb95e2ff4ec23c6c33d3a710ef9baa1b09239a994107b487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

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
        
        $__internal_d2283b591fb82b3a984c0e4542eb8188f6051eb354ef68cd2e413db77ffcfec6->leave($__internal_d2283b591fb82b3a984c0e4542eb8188f6051eb354ef68cd2e413db77ffcfec6_prof);

        
        $__internal_21a2992825a8998afb95e2ff4ec23c6c33d3a710ef9baa1b09239a994107b487->leave($__internal_21a2992825a8998afb95e2ff4ec23c6c33d3a710ef9baa1b09239a994107b487_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_3df137f635c40eebce621de4ac53d2f623f9ef6d06dcce08de3bcad16ade1a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df137f635c40eebce621de4ac53d2f623f9ef6d06dcce08de3bcad16ade1a14->enter($__internal_3df137f635c40eebce621de4ac53d2f623f9ef6d06dcce08de3bcad16ade1a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_0185b66e751e07e04055bcd96c27fc23a87c86a126d3e0ffd56eadf9c395c9c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0185b66e751e07e04055bcd96c27fc23a87c86a126d3e0ffd56eadf9c395c9c7->enter($__internal_0185b66e751e07e04055bcd96c27fc23a87c86a126d3e0ffd56eadf9c395c9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_0185b66e751e07e04055bcd96c27fc23a87c86a126d3e0ffd56eadf9c395c9c7->leave($__internal_0185b66e751e07e04055bcd96c27fc23a87c86a126d3e0ffd56eadf9c395c9c7_prof);

        
        $__internal_3df137f635c40eebce621de4ac53d2f623f9ef6d06dcce08de3bcad16ade1a14->leave($__internal_3df137f635c40eebce621de4ac53d2f623f9ef6d06dcce08de3bcad16ade1a14_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_48f81cf24693a2fba82c69e2667080f819b17ed1e3c5293728bf0bc192b5de06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48f81cf24693a2fba82c69e2667080f819b17ed1e3c5293728bf0bc192b5de06->enter($__internal_48f81cf24693a2fba82c69e2667080f819b17ed1e3c5293728bf0bc192b5de06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_2b1469f8fa94eac06a8d589aa41a71227f0bc4473a9c53da14bc476ad83363aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b1469f8fa94eac06a8d589aa41a71227f0bc4473a9c53da14bc476ad83363aa->enter($__internal_2b1469f8fa94eac06a8d589aa41a71227f0bc4473a9c53da14bc476ad83363aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_2b1469f8fa94eac06a8d589aa41a71227f0bc4473a9c53da14bc476ad83363aa->leave($__internal_2b1469f8fa94eac06a8d589aa41a71227f0bc4473a9c53da14bc476ad83363aa_prof);

        
        $__internal_48f81cf24693a2fba82c69e2667080f819b17ed1e3c5293728bf0bc192b5de06->leave($__internal_48f81cf24693a2fba82c69e2667080f819b17ed1e3c5293728bf0bc192b5de06_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_74a659bbe19d5830f0f7e3b5f58110f5355b029bedd5661eab6fd17589164771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74a659bbe19d5830f0f7e3b5f58110f5355b029bedd5661eab6fd17589164771->enter($__internal_74a659bbe19d5830f0f7e3b5f58110f5355b029bedd5661eab6fd17589164771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_44a2b141bd4bc5980096367bde55a6b87c43da13ea951e7d72dd871a2423d033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a2b141bd4bc5980096367bde55a6b87c43da13ea951e7d72dd871a2423d033->enter($__internal_44a2b141bd4bc5980096367bde55a6b87c43da13ea951e7d72dd871a2423d033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_44a2b141bd4bc5980096367bde55a6b87c43da13ea951e7d72dd871a2423d033->leave($__internal_44a2b141bd4bc5980096367bde55a6b87c43da13ea951e7d72dd871a2423d033_prof);

        
        $__internal_74a659bbe19d5830f0f7e3b5f58110f5355b029bedd5661eab6fd17589164771->leave($__internal_74a659bbe19d5830f0f7e3b5f58110f5355b029bedd5661eab6fd17589164771_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_5a87a00fa2e815b9ee1ec24b539697bf2540738ccbe7d3fec9904f177f8dc30c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a87a00fa2e815b9ee1ec24b539697bf2540738ccbe7d3fec9904f177f8dc30c->enter($__internal_5a87a00fa2e815b9ee1ec24b539697bf2540738ccbe7d3fec9904f177f8dc30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_d7cd1e1f132aa762656129757ad6103161d83e896af28fac498a474ecd48e01a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7cd1e1f132aa762656129757ad6103161d83e896af28fac498a474ecd48e01a->enter($__internal_d7cd1e1f132aa762656129757ad6103161d83e896af28fac498a474ecd48e01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_d7cd1e1f132aa762656129757ad6103161d83e896af28fac498a474ecd48e01a->leave($__internal_d7cd1e1f132aa762656129757ad6103161d83e896af28fac498a474ecd48e01a_prof);

        
        $__internal_5a87a00fa2e815b9ee1ec24b539697bf2540738ccbe7d3fec9904f177f8dc30c->leave($__internal_5a87a00fa2e815b9ee1ec24b539697bf2540738ccbe7d3fec9904f177f8dc30c_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_88fb3c99a07bc15dcb1e95894b1e878ea8633a5fd162774c8c24baafd15373b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88fb3c99a07bc15dcb1e95894b1e878ea8633a5fd162774c8c24baafd15373b5->enter($__internal_88fb3c99a07bc15dcb1e95894b1e878ea8633a5fd162774c8c24baafd15373b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_ab27daf63fd0bbaee0426329effcdb9f2451de122ef001466207e3c52f227aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab27daf63fd0bbaee0426329effcdb9f2451de122ef001466207e3c52f227aea->enter($__internal_ab27daf63fd0bbaee0426329effcdb9f2451de122ef001466207e3c52f227aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_ab27daf63fd0bbaee0426329effcdb9f2451de122ef001466207e3c52f227aea->leave($__internal_ab27daf63fd0bbaee0426329effcdb9f2451de122ef001466207e3c52f227aea_prof);

        
        $__internal_88fb3c99a07bc15dcb1e95894b1e878ea8633a5fd162774c8c24baafd15373b5->leave($__internal_88fb3c99a07bc15dcb1e95894b1e878ea8633a5fd162774c8c24baafd15373b5_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_24be5f444c89bbc68146aa5d47208c3dfa389e2a635ee4423c9392e0cd544ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24be5f444c89bbc68146aa5d47208c3dfa389e2a635ee4423c9392e0cd544ac2->enter($__internal_24be5f444c89bbc68146aa5d47208c3dfa389e2a635ee4423c9392e0cd544ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78075d20a0c248cd33f62cffe019ca948d21448b594a9daab1ae7e5c4743d4f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78075d20a0c248cd33f62cffe019ca948d21448b594a9daab1ae7e5c4743d4f7->enter($__internal_78075d20a0c248cd33f62cffe019ca948d21448b594a9daab1ae7e5c4743d4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_78075d20a0c248cd33f62cffe019ca948d21448b594a9daab1ae7e5c4743d4f7->leave($__internal_78075d20a0c248cd33f62cffe019ca948d21448b594a9daab1ae7e5c4743d4f7_prof);

        
        $__internal_24be5f444c89bbc68146aa5d47208c3dfa389e2a635ee4423c9392e0cd544ac2->leave($__internal_24be5f444c89bbc68146aa5d47208c3dfa389e2a635ee4423c9392e0cd544ac2_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_8f84828073e1bcfe6ce24673a89c98ee782df01159a2e8158bde888d728b671e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f84828073e1bcfe6ce24673a89c98ee782df01159a2e8158bde888d728b671e->enter($__internal_8f84828073e1bcfe6ce24673a89c98ee782df01159a2e8158bde888d728b671e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_84f0fec90f205cdb5cd5be9eccbd88da6aed4e8b7c3d66f71c2dd038f09a15e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f0fec90f205cdb5cd5be9eccbd88da6aed4e8b7c3d66f71c2dd038f09a15e1->enter($__internal_84f0fec90f205cdb5cd5be9eccbd88da6aed4e8b7c3d66f71c2dd038f09a15e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_84f0fec90f205cdb5cd5be9eccbd88da6aed4e8b7c3d66f71c2dd038f09a15e1->leave($__internal_84f0fec90f205cdb5cd5be9eccbd88da6aed4e8b7c3d66f71c2dd038f09a15e1_prof);

        
        $__internal_8f84828073e1bcfe6ce24673a89c98ee782df01159a2e8158bde888d728b671e->leave($__internal_8f84828073e1bcfe6ce24673a89c98ee782df01159a2e8158bde888d728b671e_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_9867e5e15ccb147f54d2b9b8fa83710e0669fa840334708a9f41e2ec46ba2fa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9867e5e15ccb147f54d2b9b8fa83710e0669fa840334708a9f41e2ec46ba2fa9->enter($__internal_9867e5e15ccb147f54d2b9b8fa83710e0669fa840334708a9f41e2ec46ba2fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_2393c4cde695ee3ed313df0af438659779edec55fc0d7769fd1382f1cafcc220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2393c4cde695ee3ed313df0af438659779edec55fc0d7769fd1382f1cafcc220->enter($__internal_2393c4cde695ee3ed313df0af438659779edec55fc0d7769fd1382f1cafcc220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_2393c4cde695ee3ed313df0af438659779edec55fc0d7769fd1382f1cafcc220->leave($__internal_2393c4cde695ee3ed313df0af438659779edec55fc0d7769fd1382f1cafcc220_prof);

        
        $__internal_9867e5e15ccb147f54d2b9b8fa83710e0669fa840334708a9f41e2ec46ba2fa9->leave($__internal_9867e5e15ccb147f54d2b9b8fa83710e0669fa840334708a9f41e2ec46ba2fa9_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_d2226a7655d4d8d34d47ac3814d57c7d5aa7eae74cb05487c668d92af9560f37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2226a7655d4d8d34d47ac3814d57c7d5aa7eae74cb05487c668d92af9560f37->enter($__internal_d2226a7655d4d8d34d47ac3814d57c7d5aa7eae74cb05487c668d92af9560f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_1f462d633292edb7f97aaab765bbc30c8b42debe39c86194e4564208ce40aa6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f462d633292edb7f97aaab765bbc30c8b42debe39c86194e4564208ce40aa6c->enter($__internal_1f462d633292edb7f97aaab765bbc30c8b42debe39c86194e4564208ce40aa6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_1f462d633292edb7f97aaab765bbc30c8b42debe39c86194e4564208ce40aa6c->leave($__internal_1f462d633292edb7f97aaab765bbc30c8b42debe39c86194e4564208ce40aa6c_prof);

        
        $__internal_d2226a7655d4d8d34d47ac3814d57c7d5aa7eae74cb05487c668d92af9560f37->leave($__internal_d2226a7655d4d8d34d47ac3814d57c7d5aa7eae74cb05487c668d92af9560f37_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_ac95763c6ccc54334e6a4fe4b881b07faf3dece0741a653443cc0372238ea66c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac95763c6ccc54334e6a4fe4b881b07faf3dece0741a653443cc0372238ea66c->enter($__internal_ac95763c6ccc54334e6a4fe4b881b07faf3dece0741a653443cc0372238ea66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_9bc6aede170e2f1a5cc17b4d064933bb899dc19066faf375a2961152e3154400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc6aede170e2f1a5cc17b4d064933bb899dc19066faf375a2961152e3154400->enter($__internal_9bc6aede170e2f1a5cc17b4d064933bb899dc19066faf375a2961152e3154400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_9bc6aede170e2f1a5cc17b4d064933bb899dc19066faf375a2961152e3154400->leave($__internal_9bc6aede170e2f1a5cc17b4d064933bb899dc19066faf375a2961152e3154400_prof);

        
        $__internal_ac95763c6ccc54334e6a4fe4b881b07faf3dece0741a653443cc0372238ea66c->leave($__internal_ac95763c6ccc54334e6a4fe4b881b07faf3dece0741a653443cc0372238ea66c_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_408db367d1d5e488315b904805ede3c211e1a1998507b8dd3f42e7172ba73d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408db367d1d5e488315b904805ede3c211e1a1998507b8dd3f42e7172ba73d0b->enter($__internal_408db367d1d5e488315b904805ede3c211e1a1998507b8dd3f42e7172ba73d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_a54bdc39ee24da94d4cdbe6e8012f5c06bf4447092de5280049621a8eeb9e51e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54bdc39ee24da94d4cdbe6e8012f5c06bf4447092de5280049621a8eeb9e51e->enter($__internal_a54bdc39ee24da94d4cdbe6e8012f5c06bf4447092de5280049621a8eeb9e51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_a54bdc39ee24da94d4cdbe6e8012f5c06bf4447092de5280049621a8eeb9e51e->leave($__internal_a54bdc39ee24da94d4cdbe6e8012f5c06bf4447092de5280049621a8eeb9e51e_prof);

        
        $__internal_408db367d1d5e488315b904805ede3c211e1a1998507b8dd3f42e7172ba73d0b->leave($__internal_408db367d1d5e488315b904805ede3c211e1a1998507b8dd3f42e7172ba73d0b_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_ac2cf4bd82f00517beb6cf29bd4bd2c20f425e772041726983127a0b6eeba5e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac2cf4bd82f00517beb6cf29bd4bd2c20f425e772041726983127a0b6eeba5e2->enter($__internal_ac2cf4bd82f00517beb6cf29bd4bd2c20f425e772041726983127a0b6eeba5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_fc44d003eade1a6ce60a12f1767fd52b19a674871ba6591f2db7f7f526a32a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc44d003eade1a6ce60a12f1767fd52b19a674871ba6591f2db7f7f526a32a78->enter($__internal_fc44d003eade1a6ce60a12f1767fd52b19a674871ba6591f2db7f7f526a32a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_fc44d003eade1a6ce60a12f1767fd52b19a674871ba6591f2db7f7f526a32a78->leave($__internal_fc44d003eade1a6ce60a12f1767fd52b19a674871ba6591f2db7f7f526a32a78_prof);

        
        $__internal_ac2cf4bd82f00517beb6cf29bd4bd2c20f425e772041726983127a0b6eeba5e2->leave($__internal_ac2cf4bd82f00517beb6cf29bd4bd2c20f425e772041726983127a0b6eeba5e2_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_2615009f47263b0946dd33a557fba14dcbe7a76621758f673c7dec25e41f981e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2615009f47263b0946dd33a557fba14dcbe7a76621758f673c7dec25e41f981e->enter($__internal_2615009f47263b0946dd33a557fba14dcbe7a76621758f673c7dec25e41f981e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_fd55d6ee76e858e360aea64dd9b4dcdada1270e5237e14a3d2eb2822ae5d7d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd55d6ee76e858e360aea64dd9b4dcdada1270e5237e14a3d2eb2822ae5d7d67->enter($__internal_fd55d6ee76e858e360aea64dd9b4dcdada1270e5237e14a3d2eb2822ae5d7d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_fd55d6ee76e858e360aea64dd9b4dcdada1270e5237e14a3d2eb2822ae5d7d67->leave($__internal_fd55d6ee76e858e360aea64dd9b4dcdada1270e5237e14a3d2eb2822ae5d7d67_prof);

        
        $__internal_2615009f47263b0946dd33a557fba14dcbe7a76621758f673c7dec25e41f981e->leave($__internal_2615009f47263b0946dd33a557fba14dcbe7a76621758f673c7dec25e41f981e_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_b36d5411530b0630dd62494852628daede985f415d18ee782e999225d82377f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b36d5411530b0630dd62494852628daede985f415d18ee782e999225d82377f2->enter($__internal_b36d5411530b0630dd62494852628daede985f415d18ee782e999225d82377f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_c414ba7a9039e443830b23787a1c32224adc5e71c870b9fab1dde5f28c90c6b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c414ba7a9039e443830b23787a1c32224adc5e71c870b9fab1dde5f28c90c6b9->enter($__internal_c414ba7a9039e443830b23787a1c32224adc5e71c870b9fab1dde5f28c90c6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

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
        
        $__internal_c414ba7a9039e443830b23787a1c32224adc5e71c870b9fab1dde5f28c90c6b9->leave($__internal_c414ba7a9039e443830b23787a1c32224adc5e71c870b9fab1dde5f28c90c6b9_prof);

        
        $__internal_b36d5411530b0630dd62494852628daede985f415d18ee782e999225d82377f2->leave($__internal_b36d5411530b0630dd62494852628daede985f415d18ee782e999225d82377f2_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ad9a913af422036051401042177054aecfc69b90366ce011e5596989ac5d8cd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad9a913af422036051401042177054aecfc69b90366ce011e5596989ac5d8cd8->enter($__internal_ad9a913af422036051401042177054aecfc69b90366ce011e5596989ac5d8cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_fef28a106b8d15e7282757d8eac55cd80485d2eeeeaf6a3aeda1d648539ba5c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef28a106b8d15e7282757d8eac55cd80485d2eeeeaf6a3aeda1d648539ba5c6->enter($__internal_fef28a106b8d15e7282757d8eac55cd80485d2eeeeaf6a3aeda1d648539ba5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_fef28a106b8d15e7282757d8eac55cd80485d2eeeeaf6a3aeda1d648539ba5c6->leave($__internal_fef28a106b8d15e7282757d8eac55cd80485d2eeeeaf6a3aeda1d648539ba5c6_prof);

        
        $__internal_ad9a913af422036051401042177054aecfc69b90366ce011e5596989ac5d8cd8->leave($__internal_ad9a913af422036051401042177054aecfc69b90366ce011e5596989ac5d8cd8_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_c370210d64dced6230f079a6382f8882cc42b9488a3ad9853286596aff56bd42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c370210d64dced6230f079a6382f8882cc42b9488a3ad9853286596aff56bd42->enter($__internal_c370210d64dced6230f079a6382f8882cc42b9488a3ad9853286596aff56bd42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_90a1ec11731a6782eca56c112208fab4fbf47542f5e90fffb1a7ddbc1f980ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a1ec11731a6782eca56c112208fab4fbf47542f5e90fffb1a7ddbc1f980ec9->enter($__internal_90a1ec11731a6782eca56c112208fab4fbf47542f5e90fffb1a7ddbc1f980ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_90a1ec11731a6782eca56c112208fab4fbf47542f5e90fffb1a7ddbc1f980ec9->leave($__internal_90a1ec11731a6782eca56c112208fab4fbf47542f5e90fffb1a7ddbc1f980ec9_prof);

        
        $__internal_c370210d64dced6230f079a6382f8882cc42b9488a3ad9853286596aff56bd42->leave($__internal_c370210d64dced6230f079a6382f8882cc42b9488a3ad9853286596aff56bd42_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_f73f5e09de70ed6e6cc81fa8e74cdd4ffef8457cf52f1593307e27af046a2b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f73f5e09de70ed6e6cc81fa8e74cdd4ffef8457cf52f1593307e27af046a2b2c->enter($__internal_f73f5e09de70ed6e6cc81fa8e74cdd4ffef8457cf52f1593307e27af046a2b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_960d472aa8546547fc104f77ddf17bdb0aeab84cc3f99c69f3be9ef6ece6d1eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960d472aa8546547fc104f77ddf17bdb0aeab84cc3f99c69f3be9ef6ece6d1eb->enter($__internal_960d472aa8546547fc104f77ddf17bdb0aeab84cc3f99c69f3be9ef6ece6d1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_960d472aa8546547fc104f77ddf17bdb0aeab84cc3f99c69f3be9ef6ece6d1eb->leave($__internal_960d472aa8546547fc104f77ddf17bdb0aeab84cc3f99c69f3be9ef6ece6d1eb_prof);

        
        $__internal_f73f5e09de70ed6e6cc81fa8e74cdd4ffef8457cf52f1593307e27af046a2b2c->leave($__internal_f73f5e09de70ed6e6cc81fa8e74cdd4ffef8457cf52f1593307e27af046a2b2c_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_cad449dd01d2ed40269067adcb10adffef48b4352ef2e20a46c4948b9c2848ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cad449dd01d2ed40269067adcb10adffef48b4352ef2e20a46c4948b9c2848ae->enter($__internal_cad449dd01d2ed40269067adcb10adffef48b4352ef2e20a46c4948b9c2848ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_8ccf10b917ad7848e9879b41819378e1786c6bd4ba6afa9251e0f3885a909780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ccf10b917ad7848e9879b41819378e1786c6bd4ba6afa9251e0f3885a909780->enter($__internal_8ccf10b917ad7848e9879b41819378e1786c6bd4ba6afa9251e0f3885a909780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_8ccf10b917ad7848e9879b41819378e1786c6bd4ba6afa9251e0f3885a909780->leave($__internal_8ccf10b917ad7848e9879b41819378e1786c6bd4ba6afa9251e0f3885a909780_prof);

        
        $__internal_cad449dd01d2ed40269067adcb10adffef48b4352ef2e20a46c4948b9c2848ae->leave($__internal_cad449dd01d2ed40269067adcb10adffef48b4352ef2e20a46c4948b9c2848ae_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_19a4903dc3866f4c4f1b9a3c30ec065ed3cf8e128a4b1dbfd63a0a78aa858a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19a4903dc3866f4c4f1b9a3c30ec065ed3cf8e128a4b1dbfd63a0a78aa858a33->enter($__internal_19a4903dc3866f4c4f1b9a3c30ec065ed3cf8e128a4b1dbfd63a0a78aa858a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_5e97f9b73c6109c6eedeb85962e9ae589f961032c9ef4906bb6af58bdcb99f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e97f9b73c6109c6eedeb85962e9ae589f961032c9ef4906bb6af58bdcb99f6c->enter($__internal_5e97f9b73c6109c6eedeb85962e9ae589f961032c9ef4906bb6af58bdcb99f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_5e97f9b73c6109c6eedeb85962e9ae589f961032c9ef4906bb6af58bdcb99f6c->leave($__internal_5e97f9b73c6109c6eedeb85962e9ae589f961032c9ef4906bb6af58bdcb99f6c_prof);

        
        $__internal_19a4903dc3866f4c4f1b9a3c30ec065ed3cf8e128a4b1dbfd63a0a78aa858a33->leave($__internal_19a4903dc3866f4c4f1b9a3c30ec065ed3cf8e128a4b1dbfd63a0a78aa858a33_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_0f6054dfbbfd08b36fb045d0e3995a98fbfe92d36ce24895345939d034c40cfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6054dfbbfd08b36fb045d0e3995a98fbfe92d36ce24895345939d034c40cfe->enter($__internal_0f6054dfbbfd08b36fb045d0e3995a98fbfe92d36ce24895345939d034c40cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_ab125f9b9c0291f4133d7418e55a37c55dc071acf1b73d5687f31ce5c86bec77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab125f9b9c0291f4133d7418e55a37c55dc071acf1b73d5687f31ce5c86bec77->enter($__internal_ab125f9b9c0291f4133d7418e55a37c55dc071acf1b73d5687f31ce5c86bec77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_ab125f9b9c0291f4133d7418e55a37c55dc071acf1b73d5687f31ce5c86bec77->leave($__internal_ab125f9b9c0291f4133d7418e55a37c55dc071acf1b73d5687f31ce5c86bec77_prof);

        
        $__internal_0f6054dfbbfd08b36fb045d0e3995a98fbfe92d36ce24895345939d034c40cfe->leave($__internal_0f6054dfbbfd08b36fb045d0e3995a98fbfe92d36ce24895345939d034c40cfe_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_382e3add2d5713b06d62a3f2364139b3292fa7786ab4722d018f9b8252b9ba8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382e3add2d5713b06d62a3f2364139b3292fa7786ab4722d018f9b8252b9ba8a->enter($__internal_382e3add2d5713b06d62a3f2364139b3292fa7786ab4722d018f9b8252b9ba8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_da31f20bef0955cf7b96343664f326231052b2a39d2bbceb7f5e6fe2ee4a115c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da31f20bef0955cf7b96343664f326231052b2a39d2bbceb7f5e6fe2ee4a115c->enter($__internal_da31f20bef0955cf7b96343664f326231052b2a39d2bbceb7f5e6fe2ee4a115c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

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
        
        $__internal_da31f20bef0955cf7b96343664f326231052b2a39d2bbceb7f5e6fe2ee4a115c->leave($__internal_da31f20bef0955cf7b96343664f326231052b2a39d2bbceb7f5e6fe2ee4a115c_prof);

        
        $__internal_382e3add2d5713b06d62a3f2364139b3292fa7786ab4722d018f9b8252b9ba8a->leave($__internal_382e3add2d5713b06d62a3f2364139b3292fa7786ab4722d018f9b8252b9ba8a_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_76d7c5bc802c1449af8548156f62c8c628fff35801df08bc674ed895c921795c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76d7c5bc802c1449af8548156f62c8c628fff35801df08bc674ed895c921795c->enter($__internal_76d7c5bc802c1449af8548156f62c8c628fff35801df08bc674ed895c921795c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_275602d0e602ca8b60296501103322df0ec373468401d2ca9a036d5e71317da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275602d0e602ca8b60296501103322df0ec373468401d2ca9a036d5e71317da1->enter($__internal_275602d0e602ca8b60296501103322df0ec373468401d2ca9a036d5e71317da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_275602d0e602ca8b60296501103322df0ec373468401d2ca9a036d5e71317da1->leave($__internal_275602d0e602ca8b60296501103322df0ec373468401d2ca9a036d5e71317da1_prof);

        
        $__internal_76d7c5bc802c1449af8548156f62c8c628fff35801df08bc674ed895c921795c->leave($__internal_76d7c5bc802c1449af8548156f62c8c628fff35801df08bc674ed895c921795c_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_36503cdd30f2fe04abbb4d3357ab95302ff22a94244a2ac130fb4c58570150b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36503cdd30f2fe04abbb4d3357ab95302ff22a94244a2ac130fb4c58570150b9->enter($__internal_36503cdd30f2fe04abbb4d3357ab95302ff22a94244a2ac130fb4c58570150b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_3644802ca7264b4b072209144dd31aff8a618e860a28d3c8a766b6c8ec1965c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3644802ca7264b4b072209144dd31aff8a618e860a28d3c8a766b6c8ec1965c4->enter($__internal_3644802ca7264b4b072209144dd31aff8a618e860a28d3c8a766b6c8ec1965c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_3644802ca7264b4b072209144dd31aff8a618e860a28d3c8a766b6c8ec1965c4->leave($__internal_3644802ca7264b4b072209144dd31aff8a618e860a28d3c8a766b6c8ec1965c4_prof);

        
        $__internal_36503cdd30f2fe04abbb4d3357ab95302ff22a94244a2ac130fb4c58570150b9->leave($__internal_36503cdd30f2fe04abbb4d3357ab95302ff22a94244a2ac130fb4c58570150b9_prof);

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
