<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_bc1088900729f4b459d8af495f3a41de80810559cace0cb5910f6cd07750493b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5a07c7ad59c268df489bfefdd5ffb18804d61cd638ee91e5b38bb82bcc61f83 = $this->env->getExtension("native_profiler");
        $__internal_a5a07c7ad59c268df489bfefdd5ffb18804d61cd638ee91e5b38bb82bcc61f83->enter($__internal_a5a07c7ad59c268df489bfefdd5ffb18804d61cd638ee91e5b38bb82bcc61f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5a07c7ad59c268df489bfefdd5ffb18804d61cd638ee91e5b38bb82bcc61f83->leave($__internal_a5a07c7ad59c268df489bfefdd5ffb18804d61cd638ee91e5b38bb82bcc61f83_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_70bba8f9cbc0726d765aab1982d0bfb7c880f53076c2090eb159a2959aad6d5c = $this->env->getExtension("native_profiler");
        $__internal_70bba8f9cbc0726d765aab1982d0bfb7c880f53076c2090eb159a2959aad6d5c->enter($__internal_70bba8f9cbc0726d765aab1982d0bfb7c880f53076c2090eb159a2959aad6d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_70bba8f9cbc0726d765aab1982d0bfb7c880f53076c2090eb159a2959aad6d5c->leave($__internal_70bba8f9cbc0726d765aab1982d0bfb7c880f53076c2090eb159a2959aad6d5c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
