<?php

/* EasyAdminBundle:default:field_json.html.twig */
class __TwigTemplate_799d57f7f9441fb0f6cfa950e7d85b60197058ae1ca988b382de9a254f69ebad extends Twig_Template
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
        $__internal_a41890a5d436cff2e4362024acc171ac7d14dcaadcbf71575eec12e32a34d5aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a41890a5d436cff2e4362024acc171ac7d14dcaadcbf71575eec12e32a34d5aa->enter($__internal_a41890a5d436cff2e4362024acc171ac7d14dcaadcbf71575eec12e32a34d5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_json.html.twig"));

        $__internal_cfa2a81ccd1cdd107b15259c7a238ad1558e933b1ec97a1d7eacdba784dcde9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa2a81ccd1cdd107b15259c7a238ad1558e933b1ec97a1d7eacdba784dcde9d->enter($__internal_cfa2a81ccd1cdd107b15259c7a238ad1558e933b1ec97a1d7eacdba784dcde9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_json.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            if ((twig_length_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))) > 0)) {
                // line 3
                echo "        <ul>
            ";
                // line 4
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 5
                    echo "                <li>";
                    echo twig_escape_filter($this->env, $context["element"], "html", null, true);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 7
                echo "        </ul>
    ";
            } else {
                // line 9
                echo "        <div class=\"empty collection-empty\">
            ";
                // line 10
                echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute(($context["entity_config"] ?? $this->getContext($context, "entity_config")), "templates", array()), "label_empty", array()));
                echo "
        </div>
    ";
            }
        } else {
            // line 14
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, twig_join_filter(($context["value"] ?? $this->getContext($context, "value")), ", ")), "html", null, true);
            echo "
";
        }
        
        $__internal_a41890a5d436cff2e4362024acc171ac7d14dcaadcbf71575eec12e32a34d5aa->leave($__internal_a41890a5d436cff2e4362024acc171ac7d14dcaadcbf71575eec12e32a34d5aa_prof);

        
        $__internal_cfa2a81ccd1cdd107b15259c7a238ad1558e933b1ec97a1d7eacdba784dcde9d->leave($__internal_cfa2a81ccd1cdd107b15259c7a238ad1558e933b1ec97a1d7eacdba784dcde9d_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_json.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  53 => 10,  50 => 9,  46 => 7,  37 => 5,  33 => 4,  30 => 3,  27 => 2,  25 => 1,);
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
    {% if value|length > 0 %}
        <ul>
            {% for element in value %}
                <li>{{ element }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div class=\"empty collection-empty\">
            {{ include(entity_config.templates.label_empty) }}
        </div>
    {% endif %}
{% else %}
    {{ value|join(', ')|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_json.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_json.html.twig");
    }
}
