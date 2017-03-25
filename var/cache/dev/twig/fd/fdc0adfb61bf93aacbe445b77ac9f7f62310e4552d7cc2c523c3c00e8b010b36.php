<?php

/* UtilisateursBundle:Default:projet.html.twig */
class __TwigTemplate_e9149486bca9f5c79c43db450fa972c54e20237244f2b83b1032d9e4fcd4d302 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "UtilisateursBundle:Default:projet.html.twig", 1);
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
        $__internal_214fb157f71bb53c5637b0562dce44ce153eb7b15810d9da27e393000220e3ab = $this->env->getExtension("native_profiler");
        $__internal_214fb157f71bb53c5637b0562dce44ce153eb7b15810d9da27e393000220e3ab->enter($__internal_214fb157f71bb53c5637b0562dce44ce153eb7b15810d9da27e393000220e3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:projet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_214fb157f71bb53c5637b0562dce44ce153eb7b15810d9da27e393000220e3ab->leave($__internal_214fb157f71bb53c5637b0562dce44ce153eb7b15810d9da27e393000220e3ab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b68eb165de825001f85f7442686baa9b1ccdf9c007104198546c9df3ab116818 = $this->env->getExtension("native_profiler");
        $__internal_b68eb165de825001f85f7442686baa9b1ccdf9c007104198546c9df3ab116818->enter($__internal_b68eb165de825001f85f7442686baa9b1ccdf9c007104198546c9df3ab116818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
  
   <!-- <h2> Espace Entité Atos Porteur du Projet</h2> -->
   <nav class=\"row\">
       <div class=\"col-sm-10 col-sm-offset-1\" style=\"border: 0px solid\">
           <table style=\"\" border=\"0px\" width=\"49%\">
               <tr>
                   <td >
                        <a href=\"#\" id=\"newProject\"> 
                           <span class=\"icons\">
                               <span class=\"glyphicon glyphicon-ruble\" aria-hidden=\"true\"></span>
                           </span> 
                            <span class=\"lien lien1\"> New Project </span> 
                        </a> 
                   </td>
                    <td> 
                        <a href=\"#\" id=\"importProject\">
                            <span class=\"icons\">
                               <span class=\"glyphicon glyphicon-import\" aria-hidden=\"true\"></span>
                            </span> 
                            <span class=\"lien lien2\"> Import Projects </span> 
                        </a>  
                    </td>
                    <td> 
                        <a href=\"#\" id=\"projectStatus\">
                            <span class=\"icons\">
                               <span class=\"glyphicon glyphicon-list\" aria-hidden=\"true\"></span>
                            </span> 
                            <span class=\"lien lien3\"> Projects </span> 
                        </a>  
                    </td>
               </tr>
           </table>
       </div>
   </nav>

<!--   Corps  -->

  <div class=\"row corps\">
        <div class=\"col-sm-10 col-sm-offset-1\" >
            <h4 class=\"titre\" style=\"text-align: right\">New Project </h4> <div class=\"ligne\"> </div>
        </div>
        <div class=\"col-sm-7 col-sm-offset-1\" style=\"border: 0px solid\">
            <div id=\"divNewProject\" class=\"col-sm-12\"> 
              ";
        // line 48
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("GMProjetBundle:Ressource:newProject"));
        echo "

            </div>
              
            <div id=\"divImportProject\" class=\"col-sm-12\" style=\"padding: 0px\">
                ";
        // line 53
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("GMProjetBundle:Dsms:updateProjects"));
        echo "
            </div>
            <div id=\"divProjectStatus\" class=\"col-sm-12\" style=\"padding: 0px\">
                
            </div>
        </div>
        
         <div class=\"col-sm-3\">
            
             <div class=\"panel-body\">
                    <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/projet.png"), "html", null, true);
        echo "\" alt=\"Leaded Resources\" height=\"100%\" />
                </div>
         </div>

     
   </div>
 

";
        
        $__internal_b68eb165de825001f85f7442686baa9b1ccdf9c007104198546c9df3ab116818->leave($__internal_b68eb165de825001f85f7442686baa9b1ccdf9c007104198546c9df3ab116818_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d8c62e53cc3253c62831281f65878477c639e030863a37f78e1729621843a7da = $this->env->getExtension("native_profiler");
        $__internal_d8c62e53cc3253c62831281f65878477c639e030863a37f78e1729621843a7da->enter($__internal_d8c62e53cc3253c62831281f65878477c639e030863a37f78e1729621843a7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     
      <script >
        \$(function(){
                 \$('.lien1').css({'borderBottom':'3px solid'}); 

                     \$( \"#newProject\" ).click(function() {

                        \$('#divNewProject').css({'display':'block'}); 
                        \$('#divProjectStatus, #divImportProject').css({'display':'none'});
                        \$('.titre').text(\$(this).text());
                        \$('.lien1').css({'borderBottom':'3px solid'});
                        \$('.lien2, .lien3').css({'borderBottom':'0px solid'});
                       
                     });
                     
                      \$( \"#importProject\" ).click(function() {

                        \$('#divImportProject').css({'display':'block'}); 
                        \$('#divNewProject, #divProjectStatus').css({'display':'none'}); 
                         \$('.titre').text(\$(this).text());
                         \$('.lien2').css({'borderBottom':'3px solid'});
                         \$('.lien1, .lien3').css({'borderBottom':'0px solid'});
                     });
                     
                     \$( \"#projectStatus\" ).click(function() {

                        \$('#divProjectStatus').css({'display':'block'}); 
                        \$('#divNewProject, #divImportProject').css({'display':'none'}); 
                         \$('.titre').text(\$(this).text());
                         \$('.lien3').css({'borderBottom':'3px solid'});
                         \$('.lien1, .lien2').css({'borderBottom':'0px solid'});  
                     });
                     
           //************* New Project *****************  
                    
              \$(\".gm_projet_new_project\").submit(function (e) {
                e.preventDefault();
                \$('.recharge').css({'display':'block'});
                var values = {};
                \$('.gm_projet_new_project').serializeArray().forEach(function (field) {
                    values[field.name] = field.value;
                });
                \$.ajax({
                    url: \"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("gm_projet_new_project");
        echo "\",
                    data: values,
                    type: 'post'
                }).done(function (data) {
                    \$('.recharge').css({'display':'none'});
                    \$(\".results\").html(\"<h4>\"+data+\"</h4>\");
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
            
              //************** Import Projects *************
              
               \$( \"#divImportProject form\" ).submit(function(e) {
                     e.preventDefault();var \$form = \$(this);
                            var \$form = \$(this);
                            var formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                            var data = (formdata !== null) ? formdata : \$form.serialize();
                             \$('.recharge').css({'display':'block'});
          
                               \$.ajax({
                                    url: \"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("gm_projet_update_projects");
        echo "\",
                                    data: data,
                                    type: 'post',
                                    processData: false,
                                    contentType: false
                                }).done(function (data) {
                                   \$('.recharge').css({'display':'none'});
                                   \$(\".results\").text(data); 
                                  
                                }).fail(function (data) {
                                   // erreur
                                });  
                });
                
                
            //************** Projects list *************
              
               \$( \"#projectStatus\" ).click(function(e) {
                     e.preventDefault();
                     \$('.recharge').css({'display':'block'});
                     \$.ajax({
                    type: \"GET\",
                    url: \"";
        // line 167
        echo $this->env->getExtension('routing')->getPath("gm_projet_list_project");
        echo "\",
                    cache: \"false\",
                    dataType: \"html\",
                    success: function(result){
                     \$('.recharge').css({'display':'none'});
                     \$(\"#divProjectStatus\").html(result); 
                    }
                 }); 
                 
                });
            
       
                 
         });
      </script>
";
        
        $__internal_d8c62e53cc3253c62831281f65878477c639e030863a37f78e1729621843a7da->leave($__internal_d8c62e53cc3253c62831281f65878477c639e030863a37f78e1729621843a7da_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:projet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 167,  210 => 145,  180 => 118,  132 => 74,  126 => 73,  110 => 63,  97 => 53,  89 => 48,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::accueil.html.twig" %}*/
/* */
/* {% block   body %}*/
/*     {{ parent() }}*/
/*   */
/*    <!-- <h2> Espace Entité Atos Porteur du Projet</h2> -->*/
/*    <nav class="row">*/
/*        <div class="col-sm-10 col-sm-offset-1" style="border: 0px solid">*/
/*            <table style="" border="0px" width="49%">*/
/*                <tr>*/
/*                    <td >*/
/*                         <a href="#" id="newProject"> */
/*                            <span class="icons">*/
/*                                <span class="glyphicon glyphicon-ruble" aria-hidden="true"></span>*/
/*                            </span> */
/*                             <span class="lien lien1"> New Project </span> */
/*                         </a> */
/*                    </td>*/
/*                     <td> */
/*                         <a href="#" id="importProject">*/
/*                             <span class="icons">*/
/*                                <span class="glyphicon glyphicon-import" aria-hidden="true"></span>*/
/*                             </span> */
/*                             <span class="lien lien2"> Import Projects </span> */
/*                         </a>  */
/*                     </td>*/
/*                     <td> */
/*                         <a href="#" id="projectStatus">*/
/*                             <span class="icons">*/
/*                                <span class="glyphicon glyphicon-list" aria-hidden="true"></span>*/
/*                             </span> */
/*                             <span class="lien lien3"> Projects </span> */
/*                         </a>  */
/*                     </td>*/
/*                </tr>*/
/*            </table>*/
/*        </div>*/
/*    </nav>*/
/* */
/* <!--   Corps  -->*/
/* */
/*   <div class="row corps">*/
/*         <div class="col-sm-10 col-sm-offset-1" >*/
/*             <h4 class="titre" style="text-align: right">New Project </h4> <div class="ligne"> </div>*/
/*         </div>*/
/*         <div class="col-sm-7 col-sm-offset-1" style="border: 0px solid">*/
/*             <div id="divNewProject" class="col-sm-12"> */
/*               {{ render(controller('GMProjetBundle:Ressource:newProject'))}}*/
/* */
/*             </div>*/
/*               */
/*             <div id="divImportProject" class="col-sm-12" style="padding: 0px">*/
/*                 {{ render(controller('GMProjetBundle:Dsms:updateProjects'))}}*/
/*             </div>*/
/*             <div id="divProjectStatus" class="col-sm-12" style="padding: 0px">*/
/*                 */
/*             </div>*/
/*         </div>*/
/*         */
/*          <div class="col-sm-3">*/
/*             */
/*              <div class="panel-body">*/
/*                     <img src="{{asset('images/projet.png')}}" alt="Leaded Resources" height="100%" />*/
/*                 </div>*/
/*          </div>*/
/* */
/*      */
/*    </div>*/
/*  */
/* */
/* {% endblock  body %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*      */
/*       <script >*/
/*         $(function(){*/
/*                  $('.lien1').css({'borderBottom':'3px solid'}); */
/* */
/*                      $( "#newProject" ).click(function() {*/
/* */
/*                         $('#divNewProject').css({'display':'block'}); */
/*                         $('#divProjectStatus, #divImportProject').css({'display':'none'});*/
/*                         $('.titre').text($(this).text());*/
/*                         $('.lien1').css({'borderBottom':'3px solid'});*/
/*                         $('.lien2, .lien3').css({'borderBottom':'0px solid'});*/
/*                        */
/*                      });*/
/*                      */
/*                       $( "#importProject" ).click(function() {*/
/* */
/*                         $('#divImportProject').css({'display':'block'}); */
/*                         $('#divNewProject, #divProjectStatus').css({'display':'none'}); */
/*                          $('.titre').text($(this).text());*/
/*                          $('.lien2').css({'borderBottom':'3px solid'});*/
/*                          $('.lien1, .lien3').css({'borderBottom':'0px solid'});*/
/*                      });*/
/*                      */
/*                      $( "#projectStatus" ).click(function() {*/
/* */
/*                         $('#divProjectStatus').css({'display':'block'}); */
/*                         $('#divNewProject, #divImportProject').css({'display':'none'}); */
/*                          $('.titre').text($(this).text());*/
/*                          $('.lien3').css({'borderBottom':'3px solid'});*/
/*                          $('.lien1, .lien2').css({'borderBottom':'0px solid'});  */
/*                      });*/
/*                      */
/*            //************* New Project *****************  */
/*                     */
/*               $(".gm_projet_new_project").submit(function (e) {*/
/*                 e.preventDefault();*/
/*                 $('.recharge').css({'display':'block'});*/
/*                 var values = {};*/
/*                 $('.gm_projet_new_project').serializeArray().forEach(function (field) {*/
/*                     values[field.name] = field.value;*/
/*                 });*/
/*                 $.ajax({*/
/*                     url: "{{ path('gm_projet_new_project') }}",*/
/*                     data: values,*/
/*                     type: 'post'*/
/*                 }).done(function (data) {*/
/*                     $('.recharge').css({'display':'none'});*/
/*                     $(".results").html("<h4>"+data+"</h4>");*/
/*                     /*setTimeout(function () {*/
/*                         window.location.reload(1);*/
/*                     }, 2000);*//* */
/*                 }).fail(function (data) {*/
/*                     var newHTML = $.map(data.responseJSON.message, function (value) {*/
/*                         return ('<li>' + value + '</li>');*/
/*                     });*/
/*                     $(".results").html(newHTML); */
/*                 });*/
/*             });*/
/*             */
/*               //************** Import Projects **************/
/*               */
/*                $( "#divImportProject form" ).submit(function(e) {*/
/*                      e.preventDefault();var $form = $(this);*/
/*                             var $form = $(this);*/
/*                             var formdata = (window.FormData) ? new FormData($form[0]) : null;*/
/*                             var data = (formdata !== null) ? formdata : $form.serialize();*/
/*                              $('.recharge').css({'display':'block'});*/
/*           */
/*                                $.ajax({*/
/*                                     url: "{{ path('gm_projet_update_projects') }}",*/
/*                                     data: data,*/
/*                                     type: 'post',*/
/*                                     processData: false,*/
/*                                     contentType: false*/
/*                                 }).done(function (data) {*/
/*                                    $('.recharge').css({'display':'none'});*/
/*                                    $(".results").text(data); */
/*                                   */
/*                                 }).fail(function (data) {*/
/*                                    // erreur*/
/*                                 });  */
/*                 });*/
/*                 */
/*                 */
/*             //************** Projects list **************/
/*               */
/*                $( "#projectStatus" ).click(function(e) {*/
/*                      e.preventDefault();*/
/*                      $('.recharge').css({'display':'block'});*/
/*                      $.ajax({*/
/*                     type: "GET",*/
/*                     url: "{{ path('gm_projet_list_project') }}",*/
/*                     cache: "false",*/
/*                     dataType: "html",*/
/*                     success: function(result){*/
/*                      $('.recharge').css({'display':'none'});*/
/*                      $("#divProjectStatus").html(result); */
/*                     }*/
/*                  }); */
/*                  */
/*                 });*/
/*             */
/*        */
/*                  */
/*          });*/
/*       </script>*/
/* {% endblock %}*/
/* */
