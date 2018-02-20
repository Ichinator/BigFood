<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a5c79ecc3dc0a78c8be61e93261a0458230904081d96025c43c78a322794cdbd extends Twig_Template
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
        $__internal_b31d1436f6a172fc59c1ac2a5269297d100c9675500d86064394b5024d9ae18f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b31d1436f6a172fc59c1ac2a5269297d100c9675500d86064394b5024d9ae18f->enter($__internal_b31d1436f6a172fc59c1ac2a5269297d100c9675500d86064394b5024d9ae18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_d6c39526f9aa334f33007cc0e7cd346a97a0ffeb8172ce11be405ddf31ca013d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c39526f9aa334f33007cc0e7cd346a97a0ffeb8172ce11be405ddf31ca013d->enter($__internal_d6c39526f9aa334f33007cc0e7cd346a97a0ffeb8172ce11be405ddf31ca013d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_b31d1436f6a172fc59c1ac2a5269297d100c9675500d86064394b5024d9ae18f->leave($__internal_b31d1436f6a172fc59c1ac2a5269297d100c9675500d86064394b5024d9ae18f_prof);

        
        $__internal_d6c39526f9aa334f33007cc0e7cd346a97a0ffeb8172ce11be405ddf31ca013d->leave($__internal_d6c39526f9aa334f33007cc0e7cd346a97a0ffeb8172ce11be405ddf31ca013d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
