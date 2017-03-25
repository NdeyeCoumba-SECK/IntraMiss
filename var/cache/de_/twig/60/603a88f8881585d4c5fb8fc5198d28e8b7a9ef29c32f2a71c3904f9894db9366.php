<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_9ebd5ef78294b24356365d805405b6953f71f0065e80744d35f954e1200130db extends Twig_Template
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
        $__internal_15c2a48fd441a4e41f5e98902ce388f6addf689551568ad3a1a7b49220b4c9e9 = $this->env->getExtension("native_profiler");
        $__internal_15c2a48fd441a4e41f5e98902ce388f6addf689551568ad3a1a7b49220b4c9e9->enter($__internal_15c2a48fd441a4e41f5e98902ce388f6addf689551568ad3a1a7b49220b4c9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_15c2a48fd441a4e41f5e98902ce388f6addf689551568ad3a1a7b49220b4c9e9->leave($__internal_15c2a48fd441a4e41f5e98902ce388f6addf689551568ad3a1a7b49220b4c9e9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
