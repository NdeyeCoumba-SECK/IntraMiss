<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_7bc131eb7b9a554047261304927b2d297c05c21bd88984ac75c6da541c21516b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6411a703e7134ff4733ada4a1027440eff9afdf2c81705368162220645baed4e = $this->env->getExtension("native_profiler");
        $__internal_6411a703e7134ff4733ada4a1027440eff9afdf2c81705368162220645baed4e->enter($__internal_6411a703e7134ff4733ada4a1027440eff9afdf2c81705368162220645baed4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6411a703e7134ff4733ada4a1027440eff9afdf2c81705368162220645baed4e->leave($__internal_6411a703e7134ff4733ada4a1027440eff9afdf2c81705368162220645baed4e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_44f02010e2e726c388575efb814410c603880e3859605cd42441c5b2c7dc3a30 = $this->env->getExtension("native_profiler");
        $__internal_44f02010e2e726c388575efb814410c603880e3859605cd42441c5b2c7dc3a30->enter($__internal_44f02010e2e726c388575efb814410c603880e3859605cd42441c5b2c7dc3a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_44f02010e2e726c388575efb814410c603880e3859605cd42441c5b2c7dc3a30->leave($__internal_44f02010e2e726c388575efb814410c603880e3859605cd42441c5b2c7dc3a30_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_645a8570dedaee25f51c767d552cd35e86d32096a294141cf88d42b6e7795675 = $this->env->getExtension("native_profiler");
        $__internal_645a8570dedaee25f51c767d552cd35e86d32096a294141cf88d42b6e7795675->enter($__internal_645a8570dedaee25f51c767d552cd35e86d32096a294141cf88d42b6e7795675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_645a8570dedaee25f51c767d552cd35e86d32096a294141cf88d42b6e7795675->leave($__internal_645a8570dedaee25f51c767d552cd35e86d32096a294141cf88d42b6e7795675_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7d80dbebeb5fc781cee1beb6d47cceb9e47aa1f95b94174db78cfaff171201dd = $this->env->getExtension("native_profiler");
        $__internal_7d80dbebeb5fc781cee1beb6d47cceb9e47aa1f95b94174db78cfaff171201dd->enter($__internal_7d80dbebeb5fc781cee1beb6d47cceb9e47aa1f95b94174db78cfaff171201dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7d80dbebeb5fc781cee1beb6d47cceb9e47aa1f95b94174db78cfaff171201dd->leave($__internal_7d80dbebeb5fc781cee1beb6d47cceb9e47aa1f95b94174db78cfaff171201dd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
