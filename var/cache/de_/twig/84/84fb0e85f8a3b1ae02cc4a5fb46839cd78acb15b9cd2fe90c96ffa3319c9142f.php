<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_df6d3386f178b29f640f1b040b14e40ed9e4933390b00bb0d9f9d0f26cc11f40 extends Twig_Template
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
        $__internal_28e3beb278022ba3ee5f84b4dfac14920b512bf4b813c3f3de1c1af4c0d3a1c2 = $this->env->getExtension("native_profiler");
        $__internal_28e3beb278022ba3ee5f84b4dfac14920b512bf4b813c3f3de1c1af4c0d3a1c2->enter($__internal_28e3beb278022ba3ee5f84b4dfac14920b512bf4b813c3f3de1c1af4c0d3a1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_28e3beb278022ba3ee5f84b4dfac14920b512bf4b813c3f3de1c1af4c0d3a1c2->leave($__internal_28e3beb278022ba3ee5f84b4dfac14920b512bf4b813c3f3de1c1af4c0d3a1c2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
