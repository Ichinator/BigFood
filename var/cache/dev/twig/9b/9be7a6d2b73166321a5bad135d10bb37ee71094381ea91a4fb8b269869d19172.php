<?php

/* WebProfilerBundle:Collector:events.html.twig */
class __TwigTemplate_d1abe8f9db08f92436bc3df9829b1c3df1e8d1d1bd816be68e78c9551a1c38c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:events.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65fcb051df99ebcd72d4791934c0a366b0296879edee83c6f4e3471db890624a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65fcb051df99ebcd72d4791934c0a366b0296879edee83c6f4e3471db890624a->enter($__internal_65fcb051df99ebcd72d4791934c0a366b0296879edee83c6f4e3471db890624a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:events.html.twig"));

        $__internal_0ceaef8bfdcb373b12c0caa9258287282092124f24d8f20eadc8674c89a0bda9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ceaef8bfdcb373b12c0caa9258287282092124f24d8f20eadc8674c89a0bda9->enter($__internal_0ceaef8bfdcb373b12c0caa9258287282092124f24d8f20eadc8674c89a0bda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:events.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65fcb051df99ebcd72d4791934c0a366b0296879edee83c6f4e3471db890624a->leave($__internal_65fcb051df99ebcd72d4791934c0a366b0296879edee83c6f4e3471db890624a_prof);

        
        $__internal_0ceaef8bfdcb373b12c0caa9258287282092124f24d8f20eadc8674c89a0bda9->leave($__internal_0ceaef8bfdcb373b12c0caa9258287282092124f24d8f20eadc8674c89a0bda9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_004c05d7e0cf026eb1c4565206ce4bdd8656625ded1d818de011066fc69dee3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_004c05d7e0cf026eb1c4565206ce4bdd8656625ded1d818de011066fc69dee3a->enter($__internal_004c05d7e0cf026eb1c4565206ce4bdd8656625ded1d818de011066fc69dee3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e8052fb446581668a7a33ccd19aa2503dc8d685922d45b9e88daf8b9bfb7a960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8052fb446581668a7a33ccd19aa2503dc8d685922d45b9e88daf8b9bfb7a960->enter($__internal_e8052fb446581668a7a33ccd19aa2503dc8d685922d45b9e88daf8b9bfb7a960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/event.svg");
        echo "</span>
    <strong>Events</strong>
</span>
";
        
        $__internal_e8052fb446581668a7a33ccd19aa2503dc8d685922d45b9e88daf8b9bfb7a960->leave($__internal_e8052fb446581668a7a33ccd19aa2503dc8d685922d45b9e88daf8b9bfb7a960_prof);

        
        $__internal_004c05d7e0cf026eb1c4565206ce4bdd8656625ded1d818de011066fc69dee3a->leave($__internal_004c05d7e0cf026eb1c4565206ce4bdd8656625ded1d818de011066fc69dee3a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_916830229fe812d26188645274f27bb101597fa05f7f648d7324e13439e4191c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_916830229fe812d26188645274f27bb101597fa05f7f648d7324e13439e4191c->enter($__internal_916830229fe812d26188645274f27bb101597fa05f7f648d7324e13439e4191c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4b8c106b2082ebbdef7f9e8dfdebff766b0b0ccec48f5a0dd426654d8c1526f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8c106b2082ebbdef7f9e8dfdebff766b0b0ccec48f5a0dd426654d8c1526f4->enter($__internal_4b8c106b2082ebbdef7f9e8dfdebff766b0b0ccec48f5a0dd426654d8c1526f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    <h2>Event Dispatcher</h2>

    ";
        // line 15
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledlisteners", array()))) {
            // line 16
            echo "        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 20
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">";
            // line 22
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledlisteners", array())), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 25
            echo $context["helper"]->getrender_table($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledlisteners", array()));
            echo "
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">";
            // line 30
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "notcalledlisteners", array())), "html", null, true);
            echo "</span></h3>
                <div class=\"tab-content\">
                    ";
            // line 32
            if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "notcalledlisteners", array()))) {
                // line 33
                echo "                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    ";
            } else {
                // line 44
                echo "                        ";
                echo $context["helper"]->getrender_table($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "notcalledlisteners", array()));
                echo "
                    ";
            }
            // line 46
            echo "                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_4b8c106b2082ebbdef7f9e8dfdebff766b0b0ccec48f5a0dd426654d8c1526f4->leave($__internal_4b8c106b2082ebbdef7f9e8dfdebff766b0b0ccec48f5a0dd426654d8c1526f4_prof);

        
        $__internal_916830229fe812d26188645274f27bb101597fa05f7f648d7324e13439e4191c->leave($__internal_916830229fe812d26188645274f27bb101597fa05f7f648d7324e13439e4191c_prof);

    }

    // line 52
    public function getrender_table($__listeners__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "listeners" => $__listeners__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f84db2f538a3aac6874813a7a65f0462163b71a795078e6944be4c644abe2c28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_f84db2f538a3aac6874813a7a65f0462163b71a795078e6944be4c644abe2c28->enter($__internal_f84db2f538a3aac6874813a7a65f0462163b71a795078e6944be4c644abe2c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_64b7aa4936d157da10d2a8bb697994b8917c80c67357da0792dced7b071995ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_64b7aa4936d157da10d2a8bb697994b8917c80c67357da0792dced7b071995ac->enter($__internal_64b7aa4936d157da10d2a8bb697994b8917c80c67357da0792dced7b071995ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 53
            echo "    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        ";
            // line 61
            $context["previous_event"] = $this->getAttribute(twig_first($this->env, ($context["listeners"] ?? $this->getContext($context, "listeners"))), "event", array());
            // line 62
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listeners"] ?? $this->getContext($context, "listeners")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 63
                echo "            ";
                if (($this->getAttribute($context["loop"], "first", array()) || ($this->getAttribute($context["listener"], "event", array()) != ($context["previous_event"] ?? $this->getContext($context, "previous_event"))))) {
                    // line 64
                    echo "                ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 65
                        echo "                    </tbody>
                ";
                    }
                    // line 67
                    echo "
                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($context["listener"], "event", array()), "html", null, true);
                    echo "</th>
                    </tr>

                ";
                    // line 73
                    $context["previous_event"] = $this->getAttribute($context["listener"], "event", array());
                    // line 74
                    echo "            ";
                }
                // line 75
                echo "
            <tr>
                <td class=\"text-right nowrap\">";
                // line 77
                echo twig_escape_filter($this->env, (($this->getAttribute($context["listener"], "priority", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["listener"], "priority", array()), "-")) : ("-")), "html", null, true);
                echo "</td>
                <td class=\"font-normal\">";
                // line 78
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["listener"], "stub", array())));
                echo "</td>
            </tr>

            ";
                // line 81
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 82
                    echo "                </tbody>
            ";
                }
                // line 84
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "    </table>
";
            
            $__internal_64b7aa4936d157da10d2a8bb697994b8917c80c67357da0792dced7b071995ac->leave($__internal_64b7aa4936d157da10d2a8bb697994b8917c80c67357da0792dced7b071995ac_prof);

            
            $__internal_f84db2f538a3aac6874813a7a65f0462163b71a795078e6944be4c644abe2c28->leave($__internal_f84db2f538a3aac6874813a7a65f0462163b71a795078e6944be4c644abe2c28_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 85,  243 => 84,  239 => 82,  237 => 81,  231 => 78,  227 => 77,  223 => 75,  220 => 74,  218 => 73,  212 => 70,  207 => 67,  203 => 65,  200 => 64,  197 => 63,  179 => 62,  177 => 61,  167 => 53,  149 => 52,  135 => 46,  129 => 44,  116 => 33,  114 => 32,  109 => 30,  101 => 25,  95 => 22,  91 => 20,  85 => 16,  83 => 15,  79 => 13,  70 => 12,  56 => 7,  53 => 6,  44 => 5,  34 => 1,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/event.svg') }}</span>
    <strong>Events</strong>
</span>
{% endblock %}

{% block panel %}
    <h2>Event Dispatcher</h2>

    {% if collector.calledlisteners is empty %}
        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    {% else %}
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">{{ collector.calledlisteners|length }}</span></h3>

                <div class=\"tab-content\">
                    {{ helper.render_table(collector.calledlisteners) }}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">{{ collector.notcalledlisteners|length }}</span></h3>
                <div class=\"tab-content\">
                    {% if collector.notcalledlisteners is empty %}
                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    {% else %}
                        {{ helper.render_table(collector.notcalledlisteners) }}
                    {% endif %}
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% macro render_table(listeners) %}
    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        {% set previous_event = (listeners|first).event %}
        {% for listener in listeners %}
            {% if loop.first or listener.event != previous_event %}
                {% if not loop.first %}
                    </tbody>
                {% endif %}

                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">{{ listener.event }}</th>
                    </tr>

                {% set previous_event = listener.event %}
            {% endif %}

            <tr>
                <td class=\"text-right nowrap\">{{ listener.priority|default('-') }}</td>
                <td class=\"font-normal\">{{ profiler_dump(listener.stub) }}</td>
            </tr>

            {% if loop.last %}
                </tbody>
            {% endif %}
        {% endfor %}
    </table>
{% endmacro %}
", "WebProfilerBundle:Collector:events.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/events.html.twig");
    }
}
