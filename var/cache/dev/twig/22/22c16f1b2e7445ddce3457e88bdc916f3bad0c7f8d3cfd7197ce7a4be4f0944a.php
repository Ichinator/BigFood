<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_b289182ae944c6f93f4a98ee383865dc533af430d6ecd880b4568d3798136ee3 extends Twig_Template
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
        $__internal_ec02bbded4919558418ba4300962f0f8709c882891253c620c255c337c23a476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec02bbded4919558418ba4300962f0f8709c882891253c620c255c337c23a476->enter($__internal_ec02bbded4919558418ba4300962f0f8709c882891253c620c255c337c23a476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_429342035402c2c65cfe06f38c79d92a230e721d49077f30fc14b7c52ed1cc64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429342035402c2c65cfe06f38c79d92a230e721d49077f30fc14b7c52ed1cc64->enter($__internal_429342035402c2c65cfe06f38c79d92a230e721d49077f30fc14b7c52ed1cc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_ec02bbded4919558418ba4300962f0f8709c882891253c620c255c337c23a476->leave($__internal_ec02bbded4919558418ba4300962f0f8709c882891253c620c255c337c23a476_prof);

        
        $__internal_429342035402c2c65cfe06f38c79d92a230e721d49077f30fc14b7c52ed1cc64->leave($__internal_429342035402c2c65cfe06f38c79d92a230e721d49077f30fc14b7c52ed1cc64_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
