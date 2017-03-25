<?php

/* UtilisateursBundle:Default:admin.html.twig */
class __TwigTemplate_709113b0539417ce6ae614746e8be24d09bbff46963c08eb7f10f811efed69eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "UtilisateursBundle:Default:admin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12fd45382d83185e85dbb85f4e5d318f3c6fd341ddd142892601d7287642c310 = $this->env->getExtension("native_profiler");
        $__internal_12fd45382d83185e85dbb85f4e5d318f3c6fd341ddd142892601d7287642c310->enter($__internal_12fd45382d83185e85dbb85f4e5d318f3c6fd341ddd142892601d7287642c310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12fd45382d83185e85dbb85f4e5d318f3c6fd341ddd142892601d7287642c310->leave($__internal_12fd45382d83185e85dbb85f4e5d318f3c6fd341ddd142892601d7287642c310_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f652ddf810fcbd2aa5f554585aa0245a3bfdd754d38f770ae85c3fe480c32cce = $this->env->getExtension("native_profiler");
        $__internal_f652ddf810fcbd2aa5f554585aa0245a3bfdd754d38f770ae85c3fe480c32cce->enter($__internal_f652ddf810fcbd2aa5f554585aa0245a3bfdd754d38f770ae85c3fe480c32cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h2> Espace Administrateur </h2>
    <a href=\"#\" id=\"profile\"> My Profile</a> &nbsp;&nbsp;&nbsp;
    <a href=\"#\" id=\"newUser\"> New User </a>  &nbsp;&nbsp;&nbsp;
    <a href=\"#\" id=\"manage\"> Manage Account </a>

    <div id=\"divProfile\">

        ";
        // line 12
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Profile:edit"));
        echo "
          <div class=\"results\"> </div> 
          <hr/>
        ";
        // line 15
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:ChangePassword:changePassword"));
        echo "
        <span class=\"passwordResult\"> </span>
    </div>
    
    <div id=\"divNewUser\">

        ";
        // line 21
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Registration:register"));
        echo "
         <div class=\"results\"> </div>  
    </div>
        
    <div id=\"divAutre\">
       
    </div>    
";
        
        $__internal_f652ddf810fcbd2aa5f554585aa0245a3bfdd754d38f770ae85c3fe480c32cce->leave($__internal_f652ddf810fcbd2aa5f554585aa0245a3bfdd754d38f770ae85c3fe480c32cce_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8579331d8d4963acf24b2c52e69c416e001e1fc1c280507c1546aa986073561f = $this->env->getExtension("native_profiler");
        $__internal_8579331d8d4963acf24b2c52e69c416e001e1fc1c280507c1546aa986073561f->enter($__internal_8579331d8d4963acf24b2c52e69c416e001e1fc1c280507c1546aa986073561f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     
      <script >
        \$(function(){
              
                     \$( \"#newUser\" ).click(function() {

                        \$('#divNewUser').css({'display':'block'}); 
                        \$('#divProfile').css({'display':'none'}); 
                         \$('#divAutre').css({'display':'none'});
                     });
                     
                     \$( \"#manage\" ).click(function() {

                        \$('#divNewUser').css({'display':'none'}); 
                        \$('#divProfile').css({'display':'none'}); 
                        \$('#divAutre').css({'display':'block'}); 
                     });
              
              //************** Users list *************
              
               \$( \"#manage\" ).click(function(e) {
                     e.preventDefault();
                     \$.ajax({
                    type: \"GET\",
                    url: \"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("utilisateurs_users");
        echo "\",
                    cache: \"false\",
                    dataType: \"html\",
                    success: function(result){
                    \$(\"#divAutre\").html(result); 
                    }
                 }); 
                 
                });
                
                
              //************* Registration *****************  
                    
                \$(\".fos_user_registration_register\").submit(function (e) {
                e.preventDefault();
                var values = {};
                \$('.fos_user_registration_register').serializeArray().forEach(function (field) {
                    values[field.name] = field.value;
                });
                \$.ajax({
                    url: \"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\",
                    data: values,
                    type: 'post'
                }).done(function (data) {
                    \$(\".results\").html(\"<h3>You are successfully registered.</h3>\");
                    /*setTimeout(function () {
                        window.location.reload(1);
                    }, 2000);*/
                }).fail(function (data) {
                    var newHTML = \$.map(data.responseJSON.message, function (value) {
                        return ('<li>' + value + '</li>');
                    });
                    \$(\".results\").html(newHTML);
                });
            });
            
                //************** Users Enabled *************
       
                
                   
                 
         });
      </script>
";
        
        $__internal_8579331d8d4963acf24b2c52e69c416e001e1fc1c280507c1546aa986073561f->leave($__internal_8579331d8d4963acf24b2c52e69c416e001e1fc1c280507c1546aa986073561f_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 76,  118 => 56,  89 => 31,  83 => 30,  68 => 21,  59 => 15,  53 => 12,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::accueil.html.twig" %}*/
/* */
/* {% block   body %}*/
/*     {{ parent() }}*/
/*     <h2> Espace Administrateur </h2>*/
/*     <a href="#" id="profile"> My Profile</a> &nbsp;&nbsp;&nbsp;*/
/*     <a href="#" id="newUser"> New User </a>  &nbsp;&nbsp;&nbsp;*/
/*     <a href="#" id="manage"> Manage Account </a>*/
/* */
/*     <div id="divProfile">*/
/* */
/*         {{ render(controller('FOSUserBundle:Profile:edit'))}}*/
/*           <div class="results"> </div> */
/*           <hr/>*/
/*         {{ render(controller('FOSUserBundle:ChangePassword:changePassword'))}}*/
/*         <span class="passwordResult"> </span>*/
/*     </div>*/
/*     */
/*     <div id="divNewUser">*/
/* */
/*         {{ render(controller('FOSUserBundle:Registration:register'))}}*/
/*          <div class="results"> </div>  */
/*     </div>*/
/*         */
/*     <div id="divAutre">*/
/*        */
/*     </div>    */
/* {%endblock  body %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*      */
/*       <script >*/
/*         $(function(){*/
/*               */
/*                      $( "#newUser" ).click(function() {*/
/* */
/*                         $('#divNewUser').css({'display':'block'}); */
/*                         $('#divProfile').css({'display':'none'}); */
/*                          $('#divAutre').css({'display':'none'});*/
/*                      });*/
/*                      */
/*                      $( "#manage" ).click(function() {*/
/* */
/*                         $('#divNewUser').css({'display':'none'}); */
/*                         $('#divProfile').css({'display':'none'}); */
/*                         $('#divAutre').css({'display':'block'}); */
/*                      });*/
/*               */
/*               //************** Users list **************/
/*               */
/*                $( "#manage" ).click(function(e) {*/
/*                      e.preventDefault();*/
/*                      $.ajax({*/
/*                     type: "GET",*/
/*                     url: "{{ path('utilisateurs_users') }}",*/
/*                     cache: "false",*/
/*                     dataType: "html",*/
/*                     success: function(result){*/
/*                     $("#divAutre").html(result); */
/*                     }*/
/*                  }); */
/*                  */
/*                 });*/
/*                 */
/*                 */
/*               //************* Registration *****************  */
/*                     */
/*                 $(".fos_user_registration_register").submit(function (e) {*/
/*                 e.preventDefault();*/
/*                 var values = {};*/
/*                 $('.fos_user_registration_register').serializeArray().forEach(function (field) {*/
/*                     values[field.name] = field.value;*/
/*                 });*/
/*                 $.ajax({*/
/*                     url: "{{ path('fos_user_registration_register') }}",*/
/*                     data: values,*/
/*                     type: 'post'*/
/*                 }).done(function (data) {*/
/*                     $(".results").html("<h3>You are successfully registered.</h3>");*/
/*                     /*setTimeout(function () {*/
/*                         window.location.reload(1);*/
/*                     }, 2000);*//* */
/*                 }).fail(function (data) {*/
/*                     var newHTML = $.map(data.responseJSON.message, function (value) {*/
/*                         return ('<li>' + value + '</li>');*/
/*                     });*/
/*                     $(".results").html(newHTML);*/
/*                 });*/
/*             });*/
/*             */
/*                 //************** Users Enabled **************/
/*        */
/*                 */
/*                    */
/*                  */
/*          });*/
/*       </script>*/
/* {% endblock %}*/
/* */
/* */
