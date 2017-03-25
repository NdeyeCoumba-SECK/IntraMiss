<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_23b295fa25b1fe6afa50920094f771d3b527980c711e52d97d171ef41f822f9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_374539718917bcec245af818848b454e46fa74cb5d335fbb5361f65d1e3e2cfa = $this->env->getExtension("native_profiler");
        $__internal_374539718917bcec245af818848b454e46fa74cb5d335fbb5361f65d1e3e2cfa->enter($__internal_374539718917bcec245af818848b454e46fa74cb5d335fbb5361f65d1e3e2cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_374539718917bcec245af818848b454e46fa74cb5d335fbb5361f65d1e3e2cfa->leave($__internal_374539718917bcec245af818848b454e46fa74cb5d335fbb5361f65d1e3e2cfa_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_295a2dd7500d69e5f487405c05243a273dd60e080648d05f7dcb9fd9483ed8f1 = $this->env->getExtension("native_profiler");
        $__internal_295a2dd7500d69e5f487405c05243a273dd60e080648d05f7dcb9fd9483ed8f1->enter($__internal_295a2dd7500d69e5f487405c05243a273dd60e080648d05f7dcb9fd9483ed8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_295a2dd7500d69e5f487405c05243a273dd60e080648d05f7dcb9fd9483ed8f1->leave($__internal_295a2dd7500d69e5f487405c05243a273dd60e080648d05f7dcb9fd9483ed8f1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
