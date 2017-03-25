<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_dd3d356aa126ea79bb5eee3229eb0a861aeeffcd831127edc882ef5470303adc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_7ce4953fdfc15d175a60e15bb1380a2ee96b33b275768f8224b17dfd2f71e41c = $this->env->getExtension("native_profiler");
        $__internal_7ce4953fdfc15d175a60e15bb1380a2ee96b33b275768f8224b17dfd2f71e41c->enter($__internal_7ce4953fdfc15d175a60e15bb1380a2ee96b33b275768f8224b17dfd2f71e41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ce4953fdfc15d175a60e15bb1380a2ee96b33b275768f8224b17dfd2f71e41c->leave($__internal_7ce4953fdfc15d175a60e15bb1380a2ee96b33b275768f8224b17dfd2f71e41c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ae59cda29f08566443385c211a6cc2e3d531eed8f1efe6eec7d293673f21d2e = $this->env->getExtension("native_profiler");
        $__internal_2ae59cda29f08566443385c211a6cc2e3d531eed8f1efe6eec7d293673f21d2e->enter($__internal_2ae59cda29f08566443385c211a6cc2e3d531eed8f1efe6eec7d293673f21d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_2ae59cda29f08566443385c211a6cc2e3d531eed8f1efe6eec7d293673f21d2e->leave($__internal_2ae59cda29f08566443385c211a6cc2e3d531eed8f1efe6eec7d293673f21d2e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
