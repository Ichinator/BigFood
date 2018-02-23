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
        $__internal_88441881064ced817e8bc9a537a0b6b05c0a07008a928171a403ea2104e4a0b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88441881064ced817e8bc9a537a0b6b05c0a07008a928171a403ea2104e4a0b3->enter($__internal_88441881064ced817e8bc9a537a0b6b05c0a07008a928171a403ea2104e4a0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_ed1cbc195856082d4b1fd74087775ae9c44eb83209a0ce16177c8630b600138b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1cbc195856082d4b1fd74087775ae9c44eb83209a0ce16177c8630b600138b->enter($__internal_ed1cbc195856082d4b1fd74087775ae9c44eb83209a0ce16177c8630b600138b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_88441881064ced817e8bc9a537a0b6b05c0a07008a928171a403ea2104e4a0b3->leave($__internal_88441881064ced817e8bc9a537a0b6b05c0a07008a928171a403ea2104e4a0b3_prof);

        
        $__internal_ed1cbc195856082d4b1fd74087775ae9c44eb83209a0ce16177c8630b600138b->leave($__internal_ed1cbc195856082d4b1fd74087775ae9c44eb83209a0ce16177c8630b600138b_prof);

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
