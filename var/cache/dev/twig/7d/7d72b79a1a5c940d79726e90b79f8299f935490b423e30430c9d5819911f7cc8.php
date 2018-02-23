<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_26add4472f3bbe63db168b8f3f63056e2d7f2c1d50e28977c530b2cc041ec064 extends Twig_Template
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
        $__internal_d4b25a29784307f6788b6cb87928c573958f48283a802893cc628df353dfdc4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b25a29784307f6788b6cb87928c573958f48283a802893cc628df353dfdc4e->enter($__internal_d4b25a29784307f6788b6cb87928c573958f48283a802893cc628df353dfdc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_8981451ac7813d1ac61cbdab69ad0c20d83945af4b24bf1fd01ba2521d347379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8981451ac7813d1ac61cbdab69ad0c20d83945af4b24bf1fd01ba2521d347379->enter($__internal_8981451ac7813d1ac61cbdab69ad0c20d83945af4b24bf1fd01ba2521d347379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d4b25a29784307f6788b6cb87928c573958f48283a802893cc628df353dfdc4e->leave($__internal_d4b25a29784307f6788b6cb87928c573958f48283a802893cc628df353dfdc4e_prof);

        
        $__internal_8981451ac7813d1ac61cbdab69ad0c20d83945af4b24bf1fd01ba2521d347379->leave($__internal_8981451ac7813d1ac61cbdab69ad0c20d83945af4b24bf1fd01ba2521d347379_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/ichinator/Bureau/MesProjetsGIT/BigFood/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
