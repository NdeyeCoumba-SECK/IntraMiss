<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_0cb6a982dd6c628a6fc448c26125bb1f195f6783a8cbad7fd24c917848f56dcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8d6feaca941e85a5a65ded6c23acda358e0e8dd7144a9ea6acda1bb77b3d0cb = $this->env->getExtension("native_profiler");
        $__internal_f8d6feaca941e85a5a65ded6c23acda358e0e8dd7144a9ea6acda1bb77b3d0cb->enter($__internal_f8d6feaca941e85a5a65ded6c23acda358e0e8dd7144a9ea6acda1bb77b3d0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8d6feaca941e85a5a65ded6c23acda358e0e8dd7144a9ea6acda1bb77b3d0cb->leave($__internal_f8d6feaca941e85a5a65ded6c23acda358e0e8dd7144a9ea6acda1bb77b3d0cb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_774d657bebab8f14a312de53c73c32580e467277be97ac00a9db08ac606b7ba5 = $this->env->getExtension("native_profiler");
        $__internal_774d657bebab8f14a312de53c73c32580e467277be97ac00a9db08ac606b7ba5->enter($__internal_774d657bebab8f14a312de53c73c32580e467277be97ac00a9db08ac606b7ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <div class=\"container\">
      <section class=\"row\">
          <div class=\"col-sm-4 col-sm-offset-4 connexion\" >
           <section class=\"row\">
                <div class=\"logoAtos col-sm-12\">
                    <section class=\"row\">
                        <div class=\"col-sm-4\" style=\"height: 60px\"> <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"> </div>
                        <div class=\"col-sm-8\" style=\"height: 60px;\"> <h4>Landeds <br/>Ressources </h4> </div>
                    </section>
                </div>
                

                <div class=\"forms col-sm-12\">
                    <h4> Log in to your account</h4>
                    ";
        // line 20
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 21
            echo "                       <div class=\"erreurs col-sm-12\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 23
        echo "                    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                        
                        <div class=\"form-group\">
                           <div class=\"input-group\">
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"DAS-ID or e-mail\" class=\"form-control\"/> 
                             <span class=\"input-group-addon\" ><i  class=\"fa fa-user\" aria-hidden=\"true\"></i> </span>
                           </div>
                         </div>
                       <!-- <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Forgot Password</a>-->
                        <div class=\"form-group\">
                            <div class=\"input-group\">                          
                            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Password\" class=\"form-control\"/>
                            <span class=\"input-group-addon\" ><i  class=\"fa fa-lock\" aria-hidden=\"true\"></i> </span>
                            </div>
                        </div>
                        
                        <div class=\"form-group\">
                         <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"form-control btn btn-primary\"/>
                         </div>
                    </form>

                 </div>
            </section>
          </div>
      </section>
    </div>    
";
        
        $__internal_774d657bebab8f14a312de53c73c32580e467277be97ac00a9db08ac606b7ba5->leave($__internal_774d657bebab8f14a312de53c73c32580e467277be97ac00a9db08ac606b7ba5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 41,  86 => 32,  79 => 28,  72 => 24,  67 => 23,  61 => 21,  59 => 20,  48 => 12,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*  {% block fos_user_content %}*/
/*     <div class="container">*/
/*       <section class="row">*/
/*           <div class="col-sm-4 col-sm-offset-4 connexion" >*/
/*            <section class="row">*/
/*                 <div class="logoAtos col-sm-12">*/
/*                     <section class="row">*/
/*                         <div class="col-sm-4" style="height: 60px"> <img src="{{ asset('images/logo.png') }}"> </div>*/
/*                         <div class="col-sm-8" style="height: 60px;"> <h4>Landeds <br/>Ressources </h4> </div>*/
/*                     </section>*/
/*                 </div>*/
/*                 */
/* */
/*                 <div class="forms col-sm-12">*/
/*                     <h4> Log in to your account</h4>*/
/*                     {% if error %}*/
/*                        <div class="erreurs col-sm-12">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*                     {% endif %}*/
/*                     <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                         */
/*                         <div class="form-group">*/
/*                            <div class="input-group">*/
/*                             <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" placeholder="DAS-ID or e-mail" class="form-control"/> */
/*                              <span class="input-group-addon" ><i  class="fa fa-user" aria-hidden="true"></i> </span>*/
/*                            </div>*/
/*                          </div>*/
/*                        <!-- <a href="{{path('fos_user_resetting_request')}}">Forgot Password</a>-->*/
/*                         <div class="form-group">*/
/*                             <div class="input-group">                          */
/*                             <input type="password" id="password" name="_password" required="required" placeholder="Password" class="form-control"/>*/
/*                             <span class="input-group-addon" ><i  class="fa fa-lock" aria-hidden="true"></i> </span>*/
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                         <div class="form-group">*/
/*                          <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" class="form-control btn btn-primary"/>*/
/*                          </div>*/
/*                     </form>*/
/* */
/*                  </div>*/
/*             </section>*/
/*           </div>*/
/*       </section>*/
/*     </div>    */
/* {% endblock fos_user_content %}*/
