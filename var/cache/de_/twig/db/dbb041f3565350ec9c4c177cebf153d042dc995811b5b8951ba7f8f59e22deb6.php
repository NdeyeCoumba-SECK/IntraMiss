<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_b37863a5efff8acf9b5f32a3aa09e372c85e20678c41220f9bd42e8a67d2d1a3 extends Twig_Template
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
        $__internal_5a193f27585b252379b44ea0e48db4b62df95643c546fda807c583d5d40ea676 = $this->env->getExtension("native_profiler");
        $__internal_5a193f27585b252379b44ea0e48db4b62df95643c546fda807c583d5d40ea676->enter($__internal_5a193f27585b252379b44ea0e48db4b62df95643c546fda807c583d5d40ea676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5a193f27585b252379b44ea0e48db4b62df95643c546fda807c583d5d40ea676->leave($__internal_5a193f27585b252379b44ea0e48db4b62df95643c546fda807c583d5d40ea676_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
