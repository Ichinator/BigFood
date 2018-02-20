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
        $__internal_7a2c7cd050e0a5999ddd2a41023117561c029ce8dbfb2a4b976c5a877a6092d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a2c7cd050e0a5999ddd2a41023117561c029ce8dbfb2a4b976c5a877a6092d0->enter($__internal_7a2c7cd050e0a5999ddd2a41023117561c029ce8dbfb2a4b976c5a877a6092d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        $__internal_40e2bafdc25d324357c12f43675f7197e34a06ea323a555f4457040ce3c0e06f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e2bafdc25d324357c12f43675f7197e34a06ea323a555f4457040ce3c0e06f->enter($__internal_40e2bafdc25d324357c12f43675f7197e34a06ea323a555f4457040ce3c0e06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

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
        
        $__internal_7a2c7cd050e0a5999ddd2a41023117561c029ce8dbfb2a4b976c5a877a6092d0->leave($__internal_7a2c7cd050e0a5999ddd2a41023117561c029ce8dbfb2a4b976c5a877a6092d0_prof);

        
        $__internal_40e2bafdc25d324357c12f43675f7197e34a06ea323a555f4457040ce3c0e06f->leave($__internal_40e2bafdc25d324357c12f43675f7197e34a06ea323a555f4457040ce3c0e06f_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_068a891909ef63efa6e7ad707aa1b4f0e6cf5dd3e586a01c15a8ac9e81793d54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_068a891909ef63efa6e7ad707aa1b4f0e6cf5dd3e586a01c15a8ac9e81793d54->enter($__internal_068a891909ef63efa6e7ad707aa1b4f0e6cf5dd3e586a01c15a8ac9e81793d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_5598de095028e56101c260e38f8532c89593586204cb2e1e65df3d0d70964ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5598de095028e56101c260e38f8532c89593586204cb2e1e65df3d0d70964ce1->enter($__internal_5598de095028e56101c260e38f8532c89593586204cb2e1e65df3d0d70964ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_5598de095028e56101c260e38f8532c89593586204cb2e1e65df3d0d70964ce1->leave($__internal_5598de095028e56101c260e38f8532c89593586204cb2e1e65df3d0d70964ce1_prof);

        
        $__internal_068a891909ef63efa6e7ad707aa1b4f0e6cf5dd3e586a01c15a8ac9e81793d54->leave($__internal_068a891909ef63efa6e7ad707aa1b4f0e6cf5dd3e586a01c15a8ac9e81793d54_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_07c4119c8d1bc880adc13226d8e100c77c8489ae93083e6d77750fd7b7dd0ca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07c4119c8d1bc880adc13226d8e100c77c8489ae93083e6d77750fd7b7dd0ca5->enter($__internal_07c4119c8d1bc880adc13226d8e100c77c8489ae93083e6d77750fd7b7dd0ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_d0d8c5bb5a2a41f82a97824474b059feb584f2610dcd17edacab5472bdbb058d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d8c5bb5a2a41f82a97824474b059feb584f2610dcd17edacab5472bdbb058d->enter($__internal_d0d8c5bb5a2a41f82a97824474b059feb584f2610dcd17edacab5472bdbb058d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_d0d8c5bb5a2a41f82a97824474b059feb584f2610dcd17edacab5472bdbb058d->leave($__internal_d0d8c5bb5a2a41f82a97824474b059feb584f2610dcd17edacab5472bdbb058d_prof);

        
        $__internal_07c4119c8d1bc880adc13226d8e100c77c8489ae93083e6d77750fd7b7dd0ca5->leave($__internal_07c4119c8d1bc880adc13226d8e100c77c8489ae93083e6d77750fd7b7dd0ca5_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_8e4df758f759daefbf7ccc71cbf7177573068a6bc6eb95fbfdcafb8b3a76cca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e4df758f759daefbf7ccc71cbf7177573068a6bc6eb95fbfdcafb8b3a76cca9->enter($__internal_8e4df758f759daefbf7ccc71cbf7177573068a6bc6eb95fbfdcafb8b3a76cca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_9526a694d1fa09ed0a59fb27a7472e36a6d7305a5ec040678975f2a2fbc11cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9526a694d1fa09ed0a59fb27a7472e36a6d7305a5ec040678975f2a2fbc11cbd->enter($__internal_9526a694d1fa09ed0a59fb27a7472e36a6d7305a5ec040678975f2a2fbc11cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_9526a694d1fa09ed0a59fb27a7472e36a6d7305a5ec040678975f2a2fbc11cbd->leave($__internal_9526a694d1fa09ed0a59fb27a7472e36a6d7305a5ec040678975f2a2fbc11cbd_prof);

        
        $__internal_8e4df758f759daefbf7ccc71cbf7177573068a6bc6eb95fbfdcafb8b3a76cca9->leave($__internal_8e4df758f759daefbf7ccc71cbf7177573068a6bc6eb95fbfdcafb8b3a76cca9_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_c2a5dd60d98b6fbc1f8f8010f5c6436031993e0697e62c2731508d45bb13be03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2a5dd60d98b6fbc1f8f8010f5c6436031993e0697e62c2731508d45bb13be03->enter($__internal_c2a5dd60d98b6fbc1f8f8010f5c6436031993e0697e62c2731508d45bb13be03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_68152f799d30fedb31c5d3e0e5e16dd775eb98e0ff4ecb2dda467ee77428e122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68152f799d30fedb31c5d3e0e5e16dd775eb98e0ff4ecb2dda467ee77428e122->enter($__internal_68152f799d30fedb31c5d3e0e5e16dd775eb98e0ff4ecb2dda467ee77428e122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_68152f799d30fedb31c5d3e0e5e16dd775eb98e0ff4ecb2dda467ee77428e122->leave($__internal_68152f799d30fedb31c5d3e0e5e16dd775eb98e0ff4ecb2dda467ee77428e122_prof);

        
        $__internal_c2a5dd60d98b6fbc1f8f8010f5c6436031993e0697e62c2731508d45bb13be03->leave($__internal_c2a5dd60d98b6fbc1f8f8010f5c6436031993e0697e62c2731508d45bb13be03_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_951bc50ae9be0e8a23029b93d16444e78d90864d9c6b528391f2a7fbf942ff50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_951bc50ae9be0e8a23029b93d16444e78d90864d9c6b528391f2a7fbf942ff50->enter($__internal_951bc50ae9be0e8a23029b93d16444e78d90864d9c6b528391f2a7fbf942ff50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_1b409074beceb93592468ea6cfeeeaf7d213f11a77e9c8091a707a77e63236a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b409074beceb93592468ea6cfeeeaf7d213f11a77e9c8091a707a77e63236a9->enter($__internal_1b409074beceb93592468ea6cfeeeaf7d213f11a77e9c8091a707a77e63236a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_1b409074beceb93592468ea6cfeeeaf7d213f11a77e9c8091a707a77e63236a9->leave($__internal_1b409074beceb93592468ea6cfeeeaf7d213f11a77e9c8091a707a77e63236a9_prof);

        
        $__internal_951bc50ae9be0e8a23029b93d16444e78d90864d9c6b528391f2a7fbf942ff50->leave($__internal_951bc50ae9be0e8a23029b93d16444e78d90864d9c6b528391f2a7fbf942ff50_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_0717e167ac3d52f7f1bab21bcf2ab336d8faa0c958534ee518ccd5a96449f653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0717e167ac3d52f7f1bab21bcf2ab336d8faa0c958534ee518ccd5a96449f653->enter($__internal_0717e167ac3d52f7f1bab21bcf2ab336d8faa0c958534ee518ccd5a96449f653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c45f69b19d2dda06576821e0cd72205dcdbf1a52c0de1f9a36e0fe8a14fc74b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45f69b19d2dda06576821e0cd72205dcdbf1a52c0de1f9a36e0fe8a14fc74b7->enter($__internal_c45f69b19d2dda06576821e0cd72205dcdbf1a52c0de1f9a36e0fe8a14fc74b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c45f69b19d2dda06576821e0cd72205dcdbf1a52c0de1f9a36e0fe8a14fc74b7->leave($__internal_c45f69b19d2dda06576821e0cd72205dcdbf1a52c0de1f9a36e0fe8a14fc74b7_prof);

        
        $__internal_0717e167ac3d52f7f1bab21bcf2ab336d8faa0c958534ee518ccd5a96449f653->leave($__internal_0717e167ac3d52f7f1bab21bcf2ab336d8faa0c958534ee518ccd5a96449f653_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_6f0683f8469ddf89532230e772037f84a0967801236dbce1d225cde65d33d1c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f0683f8469ddf89532230e772037f84a0967801236dbce1d225cde65d33d1c2->enter($__internal_6f0683f8469ddf89532230e772037f84a0967801236dbce1d225cde65d33d1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_ebe5cef3abb8a1883a725cfbc8357617ccaad13c5ad05452bb7a2318b7a199e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe5cef3abb8a1883a725cfbc8357617ccaad13c5ad05452bb7a2318b7a199e3->enter($__internal_ebe5cef3abb8a1883a725cfbc8357617ccaad13c5ad05452bb7a2318b7a199e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_ebe5cef3abb8a1883a725cfbc8357617ccaad13c5ad05452bb7a2318b7a199e3->leave($__internal_ebe5cef3abb8a1883a725cfbc8357617ccaad13c5ad05452bb7a2318b7a199e3_prof);

        
        $__internal_6f0683f8469ddf89532230e772037f84a0967801236dbce1d225cde65d33d1c2->leave($__internal_6f0683f8469ddf89532230e772037f84a0967801236dbce1d225cde65d33d1c2_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_9a5ae6b2897ba6df875883c2847e713190b248c937c16a0577941567073c22ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a5ae6b2897ba6df875883c2847e713190b248c937c16a0577941567073c22ad->enter($__internal_9a5ae6b2897ba6df875883c2847e713190b248c937c16a0577941567073c22ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_f5363a3897b21633794feeedf24f168b5cd44de9f3fa354ec2b581c1734692ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5363a3897b21633794feeedf24f168b5cd44de9f3fa354ec2b581c1734692ba->enter($__internal_f5363a3897b21633794feeedf24f168b5cd44de9f3fa354ec2b581c1734692ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_f5363a3897b21633794feeedf24f168b5cd44de9f3fa354ec2b581c1734692ba->leave($__internal_f5363a3897b21633794feeedf24f168b5cd44de9f3fa354ec2b581c1734692ba_prof);

        
        $__internal_9a5ae6b2897ba6df875883c2847e713190b248c937c16a0577941567073c22ad->leave($__internal_9a5ae6b2897ba6df875883c2847e713190b248c937c16a0577941567073c22ad_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_82dc90fa0674a2656d40f01295ab6af15dd00e39cf7b45742716ba973f0ad21a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82dc90fa0674a2656d40f01295ab6af15dd00e39cf7b45742716ba973f0ad21a->enter($__internal_82dc90fa0674a2656d40f01295ab6af15dd00e39cf7b45742716ba973f0ad21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_6c1ccad27dff8eb1de4e8a011ca187a6731405b1c80d51ac0e5a97c51435cbe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1ccad27dff8eb1de4e8a011ca187a6731405b1c80d51ac0e5a97c51435cbe4->enter($__internal_6c1ccad27dff8eb1de4e8a011ca187a6731405b1c80d51ac0e5a97c51435cbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_6c1ccad27dff8eb1de4e8a011ca187a6731405b1c80d51ac0e5a97c51435cbe4->leave($__internal_6c1ccad27dff8eb1de4e8a011ca187a6731405b1c80d51ac0e5a97c51435cbe4_prof);

        
        $__internal_82dc90fa0674a2656d40f01295ab6af15dd00e39cf7b45742716ba973f0ad21a->leave($__internal_82dc90fa0674a2656d40f01295ab6af15dd00e39cf7b45742716ba973f0ad21a_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_577bef8a36163c7c1f9f6bcbe965e1b98d0e29e9c7fe9bba3a7fe53a64243899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_577bef8a36163c7c1f9f6bcbe965e1b98d0e29e9c7fe9bba3a7fe53a64243899->enter($__internal_577bef8a36163c7c1f9f6bcbe965e1b98d0e29e9c7fe9bba3a7fe53a64243899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_b3e27b8a9e762eed6934cce0991bb911ec81114099d6befd13d7bb8d719ed598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e27b8a9e762eed6934cce0991bb911ec81114099d6befd13d7bb8d719ed598->enter($__internal_b3e27b8a9e762eed6934cce0991bb911ec81114099d6befd13d7bb8d719ed598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_b3e27b8a9e762eed6934cce0991bb911ec81114099d6befd13d7bb8d719ed598->leave($__internal_b3e27b8a9e762eed6934cce0991bb911ec81114099d6befd13d7bb8d719ed598_prof);

        
        $__internal_577bef8a36163c7c1f9f6bcbe965e1b98d0e29e9c7fe9bba3a7fe53a64243899->leave($__internal_577bef8a36163c7c1f9f6bcbe965e1b98d0e29e9c7fe9bba3a7fe53a64243899_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_656a793281692c86520cb237ec8ad38b1693e843fb282e02b13c4797439c1d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_656a793281692c86520cb237ec8ad38b1693e843fb282e02b13c4797439c1d32->enter($__internal_656a793281692c86520cb237ec8ad38b1693e843fb282e02b13c4797439c1d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_080201f38794b659ac0d1d6eeabd65a717e7d6b023fd94438abd0810e28ee0e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_080201f38794b659ac0d1d6eeabd65a717e7d6b023fd94438abd0810e28ee0e6->enter($__internal_080201f38794b659ac0d1d6eeabd65a717e7d6b023fd94438abd0810e28ee0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_080201f38794b659ac0d1d6eeabd65a717e7d6b023fd94438abd0810e28ee0e6->leave($__internal_080201f38794b659ac0d1d6eeabd65a717e7d6b023fd94438abd0810e28ee0e6_prof);

        
        $__internal_656a793281692c86520cb237ec8ad38b1693e843fb282e02b13c4797439c1d32->leave($__internal_656a793281692c86520cb237ec8ad38b1693e843fb282e02b13c4797439c1d32_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_4d8034ec718a8511ad18528a658c3d4c59e855d17498d8bc1a333efe55b9ff98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d8034ec718a8511ad18528a658c3d4c59e855d17498d8bc1a333efe55b9ff98->enter($__internal_4d8034ec718a8511ad18528a658c3d4c59e855d17498d8bc1a333efe55b9ff98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_2033f5981ca1f5ff4ac9f29ae5352bd324fa2b4b54460041360034145e555680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2033f5981ca1f5ff4ac9f29ae5352bd324fa2b4b54460041360034145e555680->enter($__internal_2033f5981ca1f5ff4ac9f29ae5352bd324fa2b4b54460041360034145e555680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_2033f5981ca1f5ff4ac9f29ae5352bd324fa2b4b54460041360034145e555680->leave($__internal_2033f5981ca1f5ff4ac9f29ae5352bd324fa2b4b54460041360034145e555680_prof);

        
        $__internal_4d8034ec718a8511ad18528a658c3d4c59e855d17498d8bc1a333efe55b9ff98->leave($__internal_4d8034ec718a8511ad18528a658c3d4c59e855d17498d8bc1a333efe55b9ff98_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_2a0a5f1c4cb037ba161aa6d6fd3a242631e913f3e6c3347a0d6bbe03909aa9e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a0a5f1c4cb037ba161aa6d6fd3a242631e913f3e6c3347a0d6bbe03909aa9e3->enter($__internal_2a0a5f1c4cb037ba161aa6d6fd3a242631e913f3e6c3347a0d6bbe03909aa9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_8d62677cc2959be3abe16a27f1937ffe22c527e7f9dead8b1cd52226e36849fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d62677cc2959be3abe16a27f1937ffe22c527e7f9dead8b1cd52226e36849fb->enter($__internal_8d62677cc2959be3abe16a27f1937ffe22c527e7f9dead8b1cd52226e36849fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_8d62677cc2959be3abe16a27f1937ffe22c527e7f9dead8b1cd52226e36849fb->leave($__internal_8d62677cc2959be3abe16a27f1937ffe22c527e7f9dead8b1cd52226e36849fb_prof);

        
        $__internal_2a0a5f1c4cb037ba161aa6d6fd3a242631e913f3e6c3347a0d6bbe03909aa9e3->leave($__internal_2a0a5f1c4cb037ba161aa6d6fd3a242631e913f3e6c3347a0d6bbe03909aa9e3_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_471ee10e7385df9120aba415eb7eb4e82334bc3fb1a77eb4e14583115f361fb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_471ee10e7385df9120aba415eb7eb4e82334bc3fb1a77eb4e14583115f361fb2->enter($__internal_471ee10e7385df9120aba415eb7eb4e82334bc3fb1a77eb4e14583115f361fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_3265799e79133f2874d6b11935b62061bc3dc8cc32c6e76c9e509caf0daf9990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3265799e79133f2874d6b11935b62061bc3dc8cc32c6e76c9e509caf0daf9990->enter($__internal_3265799e79133f2874d6b11935b62061bc3dc8cc32c6e76c9e509caf0daf9990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

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
        
        $__internal_3265799e79133f2874d6b11935b62061bc3dc8cc32c6e76c9e509caf0daf9990->leave($__internal_3265799e79133f2874d6b11935b62061bc3dc8cc32c6e76c9e509caf0daf9990_prof);

        
        $__internal_471ee10e7385df9120aba415eb7eb4e82334bc3fb1a77eb4e14583115f361fb2->leave($__internal_471ee10e7385df9120aba415eb7eb4e82334bc3fb1a77eb4e14583115f361fb2_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3024e682d30cea0769189a8fe97d020b17a450c3644f4e5401f3cf02bedbd2f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3024e682d30cea0769189a8fe97d020b17a450c3644f4e5401f3cf02bedbd2f2->enter($__internal_3024e682d30cea0769189a8fe97d020b17a450c3644f4e5401f3cf02bedbd2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_c7cd10a8d4d1d90f47cb198dfd7eedfed525c0780886177e674af15c121b024d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7cd10a8d4d1d90f47cb198dfd7eedfed525c0780886177e674af15c121b024d->enter($__internal_c7cd10a8d4d1d90f47cb198dfd7eedfed525c0780886177e674af15c121b024d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_c7cd10a8d4d1d90f47cb198dfd7eedfed525c0780886177e674af15c121b024d->leave($__internal_c7cd10a8d4d1d90f47cb198dfd7eedfed525c0780886177e674af15c121b024d_prof);

        
        $__internal_3024e682d30cea0769189a8fe97d020b17a450c3644f4e5401f3cf02bedbd2f2->leave($__internal_3024e682d30cea0769189a8fe97d020b17a450c3644f4e5401f3cf02bedbd2f2_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_159a89c30431663bd9707cc7bd55aebae66a495dec9b24d44151736040aa51f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_159a89c30431663bd9707cc7bd55aebae66a495dec9b24d44151736040aa51f5->enter($__internal_159a89c30431663bd9707cc7bd55aebae66a495dec9b24d44151736040aa51f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_1f65fa5814d8831358ac6fe35b1a8db467bf0501ce7f11726073aa5e77269905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f65fa5814d8831358ac6fe35b1a8db467bf0501ce7f11726073aa5e77269905->enter($__internal_1f65fa5814d8831358ac6fe35b1a8db467bf0501ce7f11726073aa5e77269905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_1f65fa5814d8831358ac6fe35b1a8db467bf0501ce7f11726073aa5e77269905->leave($__internal_1f65fa5814d8831358ac6fe35b1a8db467bf0501ce7f11726073aa5e77269905_prof);

        
        $__internal_159a89c30431663bd9707cc7bd55aebae66a495dec9b24d44151736040aa51f5->leave($__internal_159a89c30431663bd9707cc7bd55aebae66a495dec9b24d44151736040aa51f5_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_fd294c01dabf890e1a71654f78cdefc222cbbf275781632511dc40e9ad4deb71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd294c01dabf890e1a71654f78cdefc222cbbf275781632511dc40e9ad4deb71->enter($__internal_fd294c01dabf890e1a71654f78cdefc222cbbf275781632511dc40e9ad4deb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6bc51783c450c4ec5795c4670988395708f9d8ff4b49e95ef6abe9aa5a3e755f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc51783c450c4ec5795c4670988395708f9d8ff4b49e95ef6abe9aa5a3e755f->enter($__internal_6bc51783c450c4ec5795c4670988395708f9d8ff4b49e95ef6abe9aa5a3e755f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_6bc51783c450c4ec5795c4670988395708f9d8ff4b49e95ef6abe9aa5a3e755f->leave($__internal_6bc51783c450c4ec5795c4670988395708f9d8ff4b49e95ef6abe9aa5a3e755f_prof);

        
        $__internal_fd294c01dabf890e1a71654f78cdefc222cbbf275781632511dc40e9ad4deb71->leave($__internal_fd294c01dabf890e1a71654f78cdefc222cbbf275781632511dc40e9ad4deb71_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_266532c27267fb7b606f022ccdfc052ddff97e27a99d032e4e5160b5cb8480a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_266532c27267fb7b606f022ccdfc052ddff97e27a99d032e4e5160b5cb8480a6->enter($__internal_266532c27267fb7b606f022ccdfc052ddff97e27a99d032e4e5160b5cb8480a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_5251b35a078ce13e91ad019ec3893a38724d7b2f1962bafc6c81af1c76db5f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5251b35a078ce13e91ad019ec3893a38724d7b2f1962bafc6c81af1c76db5f46->enter($__internal_5251b35a078ce13e91ad019ec3893a38724d7b2f1962bafc6c81af1c76db5f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_5251b35a078ce13e91ad019ec3893a38724d7b2f1962bafc6c81af1c76db5f46->leave($__internal_5251b35a078ce13e91ad019ec3893a38724d7b2f1962bafc6c81af1c76db5f46_prof);

        
        $__internal_266532c27267fb7b606f022ccdfc052ddff97e27a99d032e4e5160b5cb8480a6->leave($__internal_266532c27267fb7b606f022ccdfc052ddff97e27a99d032e4e5160b5cb8480a6_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_7e316e1fa49daff889c6c3e6d1212b83f856c84448bb416a41f6e68b726d80df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e316e1fa49daff889c6c3e6d1212b83f856c84448bb416a41f6e68b726d80df->enter($__internal_7e316e1fa49daff889c6c3e6d1212b83f856c84448bb416a41f6e68b726d80df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_5d3ab7de1b3ff763cc33bdf64d01931ab8213ffcaff0a0746be8c4b85f3722a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3ab7de1b3ff763cc33bdf64d01931ab8213ffcaff0a0746be8c4b85f3722a9->enter($__internal_5d3ab7de1b3ff763cc33bdf64d01931ab8213ffcaff0a0746be8c4b85f3722a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_5d3ab7de1b3ff763cc33bdf64d01931ab8213ffcaff0a0746be8c4b85f3722a9->leave($__internal_5d3ab7de1b3ff763cc33bdf64d01931ab8213ffcaff0a0746be8c4b85f3722a9_prof);

        
        $__internal_7e316e1fa49daff889c6c3e6d1212b83f856c84448bb416a41f6e68b726d80df->leave($__internal_7e316e1fa49daff889c6c3e6d1212b83f856c84448bb416a41f6e68b726d80df_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_ebf762de48de1c4228a4474dd9b3a1590cd96277dd9fa9aa172065372df850fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebf762de48de1c4228a4474dd9b3a1590cd96277dd9fa9aa172065372df850fc->enter($__internal_ebf762de48de1c4228a4474dd9b3a1590cd96277dd9fa9aa172065372df850fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_0d939cdd4b420f9e5ada335bf895c62539c1f571141f95b18eba5bc46d68ea6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d939cdd4b420f9e5ada335bf895c62539c1f571141f95b18eba5bc46d68ea6c->enter($__internal_0d939cdd4b420f9e5ada335bf895c62539c1f571141f95b18eba5bc46d68ea6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_0d939cdd4b420f9e5ada335bf895c62539c1f571141f95b18eba5bc46d68ea6c->leave($__internal_0d939cdd4b420f9e5ada335bf895c62539c1f571141f95b18eba5bc46d68ea6c_prof);

        
        $__internal_ebf762de48de1c4228a4474dd9b3a1590cd96277dd9fa9aa172065372df850fc->leave($__internal_ebf762de48de1c4228a4474dd9b3a1590cd96277dd9fa9aa172065372df850fc_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_516a005960989522808e6ea4d068260ee72b27a0ab088356b4fb87a7316a5e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516a005960989522808e6ea4d068260ee72b27a0ab088356b4fb87a7316a5e78->enter($__internal_516a005960989522808e6ea4d068260ee72b27a0ab088356b4fb87a7316a5e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_dec63458eaba51e067bf2f706acb5a8d8bd327a6f4b9fd51d13e0b335acf9a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec63458eaba51e067bf2f706acb5a8d8bd327a6f4b9fd51d13e0b335acf9a44->enter($__internal_dec63458eaba51e067bf2f706acb5a8d8bd327a6f4b9fd51d13e0b335acf9a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

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
        
        $__internal_dec63458eaba51e067bf2f706acb5a8d8bd327a6f4b9fd51d13e0b335acf9a44->leave($__internal_dec63458eaba51e067bf2f706acb5a8d8bd327a6f4b9fd51d13e0b335acf9a44_prof);

        
        $__internal_516a005960989522808e6ea4d068260ee72b27a0ab088356b4fb87a7316a5e78->leave($__internal_516a005960989522808e6ea4d068260ee72b27a0ab088356b4fb87a7316a5e78_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_bb7c751ecb9d86df36a3e250ab5ff251ac77988558910f209fea76dabdb652aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb7c751ecb9d86df36a3e250ab5ff251ac77988558910f209fea76dabdb652aa->enter($__internal_bb7c751ecb9d86df36a3e250ab5ff251ac77988558910f209fea76dabdb652aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_809acb584b5b2cc78e0aefe6881954b4bdc219c9d78029eef7514ee31fc3e9b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809acb584b5b2cc78e0aefe6881954b4bdc219c9d78029eef7514ee31fc3e9b4->enter($__internal_809acb584b5b2cc78e0aefe6881954b4bdc219c9d78029eef7514ee31fc3e9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_809acb584b5b2cc78e0aefe6881954b4bdc219c9d78029eef7514ee31fc3e9b4->leave($__internal_809acb584b5b2cc78e0aefe6881954b4bdc219c9d78029eef7514ee31fc3e9b4_prof);

        
        $__internal_bb7c751ecb9d86df36a3e250ab5ff251ac77988558910f209fea76dabdb652aa->leave($__internal_bb7c751ecb9d86df36a3e250ab5ff251ac77988558910f209fea76dabdb652aa_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_c05a6709f6bf27c1fc055c5604c41e780a70aab2c39adff431481a3d5321b75f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c05a6709f6bf27c1fc055c5604c41e780a70aab2c39adff431481a3d5321b75f->enter($__internal_c05a6709f6bf27c1fc055c5604c41e780a70aab2c39adff431481a3d5321b75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_8375516afae314331b603324408b15ac798bd1aef26594faa0ba0de3906b1d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8375516afae314331b603324408b15ac798bd1aef26594faa0ba0de3906b1d4c->enter($__internal_8375516afae314331b603324408b15ac798bd1aef26594faa0ba0de3906b1d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_8375516afae314331b603324408b15ac798bd1aef26594faa0ba0de3906b1d4c->leave($__internal_8375516afae314331b603324408b15ac798bd1aef26594faa0ba0de3906b1d4c_prof);

        
        $__internal_c05a6709f6bf27c1fc055c5604c41e780a70aab2c39adff431481a3d5321b75f->leave($__internal_c05a6709f6bf27c1fc055c5604c41e780a70aab2c39adff431481a3d5321b75f_prof);

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
