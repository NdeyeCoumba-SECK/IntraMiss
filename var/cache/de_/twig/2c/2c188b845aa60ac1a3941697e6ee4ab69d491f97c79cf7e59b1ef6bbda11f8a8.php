<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_76969a885bd257160ca17ade6f8439b6ad9a74a4a63f3a6bcfc07b1196e9c83f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_babdffe8afe52c1bacf7101b1f6b51430000e5899bef766170548b95086e0013 = $this->env->getExtension("native_profiler");
        $__internal_babdffe8afe52c1bacf7101b1f6b51430000e5899bef766170548b95086e0013->enter($__internal_babdffe8afe52c1bacf7101b1f6b51430000e5899bef766170548b95086e0013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_babdffe8afe52c1bacf7101b1f6b51430000e5899bef766170548b95086e0013->leave($__internal_babdffe8afe52c1bacf7101b1f6b51430000e5899bef766170548b95086e0013_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3da5439810d4104fc53b173e23bd6836ccc6e0e54b51cd7592f401dbe6dc3b79 = $this->env->getExtension("native_profiler");
        $__internal_3da5439810d4104fc53b173e23bd6836ccc6e0e54b51cd7592f401dbe6dc3b79->enter($__internal_3da5439810d4104fc53b173e23bd6836ccc6e0e54b51cd7592f401dbe6dc3b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_3da5439810d4104fc53b173e23bd6836ccc6e0e54b51cd7592f401dbe6dc3b79->leave($__internal_3da5439810d4104fc53b173e23bd6836ccc6e0e54b51cd7592f401dbe6dc3b79_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
