<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_6b47ccb1d2b2b381271c1e2b4ddecb57e71ea9bc791647b3b9c14180715b3fc3 extends Twig_Template
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
        $__internal_02a42faa55751b87d057832c365025250d9fa856effe229da8acfa417ce5efbe = $this->env->getExtension("native_profiler");
        $__internal_02a42faa55751b87d057832c365025250d9fa856effe229da8acfa417ce5efbe->enter($__internal_02a42faa55751b87d057832c365025250d9fa856effe229da8acfa417ce5efbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_02a42faa55751b87d057832c365025250d9fa856effe229da8acfa417ce5efbe->leave($__internal_02a42faa55751b87d057832c365025250d9fa856effe229da8acfa417ce5efbe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
