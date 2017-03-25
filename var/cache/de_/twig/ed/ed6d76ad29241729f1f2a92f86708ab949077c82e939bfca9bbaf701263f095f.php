<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9029d47fc0635e57f2c6312ec42cdaf186a6d0cb70d171e1a74be65c01feee74 extends Twig_Template
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
        $__internal_9b98b46404ecc8472eb859b2a5d0323afa5620e82575c37890de2b0b0e741c3f = $this->env->getExtension("native_profiler");
        $__internal_9b98b46404ecc8472eb859b2a5d0323afa5620e82575c37890de2b0b0e741c3f->enter($__internal_9b98b46404ecc8472eb859b2a5d0323afa5620e82575c37890de2b0b0e741c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_9b98b46404ecc8472eb859b2a5d0323afa5620e82575c37890de2b0b0e741c3f->leave($__internal_9b98b46404ecc8472eb859b2a5d0323afa5620e82575c37890de2b0b0e741c3f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
