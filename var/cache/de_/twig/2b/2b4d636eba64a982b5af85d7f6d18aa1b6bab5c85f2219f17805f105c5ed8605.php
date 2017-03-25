<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_101eb684a178ccdcc91f0f32dd17193b064ca1374c8607b74a590d74a9fcfde6 extends Twig_Template
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
        $__internal_553c0c39b3f6d10d4e65283a5cba5e776ba57436297ae0e7dab676c42089fcd0 = $this->env->getExtension("native_profiler");
        $__internal_553c0c39b3f6d10d4e65283a5cba5e776ba57436297ae0e7dab676c42089fcd0->enter($__internal_553c0c39b3f6d10d4e65283a5cba5e776ba57436297ae0e7dab676c42089fcd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_553c0c39b3f6d10d4e65283a5cba5e776ba57436297ae0e7dab676c42089fcd0->leave($__internal_553c0c39b3f6d10d4e65283a5cba5e776ba57436297ae0e7dab676c42089fcd0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
