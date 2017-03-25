<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_56f23dcb80cb8327f4892aecb2e45701c946473c1538a25bfa104d644fd785a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_eb2dfa41ff91420b76d52fe8c00c8d2bb8523ce43cfdb388c70103e83dcab0d7 = $this->env->getExtension("native_profiler");
        $__internal_eb2dfa41ff91420b76d52fe8c00c8d2bb8523ce43cfdb388c70103e83dcab0d7->enter($__internal_eb2dfa41ff91420b76d52fe8c00c8d2bb8523ce43cfdb388c70103e83dcab0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb2dfa41ff91420b76d52fe8c00c8d2bb8523ce43cfdb388c70103e83dcab0d7->leave($__internal_eb2dfa41ff91420b76d52fe8c00c8d2bb8523ce43cfdb388c70103e83dcab0d7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_881c4dda1c37eb28200fc93e2fd95801b06a2f7998602aef12d8fe21ed2d5006 = $this->env->getExtension("native_profiler");
        $__internal_881c4dda1c37eb28200fc93e2fd95801b06a2f7998602aef12d8fe21ed2d5006->enter($__internal_881c4dda1c37eb28200fc93e2fd95801b06a2f7998602aef12d8fe21ed2d5006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_881c4dda1c37eb28200fc93e2fd95801b06a2f7998602aef12d8fe21ed2d5006->leave($__internal_881c4dda1c37eb28200fc93e2fd95801b06a2f7998602aef12d8fe21ed2d5006_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
