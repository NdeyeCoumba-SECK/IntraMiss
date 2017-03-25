<?php

/* @Utilisateurs/Default/index.html.twig */
class __TwigTemplate_6c4aeb8a1e713e17511b7e5c3f7bb6f05d5032ca23ea910a183b7545ef1e85f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4622e5b8a247271b7cdf4d582e39b7c41e0a430aa67f66c4bb6ff5ca7831d431 = $this->env->getExtension("native_profiler");
        $__internal_4622e5b8a247271b7cdf4d582e39b7c41e0a430aa67f66c4bb6ff5ca7831d431->enter($__internal_4622e5b8a247271b7cdf4d582e39b7c41e0a430aa67f66c4bb6ff5ca7831d431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Utilisateurs/Default/index.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("UtilisateursBundle:Default:afterLogin"));
        echo "

Hello World!
";
        
        $__internal_4622e5b8a247271b7cdf4d582e39b7c41e0a430aa67f66c4bb6ff5ca7831d431->leave($__internal_4622e5b8a247271b7cdf4d582e39b7c41e0a430aa67f66c4bb6ff5ca7831d431_prof);

    }

    public function getTemplateName()
    {
        return "@Utilisateurs/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ render(controller('UtilisateursBundle:Default:afterLogin'))}}*/
/* */
/* Hello World!*/
/* */
