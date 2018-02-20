<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_91a6883e9209b70e023a3fd0e4c965a6951e38a3ac85f5b8d96f0adbc3cc112c extends Twig_Template
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
        $__internal_c4ef9f2a14817cb7a2e0c68aee3866593987968b3688c1ff709a56bef464ddbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4ef9f2a14817cb7a2e0c68aee3866593987968b3688c1ff709a56bef464ddbe->enter($__internal_c4ef9f2a14817cb7a2e0c68aee3866593987968b3688c1ff709a56bef464ddbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_c4970449a1abe7d17881135d53157c4be76446aece49f9fee9a2c53a1bfddf72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4970449a1abe7d17881135d53157c4be76446aece49f9fee9a2c53a1bfddf72->enter($__internal_c4970449a1abe7d17881135d53157c4be76446aece49f9fee9a2c53a1bfddf72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c4ef9f2a14817cb7a2e0c68aee3866593987968b3688c1ff709a56bef464ddbe->leave($__internal_c4ef9f2a14817cb7a2e0c68aee3866593987968b3688c1ff709a56bef464ddbe_prof);

        
        $__internal_c4970449a1abe7d17881135d53157c4be76446aece49f9fee9a2c53a1bfddf72->leave($__internal_c4970449a1abe7d17881135d53157c4be76446aece49f9fee9a2c53a1bfddf72_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
