<?php

/* @Utilisateurs/Default/directeurRH.html.twig */
class __TwigTemplate_7ccb777bf9bbb8a6c9f7b555eee1a3ddbd9477fc4ee734f15b81376a8af4288f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "@Utilisateurs/Default/directeurRH.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84bf821687499c641dcbb46adf464e801557d162899d8874c03a6f2a4acd0b76 = $this->env->getExtension("native_profiler");
        $__internal_84bf821687499c641dcbb46adf464e801557d162899d8874c03a6f2a4acd0b76->enter($__internal_84bf821687499c641dcbb46adf464e801557d162899d8874c03a6f2a4acd0b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Utilisateurs/Default/directeurRH.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84bf821687499c641dcbb46adf464e801557d162899d8874c03a6f2a4acd0b76->leave($__internal_84bf821687499c641dcbb46adf464e801557d162899d8874c03a6f2a4acd0b76_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_994667d18b8be04492c26b2fb9a9235c1c2f76979d8e6902434716ad880d66e7 = $this->env->getExtension("native_profiler");
        $__internal_994667d18b8be04492c26b2fb9a9235c1c2f76979d8e6902434716ad880d66e7->enter($__internal_994667d18b8be04492c26b2fb9a9235c1c2f76979d8e6902434716ad880d66e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h2> Espace Directeur RH </h2>
    <a href=\"#\" id=\"profile\"> My Profile</a>
   
    <div id=\"divProfile\">

        ";
        // line 10
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Profile:edit"));
        echo "

    </div>

";
        
        $__internal_994667d18b8be04492c26b2fb9a9235c1c2f76979d8e6902434716ad880d66e7->leave($__internal_994667d18b8be04492c26b2fb9a9235c1c2f76979d8e6902434716ad880d66e7_prof);

    }

    public function getTemplateName()
    {
        return "@Utilisateurs/Default/directeurRH.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::accueil.html.twig" %}*/
/* */
/* {% block   body %}*/
/*     {{ parent() }}*/
/*     <h2> Espace Directeur RH </h2>*/
/*     <a href="#" id="profile"> My Profile</a>*/
/*    */
/*     <div id="divProfile">*/
/* */
/*         {{ render(controller('FOSUserBundle:Profile:edit'))}}*/
/* */
/*     </div>*/
/* */
/* {%endblock  body %}*/
/* */
