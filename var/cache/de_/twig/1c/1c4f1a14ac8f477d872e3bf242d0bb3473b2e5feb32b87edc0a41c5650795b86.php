<?php

/* GMProjetBundle:Depense:modif.html.twig */
class __TwigTemplate_5e43454c3f98da1790ba1dc157ccc949dec17debf38d108bae2bfa47e00964e9 extends Twig_Template
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
        $__internal_bca05035f0d598645c96cac60aaba71bd4f56770615585378b392f04a0ed538c = $this->env->getExtension("native_profiler");
        $__internal_bca05035f0d598645c96cac60aaba71bd4f56770615585378b392f04a0ed538c->enter($__internal_bca05035f0d598645c96cac60aaba71bd4f56770615585378b392f04a0ed538c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GMProjetBundle:Depense:modif.html.twig"));

        // line 1
        echo "<div class=\"panel-body\" > 
 ";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start', array("method" => "post", "enctype" => "multipart/form-data", "action" => $this->env->getExtension('routing')->getPath("gm_projet_ajout"), "attr" => array("class" => "form-horizontal modifFee")));
        echo "
    <table class=\"table table-condensed\" >
                  <tr>
                    <td> Designation</td>
                    <td> ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "designation", array()), 'widget', array("attr" => array("class" => "form-control", "autofocus" => "autofocus")));
        echo " </td>
                    <td align=\"center\"> Montant</td>
                    <td> 
                       <section class=\"row\">
                          <div class=\"col-sm-8\">
                              ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "montant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                          </div>
                           <div class=\"col-sm-4\">
                              ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "unite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                          </div>
                      </section>  
                    </td>
                  </tr>
                  <tr>
                    <td> Date</td>
                    <td> ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " </td>
                    <td align=\"center\"> Pièce</td>
                    <td> ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "piece", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " </td>
                  </tr>
                   <tr>
                    <td> Description</td>
                    <td> ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "infoCom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " </td>
                    <td> </td>
                    <td style=\"vertical-align: bottom\">
                        <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success\" />
                        <span class=\"results\"> </span>
                        <input type=\"hidden\" name=\"id\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "vars", array()), "value", array()), "id", array()), "html", null, true);
        echo "\" >
                    </td>
                
                  </tr>
                  <tr>
                       <td>
                           <button class=\"fermer\" style=\"background-color: inherit\"> <i class=\"fa fa-close\" aria-hidden=\"true\"></i> </button> 
                       </td>
                  </tr>
    </table>
                
  ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "

</div>";
        
        $__internal_bca05035f0d598645c96cac60aaba71bd4f56770615585378b392f04a0ed538c->leave($__internal_bca05035f0d598645c96cac60aaba71bd4f56770615585378b392f04a0ed538c_prof);

    }

    public function getTemplateName()
    {
        return "GMProjetBundle:Depense:modif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 43,  76 => 32,  68 => 27,  61 => 23,  56 => 21,  46 => 14,  40 => 11,  32 => 6,  25 => 2,  22 => 1,);
    }
}
/* <div class="panel-body" > */
/*  {{form_start(f, {'method': 'post', 'enctype': 'multipart/form-data', 'action': path('gm_projet_ajout'), 'attr': { 'class': 'form-horizontal modifFee' } })}}*/
/*     <table class="table table-condensed" >*/
/*                   <tr>*/
/*                     <td> Designation</td>*/
/*                     <td> {{form_widget(f.designation, {'attr': {'class': 'form-control',  'autofocus':'autofocus'} })}} </td>*/
/*                     <td align="center"> Montant</td>*/
/*                     <td> */
/*                        <section class="row">*/
/*                           <div class="col-sm-8">*/
/*                               {{form_widget(f.montant, {'attr': {'class': 'form-control'} })}}*/
/*                           </div>*/
/*                            <div class="col-sm-4">*/
/*                               {{form_widget(f.unite, {'attr': {'class': 'form-control'} })}} */
/*                           </div>*/
/*                       </section>  */
/*                     </td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td> Date</td>*/
/*                     <td> {{form_widget(f.date, {'attr': {'class': 'form-control'} })}} </td>*/
/*                     <td align="center"> Pièce</td>*/
/*                     <td> {{form_widget(f.piece, {'attr': {'class': 'form-control'} })}} </td>*/
/*                   </tr>*/
/*                    <tr>*/
/*                     <td> Description</td>*/
/*                     <td> {{form_widget(f.infoCom, {'attr': {'class': 'form-control'} })}} </td>*/
/*                     <td> </td>*/
/*                     <td style="vertical-align: bottom">*/
/*                         <input type="submit" value="Enregistrer" class="btn btn-success" />*/
/*                         <span class="results"> </span>*/
/*                         <input type="hidden" name="id" value="{{ f.vars.value.id }}" >*/
/*                     </td>*/
/*                 */
/*                   </tr>*/
/*                   <tr>*/
/*                        <td>*/
/*                            <button class="fermer" style="background-color: inherit"> <i class="fa fa-close" aria-hidden="true"></i> </button> */
/*                        </td>*/
/*                   </tr>*/
/*     </table>*/
/*                 */
/*   {{form_end(f)}}*/
/* */
/* </div>*/
