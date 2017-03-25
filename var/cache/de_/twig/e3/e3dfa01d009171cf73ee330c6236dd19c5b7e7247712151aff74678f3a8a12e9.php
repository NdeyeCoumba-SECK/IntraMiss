<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_e2ef4b2fc2b3f5ecd4495d096fbb1ef4296bd9dccdec69cbc98bb483a9bb51d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_3160e5c7797efd9f4734f88750bcda80393813969879b9b68d69e0482ee53708 = $this->env->getExtension("native_profiler");
        $__internal_3160e5c7797efd9f4734f88750bcda80393813969879b9b68d69e0482ee53708->enter($__internal_3160e5c7797efd9f4734f88750bcda80393813969879b9b68d69e0482ee53708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3160e5c7797efd9f4734f88750bcda80393813969879b9b68d69e0482ee53708->leave($__internal_3160e5c7797efd9f4734f88750bcda80393813969879b9b68d69e0482ee53708_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a6068559a551dd9737c96798d57890b70151e47f412db5781ef70f7b1f1b2739 = $this->env->getExtension("native_profiler");
        $__internal_a6068559a551dd9737c96798d57890b70151e47f412db5781ef70f7b1f1b2739->enter($__internal_a6068559a551dd9737c96798d57890b70151e47f412db5781ef70f7b1f1b2739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_a6068559a551dd9737c96798d57890b70151e47f412db5781ef70f7b1f1b2739->leave($__internal_a6068559a551dd9737c96798d57890b70151e47f412db5781ef70f7b1f1b2739_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
