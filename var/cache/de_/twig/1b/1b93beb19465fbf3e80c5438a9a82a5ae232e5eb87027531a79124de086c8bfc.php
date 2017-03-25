<?php

/* UtilisateursBundle:Default:index.html.twig */
class __TwigTemplate_4a0997c505f95832b360212b29368f327272d632dee325b4d37472d77ce63777 extends Twig_Template
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
        $__internal_de5273a49f600737393b1fe280db394258340032b565d4dac2f2c93c68b80337 = $this->env->getExtension("native_profiler");
        $__internal_de5273a49f600737393b1fe280db394258340032b565d4dac2f2c93c68b80337->enter($__internal_de5273a49f600737393b1fe280db394258340032b565d4dac2f2c93c68b80337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:index.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("UtilisateursBundle:Default:afterLogin"));
        echo "

Hello World!
";
        
        $__internal_de5273a49f600737393b1fe280db394258340032b565d4dac2f2c93c68b80337->leave($__internal_de5273a49f600737393b1fe280db394258340032b565d4dac2f2c93c68b80337_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:index.html.twig";
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
