<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_72bb6e83f026f9d67c6859b0e36b9c62e51305fbfa22e6c5e7da84e62a76add2 extends Twig_Template
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
        $__internal_06c772fc7c3e0fee9d9415285c50b7060de7a32bff649a41383d9bcee696ee84 = $this->env->getExtension("native_profiler");
        $__internal_06c772fc7c3e0fee9d9415285c50b7060de7a32bff649a41383d9bcee696ee84->enter($__internal_06c772fc7c3e0fee9d9415285c50b7060de7a32bff649a41383d9bcee696ee84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_06c772fc7c3e0fee9d9415285c50b7060de7a32bff649a41383d9bcee696ee84->leave($__internal_06c772fc7c3e0fee9d9415285c50b7060de7a32bff649a41383d9bcee696ee84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
