<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_266c3b0b692c8f4892460cbd7fb85d649d7bf99e1b02a6c72408fea5484f5595 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_4b9f3cd5799ff620ab4bf032a60d7e5da9bd4f5bcd5a983dc435cb13b90d99a1 = $this->env->getExtension("native_profiler");
        $__internal_4b9f3cd5799ff620ab4bf032a60d7e5da9bd4f5bcd5a983dc435cb13b90d99a1->enter($__internal_4b9f3cd5799ff620ab4bf032a60d7e5da9bd4f5bcd5a983dc435cb13b90d99a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b9f3cd5799ff620ab4bf032a60d7e5da9bd4f5bcd5a983dc435cb13b90d99a1->leave($__internal_4b9f3cd5799ff620ab4bf032a60d7e5da9bd4f5bcd5a983dc435cb13b90d99a1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b3b3c391ac5bf7a1730e8d23a895039bbac1f9670b79d35dfd12a7cbc201ae94 = $this->env->getExtension("native_profiler");
        $__internal_b3b3c391ac5bf7a1730e8d23a895039bbac1f9670b79d35dfd12a7cbc201ae94->enter($__internal_b3b3c391ac5bf7a1730e8d23a895039bbac1f9670b79d35dfd12a7cbc201ae94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_b3b3c391ac5bf7a1730e8d23a895039bbac1f9670b79d35dfd12a7cbc201ae94->leave($__internal_b3b3c391ac5bf7a1730e8d23a895039bbac1f9670b79d35dfd12a7cbc201ae94_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
