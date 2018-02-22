<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_adba99105025079b217708d412407db08f3748a06d0ec327b272c584d685b137 extends Twig_Template
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
        $__internal_545e4395d2c969421739caa8682ace8d8d7e3e09262582221509e41c268a7984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_545e4395d2c969421739caa8682ace8d8d7e3e09262582221509e41c268a7984->enter($__internal_545e4395d2c969421739caa8682ace8d8d7e3e09262582221509e41c268a7984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_829a7d0df5c32bdf45a37c1700c9c1681c726115e551ec4076d0eeafee724a5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829a7d0df5c32bdf45a37c1700c9c1681c726115e551ec4076d0eeafee724a5e->enter($__internal_829a7d0df5c32bdf45a37c1700c9c1681c726115e551ec4076d0eeafee724a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_545e4395d2c969421739caa8682ace8d8d7e3e09262582221509e41c268a7984->leave($__internal_545e4395d2c969421739caa8682ace8d8d7e3e09262582221509e41c268a7984_prof);

        
        $__internal_829a7d0df5c32bdf45a37c1700c9c1681c726115e551ec4076d0eeafee724a5e->leave($__internal_829a7d0df5c32bdf45a37c1700c9c1681c726115e551ec4076d0eeafee724a5e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
