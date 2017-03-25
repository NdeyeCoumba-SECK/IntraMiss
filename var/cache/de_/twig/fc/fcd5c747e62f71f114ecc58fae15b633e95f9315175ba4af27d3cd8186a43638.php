<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_0eb25ebe125e929f9563f9abd5deeae4c47ea521b1a227888f6e4cfa2e4de968 extends Twig_Template
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
        $__internal_08bd3899d682f9cd9e3ac27d8c026b4cfc3c516acf4713edcc814c426f0dbc3b = $this->env->getExtension("native_profiler");
        $__internal_08bd3899d682f9cd9e3ac27d8c026b4cfc3c516acf4713edcc814c426f0dbc3b->enter($__internal_08bd3899d682f9cd9e3ac27d8c026b4cfc3c516acf4713edcc814c426f0dbc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_08bd3899d682f9cd9e3ac27d8c026b4cfc3c516acf4713edcc814c426f0dbc3b->leave($__internal_08bd3899d682f9cd9e3ac27d8c026b4cfc3c516acf4713edcc814c426f0dbc3b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
