<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_312ad2796aa0bd1b851babd85857af5be80d4936c4741fbb05e722a1ae6228b1 extends Twig_Template
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
        $__internal_98cb3f76c2dda49be887122c702a373fbc757e26530bef76a7fec5fb99148f48 = $this->env->getExtension("native_profiler");
        $__internal_98cb3f76c2dda49be887122c702a373fbc757e26530bef76a7fec5fb99148f48->enter($__internal_98cb3f76c2dda49be887122c702a373fbc757e26530bef76a7fec5fb99148f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98cb3f76c2dda49be887122c702a373fbc757e26530bef76a7fec5fb99148f48->leave($__internal_98cb3f76c2dda49be887122c702a373fbc757e26530bef76a7fec5fb99148f48_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2df0b30cc9a3b7cc22e3ebbb50f7137586505c47db667e766503fcd91a1d1d95 = $this->env->getExtension("native_profiler");
        $__internal_2df0b30cc9a3b7cc22e3ebbb50f7137586505c47db667e766503fcd91a1d1d95->enter($__internal_2df0b30cc9a3b7cc22e3ebbb50f7137586505c47db667e766503fcd91a1d1d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2df0b30cc9a3b7cc22e3ebbb50f7137586505c47db667e766503fcd91a1d1d95->leave($__internal_2df0b30cc9a3b7cc22e3ebbb50f7137586505c47db667e766503fcd91a1d1d95_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee82536738b0aca3e624e138f1d0b511d859e6d75ff42e8d0476e930fa7c11eb = $this->env->getExtension("native_profiler");
        $__internal_ee82536738b0aca3e624e138f1d0b511d859e6d75ff42e8d0476e930fa7c11eb->enter($__internal_ee82536738b0aca3e624e138f1d0b511d859e6d75ff42e8d0476e930fa7c11eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo " ";
        
        $__internal_ee82536738b0aca3e624e138f1d0b511d859e6d75ff42e8d0476e930fa7c11eb->leave($__internal_ee82536738b0aca3e624e138f1d0b511d859e6d75ff42e8d0476e930fa7c11eb_prof);

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
