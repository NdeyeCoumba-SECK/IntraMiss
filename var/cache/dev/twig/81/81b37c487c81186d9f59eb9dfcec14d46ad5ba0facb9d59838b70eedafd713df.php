<?php

/* UtilisateursBundle:Default:directeurRH.html.twig */
class __TwigTemplate_765cf334952b09e71aa9a0e8e73ee70a120ce08ffba88b2dfaab523e015256e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "UtilisateursBundle:Default:directeurRH.html.twig", 1);
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
        $__internal_ea1f03c172da2f3e54310d79a29a990b108354da4751a719469431125a6cd198 = $this->env->getExtension("native_profiler");
        $__internal_ea1f03c172da2f3e54310d79a29a990b108354da4751a719469431125a6cd198->enter($__internal_ea1f03c172da2f3e54310d79a29a990b108354da4751a719469431125a6cd198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:directeurRH.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea1f03c172da2f3e54310d79a29a990b108354da4751a719469431125a6cd198->leave($__internal_ea1f03c172da2f3e54310d79a29a990b108354da4751a719469431125a6cd198_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_829559f63f0b52cf0d75e68ed3f40443d5046e8be539d4ffcb9da8795e45a41a = $this->env->getExtension("native_profiler");
        $__internal_829559f63f0b52cf0d75e68ed3f40443d5046e8be539d4ffcb9da8795e45a41a->enter($__internal_829559f63f0b52cf0d75e68ed3f40443d5046e8be539d4ffcb9da8795e45a41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_829559f63f0b52cf0d75e68ed3f40443d5046e8be539d4ffcb9da8795e45a41a->leave($__internal_829559f63f0b52cf0d75e68ed3f40443d5046e8be539d4ffcb9da8795e45a41a_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:directeurRH.html.twig";
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
