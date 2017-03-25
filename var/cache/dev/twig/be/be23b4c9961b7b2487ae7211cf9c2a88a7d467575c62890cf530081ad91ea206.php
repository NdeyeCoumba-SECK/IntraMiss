<?php

/* UtilisateursBundle:Default:assistantRH.html.twig */
class __TwigTemplate_d92aa80020d3fbb2345dfe75ec564f0106e94bf13ded24b8ac4961b18572cac0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "UtilisateursBundle:Default:assistantRH.html.twig", 1);
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
        $__internal_429335254d2c175c5d0bcd977750974241721f92ac9ceb46377aededa611eeb2 = $this->env->getExtension("native_profiler");
        $__internal_429335254d2c175c5d0bcd977750974241721f92ac9ceb46377aededa611eeb2->enter($__internal_429335254d2c175c5d0bcd977750974241721f92ac9ceb46377aededa611eeb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:assistantRH.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_429335254d2c175c5d0bcd977750974241721f92ac9ceb46377aededa611eeb2->leave($__internal_429335254d2c175c5d0bcd977750974241721f92ac9ceb46377aededa611eeb2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4409e03a212179093651fc802e72a949e3bae42ff48b48fa674b66b92af0de5 = $this->env->getExtension("native_profiler");
        $__internal_f4409e03a212179093651fc802e72a949e3bae42ff48b48fa674b66b92af0de5->enter($__internal_f4409e03a212179093651fc802e72a949e3bae42ff48b48fa674b66b92af0de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <!-- Menu -->
    ";
        // line 6
        echo twig_include($this->env, $context, "UtilisateursBundle:Default:menuARH.html.twig");
        echo "

    <!--   Corps  -->

    <div class=\"row corps\">
        <div class=\"col-sm-10 col-sm-offset-1\" >
            <h4 class=\"titre\" style=\"text-align: right\">Projects Status </h4> <div class=\"ligne\"> </div>
        </div>

        <div class=\"col-sm-7 col-sm-offset-1\">

            <!-- Project Status -->
            <div id=\"divProjectStatus\" class=\"col-sm-12\" style=\"display: block\">
                Projects Status
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

            <!-- Assist Collaborator -->
            <div id=\"divAssist\" class=\"col-sm-12\">
                Assist Collaborators
            </div>

            <!-- Collaboratos on Mission -->
            <div id=\"divColabMission\" class=\"col-sm-12\">
                Collaborators on Mission
            </div>

            <!-- Collaborators Fees -->
            <div id=\"divFees\" class=\"col-sm-12\">
                <div class=\"divFraisColabs\"> </div>
                <div class=\"divFraisParColab\"> </div>
            </div>

            <!-- Perdieme -->
            <div id=\"divPerdieme\" class=\"col-sm-12\">
                Perdieme
            </div>

            <!-- Chart -->
            <div id=\"divProfile\" class=\"col-sm-12\">
                ";
        // line 57
        echo "                
                Chart 1
                <script src=\"https://code.highcharts.com/highcharts.js\"></script>
                <script src=\"https://code.highcharts.com/modules/exporting.js\"></script>

                <div id=\"container\" style=\"min-width: 310px; height: 400px; margin: 0 auto\"></div>
                
               
                

            </div>

        </div>

        <div class=\"col-sm-3\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/intraMiss.png"), "html", null, true);
        echo "\" alt=\"Leaded Resources\" height=\"100%\" />
                </div>

            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/atosAfique.png"), "html", null, true);
        echo "\" alt=\"Leaded Resources\" height=\"100%\" />
                </div>

            </div>
        </div>


    </div>

";
        
        $__internal_f4409e03a212179093651fc802e72a949e3bae42ff48b48fa674b66b92af0de5->leave($__internal_f4409e03a212179093651fc802e72a949e3bae42ff48b48fa674b66b92af0de5_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f5258736c11f8d326b031813deca9c9f681855c50986e980ae335e536cca453 = $this->env->getExtension("native_profiler");
        $__internal_5f5258736c11f8d326b031813deca9c9f681855c50986e980ae335e536cca453->enter($__internal_5f5258736c11f8d326b031813deca9c9f681855c50986e980ae335e536cca453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/arh.js"), "html", null, true);
        echo "\"></script>
    <script >
        \$(function () {

            arh();
            \$(\".fermer\").click(function () {
                \$('#popup').css({'display': 'none'});
            });


            //************** Projects Status *************

            \$(\"#projectStatus\").click(function (e) {
                // e.preventDefault();
                \$('.recharge').css({'display': 'block'});
                \$.ajax({
                    type: \"GET\",
                    url: \"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("gm_projet_project_status");
        echo "\",
                    cache: \"false\",
                    dataType: \"html\",
                    success: function (result) {
                        \$('.recharge').css({'display': 'none'});
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
                    \$('.recharge').css({'display': 'block'});
                    var values = {};
                    \$(this).serializeArray().forEach(function (field) {
                        values[field.name] = field.value;
                    });

                    \$.ajax({
                        url: \"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("gm_projet_ressource_project");
        echo "\",
                        data: values,
                        type: 'post'
                    }).done(function (data) {
                        \$('#popup').css({'display': 'block'});
                        \$('.recharge').css({'display': 'none'});
                        \$(\"#ressource\").html(data);
                        affectation();

                    }).fail(function (data) {
                        // erreur
                    });

                });
            }

            function affectation() {
                \$(\"#ressource .formRessource\").submit(function (e) {
                    e.preventDefault();
                    \$('.recharge').css({'display': 'block'});

                    var values = {};
                    \$(this).serializeArray().forEach(function (field) {
                        values[field.name] = field.value;

                    });

                    \$(this).find('[type=\"submit\"]').attr('class', 'voir');

                    \$.ajax({
                        url: \"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("gm_projet_ressource_affectation");
        echo "\",
                        data: values,
                        type: 'post'
                    }).done(function (data) {
                        \$('.recharge').css({'display': 'none'});
                        \$(\".voir\").attr('disabled', 'disabled').css({'border': 'none', 'background-color': 'inherit'});
                        \$(\".voir\").html('<i class=\"fa fa-check fa-1x\"  aria-hidden=\"true\" style=\"color:green\"></i>');

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
                    \$('.recharge').css({'display': 'block'});
                    var values = {};
                    \$(this).serializeArray().forEach(function (field) {
                        values[field.name] = field.value;
                    });
                    \$.ajax({
                        url: \"";
        // line 192
        echo $this->env->getExtension('routing')->getPath("gm_projet_detail_project");
        echo "\",
                        data: values,
                        type: 'post'
                    }).done(function (data) {
                        \$('.recharge').css({'display': 'none'});
                        \$('#popup').css({'display': 'block'});
                        \$(\"#ressource\").html(data);

                    }).fail(function (data) {
                        // erreur
                    });

                });
            }



            //************** Assist Collaborators *************

            \$(\"#assistCollaboratos\").click(function (e) {
                // e.preventDefault();
                \$('.recharge').css({'display': 'block'});
                \$.ajax({
                    type: \"GET\",
                    url: \"";
        // line 216
        echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_assist");
        echo "\",
                    cache: \"false\",
                    dataType: \"html\",
                    success: function (result) {
                        \$('.recharge').css({'display': 'none'});
                        \$(\"#divAssist\").html(result);
                        infoCollaborateur();
                    }
                });

            });


            function infoCollaborateur()
            {
                \$(\"#divAssist .formInfo\").submit(function (e) {
                    e.preventDefault();
                    \$('.recharge').css({'display': 'block'});
                    var values = {};
                    \$(this).serializeArray().forEach(function (field) {
                        values[field.name] = field.value;
                    });

                    \$.ajax({
                        url: \"";
        // line 240
        echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_infoColab");
        echo "\",
                        data: values,
                        type: 'post'
                    }).done(function (data) {
                        \$('#popup').css({'display': 'block'});
                        \$('.recharge').css({'display': 'none'});
                        \$(\"#ressource\").html(data);
                        verifie();
                        candidature();

                    }).fail(function (data) {
                        // erreur
                    });

                });
            }

            function verifie() {
                \$(\".choix\").change(function (e) {
                    if (\$(\".choix\").val() === \"non\")
                    {
                        \$('.c1').attr({'disabled': 'disabled'});
                        \$('.c2').attr({'disabled': 'disabled'});
                    }
                    else
                    {
                        \$('.c1').removeAttr('disabled');
                        \$('.c2').removeAttr('disabled');
                    }
                });
            }

            function candidature()
            {
                \$(\".cand\").submit(function (e) {
                    e.preventDefault();
                    \$('.recharge').css({'display': 'block'});
                    var values = {};
                    \$(this).serializeArray().forEach(function (field) {
                        values[field.name] = field.value;
                    });

                    \$.ajax({
                        url: \"";
        // line 283
        echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_candidature");
        echo "\",
                        data: values,
                        type: 'post'
                    }).done(function (data) {
                        \$('#popup').css({'display': 'block'});
                        \$('.recharge').css({'display': 'none'});
                        \$(\".results\").html(data);

                    }).fail(function (data) {
                        // erreur
                    });

                });
            }


//************** Collaborators On Mission *************

            \$(\"#collaborateursMission\").click(function (e) {
                // e.preventDefault();
                \$('.recharge').css({'display': 'block'});
                \$.ajax({
                    type: \"GET\",
                    url: \"";
        // line 306
        echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_on_mission");
        echo "\",
                    cache: \"false\",
                    dataType: \"html\",
                    success: function (result) {
                        \$('.recharge').css({'display': 'none'});
                        \$(\"#divColabMission\").html(result);
                        dtailOnMission();
                        //detailProjet();
                    }
                });

            });

            function dtailOnMission()
            {
                \$(\".formDetail\").submit(function (e) {
                    e.preventDefault();
                    \$('.recharge').css({'display': 'block'});
                    var values = {};
                    \$(this).serializeArray().forEach(function (field) {
                        values[field.name] = field.value;
                    });

                    \$.ajax({
                        url: \"";
        // line 330
        echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_on_mission_detail");
        echo "\",
                        data: values,
                        type: 'post'
                    }).done(function (data) {
                        \$('#popup').css({'display': 'block'});
                        \$('.recharge').css({'display': 'none'});
                        \$(\"#ressource\").html(data);

                    }).fail(function (data) {
                        // erreur
                    });

                });
            }


//************** Collaborators Fees *************

            \$(\"#frais\").click(function (e) {
                // e.preventDefault();
                \$('.recharge').css({'display': 'block'});
                \$.ajax({
                    type: \"GET\",
                    url: \"";
        // line 353
        echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_frais_colabs");
        echo "\",
                    cache: \"false\",
                    dataType: \"html\",
                    success: function (result) {
                        \$('.recharge, .divFraisParColab').css({'display': 'none'});
                        \$('.divFraisColabs').css({'display': 'block'});
                        \$(\".divFraisColabs\").html(result);
                        fraisParColab();
                    }
                });

            });

            function fraisParColab()
            {
                \$(\".formFrais\").submit(function (e) {
                    e.preventDefault();
                    \$('.recharge').css({'display': 'block'});
                    var values = {};
                    \$(this).serializeArray().forEach(function (field) {
                        values[field.name] = field.value;
                    });

                    \$.ajax({
                        url: \"";
        // line 377
        echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_frais_colab");
        echo "\",
                        data: values,
                        type: 'post'
                    }).done(function (data) {
                        \$('.recharge, .divFraisColabs').css({'display': 'none'});
                        \$('.divFraisParColab').css({'display': 'block'});
                        \$(\".divFraisParColab\").html(data);
                        piece();
                        validerFrais();
                    }).fail(function (data) {
                        // erreur
                    });
                });

            }

            function piece()
            {

                \$(\".formPiece\").click(function (e) {
                    e.preventDefault();
                    var val = \$(this).find('[type=\"hidden\"]').val();
                    var param = 'uploads/brochures/' + val;
                    \$('#popup').css({'display': 'block'});
                    \$(\"#ressource\").html('<img src=\"' + param + '\" class=\"piece\">');

                });

                \$(\".retour\").click(function () {
                    \$('.divFraisParColab').css({'display': 'none'});
                    \$('.divFraisColabs').css({'display': 'block'});
                });
            }

            function validerFrais() {
                \$(\".formValidFee\").submit(function (e) {
                    e.preventDefault();
                    \$('.recharge').css({'display': 'block'});

                    var values = {};
                    \$(this).serializeArray().forEach(function (field) {
                        values[field.name] = field.value;

                    });

                    \$(this).find('[type=\"submit\"]').attr('class', 'voir');
                    \$(\".voir\").parent().parent().attr('class', 'courant');

                    \$.ajax({
                        url: \"";
        // line 426
        echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_frais_valider");
        echo "\",
                        data: values,
                        type: 'post'
                    }).done(function (data) {
                        \$('.recharge').css({'display': 'none'});
                        \$(\".voir\").attr('disabled', 'disabled').css({'border': 'none', 'background-color': 'inherit'});
                        \$(\".voir\").removeAttr('title');
                        \$(\".voir\").html('<i class=\"fa fa-check fa-1x\"  aria-hidden=\"true\" style=\"color:green\"></i>');
                        \$(\".courant + td button\").removeAttr('disabled');
                        \$(\".tout\").removeAttr('disabled');

                    }).fail(function (data) {

                    });

                });
            }

            //************** Perdiem *************

            \$(\"#perdiem\").click(function (e) {
                // e.preventDefault();
                \$('.recharge').css({'display': 'block'});
                \$.ajax({
                    type: \"GET\",
                    url: \"";
        // line 451
        echo $this->env->getExtension('routing')->getPath("gm_projet_dsms_perdiem");
        echo "\",
                    cache: \"false\",
                    dataType: \"html\",
                    success: function (result) {
                        \$('.recharge').css({'display': 'none'});
                        \$('#divPerdieme').css({'display': 'block'});
                        \$(\"#divPerdieme\").html(result);
                        datePerdiem();
                    }
                });

            });

            function datePerdiem()
            {
                \$(\".datePerdiem\").submit(function (e) {
                    e.preventDefault();
                    \$('.recharge').css({'display': 'block'});
                    var values = {};
                    \$(this).serializeArray().forEach(function (field) {
                        values[field.name] = field.value;
                    });

                    \$.ajax({
                        url: \"";
        // line 475
        echo $this->env->getExtension('routing')->getPath("gm_projet_dsms_perdiem");
        echo "\",
                        data: values,
                        type: 'post'
                    }).done(function (data) {
                        \$('.recharge').css({'display': 'none'});
                        \$(\"#divPerdieme\").html(data);
                        datePerdiem();
                        //validerFrais();
                    }).fail(function (data) {
                        // erreur
                    });
                });

            }






















            \$(function () {
                \$.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=usdeur.json&callback=?', function (data) {

                    Highcharts.chart('container', {
                        chart: {
                            zoomType: 'x'
                        },
                        title: {
                            text: ''
                        },
                        subtitle: {
                            text: document.ontouchstart === undefined ?
                                    'Statistique nombre collaborateur - période' : 'Pinch the chart to zoom in'
                        },
                        xAxis: {
                            type: 'datetime'
                        },
                        yAxis: {
                            title: {
                                text: 'Exchange rate'
                            }
                        },
                        legend: {
                            enabled: false
                        },
                        plotOptions: {
                            area: {
                                fillColor: {
                                    linearGradient: {
                                        x1: 0,
                                        y1: 0,
                                        x2: 0,
                                        y2: 1
                                    },
                                    stops: [
                                        [0, Highcharts.getOptions().colors[0]],
                                        [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                                    ]
                                },
                                marker: {
                                    radius: 2
                                },
                                lineWidth: 1,
                                states: {
                                    hover: {
                                        lineWidth: 1
                                    }
                                },
                                threshold: null
                            }
                        },
                        series: [{
                                
                                type: 'area',
                                name: 'USD to EUR',
                                data: data
                            }]
                    });
                });
            });
            
        });
    </script>
";
        
        $__internal_5f5258736c11f8d326b031813deca9c9f681855c50986e980ae335e536cca453->leave($__internal_5f5258736c11f8d326b031813deca9c9f681855c50986e980ae335e536cca453_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:assistantRH.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  580 => 475,  553 => 451,  525 => 426,  473 => 377,  446 => 353,  420 => 330,  393 => 306,  367 => 283,  321 => 240,  294 => 216,  267 => 192,  237 => 165,  204 => 135,  176 => 110,  156 => 93,  151 => 92,  145 => 91,  128 => 80,  119 => 74,  100 => 57,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::accueil.html.twig" %}*/
/* */
/* {% block   body %}*/
/*     {{ parent() }}*/
/*     <!-- Menu -->*/
/*     {{ include("UtilisateursBundle:Default:menuARH.html.twig") }}*/
/* */
/*     <!--   Corps  -->*/
/* */
/*     <div class="row corps">*/
/*         <div class="col-sm-10 col-sm-offset-1" >*/
/*             <h4 class="titre" style="text-align: right">Projects Status </h4> <div class="ligne"> </div>*/
/*         </div>*/
/* */
/*         <div class="col-sm-7 col-sm-offset-1">*/
/* */
/*             <!-- Project Status -->*/
/*             <div id="divProjectStatus" class="col-sm-12" style="display: block">*/
/*                 Projects Status*/
/*             </div>*/
/*             <div id="popup" class="col-sm-12">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-1 col-sm-offset-11"> */
/*                         <button class="fermer" title="Fermer"> <i class="fa fa-close" aria-hidden="true"></i></button> */
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div id="ressource">*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*             <!-- Assist Collaborator -->*/
/*             <div id="divAssist" class="col-sm-12">*/
/*                 Assist Collaborators*/
/*             </div>*/
/* */
/*             <!-- Collaboratos on Mission -->*/
/*             <div id="divColabMission" class="col-sm-12">*/
/*                 Collaborators on Mission*/
/*             </div>*/
/* */
/*             <!-- Collaborators Fees -->*/
/*             <div id="divFees" class="col-sm-12">*/
/*                 <div class="divFraisColabs"> </div>*/
/*                 <div class="divFraisParColab"> </div>*/
/*             </div>*/
/* */
/*             <!-- Perdieme -->*/
/*             <div id="divPerdieme" class="col-sm-12">*/
/*                 Perdieme*/
/*             </div>*/
/* */
/*             <!-- Chart -->*/
/*             <div id="divProfile" class="col-sm-12">*/
/*                 {#             My Profile#}*/
/*                 */
/*                 Chart 1*/
/*                 <script src="https://code.highcharts.com/highcharts.js"></script>*/
/*                 <script src="https://code.highcharts.com/modules/exporting.js"></script>*/
/* */
/*                 <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>*/
/*                 */
/*                */
/*                 */
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <div class="col-sm-3">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-body">*/
/*                     <img src="{{asset('images/intraMiss.png')}}" alt="Leaded Resources" height="100%" />*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-body">*/
/*                     <img src="{{asset('images/atosAfique.png')}}" alt="Leaded Resources" height="100%" />*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/* */
/*     </div>*/
/* */
/* {% endblock  body %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('js/arh.js') }}"></script>*/
/*     <script >*/
/*         $(function () {*/
/* */
/*             arh();*/
/*             $(".fermer").click(function () {*/
/*                 $('#popup').css({'display': 'none'});*/
/*             });*/
/* */
/* */
/*             //************** Projects Status **************/
/* */
/*             $("#projectStatus").click(function (e) {*/
/*                 // e.preventDefault();*/
/*                 $('.recharge').css({'display': 'block'});*/
/*                 $.ajax({*/
/*                     type: "GET",*/
/*                     url: "{{ path('gm_projet_project_status') }}",*/
/*                     cache: "false",*/
/*                     dataType: "html",*/
/*                     success: function (result) {*/
/*                         $('.recharge').css({'display': 'none'});*/
/*                         $("#divProjectStatus").html(result);*/
/*                         ressource();*/
/*                         detailProjet();*/
/*                     }*/
/*                 });*/
/* */
/*             });*/
/* */
/*             //************* Affectation Ressource *****************  */
/*             function ressource()*/
/*             {*/
/*                 $("#divProjectStatus .formRess").submit(function (e) {*/
/*                     e.preventDefault();*/
/*                     $('.recharge').css({'display': 'block'});*/
/*                     var values = {};*/
/*                     $(this).serializeArray().forEach(function (field) {*/
/*                         values[field.name] = field.value;*/
/*                     });*/
/* */
/*                     $.ajax({*/
/*                         url: "{{ path('gm_projet_ressource_project') }}",*/
/*                         data: values,*/
/*                         type: 'post'*/
/*                     }).done(function (data) {*/
/*                         $('#popup').css({'display': 'block'});*/
/*                         $('.recharge').css({'display': 'none'});*/
/*                         $("#ressource").html(data);*/
/*                         affectation();*/
/* */
/*                     }).fail(function (data) {*/
/*                         // erreur*/
/*                     });*/
/* */
/*                 });*/
/*             }*/
/* */
/*             function affectation() {*/
/*                 $("#ressource .formRessource").submit(function (e) {*/
/*                     e.preventDefault();*/
/*                     $('.recharge').css({'display': 'block'});*/
/* */
/*                     var values = {};*/
/*                     $(this).serializeArray().forEach(function (field) {*/
/*                         values[field.name] = field.value;*/
/* */
/*                     });*/
/* */
/*                     $(this).find('[type="submit"]').attr('class', 'voir');*/
/* */
/*                     $.ajax({*/
/*                         url: "{{ path('gm_projet_ressource_affectation') }}",*/
/*                         data: values,*/
/*                         type: 'post'*/
/*                     }).done(function (data) {*/
/*                         $('.recharge').css({'display': 'none'});*/
/*                         $(".voir").attr('disabled', 'disabled').css({'border': 'none', 'background-color': 'inherit'});*/
/*                         $(".voir").html('<i class="fa fa-check fa-1x"  aria-hidden="true" style="color:green"></i>');*/
/* */
/*                     }).fail(function (data) {*/
/*                         // erreur*/
/*                     });*/
/* */
/*                 });*/
/*             }*/
/* */
/* */
/*             //************* Detail Projet *****************  */
/*             function detailProjet()*/
/*             {*/
/*                 $("#divProjectStatus .formDetail").submit(function (e) {*/
/*                     e.preventDefault();*/
/*                     $('.recharge').css({'display': 'block'});*/
/*                     var values = {};*/
/*                     $(this).serializeArray().forEach(function (field) {*/
/*                         values[field.name] = field.value;*/
/*                     });*/
/*                     $.ajax({*/
/*                         url: "{{ path('gm_projet_detail_project') }}",*/
/*                         data: values,*/
/*                         type: 'post'*/
/*                     }).done(function (data) {*/
/*                         $('.recharge').css({'display': 'none'});*/
/*                         $('#popup').css({'display': 'block'});*/
/*                         $("#ressource").html(data);*/
/* */
/*                     }).fail(function (data) {*/
/*                         // erreur*/
/*                     });*/
/* */
/*                 });*/
/*             }*/
/* */
/* */
/* */
/*             //************** Assist Collaborators **************/
/* */
/*             $("#assistCollaboratos").click(function (e) {*/
/*                 // e.preventDefault();*/
/*                 $('.recharge').css({'display': 'block'});*/
/*                 $.ajax({*/
/*                     type: "GET",*/
/*                     url: "{{ path('gm_projet_suivi_assist') }}",*/
/*                     cache: "false",*/
/*                     dataType: "html",*/
/*                     success: function (result) {*/
/*                         $('.recharge').css({'display': 'none'});*/
/*                         $("#divAssist").html(result);*/
/*                         infoCollaborateur();*/
/*                     }*/
/*                 });*/
/* */
/*             });*/
/* */
/* */
/*             function infoCollaborateur()*/
/*             {*/
/*                 $("#divAssist .formInfo").submit(function (e) {*/
/*                     e.preventDefault();*/
/*                     $('.recharge').css({'display': 'block'});*/
/*                     var values = {};*/
/*                     $(this).serializeArray().forEach(function (field) {*/
/*                         values[field.name] = field.value;*/
/*                     });*/
/* */
/*                     $.ajax({*/
/*                         url: "{{ path('gm_projet_suivi_infoColab') }}",*/
/*                         data: values,*/
/*                         type: 'post'*/
/*                     }).done(function (data) {*/
/*                         $('#popup').css({'display': 'block'});*/
/*                         $('.recharge').css({'display': 'none'});*/
/*                         $("#ressource").html(data);*/
/*                         verifie();*/
/*                         candidature();*/
/* */
/*                     }).fail(function (data) {*/
/*                         // erreur*/
/*                     });*/
/* */
/*                 });*/
/*             }*/
/* */
/*             function verifie() {*/
/*                 $(".choix").change(function (e) {*/
/*                     if ($(".choix").val() === "non")*/
/*                     {*/
/*                         $('.c1').attr({'disabled': 'disabled'});*/
/*                         $('.c2').attr({'disabled': 'disabled'});*/
/*                     }*/
/*                     else*/
/*                     {*/
/*                         $('.c1').removeAttr('disabled');*/
/*                         $('.c2').removeAttr('disabled');*/
/*                     }*/
/*                 });*/
/*             }*/
/* */
/*             function candidature()*/
/*             {*/
/*                 $(".cand").submit(function (e) {*/
/*                     e.preventDefault();*/
/*                     $('.recharge').css({'display': 'block'});*/
/*                     var values = {};*/
/*                     $(this).serializeArray().forEach(function (field) {*/
/*                         values[field.name] = field.value;*/
/*                     });*/
/* */
/*                     $.ajax({*/
/*                         url: "{{ path('gm_projet_suivi_candidature') }}",*/
/*                         data: values,*/
/*                         type: 'post'*/
/*                     }).done(function (data) {*/
/*                         $('#popup').css({'display': 'block'});*/
/*                         $('.recharge').css({'display': 'none'});*/
/*                         $(".results").html(data);*/
/* */
/*                     }).fail(function (data) {*/
/*                         // erreur*/
/*                     });*/
/* */
/*                 });*/
/*             }*/
/* */
/* */
/* //************** Collaborators On Mission **************/
/* */
/*             $("#collaborateursMission").click(function (e) {*/
/*                 // e.preventDefault();*/
/*                 $('.recharge').css({'display': 'block'});*/
/*                 $.ajax({*/
/*                     type: "GET",*/
/*                     url: "{{ path('gm_projet_suivi_on_mission') }}",*/
/*                     cache: "false",*/
/*                     dataType: "html",*/
/*                     success: function (result) {*/
/*                         $('.recharge').css({'display': 'none'});*/
/*                         $("#divColabMission").html(result);*/
/*                         dtailOnMission();*/
/*                         //detailProjet();*/
/*                     }*/
/*                 });*/
/* */
/*             });*/
/* */
/*             function dtailOnMission()*/
/*             {*/
/*                 $(".formDetail").submit(function (e) {*/
/*                     e.preventDefault();*/
/*                     $('.recharge').css({'display': 'block'});*/
/*                     var values = {};*/
/*                     $(this).serializeArray().forEach(function (field) {*/
/*                         values[field.name] = field.value;*/
/*                     });*/
/* */
/*                     $.ajax({*/
/*                         url: "{{ path('gm_projet_suivi_on_mission_detail') }}",*/
/*                         data: values,*/
/*                         type: 'post'*/
/*                     }).done(function (data) {*/
/*                         $('#popup').css({'display': 'block'});*/
/*                         $('.recharge').css({'display': 'none'});*/
/*                         $("#ressource").html(data);*/
/* */
/*                     }).fail(function (data) {*/
/*                         // erreur*/
/*                     });*/
/* */
/*                 });*/
/*             }*/
/* */
/* */
/* //************** Collaborators Fees **************/
/* */
/*             $("#frais").click(function (e) {*/
/*                 // e.preventDefault();*/
/*                 $('.recharge').css({'display': 'block'});*/
/*                 $.ajax({*/
/*                     type: "GET",*/
/*                     url: "{{ path('gm_projet_suivi_frais_colabs') }}",*/
/*                     cache: "false",*/
/*                     dataType: "html",*/
/*                     success: function (result) {*/
/*                         $('.recharge, .divFraisParColab').css({'display': 'none'});*/
/*                         $('.divFraisColabs').css({'display': 'block'});*/
/*                         $(".divFraisColabs").html(result);*/
/*                         fraisParColab();*/
/*                     }*/
/*                 });*/
/* */
/*             });*/
/* */
/*             function fraisParColab()*/
/*             {*/
/*                 $(".formFrais").submit(function (e) {*/
/*                     e.preventDefault();*/
/*                     $('.recharge').css({'display': 'block'});*/
/*                     var values = {};*/
/*                     $(this).serializeArray().forEach(function (field) {*/
/*                         values[field.name] = field.value;*/
/*                     });*/
/* */
/*                     $.ajax({*/
/*                         url: "{{ path('gm_projet_suivi_frais_colab') }}",*/
/*                         data: values,*/
/*                         type: 'post'*/
/*                     }).done(function (data) {*/
/*                         $('.recharge, .divFraisColabs').css({'display': 'none'});*/
/*                         $('.divFraisParColab').css({'display': 'block'});*/
/*                         $(".divFraisParColab").html(data);*/
/*                         piece();*/
/*                         validerFrais();*/
/*                     }).fail(function (data) {*/
/*                         // erreur*/
/*                     });*/
/*                 });*/
/* */
/*             }*/
/* */
/*             function piece()*/
/*             {*/
/* */
/*                 $(".formPiece").click(function (e) {*/
/*                     e.preventDefault();*/
/*                     var val = $(this).find('[type="hidden"]').val();*/
/*                     var param = 'uploads/brochures/' + val;*/
/*                     $('#popup').css({'display': 'block'});*/
/*                     $("#ressource").html('<img src="' + param + '" class="piece">');*/
/* */
/*                 });*/
/* */
/*                 $(".retour").click(function () {*/
/*                     $('.divFraisParColab').css({'display': 'none'});*/
/*                     $('.divFraisColabs').css({'display': 'block'});*/
/*                 });*/
/*             }*/
/* */
/*             function validerFrais() {*/
/*                 $(".formValidFee").submit(function (e) {*/
/*                     e.preventDefault();*/
/*                     $('.recharge').css({'display': 'block'});*/
/* */
/*                     var values = {};*/
/*                     $(this).serializeArray().forEach(function (field) {*/
/*                         values[field.name] = field.value;*/
/* */
/*                     });*/
/* */
/*                     $(this).find('[type="submit"]').attr('class', 'voir');*/
/*                     $(".voir").parent().parent().attr('class', 'courant');*/
/* */
/*                     $.ajax({*/
/*                         url: "{{ path('gm_projet_suivi_frais_valider') }}",*/
/*                         data: values,*/
/*                         type: 'post'*/
/*                     }).done(function (data) {*/
/*                         $('.recharge').css({'display': 'none'});*/
/*                         $(".voir").attr('disabled', 'disabled').css({'border': 'none', 'background-color': 'inherit'});*/
/*                         $(".voir").removeAttr('title');*/
/*                         $(".voir").html('<i class="fa fa-check fa-1x"  aria-hidden="true" style="color:green"></i>');*/
/*                         $(".courant + td button").removeAttr('disabled');*/
/*                         $(".tout").removeAttr('disabled');*/
/* */
/*                     }).fail(function (data) {*/
/* */
/*                     });*/
/* */
/*                 });*/
/*             }*/
/* */
/*             //************** Perdiem **************/
/* */
/*             $("#perdiem").click(function (e) {*/
/*                 // e.preventDefault();*/
/*                 $('.recharge').css({'display': 'block'});*/
/*                 $.ajax({*/
/*                     type: "GET",*/
/*                     url: "{{ path('gm_projet_dsms_perdiem') }}",*/
/*                     cache: "false",*/
/*                     dataType: "html",*/
/*                     success: function (result) {*/
/*                         $('.recharge').css({'display': 'none'});*/
/*                         $('#divPerdieme').css({'display': 'block'});*/
/*                         $("#divPerdieme").html(result);*/
/*                         datePerdiem();*/
/*                     }*/
/*                 });*/
/* */
/*             });*/
/* */
/*             function datePerdiem()*/
/*             {*/
/*                 $(".datePerdiem").submit(function (e) {*/
/*                     e.preventDefault();*/
/*                     $('.recharge').css({'display': 'block'});*/
/*                     var values = {};*/
/*                     $(this).serializeArray().forEach(function (field) {*/
/*                         values[field.name] = field.value;*/
/*                     });*/
/* */
/*                     $.ajax({*/
/*                         url: "{{ path('gm_projet_dsms_perdiem') }}",*/
/*                         data: values,*/
/*                         type: 'post'*/
/*                     }).done(function (data) {*/
/*                         $('.recharge').css({'display': 'none'});*/
/*                         $("#divPerdieme").html(data);*/
/*                         datePerdiem();*/
/*                         //validerFrais();*/
/*                     }).fail(function (data) {*/
/*                         // erreur*/
/*                     });*/
/*                 });*/
/* */
/*             }*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*             $(function () {*/
/*                 $.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=usdeur.json&callback=?', function (data) {*/
/* */
/*                     Highcharts.chart('container', {*/
/*                         chart: {*/
/*                             zoomType: 'x'*/
/*                         },*/
/*                         title: {*/
/*                             text: ''*/
/*                         },*/
/*                         subtitle: {*/
/*                             text: document.ontouchstart === undefined ?*/
/*                                     'Statistique nombre collaborateur - période' : 'Pinch the chart to zoom in'*/
/*                         },*/
/*                         xAxis: {*/
/*                             type: 'datetime'*/
/*                         },*/
/*                         yAxis: {*/
/*                             title: {*/
/*                                 text: 'Exchange rate'*/
/*                             }*/
/*                         },*/
/*                         legend: {*/
/*                             enabled: false*/
/*                         },*/
/*                         plotOptions: {*/
/*                             area: {*/
/*                                 fillColor: {*/
/*                                     linearGradient: {*/
/*                                         x1: 0,*/
/*                                         y1: 0,*/
/*                                         x2: 0,*/
/*                                         y2: 1*/
/*                                     },*/
/*                                     stops: [*/
/*                                         [0, Highcharts.getOptions().colors[0]],*/
/*                                         [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]*/
/*                                     ]*/
/*                                 },*/
/*                                 marker: {*/
/*                                     radius: 2*/
/*                                 },*/
/*                                 lineWidth: 1,*/
/*                                 states: {*/
/*                                     hover: {*/
/*                                         lineWidth: 1*/
/*                                     }*/
/*                                 },*/
/*                                 threshold: null*/
/*                             }*/
/*                         },*/
/*                         series: [{*/
/*                                 */
/*                                 type: 'area',*/
/*                                 name: 'USD to EUR',*/
/*                                 data: data*/
/*                             }]*/
/*                     });*/
/*                 });*/
/*             });*/
/*             */
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
