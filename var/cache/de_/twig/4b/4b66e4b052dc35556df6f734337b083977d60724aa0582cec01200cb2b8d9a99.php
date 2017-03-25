<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_1fb9851456a13f2b8da29d541cf1e018ddf4a1c4a87aedc0a6ae0daf8eb1edd0 extends Twig_Template
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
        $__internal_8a931e68e894ab634ccb5222927611cf3ce1d5f7d8887e012c3b32ad68efe2b3 = $this->env->getExtension("native_profiler");
        $__internal_8a931e68e894ab634ccb5222927611cf3ce1d5f7d8887e012c3b32ad68efe2b3->enter($__internal_8a931e68e894ab634ccb5222927611cf3ce1d5f7d8887e012c3b32ad68efe2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_8a931e68e894ab634ccb5222927611cf3ce1d5f7d8887e012c3b32ad68efe2b3->leave($__internal_8a931e68e894ab634ccb5222927611cf3ce1d5f7d8887e012c3b32ad68efe2b3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
