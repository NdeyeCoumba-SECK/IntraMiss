<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_e4bfcc02ea84ddd8de1f9247203a119c94ee8b1740242c3e596104224907ebe7 extends Twig_Template
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
        $__internal_af3e9285d97a98ba50099751b9c8e91dd41f2a874c2d02542825d402535b7d2c = $this->env->getExtension("native_profiler");
        $__internal_af3e9285d97a98ba50099751b9c8e91dd41f2a874c2d02542825d402535b7d2c->enter($__internal_af3e9285d97a98ba50099751b9c8e91dd41f2a874c2d02542825d402535b7d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af3e9285d97a98ba50099751b9c8e91dd41f2a874c2d02542825d402535b7d2c->leave($__internal_af3e9285d97a98ba50099751b9c8e91dd41f2a874c2d02542825d402535b7d2c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7b044d457deaf93a703f7aacd54a541d7f53fff6c8cf46cad3467e7bfe341f0 = $this->env->getExtension("native_profiler");
        $__internal_f7b044d457deaf93a703f7aacd54a541d7f53fff6c8cf46cad3467e7bfe341f0->enter($__internal_f7b044d457deaf93a703f7aacd54a541d7f53fff6c8cf46cad3467e7bfe341f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f7b044d457deaf93a703f7aacd54a541d7f53fff6c8cf46cad3467e7bfe341f0->leave($__internal_f7b044d457deaf93a703f7aacd54a541d7f53fff6c8cf46cad3467e7bfe341f0_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_29d19fca33bce7f96c95c7512001e4ddf6945df4537c8b5ba3758e0e0fa8eae7 = $this->env->getExtension("native_profiler");
        $__internal_29d19fca33bce7f96c95c7512001e4ddf6945df4537c8b5ba3758e0e0fa8eae7->enter($__internal_29d19fca33bce7f96c95c7512001e4ddf6945df4537c8b5ba3758e0e0fa8eae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo " ";
        
        $__internal_29d19fca33bce7f96c95c7512001e4ddf6945df4537c8b5ba3758e0e0fa8eae7->leave($__internal_29d19fca33bce7f96c95c7512001e4ddf6945df4537c8b5ba3758e0e0fa8eae7_prof);

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
