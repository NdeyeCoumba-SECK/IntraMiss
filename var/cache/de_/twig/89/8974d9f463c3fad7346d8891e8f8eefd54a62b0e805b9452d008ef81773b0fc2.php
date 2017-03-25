<?php

/* accueil.html.twig */
class __TwigTemplate_03264e8665cb2b302b2fdf90064bae3a8ceb21c7e99996f21f022b1e4159fbab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_916af5fc431732a1978d353e06ca1fb0670e22d6f0e0685b55c5a4a22660c3b7 = $this->env->getExtension("native_profiler");
        $__internal_916af5fc431732a1978d353e06ca1fb0670e22d6f0e0685b55c5a4a22660c3b7->enter($__internal_916af5fc431732a1978d353e06ca1fb0670e22d6f0e0685b55c5a4a22660c3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "accueil.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "        <footer class=\"row\"> 
            <div class=\"col-sm-11 col-sm-offset-1\"> <a href=\"https://www.myatos.net\" style=\"text-align: left; margin-bottom: 15px\">My Atos </a></div>
            <div class=\"col-sm-11 col-sm-offset-1\">
                <address>  For internal use. Atos S.E. 2016 all rights reserved Reproduction in whole or in part is prohibited without the written consent of Atos S.E. </address> 
            </div>
        </footer>
        ";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 147
        echo "    </body>
</html>
";
        
        $__internal_916af5fc431732a1978d353e06ca1fb0670e22d6f0e0685b55c5a4a22660c3b7->leave($__internal_916af5fc431732a1978d353e06ca1fb0670e22d6f0e0685b55c5a4a22660c3b7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea60c1124ab0192b8d938df697bd549b5e24d18ca6cfd096800142c95f7b9049 = $this->env->getExtension("native_profiler");
        $__internal_ea60c1124ab0192b8d938df697bd549b5e24d18ca6cfd096800142c95f7b9049->enter($__internal_ea60c1124ab0192b8d938df697bd549b5e24d18ca6cfd096800142c95f7b9049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ea60c1124ab0192b8d938df697bd549b5e24d18ca6cfd096800142c95f7b9049->leave($__internal_ea60c1124ab0192b8d938df697bd549b5e24d18ca6cfd096800142c95f7b9049_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e3faecbbbf3deb75ccee12dcbb95cf2876d34c6c47bacbbbd10e0a4d4c2d8e4 = $this->env->getExtension("native_profiler");
        $__internal_3e3faecbbbf3deb75ccee12dcbb95cf2876d34c6c47bacbbbd10e0a4d4c2d8e4->enter($__internal_3e3faecbbbf3deb75ccee12dcbb95cf2876d34c6c47bacbbbd10e0a4d4c2d8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            
           <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
           <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
           <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styleEspace.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
           
        ";
        
        $__internal_3e3faecbbbf3deb75ccee12dcbb95cf2876d34c6c47bacbbbd10e0a4d4c2d8e4->leave($__internal_3e3faecbbbf3deb75ccee12dcbb95cf2876d34c6c47bacbbbd10e0a4d4c2d8e4_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_e710c93756c623428a2d175b5ea528a4a3c31fc1ecff34975077df2b1d39d523 = $this->env->getExtension("native_profiler");
        $__internal_e710c93756c623428a2d175b5ea528a4a3c31fc1ecff34975077df2b1d39d523->enter($__internal_e710c93756c623428a2d175b5ea528a4a3c31fc1ecff34975077df2b1d39d523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "            
           <section class=\"row\" >
               <div class=\"col-sm-1 recharge\" >
                      <div >
                              <i class=\"fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom\"></i>
                              <span class=\"sr-only\">Loading...</span>
                      </div>
               </div>
           </section>
            
            
          <section class=\"row\">
              <div class=\"ligne1 col-sm-12\"> </div>
              <div class=\"ligne2 col-sm-12\"> </div>
          </section>
            
          <header class=\"row\">         
            <div class=\"col-sm-4 logoAtos\" > 
              <section class=\"row\">
                <div class=\"col-sm-3\" style=\"height: 50px\"> <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"> </div>
                <div class=\"col-sm-9\" style=\"height: 50px;\"> <h4>Landeds <br/>Ressources </h4> </div>
              </section>
            </div>
            
            <div class=\"col-sm-4\" style=\"text-align: center\" > 
                 <h5> <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
                        ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "
                        <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>
                    </a>
                 </h5>
            </div>
            
             <div class=\"col-sm-4\" style=\"text-align: right\"> 
                 <h5>Welcome ";
        // line 49
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " ";
        }
        echo "  </h5>
            </div>
            
          </header>
           <hr/>

        ";
        
        $__internal_e710c93756c623428a2d175b5ea528a4a3c31fc1ecff34975077df2b1d39d523->leave($__internal_e710c93756c623428a2d175b5ea528a4a3c31fc1ecff34975077df2b1d39d523_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_895501a276b338e0585650d0e47ba76fcd8c1c4896d6cb2c6e0c6e8a405bb75c = $this->env->getExtension("native_profiler");
        $__internal_895501a276b338e0585650d0e47ba76fcd8c1c4896d6cb2c6e0c6e8a405bb75c->enter($__internal_895501a276b338e0585650d0e47ba76fcd8c1c4896d6cb2c6e0c6e8a405bb75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "         <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        
          
            <script >
             \$(function(){
                    \$('.lien1').css({'borderBottom':'3px solid'});
                    
                    \$( \"#profile\" ).click(function() {

                        \$('#divProfile').css({'display':'block'}); 
                        \$('#divNewUser').css({'display':'none'});
                        \$('#divAutre').css({'display':'none'});
                        \$('#divNewProject').css({'display':'none'});
                        \$('#divProjectStatus').css({'display':'none'});
                        \$('#divReceivedProject').css({'display':'none'});
                        \$('.titre').text(\$(this).text());
                        \$('.lien3').css({'borderBottom':'3px solid'});
                        \$('.lien1, .lien2').css({'borderBottom':'0px solid'});
                     });
                        
                     
                   //************* Profile *****************  
                    \$( \".fos_user_profile_edit\" ).submit(function(e) {
                      e.preventDefault();
                      //var donnees = \$(this).serialize();
                       var values = {};
                      \$('.fos_user_profile_edit').serializeArray().forEach(function (field) {
                          values[field.name] = field.value;
                      });

                            \$.ajax({
                            url: \"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\",
                            data: values,
                            type: 'post'
                            }).done(function (data) {
                                \$(\".results\").html(\"<h3>Successful.</h3>\");
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
                    
                    //************* Password *****************  
                    \$( \".fos_user_change_password\" ).submit(function(e) {

                        e.preventDefault();
                        //var donnees = \$(this).serialize();
                         var val1, val2,i=0; 
                         var values = {};
                        \$('.fos_user_change_password').serializeArray().forEach(function (field) {
                            values[field.name] = field.value;

                              if (i===0) { val1=field.value; i++;}
                               else if(i===1)  {val2=field.value; i++; }
                        });

                        if (val1===val2)
                        {
                            \$.ajax({

                              type: \"POST\",
                              url: \"";
        // line 131
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\",
                              data: values,
                              dataType: \"text\",
                              success: function(result){
                              \$(\".passwordResult\").text(\"succes\"); 
                              }
                           }); 
                        }
                        else {\$(\".passwordResult\").text(\"Mot de passe different\");}
                       
                    });

              });     
            
    </script>
        ";
        
        $__internal_895501a276b338e0585650d0e47ba76fcd8c1c4896d6cb2c6e0c6e8a405bb75c->leave($__internal_895501a276b338e0585650d0e47ba76fcd8c1c4896d6cb2c6e0c6e8a405bb75c_prof);

    }

    public function getTemplateName()
    {
        return "accueil.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  259 => 131,  220 => 95,  186 => 64,  181 => 63,  175 => 62,  152 => 49,  142 => 42,  138 => 41,  129 => 35,  108 => 16,  102 => 15,  92 => 10,  88 => 9,  84 => 8,  81 => 7,  75 => 6,  63 => 5,  54 => 147,  52 => 62,  44 => 56,  42 => 15,  38 => 13,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             */
/*            <link href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />*/
/*            <link href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css') }}" type="text/css" rel="stylesheet" />*/
/*            <link href="{{ asset('css/styleEspace.css') }}" type="text/css" rel="stylesheet" />*/
/*            */
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*             */
/*            <section class="row" >*/
/*                <div class="col-sm-1 recharge" >*/
/*                       <div >*/
/*                               <i class="fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom"></i>*/
/*                               <span class="sr-only">Loading...</span>*/
/*                       </div>*/
/*                </div>*/
/*            </section>*/
/*             */
/*             */
/*           <section class="row">*/
/*               <div class="ligne1 col-sm-12"> </div>*/
/*               <div class="ligne2 col-sm-12"> </div>*/
/*           </section>*/
/*             */
/*           <header class="row">         */
/*             <div class="col-sm-4 logoAtos" > */
/*               <section class="row">*/
/*                 <div class="col-sm-3" style="height: 50px"> <img src="{{ asset('images/logo.png') }}"> </div>*/
/*                 <div class="col-sm-9" style="height: 50px;"> <h4>Landeds <br/>Ressources </h4> </div>*/
/*               </section>*/
/*             </div>*/
/*             */
/*             <div class="col-sm-4" style="text-align: center" > */
/*                  <h5> <a href="{{ path('fos_user_security_logout') }}">*/
/*                         {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                         <i class="fa fa-sign-out" aria-hidden="true"></i>*/
/*                     </a>*/
/*                  </h5>*/
/*             </div>*/
/*             */
/*              <div class="col-sm-4" style="text-align: right"> */
/*                  <h5>Welcome {% if (app.user.nom) %} {{app.user.nom}} {{app.user.prenom}}{% else %} {{app.user.username}} {% endif %}  </h5>*/
/*             </div>*/
/*             */
/*           </header>*/
/*            <hr/>*/
/* */
/*         {% endblock %}*/
/*         <footer class="row"> */
/*             <div class="col-sm-11 col-sm-offset-1"> <a href="https://www.myatos.net" style="text-align: left; margin-bottom: 15px">My Atos </a></div>*/
/*             <div class="col-sm-11 col-sm-offset-1">*/
/*                 <address>  For internal use. Atos S.E. 2016 all rights reserved Reproduction in whole or in part is prohibited without the written consent of Atos S.E. </address> */
/*             </div>*/
/*         </footer>*/
/*         {% block javascripts %}*/
/*          <script src="{{ asset('js/jquery.min.js') }}"></script>*/
/*          <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js') }}"></script>*/
/*         */
/*           */
/*             <script >*/
/*              $(function(){*/
/*                     $('.lien1').css({'borderBottom':'3px solid'});*/
/*                     */
/*                     $( "#profile" ).click(function() {*/
/* */
/*                         $('#divProfile').css({'display':'block'}); */
/*                         $('#divNewUser').css({'display':'none'});*/
/*                         $('#divAutre').css({'display':'none'});*/
/*                         $('#divNewProject').css({'display':'none'});*/
/*                         $('#divProjectStatus').css({'display':'none'});*/
/*                         $('#divReceivedProject').css({'display':'none'});*/
/*                         $('.titre').text($(this).text());*/
/*                         $('.lien3').css({'borderBottom':'3px solid'});*/
/*                         $('.lien1, .lien2').css({'borderBottom':'0px solid'});*/
/*                      });*/
/*                         */
/*                      */
/*                    //************* Profile *****************  */
/*                     $( ".fos_user_profile_edit" ).submit(function(e) {*/
/*                       e.preventDefault();*/
/*                       //var donnees = $(this).serialize();*/
/*                        var values = {};*/
/*                       $('.fos_user_profile_edit').serializeArray().forEach(function (field) {*/
/*                           values[field.name] = field.value;*/
/*                       });*/
/* */
/*                             $.ajax({*/
/*                             url: "{{ path('fos_user_profile_edit') }}",*/
/*                             data: values,*/
/*                             type: 'post'*/
/*                             }).done(function (data) {*/
/*                                 $(".results").html("<h3>Successful.</h3>");*/
/*                                 /*setTimeout(function () {*/
/*                                     window.location.reload(1);*/
/*                                 }, 2000);*//* */
/*                             }).fail(function (data) {*/
/*                                 var newHTML = $.map(data.responseJSON.message, function (value) {*/
/*                                     return ('<li>' + value + '</li>');*/
/*                                 });*/
/*                                 $(".results").html(newHTML);*/
/*                             });*/
/* */
/*                     });*/
/*                     */
/*                     //************* Password *****************  */
/*                     $( ".fos_user_change_password" ).submit(function(e) {*/
/* */
/*                         e.preventDefault();*/
/*                         //var donnees = $(this).serialize();*/
/*                          var val1, val2,i=0; */
/*                          var values = {};*/
/*                         $('.fos_user_change_password').serializeArray().forEach(function (field) {*/
/*                             values[field.name] = field.value;*/
/* */
/*                               if (i===0) { val1=field.value; i++;}*/
/*                                else if(i===1)  {val2=field.value; i++; }*/
/*                         });*/
/* */
/*                         if (val1===val2)*/
/*                         {*/
/*                             $.ajax({*/
/* */
/*                               type: "POST",*/
/*                               url: "{{ path('fos_user_change_password') }}",*/
/*                               data: values,*/
/*                               dataType: "text",*/
/*                               success: function(result){*/
/*                               $(".passwordResult").text("succes"); */
/*                               }*/
/*                            }); */
/*                         }*/
/*                         else {$(".passwordResult").text("Mot de passe different");}*/
/*                        */
/*                     });*/
/* */
/*               });     */
/*             */
/*     </script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
