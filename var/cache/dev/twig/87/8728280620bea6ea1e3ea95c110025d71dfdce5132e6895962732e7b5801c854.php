<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_49dc82207b3b600fc954f9043f836c851edafeecca07888110dcd26b3e6cbcd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30b9fa5b100d4f8c000dfb01c95cb164728f115b6e23e43a88a6589bfa0d6fec = $this->env->getExtension("native_profiler");
        $__internal_30b9fa5b100d4f8c000dfb01c95cb164728f115b6e23e43a88a6589bfa0d6fec->enter($__internal_30b9fa5b100d4f8c000dfb01c95cb164728f115b6e23e43a88a6589bfa0d6fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_30b9fa5b100d4f8c000dfb01c95cb164728f115b6e23e43a88a6589bfa0d6fec->leave($__internal_30b9fa5b100d4f8c000dfb01c95cb164728f115b6e23e43a88a6589bfa0d6fec_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
