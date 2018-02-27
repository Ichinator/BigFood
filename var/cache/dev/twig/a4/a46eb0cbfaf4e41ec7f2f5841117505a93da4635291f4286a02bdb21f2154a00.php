<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_5491a5b7ffb40e8a4c348b12c74995fec75e67ed1d506dc08ef999d28422bb3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7942b02ab70967bcf907d03a51758957a5b2de768ac20bc7ca54425745ba2c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7942b02ab70967bcf907d03a51758957a5b2de768ac20bc7ca54425745ba2c3c->enter($__internal_7942b02ab70967bcf907d03a51758957a5b2de768ac20bc7ca54425745ba2c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_6fd6e8130ea2dce8b7fdd7ca16c78229a9cdce67f7f60c423ab3e3f09886f236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd6e8130ea2dce8b7fdd7ca16c78229a9cdce67f7f60c423ab3e3f09886f236->enter($__internal_6fd6e8130ea2dce8b7fdd7ca16c78229a9cdce67f7f60c423ab3e3f09886f236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_7942b02ab70967bcf907d03a51758957a5b2de768ac20bc7ca54425745ba2c3c->leave($__internal_7942b02ab70967bcf907d03a51758957a5b2de768ac20bc7ca54425745ba2c3c_prof);

        
        $__internal_6fd6e8130ea2dce8b7fdd7ca16c78229a9cdce67f7f60c423ab3e3f09886f236->leave($__internal_6fd6e8130ea2dce8b7fdd7ca16c78229a9cdce67f7f60c423ab3e3f09886f236_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
