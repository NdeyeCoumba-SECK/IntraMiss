<?php

/* UtilisateursBundle:Default:dg.html.twig */
class __TwigTemplate_d3ffe9cbefeddb439f733db483b102d12fc4356d061d162435aa903447dc7797 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "UtilisateursBundle:Default:dg.html.twig", 1);
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
        $__internal_4ba4c39e618fde716fa076eab2c70a56217e8932694b28e006e4efd014d40a6e = $this->env->getExtension("native_profiler");
        $__internal_4ba4c39e618fde716fa076eab2c70a56217e8932694b28e006e4efd014d40a6e->enter($__internal_4ba4c39e618fde716fa076eab2c70a56217e8932694b28e006e4efd014d40a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:dg.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ba4c39e618fde716fa076eab2c70a56217e8932694b28e006e4efd014d40a6e->leave($__internal_4ba4c39e618fde716fa076eab2c70a56217e8932694b28e006e4efd014d40a6e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_393fe2909a153b0ac05860181eac9920b4c1ca449746928c63e53a4a342408bb = $this->env->getExtension("native_profiler");
        $__internal_393fe2909a153b0ac05860181eac9920b4c1ca449746928c63e53a4a342408bb->enter($__internal_393fe2909a153b0ac05860181eac9920b4c1ca449746928c63e53a4a342408bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
      <!-- Menu -->
   <nav class=\"row\">
       <div class=\"col-sm-10 col-sm-offset-1\" style=\"border: 0px solid\">
           <table border=\"0px\" width=\"43%\" class=\"menuDG\">
               <tr>
                   <td >
                        <a href=\"#\" id=\"receivedProject\"> 
                            <span class=\"icons\" style=\"background-color: #006666\">
                               <i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i>
                           </span> 
                            <span class=\"lien lien1\"> Received Projects </span> 
                        </a> 
                   </td>
                    <td> 
                        <a href=\"#\" id=\"projectStatus\">
                            <span class=\"icons\" style=\"background-color: #5eb5e0\">
                               <span class=\"glyphicon glyphicon-flag\" aria-hidden=\"true\"></span>
                            </span> 
                            <span class=\"lien lien2\"> Projects Status </span> 
                        </a> 
                    </td>
                    <td> 
                        <a href=\"#\" id=\"profile\">
                            <span class=\"icons\" style=\"background-color: #718C00\">
                               <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
                            </span> 
                            <span class=\"lien lien3\"> My Profile </span> 
                        </a> 
                    </td>
               </tr>
           </table>
       </div>
   </nav>
  
      <!--   Corps  -->

  <div class=\"row corps\">
        <div class=\"col-sm-10 col-sm-offset-1\" >
            <h4 class=\"titre\" style=\"text-align: right\">Received Projects </h4> <div class=\"ligne\"> </div>
        </div>
      
        <div class=\"col-sm-7 col-sm-offset-1\">
            <div id=\"divReceivedProject\" class=\"col-sm-12\"> 
              ";
        // line 48
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("GMProjetBundle:Ressource:receivedProject"));
        echo "

            </div>
            
            <div id=\"divProjectStatus\" class=\"col-sm-12\">
                
            </div>
              
            <div id=\"divProfile\" class=\"col-sm-12\">
             
            </div>
            <div id=\"popup\" class=\"col-sm-12\">
              <div class=\"row\">
                <div class=\"col-sm-1 col-sm-offset-11\"> 
                    <button class=\"fermer\" title=\"Fermer\"> <i class=\"fa fa-close\" aria-hidden=\"true\"></i></button> 
                </div>
               </div>

               <div id=\"ressource\">

               </div>
           </div>
        </div>
        
         <div class=\"col-sm-3\">
            <div class=\"panel panel-default\">
               <div class=\"panel-body\"> Atos Images</div>
             </div>
         </div>

     
   </div>
      
";
        
        $__internal_393fe2909a153b0ac05860181eac9920b4c1ca449746928c63e53a4a342408bb->leave($__internal_393fe2909a153b0ac05860181eac9920b4c1ca449746928c63e53a4a342408bb_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3e47bc224c429d1b85cac5075916c7d57712a9bc86c7067702c86b7c5615994f = $this->env->getExtension("native_profiler");
        $__internal_3e47bc224c429d1b85cac5075916c7d57712a9bc86c7067702c86b7c5615994f->enter($__internal_3e47bc224c429d1b85cac5075916c7d57712a9bc86c7067702c86b7c5615994f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     
      <script >
        \$(function(){
              
                     \$( \"#receivedProject\" ).click(function() {

                        \$('#divReceivedProject').css({'display':'block'}); 
                        \$('#divProjectStatus').css({'display':'none'}); 
                        \$('#divProfile').css({'display':'none'});
                        \$('.titre').text(\$(this).text());
                        \$('.lien1').css({'borderBottom':'3px solid'});
                        \$('.lien2, .lien3').css({'borderBottom':'0px solid'});
                     });
                     
                     \$( \"#projectStatus\" ).click(function() {

                        \$('#divProjectStatus').css({'display':'block'}); 
                        \$('#divReceivedProject').css({'display':'none'}); 
                        \$('#divProfile').css({'display':'none'});
                        \$('.titre').text(\$(this).text());
                        \$('.lien2').css({'borderBottom':'3px solid'});
                        \$('.lien1, .lien3').css({'borderBottom':'0px solid'});
                     });
                     
                        \$( \".fermer\" ).click(function() {
                             \$('#popup').css({'display':'none'});
                          });
                    
                    
                     //************** Received Project *************
              
                        \$( \"#receivedProject\" ).click(function(e) {
                              //e.preventDefault();
                              \$('.recharge').css({'display':'block'});
                              \$.ajax({
                             type: \"GET\",
                             url: \"";
        // line 121
        echo $this->env->getExtension('routing')->getPath("gm_projet_received_project");
        echo "\",
                             cache: \"false\",
                             dataType: \"html\",
                             success: function(result){
                               \$('.recharge').css({'display':'none'});
                               \$(\"#divReceivedProject\").html(result); 
                               positioned();
                             }
                          }); 

                         });
                         
                     
                      //************* Posioned Project *****************  
                  
                     function positioned()
                     {
                         \$(\"#divReceivedProject form\").submit(function (e) {
                                e.preventDefault();
                                \$('.recharge').css({'display':'block'});
                                var values = {};
                                \$(this).serializeArray().forEach(function (field) {
                                    values[field.name] = field.value;
                                });
                                 \$(this).find('[type=\"submit\"]').attr('class','voir');
                                 
                                 \$.ajax({
                                    url: \"";
        // line 148
        echo $this->env->getExtension('routing')->getPath("gm_projet_positioned_project");
        echo "\",
                                    data: values,
                                    type: 'post'
                                }).done(function (data) {
                                     \$('.recharge').css({'display':'none'});
                                     \$(\".voir\").attr('disabled','disabled').css({'border':'none', 'background-color':'inherit'});
                                     \$(\".voir\").html('<i class=\"fa fa-check fa-2x\"  aria-hidden=\"true\" style=\"color:green\"></i>');
                                    /*setTimeout(function () {
                                        window.location.reload(1);
                                    }, 2000);*/
                                }).fail(function (data) {
                                   // erreur
                                });
                               
                           });
                    }
                       
                      
                 //************** Projects Status *************
              
               \$( \"#projectStatus\" ).click(function(e) {
                    // e.preventDefault();
                    \$('.recharge').css({'display':'block'});
                     \$.ajax({
                        type: \"GET\",
                        url: \"";
        // line 173
        echo $this->env->getExtension('routing')->getPath("gm_projet_project_status");
        echo "\",
                        cache: \"false\",
                        dataType: \"html\",
                        success: function(result){
                        \$('.recharge').css({'display':'none'});
                        \$(\"#divProjectStatus\").html(result); 
                        ressource();
                        detailProjet();
                    }
                 }); 
                 
                });
                
              //************* Affectation Ressource *****************  
                  function ressource()
                    {
                       \$(\"#divProjectStatus .formRess\").submit(function (e) {
                            e.preventDefault();
                            \$('.recharge').css({'display':'block'});
                            var values = {};
                                \$(this).serializeArray().forEach(function (field) {
                                    values[field.name] = field.value;
                                });
                                
                                 \$.ajax({
                                    url: \"";
        // line 198
        echo $this->env->getExtension('routing')->getPath("gm_projet_ressource_project");
        echo "\",
                                    data: values,
                                    type: 'post'
                                }).done(function (data) {
                                   \$('#popup').css({'display':'block'});
                                   \$('.recharge').css({'display':'none'});
                                   \$(\"#ressource\").html(data); 
                                    affectation();
                                    /*setTimeout(function () {
                                        window.location.reload(1);
                                    }, 2000);*/
                                }).fail(function (data) {
                                   // erreur
                                });
                               
                        });  
                    }
                    
                   function affectation(){
                    \$( \"#ressource .formRessource\" ).submit(function(e) {
                     e.preventDefault();
                     \$('.recharge').css({'display':'block'});
                    
                     var values = {};
                                \$(this).serializeArray().forEach(function (field) {
                                    values[field.name] = field.value;
                                    
                                });
                                
                                \$(this).find('[type=\"submit\"]').attr('class','voir');
                                
                                 \$.ajax({
                                    url: \"";
        // line 230
        echo $this->env->getExtension('routing')->getPath("gm_projet_ressource_affectation");
        echo "\",
                                    data: values,
                                    type: 'post'
                                }).done(function (data) {
                                     \$('.recharge').css({'display':'none'});
                                     \$(\".voir\").attr('disabled','disabled').css({'border':'none', 'background-color':'inherit'});
                                     \$(\".voir\").html('<i class=\"fa fa-check fa-1x\"  aria-hidden=\"true\" style=\"color:green\"></i>');
                                     
                                     
                                    /*setTimeout(function () {
                                        window.location.reload(1);
                                    }, 2000);*/
                                }).fail(function (data) {
                                   // erreur
                                });
      
                        });
                   }
                   
                   
                   
              //************* Detail Projet *****************  
                  function detailProjet()
                    {
                       \$(\"#divProjectStatus .formDetail\").submit(function (e) {
                            e.preventDefault();
                            \$('.recharge').css({'display':'block'});
                            var values = {};
                                \$(this).serializeArray().forEach(function (field) {
                                    values[field.name] = field.value;
                                });
                                 \$.ajax({
                                    url: \"";
        // line 262
        echo $this->env->getExtension('routing')->getPath("gm_projet_detail_project");
        echo "\",
                                    data: values,
                                    type: 'post'
                                }).done(function (data) {
                                   \$('.recharge').css({'display':'none'});
                                   \$('#popup').css({'display':'block'}); 
                                   \$(\"#ressource\").html(data); 
                                   //essai();
                                    /*setTimeout(function () {
                                        window.location.reload(1);
                                    }, 2000);*/
                                }).fail(function (data) {
                                   // erreur
                                });
                               
                        });  
                    }
               
         });
      </script>
";
        
        $__internal_3e47bc224c429d1b85cac5075916c7d57712a9bc86c7067702c86b7c5615994f->leave($__internal_3e47bc224c429d1b85cac5075916c7d57712a9bc86c7067702c86b7c5615994f_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:dg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 262,  298 => 230,  263 => 198,  235 => 173,  207 => 148,  177 => 121,  136 => 84,  130 => 83,  89 => 48,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::accueil.html.twig" %}*/
/* */
/* {% block   body %}*/
/*     {{ parent() }}*/
/*       <!-- Menu -->*/
/*    <nav class="row">*/
/*        <div class="col-sm-10 col-sm-offset-1" style="border: 0px solid">*/
/*            <table border="0px" width="43%" class="menuDG">*/
/*                <tr>*/
/*                    <td >*/
/*                         <a href="#" id="receivedProject"> */
/*                             <span class="icons" style="background-color: #006666">*/
/*                                <i class="fa fa-arrow-down" aria-hidden="true"></i>*/
/*                            </span> */
/*                             <span class="lien lien1"> Received Projects </span> */
/*                         </a> */
/*                    </td>*/
/*                     <td> */
/*                         <a href="#" id="projectStatus">*/
/*                             <span class="icons" style="background-color: #5eb5e0">*/
/*                                <span class="glyphicon glyphicon-flag" aria-hidden="true"></span>*/
/*                             </span> */
/*                             <span class="lien lien2"> Projects Status </span> */
/*                         </a> */
/*                     </td>*/
/*                     <td> */
/*                         <a href="#" id="profile">*/
/*                             <span class="icons" style="background-color: #718C00">*/
/*                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>*/
/*                             </span> */
/*                             <span class="lien lien3"> My Profile </span> */
/*                         </a> */
/*                     </td>*/
/*                </tr>*/
/*            </table>*/
/*        </div>*/
/*    </nav>*/
/*   */
/*       <!--   Corps  -->*/
/* */
/*   <div class="row corps">*/
/*         <div class="col-sm-10 col-sm-offset-1" >*/
/*             <h4 class="titre" style="text-align: right">Received Projects </h4> <div class="ligne"> </div>*/
/*         </div>*/
/*       */
/*         <div class="col-sm-7 col-sm-offset-1">*/
/*             <div id="divReceivedProject" class="col-sm-12"> */
/*               {{ render(controller('GMProjetBundle:Ressource:receivedProject'))}}*/
/* */
/*             </div>*/
/*             */
/*             <div id="divProjectStatus" class="col-sm-12">*/
/*                 */
/*             </div>*/
/*               */
/*             <div id="divProfile" class="col-sm-12">*/
/*              */
/*             </div>*/
/*             <div id="popup" class="col-sm-12">*/
/*               <div class="row">*/
/*                 <div class="col-sm-1 col-sm-offset-11"> */
/*                     <button class="fermer" title="Fermer"> <i class="fa fa-close" aria-hidden="true"></i></button> */
/*                 </div>*/
/*                </div>*/
/* */
/*                <div id="ressource">*/
/* */
/*                </div>*/
/*            </div>*/
/*         </div>*/
/*         */
/*          <div class="col-sm-3">*/
/*             <div class="panel panel-default">*/
/*                <div class="panel-body"> Atos Images</div>*/
/*              </div>*/
/*          </div>*/
/* */
/*      */
/*    </div>*/
/*       */
/* {% endblock  body %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*      */
/*       <script >*/
/*         $(function(){*/
/*               */
/*                      $( "#receivedProject" ).click(function() {*/
/* */
/*                         $('#divReceivedProject').css({'display':'block'}); */
/*                         $('#divProjectStatus').css({'display':'none'}); */
/*                         $('#divProfile').css({'display':'none'});*/
/*                         $('.titre').text($(this).text());*/
/*                         $('.lien1').css({'borderBottom':'3px solid'});*/
/*                         $('.lien2, .lien3').css({'borderBottom':'0px solid'});*/
/*                      });*/
/*                      */
/*                      $( "#projectStatus" ).click(function() {*/
/* */
/*                         $('#divProjectStatus').css({'display':'block'}); */
/*                         $('#divReceivedProject').css({'display':'none'}); */
/*                         $('#divProfile').css({'display':'none'});*/
/*                         $('.titre').text($(this).text());*/
/*                         $('.lien2').css({'borderBottom':'3px solid'});*/
/*                         $('.lien1, .lien3').css({'borderBottom':'0px solid'});*/
/*                      });*/
/*                      */
/*                         $( ".fermer" ).click(function() {*/
/*                              $('#popup').css({'display':'none'});*/
/*                           });*/
/*                     */
/*                     */
/*                      //************** Received Project **************/
/*               */
/*                         $( "#receivedProject" ).click(function(e) {*/
/*                               //e.preventDefault();*/
/*                               $('.recharge').css({'display':'block'});*/
/*                               $.ajax({*/
/*                              type: "GET",*/
/*                              url: "{{ path('gm_projet_received_project') }}",*/
/*                              cache: "false",*/
/*                              dataType: "html",*/
/*                              success: function(result){*/
/*                                $('.recharge').css({'display':'none'});*/
/*                                $("#divReceivedProject").html(result); */
/*                                positioned();*/
/*                              }*/
/*                           }); */
/* */
/*                          });*/
/*                          */
/*                      */
/*                       //************* Posioned Project *****************  */
/*                   */
/*                      function positioned()*/
/*                      {*/
/*                          $("#divReceivedProject form").submit(function (e) {*/
/*                                 e.preventDefault();*/
/*                                 $('.recharge').css({'display':'block'});*/
/*                                 var values = {};*/
/*                                 $(this).serializeArray().forEach(function (field) {*/
/*                                     values[field.name] = field.value;*/
/*                                 });*/
/*                                  $(this).find('[type="submit"]').attr('class','voir');*/
/*                                  */
/*                                  $.ajax({*/
/*                                     url: "{{ path('gm_projet_positioned_project') }}",*/
/*                                     data: values,*/
/*                                     type: 'post'*/
/*                                 }).done(function (data) {*/
/*                                      $('.recharge').css({'display':'none'});*/
/*                                      $(".voir").attr('disabled','disabled').css({'border':'none', 'background-color':'inherit'});*/
/*                                      $(".voir").html('<i class="fa fa-check fa-2x"  aria-hidden="true" style="color:green"></i>');*/
/*                                     /*setTimeout(function () {*/
/*                                         window.location.reload(1);*/
/*                                     }, 2000);*//* */
/*                                 }).fail(function (data) {*/
/*                                    // erreur*/
/*                                 });*/
/*                                */
/*                            });*/
/*                     }*/
/*                        */
/*                       */
/*                  //************** Projects Status **************/
/*               */
/*                $( "#projectStatus" ).click(function(e) {*/
/*                     // e.preventDefault();*/
/*                     $('.recharge').css({'display':'block'});*/
/*                      $.ajax({*/
/*                         type: "GET",*/
/*                         url: "{{ path('gm_projet_project_status') }}",*/
/*                         cache: "false",*/
/*                         dataType: "html",*/
/*                         success: function(result){*/
/*                         $('.recharge').css({'display':'none'});*/
/*                         $("#divProjectStatus").html(result); */
/*                         ressource();*/
/*                         detailProjet();*/
/*                     }*/
/*                  }); */
/*                  */
/*                 });*/
/*                 */
/*               //************* Affectation Ressource *****************  */
/*                   function ressource()*/
/*                     {*/
/*                        $("#divProjectStatus .formRess").submit(function (e) {*/
/*                             e.preventDefault();*/
/*                             $('.recharge').css({'display':'block'});*/
/*                             var values = {};*/
/*                                 $(this).serializeArray().forEach(function (field) {*/
/*                                     values[field.name] = field.value;*/
/*                                 });*/
/*                                 */
/*                                  $.ajax({*/
/*                                     url: "{{ path('gm_projet_ressource_project') }}",*/
/*                                     data: values,*/
/*                                     type: 'post'*/
/*                                 }).done(function (data) {*/
/*                                    $('#popup').css({'display':'block'});*/
/*                                    $('.recharge').css({'display':'none'});*/
/*                                    $("#ressource").html(data); */
/*                                     affectation();*/
/*                                     /*setTimeout(function () {*/
/*                                         window.location.reload(1);*/
/*                                     }, 2000);*//* */
/*                                 }).fail(function (data) {*/
/*                                    // erreur*/
/*                                 });*/
/*                                */
/*                         });  */
/*                     }*/
/*                     */
/*                    function affectation(){*/
/*                     $( "#ressource .formRessource" ).submit(function(e) {*/
/*                      e.preventDefault();*/
/*                      $('.recharge').css({'display':'block'});*/
/*                     */
/*                      var values = {};*/
/*                                 $(this).serializeArray().forEach(function (field) {*/
/*                                     values[field.name] = field.value;*/
/*                                     */
/*                                 });*/
/*                                 */
/*                                 $(this).find('[type="submit"]').attr('class','voir');*/
/*                                 */
/*                                  $.ajax({*/
/*                                     url: "{{ path('gm_projet_ressource_affectation') }}",*/
/*                                     data: values,*/
/*                                     type: 'post'*/
/*                                 }).done(function (data) {*/
/*                                      $('.recharge').css({'display':'none'});*/
/*                                      $(".voir").attr('disabled','disabled').css({'border':'none', 'background-color':'inherit'});*/
/*                                      $(".voir").html('<i class="fa fa-check fa-1x"  aria-hidden="true" style="color:green"></i>');*/
/*                                      */
/*                                      */
/*                                     /*setTimeout(function () {*/
/*                                         window.location.reload(1);*/
/*                                     }, 2000);*//* */
/*                                 }).fail(function (data) {*/
/*                                    // erreur*/
/*                                 });*/
/*       */
/*                         });*/
/*                    }*/
/*                    */
/*                    */
/*                    */
/*               //************* Detail Projet *****************  */
/*                   function detailProjet()*/
/*                     {*/
/*                        $("#divProjectStatus .formDetail").submit(function (e) {*/
/*                             e.preventDefault();*/
/*                             $('.recharge').css({'display':'block'});*/
/*                             var values = {};*/
/*                                 $(this).serializeArray().forEach(function (field) {*/
/*                                     values[field.name] = field.value;*/
/*                                 });*/
/*                                  $.ajax({*/
/*                                     url: "{{ path('gm_projet_detail_project') }}",*/
/*                                     data: values,*/
/*                                     type: 'post'*/
/*                                 }).done(function (data) {*/
/*                                    $('.recharge').css({'display':'none'});*/
/*                                    $('#popup').css({'display':'block'}); */
/*                                    $("#ressource").html(data); */
/*                                    //essai();*/
/*                                     /*setTimeout(function () {*/
/*                                         window.location.reload(1);*/
/*                                     }, 2000);*//* */
/*                                 }).fail(function (data) {*/
/*                                    // erreur*/
/*                                 });*/
/*                                */
/*                         });  */
/*                     }*/
/*                */
/*          });*/
/*       </script>*/
/* {% endblock %}*/
/* */
