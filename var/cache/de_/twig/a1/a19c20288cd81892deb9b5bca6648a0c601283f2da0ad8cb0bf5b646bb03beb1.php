<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_3f56e69e5cc8cac0ea8e1d97adf5921264b26586cc3352e58fa8831e6a4a8621 extends Twig_Template
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
        $__internal_c64708270c59c992e46a1513ea2a4d12f1ac99c6b8b11e2bd05b2d10f2627832 = $this->env->getExtension("native_profiler");
        $__internal_c64708270c59c992e46a1513ea2a4d12f1ac99c6b8b11e2bd05b2d10f2627832->enter($__internal_c64708270c59c992e46a1513ea2a4d12f1ac99c6b8b11e2bd05b2d10f2627832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c64708270c59c992e46a1513ea2a4d12f1ac99c6b8b11e2bd05b2d10f2627832->leave($__internal_c64708270c59c992e46a1513ea2a4d12f1ac99c6b8b11e2bd05b2d10f2627832_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
