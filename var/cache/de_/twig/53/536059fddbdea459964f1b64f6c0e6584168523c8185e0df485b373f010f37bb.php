<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_d9ec2378706dec5a1cb86172374e5ef04573de7958ab2b6e68c4b6887332abf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_28c4ca909e39a8fe81843f04c053b24ae0e0abca4a27a4151a4b64422f6dbb76 = $this->env->getExtension("native_profiler");
        $__internal_28c4ca909e39a8fe81843f04c053b24ae0e0abca4a27a4151a4b64422f6dbb76->enter($__internal_28c4ca909e39a8fe81843f04c053b24ae0e0abca4a27a4151a4b64422f6dbb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28c4ca909e39a8fe81843f04c053b24ae0e0abca4a27a4151a4b64422f6dbb76->leave($__internal_28c4ca909e39a8fe81843f04c053b24ae0e0abca4a27a4151a4b64422f6dbb76_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d50aa03d73c360dec82927d20954c1dc84d48712f349177e1c532b8541f6dd37 = $this->env->getExtension("native_profiler");
        $__internal_d50aa03d73c360dec82927d20954c1dc84d48712f349177e1c532b8541f6dd37->enter($__internal_d50aa03d73c360dec82927d20954c1dc84d48712f349177e1c532b8541f6dd37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_d50aa03d73c360dec82927d20954c1dc84d48712f349177e1c532b8541f6dd37->leave($__internal_d50aa03d73c360dec82927d20954c1dc84d48712f349177e1c532b8541f6dd37_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
