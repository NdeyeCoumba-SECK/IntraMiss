<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_39bc75c41928d93b09f32d8d97309071ebad40627084db4748ccb96f7fc7e4d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_ca404aad32b71e9f5e2b1e388d9337a3f48c9b74093b416ee10dc1140e4914a0 = $this->env->getExtension("native_profiler");
        $__internal_ca404aad32b71e9f5e2b1e388d9337a3f48c9b74093b416ee10dc1140e4914a0->enter($__internal_ca404aad32b71e9f5e2b1e388d9337a3f48c9b74093b416ee10dc1140e4914a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca404aad32b71e9f5e2b1e388d9337a3f48c9b74093b416ee10dc1140e4914a0->leave($__internal_ca404aad32b71e9f5e2b1e388d9337a3f48c9b74093b416ee10dc1140e4914a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e9fd7e335d985a30857275624e9a31e1e4e9779bc360a4a57addfbddb609ac28 = $this->env->getExtension("native_profiler");
        $__internal_e9fd7e335d985a30857275624e9a31e1e4e9779bc360a4a57addfbddb609ac28->enter($__internal_e9fd7e335d985a30857275624e9a31e1e4e9779bc360a4a57addfbddb609ac28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_e9fd7e335d985a30857275624e9a31e1e4e9779bc360a4a57addfbddb609ac28->leave($__internal_e9fd7e335d985a30857275624e9a31e1e4e9779bc360a4a57addfbddb609ac28_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
