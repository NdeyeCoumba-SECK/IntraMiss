<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_084b3f6dd534531cc53ca21ca17e96f40e6f2c8ae4ecd794ed20e13c529f24d4 extends Twig_Template
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
        $__internal_c8d49c22d35e7e8920d58946d5962a7d7858f8cce9721949bd2ad3eeecd6fcaf = $this->env->getExtension("native_profiler");
        $__internal_c8d49c22d35e7e8920d58946d5962a7d7858f8cce9721949bd2ad3eeecd6fcaf->enter($__internal_c8d49c22d35e7e8920d58946d5962a7d7858f8cce9721949bd2ad3eeecd6fcaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c8d49c22d35e7e8920d58946d5962a7d7858f8cce9721949bd2ad3eeecd6fcaf->leave($__internal_c8d49c22d35e7e8920d58946d5962a7d7858f8cce9721949bd2ad3eeecd6fcaf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
