<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_53d04faea8dce2535e2114f2335872a630044f783d206e0ce5a0177742541fab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_2e135f771cfc5c994425d1d615624e632dfe2160d7ab0237fb43d15d0f19110e = $this->env->getExtension("native_profiler");
        $__internal_2e135f771cfc5c994425d1d615624e632dfe2160d7ab0237fb43d15d0f19110e->enter($__internal_2e135f771cfc5c994425d1d615624e632dfe2160d7ab0237fb43d15d0f19110e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e135f771cfc5c994425d1d615624e632dfe2160d7ab0237fb43d15d0f19110e->leave($__internal_2e135f771cfc5c994425d1d615624e632dfe2160d7ab0237fb43d15d0f19110e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d76b56bd3e277f49d8f1a91c55e57aabc3085bcd8dbaf7f54256e44a8650328a = $this->env->getExtension("native_profiler");
        $__internal_d76b56bd3e277f49d8f1a91c55e57aabc3085bcd8dbaf7f54256e44a8650328a->enter($__internal_d76b56bd3e277f49d8f1a91c55e57aabc3085bcd8dbaf7f54256e44a8650328a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d76b56bd3e277f49d8f1a91c55e57aabc3085bcd8dbaf7f54256e44a8650328a->leave($__internal_d76b56bd3e277f49d8f1a91c55e57aabc3085bcd8dbaf7f54256e44a8650328a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_258fe1acad46ee24111b348aa9f76e5c788de52f6d0ebcce3e76e5888e930c5d = $this->env->getExtension("native_profiler");
        $__internal_258fe1acad46ee24111b348aa9f76e5c788de52f6d0ebcce3e76e5888e930c5d->enter($__internal_258fe1acad46ee24111b348aa9f76e5c788de52f6d0ebcce3e76e5888e930c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_258fe1acad46ee24111b348aa9f76e5c788de52f6d0ebcce3e76e5888e930c5d->leave($__internal_258fe1acad46ee24111b348aa9f76e5c788de52f6d0ebcce3e76e5888e930c5d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_733726cc6449285a1b324b8799762969897f42671bc439ebb5971580fbe8b72f = $this->env->getExtension("native_profiler");
        $__internal_733726cc6449285a1b324b8799762969897f42671bc439ebb5971580fbe8b72f->enter($__internal_733726cc6449285a1b324b8799762969897f42671bc439ebb5971580fbe8b72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_733726cc6449285a1b324b8799762969897f42671bc439ebb5971580fbe8b72f->leave($__internal_733726cc6449285a1b324b8799762969897f42671bc439ebb5971580fbe8b72f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
