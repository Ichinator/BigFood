<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_cd470fff2f009a3e49d11430c39bbefae896f0ac323680cc2f6ce5c4b4dd4ed8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae5dd227e909c868070a9d879b64b9aeec4568c64729249c082a3fced53cd64f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae5dd227e909c868070a9d879b64b9aeec4568c64729249c082a3fced53cd64f->enter($__internal_ae5dd227e909c868070a9d879b64b9aeec4568c64729249c082a3fced53cd64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_b64ff93c3c584963cfe82687c52f723565841f752e7f15364e452ed8a389d91b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b64ff93c3c584963cfe82687c52f723565841f752e7f15364e452ed8a389d91b->enter($__internal_b64ff93c3c584963cfe82687c52f723565841f752e7f15364e452ed8a389d91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae5dd227e909c868070a9d879b64b9aeec4568c64729249c082a3fced53cd64f->leave($__internal_ae5dd227e909c868070a9d879b64b9aeec4568c64729249c082a3fced53cd64f_prof);

        
        $__internal_b64ff93c3c584963cfe82687c52f723565841f752e7f15364e452ed8a389d91b->leave($__internal_b64ff93c3c584963cfe82687c52f723565841f752e7f15364e452ed8a389d91b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1fe3cac60d30b54dfc7c9cd3acfbd46b1d44d6df055b69eb40ff15eee7d5a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1fe3cac60d30b54dfc7c9cd3acfbd46b1d44d6df055b69eb40ff15eee7d5a7e->enter($__internal_b1fe3cac60d30b54dfc7c9cd3acfbd46b1d44d6df055b69eb40ff15eee7d5a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_88dcad3cbee52e5b5c4ab0ff144f48bf5892385ee42fc9f24ee420c56087ba34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88dcad3cbee52e5b5c4ab0ff144f48bf5892385ee42fc9f24ee420c56087ba34->enter($__internal_88dcad3cbee52e5b5c4ab0ff144f48bf5892385ee42fc9f24ee420c56087ba34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_88dcad3cbee52e5b5c4ab0ff144f48bf5892385ee42fc9f24ee420c56087ba34->leave($__internal_88dcad3cbee52e5b5c4ab0ff144f48bf5892385ee42fc9f24ee420c56087ba34_prof);

        
        $__internal_b1fe3cac60d30b54dfc7c9cd3acfbd46b1d44d6df055b69eb40ff15eee7d5a7e->leave($__internal_b1fe3cac60d30b54dfc7c9cd3acfbd46b1d44d6df055b69eb40ff15eee7d5a7e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
