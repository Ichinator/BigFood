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
        $__internal_ac813066cc6f963d09dedbde2d8b7ce39ad1fa530d09ae19c2565dc1841c1f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac813066cc6f963d09dedbde2d8b7ce39ad1fa530d09ae19c2565dc1841c1f3e->enter($__internal_ac813066cc6f963d09dedbde2d8b7ce39ad1fa530d09ae19c2565dc1841c1f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        $__internal_1630d4cd292df4e0f0c729c7e8a12d3abd9363413308731888d948296d3e5e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1630d4cd292df4e0f0c729c7e8a12d3abd9363413308731888d948296d3e5e17->enter($__internal_1630d4cd292df4e0f0c729c7e8a12d3abd9363413308731888d948296d3e5e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

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
        
        $__internal_ac813066cc6f963d09dedbde2d8b7ce39ad1fa530d09ae19c2565dc1841c1f3e->leave($__internal_ac813066cc6f963d09dedbde2d8b7ce39ad1fa530d09ae19c2565dc1841c1f3e_prof);

        
        $__internal_1630d4cd292df4e0f0c729c7e8a12d3abd9363413308731888d948296d3e5e17->leave($__internal_1630d4cd292df4e0f0c729c7e8a12d3abd9363413308731888d948296d3e5e17_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_40f03d0c14152c3a9eb7f4070e12ed4ab3df368f532d1b891fc61c05451f4325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f03d0c14152c3a9eb7f4070e12ed4ab3df368f532d1b891fc61c05451f4325->enter($__internal_40f03d0c14152c3a9eb7f4070e12ed4ab3df368f532d1b891fc61c05451f4325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_8bf011dbdae6d7f7caec029083883486e3785efba54a2fdbd02aad7eac0f83f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf011dbdae6d7f7caec029083883486e3785efba54a2fdbd02aad7eac0f83f5->enter($__internal_8bf011dbdae6d7f7caec029083883486e3785efba54a2fdbd02aad7eac0f83f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_8bf011dbdae6d7f7caec029083883486e3785efba54a2fdbd02aad7eac0f83f5->leave($__internal_8bf011dbdae6d7f7caec029083883486e3785efba54a2fdbd02aad7eac0f83f5_prof);

        
        $__internal_40f03d0c14152c3a9eb7f4070e12ed4ab3df368f532d1b891fc61c05451f4325->leave($__internal_40f03d0c14152c3a9eb7f4070e12ed4ab3df368f532d1b891fc61c05451f4325_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_b03a27c5c3af687cbfdbe9fb8162aefe64825a1dd32b16a6f7bc76bb9f74794e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03a27c5c3af687cbfdbe9fb8162aefe64825a1dd32b16a6f7bc76bb9f74794e->enter($__internal_b03a27c5c3af687cbfdbe9fb8162aefe64825a1dd32b16a6f7bc76bb9f74794e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_c86632dc8098632a811e110dd7312d27602c4713c2d255a94eb1590e1126b47e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86632dc8098632a811e110dd7312d27602c4713c2d255a94eb1590e1126b47e->enter($__internal_c86632dc8098632a811e110dd7312d27602c4713c2d255a94eb1590e1126b47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_c86632dc8098632a811e110dd7312d27602c4713c2d255a94eb1590e1126b47e->leave($__internal_c86632dc8098632a811e110dd7312d27602c4713c2d255a94eb1590e1126b47e_prof);

        
        $__internal_b03a27c5c3af687cbfdbe9fb8162aefe64825a1dd32b16a6f7bc76bb9f74794e->leave($__internal_b03a27c5c3af687cbfdbe9fb8162aefe64825a1dd32b16a6f7bc76bb9f74794e_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_f96ab48d4a638d62b130136797a29959ea3eb6739deb4a384585fd7e6b042f25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f96ab48d4a638d62b130136797a29959ea3eb6739deb4a384585fd7e6b042f25->enter($__internal_f96ab48d4a638d62b130136797a29959ea3eb6739deb4a384585fd7e6b042f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_af412809e56ba007060c19562e56f4e376784f4abb614a8ee56853814424cc3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af412809e56ba007060c19562e56f4e376784f4abb614a8ee56853814424cc3d->enter($__internal_af412809e56ba007060c19562e56f4e376784f4abb614a8ee56853814424cc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_af412809e56ba007060c19562e56f4e376784f4abb614a8ee56853814424cc3d->leave($__internal_af412809e56ba007060c19562e56f4e376784f4abb614a8ee56853814424cc3d_prof);

        
        $__internal_f96ab48d4a638d62b130136797a29959ea3eb6739deb4a384585fd7e6b042f25->leave($__internal_f96ab48d4a638d62b130136797a29959ea3eb6739deb4a384585fd7e6b042f25_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_ed649af5e7bc071cb00630d07f8bf070f899379f3ef794576c7847609236dfce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed649af5e7bc071cb00630d07f8bf070f899379f3ef794576c7847609236dfce->enter($__internal_ed649af5e7bc071cb00630d07f8bf070f899379f3ef794576c7847609236dfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_72f00f62e023ea8f49a7f0411036e6a01452103e2e4a1a0ef1450edec1aa5d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f00f62e023ea8f49a7f0411036e6a01452103e2e4a1a0ef1450edec1aa5d67->enter($__internal_72f00f62e023ea8f49a7f0411036e6a01452103e2e4a1a0ef1450edec1aa5d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_72f00f62e023ea8f49a7f0411036e6a01452103e2e4a1a0ef1450edec1aa5d67->leave($__internal_72f00f62e023ea8f49a7f0411036e6a01452103e2e4a1a0ef1450edec1aa5d67_prof);

        
        $__internal_ed649af5e7bc071cb00630d07f8bf070f899379f3ef794576c7847609236dfce->leave($__internal_ed649af5e7bc071cb00630d07f8bf070f899379f3ef794576c7847609236dfce_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_2dd7c051e78f30bb2c99c8559b816e27f28c1d31fbf72b26d2b91ddb0d340285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dd7c051e78f30bb2c99c8559b816e27f28c1d31fbf72b26d2b91ddb0d340285->enter($__internal_2dd7c051e78f30bb2c99c8559b816e27f28c1d31fbf72b26d2b91ddb0d340285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_2e4b7d0d053b17a441c808a784d647658ef5b2c120ad7d227ca06280e6bb1be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4b7d0d053b17a441c808a784d647658ef5b2c120ad7d227ca06280e6bb1be4->enter($__internal_2e4b7d0d053b17a441c808a784d647658ef5b2c120ad7d227ca06280e6bb1be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_2e4b7d0d053b17a441c808a784d647658ef5b2c120ad7d227ca06280e6bb1be4->leave($__internal_2e4b7d0d053b17a441c808a784d647658ef5b2c120ad7d227ca06280e6bb1be4_prof);

        
        $__internal_2dd7c051e78f30bb2c99c8559b816e27f28c1d31fbf72b26d2b91ddb0d340285->leave($__internal_2dd7c051e78f30bb2c99c8559b816e27f28c1d31fbf72b26d2b91ddb0d340285_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a933b39af6d84b00d67524ac94fd8468ac22e143e7462f443f596362074be6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a933b39af6d84b00d67524ac94fd8468ac22e143e7462f443f596362074be6f->enter($__internal_0a933b39af6d84b00d67524ac94fd8468ac22e143e7462f443f596362074be6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d0c0d2f4bf7e860bf2511725b9973e29cc84d5946c9bcb38cf7d860a2775487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0c0d2f4bf7e860bf2511725b9973e29cc84d5946c9bcb38cf7d860a2775487->enter($__internal_2d0c0d2f4bf7e860bf2511725b9973e29cc84d5946c9bcb38cf7d860a2775487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2d0c0d2f4bf7e860bf2511725b9973e29cc84d5946c9bcb38cf7d860a2775487->leave($__internal_2d0c0d2f4bf7e860bf2511725b9973e29cc84d5946c9bcb38cf7d860a2775487_prof);

        
        $__internal_0a933b39af6d84b00d67524ac94fd8468ac22e143e7462f443f596362074be6f->leave($__internal_0a933b39af6d84b00d67524ac94fd8468ac22e143e7462f443f596362074be6f_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_cd7c5f317caea1afa12bb39a3c76f6a6a5e015801d4923ac23c4354dacd55a2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd7c5f317caea1afa12bb39a3c76f6a6a5e015801d4923ac23c4354dacd55a2f->enter($__internal_cd7c5f317caea1afa12bb39a3c76f6a6a5e015801d4923ac23c4354dacd55a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_560ea8175bc766d3491ad74311c09c294da76e813ad2354d09415b1159b109b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_560ea8175bc766d3491ad74311c09c294da76e813ad2354d09415b1159b109b7->enter($__internal_560ea8175bc766d3491ad74311c09c294da76e813ad2354d09415b1159b109b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_560ea8175bc766d3491ad74311c09c294da76e813ad2354d09415b1159b109b7->leave($__internal_560ea8175bc766d3491ad74311c09c294da76e813ad2354d09415b1159b109b7_prof);

        
        $__internal_cd7c5f317caea1afa12bb39a3c76f6a6a5e015801d4923ac23c4354dacd55a2f->leave($__internal_cd7c5f317caea1afa12bb39a3c76f6a6a5e015801d4923ac23c4354dacd55a2f_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_645cd7019bb7bfe010700766547452fc8eb2ff591518f31c6f23a603d5cda7ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_645cd7019bb7bfe010700766547452fc8eb2ff591518f31c6f23a603d5cda7ad->enter($__internal_645cd7019bb7bfe010700766547452fc8eb2ff591518f31c6f23a603d5cda7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_bf4c72b0371bb60de96f3fc12be017decc43a20cda6fccc44b1e76a611145ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4c72b0371bb60de96f3fc12be017decc43a20cda6fccc44b1e76a611145ffd->enter($__internal_bf4c72b0371bb60de96f3fc12be017decc43a20cda6fccc44b1e76a611145ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_bf4c72b0371bb60de96f3fc12be017decc43a20cda6fccc44b1e76a611145ffd->leave($__internal_bf4c72b0371bb60de96f3fc12be017decc43a20cda6fccc44b1e76a611145ffd_prof);

        
        $__internal_645cd7019bb7bfe010700766547452fc8eb2ff591518f31c6f23a603d5cda7ad->leave($__internal_645cd7019bb7bfe010700766547452fc8eb2ff591518f31c6f23a603d5cda7ad_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_bf558008900a461a3eb3e36c28ab89c0c3b143650774141b89e129ceca708eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf558008900a461a3eb3e36c28ab89c0c3b143650774141b89e129ceca708eaa->enter($__internal_bf558008900a461a3eb3e36c28ab89c0c3b143650774141b89e129ceca708eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_573c1485c6934b80897ad0753f6fb6d3092bdf0db906d223056d88a070e72630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_573c1485c6934b80897ad0753f6fb6d3092bdf0db906d223056d88a070e72630->enter($__internal_573c1485c6934b80897ad0753f6fb6d3092bdf0db906d223056d88a070e72630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_573c1485c6934b80897ad0753f6fb6d3092bdf0db906d223056d88a070e72630->leave($__internal_573c1485c6934b80897ad0753f6fb6d3092bdf0db906d223056d88a070e72630_prof);

        
        $__internal_bf558008900a461a3eb3e36c28ab89c0c3b143650774141b89e129ceca708eaa->leave($__internal_bf558008900a461a3eb3e36c28ab89c0c3b143650774141b89e129ceca708eaa_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_99a7ace9c140fc23e80cc9c20754c8d99326636de6763604afbf5fdc15050cf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99a7ace9c140fc23e80cc9c20754c8d99326636de6763604afbf5fdc15050cf4->enter($__internal_99a7ace9c140fc23e80cc9c20754c8d99326636de6763604afbf5fdc15050cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_a865a448e0e4dbba8218621f43ca31c903f00d448a887ec6d0bc97aaabd8d947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a865a448e0e4dbba8218621f43ca31c903f00d448a887ec6d0bc97aaabd8d947->enter($__internal_a865a448e0e4dbba8218621f43ca31c903f00d448a887ec6d0bc97aaabd8d947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_a865a448e0e4dbba8218621f43ca31c903f00d448a887ec6d0bc97aaabd8d947->leave($__internal_a865a448e0e4dbba8218621f43ca31c903f00d448a887ec6d0bc97aaabd8d947_prof);

        
        $__internal_99a7ace9c140fc23e80cc9c20754c8d99326636de6763604afbf5fdc15050cf4->leave($__internal_99a7ace9c140fc23e80cc9c20754c8d99326636de6763604afbf5fdc15050cf4_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_d83a617114fd1d60eb38f8b3c87c95c520cccd50d838a8aa1904977e1a8a6e1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d83a617114fd1d60eb38f8b3c87c95c520cccd50d838a8aa1904977e1a8a6e1e->enter($__internal_d83a617114fd1d60eb38f8b3c87c95c520cccd50d838a8aa1904977e1a8a6e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_6dfd1151983054f10e3ed6b1b041539312533b33719188662df5482a7450f2ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dfd1151983054f10e3ed6b1b041539312533b33719188662df5482a7450f2ae->enter($__internal_6dfd1151983054f10e3ed6b1b041539312533b33719188662df5482a7450f2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_6dfd1151983054f10e3ed6b1b041539312533b33719188662df5482a7450f2ae->leave($__internal_6dfd1151983054f10e3ed6b1b041539312533b33719188662df5482a7450f2ae_prof);

        
        $__internal_d83a617114fd1d60eb38f8b3c87c95c520cccd50d838a8aa1904977e1a8a6e1e->leave($__internal_d83a617114fd1d60eb38f8b3c87c95c520cccd50d838a8aa1904977e1a8a6e1e_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_d34fcf228056def5990add852ee28bc1b958b317973480aefa0e0d67f133f45c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d34fcf228056def5990add852ee28bc1b958b317973480aefa0e0d67f133f45c->enter($__internal_d34fcf228056def5990add852ee28bc1b958b317973480aefa0e0d67f133f45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_e745dce21b3c662ef7888eea862973df57672bf4bfdde6e1e80bf479d5723e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e745dce21b3c662ef7888eea862973df57672bf4bfdde6e1e80bf479d5723e4c->enter($__internal_e745dce21b3c662ef7888eea862973df57672bf4bfdde6e1e80bf479d5723e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_e745dce21b3c662ef7888eea862973df57672bf4bfdde6e1e80bf479d5723e4c->leave($__internal_e745dce21b3c662ef7888eea862973df57672bf4bfdde6e1e80bf479d5723e4c_prof);

        
        $__internal_d34fcf228056def5990add852ee28bc1b958b317973480aefa0e0d67f133f45c->leave($__internal_d34fcf228056def5990add852ee28bc1b958b317973480aefa0e0d67f133f45c_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_41bc5d64f653094ba14ea530088e54491b9bb72f80bc29af51b6765eb1c8d3c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41bc5d64f653094ba14ea530088e54491b9bb72f80bc29af51b6765eb1c8d3c6->enter($__internal_41bc5d64f653094ba14ea530088e54491b9bb72f80bc29af51b6765eb1c8d3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_0d7f5de6cf6481688e6ab10548fd6bd3764970b915766fa46d8ae0aea416d730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d7f5de6cf6481688e6ab10548fd6bd3764970b915766fa46d8ae0aea416d730->enter($__internal_0d7f5de6cf6481688e6ab10548fd6bd3764970b915766fa46d8ae0aea416d730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_0d7f5de6cf6481688e6ab10548fd6bd3764970b915766fa46d8ae0aea416d730->leave($__internal_0d7f5de6cf6481688e6ab10548fd6bd3764970b915766fa46d8ae0aea416d730_prof);

        
        $__internal_41bc5d64f653094ba14ea530088e54491b9bb72f80bc29af51b6765eb1c8d3c6->leave($__internal_41bc5d64f653094ba14ea530088e54491b9bb72f80bc29af51b6765eb1c8d3c6_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_18b8614ba0448ddef7eafb23e9dbce9bfdb831ed6ccc8dc1bbc6f8ce830d9845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18b8614ba0448ddef7eafb23e9dbce9bfdb831ed6ccc8dc1bbc6f8ce830d9845->enter($__internal_18b8614ba0448ddef7eafb23e9dbce9bfdb831ed6ccc8dc1bbc6f8ce830d9845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_0bc2aa8070049a9d34d958baa93dccf7dca90a6994bb04b2ccfa4b14188585b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bc2aa8070049a9d34d958baa93dccf7dca90a6994bb04b2ccfa4b14188585b9->enter($__internal_0bc2aa8070049a9d34d958baa93dccf7dca90a6994bb04b2ccfa4b14188585b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

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
        
        $__internal_0bc2aa8070049a9d34d958baa93dccf7dca90a6994bb04b2ccfa4b14188585b9->leave($__internal_0bc2aa8070049a9d34d958baa93dccf7dca90a6994bb04b2ccfa4b14188585b9_prof);

        
        $__internal_18b8614ba0448ddef7eafb23e9dbce9bfdb831ed6ccc8dc1bbc6f8ce830d9845->leave($__internal_18b8614ba0448ddef7eafb23e9dbce9bfdb831ed6ccc8dc1bbc6f8ce830d9845_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_619e71f62f4cc3797436f62bbbd006ab789007ff8d760b505a0f9519d87dda95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_619e71f62f4cc3797436f62bbbd006ab789007ff8d760b505a0f9519d87dda95->enter($__internal_619e71f62f4cc3797436f62bbbd006ab789007ff8d760b505a0f9519d87dda95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_de1299036372351a5239a1db9550245726d87f641771c52039e2793196a0243c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1299036372351a5239a1db9550245726d87f641771c52039e2793196a0243c->enter($__internal_de1299036372351a5239a1db9550245726d87f641771c52039e2793196a0243c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_de1299036372351a5239a1db9550245726d87f641771c52039e2793196a0243c->leave($__internal_de1299036372351a5239a1db9550245726d87f641771c52039e2793196a0243c_prof);

        
        $__internal_619e71f62f4cc3797436f62bbbd006ab789007ff8d760b505a0f9519d87dda95->leave($__internal_619e71f62f4cc3797436f62bbbd006ab789007ff8d760b505a0f9519d87dda95_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_f76fabb10f1a72a9dac7530d4fb9701e86c991b18eebf6938cee1d07eec24605 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f76fabb10f1a72a9dac7530d4fb9701e86c991b18eebf6938cee1d07eec24605->enter($__internal_f76fabb10f1a72a9dac7530d4fb9701e86c991b18eebf6938cee1d07eec24605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_f3c557c3bc175d57b2d9a90554842f84b728fcddc25d545f6236213e88ea1930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c557c3bc175d57b2d9a90554842f84b728fcddc25d545f6236213e88ea1930->enter($__internal_f3c557c3bc175d57b2d9a90554842f84b728fcddc25d545f6236213e88ea1930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_f3c557c3bc175d57b2d9a90554842f84b728fcddc25d545f6236213e88ea1930->leave($__internal_f3c557c3bc175d57b2d9a90554842f84b728fcddc25d545f6236213e88ea1930_prof);

        
        $__internal_f76fabb10f1a72a9dac7530d4fb9701e86c991b18eebf6938cee1d07eec24605->leave($__internal_f76fabb10f1a72a9dac7530d4fb9701e86c991b18eebf6938cee1d07eec24605_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_2be06498393ead2ab53210afea60c96c14be0d4edec85b776f3869904af4ad74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2be06498393ead2ab53210afea60c96c14be0d4edec85b776f3869904af4ad74->enter($__internal_2be06498393ead2ab53210afea60c96c14be0d4edec85b776f3869904af4ad74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8046a6b56ae5bae589f6123b4d075973e2549b05feec2c8feddb01040087a557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8046a6b56ae5bae589f6123b4d075973e2549b05feec2c8feddb01040087a557->enter($__internal_8046a6b56ae5bae589f6123b4d075973e2549b05feec2c8feddb01040087a557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_8046a6b56ae5bae589f6123b4d075973e2549b05feec2c8feddb01040087a557->leave($__internal_8046a6b56ae5bae589f6123b4d075973e2549b05feec2c8feddb01040087a557_prof);

        
        $__internal_2be06498393ead2ab53210afea60c96c14be0d4edec85b776f3869904af4ad74->leave($__internal_2be06498393ead2ab53210afea60c96c14be0d4edec85b776f3869904af4ad74_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_fa14f899c817faa1fe41afad6d666deb6cab133c7b0083fbd739c169e038b8be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa14f899c817faa1fe41afad6d666deb6cab133c7b0083fbd739c169e038b8be->enter($__internal_fa14f899c817faa1fe41afad6d666deb6cab133c7b0083fbd739c169e038b8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_10b143b5cfae604d0a8f2ebaf2effce50ca147158678fa82fa8b3124cb4e7c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b143b5cfae604d0a8f2ebaf2effce50ca147158678fa82fa8b3124cb4e7c4e->enter($__internal_10b143b5cfae604d0a8f2ebaf2effce50ca147158678fa82fa8b3124cb4e7c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_10b143b5cfae604d0a8f2ebaf2effce50ca147158678fa82fa8b3124cb4e7c4e->leave($__internal_10b143b5cfae604d0a8f2ebaf2effce50ca147158678fa82fa8b3124cb4e7c4e_prof);

        
        $__internal_fa14f899c817faa1fe41afad6d666deb6cab133c7b0083fbd739c169e038b8be->leave($__internal_fa14f899c817faa1fe41afad6d666deb6cab133c7b0083fbd739c169e038b8be_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_5ec2397f79b45c22e36c28a8845dc531f0805f74334316e8eae72f4faf7b793c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec2397f79b45c22e36c28a8845dc531f0805f74334316e8eae72f4faf7b793c->enter($__internal_5ec2397f79b45c22e36c28a8845dc531f0805f74334316e8eae72f4faf7b793c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_c6254e5f524413860c93371a9248a9470bb631b7ff6264f801e8a697fe050f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6254e5f524413860c93371a9248a9470bb631b7ff6264f801e8a697fe050f57->enter($__internal_c6254e5f524413860c93371a9248a9470bb631b7ff6264f801e8a697fe050f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_c6254e5f524413860c93371a9248a9470bb631b7ff6264f801e8a697fe050f57->leave($__internal_c6254e5f524413860c93371a9248a9470bb631b7ff6264f801e8a697fe050f57_prof);

        
        $__internal_5ec2397f79b45c22e36c28a8845dc531f0805f74334316e8eae72f4faf7b793c->leave($__internal_5ec2397f79b45c22e36c28a8845dc531f0805f74334316e8eae72f4faf7b793c_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_cd4a9d258dccc76306656af3479c4b97745b805a16e9537d064ab524f67181b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd4a9d258dccc76306656af3479c4b97745b805a16e9537d064ab524f67181b8->enter($__internal_cd4a9d258dccc76306656af3479c4b97745b805a16e9537d064ab524f67181b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_c51acb2d96071b6e23ccb361bed9520a46fdc05e94c19f2638ad83b87f2127b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c51acb2d96071b6e23ccb361bed9520a46fdc05e94c19f2638ad83b87f2127b2->enter($__internal_c51acb2d96071b6e23ccb361bed9520a46fdc05e94c19f2638ad83b87f2127b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_c51acb2d96071b6e23ccb361bed9520a46fdc05e94c19f2638ad83b87f2127b2->leave($__internal_c51acb2d96071b6e23ccb361bed9520a46fdc05e94c19f2638ad83b87f2127b2_prof);

        
        $__internal_cd4a9d258dccc76306656af3479c4b97745b805a16e9537d064ab524f67181b8->leave($__internal_cd4a9d258dccc76306656af3479c4b97745b805a16e9537d064ab524f67181b8_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_0693fee9066a4d014a29b78486476c421f63ec47f47a42a566c6071ddc75cfb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0693fee9066a4d014a29b78486476c421f63ec47f47a42a566c6071ddc75cfb9->enter($__internal_0693fee9066a4d014a29b78486476c421f63ec47f47a42a566c6071ddc75cfb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_c341e405b27be18f2f3079bd39d7d29fbbcfbfb7be68eff9daa39fda055dfd62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c341e405b27be18f2f3079bd39d7d29fbbcfbfb7be68eff9daa39fda055dfd62->enter($__internal_c341e405b27be18f2f3079bd39d7d29fbbcfbfb7be68eff9daa39fda055dfd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

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
        
        $__internal_c341e405b27be18f2f3079bd39d7d29fbbcfbfb7be68eff9daa39fda055dfd62->leave($__internal_c341e405b27be18f2f3079bd39d7d29fbbcfbfb7be68eff9daa39fda055dfd62_prof);

        
        $__internal_0693fee9066a4d014a29b78486476c421f63ec47f47a42a566c6071ddc75cfb9->leave($__internal_0693fee9066a4d014a29b78486476c421f63ec47f47a42a566c6071ddc75cfb9_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_0d5cc74b9d5868c9701f4ad18b3b623142ab6713ce2b46ea8e16a6d795478bba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d5cc74b9d5868c9701f4ad18b3b623142ab6713ce2b46ea8e16a6d795478bba->enter($__internal_0d5cc74b9d5868c9701f4ad18b3b623142ab6713ce2b46ea8e16a6d795478bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_a14abce583c8518f5e08fd955707749ebd60e3d2bf253262cff07947f99b17e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a14abce583c8518f5e08fd955707749ebd60e3d2bf253262cff07947f99b17e5->enter($__internal_a14abce583c8518f5e08fd955707749ebd60e3d2bf253262cff07947f99b17e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_a14abce583c8518f5e08fd955707749ebd60e3d2bf253262cff07947f99b17e5->leave($__internal_a14abce583c8518f5e08fd955707749ebd60e3d2bf253262cff07947f99b17e5_prof);

        
        $__internal_0d5cc74b9d5868c9701f4ad18b3b623142ab6713ce2b46ea8e16a6d795478bba->leave($__internal_0d5cc74b9d5868c9701f4ad18b3b623142ab6713ce2b46ea8e16a6d795478bba_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_a6b021d392888e1c202255c3dc821d0e48128abc3d31e7e043d5a4fbe7aa8bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b021d392888e1c202255c3dc821d0e48128abc3d31e7e043d5a4fbe7aa8bef->enter($__internal_a6b021d392888e1c202255c3dc821d0e48128abc3d31e7e043d5a4fbe7aa8bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_17b0d84546f9355c393d2f288e8d3b3339387e720e1f6c207ac4e2955da5d5a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b0d84546f9355c393d2f288e8d3b3339387e720e1f6c207ac4e2955da5d5a2->enter($__internal_17b0d84546f9355c393d2f288e8d3b3339387e720e1f6c207ac4e2955da5d5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_17b0d84546f9355c393d2f288e8d3b3339387e720e1f6c207ac4e2955da5d5a2->leave($__internal_17b0d84546f9355c393d2f288e8d3b3339387e720e1f6c207ac4e2955da5d5a2_prof);

        
        $__internal_a6b021d392888e1c202255c3dc821d0e48128abc3d31e7e043d5a4fbe7aa8bef->leave($__internal_a6b021d392888e1c202255c3dc821d0e48128abc3d31e7e043d5a4fbe7aa8bef_prof);

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
