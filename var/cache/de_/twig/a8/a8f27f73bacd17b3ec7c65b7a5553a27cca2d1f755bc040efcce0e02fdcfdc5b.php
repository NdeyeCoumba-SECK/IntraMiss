<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_819985ca9a22f697b47aea400740a01288f235b0d4dc7dcc70351f91f5f323a9 extends Twig_Template
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
        $__internal_1c251da34bb3b084e22a59a754565e97c12d8251325073a5802af1e291747c0b = $this->env->getExtension("native_profiler");
        $__internal_1c251da34bb3b084e22a59a754565e97c12d8251325073a5802af1e291747c0b->enter($__internal_1c251da34bb3b084e22a59a754565e97c12d8251325073a5802af1e291747c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_1c251da34bb3b084e22a59a754565e97c12d8251325073a5802af1e291747c0b->leave($__internal_1c251da34bb3b084e22a59a754565e97c12d8251325073a5802af1e291747c0b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
