<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_2008e62e4dd48fd373755c2af14edc68bfe15c9ca3b00c43ce0a959f1cf6da67 extends Twig_Template
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
        $__internal_b0620c1b5b507e950cc1f0fdd028f154a6b1d1f0c3ba7ff0b296b2740a7dfbc9 = $this->env->getExtension("native_profiler");
        $__internal_b0620c1b5b507e950cc1f0fdd028f154a6b1d1f0c3ba7ff0b296b2740a7dfbc9->enter($__internal_b0620c1b5b507e950cc1f0fdd028f154a6b1d1f0c3ba7ff0b296b2740a7dfbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b0620c1b5b507e950cc1f0fdd028f154a6b1d1f0c3ba7ff0b296b2740a7dfbc9->leave($__internal_b0620c1b5b507e950cc1f0fdd028f154a6b1d1f0c3ba7ff0b296b2740a7dfbc9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
