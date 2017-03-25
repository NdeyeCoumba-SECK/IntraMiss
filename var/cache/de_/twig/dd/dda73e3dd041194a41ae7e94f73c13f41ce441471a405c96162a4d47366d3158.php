<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e5888dda7dd9ae05ec636700813cb99dbb98bf70e09902260f11eddeb8891f0a extends Twig_Template
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
        $__internal_6bdba5e6a3f4dc119582d98f5b4cc717d7de072430fe587dc5b4ada7c0319b9f = $this->env->getExtension("native_profiler");
        $__internal_6bdba5e6a3f4dc119582d98f5b4cc717d7de072430fe587dc5b4ada7c0319b9f->enter($__internal_6bdba5e6a3f4dc119582d98f5b4cc717d7de072430fe587dc5b4ada7c0319b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_6bdba5e6a3f4dc119582d98f5b4cc717d7de072430fe587dc5b4ada7c0319b9f->leave($__internal_6bdba5e6a3f4dc119582d98f5b4cc717d7de072430fe587dc5b4ada7c0319b9f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
