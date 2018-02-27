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
        $__internal_c6647a446b0f42a8e3bd240b35443aec8d275d6c830171a527782191c970f559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6647a446b0f42a8e3bd240b35443aec8d275d6c830171a527782191c970f559->enter($__internal_c6647a446b0f42a8e3bd240b35443aec8d275d6c830171a527782191c970f559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        $__internal_888dbe252673a6bce94ce72f520fc992e19e1bb84508fa2e94178b1260d6ccb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888dbe252673a6bce94ce72f520fc992e19e1bb84508fa2e94178b1260d6ccb7->enter($__internal_888dbe252673a6bce94ce72f520fc992e19e1bb84508fa2e94178b1260d6ccb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

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
        
        $__internal_c6647a446b0f42a8e3bd240b35443aec8d275d6c830171a527782191c970f559->leave($__internal_c6647a446b0f42a8e3bd240b35443aec8d275d6c830171a527782191c970f559_prof);

        
        $__internal_888dbe252673a6bce94ce72f520fc992e19e1bb84508fa2e94178b1260d6ccb7->leave($__internal_888dbe252673a6bce94ce72f520fc992e19e1bb84508fa2e94178b1260d6ccb7_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_e59a84baeb57382448c2064adb61eb06a06a4a073891161323e8a1eaa051a762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59a84baeb57382448c2064adb61eb06a06a4a073891161323e8a1eaa051a762->enter($__internal_e59a84baeb57382448c2064adb61eb06a06a4a073891161323e8a1eaa051a762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_394d477e91865223d230d8506c4f3c4c4d559964148eb498f52d14b804097c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_394d477e91865223d230d8506c4f3c4c4d559964148eb498f52d14b804097c0f->enter($__internal_394d477e91865223d230d8506c4f3c4c4d559964148eb498f52d14b804097c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_394d477e91865223d230d8506c4f3c4c4d559964148eb498f52d14b804097c0f->leave($__internal_394d477e91865223d230d8506c4f3c4c4d559964148eb498f52d14b804097c0f_prof);

        
        $__internal_e59a84baeb57382448c2064adb61eb06a06a4a073891161323e8a1eaa051a762->leave($__internal_e59a84baeb57382448c2064adb61eb06a06a4a073891161323e8a1eaa051a762_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_a1734385d8bd4b1efa5213260069d8abd66021a2e4d6b33252eb4466dd2b25e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1734385d8bd4b1efa5213260069d8abd66021a2e4d6b33252eb4466dd2b25e3->enter($__internal_a1734385d8bd4b1efa5213260069d8abd66021a2e4d6b33252eb4466dd2b25e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_8ddd7f1312cae0879763674a49daa24ddfc19c9691a3bcfae09d207803200ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ddd7f1312cae0879763674a49daa24ddfc19c9691a3bcfae09d207803200ed7->enter($__internal_8ddd7f1312cae0879763674a49daa24ddfc19c9691a3bcfae09d207803200ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_8ddd7f1312cae0879763674a49daa24ddfc19c9691a3bcfae09d207803200ed7->leave($__internal_8ddd7f1312cae0879763674a49daa24ddfc19c9691a3bcfae09d207803200ed7_prof);

        
        $__internal_a1734385d8bd4b1efa5213260069d8abd66021a2e4d6b33252eb4466dd2b25e3->leave($__internal_a1734385d8bd4b1efa5213260069d8abd66021a2e4d6b33252eb4466dd2b25e3_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_2000b50cf5dbf0cc4ae8be1a39b5ab9d505b58abae1a356db5ed90ac8cfcfb5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2000b50cf5dbf0cc4ae8be1a39b5ab9d505b58abae1a356db5ed90ac8cfcfb5b->enter($__internal_2000b50cf5dbf0cc4ae8be1a39b5ab9d505b58abae1a356db5ed90ac8cfcfb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_b8454f39a25d86c6439d4b1172c57b686e4f0d4221e9a30447d06e0f71efe4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8454f39a25d86c6439d4b1172c57b686e4f0d4221e9a30447d06e0f71efe4fb->enter($__internal_b8454f39a25d86c6439d4b1172c57b686e4f0d4221e9a30447d06e0f71efe4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_b8454f39a25d86c6439d4b1172c57b686e4f0d4221e9a30447d06e0f71efe4fb->leave($__internal_b8454f39a25d86c6439d4b1172c57b686e4f0d4221e9a30447d06e0f71efe4fb_prof);

        
        $__internal_2000b50cf5dbf0cc4ae8be1a39b5ab9d505b58abae1a356db5ed90ac8cfcfb5b->leave($__internal_2000b50cf5dbf0cc4ae8be1a39b5ab9d505b58abae1a356db5ed90ac8cfcfb5b_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_f6e9e57471c93ffc5e6c8a08bc8199738767c424f2abcbed0564d949660d9c91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6e9e57471c93ffc5e6c8a08bc8199738767c424f2abcbed0564d949660d9c91->enter($__internal_f6e9e57471c93ffc5e6c8a08bc8199738767c424f2abcbed0564d949660d9c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_84276c60c1e5421f5a2fed6ab90af0d571eb65c4dc6f168713ecafe86bd94128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84276c60c1e5421f5a2fed6ab90af0d571eb65c4dc6f168713ecafe86bd94128->enter($__internal_84276c60c1e5421f5a2fed6ab90af0d571eb65c4dc6f168713ecafe86bd94128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_84276c60c1e5421f5a2fed6ab90af0d571eb65c4dc6f168713ecafe86bd94128->leave($__internal_84276c60c1e5421f5a2fed6ab90af0d571eb65c4dc6f168713ecafe86bd94128_prof);

        
        $__internal_f6e9e57471c93ffc5e6c8a08bc8199738767c424f2abcbed0564d949660d9c91->leave($__internal_f6e9e57471c93ffc5e6c8a08bc8199738767c424f2abcbed0564d949660d9c91_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_bb8f2c8e3e8a2fdca52f62b5d1ec1c00e4967d781ef73b61d085d9e14ac874fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb8f2c8e3e8a2fdca52f62b5d1ec1c00e4967d781ef73b61d085d9e14ac874fa->enter($__internal_bb8f2c8e3e8a2fdca52f62b5d1ec1c00e4967d781ef73b61d085d9e14ac874fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_3f99d70d2eec6c809274e0d84175105f969426a8065118c52bffb5f0587626c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f99d70d2eec6c809274e0d84175105f969426a8065118c52bffb5f0587626c7->enter($__internal_3f99d70d2eec6c809274e0d84175105f969426a8065118c52bffb5f0587626c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_3f99d70d2eec6c809274e0d84175105f969426a8065118c52bffb5f0587626c7->leave($__internal_3f99d70d2eec6c809274e0d84175105f969426a8065118c52bffb5f0587626c7_prof);

        
        $__internal_bb8f2c8e3e8a2fdca52f62b5d1ec1c00e4967d781ef73b61d085d9e14ac874fa->leave($__internal_bb8f2c8e3e8a2fdca52f62b5d1ec1c00e4967d781ef73b61d085d9e14ac874fa_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_1940b294e493da2a932491a2fc482e70f777ff07bc5cf76cb82ec0db9c936d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1940b294e493da2a932491a2fc482e70f777ff07bc5cf76cb82ec0db9c936d2b->enter($__internal_1940b294e493da2a932491a2fc482e70f777ff07bc5cf76cb82ec0db9c936d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f217cba6e968b1fd5c1add819c97ee4c7530596175c24f88f8c2c22021ae0e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f217cba6e968b1fd5c1add819c97ee4c7530596175c24f88f8c2c22021ae0e35->enter($__internal_f217cba6e968b1fd5c1add819c97ee4c7530596175c24f88f8c2c22021ae0e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f217cba6e968b1fd5c1add819c97ee4c7530596175c24f88f8c2c22021ae0e35->leave($__internal_f217cba6e968b1fd5c1add819c97ee4c7530596175c24f88f8c2c22021ae0e35_prof);

        
        $__internal_1940b294e493da2a932491a2fc482e70f777ff07bc5cf76cb82ec0db9c936d2b->leave($__internal_1940b294e493da2a932491a2fc482e70f777ff07bc5cf76cb82ec0db9c936d2b_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_b115c55b1e939eed0239f5ce2da9a300c437b75cab4822454a24cd516bf035dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b115c55b1e939eed0239f5ce2da9a300c437b75cab4822454a24cd516bf035dc->enter($__internal_b115c55b1e939eed0239f5ce2da9a300c437b75cab4822454a24cd516bf035dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_6d141b4e7de4470ab80710fd6af992c83982b0bf4d7939272a0796d2699f7690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d141b4e7de4470ab80710fd6af992c83982b0bf4d7939272a0796d2699f7690->enter($__internal_6d141b4e7de4470ab80710fd6af992c83982b0bf4d7939272a0796d2699f7690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_6d141b4e7de4470ab80710fd6af992c83982b0bf4d7939272a0796d2699f7690->leave($__internal_6d141b4e7de4470ab80710fd6af992c83982b0bf4d7939272a0796d2699f7690_prof);

        
        $__internal_b115c55b1e939eed0239f5ce2da9a300c437b75cab4822454a24cd516bf035dc->leave($__internal_b115c55b1e939eed0239f5ce2da9a300c437b75cab4822454a24cd516bf035dc_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_9d4d10d90a3150b465ee3296ed4aa957790eb8789709c38dd8d2c06fa579ba07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d4d10d90a3150b465ee3296ed4aa957790eb8789709c38dd8d2c06fa579ba07->enter($__internal_9d4d10d90a3150b465ee3296ed4aa957790eb8789709c38dd8d2c06fa579ba07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_5f656f4ed907b2fa1a830524c98279c48d2656e0d31e3be17f3987e41f0efd07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f656f4ed907b2fa1a830524c98279c48d2656e0d31e3be17f3987e41f0efd07->enter($__internal_5f656f4ed907b2fa1a830524c98279c48d2656e0d31e3be17f3987e41f0efd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_5f656f4ed907b2fa1a830524c98279c48d2656e0d31e3be17f3987e41f0efd07->leave($__internal_5f656f4ed907b2fa1a830524c98279c48d2656e0d31e3be17f3987e41f0efd07_prof);

        
        $__internal_9d4d10d90a3150b465ee3296ed4aa957790eb8789709c38dd8d2c06fa579ba07->leave($__internal_9d4d10d90a3150b465ee3296ed4aa957790eb8789709c38dd8d2c06fa579ba07_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_dec8624df5ad8721783ea89f2139620d177b9d3653ffe9c9e82f30d9b7bf5b09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dec8624df5ad8721783ea89f2139620d177b9d3653ffe9c9e82f30d9b7bf5b09->enter($__internal_dec8624df5ad8721783ea89f2139620d177b9d3653ffe9c9e82f30d9b7bf5b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_c2f3216d5594495215296658460d8f7f726883a5ce73e390845b02cf40a166b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f3216d5594495215296658460d8f7f726883a5ce73e390845b02cf40a166b1->enter($__internal_c2f3216d5594495215296658460d8f7f726883a5ce73e390845b02cf40a166b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_c2f3216d5594495215296658460d8f7f726883a5ce73e390845b02cf40a166b1->leave($__internal_c2f3216d5594495215296658460d8f7f726883a5ce73e390845b02cf40a166b1_prof);

        
        $__internal_dec8624df5ad8721783ea89f2139620d177b9d3653ffe9c9e82f30d9b7bf5b09->leave($__internal_dec8624df5ad8721783ea89f2139620d177b9d3653ffe9c9e82f30d9b7bf5b09_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_5ba26c72039c1cd854989c03abb52cf98da3316645dfada3bbd3f4d4fece4ead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ba26c72039c1cd854989c03abb52cf98da3316645dfada3bbd3f4d4fece4ead->enter($__internal_5ba26c72039c1cd854989c03abb52cf98da3316645dfada3bbd3f4d4fece4ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_b8158a21832185c352b92c451ae14806a70e0a062fd394ee4aa9f422104bfc94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8158a21832185c352b92c451ae14806a70e0a062fd394ee4aa9f422104bfc94->enter($__internal_b8158a21832185c352b92c451ae14806a70e0a062fd394ee4aa9f422104bfc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_b8158a21832185c352b92c451ae14806a70e0a062fd394ee4aa9f422104bfc94->leave($__internal_b8158a21832185c352b92c451ae14806a70e0a062fd394ee4aa9f422104bfc94_prof);

        
        $__internal_5ba26c72039c1cd854989c03abb52cf98da3316645dfada3bbd3f4d4fece4ead->leave($__internal_5ba26c72039c1cd854989c03abb52cf98da3316645dfada3bbd3f4d4fece4ead_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_8c74be6dc9642c9a8974bdb032a46f90778fda844e36e8a2426b23c90b1b0a89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c74be6dc9642c9a8974bdb032a46f90778fda844e36e8a2426b23c90b1b0a89->enter($__internal_8c74be6dc9642c9a8974bdb032a46f90778fda844e36e8a2426b23c90b1b0a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_6c3277a2cfb8593c5162a7d642107ad9e842ecfb2097f53c5d796b6676d0804b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c3277a2cfb8593c5162a7d642107ad9e842ecfb2097f53c5d796b6676d0804b->enter($__internal_6c3277a2cfb8593c5162a7d642107ad9e842ecfb2097f53c5d796b6676d0804b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_6c3277a2cfb8593c5162a7d642107ad9e842ecfb2097f53c5d796b6676d0804b->leave($__internal_6c3277a2cfb8593c5162a7d642107ad9e842ecfb2097f53c5d796b6676d0804b_prof);

        
        $__internal_8c74be6dc9642c9a8974bdb032a46f90778fda844e36e8a2426b23c90b1b0a89->leave($__internal_8c74be6dc9642c9a8974bdb032a46f90778fda844e36e8a2426b23c90b1b0a89_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_3184176a2f3271ecef9954611f60942b90434361309651196727c84b7b9a8345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3184176a2f3271ecef9954611f60942b90434361309651196727c84b7b9a8345->enter($__internal_3184176a2f3271ecef9954611f60942b90434361309651196727c84b7b9a8345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_47362378993d8d88eadb0960962e6e5de1fcf498d7b95fa0c991f8cb4c02bca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47362378993d8d88eadb0960962e6e5de1fcf498d7b95fa0c991f8cb4c02bca9->enter($__internal_47362378993d8d88eadb0960962e6e5de1fcf498d7b95fa0c991f8cb4c02bca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_47362378993d8d88eadb0960962e6e5de1fcf498d7b95fa0c991f8cb4c02bca9->leave($__internal_47362378993d8d88eadb0960962e6e5de1fcf498d7b95fa0c991f8cb4c02bca9_prof);

        
        $__internal_3184176a2f3271ecef9954611f60942b90434361309651196727c84b7b9a8345->leave($__internal_3184176a2f3271ecef9954611f60942b90434361309651196727c84b7b9a8345_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_f9701abe70824d4ad38ddf62de91eb828917d8c975ddef31589961137c13b683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9701abe70824d4ad38ddf62de91eb828917d8c975ddef31589961137c13b683->enter($__internal_f9701abe70824d4ad38ddf62de91eb828917d8c975ddef31589961137c13b683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_9852f174cc55a0e0693af7550ec33039a88f9a02281981cfd713b40a77df966f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9852f174cc55a0e0693af7550ec33039a88f9a02281981cfd713b40a77df966f->enter($__internal_9852f174cc55a0e0693af7550ec33039a88f9a02281981cfd713b40a77df966f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_9852f174cc55a0e0693af7550ec33039a88f9a02281981cfd713b40a77df966f->leave($__internal_9852f174cc55a0e0693af7550ec33039a88f9a02281981cfd713b40a77df966f_prof);

        
        $__internal_f9701abe70824d4ad38ddf62de91eb828917d8c975ddef31589961137c13b683->leave($__internal_f9701abe70824d4ad38ddf62de91eb828917d8c975ddef31589961137c13b683_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_d69e6568a3e37137568286ee1e3e818b5e33d195b89fa9410bdd82dc4af266f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d69e6568a3e37137568286ee1e3e818b5e33d195b89fa9410bdd82dc4af266f1->enter($__internal_d69e6568a3e37137568286ee1e3e818b5e33d195b89fa9410bdd82dc4af266f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_394dc9ae15bc3c123abe1f6bfefa5ccfd6d504db6c93c271dd306d8636167af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_394dc9ae15bc3c123abe1f6bfefa5ccfd6d504db6c93c271dd306d8636167af7->enter($__internal_394dc9ae15bc3c123abe1f6bfefa5ccfd6d504db6c93c271dd306d8636167af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

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
        
        $__internal_394dc9ae15bc3c123abe1f6bfefa5ccfd6d504db6c93c271dd306d8636167af7->leave($__internal_394dc9ae15bc3c123abe1f6bfefa5ccfd6d504db6c93c271dd306d8636167af7_prof);

        
        $__internal_d69e6568a3e37137568286ee1e3e818b5e33d195b89fa9410bdd82dc4af266f1->leave($__internal_d69e6568a3e37137568286ee1e3e818b5e33d195b89fa9410bdd82dc4af266f1_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f611eb62025a48cdb64a9e112870aaf5820ef766ddf1b23f1e2014b15e52eac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f611eb62025a48cdb64a9e112870aaf5820ef766ddf1b23f1e2014b15e52eac2->enter($__internal_f611eb62025a48cdb64a9e112870aaf5820ef766ddf1b23f1e2014b15e52eac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_a1e2da6180b32cc1a041034deb2849dd494739375fe843a9437d8d189396a3b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e2da6180b32cc1a041034deb2849dd494739375fe843a9437d8d189396a3b0->enter($__internal_a1e2da6180b32cc1a041034deb2849dd494739375fe843a9437d8d189396a3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_a1e2da6180b32cc1a041034deb2849dd494739375fe843a9437d8d189396a3b0->leave($__internal_a1e2da6180b32cc1a041034deb2849dd494739375fe843a9437d8d189396a3b0_prof);

        
        $__internal_f611eb62025a48cdb64a9e112870aaf5820ef766ddf1b23f1e2014b15e52eac2->leave($__internal_f611eb62025a48cdb64a9e112870aaf5820ef766ddf1b23f1e2014b15e52eac2_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_da973260af18610b862292c6185c2e92014486ea2d7b99b887a95e05f8b3c7d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da973260af18610b862292c6185c2e92014486ea2d7b99b887a95e05f8b3c7d3->enter($__internal_da973260af18610b862292c6185c2e92014486ea2d7b99b887a95e05f8b3c7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_544503e8cff0da43081e5daebfd6d10c35251810cd2f950f719b7ed70a93cd4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_544503e8cff0da43081e5daebfd6d10c35251810cd2f950f719b7ed70a93cd4f->enter($__internal_544503e8cff0da43081e5daebfd6d10c35251810cd2f950f719b7ed70a93cd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_544503e8cff0da43081e5daebfd6d10c35251810cd2f950f719b7ed70a93cd4f->leave($__internal_544503e8cff0da43081e5daebfd6d10c35251810cd2f950f719b7ed70a93cd4f_prof);

        
        $__internal_da973260af18610b862292c6185c2e92014486ea2d7b99b887a95e05f8b3c7d3->leave($__internal_da973260af18610b862292c6185c2e92014486ea2d7b99b887a95e05f8b3c7d3_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_fddc786f34b62027b621c5a6fa22953b2e286841d266e60f9746a715de61b4e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fddc786f34b62027b621c5a6fa22953b2e286841d266e60f9746a715de61b4e8->enter($__internal_fddc786f34b62027b621c5a6fa22953b2e286841d266e60f9746a715de61b4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5d564aaba82ebff32502ee6674cc6b83f8f08d1cb48367eca08b6ac0b0198dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d564aaba82ebff32502ee6674cc6b83f8f08d1cb48367eca08b6ac0b0198dc9->enter($__internal_5d564aaba82ebff32502ee6674cc6b83f8f08d1cb48367eca08b6ac0b0198dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_5d564aaba82ebff32502ee6674cc6b83f8f08d1cb48367eca08b6ac0b0198dc9->leave($__internal_5d564aaba82ebff32502ee6674cc6b83f8f08d1cb48367eca08b6ac0b0198dc9_prof);

        
        $__internal_fddc786f34b62027b621c5a6fa22953b2e286841d266e60f9746a715de61b4e8->leave($__internal_fddc786f34b62027b621c5a6fa22953b2e286841d266e60f9746a715de61b4e8_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_3f75badeb2f046eaceb62a1c38c5c663dd564b94359f062c51b9e47942869c9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f75badeb2f046eaceb62a1c38c5c663dd564b94359f062c51b9e47942869c9e->enter($__internal_3f75badeb2f046eaceb62a1c38c5c663dd564b94359f062c51b9e47942869c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_47f44cd43afda0d869ff43fad0e5bc19bad929d7251ceef5abb2175057b8bbb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f44cd43afda0d869ff43fad0e5bc19bad929d7251ceef5abb2175057b8bbb3->enter($__internal_47f44cd43afda0d869ff43fad0e5bc19bad929d7251ceef5abb2175057b8bbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_47f44cd43afda0d869ff43fad0e5bc19bad929d7251ceef5abb2175057b8bbb3->leave($__internal_47f44cd43afda0d869ff43fad0e5bc19bad929d7251ceef5abb2175057b8bbb3_prof);

        
        $__internal_3f75badeb2f046eaceb62a1c38c5c663dd564b94359f062c51b9e47942869c9e->leave($__internal_3f75badeb2f046eaceb62a1c38c5c663dd564b94359f062c51b9e47942869c9e_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_9dca24d1d0841686a357954589ba572dcc993d8263910e61bfe53d64f882fd12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dca24d1d0841686a357954589ba572dcc993d8263910e61bfe53d64f882fd12->enter($__internal_9dca24d1d0841686a357954589ba572dcc993d8263910e61bfe53d64f882fd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_b1e5045b06c6d103d75729e0d6ebacd21f73293a5fe335b4f03bbffcd4fe0d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e5045b06c6d103d75729e0d6ebacd21f73293a5fe335b4f03bbffcd4fe0d07->enter($__internal_b1e5045b06c6d103d75729e0d6ebacd21f73293a5fe335b4f03bbffcd4fe0d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_b1e5045b06c6d103d75729e0d6ebacd21f73293a5fe335b4f03bbffcd4fe0d07->leave($__internal_b1e5045b06c6d103d75729e0d6ebacd21f73293a5fe335b4f03bbffcd4fe0d07_prof);

        
        $__internal_9dca24d1d0841686a357954589ba572dcc993d8263910e61bfe53d64f882fd12->leave($__internal_9dca24d1d0841686a357954589ba572dcc993d8263910e61bfe53d64f882fd12_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_b95eeaa6fb564519d909262e06ef2c345d383e4592e1a79a33ca1e35abb1a19a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b95eeaa6fb564519d909262e06ef2c345d383e4592e1a79a33ca1e35abb1a19a->enter($__internal_b95eeaa6fb564519d909262e06ef2c345d383e4592e1a79a33ca1e35abb1a19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_60788d6a17a801e633b376fb46e16958bcb037179ee16b6052b3e5754dfb67cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60788d6a17a801e633b376fb46e16958bcb037179ee16b6052b3e5754dfb67cb->enter($__internal_60788d6a17a801e633b376fb46e16958bcb037179ee16b6052b3e5754dfb67cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_60788d6a17a801e633b376fb46e16958bcb037179ee16b6052b3e5754dfb67cb->leave($__internal_60788d6a17a801e633b376fb46e16958bcb037179ee16b6052b3e5754dfb67cb_prof);

        
        $__internal_b95eeaa6fb564519d909262e06ef2c345d383e4592e1a79a33ca1e35abb1a19a->leave($__internal_b95eeaa6fb564519d909262e06ef2c345d383e4592e1a79a33ca1e35abb1a19a_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_d669e275b9b9af83208c113804b0ed7d34e9cedd572e15cada74762472ff9b50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d669e275b9b9af83208c113804b0ed7d34e9cedd572e15cada74762472ff9b50->enter($__internal_d669e275b9b9af83208c113804b0ed7d34e9cedd572e15cada74762472ff9b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_33426f97aaf2e7822273d5a39e1ea4796b313168030a47037f47b50a185737e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33426f97aaf2e7822273d5a39e1ea4796b313168030a47037f47b50a185737e1->enter($__internal_33426f97aaf2e7822273d5a39e1ea4796b313168030a47037f47b50a185737e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

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
        
        $__internal_33426f97aaf2e7822273d5a39e1ea4796b313168030a47037f47b50a185737e1->leave($__internal_33426f97aaf2e7822273d5a39e1ea4796b313168030a47037f47b50a185737e1_prof);

        
        $__internal_d669e275b9b9af83208c113804b0ed7d34e9cedd572e15cada74762472ff9b50->leave($__internal_d669e275b9b9af83208c113804b0ed7d34e9cedd572e15cada74762472ff9b50_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_8fc15ad98fcc225e114a536520774e90ef4992a91a9c12e210a475a5d8e94791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fc15ad98fcc225e114a536520774e90ef4992a91a9c12e210a475a5d8e94791->enter($__internal_8fc15ad98fcc225e114a536520774e90ef4992a91a9c12e210a475a5d8e94791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_08fe2963094324c1da6043bbd2e5ec233a34b0205ae84e6897d7aae207b3db06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08fe2963094324c1da6043bbd2e5ec233a34b0205ae84e6897d7aae207b3db06->enter($__internal_08fe2963094324c1da6043bbd2e5ec233a34b0205ae84e6897d7aae207b3db06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_08fe2963094324c1da6043bbd2e5ec233a34b0205ae84e6897d7aae207b3db06->leave($__internal_08fe2963094324c1da6043bbd2e5ec233a34b0205ae84e6897d7aae207b3db06_prof);

        
        $__internal_8fc15ad98fcc225e114a536520774e90ef4992a91a9c12e210a475a5d8e94791->leave($__internal_8fc15ad98fcc225e114a536520774e90ef4992a91a9c12e210a475a5d8e94791_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_fed50ee80d295aa188f39a35e3d7d4abf2f75a9e78f67824acf3bd0f2ec59192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fed50ee80d295aa188f39a35e3d7d4abf2f75a9e78f67824acf3bd0f2ec59192->enter($__internal_fed50ee80d295aa188f39a35e3d7d4abf2f75a9e78f67824acf3bd0f2ec59192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_40295da9978462f40ac7fe7e1539aa179816d9d69df8b4cfc17232806136eef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40295da9978462f40ac7fe7e1539aa179816d9d69df8b4cfc17232806136eef8->enter($__internal_40295da9978462f40ac7fe7e1539aa179816d9d69df8b4cfc17232806136eef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_40295da9978462f40ac7fe7e1539aa179816d9d69df8b4cfc17232806136eef8->leave($__internal_40295da9978462f40ac7fe7e1539aa179816d9d69df8b4cfc17232806136eef8_prof);

        
        $__internal_fed50ee80d295aa188f39a35e3d7d4abf2f75a9e78f67824acf3bd0f2ec59192->leave($__internal_fed50ee80d295aa188f39a35e3d7d4abf2f75a9e78f67824acf3bd0f2ec59192_prof);

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
