<?php

/* GMGestionDepensesBundle:Default:chart.html.twig */
class __TwigTemplate_9583670584f8f17f9d9d598821f2d771fc2ff8d2eef56445e7193972dc59c48b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseSiminta.html.twig", "GMGestionDepensesBundle:Default:chart.html.twig", 1);
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
        $__internal_e6b78c5b52744fba8ac0f9c289e170e8350e03bcd8ce8bd6bb240ef6c2f07a3a = $this->env->getExtension("native_profiler");
        $__internal_e6b78c5b52744fba8ac0f9c289e170e8350e03bcd8ce8bd6bb240ef6c2f07a3a->enter($__internal_e6b78c5b52744fba8ac0f9c289e170e8350e03bcd8ce8bd6bb240ef6c2f07a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GMGestionDepensesBundle:Default:chart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6b78c5b52744fba8ac0f9c289e170e8350e03bcd8ce8bd6bb240ef6c2f07a3a->leave($__internal_e6b78c5b52744fba8ac0f9c289e170e8350e03bcd8ce8bd6bb240ef6c2f07a3a_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_5967167cf71a31af158c7488b959eb1f8c061646b27c13683eaceb06b76833ef = $this->env->getExtension("native_profiler");
        $__internal_5967167cf71a31af158c7488b959eb1f8c061646b27c13683eaceb06b76833ef->enter($__internal_5967167cf71a31af158c7488b959eb1f8c061646b27c13683eaceb06b76833ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        echo "    ";
        // line 7
        echo "Statistiques des missions
    <!-- Load jQuery from Google's CDN if needed -->
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>

<script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
<script type=\"text/javascript\">
    ";
        // line 14
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "
</script>

<div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>


Ou bien 

<script src=\"https://code.highcharts.com/highcharts.js\"></script>
<script src=\"https://code.highcharts.com/modules/exporting.js\"></script>
<div id=\"container\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>


ou encore


";
        
        $__internal_5967167cf71a31af158c7488b959eb1f8c061646b27c13683eaceb06b76833ef->leave($__internal_5967167cf71a31af158c7488b959eb1f8c061646b27c13683eaceb06b76833ef_prof);

    }

    public function getTemplateName()
    {
        return "GMGestionDepensesBundle:Default:chart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  42 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::baseSiminta.html.twig" %} {#{% include "::baseSiminta.html.twig" %}#}*/
/* */
/* {% block contenu %}*/
/*     {#{{ include("UtilisateursBundle:Default:menuARH.html.twig") }}*/
/* {{ include("GM:GestionDepensesBundle:Default:menuARH.html.twig") }}#}*/
/* {#    My Report #}*/
/* Statistiques des missions*/
/*     <!-- Load jQuery from Google's CDN if needed -->*/
/* <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>*/
/* */
/* <script src="//code.highcharts.com/4.1.8/highcharts.js"></script>*/
/* <script src="//code.highcharts.com/4.1.8/modules/exporting.js"></script>*/
/* <script type="text/javascript">*/
/*     {{ chart(chart) }}*/
/* </script>*/
/* */
/* <div id="linechart" style="min-width: 400px; height: 400px; margin: 0 auto"></div>*/
/* */
/* */
/* Ou bien */
/* */
/* <script src="https://code.highcharts.com/highcharts.js"></script>*/
/* <script src="https://code.highcharts.com/modules/exporting.js"></script>*/
/* <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>*/
/* */
/* */
/* ou encore*/
/* */
/* */
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
