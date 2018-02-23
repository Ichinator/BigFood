<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_1bfeef9400831d63f750db96a0e971a601f624e0301616671fdab2a1ba52b1e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73ade902e7845ad0118e165400c68a34a6b12346166401e5fbb005c5923a801b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73ade902e7845ad0118e165400c68a34a6b12346166401e5fbb005c5923a801b->enter($__internal_73ade902e7845ad0118e165400c68a34a6b12346166401e5fbb005c5923a801b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_aab2b23071790fab3af38f8795ed3a183e1454c1f3705882065c8da7a9cda863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab2b23071790fab3af38f8795ed3a183e1454c1f3705882065c8da7a9cda863->enter($__internal_aab2b23071790fab3af38f8795ed3a183e1454c1f3705882065c8da7a9cda863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73ade902e7845ad0118e165400c68a34a6b12346166401e5fbb005c5923a801b->leave($__internal_73ade902e7845ad0118e165400c68a34a6b12346166401e5fbb005c5923a801b_prof);

        
        $__internal_aab2b23071790fab3af38f8795ed3a183e1454c1f3705882065c8da7a9cda863->leave($__internal_aab2b23071790fab3af38f8795ed3a183e1454c1f3705882065c8da7a9cda863_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5d8863825d15d78e1b77509223008289309194c182a0970573de46179af1c923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d8863825d15d78e1b77509223008289309194c182a0970573de46179af1c923->enter($__internal_5d8863825d15d78e1b77509223008289309194c182a0970573de46179af1c923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dc09ad07488cd87fe1ba954bdae9436ca046fe4a4747ce809a362c49a1e49d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc09ad07488cd87fe1ba954bdae9436ca046fe4a4747ce809a362c49a1e49d9b->enter($__internal_dc09ad07488cd87fe1ba954bdae9436ca046fe4a4747ce809a362c49a1e49d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dc09ad07488cd87fe1ba954bdae9436ca046fe4a4747ce809a362c49a1e49d9b->leave($__internal_dc09ad07488cd87fe1ba954bdae9436ca046fe4a4747ce809a362c49a1e49d9b_prof);

        
        $__internal_5d8863825d15d78e1b77509223008289309194c182a0970573de46179af1c923->leave($__internal_5d8863825d15d78e1b77509223008289309194c182a0970573de46179af1c923_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_95bf68f4f931f1d414e920809632de19d7f16d9568e954c549044ba05bc5dc4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95bf68f4f931f1d414e920809632de19d7f16d9568e954c549044ba05bc5dc4c->enter($__internal_95bf68f4f931f1d414e920809632de19d7f16d9568e954c549044ba05bc5dc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a34a7593942d03642a205895f9717c0b6a907db249b4c099dbac1fd7c14984a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34a7593942d03642a205895f9717c0b6a907db249b4c099dbac1fd7c14984a8->enter($__internal_a34a7593942d03642a205895f9717c0b6a907db249b4c099dbac1fd7c14984a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a34a7593942d03642a205895f9717c0b6a907db249b4c099dbac1fd7c14984a8->leave($__internal_a34a7593942d03642a205895f9717c0b6a907db249b4c099dbac1fd7c14984a8_prof);

        
        $__internal_95bf68f4f931f1d414e920809632de19d7f16d9568e954c549044ba05bc5dc4c->leave($__internal_95bf68f4f931f1d414e920809632de19d7f16d9568e954c549044ba05bc5dc4c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_45f24e6e9cef85ba1664115020bc60fbdcbb5514ec3c23478e41d6688597084e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45f24e6e9cef85ba1664115020bc60fbdcbb5514ec3c23478e41d6688597084e->enter($__internal_45f24e6e9cef85ba1664115020bc60fbdcbb5514ec3c23478e41d6688597084e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1844bf54c24eda082abd52d49de7699b1d133c107fc5ff5f4140f8b1a5b45ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1844bf54c24eda082abd52d49de7699b1d133c107fc5ff5f4140f8b1a5b45ab8->enter($__internal_1844bf54c24eda082abd52d49de7699b1d133c107fc5ff5f4140f8b1a5b45ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1844bf54c24eda082abd52d49de7699b1d133c107fc5ff5f4140f8b1a5b45ab8->leave($__internal_1844bf54c24eda082abd52d49de7699b1d133c107fc5ff5f4140f8b1a5b45ab8_prof);

        
        $__internal_45f24e6e9cef85ba1664115020bc60fbdcbb5514ec3c23478e41d6688597084e->leave($__internal_45f24e6e9cef85ba1664115020bc60fbdcbb5514ec3c23478e41d6688597084e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
