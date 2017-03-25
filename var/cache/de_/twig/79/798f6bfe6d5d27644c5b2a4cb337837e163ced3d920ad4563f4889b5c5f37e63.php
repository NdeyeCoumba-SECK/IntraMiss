<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_ec6ee2a6c598ce8eec9c134afae29679662aa618beed8f0d6d8fdde0dadd5a6a extends Twig_Template
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
        $__internal_f3bc5cb1bb375ad7446850d81b3b05b6c9a48e504f320af09285d45b7b41647d = $this->env->getExtension("native_profiler");
        $__internal_f3bc5cb1bb375ad7446850d81b3b05b6c9a48e504f320af09285d45b7b41647d->enter($__internal_f3bc5cb1bb375ad7446850d81b3b05b6c9a48e504f320af09285d45b7b41647d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f3bc5cb1bb375ad7446850d81b3b05b6c9a48e504f320af09285d45b7b41647d->leave($__internal_f3bc5cb1bb375ad7446850d81b3b05b6c9a48e504f320af09285d45b7b41647d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5e50086230cca2dd0303e62ab3b49e06e25054c1a4fc4154005c608ee84ce29b = $this->env->getExtension("native_profiler");
        $__internal_5e50086230cca2dd0303e62ab3b49e06e25054c1a4fc4154005c608ee84ce29b->enter($__internal_5e50086230cca2dd0303e62ab3b49e06e25054c1a4fc4154005c608ee84ce29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_5e50086230cca2dd0303e62ab3b49e06e25054c1a4fc4154005c608ee84ce29b->leave($__internal_5e50086230cca2dd0303e62ab3b49e06e25054c1a4fc4154005c608ee84ce29b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_066d4a8172bfe15f6ae985f2c1af8543ef14fba162ad7d9c3abf96969543d622 = $this->env->getExtension("native_profiler");
        $__internal_066d4a8172bfe15f6ae985f2c1af8543ef14fba162ad7d9c3abf96969543d622->enter($__internal_066d4a8172bfe15f6ae985f2c1af8543ef14fba162ad7d9c3abf96969543d622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_066d4a8172bfe15f6ae985f2c1af8543ef14fba162ad7d9c3abf96969543d622->leave($__internal_066d4a8172bfe15f6ae985f2c1af8543ef14fba162ad7d9c3abf96969543d622_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_22a5312626b45ed860c9ce25fb62fb99fe07e76883d6e62f4191832408ae37fd = $this->env->getExtension("native_profiler");
        $__internal_22a5312626b45ed860c9ce25fb62fb99fe07e76883d6e62f4191832408ae37fd->enter($__internal_22a5312626b45ed860c9ce25fb62fb99fe07e76883d6e62f4191832408ae37fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_22a5312626b45ed860c9ce25fb62fb99fe07e76883d6e62f4191832408ae37fd->leave($__internal_22a5312626b45ed860c9ce25fb62fb99fe07e76883d6e62f4191832408ae37fd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
