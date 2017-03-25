<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0353da4ac5d4adb1d7611878e4fffb0568aeca61510fe61baefed1e4e0ba3f27 extends Twig_Template
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
        $__internal_3911fb231cf947c66423bfce1595913e81f155317a42cb30a2b34727922bc701 = $this->env->getExtension("native_profiler");
        $__internal_3911fb231cf947c66423bfce1595913e81f155317a42cb30a2b34727922bc701->enter($__internal_3911fb231cf947c66423bfce1595913e81f155317a42cb30a2b34727922bc701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3911fb231cf947c66423bfce1595913e81f155317a42cb30a2b34727922bc701->leave($__internal_3911fb231cf947c66423bfce1595913e81f155317a42cb30a2b34727922bc701_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
