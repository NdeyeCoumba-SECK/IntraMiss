<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c2204a96f0d4cc4c772b24c75730bea38182fdec43d0d652b8b371f16f90c10d extends Twig_Template
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
        $__internal_7124759d40954a6b6897336df107c855197e8f5085916b265eb566f7b9b6db71 = $this->env->getExtension("native_profiler");
        $__internal_7124759d40954a6b6897336df107c855197e8f5085916b265eb566f7b9b6db71->enter($__internal_7124759d40954a6b6897336df107c855197e8f5085916b265eb566f7b9b6db71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7124759d40954a6b6897336df107c855197e8f5085916b265eb566f7b9b6db71->leave($__internal_7124759d40954a6b6897336df107c855197e8f5085916b265eb566f7b9b6db71_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
