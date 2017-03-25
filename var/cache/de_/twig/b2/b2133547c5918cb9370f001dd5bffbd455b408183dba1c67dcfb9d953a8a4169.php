<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_cbb52d9a57f4a22a21bb9e7ea61f3d17012beaa9d512636acb96c18bc0ef93fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_c21071e67d6e563af29be311db23b4dc5973251ca039072cc89d837da56a4115 = $this->env->getExtension("native_profiler");
        $__internal_c21071e67d6e563af29be311db23b4dc5973251ca039072cc89d837da56a4115->enter($__internal_c21071e67d6e563af29be311db23b4dc5973251ca039072cc89d837da56a4115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c21071e67d6e563af29be311db23b4dc5973251ca039072cc89d837da56a4115->leave($__internal_c21071e67d6e563af29be311db23b4dc5973251ca039072cc89d837da56a4115_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f3d5e7788648e0c7c819baee1bd2eb8def535ce9b3b92fe2bd766c317023154e = $this->env->getExtension("native_profiler");
        $__internal_f3d5e7788648e0c7c819baee1bd2eb8def535ce9b3b92fe2bd766c317023154e->enter($__internal_f3d5e7788648e0c7c819baee1bd2eb8def535ce9b3b92fe2bd766c317023154e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f3d5e7788648e0c7c819baee1bd2eb8def535ce9b3b92fe2bd766c317023154e->leave($__internal_f3d5e7788648e0c7c819baee1bd2eb8def535ce9b3b92fe2bd766c317023154e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c907d75546eeb805c0294e6bb69b85171224a0cfc9d3a70b2dfd5295f053e8f6 = $this->env->getExtension("native_profiler");
        $__internal_c907d75546eeb805c0294e6bb69b85171224a0cfc9d3a70b2dfd5295f053e8f6->enter($__internal_c907d75546eeb805c0294e6bb69b85171224a0cfc9d3a70b2dfd5295f053e8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c907d75546eeb805c0294e6bb69b85171224a0cfc9d3a70b2dfd5295f053e8f6->leave($__internal_c907d75546eeb805c0294e6bb69b85171224a0cfc9d3a70b2dfd5295f053e8f6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6cfb96865aaee547a03594b320a5f3e86a18e07fe85205fff42fb3c8713ec810 = $this->env->getExtension("native_profiler");
        $__internal_6cfb96865aaee547a03594b320a5f3e86a18e07fe85205fff42fb3c8713ec810->enter($__internal_6cfb96865aaee547a03594b320a5f3e86a18e07fe85205fff42fb3c8713ec810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6cfb96865aaee547a03594b320a5f3e86a18e07fe85205fff42fb3c8713ec810->leave($__internal_6cfb96865aaee547a03594b320a5f3e86a18e07fe85205fff42fb3c8713ec810_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
