<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_cfe2a5093f3b093ad892f1ff507dff3ed64f5c3832e1604fb78dbc232db4529e extends Twig_Template
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
        $__internal_bd61a150168ae5c406766ee454ed9eb952dac3f1aa54baee09dee65f5ae8cf76 = $this->env->getExtension("native_profiler");
        $__internal_bd61a150168ae5c406766ee454ed9eb952dac3f1aa54baee09dee65f5ae8cf76->enter($__internal_bd61a150168ae5c406766ee454ed9eb952dac3f1aa54baee09dee65f5ae8cf76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bd61a150168ae5c406766ee454ed9eb952dac3f1aa54baee09dee65f5ae8cf76->leave($__internal_bd61a150168ae5c406766ee454ed9eb952dac3f1aa54baee09dee65f5ae8cf76_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
