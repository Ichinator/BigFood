<?php

/* EasyAdminBundle:default:layout.html.twig */
class __TwigTemplate_5b742aa090390ffa08e03731b57d4701afdede167a0e4161ee87daf4b6c9ee0e extends Twig_Template
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
        $__internal_79e0a8efb53241ef75535e22c6bf7f501766d911bb3a980f77323a92e6a97a39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e0a8efb53241ef75535e22c6bf7f501766d911bb3a980f77323a92e6a97a39->enter($__internal_79e0a8efb53241ef75535e22c6bf7f501766d911bb3a980f77323a92e6a97a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        $__internal_b8cd4abb8821123eaba875699c7f5035304068ea5aeeec38c6849f9ef2e39967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8cd4abb8821123eaba875699c7f5035304068ea5aeeec38c6849f9ef2e39967->enter($__internal_b8cd4abb8821123eaba875699c7f5035304068ea5aeeec38c6849f9ef2e39967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

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
        
        $__internal_79e0a8efb53241ef75535e22c6bf7f501766d911bb3a980f77323a92e6a97a39->leave($__internal_79e0a8efb53241ef75535e22c6bf7f501766d911bb3a980f77323a92e6a97a39_prof);

        
        $__internal_b8cd4abb8821123eaba875699c7f5035304068ea5aeeec38c6849f9ef2e39967->leave($__internal_b8cd4abb8821123eaba875699c7f5035304068ea5aeeec38c6849f9ef2e39967_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_1ebb0bb656605814d99632b3de5e9f28012826b0cc08f4647af82e47832fa880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ebb0bb656605814d99632b3de5e9f28012826b0cc08f4647af82e47832fa880->enter($__internal_1ebb0bb656605814d99632b3de5e9f28012826b0cc08f4647af82e47832fa880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_944a50b2c29feee8d4ae249a9bb05c167bd8997e77982de5533743a2ab5576bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944a50b2c29feee8d4ae249a9bb05c167bd8997e77982de5533743a2ab5576bf->enter($__internal_944a50b2c29feee8d4ae249a9bb05c167bd8997e77982de5533743a2ab5576bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_944a50b2c29feee8d4ae249a9bb05c167bd8997e77982de5533743a2ab5576bf->leave($__internal_944a50b2c29feee8d4ae249a9bb05c167bd8997e77982de5533743a2ab5576bf_prof);

        
        $__internal_1ebb0bb656605814d99632b3de5e9f28012826b0cc08f4647af82e47832fa880->leave($__internal_1ebb0bb656605814d99632b3de5e9f28012826b0cc08f4647af82e47832fa880_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_0bf33e9b139491f95f43c3be936a7a83d4445785e08655305141aae18895bd51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bf33e9b139491f95f43c3be936a7a83d4445785e08655305141aae18895bd51->enter($__internal_0bf33e9b139491f95f43c3be936a7a83d4445785e08655305141aae18895bd51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_4c8b1b24019da66643bbd93ce47cdae4962680d7595bead37fb522a4b99429b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c8b1b24019da66643bbd93ce47cdae4962680d7595bead37fb522a4b99429b6->enter($__internal_4c8b1b24019da66643bbd93ce47cdae4962680d7595bead37fb522a4b99429b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_4c8b1b24019da66643bbd93ce47cdae4962680d7595bead37fb522a4b99429b6->leave($__internal_4c8b1b24019da66643bbd93ce47cdae4962680d7595bead37fb522a4b99429b6_prof);

        
        $__internal_0bf33e9b139491f95f43c3be936a7a83d4445785e08655305141aae18895bd51->leave($__internal_0bf33e9b139491f95f43c3be936a7a83d4445785e08655305141aae18895bd51_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_8b9054367c235f5374b66fe15582229ec7d264028ceb97bfe92a941abf7282b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b9054367c235f5374b66fe15582229ec7d264028ceb97bfe92a941abf7282b9->enter($__internal_8b9054367c235f5374b66fe15582229ec7d264028ceb97bfe92a941abf7282b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_5ab303035e8d7d12b7565a409980a35451723dbff018a598787334b35f0f377d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab303035e8d7d12b7565a409980a35451723dbff018a598787334b35f0f377d->enter($__internal_5ab303035e8d7d12b7565a409980a35451723dbff018a598787334b35f0f377d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_5ab303035e8d7d12b7565a409980a35451723dbff018a598787334b35f0f377d->leave($__internal_5ab303035e8d7d12b7565a409980a35451723dbff018a598787334b35f0f377d_prof);

        
        $__internal_8b9054367c235f5374b66fe15582229ec7d264028ceb97bfe92a941abf7282b9->leave($__internal_8b9054367c235f5374b66fe15582229ec7d264028ceb97bfe92a941abf7282b9_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_6d8d76ff41aa00398251762be2b820ac617d26c681440c90a1c9aab9b8f9b833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d8d76ff41aa00398251762be2b820ac617d26c681440c90a1c9aab9b8f9b833->enter($__internal_6d8d76ff41aa00398251762be2b820ac617d26c681440c90a1c9aab9b8f9b833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_8388bd430aa89c3e20fa5fcaeae9ba1235f1d63a8577133dcd564aac5d0e2f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8388bd430aa89c3e20fa5fcaeae9ba1235f1d63a8577133dcd564aac5d0e2f35->enter($__internal_8388bd430aa89c3e20fa5fcaeae9ba1235f1d63a8577133dcd564aac5d0e2f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_8388bd430aa89c3e20fa5fcaeae9ba1235f1d63a8577133dcd564aac5d0e2f35->leave($__internal_8388bd430aa89c3e20fa5fcaeae9ba1235f1d63a8577133dcd564aac5d0e2f35_prof);

        
        $__internal_6d8d76ff41aa00398251762be2b820ac617d26c681440c90a1c9aab9b8f9b833->leave($__internal_6d8d76ff41aa00398251762be2b820ac617d26c681440c90a1c9aab9b8f9b833_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_67a1db9d53475807de8520c06c8a766983cf54ad1abab3eed73dbcb2b073b291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67a1db9d53475807de8520c06c8a766983cf54ad1abab3eed73dbcb2b073b291->enter($__internal_67a1db9d53475807de8520c06c8a766983cf54ad1abab3eed73dbcb2b073b291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_d80cea4fc730d88c503422ab6afe8daac6d4baadf9f8cb1d3a6672e35c331ff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d80cea4fc730d88c503422ab6afe8daac6d4baadf9f8cb1d3a6672e35c331ff7->enter($__internal_d80cea4fc730d88c503422ab6afe8daac6d4baadf9f8cb1d3a6672e35c331ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_d80cea4fc730d88c503422ab6afe8daac6d4baadf9f8cb1d3a6672e35c331ff7->leave($__internal_d80cea4fc730d88c503422ab6afe8daac6d4baadf9f8cb1d3a6672e35c331ff7_prof);

        
        $__internal_67a1db9d53475807de8520c06c8a766983cf54ad1abab3eed73dbcb2b073b291->leave($__internal_67a1db9d53475807de8520c06c8a766983cf54ad1abab3eed73dbcb2b073b291_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff4a11e54c5cffb95a6b05d9787a7f3fd2e542701646d944f1a11cddd2cc31bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff4a11e54c5cffb95a6b05d9787a7f3fd2e542701646d944f1a11cddd2cc31bf->enter($__internal_ff4a11e54c5cffb95a6b05d9787a7f3fd2e542701646d944f1a11cddd2cc31bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_946d05008bd91109955213728432bda0a2797b4b16505f514a29e1f03d8c530a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946d05008bd91109955213728432bda0a2797b4b16505f514a29e1f03d8c530a->enter($__internal_946d05008bd91109955213728432bda0a2797b4b16505f514a29e1f03d8c530a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_946d05008bd91109955213728432bda0a2797b4b16505f514a29e1f03d8c530a->leave($__internal_946d05008bd91109955213728432bda0a2797b4b16505f514a29e1f03d8c530a_prof);

        
        $__internal_ff4a11e54c5cffb95a6b05d9787a7f3fd2e542701646d944f1a11cddd2cc31bf->leave($__internal_ff4a11e54c5cffb95a6b05d9787a7f3fd2e542701646d944f1a11cddd2cc31bf_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_e323d0e1758bb89e3b98a5660b970f69e50fba58fa34f6129ca5484968f491f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e323d0e1758bb89e3b98a5660b970f69e50fba58fa34f6129ca5484968f491f2->enter($__internal_e323d0e1758bb89e3b98a5660b970f69e50fba58fa34f6129ca5484968f491f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_f941783d3a004e3447281c1da768b255039be012eb827e24d761cedd4346bc58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f941783d3a004e3447281c1da768b255039be012eb827e24d761cedd4346bc58->enter($__internal_f941783d3a004e3447281c1da768b255039be012eb827e24d761cedd4346bc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_f941783d3a004e3447281c1da768b255039be012eb827e24d761cedd4346bc58->leave($__internal_f941783d3a004e3447281c1da768b255039be012eb827e24d761cedd4346bc58_prof);

        
        $__internal_e323d0e1758bb89e3b98a5660b970f69e50fba58fa34f6129ca5484968f491f2->leave($__internal_e323d0e1758bb89e3b98a5660b970f69e50fba58fa34f6129ca5484968f491f2_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_542abcbc32e3fa7c0359f87aea99d9ee060f8d851a0ec89ec55833ff6050afc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_542abcbc32e3fa7c0359f87aea99d9ee060f8d851a0ec89ec55833ff6050afc8->enter($__internal_542abcbc32e3fa7c0359f87aea99d9ee060f8d851a0ec89ec55833ff6050afc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_8ed0d644ca08748d8108b3106f6b98ddac74dff3e281680d698cee1264b2f03d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed0d644ca08748d8108b3106f6b98ddac74dff3e281680d698cee1264b2f03d->enter($__internal_8ed0d644ca08748d8108b3106f6b98ddac74dff3e281680d698cee1264b2f03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_8ed0d644ca08748d8108b3106f6b98ddac74dff3e281680d698cee1264b2f03d->leave($__internal_8ed0d644ca08748d8108b3106f6b98ddac74dff3e281680d698cee1264b2f03d_prof);

        
        $__internal_542abcbc32e3fa7c0359f87aea99d9ee060f8d851a0ec89ec55833ff6050afc8->leave($__internal_542abcbc32e3fa7c0359f87aea99d9ee060f8d851a0ec89ec55833ff6050afc8_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_f786418f6c3d97d08f91a7fc1b276009b8239b74ae0a1247a2796049ccdc4c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f786418f6c3d97d08f91a7fc1b276009b8239b74ae0a1247a2796049ccdc4c26->enter($__internal_f786418f6c3d97d08f91a7fc1b276009b8239b74ae0a1247a2796049ccdc4c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_3ad460619a680588a5825f67e72ac5daabec8927fb97c89e2737978c6549798a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad460619a680588a5825f67e72ac5daabec8927fb97c89e2737978c6549798a->enter($__internal_3ad460619a680588a5825f67e72ac5daabec8927fb97c89e2737978c6549798a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_3ad460619a680588a5825f67e72ac5daabec8927fb97c89e2737978c6549798a->leave($__internal_3ad460619a680588a5825f67e72ac5daabec8927fb97c89e2737978c6549798a_prof);

        
        $__internal_f786418f6c3d97d08f91a7fc1b276009b8239b74ae0a1247a2796049ccdc4c26->leave($__internal_f786418f6c3d97d08f91a7fc1b276009b8239b74ae0a1247a2796049ccdc4c26_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_97daf4849e897d7df1ea1c92eaa2dd1f036f0378febd8003cdf5fc32d3d8e066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97daf4849e897d7df1ea1c92eaa2dd1f036f0378febd8003cdf5fc32d3d8e066->enter($__internal_97daf4849e897d7df1ea1c92eaa2dd1f036f0378febd8003cdf5fc32d3d8e066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_73ed31f1e19f10a30b9f58250b357f059e73dc20c262166d53b494c669c5d5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ed31f1e19f10a30b9f58250b357f059e73dc20c262166d53b494c669c5d5b7->enter($__internal_73ed31f1e19f10a30b9f58250b357f059e73dc20c262166d53b494c669c5d5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_73ed31f1e19f10a30b9f58250b357f059e73dc20c262166d53b494c669c5d5b7->leave($__internal_73ed31f1e19f10a30b9f58250b357f059e73dc20c262166d53b494c669c5d5b7_prof);

        
        $__internal_97daf4849e897d7df1ea1c92eaa2dd1f036f0378febd8003cdf5fc32d3d8e066->leave($__internal_97daf4849e897d7df1ea1c92eaa2dd1f036f0378febd8003cdf5fc32d3d8e066_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_3b46929e8980269d01e00aa8cc2cf3012a9548483432f8f7a41cb4908095a82e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b46929e8980269d01e00aa8cc2cf3012a9548483432f8f7a41cb4908095a82e->enter($__internal_3b46929e8980269d01e00aa8cc2cf3012a9548483432f8f7a41cb4908095a82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_a5a0b4ba7b37259f6dfffca6020a0e36bba708837674a655ab7bd5b3376e47cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a0b4ba7b37259f6dfffca6020a0e36bba708837674a655ab7bd5b3376e47cd->enter($__internal_a5a0b4ba7b37259f6dfffca6020a0e36bba708837674a655ab7bd5b3376e47cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_a5a0b4ba7b37259f6dfffca6020a0e36bba708837674a655ab7bd5b3376e47cd->leave($__internal_a5a0b4ba7b37259f6dfffca6020a0e36bba708837674a655ab7bd5b3376e47cd_prof);

        
        $__internal_3b46929e8980269d01e00aa8cc2cf3012a9548483432f8f7a41cb4908095a82e->leave($__internal_3b46929e8980269d01e00aa8cc2cf3012a9548483432f8f7a41cb4908095a82e_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_e99fa03c0b4e25b07fd78f906cba10ca941b25ffa08174432f872c0702008706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e99fa03c0b4e25b07fd78f906cba10ca941b25ffa08174432f872c0702008706->enter($__internal_e99fa03c0b4e25b07fd78f906cba10ca941b25ffa08174432f872c0702008706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_488234a74bb26ad2df4b9637464ba210d3ab53eb8a14d084fd4be09e9f4b60e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488234a74bb26ad2df4b9637464ba210d3ab53eb8a14d084fd4be09e9f4b60e9->enter($__internal_488234a74bb26ad2df4b9637464ba210d3ab53eb8a14d084fd4be09e9f4b60e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_488234a74bb26ad2df4b9637464ba210d3ab53eb8a14d084fd4be09e9f4b60e9->leave($__internal_488234a74bb26ad2df4b9637464ba210d3ab53eb8a14d084fd4be09e9f4b60e9_prof);

        
        $__internal_e99fa03c0b4e25b07fd78f906cba10ca941b25ffa08174432f872c0702008706->leave($__internal_e99fa03c0b4e25b07fd78f906cba10ca941b25ffa08174432f872c0702008706_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_88beb4ad71cd862596dcf5396ed3cc024ea5d2942caaea8ef5d23c9c980964ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88beb4ad71cd862596dcf5396ed3cc024ea5d2942caaea8ef5d23c9c980964ae->enter($__internal_88beb4ad71cd862596dcf5396ed3cc024ea5d2942caaea8ef5d23c9c980964ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_4b24797780180422e16013b91088ada5acb264cbdbfbed26bcee52dbffc3081f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b24797780180422e16013b91088ada5acb264cbdbfbed26bcee52dbffc3081f->enter($__internal_4b24797780180422e16013b91088ada5acb264cbdbfbed26bcee52dbffc3081f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_4b24797780180422e16013b91088ada5acb264cbdbfbed26bcee52dbffc3081f->leave($__internal_4b24797780180422e16013b91088ada5acb264cbdbfbed26bcee52dbffc3081f_prof);

        
        $__internal_88beb4ad71cd862596dcf5396ed3cc024ea5d2942caaea8ef5d23c9c980964ae->leave($__internal_88beb4ad71cd862596dcf5396ed3cc024ea5d2942caaea8ef5d23c9c980964ae_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_cfee71fc93d08c9835fa98c02f9e4f23679c8c8a9cbc5329df0dd7eb2faddb2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfee71fc93d08c9835fa98c02f9e4f23679c8c8a9cbc5329df0dd7eb2faddb2d->enter($__internal_cfee71fc93d08c9835fa98c02f9e4f23679c8c8a9cbc5329df0dd7eb2faddb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_f06b9bd0979562495cbd109ed388cfabb01df8c7b3f9b08556546c55c5d42278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f06b9bd0979562495cbd109ed388cfabb01df8c7b3f9b08556546c55c5d42278->enter($__internal_f06b9bd0979562495cbd109ed388cfabb01df8c7b3f9b08556546c55c5d42278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

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
        
        $__internal_f06b9bd0979562495cbd109ed388cfabb01df8c7b3f9b08556546c55c5d42278->leave($__internal_f06b9bd0979562495cbd109ed388cfabb01df8c7b3f9b08556546c55c5d42278_prof);

        
        $__internal_cfee71fc93d08c9835fa98c02f9e4f23679c8c8a9cbc5329df0dd7eb2faddb2d->leave($__internal_cfee71fc93d08c9835fa98c02f9e4f23679c8c8a9cbc5329df0dd7eb2faddb2d_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7498ad5ff398e1a3aad942a67aa5d384fb849d69561a058babedc1c8eff303a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7498ad5ff398e1a3aad942a67aa5d384fb849d69561a058babedc1c8eff303a1->enter($__internal_7498ad5ff398e1a3aad942a67aa5d384fb849d69561a058babedc1c8eff303a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_3bbe28e4fb3feac6122cb74b770f9ddae14e316f820a0d4226dbd0f2e18d29b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bbe28e4fb3feac6122cb74b770f9ddae14e316f820a0d4226dbd0f2e18d29b1->enter($__internal_3bbe28e4fb3feac6122cb74b770f9ddae14e316f820a0d4226dbd0f2e18d29b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_3bbe28e4fb3feac6122cb74b770f9ddae14e316f820a0d4226dbd0f2e18d29b1->leave($__internal_3bbe28e4fb3feac6122cb74b770f9ddae14e316f820a0d4226dbd0f2e18d29b1_prof);

        
        $__internal_7498ad5ff398e1a3aad942a67aa5d384fb849d69561a058babedc1c8eff303a1->leave($__internal_7498ad5ff398e1a3aad942a67aa5d384fb849d69561a058babedc1c8eff303a1_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_75469b4288804d63f7ee0fc52688012e727333de5e1534b003f5848cfca74663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75469b4288804d63f7ee0fc52688012e727333de5e1534b003f5848cfca74663->enter($__internal_75469b4288804d63f7ee0fc52688012e727333de5e1534b003f5848cfca74663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_2bf700a294e7a693b1b914685fe103945d6e6d3b8d84cdca024d82b02b90674c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf700a294e7a693b1b914685fe103945d6e6d3b8d84cdca024d82b02b90674c->enter($__internal_2bf700a294e7a693b1b914685fe103945d6e6d3b8d84cdca024d82b02b90674c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_2bf700a294e7a693b1b914685fe103945d6e6d3b8d84cdca024d82b02b90674c->leave($__internal_2bf700a294e7a693b1b914685fe103945d6e6d3b8d84cdca024d82b02b90674c_prof);

        
        $__internal_75469b4288804d63f7ee0fc52688012e727333de5e1534b003f5848cfca74663->leave($__internal_75469b4288804d63f7ee0fc52688012e727333de5e1534b003f5848cfca74663_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_c226bca18b02d774af9696e9b8f788d055966172d1bb4923692e7cbbd4004a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c226bca18b02d774af9696e9b8f788d055966172d1bb4923692e7cbbd4004a1a->enter($__internal_c226bca18b02d774af9696e9b8f788d055966172d1bb4923692e7cbbd4004a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b042dfdc2923bbf3d549f9708cd81a1a0227f66725040a6a646c7206dfe45fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b042dfdc2923bbf3d549f9708cd81a1a0227f66725040a6a646c7206dfe45fbb->enter($__internal_b042dfdc2923bbf3d549f9708cd81a1a0227f66725040a6a646c7206dfe45fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_b042dfdc2923bbf3d549f9708cd81a1a0227f66725040a6a646c7206dfe45fbb->leave($__internal_b042dfdc2923bbf3d549f9708cd81a1a0227f66725040a6a646c7206dfe45fbb_prof);

        
        $__internal_c226bca18b02d774af9696e9b8f788d055966172d1bb4923692e7cbbd4004a1a->leave($__internal_c226bca18b02d774af9696e9b8f788d055966172d1bb4923692e7cbbd4004a1a_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_d49e780acfad05c1527fdd3e3293565e884c640c6651ceaed2313eae5a0797e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d49e780acfad05c1527fdd3e3293565e884c640c6651ceaed2313eae5a0797e3->enter($__internal_d49e780acfad05c1527fdd3e3293565e884c640c6651ceaed2313eae5a0797e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_c1b79cb4003bc4cf9b81e463453ee747324652533792e8b8a48b51e9be194ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b79cb4003bc4cf9b81e463453ee747324652533792e8b8a48b51e9be194ec8->enter($__internal_c1b79cb4003bc4cf9b81e463453ee747324652533792e8b8a48b51e9be194ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_c1b79cb4003bc4cf9b81e463453ee747324652533792e8b8a48b51e9be194ec8->leave($__internal_c1b79cb4003bc4cf9b81e463453ee747324652533792e8b8a48b51e9be194ec8_prof);

        
        $__internal_d49e780acfad05c1527fdd3e3293565e884c640c6651ceaed2313eae5a0797e3->leave($__internal_d49e780acfad05c1527fdd3e3293565e884c640c6651ceaed2313eae5a0797e3_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_cd239ba27926ae7a23826c4d086bab033d599cdecbc451d713032b8e23a05d21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd239ba27926ae7a23826c4d086bab033d599cdecbc451d713032b8e23a05d21->enter($__internal_cd239ba27926ae7a23826c4d086bab033d599cdecbc451d713032b8e23a05d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_d6894c0d71d8daceb1515af1435a4a3f31d7a2597464d441e65c89235fa3117f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6894c0d71d8daceb1515af1435a4a3f31d7a2597464d441e65c89235fa3117f->enter($__internal_d6894c0d71d8daceb1515af1435a4a3f31d7a2597464d441e65c89235fa3117f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_d6894c0d71d8daceb1515af1435a4a3f31d7a2597464d441e65c89235fa3117f->leave($__internal_d6894c0d71d8daceb1515af1435a4a3f31d7a2597464d441e65c89235fa3117f_prof);

        
        $__internal_cd239ba27926ae7a23826c4d086bab033d599cdecbc451d713032b8e23a05d21->leave($__internal_cd239ba27926ae7a23826c4d086bab033d599cdecbc451d713032b8e23a05d21_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_f112982fbc5ec780bade98f19b7cd49dcbdce6a40264cdfae82088d863583b1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f112982fbc5ec780bade98f19b7cd49dcbdce6a40264cdfae82088d863583b1f->enter($__internal_f112982fbc5ec780bade98f19b7cd49dcbdce6a40264cdfae82088d863583b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_f37f9fdd270b570047d45b1abd34166367ecb1f14749a3485d05885d003bf6b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37f9fdd270b570047d45b1abd34166367ecb1f14749a3485d05885d003bf6b2->enter($__internal_f37f9fdd270b570047d45b1abd34166367ecb1f14749a3485d05885d003bf6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_f37f9fdd270b570047d45b1abd34166367ecb1f14749a3485d05885d003bf6b2->leave($__internal_f37f9fdd270b570047d45b1abd34166367ecb1f14749a3485d05885d003bf6b2_prof);

        
        $__internal_f112982fbc5ec780bade98f19b7cd49dcbdce6a40264cdfae82088d863583b1f->leave($__internal_f112982fbc5ec780bade98f19b7cd49dcbdce6a40264cdfae82088d863583b1f_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_7d3126dcb2d3dbd0b55eb3933ad0273801f71adfac459122ed96f15f6adff39e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d3126dcb2d3dbd0b55eb3933ad0273801f71adfac459122ed96f15f6adff39e->enter($__internal_7d3126dcb2d3dbd0b55eb3933ad0273801f71adfac459122ed96f15f6adff39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_c654623e922d37d499355e1454911cc83735c19e54a8e5696d6fe7337e6ec3f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c654623e922d37d499355e1454911cc83735c19e54a8e5696d6fe7337e6ec3f3->enter($__internal_c654623e922d37d499355e1454911cc83735c19e54a8e5696d6fe7337e6ec3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

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
        
        $__internal_c654623e922d37d499355e1454911cc83735c19e54a8e5696d6fe7337e6ec3f3->leave($__internal_c654623e922d37d499355e1454911cc83735c19e54a8e5696d6fe7337e6ec3f3_prof);

        
        $__internal_7d3126dcb2d3dbd0b55eb3933ad0273801f71adfac459122ed96f15f6adff39e->leave($__internal_7d3126dcb2d3dbd0b55eb3933ad0273801f71adfac459122ed96f15f6adff39e_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_0d937d1e5ed923f8cb990d9a8bf13b38205068b0b5756502ad5165630b9aab5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d937d1e5ed923f8cb990d9a8bf13b38205068b0b5756502ad5165630b9aab5d->enter($__internal_0d937d1e5ed923f8cb990d9a8bf13b38205068b0b5756502ad5165630b9aab5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_9be5c2747d0f2d8adf35474bb1972b840176a058b91e47e3242222088bc93e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be5c2747d0f2d8adf35474bb1972b840176a058b91e47e3242222088bc93e47->enter($__internal_9be5c2747d0f2d8adf35474bb1972b840176a058b91e47e3242222088bc93e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_9be5c2747d0f2d8adf35474bb1972b840176a058b91e47e3242222088bc93e47->leave($__internal_9be5c2747d0f2d8adf35474bb1972b840176a058b91e47e3242222088bc93e47_prof);

        
        $__internal_0d937d1e5ed923f8cb990d9a8bf13b38205068b0b5756502ad5165630b9aab5d->leave($__internal_0d937d1e5ed923f8cb990d9a8bf13b38205068b0b5756502ad5165630b9aab5d_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_c72a765da2081556dfec50dcb89ae12325a4b7e36779243e476686af186f9af6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c72a765da2081556dfec50dcb89ae12325a4b7e36779243e476686af186f9af6->enter($__internal_c72a765da2081556dfec50dcb89ae12325a4b7e36779243e476686af186f9af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_0310239203375b14dfc1075b73fa940b5a965ab1800916867738c64a03d02711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0310239203375b14dfc1075b73fa940b5a965ab1800916867738c64a03d02711->enter($__internal_0310239203375b14dfc1075b73fa940b5a965ab1800916867738c64a03d02711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_0310239203375b14dfc1075b73fa940b5a965ab1800916867738c64a03d02711->leave($__internal_0310239203375b14dfc1075b73fa940b5a965ab1800916867738c64a03d02711_prof);

        
        $__internal_c72a765da2081556dfec50dcb89ae12325a4b7e36779243e476686af186f9af6->leave($__internal_c72a765da2081556dfec50dcb89ae12325a4b7e36779243e476686af186f9af6_prof);

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
