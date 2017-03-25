<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_ed6362901676c464e7aecea6d3d7e0f1c8f23b869c8d09b41e55ee3aa558db62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::principale.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::principale.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a2dbd5e7a39e4814b2c4a85c633fb5d6df4c8506120eb981fa10eab8a0c2ffb = $this->env->getExtension("native_profiler");
        $__internal_7a2dbd5e7a39e4814b2c4a85c633fb5d6df4c8506120eb981fa10eab8a0c2ffb->enter($__internal_7a2dbd5e7a39e4814b2c4a85c633fb5d6df4c8506120eb981fa10eab8a0c2ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a2dbd5e7a39e4814b2c4a85c633fb5d6df4c8506120eb981fa10eab8a0c2ffb->leave($__internal_7a2dbd5e7a39e4814b2c4a85c633fb5d6df4c8506120eb981fa10eab8a0c2ffb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b7274941b1a72440f67b0b32ee18bdd35b3283a31a25e9bc2e4ad9cb953807c = $this->env->getExtension("native_profiler");
        $__internal_8b7274941b1a72440f67b0b32ee18bdd35b3283a31a25e9bc2e4ad9cb953807c->enter($__internal_8b7274941b1a72440f67b0b32ee18bdd35b3283a31a25e9bc2e4ad9cb953807c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 5
            echo "   ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 6
                echo "   <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
        ";
                // line 7
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
   </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "

 ";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 15
        echo "
";
        
        $__internal_8b7274941b1a72440f67b0b32ee18bdd35b3283a31a25e9bc2e4ad9cb953807c->leave($__internal_8b7274941b1a72440f67b0b32ee18bdd35b3283a31a25e9bc2e4ad9cb953807c_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_43a8fe083d819a9170a3f897defe776eddbac3588f1e9e5cc3162e6d2ff540de = $this->env->getExtension("native_profiler");
        $__internal_43a8fe083d819a9170a3f897defe776eddbac3588f1e9e5cc3162e6d2ff540de->enter($__internal_43a8fe083d819a9170a3f897defe776eddbac3588f1e9e5cc3162e6d2ff540de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo " ";
        
        $__internal_43a8fe083d819a9170a3f897defe776eddbac3588f1e9e5cc3162e6d2ff540de->leave($__internal_43a8fe083d819a9170a3f897defe776eddbac3588f1e9e5cc3162e6d2ff540de_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 14,  82 => 13,  74 => 15,  72 => 13,  68 => 11,  55 => 7,  50 => 6,  45 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::principale.html.twig" %}*/
/*             */
/* {%block body %}*/
/* {% for type, messages in app.session.flashbag.all() %}*/
/*    {% for message in messages %}*/
/*    <div class="flash-{{ type }}">*/
/*         {{ message }}*/
/*    </div>*/
/*     {% endfor %}*/
/* {% endfor %}*/
/* */
/* */
/*  {% block fos_user_content %}*/
/*  {% endblock fos_user_content %}*/
/* */
/* {% endblock body %}*/
/*    */
