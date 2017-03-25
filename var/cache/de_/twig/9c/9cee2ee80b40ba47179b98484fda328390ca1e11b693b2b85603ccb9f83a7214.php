<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_f05a2d9e6d372eb06dea19a1b97e570756c8fc4fbaf3fd91f2195cf28ca7fbce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::principale.html.twig", "@FOSUser/layout.html.twig", 1);
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
        $__internal_411bce70204e29a9f33b2cb779d4ad99dd7a9336bf58b683ac04499b31f93acf = $this->env->getExtension("native_profiler");
        $__internal_411bce70204e29a9f33b2cb779d4ad99dd7a9336bf58b683ac04499b31f93acf->enter($__internal_411bce70204e29a9f33b2cb779d4ad99dd7a9336bf58b683ac04499b31f93acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_411bce70204e29a9f33b2cb779d4ad99dd7a9336bf58b683ac04499b31f93acf->leave($__internal_411bce70204e29a9f33b2cb779d4ad99dd7a9336bf58b683ac04499b31f93acf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2d88c6ce5f81b3a9f525278fabd0856b4ddff5f3c9307fc9a5b5a3391b58c6c = $this->env->getExtension("native_profiler");
        $__internal_c2d88c6ce5f81b3a9f525278fabd0856b4ddff5f3c9307fc9a5b5a3391b58c6c->enter($__internal_c2d88c6ce5f81b3a9f525278fabd0856b4ddff5f3c9307fc9a5b5a3391b58c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c2d88c6ce5f81b3a9f525278fabd0856b4ddff5f3c9307fc9a5b5a3391b58c6c->leave($__internal_c2d88c6ce5f81b3a9f525278fabd0856b4ddff5f3c9307fc9a5b5a3391b58c6c_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed5fc1db5f097f582f08e4d587511e3110c5236a56f24700c16916d3fd3f676a = $this->env->getExtension("native_profiler");
        $__internal_ed5fc1db5f097f582f08e4d587511e3110c5236a56f24700c16916d3fd3f676a->enter($__internal_ed5fc1db5f097f582f08e4d587511e3110c5236a56f24700c16916d3fd3f676a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo " ";
        
        $__internal_ed5fc1db5f097f582f08e4d587511e3110c5236a56f24700c16916d3fd3f676a->leave($__internal_ed5fc1db5f097f582f08e4d587511e3110c5236a56f24700c16916d3fd3f676a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
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
