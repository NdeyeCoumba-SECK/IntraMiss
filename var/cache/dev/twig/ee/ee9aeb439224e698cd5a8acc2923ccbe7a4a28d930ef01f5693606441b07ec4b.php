<?php

/* ::accueil.html.twig */
class __TwigTemplate_7921613f66d63d53bdafb65a99a83b4bd6173687dcc075e4cb6ee2fec1a3c23a extends Twig_Template
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
        $__internal_23192060b7e0315fdd1a1fd232274359753adb5ebdae22658210cf660c79b6ca = $this->env->getExtension("native_profiler");
        $__internal_23192060b7e0315fdd1a1fd232274359753adb5ebdae22658210cf660c79b6ca->enter($__internal_23192060b7e0315fdd1a1fd232274359753adb5ebdae22658210cf660c79b6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::accueil.html.twig"));

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
        // line 16
        echo "    </head>
    <body>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "        <footer class=\"row\"> 
            <div class=\"col-sm-4\" style=\"height: 50px\"> 
                <h5><a href=\"https://www.myatos.net\" style=\"text-align: left; margin-bottom: 15px; color:#fff\">My Atos </a> </h5>
            </div>
            <div class=\"col-sm-4\" style=\"text-align: center\" > 
                <h5> © Atos S.E. 2016 all rights reserved, \"For internal use\".</h5>
            </div>
            <div class=\"col-sm-4\" style=\"text-align: right\"> 
                <h5><address>Reproduction in whole or in part is prohibited without the written consent of Atos S.E. </address>  </h5>
            </div>
            
        </footer>
     
        ";
        // line 72
        $this->displayBlock('javascripts', $context, $blocks);
        // line 164
        echo "    </body>
</html>
";
        
        $__internal_23192060b7e0315fdd1a1fd232274359753adb5ebdae22658210cf660c79b6ca->leave($__internal_23192060b7e0315fdd1a1fd232274359753adb5ebdae22658210cf660c79b6ca_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eafc1c6c08efdb3a93dedc271d51bc703eda0e3eb062b71949ac2f7a3a9bf312 = $this->env->getExtension("native_profiler");
        $__internal_eafc1c6c08efdb3a93dedc271d51bc703eda0e3eb062b71949ac2f7a3a9bf312->enter($__internal_eafc1c6c08efdb3a93dedc271d51bc703eda0e3eb062b71949ac2f7a3a9bf312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to manage yours online missions!";
        
        $__internal_eafc1c6c08efdb3a93dedc271d51bc703eda0e3eb062b71949ac2f7a3a9bf312->leave($__internal_eafc1c6c08efdb3a93dedc271d51bc703eda0e3eb062b71949ac2f7a3a9bf312_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ec3e13b5f86b90696ec5b0c063cceb31b543dc39a336de2a6f5ff1da7663bcbf = $this->env->getExtension("native_profiler");
        $__internal_ec3e13b5f86b90696ec5b0c063cceb31b543dc39a336de2a6f5ff1da7663bcbf->enter($__internal_ec3e13b5f86b90696ec5b0c063cceb31b543dc39a336de2a6f5ff1da7663bcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        // line 14
        echo "
        ";
        
        $__internal_ec3e13b5f86b90696ec5b0c063cceb31b543dc39a336de2a6f5ff1da7663bcbf->leave($__internal_ec3e13b5f86b90696ec5b0c063cceb31b543dc39a336de2a6f5ff1da7663bcbf_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9f24bc4a00cfea22278465abd7d48a196f4c75de9f36bbc7b116ede172ef812 = $this->env->getExtension("native_profiler");
        $__internal_b9f24bc4a00cfea22278465abd7d48a196f4c75de9f36bbc7b116ede172ef812->enter($__internal_b9f24bc4a00cfea22278465abd7d48a196f4c75de9f36bbc7b116ede172ef812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
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
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"> </div>
                        <div class=\"col-sm-9\" style=\"height: 50px\"> <h4>Landeds <br/>Ressources </h4> </div>
                    </section>
                </div>

                <div class=\"col-sm-4\" style=\"text-align: center\" > 
                    <h5> <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
                            ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "
                            <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>
                        </a>
                    </h5>
                </div>

                <div class=\"col-sm-4\" style=\"text-align: right\"> 
                    <h5>Welcome ";
        // line 52
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
        
        $__internal_b9f24bc4a00cfea22278465abd7d48a196f4c75de9f36bbc7b116ede172ef812->leave($__internal_b9f24bc4a00cfea22278465abd7d48a196f4c75de9f36bbc7b116ede172ef812_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f5858b636d058bbdddca92ecc78970e4d6d22896223cfc88654968e992f8de91 = $this->env->getExtension("native_profiler");
        $__internal_f5858b636d058bbdddca92ecc78970e4d6d22896223cfc88654968e992f8de91->enter($__internal_f5858b636d058bbdddca92ecc78970e4d6d22896223cfc88654968e992f8de91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>


            <script >
                \$(function () {
                    \$('.lien1').css({'borderBottom': '3px solid'});

                    \$(\"#profile\").click(function () {

                        \$('#divProfile').css({'display': 'block'});
                        \$('#divNewUser').css({'display': 'none'});
                        \$('#divAutre').css({'display': 'none'});
                        \$('#divNewProject').css({'display': 'none'});
                        \$('#divProjectStatus').css({'display': 'none'});
                        \$('#divReceivedProject').css({'display': 'none'});
                        \$('.titre').text(\$(this).text());
                        \$('.lien3').css({'borderBottom': '3px solid'});
                        \$('.lien1, .lien2').css({'borderBottom': '0px solid'});
                    });


                    //************* Profile *****************  
                    \$(\".fos_user_profile_edit\").submit(function (e) {
                        e.preventDefault();
                        //var donnees = \$(this).serialize();
                        var values = {};
                        \$('.fos_user_profile_edit').serializeArray().forEach(function (field) {
                            values[field.name] = field.value;
                        });

                        \$.ajax({
                            url: \"";
        // line 105
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
                    \$(\".fos_user_change_password\").submit(function (e) {

                        e.preventDefault();
                        //var donnees = \$(this).serialize();
                        var val1, val2, i = 0;
                        var values = {};
                        \$('.fos_user_change_password').serializeArray().forEach(function (field) {
                            values[field.name] = field.value;

                            if (i === 0) {
                                val1 = field.value;
                                i++;
                            }
                            else if (i === 1) {
                                val2 = field.value;
                                i++;
                            }
                        });

                        if (val1 === val2)
                        {
                            \$.ajax({
                                type: \"POST\",
                                url: \"";
        // line 146
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\",
                                data: values,
                                dataType: \"text\",
                                success: function (result) {
                                    \$(\".passwordResult\").text(\"succes\");
                                }
                            });
                        }
                        else {
                            \$(\".passwordResult\").text(\"Mot de passe different\");
                        }

                    });

                });

            </script>
        ";
        
        $__internal_f5858b636d058bbdddca92ecc78970e4d6d22896223cfc88654968e992f8de91->leave($__internal_f5858b636d058bbdddca92ecc78970e4d6d22896223cfc88654968e992f8de91_prof);

    }

    public function getTemplateName()
    {
        return "::accueil.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  274 => 146,  230 => 105,  196 => 74,  191 => 73,  185 => 72,  162 => 52,  152 => 45,  148 => 44,  139 => 38,  118 => 19,  112 => 18,  104 => 14,  99 => 10,  95 => 9,  91 => 8,  88 => 7,  82 => 6,  70 => 5,  61 => 164,  59 => 72,  44 => 59,  42 => 18,  38 => 16,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome to manage yours online missions!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/* */
/*             <link href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />*/
/*             <link href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css') }}" type="text/css" rel="stylesheet" />*/
/*             <link href="{{ asset('css/styleEspace.css') }}" type="text/css" rel="stylesheet" />*/
/* */
/*             {#<link href="{{ asset('assets/plugins/bootstrap/bootstrap.css')}}" type="text/css" rel="stylesheet" />*/
/*             <link href="{{ asset('assets/font-awesome/css/font-awesome.css')}}" type="text/css" rel="stylesheet" />#}*/
/* */
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/* */
/*             <section class="row" >*/
/*                 <div class="col-sm-1 recharge" >*/
/*                     <div >*/
/*                         <i class="fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom"></i>*/
/*                         <span class="sr-only">Loading...</span>*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/* */
/* */
/*             <section class="row">*/
/*                 <div class="ligne1 col-sm-12"> </div>*/
/*                 <div class="ligne2 col-sm-12"> </div>*/
/*             </section>*/
/* */
/*             <header class="row">         */
/*                 <div class="col-sm-4 logoAtos" > */
/*                     <section class="row">*/
/*                         <div class="col-sm-3" style="height: 50px"> <img src="{{ asset('images/logo.png') }}"> </div>*/
/*                         <div class="col-sm-9" style="height: 50px"> <h4>Landeds <br/>Ressources </h4> </div>*/
/*                     </section>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-4" style="text-align: center" > */
/*                     <h5> <a href="{{ path('fos_user_security_logout') }}">*/
/*                             {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                             <i class="fa fa-sign-out" aria-hidden="true"></i>*/
/*                         </a>*/
/*                     </h5>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-4" style="text-align: right"> */
/*                     <h5>Welcome {% if (app.user.nom) %} {{app.user.nom}} {{app.user.prenom}}{% else %} {{app.user.username}} {% endif %}  </h5>*/
/*                 </div>*/
/* */
/*             </header>*/
/*             <hr/>*/
/* */
/*         {% endblock %}*/
/*         <footer class="row"> */
/*             <div class="col-sm-4" style="height: 50px"> */
/*                 <h5><a href="https://www.myatos.net" style="text-align: left; margin-bottom: 15px; color:#fff">My Atos </a> </h5>*/
/*             </div>*/
/*             <div class="col-sm-4" style="text-align: center" > */
/*                 <h5> © Atos S.E. 2016 all rights reserved, "For internal use".</h5>*/
/*             </div>*/
/*             <div class="col-sm-4" style="text-align: right"> */
/*                 <h5><address>Reproduction in whole or in part is prohibited without the written consent of Atos S.E. </address>  </h5>*/
/*             </div>*/
/*             */
/*         </footer>*/
/*      */
/*         {% block javascripts %}*/
/*             <script src="{{ asset('js/jquery.min.js') }}"></script>*/
/*             <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js') }}"></script>*/
/* */
/* */
/*             <script >*/
/*                 $(function () {*/
/*                     $('.lien1').css({'borderBottom': '3px solid'});*/
/* */
/*                     $("#profile").click(function () {*/
/* */
/*                         $('#divProfile').css({'display': 'block'});*/
/*                         $('#divNewUser').css({'display': 'none'});*/
/*                         $('#divAutre').css({'display': 'none'});*/
/*                         $('#divNewProject').css({'display': 'none'});*/
/*                         $('#divProjectStatus').css({'display': 'none'});*/
/*                         $('#divReceivedProject').css({'display': 'none'});*/
/*                         $('.titre').text($(this).text());*/
/*                         $('.lien3').css({'borderBottom': '3px solid'});*/
/*                         $('.lien1, .lien2').css({'borderBottom': '0px solid'});*/
/*                     });*/
/* */
/* */
/*                     //************* Profile *****************  */
/*                     $(".fos_user_profile_edit").submit(function (e) {*/
/*                         e.preventDefault();*/
/*                         //var donnees = $(this).serialize();*/
/*                         var values = {};*/
/*                         $('.fos_user_profile_edit').serializeArray().forEach(function (field) {*/
/*                             values[field.name] = field.value;*/
/*                         });*/
/* */
/*                         $.ajax({*/
/*                             url: "{{ path('fos_user_profile_edit') }}",*/
/*                             data: values,*/
/*                             type: 'post'*/
/*                         }).done(function (data) {*/
/*                             $(".results").html("<h3>Successful.</h3>");*/
/*                             /*setTimeout(function () {*/
/*                              window.location.reload(1);*/
/*                              }, 2000);*//* */
/*                         }).fail(function (data) {*/
/*                             var newHTML = $.map(data.responseJSON.message, function (value) {*/
/*                                 return ('<li>' + value + '</li>');*/
/*                             });*/
/*                             $(".results").html(newHTML);*/
/*                         });*/
/* */
/*                     });*/
/* */
/*                     //************* Password *****************  */
/*                     $(".fos_user_change_password").submit(function (e) {*/
/* */
/*                         e.preventDefault();*/
/*                         //var donnees = $(this).serialize();*/
/*                         var val1, val2, i = 0;*/
/*                         var values = {};*/
/*                         $('.fos_user_change_password').serializeArray().forEach(function (field) {*/
/*                             values[field.name] = field.value;*/
/* */
/*                             if (i === 0) {*/
/*                                 val1 = field.value;*/
/*                                 i++;*/
/*                             }*/
/*                             else if (i === 1) {*/
/*                                 val2 = field.value;*/
/*                                 i++;*/
/*                             }*/
/*                         });*/
/* */
/*                         if (val1 === val2)*/
/*                         {*/
/*                             $.ajax({*/
/*                                 type: "POST",*/
/*                                 url: "{{ path('fos_user_change_password') }}",*/
/*                                 data: values,*/
/*                                 dataType: "text",*/
/*                                 success: function (result) {*/
/*                                     $(".passwordResult").text("succes");*/
/*                                 }*/
/*                             });*/
/*                         }*/
/*                         else {*/
/*                             $(".passwordResult").text("Mot de passe different");*/
/*                         }*/
/* */
/*                     });*/
/* */
/*                 });*/
/* */
/*             </script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
