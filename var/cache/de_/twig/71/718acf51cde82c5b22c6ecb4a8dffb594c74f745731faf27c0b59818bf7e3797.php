<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_73893e832fde70feacda52214b3667251b0151a02752f9b3616db380e911288b extends Twig_Template
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
        $__internal_7b5168658d385617026f8d647f94dca20886eb8eebf089a1b37c6a69d13d23cb = $this->env->getExtension("native_profiler");
        $__internal_7b5168658d385617026f8d647f94dca20886eb8eebf089a1b37c6a69d13d23cb->enter($__internal_7b5168658d385617026f8d647f94dca20886eb8eebf089a1b37c6a69d13d23cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7b5168658d385617026f8d647f94dca20886eb8eebf089a1b37c6a69d13d23cb->leave($__internal_7b5168658d385617026f8d647f94dca20886eb8eebf089a1b37c6a69d13d23cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
