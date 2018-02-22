<?php

/* EasyAdminBundle:default:field_email.html.twig */
class __TwigTemplate_7236d69a95e6028a053bdf451c6a5ffb3b1d6c68c1313efd8bf91754e8161739 extends Twig_Template
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
        $__internal_d389eba3b2e206a73410073c8aebee9762ed3e720da414d2839a0358952c22cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d389eba3b2e206a73410073c8aebee9762ed3e720da414d2839a0358952c22cb->enter($__internal_d389eba3b2e206a73410073c8aebee9762ed3e720da414d2839a0358952c22cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        $__internal_efb1ea4fbf8d5dcb0846e8c7f156b267ed4ef7e6b24a9b230e8636151d5c7852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb1ea4fbf8d5dcb0846e8c7f156b267ed4ef7e6b24a9b230e8636151d5c7852->enter($__internal_efb1ea4fbf8d5dcb0846e8c7f156b267ed4ef7e6b24a9b230e8636151d5c7852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_d389eba3b2e206a73410073c8aebee9762ed3e720da414d2839a0358952c22cb->leave($__internal_d389eba3b2e206a73410073c8aebee9762ed3e720da414d2839a0358952c22cb_prof);

        
        $__internal_efb1ea4fbf8d5dcb0846e8c7f156b267ed4ef7e6b24a9b230e8636151d5c7852->leave($__internal_efb1ea4fbf8d5dcb0846e8c7f156b267ed4ef7e6b24a9b230e8636151d5c7852_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    <a href=\"mailto:{{ value }}\">{{ value }}</a>
{% else %}
    <a href=\"mailto:{{ value }}\">{{ value|easyadmin_truncate }}</a>
{% endif %}
", "EasyAdminBundle:default:field_email.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_email.html.twig");
    }
}
