<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_4da8b21b260cb9de4356e5ab656da106c6a0a1dd35922eaba0958dc93999d9bf extends Twig_Template
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
        $__internal_d199c52a520b6531401f9d3ec301ea6594a8466880bfe9b8e795f3092b510b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d199c52a520b6531401f9d3ec301ea6594a8466880bfe9b8e795f3092b510b4d->enter($__internal_d199c52a520b6531401f9d3ec301ea6594a8466880bfe9b8e795f3092b510b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_c3434d72910d963f9e2661270db29a1732b026b6cfa32f6ff84d3598a3e5a250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3434d72910d963f9e2661270db29a1732b026b6cfa32f6ff84d3598a3e5a250->enter($__internal_c3434d72910d963f9e2661270db29a1732b026b6cfa32f6ff84d3598a3e5a250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d199c52a520b6531401f9d3ec301ea6594a8466880bfe9b8e795f3092b510b4d->leave($__internal_d199c52a520b6531401f9d3ec301ea6594a8466880bfe9b8e795f3092b510b4d_prof);

        
        $__internal_c3434d72910d963f9e2661270db29a1732b026b6cfa32f6ff84d3598a3e5a250->leave($__internal_c3434d72910d963f9e2661270db29a1732b026b6cfa32f6ff84d3598a3e5a250_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
