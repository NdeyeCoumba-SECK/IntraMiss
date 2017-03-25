<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_2cb7b6ca03252e2e940672cf289b71c255d318b9a6f942fb20ffaa7b6f1f3c73 extends Twig_Template
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
        $__internal_0d586642a4d92d9f8295315807248d03733b7e42291c246a96f954405da7eb7d = $this->env->getExtension("native_profiler");
        $__internal_0d586642a4d92d9f8295315807248d03733b7e42291c246a96f954405da7eb7d->enter($__internal_0d586642a4d92d9f8295315807248d03733b7e42291c246a96f954405da7eb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0d586642a4d92d9f8295315807248d03733b7e42291c246a96f954405da7eb7d->leave($__internal_0d586642a4d92d9f8295315807248d03733b7e42291c246a96f954405da7eb7d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
