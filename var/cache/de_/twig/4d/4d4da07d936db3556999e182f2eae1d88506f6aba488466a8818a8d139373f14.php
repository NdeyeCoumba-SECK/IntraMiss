<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_c7a4450a0f373b22cbcad6157884e6b660dfd623fedfc4e9aaf86b3693a1c680 extends Twig_Template
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
        $__internal_93dbed195cdc05909caa50e90164edf7157c1a520efc43dcf3d508a71f3b178f = $this->env->getExtension("native_profiler");
        $__internal_93dbed195cdc05909caa50e90164edf7157c1a520efc43dcf3d508a71f3b178f->enter($__internal_93dbed195cdc05909caa50e90164edf7157c1a520efc43dcf3d508a71f3b178f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_93dbed195cdc05909caa50e90164edf7157c1a520efc43dcf3d508a71f3b178f->leave($__internal_93dbed195cdc05909caa50e90164edf7157c1a520efc43dcf3d508a71f3b178f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
