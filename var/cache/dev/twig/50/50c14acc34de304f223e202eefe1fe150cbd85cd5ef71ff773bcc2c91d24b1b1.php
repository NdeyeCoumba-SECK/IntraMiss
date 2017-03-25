<?php

/* GMGestionDepensesBundle:Default:index.html.twig */
class __TwigTemplate_a2b5abc9d539ba57794e349229546c0d06d02f7a244fbbc2441881f8d9111c54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseSiminta.html.twig", "GMGestionDepensesBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseSiminta.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_693fede87661569f7c623b82a44e180273fb752935c6555bdc1482c9d3d939d7 = $this->env->getExtension("native_profiler");
        $__internal_693fede87661569f7c623b82a44e180273fb752935c6555bdc1482c9d3d939d7->enter($__internal_693fede87661569f7c623b82a44e180273fb752935c6555bdc1482c9d3d939d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GMGestionDepensesBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_693fede87661569f7c623b82a44e180273fb752935c6555bdc1482c9d3d939d7->leave($__internal_693fede87661569f7c623b82a44e180273fb752935c6555bdc1482c9d3d939d7_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_22d2504ce7be60b48142b47de288f0f7293ee94caa551e94857b678560b7dfb8 = $this->env->getExtension("native_profiler");
        $__internal_22d2504ce7be60b48142b47de288f0f7293ee94caa551e94857b678560b7dfb8->enter($__internal_22d2504ce7be60b48142b47de288f0f7293ee94caa551e94857b678560b7dfb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        echo "    ";
        // line 6
        echo "    Repporting
";
        
        $__internal_22d2504ce7be60b48142b47de288f0f7293ee94caa551e94857b678560b7dfb8->leave($__internal_22d2504ce7be60b48142b47de288f0f7293ee94caa551e94857b678560b7dfb8_prof);

    }

    public function getTemplateName()
    {
        return "GMGestionDepensesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::baseSiminta.html.twig" %} {#{% include "::baseSiminta.html.twig" %}#}*/
/* */
/* {% block contenu %}*/
/*     {#{{ include("UtilisateursBundle:Default:menuARH.html.twig") }}*/
/* {{ include("GM:GestionDepensesBundle:Default:menuARH.html.twig") }}#}*/
/*     Repporting*/
/* {% endblock contenu %}*/
/* */
/* */
/* */
/* {#{% block menu %}*/
/*      {{ include("UtilisateursBundle:Default:menuARH.html.twig") }}*/
/* {% endblock menu %}#}*/
/* */
/* */
/* {#<div class="row">*/
/*         <!-- Menu Assistant RH -->*/
/*         <div class="col-lg-12">*/
/*             <div class="alert dropdown-tasks">*/
/*                 {{ include("UtilisateursBundle:Default:menuARH.html.twig") }}*/
/*             </div>*/
/*         </div>*/
/*         <!--end  Menu Assistant RH -->*/
/*     </div>#}*/
