<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_2d15c187eb8c1a55e14eaa4881e12f52a2d22c11ba9f410bb42e1bad5294008b extends Twig_Template
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
        $__internal_7f7d0a99bada65daa11f5b512ccaef6a37ca9c8afcbc9f472c2d6eda99afebc6 = $this->env->getExtension("native_profiler");
        $__internal_7f7d0a99bada65daa11f5b512ccaef6a37ca9c8afcbc9f472c2d6eda99afebc6->enter($__internal_7f7d0a99bada65daa11f5b512ccaef6a37ca9c8afcbc9f472c2d6eda99afebc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_7f7d0a99bada65daa11f5b512ccaef6a37ca9c8afcbc9f472c2d6eda99afebc6->leave($__internal_7f7d0a99bada65daa11f5b512ccaef6a37ca9c8afcbc9f472c2d6eda99afebc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
