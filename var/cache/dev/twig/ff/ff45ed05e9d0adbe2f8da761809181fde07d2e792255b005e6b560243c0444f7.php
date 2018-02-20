<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_fe87d25c72a11d9983fb6b1407dc064ea2aa3707b9fd759b41945cb4a633c7af extends Twig_Template
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
        $__internal_2e734160907a5bbc4ab605e60a01dc3dacf541ccc23efb1bd144f833ca21cc18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e734160907a5bbc4ab605e60a01dc3dacf541ccc23efb1bd144f833ca21cc18->enter($__internal_2e734160907a5bbc4ab605e60a01dc3dacf541ccc23efb1bd144f833ca21cc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_a883f870b5bfa114481e2c48ecc02edcdb68724bfecc82d859751b4b78ac7844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a883f870b5bfa114481e2c48ecc02edcdb68724bfecc82d859751b4b78ac7844->enter($__internal_a883f870b5bfa114481e2c48ecc02edcdb68724bfecc82d859751b4b78ac7844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_2e734160907a5bbc4ab605e60a01dc3dacf541ccc23efb1bd144f833ca21cc18->leave($__internal_2e734160907a5bbc4ab605e60a01dc3dacf541ccc23efb1bd144f833ca21cc18_prof);

        
        $__internal_a883f870b5bfa114481e2c48ecc02edcdb68724bfecc82d859751b4b78ac7844->leave($__internal_a883f870b5bfa114481e2c48ecc02edcdb68724bfecc82d859751b4b78ac7844_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
