<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_3e8482b2a99427599ff9621172dc8f85c744296b34422d76d9b5f07532395eb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_30f2fe141d45a311da7d0b4d742266ef2484de95e60b2b27e571fa941a349c59 = $this->env->getExtension("native_profiler");
        $__internal_30f2fe141d45a311da7d0b4d742266ef2484de95e60b2b27e571fa941a349c59->enter($__internal_30f2fe141d45a311da7d0b4d742266ef2484de95e60b2b27e571fa941a349c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30f2fe141d45a311da7d0b4d742266ef2484de95e60b2b27e571fa941a349c59->leave($__internal_30f2fe141d45a311da7d0b4d742266ef2484de95e60b2b27e571fa941a349c59_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_275a0c831fff69babb320eb87d8eafa08c4328cd410a1f693e6b082b3073b9fa = $this->env->getExtension("native_profiler");
        $__internal_275a0c831fff69babb320eb87d8eafa08c4328cd410a1f693e6b082b3073b9fa->enter($__internal_275a0c831fff69babb320eb87d8eafa08c4328cd410a1f693e6b082b3073b9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_275a0c831fff69babb320eb87d8eafa08c4328cd410a1f693e6b082b3073b9fa->leave($__internal_275a0c831fff69babb320eb87d8eafa08c4328cd410a1f693e6b082b3073b9fa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
