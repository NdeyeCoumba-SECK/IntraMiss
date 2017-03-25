<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_94da430e5497f4b20692b212124240e3bba2e0e1e0cd865f134c7228d8597bb8 extends Twig_Template
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
        $__internal_bbfc2fd4d6b9b76d1648c1af961196d3d41708e55749f624cdf952e7475d8c13 = $this->env->getExtension("native_profiler");
        $__internal_bbfc2fd4d6b9b76d1648c1af961196d3d41708e55749f624cdf952e7475d8c13->enter($__internal_bbfc2fd4d6b9b76d1648c1af961196d3d41708e55749f624cdf952e7475d8c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bbfc2fd4d6b9b76d1648c1af961196d3d41708e55749f624cdf952e7475d8c13->leave($__internal_bbfc2fd4d6b9b76d1648c1af961196d3d41708e55749f624cdf952e7475d8c13_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c3518b9e9df3a67c8157e801c6a68f122d8f2000c56590aee35df4a294923eb1 = $this->env->getExtension("native_profiler");
        $__internal_c3518b9e9df3a67c8157e801c6a68f122d8f2000c56590aee35df4a294923eb1->enter($__internal_c3518b9e9df3a67c8157e801c6a68f122d8f2000c56590aee35df4a294923eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c3518b9e9df3a67c8157e801c6a68f122d8f2000c56590aee35df4a294923eb1->leave($__internal_c3518b9e9df3a67c8157e801c6a68f122d8f2000c56590aee35df4a294923eb1_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_94dfa176353d1c18c574f59dd44744d863ffea22aeeb2c3d4fe2f0fdeabe4fd9 = $this->env->getExtension("native_profiler");
        $__internal_94dfa176353d1c18c574f59dd44744d863ffea22aeeb2c3d4fe2f0fdeabe4fd9->enter($__internal_94dfa176353d1c18c574f59dd44744d863ffea22aeeb2c3d4fe2f0fdeabe4fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_94dfa176353d1c18c574f59dd44744d863ffea22aeeb2c3d4fe2f0fdeabe4fd9->leave($__internal_94dfa176353d1c18c574f59dd44744d863ffea22aeeb2c3d4fe2f0fdeabe4fd9_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e6e52366c7bc2100796367dcaa4d0a22f10e960be73937418b95577e7c4e83a5 = $this->env->getExtension("native_profiler");
        $__internal_e6e52366c7bc2100796367dcaa4d0a22f10e960be73937418b95577e7c4e83a5->enter($__internal_e6e52366c7bc2100796367dcaa4d0a22f10e960be73937418b95577e7c4e83a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e6e52366c7bc2100796367dcaa4d0a22f10e960be73937418b95577e7c4e83a5->leave($__internal_e6e52366c7bc2100796367dcaa4d0a22f10e960be73937418b95577e7c4e83a5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
