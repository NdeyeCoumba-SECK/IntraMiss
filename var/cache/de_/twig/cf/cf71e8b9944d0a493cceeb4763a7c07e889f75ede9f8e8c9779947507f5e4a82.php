<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_079ebce0f2bfc98619bed24e2fd09b23cdab546eac4e3dfd53ff55e32bd296a9 extends Twig_Template
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
        $__internal_1d48bd7f20115ae79a50630172939829223d21c5ad31ca62b09c1f2ab32d1fe3 = $this->env->getExtension("native_profiler");
        $__internal_1d48bd7f20115ae79a50630172939829223d21c5ad31ca62b09c1f2ab32d1fe3->enter($__internal_1d48bd7f20115ae79a50630172939829223d21c5ad31ca62b09c1f2ab32d1fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1d48bd7f20115ae79a50630172939829223d21c5ad31ca62b09c1f2ab32d1fe3->leave($__internal_1d48bd7f20115ae79a50630172939829223d21c5ad31ca62b09c1f2ab32d1fe3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
