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
        $__internal_43f19284f46f3de08ef01c090a8865f94e797f1b07dfb027ca35ae4f58315f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43f19284f46f3de08ef01c090a8865f94e797f1b07dfb027ca35ae4f58315f0e->enter($__internal_43f19284f46f3de08ef01c090a8865f94e797f1b07dfb027ca35ae4f58315f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        $__internal_841d1a35bdf13613d5fc3383f643f19fcb5cbe14aaf2314077bc1261dcdb95a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_841d1a35bdf13613d5fc3383f643f19fcb5cbe14aaf2314077bc1261dcdb95a5->enter($__internal_841d1a35bdf13613d5fc3383f643f19fcb5cbe14aaf2314077bc1261dcdb95a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

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
        
        $__internal_43f19284f46f3de08ef01c090a8865f94e797f1b07dfb027ca35ae4f58315f0e->leave($__internal_43f19284f46f3de08ef01c090a8865f94e797f1b07dfb027ca35ae4f58315f0e_prof);

        
        $__internal_841d1a35bdf13613d5fc3383f643f19fcb5cbe14aaf2314077bc1261dcdb95a5->leave($__internal_841d1a35bdf13613d5fc3383f643f19fcb5cbe14aaf2314077bc1261dcdb95a5_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_62b1b1020cf4f8b75e09bf768873abbb468a377060ba00b4e8c8c32728ae68fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62b1b1020cf4f8b75e09bf768873abbb468a377060ba00b4e8c8c32728ae68fe->enter($__internal_62b1b1020cf4f8b75e09bf768873abbb468a377060ba00b4e8c8c32728ae68fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_40cb4fa22008c31b120aec96e97e9d4bbabc753222a2706103b7e882f7b13a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40cb4fa22008c31b120aec96e97e9d4bbabc753222a2706103b7e882f7b13a84->enter($__internal_40cb4fa22008c31b120aec96e97e9d4bbabc753222a2706103b7e882f7b13a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_40cb4fa22008c31b120aec96e97e9d4bbabc753222a2706103b7e882f7b13a84->leave($__internal_40cb4fa22008c31b120aec96e97e9d4bbabc753222a2706103b7e882f7b13a84_prof);

        
        $__internal_62b1b1020cf4f8b75e09bf768873abbb468a377060ba00b4e8c8c32728ae68fe->leave($__internal_62b1b1020cf4f8b75e09bf768873abbb468a377060ba00b4e8c8c32728ae68fe_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_56f720809e285bdf2c67731c29e3206953e1d95aafe0b1beed215957215ff47a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f720809e285bdf2c67731c29e3206953e1d95aafe0b1beed215957215ff47a->enter($__internal_56f720809e285bdf2c67731c29e3206953e1d95aafe0b1beed215957215ff47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_c0f77fd9c3809dcbf21fdd387a8f772eb343bc696b293a4a473a6ebdc048da15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f77fd9c3809dcbf21fdd387a8f772eb343bc696b293a4a473a6ebdc048da15->enter($__internal_c0f77fd9c3809dcbf21fdd387a8f772eb343bc696b293a4a473a6ebdc048da15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_c0f77fd9c3809dcbf21fdd387a8f772eb343bc696b293a4a473a6ebdc048da15->leave($__internal_c0f77fd9c3809dcbf21fdd387a8f772eb343bc696b293a4a473a6ebdc048da15_prof);

        
        $__internal_56f720809e285bdf2c67731c29e3206953e1d95aafe0b1beed215957215ff47a->leave($__internal_56f720809e285bdf2c67731c29e3206953e1d95aafe0b1beed215957215ff47a_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_47b776068ef722dc48a22493b405ac2ee0f2730b57d9d2ed214762015d5c5bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47b776068ef722dc48a22493b405ac2ee0f2730b57d9d2ed214762015d5c5bb0->enter($__internal_47b776068ef722dc48a22493b405ac2ee0f2730b57d9d2ed214762015d5c5bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_a82d82200222e463b868eb4097993c939095f51535eac72647a361ade2ff611f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a82d82200222e463b868eb4097993c939095f51535eac72647a361ade2ff611f->enter($__internal_a82d82200222e463b868eb4097993c939095f51535eac72647a361ade2ff611f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_a82d82200222e463b868eb4097993c939095f51535eac72647a361ade2ff611f->leave($__internal_a82d82200222e463b868eb4097993c939095f51535eac72647a361ade2ff611f_prof);

        
        $__internal_47b776068ef722dc48a22493b405ac2ee0f2730b57d9d2ed214762015d5c5bb0->leave($__internal_47b776068ef722dc48a22493b405ac2ee0f2730b57d9d2ed214762015d5c5bb0_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_27546d68c6ed95132ea1f9d221823f633a32bbd2eb80a3c195ebc01366c914d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27546d68c6ed95132ea1f9d221823f633a32bbd2eb80a3c195ebc01366c914d7->enter($__internal_27546d68c6ed95132ea1f9d221823f633a32bbd2eb80a3c195ebc01366c914d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_6ae221426f92f8a9268a3ffb6455585e608de10155ec49eb3bc8c9926d8ea77e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae221426f92f8a9268a3ffb6455585e608de10155ec49eb3bc8c9926d8ea77e->enter($__internal_6ae221426f92f8a9268a3ffb6455585e608de10155ec49eb3bc8c9926d8ea77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_6ae221426f92f8a9268a3ffb6455585e608de10155ec49eb3bc8c9926d8ea77e->leave($__internal_6ae221426f92f8a9268a3ffb6455585e608de10155ec49eb3bc8c9926d8ea77e_prof);

        
        $__internal_27546d68c6ed95132ea1f9d221823f633a32bbd2eb80a3c195ebc01366c914d7->leave($__internal_27546d68c6ed95132ea1f9d221823f633a32bbd2eb80a3c195ebc01366c914d7_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_d46309ad967eca8d133c4e63925fb78eaebc1b8c87bd48f7b0291d0fe4f0e117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d46309ad967eca8d133c4e63925fb78eaebc1b8c87bd48f7b0291d0fe4f0e117->enter($__internal_d46309ad967eca8d133c4e63925fb78eaebc1b8c87bd48f7b0291d0fe4f0e117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_40352e9bb4394a5ae45bcc4ef7544805a0368fe210df98850b8c9ad036902e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40352e9bb4394a5ae45bcc4ef7544805a0368fe210df98850b8c9ad036902e1a->enter($__internal_40352e9bb4394a5ae45bcc4ef7544805a0368fe210df98850b8c9ad036902e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_40352e9bb4394a5ae45bcc4ef7544805a0368fe210df98850b8c9ad036902e1a->leave($__internal_40352e9bb4394a5ae45bcc4ef7544805a0368fe210df98850b8c9ad036902e1a_prof);

        
        $__internal_d46309ad967eca8d133c4e63925fb78eaebc1b8c87bd48f7b0291d0fe4f0e117->leave($__internal_d46309ad967eca8d133c4e63925fb78eaebc1b8c87bd48f7b0291d0fe4f0e117_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_e34d25597a9665edeb7fae0156b0d8374f0cc3fd37864b3a7ad0e747c0d23fca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e34d25597a9665edeb7fae0156b0d8374f0cc3fd37864b3a7ad0e747c0d23fca->enter($__internal_e34d25597a9665edeb7fae0156b0d8374f0cc3fd37864b3a7ad0e747c0d23fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71a4a4eb503122e69a113fcfea7ddc670a8cad8d7a37fe05627fa13ed2dce53c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a4a4eb503122e69a113fcfea7ddc670a8cad8d7a37fe05627fa13ed2dce53c->enter($__internal_71a4a4eb503122e69a113fcfea7ddc670a8cad8d7a37fe05627fa13ed2dce53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_71a4a4eb503122e69a113fcfea7ddc670a8cad8d7a37fe05627fa13ed2dce53c->leave($__internal_71a4a4eb503122e69a113fcfea7ddc670a8cad8d7a37fe05627fa13ed2dce53c_prof);

        
        $__internal_e34d25597a9665edeb7fae0156b0d8374f0cc3fd37864b3a7ad0e747c0d23fca->leave($__internal_e34d25597a9665edeb7fae0156b0d8374f0cc3fd37864b3a7ad0e747c0d23fca_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a2388765cce9b652425b7994c11099ec9df6b943963a605b50fb612a3c335f7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2388765cce9b652425b7994c11099ec9df6b943963a605b50fb612a3c335f7f->enter($__internal_a2388765cce9b652425b7994c11099ec9df6b943963a605b50fb612a3c335f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_df6929fc3c8af50c73392dd1c1e3fbdc26569f9c1f85b4cddf3d92417dbd71d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6929fc3c8af50c73392dd1c1e3fbdc26569f9c1f85b4cddf3d92417dbd71d2->enter($__internal_df6929fc3c8af50c73392dd1c1e3fbdc26569f9c1f85b4cddf3d92417dbd71d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_df6929fc3c8af50c73392dd1c1e3fbdc26569f9c1f85b4cddf3d92417dbd71d2->leave($__internal_df6929fc3c8af50c73392dd1c1e3fbdc26569f9c1f85b4cddf3d92417dbd71d2_prof);

        
        $__internal_a2388765cce9b652425b7994c11099ec9df6b943963a605b50fb612a3c335f7f->leave($__internal_a2388765cce9b652425b7994c11099ec9df6b943963a605b50fb612a3c335f7f_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_90f0d5e2ec93e85d7399e17efb8fbe086eb427786743bdf20453423b21461c6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f0d5e2ec93e85d7399e17efb8fbe086eb427786743bdf20453423b21461c6a->enter($__internal_90f0d5e2ec93e85d7399e17efb8fbe086eb427786743bdf20453423b21461c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_7f2822abee1098badead3c18caa2d4435be268f0db68fb34168d7372e17307cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2822abee1098badead3c18caa2d4435be268f0db68fb34168d7372e17307cc->enter($__internal_7f2822abee1098badead3c18caa2d4435be268f0db68fb34168d7372e17307cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_7f2822abee1098badead3c18caa2d4435be268f0db68fb34168d7372e17307cc->leave($__internal_7f2822abee1098badead3c18caa2d4435be268f0db68fb34168d7372e17307cc_prof);

        
        $__internal_90f0d5e2ec93e85d7399e17efb8fbe086eb427786743bdf20453423b21461c6a->leave($__internal_90f0d5e2ec93e85d7399e17efb8fbe086eb427786743bdf20453423b21461c6a_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_dc486b53d81e87c19255e70fc2894100e843a481fb2070e1c1b96cc94c6051cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc486b53d81e87c19255e70fc2894100e843a481fb2070e1c1b96cc94c6051cf->enter($__internal_dc486b53d81e87c19255e70fc2894100e843a481fb2070e1c1b96cc94c6051cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_cb1b9fdcce727155285f43fec66408012e8e5428ae7d865fccb53a0913537c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb1b9fdcce727155285f43fec66408012e8e5428ae7d865fccb53a0913537c56->enter($__internal_cb1b9fdcce727155285f43fec66408012e8e5428ae7d865fccb53a0913537c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_cb1b9fdcce727155285f43fec66408012e8e5428ae7d865fccb53a0913537c56->leave($__internal_cb1b9fdcce727155285f43fec66408012e8e5428ae7d865fccb53a0913537c56_prof);

        
        $__internal_dc486b53d81e87c19255e70fc2894100e843a481fb2070e1c1b96cc94c6051cf->leave($__internal_dc486b53d81e87c19255e70fc2894100e843a481fb2070e1c1b96cc94c6051cf_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_db8fad2a066882962d2e178db32f37daa1de445723a4bcf5b6e438c96fdb2eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db8fad2a066882962d2e178db32f37daa1de445723a4bcf5b6e438c96fdb2eb9->enter($__internal_db8fad2a066882962d2e178db32f37daa1de445723a4bcf5b6e438c96fdb2eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_3f3aead46202205bb3a02c6c8c321059c897d45f7738e4e51d28374552d3e47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3aead46202205bb3a02c6c8c321059c897d45f7738e4e51d28374552d3e47a->enter($__internal_3f3aead46202205bb3a02c6c8c321059c897d45f7738e4e51d28374552d3e47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_3f3aead46202205bb3a02c6c8c321059c897d45f7738e4e51d28374552d3e47a->leave($__internal_3f3aead46202205bb3a02c6c8c321059c897d45f7738e4e51d28374552d3e47a_prof);

        
        $__internal_db8fad2a066882962d2e178db32f37daa1de445723a4bcf5b6e438c96fdb2eb9->leave($__internal_db8fad2a066882962d2e178db32f37daa1de445723a4bcf5b6e438c96fdb2eb9_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_f1ad3be67871756a1d5d6e5da9835aedc60055be8bf6b0cb0a9c6a4d21f76e92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ad3be67871756a1d5d6e5da9835aedc60055be8bf6b0cb0a9c6a4d21f76e92->enter($__internal_f1ad3be67871756a1d5d6e5da9835aedc60055be8bf6b0cb0a9c6a4d21f76e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_208833520be7067b3f89ec2f30a66f6e792711b3a6ae1c67804df288554510c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_208833520be7067b3f89ec2f30a66f6e792711b3a6ae1c67804df288554510c5->enter($__internal_208833520be7067b3f89ec2f30a66f6e792711b3a6ae1c67804df288554510c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_208833520be7067b3f89ec2f30a66f6e792711b3a6ae1c67804df288554510c5->leave($__internal_208833520be7067b3f89ec2f30a66f6e792711b3a6ae1c67804df288554510c5_prof);

        
        $__internal_f1ad3be67871756a1d5d6e5da9835aedc60055be8bf6b0cb0a9c6a4d21f76e92->leave($__internal_f1ad3be67871756a1d5d6e5da9835aedc60055be8bf6b0cb0a9c6a4d21f76e92_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_6eb8d8d8d28cb03fb3148e545fc45c63626a9fc1f02b24ead26b090934f91be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eb8d8d8d28cb03fb3148e545fc45c63626a9fc1f02b24ead26b090934f91be7->enter($__internal_6eb8d8d8d28cb03fb3148e545fc45c63626a9fc1f02b24ead26b090934f91be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_b3fe11362d95b7549bcadb0d54b986a2a95744a4c66e156d1d2fbb30c84449a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3fe11362d95b7549bcadb0d54b986a2a95744a4c66e156d1d2fbb30c84449a9->enter($__internal_b3fe11362d95b7549bcadb0d54b986a2a95744a4c66e156d1d2fbb30c84449a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_b3fe11362d95b7549bcadb0d54b986a2a95744a4c66e156d1d2fbb30c84449a9->leave($__internal_b3fe11362d95b7549bcadb0d54b986a2a95744a4c66e156d1d2fbb30c84449a9_prof);

        
        $__internal_6eb8d8d8d28cb03fb3148e545fc45c63626a9fc1f02b24ead26b090934f91be7->leave($__internal_6eb8d8d8d28cb03fb3148e545fc45c63626a9fc1f02b24ead26b090934f91be7_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_30d8ce4af94bbcc3757815b94e697d6e6891305ed4d5bfa4f8cecf079b6b9f85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30d8ce4af94bbcc3757815b94e697d6e6891305ed4d5bfa4f8cecf079b6b9f85->enter($__internal_30d8ce4af94bbcc3757815b94e697d6e6891305ed4d5bfa4f8cecf079b6b9f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_7c700dcfea1de3cfcc08df40d13dcc6d8f24eb2294b543b50fcba89b7d831953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c700dcfea1de3cfcc08df40d13dcc6d8f24eb2294b543b50fcba89b7d831953->enter($__internal_7c700dcfea1de3cfcc08df40d13dcc6d8f24eb2294b543b50fcba89b7d831953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_7c700dcfea1de3cfcc08df40d13dcc6d8f24eb2294b543b50fcba89b7d831953->leave($__internal_7c700dcfea1de3cfcc08df40d13dcc6d8f24eb2294b543b50fcba89b7d831953_prof);

        
        $__internal_30d8ce4af94bbcc3757815b94e697d6e6891305ed4d5bfa4f8cecf079b6b9f85->leave($__internal_30d8ce4af94bbcc3757815b94e697d6e6891305ed4d5bfa4f8cecf079b6b9f85_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_6631418c0990575fe1b5ac4bf0292e2155bf391a1801a6daf6ee2d83c4535ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6631418c0990575fe1b5ac4bf0292e2155bf391a1801a6daf6ee2d83c4535ae5->enter($__internal_6631418c0990575fe1b5ac4bf0292e2155bf391a1801a6daf6ee2d83c4535ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_14a9cc4e13b1a17905986b63324a01c1e2d2fdfc71f81bcfa1a14178d204a1d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a9cc4e13b1a17905986b63324a01c1e2d2fdfc71f81bcfa1a14178d204a1d2->enter($__internal_14a9cc4e13b1a17905986b63324a01c1e2d2fdfc71f81bcfa1a14178d204a1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

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
        
        $__internal_14a9cc4e13b1a17905986b63324a01c1e2d2fdfc71f81bcfa1a14178d204a1d2->leave($__internal_14a9cc4e13b1a17905986b63324a01c1e2d2fdfc71f81bcfa1a14178d204a1d2_prof);

        
        $__internal_6631418c0990575fe1b5ac4bf0292e2155bf391a1801a6daf6ee2d83c4535ae5->leave($__internal_6631418c0990575fe1b5ac4bf0292e2155bf391a1801a6daf6ee2d83c4535ae5_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b6b2b237df7adca0018d695dcfae0ed15a394a6245d269b02d5efe1e4f6776ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6b2b237df7adca0018d695dcfae0ed15a394a6245d269b02d5efe1e4f6776ee->enter($__internal_b6b2b237df7adca0018d695dcfae0ed15a394a6245d269b02d5efe1e4f6776ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6429df82e9ec97c37c9714c5c7cca54b9b72e614bf7055bf7bc29eab3074a245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6429df82e9ec97c37c9714c5c7cca54b9b72e614bf7055bf7bc29eab3074a245->enter($__internal_6429df82e9ec97c37c9714c5c7cca54b9b72e614bf7055bf7bc29eab3074a245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_6429df82e9ec97c37c9714c5c7cca54b9b72e614bf7055bf7bc29eab3074a245->leave($__internal_6429df82e9ec97c37c9714c5c7cca54b9b72e614bf7055bf7bc29eab3074a245_prof);

        
        $__internal_b6b2b237df7adca0018d695dcfae0ed15a394a6245d269b02d5efe1e4f6776ee->leave($__internal_b6b2b237df7adca0018d695dcfae0ed15a394a6245d269b02d5efe1e4f6776ee_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_6cd0a0df093c96d7238c4b35bc5b380bab13f0e39ed48473579eea2002707917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cd0a0df093c96d7238c4b35bc5b380bab13f0e39ed48473579eea2002707917->enter($__internal_6cd0a0df093c96d7238c4b35bc5b380bab13f0e39ed48473579eea2002707917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_8d6bf0b8a105c4ff5ead6a1787b8b7cdb8af267adf29cd52eff2480f203f86b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6bf0b8a105c4ff5ead6a1787b8b7cdb8af267adf29cd52eff2480f203f86b8->enter($__internal_8d6bf0b8a105c4ff5ead6a1787b8b7cdb8af267adf29cd52eff2480f203f86b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_8d6bf0b8a105c4ff5ead6a1787b8b7cdb8af267adf29cd52eff2480f203f86b8->leave($__internal_8d6bf0b8a105c4ff5ead6a1787b8b7cdb8af267adf29cd52eff2480f203f86b8_prof);

        
        $__internal_6cd0a0df093c96d7238c4b35bc5b380bab13f0e39ed48473579eea2002707917->leave($__internal_6cd0a0df093c96d7238c4b35bc5b380bab13f0e39ed48473579eea2002707917_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_92078db6a895ae88b11a5ef34bfb6ae846ed452fd133981309dd7d51f26973fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92078db6a895ae88b11a5ef34bfb6ae846ed452fd133981309dd7d51f26973fd->enter($__internal_92078db6a895ae88b11a5ef34bfb6ae846ed452fd133981309dd7d51f26973fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_58c11900d6948301e2b9d83a9149927030d6a6de37c85e22796cdd30a4cbe2ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c11900d6948301e2b9d83a9149927030d6a6de37c85e22796cdd30a4cbe2ab->enter($__internal_58c11900d6948301e2b9d83a9149927030d6a6de37c85e22796cdd30a4cbe2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_58c11900d6948301e2b9d83a9149927030d6a6de37c85e22796cdd30a4cbe2ab->leave($__internal_58c11900d6948301e2b9d83a9149927030d6a6de37c85e22796cdd30a4cbe2ab_prof);

        
        $__internal_92078db6a895ae88b11a5ef34bfb6ae846ed452fd133981309dd7d51f26973fd->leave($__internal_92078db6a895ae88b11a5ef34bfb6ae846ed452fd133981309dd7d51f26973fd_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_b20f7a8ee2f03e97a9908aa7d80a795341a228c2f9a9bad2f0f68b44c4d3625d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b20f7a8ee2f03e97a9908aa7d80a795341a228c2f9a9bad2f0f68b44c4d3625d->enter($__internal_b20f7a8ee2f03e97a9908aa7d80a795341a228c2f9a9bad2f0f68b44c4d3625d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_cd6ccfce5a22380108486f65e3965a83c6ff593a944937985898a70f3e59492b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd6ccfce5a22380108486f65e3965a83c6ff593a944937985898a70f3e59492b->enter($__internal_cd6ccfce5a22380108486f65e3965a83c6ff593a944937985898a70f3e59492b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_cd6ccfce5a22380108486f65e3965a83c6ff593a944937985898a70f3e59492b->leave($__internal_cd6ccfce5a22380108486f65e3965a83c6ff593a944937985898a70f3e59492b_prof);

        
        $__internal_b20f7a8ee2f03e97a9908aa7d80a795341a228c2f9a9bad2f0f68b44c4d3625d->leave($__internal_b20f7a8ee2f03e97a9908aa7d80a795341a228c2f9a9bad2f0f68b44c4d3625d_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_c255fbbd5bfaa96ed0f9e10802f0775c3d7c82210b76f8992d59266299d9b8d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c255fbbd5bfaa96ed0f9e10802f0775c3d7c82210b76f8992d59266299d9b8d7->enter($__internal_c255fbbd5bfaa96ed0f9e10802f0775c3d7c82210b76f8992d59266299d9b8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_987fdb33ef3efc51038cc042a31e379ca655d4b2e9b85b77b07f19e17b671dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_987fdb33ef3efc51038cc042a31e379ca655d4b2e9b85b77b07f19e17b671dc3->enter($__internal_987fdb33ef3efc51038cc042a31e379ca655d4b2e9b85b77b07f19e17b671dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_987fdb33ef3efc51038cc042a31e379ca655d4b2e9b85b77b07f19e17b671dc3->leave($__internal_987fdb33ef3efc51038cc042a31e379ca655d4b2e9b85b77b07f19e17b671dc3_prof);

        
        $__internal_c255fbbd5bfaa96ed0f9e10802f0775c3d7c82210b76f8992d59266299d9b8d7->leave($__internal_c255fbbd5bfaa96ed0f9e10802f0775c3d7c82210b76f8992d59266299d9b8d7_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_4a74f4f6742ebf9cd8a7c59e74d638f5f87d3e9f28e8c8fe7128acc34f2b5848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a74f4f6742ebf9cd8a7c59e74d638f5f87d3e9f28e8c8fe7128acc34f2b5848->enter($__internal_4a74f4f6742ebf9cd8a7c59e74d638f5f87d3e9f28e8c8fe7128acc34f2b5848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_75e7d5cb15bab18f8ea79728e6b5ddf49ba86a49da4abd6da8af01c8155f9134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e7d5cb15bab18f8ea79728e6b5ddf49ba86a49da4abd6da8af01c8155f9134->enter($__internal_75e7d5cb15bab18f8ea79728e6b5ddf49ba86a49da4abd6da8af01c8155f9134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_75e7d5cb15bab18f8ea79728e6b5ddf49ba86a49da4abd6da8af01c8155f9134->leave($__internal_75e7d5cb15bab18f8ea79728e6b5ddf49ba86a49da4abd6da8af01c8155f9134_prof);

        
        $__internal_4a74f4f6742ebf9cd8a7c59e74d638f5f87d3e9f28e8c8fe7128acc34f2b5848->leave($__internal_4a74f4f6742ebf9cd8a7c59e74d638f5f87d3e9f28e8c8fe7128acc34f2b5848_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_1a376161e5df5d4c1ed2a49bc546e026fc2a4fddaa57f89d1d9552ef216aba0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a376161e5df5d4c1ed2a49bc546e026fc2a4fddaa57f89d1d9552ef216aba0a->enter($__internal_1a376161e5df5d4c1ed2a49bc546e026fc2a4fddaa57f89d1d9552ef216aba0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_3050750f8a7e3aebf79bcf6df711d9a48534a54236e1ef60f2e7e7aa977ead15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3050750f8a7e3aebf79bcf6df711d9a48534a54236e1ef60f2e7e7aa977ead15->enter($__internal_3050750f8a7e3aebf79bcf6df711d9a48534a54236e1ef60f2e7e7aa977ead15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

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
        
        $__internal_3050750f8a7e3aebf79bcf6df711d9a48534a54236e1ef60f2e7e7aa977ead15->leave($__internal_3050750f8a7e3aebf79bcf6df711d9a48534a54236e1ef60f2e7e7aa977ead15_prof);

        
        $__internal_1a376161e5df5d4c1ed2a49bc546e026fc2a4fddaa57f89d1d9552ef216aba0a->leave($__internal_1a376161e5df5d4c1ed2a49bc546e026fc2a4fddaa57f89d1d9552ef216aba0a_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_e1f7c0c99f60dec2451401a3e4633855bb85679951f60bdf43ac0ceadb28df9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f7c0c99f60dec2451401a3e4633855bb85679951f60bdf43ac0ceadb28df9c->enter($__internal_e1f7c0c99f60dec2451401a3e4633855bb85679951f60bdf43ac0ceadb28df9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_cccb256de02d29e62b94e7a79ce0779e666a791502200b33d4c69f206528f5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cccb256de02d29e62b94e7a79ce0779e666a791502200b33d4c69f206528f5e4->enter($__internal_cccb256de02d29e62b94e7a79ce0779e666a791502200b33d4c69f206528f5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_cccb256de02d29e62b94e7a79ce0779e666a791502200b33d4c69f206528f5e4->leave($__internal_cccb256de02d29e62b94e7a79ce0779e666a791502200b33d4c69f206528f5e4_prof);

        
        $__internal_e1f7c0c99f60dec2451401a3e4633855bb85679951f60bdf43ac0ceadb28df9c->leave($__internal_e1f7c0c99f60dec2451401a3e4633855bb85679951f60bdf43ac0ceadb28df9c_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_c30d88889cdb8e7d6659d7777474aa28ed8e65d23f2cc9e63ad8a40592ad8d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c30d88889cdb8e7d6659d7777474aa28ed8e65d23f2cc9e63ad8a40592ad8d6e->enter($__internal_c30d88889cdb8e7d6659d7777474aa28ed8e65d23f2cc9e63ad8a40592ad8d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_401e022770991860df740fa6ebdff4ec1fb00b03c013c5c4917c4a5eab8d280a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_401e022770991860df740fa6ebdff4ec1fb00b03c013c5c4917c4a5eab8d280a->enter($__internal_401e022770991860df740fa6ebdff4ec1fb00b03c013c5c4917c4a5eab8d280a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_401e022770991860df740fa6ebdff4ec1fb00b03c013c5c4917c4a5eab8d280a->leave($__internal_401e022770991860df740fa6ebdff4ec1fb00b03c013c5c4917c4a5eab8d280a_prof);

        
        $__internal_c30d88889cdb8e7d6659d7777474aa28ed8e65d23f2cc9e63ad8a40592ad8d6e->leave($__internal_c30d88889cdb8e7d6659d7777474aa28ed8e65d23f2cc9e63ad8a40592ad8d6e_prof);

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
