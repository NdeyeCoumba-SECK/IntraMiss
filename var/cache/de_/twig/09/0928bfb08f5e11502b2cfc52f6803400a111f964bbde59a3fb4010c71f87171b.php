<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_913ad38464e525caf033147f3e4f037b8537ad010b02adc4ed5dbbb17ee20ddc extends Twig_Template
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
        $__internal_4b6c98d99292d9d8b2ecd533cb43566c04f7d572ddadfa27ca86517f96538c5a = $this->env->getExtension("native_profiler");
        $__internal_4b6c98d99292d9d8b2ecd533cb43566c04f7d572ddadfa27ca86517f96538c5a->enter($__internal_4b6c98d99292d9d8b2ecd533cb43566c04f7d572ddadfa27ca86517f96538c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4b6c98d99292d9d8b2ecd533cb43566c04f7d572ddadfa27ca86517f96538c5a->leave($__internal_4b6c98d99292d9d8b2ecd533cb43566c04f7d572ddadfa27ca86517f96538c5a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
