<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_f43895875b5ab8ff89b713eaebf083e3ac1d39e90b8dc8e119ebbc2d7bb8048d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_98be2df521d343a14a916505397fcee7f3ff1aca263023e4592020e86e9891a4 = $this->env->getExtension("native_profiler");
        $__internal_98be2df521d343a14a916505397fcee7f3ff1aca263023e4592020e86e9891a4->enter($__internal_98be2df521d343a14a916505397fcee7f3ff1aca263023e4592020e86e9891a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98be2df521d343a14a916505397fcee7f3ff1aca263023e4592020e86e9891a4->leave($__internal_98be2df521d343a14a916505397fcee7f3ff1aca263023e4592020e86e9891a4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0941cc3800c408a7cbf94e128bddbc506b2d5f0e74624201238c2a077d15c3a7 = $this->env->getExtension("native_profiler");
        $__internal_0941cc3800c408a7cbf94e128bddbc506b2d5f0e74624201238c2a077d15c3a7->enter($__internal_0941cc3800c408a7cbf94e128bddbc506b2d5f0e74624201238c2a077d15c3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_0941cc3800c408a7cbf94e128bddbc506b2d5f0e74624201238c2a077d15c3a7->leave($__internal_0941cc3800c408a7cbf94e128bddbc506b2d5f0e74624201238c2a077d15c3a7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
