<?php

/* KMSFroalaEditorBundle:Form:froala_widget.html.twig */
class __TwigTemplate_0f6eb6722e9a4b12f966a3b8019a13fc8f8f4705053a736afa84d4693f660223 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'froala_widget' => array($this, 'block_froala_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_221cc25d699f7e2d1a93351b795ff252ccb49347a2ef9c8f3f6652270619b38e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_221cc25d699f7e2d1a93351b795ff252ccb49347a2ef9c8f3f6652270619b38e->enter($__internal_221cc25d699f7e2d1a93351b795ff252ccb49347a2ef9c8f3f6652270619b38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KMSFroalaEditorBundle:Form:froala_widget.html.twig"));

        $__internal_0ee926dc705e4d12c9fc70906546b884f4d3bcc06fadba8ee71272a6df4e1912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee926dc705e4d12c9fc70906546b884f4d3bcc06fadba8ee71272a6df4e1912->enter($__internal_0ee926dc705e4d12c9fc70906546b884f4d3bcc06fadba8ee71272a6df4e1912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KMSFroalaEditorBundle:Form:froala_widget.html.twig"));

        // line 1
        echo "<!-- @formatter:off -->
";
        // line 2
        $this->displayBlock('froala_widget', $context, $blocks);
        
        $__internal_221cc25d699f7e2d1a93351b795ff252ccb49347a2ef9c8f3f6652270619b38e->leave($__internal_221cc25d699f7e2d1a93351b795ff252ccb49347a2ef9c8f3f6652270619b38e_prof);

        
        $__internal_0ee926dc705e4d12c9fc70906546b884f4d3bcc06fadba8ee71272a6df4e1912->leave($__internal_0ee926dc705e4d12c9fc70906546b884f4d3bcc06fadba8ee71272a6df4e1912_prof);

    }

    public function block_froala_widget($context, array $blocks = array())
    {
        $__internal_99a1da84e5d6cc6ae9b47a28ab0ebebe35fb58f0e775a5380e6ccafda0958920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99a1da84e5d6cc6ae9b47a28ab0ebebe35fb58f0e775a5380e6ccafda0958920->enter($__internal_99a1da84e5d6cc6ae9b47a28ab0ebebe35fb58f0e775a5380e6ccafda0958920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "froala_widget"));

        $__internal_d49c37bc4e0f3b4d6479494d3b008b9827d1b5af0e4842c0301fd39f4317b03e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49c37bc4e0f3b4d6479494d3b008b9827d1b5af0e4842c0301fd39f4317b03e->enter($__internal_d49c37bc4e0f3b4d6479494d3b008b9827d1b5af0e4842c0301fd39f4317b03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "froala_widget"));

        // line 3
        echo "
\t";
        // line 5
        echo "\t";
        if (($context["includeFontAwesome"] ?? $this->getContext($context, "includeFontAwesome"))) {
            // line 6
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css\" />
\t";
        }
        // line 8
        echo "
\t";
        // line 9
        if (($context["includeCodeMirror"] ?? $this->getContext($context, "includeCodeMirror"))) {
            // line 10
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css\" />
\t";
        }
        // line 12
        echo "
\t";
        // line 13
        if (($context["includeCSS"] ?? $this->getContext($context, "includeCSS"))) {
            // line 14
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["basePath"] ?? $this->getContext($context, "basePath")) . "css/froala_editor.pkgd.min.css")), "html", null, true);
            echo "\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["basePath"] ?? $this->getContext($context, "basePath")) . "css/froala_style.min.css")), "html", null, true);
            echo "\" />

\t\t";
            // line 17
            if ($this->getAttribute(($context["arrOption"] ?? null), "theme", array(), "array", true, true)) {
                // line 18
                echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((($context["basePath"] ?? $this->getContext($context, "basePath")) . "css/themes/") . $this->getAttribute(($context["arrOption"] ?? $this->getContext($context, "arrOption")), "theme", array(), "array")) . ".min.css")), "html", null, true);
                echo "\" />
\t\t";
            }
            // line 20
            echo "
\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["arrPluginCSS"] ?? $this->getContext($context, "arrPluginCSS")));
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 22
                echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((($context["basePath"] ?? $this->getContext($context, "basePath")) . "css/") . $context["plugin"]) . ".min.css")), "html", null, true);
                echo "\" />
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
\t";
        }
        // line 26
        echo "
\t";
        // line 28
        echo "\t<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>

\t";
        // line 31
        echo "\t";
        if (($context["includeJQuery"] ?? $this->getContext($context, "includeJQuery"))) {
            // line 32
            echo "\t\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
\t";
        }
        // line 34
        echo "
\t";
        // line 35
        if (($context["includeCodeMirror"] ?? $this->getContext($context, "includeCodeMirror"))) {
            // line 36
            echo "\t\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js\"></script>
\t";
        }
        // line 39
        echo "
\t";
        // line 40
        if (($context["includeJS"] ?? $this->getContext($context, "includeJS"))) {
            // line 41
            echo "\t\t<script type=\"text/javascript\"  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/kmsfroalaeditor/misc.js"), "html", null, true);
            echo "\"></script>
\t\t<script type=\"text/javascript\"  src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["basePath"] ?? $this->getContext($context, "basePath")) . "js/froala_editor.pkgd.min.js")), "html", null, true);
            echo "\"></script>

\t\t<!--[if lt IE 9]>
\t\t<script type=\"text/javascript\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["basePath"] ?? $this->getContext($context, "basePath")) . "js/froala_editor_ie8.min.js")), "html", null, true);
            echo "\"></script>
\t\t<![endif]-->
\t\t<script type=\"text/javascript\" src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((($context["basePath"] ?? $this->getContext($context, "basePath")) . "js/languages/") . $this->getAttribute(($context["arrOption"] ?? $this->getContext($context, "arrOption")), "language", array())) . ".js")), "html", null, true);
            echo "\"></script>

\t\t";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["arrPluginJS"] ?? $this->getContext($context, "arrPluginJS")));
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 50
                echo "\t\t\t<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((($context["basePath"] ?? $this->getContext($context, "basePath")) . "js/") . $context["plugin"]) . ".min.js")), "html", null, true);
                echo "\"></script>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t";
        }
        // line 53
        echo "
\t";
        // line 54
        if (array_key_exists("customJS", $context)) {
            // line 55
            echo "\t\t<script type=\"text/javascript\"  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["customJS"] ?? $this->getContext($context, "customJS"))), "html", null, true);
            echo "\"></script>
\t";
        }
        // line 57
        echo "
\t";
        // line 59
        echo "\t<script type=\"text/javascript\">

\t\t";
        // line 62
        echo "\t\t\$( document ).ready( function () { \$( \"#";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" ).froalaEditor({
\t\t\t";
        // line 64
        echo "\t\t\t";
        if (array_key_exists("serialNumber", $context)) {
            // line 65
            echo "\t\t\t\tkey : \"";
            echo twig_escape_filter($this->env, ($context["serialNumber"] ?? $this->getContext($context, "serialNumber")), "html", null, true);
            echo "\",
\t\t\t";
        }
        // line 67
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arrOption"] ?? $this->getContext($context, "arrOption")));
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
        foreach ($context['_seq'] as $context["option"] => $context["value"]) {
            // line 68
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo " : ";
            $this->loadTemplate("@KMSFroalaEditor/Form/value.html.twig", "KMSFroalaEditorBundle:Form:froala_widget.html.twig", 68)->display($context);
            // line 69
            echo "\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " })
\t\t\t.on( \"froalaEditor.image.error\", function ( e, editor, error )
\t\t\t{
\t\t\t\tfroalaDisplayError(  editor, error );
\t\t\t} )
\t\t\t.on( \"froalaEditor.imageManager.error\", function ( e, editor, error )
\t\t\t{
\t\t\t\tfroalaDisplayError(  editor, error );
\t\t\t} )
\t\t\t.on( \"froalaEditor.save.error\", function ( e, editor, error )
\t\t\t{
\t\t\t\tfroalaDisplayError(  editor, error );
\t\t\t} )
\t\t\t.on( \"froalaEditor.file.error\", function ( e, editor, error, responses )
\t\t\t{
\t\t\t\tfroalaDisplayError(  editor, error );
\t\t\t} )
\t\t\t.on( \"froalaEditor.video.error\", function ( e, editor, error, responses )
\t\t\t{
\t\t\t\tfroalaDisplayError(  editor, error );
\t\t\t} )
\t\t\t";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["event"] => $context["func"]) {
            // line 91
            echo "\t\t\t\t.on(\"";
            echo twig_escape_filter($this->env, $context["event"], "html", null, true);
            echo "\", ";
            echo twig_escape_filter($this->env, $context["func"], "html", null, true);
            echo ")
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['event'], $context['func'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "\t\t\t;
\t\t});
\t</script>

";
        
        $__internal_d49c37bc4e0f3b4d6479494d3b008b9827d1b5af0e4842c0301fd39f4317b03e->leave($__internal_d49c37bc4e0f3b4d6479494d3b008b9827d1b5af0e4842c0301fd39f4317b03e_prof);

        
        $__internal_99a1da84e5d6cc6ae9b47a28ab0ebebe35fb58f0e775a5380e6ccafda0958920->leave($__internal_99a1da84e5d6cc6ae9b47a28ab0ebebe35fb58f0e775a5380e6ccafda0958920_prof);

    }

    public function getTemplateName()
    {
        return "KMSFroalaEditorBundle:Form:froala_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  285 => 93,  274 => 91,  270 => 90,  234 => 69,  229 => 68,  211 => 67,  205 => 65,  202 => 64,  197 => 62,  193 => 59,  190 => 57,  184 => 55,  182 => 54,  179 => 53,  176 => 52,  167 => 50,  163 => 49,  158 => 47,  153 => 45,  147 => 42,  142 => 41,  140 => 40,  137 => 39,  132 => 36,  130 => 35,  127 => 34,  123 => 32,  120 => 31,  112 => 28,  109 => 26,  105 => 24,  96 => 22,  92 => 21,  89 => 20,  83 => 18,  81 => 17,  76 => 15,  71 => 14,  69 => 13,  66 => 12,  62 => 10,  60 => 9,  57 => 8,  53 => 6,  50 => 5,  47 => 3,  29 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- @formatter:off -->
{% block froala_widget %}

\t{# CSS. #}
\t{% if includeFontAwesome %}
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css\" />
\t{% endif %}

\t{% if includeCodeMirror %}
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css\" />
\t{% endif %}

\t{% if includeCSS %}
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset( basePath ~ 'css/froala_editor.pkgd.min.css' ) }}\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset( basePath ~ 'css/froala_style.min.css' ) }}\" />

\t\t{% if arrOption[ \"theme\" ] is defined %}
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset( basePath ~ 'css/themes/' ~ arrOption[ \"theme\" ] ~ '.min.css' ) }}\" />
\t\t{% endif %}

\t\t{% for plugin in arrPluginCSS %}
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset( basePath ~ 'css/' ~ plugin ~ '.min.css' ) }}\" />
\t\t{% endfor %}

\t{% endif %}

\t{# Editor textarea. #}
\t<textarea {{ block( \"widget_attributes\" ) }}>{{ value }}</textarea>

\t{# JS. #}
\t{% if includeJQuery %}
\t\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
\t{% endif %}

\t{% if includeCodeMirror %}
\t\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js\"></script>
\t{% endif %}

\t{% if includeJS %}
\t\t<script type=\"text/javascript\"  src=\"{{ asset( \"bundles/kmsfroalaeditor/misc.js\" ) }}\"></script>
\t\t<script type=\"text/javascript\"  src=\"{{ asset( basePath ~ 'js/froala_editor.pkgd.min.js' ) }}\"></script>

\t\t<!--[if lt IE 9]>
\t\t<script type=\"text/javascript\" src=\"{{ asset( basePath ~ 'js/froala_editor_ie8.min.js' ) }}\"></script>
\t\t<![endif]-->
\t\t<script type=\"text/javascript\" src=\"{{ asset( basePath ~ 'js/languages/' ~ arrOption.language ~ '.js' ) }}\"></script>

\t\t{% for plugin in arrPluginJS %}
\t\t\t<script type=\"text/javascript\" src=\"{{ asset( basePath ~ 'js/' ~ plugin ~ '.min.js' ) }}\"></script>
\t\t{% endfor %}
\t{% endif %}

\t{% if customJS is defined %}
\t\t<script type=\"text/javascript\"  src=\"{{ asset( customJS ) }}\"></script>
\t{% endif %}

\t{# Load the editor. #}
\t<script type=\"text/javascript\">

\t\t{# Go. #}
\t\t\$( document ).ready( function () { \$( \"#{{ id }}\" ).froalaEditor({
\t\t\t{# Add license. #}
\t\t\t{% if serialNumber is defined %}
\t\t\t\tkey : \"{{ serialNumber }}\",
\t\t\t{% endif %}
\t\t\t{% for option, value in arrOption %}
\t\t\t\t{{ option }} : {% include \"@KMSFroalaEditor/Form/value.html.twig\" %}
\t\t\t{% endfor %} })
\t\t\t.on( \"froalaEditor.image.error\", function ( e, editor, error )
\t\t\t{
\t\t\t\tfroalaDisplayError(  editor, error );
\t\t\t} )
\t\t\t.on( \"froalaEditor.imageManager.error\", function ( e, editor, error )
\t\t\t{
\t\t\t\tfroalaDisplayError(  editor, error );
\t\t\t} )
\t\t\t.on( \"froalaEditor.save.error\", function ( e, editor, error )
\t\t\t{
\t\t\t\tfroalaDisplayError(  editor, error );
\t\t\t} )
\t\t\t.on( \"froalaEditor.file.error\", function ( e, editor, error, responses )
\t\t\t{
\t\t\t\tfroalaDisplayError(  editor, error );
\t\t\t} )
\t\t\t.on( \"froalaEditor.video.error\", function ( e, editor, error, responses )
\t\t\t{
\t\t\t\tfroalaDisplayError(  editor, error );
\t\t\t} )
\t\t\t{% for event, func in events %}
\t\t\t\t.on(\"{{ event }}\", {{ func }})
            {% endfor %}
\t\t\t;
\t\t});
\t</script>

{% endblock %}", "KMSFroalaEditorBundle:Form:froala_widget.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/kms/froala-editor-bundle/Resources/views/Form/froala_widget.html.twig");
    }
}
