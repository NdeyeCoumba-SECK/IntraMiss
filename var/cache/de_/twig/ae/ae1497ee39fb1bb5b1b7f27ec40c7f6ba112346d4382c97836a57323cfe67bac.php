<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0e4070bf79168fe896c3fe62538407026c4b7cc689213893cb3491fb1a8d33e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86540dd3603fae9d4a1bb4eb84b4c0508e69044ca8cac57c6cf30a9b84f6bd10 = $this->env->getExtension("native_profiler");
        $__internal_86540dd3603fae9d4a1bb4eb84b4c0508e69044ca8cac57c6cf30a9b84f6bd10->enter($__internal_86540dd3603fae9d4a1bb4eb84b4c0508e69044ca8cac57c6cf30a9b84f6bd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86540dd3603fae9d4a1bb4eb84b4c0508e69044ca8cac57c6cf30a9b84f6bd10->leave($__internal_86540dd3603fae9d4a1bb4eb84b4c0508e69044ca8cac57c6cf30a9b84f6bd10_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a5f913c28a727c54b331202bb94da0208ca2a58cac29b29e07e39b7a16363309 = $this->env->getExtension("native_profiler");
        $__internal_a5f913c28a727c54b331202bb94da0208ca2a58cac29b29e07e39b7a16363309->enter($__internal_a5f913c28a727c54b331202bb94da0208ca2a58cac29b29e07e39b7a16363309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a5f913c28a727c54b331202bb94da0208ca2a58cac29b29e07e39b7a16363309->leave($__internal_a5f913c28a727c54b331202bb94da0208ca2a58cac29b29e07e39b7a16363309_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed70f96cba87dca5fefcfd3ee6627f82cc855bb18d44bfc68000a853ae354899 = $this->env->getExtension("native_profiler");
        $__internal_ed70f96cba87dca5fefcfd3ee6627f82cc855bb18d44bfc68000a853ae354899->enter($__internal_ed70f96cba87dca5fefcfd3ee6627f82cc855bb18d44bfc68000a853ae354899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ed70f96cba87dca5fefcfd3ee6627f82cc855bb18d44bfc68000a853ae354899->leave($__internal_ed70f96cba87dca5fefcfd3ee6627f82cc855bb18d44bfc68000a853ae354899_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1e0d197d9f3cb4231b20013910ad96c323cf57804b8932890ab1feb905a2891 = $this->env->getExtension("native_profiler");
        $__internal_e1e0d197d9f3cb4231b20013910ad96c323cf57804b8932890ab1feb905a2891->enter($__internal_e1e0d197d9f3cb4231b20013910ad96c323cf57804b8932890ab1feb905a2891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e1e0d197d9f3cb4231b20013910ad96c323cf57804b8932890ab1feb905a2891->leave($__internal_e1e0d197d9f3cb4231b20013910ad96c323cf57804b8932890ab1feb905a2891_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
